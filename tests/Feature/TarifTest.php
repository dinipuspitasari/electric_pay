<?php

namespace Tests\Unit;

use App\Models\Level;
use App\Models\Tarif;
use App\Models\User;
use Database\Seeders\LevelSeeder;
use Database\Seeders\TarifSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TarifTest extends TestCase
{
    use RefreshDatabase;

    protected $adminUser;
    protected function setUp(): void
    {
        parent::setUp();
        // $this->seed();

        $this->seed(LevelSeeder::class);
        $adminLevelID = Level::where('nama_level', 'Administrator')->first()->id;
        $this->adminUser = User::factory()->create(['id_level' => $adminLevelID]);
        $this->actingAs($this->adminUser);
    }

    /** @test */
    public function it_can_read_tarif_data()
    {
        $tarif = Tarif::factory()->count(5)->create();

        $this->assertCount(5, $tarif);
    }

    /** @test */
    public function it_can_create_tarif()
{
    $tarif = [
        'daya' => 900,
        'tarifperkwh' => 1352,
    ];

    //post data ke tarif
    $response = $this->post('/tarif/create', $tarif);

    //assert the response
    $response->assertRedirect('tarif');

    // Debugging
    $this->assertDatabaseHas('tarif', $tarif);
}

    /** @test */
    public function it_can_update_tarif()
{
    $tarif = Tarif::factory()->create();

    $updateData = [
        'daya' => 900,
        'tarifperkwh' => 1352,
    ];

    $response = $this->post("/tarif/update/{$tarif->id}", $updateData);

    $response->assertRedirect('tarif'); // Pastikan redirect
    $this->assertDatabaseHas('tarif', $updateData);
}

    /** @test */
    public function it_can_delete_tarif()
    {
        $tarif = Tarif::factory()->create();

        $response = $this->get("/tarif/delete/{$tarif->id}");

        $response->assertRedirect('tarif'); // Pastikan redirect
        $this->assertSoftDeleted('tarif', ['id' => $tarif->id]);
    }
}
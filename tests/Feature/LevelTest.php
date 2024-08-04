<?php

namespace Tests\Unit;

use App\Models\Level;
use App\Models\Tarif;
use App\Models\User;
use Database\Seeders\LevelSeeder;
use Database\Seeders\TarifSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
class LevelTest extends TestCase
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
       public function it_can_list_all_levels()
       {
            $level = Level::factory()->count(2)->create();

            $this->assertCount(2, $level);
       }
}

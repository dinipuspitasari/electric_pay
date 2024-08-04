<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class UsersTableTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test if the users table has expected columns.
     *
     * @return void
     */
    public function testUsersTableHasExpectedColumns()
    {
        $this->assertTrue(Schema::hasColumn('users', 'id'));
        $this->assertTrue(Schema::hasColumn('users', 'id_level'));
        $this->assertTrue(Schema::hasColumn('users', 'name'));
        $this->assertTrue(Schema::hasColumn('users', 'email'));
        $this->assertTrue(Schema::hasColumn('users', 'email_verified_at'));
        $this->assertTrue(Schema::hasColumn('users', 'password'));
        $this->assertTrue(Schema::hasColumn('users', 'remember_token'));
        $this->assertTrue(Schema::hasColumn('users', 'current_team_id'));
        $this->assertTrue(Schema::hasColumn('users', 'profile_photo_path'));
        $this->assertTrue(Schema::hasColumn('users', 'created_at'));
        $this->assertTrue(Schema::hasColumn('users', 'updated_at'));
    }
}
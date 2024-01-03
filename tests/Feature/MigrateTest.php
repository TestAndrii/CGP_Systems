<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\UserImage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MigrateTest extends TestCase
{
    use RefreshDatabase;

    public function test_factory_user_userImage(): void
    {
        $user = User::factory()->create();
        $userImage = UserImage::factory()->create([
            'user_id' => $user->id,
        ]);
        $this->assertModelExists($userImage);
    }
    public function test_delete_user_userImage(): void
    {
        $user = User::factory()->create();
        $userImage = UserImage::factory()->create([
            'user_id' => $user->id,
        ]);
        $user->delete();
        $this->assertModelMissing($userImage);
    }

}
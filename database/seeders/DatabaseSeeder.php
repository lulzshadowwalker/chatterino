<?php

namespace Database\Seeders;

use App\Models\Chat;
use App\Models\Message;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = User::factory(10)->create();

        Chat::factory(30)
            ->has(
                Message::factory(10)
                    ->state(function (array $attributes, Chat $chat) use ($users) {
                        return [
                            'user_id' => $users->random()->id,
                            'chat_id' => $chat->id,
                        ];
                    })
            )
            ->create()
            ->each(function (Chat $chat) use ($users) {
                // Attach 2-5 random users to each chat
                $chat->participants()->attach(
                    $users->random(rand(2, 5))->pluck('id')->toArray()
                );
            });
    }
}

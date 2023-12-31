<?php

namespace Database\Seeders;

use App\Models\TimeEntry;
use App\Models\User;
use Illuminate\Database\Seeder;

class TimeEntrySeeder extends Seeder
{
    public function run(): void
    {
        foreach (User::all() as $user){
            TimeEntry::factory()->for($user)->create();
        }
    }
}

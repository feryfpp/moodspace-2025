<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MoodLog;
use App\Models\User;

class MoodLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $user = User::first(); // pastikan ada user

        $moods = ['happy', 'sad', 'angry', 'anxious', 'neutral'];

        foreach (range(1, 10) as $i) {
            MoodLog::create([
                'user_id' => $user->id,
                'date' => now()->subDays(10 - $i),
                'mood' => $moods[array_rand($moods)],
                'note' => 'Catatan mood hari ke-' . $i,
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Journal;
use App\Models\User;

class JournalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();

        foreach (range(1, 10) as $i) {
            Journal::create([
                'user_id' => $user->id,
                'title' => "Jurnal Hari ke-$i",
                'content' => "Ini isi jurnal hari ke-$i. Refleksi pribadi...",
                'date' => now()->subDays(10 - $i),
            ]);
        }
    }
}

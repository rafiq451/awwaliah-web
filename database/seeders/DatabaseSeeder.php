<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Pendidikan;
use App\Models\SejarahYayasan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        // SejarahYayasan::factory()->create([
        //     'gambar' => 'tesmpng',
        //     'sejarah' => 'blablablablabla',
        //     'kurikulum' => 'tes',
        // ]);
    }
}

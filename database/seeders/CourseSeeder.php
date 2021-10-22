<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('courses')->insert([
            'name' => 'Web Development',
            'code' => 'IMT2008',
            'lecturer' => 'Dipl.-Inf. Laura Mahendratta Tjahjono; Evan Tanuwijaya, S.Kom., M.Kom.',
            'sks' => 4,
            'description' => 'Learn more advanced about Web Development',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('courses')->insert([
            'name' => 'Mobile Application Development',
            'code' => 'IMT2009',
            'lecturer' => 'Mychael Maoeretz Engel, S.Kom., M.Cs.',
            'sks' => 4,
            'description' => 'An advanced learning for Mobile App Development',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('courses')->insert([
            'name' => 'Database',
            'code' => 'IMT2010',
            'lecturer' => 'Dipl.-Inf. Laura Mahendratta Tjahjono',
            'sks' => 4,
            'description' => 'Learn about advanced Database learning',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('courses')->insert([
            'name' => 'Discrete Mathematics',
            'code' => 'IMT2011',
            'lecturer' => 'Caecilia Citra Lestari, S.Kom., M.Kom.',
            'sks' => 3,
            'description' => 'Learn about Discrete Mathematics',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('courses')->insert([
            'name' => 'Game Design',
            'code' => 'IMT2012',
            'lecturer' => 'Mychael Maoeretz Engel, S.Kom., M.Cs.; Januar Tanzil, S.Kom.',
            'sks' => 3,
            'description' => 'Learn about Designing a game',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('courses')->insert([
            'name' => 'Becoming Indonesia',
            'code' => 'UNC2011',
            'lecturer' => 'Yogi Ishabib',
            'sks' => 3,
            'description' => 'Learn about Indonesian history',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}

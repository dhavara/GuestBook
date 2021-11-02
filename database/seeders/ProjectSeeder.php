<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('projects')->insert([
            'code' => 'cal',
            'project' => 'Calculator',
            'description' => 'My Very FIRST projects',
            'semester' => 'ODD',
            'mata_kuliah' => 'IMT2008',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('projects')->insert([
            'code' => 'acc',
            'project' => 'Accounting',
            'description' => 'Lorem ipsum dolor sit amet',
            'semester' => 'EVEN',
            'mata_kuliah' => 'IMT2009',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('projects')->insert([
            'code' => 'stu',
            'project' => 'Student Report',
            'description' => 'Lorem ipsum dolor sit amet',
            'semester' => 'ODD',
            'mata_kuliah' => 'IMT2010',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('projects')->insert([
            'code' => 'pos',
            'project' => 'POS Resto',
            'description' => 'Lorem ipsum dolor sit amet',
            'semester' => 'EVEN',
            'mata_kuliah' => 'IMT2011',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('projects')->insert([
            'code' => 'onl',
            'project' => 'Online Store',
            'description' => 'Lorem ipsum dolor sit amet',
            'semester' => 'ODD',
            'mata_kuliah' => 'IMT2012',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('projects')->insert([
            'code' => 'pet',
            'project' => 'Pet Shop',
            'description' => 'My LAST Project',
            'semester' => 'EVEN',
            'mata_kuliah' => 'UNC2011',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StaffTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('staff')->delete();
        
        \DB::table('staff')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2021-12-20 19:56:47',
                'updated_at' => '2021-12-20 19:56:47',
                'name' => 'RAJA FENINFERINA BINTI RAJA AZMAN, MRS.',
                'designation' => 'Consultancy project',
                'address' => 'Department of Computing (CCI)',
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2021-12-20 19:00:51',
                'updated_at' => '2021-12-20 19:00:51',
                'name' => 'MOHD HAZLI BIN MOHAMED ZABIL, TS. DR.',
                'designation' => 'Consultancy project',
                'address' => 'Department of Computing (CCI)',
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => '2021-12-20 19:56:59',
                'updated_at' => '2021-12-20 19:56:59',
                'name' => 'FARIDAH HANI BTE MOHAMED SALLEH, TS. DR.',
                'designation' => 'Research project',
                'address' => 'Department of Computing (CCI)',
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => '2021-12-20 19:56:54',
                'updated_at' => '2021-12-20 19:56:54',
                'name' => 'NORZIANA BINTI JAMIL, ASSOC. PROF. TS. DR.',
                'designation' => 'Research project',
                'address' => 'Department of Computing (CCI)',
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => '2021-12-20 19:56:51',
                'updated_at' => '2021-12-20 19:56:51',
                'name' => 'LIM KOK CHENG, TS.',
                'designation' => 'Consultancy project',
                'address' => 'Department of Computing (CCI)',
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => '2021-12-20 19:56:47',
                'updated_at' => '2021-12-20 19:56:47',
                'name' => 'MOAMIN A MAHMOUD, DR.',
                'designation' => 'Research project',
                'address' => 'Department of Computing (CCI)',
            ),
        ));
        
        
    }
}
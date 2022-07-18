<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class Staff extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Staff = [
            ['staffNo' => 'SI21', 'sName' => 'John White', 'position' => 'Manager', 'salary' => '30000', 'branchNo' => 'B005'],
            ['staffNo' => 'SG37', 'sName' => 'Ann Beech', 'position' => 'Assistant', 'salary' => '12000', 'branchNo' => 'B003'],
            ['staffNo' => 'SG14', 'sName' => 'David Ford', 'position' => 'Supervisor', 'salary' => '18000', 'branchNo' => 'B003'],
            ['staffNo' => 'SA9', 'sName' => 'Marry Howe', 'position' => 'Assistant', 'salary' => '9000', 'branchNo' => 'B007'],
            ['staffNo' => 'SG5', 'sName' => 'Susan Brand', 'position' => 'Manager', 'salary' => '24000', 'branchNo' => 'B003'],
            ['staffNo' => 'SI41', 'sName' => 'Julie Lee', 'position' => 'Assistant', 'salary' => '9000', 'branchNo' => 'B005'],
        ];
        DB::table('Staff')->insert($Staff);
    }
}

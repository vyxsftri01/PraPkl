<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class staffbranch extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $staffbranch = [
            ['staffNo' => 'SI21', 'sName' => 'John White', 'position' => 'Manager', 'salary' => '30000', 'branchNo' => 'B005', 'bAddress' => '22 Deer Rd,London'],
            ['staffNo' => 'SG37', 'sName' => 'Ann Beech', 'position' => 'Assistant', 'salary' => '12000', 'branchNo' => 'B003', 'bAddress' => '163 Main St,Glasgow'],
            ['staffNo' => 'SG14', 'sName' => 'David Ford', 'position' => 'Supervisor', 'salary' => '18000', 'branchNo' => 'B003', 'bAddress' => '163 Main St,Glasgow'],
            ['staffNo' => 'SA9', 'sName' => 'Marry Howe', 'position' => 'Assistant', 'salary' => '9000', 'branchNo' => 'B007', 'bAddress' => '16 Argyll St,Aberdeen'],
            ['staffNo' => 'SG5', 'sName' => 'Susan Brand', 'position' => 'Manager', 'salary' => '24000', 'branchNo' => 'B003', 'bAddress' => '163 Main St,Glasgow'],
            ['staffNo' => 'SI41', 'sName' => 'Julie Lee', 'position' => 'Assistant', 'salary' => '9000', 'branchNo' => 'B005', 'bAddress' => '22 Deer Rd,London'],
        ];
        DB::table('staffbranch')->insert($staffbranch);
    }
}

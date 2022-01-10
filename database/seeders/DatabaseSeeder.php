<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $status1 = new Status(); 
        $status1->description = "ToDo";
        $status1->save();

        $status1 = new Status(); 
        $status1->description = "InProgress";
        $status1->save();

        $status1 = new Status(); 
        $status1->description = "Done";
        $status1->save();



    }
}

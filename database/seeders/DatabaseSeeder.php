<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Area;
use App\Models\Condition;
use Illuminate\Database\Seeder;

//use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Str;

use App\Models\User;
use App\Models\Course;
use App\Models\Degree;
use App\Models\Level;
use App\Models\Period;
use App\Models\Student;
use App\Models\Proxie;
use App\Models\Role;
use App\Models\Section;
use App\Models\Turn;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(50)->create();
        Course::factory(50)->create();
        Role::factory(50)->create();
        Period::factory(50)->create();
        Section::factory(50)->create();
        Degree::factory(50)->create();
        Level::factory(50)->create();
        Turn::factory(50)->create();
        Area::factory(50)->create();
        Condition::factory(50)->create();
        Student::factory(50)->create();
        Proxie::factory(50)->create();
    }
}

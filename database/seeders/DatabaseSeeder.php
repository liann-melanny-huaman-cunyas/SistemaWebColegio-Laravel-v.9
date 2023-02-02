<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use Illuminate\Database\Seeder;

//use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Str;

use App\Models\User;
use App\Models\Courses;
use App\Models\Roles;
use App\Models\Periods;
use App\Models\Sections;
use App\Models\Degrees;
use App\Models\Levels;
use App\Models\Turns;
use App\Models\Areas;
use App\Models\Conditions;
use App\Models\Students;
use App\Models\Proxies;

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
        Courses::factory(50)->create();
        Roles::factory(50)->create();
        Periods::factory(50)->create();
        Sections::factory(50)->create();
        Degrees::factory(50)->create();
        Levels::factory(50)->create();
        Turns::factory(50)->create();
        Areas::factory(50)->create();
        Conditions::factory(50)->create();
        Students::factory(50)->create();
        Proxies::factory(50)->create();
    }
}

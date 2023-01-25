<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleSeeder extends Seeder
{
   
    public function run()
    {
      for($i = 0; $i < 50; $i++)
      {
        DB::table('people')->insert([
            'name'=> Str::random(15);
            'surname'=> Str::random(20);
            'telephone-number'=> rand(100000000,999999999);
            'street'=> Str::random(15);
            'town'=> Str::random(15);
        ])
      }
    }
}
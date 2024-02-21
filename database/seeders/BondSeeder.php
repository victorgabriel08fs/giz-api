<?php

namespace Database\Seeders;

use App\Models\Bond;
use App\Models\Career;
use App\Models\Discipline;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BondSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bond::create(['career_id'=>Career::where('name','Sistemas de Informação')->get()->first()->id,'user_id'=>1,'type'=>'student']);
    }
}

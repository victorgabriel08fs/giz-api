<?php

namespace Database\Seeders;

use App\Models\Discipline;
use App\Models\Exercise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $disciplines = Discipline::all();
        foreach($disciplines as $discipline){
            Exercise::create(['name'=>"Prova 1","points"=>35,"discipline_id"=>$discipline->id]);
            Exercise::create(['name'=>"Prova 2","points"=>35,"discipline_id"=>$discipline->id]);
            Exercise::create(['name'=>"Prova 3","points"=>30,"discipline_id"=>$discipline->id]);
        }
    }
}

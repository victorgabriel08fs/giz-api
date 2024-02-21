<?php

namespace Database\Seeders;

use App\Models\Career;
use App\Models\Discipline;
use App\Models\Registration;
use App\Models\Semester;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegistrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sistemas_de_informacao = Career::where('name', 'Sistemas de Informação')->get()->first();
        $disciplinas = Discipline::where('period', 4)->whereRelation('career', 'id', $sistemas_de_informacao->id)->where('semester_id', Semester::orderBy('reference', 'desc')->get()->first()->id)->get();
        foreach (User::role('student')->get() as $aluno) {
            foreach ($disciplinas as $disciplina) {
                Registration::create(['discipline_id' => $disciplina->id, 'user_id' => $aluno->id]);
            }
        }
    }
}

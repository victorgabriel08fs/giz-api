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
        $enfermagem = Career::where('name', 'Enfermagem')->get()->first();

        $disciplinas_sistemas = Discipline::where('period', 4)->where('career_id', $sistemas_de_informacao->id)
            ->where('semester_id', Semester::orderBy('reference', 'desc')->get()->first()->id)->get();
        $disciplinas_enfermagem = Discipline::where('period', 5)->where('career_id', $enfermagem->id)
            ->where('semester_id', Semester::orderBy('reference', 'desc')->get()->first()->id)->get();
        $cursos = [$disciplinas_sistemas, $disciplinas_enfermagem];
        foreach (User::role('student')->get() as $aluno) {
            if ($aluno->bonds)
                foreach ($cursos as $curso) {
                    foreach ($curso as $disciplina) {
                        Registration::create(['discipline_id' => $disciplina->id, 'user_id' => $aluno->id]);
                    }
                }
        }
    }
}

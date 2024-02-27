<?php

namespace Database\Seeders;

use App\Models\Career;
use App\Models\Discipline;
use App\Models\DisciplineSchedule;
use App\Models\Semester;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DisciplineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $semestre = Semester::orderBy('reference', 'desc')->get()->first();
        $sistemas_de_informação = Career::where('name', 'Sistemas de Informação')->get()->first();
        $enfermagem = Career::where('name', 'Enfermagem')->get()->first();
        $sistemas_de_informação_disciplinas = array(
            [array("workload" => 36, "name" => "AEDS I", "period" => "1", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id), [['day' => 1, 'order' => 1], ['day' => 2, 'order' => 1], ['day' => 3, 'order' => 1]]],
            [array("workload" => 36, "name" => "Administração", "period" => "1", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "Computação e Sociedade", "period" => "1", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "Fundamentos de SI", "period" => "1", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "Inglês I", "period" => "1", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "Introdução à Computação", "period" => "1", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "Matemática Computacional", "period" => "1", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "Português", "period" => "1", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "AEDS II", "period" => "2", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "Arquitetura", "period" => "2", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "Cálculo", "period" => "2", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "GAAL", "period" => "2", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "Inglês II", "period" => "2", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "Metodologia Científica", "period" => "2", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "Probabilidade e Estatística", "period" => "2", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "Teoria Geral dos Sistemas", "period" => "2", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "Banco de Dados I", "period" => "3", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "Engenharia de Software I", "period" => "3", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "Cálculo Numérico", "period" => "3", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "Gestão da Informação", "period" => "3", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "Grafos", "period" => "3", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "Programação I", "period" => "3", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "SIG", "period" => "3", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "Teoria da Computação", "period" => "3", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 72, "name" => "Banco de Dados II", "period" => "4", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id), [['day' => 1, 'order' => 2], ['day' => 3, 'order' => 2]]],
            [array("workload" => 72, "name" => "Engenharia de Software II", "period" => "4", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id),[['day' => 5, 'order' => 2], ['day' => 5, 'order' => 3]]],
            [array("workload" => 72, "name" => "Gestão Financeira", "period" => "4", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id),[['day' => 2, 'order' => 3], ['day' => 3, 'order' => 3]]],
            [array("workload" => 72, "name" => "IHC", "period" => "4", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id),[['day' => 2, 'order' => 2], ['day' => 4, 'order' => 2]]],
            [array("workload" => 36, "name" => "Marketing em Informática", "period" => "4", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id),[['day' => 1, 'order' => 1]]],
            [array("workload" => 72, "name" => "Programação II", "period" => "4", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id),[['day' => 3, 'order' => 1], ['day' => 5, 'order' => 1]]],
            [array("workload" => 72, "name" => "Redes de Computadores", "period" => "4", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id), [['day' => 2, 'order' => 1], ['day' => 4, 'order' => 1]]],
            [array("workload" => 72, "name" => "Sistemas Operacionais", "period" => "4", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id),[['day' => 1, 'order' => 3], ['day' => 4, 'order' => 3]]],
            [array("workload" => 36, "name" => "Qualidade de Software", "period" => "5", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "Pesquisa Operacional", "period" => "5", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "Computação Gráfica", "period" => "5", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "Desenvolvimento Web", "period" => "5", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "Comunicação de Dados", "period" => "5", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "Sistemas Distribuídos I", "period" => "5", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "Inteligência Artificial", "period" => "6", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "Gerência de Projeto de Software", "period" => "6", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "Psicologia Organizacional", "period" => "6", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "PTCC", "period" => "6", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "Optativa I", "period" => "6", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "Sistemas Distribuídos II", "period" => "6", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "Gestão de Processos", "period" => "7", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "Empreendedorismo na Informática", "period" => "7", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "Economia e Finanças", "period" => "7", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "TCC I", "period" => "7", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "Optativa II", "period" => "7", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "Sistemas de Apoio a Decisão", "period" => "7", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "Segurança e Auditoria", "period" => "8", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "Legislação e Ética", "period" => "8", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "Sociologia", "period" => "8", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "Filosofia e Ética", "period" => "8", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "TCC II", "period" => "8", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "Optativa III", "period" => "7", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
            [array("workload" => 36, "name" => "Optativa IV", "period" => "7", "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $sistemas_de_informação->id)],
        );

        $enfermagem_disciplinas = array(
            [array("workload" => 36, "name" => "Atenção Integral a Mulher", "period" => 5, "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $enfermagem->id)],
            [array("workload" => 36, "name" => "Atenção Integral ao Recém-Ndescido", "period" => 5, "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $enfermagem->id)],
            [array("workload" => 36, "name" => "Bioética", "period" => 5, "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $enfermagem->id)],
            [array("workload" => 36, "name" => "Leitura de Exames", "period" => 5, "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $enfermagem->id)],
            [array("workload" => 36, "name" => "Gestão em Saúde", "period" => 5, "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $enfermagem->id)],
            [array("workload" => 36, "name" => "Produção do conhecimento aplicado à Enfermagem", "period" => 5, "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $enfermagem->id)],
            [array("workload" => 36, "name" => "Atividades Práticas na Atenção Primária a Saúde", "period" => 5, "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $enfermagem->id)],
            [array("workload" => 36, "name" => "Atividades Práticas Serviços de Referência", "period" => 5, "semester_id" => $semestre->id, "teacher_id" => User::role('teacher')->inRandomOrder()->first()->id, "career_id" => $enfermagem->id)],
        );
        $cursos = [$sistemas_de_informação_disciplinas, $enfermagem_disciplinas];
        foreach ($cursos as $curso) {
            foreach ($curso as $itens) {
                $disciplina = Discipline::create($itens[0]);
                if (isset($itens[1])) {
                    DisciplineSchedule::create(['discipline_id' => $disciplina->id, 'items' => $itens[1]]);
                }
            }
        }
        function randomScheduleGenerate($disciplina)
        {
            $aulas = (int)$disciplina->workload / 36;
            $arr = [];
            for ($i = 0; $i < $aulas; $i++) {
                array_push($arr, ['day' => rand(1, 5), 'order' => rand(1, 3)]);
            }
            $already = DisciplineSchedule::whereRelation('discipline', 'period', $disciplina->period)->whereRelation('discipline', 'semester_id', $disciplina->semester_id)->whereRelation('discipline', 'career_id', $disciplina->career_id)->where(function ($query) use ($arr) {
                foreach ($arr as $item) {
                    $query->orWhere(function ($query) use ($item) {
                        $query->whereJsonContains('items', ['day' => $item['day']]);
                        $query->whereJsonContains('items', ['order' => $item['order']]);
                    });
                }
            })->exists();
            if (!$already) {
                return $arr;
            } else {
                return false;
            }
        }
        foreach (Discipline::all() as $disciplina) {
            $randomSchedule = randomScheduleGenerate($disciplina);
            if (!$randomSchedule) {
                $randomSchedule = randomScheduleGenerate($disciplina);
            }
            if ($randomSchedule && !$disciplina->schedule)
                DisciplineSchedule::create(['discipline_id' => $disciplina->id, 'items' => $randomSchedule]);
        }
    }
}

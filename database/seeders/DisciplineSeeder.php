<?php

namespace Database\Seeders;

use App\Models\Career;
use App\Models\Discipline;
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

        $sistemas_de_informação = array(
            array("name" => "AEDS I", "period" => "1", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Administração", "period" => "1", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Computação e Sociedade", "period" => "1", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Fundamentos de SI", "period" => "1", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Inglês I", "period" => "1", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Introdução à Computação", "period" => "1", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Matemática Computacional", "period" => "1", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Português", "period" => "1", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "AEDS II", "period" => "2", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Arquitetura", "period" => "2", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Cálculo", "period" => "2", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "GAAL", "period" => "2", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Inglês II", "period" => "2", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Metodologia Científica", "period" => "2", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Probabilidade e Estatística", "period" => "2", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Teoria Geral dos Sistemas", "period" => "2", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Banco de Dados I", "period" => "3", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Engenharia de Software I", "period" => "3", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Cálculo Numérico", "period" => "3", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Gestão da Informação", "period" => "3", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Grafos", "period" => "3", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Programação I", "period" => "3", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "SIG", "period" => "3", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Teoria da Computação", "period" => "3", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Banco de Dados II", "period" => "4", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Engenharia de Software II", "period" => "4", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Gestão Financeira", "period" => "4", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "IHC", "period" => "4", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Marketing", "period" => "4", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Programação II", "period" => "4", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Redes", "period" => "4", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Sistemas Operacionais", "period" => "4", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Qualidade de Software", "period" => "5", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Pesquisa Operacional", "period" => "5", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Computação Gráfica", "period" => "5", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Desenvolvimento Web", "period" => "5", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Comunicação de Dados", "period" => "5", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Sistemas Distribuídos I", "period" => "5", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Inteligência Artificial", "period" => "6", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Gerência de Projeto de Software", "period" => "6", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Psicologia Organizacional", "period" => "6", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "PTCC", "period" => "6", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Optativa I", "period" => "6", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Sistemas Distribuídos II", "period" => "6", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Gestão de Processos", "period" => "7", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Empreendedorismo na Informática", "period" => "7", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Economia e Finanças", "period" => "7", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "TCC I", "period" => "7", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Optativa II", "period" => "7", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Sistemas de Apoio a Decisão", "period" => "7", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Segurança e Auditoria", "period" => "8", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Legislação e Ética", "period" => "8", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Sociologia", "period" => "8", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Filosofia e Ética", "period" => "8", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "TCC II", "period" => "8", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Optativa III", "period" => "7", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
            array("name" => "Optativa IV", "period" => "7", "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Sistemas de Informação')->get()->first()->id),
        );

        $enfermagem = array(
            array("name" => "Atenção Integral a Mulher", "period" => 5, "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Enfermagem')->get()->first()->id),
            array("name" => "Atenção Integral ao Recém-Nascido", "period" => 5, "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Enfermagem')->get()->first()->id),
            array("name" => "Bioética", "period" => 5, "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Enfermagem')->get()->first()->id),
            array("name" => "Leitura de Exames", "period" => 5, "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Enfermagem')->get()->first()->id),
            array("name" => "Gestão em Saúde", "period" => 5, "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Enfermagem')->get()->first()->id),
            array("name" => "Produção do conhecimento aplicado à Enfermagem", "period" => 5, "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Enfermagem')->get()->first()->id),
            array("name" => "Atividades Práticas na Atenção Primária a Saúde", "period" => 5, "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Enfermagem')->get()->first()->id),
            array("name" => "Atividades Práticas Serviços de Referência", "period" => 5, "semester_id" => Semester::orderBy('reference', 'desc')->get()->first()->id, "teacher_id" => User::inRandomOrder()->first()->id, "career_id" => Career::where('name', 'Enfermagem')->get()->first()->id),
        );
        $cursos = [$sistemas_de_informação, $enfermagem];
        foreach ($cursos as $curso) {
            foreach ($curso as $disciplina) {
                Discipline::create($disciplina);
            }
        }
    }
}

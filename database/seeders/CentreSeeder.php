<?php

namespace Database\Seeders;

use App\Models\Centre;
use App\Models\University;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CentreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $unimontes = University::where("acronym", "UNIMONTES")->get()->first();
        $centros = [
            ["name" => "Centro de Ciências Agrárias ", "acronym" => "CCA", "university_id" => $unimontes->id],
            ["name" => "Centro de Ciências Biológicas e da Saúde ", "acronym" => "CCBS", "university_id" => $unimontes->id],
            ["name" => "Centro de Ciências Humanas ", "acronym" => "CCH", "university_id" => $unimontes->id],
            ["name" => "Centro de Ciências Sociais Aplicadas ", "acronym" => "CCSA", "university_id" => $unimontes->id],
            ["name" => "Centro de Ciências Exatas e Tecnológicas ", "acronym" => "CCET", "university_id" => $unimontes->id],
            ["name" => "Centro de Educação ", "acronym" => "CE", "university_id" => $unimontes->id],
            ["name" => "Centro de Letras e Artes ", "acronym" => "CLA", "university_id" => $unimontes->id],
            ["name" => "Instituto de Ciências Sociais Aplicadas ", "acronym" => "ICSA", "university_id" => $unimontes->id],
            ["name" => "Instituto de Geociências e Meio Ambiente ", "acronym" => "IGEMA", "university_id" => $unimontes->id]
        ];

        foreach ($centros as $centro) {
            Centre::create($centro);
        }
    }
}

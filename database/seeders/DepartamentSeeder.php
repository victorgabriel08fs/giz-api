<?php

namespace Database\Seeders;

use App\Models\Centre;
use App\Models\Departament;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $centres = Centre::get();
        $departamentos = [
            // Centro de Ciências Agrárias (CCA)
            ["name" => "Departamento de Ciências Agrárias", "acronym" => "DCA", "centre_id" => $centres->where('acronym', "CCA")->first()->id],
            ["name" => "Departamento de Engenharia Agrícola", "acronym" => "DEA", "centre_id" => $centres->where('acronym', "CCA")->first()->id],
            ["name" => "Departamento de Zootecnia", "acronym" => "DZ", "centre_id" => $centres->where('acronym', "CCA")->first()->id],

            // Centro de Ciências Biológicas e da Saúde (CCBS)
            ["name" => "Departamento de Biologia", "acronym" => "DBIO", "centre_id" => $centres->where('acronym', "CCBS")->first()->id],
            ["name" => "Departamento de Educação Física", "acronym" => "DEF", "centre_id" => $centres->where('acronym', "CCBS")->first()->id],
            ["name" => "Departamento de Enfermagem", "acronym" => "DENF", "centre_id" => $centres->where('acronym', "CCBS")->first()->id],
            ["name" => "Departamento de Farmácia", "acronym" => "DFAR", "centre_id" => $centres->where('acronym', "CCBS")->first()->id],
            ["name" => "Departamento de Fisioterapia", "acronym" => "DFISI", "centre_id" => $centres->where('acronym', "CCBS")->first()->id],
            ["name" => "Departamento de Medicina", "acronym" => "DMED", "centre_id" => $centres->where('acronym', "CCBS")->first()->id],
            ["name" => "Departamento de Odontologia", "acronym" => "DOD", "centre_id" => $centres->where('acronym', "CCBS")->first()->id],
            ["name" => "Departamento de Psicologia", "acronym" => "DP", "centre_id" => $centres->where('acronym', "CCBS")->first()->id],

            // Centro de Ciências Humanas (CCH)
            ["name" => "Departamento de Antropologia e Arqueologia", "acronym" => "DAA", "centre_id" => $centres->where('acronym', "CCH")->first()->id],
            ["name" => "Departamento de Filosofia", "acronym" => "DF", "centre_id" => $centres->where('acronym', "CCH")->first()->id],
            ["name" => "Departamento de História", "acronym" => "DH", "centre_id" => $centres->where('acronym', "CCH")->first()->id],
            ["name" => "Departamento de Letras", "acronym" => "DLE", "centre_id" => $centres->where('acronym', "CCH")->first()->id],
            ["name" => "Departamento de Linguística e Língua Portuguesa", "acronym" => "DLLP", "centre_id" => $centres->where('acronym', "CCH")->first()->id],
            ["name" => "Departamento de Sociologia e Política", "acronym" => "DSP", "centre_id" => $centres->where('acronym', "CCH")->first()->id],

            // Centro de Ciências Sociais Aplicadas (CCSA)
            ["name" => "Departamento de Ciências Contábeis", "acronym" => "DCC", "centre_id" => $centres->where('acronym', "CCSA")->first()->id],
            ["name" => "Departamento de Ciências da Administração", "acronym" => "DCA", "centre_id" => $centres->where('acronym', "CCSA")->first()->id],
            ["name" => "Departamento de Ciências Econômicas", "acronym" => "DCE", "centre_id" => $centres->where('acronym', "CCSA")->first()->id],
            ["name" => "Departamento de Direito Privado", "acronym" => "DDP", "centre_id" => $centres->where('acronym', "CCSA")->first()->id],
            ["name" => "Departamento de Direito Público Adjetivo", "acronym" => "DDPA", "centre_id" => $centres->where('acronym', "CCSA")->first()->id],
            ["name" => "Departamento de Serviço Social", "acronym" => "DSS", "centre_id" => $centres->where('acronym', "CCSA")->first()->id],

            // Centro de Ciências Exatas e Tecnológicas (CCET)
            ["name" => "Departamento de Computação", "acronym" => "DCC", "centre_id" => $centres->where('acronym', "CCET")->first()->id],
            ["name" => "Departamento de Engenharia Civil", "acronym" => "DEC", "centre_id" => $centres->where('acronym', "CCET")->first()->id],
            ["name" => "Departamento de Engenharia Elétrica", "acronym" => "DEE", "centre_id" => $centres->where('acronym', "CCET")->first()->id],
            ["name" => "Departamento de Engenharia Mecânica", "acronym" => "DEM", "centre_id" => $centres->where('acronym', "CCET")->first()->id],
            ["name" => "Departamento de Física", "acronym" => "DF", "centre_id" => $centres->where('acronym', "CCET")->first()->id],
            ["name" => "Departamento de Matemática", "acronym" => "DMAT", "centre_id" => $centres->where('acronym', "CCET")->first()->id],
            ["name" => "Departamento de Química", "acronym" => "DQ", "centre_id" => $centres->where('acronym', "CCET")->first()->id],

            // Centro de Educação (CE)
            ["name" => "Departamento de Educação", "acronym" => "DED", "centre_id" => $centres->where('acronym', "CE")->first()->id],
            ["name" => "Departamento de Pedagogia", "acronym" => "DPED", "centre_id" => $centres->where('acronym', "CE")->first()->id],

            // Centro de Letras e Artes (CLA)
            ["name" => "Departamento de Artes", "acronym" => "DAR", "centre_id" => $centres->where('acronym', "CLA")->first()->id],
            ["name" => "Departamento de Letras Clássicas e Vernáculas", "acronym" => "DLCV", "centre_id" => $centres->where('acronym', "CLA")->first()->id],
            ["name" => "Departamento de Letras Estrangeiras Modernas", "acronym" => "DLEM", "centre_id" => $centres->where('acronym', "CLA")->first()->id],

            // Instituto de Ciências Sociais Aplicadas (ICSA)
            ["name" => "Departamento de Administração Pública", "acronym" => "DAP", "centre_id" => $centres->where('acronym', "ICSA")->first()->id],
            ["name" => "Departamento de Ciências Sociais", "acronym" => "DCS", "centre_id" => $centres->where('acronym', "ICSA")->first()->id],

            // Instituto de Geociências e Meio Ambiente (IGEMA)
            ["name" => "Departamento de Geografia", "acronym" => "DG", "centre_id" => $centres->where('acronym', "IGEMA")->first()->id],
            ["name" => "Departamento de Geologia", "acronym" => "DG", "centre_id" => $centres->where('acronym', "IGEMA")->first()->id],
        ];
        foreach ($departamentos as $departamento) {
            Departament::create($departamento);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Career;
use App\Models\Departament;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departaments = Departament::get();
        $careers = [
            ["name" => "Agronomia", "departament_id" => $departaments->where("acronym", "DCA")->first()->id],
            ["name" => "Engenharia Agrícola", "departament_id" => $departaments->where("acronym", "DEA")->first()->id],
            ["name" => "Zootecnia", "departament_id" => $departaments->where("acronym", "DZ")->first()->id],
            ["name" => "Biologia", "departament_id" => $departaments->where("acronym", "DBIO")->first()->id],
            ["name" => "Educação Física", "departament_id" => $departaments->where("acronym", "DEF")->first()->id],
            ["name" => "Enfermagem", "departament_id" => $departaments->where("acronym", "DENF")->first()->id],
            ["name" => "Farmácia", "departament_id" => $departaments->where("acronym", "DFAR")->first()->id],
            ["name" => "Fisioterapia", "departament_id" => $departaments->where("acronym", "DFISI")->first()->id],
            ["name" => "Medicina", "departament_id" => $departaments->where("acronym", "DMED")->first()->id],
            ["name" => "Odontologia", "departament_id" => $departaments->where("acronym", "DOD")->first()->id],
            ["name" => "Psicologia", "departament_id" => $departaments->where("acronym", "DP")->first()->id],
            ["name" => "Antropologia", "departament_id" => $departaments->where("acronym", "DAA")->first()->id],
            ["name" => "Arqueologia", "departament_id" => $departaments->where("acronym", "DAA")->first()->id],
            ["name" => "Filosofia", "departament_id" => $departaments->where("acronym", "DF")->first()->id],
            ["name" => "História", "departament_id" => $departaments->where("acronym", "DH")->first()->id],
            ["name" => "Letras", "departament_id" => $departaments->where("acronym", "DLE")->first()->id],
            ["name" => "Linguística", "departament_id" => $departaments->where("acronym", "DLLP")->first()->id],
            ["name" => "Português", "departament_id" => $departaments->where("acronym", "DLLP")->first()->id],
            ["name" => "Sociologia", "departament_id" => $departaments->where("acronym", "DSP")->first()->id],
            ["name" => "Administração", "departament_id" => $departaments->where("acronym", "DCA")->first()->id],
            ["name" => "Ciências Contábeis", "departament_id" => $departaments->where("acronym", "DCC")->first()->id],
            ["name" => "Ciências Econômicas", "departament_id" => $departaments->where("acronym", "DCE")->first()->id],
            ["name" => "Direito", "departament_id" => $departaments->where("acronym", "DDP")->first()->id],
            ["name" => "Serviço Social", "departament_id" => $departaments->where("acronym", "DSS")->first()->id],
            ["name" => "Sistemas de Informação", "departament_id" => $departaments->where("acronym", "DCC")->first()->id],
            ["name" => "Engenharia Civil", "departament_id" => $departaments->where("acronym", "DEC")->first()->id],
            ["name" => "Engenharia Elétrica", "departament_id" => $departaments->where("acronym", "DEE")->first()->id],
            ["name" => "Engenharia Mecânica", "departament_id" => $departaments->where("acronym", "DEM")->first()->id],
            ["name" => "Física", "departament_id" => $departaments->where("acronym", "DF")->first()->id],
            ["name" => "Matemática", "departament_id" => $departaments->where("acronym", "DMAT")->first()->id],
            ["name" => "Química", "departament_id" => $departaments->where("acronym", "DQ")->first()->id],
            ["name" => "Pedagogia", "departament_id" => $departaments->where("acronym", "DPED")->first()->id],
            ["name" => "Artes", "departament_id" => $departaments->where("acronym", "DAR")->first()->id],
            ["name" => "Letras", "departament_id" => $departaments->where("acronym", "DLE")->first()->id],
            ["name" => "Administração Pública", "departament_id" => $departaments->where("acronym", "DAP")->first()->id],
            ["name" => "Ciências Sociais", "departament_id" => $departaments->where("acronym", "DCS")->first()->id],
            ["name" => "Geografia", "departament_id" => $departaments->where("acronym", "DG")->first()->id],
            ["name" => "Geologia", "departament_id" => $departaments->where("acronym", "DG")->first()->id],
        ];

        foreach ($careers as $career) {
            Career::create($career);
        }
    }
}

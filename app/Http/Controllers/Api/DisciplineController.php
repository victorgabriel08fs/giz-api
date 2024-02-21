<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Bond;
use App\Models\Discipline;
use Illuminate\Http\Request;

class DisciplineController extends Controller
{
    public function index(Request $request)
    {
        $bond = Bond::find($request['bond_id']);
        $disciplines = Discipline::with(['exercises', 'registrations'])->where('teacher_id', $request['teacher_id'])->where('semester_id', $request['semester_id'])->where('career_id',$bond->career_id)->orderBy('name')->get();
        return response()->json($disciplines);
    }
}

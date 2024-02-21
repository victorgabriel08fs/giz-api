<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Bond;
use App\Models\Registration;
use App\Models\Semester;
use App\Models\User;
use Illuminate\Http\Request;

class SemesterController extends Controller
{
    public function index(Request $request)
    {
        $bond = Bond::with('user')->find($request['bond_id']);
        $semesters = $bond->user->semesters($bond);
        return response()->json($semesters);
    }
}

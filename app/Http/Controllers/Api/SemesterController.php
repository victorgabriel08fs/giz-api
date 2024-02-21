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
        $user = User::find($request['user_id']);
        $semesters = $user->semesters();
        return response()->json($semesters);
    }
}

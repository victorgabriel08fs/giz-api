<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Bond;
use App\Models\Registration;
use App\Models\Semester;
use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(Request $request)
    {
        $user = User::find($request['user_id']);
        $registrations = Registration::where('user_id', $user->id)->whereRelation('discipline', 'semester_id', $request['semester_id'])->with('discipline.career', 'discipline.teacher', 'discipline', 'exercises.exercise', 'user')->get();
        return response()->json($registrations);
    }
}

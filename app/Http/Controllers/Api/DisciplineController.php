<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Bond;
use App\Models\Discipline;
use App\Models\Lesson;
use App\Models\Registration;
use App\Models\RegistrationLesson;
use Illuminate\Http\Request;

class DisciplineController extends Controller
{
    public function index(Request $request)
    {
        $bond = Bond::find($request['bond_id']);
        $disciplines = Discipline::with(['exercises', 'registrations.user'])->where('teacher_id', $request['teacher_id'])->where('semester_id', $request['semester_id'])->where('career_id', $bond->career_id)->orderBy('name')->get();
        return response()->json($disciplines);
    }

    public function lessons($discipline)
    {
        $discipline = Discipline::with('lessons')->find($discipline);

        $lessons = $discipline->lessons;

        $registrations = $discipline->registrations;

        return response()->json(['lessons' => $lessons, 'registrations' => $registrations]);
    }

    public function checkPresence(Request $request)
    {
        $presence = RegistrationLesson::where('lesson_id', $request['lesson_id'])->where('registration_id', $request['registration_id'])->get()->first();
        if (isset($presence->id)) {
            $presence->update(['lesson_id', $request['lesson_id'], 'registration_id', $request['registration_id'], 'presence' => $request['value']]);
        } else {
            $a = RegistrationLesson::create(['lesson_id'=> $request['lesson_id'], 'registration_id'=> $request['registration_id'], 'presence' => $request['value']]);
            dd($a);
        }
        return response()->json($presence);
    }
}

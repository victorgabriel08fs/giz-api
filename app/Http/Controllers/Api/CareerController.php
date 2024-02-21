<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Career;

class CareerController extends Controller
{
    public function index()
    {
        $careers = Career::with('departament.centre.university','disciplines')->orderBy('name')->get();
        return response()->json($careers);
    }
}

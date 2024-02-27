<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Bond;
use App\Models\Career;
use Illuminate\Http\Request;

class BondController extends Controller
{
    public function index(Request $request)
    {
        $bonds = Bond::with('career', 'user')->select('bonds.*')->join('careers', 'bonds.career_id', '=', 'careers.id')
        ->orderBy('created_at','desc')->where('user_id', $request['user_id'])->where('type', $request['type'])->get();
        return response()->json($bonds);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GradesController extends Controller
{
    public function create()
    {
        return view ('grades.index'),
    }
}

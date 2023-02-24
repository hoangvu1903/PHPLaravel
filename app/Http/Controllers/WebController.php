<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home(Request $request) {
        $data = Student::
        orderBy("id","asc")
            ->paginate(30);
        return view("home",["data"=>$data]);

    }
}

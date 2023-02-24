<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateStudent extends Controller
{
    public function create() {
        return view("create");
    }
}

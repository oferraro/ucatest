<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function index(Request $request) {
        return response()->json([
            'success' => true,
            'request' => $request->all()
        ]);
    }

    public function add() {

    }

    public function update() {

    }

    public function delete() {

    }

}

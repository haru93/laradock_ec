<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    public function index()
    {
        $tests = [(object)['id' => 1, 'title' => 'タイトル']];
        return view('top', ['tests' => $tests]);
    }

    public function show($id)
    {
        return view('show', ['id' => $id]);
    }
}

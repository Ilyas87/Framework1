<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class FormController extends Controller
{
    public function show() {
        $name = Cache::get('file');
        return view('form', [
            'name' => $name,
        ]);
    }

    public function store() {
        $name = \request('name');
        Cache::put("file", $name);
        return view('index', [
            'name' => $name,
        ]);
    }
}

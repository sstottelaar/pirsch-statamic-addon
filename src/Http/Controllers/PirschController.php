<?php

namespace Sstottelaar\Pirsch\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Statamic\Http\Controllers\Controller;

class PirschController extends Controller
{
    public function index()
    {
        return view('pirsch::dashboard',
        [
            'title' => 'Pirsch Dashboard',
        ]);
    }
}

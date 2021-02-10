<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Return the dashboard view.
     *
     * @return void
     */
    public function index()
    {
        return view('dashboard');
    }
}
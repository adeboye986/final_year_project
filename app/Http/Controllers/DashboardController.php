<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
{
    $services = auth()->user()->services; // assuming a one-to-many relationship
    return view('dashboard.index', compact('services'));
}
}

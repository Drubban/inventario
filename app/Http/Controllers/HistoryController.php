<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('laravel-examples.history-shop', compact('users'));
    }
}
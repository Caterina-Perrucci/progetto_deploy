<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class PublicController extends Controller implements HasMiddleware
{
    public static function middleware() : array
    {
        return [
            new Middleware('auth', only: ['profile']),
        ];
    }

    public function homepage() {
        $recipes = Recipe::orderBy('created_at', 'desc')->take(3)->get();
        return view('welcome', compact('recipes'));
    }

    public function profile(){
        return view('auth.profile');
    }
}

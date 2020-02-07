<?php

namespace App\Http\Controllers;

use App\Contact;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use function Ramsey\Uuid\v1;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        /* TODO Récupérer tout les utilisateurs, et renvoyer la view "home.blade.php avec les utilisateurs" */
        $users= User::all();

        return view('home',['users'=>$users]);
    }
}




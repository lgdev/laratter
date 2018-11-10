<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
        {$links = [
            'https://platzi.com/laravel' => 'curso de laravel',
            'https://laravel.com' => 'Pagina de Laravel',
            'https://import-support.com' => 'Import Support'
        ];
        return view('welcome',[
            'links' => $links,
            'teacher' => 'Luis Eduardo Garzon',
            ]);    
        }

    public function about()
    {
        return view('about');
    }
    
}

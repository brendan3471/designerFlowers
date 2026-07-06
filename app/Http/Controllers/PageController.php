<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{
    public function show($slug = 'home')
{
    $pages = [
        'home' => [
            'title' => 'Home | Designer Flowers',
            'description' => 'Welcome to our site.',
            'keywords' => 'home, mcl, web, solutions'
        ],
        'about' => [
            'title' => 'Contact Us | Designer Flowers',
            'description' => 'Our services include web development, SEO, and more.',
            'keywords' => 'services, web, SEO'
        ]
    ];

    if (!isset($pages[$slug])) {
        abort(404);
    }

    $page = (object) $pages[$slug];

     // Check if the view file exists: resources/views/pages/{slug}.blade.php
     if (View::exists("pages.$slug")) {
        return view("pages.$slug", compact('page'));
    }

    // Fallback to a generic show view if no specific view file exists
    return view('pages.show', compact('page'));
}

}

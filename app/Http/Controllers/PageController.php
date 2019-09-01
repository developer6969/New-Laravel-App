<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $title = 'Welcome To Laravel!';
        return view('pages.index', compact('title'));
    }

    public function about() {
        $title = 'About Laravel';
        return view('pages.about')->with('head', $title);
    }

    public function services() {
        $data = array(
            'title' => 'Laravel Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }

    public function schedule() {
        $data = array(
            'title' => 'Laravel Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.schedule')->with($data);
    }

    public function reviews() {
        $data = array(
            'title' => 'Laravel Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.reviews')->with($data);
    }

    public function location() {
        $data = array(
            'title' => 'Laravel Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.location')->with($data);
    }

    public function gallery() {
        $data = array(
            'title' => 'Laravel Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.gallery')->with($data);
    }

    public function contact() {
        $data = array(
            'title' => 'Laravel Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.contact')->with($data);
    }

    public function blog() {
        $data = array(
            'title' => 'Laravel Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.blog')->with($data);
    }
}

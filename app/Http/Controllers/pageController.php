<?php

namespace NNC\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class pageController extends Controller {
    public function getHome() {
        return view('pages.home');
    }

    public function getAbout() {
        return view('pages.about');
    }

    public function getLove() {
        return view('pages.love');
    }

    public function getWork() {
        return view('pages.work');
    }

    public function getContact() {
        return view('pages.contact');
    }
}

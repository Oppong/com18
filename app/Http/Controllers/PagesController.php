<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class PagesController extends Controller
{
    public function index() {
      $sliders = Slider::all();
      return view('pages.index', compact('sliders'));
    }

    public function contact() {
      return view('pages.contact');
    }

    public function about() {
      return view('pages.about');
    }
}

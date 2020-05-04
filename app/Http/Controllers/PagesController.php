<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Event;

class PagesController extends Controller
{
    public function index() {
      $events = Event::take(3)->get();
      $sliders = Slider::all();
      return view('pages.index', compact('sliders', 'events'));
    }

    public function contact() {
      return view('pages.contact');
    }

    public function about() {
      return view('pages.about');
    }
}

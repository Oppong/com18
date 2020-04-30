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
}

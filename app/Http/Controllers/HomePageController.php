<?php

    namespace App\Http\Controllers;

    use Illuminate\View\View;

    class HomePageController extends Controller
    {
        /**
         * Handle the incoming request.
         */
        public function __invoke(): View
        {
            return view('pages.home');
        }
    }

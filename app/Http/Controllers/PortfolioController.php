<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display the portfolio index page.
     */
    public function index()
    {
        // Fetch data from config files
        $profile = config('profile', []);
        $education = config('education', []);
        $expertise = config('expertise', []);
        $statistics = config('statistics', []);
        $projects = config('projects', []);
        $experiences = config('experiences', []);
        $activities = config('activities', []);
        $certifications = config('certifications', []);
        $social = config('social', []);

        return view('welcome', compact(
            'profile',
            'education',
            'expertise',
            'statistics',
            'projects', 
            'experiences', 
            'certifications',
            'activities', 
            'social'
        ));
    }
}

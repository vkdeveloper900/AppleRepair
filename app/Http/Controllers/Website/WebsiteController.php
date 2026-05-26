<?php

declare(strict_types=1);

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

/**
 * Handles all public-facing website pages.
 */
class WebsiteController extends Controller
{
    /** Render the home page. */
    public function home(): View
    {
        return view('website.home');
    }

    /** Render the about / technician story page. */
    public function about(): View
    {
        return view('website.about');
    }

    /** Render the services page. */
    public function services(): View
    {
        return view('website.services');
    }

    /** Render the training & courses page. */
    public function training(): View
    {
        return view('website.training');
    }

    /** Render the gallery / work showcase page. */
    public function gallery(): View
    {
        return view('website.gallery');
    }

    /** Render the testimonials page. */
    public function testimonials(): View
    {
        return view('website.testimonials');
    }

    /** Render the certifications & events page. */
    public function certifications(): View
    {
        return view('website.certifications');
    }

    /** Render the contact page. */
    public function contact(): View
    {
        return view('website.contact');
    }

    /** Render the online Apple repair course landing page. */
    public function onlineCourse(): View
    {
        return view('website.online-course');
    }
}

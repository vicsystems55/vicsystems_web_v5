<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {

        $services = Service::get();

        return view('pages.index', [
            'meta_title' => 'Vicsystems Technologies Ltd. | Innovative ICT & Creative Solutions',
            'meta_description' => 'Vicsystems Technologies Ltd. delivers ICT solutions, web & mobile apps, IT consultancy, custom electronics, and AI-powered art to empower businesses and individuals.',
            'services' => $services
        ]);
    }

    public function about()
    {
        return view('pages.about', [
            'meta_title' => 'About Us | Vicsystems Technologies Ltd.',
            'meta_description' => 'Learn about Vicsystems Technologies Ltd. – a multi-industry innovation hub offering ICT services, training, IT consultancy, electronics, and AI-driven art solutions.'
        ]);
    }

    public function contact()
    {
        return view('pages.contact', [
            'meta_title' => 'Contact Vicsystems Technologies Ltd.',
            'meta_description' => 'Get in touch with Vicsystems Technologies Ltd. for ICT services, app development, IT consultancy, electronics, and creative innovations.'
        ]);
    }

    public function services()
    {
          $services = Service::get();
        return view('pages.services', [
            'meta_title' => 'Our Services | Vicsystems Technologies Ltd.',
            'meta_description' => 'Explore Vicsystems Technologies Ltd. services: web & mobile app development, IT consultancy, social media management, training, custom electronics, and AI-generated art.',
            'services' => $services
        ]);
    }

    public function blog()
    {
        return view('pages.blog', [
            'meta_title' => 'Insights & Updates | Vicsystems Technologies Ltd. Blog',
            'meta_description' => 'Read technology insights, innovation trends, ICT strategies, and updates from Vicsystems Technologies Ltd.'
        ]);
    }

    public function post()
    {
        return view('pages.post', [
            'meta_title' => 'Article | Vicsystems Technologies Ltd.',
            'meta_description' => 'Detailed insights and articles on ICT, innovation, business growth, and technology trends by Vicsystems Technologies Ltd.'
        ]);
    }

    public function portfolio()
    {
        return view('pages.portfolio', [
            'meta_title' => 'Our Portfolio | Vicsystems Technologies Ltd.',
            'meta_description' => 'See Vicsystems Technologies Ltd. portfolio: projects in ICT, app development, renewable energy, healthcare, engineering, media, and creative industries.'
        ]);
    }

    public function lmu_privacy()
    {
        return view('pages.lmu_privacy', [
            'meta_title' => 'Privacy Policy | Lift Me Up Initiative',
            'meta_description' => 'Read the privacy policy of the Lift Me Up Initiative by Vicsystems Technologies Ltd., outlining data collection, usage, and protection practices.'
        ]);
    }
}

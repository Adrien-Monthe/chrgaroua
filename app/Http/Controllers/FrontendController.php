<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {

        //$data['categories'] = Category::inRandomOrder()->limit(3)->get();
        //$data['recent_blogs'] = Blog::orderBy('id','desc')->paginate(3);
        return view('frontend.pages.home');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function about()
    {
        return view('frontend.pages.about');
    }

    public function services()
    {
        return view('frontend.pages.services.services');
    }

    public function single_service()
    {
        return view('frontend.pages.services.services');
    }

    public function service_gynecology()
    {
        return view('frontend.pages.services.gynecology-service');
    }

    public function service_imaging()
    {
        return view('frontend.pages.services.imaging-service');
    }


    public function service_centralised_monitoring()
    {
        return view('frontend.pages.services.centralised-monitoring-service');
    }

    public function service_reanimation()
    {
        return view('frontend.pages.services.reanimation-service');
    }

    public function service_oto_rhino_laryngology()
    {
        return view('frontend.pages.services.oto-rhino-laryngology-service');
    }

    public function service_laboratory()
    {
        return view('frontend.pages.services.laboratory-service');
    }

    public function service_surgery_room()
    {
        return view('frontend.pages.services.surgery-room-service');
    }

    public function service_emergency()
    {
        return view('frontend.pages.services.emergency-service');
    }

    public function service_home()
    {
        return view('frontend.pages.services.home-service');
    }

    public function service_odontosmatology()
    {
        return view('frontend.pages.services.odontosmatology-service');
    }

    public function blog()
    {
        return view('frontend.pages.blog.blog-articles');
    }

    public function appointment()
    {
        return view('frontend.pages.appointment');
    }
}

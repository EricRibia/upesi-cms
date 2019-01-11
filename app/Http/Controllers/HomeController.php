<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Response;
use App\About as About;
use App\Country as Country;
use App\Service as Service;
use App\Policy as Policy;
use App\Team as Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home_page(){
        $data['page'] = 'Home | Upesi Money Transfer';
        return view('frontend.main',$data);
    }
    public function about_us()
    { 
        $data=[];
        $data['page'] = 'About | Upesi Money Transfer';
        $data['values'] = About::where('type','value')->get();
        $data['m'] = About::where('valname','m')->first();
        $data['v'] = About::where('valname','v')->first();
        $data['introd']  = About::where('title','About us')->get()->pluck('description');

        return view('frontend.about',$data);
    }
    public function services_page(){
        $data['services'] = Service::where('type','service')->get();
        $data['page']  = 'Services | Upesi Money Transfer';
        return view('frontend.services',$data);
    }
    public function faqs_page(){
        $data['faqs'] = Policy::where('type','faqs')->get();
        $data['page']  = 'FAQs | Upesi Money Transfer';
        return view('frontend.faqs',$data);

    }
    public function privacy_page(){
        $data['privacy_policy'] = Policy::where('title','Privacy Policy')->get()->pluck('description');
        $data['page']  = 'Privacy Policy | Upesi Money Transfer';
        return view('frontend.privacy-policy',$data);
    }
    public function terms_page(){
        $data['terms'] = Policy::where('title','Terms of Use')->get()->pluck('description');
        $data['page']  = 'Terms of Use | Upesi Money Transfer';
        return view('frontend.terms-use',$data);
    }
    public function Team_page(){
        $data['team'] = Team::all();
        $data['page'] = 'Team | Upesi Money Transfer';
        return view('frontend.team',$data);
    }
    public function country_pages($slug){
        $data['country'] = Country::where('name',$slug)->get()->first();
        $data['all'] = Country::all();
        $data['page'] = $slug . ' | Upesi Money Transfer';
        return view('frontend.countries.country', $data);
    }
    public function index()
    {
        return view('backend.master');
    }

}

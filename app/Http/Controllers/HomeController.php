<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Profile;
use App\Models\Opportunity;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Suppoprt\Renderable
     */
    public function index()
    {
        $opportunities = Opportunity::get();
        return view('home', array(
            'opportunities' => $opportunities
        ));
    }

    public function profile(){
        $uid = auth()->user()->id;
        $company_name = Profile::where('owned_by', $uid)->value('company_name');
        $company_email = Profile::where('owned_by', $uid)->value('company_email');
        $phone = Profile::where('owned_by', $uid)->value('phone');
        $location = Profile::where('owned_by', $uid)->value('location');
        $website = Profile::where('owned_by', $uid)->value('website');
        $exist = Profile::where('owned_by', $uid)->value('owned_by');
        return view('profile', array(
            'company_name' => $company_name,
            'company_email' => $company_email,
            'phone' => $phone,
            'location' => $location,
            'website' => $website,
            'exist' => $exist
        ));
    }


    public function opportunity(){
        $uid = auth()->user()->id;
        $company_name = Profile::where('owned_by', $uid)->value('company_name');
        $opportunities = Opportunity::where('user_id', $uid)->get();
        return view('opportunity', array(
            'company_name' => $company_name,
            'opportunities' => $opportunities
        ));
    }

    public function add_opportunity(Request $request){
        $opportunity= new Opportunity();
        $opportunity->user_id = $request->user_id;
        $opportunity->posted_by = $request->posted_by;
        $opportunity->name = $request->name;
        $opportunity->description = $request->description;
        $opportunity->amount = $request->amount;
        $opportunity->stage = $request->stage;
        $opportunity->save();
        return redirect()->back();
    }


}

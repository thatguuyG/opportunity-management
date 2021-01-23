<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Profile;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function save_profile(Request $request){
        $uid = auth()->user()->id;
        $exist = Profile::where('owned_by', $uid)->value('owned_by');
        if($exist == ''){
            $profile= new Profile();
            $profile->owned_by = $request->owned_by;
            $profile->company_name = $request->company_name;
            $profile->company_email = $request->company_email;
            $profile->phone = $request->phone;
            $profile->location = $request->location;
            $profile->website = $request->website;
            $profile->save();
        }
        else{
            $owned_by = $request->input('owned_by');
            $company_name = $request->input('company_name');
            $company_email = $request->input('company_email');
            $phone = $request->input('phone');
            $location = $request->input('location');
            $website = $request->input('website');
            Profile::where('owned_by', $uid)->update(array(
                'owned_by' => $owned_by,
                'company_name' => $company_name,
                'company_email' => $company_email,
                'phone' => $phone,
                'location' => $location,
                'website' => $website
            ));
        }

        return redirect()->back();
    }
}

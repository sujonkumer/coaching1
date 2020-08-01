<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\HeadreFooter;
use Illuminate\Http\RedirectResponse;

class HomePageController extends Controller
{
    public function addHeadreFooter(){
        return view('admin.home.add-header-footer-form');
    }

    public function headerAndFooterSave(Request $request){
        $request->validate([
            "ownarName" => "required",
            "ownerDepartment" => "required",
            "mobile" => "required",
            "address" => "required",
            "copyright" => "required"

        ]);

        $Data = new HeadreFooter;
        $Data->ownarName = $request->ownarName;
        $Data->ownerDepartment = $request->ownerDepartment;
        $Data->mobile = $request->mobile;
        $Data->address = $request->address;
        $Data->copyright = $request->copyright;
        $Data->status = $request->status;
        $Data->save();

        return redirect('/home')->with('message','Header and Footer Added Successfully!');
    }
}

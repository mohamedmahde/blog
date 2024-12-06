<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SettingController extends Controller
{
   public function update (Request $request){

    
    Setting::create($request->all());
    return Redirect()->route('dashboard.settings');
   }
}

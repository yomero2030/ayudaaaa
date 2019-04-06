<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function uploadimage(Request $request)
    {
      //dd($request->all());
      if ($request->hasFile('image'))
      {
            $file      = $request->file('image');
            $filename  = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $picture   = date('His').'-'.$filename;
            $file->move(public_path('img'), $picture);
            return response()->json(["message" => "Image Uploaded Succesfully"]);
      } 
      else
      {
            return response()->json(["message" => "Select image first."]);
      }
    }
}

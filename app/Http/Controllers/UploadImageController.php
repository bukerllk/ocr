<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;



class UploadImageController extends Controller
{
	public funtion upload(Request $request){
		$request->validate([
			"image" => "required|mimes:png,jpg,jpeg,pdf|max:10000"
		]);

		$image = $request->image:
		Storage::disk('public')->putFile('images',$image);

		return response('success',Response::HTTP_OK); 
	}
}

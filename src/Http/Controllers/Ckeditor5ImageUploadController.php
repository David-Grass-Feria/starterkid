<?php

namespace GrassFeria\Starterkid\Http\Controllers;


use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class Ckeditor5ImageUploadController extends Controller
{
    public function store(Request $request)
    {

        if($request->hasFile('ckeditorupload')){



            $fileName = uniqid();
            $extension = $request->file('ckeditorupload')->getClientOriginalExtension();
            $fileName    = $fileName .'_'.time().'.'.$extension;

           



            Storage::putFileAs('public/temp/', $request->file('ckeditorupload'),$fileName,[
                'visibility' => 'public',
                'directory_visibility' => 'public'
            ]);

            return response()->json([
                'url' => url('/').Storage::url('public/temp/' . $fileName),
            ]);
        }
    }
}

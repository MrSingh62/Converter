<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;

class converter extends Controller
{
    public function convertmedia(Request $res)
    {
        $format=$res->input('format');
         $media=$res->file('media');

        if($res->hasFile('media'))
         {
             $filename=$res->file('media');
            $ext=$filename->Extension();
            $newfilename=time().".".$format;
            $filename->move("uploads/",$newfilename);
            return redirect("imageconverter")->with('status',"Image format changed");
         }
    }

    public function changeformat(Request $request)
    {
       echo $format=$request->input('format');
        //$filename=$request->file('media');
        $originalImage= $request->file('media');
       $ext=$originalImage->Extension();
         echo  $newfilename=time().".".$format;


        $thumbnailImage = Image::make($originalImage);
        $thumbnailImage->resize(300, 200)->save($newfilename.".".$format);
        
      // return $thumbnailImage->response();
       // return view('upload');
    }
}

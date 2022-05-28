<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;

use Barryvdh\DomPDF\Facade\Pdf as PDF;

class converter extends Controller
{
    public function stringfunc(Request $res)
    {    
        $x=$res->input('t1');
        $y=$res->input('b1');
        // $y=" thind";
        // $a=str::of($x)->camel()->append($y)->title();
        // $t=str::wordCount($x);
        
        if ($y=='sentence'){
            $t=str::of($x)->ucfirst();
        }
        elseif ($y=='lower')
        {
            $t=str::of($x)->lower();
        }
        elseif ($y=='upper')
        {
            $t=str::of($x)->upper();
        }
        elseif ($y=='capitalize')
        {
            $t=ucwords($x," ");
        }
        elseif ($y=='alternate')
        {

        }

        else{
            $t="No Input";
        }
        return redirect('texteditor')->with('status', $t)->with('input', $x);
    }

    public function changeformat(Request $request)
    {
        $format=$request->input('format');
        $originalImage= $request->file('media');
         $newfilename=time().".".$format;
        $thumbnailImage = Image::make($originalImage);
        $thumbnailImage->resize(300, 200)->save($newfilename);
       return response()->download(public_path("$newfilename" ))->deleteFileAfterSend();
    }

}

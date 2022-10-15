<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function sendImage(Request $request)
    {
        
        $image = $request->file('image');
        if($request->hasfile('image'))  
        {  
              $new_img = rand().".".$image->getClientOriginalExtension();
              $image->move(public_path('/upload/userimg'),$new_img);

            // $extension = $image->getClientOriginalExtension();  
            // $filename=time().'.'.$extension;  
            // $image->move('public/upload/userimg/',$filename);  
            return response()->json($new_img);  
        }  
        else  
        {  
            return response()->json('image null');
        }  
        
    }
}

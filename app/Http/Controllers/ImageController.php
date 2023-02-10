<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImageController extends Controller
{
    public function index()
    {        
        return view('gallery');
    }
    
    public function store(Request $request)
    {
        if($request->hasFile('upload_image')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload_image')->getClientOriginalName();
      
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
      
            //get file extension
            $extension = $request->file('upload_image')->getClientOriginalExtension();
      
            //filename to store
            $filenametostore = $filename.'.'.$extension;
      
            /*//small thumbnail name
            $smallthumbnail = $filename.'_small_'.time().'.'.$extension;
      
            //medium thumbnail name
            $mediumthumbnail = $filename.'_medium_'.time().'.'.$extension;
      
            //large thumbnail name
            $largethumbnail = $filename.'_large_'.time().'.'.$extension;*/
            
            $smallthumbnail = $filename.'_thumb.'.$extension;
      
            //Upload File
            $request->file('upload_image')->storeAs('public/upload_images', $filenametostore);
            
            list($width, $height, $type, $attr) = getimagesize(public_path('storage/upload_images/'.$filenametostore));
            
            $request->file('upload_image')->storeAs('public/upload_images/thumbnail', $smallthumbnail);
            /*$request->file('upload_image')->storeAs('public/upload_images/thumbnail', $mediumthumbnail);
            $request->file('upload_image')->storeAs('public/upload_images/thumbnail', $largethumbnail);*/
      
            //create small thumbnail
            /*$smallthumbnailpath = public_path('storage/upload_images/thumbnail/'.$smallthumbnail);
            $this->createThumbnail($smallthumbnailpath, 150, 93);
      
            //create medium thumbnail
            $mediumthumbnailpath = public_path('storage/upload_images/thumbnail/'.$mediumthumbnail);
            $this->createThumbnail($mediumthumbnailpath, 300, 185);
      
            //create large thumbnail
            $largethumbnailpath = public_path('storage/upload_images/thumbnail/'.$largethumbnail);
            $this->createThumbnail($largethumbnailpath, 550, 340);*/
            
            $smallthumbnailpath = public_path('storage/upload_images/thumbnail/'.$smallthumbnail);
            
            $this->createThumbnail($smallthumbnailpath, 672, 448);
            /*if ($width == 6720) {
                $this->createThumbnail($smallthumbnailpath, 240, 160);
            } else {
                $this->createThumbnail($smallthumbnailpath, 160, 240);
            }*/
      
            return redirect('gallery')->with('success', "Image uploaded successfully.");
        }
    }
    
    
    
    /**
     * Create a thumbnail of specified size
     *
     * @param string $path path of thumbnail
     * @param int $width
     * @param int $height
     */
    public function createThumbnail($path, $width, $height)
    {
        // Temporarily increase memory limit to 256MB
        ini_set('memory_limit','512M');
        
        $img = Image::make($path)->orientate()->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img->save($path);
    }
}

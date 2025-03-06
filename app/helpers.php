<?php

use Illuminate\Support\Carbon;
//use File;

if (! function_exists('dday')) {
    function dday()
    {
        setlocale(LC_TIME, 'vit');
        Carbon::setLocale('vi');
        return Carbon::create(2023, 2, 25, 17);
    }
}

if (! function_exists('location')) {
    function location(bool $full = false, bool $en = true)
    {
        if ($full) {
            if ($en) {
                return 'Hall 2, Golden Palace Wedding Center, 3rd Floor, Mipec Long Bien Trade Center, Hanoi, VN.';
            } else {
                return 'Hội Trường 2, TT tiệc cưới Golden Palace, Tầng 3 - TTTM Mipec Long Biên, Hà Nội, VN.';
            }
        }

        return 'Hanoi, VN';
    }
}

if (! function_exists('list_image')) {
    function list_image()
    {
        //$files = File::files(public_path('storage/upload_images/'));
        $files = array_filter(File::files(public_path('storage/upload_images/')), function ($item) {
           return strpos($item, '.JPG');
        });
        $newArr = array_map(function ($item) {
            list($width, $height, $type, $attr) = getimagesize($item->getPathname());
            return [
                'landscape' => ($width == 6720) ? 'true' : 'false', 
                'name' => $item->getBasename('.JPG')
            ];
        }, $files);
        //print_r($newArr);
        //dd($files);
        return $newArr;
    }
}

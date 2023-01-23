<?php

use Illuminate\Support\Carbon;

if (! function_exists('dday')) {
    function dday()
    {
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

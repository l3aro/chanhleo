<?php

use Illuminate\Support\Carbon;

if (! function_exists('dday')) {
    function dday()
    {
        return Carbon::create(2023, 2, 25, 17);
    }
}

if (! function_exists('location')) {
    function location(bool $full = false)
    {
        if ($full) {
            return 'Hall 2, Golden Palace Wedding Center, 3rd Floor, Mipec Long Bien Trade Center, Hanoi, VN.';
        }

        return 'Hanoi, VN';
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenerateSheetController extends Controller
{
    /**
     *  2乗する関数
     */
    public function squared(Request $request)
    {
        $number = $request->input('number');
        $result = pow($number,2);
        return $result;
    }

    /**
     * 3乗する関数
     */
    public function cubic(Request $request)
    {
        $number = $request->input('number');
        $result = pow($number,3);
        return $result;
    }
    /*
    *サークルの面積
    */
    public function area_circle(Request $request)
    {
        $radius = $request->input('number');
        $area= 3.14*($radius*$radius);
        $result = $area;
        return $result;
    }
}


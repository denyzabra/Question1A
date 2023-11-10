<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnagramController extends Controller
{
    public function checkAnagram(Request $request)
    {
        // Get the input strings from the request
        $str1 = $request->input('str1');
        $str2 = $request->input('str2');

    
      // Convert to lowercase and remove whitespace
        $str1 = str_replace([' ', "\t", "\n", "\r"], '', strtolower($str1));
        $str2 = str_replace([' ', "\t", "\n", "\r"], '', strtolower($str2));


        // Sort characters in the strings
        $str1 = str_split($str1);
        $str2 = str_split($str2);

        sort($str1);
        sort($str2);

        // Compare the sorted strings
        $result = implode('', $str1) === implode('', $str2);

        // Return the result as JSON
        return response()->json(['result' => $result]);
    }
}

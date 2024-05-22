<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $products = [
            0 => ['Falak – The Flagship Brand', '/falak'],
            1 => ['Basmati Rice', '/basmati-rice'],
            2 => ['Non-Basmati Rice', '/non-basmati-rice'],
            3 => ['Organic Rice', '/organic-rice'],
            4 => ['Rice Syrup', '/rice-syrup'],
            5 => ['Rice Protein', '/rice-protien'],
            6 => ['Solids', '/solids'],
            7 => ['Other Leading Brands', '/other-leading-brands'],
        ];

        $filtered_arr = [];

        foreach ($products as $key => $product) {
            if ((strpos($product[1], $request->product) !== false)) {
                array_push($filtered_arr, $product);
            }
        }

        if (count($filtered_arr) > 0) {

            $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">';

            foreach ($filtered_arr as $row) {

                $output .= '<a target="_blank" href="' . $row[1] . '"><li class="list-group-item">' . $row[0] . '</li></a>';
            }

            $output .= '</ul>';
        } else {

            $output = '<li class="list-group-item">' . 'No results' . '</li>';
        }

        return $output;
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;

class RecordsController extends Controller
{
    //all categories for track $id
    public static function all_categories($id) {
        echo "id is ";
        dd($id);
        return view ('tracks.index', [
            'categories' => Record::all()->filter($id)->get()
        ]);
    }
    //one category for track $id
    public static function single_category($category_name, $id) {
        return view ('tracks.single', [
            'records' => Record::all()
        ]);
        // return view ('tracks.single', [
        //     'categories' => Record::category()->filter($id)->get()
        // ]);
    }
}

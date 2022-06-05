<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public static function single_category($id, $category_name) {
        $records = DB::table('records')
            ->where('track_id', '=', $id)
            ->where('category', '=', $category_name)
            ->where('reverse', '=', false)
            ->take(5)
            ->orderBy('score')->get()->toArray();
        return view ('tracks.single', [
            'records' => $records
        ]);
    }
}

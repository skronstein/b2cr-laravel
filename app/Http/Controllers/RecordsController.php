<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecordsController extends Controller
{
    public static function get_records($id, $category_name, $quantity) {
        $records = DB::table('records')
            ->where('track_id', '=', $id)
            ->where('category', '=', $category_name)
            ->where('reverse', '=', false)
            ->take($quantity)
            ->orderBy('score')->get()->toArray();
        return $records;
    }
    //all categories for this track
    public static function all_categories($id) {
        echo "id is ";
        dd($id);
        return view ('tracks.index', [
            'categories' => Record::all()->filter($id)->get()
        ]);
    }
    //one category for this track
    public static function single_category($id, $category_name) {
        return view ('tracks.single', [
            'records' => self::get_records($id, $category_name, 100)
        ]);
    }
}

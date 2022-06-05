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
        $categories = [
            'best_laps',
            'total_times',
            'big_crashes',
            'race_crash_totals',
            'big_airs',
            'most_cars_in_crashes'
        ];
        foreach($categories as $category){
            $records[$category] = [
                'category_name' => $category,
                'records' => self::get_records($id, $category, 3)
            ];
        }
        return view ('tracks.index', [
            'categories' => $records
        ]);
    }
    //one category for this track
    public static function single_category($id, $category_name) {
        return view ('tracks.single', [
            'records' => self::get_records($id, $category_name, 100)
        ]);
    }
}

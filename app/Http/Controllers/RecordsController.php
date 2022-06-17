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
            ['db_name' => 'best_laps',            'display_name' => 'Best Lap'],
            ['db_name' => 'total_times',          'display_name'  => 'Total Race Time'],
            ['db_name' => 'big_crashes',          'display_name'  => 'Big Crash'],
            ['db_name' => 'race_crash_totals',    'display_name'  => 'Race Crash Total'],
            ['db_name' => 'big_airs',             'display_name' => 'Big Air'],
            ['db_name' => 'most_cars_in_crashes', 'display_name'  => 'Most Cars In Crash']
        ];
        $nameArray = [
            'Airport Terminal 3',
            'Airport Terminal 1&2',
            'Interstate Loop',
            '88 Interchange',
            'Palm Bay Heights',
            'Palm Bay Marina',
            'Sunrise Valley Downtown',
            'Sunrise Valley Springs',
            'Big Surf Grove',
            'Big Surf Shores',
            'Crystal Summit Peak',
            'Crystal Summit Lake',
            'Ocean Sprint',
            'Heartbreak Hills',
            'Freeway Dash'
        ];
        foreach($categories as $category){
            // dd($id);
            $records[$category['db_name']] = [
                'db_name'      => $category['db_name'],
                'display_name' => $category['display_name'],
                'records' => self::get_records($id, $category, 3)
            ];
        }
        return view ('tracks.index', [
            'categories' => $records,
            'track_id'     => $id,
            'track_name'   => $nameArray[$id-1]
        ]);
    }
    //one category for this track
    public static function single_category($id, $category_name) {
        return view ('tracks.single', [
            'records' => self::get_records($id, $category_name, 100)
        ]);
    }
}

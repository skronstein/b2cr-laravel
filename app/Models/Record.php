<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    public function scopeFilter($query, array $filters) {
        if($filters['track' ?? false]) {
            echo "query is ";
            dd($query);
            $query->where('id', '=', "todo");
        }
    }

}

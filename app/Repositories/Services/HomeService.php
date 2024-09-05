<?php

declare(strict_types=1);

namespace App\Repositories\Services;

use App\Repositories\Contracts\HomeContract;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class HomeService implements HomeContract
{
    public function getData(): Array
    {
        $query = DB::select("select value FROM erat_dashboard")[0];

        // $data = File::json(public_path('data.json'));
        $data = json_decode($query->value);
        return $data;
    }
}

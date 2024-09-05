<?php

declare(strict_types=1);

namespace App\Repositories\Services;

use App\Repositories\Contracts\HomeContract;
use Illuminate\Support\Facades\File;

class HomeService implements HomeContract
{
    public function getData(): Array
    {
        $data = File::json(public_path('data.json'));
        return $data;
    }
}

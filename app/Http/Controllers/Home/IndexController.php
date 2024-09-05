<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Repositories\Services\HomeService;
use Inertia\Response;


class IndexController extends Controller
{
    public function __construct(private HomeService $repo)
    {

    }

    public function index(): Response
    {
        $items = $this->repo->getData();
        // dd($data);
        return inertia('Home', ['items' => $items]);
    }
}

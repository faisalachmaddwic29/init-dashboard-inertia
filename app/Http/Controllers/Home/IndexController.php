<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Repositories\Services\HomeService;
use Inertia\Response;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class IndexController extends Controller
{
    public function __construct(private HomeService $repo) {}

    public function index(): Response
    {
        $items = $this->repo->getData();
        return inertia('Home', ['items' => $items]);
    }


    public function formatUpload(): BinaryFileResponse
    {
        $path_to_file = public_path('uploads/erat.json');
        return response()->download($path_to_file, 'erat.json', [
            'Content-Disposition' => 'attachment; filename="' . 'erat.json' . '"'
        ]);
    }
}

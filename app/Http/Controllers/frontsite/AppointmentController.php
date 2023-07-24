<?php

namespace App\Http\Controllers\frontsite;

use App\Http\Controllers\Controller;
use App\Models\Division;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AppointmentController extends Controller
{
    public function index()
    {
        // dd("test");
        $list_division = Division::all();

        // dd($list_division);

        $imagePath = public_path('assets/images/bidang');

        // dd($imagePath);
        $images = File::allFiles($imagePath);
        // dd($images);

        if (count($images) > 0) {
            $randomImage = $images[rand(0, count($images) - 1)];
            $imagePath = $randomImage->getPathname();
            $fileType = File::mimeType($imagePath);

            $imageData = [
                'path' => $imagePath,
                'type' => $fileType,
            ];
        }

        $basePath = public_path();

        $relativePath = str_replace($basePath, '', $imageData['path']);
        // dd($relativePath);


        return view('pages.frontsite.appointment.index', [
            'list_division' => $list_division,
            'imageData' => $relativePath,
        ]);
    }

    public function create()
    {
        return view('pages.frontsite.appointment.store');
    }

    public function store()
    {
    }
}

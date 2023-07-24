<?php

namespace App\Http\Controllers\frontsite;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Division;
use App\Models\TimeAppointment;
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

    public function create($id)
    {
        $division = Division::find($id);

        $time = TimeAppointment::where('division_id', $id)->get();
        // dd($time);

        return view('pages.frontsite.appointment.store', [
            "division" => $division,
            "available_times" => $time
        ]);
    }

    public function store(Request $request, $id)
    {
        // dd($request->nama_tamu);
        // dd($id);

        $validatedData = $request->validate([
            'nama_tamu'  => 'required|max:255',
            'no_hp_tamu'  => 'required|max:255',
            'jumlah_tamu'  => 'required|integer',
            'detail_asal'  => 'required|max:255',
            'asal'  => 'required|max:255',
            'keperluan'  => 'required|max:255',
            'tanggal'  => 'required|max:255',
            'id_waktu'  => 'required|integer',
            'plat_mobil'  => 'nullable|max:255',
            'no_surat_tugas'  => 'nullable|integer',
            'file_surat_tugas'  => 'nullable|mimes:pdf|max:2048',
        ]);
        // dd($id);

        if ($request->file('file_surat_tugas')) {
            $validatedData['file_surat_tugas'] = $request->file('file_surat_tugas')->store('surat-tugas-tamu');
        }

        $validatedData['division_id'] = $id;

        Appointment::create($validatedData);

        // $request->user()->pendidikanFormal()->create($validatedData);

        return redirect('/success');
    }
}

@extends('layout.main')

@section('title', 'Success')

@section('content')
    <!-- Content -->
<div class="min-h-screen flex justify-center items-center pt-20 py-28">
    <div class="mx-auto text-center">
        <img
            src="{{ asset('/assets/images/success.svg') }}"
            class="inline-block"
            alt="Sign up success ilustration"
            style="width: 40%; margin-top: 100px; "
        />
        <div class="mt-12">
            <h2 class="text-[#1E2B4F] text-2xl font-semibold">Isi Form Berhasil</h2>

            <p class="text-[#AFAEC3] mt-4">Terima kasih telah mengisi form. Segera cetak bukti janji temu dan bawa ke dinkes tujuanmu.</h3>
                <br /><span class="title">Klik dibawah untuk mencetak</span></p>

                <button class="btn btn-primary">
                    Cetak Bukti
                </button>

        </div>
    </div>
</div>
<!-- End Content -->
@endsection


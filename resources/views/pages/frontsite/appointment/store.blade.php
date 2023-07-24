@extends('layout.main')

@section('title', 'Form Tamu')

@push('after-style')
<link rel="stylesheet" href="/assets/janji_temu/style.css">
<link rel="stylesheet" href="assets1/css/templatemo-lugx-gaming.css">
<link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
@endpush

@section('content')

<div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Bidang Promosi Kesehatan (PROMKES)</h3>
          <span class="breadcrumb"><a href="#">Home</a>  >  <a href="#">Form Tamu</a>  >  Promosi Kesehatan</span>
        </div>
      </div>
    </div>
  </div>

  <div class="section trending">
        <div class="container">
        <form action="#">
            <div class="form first">
                <div class="details personal">
                    <span class="title"><h3>Personal Details</h3></span>
                    <p>Silakan pilih jadwal yang tersedia untuk membuat pertemuan</p>
                    <span class="title">Harap mengisi form di bawah dengan lengkap</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Pilih Tanggal</label>
                            <input type="date" placeholder="Enter your name" required>
                        </div>

                        <div class="input-field">
                            <label>Nama Lengkap</label>
                            <input type="text" placeholder="Enter birth date" required>
                        </div>

                        <div class="input-field">
                            <label>Plat mobil (jika menggunakan mobil)</label>
                            <input type="text" placeholder="Plat mobil" required>
                        </div>

                        <div class="input-field">
                            <label>Pilih Waktu</label>
                            <input type="time" placeholder="Enter mobile number" required>
                        </div>

                        <div class="input-field">
                            <label>No. Hp</label>
                            <input type="number" placeholder="Enter your ccupation" required>
                        </div>

                        <div class="input-field">
                            <label>No. Surat Tugas</label>
                            <input type="number" placeholder="Enter your ccupation" required>
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <div class="fields">
                        <div class="input-field">
                            <label>Keperluan</label>
                            <input type="text" placeholder="Enter ID type" required>
                        </div>

                        <div class="input-field">
                            <label>Asal</label>
                            <select required>
                                <option disabled selected>Select Asal</option>
                                <option>Kementrian</option>
                                <option>Dinas Provinsi</option>
                                <option>Others</option>
                            </select>

                        </div>

                        <div class="input-field">
                            <label>Upload File Surat Tugas</label>
                            <input type="file" id="fileInput" name="fileInput">
                        </div>

                        <div class="input-field">
                            <label>Jumlah Orang</label>
                            <input type="number" placeholder="Enter issued state" required>
                        </div>

                        <div class="input-field">
                            <label>Detail Asal</label>
                            <input type="text" placeholder="Enter your issued date" required>
                        </div>
                    </div>

                    <button class="nextBtn">
                        <span class="btnText">Kirim</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div> 
            </div>

            <div class="form second">
                <div class="details address">
                    <h3>Terima kasih telah mengisi form. Segera cetak bukti janji temu dan bawa ke dinkes tujuanmu.</h3>
                    <span class="title">Klik dibawah untuk mencetak</span>

                        <button class="sumbit">
                            <span class="btnText">Cetak Bukti</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 
            </div>
        </form>
        </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




@push('after-script')
<script src="assets/js/isotope.min.js"></script>
<script src="assets/js/counter.js"></script>
{{-- <script src="vendor1/bootstrap/js/bootstrap.min.js"></script> --}}
<script src="assets1/js/isotope.min.js"></script>
{{-- <script src="assets1/js/owl-carousel.js"></script> --}}
<script src="assets1/js/counter.js"></script>
{{-- <script src="assets1/js/custom.js"></script> --}}
<script src="assets/janji_temu/script.js"></script>
@endpush
    
@endsection
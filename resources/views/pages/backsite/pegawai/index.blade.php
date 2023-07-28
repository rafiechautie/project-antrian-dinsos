@extends('layout.app')

@section('title', 'Pegawai')

@section('content')
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data Pegawai /</span> Kelola Pegawai</h4>

      <!-- Examples -->
                    <!-- Responsive Table -->
      <div class="container-fluid">
          <div class="panel panel">

              <div class="panel-heading">
                  <h3 class="panel-title">Data Pegawai</h3>
              </div>
              <div class="panel-body">


                  <div class="pull-right">
                      <a href="/dashboard/pegawai/create" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Pegawai</a>
                  </div>

                  <br>
                  <br>
                  <br>
                  <table id="table" class="table table-bordered table-striped table-hover table-datatable">
                      <thead>
                          <tr>
                              <th width="1%">No</th>
                              <th width="5%">Foto</th>
                              <th>Nama</th>
                              <th>Username</th>
                              <th class="text-center" width="10%">OPSI</th>
                          </tr>
                      </thead>
                      <tbody>
                       @foreach ($list_pegawai as $pegawai)
                            <td>{{ $loop->iteration }}</td>
                            @if ($pegawai->foto_profil)
                            <img
                                src="{{ asset('storage/' . $user->image) }}"
                                alt="user-avatar"
                                class="d-block rounded"
                                width="90"
                                height="120"
                                id="image-preview"
                                name="image-preview"
                          />
                            @else

                            @endif
                            <td>{{ $pegawai->iteration }}</td>
                            <td>{{ $pegawai->iteration }}</td>
                            <td>{{ $pegawai->iteration }}</td>
                            <td>{{ $pegawai->iteration }}</td>
                       @endforeach
                      </tbody>
                  </table>
              </div>
      <!--/ Responsive Table -->
   
    <!-- / Footer -->

    <div class="content-backdrop fade"></div>
  </div>
  <!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
@endsection
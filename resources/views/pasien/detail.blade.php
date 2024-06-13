<!-- Navbar -->
@include('layouts.header');
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
 @include('layouts.sidebar');
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard Pasien</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Pasien</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Pasien</th>
                  <th>Nama Pasien</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Gender</th>
                  <th>Email</th>
                  <th>Alamat</th>
                  <th>Kelurahan</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data_pasien as $pasien)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $pasien->kode }}</td>
                  <td>{{ $pasien->nama }}</td>
                  <td>{{ $pasien->tmp_lahir }}</td>
                  <td>{{ $pasien->tgl_lahir }}</td>
                  <td>{{ $pasien->gender }}</td>
                  <td>{{ $pasien->email }}</td>
                  <td>{{ $pasien->alamat }}</td>
                  <td>{{ $pasien->nama_kelurahan }}</td> 
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
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
            <h1>Dashboard unit_kerja</h1>
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
          <h3 class="card-title">unit_kerja</h3>

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
                  <th>id</th>
                  <th>Nama</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($list_unit_kerja as $unit_kerja)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $unit_kerja->id }}</td>
                  <td>{{ $unit_kerja->nama }}</td>
                  <td>
                  <a href="{{url('unit_kerja/detail/'.$unit_kerja->id)}}"><button class="btn btn-success">Detail</button></a>
                    <a href="{{ route('unit_kerja.edit', $unit_kerja->id) }}"><button class="btn btn-warning">Edit</button></a>
                    <form action="{{ route('unit_kerja.destroy', $unit_kerja->id) }}" method="POST" style="display:inline-block;">
                         @csrf
                         @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus unit kerja ini?')">Hapus</button>
                    </form>
                  </td>
                </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
          <div class="btn-group-vertical">
          <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#inputModal">Tambah</button>
          <!-- Modal -->
        <div class="modal fade" id="inputModal" tabindex="-1" role="dialog" aria-labelledby="inputModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="inputModalLabel">Tambah Unit Kerja</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <form action="{{url('unit_kerja/store')}}" method="POST">
                          {{csrf_field()}}
                        <div class="form-group">
                          <label for="nama">Nama</label>
                          <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                      <br>
                      <br>
                          <button type="submit" class="btn btn-primary btn-block" style="box-shadow: 0 8px 15px rgba(247, 147, 29, 0.4);">Simpan</button>
                      </form>
                  </div>
             </div>
         </div>
       </div>
      </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  {{-- footer --}}
  @include('layouts.footer');
  {{-- tutup footer --}}


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
          <div class="col-sm-6">1111111111
            <h1>Dashboard</h1>
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
          <h3 class="card-title">Admin</h3>

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
         <th colspan="6"><h2>Biodata</h2></th>
         <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Umur</th>
          <th>Email</th>
          <th>Kampus</th>
          <th>Alamat</th>
        </tr>
      </thead>
      <tbody>
        <tr>
        <td>1</td>
          <td>Yola Amanda Lestary</td>
          <td>18</td>
          <td>yolaamanda1608@gmailcom</td>
          <td>STT terpadu Nurul Fikri</td>
          <td>Palembang</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Susi Yanti</td>
          <td>19</td>
          <td>ssiynti9088@gmailcom</td>
          <td>STT terpadu Nurul Fikri</td>
          <td>Palembang</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Rina Harahap</td>
          <td>19</td>
          <td>Rinnahrp109@gmailcom</td>
          <td>STT terpadu Nurul Fikri</td>
          <td>Medan</td>
        </tr>
        <tr>
          <td>4</td>
          <td>Annisa Salsabila</td>
          <td>19</td>
          <td>nisa208@gmailcom</td>
          <td>STT terpadu Nurul Fikri</td>
          <td>Medan</td>
        </tr>
        <tr>
          <td>5</td>
          <td>Syarifani Fauziah</td>
          <td>20</td>
          <td>faniii1709@gmailcom</td>
          <td>STT terpadu Nurul Fikri</td>
          <td>Depok</td>
        </tr>
        <!-- Add more rows if needed -->
      </tbody>
    </table>
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
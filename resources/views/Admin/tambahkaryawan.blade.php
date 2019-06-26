<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Starter</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/font-awesome/css/font-awesome.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('admin/header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('admin/sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-md-8 col-md-offset-6">
            <h1 class="m-0 text-dark">Tambah Karyawan</h1>
            <hr>
				<form action="/datakaryawan" method="post">
					<div class="form-group">
						<label for="nama">NIK :</label>
						<input type="text" class="form-control" id="" name="">
					</div>
							<div class="form-group">
						<label for="nama">Nama :</label>
						<input type="text" class="form-control" id="" name="">
					</div>
							<div class="form-group">
						<label for="nama">Tanggal Lahir :</label>
						<input type="date" class="form-control" id="" name="">
					</div>
							 <div class="form-group">
						<label for="nama">Jenis Kelamin :</label>
            <br/>
						<input type="radio" name="">Perempuan<br/>
            <input type="radio" name="">Laki-laki
					</div>
					<div class="form-group">
					   <label for="nama">Alamat :</label>
					   <input type="address" class="form-control" id="" name="">
				   </div>
				   <div class="form-group">
					  <label for="nama">Departemen :</label>
					  <input type="text" class="form-control" id="" name="">
				  </div>
				  <div class="form-group">
					 <label for="nama">No Telp :</label>
					 <input type="text" class="form-control" id="" name="">
				 </div>
				 <label for="picture">Foto Profile Karyawan</label>
					<div class="form-group">
						<input type="file" class="form-control" id="file" name="file">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-md btn-primary">Submit</button>
						<button type="reset" class="btn btn-md btn-danger">Cancel</button>
					</div>
				</form>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid"> 
    @yield('content')    
    <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('admin/footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('lte/dist/js/Adminlte.min.js') }}"></script>
</body>
</html>

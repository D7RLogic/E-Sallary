<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> E-Salary</title>
  <link rel = "icon" type = "img/png" href = "{{("/img/Logo.png")}}">
  
  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  
          <h1 class="h3 mb-2 text-gray-800">Create User Employying</h1>
          <p><h6>Memasukan Data Karyawan</h6></p>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Admin Only</h6>
            </div>
           <div>
             <form action="{{route('update')}}" method="post">
               @csrf
<input type="hidden" value="{{$karyawans->id}}" name="id">
<div class="form-group">
  <label>nama karyawan</label>
                <input type="text" class="form-control" name="nama" value=""></div>
<div class="form-group">
  <label>No HP</label>
  <input type=" " name="hp" class="form-control" required="required" autocomplete="off" placeholder="">
</div>
<div class="form-group">
  <label>Alamat</label>
  <input type="text" name="alamat" class="form-control" required="required" autocomplete="off" placeholder="">
</div>
<div class="form-group">
  <label>jabatan</label>
  <select name="jabatan">
  @foreach($jabatans as $result)
  <option  value="{{$result->id_jabatan}}">{{$result->nama_jabatan}}</option>
  @endforeach
</select>
</div>
<div class="form-group">
  <label>Jam Lembur</label>
  <select name="lembur">
  @foreach($lemburs as $result)
  <option  value="{{$result->id_lembur}}">{{$result->jam_lembur}}</option>
  @endforeach
</select>
</div>
<div class="form-group">
  <label>tunjangan</label>
  <select name="tunjangan">
  @foreach($tunjangans as $result)
  <option  value="{{$result->id_tunjangan}}">{{$result->nama_tunjangan}}</option>
  @endforeach
</select>
</div>
<div class="form-group">
  <label>absen</label>
  <input type="text" name="absen" class="form-control" required="required" autocomplete="off" placeholder="">
</div>
<div class="form-group">
  <label>Status</label>
  <select name="status">
  @foreach($statuses as $result)
  <option  value="{{$result->id_status}}">{{$result->nama_status}}</option>
  @endforeach
</select>
</div>
<input type="submit" class="btn btn-primary" name="" value="submit">
           </div>
           </form>
          
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
          <span>dimas.rendyan@gmail.com<span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>

</html>

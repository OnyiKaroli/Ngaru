<?php

  require_once 'config/config.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ngaru Logistics Ltd || Agents</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="image/x-icon" href="favicon.ico">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
<?php
  require_once 'header.php';
?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
<?php
  require_once 'sidebarleft.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Agents</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Agent</li>
            </ol>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Agents</h3>
<?php
    if (isset($_GET['del_eid'])) {
      $del_eid = $_GET['del_eid'];

      //echo $del_eid;

      //$delete = new ClassDelete();
      //$delete->RemoveEmployee($server, $del_eid);
    }



    if (isset($_GET['eid'])) {
      $eid = $_GET['eid'];
        $update = mysqli_query($server, "DELETE FROM `users` WHERE `id`='$eid'") or die(mysqli_error($server));

    if ($update) {

      echo "
         <div class='alert alert-success alert-dismissible' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
                    </button>
                    <strong>Successfully</strong> updated status.
                  </div>";
    } else {
      echo "
         <div class='alert alert-danger alert-dismissible' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
                    </button>
                    <strong>Failed</strong>. Try again.
                  </div>";
    }
    }
?>                    
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Plot assigned</th>
                      <th>Date Created</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
<?php

      $select = mysqli_query($server, "SELECT * FROM `users` ORDER BY `id` ASC") or die(mysqli_error($server));
                  while ($column=mysqli_fetch_array($select)) {
          echo "
                    <tr>
                      <td>$column[0]</td>
                      <td>$column[1] $column[2]<br>";                  
              if ($column[5] == 1) {
                echo "<span class='badge badge-success'>Administrator</span>";
              }else {
                echo "<span class='badge badge-warning'>Staff</span>";
              }
            echo "</td>
                      <td>$column[3]</td>";
                      $bID = $column[6];
                      $branch = mysqli_query($server, "SELECT * FROM `properties` WHERE `agent` = $bID") or die(mysqli_error($server));
                      while ($row=mysqli_fetch_array($branch)){
                        if ($row[1] == null) {
                          echo "<td>'Not assigned'</td>";
                        } else {
                          echo "<td>$row[1]</td>";
                        }
                        
                        

                      }
                      echo "<td>$column[7]</td>";
                      echo "<td>           
                            <a href='edit-agent?aid=".$column['id']."' class= 'btn btn-warning btn-xs'><i class='nav-icon fas fa-edit'></i></a>&nbsp;
                            <a href='all-staff.php?eid=".$column[0]."' class='btn btn-danger btn-xs'><i class='nav-icon fas fa-trash'></i></a>&nbsp;                     
                       </td>
                    </tr>
          ";
          }
?>
   

                  </tbody>
                  <tfoot>
                    <tr>
                    <th>Id</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Plot assigned</th>
                      <th>Date Created</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php
  require_once 'footer.php';
?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
<?php

  require_once 'config/config.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ngaru Admin || Blogs</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

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
            <h1>All Blogs</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">All Blogs</li>
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
                <h3 class="card-title">All Blogs</h3>
<?php

          if(isset($_GET['did']))
          {
              $did = $_GET['did'];
              $delete = mysqli_query($server, "DELETE FROM `blogs_tb` WHERE `id`='$did'");
                  if ($delete) {
                        echo "<div class='alert alert-block alert-success'>
                         <button type='button' class='close' data-dismiss='alert'>×</button>
                          Successfully deleted.<br/> </div>";
                      }else {
                        echo "<div class='alert alert-block alert-danger'>
                         <button type='button' class='close' data-dismiss='alert'>×</button>
                         Failed. Please try again.<br/> </div>";
                      }

          }
                            


    if (isset($_GET['aid'])) {
      $aid = $_GET['aid'];
      $st = $_GET['st'];
      $update = mysqli_query($server, "UPDATE `blogs_tb` SET `status`='$st' WHERE `id`='$aid'") or die(mysqli_error($server));

      if ($update) {
            echo "
             <div class='alert alert-success alert-dismissible' role='alert'>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
                        </button>
                        <strong>Successfully</strong> updated
                      </div>";
                      //header( "refresh:2;url=login" );
                  
        }else{
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
                      <th>ID</th>
                      <th>Title</th>
                      <th>Author</th>
                      <th>Image</th>
                      <th>Description</th>
                      <th>Date</th>
                      <th>ACTION</th>
                    </tr>
                  </thead>
                  <tbody>


<?PHP

    $select = mysqli_query($server, "SELECT * FROM `blogs_tb` WHERE `category`!='1' AND `sub_category`!='7'   ORDER BY `id` ASC") or die(mysqli_error($server));
    while ($column = mysqli_fetch_assoc($select)) {
      echo "
                    <tr>
                      <td>".$column['id']."</td>
                      <td>".$column['title']."<br>";
      if ($column['status'] == 'active') {
        echo"<span class='badge badge-success'>".$column['status']."</span>";
      }else if($column['status'] == 'inactive'){
        echo"<span class='badge badge-danger'>".$column['status']."</span>";
      }else if($column['status'] == 'pending'){
        echo"<span class='badge badge-warning'>".$column['status']."</span>";
      }
                      echo"</td>
                      <td>".$column['author']."</td>
                      <td>".$column['file']."</td>
                      <td>"?>
<?php

 // $description = substr($column['description'], 0, 35);
  //echo $description;
?>
                    
<?php
                  echo "</td>
                      <td>".$column['date']."</td>
      
      
      
                  
          <td>      
            <a href='all-blogs?aid=".$column['id']."&st=active' class= 'btn btn-primary btn-xs'><i class='nav-icon fas fa-check'></i></a>
            <a href='all-blogs?aid=".$column['id']."&st=inactive' class= 'btn btn-danger btn-xs'><i class='nav-icon fas fa-times'></i></a>
            <a href='edit-blog?aid=".$column['id']."' class= 'btn btn-warning btn-xs'><i class='nav-icon fas fa-edit'></i></a>
            <a href='all-blogs?did=".$column['id']."' class= 'btn btn-danger btn-xs'><i class='nav-icon fas fa-trash'></i></a>

          </td>
        </tr>";
    }

?>
   

                  </tbody>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Title</th>
                      <th>Author</th>
                      <th>Image</th>
                      <th>Description</th>
                      <th>Date</th>
                      <th>ACTION</th>
                    </tr>
                </table>





























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
  //require_once 'footer.php';
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

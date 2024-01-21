<?php

  require_once 'config/config.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ngaru Logistics Ltd || Already sold</title>
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




  <script src="https://cdn.tiny.cloud/1/ko5h87abjkmpod58i7prrco4oxmratd7jemcj5kbvpni6iqa/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>


  <script>
  tinymce.init({
      selector: '.textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ],
      setup: function (editor) {
      editor.on('change', function (e) {
      editor.save();
    });
}
    });
  </script>

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
            <h1>Properties</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Properties</li>
            </ol>
          </div> 

        <!--  <div class="col-12">
            <a href="mng-products.php" class="btn btn-info">Manage Products</a>
            <a href="view-products.php" class="btn btn-primary">Products</a>
            <a href="add-product.php" class="btn btn-success">Add Product</a>
          </div>-->


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
                <h3 class="card-title">Available Properties</h3>


            <?php
if(isset($_GET['did']))
{
    $did = $_GET['did'];
    $delete = mysqli_query($server, "DELETE FROM `properties` WHERE `id`='$did'");
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

?>                    
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                      <tr>
                        <th>ID</th>
                        <th>Plot Name</th>
                        <th>Location</th>
                        <th>Price</th>
                        <th>Deposit</th>
                        <th>Featured</th>
                        <th>Size</th>
                        <th>Agent</th>
                        <th>State</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php

    $select = mysqli_query($server, "SELECT * FROM `properties` WHERE `status` = 1 ORDER BY `date` ASC") or die(mysqli_error($server));
    while ($column = mysqli_fetch_assoc($select)) {
      echo "
                    <tr>
                      <td>".$column['id']."</td>
                      <td>".$column['name']."</td>
                      <td>".$column['location']."</td>
                      <td>".$column['price']."</td>
                      <td>".$column['deposit']."</td>
                      <td>".$column['featured']."</td>
                      <td>".$column['size']."</td>";?>
                      <?php
                        $agent = $column['agent'];
                        $state = $column['status'];
                        $select = mysqli_query($server, "SELECT * FROM `users` WHERE `id` = '$agent'") or die(mysqli_error($server));
                          while ($row=mysqli_fetch_array($select)) {
                            echo "<td>$row[1]</td>";
                          }
                          if ($state == 0) {
                            echo "<td>Already sold</td>";
                          } else {
                            echo "<td>Available</td>";
                          }
                          echo "<td>
                                  <a href='edit-property?aid=".$column['id']."' class= 'btn btn-warning btn-xs'><i class='nav-icon fas fa-edit'></i></a>
                                  <a href='all-properties?did=".$column['id']."' class= 'btn btn-danger btn-xs'><i class='nav-icon fas fa-trash'></i></a>
                                </td>";
                          
    }
                      ?>


                    </tbody>
                      <tfoot>
                        <th>ID</th>
                        <th>Plot Name</th>
                        <th>Location</th>
                        <th>Price</th>
                        <th>Deposit</th>
                        <th>Featured</th>
                        <th>Size</th>
                        <th>Agent</th>
                        <th>State</th>
                        <th>Actions</th>
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


<?php
  require_once 'footer.php';
?>


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
<?php
$edit_id = $_GET['aid'];
  require_once 'config/config.php';
  unset($_SESSION['user']['client_ses']);

?>
<!DOCTYPE html>
<html> 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ngaru Logistics Ltd || Add Property</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
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
            <h1>Edit Property</h1>
          </div>

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Property</li>
            </ol>
          </div>

<?php
  //include 'products-header.php';
?>

          
        </div>
      </div><!-- /.container-fluid -->
    </section>


  <script src="https://cdn.tiny.cloud/1/ko5h87abjkmpod58i7prrco4oxmratd7jemcj5kbvpni6iqa/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>


  <script>
    /*
    tinymce.init({
      selector: 'textarea',
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
    });*/
  </script>







    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="row">
          <!-- left column -->
          <div class="col-md-2 col-lg-2"></div>
          <div class="col-md-8 col-lg-8">
             <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Property Details</h3>
              </div>
<?php
  if (isset($_POST['edit_property'])){
    $edit_id = $_GET['aid'];
    $name = mysqli_real_escape_string($server, $_POST['name']);
    $address = mysqli_real_escape_string($server, $_POST['address']);
    $price = mysqli_real_escape_string($server, $_POST['price']);
    $deposit = mysqli_real_escape_string($server, $_POST['deposit']);
    $size = mysqli_real_escape_string($server, $_POST['size']);
    $featured = mysqli_real_escape_string($server, $_POST['featured']);
    $status = mysqli_real_escape_string($server, $_POST['status']);
    $agent = mysqli_real_escape_string($server, $_POST['agent']);

        $insert = mysqli_query($server, "UPDATE `properties` SET `name`='$name',`location`='$address',`price`='$price',`deposit`='$deposit',`featured`='$featured',`size`='$size',`agent`='$agent',`status`='$status' WHERE `id` = '$edit_id'") or die(mysqli_error($server));
            
            if ($insert) {
              echo "<div class='alert alert-success alert-dismissible' role='alert'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
                </button>
                <strong>Successfully</strong> Property updated.
              </div>";
                header( "location:all-properties" );
                    
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
              <!-- /.card-header -->
              <!-- form start -->
              <?php
                $aid = $_GET['aid'];
                $select = mysqli_query($server, "SELECT * FROM `properties` WHERE `id`='$aid'") or die('Mysql Error');

                    while ($column=mysqli_fetch_assoc($select)) {

?> 
              <form role="form" method="post" enctype='multipart/form-data'>
                <div class="card-body row">
                 <div class="col-md-12">

                <div class="form-group">
                    <label for="exampleInputEmail1">Plot Name*</label>
                    <input type="text" class="form-control" name="name" required="" placeholder="<?php echo $column['name']; ?>">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Location*</label>
                    <input type="text" class="form-control" name="address" required="" placeholder="<?php echo $column['location']; ?>">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Price*</label>
                    <input type="number" min="0" class="form-control" name="price" required="" placeholder="<?php echo $column['price']; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Deposit*</label>
                    <input type="number" min="0" class="form-control" name="deposit" required="" placeholder="<?php echo $column['deposit']; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Size*</label>
                    <input type="number" min="0" class="form-control" name="size" required="" placeholder="<?php echo $column['size']; ?>">
                </div>
                <div class="form-group">
                  <label>Featured*</label>
                  <select required="" class="form-control select2" name="featured" style="width: 100%;">
                    <option value="">Select</option>
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>State*</label>
                  <select required="" class="form-control select2" name="status" style="width: 100%;">
                    <option value="">Select</option>
                    <option value="0">Already sold</option>
                    <option value="1">Available</option>
                  </select>
                </div>
            <div class="form-group">
                <label>Agent*</label>
                  <select required="" name="agent" class="form-control select2" style="width: 100%;">
                    <option value="">--Select Agent--</option>
<?php
      $select = mysqli_query($server, "SELECT * FROM `users`  ORDER BY `firstname` ASC") or die(mysqli_error($server));
                  while ($column=mysqli_fetch_array($select)) {
          echo "<option value='$column[0]'><b>$column[1] $column[2]</b></option>";
          }
        }?>
                  </select>
                </div>                
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="edit_property" class="btn btn-primary">Proceed</button>
                </div>
              </form>
            </div>
          </div>

          <div class="col-md-2 col-lg-2"></div>
          <!--/.col (right) -->
        </div>
        <!-- /.card -->


        <!-- /.row -->
      </div><!-- /.container-fluid -->
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
<!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>
</body>
</html>
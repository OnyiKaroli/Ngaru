<?php
    $edit_id = $_GET['aid'];
    require_once 'config/config.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ngaru Logistics Ltd || Add Agent</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="image/x-icon" href="favicon.ico">

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
            <h1>Add Agent</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Agent</li>
            </ol>
          </div>

      

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="row align-center">
          <!-- left column -->
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Agent Details</h3>
                
              </div>
<?php
  if (isset($_POST['edit'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $type = $_POST['type'];
        $branch_id = $_POST['branch_id'];


      $update = mysqli_query($server, "UPDATE `users` SET `firstname`='$firstname',`lastname`='$lastname',`email`='$email',`type`='$type',`branch_id`='$branch_id' WHERE `id` = '$edit_id')") or die(mysqli_error($server));
      
      if ($update) {
            echo "
             <div class='alert alert-success alert-dismissible' role='alert'>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
                        </button>
                        <strong>Successfully</strong> added staff.
                      </div>";
                      header( "refresh:url=all-agents" );
                  
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
                $select = mysqli_query($server, "SELECT * FROM `users` WHERE `id`='$edit_id'") or die('Mysql Error');

                    while ($row=mysqli_fetch_assoc($select)) {
                ?>
              <form role="form" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">First Name*</label>
                    <input type="text" class="form-control" required="" name="firstname" placeholder="<?php echo $row['firstname']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Last Name*</label>
                    <input type="text" class="form-control" required="" name="lastname" placeholder="<?php echo $row['lastname']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email*</label>
                    <input type="email" name="email" required="" class="form-control" placeholder="<?php echo $row['email']; ?>">
                  </div>

                <div class="form-group">
                  <label>Account Type*</label>
                  <select required="" class="form-control select2" name="type" style="width: 100%;">
                    <option value="">-select position-</option>
                    <option value="1">Administrator</option>
                    <option value="2">Staff</option>
                  </select>
                </div>
                <div class="form-group">
                <label>Plot assigned*</label>
                  <select required="" name="branch_id" class="form-control select2" style="width: 100%;">
                    <option value="">--Select Plot--</option>
<?php
      $select = mysqli_query($server, "SELECT * FROM `properties`  ORDER BY `date` ASC") or die(mysqli_error($server));
                  while ($column=mysqli_fetch_array($select)) {
          echo "<option value='$column[0]'><b>$column[1] $column[2]</b></option>";
          }
        }?>
                  </select>
                </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="edit" class="btn btn-primary">Save</button>
                </div>
              </form>
            </div>
            <!-- /.card -->



          <div class="col-md-3"></div>
          <!--/.col (left) -->
          <!-- right column -->
      

            <!-- /.card -->
          </div>
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
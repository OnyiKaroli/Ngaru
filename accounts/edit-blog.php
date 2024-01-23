<?php
  require_once 'config/config.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ngaru Admin || Edit Blog</title>
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
            <h1>Edit Blog</h1>
          </div>

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Blog</li>
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
    });
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
                <h3 class="card-title">Post Blog</h3>
              </div>
<?php
  if (isset($_POST['edit_blog'])){
    $edit_id = $_GET['aid'];
    $title = mysqli_real_escape_string($server, $_POST['title']);
    $author = mysqli_real_escape_string($server, $_POST['author']);
    $status = mysqli_real_escape_string($server, $_POST['inactive']);
    $category = mysqli_real_escape_string($server, $_POST['category']);
    $sub_category = mysqli_real_escape_string($server, $_POST['sub_category']);
    $description = mysqli_real_escape_string($server, $_POST['description']);

    $tdate = $_POST['tdate'];
    $tdate = date("d M Y", strtotime($tdate));
    

    $date = date("Y-m-d");
    $time = date("G:i:s");


    $fileh = $_POST['fileh'];

    // Count total uploaded files
    $totalfiles = count($_FILES['file']['name']);
  if ($totalfiles != 3) {
    echo "
     <div class='alert alert-danger alert-dismissible' role='alert'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
        </button>
        <strong>Failed</strong>. Ensure uploaded files are 3 to update images.
      </div>";
  }else{
      // Compress image
      function compressImage($source, $destination, $quality) {

        $info = getimagesize($source);

        if ($info['mime'] == '_img/jpeg') 
          $image = imagecreatefromjpeg($source);

        elseif ($info['mime'] == '_img/gif') 
          $image = imagecreatefromgif($source);

        elseif ($info['mime'] == '_img/png') 
          $image = imagecreatefrompng($source);

        imagejpeg($image, $destination, $quality);

      }

      //loop starts
      for($i=0;$i<$totalfiles;$i++){
        // Getting file name
        $filename = $_FILES["file"]["name"][$i];
        //rename here
           //get name of each
        $temp = explode(".", $filename);
        //rename
        $newfilename = round(microtime(true)) .'-'.$i.'.' . end($temp);
        //end rename   


        // Valid extension
        $valid_ext = array('png','jpeg','jpg');

        // Location
        $location = "../images/blogs/".$newfilename;



        // file extension
        $file_extension = pathinfo($location, PATHINFO_EXTENSION);
        $file_extension = strtolower($file_extension);

        // Check extension
        if(in_array($file_extension,$valid_ext)){

            //get image size
            $image_size = $_FILES["file"]["size"];

            $image_size = $image_size[0];

            if($image_size > 5242880){
              echo "Ensure images uploaded are less than 5 MBs";
            }elseif (($image_size < 5242880) && ($image_size > 4194304)) {
                     // Compress Image
              compressImage($_FILES['file']['tmp_name'][$i],$location,12);
            }elseif (($image_size < 4194304) && ($image_size > 3145728)) {
              // Compress Image
              compressImage($_FILES['file']['tmp_name'][$i],$location,16);
            }elseif (($image_size < 3145728) && ($image_size > 2097152)) {
              // Compress Image
              compressImage($_FILES['file']['tmp_name'][$i],$location,25);
            }elseif (($image_size < 2097152) && ($image_size > 1048576)) {
              // Compress Image
              compressImage($_FILES['file']['tmp_name'][$i],$location,50);
            }else{
              // Compress Image
              compressImage($_FILES['file']['tmp_name'][$i],$location,60);
            }

          $db_name = $_SESSION['filename'] .= $newfilename.", ";


        }



      }
      //loop ends
    }

      $file = $_SESSION['filename'];

      if ($file == null) {
        $file = $fileh;
      }
//upload image end


        $update = mysqli_query($server, "UPDATE `blogs_tb` SET `title`='$title', `author`='$author', `description`='$description',  `category`='$category',`sub_category`='$sub_category',`file`='$file',`tdate`='$tdate' WHERE `id`='$edit_id'") or die(mysqli_error($server));
            
            if ($update) {
              unset($_SESSION['filename']);
              echo "
               <div class='alert alert-success alert-dismissible' role='alert'>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
                  </button>
                  <strong>Successfully</strong> updated blog.
                </div>";        
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


    $select = mysqli_query($server, "SELECT * FROM `blogs_tb` WHERE `id`='$aid'") or die('Mysql Error');

          while ($column=mysqli_fetch_assoc($select)) {

?> 
  
              <form role="form" method="post" enctype='multipart/form-data'>
                <div class="card-body row">
                 <div class="col-md-6">
                    

                <div class="form-group">
                    <label for="exampleInputEmail1">Title*</label>
                    <input type="text" class="form-control" name="title" required="" value="<?php echo $column['title']; ?>" placeholder="Enter title">
                </div>


                <div class="form-group">
                    <label for="exampleInputEmail1">Author*</label>
                    <input type="text" class="form-control" name="author" required=""  value="<?php echo $column['author']; ?>"  placeholder="Enter author">
                </div>

                  <div class="form-group">
                    <b>Upload 3 images with the dimensions and order below</b>
                    <p> 

<?php
if ($column['file'] !== "") {
$str = $column['file'];
$file = explode(', ',$str);
   
                        echo"1. Featured Image (255*150)*<br>
                        <img class='entry-thumb' src='../images/blogs/$file[0]' height='50px' width='auto' alt=''><br>";
                        echo"2. Sidebar Image (100*100)*<br>
                        <img class='entry-thumb' src='../images/blogs/$file[1]' height='50px' width='auto' alt=''><br>";
                        echo"3. Details Image (777*441)*<br>
                        <img class='entry-thumb' src='../images/blogs/$file[2]' height='50px' width='auto' alt=''>";
}
?> 

 
                    
                    </p>

                    <input type="hidden" name="fileh"  value="<?php echo $column['file']; ?>">

                    <input type="file" name="file[]"  multiple="" class="form-control" >
                  </div>



                 </div>
                 <div class="col-md-6">

                

                  <div class="form-group">
                    <label for="exampleInputPassword1">Date*</label>
                    <input type="date" required=""  value="<?php echo $column['date']; ?>"  name="tdate"  class="form-control" placeholder="pages">
                  </div>


        


                <div class="form-group">
                  <label>Category*</label>
                  <select required="" name="category" class="form-control select2" style="width: 100%;">
                      <option  value="<?php echo $column['category']; ?>" ><?php echo $column['category']; ?></option>
                    <option value="">--select category--</option>
<?php
      $select = mysqli_query($server, "SELECT * FROM `categories_tb`  ORDER BY `name` ASC") or die(mysqli_error($server));
                  while ($column_cat=mysqli_fetch_array($select)) {
          echo "<option value='$column_cat[0]'><b>$column_cat[1]</b></option>";
          }
?>
                  </select>
                </div>






                <div class="form-group">
                  <label>Sub Category*</label>
                  <select required="" name="sub_category" class="form-control select2" style="width: 100%;">
                      <option  value="<?php echo $column['sub_category']; ?>" ><?php echo $column['sub_category']; ?></option>
                    <option value="">--select category--</option>
<?php
      $select = mysqli_query($server, "SELECT * FROM `sub_categories_tb`  ORDER BY `name` ASC") or die(mysqli_error($server));
                  while ($column_sub=mysqli_fetch_array($select)) {
          echo "<option value='$column_sub[0]'><b>$column_sub[1]</b></option>";
          }
?>
                  </select>
                </div>




                 </div>

                <div class="col-md-12">
                  
                <div class="form-group">
                    <label for="exampleInputEmail1">Description*</label>
                    <textarea rows="12" type="text" class="form-control" name="description"  placeholder="Type here..." required="" ><?php echo $column['description']; ?></textarea>
                    
                  </div>
                </div>


                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="edit_blog" class="btn btn-primary">Edit Blog</button>
                </div>
              </form>
<?php
  }

?>


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

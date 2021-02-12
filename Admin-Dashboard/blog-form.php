<?php
include("_includes/connection.php");
session_start();
  if(!isset($_SESSION['ID']) && $_SESSION['ID'] == '') {
    $_SESSION['login'] = 0;
    header('Location: login.php');
  }

  if(isset($_GET["editID"])) {
    $edit = $_GET["editID"];
    $_SESSION['editID'] = $edit;
    $query = "SELECT * FROM `blog` WHERE `blog-id`=$edit";
    $execute = mysqli_query($conn,$query);
    $rec = mysqli_fetch_array($execute);
}
if(!isset($_GET['editID'])) {
  unset($_SESSION['editID']);
}
?>
<!DOCTYPE html>
<html>
<head>
  <?php include('_includes/head.php') ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
   <?php include('_includes/navbar.php') ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include('_includes/aside.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <?php
            if(isset($_SESSION['editID']) && $_SESSION['editID'] != ''){
                    echo "<h1>Edit Data</h1>";
                    } else {
                      echo "<h1>Blog Entry</h1>";
                    }?>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?php 
                if(isset($_SESSION['editID']) && $_SESSION['editID'] != ''){
                  ?>Edit <?php 
                } else {
                  ?>Enter <?php
                }?>Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              

              <form role="form" action="_includes/moderna/blog-insertion.php" method="POST" enctype="multipart/form-data">
              <div class="card-body row">
                  <div class="form-group col-md-6">
                    <label for="firstname">Photo</label>
                    <input type="file" class="form-control" name="img">
                    <input type="hidden" name="image" value="<?php if(isset($_SESSION['editID']) && $_SESSION['editID'] != ''){
                    echo $row['blog-img'];
                    } else { echo "";} ?>"/>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="firstname">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title"<?php if(isset($_SESSION['editID']) && $_SESSION['editID'] != ''){
                    echo "value = ".$rec['blog-title'];
                    } else {
                      echo "value = ''";
                    }?> required>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="firstname">Short Description</label>
                    <textarea type="text" class="form-control" rows="10" name="description" placeholder="Blog-Description"  required ><?php if(isset($_SESSION['editID']) && $_SESSION['editID'] != ''){ echo $rec['blog-description'];
                    }?></textarea>
                  </div>
                  <div class="form-group col-md-12 ">
                    <label for="lastname">Full Blog</label>
                    <textarea type="text" class="form-control" rows="20" name="blog" placeholder="Blog"  required ><?php if(isset($_SESSION['editID']) && $_SESSION['editID'] != ''){ echo $rec['blog'];
                    }?></textarea>
                  </div>
                  <?php
                  if(isset($_SESSION['editID']) && $_SESSION['editID'] != '') { ?>
                    <input type="hidden" name="edit" value="<?php echo $rec['blog-id']; ?>">
                  <?php  }?>

                  
                  
                <!-- /.card-body -->

                <div class="card-footer col-md-12 text-center">
                  <button type="submit" name="btn" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
       
      </div>

    </section>
  </div>
  <!-- /.content-wrapper -->
 <?php 
 include('_includes/footer.php') ?>
 
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
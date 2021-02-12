<?php
  include('_includes/connection.php');
  session_start();
  if(!isset($_SESSION['ID']) && $_SESSION['ID'] == '') {
    $_SESSION['login'] = 0;
    header('Location: login.php');
  }
  if(isset($_POST['delete'])) {
      include('_includes/delete.php');
  }
  if(isset($_GET['ID'])) {
      $id = $_GET['ID'];
        $delete = "DELETE FROM `student-entry` WHERE user_id=$id";
        $execute = mysqli_query($conn, $delete);
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
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
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
              
              <!-- /.card-header -->
              <div class="card-body row">
                <?php
                include("_includes/datarendering.php");
                while($rows = mysqli_fetch_array($result)) { ?>
                <div class="card col-4" style="width: 10rem;">
                    <img class="card-img-top" src="uploads/<?php echo $rows['file-name']; ?>" alt="Card image cap" width="50" height="350">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $rows['firstname']?> <?php echo $rows['lastname'] ?></h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter<?php echo $rows['user_id'];?>">
                            View More Details
                        </button>
                    </div>
                </div>
                    <!-- Button trigger modal -->
                    

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter<?php echo $rows['user_id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $rows['firstname'].$rows['lastname'] ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h1><?php echo $rows['firstname']?> <?php echo $rows['lastname'] ?></h1>
                            <h4><?php echo $rows['fathername'];?></h4>
                            <h4><?php echo $rows['city'];?></h4>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                    </div>
                    </div>

                <?php } ?>


                  
              </div>
                <form action="" method="POST">
                  <input type="submit" name="delete" value="Delete All Data" class="btn btn-danger my-4">
                </form>
              <!-- /.card-body -->
            </div>
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
  <?php include('_includes/footer.php') ?>
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

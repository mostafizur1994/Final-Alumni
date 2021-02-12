<?php
include('_includes/connection.php');
session_start();
  if(!isset($_SESSION['ID']) && $_SESSION['ID'] == '') {
    $_SESSION['login'] = 0;
    header('Location: login.php');
  }
  if(isset($_POST['delete'])) {
      $delete = "DELETE FROM `blog`";
        $execute = mysqli_query($conn, $delete);
  }
  if(isset($_GET['ID'])) {
      $id = $_GET['ID'];
        $delete = "DELETE FROM `blog` WHERE `blog-id`=$id";
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
            <h1>Blog Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Table</li>
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
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Photo</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Blog</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                <?php
                $query = "SELECT * FROM `blog` WHERE 1";
                $execute = mysqli_query($conn,$query);

                
                while($rows=mysqli_fetch_array($execute)) 
                { ?>
                <tr>
                <td><?php echo $rows['blog-id'];?></td> 
                <td><img src="uploads/<?php echo $rows['blog-img'] ?>" width="100" alt=""></td>
                <td><?php echo $rows['blog-title'];?></td> 
                <td><?php echo $rows['blog-description'];?></td> 
                <td><?php echo $rows['blog'];?></td> 
                
                <td><a href="blog-table.php?ID=<?php echo $rows['blog-id'] ?>"><i class="fa fa-trash"></i></a>
                <a href="blog-form.php?editID=<?php echo $rows['blog-id'] ?>"><i class="fa fa-edit"></i></a>
                </td>
                
                
            </tr>
            <?php 
                } 
             ?>
                  </tbody>
                </table>
                <form action="" method="POST">
                  <input type="submit" name="delete" value="Delete All Data" class="btn btn-danger my-4">
                </form>
                  
              </div>
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

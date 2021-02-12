<?php
include('_includes/connection.php');
session_start();
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
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Picture</th>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>FatherName</th>
                    <th>City</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Action</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                  
                <?php
                
                include('_includes/datarendering.php');
                while($rows=mysqli_fetch_array($result)) 
                { ?>
                <tr>
                <td><?php echo $rows['user_id'];?></td> 
                <td><img src="uploads/<?php echo $rows['file-name']; ?>" alt="" width="100" height="100"></td> 
                <td><?php echo $rows['firstname'];?></td> 
                <td><?php echo $rows['lastname'];?></td> 
                <td><?php echo $rows['fathername'];?></td> 
                <td><?php echo $rows['city'];?></td> 
                <td><?php echo $rows['address'];?></td> 
                <td><?php echo $rows['email'];?></td> 
                <td><a href="table.php?ID=<?php echo $rows['user_id'] ?>"><i class="fa fa-trash"></i></a>
                <a href="form.php?editID=<?php echo $rows['user_id'] ?>"><i class="fa fa-edit"></i></a>
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

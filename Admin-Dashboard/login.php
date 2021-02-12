<!DOCTYPE html>
<html>
<head>
  <?php include('_includes/head.php') ?>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Admin</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <?php 
      session_start();
        if(isset($_SESSION['login']) && $_SESSION['login'] == 0 || isset($_GET['login'])) {
          echo "<div class='alert alert-danger' role='alert'>
          LogIn Error Please LogIn with Correct Email</div>";
        }
        session_destroy();
      ?>
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="_includes/adminlogin.php" method="post">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="">
            <a href="../index.php" class="btn btn-success btn-block">Back To Website</a>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-6">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-0">
        <a href="register.php" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<?php include('_includes/footer.php') ?>

</body>
</html>

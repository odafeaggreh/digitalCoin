<?php
    session_start();

    if ($_SESSION['email'] == "") {
      header("location: index.php");
    }
    include_once 'header_member.php';
?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Create Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Create users</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
        <!-- /.row -->
        <!-- Main row -->
        
        <!-- /.row (main row) -->
      <div class="container create-container">
        <form action="php/create.php" method="POST">
          <h4 class="display-4 text-center">Create New User</h4><hr><br>
          <?php if (isset($_GET['error'])) {?>
          <div class="alert alert-danger" role="alert">
            <?php echo $_GET['error']?>
          </div>
          <?php }?>
          <div class="mb-3">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstName" placeholder="Enter user first name" name="firstName">
          </div>

          <div class="mb-3">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastName" placeholder="Enter user last name" name="lastName">
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" placeholder="Enter user Email" name="email">
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter user password" name="password">
          </div>
          <button type="submit" class="btn btn-primary" name="create">Create</button>
          <a href="member_view.php" class="link-primary">View users</a>
        </form>
      </div>
        
      </div><!-- /.container-fluid -->

      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
    include_once 'footer.php';
?>
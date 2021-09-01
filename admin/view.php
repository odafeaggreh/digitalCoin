<?php
    // session_start();

    // if ($_SESSION['email'] == "") {
    //   header("location: login.php");
    // }
    include_once 'cre_header.php';
?>



<?php
  include 'reaad.php';
?>

<?php
  include 'myconn.php';
  $sql = "SELECT userID FROM users ORDER BY userID";
  $row_result = mysqli_query($con, $sql);

  $rows_num = mysqli_num_rows($result);

  
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
        <!-- Small boxes (Stat box) -->
        <div class="row">
          
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo '<h1>'.$rows_num.'</h1>';?></h3>

                <p>Registered users</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
          
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        
        <!-- /.row (main row) -->
      <div class="container">
        <div class="box">
          <h4 class="display-4 text-center">User List</h4><hr><br>
          <?php if (isset($_GET['success'])) {?>
          <div class="alert alert-success" role="alert">
            <?php echo $_GET['success']?>
          </div>
          <?php }?>
          <?php if (mysqli_num_rows($result)){ ?>

          
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First Name</th>
                  <th scope="col">Last Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Total Balance</th>
                  <th scope="col">Total Deposit</th>
                  <th scope="col">Profit</th>
                  <th scope="col">Crypto Address</th>
                  <th scope="col">Plan</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $i = 0;
                  while($rows = mysqli_fetch_assoc($result)) {
                    $i++;
                ?>
                

                
                <tr>
                  <th scope="row"><?=$i?></th>
                  <td><?php echo $rows['firstName']?></td>
                  <td><?php echo $rows['lastName']?></td>
                  <td><?php echo $rows['email']?></td>
                  <td><?php echo $rows['totalbalance']?></td>
                  <td><?php echo $rows['totaldeposit']?></td>
                  <td><?php echo $rows['profit']?></td>
                  <td><?php echo $rows['btcaddress']?></td>
                  <td><?php echo $rows['plan']?></td>
                  <td style="display:flex; flex-direction:row;">
                    <a href="update.php?id=<?php echo $rows['userID']?>" class="btn btn-success" style="margin: 0 7px">Update</a>
                  
                    <a href="delete.php?id=<?php echo $rows['userID']?>" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
              <?php }?>
              </tbody>
            </table>
          <?php }?>
            <div class="link-right">
              <a href="dashboard.php" class="link-primary">Creat a users</a>
            </div>
          </div>
        </div>
      </div>
        
      </div><!-- /.container-fluid -->

      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
    include_once 'footer.php';
  ?>
<?php
    // session_start();

    // if ($_SESSION['email'] == "") {
    //   header("location: login.php");
    // }
    include_once 'cre_header_member.php';
?>



<?php
  include 'reaad.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">User List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User List</li>
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
                  <!-- <th scope="col">Email</th> -->
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
                  
                  <td><?php echo $rows['totalbalance']?></td>
                  <td><?php echo $rows['totaldeposit']?></td>
                  <td><?php echo $rows['profit']?></td>
                  <td><?php echo $rows['btcaddress']?></td>
                  <td><?php echo $rows['plan']?></td>
                  <td style="display:flex; flex-direction:row;">
                    <a href="member_update.php?id=<?php echo $rows['userID']?>" class="btn btn-success" style="margin: 0 7px">Update</a>
                  </td>
                </tr>
              <?php }?>
              </tbody>
            </table>
          <?php }?>
            <div class="link-right">
              <a href="dashboard_members.php" class="link-primary">Creat a users</a>
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
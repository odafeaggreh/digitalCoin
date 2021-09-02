<?php
    // session_start();

    // if ($_SESSION['email'] == "") {
    //   header("location: login.php");
    // }
    include_once 'cre_header.php';
?>



<?php
  include 'wallet_read.php';
?>

<?php
  include 'myconn.php';
  $sql = "SELECT userId FROM wallet_address ORDER BY userId";
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
            <h1 class="m-0">Wallet Address</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Wallet address</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
    <!-- /.content-header -->
    

    <!-- Main content -->
    <section class="content">
      
        <!-- /.row -->
        <!-- Main row -->
        
        <!-- /.row (main row) -->
      <div class="container">
        <div class="box">
          <h4 class="display-4 text-center">Wallet Address</h4><hr><br>
          <?php if (isset($_GET['success'])) {?>
          <div class="alert alert-success" role="alert">
            <?php echo $_GET['success']?>
          </div>
          <?php }?>
          <?php if (mysqli_num_rows($result)){ ?>

          
          <div class="table-responsive">
            <table class="table table-striped" style="width: 90%">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">BTC Address</th>
                  <th scope="col" style="text-align: center">Action</th>
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
                  <td><?php echo $rows['btc_address']?></td>
                  <td style="display:flex; flex-direction:row; justify-content: flex-end;">
                    <a href="wallet_update.php?id=<?php echo $rows['userId']?>" class="btn btn-success" style="margin: 0 7px">Update</a>
                  </td>
                </tr>
              <?php }?>
              </tbody>
            </table>
          <?php }?>
            <div class="link-right">
              <a href="dashboard.php" class="link-primary" style="margin-right: 100px;">Creat a users</a>
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
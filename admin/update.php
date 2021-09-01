<?php
    include 'cre_header.php';
    include 'crud_update.php';
?>


  
        <!-- /.row -->
        <!-- Main row -->
        
        <!-- /.row (main row) -->
      <div class="container create-container">
        <form action="crud_update.php" method="POST">
          <h4 class="display-4 text-center">Update User Info</h4><hr><br>
          <?php if (isset($_GET['error'])) {?>
          <div class="alert alert-danger" role="alert">
            <?php echo $_GET['error']?>
          </div>
          <?php }?>
          <div class="mb-3">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstName" name="firstName" value="<?=$rows['firstName']?>">
          </div>

          <div class="mb-3">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastName" name="lastName" value="<?=$rows['lastName']?>">
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="<?=$rows['email']?>">
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>

          <div class="mb-3">
            <label for="totalbalance" class="form-label">Total Balance</label>
            <input type="text" class="form-control" id="totalbalance" name="totalbalance" value="<?=$rows['totalbalance']?>">
          </div>

          <div class="mb-3">
            <label for="totaldeposit" class="form-label">Total Deposit</label>
            <input type="text" class="form-control" id="totaldeposit" name="totaldeposit" value="<?=$rows['totaldeposit']?>">
          </div>


          <div class="mb-3">
            <label for="profit" class="form-label">Profit</label>
            <input type="text" class="form-control" id="profit" name="profit" value="<?=$rows['profit']?>">
          </div>


          <div class="mb-3">
            <label for="btcaddress" class="form-label">Crypto Address</label>
            <input type="text" class="form-control" id="btcaddress" name="btcaddress" value="<?=$rows['btcaddress']?>">
          </div>


          <div class="mb-3">
            <label for="plan" class="form-label">Plan</label>
            <input type="text" class="form-control" id="plan" name="plan" value="<?=$rows['plan']?>">
          </div>
          <input type="text" value="<?=$rows['userID']?>" name="id" hidden>


          <button type="submit" class="btn btn-primary" name="update">Update</button>
          <a href="view.php" class="link-primary">View users</a>
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
<?php
    include 'cre_header.php';
    include 'wallet_crud_update.php';
?>


  
        <!-- /.row -->
        <!-- Main row -->
        
        <!-- /.row (main row) -->
      <div class="container create-container">
        <form action="wallet_crud_update.php" method="POST">
          <h4 class="display-4 text-center">Update Wallet Address</h4><hr><br>
          <?php if (isset($_GET['error'])) {?>
          <div class="alert alert-danger" role="alert">
            <?php echo $_GET['error']?>
          </div>
          <?php }?>
          
          <div class="mb-3">
            <label for="btcaddress" class="form-label">Crypto Address</label>
            <input type="text" class="form-control" id="btcaddress" name="btcaddress" value="<?=$rows['btc_address']?>">
          </div>
          <input type="text" value="<?=$rows['userId']?>" name="id" hidden>


          <button type="submit" class="btn btn-primary" name="update">Update</button>
          <a href="wallet.php" class="link-primary">View address</a>
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
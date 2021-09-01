<body class="menu-position-side menu-side-left full-screen color-scheme-dark">
    <?php
        session_start();
        require '../healper.php';


        $user = array();

        if (isset($_GET['id'])) {
            require('../mysqli_connection.php');
            $user = get_user_info($con, $_GET['id']);
            $id = $user['userID'];
        }
    ?>
    <form id="logout-form" action="logout.php" method="POST" style="display: none;">
        <input type="hidden" name="logoutForm" value="hidden" style="display: hidden;">
    </form>
    <div class="all-wrapper solid-bg-all">
        <!--------------------
      START - Top Bar
      -------------------->
  <div class="top-bar color-scheme-dark the-topbar">
     <div class="logo-w menu-size">
         <a class="logo" href="/">
             <div class="logo-element"></div>
             <div class="logo-label">
                 DigitalCryptoCoin
             </div>
         </a>
     </div>
     <!--------------------
        START - Top Menu Controls
        -------------------->
     <div class="top-menu-controls">

         <!--------------------
          START - Messages Link in secondary top menu
          -------------------->
 
         <!--------------------
          END - Messages Link in secondary top menu
          -------------------->

         <!--------------------
          START - User avatar and menu in secondary top menu
          -------------------->
        <div class="logged-user-w">
            <div class="logged-user-i">
                <div class="avatar-w">
                    <div>
                        <i style="color:white;font-size:1.5em;" class="os-icon os-icon-user-male-circle2"></i>
                    </div>
                </div>
                <div class="logged-user-menu color-style-dark color-scheme-transparent"  style="background-color:#323c58">
                    <div class="logged-user-avatar-info">
                        <div class="avatar-w">
                            <div>
                                <i style="color:white;font-size:1.5em;" class="os-icon os-icon-user-male-circle2"></i>
                            </div>
                        </div>
                        <div class="logged-user-info-w">
                            <div class="logged-user-name">
                                <?php 
                                    if (isset($user['firstName'])) {
                                        printf('%s %s', $user['firstName'], $user['lastName']);
                                    }
                                ?>
                            </div>
                            <div class="logged-user-role">
                                Investor
                            </div>
                        </div>
                    </div>
                    <div class="bg-icon">
                        <i class="os-icon os-icon-wallet-loaded"></i>
                    </div>
                    <ul>
                        <li>
                            <a href="<?php echo 'profile.php' .'?id='. $id?>"><i
                                class="os-icon os-icon-user-male-circle2"></i><span>Profile Details</span>
                            </a>
                         </li>
                         <li>
                             <a href="<?php echo 'change-password.php' .'?id='. $id?>">
                                 <i class="fa fa-lock"></i><span>Edit Password</span>
                             </a>
                         </li>
                         <li>
                             <a href=<?php echo 'transactions.php' .'?id='. $id?>><i class="os-icon os-icon-coins-4"></i><span>Transactions</span></a>
                         </li>
                         <li>
                         <a onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                            style="cursor:pointer;"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
         <!--------------------
          END - User avatar and menu in secondary top menu
          -------------------->
     </div>
     <!--------------------
        END - Top Menu Controls
        -------------------->
 </div>
 <!--------------------
      END - Top Bar
      -------------------->
<div class="layout-w">
            <!--------------------
        START - Mobile Menu
        -------------------->
  <div class="menu-mobile menu-activated-on-click color-scheme-dark"
     style="background-color:#293145;background-image:none">
     <div class="mm-logo-buttons-w">
         <a class="mm-logo" href="/"><img src="images/logo WHITE.png"><span></span></a>
         <div class="mm-buttons">
             <div class="content-panel-open">
                 <div class="os-icon os-icon-grid-circles"></div>
             </div>
             <div class="mobile-menu-trigger">
                 <div class="os-icon os-icon-hamburger-menu-1"></div>
             </div>
         </div>
     </div>
     <div class="menu-and-user">
         <div class="logged-user-w">
             <div class="avatar-w">
                                  <div>
                     <i style="color:#3687a1;font-size:1.5em;" class="os-icon os-icon-user-male-circle2"></i>
                 </div>
                              </div>
             <div class="logged-user-info-w">
                 <div class="logged-user-name">
                 <?php 
                    if (isset($user['firstName'])) {
                        printf('%s %s', $user['firstName'], $user['lastName']);
                    }
                ?>
                </div>
                 <div class="logged-user-role">
                     Investor
                 </div>
             </div>
         </div>
         <ul class="main-menu">
                          <li class="has-sub-menu">
                 <a href="#">
                     <div class="icon-w">
                         <div class="os-icon os-icon-user"></div>
                     </div>
                     <span>User</span>
                 </a>
                 <ul class="sub-menu">
                     <li>
                         <a href="<?php echo 'profile.php' .'?id='. $id?>">My Profile</a>
                     </li>
                     <li>
                         <a href=<?php echo 'change-password.php' .'?id='. $id?>>Change Password</a>
                     </li>
                     <li>
                     <a onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                            style="cursor:pointer;"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a>
                         </li>
                 </ul>
             </li>


             <li class="selected">
                 <a href="<?php echo 'fund-account.php' .'?id='. $id?>">
                     <div class="icon-w">
                         <i class="fa fa-briefcase"></i>
                     </div>
                     <span>Portfolio</span>
                 </a>
             </li>
             <li class="selected">
                 <a href="<?php echo 'monitor.php' .'?id='. $id?>?id=$user_id">
                     <div class="icon-w">
                         <i class="fa fa-line-chart"></i>
                     </div>
                     <span>Market Screener</span>
                 </a>
             </li>
             
             <li class="sub-header">
                 <span>Running Services</span>
             </li>
             <li>
                 <a href="<?php echo 'fund-account.php' .'?id='. $id?>">
                     <div class="icon-w">
                         <div class="os-icon os-icon-package"></div>
                     </div>
                     <span>Fund Account</span>
                 </a>

             </li>
             
             <li class="selected">
                 <a href="<?php echo 'investments.php' .'?id='. $id?>">
                     <div class="icon-w">
                         <i class="fa fa-bar-chart"></i>
                     </div>
                     <span>Investments</span>
                 </a>
             </li>
             
             <li>
                 <a href="<?php echo 'withdraw.php' .'?id='. $id?>">
                     <div class="icon-w">
                        <i class="fa fa-money"></i>
                     </div>
                     <span>Withdraw</span>
                 </a>

             </li>
             <li>
                 <a href="<?php echo 'plans.php' .'?id='. $id?>">
                     <div class="icon-w">
                         <div class="os-icon os-icon-file-text"></div>
                     </div>
                     <span>Plans</span>
                 </a>

             </li>
             <li class="">
                 <a href="<?php echo 'transactions.php' .'?id='. $id?>">
                     <div class="icon-w">
                         <div class="os-icon os-icon-life-buoy"></div>
                     </div>
                     <span>Transactions</span>
                 </a>
             </li>
             <li class="sub-header">
                 <span>Affiliate</span>
             </li>
         </ul>
     </div>
 </div>
<!--------------------
          START - Main Menu
          -------------------->
<div
    class="menu-w menu-position-side menu-side-left menu-layout-compact sub-menu-style-over sub-menu-color-dark menu-activated-on-hover menu-has-selected-link color-scheme-dark color-style-transparent selected-menu-color-dark">
    <div class="logged-user-w avatar-inline">
        <div class="logged-user-i">
                        <div>
                <i style="color:#3687a1;font-size:1.5em;" class="os-icon os-icon-user-male-circle2"></i>
            </div>
            
            <div class="logged-user-info-w">
                <div class="logged-user-name">
                <?php 
                    if (isset($user['firstName'])) {
                        printf('%s %s', $user['firstName'], $user['lastName']);
                    }
                ?>
                </div>
            </div>
            <div class="logged-user-toggler-arrow">
                <div class="os-icon os-icon-chevron-down"></div>
            </div>
            <div class="logged-user-menu color-style-transparent">
                <div class="logged-user-avatar-info">
                    <div class="avatar-w">    
                        <div>
                            <i style="color:white;font-size:1.5em;" class="os-icon os-icon-user-male-circle2"></i>
                        </div>
                     </div>
                    <div class="logged-user-info-w">
                        <div class="logged-user-name">
                        <?php 
                            if (isset($user['firstName'])) {
                                printf('%s %s', $user['firstName'], $user['lastName']);
                            }
                        ?>
                        </div>
                        <div class="logged-user-role">
                            Investor
                        </div>
                    </div>
                </div>
                <div class="bg-icon">
                    <i class="os-icon os-icon-wallet-loaded"></i>
                </div>
                <ul>
                    <li>
                        <a href=<?php echo 'profile.php' .'?id='. $id?>><i class="os-icon os-icon-user-male-circle2"></i><span>Profile
                                Details</span></a>
                    </li>
                    <li>
                        <a href=<?php echo 'change-password.php' .'?id='. $id?>><i class="fa fa-lock"></i>
                            <span>Edit Password</span>
                        </a>
                    </li>
                    
                    <li>
                        <a onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                            style="cursor:pointer;"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <h1 class="menu-page-header">
        Page Header
    </h1>
    <ul class="main-menu">
        
        <li class="sub-header">
            <span>Overview</span>
        </li>
        <li class="selected">
            <a href="<?php echo 'dashboard.php' .'?id='. $id?>">
                <div class="icon-w">
                    <i class="fa fa-briefcase"></i>
                </div>
                <span>Portfolio</span>
            </a>
        </li>
        
        <li class="selected">
            <a href="<?php echo 'monitor.php' .'?id='. $id?>">
                <div class="icon-w">
                    <i class="fa fa-line-chart"></i>
                </div>
                <span>Market Screener</span>
            </a>
        </li>
        
        <li class="sub-header">
            <span>Services</span>
        </li>
         <li>
            <a href="<?php echo 'fund-account.php' .'?id='. $id?>">
                <div class="icon-w">
                    <div class="os-icon os-icon-package"></div>
                </div>
                <span>Fund Account</span>
            </a>

        </li>
        <li class="selected">
            <a href="<?php echo 'investments.php' .'?id='. $id?>">
                <div class="icon-w">
                    <i class="fa fa-bar-chart"></i>
                </div>
                <span>Investments</span>
            </a>
        </li>
        
        <li>
            <a href="<?php echo 'withdraw.php' .'?id='. $id?>">
                <div class="icon-w">
                    <i class="fa fa-money"></i>
                </div>
                <span>Withdraw</span>
            </a>

        </li>
        <li>
            <a href="<?php echo 'plans.php' .'?id='. $id?>">
                <div class="icon-w">
                <div class="os-icon os-icon-file-text"></div>
                </div>
                <span>Plans</span>
            </a>

        </li>
        <li class="">
            <a href="<?php echo 'transactions.php' .'?id='. $id?>">
                <div class="icon-w">
                    <div class="os-icon os-icon-coins-4"></div>
                </div>
                <span>Transactions</span>
            </a>
        </li>
        <li class="sub-header">
            <span>Logout</span>
        </li>
        <li>
        <a onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                            style="cursor:pointer;"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a>

        </li>
    </ul>
</div>
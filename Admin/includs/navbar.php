
<!--بداية شريط التصفح -->

<body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>

          <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">
    
                <!-- LOGO -->
    
                <div class="h-100" id="leftside-menu-container" data-simplebar="">

                    <!--- Sidemenu -->
                    <ul class="side-nav">
                        <li class="side-nav-item">
                            <a  href="home.php"  class="side-nav-link">
                                <i class="fas fa-home"></i>
                                <span> Accueil </span>
                                
                            </a>
                              
                        </li>
                     <?php if (isset($_SESSION['admin'])): ?>

                        <li class="side-nav-item">
                            <a  href="dashbord.php"  class="side-nav-link">
                                <i class="fas fa-users"></i>
                                <span>Utilisateur</span>
                                
                            </a>
                              
                        </li>
                        <?php endif; ?> 
                          
                        <li class="side-nav-item" >
                                              <a  href="demandesResev.php" class="side-nav-link">
                                              <i class="fas fa-clipboard-list"></i>
                                                <span>Demandes</span>
                                            </a>
                                            </li>
                                          <li class="side-nav-item" >
                                              <a  href="Client.php" class="side-nav-link">
                                              <i class="fas fa-id-card"></i>
                                                <span>Restauration</span>
                                            </a>
                                            </li>
                                          <?php if (isset($_SESSION['admin']) or isset($_SESSION['user_grad_1']) ): ?>
                                            <li class="side-nav-item" >
                                                      <a href="Archives.php"  class="side-nav-link">
                                                      <i class="fas fa-archive"></i>
                                                      <span>Les Archives </span> 
                                                      </a>
                                                    </li>
                                                  <?php endif; ?>
                                                 
                         <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarMaps1" aria-expanded="false" aria-controls="sidebarMaps1" class="side-nav-link">
                            <i class="fas fa-portrait"></i>
                                <span> Des Photo </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarMaps1">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="photo_2.php" class="side-nav-link">Galerie de photos de Jinan Al-Omda</a>
                                    </li>
                                    <li>
                                        <a href="photo_1.php" class="side-nav-link"> Galerie de cours de natation</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                                                  
                                 
                                 <li class="side-nav-item">
                                                  <a data-bs-toggle="collapse" href="#sidebarMaps11" aria-expanded="false" aria-controls="sidebarMaps" class="side-nav-link">
                                                                    <i class="fas fa-swimmer"></i>
                                                                    <span> Stages de Natation</span>
                                                                    <span class="menu-arrow"></span>
                                                                </a>
                                                                <div class="collapse" id="sidebarMaps11">
                                                                    <ul class="side-nav-second-level">
                                                                        <li>
                                                                            <a href="SwimmingN.php" class="side-nav-link">La Natation</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="SwimmingE.php" class="side-nav-link">Entraineurs</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                          

                                      <li class="side-nav-title side-nav-item">Apps</li>
                                      

                        <li class="side-nav-item">
                            <a href="https://mail.google.com/mail/u/0/#inbox"  class="side-nav-link">
                                <i class="uil-envelope"></i>
                                <span> Email </span>
                            </a>
                        </li>
                        



                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarMaps" aria-expanded="false" aria-controls="sidebarMaps" class="side-nav-link">
                                <i class="uil-location-point"></i>
                                <span> Maps </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarMaps">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="https://goo.gl/maps/o2qnU5H1NsPMWv5b9">Google Maps</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="side-nav-item">
                            <a href="../index.php"   class="side-nav-link">
                                <i class="fas fa-globe"></i>
                                <span> Site Djnan Al-oumda </span>
                            </a>
                        </li>
                    </ul>

                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
          
            
          
          
          
          <!-- ============================================================== -->
  <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <!-- Topbar Start -->
                    <div class="navbar-custom bg-info">
                        <ul class="list-unstyled topbar-menu float-end mb-0">
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <span class="account-user-avatar"> 
                                        <img src="assets/images/users/p-1.png" alt="user-image" class="rounded-circle">
                                    </span>
                                    <span>
                                        <span class="account-user-name">
                                        <?php
                                        $lab = "";
                                        if (isset($_SESSION['admin'])) $lab = $_SESSION['admin'];
                                        if (isset($_SESSION['user_grad_1'])) $lab = $_SESSION['user_grad_1'];
                                        if (isset($_SESSION['user_grad_2'])) $lab = $_SESSION['user_grad_2'];
                                        echo  $lab;

                                    ?>
                                        </span>
                                        <span class="account-position"><?php echo $_SESSION['name'] ." ". $_SESSION['prenom'] ; ?></span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                    <!-- item-->
                                    <div class=" dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Bienvenue !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-circle me-1"></i>
                                        <span>Mon compte</span>
                                    </a>


                                    <!-- item-->
                                    <a href="includs\logout.php" class="dropdown-item notify-item">
                                        <i class="mdi mdi-logout me-1"></i>
                                        <span>Se déconnecter</span>
                                    </a>
                                </div>
                            </li>

                        </ul>
                        <button class="button-menu-mobile open-left">
                            <i class="mdi mdi-menu"></i>
                        </button>
                        
                        </div>
                    </div>
                    <!-- end Topbar -->
                    
                    <!-- Start Content-->
                    <div class="container-fluid">
                       <!-- start page title -->
                       <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <form class="d-flex">
                                        </form>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                     
                        <!-- end page title -->
                        

                    

                








  <!--</div>نهاية شريط التصفح-->  

         

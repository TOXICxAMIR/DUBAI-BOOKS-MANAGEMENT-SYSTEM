<?php
// session_start();
require("cons.php");
////code
 

?>  
  <div class="header">
			
				<!-- Logo -->
                <div class="header-left">
                    <a href="dashboard.php" class="logo">
						<img src="assets/img/rsadmin1.png" alt="Logo">
					</a>
					<a href="dashboard.php" class="logo logo-small">
						<img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
					</a>
                </div>
				<!-- /Logo -->
				
				<a href="javascript:void(0);" id="toggle_btn">
					<i class="fe fe-text-align-left"></i>
				</a>
				

				
				<!-- Mobile Menu Toggle -->
				<a class="mobile_btn" id="mobile_btn">
					<i class="fa fa-bars"></i>
				</a>
				<!-- /Mobile Menu Toggle -->
				
				<!-- Header Right Menu -->
				<ul class="nav user-menu">

					
					<!-- User Menu -->
					<!-- <h4 style="color:white;margin-top:13px;text-transform:capitalize;"><?php echo $_SESSION['auser'];?></h4> -->
					<li class="nav-item dropdown app-dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img class="rounded-circle" src="assets/img/profiles/avatar-01.jpg" width="31" alt="Ryan Taylor"></span>
						</a>
						
						<div class="dropdown-menu">
							<div class="user-header">
								<div class="avatar avatar-sm">
									<img src="assets/img/profiles/avatar-01.png" alt="User Image" class="avatar-img rounded-circle">
								</div>
								<div class="user-text">
									<h6><?php echo $_SESSION['auser'];?></h6>
									<p class="text-muted mb-0">Administrator</p>
								</div>
							</div>
							<a class="dropdown-item" href="profile.php">Profile</a>
							<a class="dropdown-item" href="logout.php">Logout</a>
						</div>
					</li>

					<!-- /User Menu -->
					
				</ul>
				<!-- /Header Right Menu -->
				
            </div>
			
			<!-- header --->
			
			
			
						<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"> 
								<span>Main</span>
							</li>
							<li> 
								<a href="dashboard.php"><i class="fe fe-home"></i> <span>Dashboard</span></a>
							</li>
							
							<!-- <li class="menu-title"> 
								<span>Authentication</span>
							</li>
						
							<li class="submenu">
								<a href="#"><i class="fe fe-user"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="index.php"> Login </a></li>
									<li><a href="register.php"> Register </a></li>
									
								</ul>
							</li> -->
							<li class="menu-title"> 
								<span>All Users</span>
							</li>
						
							<li class="submenu">
								<a href="#"><i class="fe fe-user"></i> <span> All Users </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="adminlist.php"> Admin </a></li>
									<li><a href="viewusers1.php"> Users </a></li>
								</ul>
							</li>

							<li class="menu-title"> 
								<span>Supplier</span>
							</li>
						
							<li class="submenu">
								<a href="#"><i class="fe fe-location"></i> <span>Add Book Supplier</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="addsupplier.php"> Supplier Details</a></li>
								</ul>
							</li>
						
							<li class="menu-title"> 
								<span>Edit SUpplier</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-map"></i> <span>Edit Supplier</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="editsupplier1.php">Edit Supplier Details</a></li>
									
								</ul>
							</li>
							
							
							
							<li class="menu-title"> 
								<span>Orders</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-comment"></i> <span> View Orders </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="wieworder1.php"> View Banbury Orders </a></li>
									<li><a href="wieworder2.php"> View Cerebro Orders </a></li>
									<li><a href="wieworder3.php"> View Plutonium Orders </a></li>
								</ul>
							</li>
							<li class="menu-title"> 
								<span>About</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-browser"></i> <span> Customer </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="viewusers1.php"> Customer Details </a></li>
									<li><a href="viewcomp1.php"> Customer Enquiries </a></li>
								</ul>
							</li>
							<li class="menu-title"> 
								<span>Log Out</span>
							</li>
							<li class="submenu">
							<a href="#"><i class="fe fe-browser"></i> <span> Log Out </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="../../index.html"> Log Out </a></li>
								</ul>
							</li>
							
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->

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
								<a href="#"><i class="fe fe-user"></i> <span> Contact Admin/Supplier </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="addcomplaint.php"> Contact admin/supplier </a></li>
								</ul>
							</li>

							<li class="menu-title"> 
								<span>Order</span>
							</li>
						
							<li class="submenu">
								<a href="#"><i class="fe fe-location"></i> <span>Order</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="orderform1.php"> Place Order (Banbury)</a></li>
									<li><a href="orderform2.php"> Place Order (Cerebro)</a></li>
									<li><a href="orderform3.php"> Place Order (Plutonium)</a></li>
								</ul>
							</li>
						
							<li class="menu-title"> 
								<span>Search</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-map"></i> <span>Search Book</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="Searchfeature1.php">Search Book Details</a></li>
									
								</ul>
							</li>
							
							
							
							<li class="menu-title"> 
								<span>Orders</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-comment"></i> <span> View my Orders </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="myorder1.php"> View Banbury Orders </a></li>
									<li><a href="myorder2.php"> View Cerebro Orders </a></li>
									<li><a href="myorder3.php"> View Plutonium Orders </a></li>
								</ul>
							</li>
							<li class="menu-title"> 
								<span>Update Profile</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-browser"></i> <span> Update Profile </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="userupdate1.php"> update profile </a></li>
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


<!-- Starting body div here.... End div in footer -->
<body class="fixed-left">

<!-- Starting body div here.... End div in footer -->
<div id="wrapper">
  <!-- ========== Left Sidebar Start ========== -->
  <div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect"><i class="ion-close"></i></button>
    <div class="left-side-logo d-block d-lg-none">
      <div class="text-center"><a href="<?php echo base_url('admin');?>" class="logo"><img src="<?php echo base_url();?>assets/admin/images/logo.png"></a></div>
    </div>
    <div class="sidebar-inner slimscrollleft">
      <div id="sidebar-menu">
        <ul>
         <br>
<br>

          <li><a href="<?php echo base_url('admin/login/dashboard');?>" class="waves-effect"><i class="dripicons-meter"></i> <span>Dashboard </a></li>
          
		
		  
		  
		  <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-briefcase"></i> <span>Category </span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
            <ul class="list-unstyled">
              <li><a href="<?php echo base_url();?>admin/category/add">Add</a></li>
			  <li><a href="<?php echo base_url();?>admin/category/details">details</a></li>
              
             
            </ul>
          </li>
         
           
		   
		   <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-briefcase"></i> <span>Registrations</span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
            <ul class="list-unstyled">
              <li><a href="<?php echo base_url();?>admin/registrations/listdata">List</a></li>
              
             
            </ul>
          </li> 
		   
		   
		   
		   
		   
		   
		
		   
		   <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-briefcase"></i> <span>Project </span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
            <ul class="list-unstyled">
              <li><a href="<?php echo base_url();?>admin/product/add_project">Add</a></li>
              <li><a href="<?php echo base_url();?>admin/product/project_list">List</a></li>
             
            </ul>
          </li>


					<li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-briefcase"></i> <span>Featured </span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
            <ul class="list-unstyled">
              <li><a href="<?php echo base_url();?>admin/product/add_featured_project">Add</a></li>
              <li><a href="<?php echo base_url();?>admin/product/featured_project_list">List</a></li>
             
            </ul>
          </li>
          
         
          
          
          
     
        </ul>
      </div>
      <div class="clearfix"></div>
    </div>
    <!-- end sidebarinner -->
  </div>
  <!-- Left Sidebar End -->

<section class="our-dashbord dashbord bgc-f7 pb50">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-xl-2 pl0">
                <div class="dashboard_sidebar_menu">
                    <ul class="sidebar-menu">
                        <span class="fa fa-close text-light"></span>
                        <li><h4 class="text-center text-light">My Dashboard</h4></li>
                        <li class="title"><span>Main</span></li>
                        <li class="treeview <?php if(LEVEL2 == 'dashboard') echo 'active'; ?>"><a href="<?php echo base_url('user/dashboard');?>"><i class="flaticon-layers"></i><span> Dashboard</span></a></li>
                        <li class="treeview <?php if(LEVEL2 == 'message') echo 'active'; ?>"><a href="<?php echo base_url('user/message');?>"><i class="flaticon-envelope"></i><span> Message</span></a></li>
                        <li class="title"><span>Manage Orders</span></li>
                        <li class="treeview <?php if(LEVEL2 == 'orders' || LEVEL2 == 'order') echo 'active'; ?>"><a href="<?php echo base_url('user/orders');?>"><i class="flaticon-home"></i> <span>My Orders</span></a></li>
                        <li class="treeview <?php if(LEVEL2 == 'wishlist') echo 'active'; ?>"><a href="<?php echo base_url('user/wishlist');?>"><i class="flaticon-heart"></i> <span> My Wishlist</span></a></li>
                        <li class="treeview <?php if(LEVEL2 == 'my_cart') echo 'active'; ?>"><a href="<?php echo base_url('user/my_cart');?>"><i class="flaticon-heart"></i> <span> My Cart</span></a></li>
                        <li class="title"><span>Manage Account</span></li>
                        <li class="treeview <?php if(LEVEL2 == 'profile') echo 'active'; ?>"><a href="<?php echo base_url('user/profile');?>"><i class="flaticon-user"></i> <span>My Profile</span></a></li>
                        <li class="treeview"><a href="<?php echo base_url('user/logout');?>"><i class="flaticon-logout"></i> <span>Logout</span></a></li>
                    </ul>
                </div>
            </div>
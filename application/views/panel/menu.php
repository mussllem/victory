 <body class="skin-blue sidebar-mini">  
    <div class="wrapper">
      <header class="main-header">
        <a href="#" class="logo">
          <span class="logo-mini">Menu</span>
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="hidden-xs"><?php echo $nama;?></span>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url();?>logout"></i> Logout</a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
<aside class="main-sidebar">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url()?>theme/img/user.png" class="has-img" width='160' height='160' alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?php echo $nama;?></p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i>Admin</a>
            </div>
          </div>

          <!-- search form (Optional) -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <ul class="sidebar-menu">
            <li class="treeview <?php if($this->uri->segment(2)=='') echo 'active';?>"><a href="<?php echo base_url();?>panel"><i class='fa fa-home'></i> <span>Beranda</span></a></li>
            <li class="treeview <?php if($this->uri->segment(2)=='packages') echo 'active';?>"><a href="<?php echo base_url();?>panel/packages"><i class='fa fa-book'></i> <span>Packages</span></a></li>
            <li class="treeview <?php if($this->uri->segment(2)=='founder') echo 'active';?>"><a href="<?php echo base_url();?>panel/founder"><i class='fa fa-male'></i> <span>Founder</span></a></li>
            <li class="treeview <?php if($this->uri->segment(2)=='mentor') echo 'active';?>"><a href="<?php echo base_url();?>panel/mentor"><i class='fa fa-user'></i> <span>Mentor</span></a></li>
            <li class="treeview <?php if($this->uri->segment(2)=='teachers') echo 'active';?>"><a href="<?php echo base_url();?>panel/teachers"><i class='fa fa-users'></i> <span>Teachers</span></a></li>
            <li class="treeview <?php if($this->uri->segment(2)=='faq') echo 'active';?>"><a href="<?php echo base_url();?>panel/faq"><i class='fa fa-exclamation-circle'></i> <span>FAQ</span></a></li>
            <li class="treeview <?php if($this->uri->segment(2)=='testimoni') echo 'active';?>"><a href="<?php echo base_url();?>panel/testimoni"><i class='fa fa-comments'></i> <span>Testimoni</span></a></li>
          </ul>
        </section>
      </aside>
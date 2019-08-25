<!-- Header -->
  <header id="header" class="header modern-header modern-header-white">
    <div class="header-top bg-theme-colored2 sm-text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="widget text-white">
              <ul class="list-inline xs-text-center text-white">
                <li class="m-0 pl-10 pr-10"> <a href="#" class="text-white"><i class="fa fa-phone text-white"></i> +62 812 78158505</a> </li>
                <li class="m-0 pl-10 pr-10"> 
                  <a href="#" class="text-white"><i class="fa fa-envelope-o text-white mr-5"></i> <a class="text-white" href="mailto:victorysriwijayaeducation@gmail.com">victorysriwijayaeducation@gmail.com</a> 
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 pr-0">
            <div class="widget">
              <ul class="styled-icons icon-sm pull-right flip sm-pull-none sm-text-center mt-5">
                <li><a href="https://www.facebook.com/victorysriwijaya/" target="blank"><i class="fa fa-facebook text-white"></i></a></li>
                <li><a href="https://twitter.com/VictoryEduSwj" target="blank"><i class="fa fa-twitter text-white"></i></a></li>
                <li><a href="https://www.instagram.com/victorysriwijaya/" target="blank"><i class="fa fa-instagram text-white"></i></a></li>
                <li><a href="https://www.linkedin.com/company/13592311/" target="blank"><i class="fa fa-linkedin text-white"></i></a></li>
                <li><div id="google_translate_element"></div></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-middle p-0 bg-lightest xs-text-center pb-30">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-3">
            <a href="#"><img src="<?php echo base_url()?>temp/images/logo-big.png"></a>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-9">
            <div class="header-widget-contact-info-box sm-text-center">
              <div class="media element contact-info">
                <div class="media-left">
                  <a href="#">
                    <i class="fa fa-envelope text-theme-colored2 font-icon sm-display-block"></i>
                  </a>
                </div>
                <div class="media-body">
                  <a href="#" class="title">Mail Us Today</a>
                  <h5 class="media-heading subtitle"><a href="mailto:victorysriwijayaeducation@gmail.com">victorysriwijayaeducation@gmail.com</a></h5>
                </div>
              </div>
              <div class="media element contact-info">
                <div class="media-left">
                  <a href="#">
                    <i class="fa fa-phone-square text-theme-colored2 font-icon sm-display-block"></i>
                  </a>
                </div>
                <div class="media-body">
                  <a href="#" class="title">Contact HP / WA</a>
                  <h5 class="media-heading subtitle">+62 812 78158505</h5>
                </div>
              </div>
              <div class="media element contact-info">
                <div class="media-left">
                  <a href="#">
                    <i class="fa fa-building-o text-theme-colored2 font-icon sm-display-block"></i>
                  </a>
                </div>
                <div class="media-body">
                  <a href="#" class="title">Company Location</a>
                  <h5 class="media-heading subtitle">Jln. Kolonel H. Burlian KM. 9 No. 2380, Palembang.</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
        <div class="container">
          <nav id="menuzord" class="menuzord">
            <ul class="menuzord-menu">
              <li <?php if(($this->uri->segment(1)=='') OR ($this->uri->segment(1)=='home')) {echo "class='active'";}?>><a href="<?php echo base_url()?>home">Home</a>
                  <ul class="dropdown">
                  <li><a href="<?php echo base_url()?>about">About</a></li>
                  <li><a href="<?php echo base_url()?>teachers">Teachers</a></li>
                  <li><a href="<?php echo base_url()?>contact">Contact</a></li>
                  <li><a href="<?php echo base_url()?>founder">Management Team</a></li>
                </ul>  
              </li>
              <li <?php if ($this->uri->segment(1)=='packages') {echo "class='active'";}?>><a href="<?php echo base_url()?>packages">Services</a></li>
              <li <?php if (($this->uri->segment(1)=='partners') OR ($this->uri->segment(1)=='ndegree')) {echo "class='active'";}?>><a href="#">Global Scholar Partners</a>
                <ul class="dropdown">
                  <li><a href="<?php echo base_url()?>partners/degree">Degree</a></li>
                  <li><a href="<?php echo base_url()?>partners/ndegree">Non Degree</a></li>
                  <li></li>
                </ul>  
              </li>
              <li <?php if ($this->uri->segment(1)=='gallery') {echo "class='active'";}?>><a href="<?php echo base_url()?>gallery">Gallery</a></li>
              <li <?php if ($this->uri->segment(1)=='victory_mengabdi') {echo "class='active'";}?>><a href="<?php echo base_url()?>victory_mengabdi">Victory Mengabdi</a></li>
              <li><a href="#">Download</a>
                  <ul class="dropdown">
                  <li><a href="<?php echo base_url()?>brosur">Brosur</a></li>
                  <li><a href="https://drive.google.com/file/d/150gIZou3r3OBGpOhVPBQv2sOznGMao93/view" target="_blank">Company Profile</a></li>
                  <!-- <li><a href="https://drive.google.com/file/d/1D1ezFr691NVXDtb-OTp1ytejTYGmFo0S/view?usp=sharing" target="_blank">Company Profile</a></li> -->
                </ul>  
              </li>
            </ul>
            <div class="pull-right mb-sm-15">
              <a class="btn btn-colored btn-flat btn-theme-colored2 mt-15 mt-sm-10 pt-10 pb-10" href="https://goo.gl/wMYpYW" target="blank">Register Now</a>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
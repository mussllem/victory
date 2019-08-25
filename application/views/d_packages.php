 <!-- Start main-content -->
  <div class="main-content">
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="">
      <div class="container pt-20 pb-5">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-1">
              <h2 class="text-theme-colored2 font-36"></h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Features -->
   <section style="background-color: white">
      <div class="container">
        <?php foreach($packages as $p):?>
        <div class="row">
          <div class="col-md-3">
            <div class="job-overview">
              <dl class="dl-horizontal">
                <dt><i class="fa fa-map-marker text-theme-colored mt-5 font-15"></i></dt>
                <dd>
                  <h5 class="mt-0">Location:</h5>
                  <p>Jln. Kolonel H. Burlian KM. 9 No. 2380, Palembang</p>
                </dd>
              </dl>
              <dl class="dl-horizontal">
                <dt><i class="fa fa-user text-theme-colored mt-5 font-15"></i></dt>
                <dd>
                  <h5 class="mt-0">Kategory:</h5>
                  <p><?php echo $p->nama;?></p>
                </dd>
              </dl>
              <dl class="dl-horizontal">
                <dt><i class="fa fa-money text-theme-colored mt-5 font-15"></i></dt>
                <dd>
                  <h5 class="mt-0">Price:</h5>
                  <p>Start at Rp <?php echo number_format($p->price,0,".",".")?></p>
                </dd>
              </dl>
            </div>
          </div>
          <div class="col-md-6">
            <div class="icon-box mb-0 p-0">
              <a href="#" class="icon icon-gray pull-left mb-0 mr-10">
                <i class="fa fa-list"></i>
              </a>
              <h3 class="icon-box-title pt-15 mt-0 mb-40"><?php echo $p->nama;?></h3>
              <hr>
              <p align="justify"><?php echo $p->deskripsi ;?></p><br>
              <a href="<?php echo $p->link; ?>" class="btn btn-colored btn-theme-colored2 text-white btn-lg pl-40 pr-40 mt-15">Daftar Sekarang</a>
            </div>
          </div>
          <?php
          if ($p->id == 6) {
            # code...
            foreach ($mentors as $m) {
              # code...
          ?>
          <div class="col-md-3" style="padding-top: 5px">
            <div class='team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30'>
              <div class='team-thumb'>
                <img class='img-circle' alt='' src='<?php echo base_url();?>theme/img/mentor/<?php echo $m->foto;?>' style='height: 370px; width: 275px'>
                <div class='team-overlay'></div>
              </div>
              <div class='team-details'>
                <h4 class='text-uppercase text-theme-colored font-weight-600 m-5'><?php echo $m->nama;?></h4>
                <h6 class='text-gray font-13 font-weight-400 line-bottom-centered mt-0'>Translator</h6>
                <p class='hidden-md'>-<h4>
                 <form action='<?php echo base_url(); ?>partners/detail' method='post'>
                <input type='hidden' name='id' value='<?php echo $m->id; ?>'>
                <button class='btn btn-xs btn-theme-colored text-uppercase btn-block pt-20 pb-20'>Read more</button>
                </form></p>
              </div>
          </div>
          <?php
            }
          }
          ?>
        </div>
      <?php endforeach;?>
      </div>
    </section>

    <!-- Divider: Testimonials -->
    <section class="bg-silver-deep">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <h2 align="center">Testimoni</h2><hr>
            <div class="owl-carousel-1col testimonials" data-dots="true">
             <?php
            foreach($testimoni as $t){
              echo"
              <div class='item'>
                <div class='testimonial-wrapper text-center'>
                  <div class='thumb'><img class='img-circle' alt='' src='".base_url()."theme/img/testimoni/$t->foto' style='height: 150px; width: 150px;'></div>
                  <i class='fa fa-quote-right text-theme-colored2 font-24 mt-20'></i>
                  <div class='content pt-10'>
                    <p class='lead font-weight-400 font-16 mb-20'>$t->testimoni</p>
                    <h4 class='author text-theme-colored2 mb-5'>$t->nama</h4>
                    <h5 class='title text-gray mt-0 mb-15'>$t->profesi</h5>
                  </div>
                </div>
              </div>
              ";}?>
              
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- end main-content -->
  </div>
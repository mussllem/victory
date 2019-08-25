<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="">
      <div class="container pt-20 pb-5">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-1">
              <h2 class="text-theme-colored2 font-36"> </h2>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Have Any Question -->
    <section style="background-color: white">
      <div class="container">
        <div class="section-content">
          <?php foreach($mentor as $m): ?>
          <div class="row">
            <div class="col-md-4">
              <div class="thumb">
                <img class='img-circle' src="<?php echo base_url()?>theme/img/mentor/<?php echo $m->foto;?>" alt="" style="height: 370px; width: 275px;">
              </div>
            </div>
            <div class="col-md-8">
              <h4 class="name font-24 mt-0 mb-0"><?php echo $m->nama;?></h4>
              <h5 class="mt-5">
                <?php
                if ($m->id == 28) {
                  # code...
                  echo "Translator";
                }
                else{
                  echo "Mentor";
                }
                ?>
              </h5>
              <p align="justify"><?php echo $m->profil;?></p>
            </div>
          </div>
        <?php endforeach;?>
        </div>
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
  </div>
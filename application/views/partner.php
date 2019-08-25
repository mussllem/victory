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
   <section id="team" class="bg-silver-deep">
      <div class="container">
         <div class="row">
            <div class="col-md-12" align="center">
              <h2 class="text-uppercase title">Professional <span class="text-theme-colored2">Mentor</span></h2>
          <hr>
            </div>
          </div>
        <div class="row mtli-row-clearfix">
          
          <?php
          foreach ($mentor as $m){
            ?>
            <div class='col-xs-12 col-sm-6 col-md-3 col-md-offset-0'>
            <div class='team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30'>
              <div class='team-thumb'>
                <img class='img-circle' alt='' src="<?php echo base_url(); ?>theme/img/mentor/<?php echo $m->foto; ?>" style='height: 370px; width: 275px'>
                <div class='team-overlay'></div>
              </div>
              <div class='team-details'>
                <h4 class='text-uppercase text-theme-colored font-weight-600 m-5'><?php echo $m->nama; ?></h4>
                <h6 class='text-gray font-13 font-weight-400 line-bottom-centered mt-0'>
                <?php
                if ($m->id == 28) {
                  # code...
                  echo "Translator";
                }
                else{
                  echo "Mentor";
                }
                ?>
                </h6>
                <p class='hidden-md'>-<h4>
                 <form action='<?php echo base_url(); ?>partners/detail' method='post'>
                <input type='hidden' name='id' value='<?php echo $m->id; ?>'>
                <button class='btn btn-xs btn-theme-colored text-uppercase btn-block pt-20 pb-20'>Read more</button>
                </form></p>
              </div>
            </div>
          </div>
          <?php
          }
          ?>

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
  <!-- end main-content -->
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
   <section id="pricing" style="background-color: white">
      <div class="container pt-90">
        <div class="section-content">
          <div class="row">
          <div class="section-title">
          <div class="row">
            <div class="col-md-12" align="center">
              <h2 class="text-uppercase title">Our <span class="text-theme-colored2">Services</span></h2>
          <hr>
            </div>
          </div>
        </div>
          <div class="row">
            <?php
            foreach($packages as $p):?>
              <div class='col-xs-12 col-sm-12 col-md-4 hvr-float-shadow mb-sm-30'>
              <div class='pricing-table bg-silver-deep text-center maxwidth400 pt-10'>
                <h2 class='package-type text-uppercase line-bottom-centered mb-50'><?php echo $p->nama ?></h2>
                <h2 class='price text-theme-colored2 font-opensans font-weight-400 font-64 bg-white pt-10 pb-20 mb-0'>
                <span class='font-17 currency'><?php if($p->nama !='ENGLISH COURSE') {echo "Start at";} ?> </span><span class='font-36 currency'>Rp</span><?php $price = number_format($p->price); $pisah = explode (",",$price); echo $pisah[0]; ?><span class='font-16 text-black'>.000</span></h2>
                 <ul class='list price-list theme-colored text-left flip check-circle mt-0 mb-20'>
                    <?php 
                    $PecahStr = explode(",", $p->list);
                      for ( $i = 0; $i < count( $PecahStr ); $i++ ) {
                      echo "<li>".$PecahStr[$i] ."</li>";
                      }
                    ?>
                </ul>
                <form action="<?php echo base_url()?>packages/detail" method="post">
                  <input type="hidden" name="id" value="<?php echo $p->id;?>">
                  <button class='btn btn-lg btn-theme-colored text-uppercase btn-block pt-20 pb-20 btn-flat'>Read more</button>
                </form>
              </div>
            </div>
            <?php endforeach;?>
            </div>
          </div>
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
  </div>

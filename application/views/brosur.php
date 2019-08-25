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
      <div class="row">
        <?php
        foreach ($brosurs as $brosur) {
           # code...
        ?>
        <div class="col-md-12 col-xs-12 col-sm-12">
          <img src="<?php echo base_url(); ?>/theme/img/brosur/<?php echo $brosur->image; ?>">
        </div>
        <?php
         } 
        ?>
      </div>
    </section>

  <!-- end main-content -->
  </div>
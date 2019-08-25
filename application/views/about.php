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
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-5">
              <img class="img-fullwidth" src="<?php echo base_url()?>temp/images/pic-about.png" alt="">
            </div>
            <div class="col-md-7">
              <h2 class="text-uppercasetext-theme-colored mt-0 mt-sm-30">About <span class="text-theme-colored2">Victory Sriwijaya Education</span></h2>
              <div class="double-line-bottom-theme-colored-2"></div>
              <p>Victory Sriwijaya Education (VSE) adalah institusi pendidikan yang menyediakan jasa kursus bahasa Inggris dan konsultasi beasiswa. VSE berfokus untuk membantu masyarakat mengembangkan kompetensi bahasa Inggris dan juga memberikan asistensi dalam hal mempersiapkan aplikasi beasiswa untuk studi ke luar negeri. Pendekatan VSE yaitu menghubungkan para pencari beasiswa dengan Global Scholars yang sudah menjadi mitra VSE dan memiliki pengalaman studi di luar negeri melalui platform online dan offline. VSE percaya bahwa dengan menyediakan platform seperti itu akan memberikan peluang yang lebih besar bagi siswa untuk bisa melanjutkan studi ke luar negeri.</p>
              <a href="<?php echo base_url()?>about/detail" class="btn btn-colored btn-theme-colored2 text-white btn-lg pl-40 pr-40 mt-15">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-0">
            <h2 class="text-uppercase title">Frequently Asked Question <span class="text-theme-colored2"> (FAQ)</span></h2>
            <div class="double-line-bottom-theme-colored-2"></div>
            <div id="accordion1" class="panel-group accordion">
            <?php
            $no=0;
            $link =1;
            foreach($faq as $f){
              $no++;
              $link++;
              echo"
              <div class='panel'>
                <div class='panel-title'> <a class='collapsed' data-parent='#accordion1' data-toggle='collapse' href='#accordion".$link."' aria-expanded='false'> <span class='open-sub'></span> <strong>".$no.". $f->question</strong></a> </div>
                <div id='accordion".$link."' class='panel-collapse collapse' role='tablist' aria-expanded='false' style='height: 0px;'>
                  <div class='panel-content'>
                    <p>$f->answer</p>
                  </div>
                </div>
              </div>
             ";}?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8 col-md-offset-0">
            <h2 class="text-uppercase title"><span class="text-theme-colored2">Keunggulan</span></h2>
            <div class="double-line-bottom-theme-colored-2"></div>
            <div class="panel-group accordion">
              <?php
              $nou = 0;
              foreach ($keunggulans as $keunggulan) {
                $nou++;
                # code...
                echo '<b style="align:justify">'.$nou.". ".$keunggulan->keunggulan."</b><br><br>";
              }
              ?>
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
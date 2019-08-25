<!-- Start main-content -->
  <div class="main-content">
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
<!-- Section: Features -->
    <section style="background-color: white">
      <div class="container mt-30 mb-30 pt-30 pb-30">
        <div class="row">
          <div class="col-md-12">
            <div class="single-service">
              <h3 class="text-uppercase mt-30 mb-10">Victory Mengabdi</h3>
              <div class="double-line-bottom-theme-colored-2 mt-10"></div>
              <p align="justify">
                Victory Mengabdi adalah sebuah program dari Victory Sriwijaya Education (VSE) yang terinsprasi dari Gerakan Kelas Inspirasi. Melalui Victory Mengabdi, VSE mencoba untuk berkontribusi kepada masyarakat secara lebih luas. 
VSE merupakan lembaga pendidikan Bahasa Inggris dan Konsultasi Beasiswa yang fokus memberikan asistensi pada masyarakat agar bisa meningkatkan kemampuan Bahasa Inggris dan membantu persiapan belajar di luar negeri dengan menghubungkan langsung para peminat study luar negeri dengan para Global Scholars yang berpengalaman di dunia akademik di berbagai belahan dunia. 
              </p>
              <p align="justify">
               VSE didirkan oleh anak-anak muda yang secara akumulasi memiliki pengalaman internasional lebih dari 10 tahun, baik di bidang akademik maupun di multinasional company. Jika Sekolah, Universitas atau Organisasi Anda tertarik mengundang kami, tolong perhatikan beberapa hal berikut :
              </p>        
              <b>1. Topik apa yang bisa VSE bawakan?</b>
              <p>a. Informasi seputar Beasiswa Luar Negeri</p>
              <p>b. Informasi seputar Program Pertukaran Pemuda Antar Negara</p>
              <p>c. Tips & Trik Bekerja di Multinasional Company (MNC)</p>
              <p>d. Publikasi Ilmiah (Menulis untuk jurnal)</p>
              <p>e. Topik lain sesuai kesepakatan bersama</p>
              <p></p>
              <b>2. Bagaimana Prosedur Mengundang?</b>
              <p>Silahkan isi formulir pendaftaran melalui Google Form Victory Mengabdi, dan tolong kirimkan email konfirmasi ke <a href="mailto:victorysriwijayaeducation@gmail.com" target="_top">victorysriwijayaeducation@gmail.com</a> dengan Subject Email “Victory Mengabdi_Nama Organisasi_No HP”. Contoh Victory Mengabdi_SMP N 19 Palembang_08127652316.</p>
              <b>3. Apa yang harus disiapkan oleh pengudang?</b>
              <p>
                Guna keperluan presentasi, pengundang diharapkan bisa menyediakan LCD Proyektor.
              </p>
              <b>4. Berapa biaya mengundang tim Victory Mengabdi?</b>
              <p>
                Victory Mengabdi merupakan kegiatan yang bersifat sosial, sehingga kami tidak memungut biaya atas kegiatan tersebut.
              </p>                    
              <b>5. Kapan waktu pelatihan akan dilakukan?</b>
              <p>
                Program Victory Mengabdi dijadwalkan satu kali dalam sebulan. Kami akan mendahulukan pengundang yang lebih dahulu mendaftar.
              </p>
              <b>6. Apakah pengundang bisa berasal dari luar kota Palembang?</b>
              <p>Saat ini Victory Mengabdi fokus pada undangan yang berasal dari area kota Palembang. Namun, jika ada undangan dari kota lain, biasanya pengundang menyediakan biaya transportasi dan akomodasi.</p>
              <p align="justify">Tertarik mengundang victory mengabdi.</p>
              <a href="https://goo.gl/EuTh8H" class="btn btn-colored btn-theme-colored2 text-white btn-lg pl-40 pr-40 mt-15" target="_blank"> Klik disini</a>
              </div>
          </div>
        </div>
        <div class="row" style="margin-top: 10px">
          <?php 
          foreach ($mengabdis as $mengabdi) {
            # code...
          ?>
          <div class="col-lg-3 col-md-3 col-xs-12" style="margin-bottom: 30px;">
            <div class="responsive">
              <div class="gallery">
                <a target="_blank" href="<?php echo base_url();?>theme/img/victory_mengabdi/<?php echo $mengabdi->image; ?>">
                  <img src="<?php echo base_url();?>theme/img/victory_mengabdi/<?php echo $mengabdi->image; ?>" alt="Trolltunga Norway">
                </a>
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
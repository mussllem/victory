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
    <section>
      <div class="container mt-30 mb-30 pt-30 pb-30">
        <div class="row">
          <div class="col-md-12">
            <div class="single-service">
              <h3 class="text-uppercase mt-30 mb-10">About Victory Sriwijaya Education</h3>
              <div class="double-line-bottom-theme-colored-2 mt-10"></div>
              <p align="justify">Victory Sriwijaya Education (VSE) adalah institusi pendidikan yang menyediakan jasa kursus bahasa Inggris dan konsultasi beasiswa. VSE berfokus untuk membantu masyarakat mengembangkan kompetensi bahasa Inggris dan juga memberikan asistensi dalam hal mempersiapkan aplikasi beasiswa untuk studi ke luar negeri. Pendekatan VSE yaitu menghubungkan para pencari beasiswa dengan Global Scholars yang sudah menjadi mitra VSE dan memiliki pengalaman studi di luar negeri melalui platform online dan offline. VSE percaya bahwa dengan menyediakan platform seperti itu akan memberikan peluang yang lebih besar bagi siswa untuk bisa melanjutkan studi ke luar negeri.</p>
              <p align="justify">VSE didirikan pada tahun 2017 di Palembang, Sumatera Selatan Indonesia oleh anak-anak muda yang secara akumulasi memiliki pengalaman internasional lebih dari 10 tahun. Slogan VSE "Everyone Can Study Abroad" mengambarkan semangat generasi masa depan Indonesia yang lebih baik untuk dapat berkompetisi secara global. Layanan utama VSE adalah kursus bahasa Inggris seperti persiapan ujian bahasa Inggris berstandar internasional (IELTS, TOEFL, IBT, TOEIC, Reading, Writing, Listening, Conversation), konsultasi akademis seperti terjemahan bahasa Inggris, proof-reading, proposal penelitian, dan konsultasi beasiswa dengan para Global Scholars yang tersebar di Amerika Serikat, Eropa, Australia, dan belahan dunia lainnya.</p>

                <div class="tab-pane fade in active" id="tab1">
                  <h4 class="line-bottom-theme-colored-2 mt-20 mb-10">Vision</h4>
                  "Menjadi Pusat Informasi Beasiswa dan Program Pertukaran Pelajar Terbaik di Indonesia"
                  <h4 class="line-bottom-theme-colored-2 mt-20 mb-10">Mision</h4>
                  <ul class="list theme-colored2 paper">
                    <li>Membantu tujuan pemerintah Indonesia dalam mempersiapkan pemimpin dan profesional masa depan melalui pembekalan pendidikan lanjut.</li>
                    <li>Memberikan akses kepada siswa untuk terhubung dengan Partner Victory di seluruh dunia</li>
                    <li>Meningkatkan kemampuan bahasa Inggris siswa sebagai bagian dari persyaratan untuk melanjutkan pendidikan atau mengikuti Program Pertukaran Pelajar</li>
                    <li>Mengembangkan program pembelajaran berdasarkan kebutuhan siswa guna mempercepat proses mencapai tujuan belajar</li>
                    <li>Mendorong publikasi internasional akademisi Indonesia dengan menyediakan jasa penterjemah dan pelatihan presentasi akademis.</li>
                  </ul>
                </div>
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
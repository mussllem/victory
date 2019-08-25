<div class="content-wrapper"  background-repeat: no-repeat; background-size: 800px 700px;">
        <section class="content">
<div class="box box-primary">
 <section class="content-header">
			<h1>
            Input <?php echo $this->uri->segment(2);?>
			</h1>
        </section>
                <div class="box-header">
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" enctype="multipart/form-data" action="<?php echo base_url();?>save/founder" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama">
                    </div>

                    <div class="form-group">
                      <label>Profil</label>
                      <textarea name="profil"  class="ckeditor" rows="5" id="ckeditor" placeholder="Profil"></textarea>
                      <script>
                          $(function () {
                              CKEDITOR.replace('ckeditor');
                          });
                      </script>
                    </div>

                    <div class="form-group">
                      <label>Job Desk</label>
                      <input type="text" name="jobdesk" class="form-control" id="exampleInputEmail1" placeholder="Chief Information Officer">
                    </div>

                    <div class="form-group">
                      <label>Foto</label>
                      <input type="file" name="gambar">
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer" align="right">
                    <button type="submit" name="save_news" class="btn btn-primary">Simpan</button>
					<button type="reset" class="btn btn-danger">Batal</button>
                  </div>
                </form>
              </div><!-- /.box -->
              </section></div>
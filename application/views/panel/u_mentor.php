<div class="content-wrapper"  background-repeat: no-repeat; background-size: 800px 700px;">
        <section class="content">
<div class="box box-primary">
 <section class="content-header">
			<h1>
            Update <?php echo $this->uri->segment(2);?>
			</h1>
        </section>
                <div class="box-header">
                </div><!-- /.box-header -->
                <!-- form start -->
                <?php foreach($mentor as $m):?>
                <form role="form" enctype="multipart/form-data" action="<?php echo base_url();?>save/mentor_update" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="hidden" name="id" value="<?php echo $m->id;?>">
                      <input type="text" name="nama" class="form-control" id="exampleInputEmail1" value="<?php echo $m->nama;?>">
                    </div>
                    <div class="form-group">
                      <label>Profil</label>
                      <textarea name="profil"  class="ckeditor" rows="5" id="ckeditor" placeholder="Profil"><?php echo $m->profil;?></textarea>
                      <script>
                          $(function () {
                              CKEDITOR.replace('ckeditor');
                          });
                      </script>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer" align="right">
                    <button type="submit" name="save_news" class="btn btn-primary">Simpan</button>
					         <button type="reset" class="btn btn-danger">Batal</button>
                  </div>
                </form>
              <?php endforeach;?>
              </div><!-- /.box -->
              </section></div>
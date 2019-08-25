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
                <?php foreach($founder as $f):?>
                <form role="form" enctype="multipart/form-data" action="<?php echo base_url();?>save/founder_update" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="hidden" name="id" value="<?php echo $f->id?>">
                      <input type="text" name="nama" class="form-control" id="exampleInputEmail1" value="<?php echo $f->nama?>">
                    </div>

                    <div class="form-group">
                      <label>Profil</label>
                      <textarea name="profil"  class="ckeditor" rows="5" id="ckeditor"><?php echo $f->profil;?></textarea>
                      <script>
                          $(function () {
                              CKEDITOR.replace('ckeditor');
                          });
                      </script>
                    </div>

                    <div class="form-group">
                      <label>Job Desk</label>
                      <input type="text" name="jobdesk" class="form-control" id="exampleInputEmail1" value="<?php echo $f->jobdesk?>">
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
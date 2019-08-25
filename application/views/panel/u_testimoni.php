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
                <?php foreach($testimoni as $t): ?>
                <form role="form" enctype="multipart/form-data" action="<?php echo base_url();?>save/testimoni_update" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="hidden" name="id" value="<?php echo $t->id;?>">
                      <input type="text" name="nama" class="form-control" id="exampleInputEmail1" value="<?php echo $t->nama;?>">
                    </div>

                    <div class="form-group">
                      <label>Profesi</label>
                      <input type="text" name="profesi" class="form-control" id="exampleInputEmail1" value="<?php echo $t->profesi;?>">
                    </div>

                    <div class="form-group">
                      <label>Testimoni</label>
                      <textarea name="testimoni"  class="ckeditor" rows="5" id="ckeditor" placeholder="Testimoni"><?php echo $t->testimoni;?></textarea>
                      <script>
                          $(function () {
                              CKEDITOR.replace('ckeditor');
                          });
                      </script>
                    </div>
                  <div class="box-footer" align="right">
                    <button type="submit" name="save_news" class="btn btn-primary">Simpan</button>
					         <button type="reset" class="btn btn-danger">Batal</button>
                  </div>
                </form>
              <?php endforeach; ?>
              </div><!-- /.box -->
              </section></div>
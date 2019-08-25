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
                <?php foreach($packages as $p):?>
                <form role="form" enctype="multipart/form-data" action="<?php echo base_url();?>save/packages_update" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="hidden" name="id" value="<?php echo $p->id;?>">
                      <input type="text" name="nama" class="form-control" id="exampleInputEmail1" value="<?php echo $p->nama;?>">
                    </div>

                    <div class="form-group">
                      <label>List</label>
                      <input type="text" name="list" class="form-control" id="exampleInputEmail1" value="<?php echo $p->list;?>"><font color="red">*pisahkan dengan tanda koma</font>
                    </div>

                    <div class="form-group">
                      <label>Price</label>
                      <input type="number" name="price" class="form-control" id="exampleInputEmail1" value="<?php echo $p->price;?>">
                    </div>

                    <div class="form-group">
                      <label>Deskripsi</label>
                      <textarea name="deskripsi" class="ckeditor" rows="5" id="ckeditor" placeholder="Deskripsi"><?php echo $p->deskripsi;?></textarea>
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
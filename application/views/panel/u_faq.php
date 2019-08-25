<div class="content-wrapper"  background-repeat: no-repeat; background-size: 800px 700px;">
        <section class="content">
<div class="box box-primary">
 <section class="content-header">
			<h1>
            Update <?php echo $this->uri->segment(2);?>
			</h1>
        </section>
        <?php foreach ($faq as $f):?>
                <div class="box-header">
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" enctype="multipart/form-data" action="<?php echo base_url();?>save/faq_update" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label>Question</label>
                      <input type="hidden" name="id" value="<?php echo $f->id;?>">
                      <input type="text" name="question" class="form-control" id="exampleInputEmail1" value="<?php echo $f->question;?>">
                    </div>

                    <div class="form-group">
                      <label>Answer</label>
                      <textarea name="answer" class="ckeditor" rows="5" id="ckeditor" placeholder="Answer"><?php echo $f->answer;?></textarea>
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
              </div><!-- /.box -->
              </section>\
            <?php endforeach;?>
  </div>
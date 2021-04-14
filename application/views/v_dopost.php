<style type="text/css">
    #btn1{
    background-color: white;
    color:#5fb759;
    font-size: 20px;
    font-family: 'Raleway', sans-serif;
    border-radius: 50px;
  }
  #btn1:hover{
    background-color: #5fb759;
    color:white;
    border-color: #5fb759;
  }

</style>
<main>
  <div class="hero_single version_2">
      <div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-10 col-md-8">
              <?php if($this->session->flashdata('pesan_gagal')){?>
                          <a  class="btn_1 full-width mb_5" id='alert_gagal'><?= $this->session->flashdata('pesan_gagal'); ?></a>
                       <?php }else if($this->session->flashdata('pesan_sukses')){ ?>
                          <a  class="btn_1 full-width mb_5" id='alert_sukses'><?= $this->session->flashdata('pesan_sukses'); ?></a>
                       <?php }?>
              <form method="post" action="<?=base_url('post/do_posts')?>" enctype="multipart/form-data">
                <div>
                  Choose your Photo or Video: <input type="file" name="berkas" />
                </div>
                <div class="row no-gutters custom-search-input">
                  <div class="col-lg-10">
                    <div class="form-group">
                      <textarea name="caption" style="width: 750px;" rows="5" id="message" placeholder="Caption" required=""></textarea>
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <input type="submit" style="margin-top: 30px;" value="Post">
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- /row -->
        </div>
      </div>
    </div>
</main>

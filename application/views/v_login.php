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
  #btn2{
    background-color: red;
    color:orange;
    font-size: 15px;
    font-family: 'Raleway', sans-serif;
    border-radius: 50px;
  }
  #btn3{
    background-color: green;
    color:white;
    font-size: 10px;
    font-family: 'Raleway', sans-serif;
    border-radius: 50px;
  }
  .bg_gray.pattern{
    background: url(<?=base_url('assets/images/slide-01.jpg');?>);
  }
  #alert_gagal{
    background-color: red;
    color: white;
  }
  #alert_sukses{
    background-color: green;
    color: white;
  }
</style>




  <main class="bg_gray pattern">
    
    <div class="container margin_60_40">
        <div class="row justify-content-center">
            <div class="col-lg-4">
              <div class="sign_up">
                    <div class="head">
                        <div class="title">
                        <h3 style="font-family: Ink Free;font-size: 40px;">.InstaApp</h3>
                    </div>
                    </div>
                    <!-- /head -->
                  <?php if($sign != 1){?>
                    <form id="contact" action="<?php echo base_url('login/dologin');?>" method="post">
                      <div class="main">
                       <?php if($this->session->flashdata('pesan_gagal')){?>
                          <a  class="btn_1 full-width mb_5" id='alert_gagal'><?= $this->session->flashdata('pesan_gagal'); ?></a>
                       <?php }else if($this->session->flashdata('pesan_sukses')){ ?>
                          <a  class="btn_1 full-width mb_5" id='alert_sukses'><?= $this->session->flashdata('pesan_sukses'); ?></a>
                       <?php }?>
                       
                       
                      <div class="form-group">
                        <input class="form-control" name="username" type="text" placeholder="Username or Email" required="">
                        <i class="icon_pencil"></i>
                      </div>
                      <div class="form-group add_bottom_15">
                        <input class="form-control" name='password' type='password' placeholder="Password" id="password_sign" name="password_sign" required="">
                        <i class="icon_lock"></i>
                      </div>
                          <!-- <a href="confirm.html" class="btn_1 full-width mb_5">Sign up Now</a> -->
                          <input type="submit" class="btn_1 full-width mb_5"  value="Login">
                      </div>
                      <div >
                          <a style="font-size: 11px;"  href="<?= base_url('login/signup');?>" class="btn_1 full-width mb_5">Don't have an account? Sign Up</a>
                        
                      </div>
                    </form>
                  <?php }else{ ?>
                    <form id="contact" action="<?php echo base_url('login/dosignup');?>" method="post">
                      <div class="main">
                       <?php if($this->session->flashdata('pesan_gagal')){?>
                          <a  class="btn_1 full-width mb_5" id='alert_gagal'><?= $this->session->flashdata('pesan_gagal'); ?></a>
                       <?php }else if($this->session->flashdata('pesan_sukses')){ ?>
                          <a  class="btn_1 full-width mb_5" id='alert_sukses'><?= $this->session->flashdata('pesan_sukses'); ?></a>
                       <?php }?>
                       
                       
                      <div class="form-group">
                        <input class="form-control" name="name" type="text" placeholder="Full Name" required="">
                        <i class="icon_pencil"></i>
                      </div>
                      <div class="form-group">
                        <input class="form-control" name="email" type="email" placeholder="Email" required="">
                        <i class="icon_mail"></i>
                      </div>
                      <div class="form-group">
                        <input class="form-control" name="username" type="text" placeholder="Username" required="">
                        <i class="icon_pencil"></i>
                      </div>
                      <div class="form-group add_bottom_15">
                        <input class="form-control" name='password' type='password' placeholder="Password" id="password" required="">
                        <i class="icon_lock"></i>
                      </div>
                          <input type="submit" class="btn_1 full-width mb_5"  value="Sign Up">
                      </div>
                      <div >
                          <a style="font-size: 11px;"  href="<?= base_url('login');?>" class="btn_1 full-width mb_5">Have an account? Log in</a>
                        
                      </div>
                    </form>
                  <?php }?>
                </div>
                <!-- /box_booking -->
            </div>
            <!-- /col -->

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
    
  </main>
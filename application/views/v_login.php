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
</style>

<div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item">
            <?php if($sign != 1){?>
              <!-- Tampilan Login -->
              <div class="img-fill">
                  <img src="<?=base_url('assets/images/slide-01.jpg')?>" alt="">
                  <div class="text-content">
                  <div class="row">
                      <div class="col-lg-4 col-md-4 col-xs-12">
                          <div class="left-text-content">
                          </div>
                      </div>
                      <div class="col-lg-8 col-md-8 col-xs-12">
                          <div class="contact-form">
                              <form id="contact" action="<?php echo base_url('login/dologin');?>" method="post">
                                <div class="row">
                                  <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                      <h3 style="font-family: Ink Free;font-size: 40px;">InstaApp</h3>
                                      <fieldset>
                                  </div>
                                  <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                    </fieldset>
                                  </div>

                                      
                                    
                                  <?php if($this->session->flashdata('pesan_gagal') || $this->session->flashdata('pesan_gagal')){?>
                                  <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                      <font color="#8B0000" size="3"><b><?= $this->session->flashdata('pesan_gagal'); ?></font>
                                        <font color="#006400" size="3"><?= $this->session->flashdata('pesan_sukses'); ?></font></b></center><br />
                                    </fieldset>
                                  </div>
                                  <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                    </fieldset>
                                  </div>
                                  <?php }?>
                                  <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                      <input name="username" type="text" id="username" placeholder="Username or Email" required="">
                                    </fieldset>
                                  </div>
                                  <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                    </fieldset>
                                  </div>
                                  <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                      <input name="password" type="password" id="password" placeholder="Password" required="">
                                    </fieldset>
                                  </div>
                                  <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                    </fieldset>
                                  </div>

                                  <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                      <input type="submit" id="btn1"  value="Login">
                                    </fieldset>
                                  </div>
                                  <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                    </fieldset>
                                  </div>

                                  <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                      <a style="font-size: 11px;"  href="<?= base_url('login/signup');?>" class="main-stroked-button">Don't have an account? Sign Up</a>
                                    </fieldset>
                                  </div>
                                  <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                    </fieldset>
                                  </div>
                    
                                </div>
                              </form>
                          </div>
                      </div>
                  </div>

                    
                  </div>
              </div>
            <?php }else { ?>
              <!-- Tampilan Sign up -->
              <div class="img-fill">
                  <img src="<?=base_url('assets/images/slide-01.jpg')?>" alt="">
                  <div class="text-content">
                  <div class="row">
                      <div class="col-lg-4 col-md-4 col-xs-12">
                          <div class="left-text-content">
                          </div>
                      </div>
                      <div class="col-lg-8 col-md-8 col-xs-12">
                          <div class="contact-form">
                              <form id="contact" action="<?=base_url('login/dosignup')?>" method="post">
                                <div class="row">
                                  <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                      <h3 style="font-family: Ink Free;font-size: 40px;">InstaApp</h3>
                                      <font color="red" size="3"><b><?= $this->session->flashdata('pesan_gagal'); ?></font>
                                      <font color="green" size="3"><?= $this->session->flashdata('pesan_sukses'); ?></font></b></center><br />
                                    </fieldset>
                                  </div>
                                  <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                    </fieldset>
                                  </div>
                                  <?php if($this->session->flashdata('pesan_gagal') || $this->session->flashdata('pesan_gagal')){?>
                                  <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                      <font color="#8B0000" size="3"><b><?= $this->session->flashdata('pesan_gagal'); ?></font>
                                        <font color="#006400" size="3"><?= $this->session->flashdata('pesan_sukses'); ?></font></b></center><br />
                                    </fieldset>
                                  </div>
                                  <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                    </fieldset>
                                  </div>
                                  <?php }?>
                                  <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                      <input name="name" type="text" id="text" placeholder="Full Name" required="">
                                      
                                    </fieldset>
                                  </div>
                                  <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                    </fieldset>
                                  </div>
                                  <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                      <input name="email" type="email" id="email" placeholder="Email" required="">
                                    </fieldset>
                                  </div>
                                  <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                    </fieldset>
                                  </div>
                                  <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                      <input name="username" type="text" id="username" placeholder="Username" required="">
                                    </fieldset>
                                  </div>
                                  <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                    </fieldset>
                                  </div>
                                  <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                      <input name="password" type="password" id="password" placeholder="Password" required="">
                                    </fieldset>
                                  </div>
                                  <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                    </fieldset>
                                  </div>

                                  <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                      <input type="submit" id="btn1"  value="Sign Up">
                                    </fieldset>
                                  </div>
                                  <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                    </fieldset>
                                  </div>

                                  <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                      <a style="" href="<?= base_url('login');?>" class="main-stroked-button">Have an account? Log in</a>
                                    </fieldset>
                                  </div>
                                  <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                    </fieldset>
                                  </div>

                                </div>
                              </form>
                          </div>
                      </div>
                  </div>
                    
                    
                  </div>
              </div>
            <?php }?>
          </div>


          <!-- // Item -->
        </div>
</div>
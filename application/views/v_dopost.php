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
<section class="section" id="projects">
      <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="filters-content" style="width: 250px">
                  
                        <div>
                          <div class="item">
                            <a href="<?=base_url('assets/images/project-big-item-01.jpg')?>" data-lightbox="image-1" data-title="Our Projects"><img src="<?=base_url('assets/images/project-item-01.jpg')?>" alt=""></a>
                          </div>
                        </div>
                        
                   
                </div>

            </div>
            <div class="col-lg-8">

                <div class="contact-form">
                              <form id="contact" action="<?=base_url('post/do_posts')?>" method="post">
                                <div class="row">
                                
                                  <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                      <textarea name="caption" rows="6" id="message" placeholder="Caption" required=""></textarea>
                                      
                                    </fieldset>
                                  </div>
                                  <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                    </fieldset>
                                  </div>
                                  
                                  <div class="col-md-6 col-sm-12" hidden="">
                                    <fieldset>
                                      <input name="name_picture" type="text" placeholder="picture" >
                                    </fieldset>
                                  </div>
                                  <div class="col-md-6 col-sm-12" hidden="">
                                    <fieldset>
                                    </fieldset>
                                  </div>

                                  <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                      <input type="submit" id="btn1"  value="Post">
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
    </section>
    <section class="section" id="projects"></section>
 <style type="text/css">
    .bg_gray{
        background: url(<?=base_url('assets/images/slide-01.jpg');?>);
    }
    .list_home{
        background: url(<?=base_url('assets/images/slide-01.jpg');?>);
    }
    
    #item{
        background-color: transparent;
    }
    #item:hover{
        background-color: rgba(0, 0, 0, 0.6);
    }
    .list_home ul li a{
        border-color: transparent;
    }
</style>
<div class="list_home">
<ul>
    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-12">
            
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12">
            <li></li>
            <li></li>
            <li></li>
        <li>
            <a>
                <?php if($data){?>
                <figure>
                    <img src="<?php echo base_url('upload/'.$data[0]->name_picture)?>" alt="" class="lazy">
                </figure>
                <?php }else{?>
                <figure>
                    <img src="<?php echo base_url('assets/assets1/img/thumb_detail_placeholder.jpg')?>" alt="" class="lazy">
                </figure>
                <?php }?>
                <div style="display: flex;">
                    <div style="margin-right: auto;">
                       <h4 style="font-weight: bold;"><?php echo count($data);?></h4>
                        <h6>Posting</h6> 
                    </div>
                    <div style="margin-right: auto;">
                       <h4 style="font-weight: bold;"><?php echo count($data);?></h4>
                        <h6>Follower</h6> 
                    </div>
                    <div style="margin-right: auto;">
                       <h4 style="font-weight: bold;"><?php echo count($data);?></h4>
                        <h6>Following</h6> 
                    </div>
                </div>
                
                <div style="display: flex;">

                <div style="margin-right: auto;">
                    <ul>
                        <li ><button onclick="location.href = '<?=base_url('post');?>';" class="ribbon off" >Send Email</button></li>
                    </ul>
                </div>
                
                <div style="margin-right: auto;">
                    <ul>
                        <li ><button  class="ribbon off" >Edit Profile</button></li>
                    </ul>
                </div>
                <div style="margin-right: auto;">
                    <ul>
                        <li ><button  class="ribbon off" >Follow</button></li>
                    </ul>
                </div>
                 </div>
            </a>
        </li>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-12">
            
        </div>
    </div>
    
</ul>
</div>
 <div class="bg_gray">
            <div class="container margin_60_40">
                <div class="main_title center">
                    <span><em></em></span>
                    
                </div>
                <!-- /main_title -->
                <?php 
                $q= 0;
                for($i=$q; $i<count($data); $i++){ 
                $i--; ?>
                <div class="owl-carousel owl-theme categories_carousel">
                    <?php $i++; if(isset($data[$i])){ 
                    $gambar = json_decode($data[$i]->name_picture);
                   
                    $format = substr($data[$i]->name_picture, -3);
                    
                    if($format == 'mp4' || $format == 'Mp4' || $format == 'ogg'){
                        echo '<div class="item" id="item">
                        <a href="'.base_url("post/detail_post/").$data[$i]->id_posts.'">
                        <video>
                          <source src="'.base_url("upload/".$data[$i]->name_picture).'" type="video/mp4">
                        </video>
                        </a>
                         </div>';
                    }else{
                        echo "<div class='item'>
                        <a href='".base_url("post/detail_post/").$data[$i]->id_posts."'>
                            <img src='".base_url("upload/".$data[$i]->name_picture)."' alt='Paris'>
                        </a>
                         </div>";
                    }
                    
                    }?>
                    <?php $i++; if(isset($data[$i])){ 
                    $gambar = json_decode($data[$i]->name_picture);
                   
                    $format = substr($data[$i]->name_picture, -3);
                    
                    if($format == 'mp4' || $format == 'Mp4' || $format == 'ogg'){
                        echo '<div class="item" >
                        <a href="'.base_url("post/detail_post/").$data[$i]->id_posts.'">
                        <video>
                          <source src="'.base_url("upload/".$data[$i]->name_picture).'" type="video/mp4">
                        </video>
                        </a>
                         </div>';
                    }else{
                        echo "<div class='item'>
                        <a href='".base_url("post/detail_post/").$data[$i]->id_posts."'>
                            <img src='".base_url("upload/".$data[$i]->name_picture)."' alt='Paris'>
                        </a>
                         </div>";
                    }
                    
                    }?>
                    <?php $i++; if(isset($data[$i])){ 
                    $gambar = json_decode($data[$i]->name_picture);
                   
                    $format = substr($data[$i]->name_picture, -3);
                    
                    if($format == 'mp4' || $format == 'Mp4' || $format == 'ogg'){
                        echo '<div class="item" >
                        <a href="'.base_url("post/detail_post/").$data[$i]->id_posts.'">
                        <video>
                          <source src="'.base_url("upload/".$data[$i]->name_picture).'" type="video/mp4">
                        </video>
                        </a>
                         </div>';
                    }else{
                        echo "<div class='item'>
                       <a href='".base_url("post/detail_post/").$data[$i]->id_posts."'>
                            <img src='".base_url("upload/".$data[$i]->name_picture)."' alt='Paris'>
                        </a>
                         </div>";
                    }
                    
                    }?>
                    <?php $i++; if(isset($data[$i])){ 
                    $gambar = json_decode($data[$i]->name_picture);
                   
                    $format = substr($data[$i]->name_picture, -3);
                    
                    if($format == 'mp4' || $format == 'Mp4' || $format == 'ogg'){
                        echo '<div class="item" >
                        <a href="'.base_url("post/detail_post/").$data[$i]->id_posts.'">
                        <video>
                          <source src="'.base_url("upload/".$data[$i]->name_picture).'" type="video/mp4">
                        </video>
                        </a>
                         </div>';
                    }else{
                        echo "<div class='item'>
                        <a href='".base_url("post/detail_post/").$data[$i]->id_posts."'>
                            <img src='".base_url("upload/".$data[$i]->name_picture)."' alt='Paris'>
                        </a>
                         </div>";
                    }
                    
                    }?>
                    <?php $i++; if(isset($data[$i])){ 
                    $gambar = json_decode($data[$i]->name_picture);
                   
                    $format = substr($data[$i]->name_picture, -3);
                    
                    if($format == 'mp4' || $format == 'Mp4' || $format == 'ogg'){
                        echo '<div class="item" >
                        <a href="'.base_url("post/detail_post/").$data[$i]->id_posts.'">
                        <video>
                          <source src="'.base_url("upload/".$data[$i]->name_picture).'" type="video/mp4">
                        </video>
                        </a>
                         </div>';
                    }else{
                        echo "<div class='item'>
                        <a href='".base_url("post/detail_post/").$data[$i]->id_posts."'>
                            <img src='".base_url("upload/".$data[$i]->name_picture)."' alt='Paris'>
                        </a>
                         </div>";
                    }
                    
                    }?>
                    <!-- <div class="item">
                        <a href="#0">
                            <span>87</span>
                            <i class="icon-food_icon_sushi"></i>
                            <h3>Japanese - Sushi</h3>
                            <small>Avg price $50</small>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#0">
                            <span>96</span>
                            <i class="icon-food_icon_burgher"></i>
                            <h3>Burghers</h3>
                            <small>Avg price $55</small>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#0">
                            <span>78</span>
                            <i class="icon-food_icon_vegetarian"></i>
                            <h3>Vegetarian</h3>
                            <small>Avg price $40</small>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#0">
                            <span>65</span>
                            <i class="icon-food_icon_cake_2"></i>
                            <h3>Bakery</h3>
                            <small>Avg price $60</small>
                        </a>
                    </div> -->
                </div>
                <?php }?>
                <!-- /carousel -->
            </div>
            <!-- /container -->
        </div>
 <!-- <section class="section" id="projects">
      <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="filters-content" style="width: 250px">
                  
                        <div>
                          <div class="item">
                            <a href="assets/images/project-big-item-01.jpg" data-lightbox="image-1" data-title="Our Projects"><img src="assets/images/project-item-01.jpg" alt=""></a>
                          </div>
                        </div>
                        
                   
                </div>

            </div>
            <div class="col-lg-8">

                <div style='margin-top: 100px' class="section-heading">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <center><h6>Post</h6></center>
                            <center><h2>12</h2></center>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <center><h6>Follower</h6></center>
                            <center><h2>213</h2></center>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <center><h6>Following</h6></center>
                            <center><h2>212</h2></center>
                        </div>
                    </div>
                    
                </div>
   
            </div>
        </div>
      </div>
    </section>
  <section class="section" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 mobile-bottom-fix-big" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="owl-carousel owl-theme">
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="assets/images/member-item-01.jpg" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4>.01 White Cheese</h4>
                            <span>Digital Marketer</span>
                        </div>
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="assets/images/member-item-04.jpg" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4>.02 Snow Mary</h4>
                            <span>Site Analyst</span>
                        </div>
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="assets/images/member-item-02.jpg" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4>.03 Johnny Egg</h4>
                            <span>Digital Influencer</span>
                        </div>
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="assets/images/member-item-05.jpg" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4>.04 Catherine Phyu</h4>
                            <span>Co Founder</span>
                        </div>
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="assets/images/member-item-03.jpg" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4>.05 Shao Lynn</h4>
                            <span>Chief Marketing</span>
                        </div>
                        
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="assets/images/member-item-04.jpg" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4>.06 Emma Honey</h4>
                            <span>Digital Influencer</span>
                        </div>
                        
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="assets/images/member-item-06.jpg" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4>.07 Oliva Sofie</h4>
                            <span>Website Analyst</span>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section> -->
<style type="text/css">
	.bg_gray{
        background: url(<?=base_url('assets/images/slide-01.jpg');?>);
    }
    table {
	  border-collapse: collapse;
	  border-spacing: 0;
	  width: 300%;
	  height: 300px;
	  border: 1px solid #ddd;
	}

	th, td {
	  text-align: left;
	  padding: 8px;
	}
	td {
        white-space: nowrap;
    }
    .withscroll {
        width: 500px;
        height: 200px;
        overflow-y: scroll;
        white-space: nowrap;
        margin-bottom: 15px;
    }
	tr:nth-child(even){background-color: #f2f2f2}
	.fs1{
		color: black;
	}
	.fs2{
		color: red;
	}
	.fs1:hover{
		color:red;
	}
	#share{
		padding: 4px;
		background-color: black;
		color: white;
	}
	#share:hover{
		background-color: #589442;
		color: white;
	}
</style>
<div class="bg_gray">
			<div class="container margin_60_40">
				<div class="main_title center">
					<span><em></em></span>
					
				</div>
				<!-- /main_title -->
				<div class="row small-gutters categories_grid">
					<div class="col-sm-12 col-md-6">
						<?php 
						$format = substr($data[0]->name_picture, -3);
						if($format == 'mp4' || $format == 'Mp4' || $format == 'ogg'){ ?>
							<a href="<?=base_url("post/detail_post/").$data[0]->id_posts?>">
	                        <video autoplay="true">
	                          <source src="<?=base_url("upload/".$data[0]->name_picture)?>" type="video/mp4">
	                        </video>
	                        </a>
						<?php }else{?>
							<a href="<?=base_url('upload/'.$data[0]->name_picture);?>">
							<img src="<?=base_url('upload/'.$data[0]->name_picture);?>" data-src="<?=base_url('upload/'.$data[0]->name_picture);?>" alt="" class="img-fluid lazy">
						</a>
						<?php }?>
						
					</div>
					<div class="col-sm-12 col-md-6">
						<div style="background-color: white;color: black;width: 525px;height: 400px;    padding: inherit;">
							<input type="text" name="like_val" style="display: none">
							<h4>
							<div style="display: flex;">
								<div style="margin-right: 10px;">
									<?php if($data_likes){?>
										<?php if($data_like_private[0]->like_val == '1'){?>
										<a href="<?=base_url('post/insert_likes/')?>?like_val=0&id_posts=<?=$data[0]->id_posts?>">
										<div class="fs2" aria-hidden="true" data-icon="&#xe089;" id="love"></div>
										</a>
										<?php }else{?>
										<a href="<?=base_url('post/insert_likes/')?>?like_val=1&id_posts=<?=$data[0]->id_posts?>">
										<div class="fs1" aria-hidden="true" data-icon="&#xe089;" id="love"></div>
										</a>
										<?php }?>
									<?php }else{?>
										<a href="<?=base_url('post/insert_likes/')?>?like_val=1&id_posts=<?=$data[0]->id_posts?>">
										<div class="fs1" aria-hidden="true" data-icon="&#xe089;" id="love"></div>
										</a>
									<?php }?>
								</div>
								<div>
									<?php if(count($data_likes)>0){?>
										<?=count($data_likes);?> likes
									<?php }else{?>
										 0 likes
									<?php } ?>
								</div>
							</div>
							
							
							</h4>
						
							
						<?php if(count($data_comments)>0){?>
							<h4><?php echo count($data_comments);?> Comments</h4>
							<div class="withscroll">
								<table>
								<?php 
				                $q= 0;
				                for($i=$q; $i<count($data_comments); $i++){ 
				                $i--; ?>
				                <?php $i++; if(isset($data_comments[$i])){ 
				                	echo '
				                	
										<tr style="height: fit-content;"><td><h6>'.$data_comments[$i]->username.'<h6></td></tr>
										<tr style="height: fit-content;"><td><p>'.$data_comments[$i]->content.'</p></td></tr>
									
				                	';
				                 }?>

								<?php } ?>
								</table>
							</div>
						<?php }else{ ?>
							<h4>Comments</h4>
								<tr><td><h6>0 Comment<h6></td></tr>

						<?php } ?>
							<form action="<?=base_url('post/insert_comment');?>" method="post">
								<div class="form-group">
			                      <textarea name="content" style="width: 500px;" rows="2" id="content" placeholder="Write Comment Public ..." required=""></textarea>
			                      <input class="form-control" name="id_posts" type="text" value="<?php echo $data[0]->id_posts;?>" style="display: none">
			                      <div style="display: flex;">
			                      	<div style="margin-right: 10px;"><input type="submit" style="margin-top: 2px;" value="Send"></div>
			                      	<div>
			                      		<a  id='share' >Share</a></div>
			                      </div>
			                      
			                      
			                    </div>
							</form>

						</div>
					</div>
				</div>
				<!--/categories_grid-->
			</div>
			<!-- /container -->
		</div>
		<script type="text/javascript">
			$(document).ready(function() {
			  $("#share").on('click', function(event) {
			    window.location = 'whatsapp://send?text='+encodeURIComponent(<?=base_url('upload/'.$data[0]->name_picture);?>);
			  });
			});
			
		</script>
 <?php
 $Total_Soft_Gallery_Video = rand(1,1000);
	if($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Thumbnails Video'){ ?>
				<script src="<?php echo plugins_url('../JS/jquery.adipoli.js',__FILE__);?>" type="text/javascript"></script>
				<link href="<?php echo plugins_url('../CSS/jquery.fs.boxer.css',__FILE__);?>" rel="stylesheet" type="text/css" media="all">
				<script src="<?php echo plugins_url('../JS/jquery.fs.boxer.js',__FILE__);?>" type="text/javascript"></script>
				<script type="text/javascript">
					jQuery(function(){
						jQuery('.totalsoft_gv_tv_img_<?php echo $Total_Soft_Gallery_Video;?>').adipoli({
							'startEffect'   : '<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01;?>',
							'hoverEffect'   : '<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02;?>',
							'imageOpacity'  : 1,
							'animSpeed'     : <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_03;?>,
							'fillColor'     : '<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_04;?>',
							'textColor'     : '#ffffff',
							'overlayText'   : '<i class="<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14;?>"></i>',
							'slices'        : <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_05;?>,
							'boxCols'       : <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>,
							'boxRows'       : <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_07;?>,
							'popOutMargin'  : <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_08;?>,
							'popOutShadow'  : <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>,
							'popOutShadowC' : '<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>'
						});
					});
				</script>
				<script>
					jQuery(document).ready(function() {
						if(jQuery(window).width() < 820)
						{
							jQuery(".boxer_<?php echo $Total_Soft_Gallery_Video;?>").boxer({ mobile: true });
						}
						else
						{
							jQuery(".boxer_<?php echo $Total_Soft_Gallery_Video;?>").not(".retina, .boxer_fixed, .boxer_top, .boxer_format, .boxer_mobile, .boxer_object").boxer();
						}
						jQuery(".boxer_<?php echo $Total_Soft_Gallery_Video;?>.boxer_object").click(function(e) {
							e.preventDefault();
							e.stopPropagation();
							$.boxer( jQuery('<div class="inline_content"><h2>More Content!</h2><p>This was created by jQuery and loaded into the new Boxer instance.</p></div>') );
						});
						jQuery(window).one("pronto.load", function() {
							jQuery.boxer("close");
							jQuery(".boxer_<?php echo $Total_Soft_Gallery_Video;?>").boxer("destroy");
						});
					});
				</script>
				<style type="text/css">
					ul.pagination<?php echo $Total_Soft_Gallery_Video;?> li { border:none !important; list-style:none !important; }
					ul.pagination<?php echo $Total_Soft_Gallery_Video;?> li span 
					{
						background:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_01;?> !important;
						color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_02;?> !important;
						font-size:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03;?>px;
						font-family:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_04;?>;
						height:auto !important;
						line-height: 1 !important;
						<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_09!='none'){ ?> 
							border: 1px solid <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_10;?> !important;
						<?php } else { ?>
							border: none !important;
						<?php }?>
						display:block;
					}
					ul.pagination<?php echo $Total_Soft_Gallery_Video;?> li span:hover:not(.active) 
					{
						background: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_07;?> !important;
						color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_08;?> !important;
					}
					ul.pagination<?php echo $Total_Soft_Gallery_Video;?> li span.active 
					{
						background: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_05;?> !important;
						color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_06;?> !important;
					}
					.TotalSoftGV_TV_LM<?php echo $Total_Soft_Gallery_Video;?>
					{
						background-color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_01;?>;
						color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_02;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03;?>px;
						font-family:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_04;?>;
						<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_09!='none'){ ?> 
							border: 1px solid <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_10;?>;
						<?php } else { ?>
							border: none !important;
						<?php }?>
						cursor:pointer;
						display: block;
						padding: 3px !important;
						line-height: 1 !important;
					}
					.TotalSoftGV_TV_LM<?php echo $Total_Soft_Gallery_Video;?>:hover
					{
						background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_07;?>;
						color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_08;?>;
					}
					#boxer-overlay
					{
						background: rgba(0,0,0,0.25);
						position: fixed!important;
						z-index: 999999999;
						opacity: 1!important;
						webkit-transition: opacity 0.25s linear;
  						transition: opacity 0.25s linear;
					}
					#boxer
					{
						<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_20=='true'){ ?> 
							background: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_21;?>;
						<?php }?>
						border-radius: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22;?>px;
						box-shadow: 0 0 25px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23;?>;
					}
					#boxer .boxer-container
					{
						<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24=='true'){ ?> 
							background: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_25;?>;
						<?php }?>
					}
					#boxer .boxer-caption p
					{
						color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_28;?>;
						font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_26;?>px;
						font-family: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_27;?>;
						text-align: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_29;?>;
					}
					#boxer .boxer-caption { background: none !important; border: none !important; }
					#boxer .boxer-position
					{
						color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_30;?>;
						font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_31;?>px;
						perspective: 800px;
						transform: translate3d(0,0,0);
						-moz-transform: translate3d(0,0,0);
						-webkit-transform: translate3d(0,0,0);
					}
					#boxer .boxer-control
					{
						background: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_32;?>;
						border-radius: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_34;?>%;
					}
					#boxer .boxer-control.previous:before
					{
						border-right: 10.4px solid <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_33;?>;
					}
					#boxer .boxer-control.next:before
					{
						border-left: 10.4px solid <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_33;?>;
					}
					#boxer .boxer-close
					{
						background: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_35;?>;
						border-radius: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_37;?>%;
					}
					#boxer .boxer-close:before
					{
						color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_36;?>;
					}
					.adipoli-slice { display:block; position:absolute; z-index:15; height:100%; }
					.adipoli-box { display:block; position:absolute; z-index:15; }
					.totalsoft_gv_tv_row p
					{
						position:relative;
						color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_13;?>;
						margin:0px !important;
						text-align:center !important;
						top:50%;
						transform:translateY(-50%);
						-webkit-transform:translateY(-50%);
						-ms-transform:translateY(-50%);
						-moz-transform:translateY(-50%);
						-o-transform:translateY(-50%);
						z-index: 9999999999;
						font-size: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_12;?>px;
					}
					.boxer_<?php echo $Total_Soft_Gallery_Video;?>
					{
						opacity: 0;
						<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_15 == 'moveUp'){ ?>
							-webkit-transform: translateY(200px);
							-moz-transform: translateY(200px);
							transform: translateY(200px);
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_15 == 'scaleUp'){ ?>
							-webkit-transform: scale(0.6);
							-moz-transform: scale(0.6);
							transform: scale(0.6);
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_15 == 'fallPerspective'){ ?>
							-webkit-transform-style: preserve-3d;
							-moz-transform-style: preserve-3d;
							transform-style: preserve-3d;
							-webkit-transform: translateZ(400px) translateY(300px) rotateX(-90deg);
							-moz-transform: translateZ(400px) translateY(300px) rotateX(-90deg);
							transform: translateZ(400px) translateY(300px) rotateX(-90deg);
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_15 == 'fly'){ ?>
							-webkit-transform-style: preserve-3d;
							-moz-transform-style: preserve-3d;
							transform-style: preserve-3d;
							-webkit-transform-origin: 50% 50% -300px;
							-moz-transform-origin: 50% 50% -300px;
							transform-origin: 50% 50% -300px;
							-webkit-transform: rotateX(-180deg);
							-moz-transform: rotateX(-180deg);
							transform: rotateX(-180deg);
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_15 == 'flip'){ ?>
							-webkit-transform-style: preserve-3d;
							-moz-transform-style: preserve-3d;
							transform-style: preserve-3d;
							-webkit-transform-origin: 0% 0%;
							-moz-transform-origin: 0% 0%;
							transform-origin: 0% 0%;
							-webkit-transform: rotateX(-80deg);
							-moz-transform: rotateX(-80deg);
							transform: rotateX(-80deg);
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_15 == 'helix'){ ?>
							-webkit-transform-style: preserve-3d;
							-moz-transform-style: preserve-3d;
							transform-style: preserve-3d;
							-webkit-transform: rotateY(-180deg);
							-moz-transform: rotateY(-180deg);
							transform: rotateY(-180deg);
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_15 == 'popUp'){ ?>
							-webkit-transform-style: preserve-3d;
							-moz-transform-style: preserve-3d;
							transform-style: preserve-3d;
							-webkit-transform: scale(0.4);
							-moz-transform: scale(0.4);
							transform: scale(0.4);
						<?php }?>
					}
					.effect-container<?php echo $Total_Soft_Gallery_Video;?>
					{
						<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_15 == 'fallPerspective'){ ?>
							-webkit-perspective: 1300px;
							-moz-perspective: 1300px;
							perspective: 1300px;
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_15 == 'fly'){ ?>
							-webkit-perspective: 1300px;
							-moz-perspective: 1300px;
							perspective: 1300px;
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_15 == 'flip'){ ?>
							-webkit-perspective: 1300px;
							-moz-perspective: 1300px;
							perspective: 1300px;
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_15 == 'helix'){ ?>
							-webkit-perspective: 1300px;
							-moz-perspective: 1300px;
							perspective: 1300px;
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_15 == 'popUp'){ ?>
							-webkit-perspective: 1300px;
							-moz-perspective: 1300px;
							perspective: 1300px;
						<?php }?>
						position: relative;
						float: left;
						width: 100%;
					}
					.TS_GV_TVG_Loading_<?php echo $Total_Soft_Gallery_Video;?>
					{
						position: absolute;
						left: 0;
						top: 0;
						width: 100%;
						height: 100%;
						background: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_17;?>;
						z-index: 10;
						padding: 0;
						overflow: hidden !important;
						text-align: center;
					}
					.TS_GV_TVG_Loading_<?php echo $Total_Soft_Gallery_Video;?> img
					{
						margin: 0 auto !important;
						position: relative;
						top: 50%;
						transform: translateY(-50%);
						-moz-transform: translateY(-50%);
						-webkit-transform: translateY(-50%);
					}
				</style>
				<div class="effect-container effect-container<?php echo $Total_Soft_Gallery_Video;?>">
					<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_16 != ''){ ?>
						<div class="TS_GV_TVG_Loading_<?php echo $Total_Soft_Gallery_Video;?>">
							<img src="<?php echo plugins_url('../Images/Loading/loading' . $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_16 . '.gif',__FILE__);?>">
						</div>
					<?php }?>
					<?php for($i=0;$i<count($Total_Soft_GalleryV_Videos);$i++){ ?>
						<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL == ''){ $TS_GV_TG_VSR = $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL; }
						else{ $TS_GV_TG_VSR = $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL; }?>
						<?php if($Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType=='All'){ ?>
							<a style='margin:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11;?>px; display: inline-block; max-width: none; border: none;' href="<?php echo $TS_GV_TG_VSR;?>" class="boxer_<?php echo $Total_Soft_Gallery_Video;?> boxer small" data-gallery="video_gallery_<?php echo $Total_Soft_Gallery_Video;?>" title="<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>"><img class="img-style totalsoft_gv_tv_row totalsoft_gv_tv_img_<?php echo $Total_Soft_Gallery_Video;?>" style="width: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_11;?>px; height: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>px;" src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>"/></a>
						<?php } else { ?>
							<?php if($i<$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage){ ?> 
								<a style='margin:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11;?>px; display: inline-block; max-width: none; border: none;' href="<?php echo $TS_GV_TG_VSR;?>" class="boxer_<?php echo $Total_Soft_Gallery_Video;?> boxer small" id="TotalSoft_GV_TV_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i+1;?>" data-gallery="video_gallery_<?php echo $Total_Soft_Gallery_Video;?>" title="<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>"><img class="img-style totalsoft_gv_tv_row totalsoft_gv_tv_img_<?php echo $Total_Soft_Gallery_Video;?>" style="width: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_11;?>px; height: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>px;" src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>"/></a>
							<?php } else { ?>
								<a style='margin:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11;?>px; display: none; max-width: none; border: none;' href="<?php echo $TS_GV_TG_VSR;?>" class="boxer_<?php echo $Total_Soft_Gallery_Video;?> boxer small noshow1" id="TotalSoft_GV_TV_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i+1;?>" data-gallery="video_gallery_<?php echo $Total_Soft_Gallery_Video;?>" title="<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>"><img class="img-style totalsoft_gv_tv_row totalsoft_gv_tv_img_<?php echo $Total_Soft_Gallery_Video;?>" style="width: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_11;?>px; height: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>px;" src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>"/></a>
							<?php }?>
						<?php }?>
					<?php }?>
					<?php if($Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType=='Pagination'){ ?>
						<div class="TotalSoftcenter">
							<ul class="pagination pagination<?php echo $Total_Soft_Gallery_Video;?>">
								<li onclick="Total_Soft_GV_TV_PageP('<?php echo $Total_Soft_Gallery_Video;?>', '<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>')"><span><?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_39;?></span></li>
								<?php for($i=1;$i<=ceil(count($Total_Soft_GalleryV_Videos)/$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage);$i++){ ?> 
									<?php if($i==1){ ?>
										<li id="TotalSoft_GV_TV_PLi_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i;?>" onclick="Total_Soft_GV_TV_Page('<?php echo $Total_Soft_Gallery_Video;?>','<?php echo $i?>','<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>')"><span class="active"><?php echo $i;?></span></li>
									<?php } else { ?>
										<li id="TotalSoft_GV_TV_PLi_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i;?>" onclick="Total_Soft_GV_TV_Page('<?php echo $Total_Soft_Gallery_Video;?>','<?php echo $i?>','<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>')"><span><?php echo $i;?></span></li>
									<?php }?>
								<?php }?>
								<li onclick="Total_Soft_GV_TV_PageN('<?php echo $Total_Soft_Gallery_Video;?>', '<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>', '<?php echo ceil(count($Total_Soft_GalleryV_Videos)/$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage);?>')"><span><?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_38;?></span></li>
							</ul>
						</div>
					<?php }?>
					<?php if($Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType=='Load'){ ?>
						<div class="TotalSoftcenter" id="TotalSoft_VG_TV_PageDiv_<?php echo $Total_Soft_Gallery_Video;?>">
							<span class="TotalSoftGV_TV_LM TotalSoftGV_TV_LM<?php echo $Total_Soft_Gallery_Video;?>" onclick="Total_Soft_GV_TV_PageLM('<?php echo $Total_Soft_Gallery_Video;?>', '<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>', '<?php echo ceil(count($Total_Soft_GalleryV_Videos)/$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage);?>')"><?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_LoadMore;?></span>
							<input type="text" style="display:none;" id="TotalSoft_VG_TV_Page_<?php echo $Total_Soft_Gallery_Video;?>" value="1">
						</div>
					<?php } ?>
				</div>
				<input type='text' style='display:none;' class='Totalsoft_Thumb_W' value='<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_11;?>'>
				<input type='text' style='display:none;' class='Totalsoft_Thumb_H' value='<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>'>
				<input type='text' style='display:none;' class='Totalsoft_Thumb_PBImgs' value='<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11;?>'>
				<input type='text' style='display:none;' class='Totalsoft_Thumb_FS' value='<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_12;?>'>
				<input type='text' style='display:none;' class='TS_VG_TG_AE_<?php echo $Total_Soft_Gallery_Video;?>' value='<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_15;?>'>
				<script>
					jQuery(document).ready(function(){
						var array_images<?php echo $Total_Soft_Gallery_Video;?>=[];
						jQuery('.boxer_<?php echo $Total_Soft_Gallery_Video;?>').each(function(){
							if( jQuery(this).find('img').attr("src") != "" ) { array_images<?php echo $Total_Soft_Gallery_Video;?>.push(jQuery(this).find('img').attr("src")); }
						})
						var y_images<?php echo $Total_Soft_Gallery_Video;?>=0;
						jQuery('.boxer_<?php echo $Total_Soft_Gallery_Video;?>').each(function(i){
							jQuery(this).find('img').attr('src', array_images<?php echo $Total_Soft_Gallery_Video;?>[i]).on("load",function(){
								y_images<?php echo $Total_Soft_Gallery_Video;?>++;
								if(y_images<?php echo $Total_Soft_Gallery_Video;?> == array_images<?php echo $Total_Soft_Gallery_Video;?>.length)
								{
									jQuery('.TS_GV_TVG_Loading_<?php echo $Total_Soft_Gallery_Video;?>').css('display','none');
								}
							})
						})
						var parent_width = jQuery('.boxer_<?php echo $Total_Soft_Gallery_Video;?>').parent('div').width();
						var Totalsoft_Thumb_W=parseInt(jQuery('.Totalsoft_Thumb_W').val());
						var Totalsoft_Thumb_H=parseInt(jQuery('.Totalsoft_Thumb_H').val());
						var Totalsoft_Thumb_PBImgs=parseInt(jQuery('.Totalsoft_Thumb_PBImgs').val());
						var Totalsoft_Thumb_FS=parseInt(jQuery('.Totalsoft_Thumb_FS').val());
						function checkPosition(){
							/*----poxel---*/
							var total_soft_gallery_video = jQuery('.boxer_<?php echo $Total_Soft_Gallery_Video;?>').parent().parent();
							var parent_width = jQuery('.boxer_<?php echo $Total_Soft_Gallery_Video;?>').parent().parent().width();
							jQuery(total_soft_gallery_video).each(function(index, elem){
								if(jQuery(elem).width()<Totalsoft_Thumb_W){
									jQuery(elem).find('.img-style').css('width',parent_width-5+'px');
									jQuery(elem).find('.img-style').css('height',Totalsoft_Thumb_H-20+'px');
									jQuery('.totalsoft_gv_tv_row').width('width',parent_width-5+'px');
									jQuery(total_soft_gallery_video).css({'padding-right':'0','padding-left':'0'});
								}
								else if(jQuery(elem).width()>Totalsoft_Thumb_W){
									jQuery(elem).find('.img-style').css('width',Totalsoft_Thumb_W);
									jQuery(elem).find('.img-style').css('height',Totalsoft_Thumb_H);
									jQuery('.totalsoft_gv_tv_row').width('width',parent_width);
								}
							});
						}
						jQuery(window).on('load', function(){checkPosition();});
						jQuery(window).resize(function(){ checkPosition(); });
						var delaytime = 0;
						var TS_VG_TG_AE = jQuery('.TS_VG_TG_AE_<?php echo $Total_Soft_Gallery_Video; ?>').val();
						jQuery('.effect-container<?php echo $Total_Soft_Gallery_Video;?> .boxer').each(function(){
							if(!jQuery(this).hasClass('noshow1'))
							{
								delaytime++;
								if(TS_VG_TG_AE == '')
								{
									jQuery(this).css({'display':'inline-block','opacity':'1'});
								}
								else if(TS_VG_TG_AE == 'fadeIn')
								{
									jQuery(this).css({'display':'inline-block','animation':'fadeIn 0.65s ease '+0.2*delaytime+'s forwards','-webkit-animation':'fadeIn 0.65s ease '+0.2*delaytime+'s forwards','-moz-animation':'fadeIn 0.65s ease '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_TG_AE == 'moveUp')
								{
									jQuery(this).css({'display':'inline-block','animation':'moveUp 0.65s ease '+0.2*delaytime+'s forwards','-webkit-animation':'moveUp 0.65s ease '+0.2*delaytime+'s forwards','-moz-animation':'moveUp 0.65s ease '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_TG_AE == 'scaleUp')
								{
									jQuery(this).css({'display':'inline-block','animation':'scaleUp 0.65s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'scaleUp 0.65s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'scaleUp 0.65s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_TG_AE == 'fallPerspective')
								{
									jQuery(this).css({'display':'inline-block','animation':'fallPerspective 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'fallPerspective 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'fallPerspective 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_TG_AE == 'fly')
								{
									jQuery(this).css({'display':'inline-block','animation':'fly 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'fly 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'fly 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_TG_AE == 'flip')
								{
									jQuery(this).css({'display':'inline-block','animation':'flip 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'flip 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'flip 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_TG_AE == 'helix')
								{
									jQuery(this).css({'display':'inline-block','animation':'helix 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'helix 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'helix 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_TG_AE == 'popUp')
								{
									jQuery(this).css({'display':'inline-block','animation':'popUp 0.8s ease-in '+0.2*delaytime+'s forwards','-webkit-animation':'popUp 0.8s ease-in '+0.2*delaytime+'s forwards','-moz-animation':'popUp 0.8s ease-in '+0.2*delaytime+'s forwards'});
								}
							}
						})
					})

				</script>
			<?php } 
			 else if($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Content Popup'){ ?>
				<?php $TotSoft=Array('', 'first', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eighth', 'ninth', 'tenth'); ?>
				<link rel="stylesheet" type="text/css" href="<?php echo plugins_url('../CSS/style_common.css',__FILE__);?>"/>
				<link rel="stylesheet" type="text/css" href="<?php echo plugins_url('../CSS/style9.css',__FILE__);?>"/>
				<style type="text/css">
					<style type="text/css">
					ul.pagination<?php echo $Total_Soft_Gallery_Video;?> li { border:none !important; list-style:none !important; padding-left:0px !important; }
					ul.pagination<?php echo $Total_Soft_Gallery_Video;?> li span
					{
						background-color:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_31;?>;
						color:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_32;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_33;?>px;
						font-family:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_34;?>;
						height:auto !important;
						<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_39!='none'){ ?> 
							border: 1px solid <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_01;?>;
						<?php } else { ?>
							border: none !important;
						<?php }?>
						display:block !important;
					}
					ul.pagination<?php echo $Total_Soft_Gallery_Video;?> li span:hover:not(.active)
					{
						background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_37;?>;
						color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_38;?>;
						<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_39!='none'){ ?> 
							border: 1px solid <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_01;?>;
						<?php } else { ?>
							border: none !important;
						<?php }?>
					}
					ul.pagination<?php echo $Total_Soft_Gallery_Video;?> li span.active
					{
						background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_35;?>;
						color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_36;?>;
						<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_39!='none'){ ?> 
							border: 1px solid <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_01;?>;
						<?php } else { ?>
							border: none !important;
						<?php }?>
					}
					.TotalSoftGV_CP_LM<?php echo $Total_Soft_Gallery_Video;?>
					{
						background-color:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_31;?>;
						color:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_32;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_33;?>px;
						font-family:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_34;?>;
						<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_39!='none'){ ?> 
							border: 1px solid <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_01;?>;
						<?php } else { ?>
							border: none !important;
						<?php }?>
						cursor:pointer;
						display: block;
						padding: 3px !important;
						line-height: 1 !important;
					}
					.TotalSoftGV_CP_LM<?php echo $Total_Soft_Gallery_Video;?>:hover
					{
						background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_37;?>;
						color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_38;?>;
					}
					.totalsoftview<?php echo $Total_Soft_Gallery_Video;?> a.info
					{
						background: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23;?>;
						color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24;?>;
						font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_25;?>px;
						font-family: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_26;?>;
						border: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_20;?>px solid <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_21;?>;
						border-radius: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22;?>px;
					}
					.totalsoftview<?php echo $Total_Soft_Gallery_Video;?> a.info:hover
					{
						background: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_27;?>;
						color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_28;?>;
					}
					.totalsoftview<?php echo $Total_Soft_Gallery_Video;?>
					{
						width: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01;?>px;
						height: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02;?>px;
						margin: <?php echo intval($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_05/2);?>px !important;
						border: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_03;?>px solid <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_04;?>;
						<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06=='true'){ ?> 
							-webkit-box-shadow: 0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_07;?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_08;?>;
							-moz-box-shadow: 0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_07;?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_08;?>;
							box-shadow: 0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_07;?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_08;?>;
						<?php }?>
						cursor:pointer;
						perspective:800px;
						overflow:hidden;
						opacity: 0;
						<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_33 == 'moveUp'){ ?>
							-webkit-transform: translateY(200px);
							-moz-transform: translateY(200px);
							transform: translateY(200px);
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_33 == 'scaleUp'){ ?>
							-webkit-transform: scale(0.6);
							-moz-transform: scale(0.6);
							transform: scale(0.6);
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_33 == 'fallPerspective'){ ?>
							-webkit-transform-style: preserve-3d;
							-moz-transform-style: preserve-3d;
							transform-style: preserve-3d;
							-webkit-transform: translateZ(400px) translateY(300px) rotateX(-90deg);
							-moz-transform: translateZ(400px) translateY(300px) rotateX(-90deg);
							transform: translateZ(400px) translateY(300px) rotateX(-90deg);
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_33 == 'fly'){ ?>
							-webkit-transform-style: preserve-3d;
							-moz-transform-style: preserve-3d;
							transform-style: preserve-3d;
							-webkit-transform-origin: 50% 50% -300px;
							-moz-transform-origin: 50% 50% -300px;
							transform-origin: 50% 50% -300px;
							-webkit-transform: rotateX(-180deg);
							-moz-transform: rotateX(-180deg);
							transform: rotateX(-180deg);
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_33 == 'flip'){ ?>
							-webkit-transform-style: preserve-3d;
							-moz-transform-style: preserve-3d;
							transform-style: preserve-3d;
							-webkit-transform-origin: 0% 0%;
							-moz-transform-origin: 0% 0%;
							transform-origin: 0% 0%;
							-webkit-transform: rotateX(-80deg);
							-moz-transform: rotateX(-80deg);
							transform: rotateX(-80deg);
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_33 == 'helix'){ ?>
							-webkit-transform-style: preserve-3d;
							-moz-transform-style: preserve-3d;
							transform-style: preserve-3d;
							-webkit-transform: rotateY(-180deg);
							-moz-transform: rotateY(-180deg);
							transform: rotateY(-180deg);
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_33 == 'popUp'){ ?>
							-webkit-transform-style: preserve-3d;
							-moz-transform-style: preserve-3d;
							transform-style: preserve-3d;
							-webkit-transform: scale(0.4);
							-moz-transform: scale(0.4);
							transform: scale(0.4);
						<?php }?>
					}
					<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09!='9'){ ?>
						.totalsoftview<?php echo $Total_Soft_Gallery_Video;?> .mask,.totalsoftview<?php echo $Total_Soft_Gallery_Video;?> .content<?php echo $Total_Soft_Gallery_Video;?>
						{
							width: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01;?>px;
							height: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02;?>px;
						}
					<?php }?>
					.totalsoftview<?php echo $Total_Soft_Gallery_Video;?> h2
					{
						color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?> !important;
						text-align: center;
						font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_13;?>px;
						font-family: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_14;?>;
						text-transform: none !important;
						letter-spacing: 0 !important;
						font-weight:normal !important;
						transform: translate3d(0, 0, 0);
						-moz-transform: translate3d(0, 0, 0);
						-webkit-transform: translate3d(0, 0, 0);
						perspective: 800px;
					}
					.totalsoftview<?php echo $Total_Soft_Gallery_Video;?> p { line-height: 1 !important; }
					.totalsoftview-second h2, .totalsoftview-fourth h2, .totalsoftview-sixth h2, .totalsoftview-tenth h2, .totalsoftview-ninth h2
					{
						border-bottom: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_17;?>px solid <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_18;?>;
					}
					.totalsoftview-first h2, .totalsoftview-third h2, .totalsoftview-fifth h2, .totalsoftview-seventh h2, .totalsoftview-eighth h2, .totalsoftview-ninth .content<?php echo $Total_Soft_Gallery_Video;?>
					{
						background: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15;?>;
					}
					.totalsoftview-first .mask, .totalsoftview-second .mask, .totalsoftview-third .mask, .totalsoftview-fourth .mask, .totalsoftview-fifth .mask, .totalsoftview-sixth .mask, .totalsoftview-seventh .mask, .totalsoftview-eighth .mask, .totalsoftview-tenth .mask, .totalsoftview-ninth .mask-1<?php echo $Total_Soft_Gallery_Video;?>, .totalsoftview-ninth .mask-2<?php echo $Total_Soft_Gallery_Video;?>
					{
						background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>;
					}
					.totalsoftview-fifth .mask
					{
						-webkit-transform: translateX(-<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01;?>px);
						-moz-transform: translateX(-<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01;?>px);
						-o-transform: translateX(-<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01;?>px);
						-ms-transform: translateX(-<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01;?>px);
						transform: translateX(-<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01;?>px);
					}
					@media screen and (min-width: 820px) {.TotalSoft_GV_CP_Iframe { padding-top: 5.25%; margin-left: 3px}}
					.totalsoftview-fifth:hover img
					{
						-webkit-transform: translateX(<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01;?>px);
						-moz-transform: translateX(<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01;?>px);
						-o-transform: translateX(<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01;?>px);
						-ms-transform: translateX(<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01;?>px);
						transform: translateX(<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01;?>px);
					}
					.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2
					{
						font-size: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_06;?>px;
						line-height: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_06;?>px;
						font-family: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_07;?> !important;
						color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_08;?> !important;
						background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_09;?> !important;
						text-align: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_10;?> !important;
						letter-spacing: 0 !important;
						text-transform: none !important;
					}
					.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p
					{
						text-align: justify;
						padding-top:0px;
						padding-bottom:0px;
						margin-bottom:0px !important;
						line-height: 1 !important;
					}
					.fResp<?php echo $Total_Soft_Gallery_Video;?> h3 a
					{
						background: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_16;?> !important;
						color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_17;?> !important;
						font-size: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18;?>px;
						font-family: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_19;?> !important;
						border: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_12;?>px <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_13;?> <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14;?> !important;
						border-radius: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_15;?>px !important;
						letter-spacing: 0 !important;
						text-transform: none !important;
					}
					.fResp<?php echo $Total_Soft_Gallery_Video;?> h3 a:hover
					{
						background: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_20;?> !important;
						color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21;?> !important;
					}
					.TotalSoft_GV_CP_Pop_Icons<?php echo $Total_Soft_Gallery_Video;?>
					{
						background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_22;?>;
					}
					.TotalSoft_GV_CP_Pop_Icons_1<?php echo $Total_Soft_Gallery_Video;?> i.totalsoft
					{
						font-size: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_27;?>px;
						color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_28;?>;
					}
					.TotalSoft_GV_CP_Pop_Icons_2<?php echo $Total_Soft_Gallery_Video;?> i.totalsoft
					{
						font-size: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_23;?>px;
						color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_24;?>;
					}
					.popDescr<?php echo $Total_Soft_Gallery_Video;?>::-webkit-scrollbar { width: 0.5em; }
					.popDescr<?php echo $Total_Soft_Gallery_Video;?>::-webkit-scrollbar-track
					{
						-webkit-box-shadow: inset 0 0 6px <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_08;?>;
					}
					.popDescr<?php echo $Total_Soft_Gallery_Video;?>::-webkit-scrollbar-thumb
					{
						background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_09;?>;
						outline: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_09;?>;
					}
					.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>{
						overflow: hidden;
						box-sizing: border-box;
					}
					.totalsoftview .mask  li,.mask p{
						display: none;
					}
					.totalsoftview .mask li:first-child ,.mask p:first-child {
						width : 90%;
						overflow: hidden;
						display: -webkit-box;
						-webkit-line-clamp: 4;
						-webkit-box-orient: vertical;
					}
					@media only screen and (max-width: 820px) { .totalsoftview<?php echo $Total_Soft_Gallery_Video;?> { margin: 10px 0px !important; } }
					.TotalSoft_GV_CP_Main<?php echo $Total_Soft_Gallery_Video;?>
					{
						<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_33 == 'fallPerspective'){ ?>
							-webkit-perspective: 1300px;
							-moz-perspective: 1300px;
							perspective: 1300px;
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_33 == 'fly'){ ?>
							-webkit-perspective: 1300px;
							-moz-perspective: 1300px;
							perspective: 1300px;
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_33 == 'flip'){ ?>
							-webkit-perspective: 1300px;
							-moz-perspective: 1300px;
							perspective: 1300px;
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_33 == 'helix'){ ?>
							-webkit-perspective: 1300px;
							-moz-perspective: 1300px;
							perspective: 1300px;
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_33 == 'popUp'){ ?>
							-webkit-perspective: 1300px;
							-moz-perspective: 1300px;
							perspective: 1300px;
						<?php }?>
					}
					@media screen and (max-width:750px)
					{
						.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>{top: 60%!important;} 
						.TotalSoft_GV_CP_TD p{height: 75px;overflow: scroll;} 
					}
					@media screen and (max-width:480px)
					{
						.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>{top: 48%!important;}
						.TotalSoft_GV_CP_TD p{height: 75px;overflow: scroll;} 
					}
					.popDescr{overflow-y: unset!important}
					<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34 == ''){ ?>
						.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>
						{
							background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_02;?>;
							border: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03;?>px <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_04;?> <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_05;?>;
							max-width:98%;
							transform:translateY(-50%) translateX(-50%);
							-webkit-transform:translateY(-50%) translateX(-50%);
							-ms-transform:translateY(-50%) translateX(-50%);
						}
						.TotalSoft_GV_CP_Pop_Icons { width: 100%; height:0; position: relative; }
						.TotalSoft_GV_CP_Iframe { width: 60%; height: 60%; position: absolute; left: 0; margin-top: 10px; -webkit-transform: translateX(-1200px); -moz-transform: translateX(-1200px); -o-transform: translateX(-1200px); -ms-transform: translateX(-1200px); transform: translateX(-1200px); -webkit-transition: all 0.5s ease-in-out 0.5s; -moz-transition: all 0.5s ease-in-out 0.5s; -o-transition: all 0.5s ease-in-out 0.5s; -ms-transition: all 0.5s ease-in-out 0.5s; transition: all 0.5s ease-in-out 0.5s; -webkit-transition-delay: 0s; -moz-transition-delay: 0s; -o-transition-delay: 0s; -ms-transition-delay: 0s; transition-delay: 0s; overflow: hidden; }
						.TotalSoft_GV_CP_TD { width: 100%; height: calc(100% - 50px); position: relative; right: 0; -webkit-transform: translateX(1200px); -moz-transform: translateX(1200px); -o-transform: translateX(1200px); -ms-transform: translateX(1200px); transform: translateX(1200px); -webkit-transition: all 0.5s ease-in-out 0.5s; -moz-transition: all 0.5s ease-in-out 0.5s; -o-transition: all 0.5s ease-in-out 0.5s; -ms-transition: all 0.5s ease-in-out 0.5s; transition: all 0.5s ease-in-out 0.5s; -webkit-transition-delay: 0s; -moz-transition-delay: 0s; -o-transition-delay: 0s; -ms-transition-delay: 0s; transition-delay: 0s; }
						.TotalSoft_GV_CP_TD h2 { margin: 10px !important; -webkit-transform: translateX(1200px); -moz-transform: translateX(1200px); -o-transform: translateX(1200px); -ms-transform: translateX(1200px); transform: translateX(1200px); -webkit-transition: all 0.5s ease-in-out 0s; -moz-transition: all 0.5s ease-in-out 0s; -o-transition: all 0.5s ease-in-out 0s; -ms-transition: all 0.5s ease-in-out 0s; transition: all 0.5s ease-in-out 0s; }
						.TotalSoft_GV_CP_TD p { padding: 10px; margin: 10px !important; -webkit-transform: translateX(1200px); -moz-transform: translateX(1200px); -o-transform: translateX(1200px); -ms-transform: translateX(1200px); transform: translateX(1200px); -webkit-transition: all 0.5s ease-in-out 0s; -moz-transition: all 0.5s ease-in-out 0s; -o-transition: all 0.5s ease-in-out 0s; -ms-transition: all 0.5s ease-in-out 0s; transition: all 0.5s ease-in-out 0s; max-height: 80%; }
						.popDescr { height:80%; overflow-y: auto; overflow-x: hidden; }
						.TotalSoft_GV_CP_Iframe iframe { width: 100%; height: 100%; position: absolute; top: 0; left: 0; transform: translate3d(0, 0, 0); -moz-transform: translate3d(0, 0, 0); -webkit-transform: translate3d(0, 0, 0); perspective: 800px; }
						.TotalSoft_GV_CP_TD h3 { margin: 10px; margin-top:0px !important; padding-right: 10px; text-align: right; -webkit-transform: translateX(1200px); -moz-transform: translateX(1200px); -o-transform: translateX(1200px); -ms-transform: translateX(1200px); transform: translateX(1200px); -webkit-transition: all 0.5s ease-in-out 0s; -moz-transition: all 0.5s ease-in-out 0s; -o-transition: all 0.5s ease-in-out 0s; -ms-transition: all 0.5s ease-in-out 0s; transition: all 0.5s ease-in-out 0s; }
						.TotalSoft_GV_CP_Pop_Icons_1 i.totalsoft, .TotalSoft_GV_CP_Pop_Icons_2 i.totalsoft { -webkit-transform: translate(0, -1200px); -moz-transform: translate(0, -1200px); -o-transform: translate(0, -1200px); -ms-transform: translate(0, -1200px); transform: translate(0, -1200px); -webkit-transition: all 0.5s ease-in-out 0s; -moz-transition: all 0.5s ease-in-out 0s; -o-transition: all 0.5s ease-in-out 0s; -ms-transition: all 0.5s ease-in-out 0s; transition: all 0.5s ease-in-out 0s; cursor: pointer; }

					<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34 == 'mode01'){ ?>
						.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>
						{
							background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_02;?>;
							border: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03;?>px <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_04;?> <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_05;?>;
							max-width:98%;
							transform:translateY(-50%) translateX(-50%);
							-webkit-transform:translateY(-50%) translateX(-50%);
							-ms-transform:translateY(-50%) translateX(-50%);
						}
						.TotalSoft_GV_CP_Pop_Icons { width: 100%; height: 40px; position: relative; }
						.TotalSoft_GV_CP_Iframe { width: 60%; height: 60%; position: absolute; left: 0; margin-top: 10px; overflow: hidden; }
						.TotalSoft_GV_CP_TD { width: 100%; height: calc(100% - 50px); position: relative; right: 0; }
						.TotalSoft_GV_CP_TD h2 { margin: 10px !important; }
						.TotalSoft_GV_CP_TD p { padding: 10px; margin: 10px !important; max-height: 80%; }
						.popDescr { height:80%; overflow-y: auto; overflow-x: hidden; }
						.TotalSoft_GV_CP_Iframe iframe { width: 100%; height: 100%; position: absolute; top: 0; left: 0; transform: translate3d(0, 0, 0); -moz-transform: translate3d(0, 0, 0); -webkit-transform: translate3d(0, 0, 0); perspective: 800px; }
						.TotalSoft_GV_CP_TD h3 { margin: 10px; margin-top:0px !important; padding-right: 10px; text-align: right; }
						.TotalSoft_GV_CP_Pop_Icons_1 i.totalsoft, .TotalSoft_GV_CP_Pop_Icons_2 i.totalsoft { cursor: pointer; }
						.TotalSoft_GV_CP_Pop_Icons_1<?php echo $Total_Soft_Gallery_Video;?> i.totalsoft:nth-child(1)
						{
							transform: translate(50%, -50%);
							-ms-transform: translate(50%, -50%);
							-o-transform: translate(50%, -50%);
							-moz-transform: translate(50%, -50%);
							-webkit-transform: translate(50%, -50%)
						}
						.TotalSoft_GV_CP_Pop_Icons_1<?php echo $Total_Soft_Gallery_Video;?> i.totalsoft:nth-child(2)
						{
							transform: translate(-50%, -50%);
							-ms-transform: translate(-50%, -50%);
							-o-transform: translate(-50%, -50%);
							-moz-transform: translate(-50%, -50%);
							-webkit-transform: translate(-50%, -50%)
						}
						.TotalSoft_GV_CP_Pop_Icons_2<?php echo $Total_Soft_Gallery_Video;?> i.totalsoft
						{
							transform: translate(-50%, -50%);
							-ms-transform: translate(-50%, -50%);
							-o-transform: translate(-50%, -50%);
							-moz-transform: translate(-50%, -50%);
							-webkit-transform: translate(-50%, -50%)
						}
					<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34 == 'mode02'){ ?>
						.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>
						{
							background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_02;?>;
							border: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03;?>px <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_04;?> <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_05;?>;
							max-width:98%;
							transform:translateY(calc(-50% + 200px)) translateX(-50%);
							-webkit-transform:translateY(calc(-50% + 200px)) translateX(-50%);
							-ms-transform:translateY(calc(-50% + 200px)) translateX(-50%);
						}
						.TotalSoft_GV_CP_Pop_Icons { width: 100%; height: 40px; position: relative; }
						.TotalSoft_GV_CP_Iframe { width: 60%; height: 60%; position: absolute; left: 0; margin-top: 10px; overflow: hidden; }
						.TotalSoft_GV_CP_TD { width: 100%; height: calc(100% - 50px); position: relative; right: 0; }
						.TotalSoft_GV_CP_TD h2 { margin: 10px !important; }
						.TotalSoft_GV_CP_TD p { padding: 10px; margin: 10px !important; max-height: 80%; }
						.popDescr { height:80%; overflow-y: auto; overflow-x: hidden; }
						.TotalSoft_GV_CP_Iframe iframe { width: 100%; height: 100%; position: absolute; top: 0; left: 0; transform: translate3d(0, 0, 0); -moz-transform: translate3d(0, 0, 0); -webkit-transform: translate3d(0, 0, 0); perspective: 800px; }
						.TotalSoft_GV_CP_TD h3 { margin: 10px; margin-top:0px !important; padding-right: 10px; text-align: right; }
						.TotalSoft_GV_CP_Pop_Icons_1 i.totalsoft, .TotalSoft_GV_CP_Pop_Icons_2 i.totalsoft { cursor: pointer; }
						.TotalSoft_GV_CP_Pop_Icons_1<?php echo $Total_Soft_Gallery_Video;?> i.totalsoft:nth-child(1)
						{
							transform: translate(50%, -50%);
							-ms-transform: translate(50%, -50%);
							-o-transform: translate(50%, -50%);
							-moz-transform: translate(50%, -50%);
							-webkit-transform: translate(50%, -50%)
						}
						.TotalSoft_GV_CP_Pop_Icons_1<?php echo $Total_Soft_Gallery_Video;?> i.totalsoft:nth-child(2)
						{
							transform: translate(-50%, -50%);
							-ms-transform: translate(-50%, -50%);
							-o-transform: translate(-50%, -50%);
							-moz-transform: translate(-50%, -50%);
							-webkit-transform: translate(-50%, -50%)
						}
						.TotalSoft_GV_CP_Pop_Icons_2<?php echo $Total_Soft_Gallery_Video;?> i.totalsoft
						{
							transform: translate(-50%, -50%);
							-ms-transform: translate(-50%, -50%);
							-o-transform: translate(-50%, -50%);
							-moz-transform: translate(-50%, -50%);
							-webkit-transform: translate(-50%, -50%)
						}
					<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34 == 'mode03'){ ?>
						.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>
						{
							background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_02;?>;
							border: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03;?>px <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_04;?> <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_05;?>;
							max-width:98%;
							-webkit-transform: translateY(-50%) translateX(-50%) scale(0.9);
							-moz-transform: translateY(-50%) translateX(-50%) scale(0.9);
							transform: translateY(-50%) translateX(-50%) scale(0.9);
						}
						.TotalSoft_GV_CP_Pop_Icons { width: 100%; height: 40px; position: relative; }
						.TotalSoft_GV_CP_Iframe { width: 60%; height: 60%; position: absolute; left: 0; margin-top: 10px; overflow: hidden; }
						.TotalSoft_GV_CP_TD { width: 100%; height: calc(100% - 50px); position: relative; right: 0; }
						.TotalSoft_GV_CP_TD h2 { margin: 10px !important; }
						.TotalSoft_GV_CP_TD p { padding: 10px; margin: 10px !important; max-height: 80%; }
						.popDescr { height:80%; overflow-y: auto; overflow-x: hidden; }
						.TotalSoft_GV_CP_Iframe iframe { width: 100%; height: 100%; position: absolute; top: 0; left: 0; transform: translate3d(0, 0, 0); -moz-transform: translate3d(0, 0, 0); -webkit-transform: translate3d(0, 0, 0); perspective: 800px; }
						.TotalSoft_GV_CP_TD h3 { margin: 10px; margin-top:0px !important; padding-right: 10px; text-align: right; }
						.TotalSoft_GV_CP_Pop_Icons_1 i.totalsoft, .TotalSoft_GV_CP_Pop_Icons_2 i.totalsoft { cursor: pointer; }
						.TotalSoft_GV_CP_Pop_Icons_1<?php echo $Total_Soft_Gallery_Video;?> i.totalsoft:nth-child(1)
						{
							transform: translate(50%, -50%);
							-ms-transform: translate(50%, -50%);
							-o-transform: translate(50%, -50%);
							-moz-transform: translate(50%, -50%);
							-webkit-transform: translate(50%, -50%)
						}
						.TotalSoft_GV_CP_Pop_Icons_1<?php echo $Total_Soft_Gallery_Video;?> i.totalsoft:nth-child(2)
						{
							transform: translate(-50%, -50%);
							-ms-transform: translate(-50%, -50%);
							-o-transform: translate(-50%, -50%);
							-moz-transform: translate(-50%, -50%);
							-webkit-transform: translate(-50%, -50%)
						}
						.TotalSoft_GV_CP_Pop_Icons_2<?php echo $Total_Soft_Gallery_Video;?> i.totalsoft
						{
							transform: translate(-50%, -50%);
							-ms-transform: translate(-50%, -50%);
							-o-transform: translate(-50%, -50%);
							-moz-transform: translate(-50%, -50%);
							-webkit-transform: translate(-50%, -50%)
						}
					<?php } else { ?>
						.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>
						{
							background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_02;?>;
							border: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03;?>px <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_04;?> <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_05;?>;
							max-width:98%;
							-webkit-transform: translateY(-50%) translateX(-50%) scale(0.9);
							-moz-transform: translateY(-50%) translateX(-50%) scale(0.9);
							transform: translateY(-50%) translateX(-50%) scale(0.9);
							/*-webkit-perspective: 1300px;
							-moz-perspective: 1300px;
							perspective: 1300px;*/
						}
						.TotalSoft_GV_CP_Pop_Icons { width: 100%; height: 40px; position: relative; }
						.TotalSoft_GV_CP_Iframe { width: 60%; height: 60%; position: absolute; left: 0; margin-top: 10px; overflow: hidden; }
						.TotalSoft_GV_CP_TD { width: 100%; height: calc(100% - 50px); position: relative; right: 0; }
						.TotalSoft_GV_CP_TD h2 { margin: 10px !important; }
						.TotalSoft_GV_CP_TD p { padding: 10px; margin: 10px !important; max-height: 80%; }
						.popDescr { height:80%; overflow-y: auto; overflow-x: hidden; }
						.TotalSoft_GV_CP_Iframe iframe { width: 100%; height: 100%; position: absolute; top: 0; left: 0; transform: translate3d(0, 0, 0); -moz-transform: translate3d(0, 0, 0); -webkit-transform: translate3d(0, 0, 0); perspective: 800px; }
						.TotalSoft_GV_CP_Iframe img { width: auto; height: 100%; max-width: 100%; position: absolute; top: 0; left: 50%; transform: translate3d(-50%, 0, 0); -moz-transform: translate3d(-50%, 0, 0); -webkit-transform: translate3d(-50%, 0, 0); perspective: 800px; margin: 0 auto !important; }
						.TotalSoft_GV_CP_TD h3 { margin: 10px; margin-top:0px !important; padding-right: 10px; text-align: right; }
						.TotalSoft_GV_CP_Pop_Icons_1 i.totalsoft, .TotalSoft_GV_CP_Pop_Icons_2 i.totalsoft { cursor: pointer; }
						.TotalSoft_GV_CP_Pop_Icons_1<?php echo $Total_Soft_Gallery_Video;?> i.totalsoft:nth-child(1)
						{
							transform: translate(50%, -50%);
							-ms-transform: translate(50%, -50%);
							-o-transform: translate(50%, -50%);
							-moz-transform: translate(50%, -50%);
							-webkit-transform: translate(50%, -50%)
						}
						.TotalSoft_GV_CP_Pop_Icons_1<?php echo $Total_Soft_Gallery_Video;?> i.totalsoft:nth-child(2)
						{
							transform: translate(-50%, -50%);
							-ms-transform: translate(-50%, -50%);
							-o-transform: translate(-50%, -50%);
							-moz-transform: translate(-50%, -50%);
							-webkit-transform: translate(-50%, -50%)
						}
						.TotalSoft_GV_CP_Pop_Icons_2<?php echo $Total_Soft_Gallery_Video;?> i.totalsoft
						{
							transform: translate(-50%, -50%);
							-ms-transform: translate(-50%, -50%);
							-o-transform: translate(-50%, -50%);
							-moz-transform: translate(-50%, -50%);
							-webkit-transform: translate(-50%, -50%)
						}
					<?php }?>
					.TotalSoft_GV_CP_Pop_load_<?php echo $Total_Soft_Gallery_Video;?>
					{
						position: absolute;
						top: 0;
						left: 0;
						width: 100%;
						height: 100%;
						z-index: 1;
						background: rgba(0, 0, 0, 0.1);
						display: none;
					}
					.TotalSoft_GV_CP_Pop_load_<?php echo $Total_Soft_Gallery_Video;?> img
					{
						position: absolute;
						top: 50%;
						left: 50%;
						transform: translate(-50%, -50%);
						-moz-transform: translate(-50%, -50%);
						-webkit-transform: translate(-50%, -50%);
						z-index: 2;
					}
					.TS_GV_CP_Loading_<?php echo $Total_Soft_Gallery_Video;?>
					{
						position: absolute;
						left: 0;
						top: 0;
						width: 100%;
						height: 100%;
						background: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_36;?>;
						z-index: 10;
						padding: 0;
						overflow: hidden !important;
						text-align: center;
					}
					.TS_GV_CP_Loading_<?php echo $Total_Soft_Gallery_Video;?> img
					{
						margin: 0 auto !important;
						position: relative;
						top: 50%;
						transform: translateY(-50%);
						-moz-transform: translateY(-50%);
						-webkit-transform: translateY(-50%);
					}
                    
				</style>

				<div class="main_parent<?php echo $Total_Soft_Gallery_Video;?>" style="position: relative; width: 100%; float: left;">
					<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_35 != ''){ ?>
						<div class="TS_GV_CP_Loading_<?php echo $Total_Soft_Gallery_Video;?>">
							<img src="<?php echo plugins_url('../Images/Loading/loading' . $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_35 . '.gif',__FILE__);?>">
						</div>
					<?php }?>
					<div class="main TotalSoft_GV_CP_Main TotalSoft_GV_CP_Main<?php echo $Total_Soft_Gallery_Video;?>">
						<?php for($i=0;$i<count($Total_Soft_GalleryV_Videos);$i++){ ?>
							<?php if($Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType=='All'){ ?>
								<div class="totalsoftview totalsoftview<?php echo $Total_Soft_Gallery_Video;?> totalsoftview-<?php echo $TotSoft[$TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09];?>" onclick="TotalSoft_GV_CP_Cont<?php echo $Total_Soft_Gallery_Video;?>('<?php echo $Total_Soft_GalleryV_Videos[$i]->id;?>', '<?php echo $Total_Soft_Gallery_Video;?>')">
									<img src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>"/>
									<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09=='2'){ ?>
										<div class="mask"></div>
										<div class="content content<?php echo $Total_Soft_Gallery_Video;?>">
											<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_11=='true'){ ?>
												<h2><?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?></h2>
											<?php }?>
											<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16=='true'){ ?>
												<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc);?>
											<?php }?>
											<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink!='' && $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_32=='true'){ ?>
												<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VONT=='true'){ ?>
													<a href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink?>" class="info" target="_blank">
														<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19;?>
													</a>
												<?php } else { ?> 
													<a href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink?>" class="info"><?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19;?></a>
												<?php }?>
											<?php }?>
										</div>
									<?php } else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09=='9'){ ?>
										<div class="mask mask-1 mask-1<?php echo $Total_Soft_Gallery_Video;?>"></div>
										<div class="mask mask-2 mask-2<?php echo $Total_Soft_Gallery_Video;?>"></div>
										<div class="content content<?php echo $Total_Soft_Gallery_Video;?>">
											<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_11=='true'){ ?>
												<h2><?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?></h2>
											<?php }?>
											<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16=='true'){ ?>
												<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc);?>
											<?php }?>
											<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink!='' && $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_32=='true'){ ?>
												<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VONT=='true'){ ?>
													<a href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink?>" class="info" target="_blank">
														<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19;?>
													</a>
												<?php } else { ?> 
													<a href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink?>" class="info"><?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19;?></a>
												<?php }?>
											<?php }?>
										</div>
									<?php } else{ ?>
										<div class="mask">
											<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_11=='true'){ ?>
												<h2><?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?></h2>
											<?php }?>
											<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16=='true'){ ?>
												<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc);?>
											<?php }?>
											<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink!='' && $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_32=='true'){ ?>
												<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VONT=='true'){ ?>
													<a href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink?>" class="info" target="_blank">
														<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19;?>
													</a>
												<?php } else { ?> 
													<a href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink?>" class="info"><?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19;?></a>
												<?php }?>
											<?php }?>
										</div>
									<?php }?>
								</div>
							<?php } else { ?>
								<?php if($i<$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage){ ?>
									<div class="totalsoftview totalsoftview<?php echo $Total_Soft_Gallery_Video;?> totalsoftview-<?php echo $TotSoft[$TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09];?>" id="TotalSoft_GV_CP_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i+1;?>" onclick="TotalSoft_GV_CP_Cont<?php echo $Total_Soft_Gallery_Video;?>('<?php echo $Total_Soft_GalleryV_Videos[$i]->id;?>', '<?php echo $Total_Soft_Gallery_Video;?>')">
										<img src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>"/>
										<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09=='2'){ ?>
											<div class="mask"></div>
											<div class="content content<?php echo $Total_Soft_Gallery_Video;?>">
												<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_11=='true'){ ?>
													<h2><?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?></h2>
												<?php }?>
												<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16=='true'){ ?>
													<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc);?>
												<?php }?>
												<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink!='' && $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_32=='true'){ ?>
													<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VONT=='true'){ ?>
														<a href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink?>" class="info" target="_blank">
															<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19;?>
														</a>
													<?php } else { ?>
														<a href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink?>" class="info"><?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19;?></a>
													<?php }?>
												<?php }?>
											</div>
										<?php } else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09=='9'){ ?>
											<div class="mask mask-1 mask-1<?php echo $Total_Soft_Gallery_Video;?>"></div>
											<div class="mask mask-2 mask-2<?php echo $Total_Soft_Gallery_Video;?>"></div>
											<div class="content content<?php echo $Total_Soft_Gallery_Video;?>">
												<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_11=='true'){ ?>
													<h2><?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?></h2>
												<?php }?>
												<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16=='true'){ ?>
													<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc);?>
												<?php }?>
												<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink!='' && $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_32=='true'){ ?>
													<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VONT=='true'){ ?>
														<a href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink?>" class="info" target="_blank">
															<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19;?>
														</a>
													<?php } else { ?> 
														<a href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink?>" class="info"><?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19;?></a>
													<?php }?>
												<?php }?>
											</div>
										<?php } else{ ?>
											<div class="mask">
												<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_11=='true'){ ?>
													<h2><?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?></h2>
												<?php }?>
												<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16=='true'){ ?>
													<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc);?>
												<?php }?>
												<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink!='' && $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_32=='true'){ ?>
													<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VONT=='true'){ ?>
														<a href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink?>" class="info" target="_blank">
															<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19;?>
														</a>
													<?php } else { ?> 
														<a href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink?>" class="info"><?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19;?></a>
													<?php }?>
												<?php }?>
											</div>
										<?php }?>
									</div>
								<?php } else { ?>
									<div class="totalsoftview totalsoftview<?php echo $Total_Soft_Gallery_Video;?> totalsoftview-<?php echo $TotSoft[$TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09];?> noshow1" id="TotalSoft_GV_CP_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i+1;?>" style="display:none;" onclick="TotalSoft_GV_CP_Cont<?php echo $Total_Soft_Gallery_Video;?>('<?php echo $Total_Soft_GalleryV_Videos[$i]->id;?>', '<?php echo $Total_Soft_Gallery_Video;?>')">
										<img src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>"/>
										<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09=='2'){ ?>
											<div class="mask"></div>
											<div class="content content<?php echo $Total_Soft_Gallery_Video;?>">
												<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_11=='true'){ ?>
													<h2><?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?></h2>
												<?php }?>
												<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16=='true'){ ?>
													<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc);?>
												<?php }?>
												<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink!='' && $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_32=='true'){ ?>
													<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VONT=='true'){ ?>
														<a href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink?>" class="info" target="_blank">
															<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19;?>
														</a>
													<?php } else { ?> 
														<a href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink?>" class="info"><?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19;?></a>
													<?php }?>
												<?php }?>
											</div>
										<?php } else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09=='9'){ ?>
											<div class="mask mask-1 mask-1<?php echo $Total_Soft_Gallery_Video;?>"></div>
											<div class="mask mask-2 mask-2<?php echo $Total_Soft_Gallery_Video;?>"></div>
											<div class="content content<?php echo $Total_Soft_Gallery_Video;?>">
												<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_11=='true'){ ?>
													<h2><?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?></h2>
												<?php }?>
												<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16=='true'){ ?>
													<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc);?>
												<?php }?>
												<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink!='' && $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_32=='true'){ ?>
													<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VONT=='true'){ ?>
														<a href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink?>" class="info" target="_blank">
															<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19;?>
														</a>
													<?php } else { ?> 
														<a href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink?>" class="info"><?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19;?></a>
													<?php }?>
												<?php }?>
											</div>
										<?php } else{ ?>
											<div class="mask">
												<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_11=='true'){ ?>
													<h2><?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?></h2>
												<?php }?>
												<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16=='true'){ ?>
													<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc);?>
												<?php }?>
												<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink!='' && $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_32=='true'){ ?>
													<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VONT=='true'){ ?>
														<a href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink?>" class="info" target="_blank">
															<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19;?>
														</a>
													<?php } else { ?> 
														<a href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink?>" class="info"><?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19;?></a>
													<?php }?>
												<?php }?>
											</div>
										<?php }?>
									</div>
								<?php }?>
							<?php }?>
						<?php }?>
					</div>
					<?php if($Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType=='Pagination'){ ?>
						<div class="TotalSoftcenter">
							<ul class="pagination pagination<?php echo $Total_Soft_Gallery_Video;?>">
								<li onclick="Total_Soft_GV_CP_PageP('<?php echo $Total_Soft_Gallery_Video;?>', '<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>')"><span><?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_30;?></span></li>
								<?php for($i=1;$i<=ceil(count($Total_Soft_GalleryV_Videos)/$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage);$i++){ ?> 
									<?php if($i==1){ ?>
										<li id="TotalSoft_GV_CP_PLi_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i;?>" onclick="Total_Soft_GV_CP_Page('<?php echo $Total_Soft_Gallery_Video;?>','<?php echo $i?>','<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>')"><span class="active"><?php echo $i;?></span></li>
									<?php } else { ?>
										<li id="TotalSoft_GV_CP_PLi_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i;?>" onclick="Total_Soft_GV_CP_Page('<?php echo $Total_Soft_Gallery_Video;?>','<?php echo $i?>','<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>')"><span><?php echo $i;?></span></li>
									<?php }?>
								<?php }?>
								<li onclick="Total_Soft_GV_CP_PageN('<?php echo $Total_Soft_Gallery_Video;?>', '<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>', '<?php echo ceil(count($Total_Soft_GalleryV_Videos)/$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage);?>')"><span><?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_29;?></span></li>
							</ul>
						</div>
					<?php }?>
					<?php if($Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType=='Load'){ ?>
						<div class="TotalSoftcenter" id="TotalSoft_VG_CP_PageDiv_<?php echo $Total_Soft_Gallery_Video;?>">
							<span class="TotalSoftGV_CP_LM TotalSoftGV_CP_LM<?php echo $Total_Soft_Gallery_Video;?>" onclick="Total_Soft_GV_CP_PageLM('<?php echo $Total_Soft_Gallery_Video;?>', '<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>', '<?php echo ceil(count($Total_Soft_GalleryV_Videos)/$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage);?>')"><?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_LoadMore;?></span>
							<input type="text" style="display:none;" id="TotalSoft_VG_CP_Page_<?php echo $Total_Soft_Gallery_Video;?>" value="1">
						</div>
					<?php } ?>
				</div>
				<div class="TotalSoft_GV_CP_Content TotalSoft_GV_CP_Content<?php echo $Total_Soft_Gallery_Video;?>" onclick="TotalSoft_GV_CP_Close_Popup<?php echo $Total_Soft_Gallery_Video;?>()"></div>
				<div class="TotalSoft_GV_CP_Popup TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>">
					<div class="TotalSoft_GV_CP_Pop_load_<?php echo $Total_Soft_Gallery_Video;?>">
						<img src="<?php echo plugins_url('../Images/loading.gif',__FILE__);?>">
					</div>
					<div class="TotalSoft_GV_CP_Pop_Icons TotalSoft_GV_CP_Pop_Icons<?php echo $Total_Soft_Gallery_Video;?>">
						<input type="text" style="display:none;" id="TotalSoft_GV_CP_VID_<?php echo $Total_Soft_Gallery_Video;?>">
						<input type="text" style="display:none;" id="TotalSoft_GV_CP_PoM_<?php echo $Total_Soft_Gallery_Video;?>" value="<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34;?>">
						<div class="TotalSoft_GV_CP_Pop_Icons_1 TotalSoft_GV_CP_Pop_Icons_1<?php echo $Total_Soft_Gallery_Video;?>">
							<i class="totalsoftleft <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_30;?>" onclick="TotalSoft_GV_CP_Left<?php echo $Total_Soft_Gallery_Video;?>('<?php echo $Total_Soft_Gallery_Video;?>')"></i>
							<i class="totalsoftright <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_31;?>" onclick="TotalSoft_GV_CP_Right<?php echo $Total_Soft_Gallery_Video;?>('<?php echo $Total_Soft_Gallery_Video;?>')"></i>
						</div>
						<div class="TotalSoft_GV_CP_Pop_Icons_2 TotalSoft_GV_CP_Pop_Icons_2<?php echo $Total_Soft_Gallery_Video;?>">
							<i class="<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26;?>" onclick="TotalSoft_GV_CP_Close_Popup<?php echo $Total_Soft_Gallery_Video;?>()"></i>
						</div>
					</div>
					<div class="TotalSoft_GV_CP_Iframe TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>">
						<iframe src="" frameborder="0" allowfullscreen></iframe>
						<img src="">
					</div>
					<div class='fResp fResp<?php echo $Total_Soft_Gallery_Video;?>' style='width:40%;position:absolute;right:0'>
						<div class="TotalSoft_GV_CP_TD TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?>">
							<h2 class="TotalSoft_GV_CP_TD_title"></h2>
							<p class='popDescr popDescr<?php echo $Total_Soft_Gallery_Video;?>'></p>
                                    <h3 class='frsp frsp<?php echo $Total_Soft_Gallery_Video;?>' style='text-align:right'>
									<a style='padding:5px 10px;' href=""><?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11;?></a>
								</h3>
						</div>
					</div>
				</div>
				<input type='text' style='display:none;' class='CPWIDTHVideo<?php echo $Total_Soft_Gallery_Video;?>' value='<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01;?>' />
				<input type='text' style='display:none;' class='CPHeightVideo<?php echo $Total_Soft_Gallery_Video;?>' value='<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02;?>' />
				<input type='text' style='display:none;' class='CPFontSizeVideo<?php echo $Total_Soft_Gallery_Video;?>' value='<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_13;?>' />
				<input type='text' style='display:none;' class='CPFontSizeVideoTitlePopup<?php echo $Total_Soft_Gallery_Video;?>' value='<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_06;?>' />
				<input type='text' style='display:none;' class='CPFontSizeVideoLinkPopup<?php echo $Total_Soft_Gallery_Video;?>' value='<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18;?>' />
				<input type='text' style='display:none;' class='TS_VG_CP_AE_<?php echo $Total_Soft_Gallery_Video;?>' value='<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_33;?>' />
				<script type="text/javascript">
					function TotalSoft_GV_CP_Cont<?php echo $Total_Soft_Gallery_Video;?>(TotalSoftGV_CP_VID, TotalSoftGV_CP_ID)
					{
						jQuery('#TotalSoft_GV_CP_VID_'+TotalSoftGV_CP_ID).val(TotalSoftGV_CP_VID);
						var TotalSoft_GV_CP_PoM = jQuery('#TotalSoft_GV_CP_PoM_'+TotalSoftGV_CP_ID).val();
						var background = '<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_02;?>';
						var border = '<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03;?>px <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_04;?> <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_05;?>';
                        jQuery('html').css({'cursor': 'default'}); 
						jQuery.ajax({
							type: 'POST',
							url: object.ajaxurl,
							data: {
								action: 'TotalSoftGallery_Video_CP_Popup', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
								foobar: TotalSoftGV_CP_VID, // translates into $_POST['foobar'] in PHP
							},
							beforeSend: function(){
								jQuery('.TotalSoft_GV_CP_Pop_load_'+TotalSoftGV_CP_ID).css('display','block');
								jQuery('.frsp a').css('display','none');
							},
							success: function(response){
								var b=Array();
								var a=response.split('=>');
								for(var i=3;i<a.length;i++)
								{ b[b.length]=a[i].split('[')[0].trim(); }
								b[b.length-1]=b[b.length-1].split(')')[0].trim();
								jQuery('.fixed-header-box').css({'z-index':'0'});
								if(b[4] != '')
								{
									if(b[4].indexOf("start")===-1){
									jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').attr('src',b[4]+'?rel=0;iv_load_policy=3');
									}else{jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').attr('src',b[4]+'&rel=0;iv_load_policy=3');}
									jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').css('display','none');
									jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').css('display','block');
								}
								else
								{
									jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').attr('src',b[5]);
									jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').css('display','block');
									jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').css('display','none');
								}
								jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').html(b[0]);
								jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').html(b[1]);

								if(TotalSoft_GV_CP_PoM == '')
								{
									jQuery('.TotalSoft_GV_CP_Content<?php echo $Total_Soft_Gallery_Video;?>').animate({'height':'100%',},300);
									jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'top':'50%','left':'50%',},300);
									jQuery('.TotalSoft_GV_CP_Iframe').find('iframe').css({'height':'100%','width':'100%'});
									if(jQuery(window).width()>1000)
									{
										var isiPad = /ipad/i.test(navigator.userAgent.toLowerCase());
										if (isiPad)
										{
										 jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'width':'1000px','padding-bottom':'390px','border-radius':'0','top':'25%','left':'50%'},200);
											jQuery('.popDescr').css({'overflow-y':'scroll','height':'230px'});
										}else if(!isiPad){
											jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'width':'1000px','padding-bottom':'415px','border-radius':'0','top':'55%','left':'50%'},500);
											jQuery('.popDescr').css({'overflow-y':'scroll','height':'230px'});
										}

									}
									if(jQuery(window).width()>750)
									{
										var isiPad = /ipad/i.test(navigator.userAgent.toLowerCase());
										if (isiPad)
										{
										 jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'width':'1000px','padding-bottom':'390px','border-radius':'0','top':'25%','left':'50%'},200);
											jQuery('.popDescr').css({'overflow-y':'scroll','height':'230px'});
										}else if(!isiPad){
											jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'width':'1000px','padding-bottom':'415px','border-radius':'0','top':'55%','left':'50%'},500);
											jQuery('.popDescr').css({'overflow-y':'scroll','height':'230px'});
										}

									}
									else
									{
								if(jQuery(window).width()<=530)
										{
											jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'98%','padding-bottom':'0px','height':'0px','border-radius':'0','top':'50%','left':'50%','opacity':'0','animation':'fadeIn 0.65s ease forwards','-webkit-animation':'fadeIn 0.65s ease forwards','-moz-animation':'fadeIn 0.65s ease forwards'});
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0%'});
											if(jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').find('.popDescr').text()==""){
												jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0','top':'76%'});
												jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'270px'});
												jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'60%'});
											      }else{
											      jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'120px','top':'60%'});
											      jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'420px'});
											      jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'47%'});
											  }
										}
										else
										{
											jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'450px','padding-bottom':'0px','height':'400px','border-radius':'0','left':'50%','max-height':'98%','max-width':'98%','opacity':'0','animation':'fadeIn 0.65s ease forwards','-webkit-animation':'fadeIn 0.65s ease forwards','-moz-animation':'fadeIn 0.65s ease forwards'});
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'55%'});
											jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'100px','top':'68%'});
										}

									}
									setTimeout(function(){
										jQuery('.TotalSoft_GV_CP_Pop_Icons<?php echo $Total_Soft_Gallery_Video;?>').animate({'height':'40px',},500);
										if(b[2])
										{
											jQuery('.frsp a').css('display','initial');
										jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3').css({'animation':'moveUpCPPD 0.65s ease forwards','-webkit-animation':'moveUpCPPD 0.65s ease forwards','-moz-animation':'moveUpCPPD 0.65s ease forwards'});
											if(b[3]=='true')
											{
												jQuery('.frsp<?php echo $Total_Soft_Gallery_Video;?> a').attr('target','_blank');
											}
											jQuery('.frsp<?php echo $Total_Soft_Gallery_Video;?>').css({'transform':'translateX(0px)','-ms-transform': 'translateX(0px)', '-o-transform': 'translateX(0px)','-moz-transform': 'translateX(0px)','-webkit-transform': 'translateX(0px)'});
										}
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'transform':'translateX(0px)','-ms-transform': 'translateX(0px)', '-o-transform': 'translateX(0px)','-moz-transform': 'translateX(0px)','-webkit-transform': 'translateX(0px)'});
										jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?>').css({'transform':'translateX(0px)','-ms-transform': 'translateX(0px)', '-o-transform': 'translateX(0px)','-moz-transform': 'translateX(0px)','-webkit-transform': 'translateX(0px)'});
										jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').css({'transform':'translateX(0px)','-ms-transform': 'translateX(0px)', '-o-transform': 'translateX(0px)','-moz-transform': 'translateX(0px)','-webkit-transform': 'translateX(0px)'});
										jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').css({'transform':'translateX(0px)','-ms-transform': 'translateX(0px)', '-o-transform': 'translateX(0px)','-moz-transform': 'translateX(0px)','-webkit-transform': 'translateX(0px)'});
										jQuery('.TotalSoft_GV_CP_Pop_Icons_1<?php echo $Total_Soft_Gallery_Video;?> i.totalsoft:nth-child(1)').css({'transform':'translate(50%, -50%)','-ms-transform': 'translate(50%, -50%)', '-o-transform': 'translate(50%, -50%)','-moz-transform': 'translate(50%, -50%)','-webkit-transform': 'translate(50%, -50%)'});
										jQuery('.TotalSoft_GV_CP_Pop_Icons_1<?php echo $Total_Soft_Gallery_Video;?> i.totalsoft:nth-child(2)').css({'transform':'translate(-50%, -50%)','-ms-transform': 'translate(-50%, -50%)', '-o-transform': 'translate(-50%, -50%)','-moz-transform': 'translate(-50%, -50%)','-webkit-transform': 'translate(-50%, -50%)'});
										jQuery('.TotalSoft_GV_CP_Pop_Icons_2<?php echo $Total_Soft_Gallery_Video;?> i.totalsoft').css({'transform':'translate(-50%, -50%)','-ms-transform': 'translate(-50%, -50%)', '-o-transform': 'translate(-50%, -50%)','-moz-transform': 'translate(-50%, -50%)','-webkit-transform': 'translate(-50%, -50%)'});
									},1000)
							

								}
								else if(TotalSoft_GV_CP_PoM == 'mode01')
								{
									if(b[2])
									{
										jQuery('.frsp a').css('display','initial');
										jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3').css({'animation':'moveUpCPPD 0.65s ease forwards','-webkit-animation':'moveUpCPPD 0.65s ease forwards','-moz-animation':'moveUpCPPD 0.65s ease forwards'});
										jQuery('.frsp<?php echo $Total_Soft_Gallery_Video;?> a').attr('href',b[2]);
										if(b[3]=='true')
										{
											jQuery('.frsp<?php echo $Total_Soft_Gallery_Video;?> a').attr('target','_blank');
										}
									}

									jQuery('.TotalSoft_GV_CP_Content<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'100%','opacity':'0','animation':'fadeIn 0.65s ease forwards','-webkit-animation':'fadeIn 0.65s ease forwards','-moz-animation':'fadeIn 0.65s ease forwards'});

									jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'top':'50%','left':'50%',});

									if(jQuery(window).width()>1000)
									{
										var isiPad = /ipad/i.test(navigator.userAgent.toLowerCase());
										if (isiPad)
										{
											jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'1000px','padding-bottom':'390px','border-radius':'0','top':'25%','left':'50%','opacity':'0','animation':'fadeIn 0.65s ease forwards','-webkit-animation':'fadeIn 0.65s ease forwards','-moz-animation':'fadeIn 0.65s ease forwards'});
											jQuery('.popDescr').css({'overflow-y':'scroll','height':'230px'});
										}else if(!isiPad){
											jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'1000px','padding-bottom':'415px','border-radius':'0','top':'55%','left':'50%','opacity':'0','animation':'fadeIn 0.65s ease forwards','-webkit-animation':'fadeIn 0.65s ease forwards','-moz-animation':'fadeIn 0.65s ease forwards'});
											jQuery('.popDescr').css({'overflow-y':'scroll','height':'230px'});
										}
									}
									if(jQuery(window).width()>750)
									{
										var isiPad = /ipad/i.test(navigator.userAgent.toLowerCase());
										if (isiPad)
										{
										 jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'1000px','padding-bottom':'390px','border-radius':'0','top':'25%','left':'50%','opacity':'0','animation':'fadeIn 0.65s ease forwards','-webkit-animation':'fadeIn 0.65s ease forwards','-moz-animation':'fadeIn 0.65s ease forwards'});
										 jQuery('.popDescr').css({'overflow-y':'scroll','height':'230px'});
										}else if(!isiPad){
											jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'1000px','padding-bottom':'415px','border-radius':'0','top':'55%','left':'50%','opacity':'0','animation':'fadeIn 0.65s ease forwards','-webkit-animation':'fadeIn 0.65s ease forwards','-moz-animation':'fadeIn 0.65s ease forwards'});
											jQuery('.popDescr').css({'overflow-y':'scroll','height':'230px'});
										}
									}

									else
									{
								if(jQuery(window).width()<=530)
										{
											jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'98%','padding-bottom':'0px','height':'0px','border-radius':'0','top':'50%','left':'50%','opacity':'0','animation':'fadeIn 0.65s ease forwards','-webkit-animation':'fadeIn 0.65s ease forwards','-moz-animation':'fadeIn 0.65s ease forwards'});
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0%'});
											if(jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').find('.popDescr').text()==""){
												jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0','top':'76%'});
												jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'270px'});
												jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'60%'});
											      }else{
											      jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'120px','top':'60%'});
											      jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'420px'});
											      jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'47%'});
											  }
										}
										else
										{
											jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'450px','padding-bottom':'0px','height':'400px','border-radius':'0','left':'50%','max-height':'98%','max-width':'98%','opacity':'0','animation':'fadeIn 0.65s ease forwards','-webkit-animation':'fadeIn 0.65s ease forwards','-moz-animation':'fadeIn 0.65s ease forwards'});
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'55%'});
											jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'100px','top':'68%'});
										}
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'transform':'translateX(0px)','-ms-transform': 'translateX(0px)', '-o-transform': 'translateX(0px)','-moz-transform': 'translateX(0px)','-webkit-transform': 'translateX(0px)'});
									jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').find('iframe').css({'transform':'translateX(0px)','-ms-transform': 'translateX(0px)', '-o-transform': 'translateX(0px)','-moz-transform': 'translateX(0px)','-webkit-transform': 'translateX(0px)'});
									}
								}
								else if(TotalSoft_GV_CP_PoM == 'mode02')
								{
									if(b[2])
									{
										jQuery('.frsp a').css('display','initial');
										jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3').css({'animation':'moveUpCPPD 0.65s ease forwards','-webkit-animation':'moveUpCPPD 0.65s ease forwards','-moz-animation':'moveUpCPPD 0.65s ease forwards'});
										jQuery('.frsp<?php echo $Total_Soft_Gallery_Video;?> a').attr('href',b[2]);
										if(b[3]=='true')
										{
											jQuery('.frsp<?php echo $Total_Soft_Gallery_Video;?> a').attr('target','_blank');
										}
									}

									jQuery('.TotalSoft_GV_CP_Content<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'100%','opacity':'0','animation':'fadeIn 0.65s ease forwards','-webkit-animation':'fadeIn 0.65s ease forwards','-moz-animation':'fadeIn 0.65s ease forwards'});

									jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'top':'50%','left':'50%',});

									if(jQuery(window).width()>1000)
									{
										var isiPad = /ipad/i.test(navigator.userAgent.toLowerCase());
										if (isiPad)
										{
											jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'1000px','padding-bottom':'390px','border-radius':'0','top':'25%','left':'50%','opacity':'0','animation':'moveUpCP 0.65s ease forwards','-webkit-animation':'moveUpCP 0.65s ease forwards','-moz-animation':'moveUpCP 0.65s ease forwards'});
											jQuery('.popDescr').css({'overflow-y':'scroll','height':'230px'});
										}else if(!isiPad){
											jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'1000px','padding-bottom':'415px','border-radius':'0','top':'55%','left':'50%','opacity':'0','animation':'moveUpCP 0.65s ease forwards','-webkit-animation':'moveUpCP 0.65s ease forwards','-moz-animation':'moveUpCP 0.65s ease forwards'});
											jQuery('.popDescr').css({'overflow-y':'scroll','height':'230px'});
										}
									}
									if(jQuery(window).width()>750)
									{
										var isiPad = /ipad/i.test(navigator.userAgent.toLowerCase());
										if (isiPad)
										{
										 jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'1000px','padding-bottom':'390px','border-radius':'0','top':'25%','left':'50%','opacity':'0','animation':'moveUpCP 0.65s ease forwards','-webkit-animation':'moveUpCP 0.65s ease forwards','-moz-animation':'moveUpCP 0.65s ease forwards'});
											jQuery('.popDescr').css({'overflow-y':'scroll','height':'230px'});
										}else if(!isiPad){
											jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'1000px','padding-bottom':'415px','border-radius':'0','top':'55%','left':'50%','opacity':'0','animation':'moveUpCP 0.65s ease forwards','-webkit-animation':'moveUpCP 0.65s ease forwards','-moz-animation':'moveUpCP 0.65s ease forwards'});
											jQuery('.popDescr').css({'overflow-y':'scroll','height':'230px'});
										}
									}
									else
									{
								if(jQuery(window).width()<=530)
										{
											jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'98%','padding-bottom':'0px','height':'0px','border-radius':'0','top':'40%','left':'50%','opacity':'0','animation':'fadeIn 0.65s ease forwards','-webkit-animation':'fadeIn 0.65s ease forwards','-moz-animation':'fadeIn 0.65s ease forwards'});
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0%'});
											if(jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').find('.popDescr').text()==""){
												jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0','top':'76%'});
												jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'270px'});
												jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'60%'});
											      }else{
											      jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'120px','top':'60%'});
											      jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'420px'});
											      jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'47%'});
											  }
										}
										else
										{
											jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'450px','padding-bottom':'0px','height':'400px','border-radius':'0','left':'50%','max-height':'98%','max-width':'98%','opacity':'0','animation':'fadeIn 0.65s ease forwards','-webkit-animation':'fadeIn 0.65s ease forwards','-moz-animation':'fadeIn 0.65s ease forwards'});
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'55%'});
											jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'100px','top':'68%'});
										}
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'transform':'translateX(0px)','-ms-transform': 'translateX(0px)', '-o-transform': 'translateX(0px)','-moz-transform': 'translateX(0px)','-webkit-transform': 'translateX(0px)'});
									jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').find('iframe').css({'transform':'translateX(0px)','-ms-transform': 'translateX(0px)', '-o-transform': 'translateX(0px)','-moz-transform': 'translateX(0px)','-webkit-transform': 'translateX(0px)'});
									}
								}
								else
								{
									if(b[2])
									{
										jQuery('.frsp a').css('display','initial');
										jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3').css({'animation':'moveUpCPPD 0.65s ease forwards','-webkit-animation':'moveUpCPPD 0.65s ease forwards','-moz-animation':'moveUpCPPD 0.65s ease forwards'});
										jQuery('.frsp<?php echo $Total_Soft_Gallery_Video;?> a').attr('href',b[2]);
										if(b[3]=='true')
										{
											jQuery('.frsp<?php echo $Total_Soft_Gallery_Video;?> a').attr('target','_blank');
										}
									}

									jQuery('.TotalSoft_GV_CP_Content<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'100%','opacity':'0','animation':'fadeIn 0.65s ease forwards','-webkit-animation':'fadeIn 0.65s ease forwards','-moz-animation':'fadeIn 0.65s ease forwards'});

									jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'top':'50%','left':'50%',});
									if(jQuery(window).width()>1000)
									{
										var isiPad = /ipad/i.test(navigator.userAgent.toLowerCase());
										if (isiPad)
										{
											jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'1000px','padding-bottom':'390px','border-radius':'0','top':'25%','left':'50%','opacity':'0','animation':'scaleUpCP 0.65s ease-in-out forwards','-webkit-animation':'scaleUpCP 0.65s ease-in-out forwards','-moz-animation':'scaleUpCP 0.65s ease-in-out forwards'});
										jQuery('.popDescr').css({'overflow-y':'scroll','height':'230px'});
										}else if(!isiPad){
											jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'1000px','padding-bottom':'415px','border-radius':'0','top':'55%','left':'50%','opacity':'0','animation':'scaleUpCP 0.65s ease-in-out forwards','-webkit-animation':'scaleUpCP 0.65s ease-in-out forwards','-moz-animation':'scaleUpCP 0.65s ease-in-out forwards'});
										jQuery('.popDescr').css({'overflow-y':'scroll','height':'230px'});
										}
									}
									if(jQuery(window).width()>750)
									{
										var isiPad = /ipad/i.test(navigator.userAgent.toLowerCase());
										if (isiPad)
										{
										 jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'1000px','padding-bottom':'390px','border-radius':'0','top':'25%','left':'50%','opacity':'0','animation':'scaleUpCP 0.65s ease-in-out forwards','-webkit-animation':'scaleUpCP 0.65s ease-in-out forwards','-moz-animation':'scaleUpCP 0.65s ease-in-out forwards'});
										jQuery('.popDescr').css({'overflow-y':'scroll','height':'230px'});
										}else if(!isiPad){
											jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'1000px','padding-bottom':'415px','border-radius':'0','top':'55%','left':'50%','opacity':'0','animation':'scaleUpCP 0.65s ease-in-out forwards','-webkit-animation':'scaleUpCP 0.65s ease-in-out forwards','-moz-animation':'scaleUpCP 0.65s ease-in-out forwards'});
										jQuery('.popDescr').css({'overflow-y':'scroll','height':'230px'});
										}
									}
									else
									{
								if(jQuery(window).width()<=530)
										{
											jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'98%','padding-bottom':'0px','height':'0px','border-radius':'0','top':'50%','left':'50%','opacity':'0','animation':'fadeIn 0.65s ease forwards','-webkit-animation':'fadeIn 0.65s ease forwards','-moz-animation':'fadeIn 0.65s ease forwards'});
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0%'});
											if(jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').find('.popDescr').text()==""){
												jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0','top':'76%'});
												jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'270px'});
												jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'60%'});
											      }else{
											      jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'120px','top':'60%'});
											      jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'420px'});
											      jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'47%'});
											  }
										}
										else
										{
											jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'450px','padding-bottom':'0px','height':'400px','border-radius':'0','left':'50%','max-height':'98%','max-width':'98%','opacity':'0','animation':'fadeIn 0.65s ease forwards','-webkit-animation':'fadeIn 0.65s ease forwards','-moz-animation':'fadeIn 0.65s ease forwards'});
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'55%'});
											jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'100px','top':'68%'});
										}
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'transform':'translateX(0px)','-ms-transform': 'translateX(0px)', '-o-transform': 'translateX(0px)','-moz-transform': 'translateX(0px)','-webkit-transform': 'translateX(0px)'});
									jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').find('iframe').css({'transform':'translateX(0px)','-ms-transform': 'translateX(0px)', '-o-transform': 'translateX(0px)','-moz-transform': 'translateX(0px)','-webkit-transform': 'translateX(0px)'});
									}
								}
								setTimeout(function(){
									jQuery('.TotalSoft_GV_CP_Pop_load_'+TotalSoftGV_CP_ID).css('display','none');
								},1500)
							}
						});
					}
					function TotalSoft_GV_CP_Close_Popup<?php echo $Total_Soft_Gallery_Video;?>()
					{
						var TotalSoft_GV_CP_PoM = jQuery('#TotalSoft_GV_CP_PoM_<?php echo $Total_Soft_Gallery_Video;?>').val();
						jQuery('.fixed-header-box').css({'z-index':'10'});
						if(TotalSoft_GV_CP_PoM == '')
						{
							jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'transform':'translateX(-12000px)','-ms-transform': 'translateX(-12000px)', '-o-transform': 'translateX(-12000px)','-moz-transform': 'translateX(-12000px)','-webkit-transform': 'translateX(-12000px)',});
							jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?>').css({'transform':'translateX(12000px)','-ms-transform': 'translateX(12000px)', '-o-transform': 'translateX(12000px)','-moz-transform': 'translateX(12000px)','-webkit-transform': 'translateX(12000px)'});
							jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').css({'transform':'translateX(12000px)','-ms-transform': 'translateX(12000px)', '-o-transform': 'translateX(12000px)','-moz-transform': 'translateX(12000px)','-webkit-transform': 'translateX(12000px)'});
							jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').css({'transform':'translateX(12000px)','-ms-transform': 'translateX(12000px)', '-o-transform': 'translateX(12000px)','-moz-transform': 'translateX(12000px)','-webkit-transform': 'translateX(12000px)'});
							jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3').css({'transform':'translateX(12000px)','-ms-transform': 'translateX(12000px)', '-o-transform': 'translateX(12000px)','-moz-transform': 'translateX(12000px)','-webkit-transform': 'translateX(12000px)'});
							jQuery('.TotalSoft_GV_CP_Pop_Icons_1<?php echo $Total_Soft_Gallery_Video;?> i.totalsoft').css({'transform':'translate(0, -1200px)','-ms-transform': 'translate(0, -1200px)', '-o-transform': 'translate(0, -1200px)','-moz-transform': 'translate(0, -1200px)','-webkit-transform': 'translate(0, -1200px)'});
							jQuery('.TotalSoft_GV_CP_Pop_Icons_2<?php echo $Total_Soft_Gallery_Video;?> i.totalsoft').css({'transform':'translate(0, -1200px)','-ms-transform': 'translate(0, -1200px)', '-o-transform': 'translate(0, -1200px)','-moz-transform': 'translate(0, -1200px)','-webkit-transform': 'translate(0, -1200px)'});
							setTimeout(function(){
								if(jQuery(window).width()<=700)
								{
									jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'width':'50px','height':'50px','border-radius':'100%','top':'50%','left':'50%',},500);
								}
								else
								{
									jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'width':'50px','padding-bottom':'50px','border-radius':'100%','top':'50%','left':'50%',},500);
								}
								jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'top':'-50%','left':'-50%',},300);
								jQuery('.TotalSoft_GV_CP_Pop_Icons<?php echo $Total_Soft_Gallery_Video;?>').animate({'height':'0px',},500);
								jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').attr('src','');
								jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').attr('src','');
							},300)
							setTimeout(function(){ jQuery('.TotalSoft_GV_CP_Content<?php echo $Total_Soft_Gallery_Video;?>').animate({'height':'0%',},300); },800)
						}
						else if(TotalSoft_GV_CP_PoM == 'mode01')
						{
							jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').attr('src','');
							jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').attr('src','');

							jQuery('.TotalSoft_GV_CP_Content<?php echo $Total_Soft_Gallery_Video;?>').css({'opacity':'1','animation':'fadeOut 0.65s ease forwards','-webkit-animation':'fadeOut 0.65s ease forwards','-moz-animation':'fadeOut 0.65s ease forwards'});

							jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'animation':'fadeOut 0.65s ease forwards','-webkit-animation':'fadeOut 0.65s ease forwards','-moz-animation':'fadeOut 0.65s ease forwards'});
							setTimeout(function(){
								jQuery('.TotalSoft_GV_CP_Content<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'0%'});
								jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'top':'-45%','left':'-45%'});
							},800)
						}
						else if(TotalSoft_GV_CP_PoM == 'mode02')
						{
							jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').attr('src','');
							jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').attr('src','');

							jQuery('.TotalSoft_GV_CP_Content<?php echo $Total_Soft_Gallery_Video;?>').css({'opacity':'1','animation':'fadeOut 0.65s ease forwards','-webkit-animation':'fadeOut 0.65s ease forwards','-moz-animation':'fadeOut 0.65s ease forwards'});

							jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'animation':'moveUpCPC 0.65s ease forwards','-webkit-animation':'moveUpCPC 0.65s ease forwards','-moz-animation':'moveUpCPC 0.65s ease forwards'});
							setTimeout(function(){
								jQuery('.TotalSoft_GV_CP_Content<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'0%'});
								jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'top':'-45%','left':'-45%'});
							},800)
						}
						else
						{
							jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').attr('src','');
							jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').attr('src','');

							jQuery('.TotalSoft_GV_CP_Content<?php echo $Total_Soft_Gallery_Video;?>').css({'opacity':'1','animation':'fadeOut 0.65s ease forwards','-webkit-animation':'fadeOut 0.65s ease forwards','-moz-animation':'fadeOut 0.65s ease forwards'});

							jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'animation':'scaleUpCPC 0.65s ease-in-out forwards','-webkit-animation':'scaleUpCPC 0.65s ease-in-out forwards','-moz-animation':'scaleUpCPC 0.65s ease-in-out forwards'});
							setTimeout(function(){
								jQuery('.TotalSoft_GV_CP_Content<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'0%'});
								jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'top':'-45%','left':'-45%'});
							},800)
						}
					}

					function TotalSoft_GV_CP_Left<?php echo $Total_Soft_Gallery_Video;?>(TotalSoftGV_CP_ID)
					{
						var TotalSoft_GV_CP_VID=jQuery('#TotalSoft_GV_CP_VID_'+TotalSoftGV_CP_ID).val();
						var TotalSoft_GV_CP_PoM = jQuery('#TotalSoft_GV_CP_PoM_'+TotalSoftGV_CP_ID).val();
                        
						jQuery.ajax({
							type: 'POST',
							url: object.ajaxurl,
							data: {
								action: 'TotalSoftGallery_Video_CP_Popup_Left', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
								foobar: TotalSoft_GV_CP_VID, // translates into $_POST['foobar'] in PHP
							},
							beforeSend: function(){
								jQuery('.TotalSoft_GV_CP_Pop_load_'+TotalSoftGV_CP_ID).css('display','block');
								jQuery('.frsp a').css('display','none');
								jQuery('.fResp').animate({'opacity':'0'},500);
								if(TotalSoft_GV_CP_PoM == '')
								{
									jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'transform':'translateX(-12000px)','-ms-transform': 'translateX(-12000px)', '-o-transform': 'translateX(-12000px)','-moz-transform': 'translateX(-12000px)','-webkit-transform': 'translateX(-12000px)'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').css({'transform':'translateX(12000px)','-ms-transform': 'translateX(12000px)', '-o-transform': 'translateX(12000px)','-moz-transform': 'translateX(12000px)','-webkit-transform': 'translateX(12000px)'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').css({'transform':'translateX(12000px)','-ms-transform': 'translateX(12000px)', '-o-transform': 'translateX(12000px)','-moz-transform': 'translateX(12000px)','-webkit-transform': 'translateX(12000px)'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3').css({'transform':'translateX(12000px)','-ms-transform': 'translateX(12000px)', '-o-transform': 'translateX(12000px)','-moz-transform': 'translateX(12000px)','-webkit-transform': 'translateX(12000px)'});
								}
								else if(TotalSoft_GV_CP_PoM == 'mode01')
								{
									
									jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'opacity':'1','animation':'fadeOut 0.65s ease forwards','-webkit-animation':'fadeOut 0.65s ease forwards','-moz-animation':'fadeOut 0.65s ease forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').css({'opacity':'1','animation':'fadeOut 0.65s ease forwards','-webkit-animation':'fadeOut 0.65s ease forwards','-moz-animation':'fadeOut 0.65s ease forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').css({'opacity':'1','animation':'fadeOut 0.65s ease forwards','-webkit-animation':'fadeOut 0.65s ease forwards','-moz-animation':'fadeOut 0.65s ease forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3').css({'opacity':'1','animation':'fadeOut 0.65s ease forwards','-webkit-animation':'fadeOut 0.65s ease forwards','-moz-animation':'fadeOut 0.65s ease forwards'});
								}
								else if(TotalSoft_GV_CP_PoM == 'mode02')
								{
									
									jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'animation':'moveUpCPNU 0.65s ease forwards','-webkit-animation':'moveUpCPNU 0.65s ease forwards','-moz-animation':'moveUpCPNU 0.65s ease forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').css({'animation':'moveUpCPNU 0.65s ease forwards','-webkit-animation':'moveUpCPNU 0.65s ease forwards','-moz-animation':'moveUpCPNU 0.65s ease forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').css({'animation':'moveUpCPNU 0.65s ease forwards','-webkit-animation':'moveUpCPNU 0.65s ease forwards','-moz-animation':'moveUpCPNU 0.65s ease forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3').css({'animation':'moveUpCPNU 0.65s ease forwards','-webkit-animation':'moveUpCPNU 0.65s ease forwards','-moz-animation':'moveUpCPNU 0.65s ease forwards'});

								}
								else if(TotalSoft_GV_CP_PoM == 'mode03')
								{
									jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'animation':'scaleUpCPNU 0.65s ease-in-out forwards','-webkit-animation':'scaleUpCPNU 0.65s ease-in-out forwards','-moz-animation':'scaleUpCPNU 0.65s ease-in-out forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').css({'animation':'scaleUpCPNU 0.65s ease-in-out forwards','-webkit-animation':'scaleUpCPNU 0.65s ease-in-out forwards','-moz-animation':'scaleUpCPNU 0.65s ease-in-out forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').css({'animation':'scaleUpCPNU 0.65s ease-in-out forwards','-webkit-animation':'scaleUpCPNU 0.65s ease-in-out forwards','-moz-animation':'scaleUpCPNU 0.65s ease-in-out forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3').css({'animation':'scaleUpCPNU 0.65s ease-in-out forwards','-webkit-animation':'scaleUpCPNU 0.65s ease-in-out forwards','-moz-animation':'scaleUpCPNU 0.65s ease-in-out forwards'});
								}
								else if(TotalSoft_GV_CP_PoM == 'mode04')
								{
									jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'animation':'fallPerspectiveCPPU 0.8s ease-in-out forwards','-webkit-animation':'fallPerspectiveCPPU 0.8s ease-in-out forwards','-moz-animation':'fallPerspectiveCPPU 0.8s ease-in-out forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').css({'animation':'fallPerspectiveCPPU 0.8s ease-in-out forwards','-webkit-animation':'fallPerspectiveCPPU 0.8s ease-in-out forwards','-moz-animation':'fallPerspectiveCPPU 0.8s ease-in-out forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').css({'animation':'fallPerspectiveCPPU 0.8s ease-in-out forwards','-webkit-animation':'fallPerspectiveCPPU 0.8s ease-in-out forwards','-moz-animation':'fallPerspectiveCPPU 0.8s ease-in-out forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3').css({'animation':'fallPerspectiveCPPU 0.8s ease-in-out forwards','-webkit-animation':'fallPerspectiveCPPU 0.8s ease-in-out forwards','-moz-animation':'fallPerspectiveCPPU 0.8s ease-in-out forwards'});
								}
								else if(TotalSoft_GV_CP_PoM == 'mode05')
								{
									jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'animation':'flyCPPU 0.8s ease-in-out forwards','-webkit-animation':'flyCPPU 0.8s ease-in-out forwards','-moz-animation':'flyCPPU 0.8s ease-in-out forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').css({'animation':'flyCPPU 0.8s ease-in-out forwards','-webkit-animation':'flyCPPU 0.8s ease-in-out forwards','-moz-animation':'flyCPPU 0.8s ease-in-out forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').css({'animation':'flyCPPU 0.8s ease-in-out forwards','-webkit-animation':'flyCPPU 0.8s ease-in-out forwards','-moz-animation':'flyCPPU 0.8s ease-in-out forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3').css({'animation':'flyCPPU 0.8s ease-in-out forwards','-webkit-animation':'flyCPPU 0.8s ease-in-out forwards','-moz-animation':'flyCPPU 0.8s ease-in-out forwards'});
								}
								else if(TotalSoft_GV_CP_PoM == 'mode06')
								{
									jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'animation':'flipCPPU 0.8s ease-in-out forwards','-webkit-animation':'flipCPPU 0.8s ease-in-out forwards','-moz-animation':'flipCPPU 0.8s ease-in-out forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').css({'animation':'flipCPPU 0.8s ease-in-out forwards','-webkit-animation':'flipCPPU 0.8s ease-in-out forwards','-moz-animation':'flipCPPU 0.8s ease-in-out forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').css({'animation':'flipCPPU 0.8s ease-in-out forwards','-webkit-animation':'flipCPPU 0.8s ease-in-out forwards','-moz-animation':'flipCPPU 0.8s ease-in-out forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3').css({'animation':'flipCPPU 0.8s ease-in-out forwards','-webkit-animation':'flipCPPU 0.8s ease-in-out forwards','-moz-animation':'flipCPPU 0.8s ease-in-out forwards'});
								}
								else if(TotalSoft_GV_CP_PoM == 'mode07')
								{
									jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'animation':'helixCPPU 0.8s ease-in-out forwards','-webkit-animation':'helixCPPU 0.8s ease-in-out forwards','-moz-animation':'helixCPPU 0.8s ease-in-out forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').css({'animation':'helixCPPU 0.8s ease-in-out forwards','-webkit-animation':'helixCPPU 0.8s ease-in-out forwards','-moz-animation':'helixCPPU 0.8s ease-in-out forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').css({'animation':'helixCPPU 0.8s ease-in-out forwards','-webkit-animation':'helixCPPU 0.8s ease-in-out forwards','-moz-animation':'helixCPPU 0.8s ease-in-out forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3').css({'animation':'helixCPPU 0.8s ease-in-out forwards','-webkit-animation':'helixCPPU 0.8s ease-in-out forwards','-moz-animation':'helixCPPU 0.8s ease-in-out forwards'});
								}
								else if(TotalSoft_GV_CP_PoM == 'mode08')
								{
									jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'animation':'popUpCPPU 0.8s ease-in forwards','-webkit-animation':'popUpCPPU 0.8s ease-in forwards','-moz-animation':'popUpCPPU 0.8s ease-in forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').css({'animation':'popUpCPPU 0.8s ease-in forwards','-webkit-animation':'popUpCPPU 0.8s ease-in forwards','-moz-animation':'popUpCPPU 0.8s ease-in forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').css({'animation':'popUpCPPU 0.8s ease-in forwards','-webkit-animation':'popUpCPPU 0.8s ease-in forwards','-moz-animation':'popUpCPPU 0.8s ease-in forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3').css({'animation':'popUpCPPU 0.8s ease-in forwards','-webkit-animation':'popUpCPPU 0.8s ease-in forwards','-moz-animation':'popUpCPPU 0.8s ease-in forwards'});
								}
							},
							success: function(response){

								var b=Array();
								var a=response.split('=>');
								for(var i=1;i<a.length;i++)
								{ b[b.length]=a[i].split('[')[0].trim(); }
								b[b.length-1]=b[b.length-1].split(')')[0].trim();
								jQuery('#TotalSoft_GV_CP_VID_'+TotalSoftGV_CP_ID).val(b[0]);
								if(TotalSoft_GV_CP_PoM == '')
								{
									if(b[5] != '')
									{
										if(b[5].indexOf("start")===-1){
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').attr('src',b[5]+'?rel=0;iv_load_policy=3');
										}else{jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').attr('src',b[5]+'&rel=0;iv_load_policy=3');}
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').css('display','none');
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').css('display','block');
									}
									else
									{
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').attr('src',b[6]);
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').css('display','block');
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').css('display','none');
									}
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').html(b[1]);
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').html(b[2]);
									
									setTimeout(function(){
										jQuery('.TotalSoft_GV_CP_Pop_Icons<?php echo $Total_Soft_Gallery_Video;?>').animate({'height':'40px',},500);
										if(b[3])
										{
											jQuery('.frsp a').css('display','initial');
											if(b[4]=='true')
											{
												jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3 a').attr('target','_blank');
											}
											jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3 a').attr('href',b[3]);
											jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3').css({'transform':'translateX(0px)','-ms-transform': 'translateX(0px)', '-o-transform': 'translateX(0px)','-moz-transform': 'translateX(0px)','-webkit-transform': 'translateX(0px)'});
										}
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'transform':'translateX(0px)','-ms-transform': 'translateX(0px)', '-o-transform': 'translateX(0px)','-moz-transform': 'translateX(0px)','-webkit-transform': 'translateX(0px)'});
										jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').css({'transform':'translateX(0px)','-ms-transform': 'translateX(0px)', '-o-transform': 'translateX(0px)','-moz-transform': 'translateX(0px)','-webkit-transform': 'translateX(0px)'});
										jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').css({'transform':'translateX(0px)','-ms-transform': 'translateX(0px)', '-o-transform': 'translateX(0px)','-moz-transform': 'translateX(0px)','-webkit-transform': 'translateX(0px)'});
									},500);
         							jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').html(b[1]);
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').html(b[2]);
                                    if(jQuery(window).width()<=530)
										{
											jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'98%','padding-bottom':'0px','height':'310px','border-radius':'0','top':'50%','left':'50%','opacity':'0','animation':'fadeIn 0.65s ease forwards','-webkit-animation':'fadeIn 0.65s ease forwards','-moz-animation':'fadeIn 0.65s ease forwards'});
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0%'});
											if(jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').find('.popDescr').text()==""){
												jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0','top':'76%'});
												jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'height':'270px'},500);
												jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'60%'});
											      }else{
											      jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'120px','top':'60%'});
											      jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'height':'420px'},500);
											      jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'47%'});
											  }
										}
									setTimeout(function(){jQuery('.fResp').css('opacity','1');},1000);
									setTimeout(function(){
										jQuery('.TotalSoft_GV_CP_Pop_load_'+TotalSoftGV_CP_ID).css('display','none');
									},1000)
								}
								else if(TotalSoft_GV_CP_PoM == 'mode01')
								{
									if(b[5] != '')
									{
										if(b[5].indexOf("start")===-1){
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').attr('src',b[5]+'?rel=0;iv_load_policy=3');
										}else{jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').attr('src',b[5]+'&rel=0;iv_load_policy=3');}
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').css('display','none');
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').css('display','block');
										jQuery('.TotalSoft_GV_CP_TD p').animate({'padding-top':'10px','padding-bottom':'10px'},500);
									}
									else
									{
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').attr('src',b[6]);
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').css('display','block');
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').css('display','none');
									}
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').html(b[1]);
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').html(b[2]);
									setTimeout(function(){
										if(b[3])
										{
											jQuery('.frsp a').css('display','initial');
											if(b[4]=='true')
											{
												jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3 a').attr('target','_blank');
											}
											jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3 a').attr('href',b[3]);
											jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3').css({'opacity':'0','animation':'fadeIn 0.65s ease forwards','-webkit-animation':'fadeIn 0.65s ease forwards','-moz-animation':'fadeIn 0.65s ease forwards'});
										}
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'opacity':'0','animation':'fadeIn 0.65s ease forwards','-webkit-animation':'fadeIn 0.65s ease forwards','-moz-animation':'fadeIn 0.65s ease forwards'});
										jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').css({'opacity':'0','animation':'fadeIn 0.65s ease forwards','-webkit-animation':'fadeIn 0.65s ease forwards','-moz-animation':'fadeIn 0.65s ease forwards'});
										jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').css({'opacity':'0','animation':'fadeIn 0.65s ease forwards','-webkit-animation':'fadeIn 0.65s ease forwards','-moz-animation':'fadeIn 0.65s ease forwards'});
										},500);
									if(jQuery(window).width()<=530)
										{
											jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'98%','padding-bottom':'0px','height':'310px','border-radius':'0','top':'50%','left':'50%','opacity':'0','animation':'fadeIn 0.65s ease forwards','-webkit-animation':'fadeIn 0.65s ease forwards','-moz-animation':'fadeIn 0.65s ease forwards'});
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0%'});
											if(jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').find('.popDescr').text()==""){
												jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0','top':'76%'});
												jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'height':'270px'},500);
												jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'60%'});
											      }else{
											      jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'120px','top':'60%'});
											      jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'height':'420px'},500);
											      jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'47%'});
											  }
										}
										setTimeout(function(){jQuery('.fResp').css('opacity','1');},1000);
									setTimeout(function(){
										jQuery('.TotalSoft_GV_CP_Pop_load_'+TotalSoftGV_CP_ID).css('display','none');
									},1000)
								}
								else if(TotalSoft_GV_CP_PoM == 'mode02')
								{
									if(b[5] != '')
									{
										if(b[5].indexOf("start")===-1){
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').attr('src',b[5]+'?rel=0;iv_load_policy=3');
										}else{jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').attr('src',b[5]+'&rel=0;iv_load_policy=3');}
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').css('display','none');
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').css('display','block');
									}
									else
									{
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').attr('src',b[6]);
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').css('display','block');
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').css('display','none');
									}
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').html(b[1]);
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').html(b[2]);
									setTimeout(function(){
										if(b[3])
										{
											jQuery('.frsp a').css('display','initial');
											if(b[4]=='true')
											{
												jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3 a').attr('target','_blank');
											}
											jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3 a').attr('href',b[3]);
											jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3').css({'animation':'moveUpCPPD 0.65s ease forwards','-webkit-animation':'moveUpCPPD 0.65s ease forwards','-moz-animation':'moveUpCPPD 0.65s ease forwards'});
										}
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'animation':'moveUpCPPD 0.65s ease forwards','-webkit-animation':'moveUpCPPD 0.65s ease forwards','-moz-animation':'moveUpCPPD 0.65s ease forwards'});
										jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').css({'animation':'moveUpCPPD 0.65s ease forwards','-webkit-animation':'moveUpCPPD 0.65s ease forwards','-moz-animation':'moveUpCPPD 0.65s ease forwards'});
										jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').css({'animation':'moveUpCPPD 0.65s ease forwards','-webkit-animation':'moveUpCPPD 0.65s ease forwards','-moz-animation':'moveUpCPPD 0.65s ease forwards'});
									},500);
									if(jQuery(window).width()<=530)
										{
											jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'98%','padding-bottom':'0px','height':'310px','border-radius':'0','top':'40%','left':'50%','opacity':'0','animation':'fadeIn 0.65s ease forwards','-webkit-animation':'fadeIn 0.65s ease forwards','-moz-animation':'fadeIn 0.65s ease forwards'});
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0%'});
											if(jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').find('.popDescr').text()==""){
												jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0','top':'76%'});
												jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'height':'270px'},500);
												jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'60%'});
											      }else{
											      jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'120px','top':'60%'});
											      jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'height':'420px'},500);
											      jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'47%'});
											  }
										}
									setTimeout(function(){jQuery('.fResp').css('opacity','1');},1000);
									setTimeout(function(){
										jQuery('.TotalSoft_GV_CP_Pop_load_'+TotalSoftGV_CP_ID).css('display','none');
									},1000)
								}
								else if(TotalSoft_GV_CP_PoM == 'mode03')
								{
									if(b[5] != '')
									{
										if(b[5].indexOf("start")===-1){
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').attr('src',b[5]+'?rel=0;iv_load_policy=3');
										}else{jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').attr('src',b[5]+'&rel=0;iv_load_policy=3');}
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').css('display','none');
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').css('display','block');
									}
									else
									{
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').attr('src',b[6]);
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').css('display','block');
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').css('display','none');
									}
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').html(b[1]);
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').html(b[2]);
									setTimeout(function(){
										if(b[3])
										{
											jQuery('.frsp a').css('display','initial');
											if(b[4]=='true')
											{
												jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3 a').attr('target','_blank');
											}
											jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3 a').attr('href',b[3]);
											jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3').css({'animation':'scaleUpCPPD 0.65s ease-in-out forwards','-webkit-animation':'scaleUpCPPD 0.65s ease-in-out forwards','-moz-animation':'scaleUpCPPD 0.65s ease-in-out forwards'});
										}
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'animation':'scaleUpCPPD 0.65s ease-in-out forwards','-webkit-animation':'scaleUpCPPD 0.65s ease-in-out forwards','-moz-animation':'scaleUpCPPD 0.65s ease-in-out forwards'});
										jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').css({'animation':'scaleUpCPPD 0.65s ease-in-out forwards','-webkit-animation':'scaleUpCPPD 0.65s ease-in-out forwards','-moz-animation':'scaleUpCPPD 0.65s ease-in-out forwards'});
										jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').css({'animation':'scaleUpCPPD 0.65s ease-in-out forwards','-webkit-animation':'scaleUpCPPD 0.65s ease-in-out forwards','-moz-animation':'scaleUpCPPD 0.65s ease-in-out forwards'});
									},500);
									if(jQuery(window).width()<=530)
										{
											jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'98%','padding-bottom':'0px','height':'310px','border-radius':'0','top':'50%','left':'50%','opacity':'0','animation':'fadeIn 0.65s ease forwards','-webkit-animation':'fadeIn 0.65s ease forwards','-moz-animation':'fadeIn 0.65s ease forwards'});
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0%'});
											if(jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').find('.popDescr').text()==""){
												jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0','top':'76%'});
												jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'height':'270px'},500);
												jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'60%'});
											      }else{
											      jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'120px','top':'60%'});
											      jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'height':'420px'},500);
											      jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'47%'});
											  }
										}
										setTimeout(function(){jQuery('.fResp').css('opacity','1');},1000);
									setTimeout(function(){
										jQuery('.TotalSoft_GV_CP_Pop_load_'+TotalSoftGV_CP_ID).css('display','none');
									},1000)
								}
								else if(TotalSoft_GV_CP_PoM == 'mode04')
								{
									if(b[5] != '')
									{
										if(b[5].indexOf("start")===-1){
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').attr('src',b[5]+'?rel=0;iv_load_policy=3');
										}else{jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').attr('src',b[5]+'&rel=0;iv_load_policy=3');}
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').css('display','none');
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').css('display','block');
									}
									else
									{
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').attr('src',b[6]);
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').css('display','block');
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').css('display','none');
									}
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').html(b[1]);
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').html(b[2]);
									setTimeout(function(){
										if(b[3])
										{
											jQuery('.frsp a').css('display','initial');
											if(b[4]=='true')
											{
												jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3 a').attr('target','_blank');
											}
											jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3 a').attr('href',b[3]);
											jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3').css({'animation':'fallPerspectiveCPND 0.8s ease-in-out forwards','-webkit-animation':'fallPerspectiveCPND 0.8s ease-in-out forwards','-moz-animation':'fallPerspectiveCPND 0.8s ease-in-out forwards'});
										}
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'animation':'fallPerspectiveCPND 0.8s ease-in-out forwards','-webkit-animation':'fallPerspectiveCPND 0.8s ease-in-out forwards','-moz-animation':'fallPerspectiveCPND 0.8s ease-in-out forwards'});
										jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').css({'animation':'fallPerspectiveCPND 0.8s ease-in-out forwards','-webkit-animation':'fallPerspectiveCPND 0.8s ease-in-out forwards','-moz-animation':'fallPerspectiveCPND 0.8s ease-in-out forwards'});
										jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').css({'animation':'fallPerspectiveCPND 0.8s ease-in-out forwards','-webkit-animation':'fallPerspectiveCPND 0.8s ease-in-out forwards','-moz-animation':'fallPerspectiveCPND 0.8s ease-in-out forwards'});
									},500)
									if(jQuery(window).width()<=530)
										{
											jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'98%','padding-bottom':'0px','height':'310px','border-radius':'0','top':'50%','left':'50%','opacity':'0','animation':'fadeIn 0.65s ease forwards','-webkit-animation':'fadeIn 0.65s ease forwards','-moz-animation':'fadeIn 0.65s ease forwards'});
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0%'});
											if(jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').find('.popDescr').text()==""){
												jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0','top':'76%'});
												jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'height':'270px'},500);
												jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'60%'});
											      }else{
											      jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'120px','top':'60%'});
											      jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'height':'420px'},500);
											      jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'47%'});
											  }
										}
									setTimeout(function(){jQuery('.fResp').css('opacity','1');},1000);
									setTimeout(function(){
										jQuery('.TotalSoft_GV_CP_Pop_load_'+TotalSoftGV_CP_ID).css('display','none');
									},1000)
								}
								else if(TotalSoft_GV_CP_PoM == 'mode05')
								{
									if(b[5] != '')
									{
										if(b[5].indexOf("start")===-1){
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').attr('src',b[5]+'?rel=0;iv_load_policy=3');
										}else{jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').attr('src',b[5]+'&rel=0;iv_load_policy=3');}
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').css('display','none');
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').css('display','block');
									}
									else
									{
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').attr('src',b[6]);
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').css('display','block');
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').css('display','none');
									}
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').html(b[1]);
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').html(b[2]);
									setTimeout(function(){
										if(b[3])
										{
											jQuery('.frsp a').css('display','initial');
											if(b[4]=='true')
											{
												jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3 a').attr('target','_blank');
											}
											jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3 a').attr('href',b[3]);
											jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3').css({'animation':'flyCPND 0.8s ease-in-out forwards','-webkit-animation':'flyCPND 0.8s ease-in-out forwards','-moz-animation':'flyCPND 0.8s ease-in-out forwards'});
										}
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'animation':'flyCPND 0.8s ease-in-out forwards','-webkit-animation':'flyCPND 0.8s ease-in-out forwards','-moz-animation':'flyCPND 0.8s ease-in-out forwards'});
										jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').css({'animation':'flyCPND 0.8s ease-in-out forwards','-webkit-animation':'flyCPND 0.8s ease-in-out forwards','-moz-animation':'flyCPND 0.8s ease-in-out forwards'});
										jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').css({'animation':'flyCPND 0.8s ease-in-out forwards','-webkit-animation':'flyCPND 0.8s ease-in-out forwards','-moz-animation':'flyCPND 0.8s ease-in-out forwards'});
									},500)
									if(jQuery(window).width()<=530)
										{
											jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'98%','padding-bottom':'0px','height':'310px','border-radius':'0','top':'50%','left':'50%','opacity':'0','animation':'fadeIn 0.65s ease forwards','-webkit-animation':'fadeIn 0.65s ease forwards','-moz-animation':'fadeIn 0.65s ease forwards'});
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0%'});
											if(jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').find('.popDescr').text()==""){
												jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0','top':'76%'});
												jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'height':'270px'},500);
												jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'60%'});
											      }else{
											      jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'120px','top':'60%'});
											      jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'height':'420px'},500);
											      jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'47%'});
											  }
										}
									setTimeout(function(){jQuery('.fResp').css('opacity','1');},1000);
									setTimeout(function(){
										jQuery('.TotalSoft_GV_CP_Pop_load_'+TotalSoftGV_CP_ID).css('display','none');
									},1000)
								}
								else if(TotalSoft_GV_CP_PoM == 'mode06')
								{
									if(b[5] != '')
									{
										if(b[5].indexOf("start")===-1){
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').attr('src',b[5]+'?rel=0;iv_load_policy=3');
										}else{jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').attr('src',b[5]+'&rel=0;iv_load_policy=3');}
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').css('display','none');
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').css('display','block');
									}
									else
									{
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').attr('src',b[6]);
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').css('display','block');
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').css('display','none');
									}
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').html(b[1]);
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').html(b[2]);
									setTimeout(function(){
										if(b[3])
										{
											jQuery('.frsp a').css('display','initial');
											if(b[4]=='true')
											{
												jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3 a').attr('target','_blank');
											}
											jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3 a').attr('href',b[3]);
											jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3').css({'animation':'flipCPND 0.8s ease-in-out forwards','-webkit-animation':'flipCPND 0.8s ease-in-out forwards','-moz-animation':'flipCPND 0.8s ease-in-out forwards'});
										}
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'animation':'flipCPND 0.8s ease-in-out forwards','-webkit-animation':'flipCPND 0.8s ease-in-out forwards','-moz-animation':'flipCPND 0.8s ease-in-out forwards'});
										jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').css({'animation':'flipCPND 0.8s ease-in-out forwards','-webkit-animation':'flipCPND 0.8s ease-in-out forwards','-moz-animation':'flipCPND 0.8s ease-in-out forwards'});
										jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').css({'animation':'flipCPND 0.8s ease-in-out forwards','-webkit-animation':'flipCPND 0.8s ease-in-out forwards','-moz-animation':'flipCPND 0.8s ease-in-out forwards'});
									},500)
									if(jQuery(window).width()<=530)
										{
											jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'98%','padding-bottom':'0px','height':'310px','border-radius':'0','top':'50%','left':'50%','opacity':'0','animation':'fadeIn 0.65s ease forwards','-webkit-animation':'fadeIn 0.65s ease forwards','-moz-animation':'fadeIn 0.65s ease forwards'});
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0%'});
											if(jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').find('.popDescr').text()==""){
												jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0','top':'76%'});
												jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'height':'270px'},500);
												jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'60%'});
											      }else{
											      jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'120px','top':'60%'});
											      jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'height':'420px'},500);
											      jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'47%'});
											  }
										}
									setTimeout(function(){jQuery('.fResp').css('opacity','1');},1000);
									setTimeout(function(){
										jQuery('.TotalSoft_GV_CP_Pop_load_'+TotalSoftGV_CP_ID).css('display','none');
									},1000)
								}
								else if(TotalSoft_GV_CP_PoM == 'mode07')
								{
									if(b[5] != '')
									{
										if(b[5].indexOf("start")===-1){
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').attr('src',b[5]+'?rel=0;iv_load_policy=3');
										}else{jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').attr('src',b[5]+'&rel=0;iv_load_policy=3');}
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').css('display','none');
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').css('display','block');
									}
									else
									{
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').attr('src',b[6]);
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').css('display','block');
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').css('display','none');
									}
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').html(b[1]);
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').html(b[2]);
									setTimeout(function(){
										if(b[3])
										{
											jQuery('.frsp a').css('display','initial');
											if(b[4]=='true')
											{
												jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3 a').attr('target','_blank');
											}
											jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3 a').attr('href',b[3]);
											jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3').css({'animation':'helixCPND 0.8s ease-in-out forwards','-webkit-animation':'helixCPND 0.8s ease-in-out forwards','-moz-animation':'helixCPND 0.8s ease-in-out forwards'});
										}
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'animation':'helixCPND 0.8s ease-in-out forwards','-webkit-animation':'helixCPND 0.8s ease-in-out forwards','-moz-animation':'helixCPND 0.8s ease-in-out forwards'});
										jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').css({'animation':'helixCPND 0.8s ease-in-out forwards','-webkit-animation':'helixCPND 0.8s ease-in-out forwards','-moz-animation':'helixCPND 0.8s ease-in-out forwards'});
										jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').css({'animation':'helixCPND 0.8s ease-in-out forwards','-webkit-animation':'helixCPND 0.8s ease-in-out forwards','-moz-animation':'helixCPND 0.8s ease-in-out forwards'});
									},500)
									if(jQuery(window).width()<=530)
										{
											jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'98%','padding-bottom':'0px','height':'310px','border-radius':'0','top':'50%','left':'50%','opacity':'0','animation':'fadeIn 0.65s ease forwards','-webkit-animation':'fadeIn 0.65s ease forwards','-moz-animation':'fadeIn 0.65s ease forwards'});
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0%'});
											if(jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').find('.popDescr').text()==""){
												jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0','top':'76%'});
												jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'height':'270px'},500);
												jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'60%'});
											      }else{
											      jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'120px','top':'60%'});
											      jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'height':'420px'},500);
											      jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'47%'});
											  }
										}
									setTimeout(function(){jQuery('.fResp').css('opacity','1');},1000);
									setTimeout(function(){
										jQuery('.TotalSoft_GV_CP_Pop_load_'+TotalSoftGV_CP_ID).css('display','none');
									},1000)
								}
								else if(TotalSoft_GV_CP_PoM == 'mode08')
								{
									if(b[5] != '')
									{
										if(b[5].indexOf("start")===-1){
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').attr('src',b[5]+'?rel=0;iv_load_policy=3');
										}else{jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').attr('src',b[5]+'&rel=0;iv_load_policy=3');}
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').css('display','none');
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').css('display','block');
									}
									else
									{
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').attr('src',b[6]);
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').css('display','block');
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').css('display','none');
									}
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').html(b[1]);
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').html(b[2]);
									setTimeout(function(){
										if(b[3])
										{
											jQuery('.frsp a').css('display','initial');
											if(b[4]=='true')
											{
												jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3 a').attr('target','_blank');
											}
											jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3 a').attr('href',b[3]);
											jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3').css({'animation':'popUpCPPD 0.8s ease-in forwards','-webkit-animation':'popUpCPPD 0.8s ease-in forwards','-moz-animation':'popUpCPPD 0.8s ease-in forwards'});
										}
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'animation':'popUpCPPD 0.8s ease-in forwards','-webkit-animation':'popUpCPPD 0.8s ease-in forwards','-moz-animation':'popUpCPPD 0.8s ease-in forwards'});
										jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').css({'animation':'popUpCPPD 0.8s ease-in forwards','-webkit-animation':'popUpCPPD 0.8s ease-in forwards','-moz-animation':'popUpCPPD 0.8s ease-in forwards'});
										jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').css({'animation':'popUpCPPD 0.8s ease-in forwards','-webkit-animation':'popUpCPPD 0.8s ease-in forwards','-moz-animation':'popUpCPPD 0.8s ease-in forwards'});
									},500)
									if(jQuery(window).width()<=530)
										{
											jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'98%','padding-bottom':'0px','height':'310px','border-radius':'0','top':'50%','left':'50%','opacity':'0','animation':'fadeIn 0.65s ease forwards','-webkit-animation':'fadeIn 0.65s ease forwards','-moz-animation':'fadeIn 0.65s ease forwards'});
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0%'});
											if(jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').find('.popDescr').text()==""){
												jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0','top':'76%'});
												jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'height':'270px'},500);
												jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'60%'});
											      }else{
											      jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'120px','top':'60%'});
											      jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'height':'420px'},500);
											      jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'47%'});
											  }
										}
									setTimeout(function(){jQuery('.fResp').css('opacity','1');},1000);
									setTimeout(function(){
										jQuery('.TotalSoft_GV_CP_Pop_load_'+TotalSoftGV_CP_ID).css('display','none');
									},1000)
								}
							}
						});
					}
					function TotalSoft_GV_CP_Right<?php echo $Total_Soft_Gallery_Video;?>(TotalSoftGV_CP_ID)
					{
						var TotalSoft_GV_CP_VID=jQuery('#TotalSoft_GV_CP_VID_'+TotalSoftGV_CP_ID).val();
						var TotalSoft_GV_CP_PoM = jQuery('#TotalSoft_GV_CP_PoM_'+TotalSoftGV_CP_ID).val();
						jQuery.ajax({
							type: 'POST',
							url: object.ajaxurl,
							data: {
								action: 'TotalSoftGallery_Video_CP_Popup_Right', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
								foobar: TotalSoft_GV_CP_VID, // translates into $_POST['foobar'] in PHP
							},
							beforeSend: function(){
								jQuery('.TotalSoft_GV_CP_Pop_load_'+TotalSoftGV_CP_ID).css('display','block');
								jQuery('.frsp a').css('display','none');
								jQuery('.fResp').animate({'opacity':'0'},500);
								if(TotalSoft_GV_CP_PoM == '')
								{
									jQuery('.TotalSoft_GV_CP_TD p').animate({'padding':'0'},500);
									setTimeout(function(){jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').show()},1000);
									jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'transform':'translateX(-12000px)','-ms-transform': 'translateX(-12000px)', '-o-transform': 'translateX(-12000px)','-moz-transform': 'translateX(-12000px)','-webkit-transform': 'translateX(-12000px)'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').css({'transform':'translateX(12000px)','-ms-transform': 'translateX(12000px)', '-o-transform': 'translateX(12000px)','-moz-transform': 'translateX(12000px)','-webkit-transform': 'translateX(12000px)'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').css({'transform':'translateX(12000px)','-ms-transform': 'translateX(12000px)', '-o-transform': 'translateX(12000px)','-moz-transform': 'translateX(12000px)','-webkit-transform': 'translateX(12000px)'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3').css({'transform':'translateX(12000px)','-ms-transform': 'translateX(12000px)', '-o-transform': 'translateX(12000px)','-moz-transform': 'translateX(12000px)','-webkit-transform': 'translateX(12000px)'});
								}
								else if(TotalSoft_GV_CP_PoM == 'mode01')
								{
									jQuery('.TotalSoft_GV_CP_TD p').animate({'padding':'0'},500);
									jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'opacity':'1','animation':'fadeOut 0.65s ease forwards','-webkit-animation':'fadeOut 0.65s ease forwards','-moz-animation':'fadeOut 0.65s ease forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').css({'opacity':'1','animation':'fadeOut 0.65s ease forwards','-webkit-animation':'fadeOut 0.65s ease forwards','-moz-animation':'fadeOut 0.65s ease forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').css({'opacity':'1','animation':'fadeOut 0.65s ease forwards','-webkit-animation':'fadeOut 0.65s ease forwards','-moz-animation':'fadeOut 0.65s ease forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3').css({'opacity':'1','animation':'fadeOut 0.65s ease forwards','-webkit-animation':'fadeOut 0.65s ease forwards','-moz-animation':'fadeOut 0.65s ease forwards'});
									
								}
								else if(TotalSoft_GV_CP_PoM == 'mode02')
								{
                                    jQuery('.TotalSoft_GV_CP_TD p').animate({'padding':'0'},500);
									jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'animation':'moveUpCPPU 0.65s ease forwards','-webkit-animation':'moveUpCPPU 0.65s ease forwards','-moz-animation':'moveUpCPPU 0.65s ease forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').css({'animation':'moveUpCPPU 0.65s ease forwards','-webkit-animation':'moveUpCPPU 0.65s ease forwards','-moz-animation':'moveUpCPPU 0.65s ease forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').css({'animation':'moveUpCPPU 0.65s ease forwards','-webkit-animation':'moveUpCPPU 0.65s ease forwards','-moz-animation':'moveUpCPPU 0.65s ease forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3').css({'animation':'moveUpCPPU 0.65s ease forwards','-webkit-animation':'moveUpCPPU 0.65s ease forwards','-moz-animation':'moveUpCPPU 0.65s ease forwards'});
									
                                   
								}
								else if(TotalSoft_GV_CP_PoM == 'mode03')
								{
									jQuery('.TotalSoft_GV_CP_TD p').animate({'padding':'0'},500);
									jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'animation':'scaleUpCPPU 0.65s ease-in-out forwards','-webkit-animation':'scaleUpCPPU 0.65s ease-in-out forwards','-moz-animation':'scaleUpCPPU 0.65s ease-in-out forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').css({'animation':'scaleUpCPPU 0.65s ease-in-out forwards','-webkit-animation':'scaleUpCPPU 0.65s ease-in-out forwards','-moz-animation':'scaleUpCPPU 0.65s ease-in-out forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').css({'animation':'scaleUpCPPU 0.65s ease-in-out forwards','-webkit-animation':'scaleUpCPPU 0.65s ease-in-out forwards','-moz-animation':'scaleUpCPPU 0.65s ease-in-out forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3').css({'animation':'scaleUpCPPU 0.65s ease-in-out forwards','-webkit-animation':'scaleUpCPPU 0.65s ease-in-out forwards','-moz-animation':'scaleUpCPPU 0.65s ease-in-out forwards'});
								}
								else if(TotalSoft_GV_CP_PoM == 'mode04')
								{

									jQuery('.TotalSoft_GV_CP_TD p').animate({'padding':'0'},500);
									jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'animation':'fallPerspectiveCPNU 0.8s ease-in-out forwards','-webkit-animation':'fallPerspectiveCPNU 0.8s ease-in-out forwards','-moz-animation':'fallPerspectiveCPNU 0.8s ease-in-out forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').css({'animation':'fallPerspectiveCPNU 0.8s ease-in-out forwards','-webkit-animation':'fallPerspectiveCPNU 0.8s ease-in-out forwards','-moz-animation':'fallPerspectiveCPNU 0.8s ease-in-out forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').css({'animation':'fallPerspectiveCPNU 0.8s ease-in-out forwards','-webkit-animation':'fallPerspectiveCPNU 0.8s ease-in-out forwards','-moz-animation':'fallPerspectiveCPNU 0.8s ease-in-out forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3').css({'animation':'fallPerspectiveCPNU 0.8s ease-in-out forwards','-webkit-animation':'fallPerspectiveCPNU 0.8s ease-in-out forwards','-moz-animation':'fallPerspectiveCPNU 0.8s ease-in-out forwards'});
								}
								else if(TotalSoft_GV_CP_PoM == 'mode05')
								{
									jQuery('.TotalSoft_GV_CP_TD p').animate({'padding':'0'},500);
									jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'animation':'flyCPNU 0.8s ease-in-out forwards','-webkit-animation':'flyCPNU 0.8s ease-in-out forwards','-moz-animation':'flyCPNU 0.8s ease-in-out forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').css({'animation':'flyCPNU 0.8s ease-in-out forwards','-webkit-animation':'flyCPNU 0.8s ease-in-out forwards','-moz-animation':'flyCPNU 0.8s ease-in-out forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').css({'animation':'flyCPNU 0.8s ease-in-out forwards','-webkit-animation':'flyCPNU 0.8s ease-in-out forwards','-moz-animation':'flyCPNU 0.8s ease-in-out forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3').css({'animation':'flyCPNU 0.8s ease-in-out forwards','-webkit-animation':'flyCPNU 0.8s ease-in-out forwards','-moz-animation':'flyCPNU 0.8s ease-in-out forwards'});
								}
								else if(TotalSoft_GV_CP_PoM == 'mode06')
								{
									jQuery('.TotalSoft_GV_CP_TD p').animate({'padding':'0'},500);
									jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'animation':'flipCPNU 0.8s ease-in-out forwards','-webkit-animation':'flipCPNU 0.8s ease-in-out forwards','-moz-animation':'flipCPNU 0.8s ease-in-out forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').css({'animation':'flipCPNU 0.8s ease-in-out forwards','-webkit-animation':'flipCPNU 0.8s ease-in-out forwards','-moz-animation':'flipCPNU 0.8s ease-in-out forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').css({'animation':'flipCPNU 0.8s ease-in-out forwards','-webkit-animation':'flipCPNU 0.8s ease-in-out forwards','-moz-animation':'flipCPNU 0.8s ease-in-out forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3').css({'animation':'flipCPNU 0.8s ease-in-out forwards','-webkit-animation':'flipCPNU 0.8s ease-in-out forwards','-moz-animation':'flipCPNU 0.8s ease-in-out forwards'});
								}
								else if(TotalSoft_GV_CP_PoM == 'mode07')
								{
									jQuery('.TotalSoft_GV_CP_TD p').animate({'padding':'0'},500);
									jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'animation':'helixCPNU 0.8s ease-in-out forwards','-webkit-animation':'helixCPNU 0.8s ease-in-out forwards','-moz-animation':'helixCPNU 0.8s ease-in-out forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').css({'animation':'helixCPNU 0.8s ease-in-out forwards','-webkit-animation':'helixCPNU 0.8s ease-in-out forwards','-moz-animation':'helixCPNU 0.8s ease-in-out forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').css({'animation':'helixCPNU 0.8s ease-in-out forwards','-webkit-animation':'helixCPNU 0.8s ease-in-out forwards','-moz-animation':'helixCPNU 0.8s ease-in-out forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3').css({'animation':'helixCPNU 0.8s ease-in-out forwards','-webkit-animation':'helixCPNU 0.8s ease-in-out forwards','-moz-animation':'helixCPNU 0.8s ease-in-out forwards'});
								}
								else if(TotalSoft_GV_CP_PoM == 'mode08')
								{
									jQuery('.TotalSoft_GV_CP_TD p').animate({'padding':'0'},500);
									jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'animation':'popUpCPPU 0.8s ease-in forwards','-webkit-animation':'popUpCPPU 0.8s ease-in forwards','-moz-animation':'popUpCPPU 0.8s ease-in forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').css({'animation':'popUpCPPU 0.8s ease-in forwards','-webkit-animation':'popUpCPPU 0.8s ease-in forwards','-moz-animation':'popUpCPPU 0.8s ease-in forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').css({'animation':'popUpCPPU 0.8s ease-in forwards','-webkit-animation':'popUpCPPU 0.8s ease-in forwards','-moz-animation':'popUpCPPU 0.8s ease-in forwards'});
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3').css({'animation':'popUpCPPU 0.8s ease-in forwards','-webkit-animation':'popUpCPPU 0.8s ease-in forwards','-moz-animation':'popUpCPPU 0.8s ease-in forwards'});
								}
							},
							success: function(response){
								var b=Array();
								var a=response.split('=>');
								for(var i=1;i<a.length;i++)
								{ b[b.length]=a[i].split('[')[0].trim(); }
								b[b.length-1]=b[b.length-1].split(')')[0].trim();
								jQuery('#TotalSoft_GV_CP_VID_'+TotalSoftGV_CP_ID).val(b[0]);
								if(TotalSoft_GV_CP_PoM == '')
								{
									if(b[5] != '')
									{
										if(b[5].indexOf("start")===-1){
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').attr('src',b[5]+'?rel=0;iv_load_policy=3');
										}else{jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').attr('src',b[5]+'&rel=0;iv_load_policy=3');}
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').css('display','none');
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').css('display','block');
									}
									else
									{
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').attr('src',b[6]);
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').css('display','block');
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').css('display','none');
									}
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').html(b[1]);
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').html(b[2]);
									jQuery('.TotalSoft_GV_CP_TD p').animate({'padding-top':'10px','padding-bottom':'10px'},500);
									setTimeout(function(){
										jQuery('.TotalSoft_GV_CP_Pop_Icons<?php echo $Total_Soft_Gallery_Video;?>').animate({'height':'40px',},500);
										if(b[3])
										{
											jQuery('.frsp a').css('display','initial');
											jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3 a').css('display','initial');
											if(b[4]=='true')
											{
												jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3 a').attr('target','_blank');
											}
											jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3 a').attr('href',b[3]);
											jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3').css({'transform':'translateX(0px)','-ms-transform': 'translateX(0px)', '-o-transform': 'translateX(0px)','-moz-transform': 'translateX(0px)','-webkit-transform': 'translateX(0px)'});
										}
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'transform':'translateX(0px)','-ms-transform': 'translateX(0px)', '-o-transform': 'translateX(0px)','-moz-transform': 'translateX(0px)','-webkit-transform': 'translateX(0px)'});
										jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').css({'transform':'translateX(0px)','-ms-transform': 'translateX(0px)', '-o-transform': 'translateX(0px)','-moz-transform': 'translateX(0px)','-webkit-transform': 'translateX(0px)'});
										jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').css({'transform':'translateX(0px)','-ms-transform': 'translateX(0px)', '-o-transform': 'translateX(0px)','-moz-transform': 'translateX(0px)','-webkit-transform': 'translateX(0px)'});
									},500)
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').html(b[1]);
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').html(b[2]);
									if(jQuery(window).width()<=530)
										{
											jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'98%','padding-bottom':'0px','height':'310px','border-radius':'0','top':'50%','left':'50%','opacity':'0','animation':'fadeIn 0.65s ease forwards','-webkit-animation':'fadeIn 0.65s ease forwards','-moz-animation':'fadeIn 0.65s ease forwards'});
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0%'});
											if(jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').find('.popDescr').text()==""){
												jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0','top':'76%'});
												jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'height':'270px'},500);
												jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'60%'});
											      }else{
											      jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'120px','top':'60%'});
											      jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'height':'420px'},500);
											      jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'47%'});
											  }
										}
										setTimeout(function(){jQuery('.fResp').css('opacity','1');},1000);
									setTimeout(function(){
										jQuery('.TotalSoft_GV_CP_Pop_load_'+TotalSoftGV_CP_ID).css('display','none');
									},1000)
								}
								else if(TotalSoft_GV_CP_PoM == 'mode01')
								{

									if(b[5] != '')
									{
										if(b[5].indexOf("start")===-1){
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').attr('src',b[5]+'?rel=0;iv_load_policy=3');
										}else{jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').attr('src',b[5]+'&rel=0;iv_load_policy=3');}
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').css('display','none');
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').css('display','block');
										jQuery('.TotalSoft_GV_CP_TD p').animate({'padding-top':'10px','padding-bottom':'10px'},500);
									}
									else
									{
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').attr('src',b[6]);
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').css('display','block');
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').css('display','none');
									}
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').html(b[1]);
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').html(b[2]);
									setTimeout(function(){
										if(b[3])
										{
											jQuery('.frsp a').css('display','initial');
											jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3 a').css('display','initial');
											if(b[4]=='true')
											{
												jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3 a').attr('target','_blank');
											}
											jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3 a').attr('href',b[3]);
											jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3').css({'opacity':'0','animation':'fadeIn 0.65s ease forwards','-webkit-animation':'fadeIn 0.65s ease forwards','-moz-animation':'fadeIn 0.65s ease forwards'});
										}
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'opacity':'0','animation':'fadeIn 0.65s ease forwards','-webkit-animation':'fadeIn 0.65s ease forwards','-moz-animation':'fadeIn 0.65s ease forwards'});
										jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').css({'opacity':'0','animation':'fadeIn 0.65s ease forwards','-webkit-animation':'fadeIn 0.65s ease forwards','-moz-animation':'fadeIn 0.65s ease forwards'});
										jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').css({'opacity':'0','animation':'fadeIn 0.65s ease forwards','-webkit-animation':'fadeIn 0.65s ease forwards','-moz-animation':'fadeIn 0.65s ease forwards'});
										},500)
									if(jQuery(window).width()<=530)
										{
											jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'98%','padding-bottom':'0px','height':'310px','border-radius':'0','top':'50%','left':'50%','opacity':'0','animation':'fadeIn 0.65s ease forwards','-webkit-animation':'fadeIn 0.65s ease forwards','-moz-animation':'fadeIn 0.65s ease forwards'});
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0%'});
											if(jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').find('.popDescr').text()==""){
												jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0','top':'76%'});
												jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'height':'270px'},500);
												jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'60%'});
											      }else{
											      jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'120px','top':'60%'});
											      jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'height':'420px'},500);
											      jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'47%'});
											  }
										}
									setTimeout(function(){jQuery('.fResp').css('opacity','1');},1000);
									setTimeout(function(){
										jQuery('.TotalSoft_GV_CP_Pop_load_'+TotalSoftGV_CP_ID).css('display','none');
									},1000)
								}
								else if(TotalSoft_GV_CP_PoM == 'mode02')
								{
									if(b[5] != '')
									{
										if(b[5].indexOf("start")===-1){
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').attr('src',b[5]+'?rel=0;iv_load_policy=3');
										}else{jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').attr('src',b[5]+'&rel=0;iv_load_policy=3');}
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').css('display','none');
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').css('display','block');
									}
									else
									{
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').attr('src',b[6]);
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').css('display','block');
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').css('display','none');
									}
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').html(b[1]);
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').html(b[2]);

									setTimeout(function(){
										if(b[3])
										{
											jQuery('.frsp a').css('display','initial');
											jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3 a').css('display','initial');
											if(b[4]=='true')
											{
												jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3 a').attr('target','_blank');
											}
											jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3 a').attr('href',b[3]);
											jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3').css({'animation':'moveUpCPPD 0.65s ease forwards','-webkit-animation':'moveUpCPPD 0.65s ease forwards','-moz-animation':'moveUpCPPD 0.65s ease forwards'});
										}
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'animation':'moveUpCPPD 0.65s ease forwards','-webkit-animation':'moveUpCPPD 0.65s ease forwards','-moz-animation':'moveUpCPPD 0.65s ease forwards'});
										jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').css({'animation':'moveUpCPPD 0.65s ease forwards','-webkit-animation':'moveUpCPPD 0.65s ease forwards','-moz-animation':'moveUpCPPD 0.65s ease forwards'});
										jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').css({'animation':'moveUpCPPD 0.65s ease forwards','-webkit-animation':'moveUpCPPD 0.65s ease forwards','-moz-animation':'moveUpCPPD 0.65s ease forwards'});
									},500)
									if(jQuery(window).width()<=530)
										{
											jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'98%','padding-bottom':'0px','height':'310px','border-radius':'0','top':'40%','left':'50%','opacity':'0','animation':'fadeIn 0.65s ease forwards','-webkit-animation':'fadeIn 0.65s ease forwards','-moz-animation':'fadeIn 0.65s ease forwards'});
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0%'});
											if(jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').find('.popDescr').text()==""){
												jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0','top':'76%'});
												jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'height':'270px'},500);
												jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'60%'});
											      }else{
											      jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'120px','top':'60%'});
											      jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'height':'420px'},500);
											      jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'47%'});
											  }
										}
										setTimeout(function(){jQuery('.fResp').css('opacity','1');},1000);
									setTimeout(function(){
										jQuery('.TotalSoft_GV_CP_Pop_load_'+TotalSoftGV_CP_ID).css('display','none');
									},1000)
									
								}
								else if(TotalSoft_GV_CP_PoM == 'mode03')
								{
									if(b[5] != '')
									{
										if(b[5].indexOf("start")===-1){
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').attr('src',b[5]+'?rel=0;iv_load_policy=3');
										}else{jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').attr('src',b[5]+'&rel=0;iv_load_policy=3');}
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').css('display','none');
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').css('display','block');
									}
									else
									{
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').attr('src',b[6]);
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').css('display','block');
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').css('display','none');
									}
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').html(b[1]);
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').html(b[2]);
									setTimeout(function(){
										if(b[3])
										{
											jQuery('.frsp a').css('display','initial');
											if(b[4]=='true')
											{
												jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3 a').attr('target','_blank');
											}
											jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3 a').attr('href',b[3]);
											jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3').css({'animation':'scaleUpCPPD 0.65s ease-in-out forwards','-webkit-animation':'scaleUpCPPD 0.65s ease-in-out forwards','-moz-animation':'scaleUpCPPD 0.65s ease-in-out forwards'});
										}
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'animation':'scaleUpCPPD 0.65s ease-in-out forwards','-webkit-animation':'scaleUpCPPD 0.65s ease-in-out forwards','-moz-animation':'scaleUpCPPD 0.65s ease-in-out forwards'});
										jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').css({'animation':'scaleUpCPPD 0.65s ease-in-out forwards','-webkit-animation':'scaleUpCPPD 0.65s ease-in-out forwards','-moz-animation':'scaleUpCPPD 0.65s ease-in-out forwards'});
										jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').css({'animation':'scaleUpCPPD 0.65s ease-in-out forwards','-webkit-animation':'scaleUpCPPD 0.65s ease-in-out forwards','-moz-animation':'scaleUpCPPD 0.65s ease-in-out forwards'});
									},500)
									if(jQuery(window).width()<=530)
										{
											jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'98%','padding-bottom':'0px','height':'310px','border-radius':'0','top':'50%','left':'50%','opacity':'0','animation':'fadeIn 0.65s ease forwards','-webkit-animation':'fadeIn 0.65s ease forwards','-moz-animation':'fadeIn 0.65s ease forwards'});
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0%'});
											if(jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').find('.popDescr').text()==""){
												jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0','top':'76%'});
												jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'height':'270px'},500);
												jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'60%'});
											      }else{
											      jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'120px','top':'60%'});
											      jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'height':'420px'},500);
											      jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'47%'});
											  }
										}
										setTimeout(function(){jQuery('.fResp').css('opacity','1');},1000);
									setTimeout(function(){
										jQuery('.TotalSoft_GV_CP_Pop_load_'+TotalSoftGV_CP_ID).css('display','none');
									},1000)
								}
								else if(TotalSoft_GV_CP_PoM == 'mode04')
								{
									if(b[5] != '')
									{
										if(b[5].indexOf("start")===-1){
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').attr('src',b[5]+'?rel=0;iv_load_policy=3');
										}else{jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').attr('src',b[5]+'&rel=0;iv_load_policy=3');}
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').css('display','none');
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').css('display','block');
									}
									else
									{
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').attr('src',b[6]);
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').css('display','block');
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').css('display','none');
									}
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').html(b[1]);
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').html(b[2]);
									setTimeout(function(){
										if(b[3])
										{
											jQuery('.frsp a').css('display','initial');
											if(b[4]=='true')
											{
												jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3 a').attr('target','_blank');
											}
											jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3 a').attr('href',b[3]);
											jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3').css({'animation':'fallPerspectiveCPND 0.8s ease-in-out forwards','-webkit-animation':'fallPerspectiveCPND 0.8s ease-in-out forwards','-moz-animation':'fallPerspectiveCPND 0.8s ease-in-out forwards'});
										}
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'animation':'fallPerspectiveCPND 0.8s ease-in-out forwards','-webkit-animation':'fallPerspectiveCPND 0.8s ease-in-out forwards','-moz-animation':'fallPerspectiveCPND 0.8s ease-in-out forwards'});
										jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').css({'animation':'fallPerspectiveCPND 0.8s ease-in-out forwards','-webkit-animation':'fallPerspectiveCPND 0.8s ease-in-out forwards','-moz-animation':'fallPerspectiveCPND 0.8s ease-in-out forwards'});
										jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').css({'animation':'fallPerspectiveCPND 0.8s ease-in-out forwards','-webkit-animation':'fallPerspectiveCPND 0.8s ease-in-out forwards','-moz-animation':'fallPerspectiveCPND 0.8s ease-in-out forwards'});
									},500)
									if(jQuery(window).width()<=530)
										{
											jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'98%','padding-bottom':'0px','height':'310px','border-radius':'0','top':'50%','left':'50%','opacity':'0','animation':'fadeIn 0.65s ease forwards','-webkit-animation':'fadeIn 0.65s ease forwards','-moz-animation':'fadeIn 0.65s ease forwards'});
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0%'});
											if(jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').find('.popDescr').text()==""){
												jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0','top':'76%'});
												jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'height':'270px'},500);
												jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'60%'});
											      }else{
											      jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'120px','top':'60%'});
											      jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'height':'420px'},500);
											      jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'47%'});
											  }
										}
										setTimeout(function(){jQuery('.fResp').css('opacity','1');},1000);
									setTimeout(function(){
										jQuery('.TotalSoft_GV_CP_Pop_load_'+TotalSoftGV_CP_ID).css('display','none');
									},1000)
								}
								else if(TotalSoft_GV_CP_PoM == 'mode05')
								{
									if(b[5] != '')
									{
										if(b[5].indexOf("start")===-1){
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').attr('src',b[5]+'?rel=0;iv_load_policy=3');
										}else{jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').attr('src',b[5]+'&rel=0;iv_load_policy=3');}
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').css('display','none');
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').css('display','block');
									}
									else
									{
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').attr('src',b[6]);
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').css('display','block');
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').css('display','none');
									}
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').html(b[1]);
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').html(b[2]);
									setTimeout(function(){
										if(b[3])
										{
											jQuery('.frsp a').css('display','initial');
											if(b[4]=='true')
											{
												jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3 a').attr('target','_blank');
											}
											jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3 a').attr('href',b[3]);
											jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3').css({'animation':'flyCPND 0.8s ease-in-out forwards','-webkit-animation':'flyCPND 0.8s ease-in-out forwards','-moz-animation':'flyCPND 0.8s ease-in-out forwards'});
										}
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'animation':'flyCPND 0.8s ease-in-out forwards','-webkit-animation':'flyCPND 0.8s ease-in-out forwards','-moz-animation':'flyCPND 0.8s ease-in-out forwards'});
										jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').css({'animation':'flyCPND 0.8s ease-in-out forwards','-webkit-animation':'flyCPND 0.8s ease-in-out forwards','-moz-animation':'flyCPND 0.8s ease-in-out forwards'});
										jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').css({'animation':'flyCPND 0.8s ease-in-out forwards','-webkit-animation':'flyCPND 0.8s ease-in-out forwards','-moz-animation':'flyCPND 0.8s ease-in-out forwards'});
									},500)
									if(jQuery(window).width()<=530)
										{
											jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'98%','padding-bottom':'0px','height':'310px','border-radius':'0','top':'50%','left':'50%','opacity':'0','animation':'fadeIn 0.65s ease forwards','-webkit-animation':'fadeIn 0.65s ease forwards','-moz-animation':'fadeIn 0.65s ease forwards'});
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0%'});
											if(jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').find('.popDescr').text()==""){
												jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0','top':'76%'});
												jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'height':'270px'},500);
												jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'60%'});
											      }else{
											      jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'120px','top':'60%'});
											      jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'height':'420px'},500);
											      jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'47%'});
											  }
										}
										setTimeout(function(){jQuery('.fResp').css('opacity','1');},1000);
									setTimeout(function(){
										jQuery('.TotalSoft_GV_CP_Pop_load_'+TotalSoftGV_CP_ID).css('display','none');
									},1000)
								}
								else if(TotalSoft_GV_CP_PoM == 'mode06')
								{
									if(b[5] != '')
									{
										if(b[5].indexOf("start")===-1){
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').attr('src',b[5]+'?rel=0;iv_load_policy=3');
										}else{jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').attr('src',b[5]+'&rel=0;iv_load_policy=3');}
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').css('display','none');
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').css('display','block');
									}
									else
									{
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').attr('src',b[6]);
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').css('display','block');
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').css('display','none');
									}
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').html(b[1]);
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').html(b[2]);
									setTimeout(function(){
										if(b[3])
										{
											jQuery('.frsp a').css('display','initial');
											if(b[4]=='true')
											{
												jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3 a').attr('target','_blank');
											}
											jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3 a').attr('href',b[3]);
											jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3').css({'animation':'flipCPND 0.8s ease-in-out forwards','-webkit-animation':'flipCPND 0.8s ease-in-out forwards','-moz-animation':'flipCPND 0.8s ease-in-out forwards'});
										}
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'animation':'flipCPND 0.8s ease-in-out forwards','-webkit-animation':'flipCPND 0.8s ease-in-out forwards','-moz-animation':'flipCPND 0.8s ease-in-out forwards'});
										jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').css({'animation':'flipCPND 0.8s ease-in-out forwards','-webkit-animation':'flipCPND 0.8s ease-in-out forwards','-moz-animation':'flipCPND 0.8s ease-in-out forwards'});
										jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').css({'animation':'flipCPND 0.8s ease-in-out forwards','-webkit-animation':'flipCPND 0.8s ease-in-out forwards','-moz-animation':'flipCPND 0.8s ease-in-out forwards'});
									},500)
									if(jQuery(window).width()<=530)
										{
											jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'98%','padding-bottom':'0px','height':'310px','border-radius':'0','top':'50%','left':'50%','opacity':'0','animation':'fadeIn 0.65s ease forwards','-webkit-animation':'fadeIn 0.65s ease forwards','-moz-animation':'fadeIn 0.65s ease forwards'});
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0%'});
											if(jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').find('.popDescr').text()==""){
												jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0','top':'76%'});
												jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'height':'270px'},500);
												jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'60%'});
											      }else{
											      jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'120px','top':'60%'});
											      jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'height':'420px'},500);
											      jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'47%'});
											  }
										}
									setTimeout(function(){jQuery('.fResp').css('opacity','1');},1000);
									setTimeout(function(){
										jQuery('.TotalSoft_GV_CP_Pop_load_'+TotalSoftGV_CP_ID).css('display','none');
									},1000)
								}
								else if(TotalSoft_GV_CP_PoM == 'mode07')
								{
									if(b[5] != '')
									{
										if(b[5].indexOf("start")===-1){
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').attr('src',b[5]+'?rel=0;iv_load_policy=3');
										}else{jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').attr('src',b[5]+'&rel=0;iv_load_policy=3');}
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').css('display','none');
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').css('display','block');
									}
									else
									{
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').attr('src',b[6]);
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').css('display','block');
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').css('display','none');
									}
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').html(b[1]);
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').html(b[2]);
									setTimeout(function(){
										if(b[3])
										{
											jQuery('.frsp a').css('display','initial');
											if(b[4]=='true')
											{
												jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3 a').attr('target','_blank');
											}
											jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3 a').attr('href',b[3]);
											jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3').css({'animation':'helixCPND 0.8s ease-in-out forwards','-webkit-animation':'helixCPND 0.8s ease-in-out forwards','-moz-animation':'helixCPND 0.8s ease-in-out forwards'});
										}
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'animation':'helixCPND 0.8s ease-in-out forwards','-webkit-animation':'helixCPND 0.8s ease-in-out forwards','-moz-animation':'helixCPND 0.8s ease-in-out forwards'});
										jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').css({'animation':'helixCPND 0.8s ease-in-out forwards','-webkit-animation':'helixCPND 0.8s ease-in-out forwards','-moz-animation':'helixCPND 0.8s ease-in-out forwards'});
										jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').css({'animation':'helixCPND 0.8s ease-in-out forwards','-webkit-animation':'helixCPND 0.8s ease-in-out forwards','-moz-animation':'helixCPND 0.8s ease-in-out forwards'});
									},500)
									if(jQuery(window).width()<=530)
										{
											jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'98%','padding-bottom':'0px','height':'310px','border-radius':'0','top':'50%','left':'50%','opacity':'0','animation':'fadeIn 0.65s ease forwards','-webkit-animation':'fadeIn 0.65s ease forwards','-moz-animation':'fadeIn 0.65s ease forwards'});
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0%'});
											if(jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').find('.popDescr').text()==""){
												jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0','top':'76%'});
												jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'height':'270px'},500);
												jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'60%'});
											      }else{
											      jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'120px','top':'60%'});
											      jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'height':'420px'},500);
											      jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'47%'});
											  }
										}
										setTimeout(function(){jQuery('.fResp').css('opacity','1');},1000);
									setTimeout(function(){
										jQuery('.TotalSoft_GV_CP_Pop_load_'+TotalSoftGV_CP_ID).css('display','none');
									},1000)
								}
								else if(TotalSoft_GV_CP_PoM == 'mode08')
								{
									if(b[5] != '')
									{
										if(b[5].indexOf("start")===-1){
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').attr('src',b[5]+'?rel=0;iv_load_policy=3');
										}else{jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').attr('src',b[5]+'&rel=0;iv_load_policy=3');}
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').css('display','none');
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').css('display','block');
									}
									else
									{
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').attr('src',b[6]);
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> img').css('display','block');
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?> iframe').css('display','none');
									}
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').html(b[1]);
									jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').html(b[2]);
									setTimeout(function(){
										if(b[3])
										{
											jQuery('.frsp a').css('display','initial');
											if(b[4]=='true')
											{
												jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3 a').attr('target','_blank');
											}
											jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3 a').attr('href',b[3]);
											jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h3').css({'animation':'popUpCPPD 0.8s ease-in forwards','-webkit-animation':'popUpCPPD 0.8s ease-in forwards','-moz-animation':'popUpCPPD 0.8s ease-in forwards'});
										}
										jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'animation':'popUpCPPD 0.8s ease-in forwards','-webkit-animation':'popUpCPPD 0.8s ease-in forwards','-moz-animation':'popUpCPPD 0.8s ease-in forwards'});
										jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').css({'animation':'popUpCPPD 0.8s ease-in forwards','-webkit-animation':'popUpCPPD 0.8s ease-in forwards','-moz-animation':'popUpCPPD 0.8s ease-in forwards'});
										jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> p').css({'animation':'popUpCPPD 0.8s ease-in forwards','-webkit-animation':'popUpCPPD 0.8s ease-in forwards','-moz-animation':'popUpCPPD 0.8s ease-in forwards'});
									},500)
									if(jQuery(window).width()<=530)
										{
											jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'98%','padding-bottom':'0px','height':'310px','border-radius':'0','top':'50%','left':'50%','opacity':'0','animation':'fadeIn 0.65s ease forwards','-webkit-animation':'fadeIn 0.65s ease forwards','-moz-animation':'fadeIn 0.65s ease forwards'});
											jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0%'});
											if(jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').find('.popDescr').text()==""){
												jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'0','top':'76%'});
												jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'height':'270px'},500);
												jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'60%'});
											      }else{
											      jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'120px','top':'60%'});
											      jQuery('.TotalSoft_GV_CP_Popup<?php echo $Total_Soft_Gallery_Video;?>').animate({'height':'420px'},500);
											      jQuery('.TotalSoft_GV_CP_Iframe<?php echo $Total_Soft_Gallery_Video;?>').css({'height':'47%'});
											  }
										}
										setTimeout(function(){jQuery('.fResp').css('opacity','1');},1000);
									setTimeout(function(){
										jQuery('.TotalSoft_GV_CP_Pop_load_'+TotalSoftGV_CP_ID).css('display','none');
									},1000)
								}
							}
						});
					}
				</script>
				<script type="text/javascript">
					jQuery(window).on('load', function(){
						var images = jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?>');
						jQuery(images).each(function(i,el){
						var img = jQuery(el).find('img');
						console.log(img);
						jQuery(img).load(function(){
							jQuery('.TS_GV_CP_Loading_<?php echo $Total_Soft_Gallery_Video;?>').css('display','none');
						}).each(function(){
					  	if(this.complete) {
					    	jQuery(this).trigger('load');
					  	}
						});
						});
					});
				</script>
				<script>
					jQuery(document).ready(function(){
                        jQuery('.TotalSoft_GV_CP_Pop_Icons<?php echo $Total_Soft_Gallery_Video;?>').animate({'height':'40px',},500);
						// var array_images<?php echo $Total_Soft_Gallery_Video;?>=[];
						// jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?>').each(function(){
						// 	if( jQuery(this).find('img').attr("src") != "" ) { array_images<?php echo $Total_Soft_Gallery_Video;?>.push(jQuery(this).find('img').attr("src")); }
						// })
						// var y_images<?php echo $Total_Soft_Gallery_Video;?>=0;
						// jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?>').each(function(i){
						// 	jQuery(this).find('img').attr('src', array_images<?php echo $Total_Soft_Gallery_Video;?>[i]).on("load",function(){
						// 		y_images<?php echo $Total_Soft_Gallery_Video;?>++;
						// 		if(y_images<?php echo $Total_Soft_Gallery_Video;?> == array_images<?php echo $Total_Soft_Gallery_Video;?>.length)
						// 		{
						// 			jQuery('.TS_GV_CP_Loading_<?php echo $Total_Soft_Gallery_Video;?>').css('display','none');
						// 		}
						// 	})
						// })

						var CPWIDTHVideo<?php echo $Total_Soft_Gallery_Video;?> = jQuery('.CPWIDTHVideo<?php echo $Total_Soft_Gallery_Video;?>').val();
						var CPHeightVideo<?php echo $Total_Soft_Gallery_Video;?> = jQuery('.CPHeightVideo<?php echo $Total_Soft_Gallery_Video;?>').val();
						var CPFontSizeVideo<?php echo $Total_Soft_Gallery_Video;?> = jQuery('.CPFontSizeVideo<?php echo $Total_Soft_Gallery_Video;?>').val();
						var CPFontSizeVideoTitlePopup<?php echo $Total_Soft_Gallery_Video;?> = jQuery('.CPFontSizeVideoTitlePopup<?php echo $Total_Soft_Gallery_Video;?>').val();
						var CPFontSizeVideoLinkPopup<?php echo $Total_Soft_Gallery_Video;?> = jQuery('.CPFontSizeVideoLinkPopup<?php echo $Total_Soft_Gallery_Video;?>').val();
						function resp<?php echo $Total_Soft_Gallery_Video;?>()
						{
							jQuery('.TotalSoft_GV_CP_TD<?php echo $Total_Soft_Gallery_Video;?> h2').css('font-size',Math.floor(CPFontSizeVideoTitlePopup<?php echo $Total_Soft_Gallery_Video;?>*jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?>').parent().width()/(jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?>').parent().width()+150)));
							jQuery('.popDescr<?php echo $Total_Soft_Gallery_Video;?>').css('font-size',Math.floor(jQuery('.popDescr<?php echo $Total_Soft_Gallery_Video;?>').css('font-size')*jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?>').parent().width()/(jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?>').parent().width()+150)));
							jQuery('.fResp<?php echo $Total_Soft_Gallery_Video;?> h3 a').css('font-size',Math.floor(CPFontSizeVideoLinkPopup<?php echo $Total_Soft_Gallery_Video;?>*jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?>').parent().width()/(jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?>').parent().width()+150)));
							if(jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?>').parent().width()<=300)
							{
								jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'100%'});
								jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?> .mask').css({'width':'100%','height':'100%'});
								jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?> .content<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'100%'});
								jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?> h2').css('font-size',Math.floor(CPFontSizeVideo<?php echo $Total_Soft_Gallery_Video;?>*jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?>').parent().width()/300));
								jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?>').parent().parent().parent()
										.css({'padding-left':'0','padding-right':'10px'})}
							else if(jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?>').parent().width()<=700)
							{
								//jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'100%'});
								jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?> .mask').css({'width':'100%','height':'100%'});
								jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?> .content<?php echo $Total_Soft_Gallery_Video;?>').css({'width':'100%','height':'100%'});
								jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?> h2').css('font-size',Math.floor(CPFontSizeVideo<?php echo $Total_Soft_Gallery_Video;?>*jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?>').parent().width()/700));
							}
							else if(jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?>').parent().width()<=1000)
							{
								jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?>').css('width',Math.floor(CPWIDTHVideo<?php echo $Total_Soft_Gallery_Video;?>*jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?>').parent().width()/1000));
								jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?>').css('height',Math.floor(CPHeightVideo<?php echo $Total_Soft_Gallery_Video;?>*jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?>').parent().width()/1000));
								jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?> .mask').css('width',Math.floor(CPWIDTHVideo<?php echo $Total_Soft_Gallery_Video;?>*jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?>').parent().width()/1000));
								jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?> .mask').css('height',Math.floor(CPHeightVideo<?php echo $Total_Soft_Gallery_Video;?>*jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?>').parent().width()/1000));
								jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?> .content<?php echo $Total_Soft_Gallery_Video;?>').css('width',Math.floor(CPWIDTHVideo<?php echo $Total_Soft_Gallery_Video;?>*jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?>').parent().width()/1000));
								jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?> .content<?php echo $Total_Soft_Gallery_Video;?>').css('height',Math.floor(CPHeightVideo<?php echo $Total_Soft_Gallery_Video;?>*jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?>').parent().width()/1000));
								jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?> h2').css('font-size',Math.floor(CPFontSizeVideo<?php echo $Total_Soft_Gallery_Video;?>*jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?>').parent().width()/1000));
							}
							else
							{
								jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?>').css('width',Math.floor(CPWIDTHVideo<?php echo $Total_Soft_Gallery_Video;?>*jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?>').parent().width()/1200));
								jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?>').css('height',Math.floor(CPHeightVideo<?php echo $Total_Soft_Gallery_Video;?>*jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?>').parent().width()/1200));
								jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?> .mask').css('width',Math.floor(CPWIDTHVideo<?php echo $Total_Soft_Gallery_Video;?>*jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?>').parent().width()/1200));
								jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?> .mask').css('height',Math.floor(CPHeightVideo<?php echo $Total_Soft_Gallery_Video;?>*jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?>').parent().width()/1200));
								jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?> .content<?php echo $Total_Soft_Gallery_Video;?>').css('width',Math.floor(CPWIDTHVideo<?php echo $Total_Soft_Gallery_Video;?>*jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?>').parent().width()/1200));
								jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?> .content<?php echo $Total_Soft_Gallery_Video;?>').css('height',Math.floor(CPHeightVideo<?php echo $Total_Soft_Gallery_Video;?>*jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?>').parent().width()/1200));
								jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?> h2').css('font-size',Math.floor(CPFontSizeVideo<?php echo $Total_Soft_Gallery_Video;?>*jQuery('.totalsoftview<?php echo $Total_Soft_Gallery_Video;?>').parent().width()/1200));
							}
						}
						setTimeout(function(){ resp<?php echo $Total_Soft_Gallery_Video;?>(); },1000)
						resp<?php echo $Total_Soft_Gallery_Video;?>();
						// jQuery(window).resize(function(){ resp<?php echo $Total_Soft_Gallery_Video;?>(); jQuery('.TotalSoft_GV_CP_Popup').css({'background':'transparent'});});
						var delaytime = 0;
						var TS_VG_CP_AE = jQuery('.TS_VG_CP_AE_<?php echo $Total_Soft_Gallery_Video; ?>').val();
						jQuery('.TotalSoft_GV_CP_Main<?php echo $Total_Soft_Gallery_Video;?> .totalsoftview<?php echo $Total_Soft_Gallery_Video;?>').each(function(){
							if(!jQuery(this).hasClass('noshow1'))
							{
								delaytime++;
								if(TS_VG_CP_AE == '')
								{
									jQuery(this).css({'display':'inline-block','opacity':'1'});
								}
								else if(TS_VG_CP_AE == 'fadeIn')
								{
									jQuery(this).css({'display':'inline-block','animation':'fadeIn 0.65s ease '+0.2*delaytime+'s forwards','-webkit-animation':'fadeIn 0.65s ease '+0.2*delaytime+'s forwards','-moz-animation':'fadeIn 0.65s ease '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_CP_AE == 'moveUp')
								{
									jQuery(this).css({'display':'inline-block','animation':'moveUp 0.65s ease '+0.2*delaytime+'s forwards','-webkit-animation':'moveUp 0.65s ease '+0.2*delaytime+'s forwards','-moz-animation':'moveUp 0.65s ease '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_CP_AE == 'scaleUp')
								{
									jQuery(this).css({'display':'inline-block','animation':'scaleUp 0.65s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'scaleUp 0.65s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'scaleUp 0.65s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_CP_AE == 'fallPerspective')
								{
									jQuery(this).css({'display':'inline-block','animation':'fallPerspective 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'fallPerspective 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'fallPerspective 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_CP_AE == 'fly')
								{
									jQuery(this).css({'display':'inline-block','animation':'fly 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'fly 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'fly 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_CP_AE == 'flip')
								{
									jQuery(this).css({'display':'inline-block','animation':'flip 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'flip 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'flip 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_CP_AE == 'helix')
								{
									jQuery(this).css({'display':'inline-block','animation':'helix 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'helix 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'helix 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_CP_AE == 'popUp')
								{
									jQuery(this).css({'display':'inline-block','animation':'popUp 0.8s ease-in '+0.2*delaytime+'s forwards','-webkit-animation':'popUp 0.8s ease-in '+0.2*delaytime+'s forwards','-moz-animation':'popUp 0.8s ease-in '+0.2*delaytime+'s forwards'});
								}
							}
						})
						
					})
				</script>
<?php echo $after_widget; }
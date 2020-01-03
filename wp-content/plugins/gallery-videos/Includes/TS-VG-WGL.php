<?php
$Total_Soft_Gallery_Video = rand(1,1000);
		if($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Grid Video Gallery'){ ?>
				<style type="text/css">
					.grid-gallery<?php echo $Total_Soft_Gallery_Video; ?> > ul { list-style: none; margin: 0; padding: 0 !important; }
					.grid-gallery<?php echo $Total_Soft_Gallery_Video; ?> figure { margin: 0; }
					.grid-gallery<?php echo $Total_Soft_Gallery_Video; ?> figure img { display: block;cursor: pointer; width: 100%; margin: 0 !important; }
					.grid-gallery<?php echo $Total_Soft_Gallery_Video; ?> figcaption > h3, .grid-gallery<?php echo $Total_Soft_Gallery_Video; ?> figcaption p { margin: 0; margin-top: 5px; word-wrap: break-word;    line-height: normal;}
					/* Grid style */
					.content-wrapper{max-width: 100%}
					.grid<?php echo $Total_Soft_Gallery_Video; ?>-wrap { }
					.grid<?php echo $Total_Soft_Gallery_Video; ?>-wrap { max-width:95%; margin: 0 auto;  }
					/* Grid style */
					/*.grid<?php echo $Total_Soft_Gallery_Video; ?>-wrap { max-width: 69em; margin: 0 auto; padding: 0 1em 1.875em; }*/
					.grid<?php echo $Total_Soft_Gallery_Video; ?> 
					{
						margin: 0 auto;
						<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26 == 'fallPerspective'){ ?>
							-webkit-perspective: 1300px;
							-moz-perspective: 1300px;
							perspective: 1300px;
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26 == 'fly'){ ?>
							-webkit-perspective: 1300px;
							-moz-perspective: 1300px;
							perspective: 1300px;
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26 == 'flip'){ ?>
							-webkit-perspective: 1300px;
							-moz-perspective: 1300px;
							perspective: 1300px;
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26 == 'helix'){ ?>
							-webkit-perspective: 1300px;
							-moz-perspective: 1300px;
							perspective: 1300px;
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26 == 'popUp'){ ?>
							-webkit-perspective: 1300px;
							-moz-perspective: 1300px;
							perspective: 1300px;
						<?php }?>
					}
					.grid<?php echo $Total_Soft_Gallery_Video; ?> .imgLiii 
					{
						left:0px;
						padding:0px !important;
						margin:0px !important;
						position: relative;
						display: block;
						/*top: unset!important;
						left:unset!important;*/
						opacity: 1;
						float: left!important;
						cursor: pointer;
						list-style-type: none !important;
						opacity: 1;
						<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26 == 'moveUp'){ ?>
							-webkit-transform: translateY(200px);
							-moz-transform: translateY(200px);
							transform: translateY(200px);
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26 == 'scaleUp'){ ?>
							-webkit-transform: scale(0.6);
							-moz-transform: scale(0.6);
							transform: scale(0.6);
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26 == 'fallPerspective'){ ?>
							-webkit-transform-style: preserve-3d;
							-moz-transform-style: preserve-3d;
							transform-style: preserve-3d;
							-webkit-transform: translateZ(400px) translateY(300px) rotateX(-90deg);
							-moz-transform: translateZ(400px) translateY(300px) rotateX(-90deg);
							transform: translateZ(400px) translateY(300px) rotateX(-90deg);
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26 == 'fly'){ ?>
							-webkit-transform-style: preserve-3d;
							-moz-transform-style: preserve-3d;
							transform-style: preserve-3d;
							-webkit-transform-origin: 50% 50% -300px;
							-moz-transform-origin: 50% 50% -300px;
							transform-origin: 50% 50% -300px;
							-webkit-transform: rotateX(-180deg);
							-moz-transform: rotateX(-180deg);
							transform: rotateX(-180deg);
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26 == 'flip'){ ?>
							-webkit-transform-style: preserve-3d;
							-moz-transform-style: preserve-3d;
							transform-style: preserve-3d;
							-webkit-transform-origin: 0% 0%;
							-moz-transform-origin: 0% 0%;
							transform-origin: 0% 0%;
							-webkit-transform: rotateX(-80deg);
							-moz-transform: rotateX(-80deg);
							transform: rotateX(-80deg);
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26 == 'helix'){ ?>
							-webkit-transform-style: preserve-3d;
							-moz-transform-style: preserve-3d;
							transform-style: preserve-3d;
							-webkit-transform: rotateY(-180deg);
							-moz-transform: rotateY(-180deg);
							transform: rotateY(-180deg);
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26 == 'popUp'){ ?>
							-webkit-transform-style: preserve-3d;
							-moz-transform-style: preserve-3d;
							transform-style: preserve-3d;
							-webkit-transform: scale(0.4);
							-moz-transform: scale(0.4);
							transform: scale(0.4);
						<?php }?>
					}					
					.grid<?php echo $Total_Soft_Gallery_Video; ?> figure { -webkit-transition: opacity 0.2s; transition: opacity 0.2s; }
					.grid<?php echo $Total_Soft_Gallery_Video; ?> figcaption { padding: 5px 17px;}
					.grid<?php echo $Total_Soft_Gallery_Video; ?> .imgLiii { width: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_03;?>px; }
					/* Slideshow style */
					.slideshow<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position: fixed;
						background: rgba(0,0,0,0.6);
						width: 100%;
						height: 100%;
						top: 0;
						left: 0;
						z-index: 99999999999 !important;
						opacity: 0;
						visibility: hidden;
						overflow: hidden;
						-webkit-perspective: 1000px;
						-moz-perspective: 1000px;
						perspective: 1000px;
						-webkit-transition: opacity 0.5s;
						-moz-transition: opacity 0.5s;
						transition: opacity 0.52s;
					}
					.slideshow<?php echo $Total_Soft_Gallery_Video; ?>-open .slideshow<?php echo $Total_Soft_Gallery_Video; ?>
					{
						opacity: 1;
						visibility: visible;
						-webkit-transition: opacity 0.4s;
						-moz-transition: opacity 0.4s;
						transition: opacity 0.4s;
					}
					.slideshow<?php echo $Total_Soft_Gallery_Video; ?> .nav-close-RW<?php echo $Total_Soft_Gallery_Video; ?>
					{
						width: 100%;
						height: 100%;
						-webkit-transform-style: preserve-3d;
						-moz-transform-style: preserve-3d;
						transform-style: preserve-3d;
						-webkit-transform: translate3d(0,0,150px);
						-moz-transform: translate3d(0,0,150px);
						transform: translate3d(0,0,150px);
						-webkit-transition: -webkit-transform 0.5s;
						-moz-transition: -moz-transform 0.5s;
						transition: transform 0.5s;
					}
					.slideshow<?php echo $Total_Soft_Gallery_Video; ?> .nav-close-RW<?php echo $Total_Soft_Gallery_Video; ?>.animatable > li
					{
						-webkit-transition: -webkit-transform 0.7s;
						-moz-transition: -moz-transform 0.7s;
						transition: transform 0.7s;
					}
					.slideshow<?php echo $Total_Soft_Gallery_Video; ?>-open .slideshow<?php echo $Total_Soft_Gallery_Video; ?> .nav-close-RW<?php echo $Total_Soft_Gallery_Video; ?>
					{
						-webkit-transform: translate3d(0,0,0);
						-moz-transform: translate3d(0,0,0);
						transform: translate3d(0,0,0);
						margin: 0;
						list-style:none;
					}
					.slideshow<?php echo $Total_Soft_Gallery_Video; ?> ul > li
					{
						width: 600px;
						max-width:95%;
						position: absolute;
						margin: 0;
						left: 50%;
						transform:translateX(-50%);
						-webkit-transform:translateX(-50%);
						-moz-transform:translateX(-50%);
						-ms-transform:translateX(-50%);
						visibility: hidden;
						box-sizing:border-box;
						background:none !important;
						background-color:none !important;
					}
					.container_1 * { -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; }
					.slideshow<?php echo $Total_Soft_Gallery_Video; ?> li.show<?php echo $Total_Soft_Gallery_Video; ?> { visibility: visible; }
					.slideshow<?php echo $Total_Soft_Gallery_Video; ?> li.iframecontainer .show<?php echo $Total_Soft_Gallery_Video; ?>{
							z-index: -99!important;
							opacity: 0.8!important; 
					}
					 .current<?php echo $Total_Soft_Gallery_Video; ?>{z-index: 999999!important;}
					 .slideshow<?php echo $Total_Soft_Gallery_Video; ?> .nav-close-RW<?php echo $Total_Soft_Gallery_Video; ?> > li:after
					{
						content: '';
						position: absolute;
						width: 100%;
						height: 100%;
						top: 0;
						left: 0;
						-webkit-transition: opacity 0.5s;
						-moz-transition: opacity 0.5s;
						transition: opacity 0.5s;
					}
					.slideshow<?php echo $Total_Soft_Gallery_Video; ?> .nav-close-RW<?php echo $Total_Soft_Gallery_Video; ?> > li.current<?php echo $Total_Soft_Gallery_Video; ?>:after
					{
						visibility: hidden;
						opacity: 0;
						-webkit-transition: opacity 0.1s, visibility 0s 0.1s;
						-moz-transition: opacity 0.1s, visibility 0s 0.1s;
						transition: opacity 0.1s, visibility 0s 0.1s;
					}
					.slideshow<?php echo $Total_Soft_Gallery_Video; ?> figure { position: absolute; width: 100%; overflow: hidden; }
					.slideshow<?php echo $Total_Soft_Gallery_Video; ?> figcaption { padding-bottom: 20px; }
					.slideshow<?php echo $Total_Soft_Gallery_Video; ?> ul li figure iframe, .slideshow<?php echo $Total_Soft_Gallery_Video; ?> ul li figure video { height:250px; margin: 0; display: block; }
					.slideshow<?php echo $Total_Soft_Gallery_Video; ?> ul li figure img { height: 250px; width: auto; margin: 0 auto !important; }
					.slideshow<?php echo $Total_Soft_Gallery_Video; ?> figcaption .TotalSoft_GV_GG_SP { overflow-x: auto; margin-top: 5px; padding-right: 10px; padding: 0 20px; padding-left: 15px; 
						height: 50px; position: relative;}

					.slideshow<?php echo $Total_Soft_Gallery_Video; ?> figcaption .TotalSoft_GV_GG_SP ul  li{top:unset!important; position: relative; margin-bottom:0px;margin-top:0px;list-style-type: disc!important; position: relative!important; visibility: inherit;}
					.slideshow<?php echo $Total_Soft_Gallery_Video; ?> figcaption .TotalSoft_GV_GG_SP ol  li{top:unset!important; position: relative; margin-bottom:0px;margin-top:0px; position: relative!important; }
					.slideshow<?php echo $Total_Soft_Gallery_Video; ?> figcaption .TotalSoft_GV_GG_SP ul { margin-bottom:0px;
					margin-left: 10px;line-height: 15px; position: relative!important;}
					/* Navigation */
					.slideshow<?php echo $Total_Soft_Gallery_Video; ?> nav span
					{
						position: fixed;
						z-index: 1000;
						padding: 3%;
						cursor: pointer;
						background:none !important;
						background-color:none !important;
						width:auto !important;
					}

					.slideshow<?php echo $Total_Soft_Gallery_Video; ?> nav span:before,.slideshow<?php echo $Total_Soft_Gallery_Video; ?> nav span:after { content:none; }
					.slideshow<?php echo $Total_Soft_Gallery_Video; ?> nav span.nav-prev, .slideshow<?php echo $Total_Soft_Gallery_Video; ?> nav span.nav-next
					{
						top: 50%;
						-webkit-transform: translateY(-50%);
						-moz-transform: translateY(-50%);
						transform: translateY(-50%);
					}
					.slideshow<?php echo $Total_Soft_Gallery_Video; ?> nav span.nav-prev {left:0;}
					.slideshow<?php echo $Total_Soft_Gallery_Video; ?> nav span.nav-next { right: 0; }
					.slideshow<?php echo $Total_Soft_Gallery_Video; ?> nav span.nav-close { top: 5%; right: 0; }
					.grid<?php echo $Total_Soft_Gallery_Video; ?> li { width: 100%; }
					.imgLiii figcaption > ul li {position: unset!important; word-wrap: break-word;width: unset!important;}
					.grid<?php echo $Total_Soft_Gallery_Video; ?> li { width: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_03;?>px; }
					.grid<?php echo $Total_Soft_Gallery_Video; ?> figure { padding: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_04;?>px; }
					.grid-gallery<?php echo $Total_Soft_Gallery_Video; ?> figure img { border-radius: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_05;?>px; }
					.slideshow<?php echo $Total_Soft_Gallery_Video; ?> figcaption p, .main-container { font:inherit; }
					.grid<?php echo $Total_Soft_Gallery_Video; ?> li:hover figure
					{
						<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06 == 'none'){ ?>
							-webkit-filter: none;
							filter:none;
						<?php } else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06 == 'blur'){ ?>
							-webkit-filter: blur(2px);
							filter:blur(2px);
						<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06 == 'brightness'){ ?>
							-webkit-filter: brightness(120%);
							filter:brightness(120%);
						<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06 == 'contrast'){ ?>
							-webkit-filter: contrast(150%);
							filter:contrast(150%);
						<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06 == 'grayscale'){ ?>
							-webkit-filter: grayscale(100%);
							filter:grayscale(100%);
						<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06 == 'hue-rotate'){ ?>
							-webkit-filter: hue-rotate(90deg);
							filter:hue-rotate(90deg);
						<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06 == 'invert'){ ?>
							-webkit-filter: invert(100%);
							filter:invert(100%);
						<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06 == 'drop-shadow'){ ?>
							-webkit-filter: drop-shadow(0px 0px 3px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_08;?>);
							filter:drop-shadow(0px 0px 3px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_08;?>);
						<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06 == 'opacity'){ ?>
							-webkit-filter: opacity(<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_07*100;?>%);
							filter:opacity(<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_07*100;?>%);
						<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06 == 'saturate'){ ?>
							-webkit-filter: saturate(8);
							filter:saturate(8);
						<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06 == 'sepia'){ ?>
							-webkit-filter: sepia(100%);
							filter:sepia(100%);
						<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06 == 'contrast-brightness'){ ?>
							-webkit-filter: contrast(120%) brightness(120%);
							filter:contrast(120%) brightness(120%);
						<?php }?>
					}
					.grid<?php echo $Total_Soft_Gallery_Video; ?> figcaption
					{
						background: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>;
						margin-top: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>px;
					}
					.grid-gallery<?php echo $Total_Soft_Gallery_Video; ?>{width: 100%}
					.grid-gallery<?php echo $Total_Soft_Gallery_Video; ?> figcaption > h3
					{
						font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_11;?>px;
						line-height: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_11;?>px;
						font-family: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?> !important;
						color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_13;?> !important;
						text-align: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_14;?> !important;
						border-bottom: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15;?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16;?> <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_17;?> !important;
						margin-bottom: 0 !important;
						line-height: 1 !important;
						font-weight: 400 !important;
						text-transform:none !important;
						perspective: 800px;
						transform: translate3d(0, 0, 0);
						-moz-transform: translate3d(0, 0, 0);
						-webkit-transform: translate3d(0, 0, 0);
					}
					.grid-gallery<?php echo $Total_Soft_Gallery_Video; ?> figcaption p { margin-bottom: 0 !important; }
					.slideshow<?php echo $Total_Soft_Gallery_Video; ?> figure
					{
						background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_18;?>;
						border: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19;?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_20;?> <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_21;?>;
						border-radius: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22;?>px;
						padding: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23;?>px;
						max-width:100%;
					}
					.slideshow<?php echo $Total_Soft_Gallery_Video; ?>>ul>li:after
					{
						background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_18;?>;
						border-radius: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22;?>px;
						opacity: 0.8;
					}
					.slideshow<?php echo $Total_Soft_Gallery_Video; ?> figure ol,.slideshow<?php echo $Total_Soft_Gallery_Video; ?> figure ul{margin-left: 0!important;}
					/*.slideshow<?php echo $Total_Soft_Gallery_Video; ?> figure .TotalSoft_GV_GG_SP{padding-left: 25px;}*/
					#GRU<?php echo $Total_Soft_Gallery_Video; ?> figure figcaption ul,#GRU<?php echo $Total_Soft_Gallery_Video; ?> figure figcaption ol{left: 0;margin-left: 0;}
					#GRU<?php echo $Total_Soft_Gallery_Video; ?> figure figcaption ul > ul{ display: list-item; list-style-type:disc;}
					
					.grid<?php echo $Total_Soft_Gallery_Video; ?>-sizer{margin: 0!important;padding: 0!important;}
					.slideshow<?php echo $Total_Soft_Gallery_Video; ?> figcaption > h3
					{
						font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24;?>px;
						font-family: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_25;?> !important;
						color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_26;?> !important;
						text-align: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_27;?> !important;
						border-bottom: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_28;?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_29;?> <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_30;?> !important;
						margin-bottom: 0 !important;
						line-height: 1 !important;
						font-weight: 400 !important;
					}
					.slideshow<?php echo $Total_Soft_Gallery_Video; ?> figcaption p { margin-bottom: 0 !important; display: block !important;}
					.slideshow<?php echo $Total_Soft_Gallery_Video; ?> nav span.nav-prev, .slideshow<?php echo $Total_Soft_Gallery_Video; ?> nav span.nav-next
					{
						font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_35;?>px;
						color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_34;?>;
					}
					.slideshow<?php echo $Total_Soft_Gallery_Video; ?> nav span.nav-close
					{
						font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_39;?>px;
						color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_38;?>;
					}
					.TotalSoft_GV_GVG_Link<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position: absolute !important;
						padding: 3px 10px !important;
						<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_27=='right'){ echo 'left';} else{ echo 'right';} ?>: 30px !important;
						border: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_01;?>px <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_02;?> <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03;?> !important;
						border-radius: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_04;?>px !important;
						text-decoration: none !important;
						background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_06;?> !important;
						color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_07;?> !important;
						line-height: 1 !important;
						font-family: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_09;?> !important;
						box-shadow: none !important;
						-moz-box-shadow: none !important;
						-webkit-box-shadow: none !important;
					}
					.TotalSoft_GV_GVG_Link<?php echo $Total_Soft_Gallery_Video; ?>:hover
					{
						text-decoration: none !important;
						background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_10;?> !important;
						color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11;?> !important;
						box-shadow: none !important;
						-moz-box-shadow: none !important;
						-webkit-box-shadow: none !important;
					}
					.TotalSoft_GV_GVG_Link<?php echo $Total_Soft_Gallery_Video; ?>:focus
					{
						box-shadow: none !important;
						-moz-box-shadow: none !important;
						-webkit-box-shadow: none !important;
						outline: none !important;
					}
					#pagination<?php echo $Total_Soft_Gallery_Video; ?> li { border:none !important; list-style:none !important;display: inline-block!important; padding: 0!important}
					#pagination<?php echo $Total_Soft_Gallery_Video; ?> li a
					{
						background-color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14;?>;
						color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_15;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_16;?>px;
						font-family:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_17;?>;
						height:auto !important;
						<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_24 != 'none'){ ?> 
							border: 1px solid <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_25;?> !important;
						<?php } else { ?>
							border: none !important;
						<?php }?>
						line-height:1 !important;
						display:block;
						cursor: pointer;
						padding: 2px 10px;
					}

					#pagination<?php echo $Total_Soft_Gallery_Video; ?> li:not(.active) a:hover
					{
						background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_20;?> !important;
						color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21;?> !important;
					}
					/*#pagination<?php echo $Total_Soft_Gallery_Video; ?> li a.active<?php echo $Total_Soft_Gallery_Video; ?>
					{
						background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18;?>!important;
						color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_19;?>;
					}*/
					#pagination<?php echo $Total_Soft_Gallery_Video; ?> .active
					{
					background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18;?>;
						color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_19;?> !important;
					}
					.TotalSoftGV_GVG_LM<?php echo $Total_Soft_Gallery_Video; ?>
					{
						background-color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14;?>;
						color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_15;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_16;?>px;
						font-family:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_17;?>;
						<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_24 != 'none'){ ?> 
							border: 1px solid <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_25;?>;
						<?php } else { ?>
							border: none !important;
						<?php }?>
						cursor:pointer;
						display: block;
						padding: 3px !important;
						line-height: 1 !important;
					}
					.nav-close-RW<?php echo $Total_Soft_Gallery_Video; ?> li.current<?php echo $Total_Soft_Gallery_Video; ?> { position:relative; z-index:9; }
					.TotalSoftGV_GVG_LM<?php echo $Total_Soft_Gallery_Video; ?>:hover
					{
						background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_20;?>;
						color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21;?>;
					}
					.slideshow<?php echo $Total_Soft_Gallery_Video; ?> figcaption .TotalSoft_GV_GG_SP::-webkit-scrollbar { width: 0.5em; }
					.slideshow<?php echo $Total_Soft_Gallery_Video; ?> figcaption .TotalSoft_GV_GG_SP::-webkit-scrollbar-track
					{
						-webkit-box-shadow: inset 0 0 6px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_18;?>;
					}
					.slideshow<?php echo $Total_Soft_Gallery_Video; ?> figcaption .TotalSoft_GV_GG_SP::-webkit-scrollbar-thumb
					{
						background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_26;?>;
						outline: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_26;?>;
					}
					@media screen and (max-width:820px)
					{
						.slideshow<?php echo $Total_Soft_Gallery_Video; ?> nav span { cursor:default !important; }
					}
					@media screen and (max-width:480px)
					{
						.slideshow<?php echo $Total_Soft_Gallery_Video; ?> figcaption{ padding-bottom:10px!important; }
						.slideshow<?php echo $Total_Soft_Gallery_Video; ?> figure{padding: 20px;}
					}
					.TS_GV_GVG_Loading_<?php echo $Total_Soft_Gallery_Video;?>
					{
						position: absolute;
						left: 0;
						top: 0;
						width: 100%;
						height: 100%;
						background: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_28;?>;
						z-index: 10;
						padding: 0;
						overflow: hidden !important;
						text-align: center;
					}
					.TS_GV_GVG_Loading_<?php echo $Total_Soft_Gallery_Video;?> img
					{
						margin: 0 auto !important;
						position: relative;
						top: 50%;
						transform: translateY(-50%);
						-moz-transform: translateY(-50%);
						-webkit-transform: translateY(-50%);
					}
					#pagination<?php echo $Total_Soft_Gallery_Video; ?>{text-align: center!important;}
				</style>
				<div class="container_1<?php echo $Total_Soft_Gallery_Video;?> container_1 cont_1" style="position: relative; display: -webkit-box; width: 100%;">
					<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_27 != '') { ?>
						<div class="TS_GV_GVG_Loading_<?php echo $Total_Soft_Gallery_Video;?>">
							<img src="<?php echo plugins_url('../Images/Loading/loading' . $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_27 . '.gif',__FILE__);?>">
						</div>
					<?php }?>
					<div id="grid<?php echo $Total_Soft_Gallery_Video; ?>-gallery" class="grid-gallery<?php echo $Total_Soft_Gallery_Video; ?>">
						<section class="grid<?php echo $Total_Soft_Gallery_Video; ?>-wrap GRWR<?php echo $Total_Soft_Gallery_Video; ?>">
							<ul id="GRU<?php echo $Total_Soft_Gallery_Video; ?>" class="GRU<?php echo $Total_Soft_Gallery_Video; ?> grid<?php echo $Total_Soft_Gallery_Video; ?>" style='margin:0px;list-style:none;max-width:none;'>
								<li class="grid<?php echo $Total_Soft_Gallery_Video; ?>-sizer"></li>
								<?php for($i=0;$i<count($Total_Soft_GalleryV_Videos);$i++){ ?>
									<?php if($Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType=='All'){ ?>
										<li class='imgLiii' id="TotalSoft_GV_GVG_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i+1;?>">
											<figure> <?php
													$url = $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;
													if(strpos($url,'http')!== false) { 
													$url = str_replace('http','https',$url);
													$url = str_replace('httpss', 'https', $url);
													} ?>
												<img src="<?php echo $url;?>" alt="img<?php echo $Total_Soft_GalleryV_Videos[$i]->id;?>"/>
												<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01=='true' || $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02=='true' && $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc != ''){ ?>
													<figcaption>
														<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01=='true'){ ?>
															<h3><?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?></h3>
														<?php }?>
														<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02=='true'){ ?>
															<?php $string =  html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc);
																  $replace = str_replace('<li>', '<ul>', $string);
																	echo $replace;
														} ?>
													</figcaption>
												<?php }?>
											</figure>
										</li>
									<?php } else { ?>
										<?php if($i<$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage){ ?>
											<li class='imgLiii' id="TotalSoft_GV_GVG_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i+1;?>">
												<figure> <?php
													$url = $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;
													if(strpos($url,'http')!== false) { 
													$url = str_replace('http','https',$url);
													$url = str_replace('httpss', 'https', $url);
													} ?>
												<img src="<?php echo $url;?>" alt="img<?php echo $Total_Soft_GalleryV_Videos[$i]->id;?>"/>
													<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01=='true' || $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02=='true' && $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc != ''){ ?>
														<figcaption>
															<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01=='true'){ ?>
																<h3><?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?></h3>
															<?php }?>
															<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02=='true'){ 
																 $string = html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc);
																$replace = str_replace('<li>', '<ul>', $string);
																	echo $replace;
															} ?>
														</figcaption>
													<?php }?>
												</figure>
											</li>
										<?php } else { ?>
											<li class='imgLiii noshow1' style="display: none;" id="TotalSoft_GV_GVG_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i+1;?>">
												<figure> <?php
													$url = $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;
													if(strpos($url,'http')!== false) { 
													$url = str_replace('http','https',$url);
													$url = str_replace('httpss', 'https', $url);
													} ?>
												<img src="<?php echo $url;?>" alt="img<?php echo $Total_Soft_GalleryV_Videos[$i]->id;?>"/>
													<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01=='true' || $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02=='true' && $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc != ''){ ?>
														<figcaption>
															<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01=='true'){ ?>
																<h3><?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?></h3>
															<?php }?>
															<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02=='true'){ 
																 $string = html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc);
																$replace = str_replace('<li>', '<ul>', $string);
																	echo $replace;
															} ?>
														</figcaption>
													<?php }?>
												</figure>
											</li>
										<?php }?>
									<?php }?>
								<?php }?>
							</ul>
							<?php if($Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType=='Pagination'){ ?>
								<div id="pagination<?php echo $Total_Soft_Gallery_Video; ?>" class="TotalSoftcenter">
								</div>
							<?php }?>
							<?php if($Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType=='Load'){ ?>
								<div class="TotalSoftcenter" id="TotalSoftPageDiv_<?php echo $Total_Soft_Gallery_Video;?>">
									<span class="TotalSoftGV_GVG_LM TotalSoftGV_GVG_LM<?php echo $Total_Soft_Gallery_Video; ?>" onclick="Total_Soft_GV_GVG_PageLM<?php echo $Total_Soft_Gallery_Video; ?>('<?php echo $Total_Soft_Gallery_Video;?>', '<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>', '<?php echo ceil(count($Total_Soft_GalleryV_Videos)/$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage);?>')"><?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_LoadMore;?></span>
									<input type="text" style="display:none;" id="TotalSoftPage_<?php echo $Total_Soft_Gallery_Video;?>" value="1">
								</div>
							<?php }?>
						</section>
						<section class="slideshow<?php echo $Total_Soft_Gallery_Video; ?>">
							<ul class='nav-close-RW<?php echo $Total_Soft_Gallery_Video; ?>'>
								<?php for($i=0;$i<count($Total_Soft_GalleryV_Videos);$i++){ ?>
									<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL != ''){ ?>
										<?php if(strpos($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL,'.mp4')>-1){ ?>
											<li class="videocontainer">
												<figure>
													<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_22=='true' || $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_23=='true' && $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc != ''){ ?>
														<figcaption>
															<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_22=='true'){ ?>
																<h3>
																	<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
																</h3>
															<?php }?>
															<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_23=='true' && $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc != ''){ ?>
																<div class="TotalSoft_GV_GG_SP">
																	<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc);?>
																</div>
															<?php }?>
															<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink != ''){ ?>
																<div style='height:30px;margin-top:10px;text-align:right;'>
																	<a class="TotalSoft_GV_GVG_Link<?php echo $Total_Soft_Gallery_Video; ?>" href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink;?>" <?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VONT=='true'){echo 'target="_blank"';}?>><?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_05;?></a>
																</div>
															<?php }?>
														</figcaption>
													<?php }?>
													<video id="videocontainer_<?php echo $Total_Soft_Gallery_Video; ?>_<?php echo $i;?>" controls poster="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>">
														<?php 
														$url = $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL;
														if(strpos($url,'http')!== false) { 
															$url = str_replace('http','https',$url);
															$url = str_replace('httpss', 'https', $url); ?>
															<source src="<?php echo $url;?>" type="video/mp4">
														<?php } ?>
														
													</video>
												</figure>
											</li>
										<?php }else{ ?>
											<li class="iframecontainer" style="">
												<figure>
													<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_22=='true' || $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_23=='true' && $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc != ''){ ?>
														<figcaption>
															<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_22=='true'){ ?>
																<h3>
																	<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
																</h3>
															<?php }?>
															<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_23=='true' && $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc != ''){ ?>
																<div class="TotalSoft_GV_GG_SP">
																	<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc);?>
																</div>
															<?php }?>
															<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink != ''){ ?>
																<div style='height:30px;margin-top:10px;text-align:right;'>
																	<a class="TotalSoft_GV_GVG_Link<?php echo $Total_Soft_Gallery_Video; ?>" href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink;?>" <?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VONT=='true'){echo 'target="_blank"';}?>><?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_05;?></a>
																</div>
															<?php }?>
														</figcaption>
													<?php }
													$url = $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL;
													if(strpos($url, 'http')!==false){
														$url = str_replace('http', 'https', $url);
														$url = str_replace('httpss', 'https', $url); ?>
														<iframe src="<?php echo $url; ?>" frameborder="0" allowfullscreen></iframe>
												<?php } else if(strpos($url, 'wistia')!==false){ ?>
														<iframe src="<?php echo $url; ?>" frameborder="0" allowfullscreen></iframe>
												<?php } ?>
												</figure>
											</li>
										<?php }?>
									<?php }else{ ?>
										<li class="imagecontainer">
											<figure>
												<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_22=='true' || $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_23=='true' && $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc != ''){ ?>
													<figcaption>
														<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_22=='true'){ ?>
															<h3>
																<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
															</h3>
														<?php }?>
														<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_23=='true' && $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc != ''){ ?>
															<div class="TotalSoft_GV_GG_SP">
																<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc);?>
															</div>
														<?php }?>
														<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink != ''){ ?>
															<div style='height:30px;margin-top:10px;text-align:right;'>
																<a class="TotalSoft_GV_GVG_Link<?php echo $Total_Soft_Gallery_Video; ?>" href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink;?>" <?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VONT=='true'){echo 'target="_blank"';}?>><?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_05;?></a>
															</div>
														<?php }?>
													</figcaption>
												<?php }?>
												<img src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>">
											</figure>
										</li>
									<?php }?>
								<?php }?>
							</ul>
							<nav>
								<span class="icon nav-prev"><i class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_32;?>"></i></span>
								<span class="icon nav-next"><i class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_33;?>"></i></span>
								<span class="icon nav-close nav-close-TotalSoft" id="close-all-videos"><i class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_37;?>"></i></span>
							</nav>
						</section>
					</div>
				</div>
				<input type='text' style='display:none;' class='ImgWidthhhh<?php echo $Total_Soft_Gallery_Video; ?>' value='<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_03;?>'>
				<input type='text' style='display:none;' class='VTitlePOpFS<?php echo $Total_Soft_Gallery_Video; ?>' value='<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24;?>'>
				<input type='text' style='display:none;' class='VLinkPOpFS<?php echo $Total_Soft_Gallery_Video; ?>' value='<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_08;?>'>
				<input type='text' style='display:none;' class='countFGTotalSoft<?php echo $Total_Soft_Gallery_Video; ?>' value='<?php echo count($Total_Soft_GalleryV_Videos); ?>'>
				<input type='text' style='display:none;' class='TotalSoft_Grid_FS<?php echo $Total_Soft_Gallery_Video; ?>' value='<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_11;?>'>
				<input type='text' style='display:none;' class='TS_VG_GG_AE_<?php echo $Total_Soft_Gallery_Video; ?>' value='<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26;?>'>
				<input type='text' style='display:none;' class='TS_VG_GG_PP_<?php echo $Total_Soft_Gallery_Video; ?>' value='<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>'>
				<input type='text' style='display:none;' class='TS_VG_GG_PT_<?php echo $Total_Soft_Gallery_Video; ?>' value='<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType;?>'>
				<script src="<?php echo plugins_url('../JS/imagesloaded.pkgd.min.js',__FILE__);?>" type="text/javascript"></script>
				<script src="<?php echo plugins_url('../JS/masonry.pkgd.min.js',__FILE__);?>" type="text/javascript"></script>
				<script src="<?php echo plugins_url('../JS/classie.js',__FILE__);?>" type="text/javascript"></script>
				<script>
					jQuery(document).ready(function(){
						jQuery('#GRU<?php echo $Total_Soft_Gallery_Video; ?> figure figcaption ol').find('ul').css({'list-style-type':'decimal',   'display': 'list-item','font-size':'13px'});
						jQuery('.imgLiii').each(function(index,el){
                           if(jQuery(el).find("h3").text() == ""){
							jQuery(el).find("figcaption").find('h3').css({'display':'none'});
							}
							else if(jQuery(el).find("h3").text() == "" && jQuery(el).text()){
                              jQuery(el).find("figcaption").css({'display':'none'});
							}
						});
                       jQuery(window).resize(function(){
                        var height = jQuery('.nav-close-RW<?php echo $Total_Soft_Gallery_Video; ?>').children().first().height();
                        var top = jQuery('.nav-close-RW<?php echo $Total_Soft_Gallery_Video; ?>').children().first().position().top;
                       });
						var array_images<?php echo $Total_Soft_Gallery_Video;?>=[];
						jQuery('.grid<?php echo $Total_Soft_Gallery_Video; ?> li.imgLiii').each(function(){
							if( jQuery(this).find('img').attr("src") != "" ) { array_images<?php echo $Total_Soft_Gallery_Video;?>.push(jQuery(this).find('img').attr("src")); }
						})
                        <?php $tema = wp_get_theme( $stylesheet, $theme_root );?>
						var tema_name = '<?php echo $tema; ?>'
						var size = jQuery(window).width();
						if(tema_name == "Oneline Lite" || tema_name == "Oshi" || tema_name == "OceanWP" || tema_name == "Businessly"){
							if(size<=480){
						 	jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> ul li figure iframe').css({'width':'100%', 'margin-left':'0',
						 		'min-height':'0'});	
						 		jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> ul li figure iframe').css({'height':'168px'});
						 		jQuery('.nav-close-RW<?php echo $Total_Soft_Gallery_Video; ?>').children().css({'height':'340px'})
                           }
                          jQuery(window).resize(function() {
                  		  var size = jQuery(window).width();
						if(size<=480){
							 var first = jQuery('.nav-close-RW<?php echo $Total_Soft_Gallery_Video; ?>').children().first();
			                 jQuery(first).css({'top':'170px'});
			                 var top = jQuery(first).position().top;
			                 var height = jQuery(first).height();
			                jQuery('.nav-close-RW<?php echo $Total_Soft_Gallery_Video; ?>').children().css({'top':top,'height':'340px'});	
			                		jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> ul li figure iframe').css({'width':'100%', 'margin-left':'0',
							 		'min-height':'0'});	
							 		jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> ul li figure iframe').css({'height':'168px'});
				                 }
							 });
						}
						var y_images<?php echo $Total_Soft_Gallery_Video;?>=0;
						jQuery('.grid<?php echo $Total_Soft_Gallery_Video; ?> li.imgLiii').each(function(i){
							jQuery(this).find('img').attr('src', array_images<?php echo $Total_Soft_Gallery_Video;?>[i]).on("load",function(){
								y_images<?php echo $Total_Soft_Gallery_Video;?>++;
								if(y_images<?php echo $Total_Soft_Gallery_Video;?> == array_images<?php echo $Total_Soft_Gallery_Video;?>.length)
								{
									jQuery('.TS_GV_GVG_Loading_<?php echo $Total_Soft_Gallery_Video;?>').css('display','none');
								}
							})
						})
						new CBPGridGallery<?php echo $Total_Soft_Gallery_Video; ?>( document.getElementById( 'grid<?php echo $Total_Soft_Gallery_Video; ?>-gallery' ) );
						var delaytime = 0;
						var TS_VG_GG_AE = jQuery('.TS_VG_GG_AE_<?php echo $Total_Soft_Gallery_Video; ?>').val();
						if(TS_VG_GG_AE == ''){ TS_VG_GG_AE = 'fadeIn'; }
						jQuery('.grid<?php echo $Total_Soft_Gallery_Video; ?> li.imgLiii').each(function(){
							if(!jQuery(this).hasClass('noshow1'))
							{
								delaytime++;
								if(TS_VG_GG_AE == '')
								{
									jQuery(this).css({'opacity':'1'});
								}
								else if(TS_VG_GG_AE == 'fadeIn')
								{
									jQuery(this).css({"display":"block",'animation':'fadeIn 0.65s ease '+0.2*delaytime+'s forwards','-webkit-animation':'fadeIn 0.65s ease '+0.2*delaytime+'s forwards','-moz-animation':'fadeIn 0.65s ease '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_GG_AE == 'moveUp')
								{
									jQuery(this).css({"display":"block",'animation':'moveUp 0.65s ease '+0.2*delaytime+'s forwards','-webkit-animation':'moveUp 0.65s ease '+0.2*delaytime+'s forwards','-moz-animation':'moveUp 0.65s ease '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_GG_AE == 'scaleUp')
								{
									jQuery(this).css({"display":"block",'animation':'scaleUp 0.65s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'scaleUp 0.65s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'scaleUp 0.65s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_GG_AE == 'fallPerspective')
								{
									jQuery(this).css({"display":"block",'animation':'fallPerspective 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'fallPerspective 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'fallPerspective 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_GG_AE == 'fly')
								{
									jQuery(this).css({"display":"block",'animation':'fly 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'fly 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'fly 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_GG_AE == 'flip')
								{
									jQuery(this).css({"display":"block",'animation':'flip 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'flip 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'flip 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_GG_AE == 'helix')
								{
									jQuery(this).css({"display":"block",'animation':'helix 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'helix 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'helix 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_GG_AE == 'popUp')
								{
									jQuery(this).css({"display":"block",'animation':'popUp 0.8s ease-in '+0.2*delaytime+'s forwards','-webkit-animation':'popUp 0.8s ease-in '+0.2*delaytime+'s forwards','-moz-animation':'popUp 0.8s ease-in '+0.2*delaytime+'s forwards'});
								}
							}
						})
						jQuery(window).resize(function(){
							new CBPGridGallery<?php echo $Total_Soft_Gallery_Video; ?>( document.getElementById( 'grid<?php echo $Total_Soft_Gallery_Video; ?>-gallery' ) );
						})
						jQuery(".pagination<?php echo $Total_Soft_Gallery_Video; ?> li").click(function(){
							new CBPGridGallery<?php echo $Total_Soft_Gallery_Video; ?>( document.getElementById( 'grid<?php echo $Total_Soft_Gallery_Video; ?>-gallery' ) );
						})
						jQuery("#close-all-videos").click(function(){
							jQuery("iframe").each(function() { 
        						var src= jQuery(this).attr('src');
        						jQuery(this).attr('src',src); 
        						jQuery('body').css({'overflow':'auto'}) 
        						jQuery('html').css({'overflow':'auto'})
							});
						})
						jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?>').click(function(){
       						jQuery("iframe").each(function() { 
        						var src= jQuery(this).attr('src');
        						jQuery(this).attr('src',src); 
        						jQuery('body').css({'overflow':'auto'}) 
        						jQuery('html').css({'overflow':'auto'})
							});
						})
					})
        
				</script>
				<script>
					var ImgWidthhhh<?php echo $Total_Soft_Gallery_Video; ?> = jQuery('.ImgWidthhhh<?php echo $Total_Soft_Gallery_Video; ?>').val();
					var VTitlePOpFS<?php echo $Total_Soft_Gallery_Video; ?> = jQuery('.VTitlePOpFS<?php echo $Total_Soft_Gallery_Video; ?>').val();
					var VLinkPOpFS<?php echo $Total_Soft_Gallery_Video; ?> = jQuery('.VLinkPOpFS<?php echo $Total_Soft_Gallery_Video; ?>').val();
					var countFGTotalSoft<?php echo $Total_Soft_Gallery_Video; ?> = jQuery('.countFGTotalSoft<?php echo $Total_Soft_Gallery_Video; ?>').val();
					var TotalSoft_Grid_FS<?php echo $Total_Soft_Gallery_Video; ?> = jQuery('.TotalSoft_Grid_FS<?php echo $Total_Soft_Gallery_Video; ?>').val();
					
					function Total_Soft_GV_GVG_PagePresp<?php echo $Total_Soft_Gallery_Video; ?>(){
						if(jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> ul').height()<=400)
						{
							jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> figcaption p').css('display','none');
							jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> nav span.nav-close').css('top','0%');
						}
						else
						{
							jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> figcaption p').css('display','block');
							jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> nav span.nav-close').css('top','0%');
						}
						jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> ul li figure iframe').css('width',Math.floor(jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> ul li figure iframe').height()*16/9));
						jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> ul li figure iframe').css('min-width','100%');
						jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> ul li figure iframe').css('min-height',Math.floor(jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> ul li figure iframe').width()*9/16));
						jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> ul li figure iframe').css('max-height',Math.floor(jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> ul li figure iframe').width()*9/16));
						jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> ul li figure iframe').css('margin-left',Math.floor((jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> ul li figure').width()-jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> ul li figure iframe').width())/2));

						jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> ul li figure video').css('width',Math.floor(jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> ul li figure video').height()*16/9));
						jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> ul li figure video').css('min-width','100%');
						jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> ul li figure video').css('min-height',Math.floor(jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> ul li figure video').width()*9/16));
						jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> ul li figure video').css('max-height',Math.floor(jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> ul li figure video').width()*9/16));
						jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> ul li figure video').css('margin-left',Math.floor((jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> ul li figure').width()-jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> ul li figure video').width())/2));

						for(i=0;i<=countFGTotalSoft<?php echo $Total_Soft_Gallery_Video; ?>-1;i++)
						{
							if(jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> .nav-close-RW<?php echo $Total_Soft_Gallery_Video; ?> > li ').eq(i).hasClass('videocontainer'))
							{
								jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> .nav-close-RW<?php echo $Total_Soft_Gallery_Video; ?> > li ').eq(i).css('height',jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> .nav-close-RW<?php echo $Total_Soft_Gallery_Video; ?> > li ').eq(i).find('figure').outerHeight());
							}
							else if(jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> .nav-close-RW<?php echo $Total_Soft_Gallery_Video; ?> > li ').eq(i).hasClass('iframecontainer'))
							{
								if(jQuery(window).width()<480){
									jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> .nav-close-RW<?php echo $Total_Soft_Gallery_Video; ?> > li ').eq(i).css('height',jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> .nav-close-RW<?php echo $Total_Soft_Gallery_Video; ?> > li ').eq(i).find('figure').outerHeight());
								}
								else{
									jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> .nav-close-RW<?php echo $Total_Soft_Gallery_Video; ?> > li ').eq(i).css('height',jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> .nav-close-RW<?php echo $Total_Soft_Gallery_Video; ?> > li ').eq(i).find('figure').outerHeight());
								}
							}
							else if(jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> .nav-close-RW<?php echo $Total_Soft_Gallery_Video; ?> > li ').eq(i).hasClass('imagecontainer'))
							{
								jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> .nav-close-RW<?php echo $Total_Soft_Gallery_Video; ?> > li ').eq(i).css('height',jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> .nav-close-RW<?php echo $Total_Soft_Gallery_Video; ?> > li ').eq(i).find('figure').outerHeight());
							}
							jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> .nav-close-RW<?php echo $Total_Soft_Gallery_Video; ?> > li ').eq(i).css('top',Math.floor((jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> .nav-close-RW<?php echo $Total_Soft_Gallery_Video; ?>').height()-jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> .nav-close-RW<?php echo $Total_Soft_Gallery_Video; ?> > li ').eq(i).height())/2));							
							if(jQuery(window).width()<480){
                                 jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> .nav-close-RW<?php echo $Total_Soft_Gallery_Video; ?> > li ').eq(i).css({'top':'0','bottom':'0','position':'absolute','margin':'auto'});
							}
							if(jQuery(window).width()>480){
                                 jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> .nav-close-RW<?php echo $Total_Soft_Gallery_Video; ?> > .iframecontainer ').eq(i).css({'top':'0','bottom':'0','position':'absolute','margin':'auto'});
							}
						}
						jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> figcaption h3').css('font-size',Math.floor(VTitlePOpFS<?php echo $Total_Soft_Gallery_Video; ?>*jQuery(window).width()/(jQuery(window).width()+150)));
						jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> figcaption p').css('font-size',Math.floor(jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> figcaption p').css('font-size')*jQuery(window).width()/(jQuery(window).width()+150)));
						jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> figcaption p').css('line-height',jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> figcaption p').css('font-size'));
						jQuery('.TotalSoft_GV_GVG_Link<?php echo $Total_Soft_Gallery_Video; ?>').css('font-size',Math.floor(VLinkPOpFS<?php echo $Total_Soft_Gallery_Video; ?>*jQuery(window).width()/(jQuery(window).width()+150)));
						jQuery('.grid<?php echo $Total_Soft_Gallery_Video; ?> li').css('width',Math.floor(ImgWidthhhh<?php echo $Total_Soft_Gallery_Video; ?>*jQuery('.GRWR<?php echo $Total_Soft_Gallery_Video; ?>').width()/1000));

						jQuery('.grid-gallery<?php echo $Total_Soft_Gallery_Video; ?> figcaption h3').css('font-size',Math.floor(TotalSoft_Grid_FS<?php echo $Total_Soft_Gallery_Video; ?>*jQuery('.GRWR<?php echo $Total_Soft_Gallery_Video; ?>').width()/(jQuery('.GRWR<?php echo $Total_Soft_Gallery_Video; ?>').width()+25))+'px');
						jQuery('.grid-gallery<?php echo $Total_Soft_Gallery_Video; ?> figcaption h3').css('line-height',Math.floor(TotalSoft_Grid_FS<?php echo $Total_Soft_Gallery_Video; ?>*jQuery('.GRWR<?php echo $Total_Soft_Gallery_Video; ?>').width()/(jQuery('.GRWR<?php echo $Total_Soft_Gallery_Video; ?>').width()+25))+'px');
						var ShowType = '<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType;?>';
						if(jQuery('.GRWR<?php echo $Total_Soft_Gallery_Video; ?>').width()<=450)
						{
							jQuery('.GRU<?php echo $Total_Soft_Gallery_Video; ?> li').css('width','100%');
							jQuery('.GRWR<?php echo $Total_Soft_Gallery_Video; ?>').each(function(index,elem){		
                    	if(jQuery(elem).width()=="0"){
                    		jQuery(elem).find('.GRU<?php echo $Total_Soft_Gallery_Video; ?> li').css({'height':jQuery('.imgLiii').outerHeight(),'width':jQuery('.imgLiii').outerWidth()});
                    		jQuery(elem).find('.GRU<?php echo $Total_Soft_Gallery_Video; ?> .grid<?php echo $Total_Soft_Gallery_Video; ?>-sizer').css({'height':'0'});
                    		jQuery(elem).find('#GRU<?php echo $Total_Soft_Gallery_Video; ?>').css({'width':jQuery(elem).find('.imgLiii').not('.noshow1').not('.grid<?php echo $Total_Soft_Gallery_Video; ?>-sizer').size()*jQuery(elem).find('.imgLiii').not('.noshow1').not('.grid<?php echo $Total_Soft_Gallery_Video; ?>-sizer').width()+'px'});
                    	}
                       
                    });
						}
						else if(jQuery('.GRWR<?php echo $Total_Soft_Gallery_Video; ?>').width()<=700)
						{
							jQuery('.GRU<?php echo $Total_Soft_Gallery_Video; ?> li').css('width',Math.floor(ImgWidthhhh<?php echo $Total_Soft_Gallery_Video; ?>*jQuery('.GRWR<?php echo $Total_Soft_Gallery_Video; ?>').width()/800)+'px');
						}
						else if(jQuery('.GRWR<?php echo $Total_Soft_Gallery_Video; ?>').width()<=1000)
						{
							jQuery('.GRU<?php echo $Total_Soft_Gallery_Video; ?> li').css('width',Math.floor(ImgWidthhhh<?php echo $Total_Soft_Gallery_Video; ?>*jQuery('.GRWR<?php echo $Total_Soft_Gallery_Video; ?>').width()/1000)+'px');
						}
						else if(jQuery('.GRWR<?php echo $Total_Soft_Gallery_Video; ?>').width()<=1500)
						{
							// jQuery('.GRU<?php echo $Total_Soft_Gallery_Video; ?> li').css('width',Math.floor(ImgWidthhhh<?php echo $Total_Soft_Gallery_Video; ?>*jQuery('.GRWR<?php echo $Total_Soft_Gallery_Video; ?>').width()/1500)+'px');
						}
						else if(jQuery('.GRWR<?php echo $Total_Soft_Gallery_Video; ?>').width()<=1800)
						{
							// jQuery('.GRU<?php echo $Total_Soft_Gallery_Video; ?> li').css('width',Math.floor(ImgWidthhhh<?php echo $Total_Soft_Gallery_Video; ?>*jQuery('.GRWR<?php echo $Total_Soft_Gallery_Video; ?>').width()/1800)+'px');
						}

						var kj = Math.floor(jQuery('.GRWR<?php echo $Total_Soft_Gallery_Video; ?>').width()/(ImgWidthhhh<?php echo $Total_Soft_Gallery_Video; ?>*jQuery('.GRWR<?php echo $Total_Soft_Gallery_Video; ?>').width()/1000));
						var TS_VG_GG_PP = parseInt(jQuery('.TS_VG_GG_PP_<?php echo $Total_Soft_Gallery_Video; ?>').val());
						var TS_VG_GG_PT = jQuery('.TS_VG_GG_PT_<?php echo $Total_Soft_Gallery_Video; ?>').val();
						if(TS_VG_GG_PT != 'All'){ if(kj > TS_VG_GG_PP) { kj = TS_VG_GG_PP; } }
						var kl = kj*Math.floor(ImgWidthhhh<?php echo $Total_Soft_Gallery_Video; ?>*jQuery('.GRWR<?php echo $Total_Soft_Gallery_Video; ?>').width()/1000);
                        
						var kh = Math.floor((jQuery('.GRWR<?php echo $Total_Soft_Gallery_Video; ?>').width() - kl)/2);
						var ShowType = '<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType;?>';
						if(jQuery(window).width()>=480){
							jQuery('.grid<?php echo $Total_Soft_Gallery_Video; ?>').css({'margin':'0 '+ kh + 'px'});
						}
						else{
                           jQuery('.grid<?php echo $Total_Soft_Gallery_Video; ?>').css({'margin':'5px'});
						}
						var width = jQuery('.imgLiii').width();
                          jQuery('.widget_total_soft_gallery_video').each(function(index, el){
                        	if(jQuery(el).find('#TotalSoftPageDiv_<?php echo $Total_Soft_Gallery_Video; ?>') !== null){
                        		if(width>=jQuery(el).width()){
                        			jQuery(el).find('#GRU<?php echo $Total_Soft_Gallery_Video; ?>').css({'margin':'0'});
                        			jQuery(el).css({'padding-left':'0','padding-right':'0'});
                        		}  
                        	}
                        });
					}
					Total_Soft_GV_GVG_PagePresp<?php echo $Total_Soft_Gallery_Video; ?>();
					jQuery(window).resize(function(){ Total_Soft_GV_GVG_PagePresp<?php echo $Total_Soft_Gallery_Video; ?>(); })
				</script>
				</script>
				<script type="text/javascript">
					jQuery(function() {
						new CBPGridGallery<?php echo $Total_Soft_Gallery_Video; ?>( document.getElementById( 'grid<?php echo $Total_Soft_Gallery_Video; ?>-gallery' ) );
					  jQuery(window).resize(function() {
					     Total_Soft_GV_GVG_PagePresp<?php echo $Total_Soft_Gallery_Video; ?>() ;
					     new CBPGridGallery<?php echo $Total_Soft_Gallery_Video; ?>( document.getElementById( 'grid<?php echo $Total_Soft_Gallery_Video; ?>-gallery' ) );
					  });
					});
				</script>
				<script type="text/javascript" src="<?php echo plugins_url('../JS/modernizr.custom.js',__FILE__);?>"></script>
				<script type="text/javascript">
					;( function( window ) {
						'use strict';
						var docElem = window.document.documentElement,
							transEndEventNames = {
								'WebkitTransition': 'webkitTransitionEnd',
								'MozTransition': 'transitionend',
								'OTransition': 'oTransitionEnd',
								'msTransition': 'MSTransitionEnd',
								'transition': 'transitionend'
							},
							transEndEventName<?php echo $Total_Soft_Gallery_Video; ?> = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
							support = {
								transitions : Modernizr.csstransitions,
								support3d : Modernizr.csstransforms3d
							};
						function setTransform<?php echo $Total_Soft_Gallery_Video; ?>( el, transformStr ) {
							el.style.WebkitTransform = transformStr;
							el.style.msTransform = transformStr;
							el.style.transform = transformStr;
						}
						function getViewportW<?php echo $Total_Soft_Gallery_Video; ?>() {
							var client = docElem['clientWidth'],
								inner = window['innerWidth'];
							if( client < inner )
								return inner;
							else
								return client;
						}
						function extend<?php echo $Total_Soft_Gallery_Video; ?>( a, b ) {
							for( var key in b ) 
							{ 
								if( b.hasOwnProperty( key ) ) { a[key] = b[key]; }
							}
							return a;
						}
						function CBPGridGallery<?php echo $Total_Soft_Gallery_Video; ?>( el, options ) {
							// console.log(el);
							// console.log(options);
							this.el = el;
							this.options<?php echo $Total_Soft_Gallery_Video; ?> = extend<?php echo $Total_Soft_Gallery_Video; ?>( {}, this.options<?php echo $Total_Soft_Gallery_Video; ?> );
							extend<?php echo $Total_Soft_Gallery_Video; ?>( this.options<?php echo $Total_Soft_Gallery_Video; ?>, options );
							this._init<?php echo $Total_Soft_Gallery_Video; ?>();
						}
						CBPGridGallery<?php echo $Total_Soft_Gallery_Video; ?>.prototype.options<?php echo $Total_Soft_Gallery_Video; ?> = {};
						CBPGridGallery<?php echo $Total_Soft_Gallery_Video; ?>.prototype._init<?php echo $Total_Soft_Gallery_Video; ?> = function() {
							// main grid
							this.grid<?php echo $Total_Soft_Gallery_Video; ?> = this.el.querySelector( 'section.grid<?php echo $Total_Soft_Gallery_Video; ?>-wrap > ul.grid<?php echo $Total_Soft_Gallery_Video; ?>' );
							// main grid items
							this.gridItems<?php echo $Total_Soft_Gallery_Video; ?> = [].slice.call( this.grid<?php echo $Total_Soft_Gallery_Video; ?>.querySelectorAll( 'li:not(.grid<?php echo $Total_Soft_Gallery_Video; ?>-sizer)' ) );
							// items total
							this.itemsCount<?php echo $Total_Soft_Gallery_Video; ?> = this.gridItems<?php echo $Total_Soft_Gallery_Video; ?>.length;
							// slideshow grid
							this.slideshow<?php echo $Total_Soft_Gallery_Video; ?> = this.el.querySelector( 'section.slideshow<?php echo $Total_Soft_Gallery_Video; ?> > ul' );
							// slideshow grid items
							this.slideshowItems<?php echo $Total_Soft_Gallery_Video; ?> = [].slice.call( this.slideshow<?php echo $Total_Soft_Gallery_Video; ?>.children );
							// index of current slideshow item
							this.current<?php echo $Total_Soft_Gallery_Video; ?> = -1;
							// slideshow control buttons
							this.ctrlPrev<?php echo $Total_Soft_Gallery_Video; ?> = this.el.querySelector( 'section.slideshow<?php echo $Total_Soft_Gallery_Video; ?> > nav > span.nav-prev' );
							this.ctrlNext<?php echo $Total_Soft_Gallery_Video; ?> = this.el.querySelector( 'section.slideshow<?php echo $Total_Soft_Gallery_Video; ?> > nav > span.nav-next' );
							this.ctrlClose<?php echo $Total_Soft_Gallery_Video; ?> = this.el.querySelector( '.nav-close-RW<?php echo $Total_Soft_Gallery_Video; ?>' );
							this.ctrlClose2<?php echo $Total_Soft_Gallery_Video; ?> = this.el.querySelector( 'section.slideshow<?php echo $Total_Soft_Gallery_Video; ?> > nav > span.nav-close' );
							// init masonry grid
							this._initMasonry<?php echo $Total_Soft_Gallery_Video; ?>();
							// init events
							this._initEvents<?php echo $Total_Soft_Gallery_Video; ?>();
						};
						CBPGridGallery<?php echo $Total_Soft_Gallery_Video; ?>.prototype._initMasonry<?php echo $Total_Soft_Gallery_Video; ?> = function() {
							var grid<?php echo $Total_Soft_Gallery_Video; ?> = this.grid<?php echo $Total_Soft_Gallery_Video; ?>;
							imagesLoaded( grid<?php echo $Total_Soft_Gallery_Video; ?>, function() {
								
								new Masonry( grid<?php echo $Total_Soft_Gallery_Video; ?>, {
									itemSelector: 'li',
									columnWidth: grid<?php echo $Total_Soft_Gallery_Video; ?>.querySelector( '.grid<?php echo $Total_Soft_Gallery_Video; ?>-sizer' )
								});
							});
						};
						CBPGridGallery<?php echo $Total_Soft_Gallery_Video; ?>.prototype._initEvents<?php echo $Total_Soft_Gallery_Video; ?> = function() {
							var self = this;
							// open the slideshow when clicking on the main grid items
							this.gridItems<?php echo $Total_Soft_Gallery_Video; ?>.forEach( function( item, idx ) {
								item = jQuery(item).find('img');
								jQuery(item).bind("touchstart click",function(e){
									if(e.target !== this){
                                 	 return;
                                 }
                                 else{
                                 	e.preventDefault();
									self._openSlideshow<?php echo $Total_Soft_Gallery_Video; ?>( idx );
									jQuery('html, body').css({
									    'overflow': 'hidden'
									});
                                 }			
								})
							} );
							// slideshow controls
							this.ctrlPrev<?php echo $Total_Soft_Gallery_Video; ?>.addEventListener( 'click', function() { 
                                 var items = jQuery('.nav-close-RW<?php echo $Total_Soft_Gallery_Video;?>').children('li');
								var x = 0;
                                jQuery(items).each(function(i, el){
                                	if(jQuery(window).width() > 880){
                                   x--;
                                   jQuery(el).css({'z-index':x});
                                   }
								else{
									 jQuery(el).css({'z-index':'0'});
								}
                                });
								self._navigate<?php echo $Total_Soft_Gallery_Video; ?>( 'prev' ); } );
							this.ctrlNext<?php echo $Total_Soft_Gallery_Video; ?>.addEventListener( 'click', function() { 
                                var items = jQuery('.nav-close-RW<?php echo $Total_Soft_Gallery_Video; ?>').children('li');
                               	var last = jQuery('.nav-close-RW<?php echo $Total_Soft_Gallery_Video; ?>').children('li:last-child');
								self._navigate<?php echo $Total_Soft_Gallery_Video; ?>( 'next' ); } );
							this.ctrlClose<?php echo $Total_Soft_Gallery_Video; ?>.addEventListener( 'click', function(e) {
                                 if(e.target !== this){
                                 	 return;
                                 }
                                 else{
                                 	self._closeSlideshow<?php echo $Total_Soft_Gallery_Video; ?>();
                                 	jQuery('html, body').css({
									    'overflow': 'auto'
									});
                                 }
							 self._closeSlideshow<?php echo $Total_Soft_Gallery_Video; ?>(); } );
							this.ctrlClose2<?php echo $Total_Soft_Gallery_Video; ?>.addEventListener( 'click', function() { self._closeSlideshow<?php echo $Total_Soft_Gallery_Video; ?>(); } );
							// window resize
							window.addEventListener( 'resize', function() { self._resizeHandler(); } );
							// keyboard navigation events
							document.addEventListener( 'keydown', function( ev ) {
								if ( self.isSlideshowVisible<?php echo $Total_Soft_Gallery_Video; ?> ) {
									var keyCode = ev.keyCode || ev.which;
									switch (keyCode) {
										case 37:
											self._navigate<?php echo $Total_Soft_Gallery_Video; ?>( 'prev' );
											break;
										case 39:
											self._navigate<?php echo $Total_Soft_Gallery_Video; ?>( 'next' );
											break;
										case 27:
											self._closeSlideshow<?php echo $Total_Soft_Gallery_Video; ?>();
											break;
									}
								}
							} );
							// trick to prevent scrolling when slideshow is visible
							window.addEventListener( 'scroll', function() {
								if ( self.isSlideshowVisible<?php echo $Total_Soft_Gallery_Video; ?> ) 
								{
									window.scrollTo( self.scrollPosition ? self.scrollPosition.x : 0, self.scrollPosition ? self.scrollPosition.y : 0 );
								}
								else 
								{
									self.scrollPosition = { x : window.pageXOffset || docElem.scrollLeft, y : window.pageYOffset || docElem.scrollTop };
								}
							});
						};
						CBPGridGallery<?php echo $Total_Soft_Gallery_Video; ?>.prototype._openSlideshow<?php echo $Total_Soft_Gallery_Video; ?> = function( pos ) {
							this.isSlideshowVisible<?php echo $Total_Soft_Gallery_Video; ?> = true;
							this.current<?php echo $Total_Soft_Gallery_Video; ?> = pos;
							classie.addClass( this.el, 'slideshow<?php echo $Total_Soft_Gallery_Video; ?>-open' );
							/* position slideshow items */
							// set viewport items (current, next and previous)
							this._setViewportItems<?php echo $Total_Soft_Gallery_Video; ?>();
							// add class "current" and "show" to currentItem
							classie.addClass( this.currentItem<?php echo $Total_Soft_Gallery_Video; ?>, 'current<?php echo $Total_Soft_Gallery_Video; ?>' );
							classie.addClass( this.currentItem<?php echo $Total_Soft_Gallery_Video; ?>, 'show<?php echo $Total_Soft_Gallery_Video; ?>' );
							if(jQuery(this.currentItem<?php echo $Total_Soft_Gallery_Video; ?>).hasClass('videocontainer'))
							{
								var videoid = jQuery(this.currentItem<?php echo $Total_Soft_Gallery_Video; ?>).find('video').attr('id');
								document.getElementById(videoid).play();
							}
							else if(jQuery(this.currentItem<?php echo $Total_Soft_Gallery_Video; ?>).hasClass('iframecontainer'))
							{
								var url = jQuery(this.currentItem<?php echo $Total_Soft_Gallery_Video; ?>).find('iframe').attr('src');
								if(url.indexOf('start')===-1 && url.indexOf('vimeo')!=-1 || url.indexOf('youtube')!=-1){
									jQuery(this.currentItem<?php echo $Total_Soft_Gallery_Video; ?>).find('iframe').attr('src', jQuery(this.currentItem<?php echo $Total_Soft_Gallery_Video; ?>).find('iframe').attr('src').split('?autoplay=1')[0]+'?autoplay=0;rel=0;iv_load_policy=3');
								}else if(url.indexOf('start')!=-1 && url.indexOf('vimeo')!=-1 || url.indexOf('youtube')!=-1){
									jQuery(this.currentItem<?php echo $Total_Soft_Gallery_Video; ?>).find('iframe').attr('src', jQuery(this.currentItem<?php echo $Total_Soft_Gallery_Video; ?>).find('iframe').attr('src').split('&autoplay=1')[0]+'&autoplay=0;rel=0;iv_load_policy=3');
								}

								if(url.indexOf('wistia') !=-1){
									jQuery(this.currentItem<?php echo $Total_Soft_Gallery_Video; ?>).find('iframe').attr('src', jQuery(this.currentItem<?php echo $Total_Soft_Gallery_Video; ?>).find('iframe').attr('src'));
								}
							}
							// add class show to next and previous items
							// position previous item on the left side and the next item on the right side
							if( this.prevItem<?php echo $Total_Soft_Gallery_Video; ?> ) {
                                  var last = jQuery('.imgLiii').last();
								var size = jQuery( window ).width();
							 var items = jQuery('.nav-close-RW<?php echo $Total_Soft_Gallery_Video;?>').children('li');
                                jQuery(items).each(function(i, el){
                                    if(jQuery(el).attr('class') == "iframecontainer current<?php echo $Total_Soft_Gallery_Video; ?> show<?php echo $Total_Soft_Gallery_Video; ?>"){
                                       // jQuery(el).prev().css({'opacity':'0.96'});
                                    }
                                });

							jQuery(last).on('click touchstart', function(){
								jQuery('.iframecontainer').removeClass('show<?php echo $Total_Soft_Gallery_Video; ?>');
								jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> ul > li').last().addClass('show<?php echo $Total_Soft_Gallery_Video; ?>');
								jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?> ul > li').last().prev().addClass('show<?php echo $Total_Soft_Gallery_Video; ?>');
		                      	});
									classie.addClass( this.prevItem<?php echo $Total_Soft_Gallery_Video; ?>, 'show<?php echo $Total_Soft_Gallery_Video; ?>' );
										var translateVal = Number( -1 * ( getViewportW<?php echo $Total_Soft_Gallery_Video; ?>() / 2 + this.prevItem<?php echo  $Total_Soft_Gallery_Video; ?>.offsetWidth / 2 ) );
										
									setTransform<?php echo $Total_Soft_Gallery_Video; ?>( this.prevItem<?php echo $Total_Soft_Gallery_Video; ?>, support.support3d ? 'translate3d(' + translateVal + 'px, 0, -150px)' : 'translate(' + translateVal + 'px)' );
									}
							if( this.nextItem<?php echo $Total_Soft_Gallery_Video; ?> ) {
                                var items = jQuery('.nav-close-RW<?php echo $Total_Soft_Gallery_Video; ?>').children('li');
                                jQuery(items).each(function(i, el){
                                    if(jQuery(el).attr('class') == "iframecontainer current<?php echo $Total_Soft_Gallery_Video; ?> show<?php echo $Total_Soft_Gallery_Video; ?>"){
                                       // jQuery(el).next().css({'opacity':'0.96'});
                                    }
                                });
								var last_item = jQuery('.nav-close-RW<?php echo $Total_Soft_Gallery_Video; ?>').children('li:last-child');
								var first_item = jQuery('.nav-close-RW<?php echo $Total_Soft_Gallery_Video; ?>').children('li:first-child');
								var totalsoft = jQuery('.TotalSoft_GV_GG_SP').children('ul');
								var class_name = jQuery(last_item).attr('class');
								classie.addClass( this.nextItem<?php echo $Total_Soft_Gallery_Video; ?>, 'show<?php echo $Total_Soft_Gallery_Video; ?>' );
								if(class_name != 'iframecontainer current<?php echo $Total_Soft_Gallery_Video; ?> show<?php echo $Total_Soft_Gallery_Video; ?>'){
									var translateVal = Number( getViewportW<?php echo $Total_Soft_Gallery_Video; ?>() / 2 - this.nextItem<?php echo $Total_Soft_Gallery_Video; ?>.offsetWidth / 2 );
								setTransform<?php echo $Total_Soft_Gallery_Video; ?>( this.nextItem<?php echo $Total_Soft_Gallery_Video; ?>, support.support3d ? 'translate3d(' + translateVal + 'px, 0, -150px)' : 'translate(' + translateVal + 'px)' );
								}
							}
						};
						CBPGridGallery<?php echo $Total_Soft_Gallery_Video; ?>.prototype._navigate<?php echo $Total_Soft_Gallery_Video; ?> = function( dir ) {
							if( this.isAnimating ) return;
							if( dir === 'next' && this.current<?php echo $Total_Soft_Gallery_Video; ?> === this.itemsCount<?php echo $Total_Soft_Gallery_Video; ?> - 1 ||  dir === 'prev' && this.current<?php echo $Total_Soft_Gallery_Video; ?> === 0  ) {
								this._closeSlideshow<?php echo $Total_Soft_Gallery_Video; ?>();
								return;
							}
							this.isAnimating = true;
							// reset viewport items
							this._setViewportItems<?php echo $Total_Soft_Gallery_Video; ?>();
							var self = this,
								itemWidth = this.currentItem<?php echo $Total_Soft_Gallery_Video; ?>.offsetWidth,
								// positions for the centered/current item, both the side items and the incoming ones
								transformLeftStr = support.support3d ? 'translate3d(-' + Number( getViewportW<?php echo $Total_Soft_Gallery_Video; ?>() / 2 + itemWidth / 2 ) + 'px, 0, -150px)' : 'translate(-' + Number( getViewportW<?php echo $Total_Soft_Gallery_Video; ?>() / 2 + itemWidth / 2 ) + 'px)',
								transformRightStr = support.support3d ? 'translate3d(' + Number( getViewportW<?php echo $Total_Soft_Gallery_Video; ?>() / 2 - itemWidth / 2 ) + 'px, 0, -150px)' : 'translate(' + Number( getViewportW<?php echo $Total_Soft_Gallery_Video; ?>() / 2 + itemWidth / 2 ) + 'px)',
								transformCenterStr = '', transformOutStr, transformIncomingStr,
								// incoming item
								incomingItem<?php echo $Total_Soft_Gallery_Video; ?>;
							if( dir === 'next' ) {
								transformOutStr = support.support3d ? 'translate3d( -' + Number( (getViewportW<?php echo $Total_Soft_Gallery_Video; ?>() * 2) / 2 + itemWidth / 2 ) + 'px, 0, -150px )' : 'translate(-' + Number( (getViewportW<?php echo $Total_Soft_Gallery_Video; ?>() * 2) / 2 + itemWidth / 2 ) + 'px)';
								transformIncomingStr = support.support3d ? 'translate3d( ' + Number( (getViewportW<?php echo $Total_Soft_Gallery_Video; ?>() * 2) / 2 + itemWidth / 2 ) + 'px, 0, -150px )' : 'translate(' + Number( (getViewportW<?php echo $Total_Soft_Gallery_Video; ?>() * 2) / 2 + itemWidth / 2 ) + 'px)';
								var size = jQuery(window).width();
								if(size<820){
								var items = jQuery('.nav-close-RW<?php echo $Total_Soft_Gallery_Video; ?>').children('li');
								jQuery(items).each(function(i, el){
	                             	 	if(jQuery(el).attr('class') == "iframecontainer current<?php echo $Total_Soft_Gallery_Video; ?> show<?php echo $Total_Soft_Gallery_Video; ?>"){
	                             	 		jQuery(el).css({
										    // "opacity":"0",
										}).animate({opacity:1},100);
	                             	 	}
	                             	 	if(jQuery(el).attr('class') == "iframecontainer show<?php echo $Total_Soft_Gallery_Video; ?>"){
	                             	 		jQuery(el).css({
										    // "opacity":"0",
										    "z-index": '0',
										}).animate({opacity:1},500);
	                             	 	}
	                             	 });
								}
							}
							else {
						        transformOutStr = support.support3d ? 'translate3d( ' + Number( (getViewportW<?php echo $Total_Soft_Gallery_Video; ?>() * 2) / 2 - itemWidth / 2 ) - itemWidth + 'px, 0, -150px )' : 'translate(' + Number( (getViewportW<?php echo $Total_Soft_Gallery_Video; ?>() * 2) / 2 + itemWidth / 2 ) +itemWidth+ 'px)';
								transformIncomingStr = support.support3d ? 'translate3d( -' + Number( (getViewportW<?php echo $Total_Soft_Gallery_Video; ?>() * 2) / 2 - itemWidth / 2 ) + 'px, 0, -150px )' : 'translate(-' + Number( (getViewportW<?php echo $Total_Soft_Gallery_Video; ?>() * 2) / 2 + itemWidth / 2 ) + 'px)';
								var size = jQuery(window).width();
								if(size<820){
							var items = jQuery('.nav-close-RW<?php echo $Total_Soft_Gallery_Video; ?>').children('li');
							var x = 0;
							jQuery(items).each(function(i, el){
								x--;
                             	 	if(jQuery(el).attr('class') == "iframecontainer current<?php echo $Total_Soft_Gallery_Video; ?> show<?php echo $Total_Soft_Gallery_Video; ?>"){
                             	 		jQuery(el).css({
									    "opacity":"0",
									   
									}).animate({opacity:1},200);
                             	 	}
                             	 	if(jQuery(el).attr('class') == "iframecontainer show<?php echo $Total_Soft_Gallery_Video; ?>"){
                             	 		jQuery(el).css({
                             	 		 "z-index": x,
									    "opacity":"0",
									}).animate({opacity:1},400);
                             	 	}
                             	 });
								}
							}
							// remove class animatable from the slideshow grid (if it has already)
							classie.removeClass( self.slideshow<?php echo $Total_Soft_Gallery_Video; ?>, 'animatable' );
							if( dir === 'next' && this.current<?php echo $Total_Soft_Gallery_Video; ?> < this.itemsCount<?php echo $Total_Soft_Gallery_Video; ?> - 2 || dir === 'prev' && this.current<?php echo $Total_Soft_Gallery_Video; ?> > 1 ) {
								// we have an incoming item!
								incomingItem<?php echo $Total_Soft_Gallery_Video; ?> = this.slideshowItems<?php echo $Total_Soft_Gallery_Video; ?>[ dir === 'next' ? this.current<?php echo $Total_Soft_Gallery_Video; ?> + 2 : this.current<?php echo $Total_Soft_Gallery_Video; ?> - 2 ];
								setTransform<?php echo $Total_Soft_Gallery_Video; ?>( incomingItem<?php echo $Total_Soft_Gallery_Video; ?>, transformIncomingStr );
								classie.addClass( incomingItem<?php echo $Total_Soft_Gallery_Video; ?>, 'show<?php echo $Total_Soft_Gallery_Video; ?>' );
							}
							var slide<?php echo $Total_Soft_Gallery_Video; ?> = function() {
								// add class animatable to the slideshow grid
								classie.addClass( self.slideshow<?php echo $Total_Soft_Gallery_Video; ?>, 'animatable' );
								// overlays:
								if(jQuery(self.currentItem<?php echo $Total_Soft_Gallery_Video; ?>).hasClass('videocontainer'))
								{
									var videoid = jQuery(self.currentItem<?php echo $Total_Soft_Gallery_Video; ?>).find('video').attr('id');
									document.getElementById(videoid).pause();
								}
								else if(jQuery(self.currentItem<?php echo $Total_Soft_Gallery_Video; ?>).hasClass('iframecontainer'))
								{
									var url = jQuery(self.currentItem<?php echo $Total_Soft_Gallery_Video; ?>).find('iframe').attr('src');
									if(url.indexOf('start')===-1 && url.indexOf('vimeo')!=-1 || url.indexOf('youtube')!=-1){
										jQuery(self.currentItem<?php echo $Total_Soft_Gallery_Video; ?>).find('iframe').attr('src', jQuery(self.currentItem<?php echo $Total_Soft_Gallery_Video; ?>).find('iframe').attr('src').split('?autoplay=0')[0]+'?autoplay=0;rel=0;iv_load_policy=3');
										// console.log('-1');
									}else if(url.indexOf('start')!=-1 && url.indexOf('vimeo')!=-1 || url.indexOf('youtube')!=-1){
										jQuery(self.currentItem<?php echo $Total_Soft_Gallery_Video; ?>).find('iframe').attr('src', jQuery(self.currentItem<?php echo $Total_Soft_Gallery_Video; ?>).find('iframe').attr('src').split('?autoplay=0')[0]+'?autoplay=0;rel=0;iv_load_policy=3');
									}
									if(url.indexOf('wistia') !=-1){
										var wistia_url = jQuery(self.currentItem<?php echo $Total_Soft_Gallery_Video; ?>).find('iframe').attr('src');
										jQuery(self.currentItem<?php echo $Total_Soft_Gallery_Video; ?>).find('iframe').attr('src', wistia_url);
									}
								}
								classie.removeClass( self.currentItem<?php echo $Total_Soft_Gallery_Video; ?>, 'current<?php echo $Total_Soft_Gallery_Video; ?>' );
								var nextCurrent = dir === 'next' ? self.nextItem<?php echo $Total_Soft_Gallery_Video; ?> : self.prevItem<?php echo $Total_Soft_Gallery_Video; ?>;
								classie.addClass( nextCurrent, 'current<?php echo $Total_Soft_Gallery_Video; ?>' );
								if(jQuery(nextCurrent).hasClass('videocontainer'))
								{
									var videoid = jQuery(nextCurrent).find('video').attr('id');
									document.getElementById(videoid).play();
								}
								else if(jQuery(nextCurrent).hasClass('iframecontainer'))
								{
								jQuery(nextCurrent).find('iframe').attr('src', jQuery(nextCurrent).find('iframe').attr('src'));
									var url = jQuery(nextCurrent).find('iframe').attr('src');
									if(url.indexOf('start')===-1 && url.indexOf('vimeo')!=-1 || url.indexOf('youtube')!=-1){
										// console.log('1');
										jQuery(nextCurrent).find('iframe').attr('src', jQuery(nextCurrent).find('iframe').attr('src').split('?autoplay=0')[0]+'?autoplay=0;rel=0;iv_load_policy=3');
									}else if(url.indexOf('start')!=-1 && url.indexOf('vimeo')!=-1 || url.indexOf('youtube')!=-1){
										// console.log('2');
										jQuery(nextCurrent).find('iframe').attr('src', jQuery(nextCurrent).find('iframe').attr('src').split('?autoplay=0')[0]+'&autoplay=0;rel=0;iv_load_policy=3');
									}
									if(url.indexOf('wistia') !=-1){
										// console.log('w');
										jQuery(this.currentItem<?php echo $Total_Soft_Gallery_Video; ?>).find('iframe').attr('src', jQuery(this.currentItem<?php echo $Total_Soft_Gallery_Video; ?>).find('iframe').attr('src'));
									}
								}
								setTransform<?php echo $Total_Soft_Gallery_Video; ?>( self.currentItem<?php echo $Total_Soft_Gallery_Video; ?>, dir === 'next' ? transformLeftStr : transformRightStr );
								if( self.nextItem<?php echo $Total_Soft_Gallery_Video; ?> ) 
								{
									setTransform<?php echo $Total_Soft_Gallery_Video; ?>( self.nextItem<?php echo $Total_Soft_Gallery_Video; ?>, dir === 'next' ? transformCenterStr : transformOutStr );
								}
								if( self.prevItem<?php echo $Total_Soft_Gallery_Video; ?> ) 
								{
									setTransform<?php echo $Total_Soft_Gallery_Video; ?>( self.prevItem<?php echo $Total_Soft_Gallery_Video; ?>, dir === 'next' ? transformOutStr : transformCenterStr );
								}
								if( incomingItem<?php echo $Total_Soft_Gallery_Video; ?> ) 
								{
									setTransform<?php echo $Total_Soft_Gallery_Video; ?>( incomingItem<?php echo $Total_Soft_Gallery_Video; ?>, dir === 'next' ? transformRightStr : transformLeftStr );
								}
								var onEndTransitionFn<?php echo $Total_Soft_Gallery_Video; ?> = function( ev ) {
									if( support.transitions ) 
									{
										if( ev.propertyName.indexOf( 'transform' ) === -1 ) return false;
										this.removeEventListener( transEndEventName<?php echo $Total_Soft_Gallery_Video; ?>, onEndTransitionFn<?php echo $Total_Soft_Gallery_Video; ?> );
									}
									if( self.prevItem<?php echo $Total_Soft_Gallery_Video; ?> && dir === 'next' ) 
									{
										classie.removeClass( self.prevItem<?php echo $Total_Soft_Gallery_Video; ?>, 'show<?php echo $Total_Soft_Gallery_Video; ?>' );
									}
									else if( self.nextItem<?php echo $Total_Soft_Gallery_Video; ?> && dir === 'prev' ) 
							{
									var last_item = jQuery('.nav-close-RW<?php echo $Total_Soft_Gallery_Video; ?>').children('li:last-child');
                                 	var pre = jQuery(last_item[0]).prev();
                                 	if(jQuery(pre[0]).attr('class') == "iframecontainer show<?php echo $Total_Soft_Gallery_Video; ?> current<?php echo $Total_Soft_Gallery_Video; ?>" ){
                                 		jQuery(last_item[0]).not('show<?php echo $Total_Soft_Gallery_Video; ?>');
                                 			}
                                 			if(jQuery(pre[0]).attr('class') != "iframecontainer show<?php echo $Total_Soft_Gallery_Video; ?> current<?php echo $Total_Soft_Gallery_Video; ?>"){
                                 				classie.removeClass( self.nextItem<?php echo $Total_Soft_Gallery_Video; ?>, 'show<?php echo $Total_Soft_Gallery_Video; ?>' );
                                 			}		
									}
									/*------------------------------------------------------*/
                                    if( dir === 'next' )
                                    {
                                        self.prevItem<?php echo $Total_Soft_Gallery_Video; ?> = self.currentItem<?php echo $Total_Soft_Gallery_Video; ?>;
                                        self.currentItem<?php echo $Total_Soft_Gallery_Video; ?> = self.nextItem<?php echo $Total_Soft_Gallery_Video; ?>;
                                        if( incomingItem<?php echo $Total_Soft_Gallery_Video; ?> )
                                        {
                                            self.nextItem<?php echo $Total_Soft_Gallery_Video; ?> = incomingItem<?php echo $Total_Soft_Gallery_Video; ?>;
                                        }
                                        jQuery(self.prevItem<?php echo $Total_Soft_Gallery_Video; ?>).fadeIn("0.2",function(){
                                            jQuery(this).css({'display':'block',});
                                        });
                                    }
									else 
									{
										self.nextItem<?php echo $Total_Soft_Gallery_Video; ?> = self.currentItem<?php echo $Total_Soft_Gallery_Video; ?>;
										self.currentItem<?php echo $Total_Soft_Gallery_Video; ?> = self.prevItem<?php echo $Total_Soft_Gallery_Video; ?>;
										if( incomingItem<?php echo $Total_Soft_Gallery_Video; ?> ) 
										{
											self.prevItem<?php echo $Total_Soft_Gallery_Video; ?> = incomingItem<?php echo $Total_Soft_Gallery_Video; ?>;
										}
									}
									self.current<?php echo $Total_Soft_Gallery_Video; ?> = dir === 'next' ? self.current<?php echo $Total_Soft_Gallery_Video; ?> + 1 : self.current<?php echo $Total_Soft_Gallery_Video; ?> - 1;
									self.isAnimating = false;
								};
								if( support.transitions ) 
								{
									self.currentItem<?php echo $Total_Soft_Gallery_Video; ?>.addEventListener( transEndEventName<?php echo $Total_Soft_Gallery_Video; ?>, onEndTransitionFn<?php echo $Total_Soft_Gallery_Video; ?> );
								}
								else 
								{
									onEndTransitionFn<?php echo $Total_Soft_Gallery_Video; ?>();
								}
							};
							setTimeout( slide<?php echo $Total_Soft_Gallery_Video; ?>, 25 );
						}
						CBPGridGallery<?php echo $Total_Soft_Gallery_Video; ?>.prototype._closeSlideshow<?php echo $Total_Soft_Gallery_Video; ?> = function( pos ) {
							var all_iframecontainer = jQuery('.iframecontainer').find('iframe');
							jQuery(all_iframecontainer).each(function(i,el){
                            var url = jQuery(el).attr('src');
                              if(url.indexOf('wistia')!=-1){
                              	// console.log(url);
                               var src = jQuery(el).attr('src');
                              	jQuery(el).attr('src',src);
                              }
							});
							// remove class slideshow-open from the grid gallery elem
							classie.removeClass( this.el, 'slideshow<?php echo $Total_Soft_Gallery_Video; ?>-open' );
							// remove class animatable from the slideshow grid
							classie.removeClass( this.slideshow<?php echo $Total_Soft_Gallery_Video; ?>, 'animatable' );
							var self = this,
								onEndTransitionFn<?php echo $Total_Soft_Gallery_Video; ?> = function( ev ) {
									if( support.transitions ) 
									{
										if( ev.target.tagName.toLowerCase() !== 'ul' ) return;
										this.removeEventListener( transEndEventName<?php echo $Total_Soft_Gallery_Video; ?>, onEndTransitionFn<?php echo $Total_Soft_Gallery_Video; ?> );
									}
									// remove classes show and current from the slideshow items
									classie.removeClass( self.currentItem<?php echo $Total_Soft_Gallery_Video; ?>, 'current<?php echo $Total_Soft_Gallery_Video; ?>' );
									classie.removeClass( self.currentItem<?php echo $Total_Soft_Gallery_Video; ?>, 'show<?php echo $Total_Soft_Gallery_Video; ?>' );
									if(jQuery(self.currentItem<?php echo $Total_Soft_Gallery_Video; ?>).hasClass('videocontainer'))
									{
										var videoid = jQuery(self.currentItem<?php echo $Total_Soft_Gallery_Video; ?>).find('video').attr('id');
										document.getElementById(videoid).pause();
									}
									else if(jQuery(self.currentItem<?php echo $Total_Soft_Gallery_Video; ?>).hasClass('iframecontainer'))
									{
										// jQuery(self.currentItem<?php echo $Total_Soft_Gallery_Video; ?>).find('iframe').attr('src', jQuery(self.currentItem<?php echo $Total_Soft_Gallery_Video; ?>).find('iframe').attr('src').split('?autoplay=1')[0]+'?autoplay=0');
									}
									if( self.prevItem<?php echo $Total_Soft_Gallery_Video; ?> ) 
									{
										classie.removeClass( self.prevItem<?php echo $Total_Soft_Gallery_Video; ?>, 'show<?php echo $Total_Soft_Gallery_Video; ?>' );
									}
									if( self.nextItem<?php echo $Total_Soft_Gallery_Video; ?> ) 
									{
										classie.removeClass( self.nextItem<?php echo $Total_Soft_Gallery_Video; ?>, 'show<?php echo $Total_Soft_Gallery_Video; ?>' );
									}
									// also reset any transforms for all the items
									self.slideshowItems<?php echo $Total_Soft_Gallery_Video; ?>.forEach( function( item ) { setTransform<?php echo $Total_Soft_Gallery_Video; ?>( item, '' ); } );
									self.isSlideshowVisible<?php echo $Total_Soft_Gallery_Video; ?> = false;
								};
							if( support.transitions ) 
							{
								this.el.addEventListener( transEndEventName<?php echo $Total_Soft_Gallery_Video; ?>, onEndTransitionFn<?php echo $Total_Soft_Gallery_Video; ?> );
							}
							else 
							{
								onEndTransitionFn<?php echo $Total_Soft_Gallery_Video; ?>();
							}
							 var items = jQuery('.nav-close-RW<?php echo $Total_Soft_Gallery_Video; ?>').children('li');
							 jQuery(items).removeClass('show<?php echo $Total_Soft_Gallery_Video; ?> current<?php echo $Total_Soft_Gallery_Video; ?>');
						};
						CBPGridGallery<?php echo $Total_Soft_Gallery_Video; ?>.prototype._setViewportItems<?php echo $Total_Soft_Gallery_Video; ?> = function() {
							this.currentItem<?php echo $Total_Soft_Gallery_Video; ?> = null;
							this.prevItem<?php echo $Total_Soft_Gallery_Video; ?> = null;
							this.nextItem<?php echo $Total_Soft_Gallery_Video; ?><?php echo $Total_Soft_Gallery_Video; ?> = null;
							if( this.current<?php echo $Total_Soft_Gallery_Video; ?> > 0 ) 
							{
								this.prevItem<?php echo $Total_Soft_Gallery_Video; ?> = this.slideshowItems<?php echo $Total_Soft_Gallery_Video; ?>[ this.current<?php echo $Total_Soft_Gallery_Video; ?> - 1 ];
							}
							if( this.current<?php echo $Total_Soft_Gallery_Video; ?> < this.itemsCount<?php echo $Total_Soft_Gallery_Video; ?> - 1 ) 
							{
								this.nextItem<?php echo $Total_Soft_Gallery_Video; ?> = this.slideshowItems<?php echo $Total_Soft_Gallery_Video; ?>[ this.current<?php echo $Total_Soft_Gallery_Video; ?> + 1 ];
							}
							this.currentItem<?php echo $Total_Soft_Gallery_Video; ?> = this.slideshowItems<?php echo $Total_Soft_Gallery_Video; ?>[ this.current<?php echo $Total_Soft_Gallery_Video; ?> ];
						}
						CBPGridGallery<?php echo $Total_Soft_Gallery_Video; ?>.prototype._resizeHandler = function() {
							var self = this;
							function delayed<?php echo $Total_Soft_Gallery_Video; ?>() {
								self._resize<?php echo $Total_Soft_Gallery_Video; ?>();
								self._resizeTimeout<?php echo $Total_Soft_Gallery_Video; ?> = null;
							}
							if ( this._resizeTimeout<?php echo $Total_Soft_Gallery_Video; ?> ) { clearTimeout( this._resizeTimeout<?php echo $Total_Soft_Gallery_Video; ?> ); }
							this._resizeTimeout<?php echo $Total_Soft_Gallery_Video; ?> = setTimeout( delayed<?php echo $Total_Soft_Gallery_Video; ?>, 50 );
						}
						CBPGridGallery<?php echo $Total_Soft_Gallery_Video; ?>.prototype._resize<?php echo $Total_Soft_Gallery_Video; ?> = function() {
							if ( this.isSlideshowVisible<?php echo $Total_Soft_Gallery_Video; ?> ) 
							{
								// update width value
								if( this.prevItem<?php echo $Total_Soft_Gallery_Video; ?> ) 
								{
									var translateVal = Number( getViewportW<?php echo $Total_Soft_Gallery_Video; ?>() / 2 - this.nextItem<?php echo $Total_Soft_Gallery_Video; ?>.offsetWidth / 2 );
									setTransform<?php echo $Total_Soft_Gallery_Video; ?>( this.nextItem<?php echo $Total_Soft_Gallery_Video; ?>, support.support3d ? 'translate3d(' + translateVal + 'px, 0, -150px)' : 'translate(' + translateVal + 'px)' );
								}
								if( this.nextItem<?php echo $Total_Soft_Gallery_Video; ?> ) 
								{
									var translateVal = Number( getViewportW<?php echo $Total_Soft_Gallery_Video; ?>() / 2 - this.nextItem<?php echo $Total_Soft_Gallery_Video; ?>.offsetWidth / 2 );
									setTransform<?php echo $Total_Soft_Gallery_Video; ?>( this.nextItem<?php echo $Total_Soft_Gallery_Video; ?>, support.support3d ? 'translate3d(' + translateVal + 'px, 0, -150px)' : 'translate(' + translateVal + 'px)' );
								}
							}
						}
						// add to global namespace
						window.CBPGridGallery<?php echo $Total_Soft_Gallery_Video; ?> = CBPGridGallery<?php echo $Total_Soft_Gallery_Video; ?>;
					})( window );
					function Total_Soft_GV_GVG_CheckPosition3(){
								var parent_width = jQuery('#GRU<?php echo $Total_Soft_Gallery_Video; ?>').parent().width();
								var elements = jQuery('.imgLiii');
								if(parent_width <= "400"){
									if(jQuery(elements).eq(0).attr('class') == "imgLiii" && jQuery(elements).eq(1).attr('class') == "imgLiii noshow1"){
		                        	jQuery('#GRU<?php echo $Total_Soft_Gallery_Video; ?>').css({'max-width':'none','margin':''})
		                        	//jQuery('#pagination<?php echo $Total_Soft_Gallery_Video; ?>').css({'text-align': '-webkit-auto'});
		                       		}
								}
							}
					Total_Soft_GV_GVG_CheckPosition3();
					jQuery(window).resize(function(){Total_Soft_GV_GVG_CheckPosition3();});
					<?php if($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Grid Video Gallery'){ ?>
					var ShowType = '<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType;?>';
					if(ShowType == 'Pagination'){
					var pages = <?php echo ceil(count($Total_Soft_GalleryV_Videos)/$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage) ?>;
					var count = <?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>;
					var TotalSoftGV_ID = <?php echo $Total_Soft_Gallery_Video;?>;
					document.getElementById('pagination<?php echo $Total_Soft_Gallery_Video; ?>').innerHTML = createPaginationGG(pages, 0,TotalSoftGV_ID,count);
					function createPaginationGG(pages, page,TotalSoftGV_ID,count) {
                        var delaytime = 0;
					  	var TS_VG_GG_AE = jQuery('.TS_VG_GG_AE_'+TotalSoftGV_ID).val();
						var allGallery = document.getElementById('GRU'+TotalSoftGV_ID).getElementsByClassName("imgLiii");
						if (page != 0) {
                              jQuery('html,body').animate({
						      scrollTop: jQuery(".container_1"+TotalSoftGV_ID).offset().top - jQuery(window).height()/2
						   },100);
						  }
						  else{
						  	page=1;
						  }
						var TotalSoftCV = jQuery('#GRU'+TotalSoftGV_ID).find('.imgLiii').size();
						for(i=0;i<=allGallery.length; i++){
	                       for(i=0;i<TotalSoftCV;i++){
							if(i>=count*(page-1) && i<count*page){
								delaytime++;
								if(TS_VG_GG_AE == ''){}
								else if(TS_VG_GG_AE == 'fadeIn')
								{
									jQuery("#TotalSoft_GV_GVG_"+TotalSoftGV_ID+"_"+parseInt(parseInt(i)+1)).css({"display":"block",'animation':'fadeIn 0.65s ease '+0.2*delaytime+'s forwards','-webkit-animation':'fadeIn 0.65s ease '+0.2*delaytime+'s forwards','-moz-animation':'fadeIn 0.65s ease '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_GG_AE == 'moveUp')
								{
									jQuery("#TotalSoft_GV_GVG_"+TotalSoftGV_ID+"_"+parseInt(parseInt(i)+1)).css({"display":"block",'animation':'moveUp 0.65s ease '+0.2*delaytime+'s forwards','-webkit-animation':'moveUp 0.65s ease '+0.2*delaytime+'s forwards','-moz-animation':'moveUp 0.65s ease '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_GG_AE == 'scaleUp')
								{
									jQuery("#TotalSoft_GV_GVG_"+TotalSoftGV_ID+"_"+parseInt(parseInt(i)+1)).css({"display":"block",'animation':'scaleUp 0.65s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'scaleUp 0.65s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'scaleUp 0.65s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_GG_AE == 'fallPerspective')
								{
									jQuery("#TotalSoft_GV_GVG_"+TotalSoftGV_ID+"_"+parseInt(parseInt(i)+1)).css({"display":"block",'animation':'fallPerspective 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'fallPerspective 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'fallPerspective 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_GG_AE == 'fly')
									{
										jQuery("#TotalSoft_GV_GVG_"+TotalSoftGV_ID+"_"+parseInt(parseInt(i)+1)).css({'display':'block','opacity':'0','animation':'fly 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'fly 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'fly 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
									}
								else if(TS_VG_GG_AE == 'flip')
								{
									jQuery("#TotalSoft_GV_GVG_"+TotalSoftGV_ID+"_"+parseInt(parseInt(i)+1)).css({"display":"block",'animation':'flip 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'flip 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'flip 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_GG_AE == 'helix')
								{
									jQuery("#TotalSoft_GV_GVG_"+TotalSoftGV_ID+"_"+parseInt(parseInt(i)+1)).css({"display":"block",'animation':'helix 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'helix 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'helix 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_GG_AE == 'popUp')
								{
									jQuery("#TotalSoft_GV_GVG_"+TotalSoftGV_ID+"_"+parseInt(parseInt(i)+1)).css({"display":"block",'animation':'popUp 0.8s ease-in '+0.2*delaytime+'s forwards','-webkit-animation':'popUp 0.8s ease-in '+0.2*delaytime+'s forwards','-moz-animation':'popUp 0.8s ease-in '+0.2*delaytime+'s forwards'});
								}
							}
							else
							{ 
							jQuery("#TotalSoft_GV_GVG_"+TotalSoftGV_ID+"_"+parseInt(parseInt(i)+1)).css('display','none');
							}
						}
					}
						 var allGallery = document.getElementById('GRU'+TotalSoftGV_ID).getElementsByClassName("imgLiii");
						  var array = [];
						  for(var i=0; i<allGallery.length; i++){
						  	allGallery[i].style.display = "none";
						  	if( i >= count*(page-1) && i < page*count ){
						  		allGallery[i].style.display = "block";
						  	}
						  }
					  let str = '<ul>';
					  let active;
					  let pageCutLow = page - 1;
					  let pageCutHigh = page + 1;
					  var next = '<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_12;?>';
					  var prev = '<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_13;?>';
					  if (page > 1) {
					    str += '<li class="page-item previous no"><a onclick="createPaginationGG('+pages+', '+(page-1)+', '+TotalSoftGV_ID+','+count+')">'+prev+'</a></li>';
					  }
					  if (pages < 6) {
					    for (let p = 1; p <= pages; p++) {
					      active = page == p ? "active" : "no";
					      str += '<li class="'+active+'"><a class="'+active+'" onclick="createPaginationGG('+pages+', '+p+', '+TotalSoftGV_ID+','+count+')">'+ p +'</a></li>';
					    }
					  }
					  else {
					    if (page > 2) {
					      str += '<li class="no page-item"><a onclick="createPaginationGG('+pages+', 1,'+TotalSoftGV_ID+','+count+')">1</a></li>';
					      if (page > 3) {
					          str += '<li class="out-of-range"><a onclick="createPaginationGG('+pages+','+(page-2)+','+TotalSoftGV_ID+','+count+')">...</a></li>';
					      }
					    }
					if (page === 1) {
				      pageCutHigh;
				    } else if (page === 2) {
				      pageCutHigh;
				    }
				    if (page === pages) {
				      pageCutLow;
				    } else if (page === pages-1) {
				      pageCutLow;
				    }
				    for (let p = pageCutLow; p <= pageCutHigh; p++) {
				      if (p === 0) {
				        p += 1;
				      }
				      if (p > pages) {
				        continue
				      }
					      active = page == p ? "active" : "no";
					      str += '<li class="page-item '+active+'"><a class="'+active+'" onclick="createPaginationGG('+pages+', '+p+','+TotalSoftGV_ID+','+count+')">'+ p +'</a></li>';
					    }
					    if (page < pages-1) {
					      if (page < pages-2) {
					        str += '<li class="out-of-range"><a onclick="createPaginationGG('+pages+','+(page+2)+','+TotalSoftGV_ID+','+count+')">...</a></li>';
					      }
					      str += '<li class="page-item no"><a onclick="createPaginationGG('+pages+', '+pages+','+TotalSoftGV_ID+','+count+')">'+pages+'</a></li>';
					    }
					  }
					  if (page < pages) {
					    str += '<li class="page-item next no"><a onclick="createPaginationGG('+pages+', '+(page+1)+','+TotalSoftGV_ID+','+count+')">'+next+'</a></li>';
					  }
					  str += '</ul>';
					  jQuery('#GRU'+TotalSoftGV_ID).find('.imgLiii').css({"top":"0"});
					  document.getElementById('pagination'+TotalSoftGV_ID).innerHTML  = str;
					  	new CBPGridGallery<?php echo $Total_Soft_Gallery_Video; ?>( document.getElementById( 'grid<?php echo $Total_Soft_Gallery_Video; ?>-gallery' ) )
					  return str;
				}
			}
<?php } ?>
						jQuery("#pagination<?php echo $Total_Soft_Gallery_Video; ?>").click(function(){
							new CBPGridGallery<?php echo $Total_Soft_Gallery_Video; ?>( document.getElementById( 'grid<?php echo $Total_Soft_Gallery_Video; ?>-gallery' ) );
						});
					function Total_Soft_GV_GVG_PageP<?php echo $Total_Soft_Gallery_Video; ?>(TotalSoftGV_ID, TotalSoftPP, TotalSoftCV)
					{
						var TotalSoftPage='';
						jQuery('.pagination<?php echo $Total_Soft_Gallery_Video; ?> li').each(function(){
							if(jQuery(this).find('span').hasClass('active<?php echo $Total_Soft_Gallery_Video; ?>'))
							{
								if(jQuery(this).find('span').html()!='1')
								{
									TotalSoftPage=parseInt(parseInt(jQuery(this).find('span').html())-1);
									Total_Soft_GV_GVG_Page<?php echo $Total_Soft_Gallery_Video; ?>(TotalSoftGV_ID, TotalSoftPage, TotalSoftPP, TotalSoftCV);
								}
							}
						})
					}
					function Total_Soft_GV_GVG_PageN<?php echo $Total_Soft_Gallery_Video; ?>(TotalSoftGV_ID, TotalSoftPP, TotalSoftCV, TotalSoftPC)
					{
						var TotalSoftPage='';
						jQuery('.pagination<?php echo $Total_Soft_Gallery_Video; ?> li').each(function(){
							if(jQuery(this).find('span').hasClass('active<?php echo $Total_Soft_Gallery_Video; ?>'))
							{
								if(jQuery(this).find('span').html()!=TotalSoftPC)
								{
									TotalSoftPage=parseInt(parseInt(jQuery(this).find('span').html())+1);
									Total_Soft_GV_GVG_Page<?php echo $Total_Soft_Gallery_Video; ?>(TotalSoftGV_ID, TotalSoftPage, TotalSoftPP, TotalSoftCV);
									return false;
								}
							}
						})
					}
					function Total_Soft_GV_GVG_PageLM<?php echo $Total_Soft_Gallery_Video; ?>(TotalSoftGV_ID, TotalSoftPP, TotalSoftCV, TotalSoftPC)
					{
						var TotalSoftPage=parseInt(parseInt(jQuery('#TotalSoftPage_'+TotalSoftGV_ID).val())+1);
						jQuery('#TotalSoftPage_'+TotalSoftGV_ID).val(TotalSoftPage);
						var delaytime = 0;
						var TS_VG_GG_AE = jQuery('.TS_VG_GG_AE_'+TotalSoftGV_ID).val();
						if(TS_VG_GG_AE == ''){ TS_VG_GG_AE = 'fadeIn'; }
						new CBPGridGallery<?php echo $Total_Soft_Gallery_Video; ?>( document.getElementById( 'grid<?php echo $Total_Soft_Gallery_Video; ?>-gallery' ) );
							Total_Soft_GV_GVG_PagePresp<?php echo $Total_Soft_Gallery_Video; ?>();
						if(TotalSoftPage<=TotalSoftPC)
						{
							for(i=0;i<TotalSoftCV;i++)
							{

								if(i<TotalSoftPP*TotalSoftPage && jQuery("#TotalSoft_GV_GVG_"+TotalSoftGV_ID+"_"+parseInt(parseInt(i)+1)).hasClass('noshow1'))
								{
									delaytime++;
									if(TS_VG_GG_AE == '')
									{
										jQuery("#TotalSoft_GV_GVG_"+TotalSoftGV_ID+"_"+parseInt(parseInt(i)+1)).css({"display":"block",'opacity':'1'});
									}
									else if(TS_VG_GG_AE == 'fadeIn')
									{
										jQuery("#TotalSoft_GV_GVG_"+TotalSoftGV_ID+"_"+parseInt(parseInt(i)+1)).css({"display":"block",'animation':'fadeIn 0.65s ease '+0.2*delaytime+'s forwards','-webkit-animation':'fadeIn 0.65s ease '+0.2*delaytime+'s forwards','-moz-animation':'fadeIn 0.65s ease '+0.2*delaytime+'s forwards'});
									}
									else if(TS_VG_GG_AE == 'moveUp')
									{
										jQuery("#TotalSoft_GV_GVG_"+TotalSoftGV_ID+"_"+parseInt(parseInt(i)+1)).css({"display":"block",'animation':'moveUp 0.65s ease '+0.2*delaytime+'s forwards','-webkit-animation':'moveUp 0.65s ease '+0.2*delaytime+'s forwards','-moz-animation':'moveUp 0.65s ease '+0.2*delaytime+'s forwards'});
									}
									else if(TS_VG_GG_AE == 'scaleUp')
									{
										jQuery("#TotalSoft_GV_GVG_"+TotalSoftGV_ID+"_"+parseInt(parseInt(i)+1)).css({"display":"block",'animation':'scaleUp 0.65s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'scaleUp 0.65s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'scaleUp 0.65s ease-in-out '+0.2*delaytime+'s forwards'});
									}
									else if(TS_VG_GG_AE == 'fallPerspective')
									{
										jQuery("#TotalSoft_GV_GVG_"+TotalSoftGV_ID+"_"+parseInt(parseInt(i)+1)).css({"display":"block",'animation':'fallPerspective 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'fallPerspective 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'fallPerspective 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
									}
									else if(TS_VG_GG_AE == 'fly')
									{
										jQuery("#TotalSoft_GV_GVG_"+TotalSoftGV_ID+"_"+parseInt(parseInt(i)+1)).css({"display":"block",'animation':'fly 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'fly 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'fly 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
									}
									else if(TS_VG_GG_AE == 'flip')
									{
										jQuery("#TotalSoft_GV_GVG_"+TotalSoftGV_ID+"_"+parseInt(parseInt(i)+1)).css({"display":"block",'animation':'flip 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'flip 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'flip 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
									}
									else if(TS_VG_GG_AE == 'helix')
									{
										jQuery("#TotalSoft_GV_GVG_"+TotalSoftGV_ID+"_"+parseInt(parseInt(i)+1)).css({"display":"block",'animation':'helix 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'helix 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'helix 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
									}
									else if(TS_VG_GG_AE == 'popUp')
									{
										jQuery("#TotalSoft_GV_GVG_"+TotalSoftGV_ID+"_"+parseInt(parseInt(i)+1)).css({"display":"block",'animation':'popUp 0.8s ease-in '+0.2*delaytime+'s forwards','-webkit-animation':'popUp 0.8s ease-in '+0.2*delaytime+'s forwards','-moz-animation':'popUp 0.8s ease-in '+0.2*delaytime+'s forwards'});
									}
									jQuery("#TotalSoft_GV_GVG_"+TotalSoftGV_ID+"_"+parseInt(parseInt(i)+1)).removeClass('noshow1');
								}
								else if(i>=TotalSoftPP*TotalSoftPage)
								{
									jQuery("#TotalSoft_GV_GVG_"+TotalSoftGV_ID+"_"+parseInt(parseInt(i)+1)).css("display","none");
								}
							}
					//	new CBPGridGallery<?php echo $Total_Soft_Gallery_Video; ?>( document.getElementById( 'grid<?php echo $Total_Soft_Gallery_Video; ?>-gallery' ) );
							Total_Soft_GV_GVG_PagePresp<?php echo $Total_Soft_Gallery_Video; ?>();
							
							if(TotalSoftPage==TotalSoftPC)
							{
								jQuery('#TotalSoftPageDiv_'+TotalSoftGV_ID).animate({'opacity':'0'},500).css('display','none');
							}
						}
						else
						{
							jQuery('#TotalSoftPageDiv_'+TotalSoftGV_ID).animate({'opacity':'0'},500).css('display','none');
						}
					}
					var ifr_height = jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?>').find('.iframecontainer').find('iframe').height();
					jQuery('.slideshow<?php echo $Total_Soft_Gallery_Video; ?>').find('.videocontainer').find('video').css({'min-height':ifr_height+'px','max-height':ifr_height+'px'});
					jQuery('.nav-prev').click(function(){
						setTimeout(function(){
							if(jQuery('#grid<?php echo $Total_Soft_Gallery_Video; ?>-gallery').attr('class')=='grid-gallery<?php echo $Total_Soft_Gallery_Video; ?> slideshow<?php echo $Total_Soft_Gallery_Video; ?>-open'){
									jQuery('html, body').css({
									    'overflow': 'hidden',
								});
							}else{
								jQuery('html, body').css({
									    'overflow': 'auto',
									    'height': 'auto'
								});
							}
						},50);
					});
					jQuery('.nav-next').click(function(){
						setTimeout(function(){
							if(jQuery('#grid<?php echo $Total_Soft_Gallery_Video; ?>-gallery').attr('class')=='grid-gallery<?php echo $Total_Soft_Gallery_Video; ?> slideshow<?php echo $Total_Soft_Gallery_Video; ?>-open'){
									jQuery('html, body').css({
									    'overflow': 'hidden',
								});
							}else{
								jQuery('html, body').css({
									    'overflow': 'auto',
									    'height': 'auto'
								});
							}
						},50);
					});
				</script>
				<script type="text/javascript">
					jQuery(window).on('load', function(){
						var images = jQuery('.grid<?php echo $Total_Soft_Gallery_Video; ?> li.imgLiii');
						jQuery(images).each(function(i,el){
						var img = jQuery(el).find('img');
						jQuery(img).load(function(){
							jQuery('.TS_GV_GVG_Loading_<?php echo $Total_Soft_Gallery_Video;?>').css('display','none');
						}).each(function(){
					  	if(this.complete) {
					    	jQuery(this).trigger('load');
					  	}
						});
						});
					});
				</script>
			<?php }
			if($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='LightBox Video Gallery'){ ?>
				<script src="<?php echo plugins_url('../JS/jquery.quicksand.js',__FILE__);?>" type="text/javascript"></script>
				<script src="<?php echo plugins_url('../JS/jquery.easing.js',__FILE__);?>" type="text/javascript"></script>
				<style type="text/css">
					.totalsoft-gv-lvg-content<?php echo $Total_Soft_Gallery_Video; ?>, .totalsoft-gv-lvg-area<?php echo $Total_Soft_Gallery_Video; ?>
					{
						width:100%;
						position: relative;
						margin: 0 !important;
						text-align:center;
						<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_35 == 'fallPerspective'){ ?>
							-webkit-perspective: 1300px;
							-moz-perspective: 1300px;
							perspective: 1300px;
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_35 == 'fly'){ ?>
							-webkit-perspective: 1300px;
							-moz-perspective: 1300px;
							perspective: 1300px;
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_35 == 'flip'){ ?>
							-webkit-perspective: 1300px;
							-moz-perspective: 1300px;
							perspective: 1300px;
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_35 == 'helix'){ ?>
							-webkit-perspective: 1300px;
							-moz-perspective: 1300px;
							perspective: 1300px;
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_35 == 'popUp'){ ?>
							-webkit-perspective: 1300px;
							-moz-perspective: 1300px;
							perspective: 1300px;
						<?php }?>
					}
					/**** PORTFOLIO STYLES*****/
					.totalsoft-gv-lvg-image-block<?php echo $Total_Soft_Gallery_Video; ?> { display:block; position: relative; width:100%; height:100%; }
					.totalsoft-gv-lvg-image-block<?php echo $Total_Soft_Gallery_Video; ?> img { width: 100%; height: auto; top:0; }
					.totalsoft-gv-lvg-area<?php echo $Total_Soft_Gallery_Video; ?> li { display:inline-block; overflow: hidden; list-style:none !important; }
					/**** END PORTFOLIO STYLES*****/
					div.pp_overlay<?php echo $Total_Soft_Gallery_Video; ?> { background:#000; display: none; left:0; position:absolute; top:0; width:100% !important; z-index:9500; }
					div.pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?> { display: none; position:absolute; width:100px; z-index:10000; }
					div.pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>{position: fixed;top: 10%!important;}
					.pp_top<?php echo $Total_Soft_Gallery_Video; ?> { height:20px; position: relative; }
					* html .pp_top<?php echo $Total_Soft_Gallery_Video; ?> { padding:0 20px; }
					.pp_top<?php echo $Total_Soft_Gallery_Video; ?> .pp_left<?php echo $Total_Soft_Gallery_Video; ?> { height:20px; left:0; position:absolute; width:20px; }
					.pp_top<?php echo $Total_Soft_Gallery_Video; ?> .pp_middle<?php echo $Total_Soft_Gallery_Video; ?> { height:20px; left:20px; position:absolute; right:20px; }
					* html .pp_top<?php echo $Total_Soft_Gallery_Video; ?> .pp_middle<?php echo $Total_Soft_Gallery_Video; ?> { left:0; position: static; }
					.pp_top<?php echo $Total_Soft_Gallery_Video; ?> .pp_right<?php echo $Total_Soft_Gallery_Video; ?>
					{
						height:20px;
						left:auto;
						position:absolute;
						right:0;
						top:0;
						width:20px;
					}
					.pp_content<?php echo $Total_Soft_Gallery_Video; ?> { height:40px; }
					.pp_fade<?php echo $Total_Soft_Gallery_Video; ?> { display: none; }
					.pp_content_container<?php echo $Total_Soft_Gallery_Video; ?> { position: relative; text-align: left; width:100%; }
					.pp_content_container<?php echo $Total_Soft_Gallery_Video; ?> .pp_left<?php echo $Total_Soft_Gallery_Video; ?> { padding-left:20px; }
					.pp_content_container<?php echo $Total_Soft_Gallery_Video; ?> .pp_right<?php echo $Total_Soft_Gallery_Video; ?> { padding-right:20px; }
					/*---poxel---*/
					.pp_content_container<?php echo $Total_Soft_Gallery_Video; ?> .pp_details<?php echo $Total_Soft_Gallery_Video; ?> { margin: 10px auto 2px auto; }
					.pp_description<?php echo $Total_Soft_Gallery_Video; ?> { display: none; margin:0 0 5px 0; }
					.pp_nav<?php echo $Total_Soft_Gallery_Video; ?> { clear: left; float: left; margin:3px 0 0 0; }
					.pp_nav<?php echo $Total_Soft_Gallery_Video; ?> p { float: left; margin:0px 10px; margin-top: 1px; line-height: 25px; }
					.pp_nav<?php echo $Total_Soft_Gallery_Video; ?> .pp_play<?php echo $Total_Soft_Gallery_Video; ?>,.pp_nav<?php echo $Total_Soft_Gallery_Video; ?> .pp_pause<?php echo $Total_Soft_Gallery_Video; ?>
					{
						float: left;
						margin-right:10px;
						cursor: pointer;
					}
					i.pp_arrow_previous<?php echo $Total_Soft_Gallery_Video; ?>,i.pp_arrow_next<?php echo $Total_Soft_Gallery_Video; ?>
					{
						display:block;
						float: left;
						margin-top:1px;
						overflow: hidden;
						cursor: pointer;
						line-height: 25px;
					}
					.pp_hoverContainer<?php echo $Total_Soft_Gallery_Video; ?> { position:absolute; top:0; width:100%!important; z-index:2000; }
					.pp_gallery<?php echo $Total_Soft_Gallery_Video; ?> { left:50%; margin-top: -50px; position:absolute; z-index:10000; }
					.pp_gallery<?php echo $Total_Soft_Gallery_Video; ?> ul { float: left; height:35px; margin:0 0 0 5px; overflow: hidden; padding:0; position: relative; }
					.pp_gallery<?php echo $Total_Soft_Gallery_Video; ?> ul a { border:1px rgba(0,0,0,0.5) solid; display:block; float: left; height:33px; overflow: hidden; }
					.pp_gallery<?php echo $Total_Soft_Gallery_Video; ?> ul a:hover,.pp_gallery<?php echo $Total_Soft_Gallery_Video; ?> li.selected a { border-color:#fff; }
					.pp_gallery<?php echo $Total_Soft_Gallery_Video; ?> ul a img { border:0; }
					.pp_gallery<?php echo $Total_Soft_Gallery_Video; ?> li { display:block; float: left; margin:0 5px 0 0; }
					.pp_gallery<?php echo $Total_Soft_Gallery_Video; ?> li.default a { background: url(../Images/default_thumbnail.gif) 0 0 no-repeat; display:block; height:33px; width:50px; }
					.pp_gallery<?php echo $Total_Soft_Gallery_Video; ?> li.default a img { display: none; }
					.pp_gallery<?php echo $Total_Soft_Gallery_Video; ?> .pp_arrow_previous<?php echo $Total_Soft_Gallery_Video; ?>,.pp_gallery<?php echo $Total_Soft_Gallery_Video; ?> .pp_arrow_next<?php echo $Total_Soft_Gallery_Video; ?>
					{
						margin-top:7px !important;
					}
					a.pp_expand<?php echo $Total_Soft_Gallery_Video; ?>,a.pp_contract<?php echo $Total_Soft_Gallery_Video; ?>
					{
						cursor: pointer;
						display: none;
						height:20px;
						position:absolute;
						right:30px;
						text-indent: -10000px;
						top:10px;
						width:20px;
						z-index:20000;
					}
					/*---poxel---*/
					i.pp_close<?php echo $Total_Soft_Gallery_Video; ?> { display:block; float: right; line-height:22px; margin-right: 0px; cursor: pointer; }
					i.pp_close<?php echo $Total_Soft_Gallery_Video; ?>:hover,.totalsoft-gv-lvg-pl-pa<?php echo $Total_Soft_Gallery_Video; ?>:hover, i.pp_arrow_previous<?php echo $Total_Soft_Gallery_Video; ?>:hover, i.pp_arrow_next<?php echo $Total_Soft_Gallery_Video; ?>:hover
					{
						opacity: 0.8;
					}
					.pp_bottom<?php echo $Total_Soft_Gallery_Video; ?> { height:20px; position: relative; }
					* html .pp_bottom<?php echo $Total_Soft_Gallery_Video; ?> { padding:0 20px; }
					.pp_bottom<?php echo $Total_Soft_Gallery_Video; ?> .pp_left<?php echo $Total_Soft_Gallery_Video; ?> { height:20px; left:0; position:absolute; width:20px; }
					.pp_bottom<?php echo $Total_Soft_Gallery_Video; ?> .pp_middle<?php echo $Total_Soft_Gallery_Video; ?> { height:20px; left:20px; position:absolute; right:20px; }
					* html .pp_bottom<?php echo $Total_Soft_Gallery_Video; ?> .pp_middle<?php echo $Total_Soft_Gallery_Video; ?> { left:0; position: static; }
					.pp_bottom<?php echo $Total_Soft_Gallery_Video; ?> .pp_right<?php echo $Total_Soft_Gallery_Video; ?>
					{
						height:20px;
						left:auto;
						position:absolute;
						right:0;
						top:0;
						width:20px;
					}
					.pp_loaderIcon<?php echo $Total_Soft_Gallery_Video; ?> { display:block; height:24px; left:50%; margin: -12px 0 0 -12px; position:absolute; top:50%; width:24px; }
					#pp_full_res<?php echo $Total_Soft_Gallery_Video; ?> { line-height:1 !important; }
					#pp_full_res<?php echo $Total_Soft_Gallery_Video; ?> * { margin: 0 !important; width: 100%;}
					#pp_full_res<?php echo $Total_Soft_Gallery_Video; ?> .pp_inline<?php echo $Total_Soft_Gallery_Video; ?> { text-align: left; }
					#pp_full_res<?php echo $Total_Soft_Gallery_Video; ?> .pp_inline<?php echo $Total_Soft_Gallery_Video; ?> p { margin:0 0 15px 0; }
					div.ppt<?php echo $Total_Soft_Gallery_Video; ?> { color:#fff; display: none; font-size:17px; margin:0 0 5px 15px; z-index:9999; }
					.clearfix<?php echo $Total_Soft_Gallery_Video; ?>:after { content: "."; display:block; height:0; clear:both; visibility: hidden; }
					.clearfix<?php echo $Total_Soft_Gallery_Video; ?> { display: inline-block; }
					* html .clearfix<?php echo $Total_Soft_Gallery_Video; ?> { height:1%; }
					.clearfix<?php echo $Total_Soft_Gallery_Video; ?> { display:block; } 
					.pp_gallery<?php echo $Total_Soft_Gallery_Video; ?> a 
					{
						background: none !important;
						border: none !important;
						display: none !important;
						height: 146px;
						padding: 2px !important;
						width: 235px;
					}
					footer.main-footer .ulContWidth li{
						border-bottom: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_05;?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?> <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_07;?>!important;
					}
					.totalsoft-gv-lvg-area<?php echo $Total_Soft_Gallery_Video; ?> li
					{
						width: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01;?>px;
						margin: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02;?>px;
						border: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_05;?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?> <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_07;?>!important;
						box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_03;?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_04;?>;
						border-radius: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_08;?>px;

						padding:0px !important;
						box-sizing:border-box;
						display:inline-block;
						opacity: 0;
						<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_35 == 'moveUp'){ ?>
							-webkit-transform: translateY(200px);
							-moz-transform: translateY(200px);
							transform: translateY(200px);
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_35 == 'scaleUp'){ ?>
							-webkit-transform: scale(0.6);
							-moz-transform: scale(0.6);
							transform: scale(0.6);
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_35 == 'fallPerspective'){ ?>
							-webkit-transform-style: preserve-3d;
							-moz-transform-style: preserve-3d;
							transform-style: preserve-3d;
							-webkit-transform: translateZ(400px) translateY(300px) rotateX(-90deg);
							-moz-transform: translateZ(400px) translateY(300px) rotateX(-90deg);
							transform: translateZ(400px) translateY(300px) rotateX(-90deg);
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_35 == 'fly'){ ?>
							-webkit-transform-style: preserve-3d;
							-moz-transform-style: preserve-3d;
							transform-style: preserve-3d;
							-webkit-transform-origin: 50% 50% -300px;
							-moz-transform-origin: 50% 50% -300px;
							transform-origin: 50% 50% -300px;
							-webkit-transform: rotateX(-180deg);
							-moz-transform: rotateX(-180deg);
							transform: rotateX(-180deg);
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_35 == 'flip'){ ?>
							-webkit-transform-style: preserve-3d;
							-moz-transform-style: preserve-3d;
							transform-style: preserve-3d;
							-webkit-transform-origin: 0% 0%;
							-moz-transform-origin: 0% 0%;
							transform-origin: 0% 0%;
							-webkit-transform: rotateX(-80deg);
							-moz-transform: rotateX(-80deg);
							transform: rotateX(-80deg);
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_35 == 'helix'){ ?>
							-webkit-transform-style: preserve-3d;
							-moz-transform-style: preserve-3d;
							transform-style: preserve-3d;
							-webkit-transform: rotateY(-180deg);
							-moz-transform: rotateY(-180deg);
							transform: rotateY(-180deg);
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_35 == 'popUp'){ ?>
							-webkit-transform-style: preserve-3d;
							-moz-transform-style: preserve-3d;
							transform-style: preserve-3d;
							-webkit-transform: scale(0.4);
							-moz-transform: scale(0.4);
							transform: scale(0.4);
						<?php }?>
					}
					.totalsoft-gv-lvg-image-block<?php echo $Total_Soft_Gallery_Video; ?> img
					{
						/*border-radius: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_08;?>px;*/
						margin: 0;
					}
					div.pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>
					{
						background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>;
						border: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_11;?> <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
						border-radius: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_13;?>px;
						left:50% !important;
						transform:translateX(-50%) !important;
						-webkit-transform:translateX(-50%) !important;
						-ms-transform:translateX(-50%) !important;
						-moz-transform:translateX(-50%) !important;
						-o-transform:translateX(-50%) !important;
					}
					div.ppt<?php echo $Total_Soft_Gallery_Video; ?> { display:none !important; }
					.pp_top<?php echo $Total_Soft_Gallery_Video; ?> div { background:none !important; }
					.pp_content_container<?php echo $Total_Soft_Gallery_Video; ?> div { background:none !important; }
					.pp_bottom<?php echo $Total_Soft_Gallery_Video; ?> div { background:none !important; }
					.pp_description<?php echo $Total_Soft_Gallery_Video; ?>
					{
						text-align: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15;?>;
						font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16;?>px;
						font-family: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_17;?>;
						color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_18;?>;
					}
					.totalsoft-gv-lvg-pl-pa<?php echo $Total_Soft_Gallery_Video; ?>
					{
						font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22;?>px;
						color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23;?>;
						margin-top: 1px;
						line-height: 25px;
					}
					.totalsoft-gv-lvg-close<?php echo $Total_Soft_Gallery_Video; ?>
					{
						font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_26;?>px;
						color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_27;?>;
					}
					.totalsoft-gv-lvg-close<?php echo $Total_Soft_Gallery_Video; ?> span
					{
						font-family: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_29;?>;
						margin-left:3px;
					}
					.totalsoft-gv-lvg-nepr<?php echo $Total_Soft_Gallery_Video; ?>
					{
						font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_33;?>px;
						color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_34;?>; 
					}
					.totalsoft-gv-lvg-text<?php echo $Total_Soft_Gallery_Video; ?>
					{
						font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_35;?>px;
						color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_36;?>; 
					}
					ul.pagination<?php echo $Total_Soft_Gallery_Video; ?> li { border:none !important; list-style:none !important; }
					ul.pagination<?php echo $Total_Soft_Gallery_Video; ?> li span 
					{
						background-color:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_39;?>;
						color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_01;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_02;?>px;
						font-family:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03;?>;
						height:auto !important;
						<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_08!='none'){ ?> 
							border: 1px solid <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_09;?> !important;
						<?php } else { ?>
							border: none !important;
						<?php }?>
						line-height:1 !important;
						display:block !important;
					}
					ul.pagination<?php echo $Total_Soft_Gallery_Video; ?> li span:hover:not(.active) 
					{
						background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_06;?>;
						color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_07;?>;
					}
					ul.pagination<?php echo $Total_Soft_Gallery_Video; ?> li span.active 
					{
						background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_04;?>;
						color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_05;?>;
					}
					.TotalSoftGV_LVG_LM<?php echo $Total_Soft_Gallery_Video; ?>
					{
						background-color:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_39;?>;
						color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_01;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_02;?>px;
						font-family:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03;?>;
						<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_08!='none'){ ?> 
							border: 1px solid <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_09;?>;
						<?php } else { ?>
							border: none !important;
						<?php }?>
						cursor:pointer;
						display: block;
						padding: 3px !important;
						line-height: 1 !important;
					}
					.TotalSoftGV_LVG_LM<?php echo $Total_Soft_Gallery_Video; ?>:hover
					{
						background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_06;?>;
						color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_07;?>;
					}
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?> { position:relative; overflow:hidden; box-sizing: border-box;
						box-shadow: inset -5px -5px 15px 5px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_04;?>;}
					.lImgZoom1_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute;
						top:0px;
						left:0px;
						width:100%;
						max-width:none !important;
						-o-transform:rotate(0deg) scale(1,1);
						-ms-transform:rotate(0deg) scale(1,1);
						-moz-transform:rotate(0deg) scale(1,1);
						-webkit-transform:rotate(0deg) scale(1,1);
						transform:rotate(0deg) scale(1,1);
						transition:all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11/10;?>s linear !important;
						-webkit-transition:all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11/10;?>s linear !important;
						-ms-transition:all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11/10;?>s linear !important;
						-moz-transition:all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11/10;?>s linear !important;
						-o-transition:all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11/10;?>s linear !important;
					}
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>:hover .lImgZoom1_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						-ms-transform:rotate(25deg) scale(2,2);
						-moz-transform:rotate(25deg) scale(2,2);
						-o-transform:rotate(25deg) scale(2,2);
						-webkit-transform:rotate(25deg) scale(2,2);
						transform:rotate(25deg) scale(2,2);
					}
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>:hover li { left:none !important; letter-spacing:normal !important; }
					.lImgZoom2_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute;
						top:0px;
						left:0px;
						width:100%;
						max-width:none !important;
						-ms-transform:rotate(0deg);
						-moz-transform:rotate(0deg);
						-o-transform:rotate(0deg);
						-webkit-transform:rotate(0deg);
						transform:rotate(0deg);
						transition:all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11/10;?>s linear;
						-webkit-transition:all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11/10;?>s linear;
						-ms-transition:all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11/10;?>s linear;
						-moz-transition:all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11/10;?>s linear;
						-o-transition:all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11/10;?>s linear;
					}
					.pagination<?php echo $Total_Soft_Gallery_Video; ?> li:before { transform:none !important; perspective-origin:800px; }
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>:hover .lImgZoom2_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						width:200%;
						left:-50%;
						top:-50%;
						-ms-transform:rotate(-25deg);
						-webkit-transform:rotate(-25deg);
						-moz-transform:rotate(-25deg);
						transform:rotate(-25deg);
					}
					.lImgZoom3_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute;
						top:0px;
						left:0px;
						width:100%;
						max-width:none !important;
						-ms-transform:rotate(0deg);
						-moz-transform:rotate(0deg);
						-o-transform:rotate(0deg);
						-webkit-transform:rotate(0deg);
						transform:rotate(0deg);
						transition:all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11/10;?>s linear;
						-webkit-transition:all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11/10;?>s linear;
						-ms-transition:all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11/10;?>s linear;
						-moz-transition:all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11/10;?>s linear;
						-o-transition:all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11/10;?>s linear;
					}
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>:hover .lImgZoom3_<?php echo $Total_Soft_Gallery_Video; ?> { width:150%; }
					.lImgZoom4_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute;
						top:0px;
						left:0px;
						width:100%;
						max-width:none !important;
						min-height: 100%;
						-ms-transform:rotate(0deg) scale(1);
						-moz-transform:rotate(0deg) scale(1);
						-o-transform:rotate(0deg) scale(1);
						-webkit-transform:rotate(0deg) scale(1);
						transform:rotate(0deg) scale(1);
						transition:all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11/10;?>s linear;
						-webkit-transition:all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11/10;?>s linear;
						-ms-transition:all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11/10;?>s linear;
						-moz-transition:all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11/10;?>s linear;
						-o-transition:all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11/10;?>s linear;
					}
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>:hover .lImgZoom4_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						-ms-transform:rotate(0deg) scale(1.5);
						-moz-transform:rotate(0deg) scale(1.5);
						-o-transform:rotate(0deg) scale(1.5);
						-webkit-transform:rotate(0deg) scale(1.5);
						transform:rotate(0deg) scale(1.5);
					}
					.lImgZoom5_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute;
						top:0px;
						right:0px;
						width:100%;
						max-width:none !important;
						-ms-transform:rotate(0deg);
						-moz-transform:rotate(0deg);
						-o-transform:rotate(0deg);
						-webkit-transform:rotate(0deg);
						transform:rotate(0deg);
						transition:all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11/10;?>s linear;
						-webkit-transition:all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11/10;?>s linear;
						-ms-transition:all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11/10;?>s linear;
						-moz-transition:all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11/10;?>s linear;
						-o-transition:all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11/10;?>s linear;
					}
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>:hover .lImgZoom5_<?php echo $Total_Soft_Gallery_Video; ?> { width:150%; }
					.lImgZoom6_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute;
						bottom:0px;
						right:0px;
						width:100%;
						max-width:none !important;
						-ms-transform:rotate(0deg);
						-moz-transform:rotate(0deg);
						-o-transform:rotate(0deg);
						-webkit-transform:rotate(0deg);
						transform:rotate(0deg);
						transition:all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11/10;?>s linear;
						-webkit-transition:all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11/10;?>s linear;
						-ms-transition:all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11/10;?>s linear;
						-moz-transition:all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11/10;?>s linear;
						-o-transition:all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11/10;?>s linear;
					}
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>:hover .lImgZoom6_<?php echo $Total_Soft_Gallery_Video; ?> { width:150%; }
					.lImgZoom7_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute;
						bottom:0px;
						left:0px;
						width:100%;
						max-width:none !important;
						transition:all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11/10;?>s linear;
						-webkit-transition:all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11/10;?>s linear;
						-ms-transition:all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11/10;?>s linear;
						-moz-transition:all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11/10;?>s linear;
						-o-transition:all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11/10;?>s linear;
					}
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>:hover .lImgZoom7_<?php echo $Total_Soft_Gallery_Video; ?> { width:150%; }
					.hovLayTVG1_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute;
						top:0px;
						left:0px;
						width:100%;
						height:100%;
						max-width:none !important;
						background:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_12;?>;
						opacity:0;
						transition:all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear;
						-webkit-transition:all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear;
						-ms-transition:all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear;
						-moz-transition:all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear;
						-o-transition:all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear;
					}
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>:hover .hovLayTVG1_<?php echo $Total_Soft_Gallery_Video; ?> { opacity: 0.8; }
					.hovLayTVG2_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute !important;
						top:0% !important;
						left:100% !important;
						width:100% !important;
						height:100% !important;
						background:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_12;?> !important;
						transform:rotate(-90deg) !important;
						-ms-transform:rotate(-90deg) !important;
						-moz-transform:rotate(-90deg) !important;
						-o-transform:rotate(-90deg) !important;
						-webkit-transform:rotate(-90deg) !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-webkit-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-ms-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-moz-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-o-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
					}
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>:hover .hovLayTVG2_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						left:0% !important;
						top:0% !important;
						transform:rotate(0deg) !important;
						-ms-transform:rotate(0deg) !important;
						-moz-transform:rotate(0deg) !important;
						-webkit-transform:rotate(0deg) !important;
					}
					.hovLayTVG3_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute !important;
						top:0% !important;
						left:100% !important;
						width:100% !important;
						height:100% !important;
						background:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_12;?> !important;
						transform:rotateY(-180deg) !important;
						-ms-transform:rotateY(-180deg) !important;
						-moz-transform:rotateY(-180deg) !important;
						-o-transform:rotateY(-180deg) !important;
						-webkit-transform:rotateY(-180deg) !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-webkit-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-ms-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-moz-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-o-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
					}
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>:hover .hovLayTVG3_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						left:0% !important;
						top:0% !important;
						transform:rotateY(0deg) !important;
						-ms-transform:rotateY(0deg) !important;
						-moz-transform:rotateY(0deg) !important;
						-o-transform:rotateY(0deg) !important;
						-webkit-transform:rotateY(0deg) !important;
					}
					.hovLayTVG4_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute !important;
						top:50% !important;
						left:50% !important;
						width:0% !important;
						height:0% !important;
						background:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_12;?> !important;
						transform:translateY(-50%) translateX(-50%) rotate(-180deg) !important;
						-ms-transform:translateY(-50%) translateX(-50%) rotate(-180deg) !important;
						-webkit-transform:translateY(-50%) translateX(-50%) rotate(-180deg) !important;
						-moz-transform:translateY(-50%) translateX(-50%) rotate(-180deg) !important;
						-o-transform:translateY(-50%) translateX(-50%) rotate(-180deg) !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-webkit-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-ms-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-moz-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-o-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
					}
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>:hover .hovLayTVG4_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						left:0% !important;
						top:0% !important;
						width:100% !important;
						height:100% !important;
						transform:rotate(0deg) !important;
						-ms-transform:rotate(0deg) !important;
						-moz-transform:rotate(0deg) !important;
						-o-transform:rotate(0deg) !important;
						-webkit-transform:rotate(0deg) !important;
					}
					.hovLayTVG5_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute !important;
						top:50% !important;
						left:50% !important;
						width:0% !important;
						height:0% !important;
						background:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_12;?> !important;
						transform:translateY(-50%) translateX(-50%) rotateX(-180deg) !important;
						-ms-transform:translateY(-50%) translateX(-50%) rotateX(-180deg) !important;
						-moz-transform:translateY(-50%) translateX(-50%) rotateX(-180deg) !important;
						-o-transform:translateY(-50%) translateX(-50%) rotateX(-180deg) !important;
						-webkit-transform:translateY(-50%) translateX(-50%) rotateX(-180deg) !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-webkit-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-ms-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-moz-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-o-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
					}
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>:hover .hovLayTVG5_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						width:100% !important;
						height:100% !important;
						transform:translateY(-50%) translateX(-50%) rotateX(0deg) !important;
						-ms-transform:translateY(-50%) translateX(-50%) rotateX(0deg) !important;
						-moz-transform:translateY(-50%) translateX(-50%) rotateX(0deg) !important;
						-o-transform:translateY(-50%) translateX(-50%) rotateX(0deg) !important;
						-webkit-transform:translateY(-50%) translateX(-50%) rotateX(0deg) !important;
					}
					.hovLayTVG6_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute !important;
						top:50% !important;
						left:50% !important;
						width:0% !important;
						height:0% !important;
						background:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_12;?> !important;
						transform:translateY(-50%) translateX(-50%) rotateY(-180deg) !important;
						-ms-transform:translateY(-50%) translateX(-50%) rotateY(-180deg) !important;
						-moz-transform:translateY(-50%) translateX(-50%) rotateY(-180deg) !important;
						-o-transform:translateY(-50%) translateX(-50%) rotateY(-180deg) !important;
						-webkit-transform:translateY(-50%) translateX(-50%) rotateY(-180deg) !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-webkit-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-ms-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-moz-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-o-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
					}
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>:hover .hovLayTVG6_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						width:100% !important;
						height:100% !important;
						transform:translateY(-50%) translateX(-50%) rotateY(0deg) !important;
						-ms-transform:translateY(-50%) translateX(-50%) rotateY(0deg) !important;
						-moz-transform:translateY(-50%) translateX(-50%) rotateY(0deg) !important;
						-o-transform:translateY(-50%) translateX(-50%) rotateY(0deg) !important;
						-webkit-transform:translateY(-50%) translateX(-50%) rotateY(0deg) !important;
					}

					.hovLayTVG7_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute !important;
						top:50% !important;
						left:50% !important;
						width:0% !important;
						height:0% !important;
						background:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_12;?> !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-webkit-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-ms-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-moz-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-o-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
					}
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>:hover .hovLayTVG7_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						left:0% !important;
						top:0% !important;
						width:100% !important;
						height:100% !important;
					}
					.hovLayTVG8_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute !important;
						top:50% !important;
						left:0% !important;
						width:100% !important;
						height:0% !important;
						background:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_12;?> !important;
						visibility:hidden !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-webkit-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-ms-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-moz-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-o-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
					}
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>:hover .hovLayTVG8_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						top:0% !important;
						height:100% !important;
						visibility:visible !important;
					}
					.hovLayTVG9_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute !important;
						top:0% !important;
						left:50% !important;
						width:0% !important;
						height:100% !important;
						background:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_12;?> !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-webkit-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-ms-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-moz-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-o-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
					}
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>:hover .hovLayTVG9_<?php echo $Total_Soft_Gallery_Video; ?> { left:0% !important; width:100% !important; }
					.hovLayTVG10_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute !important;
						top:-100% !important;
						left:0% !important;
						width:100% !important;
						height:100% !important;
						background:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_12;?> !important;
						opacity:0 !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-webkit-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-ms-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-moz-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-o-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
					}
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>:hover .hovLayTVG10_<?php echo $Total_Soft_Gallery_Video; ?> { top:0% !important; opacity:0.8 !important; }
					.hovLayTVG11_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute !important;
						top:0% !important;
						left:0% !important;
						width:100% !important;
						height:100% !important;
						border:20px solid red !important;
						opacity:0 !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-webkit-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-ms-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-moz-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-o-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
					}
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>:hover .hovLayTVG11_<?php echo $Total_Soft_Gallery_Video; ?> { opacity:0.8 !important; }
					.hovLayTVG12_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute !important;
						top:0% !important;
						left:0% !important;
						width:100% !important;
						height:100% !important;
						border:20px solid red !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-webkit-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-ms-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-moz-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-o-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
					}
					.hovLayTVG13_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute !important;
						top:0% !important;
						left:0% !important;
						width:100% !important;
						height:100% !important;
						background:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_12;?> !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-webkit-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-ms-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-moz-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
						-o-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14/10;?>s linear !important;
					}
					.hovTit1_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute !important;
						top:-55% !important;
						width:100% !important;
						font-size:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_16;?>px !important;
						color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_17;?> !important;
						padding:1px 0px !important;
						margin:0px !important;
						text-align:center !important;
						text-transform:none !important;
						letter-spacing: 0px !important;
						font-weight: 100 !important;
						line-height:1.2 !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18;?>;
						background:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_15;?> !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-webkit-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-ms-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-moz-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-o-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
					}
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>:hover .hovTit1_<?php echo $Total_Soft_Gallery_Video; ?> { top:5% !important; }
					.hovTit2_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute !important;
						top:5% !important;
						left:100% !important;
						transform:rotate(-90deg) !important;
						-ms-transform:rotate(-90deg) !important;
						-webkit-transform:rotate(-90deg) !important;
						width:100% !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_16;?>px !important;
						color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_17;?> !important;
						padding:1px 0px !important;
						text-align:center !important;
						background:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_15;?> !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-webkit-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-ms-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-moz-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-o-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
					}
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>:hover .hovTit2_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						left:0% !important;
						transform:rotate(0deg) !important;
						-ms-transform:rotate(0deg) !important;
						-moz-transform:rotate(0deg) !important;
						-o-transform:rotate(0deg) !important;
						-webkit-transform:rotate(0deg) !important;
					}
					.hovTit3_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute !important;
						text-transform: none !important;
						font-weight:normal !important;
						letter-spacing:normal !important;
						top:10% !important;
						left:15% !important;
						width:70% !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18;?>;
						font-size:0px !important;
						color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_17;?> !important;
						padding:0px 0px !important;
						text-align:center !important;
						background:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_15;?> !important;
						opacity:0 !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-webkit-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-ms-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-moz-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-o-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
					}
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>:hover .hovTit3_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						left:0% !important;
						top:5% !important;
						width:100% !important;
						font-size:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_16;?>px !important;
						opacity:0.8 !important;
						padding:1px 0px !important;
					}
					.hovTit4_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute !important;
						top:25% !important;
						left:0% !important;
						width:100% !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_16;?>px !important;
						color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_17;?> !important;
						padding:1px 0px !important;
						text-align:center !important;
						background:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_15;?> !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-webkit-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-ms-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-moz-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-o-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
					}
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>:hover .hovTit4_<?php echo $Total_Soft_Gallery_Video; ?> { top:5% !important; }
					.hovTit5_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute !important;
						top:5% !important;
						width:100% !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_16;?>px !important;
						color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_17;?> !important;
						padding:1px 0px !important;
						text-align:center !important;
						background:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_15;?> !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-webkit-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-ms-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-moz-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-o-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
					}
					.hovTit6_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute !important;
						top:50% !important;
						left:0% !important;
						width:100% !important;
						display:inline !important;
						padding:0px !important;
						margin:0px !important;
						transform:translateY(-50%) !important;
						-ms-transform:translateY(-50%) !important;
						-moz-transform:translateY(-50%) !important;
						-o-transform:translateY(-50%) !important;
						-webkit-transform:translateY(-50%) !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_16;?>px !important;
						color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_17;?> !important;
						text-align:center !important;
						opacity:1 !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-webkit-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-ms-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-moz-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-o-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
					}
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>:hover .hovTit6_<?php echo $Total_Soft_Gallery_Video; ?> 
					{
						font-size:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_16-5;?>px !important;
						opacity:0 !important;
					}
					.hovTit7_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute !important;
						top:100% !important;
						left:0% !important;
						width:100% !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18;?>;
						background:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_15;?> !important;
						font-size:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_16;?>px !important;
						color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_17;?> !important;
						text-align:center !important;
						transform:translateY(0%);
						-ms-transform:translateY(0%);
						-webkit-transform:translateY(0%);
						transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-webkit-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-ms-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-moz-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-o-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
					}
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>:hover .hovTit7_<?php echo $Total_Soft_Gallery_Video; ?> { top:0% !important; }
					.hovTit8_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute !important;
						top:50% !important;
						right:0% !important;
						width:85% !important;
						display:inline !important;
						padding:0px !important;
						margin:0px !important;
						transform:translateY(-50%) !important;
						-ms-transform:translateY(-50%) !important;
						-moz-transform:translateY(-50%) !important;
						-o-transform:translateY(-50%) !important;
						-webkit-transform:translateY(-50%) !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_16;?>px !important;
						color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_17;?> !important;
						text-align:left !important;
						opacity:1 !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-webkit-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-ms-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-moz-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-o-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
					}
					.hovTit9_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute !important;
						top:40% !important;
						left:0% !important;
						width:100% !important;
						display:inline !important;
						padding:0px !important;
						margin:0px !important;
						transform:translateY(-50%) !important;
						-ms-transform:translateY(-50%) !important;
						-moz-transform:translateY(-50%) !important;
						-o-transform:translateY(-50%) !important;
						-webkit-transform:translateY(-50%) !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_16;?>px !important;
						color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_17;?> !important;
						text-align:center !important;
						opacity:1 !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-webkit-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-ms-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-moz-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-o-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
					}
					.hovTit10_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute !important;
						top:20% !important;
						left:0% !important;
						width:0% !important;
						display:inline !important;
						padding:0px !important;
						margin:0px !important;
						left:50% !important;
						font-size:0px !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18;?>;
						color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_17;?> !important;
						text-align:center !important;
						opacity:1 !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-webkit-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-ms-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-moz-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-o-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
					}
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>:hover .hovTit10_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						width:100% !important;
						top:30% !important;
						left:0% !important;
						font-size:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_16;?>px !important;
					}
					.hovTit11_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute !important;
						top:20% !important;
						left:10% !important;
						width:40% !important;
						display:inline !important;
						transform:translateX(0%) !important;
						-ms-transform:translateX(0%) !important;
						-moz-transform:translateX(0%) !important;
						-o-transform:translateX(0%) !important;
						-webkit-transform:translateX(0%) !important;
						padding:0px !important;
						margin:0px !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_16;?>px !important;
						color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_17;?> !important;
						text-align:center !important;
						opacity:0 !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-webkit-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-ms-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-moz-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
						-o-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21/10;?>s linear !important;
					}
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>:hover .hovTit11_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						top:30% !important;
						left:50% !important;
						transform:translateX(-50%) !important;
						-ms-transform:translateX(-50%) !important;
						-moz-transform:translateX(-50%) !important;
						-o-transform:translateX(-50%) !important;
						-webkit-transform:translateX(-50%) !important;
						opacity:1 !important;
					}
					.hovLine1_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute !important;
						width:10% !important;
						height:10% !important;
						border:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_22;?>px <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_23;?> <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_24;?> !important;
						top:50% !important;
						left:50% !important;
						opacity:0 !important;
						transform:translateY(-50%) translateX(-50%) !important;
						-ms-transform:translateY(-50%) translateX(-50%) !important;
						-moz-transform:translateY(-50%) translateX(-50%) !important;
						-o-transform:translateY(-50%) translateX(-50%) !important;
						-webkit-transform:translateY(-50%) translateX(-50%) !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26/10;?>s linear !important;
						-webkit-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26/10;?>s linear !important;
						-ms-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26/10;?>s linear !important;
						-moz-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26/10;?>s linear !important;
						-o-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26/10;?>s linear !important;
					}
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>:hover .hovLine1_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						width:90% !important;
						height:90% !important;
						opacity:1 !important;
					}
					.hovLine2_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute !important;
						width:110% !important;
						height:110% !important;
						border:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_22;?>px <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_23;?> <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_24;?> !important;
						top:50% !important;
						left:50% !important;
						opacity:0 !important;
						transform:translateY(-50%) translateX(-50%) !important;
						-ms-transform:translateY(-50%) translateX(-50%) !important;
						-moz-transform:translateY(-50%) translateX(-50%) !important;
						-o-transform:translateY(-50%) translateX(-50%) !important;
						-webkit-transform:translateY(-50%) translateX(-50%) !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26/10;?>s linear !important;
						-webkit-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26/10;?>s linear !important;
						-ms-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26/10;?>s linear !important;
						-moz-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26/10;?>s linear !important;
						-o-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26/10;?>s linear !important;
					}
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>:hover .hovLine2_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						width:90% !important;
						height:90% !important;
						opacity:1 !important;
					}
					.hovLine3_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute !important;
						width:90% !important;
						height:90% !important;
						border:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_22;?>px <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_23;?> <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_24;?> !important;
						border-right:0px solid #fff !important;
						top:50% !important;
						left:40% !important;
						opacity:0 !important;
						transform:translateY(-50%) translateX(-50%) !important;
						-ms-transform:translateY(-50%) translateX(-50%) !important;
						-moz-transform:translateY(-50%) translateX(-50%) !important;
						-o-transform:translateY(-50%) translateX(-50%) !important;
						-webkit-transform:translateY(-50%) translateX(-50%) !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26/10;?>s linear !important;
						-webkit-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26/10;?>s linear !important;
						-ms-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26/10;?>s linear !important;
						-moz-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26/10;?>s linear !important;
						-o-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26/10;?>s linear !important;
					}
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>:hover .hovLine3_<?php echo $Total_Soft_Gallery_Video; ?> { left:50% !important; opacity:1 !important; }
					.hovLine4_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute !important;
						width:0% !important;
						height:0% !important;
						border:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_22;?>px <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_23;?> <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_24;?> !important;
						top:50% !important;
						left:10% !important;
						opacity:0 !important;
						transform:translateY(-50%) translateX(0%) !important;
						-ms-transform:translateY(-50%) translateX(0%) !important;
						-moz-transform:translateY(-50%) translateX(0%) !important;
						-o-transform:translateY(-50%) translateX(0%) !important;
						-webkit-transform:translateY(-50%) translateX(0%) !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26/10;?>s linear !important;
						-webkit-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26/10;?>s linear !important;
						-ms-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26/10;?>s linear !important;
						-moz-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26/10;?>s linear !important;
						-o-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26/10;?>s linear !important;
					}
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>:hover .hovLine4_<?php echo $Total_Soft_Gallery_Video; ?> { width:80% !important; opacity:1 !important; }
					.hovLine5_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute !important;
						width:0% !important;
						height:90% !important;
						border-top:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_22;?>px <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_23;?> <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_24;?> !important;
						border-bottom:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_22;?>px <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_23;?> <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_24;?> !important;
						top:5% !important;
						left:50% !important;
						opacity:0 !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26/10;?>s linear !important;
						-webkit-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26/10;?>s linear !important;
						-ms-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26/10;?>s linear !important;
						-moz-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26/10;?>s linear !important;
						-o-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26/10;?>s linear !important;
					}
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>:hover .hovLine5_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						width:80% !important;
						opacity:1 !important;
						left:10% !important;
					}
					.hovLine6_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute !important;
						width:120px !important;
						height:120px !important;
						border:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_22;?>px <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_23;?> <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_24;?> !important;
						border-radius:50% !important;
						top:100% !important;
						left:100% !important;
						opacity:0 !important;
						transform:translateY(-50%) translateX(-50%) !important;
						-ms-transform:translateY(-50%) translateX(-50%) !important;
						-moz-transform:translateY(-50%) translateX(-50%) !important;
						-o-transform:translateY(-50%) translateX(-50%) !important;
						-webkit-transform:translateY(-50%) translateX(-50%) !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26/10;?>s linear !important;
						-webkit-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26/10;?>s linear !important;
						-ms-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26/10;?>s linear !important;
						-moz-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26/10;?>s linear !important;
						-o-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26/10;?>s linear !important;
					}
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>:hover .hovLine6_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						top:50% !important;
						left:50% !important;
						opacity:1 !important;
					}
					.hovLine7_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute !important;
						width:0px !important;
						height:0px !important;
						border:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_22;?>px <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_23;?> <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_24;?> !important;
						top:50% !important;
						left:50% !important;
						opacity:0 !important;
						transform:translateY(-50%) translateX(-50%) rotate(0deg) !important;
						-ms-transform:translateY(-50%) translateX(-50%) rotate(0deg) !important;
						-moz-transform:translateY(-50%) translateX(-50%) rotate(0deg) !important;
						-o-transform:translateY(-50%) translateX(-50%) rotate(0deg) !important;
						-webkit-transform:translateY(-50%) translateX(-50%) rotate(0deg) !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26/10;?>s linear !important;
						-webkit-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26/10;?>s linear !important;
						-ms-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26/10;?>s linear !important;
						-moz-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26/10;?>s linear !important;
						-o-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26/10;?>s linear !important;
					}
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>:hover .hovLine7_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						width:100px !important;
						height:100px !important;
						transform:translateY(-50%) translateX(-50%) rotate(45deg) !important;
						-ms-transform:translateY(-50%) translateX(-50%) rotate(45deg) !important;
						-moz-transform:translateY(-50%) translateX(-50%) rotate(45deg) !important;
						-o-transform:translateY(-50%) translateX(-50%) rotate(45deg) !important;
						-webkit-transform:translateY(-50%) translateX(-50%) rotate(45deg) !important;
						opacity:1 !important;
					}
					.hovLink1_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute !important;
						top:40% !important;
						left:50% !important;
						transform:translateX(-50%) !important;
						-ms-transform:translateX(-50%) !important;
						-moz-transform:translateX(-50%) !important;
						-o-transform:translateX(-50%) !important;
						-webkit-transform:translateX(-50%) !important;
						font-size:0px !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_19;?>;
						color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_28;?> !important;
						padding:5px 0px !important;
						text-align:center !important;
						opacity:1 !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
						-webkit-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
						-ms-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
						-moz-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
						-o-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
					}
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>:hover .hovLink1_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						font-size:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_27;?>px !important;
					}
					.hovLink2_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute !important;
						top:40% !important;
						left:50% !important;
						transform:translateX(-50%) !important;
						-ms-transform:translateX(-50%) !important;
						-moz-transform:translateX(-50%) !important;
						-o-transform:translateX(-50%) !important;
						-webkit-transform:translateX(-50%) !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_19;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_27;?>px !important;
						color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_28;?> !important;
						padding:5px 0px !important;
						text-align:center !important;
						opacity:0 !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
						-webkit-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
						-ms-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
						-moz-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
						-o-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
					}
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>:hover .hovLink2_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						font-size:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_27;?>px !important;
						opacity:1 !important;
					}
					.hovLink3_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute !important;
						top:70% !important;
						left:5% !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_19;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_27;?>px !important;
						color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_28;?> !important;
						padding:5px 0px !important;
						text-align:center !important;
						opacity:0 !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
						-webkit-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
						-ms-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
						-moz-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
						-o-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
					}
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>:hover .hovLink3_<?php echo $Total_Soft_Gallery_Video; ?> { left:15% !important; opacity:1 !important; }
					.hovLink4_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute !important;
						top:50% !important;
						left:90% !important;
						transform:translateX(-50%) !important;
						-ms-transform:translateX(-50%) !important;
						-moz-transform:translateX(-50%) !important;
						-o-transform:translateX(-50%) !important;
						-webkit-transform:translateX(-50%) !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_19;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_27;?>px !important;
						color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_28;?> !important;
						padding:5px 0px !important;
						text-align:center !important;
						opacity:0 !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
						-webkit-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
						-ms-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
						-moz-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
						-o-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
					}
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>:hover .hovLink4_<?php echo $Total_Soft_Gallery_Video; ?> { left:50% !important; opacity:1 !important; }
					.hovLink5_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute !important;
						top:80% !important;
						left:50% !important;
						transform:translateX(-50%) !important;
						-ms-transform:translateX(-50%) !important;
						-moz-transform:translateX(-50%) !important;
						-o-transform:translateX(-50%) !important;
						-webkit-transform:translateX(-50%) !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_19;?>;
						font-size:0px !important;
						color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_28;?> !important;
						padding:5px 0px !important;
						text-align:center !important;
						opacity:0 !important;
						border:none !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
						-webkit-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
						-ms-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
						-moz-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
						-o-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
					}
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>:hover .hovLink5_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						top:50% !important;
						font-size:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_27;?>px !important;
						opacity:1 !important;
					}
					.hovLink6_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute !important;
						top:50% !important;
						left:40% !important;
						transform:translateX(-50%) !important;
						-ms-transform:translateX(-50%) !important;
						-moz-transform:translateX(-50%) !important;
						-o-transform:translateX(-50%) !important;
						-webkit-transform:translateX(-50%) !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_19;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_27;?>px !important;
						color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_28;?> !important;
						padding:5px 0px !important;
						text-align:center !important;
						opacity:0 !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
						-webkit-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
						-ms-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
						-moz-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
						-o-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
					}
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>:hover .hovLink6_<?php echo $Total_Soft_Gallery_Video; ?> { left:50% !important; opacity:1 !important; }
					.hovLink7_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute !important;
						top:60% !important;
						left:50% !important;
						transform:translateX(-50%) !important;
						-ms-transform:translateX(-50%) !important;
						-moz-transform:translateX(-50%) !important;
						-o-transform:translateX(-50%) !important;
						-webkit-transform:translateX(-50%) !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_19;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_27;?>px !important;
						color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_28;?> !important;
						padding:0px 7px !important;
						border:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_30;?>px <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_31;?> <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_29;?> !important;
						text-align:center !important;
						opacity:0 !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
						-webkit-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
						-ms-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
						-moz-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
						-o-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
						backface-visibility: hidden;
						-moz-backface-visibility: hidden;
						-webkit-backface-visibility: hidden;
					}
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>:hover .hovLink7_<?php echo $Total_Soft_Gallery_Video; ?> { opacity:1 !important; }
					.hovLink8_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute !important;
						top:-100% !important;
						left:50% !important;
						transform:translateX(-50%) !important;
						-ms-transform:translateX(-50%) !important;
						-moz-transform:translateX(-50%) !important;
						-o-transform:translateX(-50%) !important;
						-webkit-transform:translateX(-50%) !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_19;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_27;?>px !important;
						color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_28;?> !important;
						padding:0px 7px !important;
						border:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_30;?>px <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_31;?> <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_29;?> !important;
						text-align:center !important;
						opacity:1 !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
						-webkit-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
						-ms-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
						-moz-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
						-o-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
					}
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>:hover .hovLink8_<?php echo $Total_Soft_Gallery_Video; ?> { opacity:1 !important; top:60% !important; }
					.hovLink9_<?php echo $Total_Soft_Gallery_Video; ?>
					{
						position:absolute !important;
						top:60% !important;
						left:50% !important;
						transform:translateX(-50%) !important;
						-ms-transform:translateX(-50%) !important;
						-moz-transform:translateX(-50%) !important;
						-o-transform:translateX(-50%) !important;
						-webkit-transform:translateX(-50%) !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_19;?>;
						font-size:0px !important;
						color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_28;?> !important;
						padding:0px 7px !important;
						border:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_30;?>px <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_31;?> <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_29;?> !important;
						text-align:center !important;
						opacity:0 !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
						-webkit-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
						-ms-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
						-moz-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
						-o-transition: all <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34/10;?>s linear !important;
					}
					.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>:hover .hovLink9_<?php echo $Total_Soft_Gallery_Video; ?> 
					{
						opacity:1 !important;
						font-size:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_27;?>px !important;
					}
					.hovLink, .hovLink:hover { text-decoration:none !important; box-shadow: none !important; -moz-box-shadow: none !important; -webkit-box-shadow: none !important; box-sizing: border-box !important; -moz-box-sizing: border-box !important; -webkit-box-sizing: border-box !important; }
					.hovLink:focus { border:none; outline: none !important; }
					.totalsoft-gv-lvg-content<?php echo $Total_Soft_Gallery_Video; ?> { overflow: hidden; }
					.pp_previous, .pp_next { display: none; }
					.TS_GV_LVG_Loading_<?php echo $Total_Soft_Gallery_Video;?>
					{
						position: absolute;
						left: 0;
						top: 0;
						width: 100%;
						height: 100%;
						background: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_37;?>;
						z-index: 10;
						padding: 0;
						overflow: hidden !important;
						text-align: center;
					}
					.TS_GV_LVG_Loading_<?php echo $Total_Soft_Gallery_Video;?> img
					{
						margin: 0 auto !important;
						position: relative;
						top: 50%;
						transform: translateY(-50%);
						-moz-transform: translateY(-50%);
						-webkit-transform: translateY(-50%);
					}
					@media only screen and (min-width: 980px) {
						.pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>{
						width: 650px!important;
						}
						}
				</style>
				<script type="text/javascript">
					(function($){ $.prettyPhoto={};$.fn.prettyPhoto=function(pp_settings){pp_settings=jQuery.extend({animation_speed:'fast',slideshow:false,autoplay_slideshow:false,opacity:0.80,show_title:true,allow_resize:true,default_width:500,default_height:344,counter_separator_label:'/',theme:'facebook',hideflash:false,wmode:'opaque',autoplay:true,modal:false,overlay_gallery:true,keyboard_shortcuts:true,changepicturecallback:function(){},callback:function(){},markup:'<div class="pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>"> \
					      <div class="pp_top<?php echo $Total_Soft_Gallery_Video; ?>"> \
					       <div class="pp_left<?php echo $Total_Soft_Gallery_Video; ?>"></div> \
					       <div class="pp_middle<?php echo $Total_Soft_Gallery_Video; ?>"></div> \
					       <div class="pp_right<?php echo $Total_Soft_Gallery_Video; ?>"></div> \
					      </div> \
					      <div class="pp_content_container<?php echo $Total_Soft_Gallery_Video; ?>"> \
					       <div class="pp_left<?php echo $Total_Soft_Gallery_Video; ?>"> \
					       <div class="pp_right<?php echo $Total_Soft_Gallery_Video; ?>"> \
					        <div class="pp_content<?php echo $Total_Soft_Gallery_Video; ?>"> \
					         <div class="pp_loaderIcon<?php echo $Total_Soft_Gallery_Video; ?>"></div> \
					         <div class="pp_fade<?php echo $Total_Soft_Gallery_Video; ?>"> \
					          <a href="#" class="pp_expand<?php echo $Total_Soft_Gallery_Video; ?>" title="Expand the image">Expand</a> \
					          <div class="pp_hoverContainer<?php echo $Total_Soft_Gallery_Video; ?>"> \
					           <a class="pp_next" href="#">next</a> \
					           <a class="pp_previous" href="#">previous</a> \
					          </div> \
					          <div id="pp_full_res<?php echo $Total_Soft_Gallery_Video; ?>"></div> \
					          <div class="pp_details<?php echo $Total_Soft_Gallery_Video; ?> clearfix<?php echo $Total_Soft_Gallery_Video; ?>"> \
					           <p class="pp_description<?php echo $Total_Soft_Gallery_Video; ?>"></p> \
					           <i class="totalsoft-gv-lvg-close<?php echo $Total_Soft_Gallery_Video; ?> pp_close<?php echo $Total_Soft_Gallery_Video; ?> <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_25;?>"><span><?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_28;?></span></i> \
					            <div class="pp_nav<?php echo $Total_Soft_Gallery_Video; ?>"> \
					            <i href="#" class="pp_arrow_previous<?php echo $Total_Soft_Gallery_Video; ?> totalsoft-gv-lvg-nepr<?php echo $Total_Soft_Gallery_Video; ?> <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_31;?>"></i> \
					            <p class="currentTextHolder totalsoft-gv-lvg-text<?php echo $Total_Soft_Gallery_Video; ?>">0/0</p> \
					            <i href="#" class="pp_arrow_next<?php echo $Total_Soft_Gallery_Video; ?> totalsoft-gv-lvg-nepr<?php echo $Total_Soft_Gallery_Video; ?> <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_32;?>"></i> \
					           </div> \
					          </div> \
					         </div> \
					        </div> \
					       </div> \
					       </div> \
					      </div> \
					      <div class="pp_bottom<?php echo $Total_Soft_Gallery_Video; ?>"> \
					       <div class="pp_left<?php echo $Total_Soft_Gallery_Video; ?>"></div> \
					       <div class="pp_middle<?php echo $Total_Soft_Gallery_Video; ?>"></div> \
					       <div class="pp_right<?php echo $Total_Soft_Gallery_Video; ?>"></div> \
					      </div> \
					     </div> \
					     <div class="pp_overlay<?php echo $Total_Soft_Gallery_Video; ?>"></div>',gallery_markup:'<div class="pp_gallery<?php echo $Total_Soft_Gallery_Video; ?>"> \
					        <a href="#" class="pp_arrow_previous<?php echo $Total_Soft_Gallery_Video; ?>">Previous</a> \
					        <ul> \
					         {gallery} \
					        </ul> \
					        <a href="#" class="pp_arrow_next<?php echo $Total_Soft_Gallery_Video; ?>">Next</a> \
					       </div>',image_markup:'<img id="fullResImage" src="">',flash_markup:'<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="{width}" height="{height}"><param name="wmode" value="{wmode}" /><param name="allowfullscreen" value="true" /><param name="allowscriptaccess" value="always" /><param name="movie" value="{path}" /><embed src="{path}" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="{width}" height="{height}" wmode="{wmode}"></embed></object>',quicktime_markup:'<object classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab" height="{height}" width="{width}"><param name="src" value="{path}"><param name="autoplay" value="{autoplay}"><param name="type" value="video/quicktime"><embed src="{path}" height="{height}" width="{width}" autoplay="{autoplay}" type="video/quicktime" pluginspage="http://www.apple.com/quicktime/download/"></embed></object>',iframe_markup:'<iframe src ="{path}" width="{width}" height="{height}" frameborder="no"></iframe>',inline_markup:'<div class="pp_inline<?php echo $Total_Soft_Gallery_Video; ?> clearfix<?php echo $Total_Soft_Gallery_Video; ?>">{content}</div>',custom_markup:'', mp4_markup: '<video width="{width}" height="{height}" controls><source src="{path}" type="video/mp4"></video>'},pp_settings);var matchedObjects=this,percentBased=false,correctSizes,pp_open,pp_contentHeight,pp_contentWidth,pp_containerHeight,pp_containeTotalSoftidth,windowHeight=$(window).height(),windowWidth=$(window).width(),pp_slideshow;doresize=true,scroll_pos=_get_scroll();$(window).unbind('resize').resize(function(){ _center_overlay();_resize_overlay();});if(pp_settings.keyboard_shortcuts){$(document).unbind('keydown').keydown(function(e){if(typeof $pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>!='undefined'){if($pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.is(':visible')){switch(e.keyCode){case 37:$.prettyPhoto.changePage('previous');break;case 39:$.prettyPhoto.changePage('next');break;case 27:if(!settings.modal)
					$.prettyPhoto.close();break;};return false;};};});}
					$.prettyPhoto.initialize=function(){
					  settings=pp_settings;
					  if($.browser.msie&&parseInt($.browser.version)==6)settings.theme="light_square";
					  _buildOverlay(this);
					  if(settings.allow_resize)
					  $(window).scroll(function(){_center_overlay();});
					  _center_overlay();
					  set_position=jQuery.inArray($(this).attr('href'),pp_images);

					  $.prettyPhoto.open();
					  return false;
					}
					$.prettyPhoto.open=function(event){
					  if(typeof settings=="undefined")
					    {
					      settings=pp_settings;
					      if($.browser.msie&&$.browser.version==6)settings.theme="light_square";
					      _buildOverlay(event.target);
					      pp_images=$.makeArray(arguments[0]);
					      pp_titles=(arguments[1])?$.makeArray(arguments[1]):$.makeArray("");
					      pp_descriptions=(arguments[2])?$.makeArray(arguments[2]):$.makeArray("");
					      isSet=(pp_images.length>1)?true:false;
					      set_position=0;
					    }
					  if($.browser.msie&&$.browser.version==6)$('select').css('visibility','hidden');
					  if(settings.hideflash)$('object,embed').css('visibility','hidden');
					  _checkPosition($(pp_images).size());
					  $('.pp_loaderIcon<?php echo $Total_Soft_Gallery_Video; ?>').show();
					  if($ppt<?php echo $Total_Soft_Gallery_Video; ?>.is(':hidden'))$ppt<?php echo $Total_Soft_Gallery_Video; ?>.css('opacity',0).show();
					  $pp_overlay<?php echo $Total_Soft_Gallery_Video; ?>.show().fadeTo(settings.animation_speed,settings.opacity);
					  var tt = $pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('.currentTextHolder').text((set_position+1)+settings.counter_separator_label+$(pp_images).size());
					  $pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('.pp_description<?php echo $Total_Soft_Gallery_Video; ?>').show().html(unescape(pp_descriptions[set_position]));
					  (settings.show_title&&pp_titles[set_position]!=""&&typeof pp_titles[set_position]!="undefined")?$ppt<?php echo $Total_Soft_Gallery_Video; ?>.html(unescape(pp_titles[set_position])):$ppt<?php echo $Total_Soft_Gallery_Video; ?>.html('&nbsp;');
					  movie_width=(parseFloat(grab_param('width',pp_images[set_position])))?grab_param('width',pp_images[set_position]):settings.default_width.toString();
					  movie_height=(parseFloat(grab_param('height',pp_images[set_position])))?grab_param('height',pp_images[set_position]):settings.default_height.toString();
					  if(movie_width.indexOf('%')!=-1||movie_height.indexOf('%')!=-1)
					    {
					      movie_height=parseFloat(($(window).height()*parseFloat(movie_height)/100)-150);
					      movie_width=parseFloat(($(window).width()*parseFloat(movie_width)/100)-150);
					      percentBased=true;
					    }
					  else{percentBased=false;}
					  $pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.fadeIn(function(){
					    imgPreloader="";
					    var r =pp_images[set_position].replace('embed/','watch?v=');
					    pp_images[set_position]=r;
					    switch(_getFileType(pp_images[set_position]))
					    {
					      case'image':imgPreloader=new Image();
					        nextImage=new Image();
					        if(isSet&&set_position>$(pp_images).size())nextImage.src=pp_images[set_position+1];
					        prevImage=new Image();
					        if(isSet&&pp_images[set_position-1])prevImage.src=pp_images[set_position-1];
					        $pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('#pp_full_res<?php echo $Total_Soft_Gallery_Video; ?>')[0].innerHTML=settings.image_markup;
					        $pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('#fullResImage').attr('src',pp_images[set_position]);
					        imgPreloader.onload=function(){correctSizes=_fitToViewport(imgPreloader.width,imgPreloader.height);
					          _showContent();
					        };
					        imgPreloader.onerror=function(){
					          alert('Image cannot be loaded. Make sure the path is correct and image exist.');
					          $.prettyPhoto.close();
					        };
					        imgPreloader.src=pp_images[set_position];

					      break;
							case'youtube':correctSizes=_fitToViewport(movie_width,movie_height);
 							movie='https://www.youtube.com/embed/'+grab_param('v',pp_images[set_position]);
					        if(movie.indexOf('start')===-1){
					        movie='https://www.youtube.com/embed/'+grab_param('v',pp_images[set_position]);
					        if(settings.autoplay){
					        	movie+="?autoplay=1;rel=0;iv_load_policy=3";
					        	toInject=settings.iframe_markup.replace(/{width}/g,correctSizes['width']).replace(/{height}/g,correctSizes['height']).replace(/{path}/g,movie);
					        	}
					        }
					       else{
					        	movie='https://www.youtube.com/embed/'+grab_param('v',pp_images[set_position]);
					        	if(settings.autoplay){
					        	movie+="&autoplay=1;rel=0;iv_load_policy=3";
					        	toInject=settings.iframe_markup.replace(/{width}/g,correctSizes['width']).replace(/{height}/g,correctSizes['height']).replace(/{path}/g,movie);
					        	}
					       }
					      break;
					      case'vimeo':correctSizes=_fitToViewport(movie_width,movie_height);
					        movie_id=pp_images[set_position];
					        var regExp=movie_id.split('vimeo.com/');
					        var match=regExp[1];
					        movie='https://player.vimeo.com/'+match+'?title=0&amp;byline=0&amp;portrait=0';
					        if(settings.autoplay)movie+=";autoplay=1;";
					        vimeo_width=correctSizes['width']+'/embed/?moog_width='+correctSizes['width'];
					        toInject=settings.iframe_markup.replace(/{width}/g,vimeo_width).replace(/{height}/g,correctSizes['height']).replace(/{path}/g,movie);
					      break;
					      case'wistia':correctSizes=_fitToViewport(movie_width,movie_height);
					        movie_id=pp_images[set_position];
					        var regExp=movie_id.match(/wistia\.com\/medias\/([a-zA-Z0-9\-_]+)/);
					        var match=regExp[1];   
					        movie='//fast.wistia.net/embed/iframe/'+match+'';
					        toInject=settings.iframe_markup.replace(/{width}/g,correctSizes['width']).replace(/{height}/g,correctSizes['height']).replace(/{path}/g,movie);
					      break;
					      case'quicktime':correctSizes=_fitToViewport(movie_width,movie_height);
					        correctSizes['height']+=15;
					        correctSizes['contentHeight']+=15;
					        correctSizes['containerHeight']+=15;
					        toInject=settings.quicktime_markup.replace(/{width}/g,correctSizes['width']).replace(/{height}/g,correctSizes['height']).replace(/{wmode}/g,settings.wmode).replace(/{path}/g,pp_images[set_position]).replace(/{autoplay}/g,settings.autoplay);
					      break;
					      case'flash':correctSizes=_fitToViewport(movie_width,movie_height);
					        flash_vars=pp_images[set_position];
					        flash_vars=flash_vars.substring(pp_images[set_position].indexOf('flashvars')+10,pp_images[set_position].length);
					        filename=pp_images[set_position];
					        filename=filename.substring(0,filename.indexOf('?'));
					        toInject=settings.flash_markup.replace(/{width}/g,correctSizes['width']).replace(/{height}/g,correctSizes['height']).replace(/{wmode}/g,settings.wmode).replace(/{path}/g,filename+'?'+flash_vars);
					      break;
					      case'iframe':correctSizes=_fitToViewport(movie_width,movie_height);
					        frame_url=pp_images[set_position];
					        
					        if(frame_url.indexOf("wistia")!=-1){
					        var arr = frame_url.split('/');
					        var frame_url = '//'+arr[2]+'/embed/iframe/'+arr[4];
					        toInject=settings.iframe_markup.replace(/{width}/g,correctSizes['width']).replace(/{height}/g,correctSizes['height']).replace(/{path}/g,frame_url);
					        }else{
				        	frame_url=frame_url.substr(0,frame_url.indexOf('iframe')-1);
					        toInject=settings.iframe_markup.replace(/{width}/g,correctSizes['width']).replace(/{height}/g,correctSizes['height']).replace(/{path}/g,frame_url);
					        }
					        
					      break;
					      case'custom':correctSizes=_fitToViewport(movie_width,movie_height);
					        toInject=settings.custom_markup;
					      break;
					      case'inline':myClone=$(pp_images[set_position]).clone().css({'width':settings.default_width}).wrapInner('<div id="pp_full_res<?php echo $Total_Soft_Gallery_Video; ?>"><div class="pp_inline<?php echo $Total_Soft_Gallery_Video; ?> clearfix<?php echo $Total_Soft_Gallery_Video; ?>"></div></div>').appendTo($('body'));
					        correctSizes=_fitToViewport($(myClone).width(),$(myClone).height());
					        $(myClone).remove();
					        toInject=settings.inline_markup.replace(/{content}/g,$(pp_images[set_position]).html());
					      break;
					      case'mp4':correctSizes=_fitToViewport(movie_width,movie_height);
					        toInject=settings.mp4_markup.replace(/{width}/g,correctSizes['width']).replace(/{height}/g,correctSizes['height']).replace(/{path}/g,pp_images[set_position]);;
					      break;
					    };
					    if(!imgPreloader)
					    {
					      $pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('#pp_full_res<?php echo $Total_Soft_Gallery_Video; ?>')[0].innerHTML=toInject;
					      _showContent();
					    };
					  });
					  return false;
					};
					$.prettyPhoto.changePage=function(direction){currentGalleryPage=0;if(direction=='previous'){set_position--;if(set_position<0){set_position=0;return;};}else if(direction=='next'){set_position++;if(set_position>$(pp_images).size()-1){set_position=0;}}else{set_position=direction;};if(!doresize)doresize=true;$('.pp_contract<?php echo $Total_Soft_Gallery_Video; ?>').removeClass('pp_contract<?php echo $Total_Soft_Gallery_Video; ?>').addClass('pp_expand<?php echo $Total_Soft_Gallery_Video; ?>');_hideContent(function(){$.prettyPhoto.open();});};$.prettyPhoto.changeGalleryPage=function(direction){if(direction=='next'){currentGalleryPage++;if(currentGalleryPage>totalPage){currentGalleryPage=0;};}else if(direction=='previous'){currentGalleryPage--;if(currentGalleryPage<0){currentGalleryPage=totalPage;};}else{currentGalleryPage=direction;};itemsToSlide=(currentGalleryPage==totalPage)?pp_images.length-((totalPage)*itemsPerPage):itemsPerPage;$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('.pp_gallery<?php echo $Total_Soft_Gallery_Video; ?> li').each(function(i){$(this).animate({'left':(i*itemWidth)-((itemsToSlide*itemWidth)*currentGalleryPage)});});};$.prettyPhoto.startSlideshow=function(){if(typeof pp_slideshow=='undefined'){$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('.pp_play<?php echo $Total_Soft_Gallery_Video; ?>').unbind('click').removeClass('pp_play<?php echo $Total_Soft_Gallery_Video; ?> <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_20;?>').addClass('pp_pause<?php echo $Total_Soft_Gallery_Video; ?> <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_21;?>').click(function(){$.prettyPhoto.stopSlideshow();return false;});pp_slideshow=setInterval($.prettyPhoto.startSlideshow,settings.slideshow);}else{$.prettyPhoto.changePage('next');};}
					$.prettyPhoto.stopSlideshow=function(){$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('.pp_pause<?php echo $Total_Soft_Gallery_Video; ?>').unbind('click').removeClass('pp_pause<?php echo $Total_Soft_Gallery_Video; ?> <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_21;?>').addClass('pp_play<?php echo $Total_Soft_Gallery_Video; ?> <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_20;?>').click(function(){$.prettyPhoto.startSlideshow();return false;});clearInterval(pp_slideshow);pp_slideshow=undefined;}
					$.prettyPhoto.close=function(){clearInterval(pp_slideshow);$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.stop().find('object,embed').css('visibility','hidden');$('div.pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>,div.ppt<?php echo $Total_Soft_Gallery_Video; ?>,.pp_fade<?php echo $Total_Soft_Gallery_Video; ?>').fadeOut(settings.animation_speed,function(){$(this).remove();});$pp_overlay<?php echo $Total_Soft_Gallery_Video; ?>.fadeOut(settings.animation_speed,function(){if($.browser.msie&&$.browser.version==6)$('select').css('visibility','visible');if(settings.hideflash)$('object,embed').css('visibility','visible');$(this).remove();$(window).unbind('scroll');settings.callback();doresize=true;pp_open=false;delete settings;});}; _showContent=function(){ $('.pp_loaderIcon<?php echo $Total_Soft_Gallery_Video; ?>').hide();$ppt<?php echo $Total_Soft_Gallery_Video; ?>.fadeTo(settings.animation_speed,1);projectedTop=scroll_pos['scrollTop']+((windowHeight/2)-(correctSizes['containerHeight']/2));if(projectedTop<0)projectedTop=0; $pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('.pp_content<?php echo $Total_Soft_Gallery_Video; ?>').animate({'height':correctSizes['contentHeight']},settings.animation_speed);$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.animate({'top':projectedTop,'left':(windowWidth/2)-(correctSizes['containeTotalSoftidth']/2),'width':correctSizes['containeTotalSoftidth']},settings.animation_speed,function(){$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('.pp_hoverContainer<?php echo $Total_Soft_Gallery_Video; ?>,#fullResImage').height(correctSizes['height']).width(correctSizes['width']);$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('.pp_fade<?php echo $Total_Soft_Gallery_Video; ?>').fadeIn(settings.animation_speed);if(isSet&&_getFileType(pp_images[set_position])=="image"){$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('.pp_hoverContainer<?php echo $Total_Soft_Gallery_Video; ?>').show();}else{$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('.pp_hoverContainer<?php echo $Total_Soft_Gallery_Video; ?>').hide();}
					if(correctSizes['resized'])$('a.pp_expand<?php echo $Total_Soft_Gallery_Video; ?>,a.pp_contract<?php echo $Total_Soft_Gallery_Video; ?>').fadeIn(settings.animation_speed);if(settings.autoplay_slideshow&&!pp_slideshow&&!pp_open)$.prettyPhoto.startSlideshow();settings.changepicturecallback();pp_open=true;});_insert_gallery();};function _hideContent(callback){$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('#pp_full_res<?php echo $Total_Soft_Gallery_Video; ?> object,#pp_full_res<?php echo $Total_Soft_Gallery_Video; ?> embed').css('visibility','hidden');$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('.pp_fade<?php echo $Total_Soft_Gallery_Video; ?>').fadeOut(settings.animation_speed,function(){$('.pp_loaderIcon<?php echo $Total_Soft_Gallery_Video; ?>').show();callback();});};function _checkPosition(setCount){if(set_position==setCount-1){$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('a.pp_next').css('visibility','hidden');$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('a.pp_next').addClass('disabled').unbind('click');}else{$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('a.pp_next').css('visibility','visible');$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('a.pp_next.disabled').removeClass('disabled').bind('click',function(){$.prettyPhoto.changePage('next');return false;});};if(set_position==0){$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('a.pp_previous').css('visibility','hidden').addClass('disabled').unbind('click');}else{$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('a.pp_previous.disabled').css('visibility','visible').removeClass('disabled').bind('click',function(){$.prettyPhoto.changePage('previous');return false;});};(setCount>1)?$('.pp_nav<?php echo $Total_Soft_Gallery_Video; ?>').show():$('.pp_nav<?php echo $Total_Soft_Gallery_Video; ?>').hide();};function _fitToViewport(width,height){resized=false;_getDimensions(width,height);imageWidth=width,imageHeight=height;if(((pp_containeTotalSoftidth>windowWidth)||(pp_containerHeight>windowHeight))&&doresize&&settings.allow_resize&&!percentBased){resized=true,fitting=false;while(!fitting){if((pp_containeTotalSoftidth>windowWidth)){imageWidth=(windowWidth-50);imageHeight=(height/width)*imageWidth;}else if((pp_containerHeight>windowHeight)){imageHeight=(windowHeight-150);imageWidth=(width/height)*imageHeight;}else{fitting=true;};pp_containerHeight=imageHeight,pp_containeTotalSoftidth=imageWidth;};_getDimensions(imageWidth,imageHeight);};return{width:Math.floor(imageWidth),height:Math.floor(imageHeight),containerHeight:Math.floor(pp_containerHeight),containeTotalSoftidth:Math.floor(pp_containeTotalSoftidth)+40,contentHeight:Math.floor(pp_contentHeight),contentWidth:Math.floor(pp_contentWidth),resized:resized};};function _getDimensions(width,height){width=parseFloat(width);height=parseFloat(height);$pp_details<?php echo $Total_Soft_Gallery_Video; ?>=$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('.pp_details<?php echo $Total_Soft_Gallery_Video; ?>');/*----poxel---*/$pp_details<?php echo $Total_Soft_Gallery_Video; ?>.width();detailsHeight=parseFloat($pp_details<?php echo $Total_Soft_Gallery_Video; ?>.css('marginTop'))+parseFloat($pp_details<?php echo $Total_Soft_Gallery_Video; ?>.css('marginBottom'));$pp_details<?php echo $Total_Soft_Gallery_Video; ?>=$pp_details<?php echo $Total_Soft_Gallery_Video; ?>.clone().appendTo($('body')).css({'position':'absolute','top':-10000});detailsHeight+=$pp_details<?php echo $Total_Soft_Gallery_Video; ?>.height();detailsHeight=(detailsHeight<=34)?36:detailsHeight;if($.browser.msie&&$.browser.version==7)detailsHeight+=8;$pp_details<?php echo $Total_Soft_Gallery_Video; ?>.remove();pp_contentHeight=height+detailsHeight;pp_contentWidth=width;pp_containerHeight=pp_contentHeight+$ppt<?php echo $Total_Soft_Gallery_Video; ?>.height()+$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('.pp_top<?php echo $Total_Soft_Gallery_Video; ?>').height()+$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('.pp_bottom<?php echo $Total_Soft_Gallery_Video; ?>').height();pp_containeTotalSoftidth=width;}
					function _getFileType(itemSrc){if(itemSrc.match(/youtube\.com\/watch/i)){return'youtube';}else if(itemSrc.match(/vimeo\.com/i)){return'vimeo';}else if(itemSrc.indexOf('.mov')!=-1){return'quicktime';}else if(itemSrc.indexOf('.swf')!=-1){return'flash';}else if(itemSrc.indexOf('.mp4')!=-1){return'mp4';}else if(itemSrc.indexOf('iframe')!=-1){return'iframe';}else if(itemSrc.indexOf('custom')!=-1){return'custom';}else if(itemSrc.substr(0,1)=='#'){return'inline';}else if(itemSrc.match(/wistia\.com\/medias/i)){return'wistia';}else{return'image';};};function _center_overlay(){if(doresize&&typeof $pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>!='undefined'){scroll_pos=_get_scroll();titleHeight=$ppt<?php echo $Total_Soft_Gallery_Video; ?>.height(),contentHeight=$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.height(),contentwidth=$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.width();projectedTop=(windowHeight/2)+scroll_pos['scrollTop']-(contentHeight/2);$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.css({'top':projectedTop,'left':Math.floor((windowWidth/2))+scroll_pos['scrollLeft']-Math.floor((contentwidth/2))});};};function _get_scroll(){if(self.pageYOffset){return{scrollTop:self.pageYOffset,scrollLeft:self.pageXOffset};}else if(document.documentElement&&document.documentElement.scrollTop){return{scrollTop:document.documentElement.scrollTop,scrollLeft:document.documentElement.scrollLeft};}else if(document.body){return{scrollTop:document.body.scrollTop,scrollLeft:document.body.scrollLeft};};};function _resize_overlay(){windowHeight=$(window).height(),windowWidth=$(window).width();if(typeof $pp_overlay<?php echo $Total_Soft_Gallery_Video; ?>!="undefined")$pp_overlay<?php echo $Total_Soft_Gallery_Video; ?>.height($(document).height());};function _insert_gallery(){if(isSet&&settings.overlay_gallery&&_getFileType(pp_images[set_position])=="image"){itemWidth=52+5;navWidth=(settings.theme=="facebook")?58:38;itemsPerPage=Math.floor((correctSizes['containeTotalSoftidth']-100-navWidth)/itemWidth);itemsPerPage=(itemsPerPage<pp_images.length)?itemsPerPage:pp_images.length;totalPage=Math.ceil(pp_images.length/itemsPerPage)-1;if(totalPage==0){navWidth=0;$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('.pp_gallery<?php echo $Total_Soft_Gallery_Video; ?> .pp_arrow_next<?php echo $Total_Soft_Gallery_Video; ?>,.pp_gallery<?php echo $Total_Soft_Gallery_Video; ?> .pp_arrow_previous<?php echo $Total_Soft_Gallery_Video; ?>').hide();}else{$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('.pp_gallery<?php echo $Total_Soft_Gallery_Video; ?> .pp_arrow_next<?php echo $Total_Soft_Gallery_Video; ?>,.pp_gallery<?php echo $Total_Soft_Gallery_Video; ?> .pp_arrow_previous<?php echo $Total_Soft_Gallery_Video; ?>').show();};galleryWidth=itemsPerPage*itemWidth+navWidth;$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('.pp_gallery<?php echo $Total_Soft_Gallery_Video; ?>').width(galleryWidth).css('margin-left',-Math.floor((galleryWidth/2)));$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('.pp_gallery<?php echo $Total_Soft_Gallery_Video; ?> ul').width(itemsPerPage*itemWidth).find('li.selected').removeClass('selected');goToPage=(Math.floor(set_position/itemsPerPage)<=totalPage)?Math.floor(set_position/itemsPerPage):totalPage;if(itemsPerPage){$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('.pp_gallery<?php echo $Total_Soft_Gallery_Video; ?>').hide().show().removeClass('disabled');}else{$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('.pp_gallery<?php echo $Total_Soft_Gallery_Video; ?>').hide().addClass('disabled');}
					$.prettyPhoto.changeGalleryPage(goToPage);$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('.pp_gallery<?php echo $Total_Soft_Gallery_Video; ?> ul li:eq('+set_position+')').addClass('selected');}else{$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('.pp_content<?php echo $Total_Soft_Gallery_Video; ?>').unbind('mouseenter mouseleave');$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('.pp_gallery<?php echo $Total_Soft_Gallery_Video; ?>').hide();}}
					function _buildOverlay(caller){theRel=$(caller).attr('rel');galleryRegExp=/\[(?:.*)\]/;isSet=(galleryRegExp.exec(theRel))?true:false;pp_images=(isSet)?jQuery.map(matchedObjects,function(n,i){if($(n).attr('rel').indexOf(theRel)!=-1)return $(n).attr('href');}):$.makeArray($(caller).attr('href'));pp_titles=(isSet)?jQuery.map(matchedObjects,function(n,i){if($(n).attr('rel').indexOf(theRel)!=-1)return($(n).find('img').attr('alt'))?$(n).find('img').attr('alt'):"";}):$.makeArray($(caller).find('img').attr('alt'));pp_descriptions=(isSet)?jQuery.map(matchedObjects,function(n,i){if($(n).attr('rel').indexOf(theRel)!=-1)return($(n).attr('title'))?$(n).attr('title'):"";}):$.makeArray($(caller).attr('title'));$('body').append(settings.markup);$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>=$('.pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>'),$ppt<?php echo $Total_Soft_Gallery_Video; ?>=$('.ppt<?php echo $Total_Soft_Gallery_Video; ?>'),$pp_overlay<?php echo $Total_Soft_Gallery_Video; ?>=$('div.pp_overlay<?php echo $Total_Soft_Gallery_Video; ?>');if(isSet&&settings.overlay_gallery){currentGalleryPage=0;toInject="";for(var i=0;i<pp_images.length;i++){var regex=new RegExp("(.*?)\.(jpg|jpeg|png|gif)$");var results=regex.exec(pp_images[i]);if(!results){classname='default';}else{classname='';}
					toInject+="<li class='"+classname+"'><a href='#'><img src='"+pp_images[i]+"' width='50' alt='' /></a></li>";};toInject=settings.gallery_markup.replace(/{gallery}/g,toInject);$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('#pp_full_res<?php echo $Total_Soft_Gallery_Video; ?>').after(toInject);$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('.pp_gallery<?php echo $Total_Soft_Gallery_Video; ?> .pp_arrow_next<?php echo $Total_Soft_Gallery_Video; ?>').click(function(){ $.prettyPhoto.changeGalleryPage('next');$.prettyPhoto.stopSlideshow();return false;});$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('.pp_gallery<?php echo $Total_Soft_Gallery_Video; ?> .pp_arrow_previous<?php echo $Total_Soft_Gallery_Video; ?>').click(function(){$.prettyPhoto.changeGalleryPage('previous');$.prettyPhoto.stopSlideshow();return false;});$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('.pp_content<?php echo $Total_Soft_Gallery_Video; ?>').hover(function(){$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('.pp_gallery<?php echo $Total_Soft_Gallery_Video; ?>:not(.disabled)').fadeIn();},function(){$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('.pp_gallery<?php echo $Total_Soft_Gallery_Video; ?>:not(.disabled)').fadeOut();});itemWidth=52+5;$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('.pp_gallery<?php echo $Total_Soft_Gallery_Video; ?> ul li').each(function(i){$(this).css({'position':'absolute','left':i*itemWidth});$(this).find('a').unbind('click').click(function(){$.prettyPhoto.changePage(i);$.prettyPhoto.stopSlideshow();return false;});});};if(settings.slideshow){$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('.pp_nav<?php echo $Total_Soft_Gallery_Video; ?>').prepend('<i class="totalsoft-gv-lvg-pl-pa<?php echo $Total_Soft_Gallery_Video; ?> pp_play<?php echo $Total_Soft_Gallery_Video; ?> <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_20;?>"></i>')
					$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('.pp_nav<?php echo $Total_Soft_Gallery_Video; ?> .pp_play<?php echo $Total_Soft_Gallery_Video; ?>').click(function(){$.prettyPhoto.startSlideshow();return false;});}
					$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.attr('class','pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?> '+settings.theme);$pp_overlay<?php echo $Total_Soft_Gallery_Video; ?>.css({'opacity':0,'height':$(document).height(),'width':$(document).width()}).bind('click',function(){if(!settings.modal)$.prettyPhoto.close();});$('i.pp_close<?php echo $Total_Soft_Gallery_Video; ?>').bind('click',function(){$.prettyPhoto.close();return false;});$('a.pp_expand<?php echo $Total_Soft_Gallery_Video; ?>').bind('click',function(e){if($(this).hasClass('pp_expand<?php echo $Total_Soft_Gallery_Video; ?>')){$(this).removeClass('pp_expand<?php echo $Total_Soft_Gallery_Video; ?>').addClass('pp_contract<?php echo $Total_Soft_Gallery_Video; ?>');doresize=false;}else{$(this).removeClass('pp_contract<?php echo $Total_Soft_Gallery_Video; ?>').addClass('pp_expand<?php echo $Total_Soft_Gallery_Video; ?>');doresize=true;};_hideContent(function(){$.prettyPhoto.open();});return false;});$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('.pp_previous, .pp_nav<?php echo $Total_Soft_Gallery_Video; ?> .pp_arrow_previous<?php echo $Total_Soft_Gallery_Video; ?>').bind('click',function(){$.prettyPhoto.changePage('previous');$.prettyPhoto.stopSlideshow();return false;});$pp_pic_holder<?php echo $Total_Soft_Gallery_Video; ?>.find('.pp_next, .pp_nav<?php echo $Total_Soft_Gallery_Video; ?> .pp_arrow_next<?php echo $Total_Soft_Gallery_Video; ?>').bind('click',function(){$.prettyPhoto.changePage('next');$.prettyPhoto.stopSlideshow();return false;});
					_center_overlay();};return this.unbind('click').click($.prettyPhoto.initialize);};function grab_param(name,url){ name=name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");var regexS="[\\?&]"+name+"=([^&#]*)";var regex=new RegExp(regexS);var results=regex.exec(url);return(results==null)?"":results[1];} })(jQuery);
				</script>
				<div class="Tot_GL<?php echo $Total_Soft_Gallery_Video; ?> Tot_GL" style="position: relative;">
					<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_36 != ''){ ?>
						<div class="TS_GV_LVG_Loading_<?php echo $Total_Soft_Gallery_Video;?>">
							<img src="<?php echo plugins_url('../Images/Loading/loading' . $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_36 . '.gif',__FILE__);?>">
						</div>
					<?php }?>
					<input type="text" style="display:none" class=""/>
					<div class="totalsoft-gv-lvg-content<?php echo $Total_Soft_Gallery_Video; ?>">
						<ul class="ulContWidth totalsoft-gv-lvg-area<?php echo $Total_Soft_Gallery_Video; ?>" style='padding:0px; display: none;'>
							<?php for($i=0;$i<count($Total_Soft_GalleryV_Videos);$i++){ ?>
								<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL == ''){ $TS_GV_LVG_VSR = $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL; }
								else{ 
									/*---poxel----*/
									$TS_GV_LVG_VSR = $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_Video;
								    $TS_GV_LVG_VSRST = $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL; $TS_GV_LVG_VSRST; /*---*/ } ?>
								<?php if($Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType=='All'){ ?>
									<li class="totalsoft-gv-lvg-item2 TotalSoft_GV_LVG_Li" id="TotalSoft_GV_LVG_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i+1;?>" style='max-width:100%;'>
										<div class='fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?> fHeightZoom2'>
											<span class="totalsoft-gv-lvg-image-block<?php echo $Total_Soft_Gallery_Video; ?>"> 
												<a class="image-zoom" href="<?php echo $TS_GV_LVG_VSRST;?>" rel="prettyPhoto[gallery_<?php echo $Total_Soft_Gallery_Video; ?>]" title="<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_14=='true'){ echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);} ?>">
													<?php
													$url = $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL; 
													if(strpos($url, 'http')!==false){
														$url = str_replace('http', 'https', $url);
														$url = str_replace('httpss', 'https', $url); } ?>
													<img class='LImg <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_10;?>_<?php echo $Total_Soft_Gallery_Video; ?>' src="<?php echo $url;?>" alt="<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>" title="<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>"/>
													<div class='<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_13;?>_<?php echo $Total_Soft_Gallery_Video; ?>'></div>
													<h2 class='<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_20;?>_<?php echo $Total_Soft_Gallery_Video; ?>' >
														<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
													</h2>
													<div class='<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_25;?>_<?php echo $Total_Soft_Gallery_Video; ?>'></div>
													<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink != ''){ ?>
													<a href='<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink ?>'  class='hovLink <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_33;?>_<?php echo $Total_Soft_Gallery_Video; ?>' <?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VONT=='true'){echo 'target="_blank"';}?>>
														<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_32;?>
													</a>
													<?php } ?>
												</a>
											</span>
										</div>
									</li>
								<?php } else { ?>
									<?php if($i<$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage){ ?> 
											<li class="totalsoft-gv-lvg-item2 TotalSoft_GV_LVG_Li" id="TotalSoft_GV_LVG_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i+1;?>">
												<div class='fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?> fHeightZoom2'>
													<span class="totalsoft-gv-lvg-image-block<?php echo $Total_Soft_Gallery_Video; ?>">
														<a class="image-zoom" href="<?php echo $TS_GV_LVG_VSRST;?>" rel="prettyPhoto[gallery_<?php echo $Total_Soft_Gallery_Video; ?>]" title="<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_14=='true'){ echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);} ?>">
															<?php
															$url = $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL; 
															if(strpos($url, 'http')!==false){
																$url = str_replace('http', 'https', $url);
																$url = str_replace('httpss', 'https', $url); } ?>
															<img class='LImg <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_10;?>_<?php echo $Total_Soft_Gallery_Video; ?>' src="<?php echo $url;?>" alt="<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>" title="<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>"/>
															<div class='<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_13;?>_<?php echo $Total_Soft_Gallery_Video; ?>'></div>
															<h2 class='<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_20;?>_<?php echo $Total_Soft_Gallery_Video; ?>' >
																<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
															</h2>
															<div class='<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_25;?>_<?php echo $Total_Soft_Gallery_Video; ?>'></div>
															<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink != ''){ ?>
															<a href='<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink ?>'  class='hovLink <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_33;?>_<?php echo $Total_Soft_Gallery_Video; ?>' <?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VONT=='true'){echo 'target="_blank"';}?>>
																<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_32;?>
															</a>
															<?php } ?>
														</a>
													</span>
												</div>
											</li>
										<?php } else { ?> 
											<li style="display:none;" class="totalsoft-gv-lvg-item2 TotalSoft_GV_LVG_Li noshow1" id="TotalSoft_GV_LVG_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i+1;?>">
												<div class='fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?> fHeightZoom2'>
													<span class="totalsoft-gv-lvg-image-block<?php echo $Total_Soft_Gallery_Video; ?>">
														<a class="image-zoom" href="<?php echo $TS_GV_LVG_VSRST;?>" rel="prettyPhoto[gallery_<?php echo $Total_Soft_Gallery_Video; ?>]" title="<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_14=='true'){ echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);} ?>">
															<img class='LImg <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_10;?>_<?php echo $Total_Soft_Gallery_Video; ?>' src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>" alt="<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>" title="<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>"/>
															<div class='<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_13;?>_<?php echo $Total_Soft_Gallery_Video; ?>'></div>
															<h2 class='<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_20;?>_<?php echo $Total_Soft_Gallery_Video; ?>' >
																<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
															</h2>
															<div class='<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_25;?>_<?php echo $Total_Soft_Gallery_Video; ?>'></div>
															<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink != ''){ ?>
															<a href='<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink ?>'  class='hovLink <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_33;?>_<?php echo $Total_Soft_Gallery_Video; ?>' <?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VONT=='true'){echo 'target="_blank"';}?>>
																<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_32;?>
															</a>
															<?php } ?>
														</a>
													</span>
												</div>
											</li>
										<?php }?>
								<?php }?>
							<?php }?>
							<div class="column-clear"></div>
						</ul>
						<?php if($Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType=='Pagination'){ ?>
							<div class="TotalSoftcenter">
								<ul class="pagination pagination<?php echo $Total_Soft_Gallery_Video; ?>">
									<li onclick="Total_Soft_GV_LVG_PageP('<?php echo $Total_Soft_Gallery_Video;?>', '<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>')"><span><?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_38;?></span></li>
									<?php for($i=1;$i<=ceil(count($Total_Soft_GalleryV_Videos)/$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage);$i++){ ?> 
										<?php if($i==1){ ?>
											<li id="TotalSoft_GV_LVG_PLi_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i;?>" onclick="Total_Soft_GV_LVG_Page('<?php echo $Total_Soft_Gallery_Video;?>','<?php echo $i?>','<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>')"><span class="active"><?php echo $i;?></span></li>
										<?php } else { ?>
											<li id="TotalSoft_GV_LVG_PLi_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i;?>" onclick="Total_Soft_GV_LVG_Page('<?php echo $Total_Soft_Gallery_Video;?>','<?php echo $i?>','<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>')"><span><?php echo $i;?></span></li>
										<?php }?>
									<?php }?>
									<li onclick="Total_Soft_GV_LVG_PageN('<?php echo $Total_Soft_Gallery_Video;?>', '<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>', '<?php echo ceil(count($Total_Soft_GalleryV_Videos)/$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage);?>')"><span><?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_37;?></span></li>
								</ul>
							</div>
						<?php }?>
						<?php if($Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType=='Load'){ ?>
							<div class="TotalSoftcenter" id="TotalSoft_VG_LVG_PageDiv_<?php echo $Total_Soft_Gallery_Video;?>">
								<span class="TotalSoftGV_LVG_LM TotalSoftGV_LVG_LM<?php echo $Total_Soft_Gallery_Video; ?>" onclick="Total_Soft_GV_LVG_PageLM('<?php echo $Total_Soft_Gallery_Video;?>', '<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>', '<?php echo ceil(count($Total_Soft_GalleryV_Videos)/$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage);?>')"><?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_LoadMore;?></span>
								<input type="text" style="display:none;" id="TotalSoft_VG_LVG_Page_<?php echo $Total_Soft_Gallery_Video;?>" value="1">
							</div>
						<?php } ?>
					</div>
				</div>
				<input type='text' style='display:none;' class='ImWidth' value='<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01;?>' />
				<input type='text' style='display:none;' class='TS_VG_LG_AE_<?php echo $Total_Soft_Gallery_Video;?>' value='<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_35;?>' />
				<script>
					jQuery(document).ready(function(){
						var Tot_GL = jQuery('.Tot_GL<?php echo $Total_Soft_Gallery_Video;?>');
						jQuery('.TotalSoftGV_LVG_LM').click(function(){
						   // jQuery(Tot_GL).css({'height': jQuery(Tot_GL).height()+'px'});
                           // console.log(56465);
						});
						var array_images<?php echo $Total_Soft_Gallery_Video;?>=[];
						jQuery('.totalsoft-gv-lvg-area<?php echo $Total_Soft_Gallery_Video;?> li').each(function(){
							if( jQuery(this).find('img').attr("src") != "" ) { array_images<?php echo $Total_Soft_Gallery_Video;?>.push(jQuery(this).find('img').attr("src")); }
						})
						var y_images<?php echo $Total_Soft_Gallery_Video;?>=0;
						jQuery('.totalsoft-gv-lvg-area<?php echo $Total_Soft_Gallery_Video;?> li').each(function(i){
							jQuery(this).find('img').attr('src', array_images<?php echo $Total_Soft_Gallery_Video;?>[i]).on("load",function(){
								y_images<?php echo $Total_Soft_Gallery_Video;?>++;
								if(y_images<?php echo $Total_Soft_Gallery_Video;?> == array_images<?php echo $Total_Soft_Gallery_Video;?>.length)
								{
									jQuery('.TS_GV_LVG_Loading_<?php echo $Total_Soft_Gallery_Video;?>').css('display','none');
								}
							})
						})
						var ImWidth = jQuery('.ImWidth').val();
						function imH(){
							jQuery('.TotalSoft_GV_LVG_Li').css('width',Math.floor(ImWidth*jQuery('.ulContWidth').width()/2000)+'px');
							if(jQuery('.ulContWidth').width() <=200){
								jQuery('.TotalSoft_GV_LVG_Li').css({'width':'100%','height':'110px'}); jQuery('.totalsoft-gv-lvg-content<?php echo $Total_Soft_Gallery_Video;?>').css('overflow','visible'); jQuery('.totalsoft-gv-lvg-area<?php echo $Total_Soft_Gallery_Video;?> li').css('margin','5px 0');
								jQuery('.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>').css({'height':'110px'});
							}
							else if(jQuery('.ulContWidth').width()<=450) { jQuery('.TotalSoft_GV_LVG_Li').css({'width':'100%'}); jQuery('.totalsoft-gv-lvg-content<?php echo $Total_Soft_Gallery_Video;?>').css('overflow','visible'); jQuery('.totalsoft-gv-lvg-area<?php echo $Total_Soft_Gallery_Video;?> li').css('margin','5px 0');
							}
							else if(jQuery('.ulContWidth').width()<=700) { jQuery('.TotalSoft_GV_LVG_Li').css('width',Math.floor(ImWidth*jQuery('.ulContWidth').width()/700)+'px'); }
							else if(jQuery('.ulContWidth').width()<=1000) { jQuery('.TotalSoft_GV_LVG_Li').css('width',Math.floor(ImWidth*jQuery('.ulContWidth').width()/1000)+'px'); }
							else if(jQuery('.ulContWidth').width()<=1500) { jQuery('.TotalSoft_GV_LVG_Li').css('width',Math.floor(ImWidth*jQuery('.ulContWidth').width()/1500)+'px'); }
							else if(jQuery('.ulContWidth').width()<=1800) { jQuery('.TotalSoft_GV_LVG_Li').css('width',Math.floor(ImWidth*jQuery('.ulContWidth').width()/1800)+'px'); }
							if(jQuery(window).width() <= 480){
								//  var LVG_height = jQuery('.LImg').height();
								//  jQuery('.TotalSoft_GV_LVG_Li').css('height',LVG_height);
								//  var items = jQuery('.TotalSoft_GV_LVG_Li').find('.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>');
								//  jQuery(items).each(function(index,elem){
        //                          jQuery(items).css({'height':LVG_height});
								// })
							}
						}
						jQuery(window).load(function(){ 
							// jQuery('.TotalSoft_GV_LVG_Li').css('display','none');
							imH();
							jQuery('.totalsoft-gv-lvg-area<?php echo $Total_Soft_Gallery_Video; ?>').css('display','inline-block');

						});
						var win = jQuery(window);
						checkWidth();
						win.resize(checkWidth);
			            function checkWidth () {
                        var height = jQuery('.totalsoft-gv-lvg-item2').height();
						jQuery('.image-zoom').css({'height': height});
						jQuery('.totalsoft-gv-lvg-content<?php echo $Total_Soft_Gallery_Video;?>').css('overflow','visible');
						jQuery('.totalsoft-gv-lvg-area<?php echo $Total_Soft_Gallery_Video;?> li').css('margin','5px 0');
						var items = jQuery('.TotalSoft_GV_LVG_Li').find('.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>');
						var TotalSoft_GV_LVG_Li = jQuery('.ulContWidth').find('.TotalSoft_GV_LVG_Li').not('.noshow1');
						var arr = [];
                        jQuery(TotalSoft_GV_LVG_Li).find('img').each(function(index, elem){
                        	arr[index] = jQuery(elem).height();
                        });
						var min_height = Math.min(...arr);
						 jQuery(items).each(function(index,elem){
                        	jQuery(elem).css({'height':min_height+'px'});
                            jQuery('.LImg').css({'top':'0px'});
						});
						
			            var parent_element = jQuery('.TotalSoft_GV_LVG_Li').parent().parent().parent().parent();
			            var video_gallery_l_h= '<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01;?>';
			        	jQuery(parent_element).each(function(index, elem){
			        		jQuery(elem).css({'padding-left':'0','padding-right':'0'});
			        		var width = jQuery(elem).width();
			               if(jQuery(elem).width()<= video_gallery_l_h){
			                    jQuery(elem).find('.totalsoft-gv-lvg-item2').css({'width':width});
                                var TotalSoft_GV_LVG_Li = jQuery(elem).find('.ulContWidth').find('.TotalSoft_GV_LVG_Li').not('.noshow1');
                                var arr = [];
	                          	jQuery(TotalSoft_GV_LVG_Li).find('img').each(function(index, elem){
	                            	arr[index] = jQuery(elem).height();
	                            });
								var min_height = Math.min(...arr);
								jQuery('.TotalSoft_GV_LVG_Li').find('.fHeightZoom<?php echo $Total_Soft_Gallery_Video; ?>').each(function(index,elem){
                            	jQuery(elem).css({'height':min_height+'px'});
                                jQuery('.LImg').css({'top':'0px'});
							});
				        	}
			        	});
			        }
			        jQuery(window).load(function(){checkWidth();})
			        jQuery(window).resize(function(){checkWidth();})
						var delaytime = 0;
						var TS_VG_LG_AE = jQuery('.TS_VG_LG_AE_<?php echo $Total_Soft_Gallery_Video; ?>').val();
						jQuery('.totalsoft-gv-lvg-area<?php echo $Total_Soft_Gallery_Video; ?> .TotalSoft_GV_LVG_Li').each(function(){
							if(!jQuery(this).hasClass('noshow1'))
							{
								delaytime++;
								if(TS_VG_LG_AE == '')
								{
									jQuery(this).css({'opacity':'1'});
								}
								else if(TS_VG_LG_AE == 'fadeIn')
								{
									jQuery(this).css({'animation':'fadeIn 0.65s ease '+0.2*delaytime+'s forwards','-webkit-animation':'fadeIn 0.65s ease '+0.2*delaytime+'s forwards','-moz-animation':'fadeIn 0.65s ease '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_LG_AE == 'moveUp')
								{
									jQuery(this).css({'animation':'moveUp 0.65s ease '+0.2*delaytime+'s forwards','-webkit-animation':'moveUp 0.65s ease '+0.2*delaytime+'s forwards','-moz-animation':'moveUp 0.65s ease '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_LG_AE == 'scaleUp')
								{
									jQuery(this).css({'animation':'scaleUp 0.65s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'scaleUp 0.65s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'scaleUp 0.65s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_LG_AE == 'fallPerspective')
								{
									jQuery(this).css({'animation':'fallPerspective 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'fallPerspective 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'fallPerspective 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_LG_AE == 'fly')
								{
									jQuery(this).css({'animation':'fly 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'fly 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'fly 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_LG_AE == 'flip')
								{
									jQuery(this).css({'animation':'flip 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'flip 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'flip 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_LG_AE == 'helix')
								{
									jQuery(this).css({'animation':'helix 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'helix 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'helix 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_LG_AE == 'popUp')
								{
									jQuery(this).css({'animation':'popUp 0.8s ease-in '+0.2*delaytime+'s forwards','-webkit-animation':'popUp 0.8s ease-in '+0.2*delaytime+'s forwards','-moz-animation':'popUp 0.8s ease-in '+0.2*delaytime+'s forwards'});
								}
							}

						});

					})
					// setTimeout(function(){console.log(jQuery('.ulContWidth').height());
					// 	var height = jQuery('.ulContWidth').height();
					// 	jQuery('.ulContWidth').css({'height': height+'px'});
					// },1500);
				</script>
				<script src="<?php echo plugins_url('../JS/script.js',__FILE__);?>" type="text/javascript"></script>
			<?php echo $after_widget; }
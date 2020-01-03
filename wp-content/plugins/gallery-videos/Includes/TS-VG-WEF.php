    <?php $Total_Soft_Gallery_Video = rand(1,1000);
     if($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Elastic Gallery') { ?>
				<link href="<?php echo plugins_url('../CSS/lightgallery.css',__FILE__);?>" rel="stylesheet">
				<style type="text/css">
					#pagination<?php echo $Total_Soft_Gallery_Video;?> { perspective:800px !important; }
					.lg-backdrop<?php echo $Total_Soft_Gallery_Video;?>
					{
						position: fixed;
						top: 0;
						left: 0;
						right: 0;
						bottom: 0;
						z-index: 1040;
						background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_28;?>;
						opacity: 0;
						-webkit-transition: opacity 0.15s ease 0s;
						-moz-transition: opacity 0.15s ease 0s;
						-o-transition: opacity 0.15s ease 0s;
						transition: opacity 0.15s ease 0s;
					}
					#lg-counter<?php echo $Total_Soft_Gallery_Video;?>
					{
						color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_30;?>;
						display: inline-block;
						font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_31*2/3;?>px;
						padding-left: 20px;
						padding-top: 12px;
						vertical-align: middle;
					}
					.lg-toolbar<?php echo $Total_Soft_Gallery_Video;?> .lg-icon<?php echo $Total_Soft_Gallery_Video;?>
					{
						color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_30;?>;
						cursor: pointer;
						float: right;
						font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_31;?>px;
						height: 47px;
						line-height: 27px;
						padding: 10px 0;
						text-align: center;
						width: 50px;
						text-decoration: none !important;
						outline: medium none;
						-webkit-transition: color 0.2s linear;
						-moz-transition: color 0.2s linear;
						-o-transition: color 0.2s linear;
						transition: color 0.2s linear;
					}
					.lg-iconn
					{
						color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_30;?>;
						cursor: pointer;
						float: right;
						font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_31;?>px;
						height: 47px;
						line-height: 27px;
						padding: 10px 0;
						text-align: center;
						width: 50px;
						text-decoration: none !important;
						outline: medium none;
						-webkit-transition: color 0.2s linear;
						-moz-transition: color 0.2s linear;
						-o-transition: color 0.2s linear;
						transition: color 0.2s linear;
					}
					.lg-toolbar<?php echo $Total_Soft_Gallery_Video;?> .lg-close<?php echo $Total_Soft_Gallery_Video;?>:after { display:none !important; }
					.lg-actions<?php echo $Total_Soft_Gallery_Video;?> .lg-next<?php echo $Total_Soft_Gallery_Video;?>, .lg-actions<?php echo $Total_Soft_Gallery_Video;?> .lg-prev<?php echo $Total_Soft_Gallery_Video;?>
					{
						background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_35;?>;
						border-radius: 2px;
						color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_34;?>;
						cursor: pointer;
						display: block;
						font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_33;?>px;
						padding: 8px 10px 9px;
						position: absolute;
						top: 50%;
						transform:translateY(-50%) translate3d(0, 0, 0);
						-webkit-transform:translateY(-50%) translate3d(0, 0, 0);
						-ms-transform:translateY(-50%) translate3d(0, 0, 0);
						-moz-transform:translateY(-50%) translate3d(0, 0, 0);
						-o-transform:translateY(-50%) translate3d(0, 0, 0);
						perspective: 800px;
						z-index: 1080;
					}
					.lg-actions<?php echo $Total_Soft_Gallery_Video;?> .lg-prev<?php echo $Total_Soft_Gallery_Video;?>:after
					{
						display:none;
					}
					.lg-outer<?php echo $Total_Soft_Gallery_Video;?> .lg-video<?php echo $Total_Soft_Gallery_Video;?>
					{
						width: 100%;
						height: 0;
						border:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_39;?>px <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_01;?> <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_02;?>;
						box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03;?>px <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_04;?>;
						-moz-box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03;?>px <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_04;?>;
						-webkit-box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03;?>px <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_04;?>;
						padding-bottom: 56.25%;
						overflow: hidden;
						position: relative;
						background: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_02;?>;
					}
					.demo-gallery > ul { margin-bottom: 0; }
					.demo-gallery > ul > li { float: left; margin-bottom: 15px; margin-right: 20px; width: 200px; }
					.demo-gallery > ul > li a { border: 3px solid #FFF; border-radius: 3px; display: block; overflow: hidden; position: relative; float: left; }
					.demo-gallery > ul > li a > img
					{
						-webkit-transition: -webkit-transform 0.15s ease 0s;
						-moz-transition: -moz-transform 0.15s ease 0s;
						-o-transition: -o-transform 0.15s ease 0s;
						transition: transform 0.15s ease 0s;
						-webkit-transform: scale3d(1, 1, 1);
						-moz-transform: scale3d(1, 1, 1);
						transform: scale3d(1, 1, 1);
						height: 100%;
						width: 100%;
					}
					.demo-gallery > ul > li a:hover > img
					{
						-webkit-transform: scale3d(1.1, 1.1, 1.1);
						-moz-transform: scale3d(1.1, 1.1, 1.1);
						transform: scale3d(1.1, 1.1, 1.1);
					}
					.demo-gallery > ul > li a:hover .demo-gallery-poster > img { opacity: 1; }
					.demo-gallery > ul > li a .demo-gallery-poster
					{
						background-color: rgba(0, 0, 0, 0.1);
						bottom: 0;
						left: 0;
						position: absolute;
						right: 0;
						top: 0;
						-webkit-transition: background-color 0.15s ease 0s;
						-moz-transition: background-color 0.15s ease 0s;
						-o-transition: background-color 0.15s ease 0s;
						transition: background-color 0.15s ease 0s;
					}
					.demo-gallery > ul > li a .demo-gallery-poster > img
					{
						left: 50%;
						margin-left: -10px;
						margin-top: -10px;
						opacity: 0;
						position: absolute;
						top: 50%;
						-webkit-transition: opacity 0.3s ease 0s;
						-moz-transition: opacity 0.3s ease 0s;
						-o-transition: opacity 0.3s ease 0s;
						transition: opacity 0.3s ease 0s;
					}
					.demo-gallery > ul > li a:hover .demo-gallery-poster { background-color: rgba(0, 0, 0, 0.5); }
					.demo-gallery .justified-gallery > a > img
					{
						-webkit-transition: -webkit-transform 0.15s ease 0s;
						-moz-transition: -moz-transform 0.15s ease 0s;
						-o-transition: -o-transform 0.15s ease 0s;
						transition: transform 0.15s ease 0s;
						-webkit-transform: scale3d(1, 1, 1);
						-moz-transform: scale3d(1, 1, 1);
						transform: scale3d(1, 1, 1);
						height: 100%;
						width: 100%;
					}
					.demo-gallery .justified-gallery > a:hover > img
					{
						-webkit-transform: scale3d(1.1, 1.1, 1.1);
						-moz-transform: scale3d(1.1, 1.1, 1.1);
						transform: scale3d(1.1, 1.1, 1.1);
					}
					.demo-gallery .justified-gallery > a:hover .demo-gallery-poster > img { opacity: 1; }
					.demo-gallery .justified-gallery > a .demo-gallery-poster
					{
						background-color: rgba(0, 0, 0, 0.1);
						bottom: 0;
						left: 0;
						position: absolute;
						right: 0;
						top: 0;
						-webkit-transition: background-color 0.15s ease 0s;
						-moz-transition: background-color 0.15s ease 0s;
						-o-transition: background-color 0.15s ease 0s;
						transition: background-color 0.15s ease 0s;
					}
					.demo-gallery .justified-gallery > a .demo-gallery-poster > img
					{
						left: 50%;
						margin-left: -10px;
						margin-top: -10px;
						opacity: 0;
						position: absolute;
						top: 50%;
						-webkit-transition: opacity 0.3s ease 0s;
						-moz-transition: opacity 0.3s ease 0s;
						-o-transition: opacity 0.3s ease 0s;
						transition: opacity 0.3s ease 0s;
					}
					.demo-gallery .justified-gallery > a:hover .demo-gallery-poster { background-color: rgba(0, 0, 0, 0.5); }
					.demo-gallery .video .demo-gallery-poster img { height: 48px; margin-left: -24px; margin-top: -24px; opacity: 0.8; width: 48px; }
					.demo-gallery.dark > ul > li a { border: 3px solid #04070a; }
					.home .demo-gallery { padding-bottom: 80px; }
					.fhovZoom<?php echo $Total_Soft_Gallery_Video;?>
					{
						display:inline-block;
						/*---poxel--*/
						/*float: left;*/
						position:relative;
						width:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01;?>px;
						height:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02;?>px;
						border:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_03;?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_04;?> <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_05;?>;
						box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_07;?>;
						-moz-box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_07;?>;
						-webkit-box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_07;?>;
						margin:5px;
						/*margin: 5px auto;*/
						overflow:hidden;
						/*opacity: 0;*/
						<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_17 == 'moveUp'){ ?>
							-webkit-transform: translateY(200px);
							-moz-transform: translateY(200px);
							transform: translateY(200px);
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_17 == 'scaleUp'){ ?>
							-webkit-transform: scale(0.6);
							-moz-transform: scale(0.6);
							transform: scale(0.6);
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_17 == 'fallPerspective'){ ?>
							-webkit-transform-style: preserve-3d;
							-moz-transform-style: preserve-3d;
							transform-style: preserve-3d;
							-webkit-transform: translateZ(400px) translateY(300px) rotateX(-90deg);
							-moz-transform: translateZ(400px) translateY(300px) rotateX(-90deg);
							transform: translateZ(400px) translateY(300px) rotateX(-90deg);
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_17 == 'fly'){ ?>
							-webkit-transform-style: preserve-3d;
							-moz-transform-style: preserve-3d;
							transform-style: preserve-3d;
							-webkit-transform-origin: 50% 50% -300px;
							-moz-transform-origin: 50% 50% -300px;
							transform-origin: 50% 50% -300px;
							-webkit-transform: rotateX(-180deg);
							-moz-transform: rotateX(-180deg);
							transform: rotateX(-180deg);
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_17 == 'flip'){ ?>
							-webkit-transform-style: preserve-3d;
							-moz-transform-style: preserve-3d;
							transform-style: preserve-3d;
							-webkit-transform-origin: 0% 0%;
							-moz-transform-origin: 0% 0%;
							transform-origin: 0% 0%;
							-webkit-transform: rotateX(-80deg);
							-moz-transform: rotateX(-80deg);
							transform: rotateX(-80deg);
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_17 == 'helix'){ ?>
							-webkit-transform-style: preserve-3d;
							-moz-transform-style: preserve-3d;
							transform-style: preserve-3d;
							-webkit-transform: rotateY(-180deg);
							-moz-transform: rotateY(-180deg);
							transform: rotateY(-180deg);
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_17 == 'popUp'){ ?>
							-webkit-transform-style: preserve-3d;
							-moz-transform-style: preserve-3d;
							transform-style: preserve-3d;
							-webkit-transform: scale(0.4);
							-moz-transform: scale(0.4);
							transform: scale(0.4);
						<?php }?>
					}
					.zEff1
					{
						position:absolute;
						top:0%;
						left:0%;
						width:100%;
						height:125% !important;
						transition:all <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09/10;?>s linear !important;
						-webkit-transition:all <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09/10;?>s linear !important;
						-moz-transition:all <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09/10;?>s linear !important;
						-ms-transition:all <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09/10;?>s linear !important;
					}
					.fhovZoom<?php echo $Total_Soft_Gallery_Video;?>:hover .zEff1 { top:-25%; }
					.zEff2
					{
						position:absolute;
						top:-25%;
						left:0%;
						width:100%;
						height:125% !important;
						transition:all <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09/10;?>s linear !important;
						-webkit-transition:all <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09/10;?>s linear !important;
						-moz-transition:all <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09/10;?>s linear !important;
						-ms-transition:all <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09/10;?>s linear !important;
					}
					.fhovZoom<?php echo $Total_Soft_Gallery_Video;?>:hover .zEff2 { top:0%; }
					.zEff3
					{
						position:absolute;
						top:-15%;
						left:-15%;
						width:130%;
						height:130% !important;
						transition:all <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09/10;?>s linear !important;
						-webkit-transition:all <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09/10;?>s linear !important;
						-moz-transition:all <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09/10;?>s linear !important;
						-ms-transition:all <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09/10;?>s linear !important;
					}
					.fhovZoom<?php echo $Total_Soft_Gallery_Video;?>:hover .zEff3 { top:0%; left:0%; width:100%; height:100% !important; }
					.zEff4
					{
						position:absolute;
						top:0%;
						left:0%;
						width:100%;
						height:100% !important;
						transition:all <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09/10;?>s linear !important;
						-webkit-transition:all <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09/10;?>s linear !important;
						-moz-transition:all <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09/10;?>s linear !important;
						-ms-transition:all <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09/10;?>s linear !important;
					}
					.fhovZoom<?php echo $Total_Soft_Gallery_Video;?>:hover .zEff4 { top:-15%; left:-15%; width:130%; height:130% !important; }
					.zEff5
					{
						position:absolute;
						top:0%;
						left:0%;
						width:100%;
						height:100% !important;
						transition:all <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09/10;?>s linear !important;
						-webkit-transition:all <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09/10;?>s linear !important;
						-moz-transition:all <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09/10;?>s linear !important;
						-ms-transition:all <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09/10;?>s linear !important;
					}
					.fhovZoom<?php echo $Total_Soft_Gallery_Video;?>:hover .zEff5 { width:130%; height:130% !important; }
					.zEff6
					{
						position:absolute;
						top:0%;
						left:0%;
						width:100%;
						height:100% !important;
						transition:all <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09/10;?>s linear !important;
						-webkit-transition:all <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09/10;?>s linear !important;
						-moz-transition:all <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09/10;?>s linear !important;
						-ms-transition:all <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09/10;?>s linear !important;
					}
					.fhovZoom<?php echo $Total_Soft_Gallery_Video;?>:hover .zEff6 { width:130%; height:130% !important; top:-30%; }
					.zEff7
					{
						position:absolute;
						top:0%;
						left:0%;
						width:100%;
						height:100% !important;
						transition:all <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09/10;?>s linear !important;
						-webkit-transition:all <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09/10;?>s linear !important;
						-moz-transition:all <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09/10;?>s linear !important;
						-ms-transition:all <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09/10;?>s linear !important;
					}
					.fhovZoom<?php echo $Total_Soft_Gallery_Video;?>:hover .zEff7 { width:130%; height:130% !important; left:-30%; }
					.zEff8
					{
						position:absolute;
						top:0%;
						left:0%;
						width:100%;
						height:100% !important;
						transition:all <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09/10;?>s linear !important;
						-webkit-transition:all <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09/10;?>s linear !important;
						-moz-transition:all <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09/10;?>s linear !important;
						-ms-transition:all <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09/10;?>s linear !important;
					}
					.fhovZoom<?php echo $Total_Soft_Gallery_Video;?>:hover .zEff8 { width:130%; height:130% !important; left:-30%; top:-30%; }
					.zEff9 { position:absolute; top:0%; left:0%; width:100%; height:100% !important; }
					.zTitfHov1
					{
						position:absolute;
						bottom:0%;
						left:0%;
						width:100%;
						padding-top:5px;
						padding-bottom:5px;
						text-align:left;
						background:#000;
						color:#fff;
						transform:translateY(100%) !important;
						-webkit-transform:translateY(100%) !important;
						-moz-transform:translateY(100%) !important;
						-ms-transform:translateY(100%) !important;
						transition:all <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15/10;?>s linear;
						-webkit-transition:all <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15/10;?>s linear;
						-moz-transition:all <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15/10;?>s linear;
						-ms-transition:all <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15/10;?>s linear;
					}
					.fhovZoom<?php echo $Total_Soft_Gallery_Video;?>:hover .zTitfHov1
					{
						transform:translateY(0%) !important;
						-webkit-transform:translateY(0%) !important;
						-moz-transform:translateY(0%) !important;
						-ms-transform:translateY(0%) !important;
					}
					.zTitfHov2
					{
						position:absolute;
						top:0%;
						left:0%;
						width:100%;
						padding-top:5px;
						padding-bottom:5px;
						text-align:left;
						background:#000;
						color:#fff;
						transform:translateY(-100%) !important;
						-webkit-transform:translateY(-100%) !important;
						-moz-transform:translateY(-100%) !important;
						-ms-transform:translateY(-100%) !important;
						transition:all <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15/10;?>s linear;
						-webkit-transition:all <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15/10;?>s linear;
						-moz-transition:all <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15/10;?>s linear;
						-ms-transition:all <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15/10;?>s linear;
					}
					.fhovZoom<?php echo $Total_Soft_Gallery_Video;?>:hover .zTitfHov2
					{
						transform:translateY(0%) !important;
						-webkit-transform:translateY(0%) !important;
						-moz-transform:translateY(0%) !important;
						-ms-transform:translateY(0%) !important;
					}
					.zTitfHov3 { position:absolute; top:0%; left:0%; width:100%; padding-top:5px; padding-bottom:5px; text-align:left; background:#000; color:#fff; }
					.zTitfHov4 { position:absolute; bottom:0%; left:0%; width:100%; padding-top:5px; padding-bottom:5px; text-align:left; background:#000; color:#fff; }
					.TotalsofthPIcon1
					{
						float:right;
						padding:5px;
						margin-right:5px;
						font-size:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_17;?>px;
						border:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_20;?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22;?> <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_21;?>;
						background:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23;?>;
						border-radius:50%;
						color:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_18;?>;
					}
					.TotalsofthLIcon1<?php echo $Total_Soft_Gallery_Video;?>
					{
						float:right;
						padding:5px;
						margin-right:5px;
						font-size:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_17;?>px;
						border:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_20;?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22;?> <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_25;?>;
						background:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_26;?>;
						border-radius:50%;
						color:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24;?>;
					}
					.pagination<?php echo $Total_Soft_Gallery_Video;?> ul li {display: inline-block; border:none !important; list-style:none !important; padding-left:0px !important; }
					
					.pagination<?php echo $Total_Soft_Gallery_Video;?> li a:hover:not(.active)
					{
						background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_13;?>;
						color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14;?>;
					}
					.pagination<?php echo $Total_Soft_Gallery_Video;?> li .active
					{
						background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11;?>;
						color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_12;?>;
					}
					.pagination<?php echo $Total_Soft_Gallery_Video;?> li a 
					{
						background-color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_07;?>;
						color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_08;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_09;?>px;
						font-family:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_10;?>;
						height:auto !important;
						<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_15!='none'){ ?> 
							border: 1px solid <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_16;?>;
						<?php } else { ?>
							border: none !important;
						<?php }?>
						display: block !important;
						padding: 5px 14px 5px 14px !important;
						cursor: pointer;
					    text-decoration: none;
					    border-radius: 0px !important;
					    margin: 0 !important;
					    font-weight: 400 !important;
					    width: inherit !important;
					}
					.TotalSoftGV_HLG_LM<?php echo $Total_Soft_Gallery_Video;?>
					{
						background-color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_07;?>;
						color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_08;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_09;?>px;
						font-family:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_10;?>;
						<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_15!='none'){ ?> 
							border: 1px solid <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_16;?>;
						<?php } else { ?>
							border: none !important;
						<?php }?>
						cursor:pointer;
						display: block;
						padding: 3px !important;
						line-height: 1 !important;
					}
					.TotalSoftGV_HLG_LM<?php echo $Total_Soft_Gallery_Video;?>:hover
					{
						background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_13;?>;
						color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14;?>;
					}
					@media screen and (max-width:820px)
					{
						.zEff, .pagination li span { cursor:default; }
						.lg-actions<?php echo $Total_Soft_Gallery_Video;?> .lg-prev<?php echo $Total_Soft_Gallery_Video;?>, .lg-actions<?php echo $Total_Soft_Gallery_Video;?> .lg-next<?php echo $Total_Soft_Gallery_Video;?> { font-size: 15px; }
						.lg-outer<?php echo $Total_Soft_Gallery_Video;?> .lg-video<?php echo $Total_Soft_Gallery_Video;?> { width: 100%; height: 100%; left: 0; top: 0; }
						.fhovZoom<?php echo $Total_Soft_Gallery_Video;?> { margin: 5px 0; }
					}
					@media screen and (max-width:400px)
					{
						.lg-outer<?php echo $Total_Soft_Gallery_Video;?> .lg-video<?php echo $Total_Soft_Gallery_Video;?> { width: 100%; height: 0; padding-bottom: 56.25%; position: relative; }
					}
					.Tot_Vid_Gallery<?php echo $Total_Soft_Gallery_Video;?>
					{
						display: block;
						text-align: center;
						<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_17 == 'fallPerspective'){ ?>
							-webkit-perspective: 1300px;
							-moz-perspective: 1300px;
							perspective: 1300px;
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_17 == 'fly'){ ?>
							-webkit-perspective: 1300px;
							-moz-perspective: 1300px;
							perspective: 1300px;
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_17 == 'flip'){ ?>
							-webkit-perspective: 1300px;
							-moz-perspective: 1300px;
							perspective: 1300px;
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_17 == 'helix'){ ?>
							-webkit-perspective: 1300px;
							-moz-perspective: 1300px;
							perspective: 1300px;
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_17 == 'popUp'){ ?>
							-webkit-perspective: 1300px;
							-moz-perspective: 1300px;
							perspective: 1300px;
						<?php }?>
					}
					.TS_GV_EG_Loading_<?php echo $Total_Soft_Gallery_Video;?>
					{
						position: absolute;
						left: 0;
						top: 0;
						width: 100%;
						height: 100%;
						background: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_19;?>;
						z-index: 10;
						padding: 0;
						overflow: hidden !important;
						text-align: center;
					}
					.TS_GV_EG_Loading_<?php echo $Total_Soft_Gallery_Video;?> img
					{
						margin: 0 auto !important;
						position: relative;
						top: 50%;
						transform: translateY(-50%);
						-moz-transform: translateY(-50%);
						-webkit-transform: translateY(-50%);
					}
				</style>
				<div class="video-gallery-parent<?php echo $Total_Soft_Gallery_Video;?>" style="position: relative; width: 100%;     text-align: -webkit-center;text-align:center;">
					<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18 != ''){ ?>
						<div class="TS_GV_EG_Loading_<?php echo $Total_Soft_Gallery_Video;?>">
							<img src="<?php echo plugins_url('../Images/Loading/loading' . $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18 . '.gif',__FILE__);?>">
						</div>
					<?php }?>
					<div id="video-gallery" class='Tot_Vid_Gallery<?php echo $Total_Soft_Gallery_Video;?>' style='text-align:center; display: -webkit-inline-box;margin: 0 auto;'>
						<?php for($i=0;$i<count($Total_Soft_GalleryV_Videos);$i++){ ?>
							<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL == '')
							{
								$TS_GV_EG_VSR = $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;
								$TS_GV_EG_PSR = '';
							}
							else
							{
								$TS_GV_EG_VSR = $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_Video;
								$TS_GV_EG_PSR = $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;
								$TS_GV_EG_PSRST = $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL;
							}?>
							<?php if($Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType=='All'){ ?>
							<div id="TotalSoft_GV_HLG_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i+1;?>" class='fhovZoom<?php echo $Total_Soft_Gallery_Video;?>' href="<?php echo $TS_GV_EG_PSRST;?>" data-poster="<?php echo $TS_GV_EG_PSR;?>" onclick='TotalsofthPIcon()'>
								<a href='#'>
									<img class='zEff <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_08;?>' style='max-width:none;' src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>" />
									<div class='<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_14;?>' style='background:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_13;?>;'> 
										<span style='margin-left:5px;font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>px; color:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_11;?>; font-family:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>; display:<?php echo $TotalSoft_GV_1_16;?>'>
											<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
										</span>
										<i onclick='TotalsofthPIcon()' class='TotalsofthPIcon1 <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19;?>' ></i>
										<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink!=''){ ?>
											<i onclick="TotalsoftLink<?php echo $Total_Soft_Gallery_Video;?>('<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink;?>',<?php echo $i+1; ?>)" name='<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VONT;?>' class='Tot_<?php echo $i+1; ?> TotalsofthLIcon1<?php echo $Total_Soft_Gallery_Video;?> <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_27;?>'></i>
										<?php } ?>
									</div> 
								</a>
							</div>
							<?php }else{ ?>
								<?php if($i<$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage){ ?>
									<div id="TotalSoft_GV_HLG_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i+1;?>" class='fhovZoom<?php echo $Total_Soft_Gallery_Video;?>' href="<?php echo $TS_GV_EG_PSRST;?>" data-poster="<?php echo $TS_GV_EG_PSR;?>" onclick='TotalsofthPIcon()'>
										<a href='#'>
											<img class='zEff <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_08;?>' style='max-width:none;' src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>" />
											<div class='<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_14;?>' style='background:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_13;?>;'> 
												<span style='margin-left:5px;font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>px; color:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_11;?>; font-family:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;display:<?php echo $TotalSoft_GV_1_16;?>'>
													<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
												</span>
												<i onclick='TotalsofthPIcon()' class='TotalsofthPIcon1 <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19;?>' ></i>
												<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink!=''){ ?>
													<i onclick="TotalsoftLink<?php echo $Total_Soft_Gallery_Video;?>('<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink;?>',<?php echo $i+1; ?>)" name='<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VONT;?>' class='Tot_<?php echo $i+1; ?> TotalsofthLIcon1<?php echo $Total_Soft_Gallery_Video;?> <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_27;?>'></i>
												<?php } ?>
											</div> 
										</a>
									</div>
								<?php }else{ ?>
									<div style='display:none;' id="TotalSoft_GV_HLG_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i+1;?>" class='fhovZoom<?php echo $Total_Soft_Gallery_Video;?> noshow1' href="<?php echo $TS_GV_EG_PSRST;?>" data-poster="<?php echo $TS_GV_EG_PSR;?>" onclick='TotalsofthPIcon()'>
										<a href='#'>
											<img class='zEff <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_08;?>' style='max-width:none;' src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>" />
											<div class='<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_14;?>' style='background:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_13;?>;'> 
												<span style='margin-left:5px; font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>px; color:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_11;?>; font-family: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>; display:<?php echo $TotalSoft_GV_1_16;?>'>
													<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
												</span>
												<i onclick='TotalsofthPIcon()' class='TotalsofthPIcon1 <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19;?>' ></i>
												<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink!=''){ ?>
													<i onclick="TotalsoftLink<?php echo $Total_Soft_Gallery_Video;?>('<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink;?>',<?php echo $i+1; ?>)" name='<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VONT;?>' class='Tot_<?php echo $i+1; ?> TotalsofthLIcon1<?php echo $Total_Soft_Gallery_Video;?> <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_27;?>'></i>
												<?php } ?>
											</div> 
										</a>
									</div>
						<?php } } }?>
					</div>
					<?php if($Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType=='Pagination'){ ?>
						<div class="TotalSoftcenter pagination<?php echo $Total_Soft_Gallery_Video;?>" id="pagination<?php echo $Total_Soft_Gallery_Video;?>">
							<!-- <ul class="pagination pagination<?php echo $Total_Soft_Gallery_Video;?>">
								<li onclick="Total_Soft_GV_HLG_PageP('<?php echo $Total_Soft_Gallery_Video;?>', '<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>')"><span><?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_06;?></span></li>
								<?php for($i=1;$i<=ceil(count($Total_Soft_GalleryV_Videos)/$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage);$i++){ ?> 
									<?php if($i==1){ ?>
										<li id="TotalSoft_GV_HLG_PLi_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i;?>" onclick="Total_Soft_GV_HLG_Page('<?php echo $Total_Soft_Gallery_Video;?>','<?php echo $i?>','<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>')"><span class="active"><?php echo $i;?></span></li>
									<?php } else { ?>
										<li id="TotalSoft_GV_HLG_PLi_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i;?>" onclick="Total_Soft_GV_HLG_Page('<?php echo $Total_Soft_Gallery_Video;?>','<?php echo $i?>','<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>')"><span><?php echo $i;?></span></li>
									<?php }?>
								<?php }?>
								<li onclick="Total_Soft_GV_HLG_PageN('<?php echo $Total_Soft_Gallery_Video;?>', '<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>', '<?php echo ceil(count($Total_Soft_GalleryV_Videos)/$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage);?>')"><span><?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_05;?></span></li>
							</ul> -->
						</div>
					<?php }?>
					<?php if($Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType=='Load'){ ?>
						<div class="TotalSoftcenter" id="TotalSoft_VG_HLG_PageDiv_<?php echo $Total_Soft_Gallery_Video;?>">
							<span class="TotalSoftGV_HLG_LM TotalSoftGV_HLG_LM<?php echo $Total_Soft_Gallery_Video;?>" onclick="Total_Soft_GV_HLG_PageLM('<?php echo $Total_Soft_Gallery_Video;?>', '<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>', '<?php echo ceil(count($Total_Soft_GalleryV_Videos)/$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage);?>')"><?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_LoadMore;?></span>
							<input type="text" style="display:none;" id="TotalSoft_VG_HLG_Page_<?php echo $Total_Soft_Gallery_Video;?>" value="1">
						</div>
					<?php } ?>
				</div>
				<input type='text' style='display:none;' class='iagesCountNumb' value='<?php count($Total_Soft_GalleryV_Videos); ?>' >
				<input type='text' style='display:none;' class='Totalsoft_SlDuration<?php echo $Total_Soft_Gallery_Video;?>' value='<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_29;?>' >
				<input type='text' style='display:none;' class='Totalsoft_SlDelIcType<?php echo $Total_Soft_Gallery_Video;?>' value='<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_32;?>' >
				<input type='text' style='display:none;' class='Totalsoft_SlIcLeftType<?php echo $Total_Soft_Gallery_Video;?>' value='<?php echo $TotalSoft_GV_1_36_Left;?>' >
				<input type='text' style='display:none;' class='Totalsoft_SlIcRightType<?php echo $Total_Soft_Gallery_Video;?>' value='<?php echo $TotalSoft_GV_1_36_Right;?>' >
				<input type='text' style='display:none;' class='Totalsoft_Autoplay' value='<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_37;?>' >
				<input type='text' style='display:none;' class='Totalsoft_Loop<?php echo $Total_Soft_Gallery_Video;?>' value='<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_38;?>' >
				<input type='text' style='display:none;' class='TS_VG_EG_AE_<?php echo $Total_Soft_Gallery_Video;?>' value='<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_17;?>' >
				<input type="hidden" name="showtype" class="showtype" value="<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType;?>">
				<script type="text/javascript">
                    <?php if($Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType=='All'){ ?>
					var parent_width = jQuery('.Tot_Vid_Gallery<?php echo $Total_Soft_Gallery_Video;?>').parent().width();
          			var width = jQuery('.Tot_Vid_Gallery<?php echo $Total_Soft_Gallery_Video;?>').width();
				    jQuery('.Tot_Vid_Gallery<?php echo $Total_Soft_Gallery_Video;?>').css({'display':'block'});
				    jQuery('.fhovZoom<?php echo $Total_Soft_Gallery_Video;?>').animate({'display':'none'})
					<?php } ?>
				<?php if($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Elastic Gallery') { ?> 
                    var showtype = jQuery('.showtype').val();
					if(showtype=="Pagination"){
                    var pages = <?php echo ceil(count($Total_Soft_GalleryV_Videos)/$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage);?>;
					var count = <?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>;
					var TotalSoftGV_ID = <?php echo $Total_Soft_Gallery_Video;?>;
					document.getElementById('pagination<?php echo $Total_Soft_Gallery_Video; ?>').innerHTML = createPaginationEG(pages, 0,TotalSoftGV_ID,count);
					function createPaginationEG(pages, page,TotalSoftGV_ID,count) {
                        var delaytime = 0;
					  	var TS_VG_EG_AE = jQuery('.TS_VG_EG_AE_'+TotalSoftGV_ID).val();
						if (page != 0) {
			                jQuery('html,body').animate({
							      scrollTop: jQuery('.video-gallery-parent'+TotalSoftGV_ID).offset().top - jQuery(window).height()/2+200
							   }, 1000);
						  }
						  else{
						  	page=1;
						  }	
                          var AllTotalSoft_GV_HLG = document.getElementsByClassName("fhovZoom"+TotalSoftGV_ID);
						  var TotalSoftCV = jQuery('.fhovZoom<?php echo $Total_Soft_Gallery_Video;?>').size();
						for(i=0;i<=AllTotalSoft_GV_HLG.length;i++)
							for(i=0;i<TotalSoftCV;i++)
									{
									if(i>=count*(page-1) && i<count*page)
									{
									delaytime++;
									if(TS_VG_EG_AE == '')
									{
										jQuery(".fhovZoom"+TotalSoftGV_ID).css({"display":"inline-block",'opacity':'1'});
									}
									else if(TS_VG_EG_AE == 'fadeIn')
									{

										jQuery(".fhovZoom"+TotalSoftGV_ID).css({"display":"inline-block",'animation':'fadeIn 0.65s ease '+0.2*delaytime+'s forwards','-webkit-animation':'fadeIn 0.65s ease '+0.2*delaytime+'s forwards','-moz-animation':'fadeIn 0.65s ease '+0.2*delaytime+'s forwards'});
									}
									else if(TS_VG_EG_AE == 'moveUp')
									{
										jQuery(".fhovZoom"+TotalSoftGV_ID).css({"display":"inline-block",'animation':'moveUp 0.65s ease '+0.2*delaytime+'s forwards','-webkit-animation':'moveUp 0.65s ease '+0.2*delaytime+'s forwards','-moz-animation':'moveUp 0.65s ease '+0.2*delaytime+'s forwards'});
									}
									else if(TS_VG_EG_AE == 'scaleUp')
									{
										jQuery(".fhovZoom"+TotalSoftGV_ID).css({"display":"inline-block",'animation':'scaleUp 0.65s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'scaleUp 0.65s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'scaleUp 0.65s ease-in-out '+0.2*delaytime+'s forwards'});
									}
									else if(TS_VG_EG_AE == 'fallPerspective')
									{
										jQuery(".fhovZoom"+TotalSoftGV_ID).css({"display":"inline-block",'animation':'fallPerspective 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'fallPerspective 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'fallPerspective 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
									}
									else if(TS_VG_EG_AE == 'fly')
									{
										jQuery(".fhovZoom"+TotalSoftGV_ID).css({"display":"inline-block",'opacity':'0','animation':'fly 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'fly 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'fly 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
									}
									else if(TS_VG_EG_AE == 'flip')
									{
										jQuery(".fhovZoom"+TotalSoftGV_ID).css({"display":"inline-block",'animation':'flip 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'flip 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'flip 0.8s ease-in-out '+0.2*delaytime+'s forwards'});

									}
									else if(TS_VG_EG_AE == 'helix')
									{
										jQuery(".fhovZoom"+TotalSoftGV_ID).css({"display":"inline-block",'animation':'helix 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'helix 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'helix 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
									}
									else if(TS_VG_EG_AE == 'popUp')
									{
										jQuery(".fhovZoom"+TotalSoftGV_ID).css({"display":"inline-block",'animation':'popUp 0.8s ease-in '+0.2*delaytime+'s forwards','-webkit-animation':'popUp 0.8s ease-in '+0.2*delaytime+'s forwards','-moz-animation':'popUp 0.8s ease-in '+0.2*delaytime+'s forwards'});
									}
								}
								else
								{
									jQuery(".fhovZoom"+TotalSoftGV_ID).hide();
								}
						}
						  var AllTotalSoft_GV_HLG = document.getElementsByClassName("fhovZoom"+TotalSoftGV_ID);	
						  var array = [];
						  for(var i=0; i<AllTotalSoft_GV_HLG.length; i++){ 
						  	AllTotalSoft_GV_HLG[i].style.display = "none"
						  	if( i >= count*(page-1) && i < page*count ){
						  		AllTotalSoft_GV_HLG[i].style.display = "inline-block";
						  		//jQuery(AllTotalSoft_GV_HLG[i]).animate({'opacity':'1'},200);
						  	}
						  }
					  let str = '<ul>';
					  let active;
					  let pageCutLow = page - 1;
					  let pageCutHigh = page + 1;
					  var next = '<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_05;?>';
					  var prev = '<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_06;?>';
					  if (page > 1) {
					    str += '<li id="TotalSoft_GV_HLG_PLi_<?php echo $Total_Soft_Gallery_Video;?>" class="page-item previous no"><a onclick="createPaginationEG('+pages+', '+(page-1)+', '+TotalSoftGV_ID+','+count+')">'+prev+'</a></li>';
					  }
					  if (pages < 6) {
					    for (let p = 1; p <= pages; p++) {
					      active = page == p ? "active" : "no";
					      str += '<li id="TotalSoft_GV_HLG_PLi_<?php echo $Total_Soft_Gallery_Video;?>" class="'+active+'"><a class="'+active+'" onclick="createPaginationEG('+pages+', '+p+', '+TotalSoftGV_ID+','+count+')">'+ p +'</a></li>';
					    }
					  }
					  else {
					    if (page > 2) {
					      str += '<li id="TotalSoft_GV_HLG_PLi_<?php echo $Total_Soft_Gallery_Video;?>" class="no page-item"><a onclick="createPaginationEG('+pages+', 1,'+TotalSoftGV_ID+','+count+')">1</a></li>';
					      if (page > 3) {
					          str += '<li id="TotalSoft_GV_HLG_PLi_<?php echo $Total_Soft_Gallery_Video;?>" class="out-of-range"><a onclick="createPaginationEG('+pages+','+(page-2)+','+TotalSoftGV_ID+','+count+')">...</a></li>';
					      }
					    }
					if (page === 1) {
				      pageCutHigh;
				    } else if (page === 2) {
				      pageCutHigh;
				    }
				    if (page === pages) {
				      pageCutLow;
				    } else if (page === pages) {
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
					      str += '<li id="TotalSoft_GV_HLG_PLi_<?php echo $Total_Soft_Gallery_Video;?>"  class="page-item '+active+'"><a class="'+active+'" onclick="createPaginationEG('+pages+', '+p+','+TotalSoftGV_ID+','+count+')">'+ p +'</a></li>';
					    }
					    if (page < pages-1) {
					      if (page < pages-2) {
					        str += '<li id="TotalSoft_GV_HLG_PLi_<?php echo $Total_Soft_Gallery_Video;?>"  class="out-of-range"><a onclick="createPaginationEG('+pages+','+(page+2)+','+TotalSoftGV_ID+','+count+')">...</a></li>';
					      }
					      str += '<li id="TotalSoft_GV_HLG_PLi_<?php echo $Total_Soft_Gallery_Video;?>"  class="page-item no"><a onclick="createPaginationEG('+pages+', '+pages+','+TotalSoftGV_ID+','+count+')">'+pages+'</a></li>';
					    }
					  }
					  if (page < pages) {
					    str += '<li id="TotalSoft_GV_HLG_PLi_<?php echo $Total_Soft_Gallery_Video;?>" class="page-item next no"><a onclick="createPaginationEG('+pages+', '+(page+1)+','+TotalSoftGV_ID+','+count+')">'+next+'</a></li>';
					  }

					   var parent_width = jQuery('.Tot_Vid_Gallery'+TotalSoftGV_ID).parent().width();
                       jQuery('.Tot_Vid_Gallery'+TotalSoftGV_ID).parent().css({'display':'grid'});

						if(parent_width <= "400"){
	                    	jQuery('.Tot_Vid_Gallery'+TotalSoftGV_ID).css({'display':'block','text-align':'webkit-center'});
							var width = <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01;?>;
							jQuery('.fhovZoom'+TotalSoftGV_ID).css({'margin':'0','margin-top':'5px'});
							jQuery('.Tot_Vid_Gallery'+TotalSoftGV_ID).parent().css({'display':'block'});
				        	//jQuery('.Tot_Vid_Gallery'+TotalSoftGV_ID).css({'width':width+'px','margin':'0 auto'});
						}
					  str += '</ul>';
					  
					  jQuery('#pagination<?php echo $Total_Soft_Gallery_Video;?> li').each(function(){
					  jQuery(this).find('a').removeClass('active');
						})			
					  //jQuery('#TotalSoft_GV_HLG_PLi_'+TotalSoftGV_ID+'_'+page).find('a').addClass('active');
					  document.getElementById('pagination'+TotalSoftGV_ID).innerHTML  = str;
					 
					  return str;
				}
			}
	<?php } ?>

					var cssWidtTot<?php echo $Total_Soft_Gallery_Video;?>=<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01;?>;
					var cssHeightTot<?php echo $Total_Soft_Gallery_Video;?>=<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02;?>;
					var Totalsoft_El_W = '<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01;?>';
					var Totalsoft_El_H = '<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02;?>';
					var win = jQuery(window);
					checkWidth();
					win.resize(checkWidth);
                    	function checkWidth(){
                    		var total_soft_gallery_video = jQuery('.video-gallery-parent<?php echo $Total_Soft_Gallery_Video;?>').find('.fhovZoom<?php echo $Total_Soft_Gallery_Video;?>').parent().parent().parent();
                    		var parent_width = jQuery('.video-gallery-parent<?php echo $Total_Soft_Gallery_Video;?>').find('.fhovZoom<?php echo $Total_Soft_Gallery_Video;?>').parent().parent().parent().width();
                    	     jQuery(total_soft_gallery_video).each(function(index, el){
                                if(jQuery(el).width() < Totalsoft_El_W)
                                    {
                                    	jQuery(el).find('.fhovZoom<?php echo $Total_Soft_Gallery_Video;?>').css({'width':jQuery(total_soft_gallery_video).find('#video-gallery').width()+'px'});
                                    	jQuery(el).find('.fhovZoom<?php echo $Total_Soft_Gallery_Video;?>').css({'height':Math.floor(jQuery('.fhovZoom<?php echo $Total_Soft_Gallery_Video;?>').parent().width()*cssHeightTot<?php echo $Total_Soft_Gallery_Video;?>/cssWidtTot<?php echo $Total_Soft_Gallery_Video;?>)});
                                        jQuery(total_soft_gallery_video).css({'padding-left':'0','padding-right':'10px'});

                                    }
                                    else if(jQuery(el).width() > Totalsoft_El_W) {
                                    	jQuery(el).find('.fhovZoom<?php echo $Total_Soft_Gallery_Video;?>').css({'width':Totalsoft_El_W});
                                    	jQuery(el).find('.fhovZoom<?php echo $Total_Soft_Gallery_Video;?>').css({'height':Totalsoft_El_H});
                                    }
                    	     })

						}
					//jQuery(window).resize(function(){ resp<?php echo $Total_Soft_Gallery_Video;?>(); })
					jQuery(document).ready(function(){
						var array_images<?php echo $Total_Soft_Gallery_Video;?>=[];
						jQuery('.fhovZoom<?php echo $Total_Soft_Gallery_Video;?>').each(function(){
							if( jQuery(this).find('img').attr("src") != "" ) { array_images<?php echo $Total_Soft_Gallery_Video;?>.push(jQuery(this).find('img').attr("src")); }
						})
						var y_images<?php echo $Total_Soft_Gallery_Video;?>=0;
						jQuery('.fhovZoom<?php echo $Total_Soft_Gallery_Video;?>').each(function(i){
							jQuery(this).find('img').attr('src', array_images<?php echo $Total_Soft_Gallery_Video;?>[i]).on("load",function(){
								y_images<?php echo $Total_Soft_Gallery_Video;?>++;
								if(y_images<?php echo $Total_Soft_Gallery_Video;?> == array_images<?php echo $Total_Soft_Gallery_Video;?>.length)
								{
									jQuery('.TS_GV_EG_Loading_<?php echo $Total_Soft_Gallery_Video;?>').css('display','none');
								}
							})
						})

						jQuery('.Tot_Vid_Gallery<?php echo $Total_Soft_Gallery_Video;?>').lightGallery<?php echo $Total_Soft_Gallery_Video;?>();
						var delaytime = 0;
						var TS_VG_EG_AE = jQuery('.TS_VG_EG_AE_<?php echo $Total_Soft_Gallery_Video; ?>').val();
						jQuery('.Tot_Vid_Gallery<?php echo $Total_Soft_Gallery_Video;?> .fhovZoom<?php echo $Total_Soft_Gallery_Video;?>').each(function(){
							if(!jQuery(this).hasClass('noshow1'))
							{
								delaytime++;
								if(TS_VG_EG_AE == '')
								{
									jQuery(this).css({'display':'inline-block','opacity':'1'});
								}
								else if(TS_VG_EG_AE == 'fadeIn')
								{
									jQuery(this).css({'display':'inline-block','animation':'fadeIn 0.65s ease '+0.2*delaytime+'s forwards','-webkit-animation':'fadeIn 0.65s ease '+0.2*delaytime+'s forwards','-moz-animation':'fadeIn 0.65s ease '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_EG_AE == 'moveUp')
								{
									jQuery(this).css({'display':'inline-block','animation':'moveUp 0.65s ease '+0.2*delaytime+'s forwards','-webkit-animation':'moveUp 0.65s ease '+0.2*delaytime+'s forwards','-moz-animation':'moveUp 0.65s ease '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_EG_AE == 'scaleUp')
								{
									jQuery(this).css({'display':'inline-block','animation':'scaleUp 0.65s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'scaleUp 0.65s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'scaleUp 0.65s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_EG_AE == 'fallPerspective')
								{
									jQuery(this).css({'display':'inline-block','animation':'fallPerspective 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'fallPerspective 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'fallPerspective 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_EG_AE == 'fly')
								{
									jQuery(this).css({'display':'inline-block','animation':'fly 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'fly 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'fly 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_EG_AE == 'flip')
								{
									jQuery(this).css({'display':'inline-block','animation':'flip 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'flip 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'flip 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_EG_AE == 'helix')
								{
									jQuery(this).css({'display':'inline-block','animation':'helix 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'helix 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'helix 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_EG_AE == 'popUp')
								{
									jQuery(this).css({'display':'inline-block','animation':'popUp 0.8s ease-in '+0.2*delaytime+'s forwards','-webkit-animation':'popUp 0.8s ease-in '+0.2*delaytime+'s forwards','-moz-animation':'popUp 0.8s ease-in '+0.2*delaytime+'s forwards'});
								}
							}
						})
					});
					function TotalsoftLink<?php echo $Total_Soft_Gallery_Video;?>(link,number)
					{
						for(number==1;number<=<?php echo count($Total_Soft_GalleryV_Videos); ?>;number++)
						{
							if(jQuery('.Tot_'+number).attr('name')=='true') { window.open(link); break; } else { window.location.assign(link) }
						}
					}
					jQuery('.TotalsofthLIcon1<?php echo $Total_Soft_Gallery_Video;?>').one('click',function(){ TotalsoftLink<?php echo $Total_Soft_Gallery_Video;?>(); })
				</script>
				<script type="text/javascript">
					var y=true;
					function TotalsofthPIcon() { y=false; jQuery('html').css({'cursor': 'default'}); }
					(function($, window, document, undefined) {
						var Totalsoft_SlDuration<?php echo $Total_Soft_Gallery_Video;?> = parseInt(jQuery('.Totalsoft_SlDuration<?php echo $Total_Soft_Gallery_Video;?>').val());
						var Totalsoft_SlDelIcType<?php echo $Total_Soft_Gallery_Video;?> = jQuery('.Totalsoft_SlDelIcType<?php echo $Total_Soft_Gallery_Video;?>').val();
						var Totalsoft_SlIcLeftType<?php echo $Total_Soft_Gallery_Video;?> = jQuery('.Totalsoft_SlIcLeftType<?php echo $Total_Soft_Gallery_Video;?>').val();
						var Totalsoft_SlIcRightType<?php echo $Total_Soft_Gallery_Video;?> = jQuery('.Totalsoft_SlIcRightType<?php echo $Total_Soft_Gallery_Video;?>').val();
						var Totalsoft_Loop<?php echo $Total_Soft_Gallery_Video;?> = jQuery('.Totalsoft_Loop<?php echo $Total_Soft_Gallery_Video;?>').val();
						if(Totalsoft_Loop<?php echo $Total_Soft_Gallery_Video;?>=='true') { Totalsoft_Loop<?php echo $Total_Soft_Gallery_Video;?>=true; }
						else { Totalsoft_Loop<?php echo $Total_Soft_Gallery_Video;?>=false; }
						'use strict';
						var defaults = {
							mode: 'lg-slide',
							cssEasing: 'ease',
							easing: 'linear',
							speed: Totalsoft_SlDuration<?php echo $Total_Soft_Gallery_Video;?>*100,
							height: '100%',
							width: '100%',
							addClass: '',
							startClass: 'lg-start-zoom',
							backdropDuration: 150,
							hideBarsDelay: 6000,
							useLeft: false,
							closable: true,
							loop: Totalsoft_Loop<?php echo $Total_Soft_Gallery_Video;?>,
							escKey: true,
							keyPress: true,
							controls: true,
							slideEndAnimatoin: true,
							hideControlOnEnd: false,
							mousewheel: true,
							getCaptionFromTitleOrAlt: true,
							appendSubHtmlTo: '.lg-sub-html',
							subHtmlSelectorRelative: false,
							preload: 1,
							showAfterLoad: true,
							selector: '',
							selectWithin: '',
							nextHtml: '',
							prevHtml: '',
							index: false,
							iframeMaxWidth: '100%',
							download: true,
							counter: true,
							appendCounterTo: '.lg-toolbar<?php echo $Total_Soft_Gallery_Video;?>',
							swipeThreshold: 50,
							enableSwipe: true,
							enableDrag: true,
							dynamic: false,
							dynamicEl: [],
							galleryId: 1
						};
						function Plugin(element, options) {
							this.el = element;
							this.$el = $(element);
							this.s = $.extend({}, defaults, options);
							if (this.s.dynamic && this.s.dynamicEl !== 'undefined' && this.s.dynamicEl.constructor === Array && !this.s.dynamicEl.length) 
							{
								throw ('When using dynamic mode, you must also define dynamicEl as an Array.');
							}
							this.modules = {};
							this.lGalleryOn = false;
							this.lgBusy = false;
							this.hideBartimeout = false;
							this.isTouch = ('ontouchstart' in document.documentElement);
							if (this.s.slideEndAnimatoin) { this.s.hideControlOnEnd = false; }
							if (this.s.dynamic) { this.$items = this.s.dynamicEl; } 
							else 
							{
								if (this.s.selector === 'this') { this.$items = this.$el; } 
								else if (this.s.selector !== '') 
								{
									if (this.s.selectWithin) { this.$items = $(this.s.selectWithin).find(this.s.selector); } 
									else { this.$items = this.$el.find($(this.s.selector)); }
								}
								else { this.$items = this.$el.children(); }
							}
							this.$slide = '';
							this.$outer = '';
							this.init();
							return this;
						}
						Plugin.prototype.init = function() {
							var _this = this;
							if (_this.s.preload > _this.$items.length) { _this.s.preload = _this.$items.length; }
							var _hash = window.location.hash;
							if (_hash.indexOf('lg=' + this.s.galleryId) > 0) 
							{
								_this.index = parseInt(_hash.split('&slide=')[1], 10);
								$('body').addClass('lg-from-hash');
								if (!$('body').hasClass('lg-on')) { setTimeout(function() { _this.build(_this.index); }); $('body').addClass('lg-on'); }
							}
							if (_this.s.dynamic) 
							{
								_this.$el.trigger('onBeforeOpen.lg');
								_this.index = _this.s.index || 0;
								if (!$('body').hasClass('lg-on')) { setTimeout(function() { _this.build(_this.index); $('body').addClass('lg-on'); }); }
							}
							else 
							{
								_this.$items.on('click.lgcustom', function(event) {
									try { event.preventDefault(); event.preventDefault(); } catch (er) { event.returnValue = false; }
									_this.$el.trigger('onBeforeOpen.lg');
									_this.index = _this.s.index || _this.$items.index(this);
									if (!$('body').hasClass('lg-on')) { _this.build(_this.index); $('body').addClass('lg-on'); }
								});
							}
						};
						Plugin.prototype.build = function(index) {
							if(y==true){ index=NoN; }
							var _this = this;
							_this.structure();
							$.each($.fn.lightGallery<?php echo $Total_Soft_Gallery_Video;?>.modules, function(key) {
								_this.modules[key] = new $.fn.lightGallery<?php echo $Total_Soft_Gallery_Video;?>.modules[key](_this.el);
							});
							_this.slide(index, false, false);
							if (_this.s.keyPress) { _this.keyPress(); }
							if (_this.$items.length > 1) 
							{
								_this.arrow();
								setTimeout(function() { _this.enableDrag(); _this.enableSwipe(); }, 50);
								if (_this.s.mousewheel) { _this.mousewheel(); }
							}
							_this.counter();
							_this.closeGallery();
							_this.$el.trigger('onAfterOpen.lg');
							_this.$outer.on('mousemove.lg click.lg touchstart.lg', function() {
								_this.$outer.removeClass('lg-hide-items');
								clearTimeout(_this.hideBartimeout);
								_this.hideBartimeout = setTimeout(function() {
									_this.$outer.addClass('lg-hide-items');
								}, _this.s.hideBarsDelay);
							});
						};
						Plugin.prototype.structure = function() {
							var list = '';
							var controls = '';
							var i = 0;
							var subHtmlCont = '';
							var template;
							var _this = this;
							$('body').append('<div class="lg-backdrop lg-backdrop<?php echo $Total_Soft_Gallery_Video;?>"></div>');
							$('.lg-backdrop<?php echo $Total_Soft_Gallery_Video;?>').css('transition-duration', this.s.backdropDuration + 'ms');
							for (i = 0; i < this.$items.length; i++) { list += '<div class="lg-item"></div>'; }
							if (this.s.controls && this.$items.length > 1) 
							{
								controls = '<div class="lg-actions lg-actions<?php echo $Total_Soft_Gallery_Video;?>">' +
									'<i class="lg-prev lg-prev<?php echo $Total_Soft_Gallery_Video;?> '+Totalsoft_SlIcLeftType<?php echo $Total_Soft_Gallery_Video;?>+'">' + this.s.prevHtml + '</i>' +
									'<i class="lg-next lg-next<?php echo $Total_Soft_Gallery_Video;?> '+Totalsoft_SlIcRightType<?php echo $Total_Soft_Gallery_Video;?>+'">' + this.s.nextHtml + '</i>' +
									'</div>';
							}
							if (this.s.appendSubHtmlTo === '.lg-sub-html') { subHtmlCont = '<div class="lg-sub-html"></div>'; }
							template = '<div class="lg-outer lg-outer<?php echo $Total_Soft_Gallery_Video;?> ' + this.s.addClass + ' ' + this.s.startClass + '">' +
								'<div class="lg" style="width:' + this.s.width + '; height:' + this.s.height + '">' +
								'<div class="lg-inner">' + list + '</div>' +
								'<div class="lg-toolbar lg-toolbar<?php echo $Total_Soft_Gallery_Video;?> group">' +
								'<i class="'+Totalsoft_SlDelIcType<?php echo $Total_Soft_Gallery_Video;?>+' lg-close lg-close<?php echo $Total_Soft_Gallery_Video;?> lg-iconn"></i>' +
								'</div>' +
								controls +
								subHtmlCont +
								'</div>' +
								'</div>';
								$('body').append(template);
							this.$outer = $('.lg-outer<?php echo $Total_Soft_Gallery_Video;?>');
							this.$slide = this.$outer.find('.lg-item');
							if (this.s.useLeft) { this.$outer.addClass('lg-use-left'); this.s.mode = 'lg-slide'; } else { this.$outer.addClass('lg-use-css3'); }
							_this.setTop();
							$(window).on('resize.lg orientationchange.lg', function() { setTimeout(function() { _this.setTop(); }, 100); });
							this.$slide.eq(this.index).addClass('lg-current');
							if (this.doCss()) { this.$outer.addClass('lg-css3'); } else { this.$outer.addClass('lg-css'); this.s.speed = 0; }
							this.$outer.addClass(this.s.mode);
							if (this.s.enableDrag && this.$items.length > 1) { this.$outer.addClass('lg-grab'); }
							if (this.s.showAfterLoad) { this.$outer.addClass('lg-show-after-load'); }
							if (this.doCss()) 
							{
								var $inner = this.$outer.find('.lg-inner');
								$inner.css('transition-timing-function', this.s.cssEasing);
								$inner.css('transition-duration', this.s.speed + 'ms');
							}
							$('.lg-backdrop<?php echo $Total_Soft_Gallery_Video;?>').addClass('in');
							setTimeout(function() { _this.$outer.addClass('lg-visible'); }, this.s.backdropDuration);
							this.prevScrollTop = $(window).scrollTop();
						};
						Plugin.prototype.setTop = function() {
							if (this.s.height !== '100%') 
							{
								var wH = $(window).height();
								var top = Math.floor((wH - parseInt(this.s.height, 10)) / 2);
								var $lGallery = this.$outer.find('.lg');
								if (wH >= parseInt(this.s.height, 10)) { $lGallery.css('top', top + 'px'); } else { $lGallery.css('top', '0px'); }
							}
						};
						Plugin.prototype.doCss = function() {
							var support = function() {
								var transition = ['transition', 'MozTransition', 'WebkitTransition', 'OTransition', 'msTransition', 'KhtmlTransition'];
								var root = document.documentElement;
								var i = 0;
								for (i = 0; i < transition.length; i++) { if (transition[i] in root.style) { return true; } }
							};
							if (support()) { return true; }
							return false;
						};
						Plugin.prototype.isVideo = function(src, index) {
							var html;
							if (this.s.dynamic) { html = this.s.dynamicEl[index].html; } else { html = this.$items.eq(index).attr('data-html'); }
							if (!src && html) { return { html5: true }; }
							var youtube = src.match(/\/\/(?:www\.)?youtu(?:\.be|be\.com)\/(?:watch\?v=|embed\/)?([a-z0-9\-\_\%]+)/i);
							var vimeo = src.match(/\/\/(?:www\.)?vimeo.com\/([0-9a-z\-_]+)/i);
							var dailymotion = src.match(/\/\/(?:www\.)?dai.ly\/([0-9a-z\-_]+)/i);
							var vk = src.match(/\/\/(?:www\.)?(?:vk\.com|vkontakte\.ru)\/(?:video_ext\.php\?)(.*)/i);
							// var wistia = src.match(/wistia\.net\/([a-zA-Z0-9\-_]+)/);
							var wistia = src;
							var mp4 = src.match(/.mp4/);
							if (youtube) { return { youtube: youtube }; } 
							else if (vimeo) { return { vimeo: vimeo }; } 
							else if (dailymotion) { return { dailymotion: dailymotion }; } 
							else if (vk) { return { vk: vk }; } 
							else if(wistia) { return { wistia: wistia }; }
							else if(mp4) { return { mp4: src }; }
						};
						Plugin.prototype.counter = function() {
							if (this.s.counter) 
							{
								$(this.s.appendCounterTo).append('<div id="lg-counter<?php echo $Total_Soft_Gallery_Video;?>"><span id="lg-counter<?php echo $Total_Soft_Gallery_Video;?>-current">' + (parseInt(this.index, 10) + 1) + '</span> / <span id="lg-counter<?php echo $Total_Soft_Gallery_Video;?>-all">' + this.$items.length + '</span></div>');
							}
						};
						Plugin.prototype.addHtml = function(index) {
							var subHtml = null;
							var subHtmlUrl;
							var $currentEle;
							if (this.s.dynamic) 
							{
								if (this.s.dynamicEl[index].subHtmlUrl) { subHtmlUrl = this.s.dynamicEl[index].subHtmlUrl; } else { subHtml = this.s.dynamicEl[index].subHtml; }
							}
							else 
							{
								$currentEle = this.$items.eq(index);
								if ($currentEle.attr('data-sub-html-url')) { subHtmlUrl = $currentEle.attr('data-sub-html-url');}
								else 
								{
									subHtml = $currentEle.attr('data-sub-html');
									if (this.s.getCaptionFromTitleOrAlt && !subHtml) { subHtml = $currentEle.attr('title') || $currentEle.find('img').first().attr('alt'); }
								}
							}
							if (!subHtmlUrl) 
							{
								if (typeof subHtml !== 'undefined' && subHtml !== null) 
								{
									var fL = subHtml.substring(0, 1);
									if (fL === '.' || fL === '#') 
									{
										if (this.s.subHtmlSelectorRelative && !this.s.dynamic) { subHtml = $currentEle.find(subHtml).html(); } else { subHtml = $(subHtml).html(); }
									}
								}
								else { subHtml = ''; }
							}
							if (this.s.appendSubHtmlTo === '.lg-sub-html') 
							{
								if (subHtmlUrl) { this.$outer.find(this.s.appendSubHtmlTo).load(subHtmlUrl); } else { this.$outer.find(this.s.appendSubHtmlTo).html(subHtml); }
							}
							else 
							{
								if (subHtmlUrl) { this.$slide.eq(index).load(subHtmlUrl); } else { this.$slide.eq(index).append(subHtml); }
							}
							if (typeof subHtml !== 'undefined' && subHtml !== null) 
							{
								if (subHtml === '') { this.$outer.find(this.s.appendSubHtmlTo).addClass('lg-empty-html'); } 
								else { this.$outer.find(this.s.appendSubHtmlTo).removeClass('lg-empty-html'); }
							}
							this.$el.trigger('onAfterAppendSubHtml.lg', [index]);
						};
						Plugin.prototype.preload = function(index) {
							var i = 1;
							var j = 1;
							for (i = 1; i <= this.s.preload; i++) { if (i >= this.$items.length - index) { break; } this.loadContent(index + i, false, 0); }
							for (j = 1; j <= this.s.preload; j++) { if (index - j < 0) { break; } this.loadContent(index - j, false, 0); }
						};
						Plugin.prototype.loadContent = function(index, rec, delay) {
							var _this = this;
							var _hasPoster = false;
							var _$img;
							var _src;
							var _poster;
							var _srcset;
							var _sizes;
							var _html;
							var getResponsiveSrc = function(srcItms) {
								var rsWidth = [];
								var rsSrc = [];
								for (var i = 0; i < srcItms.length; i++) 
								{
									var __src = srcItms[i].split(' ');
									if (__src[0] === '') { __src.splice(0, 1); }
									rsSrc.push(__src[0]);
									rsWidth.push(__src[1]);
								}
								var wWidth = $(window).width();
								for (var j = 0; j < rsWidth.length; j++) { if (parseInt(rsWidth[j], 10) > wWidth) { _src = rsSrc[j]; break; } }
							};
							if (_this.s.dynamic) 
							{
								if (_this.s.dynamicEl[index].poster) { _hasPoster = true; _poster = _this.s.dynamicEl[index].poster; }
								_html = _this.s.dynamicEl[index].html;
								_src = _this.s.dynamicEl[index].src;
								if (_this.s.dynamicEl[index].responsive) { var srcDyItms = _this.s.dynamicEl[index].responsive.split(','); getResponsiveSrc(srcDyItms); }
								_srcset = _this.s.dynamicEl[index].srcset;
								_sizes = _this.s.dynamicEl[index].sizes;
							}
							else 
							{
								if (_this.$items.eq(index).attr('data-poster')) { _hasPoster = true; _poster = _this.$items.eq(index).attr('data-poster'); }
								_html = _this.$items.eq(index).attr('data-html');
								_src = _this.$items.eq(index).attr('href') || _this.$items.eq(index).attr('data-src');
								if (_this.$items.eq(index).attr('data-responsive')) { var srcItms = _this.$items.eq(index).attr('data-responsive').split(','); getResponsiveSrc(srcItms); }
								_srcset = _this.$items.eq(index).attr('data-srcset');
								_sizes = _this.$items.eq(index).attr('data-sizes');
							}
							var iframe = false;
							if (_this.s.dynamic) { if (_this.s.dynamicEl[index].iframe) { iframe = true; } }
							else { if (_this.$items.eq(index).attr('data-iframe') === 'true') { iframe = true; } }
							var _isVideo = _this.isVideo(_src, index);
							if (!_this.$slide.eq(index).hasClass('lg-loaded')) 
							{
								if (iframe)
								{
									_this.$slide.eq(index).prepend('<div class="lg-video-cont" style="max-width:' + _this.s.iframeMaxWidth + '"><div class="lg-video lg-video<?php echo $Total_Soft_Gallery_Video;?>"><iframe class="lg-object" frameborder="0" src="' + _src + '"  allowfullscreen="true"></iframe></div></div>');
								}
								else if (_hasPoster) 
								{
									var videoClass = '';
									if (_isVideo && _isVideo.youtube) { videoClass = 'lg-has-youtube'; } 
									else if (_isVideo && _isVideo.vimeo) { videoClass = 'lg-has-vimeo'; } 
									else { videoClass = 'lg-has-html5'; }
									_this.$slide.eq(index).prepend('<div class="lg-video-cont ' + videoClass + ' "><div class="lg-video lg-video<?php echo $Total_Soft_Gallery_Video;?>"><span class="lg-video-play"></span><img class="lg-object lg-has-poster" src="' + _poster + '" /></div></div>');
								}
								else if (_isVideo) 
								{
									_this.$slide.eq(index).prepend('<div class="lg-video-cont "><div class="lg-video lg-video<?php echo $Total_Soft_Gallery_Video;?>"></div></div>');
									_this.$el.trigger('hasVideo.lg', [index, _src, _html]);
								}
								else { _this.$slide.eq(index).prepend('<div class="lg-img-wrap"><img class="lg-object lg-image" src="' + _src + '" /></div>'); }
								_this.$el.trigger('onAferAppendSlide.lg', [index]);
								_$img = _this.$slide.eq(index).find('.lg-object');
								if (_sizes) { _$img.attr('sizes', _sizes); }
								if (_srcset) 
								{
									_$img.attr('srcset', _srcset);
									try { picturefill({ elements: [_$img[0]] }); }
									catch (e) { console.error('Make sure you have included Picturefill version 2'); }
								}
								if (this.s.appendSubHtmlTo !== '.lg-sub-html') { _this.addHtml(index); }
								_this.$slide.eq(index).addClass('lg-loaded');
							}
							_this.$slide.eq(index).find('.lg-object').on('load.lg error.lg', function() {
								var _speed = 0;
								if (delay && !$('body').hasClass('lg-from-hash')) { _speed = delay; }
								setTimeout(function() {
									_this.$slide.eq(index).addClass('lg-complete');
									_this.$el.trigger('onSlideItemLoad.lg', [index, delay || 0]);
								}, _speed);
							});
							if (_isVideo && _isVideo.html5 && !_hasPoster) { _this.$slide.eq(index).addClass('lg-complete'); }
							if (rec === true) 
							{
								if (!_this.$slide.eq(index).hasClass('lg-complete')) 
								{
									_this.$slide.eq(index).find('.lg-object').on('load.lg error.lg', function() { _this.preload(index); });
								} 
								else { _this.preload(index); }
							}
						};
						Plugin.prototype.slide = function(index, fromTouch, fromThumb) {
							var _prevIndex = this.$outer.find('.lg-current').index();
							var _this = this;
							if (_this.lGalleryOn && (_prevIndex === index)) { return; }
							var _length = this.$slide.length;
							var _time = _this.lGalleryOn ? this.s.speed : 0;
							var _next = false;
							var _prev = false;
							if (!_this.lgBusy) 
							{
								if (this.s.download)
								{
									var _src;
									if (_this.s.dynamic) { _src = _this.s.dynamicEl[index].downloadUrl !== false && (_this.s.dynamicEl[index].downloadUrl || _this.s.dynamicEl[index].src); }
									else 
									{
										_src = _this.$items.eq(index).attr('data-download-url') !== 'false' && (_this.$items.eq(index).attr('data-download-url') || _this.$items.eq(index).attr('href') || _this.$items.eq(index).attr('data-src'));
									}
									if (_src) { $('#lg-download').attr('href', _src); _this.$outer.removeClass('lg-hide-download'); } else { _this.$outer.addClass('lg-hide-download'); }
								}
								this.$el.trigger('onBeforeSlide.lg', [_prevIndex, index, fromTouch, fromThumb]);
								_this.lgBusy = true;
								clearTimeout(_this.hideBartimeout);
								if (this.s.appendSubHtmlTo === '.lg-sub-html') { setTimeout(function() { _this.addHtml(index); }, _time); }
								this.arrowDisable(index);
								if (!fromTouch) 
								{
									_this.$outer.addClass('lg-no-trans');
									this.$slide.removeClass('lg-prev-slide lg-next-slide');
									if (index < _prevIndex) 
									{
										_prev = true;
										if ((index === 0) && (_prevIndex === _length - 1) && !fromThumb) { _prev = false; _next = true; }
									}
									else if (index > _prevIndex) 
									{
										_next = true;
										if ((index === _length - 1) && (_prevIndex === 0) && !fromThumb) { _prev = true; _next = false; }
									}
									if (_prev) { this.$slide.eq(index).addClass('lg-prev-slide'); this.$slide.eq(_prevIndex).addClass('lg-next-slide'); }
									else if (_next) { this.$slide.eq(index).addClass('lg-next-slide'); this.$slide.eq(_prevIndex).addClass('lg-prev-slide'); }
									setTimeout(function() { _this.$slide.removeClass('lg-current'); _this.$slide.eq(index).addClass('lg-current'); _this.$outer.removeClass('lg-no-trans'); }, 50);
								}
								else 
								{
									var touchPrev = index - 1;
									var touchNext = index + 1;
									if ((index === 0) && (_prevIndex === _length - 1)) { touchNext = 0; touchPrev = _length - 1; }
									else if ((index === _length - 1) && (_prevIndex === 0)) { touchNext = 0; touchPrev = _length - 1; }
									this.$slide.removeClass('lg-prev-slide lg-current lg-next-slide');
									_this.$slide.eq(touchPrev).addClass('lg-prev-slide');
									_this.$slide.eq(touchNext).addClass('lg-next-slide');
									_this.$slide.eq(index).addClass('lg-current');
								}
								if (_this.lGalleryOn)
								{
									setTimeout(function() { _this.loadContent(index, true, 0); }, this.s.speed + 50);
									setTimeout(function() { _this.lgBusy = false; _this.$el.trigger('onAfterSlide.lg', [_prevIndex, index, fromTouch, fromThumb]); }, this.s.speed);
								}
								else
								{
									_this.loadContent(index, true, _this.s.backdropDuration);
									_this.lgBusy = false;
									_this.$el.trigger('onAfterSlide.lg', [_prevIndex, index, fromTouch, fromThumb]);
								}
								_this.lGalleryOn = true;
								if (this.s.counter) { $('#lg-counter<?php echo $Total_Soft_Gallery_Video;?>-current').text(index + 1); }
							}
						};
						Plugin.prototype.goToNextSlide = function(fromTouch) {
							var _this = this;

							if (!_this.lgBusy) 
							{
								jQuery('html').css({'cursor': 'default'});
								if((_this.index + 1) < _this.$slide.length) { _this.index++; _this.$el.trigger('onBeforeNextSlide.lg', [_this.index]);_this.slide(_this.index, fromTouch, false); }
								else 
								{
									if (_this.s.loop) { _this.index = 0; _this.$el.trigger('onBeforeNextSlide.lg', [_this.index]); _this.slide(_this.index, fromTouch, false); }
									else if (_this.s.slideEndAnimatoin) { _this.$outer.addClass('lg-right-end'); setTimeout(function() { _this.$outer.removeClass('lg-right-end'); }, 400); }
								}
							}
							jQuery('.lg-toolbar').find('h4').css('opacity','0');
							var title; 
							if(fromTouch){
								title = jQuery('.lg-current').children('div').attr('data-title');
							}else{
								title = jQuery('.lg-next-slide').children('div').attr('data-title');
							}
							jQuery('.lg-toolbar').find('h4').html(title);
							jQuery('.lg-toolbar').find('h4').animate({'opacity':'1'},500);
						};
						Plugin.prototype.goToPrevSlide = function(fromTouch) {
							var _this = this;
							if (!_this.lgBusy) 
							{
								if (_this.index > 0) 
								{
									_this.index--;
									_this.$el.trigger('onBeforePrevSlide.lg', [_this.index, fromTouch]);
									_this.slide(_this.index, fromTouch, false);
									jQuery('html').css({'cursor': 'default'});
								}
								else 
								{
									if (_this.s.loop) 
									{
										_this.index = _this.$items.length - 1;
										_this.$el.trigger('onBeforePrevSlide.lg', [_this.index, fromTouch]);
										_this.slide(_this.index, fromTouch, false);
									}
									else if (_this.s.slideEndAnimatoin) { _this.$outer.addClass('lg-left-end'); setTimeout(function() { _this.$outer.removeClass('lg-left-end'); }, 400); }
								}
							}
							jQuery('.lg-toolbar').find('h4').css('opacity','0');
							var title; 
							if(fromTouch){
								title = jQuery('.lg-current').children('div').attr('data-title');
							}else{
								title = jQuery('.lg-next-slide').children('div').attr('data-title');
							}
							jQuery('.lg-toolbar').find('h4').html(title);
							jQuery('.lg-toolbar').find('h4').animate({'opacity':'1'},500);
						};
						Plugin.prototype.keyPress = function() {
							var _this = this;
							if (this.$items.length > 1) 
							{
								$(window).on('keyup.lg', function(e) {
									if (_this.$items.length > 1) 
									{
										if (e.keyCode === 37) { e.preventDefault(); _this.goToPrevSlide(); }
										if (e.keyCode === 39) { e.preventDefault(); _this.goToNextSlide(); }
									}
								});
							}
							$(window).on('keydown.lg', function(e) {
								if (_this.s.escKey === true && e.keyCode === 27) 
								{
									e.preventDefault();
									if (!_this.$outer.hasClass('lg-thumb-open')) { _this.destroy(); } else { _this.$outer.removeClass('lg-thumb-open'); }
								}
							});
						};
						Plugin.prototype.arrow = function() {
							var _this = this;
							this.$outer.find('.lg-prev<?php echo $Total_Soft_Gallery_Video;?>').on('click.lg', function() { _this.goToPrevSlide(); });
							this.$outer.find('.lg-next<?php echo $Total_Soft_Gallery_Video;?>').on('click.lg', function() { _this.goToNextSlide(); });
						};
						Plugin.prototype.arrowDisable = function(index) {
							if (!this.s.loop && this.s.hideControlOnEnd) 
							{
								if ((index + 1) < this.$slide.length) { this.$outer.find('.lg-next<?php echo $Total_Soft_Gallery_Video;?>').removeAttr('disabled').removeClass('disabled'); }
								else { this.$outer.find('.lg-next<?php echo $Total_Soft_Gallery_Video;?>').attr('disabled', 'disabled').addClass('disabled'); }
								if (index > 0) { this.$outer.find('.lg-prev<?php echo $Total_Soft_Gallery_Video;?>').removeAttr('disabled').removeClass('disabled'); }
								else { this.$outer.find('.lg-prev<?php echo $Total_Soft_Gallery_Video;?>').attr('disabled', 'disabled').addClass('disabled'); }
							}
						};
						Plugin.prototype.setTranslate = function($el, xValue, yValue) {
							if (this.s.useLeft) { $el.css('left', xValue); } else { $el.css({ transform: 'translate3d(' + (xValue) + 'px, ' + yValue + 'px, 0px)' }); }
						};
						Plugin.prototype.touchMove = function(startCoords, endCoords) {
							var distance = endCoords - startCoords;
							if (Math.abs(distance) > 15) 
							{
								this.$outer.addClass('lg-dragging');
								this.setTranslate(this.$slide.eq(this.index), distance, 0);
								this.setTranslate($('.lg-prev-slide'), -this.$slide.eq(this.index).width() + distance, 0);
								this.setTranslate($('.lg-next-slide'), this.$slide.eq(this.index).width() + distance, 0);
							}
						};
						Plugin.prototype.touchEnd = function(distance) {
							var _this = this;
							if (_this.s.mode !== 'lg-slide') { _this.$outer.addClass('lg-slide'); }
							this.$slide.not('.lg-current, .lg-prev-slide, .lg-next-slide').css('opacity', '0');
							setTimeout(function() {
								_this.$outer.removeClass('lg-dragging');
								if ((distance < 0) && (Math.abs(distance) > _this.s.swipeThreshold)) { _this.goToNextSlide(true); }
								else if ((distance > 0) && (Math.abs(distance) > _this.s.swipeThreshold)) { _this.goToPrevSlide(true); }
								else if (Math.abs(distance) < 5) { _this.$el.trigger('onSlideClick.lg'); }
								_this.$slide.removeAttr('style');
							});
							setTimeout(function() { if (!_this.$outer.hasClass('lg-dragging') && _this.s.mode !== 'lg-slide') { _this.$outer.removeClass('lg-slide'); }}, _this.s.speed + 100);
						};
						Plugin.prototype.enableSwipe = function() {
							var _this = this;
							var startCoords = 0;
							var endCoords = 0;
							var isMoved = false;
							if (_this.s.enableSwipe && _this.isTouch && _this.doCss()) 
							{
								_this.$slide.on('touchstart.lg', function(e) {
									if (!_this.$outer.hasClass('lg-zoomed') && !_this.lgBusy) 
									{
										e.preventDefault();
										_this.manageSwipeClass();
										startCoords = e.originalEvent.targetTouches[0].pageX;
									}
								});
								_this.$slide.on('touchmove.lg', function(e) {
									if (!_this.$outer.hasClass('lg-zoomed')) 
									{
										e.preventDefault();
										endCoords = e.originalEvent.targetTouches[0].pageX;
										_this.touchMove(startCoords, endCoords);
										isMoved = true;
									}
								});
								_this.$slide.on('touchend.lg', function() {
									if (!_this.$outer.hasClass('lg-zoomed')) 
									{
										if (isMoved) { isMoved = false; _this.touchEnd(endCoords - startCoords); } else { _this.$el.trigger('onSlideClick.lg'); }
									}
								});
							}
						};
						Plugin.prototype.enableDrag = function() {
							var _this = this;
							var startCoords = 0;
							var endCoords = 0;
							var isDraging = false;
							var isMoved = false;
							if (_this.s.enableDrag && !_this.isTouch && _this.doCss()) 
							{
								_this.$slide.on('mousedown.lg', function(e) {
									if (!_this.$outer.hasClass('lg-zoomed')) 
									{
										if ($(e.target).hasClass('lg-object') || $(e.target).hasClass('lg-video-play')) 
										{
											e.preventDefault();
											if (!_this.lgBusy) {
												_this.manageSwipeClass();
												startCoords = e.pageX;
												isDraging = true;
												_this.$outer.scrollLeft += 1;
												_this.$outer.scrollLeft -= 1;
												_this.$outer.removeClass('lg-grab').addClass('lg-grabbing');
												_this.$el.trigger('onDragstart.lg');
											}
										}
									}
								});
								$(window).on('mousemove.lg', function(e) {
									if (isDraging) { isMoved = true; endCoords = e.pageX; _this.touchMove(startCoords, endCoords); _this.$el.trigger('onDragmove.lg'); }
								});
								$(window).on('mouseup.lg', function(e) {
									if (isMoved) { isMoved = false; _this.touchEnd(endCoords - startCoords); _this.$el.trigger('onDragend.lg'); }
									else if ($(e.target).hasClass('lg-object') || $(e.target).hasClass('lg-video-play')) { _this.$el.trigger('onSlideClick.lg'); }
									if (isDraging) { isDraging = false; _this.$outer.removeClass('lg-grabbing').addClass('lg-grab'); }
								});
							}
						};
						Plugin.prototype.manageSwipeClass = function() {
							var touchNext = this.index + 1;
							var touchPrev = this.index - 1;
							var length = this.$slide.length;
							if (this.s.loop) { if (this.index === 0) { touchPrev = length - 1; } else if (this.index === length - 1) { touchNext = 0; } }
							this.$slide.removeClass('lg-next-slide lg-prev-slide');
							if (touchPrev > -1) { this.$slide.eq(touchPrev).addClass('lg-prev-slide'); }
							this.$slide.eq(touchNext).addClass('lg-next-slide');
						};
						Plugin.prototype.mousewheel = function() {
							var _this = this;
							_this.$outer.on('mousewheel.lg', function(e) {
								if (!e.deltaY) { return; }
								if (e.deltaY > 0) { _this.goToPrevSlide(); } else { _this.goToNextSlide(); }
								e.preventDefault();
							});
						};
						Plugin.prototype.closeGallery = function() {
							var _this = this;
							var mousedown = false;
							this.$outer.find('.lg-close<?php echo $Total_Soft_Gallery_Video;?>').on('click.lg', function() { _this.destroy(); });
							if (_this.s.closable)
							{
								_this.$outer.on('mousedown.lg', function(e) {
									if ($(e.target).is('.lg-outer<?php echo $Total_Soft_Gallery_Video;?>') || $(e.target).is('.lg-item ') || $(e.target).is('.lg-img-wrap'))
									{
										mousedown = true;
									}
									else 
									{
										mousedown = false;
									}
								});
								_this.$outer.on('mouseup.lg', function(e) {
									if ($(e.target).is('.lg-outer<?php echo $Total_Soft_Gallery_Video;?>') || $(e.target).is('.lg-item ') || $(e.target).is('.lg-img-wrap') && mousedown) 
									{
										if (!_this.$outer.hasClass('lg-dragging')) { _this.destroy(); }
									}
								});
							}
						};
						Plugin.prototype.destroy = function(d) {
							var _this = this;
							if (!d) { _this.$el.trigger('onBeforeClose.lg'); }
							$(window).scrollTop(_this.prevScrollTop);
							if (d) { if (!_this.s.dynamic) { this.$items.off('click.lg click.lgcustom'); } $.removeData(_this.el, 'lightGallery<?php echo $Total_Soft_Gallery_Video;?>'); }
							this.$el.off('.lg.tm');
							$.each($.fn.lightGallery<?php echo $Total_Soft_Gallery_Video;?>.modules, function(key) { if (_this.modules[key]) { _this.modules[key].destroy(); } });
							this.lGalleryOn = false;
							clearTimeout(_this.hideBartimeout);
							this.hideBartimeout = false;
							$(window).off('.lg');
							$('body').removeClass('lg-on lg-from-hash');
							if (_this.$outer) { _this.$outer.removeClass('lg-visible'); }
							$('.lg-backdrop<?php echo $Total_Soft_Gallery_Video;?>').removeClass('in');
							y=true;
							setTimeout(function() {
								if (_this.$outer) { _this.$outer.remove(); }
								$('.lg-backdrop<?php echo $Total_Soft_Gallery_Video;?>').remove();
								if (!d) { _this.$el.trigger('onCloseAfter.lg'); }
							}, _this.s.backdropDuration + 50);
						};
						$.fn.lightGallery<?php echo $Total_Soft_Gallery_Video;?> = function(options) {
							return this.each(function() {
								if (!$.data(this, 'lightGallery<?php echo $Total_Soft_Gallery_Video;?>')) 
								{
									$.data(this, 'lightGallery<?php echo $Total_Soft_Gallery_Video;?>', new Plugin(this, options));
								}
								else 
								{
									try { $(this).data('lightGallery<?php echo $Total_Soft_Gallery_Video;?>').init(); }
									catch (err) { console.error('lightGallery<?php echo $Total_Soft_Gallery_Video;?> has not initiated properly'); }
								}
							});
						};
						$.fn.lightGallery<?php echo $Total_Soft_Gallery_Video;?>.modules = {};
					})(jQuery, window, document);
				</script>
				<script type="text/javascript">
					(function($, window, document, undefined) {
						'use strict';
						var defaults = {
							videoMaxWidth: '855px',
							youtubePlayerParams: true,
							vimeoPlayerParams: true,
							dailymotionPlayerParams: true,
							vkPlayerParams: true,
							videojs: true,
							videojsOptions: {}
						};
						var Video = function(element) {
							this.core = $(element).data('lightGallery<?php echo $Total_Soft_Gallery_Video;?>');
							this.$el = $(element);
							this.core.s = $.extend({}, defaults, this.core.s);
							this.videoLoaded = true;
							this.init();
							return this;
						};
						Video.prototype.init = function() {
							var _this = this;
							_this.core.$el.on('hasVideo.lg.tm', function(event, index, src, html) {
								_this.core.$slide.eq(index).find('.lg-video<?php echo $Total_Soft_Gallery_Video;?>').append(_this.loadVideo(src, 'lg-object', true, index, html));
								if (html) 
								{
									if (_this.core.s.videojs) 
									{
										try 
										{
											videojs(_this.core.$slide.eq(index).find('.lg-html5').get(0), _this.core.s.videojsOptions, function() { if (!_this.videoLoaded) { this.play(); } });
										} 
										catch (e) { console.error('Make sure you have included videojs'); }
									} else { _this.core.$slide.eq(index).find('.lg-html5').get(0).play(); }
								}
							});
							_this.core.$el.on('onAferAppendSlide.lg.tm', function(event, index) {
								_this.core.$slide.eq(index).find('.lg-video-cont').css('max-width', _this.core.s.videoMaxWidth);
								_this.videoLoaded = false;
							});
							var loadOnClick = function($el) {
								if ($el.find('.lg-object').hasClass('lg-has-poster') && $el.find('.lg-object').is(':visible')) 
								{
									if (!$el.hasClass('lg-has-video')) 
									{
										$el.addClass('lg-video-playing lg-has-video');
										var _src;
										var _html;
										var _loadVideo = function(_src, _html) {
											$el.find('.lg-video').append(_this.loadVideo(_src, '', false, _this.core.index, _html));
											if (_html) 
											{
											    if (_this.core.s.videojs) 
												{
													try 
													{
														videojs(_this.core.$slide.eq(_this.core.index).find('.lg-html5').get(0), _this.core.s.videojsOptions, function() { this.play(); });
													}
													catch (e) { console.error('Make sure you have included videojs'); }
												}
												else { _this.core.$slide.eq(_this.core.index).find('.lg-html5').get(0).play(); }
											}
										};
										if (_this.core.s.dynamic) 
										{
											_src = _this.core.s.dynamicEl[_this.core.index].src;
											_html = _this.core.s.dynamicEl[_this.core.index].html;
											_loadVideo(_src, _html);
										}
										else 
										{
											_src = _this.core.$items.eq(_this.core.index).attr('href') || _this.core.$items.eq(_this.core.index).attr('data-src');
											_html = _this.core.$items.eq(_this.core.index).attr('data-html');
											_loadVideo(_src, _html);
										}
										var $tempImg = $el.find('.lg-object');
										$el.find('.lg-video').append($tempImg);
										if (!$el.find('.lg-video-object').hasClass('lg-html5')) 
										{
											$el.removeClass('lg-complete');
											$el.find('.lg-video-object').on('load.lg error.lg', function() { $el.addClass('lg-complete'); });
										}
									}
									else 
									{
										var youtubePlayer = $el.find('.lg-youtube').get(0);
										var vimeoPlayer = $el.find('.lg-vimeo').get(0);
										var dailymotionPlayer = $el.find('.lg-dailymotion').get(0);
										var html5Player = $el.find('.lg-html5').get(0);
										if (youtubePlayer) { youtubePlayer.contentWindow.postMessage('{"event":"command","func":"playVideo","args":""}', '*'); }
										else if (vimeoPlayer) { try { $f(vimeoPlayer).api('play'); } catch (e) { console.error('Make sure you have included froogaloop2 js'); } }
										else if (dailymotionPlayer) { dailymotionPlayer.contentWindow.postMessage('play', '*'); }
										else if (html5Player) 
										{
											if (_this.core.s.videojs) { try { videojs(html5Player).play(); } catch (e) { console.error('Make sure you have included videojs'); } }
											else { html5Player.play(); }
										}
										$el.addClass('lg-video-playing');
									}
								}
							};
							if (_this.core.doCss() && _this.core.$items.length > 1 && ((_this.core.s.enableSwipe && _this.core.isTouch) || (_this.core.s.enableDrag && !_this.core.isTouch))) 
							{
								_this.core.$el.on('onSlideClick.lg.tm', function() { var $el = _this.core.$slide.eq(_this.core.index); loadOnClick($el); });
							} 
							else { _this.core.$slide.on('click.lg', function() { loadOnClick($(this)); }); }
							_this.core.$el.on('onBeforeSlide.lg.tm', function(event, prevIndex, index) {
								var $videoSlide = _this.core.$slide.eq(prevIndex);
								var youtubePlayer = $videoSlide.find('.lg-youtube').get(0);
								var vimeoPlayer = $videoSlide.find('.lg-vimeo').get(0);
								var dailymotionPlayer = $videoSlide.find('.lg-dailymotion').get(0);
								var vkPlayer = $videoSlide.find('.lg-vk').get(0);
								var html5Player = $videoSlide.find('.lg-html5').get(0);
								if (youtubePlayer) { youtubePlayer.contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*'); }
								else if (vimeoPlayer) { try { $f(vimeoPlayer).api('pause'); } catch (e) { console.error('Make sure you have included froogaloop2 js'); } }
								else if (dailymotionPlayer) { dailymotionPlayer.contentWindow.postMessage('pause', '*'); }
								else if (html5Player) 
								{
									if (_this.core.s.videojs) { try { videojs(html5Player).pause(); } catch (e) { console.error('Make sure you have included videojs'); } }
									else { html5Player.pause(); }
								}
								if (vkPlayer) { $(vkPlayer).attr('src', $(vkPlayer).attr('src').replace('&autoplay', '&noplay')); }
								var _src;
								if (_this.core.s.dynamic) { _src = _this.core.s.dynamicEl[index].src; } 
								else { _src = _this.core.$items.eq(index).attr('href') || _this.core.$items.eq(index).attr('data-src'); }
								var _isVideo = _this.core.isVideo(_src, index) || {};
								if (_isVideo.youtube || _isVideo.vimeo || _isVideo.dailymotion || _isVideo.vk || _isVideo.wistia) { _this.core.$outer.addClass('lg-hide-download'); }
							});
							_this.core.$el.on('onAfterSlide.lg.tm', function(event, prevIndex) { _this.core.$slide.eq(prevIndex).removeClass('lg-video-playing'); });
						};
						Video.prototype.loadVideo = function(src, addClass, noposter, index, html) {
							var video = '';
							var autoplay = 1;
							var a = '';
							var isVideo = this.core.isVideo(src, index) || {};
							if (noposter) { if (this.videoLoaded) { autoplay = 0; } else { autoplay = 1; } }
							if (isVideo.youtube) 
							{
                                if(isVideo.youtube.input.indexOf('start')===-1){
									a = '?autoplay=1&mute=0&enablejsapi=1';
									if (this.core.s.youtubePlayerParams) { a = a + '&' + $.param(this.core.s.youtubePlayerParams); }
									video = '<iframe class="lg-video-object lg-youtube ' + addClass + '" width="560" height="315" src="//www.youtube.com/embed/' + isVideo.youtube[1] + a + '" frameborder="0" allowfullscreen></iframe>';
                                }else{a = '&autoplay=1&mute=0&enablejsapi=1';
                                    if (this.core.s.youtubePlayerParams) { a = a + '&' + $.param(this.core.s.youtubePlayerParams); }
									video = '<iframe class="lg-video-object lg-youtube ' + addClass + '" width="560" height="315" src="'+isVideo.youtube.input + a +'" frameborder="0" allowfullscreen></iframe>';
                            	}
							}
							else if (src.indexOf('vimeo')!=-1) 
							{
								a = '?autoplay=' + autoplay + '&api=1';
								if (this.core.s.vimeoPlayerParams) { a = a + '&' + $.param(this.core.s.vimeoPlayerParams); }
								video = '<iframe class="lg-video-object lg-vimeo ' + addClass + '" width="560" height="315"  src="'+src+'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
								// video = '<iframe class="lg-video-object lg-vimeo ' + addClass + '" width="560" height="315"  src="//player.vimeo.com/video/' + isVideo.vimeo[1] + a + '" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
							}
							else if (isVideo.dailymotion) 
							{
								a = '?wmode=opaque&autoplay=' + autoplay + '&api=postMessage';
								if (this.core.s.dailymotionPlayerParams) { a = a + '&' + $.param(this.core.s.dailymotionPlayerParams); }
								video = '<iframe class="lg-video-object lg-dailymotion ' + addClass + '" width="560" height="315" src="//www.dailymotion.com/embed/video/' + isVideo.dailymotion[1] + a + '" frameborder="0" allowfullscreen></iframe>';
							}
							else if (isVideo.html5) { var fL = html.substring(0, 1); if (fL === '.' || fL === '#') { html = $(html).html(); } video = html; }
							else if (isVideo.vk) { a = '&autoplay=' + autoplay; if (this.core.s.vkPlayerParams) { a = a + '&' + $.param(this.core.s.vkPlayerParams); } }
							else if (isVideo.wistia) 
							{
								// video = '<iframe class="lg-video-object lg-youtube ' + addClass + '" width="560" height="315" src="//fast.wistia.net/embed/iframe/' + isVideo.wistia[1] + '" frameborder="0" allowfullscreen></iframe>';
								video = '<iframe class="lg-video-object lg-youtube ' + addClass + '" width="560" height="315" src="'+isVideo.wistia+'" frameborder="0" allowfullscreen></iframe>';
							}
							else if(isVideo.mp4)
							{
								video = '<iframe class="lg-video-object lg-html5 ' + addClass + '" width="560" height="315" src="'+isVideo.mp4+'" frameborder="0" allowfullscreen></iframe>';
							}
							return video;
						};
						Video.prototype.destroy = function() { this.videoLoaded = false; };
						$.fn.lightGallery<?php echo $Total_Soft_Gallery_Video;?>.modules.video = Video;
					})(jQuery, window, document);
				</script>
				<script src="<?php echo plugins_url('../JS/froogaloop.min.js',__FILE__);?>"></script>
				<script src="<?php echo plugins_url('../JS/jquery.mousewheel.min.js',__FILE__);?>"></script>
				<script type="text/javascript">
					(function($, window, document, undefined) {
						var Totalsoft_Autoplay = jQuery('.Totalsoft_Autoplay').val();
						if(Totalsoft_Autoplay=='true'){ Totalsoft_Autoplay=true; } else { Totalsoft_Autoplay=false; }
						'use strict';
						var defaults = {
							autoplay: Totalsoft_Autoplay,
							pause: 5000,
							progressBar: true,
							fourceAutoplay: false,
							autoplayControls: true,
							appendAutoplayControlsTo: '.lg-toolbar<?php echo $Total_Soft_Gallery_Video;?>'
						};
						var Autoplay = function(element) {
							this.core = $(element).data('lightGallery<?php echo $Total_Soft_Gallery_Video;?>');
							this.$el = $(element);
							if (this.core.$items.length < 2) { return false; }
							this.core.s = $.extend({}, defaults, this.core.s);
							this.interval = false;
							this.fromAuto = true;
							this.canceledOnTouch = false;
							this.fourceAutoplayTemp = this.core.s.fourceAutoplay;
							if (!this.core.doCss()) { this.core.s.progressBar = false; }
							this.init();
							return this;
						};
						Autoplay.prototype.init = function() {
							var _this = this;
							if (_this.core.s.autoplayControls) { _this.controls(); }
							if (_this.core.s.progressBar) { _this.core.$outer.find('.lg').append('<div class="lg-progress-bar"><div class="lg-progress"></div></div>'); }
							_this.progress();
							if (_this.core.s.autoplay) { _this.startlAuto(); }
							_this.$el.on('onDragstart.lg.tm touchstart.lg.tm', function() { if (_this.interval) { _this.cancelAuto(); _this.canceledOnTouch = true; } });
							_this.$el.on('onDragend.lg.tm touchend.lg.tm onSlideClick.lg.tm', function() {
								if (!_this.interval && _this.canceledOnTouch) { _this.startlAuto(); _this.canceledOnTouch = false; }
							});
						};
						Autoplay.prototype.progress = function() {
							var _this = this;
							var _$progressBar;
							var _$progress;
							_this.$el.on('onBeforeSlide.lg.tm', function() {
								if (_this.core.s.progressBar && _this.fromAuto) 
								{
									_$progressBar = _this.core.$outer.find('.lg-progress-bar');
									_$progress = _this.core.$outer.find('.lg-progress');
									if (_this.interval) 
									{
										_$progress.removeAttr('style');
										_$progressBar.removeClass('lg-start');
										setTimeout(function() {
											_$progress.css('transition', 'width ' + (_this.core.s.speed + _this.core.s.pause) + 'ms ease 0s');
											_$progressBar.addClass('lg-start');
										}, 20);
									}
								}
								if (!_this.fromAuto && !_this.core.s.fourceAutoplay) { _this.cancelAuto(); }
								_this.fromAuto = false;
							});
						};
						Autoplay.prototype.controls = function() {
							var _this = this;
							var _html = '<i class="totCircl totalsoft totalsoft-play-circle-o lg-iconn"></i>';
							$(this.core.s.appendAutoplayControlsTo).append(_html);
							var x=0;
							_this.core.$outer.find('.totCircl').on('click.lg', function() {
								if($('.totCircl').hasClass('totalsoft-play-circle-o')){ x=0; } else { x=1; }
								x++;
								if(x%2==1){ jQuery('.totCircl').removeClass('totalsoft-play-circle-o'); jQuery('.totCircl').addClass('totalsoft-pause-circle-o');}
								else if($('.totCircl').hasClass('totalsoft-pause-circle-o')) 
								{
									jQuery('.totCircl').addClass('totalsoft-play-circle-o');
									jQuery('.totCircl').removeClass('totalsoft-pause-circle-o');
								}
								if ($(_this.core.$outer).hasClass('lg-show-autoplay')) { _this.cancelAuto(); _this.core.s.fourceAutoplay = false; }
								else { if (!_this.interval) { _this.startlAuto(); _this.core.s.fourceAutoplay = _this.fourceAutoplayTemp; } }
							});
						};
						Autoplay.prototype.startlAuto = function() {
							var _this = this;
							_this.core.$outer.find('.lg-progress').css('transition', 'width ' + (_this.core.s.speed + _this.core.s.pause) + 'ms ease 0s');
							_this.core.$outer.addClass('lg-show-autoplay');
							_this.core.$outer.find('.lg-progress-bar').addClass('lg-start');
							jQuery('.totCircl').removeClass('totalsoft-play-circle-o');
							jQuery('.totCircl').addClass('totalsoft-pause-circle-o');
							_this.interval = setInterval(function() {
								if (_this.core.index + 1 < _this.core.$items.length) { _this.core.index++; } else { _this.core.index = 0; }
								_this.fromAuto = true;
								_this.core.slide(_this.core.index, false, false);
							}, _this.core.s.speed + _this.core.s.pause);
						};
						Autoplay.prototype.cancelAuto = function() {
							clearInterval(this.interval);
							this.interval = false;
							this.core.$outer.find('.lg-progress').removeAttr('style');
							this.core.$outer.removeClass('lg-show-autoplay');
							this.core.$outer.find('.lg-progress-bar').removeClass('lg-start');
						};
						Autoplay.prototype.destroy = function() {
							this.cancelAuto();
							this.core.$outer.find('.lg-progress-bar').remove();
						};
						$.fn.lightGallery<?php echo $Total_Soft_Gallery_Video;?>.modules.autoplay = Autoplay;
					})(jQuery, window, document);
				</script>
			<?php }else if($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Fancy Gallery'){ ?>
				<link rel="stylesheet" type="text/css" href="<?php echo plugins_url('../CSS/style_HovEff.css',__FILE__);?>"/>
				<style>
					.Totalsoft_VT
					{
						position:relative;
						display: block;
						padding: 8px 0;
						font-size:18px;
						top:45%;
						left:50%;
						width:85%;
						transform:translateY(-50%) translateX(-50%);
						-webkit-transform:translateY(-50%) translateX(-50%);
						-ms-transform:translateY(-50%) translateX(-50%);
						-moz-transform:translateY(-50%) translateX(-50%);
						-o-transform:translateY(-50%) translateX(-50%);
						text-transform: uppercase;
						font-weight: normal;
						color: rgba(255,255,255,0.9);
						border-bottom: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_13;?> <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_14;?> !important;
						border-top:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15;?>px solid <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16;?> !important;
					}
					<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_20=='center'){?>
						.Totalsoft_VL
						{
							position:absolute !important;
							bottom:5px;
							left:50%;
							font-size:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_17;?>px !important;
							line-height:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_17;?>px !important;
							font-family:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_18;?> !important;
							transform:translateX(-50%);
							-webkit-transform:translateX(-50%);
							-ms-transform:translateX(-50%);
							-moz-transform:translateX(-50%);
							-o-transform:translateX(-50%);
							color:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19;?> !important;
							border:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_21;?>px solid <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22;?> !important;
							border-radius:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23;?>px !important;
							background:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24;?> !important;
							padding:2px 5px;
							opacity:0;
							box-sizing:border-box;
							transition:background 0.4s,color 0.4s,border-color 0.4s linear;
							-webkit-transition:background 0.4s,color 0.4s,border-color 0.4s linear;
							-ms-transition:background 0.4s,color 0.4s,border-color 0.4s linear;
							-moz-transition:background 0.4s,color 0.4s,border-color 0.4s linear;
							text-decoration: none;
							box-shadow: none !important;
							-moz-box-shadow: none !important;
							-webkit-box-shadow: none !important;
						}
					<?php } else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_20=='left'){?>
						.Totalsoft_VL
						{
							position:absolute !important;
							bottom:5px;
							left:5px;
							font-size:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_17;?>px !important;
							line-height:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_17;?>px !important;
							font-family:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_18;?> !important;
							color:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19;?> !important;
							border:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_21;?>px solid <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22;?> !important;
							border-radius:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23;?>px !important;
							background:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24;?> !important;
							padding:2px 5px;
							opacity:0;
							box-sizing:border-box;
							transition:background 0.4s,color 0.4s,border-color 0.4s linear;
							-webkit-transition:background 0.4s,color 0.4s,border-color 0.4s linear;
							-ms-transition:background 0.4s,color 0.4s,border-color 0.4s linear;
							-moz-transition:background 0.4s,color 0.4s,border-color 0.4s linear;
							text-decoration: none;
							box-shadow: none !important;
							-moz-box-shadow: none !important;
							-webkit-box-shadow: none !important;
						}
					<?php } else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_20=='right'){?>
						.Totalsoft_VL
						{
							position:absolute !important;
							bottom:5px;
							right:5px;
							font-size:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_17;?>px !important;
							line-height:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_17;?>px !important;
							font-family:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_18;?> !important;
							color:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19;?> !important;
							border:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_21;?>px solid <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22;?> !important;
							border-radius:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23;?>px !important;
							background:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24;?>;
							padding:2px 5px;
							opacity:0;
							box-sizing:border-box;
							transition:background 0.4s,color 0.4s,border-color 0.4s linear;
							-webkit-transition:background 0.4s,color 0.4s,border-color 0.4s linear;
							-ms-transition:background 0.4s,color 0.4s,border-color 0.4s linear;
							-moz-transition:background 0.4s,color 0.4s,border-color 0.4s linear;
							text-decoration: none;
							box-shadow: none !important;
							-moz-box-shadow: none !important;
							-webkit-box-shadow: none !important;
						}
					<?php } ?>
					.Totalsoft_VL:hover
					{
						color:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_25;?> !important;
						border-color:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_26;?> !important;
						background:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_27;?> !important;
						text-decoration: none;
					}
					#html5-elem-box::-webkit-scrollbar { width: 0.5em; }
					#html5-elem-box::-webkit-scrollbar-track
					{
						-webkit-box-shadow: inset 0 0 6px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_32;?> !important;
					}
					.pagination<?php echo $Total_Soft_Gallery_Video;?> { border-top:none; }
					.pagination<?php echo $Total_Soft_Gallery_Video;?>:before, .pagination<?php echo $Total_Soft_Gallery_Video;?>:after { background:none; }
					ul.pagination<?php echo $Total_Soft_Gallery_Video;?> li { border:none !important; margin:0px; list-style:none !important; padding-left:0px !important; }
					ul.pagination<?php echo $Total_Soft_Gallery_Video;?> li span
					{
						background-color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_15;?> !important;
						color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_16;?> !important;
						font-size:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_17;?>px !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18;?> !important;
						padding:5px 16px 5px 16px !important;
						height:auto !important;
						<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_23!='none'){ ?> 
							border: 1px solid <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_24;?> !important;
						<?php }else{ ?>
							border:none !important;
						<?php } ?>
						display: block;
					}
					ul.pagination<?php echo $Total_Soft_Gallery_Video;?> li span:hover:not(.active)
					{
						background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21;?> !important;
						color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_22;?> !important;
					}
					ul.pagination<?php echo $Total_Soft_Gallery_Video;?> li span.active
					{
						background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_19;?> !important;
						color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_20;?> !important;
					}
					.TotalSoftGV_FG_LM<?php echo $Total_Soft_Gallery_Video;?>
					{
						background-color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_15;?> !important;
						color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_16;?> !important;
						font-size:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_17;?>px !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18;?> !important;
						<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_23!='none'){ ?> 
							border: 1px solid <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_24;?> !important;
						<?php } else { ?>
							border: none !important;
						<?php }?>
						cursor:pointer;
						display: block;
						padding: 3px !important;
						line-height: 1 !important;
					}
					.TotalSoftGV_FG_LM<?php echo $Total_Soft_Gallery_Video;?>:hover
					{
						background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21;?> !important;
						color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_22;?> !important;
					}
					.html5-next-touch, .html5-prev-touch { padding:5px 10px 10px 10px; }
					.html5lightbox { box-shadow: none !important; -moz-box-shadow: none !important; -webkit-box-shadow: none !important; border-bottom: none !important; }
					#html5-text p { margin: 0 !important; line-height: 1; }
					#html5-elem-data-box { overflow: auto; }
					/* Events List custom webkit scrollbar */
					#html5-elem-data-box::-webkit-scrollbar {width: 9px;}
					/* Track */
					#html5-elem-data-box::-webkit-scrollbar-track {background: none;}
					/* Handle */
					#html5-elem-data-box::-webkit-scrollbar-thumb { background:#ffffff; border:1px solid #E9EBEC; border-radius: 10px; }
					.og-expander::-webkit-scrollbar-thumb:hover {background:#cecece;}
                    #da-thumbs li {border-bottom:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_03;?>px solid <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_04;?>!important; }
					.TotLi_<?php echo $Total_Soft_Gallery_Video;?>
					{
						padding:0px;
						overflow:hidden;
						perspective:800px;
						-webkit-perspective:800px;
						-ms-perspective:800px;
						-moz-perspective:800px;
						-o-perspective:800px;
                        border:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_03;?>px solid <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_04;?>!important;
						box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_05;?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>;
						border-radius:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_07;?>%;
						margin:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_08;?>px !important;
						opacity: 0;
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
					@media screen and (max-width:820px)
					{
						.html5-nav { display: none !important; }
						#html5-lightbox-box { width: 70% !important; height: 100% !important; }
						#html5-elem-wrap { width: 100% !important;
						 height: calc(100% - 150px) !important;
						 min-height: calc(100% - 170px) !important;
						  }
						.TotLi_<?php echo $Total_Soft_Gallery_Video;?>
						{
							margin:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_08;?>px 0 !important;
						}
					}
					@media screen and (max-width:1025px)
					{
						.html5-nav { display: none !important; }
						#html5-lightbox-box { width: 60% !important; height: auto !important; margin: 100px auto 0px !important; }
						#html5-elem-wrap { width: 100% !important; height: calc(100% - 150px) !important; min-height: calc(100% - 170px) !important; }
						.html5-next-touch { top: 0 !important; }
						.html5-prev-touch { top: 0 !important; }
						#html5-elem-box { top: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_04+10;?>px; }
						#html5-close { top: 0 !important; left: 50% !important; transform: translateX(-50%); -moz-transform: translateX(-50%); -webkit-transform: translateX(-50%); }
					}
					@media screen and (max-width:415px)
					{
						.html5-nav { display: none !important; }
						#html5-lightbox-box { width: 90% !important; height: auto !important; margin: 100px auto 0px !important; }
						#html5-elem-wrap { width: 100% !important; height: calc(100% - 150px) !important; min-height: calc(100% - 170px) !important; }
						.html5-next-touch { top: 0 !important; }
						.html5-prev-touch { top: 0 !important; }
						#html5-elem-box { top: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_04+10;?>px; }
						#html5-close { top: 0 !important; left: 50% !important; transform: translateX(-50%); -moz-transform: translateX(-50%); -webkit-transform: translateX(-50%); }
					}
					.Total_Soft_GV_Fancy_<?php echo $Total_Soft_Gallery_Video;?>
					{
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
					.TS_GV_FG_Loading_<?php echo $Total_Soft_Gallery_Video;?>
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
					.TS_GV_FG_Loading_<?php echo $Total_Soft_Gallery_Video;?> img
					{
						margin: 0 auto !important;
						position: relative;
						top: 50%;
						transform: translateY(-50%);
						-moz-transform: translateY(-50%);
						-webkit-transform: translateY(-50%);
					}
				</style>
				<div class="da-thumbs-parent<?php echo $Total_Soft_Gallery_Video;?>" style="position: relative; width: 100%; float: left;">
					<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_27 != ''){ ?>
						<div class="TS_GV_FG_Loading_<?php echo $Total_Soft_Gallery_Video;?>">
							<img src="<?php echo plugins_url('../Images/Loading/loading' . $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_27 . '.gif',__FILE__);?>">
						</div>
					<?php }?>
					<ul id="da-thumbs" class="da-thumbs Total_Soft_GV_Fancy_<?php echo $Total_Soft_Gallery_Video;?>" style='padding:0px;'>
						<?php for($i=0;$i<count($Total_Soft_GalleryV_Videos);$i++){ ?>
							<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL == '')
							{
								$TS_GV_FG_VSR = $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;
							}
							else
							{
								$TS_GV_FG_VSR = $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL;
							}?>
							<?php if($Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType=='All'){ ?>
							<li id="TotalSoft_GV_FG_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i+1;?>" class='TotLi TotLi_<?php echo $Total_Soft_Gallery_Video;?>'>
								<a href="<?php echo $TS_GV_FG_VSR;?>" class="html5lightbox" data-width="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_33;?>" data-height="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_34;?>" data-group="mygroup<?php echo $Total_Soft_GalleryV_Man[0]->id;?>" data-thumbnail="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>" title="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT;?>"
									<?php
										$noconvert = htmlentities($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc);
                                        $convert = html_entity_decode($noconvert);
									?>
                                    data-description='<?php echo $convert;?>'>
									<img style='margin:0px;max-width:none;width:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01;?>px;height:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02;?>px;' src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>">
									<div style='background:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_29;?>'>
												<span class='Totalsoft_VT' style='font-family:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>;color:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_11;?>'>
													<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
												</span>
									</div>
								</a>
								<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink != ''){ ?>
								<a class='Totalsoft_VL' href='<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink ?>' <?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VONT=='true'){echo 'target="_blank"';}?>>
									<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_25;?>
								</a>
								<?php } ?>
							<?php }else{ ?>
								<?php if($i<$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage){ ?>
									<li id="TotalSoft_GV_FG_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i+1;?>" class='TotLi TotLi_<?php echo $Total_Soft_Gallery_Video;?>'>
										<a href="<?php echo $TS_GV_FG_VSR;?>" class="html5lightbox" data-width="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_33;?>" data-height="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_34;?>" data-group="mygroup<?php echo $Total_Soft_GalleryV_Man[0]->id;?>" data-thumbnail="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>" title="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT;?>"
											<?php
										$noconvert = htmlentities($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc);
                                        $convert = html_entity_decode($noconvert);
									?>
                                    data-description='<?php echo $convert;?>'>
									<img style='margin:0px;max-width:none;width:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01;?>px;height:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02;?>px;' src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>">
									<div style='background:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_29;?>'>
												<span class='Totalsoft_VT' style='font-family:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>;color:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_11;?>'>
													<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
												</span>
									</div>
										</a>
										<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink != ''){ ?>
										<a class='Totalsoft_VL' href='<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink ?>' <?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VONT=='true'){echo 'target="_blank"';}?>>
											<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_25;?>
										</a>
										<?php } ?>
									</li>
								<?php }else{ ?>
									<li id="TotalSoft_GV_FG_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i+1;?>" class='TotLi TotLi_<?php echo $Total_Soft_Gallery_Video;?> noshow1' style='display:none;'>
										<a href="<?php echo $TS_GV_FG_VSR;?>" class="html5lightbox" data-width="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_33;?>" data-height="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_34;?>" data-group="mygroup<?php echo $Total_Soft_GalleryV_Man[0]->id;?>" data-thumbnail="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>" title="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT;?>"
											<?php
										$noconvert = htmlentities($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc);
                                        $convert = html_entity_decode($noconvert);
									?>
                                    data-description='<?php echo $convert;?>'>
									<img style='margin:0px;max-width:none;width:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01;?>px;height:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02;?>px;' src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>">
									<div style='background:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_29;?>'>
												<span class='Totalsoft_VT' style='font-family:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>;color:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_11;?>'>
													<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
												</span>
									</div>
										</a>
										<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink != ''){ ?>
										<a class='Totalsoft_VL' href='<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink ?>' <?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VONT=='true'){echo 'target="_blank"';}?>>
											<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_25;?>
										</a>
										<?php } ?>
									</li>
						<?php } } } ?>
					</ul>
					<?php if($Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType=='Pagination'){ ?>
						<div class="TotalSoftcenter">
							<ul class="pagination pagination<?php echo $Total_Soft_Gallery_Video;?>" style='margin:0px;padding:0px;'>
								<li onclick="Total_Soft_GV_FG_PageP('<?php echo $Total_Soft_Gallery_Video;?>', '<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>')"><span><?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14;?></span></li>
								<?php for($i=1;$i<=ceil(count($Total_Soft_GalleryV_Videos)/$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage);$i++){ ?> 
									<?php if($i==1){ ?>
										<li id="TotalSoft_GV_FG_PLi_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i;?>" onclick="Total_Soft_GV_FG_Page('<?php echo $Total_Soft_Gallery_Video;?>','<?php echo $i?>','<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>')"><span class="active"><?php echo $i;?></span></li>
										<?php } else { ?>
										<li id="TotalSoft_GV_FG_PLi_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i;?>" onclick="Total_Soft_GV_FG_Page('<?php echo $Total_Soft_Gallery_Video;?>','<?php echo $i?>','<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>')"><span><?php echo $i;?></span></li>
										<?php }?>
								<?php }?>
								<li onclick="Total_Soft_GV_FG_PageN('<?php echo $Total_Soft_Gallery_Video;?>', '<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>', '<?php echo ceil(count($Total_Soft_GalleryV_Videos)/$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage);?>')"><span><?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_13;?></span></li>
							</ul>
						</div>
					<?php }?>
					<?php if($Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType=='Load'){ ?>
						<div class="TotalSoftcenter" id="TotalSoft_VG_FG_PageDiv_<?php echo $Total_Soft_Gallery_Video;?>">
							<span class="TotalSoftGV_FG_LM TotalSoftGV_FG_LM<?php echo $Total_Soft_Gallery_Video;?>" onclick="Total_Soft_GV_FG_PageLM('<?php echo $Total_Soft_Gallery_Video;?>', '<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>', '<?php echo ceil(count($Total_Soft_GalleryV_Videos)/$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage);?>')"><?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_LoadMore;?></span>
							<input type="text" style="display:none;" id="TotalSoft_VG_FG_Page_<?php echo $Total_Soft_Gallery_Video;?>" value="1">
						</div>
					<?php } ?>
				</div>
				<input type='text' style='display:none;' class='Totalsoft_FG_T_FS' value='<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>'>
				<input type='text' style='display:none;' class='Totalsoft_FG_L_FS' value='<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_17;?>'>
				<input type='text' style='display:none;' class='Totalsoft_FG_I_W' value='<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01;?>'>
				<input type='text' style='display:none;' class='Totalsoft_FG_I_H' value='<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02;?>'>
				<input type='text' style='display:none;' class='Totalsoft_FG_HOv_T' value='<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_28;?>'>
				<input type='text' style='display:none;' class='Totalsoft_FG_POv_C' value='<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_30;?>'>
				<input type='text' style='display:none;' class='Totalsoft_FG_PV_BgC' value='<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_32;?>'>
				<input type='text' style='display:none;' class='Totalsoft_FG_PThumb_HBC' value='<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_35;?>'>
				<input type='text' style='display:none;' class='Totalsoft_FG_PThumb_HBW' value='<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_36;?>'>
				<input type='text' style='display:none;' class='Totalsoft_FG_PThumb_IW' value='<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_37;?>'>
				<input type='text' style='display:none;' class='Totalsoft_FG_PThumb_IH' value='<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_38;?>'>
				<input type='text' style='display:none;' class='Totalsoft_FG_ShVAutoPl' value='<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_09;?>'>
				<input type='text' style='display:none;' class='TotalSoft_VG_FG_ShN' value='<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_10;?>'>
				<input type='text' style='display:none;' class='TotalSoft_VG_FG_ShPT' value='<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11;?>'>
				<input type='text' style='display:none;' class='TotalSoft_VG_FG_ShSlPlIc' value='<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_12;?>'>
				<input type='text' style='display:none;' class='TotalSoft_VG_FG_PT_FS' value='<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_39;?>'>
				<input type='text' style='display:none;' class='TotalSoft_VG_FG_PT_FF' value='<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_01;?>'>
				<input type='text' style='display:none;' class='TotalSoft_VG_FG_PT_C' value='<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_02;?>'>
				<input type='text' style='display:none;' class='Totalsoft_VG_FG_SL_LI' value='<?php echo $TotalSoft_GV_2_03_Left;?>'>
				<input type='text' style='display:none;' class='Totalsoft_VG_FG_SL_RI' value='<?php echo $TotalSoft_GV_2_03_Right;?>'>
				<input type='text' style='display:none;' class='TotalSoft_VG_FG_SL_S' value='<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_04;?>'>
				<input type='text' style='display:none;' class='TotalSoft_VG_FG_SL_C' value='<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_05;?>'>
				<input type='text' style='display:none;' class='Totalsoft_VG_FG_SL_DI' value='<?php echo $TotalSoft_GV_2_06_Del;?>'>
				<input type='text' style='display:none;' class='TotalSoft_VG_FG_SL_DIS' value='<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_07;?>'>
				<input type='text' style='display:none;' class='TotalSoft_VG_FG_SL_DIC' value='<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_08;?>'>
				<input type='text' style='display:none;' class='TotalSoft_VG_FG_SL_TIC' value='<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_31;?>'>
				<input type='text' style='display:none;' class='TS_VG_FG_AE_<?php echo $Total_Soft_Gallery_Video;?>' value='<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26;?>'>
				<input type='text' style='display:none;' class='TS_VG_FG_Color' value='<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_11;?>'>
				<script type="text/javascript" src="<?php echo plugins_url('../JS/html5lightbox.js',__FILE__);?>"></script>
				<script type="text/javascript" src="<?php echo plugins_url('../JS/jquery.hoverdir.js',__FILE__);?>"></script>
				<script>
					jQuery(document).ready(function(){
						var array_images<?php echo $Total_Soft_Gallery_Video;?>=[];
						jQuery('.TotLi_<?php echo $Total_Soft_Gallery_Video;?>').each(function(){
							if( jQuery(this).find('img').attr("src") != "" ) { array_images<?php echo $Total_Soft_Gallery_Video;?>.push(jQuery(this).find('img').attr("src")); }
						})
						var y_images<?php echo $Total_Soft_Gallery_Video;?>=0;
						jQuery('.TotLi_<?php echo $Total_Soft_Gallery_Video;?>').each(function(i){
							jQuery(this).find('img').attr('src', array_images<?php echo $Total_Soft_Gallery_Video;?>[i]).on("load",function(){
								y_images<?php echo $Total_Soft_Gallery_Video;?>++;
								if(y_images<?php echo $Total_Soft_Gallery_Video;?> == array_images<?php echo $Total_Soft_Gallery_Video;?>.length)
								{
									jQuery('.TS_GV_FG_Loading_<?php echo $Total_Soft_Gallery_Video;?>').css('display','none');
								}
							})
						})

						var Totalsoft_FG_T_FS = jQuery('.Totalsoft_FG_T_FS').val();
						var Totalsoft_FG_L_FS = jQuery('.Totalsoft_FG_L_FS').val();
						var Totalsoft_FG_I_W = jQuery('.Totalsoft_FG_I_W').val();
						var Totalsoft_FG_I_H = jQuery('.Totalsoft_FG_I_H').val();
						var win = jQuery(window);
						checkWidth();
						win.resize(checkWidth);
                    	function checkWidth(){
                    		var total_soft_gallery_video = jQuery('.Total_Soft_GV_Fancy_<?php echo $Total_Soft_Gallery_Video;?>').parent().parent();
                    		var parent_width =  jQuery('.Total_Soft_GV_Fancy_<?php echo $Total_Soft_Gallery_Video;?>').parent().parent().width();
                    	    jQuery(total_soft_gallery_video).each(function(index, el){
                                if(jQuery(el).width() < Totalsoft_FG_I_W)
                                    {
	                            	jQuery(el).find('.da-thumbs li a img').css('width',jQuery(el).find('.da-thumbs').parent().width());
									jQuery(el).find('.da-thumbs li a img').css('height',Math.floor(jQuery(el).find('.da-thumbs').parent().width()*Totalsoft_FG_I_H/Totalsoft_FG_I_W));
									jQuery(el).find('.Totalsoft_VT').css('padding-top',Math.floor(8*jQuery(el).find('.da-thumbs li a img').width()/Totalsoft_FG_I_W));
									jQuery(el).find('.Totalsoft_VT').css('padding-bottom',Math.floor(8*jQuery(el).find('.da-thumbs li a img').width()/Totalsoft_FG_I_W));
									jQuery(el).find('.Totalsoft_VT').css('font-size',Math.floor(Totalsoft_FG_T_FS*jQuery(el).find('.da-thumbs li a img').width()/Totalsoft_FG_I_W)+'px');
									jQuery(el).find('.Totalsoft_VT').css('line-height',Math.floor(Totalsoft_FG_T_FS*jQuery(el).find('.da-thumbs li a img').width()/Totalsoft_FG_I_W+1)+'px');
									jQuery(el).find('.Totalsoft_VL').css('font-size',Math.floor(Totalsoft_FG_L_FS*jQuery(el).find('.da-thumbs li a img').width()/Totalsoft_FG_I_W)+'px');
									jQuery(el).find('.Totalsoft_VL').css('line-height',Math.floor(Totalsoft_FG_L_FS*jQuery(el).find('.da-thumbs li a img').width()/Totalsoft_FG_I_W)+'px');
									jQuery(total_soft_gallery_video).css({'padding-left':'0'});
                                    }
                                    else if(jQuery(el).width() > Totalsoft_FG_I_W) {
                                    jQuery(el).find('.da-thumbs li a img').css({'width':Totalsoft_FG_I_W+'px'});
                                    jQuery(el).find('.da-thumbs li a img').css({'height':Totalsoft_FG_I_H+'px'});
                                    }
                    	     })
						}
						var delaytime = 0;
						var TS_VG_FG_AE = jQuery('.TS_VG_FG_AE_<?php echo $Total_Soft_Gallery_Video; ?>').val();

						jQuery('.Total_Soft_GV_Fancy_<?php echo $Total_Soft_Gallery_Video;?> .TotLi_<?php echo $Total_Soft_Gallery_Video;?>').each(function(){
							if(!jQuery(this).hasClass('noshow1'))
							{
								delaytime++;
								if(TS_VG_FG_AE == '')
								{
									jQuery(this).css({'display':'inline-block','opacity':'1'});
								}
								else if(TS_VG_FG_AE == 'fadeIn')
								{
									jQuery(this).css({'display':'inline-block','animation':'fadeIn 0.65s ease '+0.2*delaytime+'s forwards','-webkit-animation':'fadeIn 0.65s ease '+0.2*delaytime+'s forwards','-moz-animation':'fadeIn 0.65s ease '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_FG_AE == 'moveUp')
								{
									jQuery(this).css({'display':'inline-block','animation':'moveUp 0.65s ease '+0.2*delaytime+'s forwards','-webkit-animation':'moveUp 0.65s ease '+0.2*delaytime+'s forwards','-moz-animation':'moveUp 0.65s ease '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_FG_AE == 'scaleUp')
								{
									jQuery(this).css({'display':'inline-block','animation':'scaleUp 0.65s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'scaleUp 0.65s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'scaleUp 0.65s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_FG_AE == 'fallPerspective')
								{
									jQuery(this).css({'display':'inline-block','animation':'fallPerspective 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'fallPerspective 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'fallPerspective 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_FG_AE == 'fly')
								{
									jQuery(this).css({'display':'inline-block','animation':'fly 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'fly 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'fly 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_FG_AE == 'flip')
								{
									jQuery(this).css({'display':'inline-block','animation':'flip 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'flip 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'flip 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_FG_AE == 'helix')
								{
									jQuery(this).css({'display':'inline-block','animation':'helix 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'helix 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'helix 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_FG_AE == 'popUp')
								{
									jQuery(this).css({'display':'inline-block','animation':'popUp 0.8s ease-in '+0.2*delaytime+'s forwards','-webkit-animation':'popUp 0.8s ease-in '+0.2*delaytime+'s forwards','-moz-animation':'popUp 0.8s ease-in '+0.2*delaytime+'s forwards'});
								}
							}
						})
					})
				</script>
				<script type="text/javascript">
					jQuery(function() {
						var Totalsoft_FG_HOv_T = jQuery('.Totalsoft_FG_HOv_T').val();
						if(Totalsoft_FG_HOv_T=='Default') { Totalsoft_FG_HOv_T=false; } else { Totalsoft_FG_HOv_T=true; }
						jQuery(' #da-thumbs > li ').each( function() { jQuery(this).hoverdir({ hoverDelay : 50, inverse : Totalsoft_FG_HOv_T }); } );
					});
				</script>
			<?php echo $after_widget; }
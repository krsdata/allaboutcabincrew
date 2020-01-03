<?php
$Total_Soft_Gallery_Video = rand(1,1000);
if($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Parallax Engine'){ ?>
				<script type="text/javascript">
					(function(t,e,i){function o(i,o,n){var r=e.createElement(i);return o&&(r.id=Z+o),n&&(r.style.cssText=n),t(r)}function n(){return i.innerHeight?i.innerHeight:t(i).height()}function r(e,i){i!==Object(i)&&(i={}),this.cache={},this.el=e,this.get=function(e){var o,n;return void 0!==this.cache[e]?n=this.cache[e]:(o=t(this.el).attr("data-cbox-"+e),void 0!==o?n=o:void 0!==i[e]?n=i[e]:void 0!==X[e]&&(n=X[e]),this.cache[e]=n),t.isFunction(n)?n.call(this.el):n}}function h(t){var e=E.length,i=(z+t)%e;return 0>i?e+i:i}function s(t,e){return Math.round((/%/.test(t)?("x"===e?W.width():n())/100:1)*parseInt(t,10))}function a(t,e){return t.get("photo")||t.get("photoRegex").test(e)}function l(t,e){return t.get("retinaUrl")&&i.devicePixelRatio>1?e.replace(t.get("photoRegex"),t.get("retinaSuffix")):e}function d(t){"contains"in x[0]&&!x[0].contains(t.target)&&(t.stopPropagation(),x.focus())}function c(t){c.str!==t&&(x.add(v).removeClass(c.str).addClass(t),c.str=t)}function g(){z=0,rel&&"nofollow"!==rel?(E=t("."+te).filter(function(){var e=t.data(this,Y),i=new r(this,e);return i.get("rel")===rel}),z=E.index(_.el),-1===z&&(E=E.add(_.el),z=E.length-1)):E=t(_.el)}function u(i){t(e).trigger(i),se.triggerHandler(i)}function f(i){var n;G||(n=t(i).data("colorbox<?php echo $Total_Soft_Gallery_Video;?>"),_=new r(i,n),rel=_.get("rel"),g(),$||($=q=!0,c(_.get("className")),x.css({visibility:"hidden",display:"block"}),L=o(ae,"LoadedContent<?php echo $Total_Soft_Gallery_Video;?>","width:0; height:0; overflow:hidden; visibility:hidden"),b.css({width:"",height:""}).append(L),D=T.height()+k.height()+b.outerHeight(!0)-b.height(),j=C.width()+H.width()+b.outerWidth(!0)-b.width(),A=L.outerHeight(!0),N=L.outerWidth(!0),_.w=s(_.get("initialWidth"),"x"),_.h=s(_.get("initialHeight"),"y"),L.css({width:"",height:_.h}),J.position(),u(ee),_.get("onOpen"),O.add(R).hide(),x.focus(),_.get("trapFocus")&&e.addEventListener&&(e.addEventListener("focus",d,!0),se.one(re,function(){e.removeEventListener("focus",d,!0)})),_.get("returnFocus")&&se.one(re,function(){t(_.el).focus()})),v.css({opacity:parseFloat(_.get("opacity")),cursor:_.get("overlayClose")?"pointer":"auto",visibility:"visible"}).show(),_.get("closeButton")?B.html(_.get("close")).appendTo(b):B.appendTo("<div/>"),w())}function p(){!x&&e.body&&(V=!1,W=t(i),x=o(ae).attr({id:Y,"class":t.support.opacity===!1?Z+"IE":"",role:"dialog",tabindex:"-1"}).hide(),v=o(ae,"Overlay<?php echo $Total_Soft_Gallery_Video;?>").hide(),M=t([o(ae,"LoadingOverlay<?php echo $Total_Soft_Gallery_Video;?>")[0],o(ae,"LoadingGraphic<?php echo $Total_Soft_Gallery_Video;?>")[0]]),y=o(ae,"Wrapper<?php echo $Total_Soft_Gallery_Video;?>"),b=o(ae,"Content<?php echo $Total_Soft_Gallery_Video;?>").append(R=o(ae,"Title<?php echo $Total_Soft_Gallery_Video;?>"),F=o(ae,"Current"),P=t('<i class="'+jQuery(".TotalSoft_PS_Left_Icon").val()+'" />').attr({id:Z+"Previous<?php echo $Total_Soft_Gallery_Video;?>"}),K=t('<i class="'+jQuery(".TotalSoft_PS_Right_Icon").val()+'"/>').attr({id:Z+"Next<?php echo $Total_Soft_Gallery_Video;?>"}),I=o("button","Slideshow<?php echo $Total_Soft_Gallery_Video;?>"),M),B=t('<i class="'+jQuery(".TotalSoft_JGV_PS_DIcT").val()+'"/>').attr({id:Z+"Close<?php echo $Total_Soft_Gallery_Video;?>"}),y.append(o(ae).append(o(ae,"TopLeft<?php echo $Total_Soft_Gallery_Video;?>"),T=o(ae,"TopCenter<?php echo $Total_Soft_Gallery_Video;?>"),o(ae,"TopRight<?php echo $Total_Soft_Gallery_Video;?>")),o(ae,!1,"clear:left").append(C=o(ae,"MiddleLeft<?php echo $Total_Soft_Gallery_Video;?>"),b,H=o(ae,"MiddleRight<?php echo $Total_Soft_Gallery_Video;?>")),o(ae,!1,"clear:left").append(o(ae,"BottomLeft<?php echo $Total_Soft_Gallery_Video;?>"),k=o(ae,"BottomCenter<?php echo $Total_Soft_Gallery_Video;?>"),o(ae,"BottomRight<?php echo $Total_Soft_Gallery_Video;?>"))).find("div div").css({"float":"left"}),S=o(ae,!1,"position:absolute; width:9999px; visibility:hidden; display:none; max-width:none;"),O=K.add(P).add(F).add(I),t(e.body).append(v,x.append(y,S)))}function m(){function i(t){t.which>1||t.shiftKey||t.altKey||t.metaKey||t.ctrlKey||(t.preventDefault(),f(this))}return x?(V||(V=!0,K.click(function(){J.next()}),P.click(function(){J.prev()}),B.click(function(){J.close()}),v.click(function(){_.get("overlayClose")&&J.close()}),t(e).bind("keydown."+Z,function(t){var e=t.keyCode;$&&_.get("escKey")&&27===e&&(t.preventDefault(),J.close()),$&&_.get("arrowKey")&&E[1]&&!t.altKey&&(37===e?(t.preventDefault(),P.click()):39===e&&(t.preventDefault(),K.click()))}),t.isFunction(t.fn.on)?t(e).on("click."+Z,"."+te,i):t("."+te).live("click."+Z,i)),!0):!1}function w(){var n,r,h,d=J.prep,c=++le;q=!0,U=!1,u(he),u(ie),_.get("onLoad"),_.h=_.get("height")?s(_.get("height"),"y")-A-D:_.get("innerHeight")&&s(_.get("innerHeight"),"y"),_.w=_.get("width")?s(_.get("width"),"x")-N-j:_.get("innerWidth")&&s(_.get("innerWidth"),"x"),_.mw=_.w,_.mh=_.h,_.get("maxWidth")&&(_.mw=s(_.get("maxWidth"),"x")-N-j,_.mw=_.w&&_.w<_.mw?_.w:_.mw),_.get("maxHeight")&&(_.mh=s(_.get("maxHeight"),"y")-A-D,_.mh=_.h&&_.h<_.mh?_.h:_.mh),n=_.get("href"),Q=setTimeout(function(){M.show()},100),_.get("inline")?(h=o(ae).hide().insertBefore(t(n)[0]),se.one(he,function(){h.replaceWith(L.children())}),d(t(n))):_.get("iframe")?d(" "):_.get("html")?d(_.get("html")):a(_,n)?(n=l(_,n),U=e.createElement("img"),t(U).addClass(Z+"Photo<?php echo $Total_Soft_Gallery_Video;?>").bind("error",function(){d(o(ae,"Error").html(_.get("imgError")))}).one("load",function(){var e;c===le&&(t.each(["alt","longdesc","aria-describedby"],function(e,i){var o=t(_.el).attr(i)||t(_.el).attr("data-"+i);o&&U.setAttribute(i,o)}),_.get("retinaImage")&&i.devicePixelRatio>1&&(U.height=U.height/i.devicePixelRatio,U.width=U.width/i.devicePixelRatio),_.get("scalePhotos")&&(r=function(){U.height-=U.height*e,U.width-=U.width*e},_.mw&&U.width>_.mw&&(e=(U.width-_.mw)/U.width,r()),_.mh&&U.height>_.mh&&(e=(U.height-_.mh)/U.height,r())),_.h&&(U.style.marginTop=Math.max(_.mh-U.height,0)/2+"px"),E[1]&&(_.get("loop")||E[z+1])&&(U.style.cursor="pointer",U.onclick=function(){J.next()}),U.style.width=U.width+"px",U.style.height=U.height+"px",setTimeout(function(){d(U)},1))}),setTimeout(function(){U.src=n},1)):n&&S.load(n,_.get("data"),function(e,i){c===le&&d("error"===i?o(ae,"Error").html(_.get("xhrError")):t(this).contents())})}var v,x,y,b,T,C,H,k,E,W,L,S,M,R,F,I,K,P,B,O,_,D,j,A,N,z,U,$,q,G,Q,J,V,X={html:!1,photo:!1,iframe:!1,inline:!1,transition:"elastic",speed:300,fadeOut:300,width:!1,initialWidth:"60",innerWidth:!1,maxWidth:!1,height:!1,initialHeight:"45",innerHeight:!1,maxHeight:!1,scalePhotos:!0,scrolling:!0,opacity:.9,preloading:!0,className:!1,overlayClose:!0,escKey:!0,arrowKey:!0,top:!1,bottom:!1,left:!1,right:!1,fixed:!1,data:void 0,closeButton:!0,fastIframe:!0,open:!1,reposition:!0,loop:!0,slideshow:!1,slideshowAuto:!1,slideshowSpeed:2500,slideshowStart:"start slideshow",slideshowStop:"stop slideshow",photoRegex:/\.(ashx|gif|png|jp(e|g|eg)|bmp|ico|webp|jxr|svg)((#|\?).*)?$/i,retinaImage:!1,retinaUrl:!1,retinaSuffix:"@2x.$1",current:"{current}/{total}",previous:"",next:"",close:"",xhrError:"This content failed to load.",imgError:"This image failed to load.",returnFocus:!0,trapFocus:!0,onOpen:!1,onLoad:!1,onComplete:!1,onCleanup:!1,onClosed:!1,rel:function(){return this.rel},href:function(){return t(this).attr("href")},title:function(){return this.name}},Y="colorbox<?php echo $Total_Soft_Gallery_Video;?>",Z="cbox",te=Z+"Element<?php echo $Total_Soft_Gallery_Video;?>",ee=Z+"_open",ie=Z+"_load",oe=Z+"_complete",ne=Z+"_cleanup",re=Z+"_closed",he=Z+"_purge",se=t("<a/>"),ae="div",le=0,de={},ce=function(){function t(){clearTimeout(h)}function e(){(_.get("loop")||E[z+1])&&(t(),h=setTimeout(J.next,_.get("slideshowSpeed")))}function i(){I.html(_.get("slideshowStop")).unbind(a).one(a,o),se.bind(oe,e).bind(ie,t),x.removeClass(s+"off").addClass(s+"on")}function o(){t(),se.unbind(oe,e).unbind(ie,t),I.html(_.get("slideshowStart")).unbind(a).one(a,function(){J.next(),i()}),x.removeClass(s+"on").addClass(s+"off")}function n(){r=!1,I.hide(),t(),se.unbind(oe,e).unbind(ie,t),x.removeClass(s+"off "+s+"on")}var r,h,s=Z+"Slideshow<?php echo $Total_Soft_Gallery_Video;?>_",a="click."+Z;return function(){r?_.get("slideshow")||(se.unbind(ne,n),n()):_.get("slideshow")&&E[1]&&(r=!0,se.one(ne,n),_.get("slideshowAuto")?i():o(),I.show())}}();t.colorbox<?php echo $Total_Soft_Gallery_Video;?>||(t(p),J=t.fn[Y]=t[Y]=function(e,i){var o,n=this;if(e=e||{},t.isFunction(n))n=t("<a/>"),e.open=!0;else if(!n[0])return n;return n[0]?(p(),m()&&(i&&(e.onComplete=i),n.each(function(){var i=t.data(this,Y)||{};t.data(this,Y,t.extend(i,e))}).addClass(te),o=new r(n[0],e),o.get("open")&&f(n[0])),n):n},J.position=function(e,i){function o(){T[0].style.width=k[0].style.width=b[0].style.width=parseInt(x[0].style.width,10)-j+"px",b[0].style.height=C[0].style.height=H[0].style.height=parseInt(x[0].style.height,10)-D+"px"}var r,h,a,l=0,d=0,c=x.offset();if(W.unbind("resize."+Z),x.css({top:-9e4,left:-9e4}),h=W.scrollTop(),a=W.scrollLeft(),_.get("fixed")?(c.top-=h,c.left-=a,x.css({position:"fixed"})):(l=h,d=a,x.css({position:"fixed"})),d+=_.get("right")!==!1?Math.max(W.width()-_.w-N-j-s(_.get("right"),"x"),0):_.get("left")!==!1?s(_.get("left"),"x"):Math.round(Math.max(W.width()-_.w-N-j,0)/2),l+=_.get("bottom")!==!1?Math.max(n()-_.h-A-D-s(_.get("bottom"),"y"),0):_.get("top")!==!1?s(_.get("top"),"y"):Math.round(Math.max(n()-_.h-A-D,0)/2),x.css({top:c.top,left:c.left,visibility:"visible"}),y[0].style.width=y[0].style.height="9999px",r={width:_.w+N+j,height:_.h+A+D,top:l,left:d},e){var g=0;t.each(r,function(t){return r[t]!==de[t]?(g=e,void 0):void 0}),e=g}de=r,e||x.css(r),x.dequeue().animate(r,{duration:e||0,complete:function(){o(),q=!1,y[0].style.width=_.w+N+j+"px",y[0].style.height=_.h+A+D+"px",_.get("reposition")&&setTimeout(function(){W.bind("resize."+Z,J.position)},1),i&&i()},step:o})},J.resize=function(t){var e;$&&(t=t||{},t.width&&(_.w=s(t.width,"x")-N-j),t.innerWidth&&(_.w=s(t.innerWidth,"x")),L.css({width:_.w}),t.height&&(_.h=s(t.height,"y")-A-D),t.innerHeight&&(_.h=s(t.innerHeight,"y")),t.innerHeight||t.height||(e=L.scrollTop(),L.css({height:"auto"}),_.h=L.height()),L.css({height:_.h}),e&&L.scrollTop(e),J.position("none"===_.get("transition")?0:_.get("speed")))},J.prep=function(i){function n(){return _.w=_.w||L.width(),_.w=_.mw&&_.mw<_.w?_.mw:_.w,_.w}function s(){return _.h=_.h||L.height(),_.h=_.mh&&_.mh<_.h?_.mh:_.h,_.h}if($){var d,g="none"===_.get("transition")?0:_.get("speed");L.remove(),L=o(ae,"LoadedContent<?php echo $Total_Soft_Gallery_Video;?>").append(i),L.hide().appendTo(S.show()).css({width:'100%',position: 'relative',overflow:_.get("scrolling")?"auto":"hidden"}).css({height:'100%'}).prependTo(b),S.hide(),t(U).css({"float":"none"}),c(_.get("className")),d=function(){function i(){t.support.opacity===!1&&x[0].style.removeAttribute("filter")}var o,n,s=E.length;$&&(n=function(){clearTimeout(Q),M.hide(),u(oe),_.get("onComplete")},R.html(_.get("title")).show(),L.show(),s>1?("string"==typeof _.get("current")&&F.html(_.get("current").replace("{current}",z+1).replace("{total}",s)).show(),K[_.get("loop")||s-1>z?"show":"hide"]().html(_.get("next")),P[_.get("loop")||z?"show":"hide"]().html(_.get("previous")),ce(),_.get("preloading")&&t.each([h(-1),h(1)],function(){var i,o=E[this],n=new r(o,t.data(o,Y)),h=n.get("href");h&&a(n,h)&&(h=l(n,h),i=e.createElement("img"),i.src=h)})):O.hide(),_.get("iframe")?(o=e.createElement("iframe"),"frameBorder"in o&&(o.frameBorder=0),"allowTransparency"in o&&(o.allowTransparency="true"),_.get("scrolling")||(o.scrolling="no"),t(o).attr({src:_.get("href"),name:(new Date).getTime(),"class":Z+"Iframe<?php echo $Total_Soft_Gallery_Video;?>",allowFullScreen:!0}).one("load",n).appendTo(L),se.one(he,function(){o.src="//about:blank"}),_.get("fastIframe")&&t(o).trigger("load")):n(),"fade"===_.get("transition")?x.fadeTo(g,1,i):i())},"fade"===_.get("transition")?x.fadeTo(g,0,function(){J.position(0,d)}):J.position(g,d)}},J.next=function(){!q&&E[1]&&(_.get("loop")||E[z+1])&&(z=h(1),f(E[z]))},J.prev=function(){!q&&E[1]&&(_.get("loop")||z)&&(z=h(-1),f(E[z]))},J.close=function(){$&&!G&&(G=!0,$=!1,u(ne),_.get("onCleanup"),W.unbind("."+Z),v.fadeTo(_.get("fadeOut")||0,0),x.stop().fadeTo(_.get("fadeOut")||0,0,function(){x.add(v).css({opacity:1,cursor:"auto"}).hide(),u(he),L.remove(),setTimeout(function(){G=!1,u(re),_.get("onClosed")},1)}))},J.remove=function(){x&&(x.stop(),t.colorbox<?php echo $Total_Soft_Gallery_Video;?>.close(),x.stop().remove(),v.remove(),G=!1,x=null,t("."+te).removeData(Y).removeClass(te),t(e).unbind("click."+Z))},J.element=function(){return t(_.el)},J.settings=X)})(jQuery,document,window);
				</script>
				<script type="text/javascript">
					!function(window,document,$,undefined){$.swipebox<?php echo $Total_Soft_Gallery_Video;?>=function(elem,options){
						var defaults={useCSS:true,initialIndexOnArray:0,hideBarsDelay:3e3,videoMaxWidth:1140,vimeoColor:"CCCCCC",beforeOpen:null,afterClose:null},plugin=this,elements=[],elem=elem,selector=elem.selector,$selector=$(selector),isTouch=document.createTouch!==undefined||"ontouchstart"in window||"onmsgesturechange"in window||navigator.msMaxTouchPoints,supportSVG=!!window.SVGSVGElement,winWidth=window.innerWidth?window.innerWidth:$(window).width(),winHeight=window.innerHeight?window.innerHeight:$(window).height(),html='<div id="swipebox<?php echo $Total_Soft_Gallery_Video;?>-overlay"><div id="swipebox<?php echo $Total_Soft_Gallery_Video;?>-slider"></div><div id="swipebox<?php echo $Total_Soft_Gallery_Video;?>-caption"></div><div id="swipebox<?php echo $Total_Soft_Gallery_Video;?>-action"><i id="swipebox<?php echo $Total_Soft_Gallery_Video;?>-close" class="'+jQuery(".TotalSoft_JGV_PS_DIcT").val()+'"></i><i id="swipebox<?php echo $Total_Soft_Gallery_Video;?>-prev" class="'+jQuery(".TotalSoft_PS_Left_Icon").val()+'"></i><i id="swipebox<?php echo $Total_Soft_Gallery_Video;?>-next" class="'+jQuery(".TotalSoft_PS_Right_Icon").val()+'"></i></div></div>';plugin.settings={};plugin.init=function(){plugin.settings=$.extend({},defaults,options);if($.isArray(elem)){elements=elem;ui.target=$(window);ui.init(plugin.settings.initialIndexOnArray)}else{$selector.click(function(e){elements=[];var index,relType,relVal;if(!relVal){relType="rel";relVal=$(this).attr(relType)}if(relVal&&relVal!==""&&relVal!=="nofollow"){$elem=$selector.filter("["+relType+'="'+relVal+'"]')}else{$elem=$(selector)}$elem.each(function(){var title=null,href=null;if($(this).attr("name"))title=$(this).attr("name");if($(this).attr("href"))href=$(this).attr("href");elements.push({href:href,title:title})});index=$elem.index($(this));e.preventDefault();e.stopPropagation();ui.target=$(e.target);ui.init(index)})}};plugin.refresh=function(){if(!$.isArray(elem)){ui.destroy();$elem=$(selector);ui.actions()}};var ui={init:function(index){if(plugin.settings.beforeOpen)plugin.settings.beforeOpen();this.target.trigger("swipebox<?php echo $Total_Soft_Gallery_Video;?>-start");$.swipebox<?php echo $Total_Soft_Gallery_Video;?>.isOpen=true;this.build();this.openSlide(index);this.openMedia(index);this.preloadMedia(index+1);this.preloadMedia(index-1)},build:function(){var $this=this;$("body").append(html);if($this.doCssTrans()){$("#swipebox<?php echo $Total_Soft_Gallery_Video;?>-slider").css({"-webkit-transition":"left 0.4s ease","-moz-transition":"left 0.4s ease","-o-transition":"left 0.4s ease","-khtml-transition":"left 0.4s ease",transition:"left 0.4s ease"});$("#swipebox<?php echo $Total_Soft_Gallery_Video;?>-overlay").css({"-webkit-transition":"opacity 1s ease","-moz-transition":"opacity 1s ease","-o-transition":"opacity 1s ease","-khtml-transition":"opacity 1s ease",transition:"opacity 1s ease"});$("#swipebox<?php echo $Total_Soft_Gallery_Video;?>-action, #swipebox<?php echo $Total_Soft_Gallery_Video;?>-caption").css({"-webkit-transition":"0.5s","-moz-transition":"0.5s","-o-transition":"0.5s","-khtml-transition":"0.5s",transition:"0.5s"})}if(supportSVG){var bg=$("#swipebox<?php echo $Total_Soft_Gallery_Video;?>-action #swipebox<?php echo $Total_Soft_Gallery_Video;?>-close").css("background-image");bg=bg.replace("png","svg");$("#swipebox<?php echo $Total_Soft_Gallery_Video;?>-action #swipebox<?php echo $Total_Soft_Gallery_Video;?>-prev,#swipebox<?php echo $Total_Soft_Gallery_Video;?>-action #swipebox<?php echo $Total_Soft_Gallery_Video;?>-next,#swipebox<?php echo $Total_Soft_Gallery_Video;?>-action #swipebox<?php echo $Total_Soft_Gallery_Video;?>-close").css({"background-image":bg})}$.each(elements,function(){$("#swipebox<?php echo $Total_Soft_Gallery_Video;?>-slider").append('<div class="slide"></div>')});$this.setDim();$this.actions();$this.keyboard();$this.gesture();$this.animBars();$this.resize()},setDim:function(){var width,height,sliderCss={};if("onorientationchange"in window){window.addEventListener("orientationchange",function(){if(window.orientation==0){width=winWidth;height=winHeight}else if(window.orientation==90||window.orientation==-90){width=winHeight;height=winWidth}},false)}else{width=window.innerWidth?window.innerWidth:$(window).width();height=window.innerHeight?window.innerHeight:$(window).height()}sliderCss={width:width,height:height};$("#swipebox<?php echo $Total_Soft_Gallery_Video;?>-overlay").css(sliderCss)},resize:function(){var $this=this;$(window).resize(function(){$this.setDim()}).resize()},supportTransition:function(){var prefixes="transition WebkitTransition MozTransition OTransition msTransition KhtmlTransition".split(" ");for(var i=0;i<prefixes.length;i++){if(document.createElement("div").style[prefixes[i]]!==undefined){return prefixes[i]}}return false},doCssTrans:function(){if(plugin.settings.useCSS&&this.supportTransition()){return true}},gesture:function(){if(isTouch){var $this=this,distance=null,swipMinDistance=10,startCoords={},endCoords={};var bars=$("#swipebox<?php echo $Total_Soft_Gallery_Video;?>-caption, #swipebox<?php echo $Total_Soft_Gallery_Video;?>-action");bars.addClass("visible-bars");$this.setTimeout();$("body").bind("touchstart",function(e){$(this).addClass("touching");endCoords=e.originalEvent.targetTouches[0];startCoords.pageX=e.originalEvent.targetTouches[0].pageX;$(".touching").bind("touchmove",function(e){e.preventDefault();e.stopPropagation();endCoords=e.originalEvent.targetTouches[0]});return false}).bind("touchend",function(e){e.preventDefault();e.stopPropagation();distance=endCoords.pageX-startCoords.pageX;if(distance>=swipMinDistance){$this.getPrev()}else if(distance<=-swipMinDistance){$this.getNext()}else{if(!bars.hasClass("visible-bars")){$this.showBars();$this.setTimeout()}else{$this.clearTimeout();$this.hideBars()}}$(".touching").off("touchmove").removeClass("touching")})}},setTimeout:function(){if(plugin.settings.hideBarsDelay>0){var $this=this;$this.clearTimeout();$this.timeout=window.setTimeout(function(){$this.hideBars()},plugin.settings.hideBarsDelay)}},clearTimeout:function(){window.clearTimeout(this.timeout);this.timeout=null},showBars:function(){
							var bars=$("#swipebox<?php echo $Total_Soft_Gallery_Video;?>-caption, #swipebox<?php echo $Total_Soft_Gallery_Video;?>-action");
							if(this.doCssTrans()){bars.addClass("visible-bars");
							var current = jQuery('.current');
							var x =jQuery(current[0].children[0].children[0]);
							x[0].children[0].controls = true;
							  }
								else{$("#swipebox<?php echo $Total_Soft_Gallery_Video;?>-caption").animate({top:0},500);$("#swipebox<?php echo $Total_Soft_Gallery_Video;?>-action").animate({bottom:0},500);setTimeout(function(){bars.addClass("visible-bars")},1e3)}},hideBars:function(){var bars=$("#swipebox<?php echo $Total_Soft_Gallery_Video;?>-caption, #swipebox<?php echo $Total_Soft_Gallery_Video;?>-action");if(this.doCssTrans()){bars.removeClass("visible-bars")}else{$("#swipebox<?php echo $Total_Soft_Gallery_Video;?>-caption").animate({top:"-50px"},500);$("#swipebox<?php echo $Total_Soft_Gallery_Video;?>-action").animate({bottom:"-50px"},500);setTimeout(function(){bars.removeClass("visible-bars")},1e3)}},animBars:function(){var $this=this;var bars=$("#swipebox<?php echo $Total_Soft_Gallery_Video;?>-caption, #swipebox<?php echo $Total_Soft_Gallery_Video;?>-action");bars.addClass("visible-bars");$this.setTimeout();$("#swipebox<?php echo $Total_Soft_Gallery_Video;?>-slider").click(function(e){if(!bars.hasClass("visible-bars")){$this.showBars();$this.setTimeout()}});$("#swipebox<?php echo $Total_Soft_Gallery_Video;?>-action").hover(function(){$this.showBars();bars.addClass("force-visible-bars");$this.clearTimeout()},function(){bars.removeClass("force-visible-bars");$this.setTimeout()})},keyboard:function(){var $this=this;$(window).bind("keyup",function(e){e.preventDefault();e.stopPropagation();if(e.keyCode==37){$this.getPrev()}else if(e.keyCode==39){$this.getNext()}else if(e.keyCode==27){$this.closeSlide()}})},actions:function(){var $this=this;if(elements.length<2){$("#swipebox<?php echo $Total_Soft_Gallery_Video;?>-prev, #swipebox<?php echo $Total_Soft_Gallery_Video;?>-next").hide()}else{
								$("#swipebox<?php echo $Total_Soft_Gallery_Video;?>-prev").bind("click touchend",function(e){var iframes=jQuery('.slide').find('iframe');jQuery(iframes).each(function(i,el){var src = jQuery(el).attr('src');jQuery(el).attr('src',src);});e.preventDefault();e.stopPropagation();$this.getPrev();$this.setTimeout()});
							$("#swipebox<?php echo $Total_Soft_Gallery_Video;?>-next").bind("click touchend",function(e){
							var iframes=jQuery('.slide').find('iframe');
							jQuery(iframes).each(function(i,el){
								var src = jQuery(el).attr('src');jQuery(el).attr('src',src);});
							 e.preventDefault();e.stopPropagation();$this.getNext();$this.setTimeout()})
						}
						$("#swipebox<?php echo $Total_Soft_Gallery_Video;?>-close").bind("click touchend",function(e){$this.closeSlide()})},setSlide:function(index,isFirst){isFirst=isFirst||false;var slider=$("#swipebox<?php echo $Total_Soft_Gallery_Video;?>-slider");if(this.doCssTrans()){slider.css({left:-index*100+"%"})}else{slider.animate({left:-index*100+"%"})}$("#swipebox<?php echo $Total_Soft_Gallery_Video;?>-slider .slide").removeClass("current");$("#swipebox<?php echo $Total_Soft_Gallery_Video;?>-slider .slide").eq(index).addClass("current");this.setTitle(index);if(isFirst){slider.fadeIn()}$("#swipebox<?php echo $Total_Soft_Gallery_Video;?>-prev, #swipebox<?php echo $Total_Soft_Gallery_Video;?>-next").removeClass("disabled"); if(index==0){$("#swipebox<?php echo $Total_Soft_Gallery_Video;?>-prev").addClass("disabled")}else if(index==elements.length-1){$("#swipebox<?php echo $Total_Soft_Gallery_Video;?>-next").addClass("disabled")}},openSlide:function(index){$("html").addClass("swipebox<?php echo $Total_Soft_Gallery_Video;?>");$(window).trigger("resize");this.setSlide(index,true)},preloadMedia:function(index){var $this=this,src=null;if(elements[index]!==undefined)src=elements[index].href;var r = src.replace('embed/','watch?v=');src=r;
							if(!$this.isVideo(src)){setTimeout(function(){$this.openMedia(index)},1e3)}else{$this.openMedia(index)}},openMedia:function(index){var $this=this,src=null;if(elements[index]!==undefined && elements[index].href!==null)src=elements[index].href;var r = src.replace('embed/','watch?v=');src=r;if(index<0||index>=elements.length){return false}if(!$this.isVideo(src)){$this.loadMedia(src,function(){$("#swipebox<?php echo $Total_Soft_Gallery_Video;?>-slider .slide").eq(index).html(this)})}else{$("#swipebox<?php echo $Total_Soft_Gallery_Video;?>-slider .slide").eq(index).html($this.getVideo(src))}},setTitle:function(index,isFirst){var title=null;$("#swipebox<?php echo $Total_Soft_Gallery_Video;?>-caption").empty();if(elements[index]!==undefined)title=elements[index].title;if(title){$("#swipebox<?php echo $Total_Soft_Gallery_Video;?>-caption").append(title)}},isVideo:function(src){if(src){if(src.match(/youtube\.com\/watch\?v=([a-zA-Z0-9\-_]+)/)||src.match(/vimeo\.com\/([0-9]*)/)||src.match(/wistia\.net\/([a-zA-Z0-9\-_]+)/)||src.indexOf('mp4')!=-1){return true;}}},getVideo:function(url,x){var iframe="";var output="";
							var youtubeUrl=url.match(/watch\?v=([a-zA-Z0-9\-_]+)/);
							var vimeoUrl=url.match(/vimeo\.com\/([0-9]*)/);
							var wistiaUrl=url.match(/wistia\.net\/([a-zA-Z0-9\-_]+)/);
							if(youtubeUrl){
							var s = youtubeUrl.input.replace('watch?v=', 'embed/');
							if(youtubeUrl.input.indexOf('start')===-1){
                                iframe='<iframe width="560" height="315" src="https://www.youtube.com/embed/'+youtubeUrl[1]+'?&rel=0;iv_load_policy=3" frameborder="0" allowfullscreen></iframe>'
							}else{
								iframe='<iframe width="560" height="315" src="'+s+'&mute=0&enablejsapi=1&rel=0&;iv_load_policy=3" frameborder="0" allowfullscreen></iframe>'
							}
							}
                            else if(url.indexOf("mp4")!=-1){
								iframe='<video class="videos" style="width: 100.5% !important;height: 100.5% !important;position: absolute;top: 0;left: 0;background: #ffffff;" controls name="media"><source src="'+url+'" type="video/mp4"></video>'
                            }
							 else if(vimeoUrl){iframe='<iframe width="560" height="315"  src="'+vimeoUrl.input+"?byline=0&amp;portrait=0&amp;color="+plugin.settings.vimeoColor+'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>'}
							 if (url.indexOf("wistia")!=-1){
							 	wistiaUrl = wistiaUrl.input;
								wistiaUrl = wistiaUrl.replace('watch?v=','embed/');
							 	iframe='<iframe width="560" height="315" src="'+wistiaUrl+'" allowtransparency="true" scrolling="no" frameborder="0" allowfullscreen></iframe>'}
							 return'<div class="swipebox<?php echo $Total_Soft_Gallery_Video;?>-video-container" style="max-width:'+plugin.settings.videomaxWidth+'px"><div class="swipebox<?php echo $Total_Soft_Gallery_Video;?>-video">'+iframe+"</div></div>"},loadMedia:function(src,callback){if(!this.isVideo(src)){var img=$("<img>").on("load",function(){callback.call(img)});img.attr("src",src)}},getNext:function(){
							 	var $this=this;index=$("#swipebox<?php echo $Total_Soft_Gallery_Video;?>-slider .slide").index($("#swipebox<?php echo $Total_Soft_Gallery_Video;?>-slider .slide.current"));
							 	if(index+1<elements.length){index++;$this.setSlide(index);$this.preloadMedia(index+1)}else{$("#swipebox<?php echo $Total_Soft_Gallery_Video;?>-slider").addClass("rightSpring");setTimeout(function(){$("#swipebox<?php echo $Total_Soft_Gallery_Video;?>-slider").removeClass("rightSpring")},500)}
							 },getPrev:function(){index=$("#swipebox<?php echo $Total_Soft_Gallery_Video;?>-slider .slide").index($("#swipebox<?php echo $Total_Soft_Gallery_Video;?>-slider .slide.current"));if(index>0){index--;this.setSlide(index);this.preloadMedia(index-1)}else{$("#swipebox<?php echo $Total_Soft_Gallery_Video;?>-slider").addClass("leftSpring");setTimeout(function(){$("#swipebox<?php echo $Total_Soft_Gallery_Video;?>-slider").removeClass("leftSpring")},500)}},closeSlide:function(){$("html").removeClass("swipebox<?php echo $Total_Soft_Gallery_Video;?>");$(window).trigger("resize");this.destroy()},destroy:function(){$(window).unbind("keyup");$("body").unbind("touchstart");$("body").unbind("touchmove");$("body").unbind("touchend");$("#swipebox<?php echo $Total_Soft_Gallery_Video;?>-slider").unbind();$("#swipebox<?php echo $Total_Soft_Gallery_Video;?>-overlay").remove();if(!$.isArray(elem))elem.removeData("_swipebox<?php echo $Total_Soft_Gallery_Video;?>");if(this.target)this.target.trigger("swipebox<?php echo $Total_Soft_Gallery_Video;?>-destroy");$.swipebox<?php echo $Total_Soft_Gallery_Video;?>.isOpen=false;if(plugin.settings.afterClose)plugin.settings.afterClose()}};plugin.init()};$.fn.swipebox<?php echo $Total_Soft_Gallery_Video;?>=function(options){if(!$.data(this,"_swipebox<?php echo $Total_Soft_Gallery_Video;?>")){var swipebox<?php echo $Total_Soft_Gallery_Video;?>=new $.swipebox<?php echo $Total_Soft_Gallery_Video;?>(this,options);this.data("_swipebox<?php echo $Total_Soft_Gallery_Video;?>",swipebox<?php echo $Total_Soft_Gallery_Video;?>)}return this.data("_swipebox<?php echo $Total_Soft_Gallery_Video;?>")}}(window,document,jQuery);
							 function func () {} 
				</script>
				<style>
					/*colorbox*/
					#colorbox<?php echo $Total_Soft_Gallery_Video;?>, #cboxOverlay<?php echo $Total_Soft_Gallery_Video;?>, #cboxWrapper<?php echo $Total_Soft_Gallery_Video;?>
					{
						position:absolute;
						top:0;
						left:0;
						z-index:9999;
						overflow:hidden;
					}
					#cboxWrapper<?php echo $Total_Soft_Gallery_Video;?> { max-width:none; }
					#cboxOverlay<?php echo $Total_Soft_Gallery_Video;?> { position:fixed; width:100%; height:100%; }
					#cboxMiddleLeft<?php echo $Total_Soft_Gallery_Video;?>, #cboxBottomLeft<?php echo $Total_Soft_Gallery_Video;?> { clear:left; }
					#cboxContent<?php echo $Total_Soft_Gallery_Video;?> { position:relative; }
					#cboxLoadedContent<?php echo $Total_Soft_Gallery_Video;?> { overflow:auto; -webkit-overflow-scrolling: touch; }
					#cboxTitle<?php echo $Total_Soft_Gallery_Video;?> { margin:0; }
					#cboxLoadingOverlay<?php echo $Total_Soft_Gallery_Video;?>, #cboxLoadingGraphic<?php echo $Total_Soft_Gallery_Video;?>
					{
						position:absolute;
						top:0;
						left:0;
						width:100%;
						height:100%;
					}
					#cboxPrevious<?php echo $Total_Soft_Gallery_Video;?>, #cboxNext<?php echo $Total_Soft_Gallery_Video;?>, #cboxClose<?php echo $Total_Soft_Gallery_Video;?>, #cboxSlideshow<?php echo $Total_Soft_Gallery_Video;?>
					{
						cursor:pointer;
					}
					.cboxPhoto<?php echo $Total_Soft_Gallery_Video;?> { float:left; margin:auto; border:0; display:block; max-width:none; -ms-interpolation-mode:bicubic; }
					.cboxIframe<?php echo $Total_Soft_Gallery_Video;?> { width:100%; height:100%; display:block; border:0; padding:0; margin:0; }
					#colorbox<?php echo $Total_Soft_Gallery_Video;?>, #cboxContent<?php echo $Total_Soft_Gallery_Video;?>, #cboxLoadedContent<?php echo $Total_Soft_Gallery_Video;?>
					{
						box-sizing:content-box;
						-moz-box-sizing:content-box;
						-webkit-box-sizing:content-box;
					}
					#cboxOverlay<?php echo $Total_Soft_Gallery_Video;?> { background:rgba(0,0,0,0.7); }
					#colorbox<?php echo $Total_Soft_Gallery_Video;?> { outline:0; }
					#cboxTopLeft<?php echo $Total_Soft_Gallery_Video;?> { width:0px; height:0px; background:#fff;display:none; }
					#cboxTopRight<?php echo $Total_Soft_Gallery_Video;?> { width:0px; height:0px; background:#fff;display:none; }
					#cboxBottomLeft<?php echo $Total_Soft_Gallery_Video;?> { width:0px; height:0px; background:#fff;display:none; }
					#cboxBottomRight<?php echo $Total_Soft_Gallery_Video;?> { width:0px; height:0px; background:#fff;display:none; }
					#cboxMiddleLeft<?php echo $Total_Soft_Gallery_Video;?> { width:0px; background:#fff;display:none; }
					#cboxMiddleRight<?php echo $Total_Soft_Gallery_Video;?> { width:0px; background:#fff;display:none; }
					#cboxTopCenter<?php echo $Total_Soft_Gallery_Video;?> { height:0px; background:#fff;display:none; }
					#cboxBottomCenter<?php echo $Total_Soft_Gallery_Video;?> { height:0px; background:#fff;display:none; }
					#cboxContent<?php echo $Total_Soft_Gallery_Video;?> { background:#fff; overflow:visible;border:15px solid red;border-radius:5px; }
					.cboxIframe<?php echo $Total_Soft_Gallery_Video;?> { background:#fff; }
					#cboxError { padding:50px; border:1px solid #ccc; }
					#cboxLoadedContent<?php echo $Total_Soft_Gallery_Video;?> {/* margin-bottom:28px;*/margin-top:0px !important; }
					#cboxTitle<?php echo $Total_Soft_Gallery_Video;?> { position:relative; top:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_32; ?>px; left:0; text-align:center; width:100%; color:#949494; }
					#cboxCurrent { position:absolute; bottom:4px; left:58px; color:#949494; }
					/* these elements are buttons, and may need to have additional styles reset to avoid unwanted base styles */
					#cboxPrevious<?php echo $Total_Soft_Gallery_Video;?>, #cboxNext<?php echo $Total_Soft_Gallery_Video;?>, #cboxSlideshow<?php echo $Total_Soft_Gallery_Video;?>, #cboxClose<?php echo $Total_Soft_Gallery_Video;?>
					{
						border:0;
						padding:0;
						margin:0;
						overflow:visible;
						width:auto;
						background:none;
					}
					/* avoid outlines on :active (mouseclick), but preserve outlines on :focus (tabbed navigating) */
					#cboxPrevious<?php echo $Total_Soft_Gallery_Video;?>:active, #cboxNext<?php echo $Total_Soft_Gallery_Video;?>:active, #cboxSlideshow<?php echo $Total_Soft_Gallery_Video;?>:active, #cboxClose<?php echo $Total_Soft_Gallery_Video;?>:active { outline:0; }
					#cboxSlideshow<?php echo $Total_Soft_Gallery_Video;?> { position:absolute; bottom:4px; right:30px; color:#0092ef; }
					#cboxPrevious<?php echo $Total_Soft_Gallery_Video;?> { position:absolute; top:calc(100% + <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_32;?>px); left:0; font-size:25px;opacity:0.7;color:red; display:inline !important; }
					#cboxPrevious<?php echo $Total_Soft_Gallery_Video;?>:hover { opacity:1; }
					#cboxNext<?php echo $Total_Soft_Gallery_Video;?> { position:absolute; top:calc(100% + <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_32;?>px); left:27px;font-size:25px;color:red;opacity:0.7; display:inline !important; }
					#cboxNext<?php echo $Total_Soft_Gallery_Video;?>:hover { opacity:1; }
					#cboxClose<?php echo $Total_Soft_Gallery_Video;?> { position:absolute; top:calc(100% + <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_32;?>px); right:0;color:red;font-size:25px;opacity:0.7; }
					#cboxClose<?php echo $Total_Soft_Gallery_Video;?>:hover { opacity:1; }
					.cboxIE #cboxTopLeft<?php echo $Total_Soft_Gallery_Video;?>, .cboxIE #cboxTopCenter<?php echo $Total_Soft_Gallery_Video;?>, .cboxIE #cboxTopRight<?php echo $Total_Soft_Gallery_Video;?>, .cboxIE #cboxBottomLeft<?php echo $Total_Soft_Gallery_Video;?>, .cboxIE #cboxBottomCenter<?php echo $Total_Soft_Gallery_Video;?>, .cboxIE #cboxBottomRight<?php echo $Total_Soft_Gallery_Video;?>, .cboxIE #cboxMiddleLeft<?php echo $Total_Soft_Gallery_Video;?>, .cboxIE #cboxMiddleRight<?php echo $Total_Soft_Gallery_Video;?>
					{
					    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#00FFFFFF,endColorstr=#00FFFFFF);
					}
					/*swipebox*/
					html.swipebox<?php echo $Total_Soft_Gallery_Video;?> { overflow: hidden!important; }
					#swipebox<?php echo $Total_Soft_Gallery_Video;?>-overlay img { border: none!important; }
					#swipebox<?php echo $Total_Soft_Gallery_Video;?>-overlay
					{
						width: 100%;
						height: 100%;
						position: fixed;
						top: 0;
						left: 0;
						z-index: 99999!important;
						overflow: hidden;
						-webkit-user-select: none;
						-moz-user-select: none;
						user-select: none;
					}
					#swipebox<?php echo $Total_Soft_Gallery_Video;?>-slider { height: 100%; left: 0; top: 0; width: 100%; white-space: nowrap; position: absolute; display: none; }
					#swipebox<?php echo $Total_Soft_Gallery_Video;?>-slider .slide
					{
						background: url("../Images/loading.gif") no-repeat center center;
						height: 100%;
						width: 100%;
						text-align: center;
						display: inline-block;
					}
					#swipebox<?php echo $Total_Soft_Gallery_Video;?>-slider .slide:before { content: ""; display: inline-block; height: 50%; width: 1px; margin-right: -1px; }
					#swipebox<?php echo $Total_Soft_Gallery_Video;?>-slider .slide img, #swipebox<?php echo $Total_Soft_Gallery_Video;?>-slider .slide .swipebox<?php echo $Total_Soft_Gallery_Video;?>-video-container
					{
						display: inline-block;
						max-height: 100%;
						max-width: 100%;
						margin: 0;
						padding: 0;
						width: auto;
						height: auto;
						vertical-align: middle;
					}
					#swipebox<?php echo $Total_Soft_Gallery_Video;?>-slider .slide .swipebox<?php echo $Total_Soft_Gallery_Video;?>-video-container
					{
						background:none;
						max-width: 1140px;
						max-height: 100%;
						width: 100%;
						padding:5%;
						box-sizing: border-box;
						-webkit-box-sizing: border-box;
						-moz-box-sizing: border-box;
					}
					#swipebox<?php echo $Total_Soft_Gallery_Video;?>-slider .slide .swipebox<?php echo $Total_Soft_Gallery_Video;?>-video-container .swipebox<?php echo $Total_Soft_Gallery_Video;?>-video
					{
						width: 100%;
						height: 0;
						padding-bottom: 56.25%;
						overflow: hidden;
						position: relative;
					}
					#swipebox<?php echo $Total_Soft_Gallery_Video;?>-slider .slide .swipebox<?php echo $Total_Soft_Gallery_Video;?>-video-container .swipebox<?php echo $Total_Soft_Gallery_Video;?>-video iframe
					{
						width: 100.5% !important;
						height: 100.5% !important;
						position: absolute;
						top: 0;
						left: 0;
						background: #ffffff;
					}
					#swipebox<?php echo $Total_Soft_Gallery_Video;?>-action, #swipebox<?php echo $Total_Soft_Gallery_Video;?>-caption
					{
						position: absolute;
						left: 0;
						z-index: 999;
						height: 50px;
						width: 100%;
					}
					#swipebox<?php echo $Total_Soft_Gallery_Video;?>-action { bottom: -50px; }
					#swipebox<?php echo $Total_Soft_Gallery_Video;?>-action.visible-bars { bottom: 0; }
					#swipebox<?php echo $Total_Soft_Gallery_Video;?>-action.force-visible-bars { bottom: 0!important; }
					#swipebox<?php echo $Total_Soft_Gallery_Video;?>-caption { top: -50px; text-align: center; }
					#swipebox<?php echo $Total_Soft_Gallery_Video;?>-caption.visible-bars { top: 0; }
					#swipebox<?php echo $Total_Soft_Gallery_Video;?>-caption.force-visible-bars { top: 0!important; }
					#swipebox<?php echo $Total_Soft_Gallery_Video;?>-action #swipebox<?php echo $Total_Soft_Gallery_Video;?>-prev, #swipebox<?php echo $Total_Soft_Gallery_Video;?>-action #swipebox<?php echo $Total_Soft_Gallery_Video;?>-next, #swipebox<?php echo $Total_Soft_Gallery_Video;?>-action #swipebox<?php echo $Total_Soft_Gallery_Video;?>-close
					{
						border: none!important;
						text-decoration: none!important;
						cursor: pointer;
						position: absolute;
						font-size:25px;
						color:#fff;
						top:50%;
						transform:translateY(-50%);
						-webkit-transform:translateY(-50%);
						-ms-transform:translateY(-50%);
						-moz-transform:translateY(-50%);
						-o-transform:translateY(-50%);
					}
					#swipebox<?php echo $Total_Soft_Gallery_Video;?>-action #swipebox<?php echo $Total_Soft_Gallery_Video;?>-close { background-position: 15px 12px; left: 40px; }
					#swipebox<?php echo $Total_Soft_Gallery_Video;?>-action #swipebox<?php echo $Total_Soft_Gallery_Video;?>-prev { background-position: -32px 13px; right: 100px; }
					#swipebox<?php echo $Total_Soft_Gallery_Video;?>-action #swipebox<?php echo $Total_Soft_Gallery_Video;?>-next { background-position: -78px 13px; right: 40px; }
					#swipebox<?php echo $Total_Soft_Gallery_Video;?>-action #swipebox<?php echo $Total_Soft_Gallery_Video;?>-prev.disabled, #swipebox<?php echo $Total_Soft_Gallery_Video;?>-action #swipebox<?php echo $Total_Soft_Gallery_Video;?>-next.disabled
					{
						filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=30);
						opacity: 0.3;
					}
					#swipebox<?php echo $Total_Soft_Gallery_Video;?>-slider.rightSpring { animation: rightSpring 0.3s; -moz-animation: rightSpring 0.3s; -webkit-animation: rightSpring 0.3s; }
					#swipebox<?php echo $Total_Soft_Gallery_Video;?>-slider.leftSpring { animation: leftSpring 0.3s; -moz-animation: leftSpring 0.3s; -webkit-animation: leftSpring 0.3s; }
					@keyframes rightSpring { 0% { margin-left: 0px; } 50% { margin-left: -30px; } 100% { margin-left: 0px; } }
					@keyframes leftSpring { 0% { margin-left: 0px; } 50% { margin-left: 30px; } 100% { margin-left: 0px; } }
					@-moz-keyframes rightSpring { 0% { margin-left: 0px; } 50% { margin-left: -30px; } 100% { margin-left: 0px; } }
					@-moz-keyframes leftSpring { 0% { margin-left: 0px; } 50% { margin-left: 30px; } 100% { margin-left: 0px; } }
					@-webkit-keyframes rightSpring { 0% { margin-left: 0px; } 50% { margin-left: -30px; } 100% { margin-left: 0px; } }
					@-webkit-keyframes leftSpring { 0% { margin-left: 0px; } 50% { margin-left: 30px; } 100% { margin-left: 0px; } }
					@media screen and (max-width: 800px)
					{
						#swipebox<?php echo $Total_Soft_Gallery_Video;?>-action #swipebox<?php echo $Total_Soft_Gallery_Video;?>-close { left: 0; }
						#swipebox<?php echo $Total_Soft_Gallery_Video;?>-action #swipebox<?php echo $Total_Soft_Gallery_Video;?>-prev { right: 60px; }
						#swipebox<?php echo $Total_Soft_Gallery_Video;?>-action #swipebox<?php echo $Total_Soft_Gallery_Video;?>-next { right: 0; }
					}
					/* Skin -------------------------*/
					#swipebox<?php echo $Total_Soft_Gallery_Video;?>-overlay { background:rgba(0,0,0,0.7); }
					#swipebox<?php echo $Total_Soft_Gallery_Video;?>-action, #swipebox<?php echo $Total_Soft_Gallery_Video;?>-caption
					{
						text-shadow: 1px 1px 1px black;
						background-color: #0d0d0d;
						background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #0d0d0d), color-stop(100%, #000000));
						background-image: -webkit-linear-gradient(#0d0d0d, #000000);
						background-image: -moz-linear-gradient(#0d0d0d, #000000);
						background-image: -o-linear-gradient(#0d0d0d, #000000);
						background-image: linear-gradient(#0d0d0d, #000000);
						filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=95);
						opacity: 0.95;
					}
					#swipebox<?php echo $Total_Soft_Gallery_Video;?>-action { border-top: 1px solid rgba(255, 255, 255, 0.2); }
					#swipebox<?php echo $Total_Soft_Gallery_Video;?>-caption { color: white!important; font-size: 15px; line-height: 43px; font-family: Helvetica, Arial, sans-serif; }
					.TotSoft_GV_Container { width:100%; text-align:center; }
					.TotSoft_GV_Container * { transform: translate3d(0, 0, 0); -moz-transform: translate3d(0, 0, 0); -webkit-transform: translate3d(0, 0, 0); perspective: 800px;}
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>
					{
						max-width:100%;
						border-radius:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_03; ?>px !important;
						border:none !important;
						box-shadow:<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06 == 1){ ?>0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_04; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_05; ?><?php }else{ ?>0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_04; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_04; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_05; ?> <?php } ?> !important;
						position:relative !important;
						display:inline-block;
						overflow:hidden !important;
						width:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02; ?>px !important;
						height:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01; ?>px !important;
						margin:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_08; ?>px !important;
						outline:none !important;
						perspective-origin:800px !important;
						-webkit-perspective-origin:800px !important;
						-ms-perspective-origin:800px !important;
						-moz-perspective-origin:800px !important;
						-o-perspective-origin:800px !important;
						transition:all 0s !important;
						-webkit-transition:all 0s !important;
						-ms-transition:all 0s !important;
						-moz-transition:all 0s !important;
						-o-transition:all 0s !important;
						opacity: 0;
						<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18 == 'moveUp'){ ?>
							-webkit-transform: translateY(200px);
							-moz-transform: translateY(200px);
							transform: translateY(200px);
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18 == 'scaleUp'){ ?>
							-webkit-transform: scale(0.6);
							-moz-transform: scale(0.6);
							transform: scale(0.6);
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18 == 'fallPerspective'){ ?>
							-webkit-transform-style: preserve-3d;
							-moz-transform-style: preserve-3d;
							transform-style: preserve-3d;
							-webkit-transform: translateZ(400px) translateY(300px) rotateX(-90deg);
							-moz-transform: translateZ(400px) translateY(300px) rotateX(-90deg);
							transform: translateZ(400px) translateY(300px) rotateX(-90deg);
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18 == 'fly'){ ?>
							-webkit-transform-style: preserve-3d;
							-moz-transform-style: preserve-3d;
							transform-style: preserve-3d;
							-webkit-transform-origin: 50% 50% -300px;
							-moz-transform-origin: 50% 50% -300px;
							transform-origin: 50% 50% -300px;
							-webkit-transform: rotateX(-180deg);
							-moz-transform: rotateX(-180deg);
							transform: rotateX(-180deg);
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18 == 'flip'){ ?>
							-webkit-transform-style: preserve-3d;
							-moz-transform-style: preserve-3d;
							transform-style: preserve-3d;
							-webkit-transform-origin: 0% 0%;
							-moz-transform-origin: 0% 0%;
							transform-origin: 0% 0%;
							-webkit-transform: rotateX(-80deg);
							-moz-transform: rotateX(-80deg);
							transform: rotateX(-80deg);
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18 == 'helix'){ ?>
							-webkit-transform-style: preserve-3d;
							-moz-transform-style: preserve-3d;
							transform-style: preserve-3d;
							-webkit-transform: rotateY(-180deg);
							-moz-transform: rotateY(-180deg);
							transform: rotateY(-180deg);
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18 == 'popUp'){ ?>
							-webkit-transform-style: preserve-3d;
							-moz-transform-style: preserve-3d;
							transform-style: preserve-3d;
							-webkit-transform: scale(0.4);
							-moz-transform: scale(0.4);
							transform: scale(0.4);
						<?php }?>
					}
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?> img { width:100% !important; height:100% !important; }
					.TotalSoft_HovLine1
					{
						position:absolute;
						border:0px solid red;
						width:90%;
						height:90%;
						top:50%;
						left:50%;
						z-index:9999;
						box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24; ?>;
						-moz-box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24; ?>;
						-webkit-box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24; ?>;
						box-sizing:border-box;
						-moz-box-sizing:border-box;
						-webkit-box-sizing:border-box;
						transform:translateY(-50%) translateX(-50%);
						-webkit-transform:translateY(-50%) translateX(-50%);
						-ms-transform:translateY(-50%) translateX(-50%);
						-moz-transform:translateY(-50%) translateX(-50%);
						-o-transform:translateY(-50%) translateX(-50%);
						transition:all 0.4s linear;
						-webkit-transition:all 0.4s linear;
						-ms-transition:all 0.4s linear;
						-moz-transition:all 0.4s linear;
						-o-transition:all 0.4s linear;
					}
					.TotalSoft_HovLine2
					{
						position:absolute;
						border:0px solid red;
						opacity:0;
						width:85%;
						height:85%;
						top:50%;
						left:50%;
						z-index:9999;
						box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24; ?>;
						-moz-box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24; ?>;
						-webkit-box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24; ?>;
						box-sizing:border-box;
						-moz-box-sizing:border-box;
						-webkit-box-sizing:border-box;
						transform:translateY(-50%) translateX(-50%);
						-webkit-transform:translateY(-50%) translateX(-50%);
						-ms-transform:translateY(-50%) translateX(-50%);
						-moz-transform:translateY(-50%) translateX(-50%);
						-o-transform:translateY(-50%) translateX(-50%);
						transition:all 0.3s linear;
						-webkit-transition:all 0.3s linear;
						-ms-transition:all 0.3s linear;
						-moz-transition:all 0.3s linear;
						-o-transition:all 0.3s linear;
					}
					.TotalSoft_HovLine3
					{
						position:absolute;
						border:0px solid red;
						opacity:0;
						width:105%;
						height:105%;
						top:50%;
						left:50%;
						z-index:9999;
						box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24; ?>;
						-moz-box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24; ?>;
						-webkit-box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24; ?>;
						box-sizing:border-box;
						-moz-box-sizing:border-box;
						-webkit-box-sizing:border-box;
						transform:translateY(-50%) translateX(-50%);
						-webkit-transform:translateY(-50%) translateX(-50%);
						-ms-transform:translateY(-50%) translateX(-50%);
						-moz-transform:translateY(-50%) translateX(-50%);
						-o-transform:translateY(-50%) translateX(-50%);
						transition:all 0.3s cubic-bezier(1,2.5,0.3,1.8);
						-webkit-transition:all 0.3s cubic-bezier(1,2.5,0.3,1.8);
						-ms-transition:all 0.3s cubic-bezier(1,2.5,0.3,1.8);
						-moz-transition:all 0.3s cubic-bezier(1,2.5,0.3,1.8);
						-o-transition:all 0.3s cubic-bezier(1,2.5,0.3,1.8);
					}
					.TotalSoft_HovLine4
					{
						position:absolute;
						border:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_21; ?>px solid <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22; ?>;
						opacity:0.5;
						width:100px;
						height:100px;
						border-radius:50%;
						top:100%;
						left:100%;
						z-index:9999;
						box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24; ?>;
						-moz-box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24; ?>;
						-webkit-box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24; ?>;
						box-sizing:border-box;
						-moz-box-sizing:border-box;
						-webkit-box-sizing:border-box;
						transform:translateY(-50%) translateX(-50%);
						-webkit-transform:translateY(-50%) translateX(-50%);
						-ms-transform:translateY(-50%) translateX(-50%);
						-moz-transform:translateY(-50%) translateX(-50%);
						-o-transform:translateY(-50%) translateX(-50%);
						transition:all 0.4s cubic-bezier(1,2.5,0.3,1.8);
						-webkit-transition:all 0.4s cubic-bezier(1,2.5,0.3,1.8);
						-ms-transition:all 0.4s cubic-bezier(1,2.5,0.3,1.8);
						-moz-transition:all 0.4s cubic-bezier(1,2.5,0.3,1.8);
						-o-transition:all 0.4s cubic-bezier(1,2.5,0.3,1.8);
					}
					.TotalSoft_HovLine5
					{
						position:absolute;
						border:0px solid red;
						width:90%;
						height:90%;
						top:50%;
						left:50%;
						z-index:9999;
						box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24; ?>;
						-moz-box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24; ?>;
						-webkit-box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24; ?>;
						box-sizing:border-box;
						-moz-box-sizing:border-box;
						-webkit-box-sizing:border-box;
						transform:translateY(-50%) translateX(-50%);
						-webkit-transform:translateY(-50%) translateX(-50%);
						-ms-transform:translateY(-50%) translateX(-50%);
						-moz-transform:translateY(-50%) translateX(-50%);
						-o-transform:translateY(-50%) translateX(-50%);
						transition:all 0.4s linear;
						-webkit-transition:all 0.4s linear;
						-ms-transition:all 0.4s linear;
						-moz-transition:all 0.4s linear;
						-o-transition:all 0.4s linear;
					}
					.TotalSoft_HovLine6, .TotalSoft_HovLine7, .TotalSoft_HovLine8, .TotalSoft_HovLine9, .TotalSoft_HovLine10, .TotalSoft_HovLine11
					{
						position:absolute;
						border:0px solid red;
						width:90%;
						height:90%;
						top:50%;
						left:50%;
						z-index:9999;
						box-sizing:border-box;
						-moz-box-sizing:border-box;
						-webkit-box-sizing:border-box;
						transform:translateY(-50%) translateX(-50%);
						-webkit-transform:translateY(-50%) translateX(-50%);
						-ms-transform:translateY(-50%) translateX(-50%);
						-moz-transform:translateY(-50%) translateX(-50%);
						-o-transform:translateY(-50%) translateX(-50%);
						transition:all 0.4s linear;
						-webkit-transition:all 0.4s linear;
						-ms-transition:all 0.4s linear;
						-moz-transition:all 0.4s linear;
						-o-transition:all 0.4s linear;
					}
					.TotalSoft_HovLine12
					{
						position:absolute;
						border:0px solid red;
						width:100%;
						height:100%;
						top:50%;
						left:50%;
						z-index:9999;
						box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24; ?>;
						-moz-box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24; ?>;
						-webkit-box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24; ?>;
						box-sizing:border-box;
						-moz-box-sizing:border-box;
						-webkit-box-sizing:border-box;
						transform:translateY(-50%) translateX(-50%);
						-webkit-transform:translateY(-50%) translateX(-50%);
						-ms-transform:translateY(-50%) translateX(-50%);
						-moz-transform:translateY(-50%) translateX(-50%);
						-o-transform:translateY(-50%) translateX(-50%);
						transition:all 0.4s linear;
						-webkit-transition:all 0.4s linear;
						-ms-transition:all 0.4s linear;
						-moz-transition:all 0.4s linear;
						-o-transition:all 0.4s linear;
					}
					.TotalSoft_HovLine4_1, .TotalSoft_HovLine4_2, .TotalSoft_HovLine4_3, .TotalSoft_HovLine4_4 { width:0px !important; height:0px !important; }
					.TotalSoft_HovLine1_1, .TotalSoft_HovLine2_1, .TotalSoft_HovLine3_1, .TotalSoft_HovLine5_1
					{
						position:absolute;
						width:100%;
						height:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_21; ?>px;
						top:0px;
						left:0px;
						background:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22; ?>;
					}
					.TotalSoft_HovLine1_2, .TotalSoft_HovLine2_2, .TotalSoft_HovLine3_2, .TotalSoft_HovLine5_2
					{
						position:absolute;
						width:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_21; ?>px;
						height:100%;
						top:0px;
						right:0px;
						background:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22; ?>;
					}
					.TotalSoft_HovLine1_3, .TotalSoft_HovLine2_3, .TotalSoft_HovLine3_3, .TotalSoft_HovLine5_3
					{
						position:absolute;
						width:100%;
						height:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_21; ?>px;
						bottom:0px;
						right:0px;
						background:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22; ?>;
					}
					.TotalSoft_HovLine1_4, .TotalSoft_HovLine2_4, .TotalSoft_HovLine3_4, .TotalSoft_HovLine5_4
					{
						position:absolute;
						width:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_21; ?>px;
						height:100%;
						bottom:0px;
						left:0px;
						background:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22; ?>;
					}
					.TotalSoft_HovLine6_1, .TotalSoft_HovLine8_1, .TotalSoft_HovLine9_1, .TotalSoft_HovLine12_1
					{
						position:absolute;
						width:0%;
						height:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_21; ?>px;
						top:0px;
						left:0px;
						background:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22; ?>;
						box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24; ?>;
						-moz-box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24; ?>;
						-webkit-box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24; ?>;
						transition:all 0.4s linear;
						-webkit-transition:all 0.4s linear;
						-ms-transition:all 0.4s linear;
						-moz-transition:all 0.4s linear;
						-o-transition:all 0.4s linear;
					}
					.TotalSoft_HovLine6_2, .TotalSoft_HovLine8_2, .TotalSoft_HovLine9_2, .TotalSoft_HovLine12_2
					{
						position:absolute;
						width:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_21; ?>px;
						height:0%;
						top:0px;
						right:0px;
						background:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22; ?>;
						box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24; ?>;
						-moz-box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24; ?>;
						-webkit-box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24; ?>;
						transition:all 0.4s linear;
						-webkit-transition:all 0.4s linear;
						-ms-transition:all 0.4s linear;
						-moz-transition:all 0.4s linear;
						-o-transition:all 0.4s linear;
					}
					.TotalSoft_HovLine6_3, .TotalSoft_HovLine8_3, .TotalSoft_HovLine9_3, .TotalSoft_HovLine12_3
					{
						position:absolute;
						width:0%;
						height:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_21; ?>px;
						bottom:0px;
						right:0px;
						background:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22; ?>;
						box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24; ?>;
						-moz-box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24; ?>;
						-webkit-box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24; ?>;
						transition:all 0.4s linear;
						-webkit-transition:all 0.4s linear;
						-ms-transition:all 0.4s linear;
						-moz-transition:all 0.4s linear;
						-o-transition:all 0.4s linear;
					}
					.TotalSoft_HovLine6_4, .TotalSoft_HovLine8_4, .TotalSoft_HovLine9_4, .TotalSoft_HovLine12_4
					{
						position:absolute;
						width:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_21; ?>px;
						height:0%;
						bottom:0px;
						left:0px;
						background:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22; ?>;
						box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24; ?>;
						-moz-box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24; ?>;
						-webkit-box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24; ?>;
						transition:all 0.4s linear;
						-webkit-transition:all 0.4s linear;
						-ms-transition:all 0.4s linear;
						-moz-transition:all 0.4s linear;
						-o-transition:all 0.4s linear;
					}
					.TotalSoft_HovLine7_1, .TotalSoft_HovLine10_1, .TotalSoft_HovLine11_1, .TotalSoft_HovLine13_1
					{
						position:absolute;
						width:0%;
						height:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_21; ?>px;
						top:0px;
						left:0px;
						background:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22; ?>;
						box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24; ?>;
						-moz-box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24; ?>;
						-webkit-box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24; ?>;
						transition:all 0.3s linear;
						-webkit-transition:all 0.3s linear;
						-ms-transition:all 0.3s linear;
						-moz-transition:all 0.3s linear;
						-o-transition:all 0.3s linear;
						transition-delay:0.6s;
						-webkit-transition-delay:0.6s;
						-ms-transition-delay:0.6s;
						-moz-transition-delay:0.6s;
						-o-transition-delay:0.6s;
					}
					.TotalSoft_HovLine7_2, .TotalSoft_HovLine10_2, .TotalSoft_HovLine11_2, .TotalSoft_HovLine13_2
					{
						position:absolute;
						width:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_21; ?>px;
						height:0%;
						top:0px;
						right:0px;
						background:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22; ?>;
						box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24; ?>;
						-moz-box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24; ?>;
						-webkit-box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24; ?>;
						transition:all 0.1s linear;
						-webkit-transition:all 0.1s linear;
						-ms-transition:all 0.1s linear;
						-moz-transition:all 0.1s linear;
						-o-transition:all 0.1s linear;
						transition-delay:0.5s;
						-webkit-transition-delay:0.5s;
						-ms-transition-delay:0.5s;
						-moz-transition-delay:0.5s;
						-o-transition-delay:0.5s;
					}
					.TotalSoft_HovLine7_3, .TotalSoft_HovLine10_3, .TotalSoft_HovLine11_3, .TotalSoft_HovLine13_3
					{
						position:absolute;
						width:0%;
						height:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_21; ?>px;
						bottom:0px;
						right:0px;
						background:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22; ?>;
						box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24; ?>;
						-moz-box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24; ?>;
						-webkit-box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24; ?>;
						transition:all 0.2s linear;
						-webkit-transition:all 0.2s linear;
						-ms-transition:all 0.2s linear;
						-moz-transition:all 0.2s linear;
						-o-transition:all 0.2s linear;
						transition-delay:0.3s;
						-webkit-transition-delay:0.3s;
						-ms-transition-delay:0.3s;
						-moz-transition-delay:0.3s;
						-o-transition-delay:0.3s;
					}
					.TotalSoft_HovLine7_4, .TotalSoft_HovLine10_4, .TotalSoft_HovLine11_4, .TotalSoft_HovLine13_4
					{
						position:absolute;
						width:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_21; ?>px;
						height:0%;
						bottom:0px;
						left:0px;
						background:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22; ?>;
						box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24; ?>;
						-moz-box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24; ?>;
						-webkit-box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24; ?>;
						transition:all 0.3s linear;
						-webkit-transition:all 0.3s linear;
						-ms-transition:all 0.3s linear;
						-moz-transition:all 0.3s linear;
						-o-transition:all 0.3s linear;
						transition-delay:0s;
						-webkit-transition-delay:0s;
						-ms-transition-delay:0s;
						-moz-transition-delay:0s;
						-o-transition-delay:0s;
					}
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_HovLine1 { transition:all 0s linear; -moz-transition:all 0s linear; -webkit-transition:all 0s linear; }
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_HovLine5 { transition:all 0s linear; -moz-transition:all 0s linear; -webkit-transition:all 0s linear; }
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_HovLine6 { transition:all 0s linear; -moz-transition:all 0s linear; -webkit-transition:all 0s linear; }
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_HovLine7 { transition:all 0s linear; -moz-transition:all 0s linear; -webkit-transition:all 0s linear; }
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_HovLine8 { transition:all 0s linear; -moz-transition:all 0s linear; -webkit-transition:all 0s linear; }
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_HovLine9 { transition:all 0s linear; -moz-transition:all 0s linear; -webkit-transition:all 0s linear; }
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_HovLine10 { transition:all 0s linear; -moz-transition:all 0s linear; -webkit-transition:all 0s linear; }
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_HovLine11 { transition:all 0s linear; -moz-transition:all 0s linear; -webkit-transition:all 0s linear; }
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_HovLine2 { opacity:1; width:90%; height:90%; }
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_HovLine3 { opacity:1; width:90%; height:90%; }
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_HovLine4 { opacity:1; top:50%; left:50%; }
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_HovLine6_1 { width:100%; }
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_HovLine6_2 { height:100%; }
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_HovLine6_3 { width:100%; }
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_HovLine6_4 { height:100%; }
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_HovLine8_1 { width:100%; }
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_HovLine8_2 { height:100%; }
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_HovLine8_3 { width:100%; }
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_HovLine8_4 { height:100%; }
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_HovLine9_1 { width:100%; }
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_HovLine9_2 { height:100%; }
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_HovLine9_3 { width:100%; }
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_HovLine9_4 { height:100%; }
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_HovLine12_1 { width:100%; }
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_HovLine12_2 { height:100%; }
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_HovLine12_3 { width:100%; }
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_HovLine12_4 { height:100%; }
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_HovLine7_1
					{
						width:100%;
						transition:all 0.3s linear;
						-webkit-transition:all 0.3s linear;
						-ms-transition:all 0.3s linear;
						-moz-transition:all 0.3s linear;
						-o-transition:all 0.3s linear;
						transition-delay:0s;
						-webkit-transition-delay:0s;
						-ms-transition-delay:0s;
						-moz-transition-delay:0s;
						-o-transition-delay:0s;
					}
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_HovLine7_2
					{
						height:100%;
						transition:all 0.3s linear;
						-webkit-transition:all 0.2s linear;
						-ms-transition:all 0.2s linear;
						-moz-transition:all 0.2s linear;
						-o-transition:all 0.2s linear;
						transition-delay:0.3s;
						-webkit-transition-delay:0.3s;
						-ms-transition-delay:0.3s;
						-moz-transition-delay:0.3s;
						-o-transition-delay:0.3s;
					}
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_HovLine7_3
					{
						width:100%;
						transition:all 0.1s linear;
						-webkit-transition:all 0.1s linear;
						-ms-transition:all 0.1s linear;
						-moz-transition:all 0.1s linear;
						-o-transition:all 0.1s linear;
						transition-delay:0.5s;
						-webkit-transition-delay:0.5s;
						-ms-transition-delay:0.5s;
						-moz-transition-delay:0.5s;
						-o-transition-delay:0.5s;
					}
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_HovLine7_4
					{
						height:100%;
						transition:all 0.3s linear;
						-webkit-transition:all 0.3s linear;
						-ms-transition:all 0.3s linear;
						-moz-transition:all 0.3s linear;
						-o-transition:all 0.3s linear;
						transition-delay:0.6s;
						-webkit-transition-delay:0.6s;
						-ms-transition-delay:0.6s;
						-moz-transition-delay:0.6s;
						-o-transition-delay:0.6s;
					}
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_HovLine10_1
					{
						width:100%;
						transition:all 0.3s linear;
						-webkit-transition:all 0.3s linear;
						-ms-transition:all 0.3s linear;
						-moz-transition:all 0.3s linear;
						-o-transition:all 0.3s linear;
						transition-delay:0s;
						-webkit-transition-delay:0s;
						-ms-transition-delay:0s;
						-moz-transition-delay:0s;
						-o-transition-delay:0s;
					}
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_HovLine10_2
					{
						height:100%;
						transition:all 0.3s linear;
						-webkit-transition:all 0.2s linear;
						-ms-transition:all 0.2s linear;
						-moz-transition:all 0.2s linear;
						-o-transition:all 0.2s linear;
						transition-delay:0.3s;
						-webkit-transition-delay:0.3s;
						-ms-transition-delay:0.3s;
						-moz-transition-delay:0.3s;
						-o-transition-delay:0.3s;
					}
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_HovLine10_3
					{
						width:100%;
						transition:all 0.1s linear;
						-webkit-transition:all 0.1s linear;
						-ms-transition:all 0.1s linear;
						-moz-transition:all 0.1s linear;
						-o-transition:all 0.1s linear;
						transition-delay:0.5s;
						-webkit-transition-delay:0.5s;
						-ms-transition-delay:0.5s;
						-moz-transition-delay:0.5s;
						-o-transition-delay:0.5s;
					}
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_HovLine10_4
					{
						height:100%;
						transition:all 0.3s linear;
						-webkit-transition:all 0.3s linear;
						-ms-transition:all 0.3s linear;
						-moz-transition:all 0.3s linear;
						-o-transition:all 0.3s linear;
						transition-delay:0.6s;
						-webkit-transition-delay:0.6s;
						-ms-transition-delay:0.6s;
						-moz-transition-delay:0.6s;
						-o-transition-delay:0.6s;
					}
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_HovLine11_1
					{
						width:100%;
						transition:all 0.3s linear;
						-webkit-transition:all 0.3s linear;
						-ms-transition:all 0.3s linear;
						-moz-transition:all 0.3s linear;
						-o-transition:all 0.3s linear;
						transition-delay:0s;
						-webkit-transition-delay:0s;
						-ms-transition-delay:0s;
						-moz-transition-delay:0s;
						-o-transition-delay:0s;
					}
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_HovLine11_2
					{
						height:100%;
						transition:all 0.3s linear;
						-webkit-transition:all 0.2s linear;
						-ms-transition:all 0.2s linear;
						-moz-transition:all 0.2s linear;
						-o-transition:all 0.2s linear;
						transition-delay:0.3s;
						-webkit-transition-delay:0.3s;
						-ms-transition-delay:0.3s;
						-moz-transition-delay:0.3s;
						-o-transition-delay:0.3s;
					}
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_HovLine11_3
					{
						width:100%;
						transition:all 0.1s linear;
						-webkit-transition:all 0.1s linear;
						-ms-transition:all 0.1s linear;
						-moz-transition:all 0.1s linear;
						-o-transition:all 0.1s linear;
						transition-delay:0.5s;
						-webkit-transition-delay:0.5s;
						-ms-transition-delay:0.5s;
						-moz-transition-delay:0.5s;
						-o-transition-delay:0.5s;
					}
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_HovLine11_4
					{
						height:100%;
						transition:all 0.3s linear;
						-webkit-transition:all 0.3s linear;
						-ms-transition:all 0.3s linear;
						-moz-transition:all 0.3s linear;
						-o-transition:all 0.3s linear;
						transition-delay:0.6s;
						-webkit-transition-delay:0.6s;
						-ms-transition-delay:0.6s;
						-moz-transition-delay:0.6s;
						-o-transition-delay:0.6s;
					}
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_HovLine13_1
					{
						width:100%;
						transition:all 0.3s linear;
						-webkit-transition:all 0.3s linear;
						-ms-transition:all 0.3s linear;
						-moz-transition:all 0.3s linear;
						-o-transition:all 0.3s linear;
						transition-delay:0s;
						-webkit-transition-delay:0s;
						-ms-transition-delay:0s;
						-moz-transition-delay:0s;
						-o-transition-delay:0s;
					}
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_HovLine13_2
					{
						height:100%;
						transition:all 0.3s linear;
						-webkit-transition:all 0.2s linear;
						-ms-transition:all 0.2s linear;
						-moz-transition:all 0.2s linear;
						-o-transition:all 0.2s linear;
						transition-delay:0.3s;
						-webkit-transition-delay:0.3s;
						-ms-transition-delay:0.3s;
						-moz-transition-delay:0.3s;
						-o-transition-delay:0.3s;
					}
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_HovLine13_3
					{
						width:100%;
						transition:all 0.1s linear;
						-webkit-transition:all 0.1s linear;
						-ms-transition:all 0.1s linear;
						-moz-transition:all 0.1s linear;
						-o-transition:all 0.1s linear;
						transition-delay:0.5s;
						-webkit-transition-delay:0.5s;
						-ms-transition-delay:0.5s;
						-moz-transition-delay:0.5s;
						-o-transition-delay:0.5s;
					}
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_HovLine13_4
					{
						height:100%;
						transition:all 0.3s linear;
						-webkit-transition:all 0.3s linear;
						-ms-transition:all 0.3s linear;
						-moz-transition:all 0.3s linear;
						-o-transition:all 0.3s linear;
						transition-delay:0.6s;
						-webkit-transition-delay:0.6s;
						-ms-transition-delay:0.6s;
						-moz-transition-delay:0.6s;
						-o-transition-delay:0.6s;
					}
					.TotalSoft_Title_Ef
					{
						perspective: 800px;
					}
					<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12!="0"){ ?>
						.TotalSoft_Title_Ef1,.TotalSoft_Title_Ef2,.TotalSoft_Title_Ef3,.TotalSoft_Title_Ef4
						{
							text-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_13;?> !important;
						}
					<?php }?>
					.TotalSoft_Title_Ef1
					{
						position:absolute;
						z-index:9999;
						color:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_11; ?> !important;
						font-size:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09; ?>px !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10; ?> !important;
						font-weight:800 !important;
						top:50%;
						left:50%;
						transform:translateY(-50%) translateX(-50%) translate3d(0, 0, 0);
						-webkit-transform:translateY(-50%) translateX(-50%) translate3d(0, 0, 0);
						-ms-transform:translateY(-50%) translateX(-50%) translate3d(0, 0, 0);
						-moz-transform:translateY(-50%) translateX(-50%) translate3d(0, 0, 0);
						-o-transform:translateY(-50%) translateX(-50%) translate3d(0, 0, 0);
						transition:transform 0.4s cubic-bezier(1,1.5,0.3,1.8);
						-webkit-transition:transform 0.4s cubic-bezier(1,1.5,0.3,1.8);
						-ms-transition:transform 0.4s cubic-bezier(1,1.5,0.3,1.8);
						-moz-transition:transform 0.4s cubic-bezier(1,1.5,0.3,1.8);
						-o-transition:transform 0.4s cubic-bezier(1,1.5,0.3,1.8);
					}
					.TotalSoft_Title_Ef2
					{
						position:absolute;
						z-index:9999;
						color:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_11; ?> !important;
						font-size:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09; ?>px !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10; ?> !important;
						font-weight:800 !important;
						top:50%;
						left:50%;
						transform:translateY(-50%) translateX(-50%) scale(0,0) translate3d(0, 0, 0);
						-webkit-transform:translateY(-50%) translateX(-50%) scale(0,0) translate3d(0, 0, 0);
						-ms-transform:translateY(-50%) translateX(-50%) scale(0,0) translate3d(0, 0, 0);
						-moz-transform:translateY(-50%) translateX(-50%) scale(0,0) translate3d(0, 0, 0);
						-o-transform:translateY(-50%) translateX(-50%) scale(0,0) translate3d(0, 0, 0);
						transition:transform 0.4s cubic-bezier(1,1.5,0.3,1.8);
						-webkit-transition:transform 0.4s cubic-bezier(1,1.5,0.3,1.8);
						-ms-transition:transform 0.4s cubic-bezier(1,1.5,0.3,1.8);
						-moz-transition:transform 0.4s cubic-bezier(1,1.5,0.3,1.8);
						-o-transition:transform 0.4s cubic-bezier(1,1.5,0.3,1.8);
					}
					.TotalSoft_Title_Ef3
					{
						position:absolute;
						z-index:9999;
						color:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_11; ?> !important;
						font-size:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09; ?>px !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10; ?> !important;
						font-weight:800 !important;
						top:50%;
						left:50%;
						transform:translateY(-50%) translateX(-50%) translate3d(0, 0, 0);
						-webkit-transform:translateY(-50%) translateX(-50%) translate3d(0, 0, 0);
						-ms-transform:translateY(-50%) translateX(-50%) translate3d(0, 0, 0);
						-moz-transform:translateY(-50%) translateX(-50%) translate3d(0, 0, 0);
						-o-transform:translateY(-50%) translateX(-50%) translate3d(0, 0, 0);
					}
					.TotalSoft_Title_Ef4
					{
						position:absolute;
						z-index:9999;
						color:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_11; ?> !important;
						font-size:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09; ?>px !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10; ?> !important;
						font-weight:800 !important;
						top:50%;
						left:50%;
						transform:translateY(-50%) translateX(-50%) translate3d(0, 0, 0);
						-webkit-transform:translateY(-50%) translateX(-50%) translate3d(0, 0, 0);
						-ms-transform:translateY(-50%) translateX(-50%) translate3d(0, 0, 0);
						-moz-transform:translateY(-50%) translateX(-50%) translate3d(0, 0, 0);
						-o-transform:translateY(-50%) translateX(-50%) translate3d(0, 0, 0);
						transition:transform 0.4s linear;
						-webkit-transition:transform 0.4s linear;
						-ms-transition:transform 0.4s linear;
						-moz-transition:transform 0.4s linear;
						-o-transition:transform 0.4s linear;
					}
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_Title_Ef1
					{
						transition:transform 0s linear;
						-moz-transition:transform 0s linear;
						-webkit-transition:transform 0s linear;
					}
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_Title_Ef2
					{
						transform:translateY(-50%) translateX(-50%) scale(1,1) translate3d(0, 0, 0);
						-moz-transform:translateY(-50%) translateX(-50%) scale(1,1) translate3d(0, 0, 0);
						-webkit-transform:translateY(-50%) translateX(-50%) scale(1,1) translate3d(0, 0, 0);
					}
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_Title_Ef4
					{
						transition:transform 0s linear;
						-moz-transition:transform 0s linear;
						-webkit-transition:transform 0s linear;
					}
					.TotalSoft_Hov_Overlay1
					{
						position:absolute;
						width:0%;
						height:0%;
						top:50%;
						left:50%;
						transform:translateY(-50%) translateX(-50%);
						-webkit-transform:translateY(-50%) translateX(-50%);
						-ms-transform:translateY(-50%) translateX(-50%);
						-moz-transform:translateY(-50%) translateX(-50%);
						-o-transform:translateY(-50%) translateX(-50%);
						background:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_25; ?> !important;
						transition:all 0.4s linear;
						-webkit-transition:all 0.4s linear;
						-ms-transition:all 0.4s linear;
						-moz-transition:all 0.4s linear;
						-o-transition:all 0.4s linear;
					}
					.TotalSoft_Hov_Overlay2
					{
						position:absolute;
						width:100%;
						height:100%;
						top:0%;
						left:0%;
						background:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_25; ?>;
						transition:all 0.4s linear;
						-webkit-transition:all 0.4s linear;
						-ms-transition:all 0.4s linear;
						-moz-transition:all 0.4s linear;
						-o-transition:all 0.4s linear;
					}
					.TotalSoft_Hov_Overlay3
					{
						position:absolute;
						width:0%;
						height:0%;
						top:50%;
						left:50%;
						transform:translateY(-50%) translateX(-50%);
						-webkit-transform:translateY(-50%) translateX(-50%);
						-ms-transform:translateY(-50%) translateX(-50%);
						-moz-transform:translateY(-50%) translateX(-50%);
						-o-transform:translateY(-50%) translateX(-50%);
						background:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_25; ?>;
						transition:all 0.4s linear;
						-webkit-transition:all 0.4s linear;
						-ms-transition:all 0.4s linear;
						-moz-transition:all 0.4s linear;
						-o-transition:all 0.4s linear;
					}
					.TotalSoft_Hov_Overlay4
					{
						position:absolute;
						width:100%;
						height:100%;
						top:50%;
						left:50%;
						transform:translateY(-50%) translateX(-50%);
						-webkit-transform:translateY(-50%) translateX(-50%);
						-ms-transform:translateY(-50%) translateX(-50%);
						-moz-transform:translateY(-50%) translateX(-50%);
						-o-transform:translateY(-50%) translateX(-50%);
						background:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_25; ?>;
						opacity:0 !important;
						transition:all 0.4s cubic-bezier(1,2.5,0.3,1.8);
						-webkit-transition:all 0.4s cubic-bezier(1,2.5,0.3,1.8);
						-ms-transition:all 0.4s cubic-bezier(1,2.5,0.3,1.8);
						-moz-transition:all 0.4s cubic-bezier(1,2.5,0.3,1.8);
						-o-transition:all 0.4s cubic-bezier(1,2.5,0.3,1.8);
					}
					.TotalSoft_Hov_Overlay5
					{
						position:absolute;
						width:100%;
						height:100%;
						top:0%;
						left:0%;
						background:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_25; ?>;
						transition:all 0.4s linear;
						-webkit-transition:all 0.4s linear;
						-ms-transition:all 0.4s linear;
						-moz-transition:all 0.4s linear;
						-o-transition:all 0.4s linear;
					}
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_Hov_Overlay1 { width:90% !important; height:90% !important; }
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_Hov_Overlay3 { width:100% !important; height:100% !important; }
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_Hov_Overlay4 { opacity:0.8 !important; }
					.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_Hov_Overlay5 { opacity:0 !important; }
					.line_TotalSoft
					{
						<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_20==1 || $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_20=='true') { ?>
							display:block !important;
						<?php }else{?>
							display:none !important;
						<?php } ?>
					}
					.Ov_TotalSoft
					{
						<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_27==1 || $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_27=='true') { ?>
							display:block !important;
						<?php }else{?>
							display:none !important;
						<?php } ?>
					}
					.TotalSoft_PI
					{
						font-size:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_17; ?>px !important;
						color:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_18; ?> !important;
					}
					#cboxOverlay<?php echo $Total_Soft_Gallery_Video;?>, #swipebox<?php echo $Total_Soft_Gallery_Video;?>-overlay
					{
					    background: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_28; ?> !important;
					}
					#swipebox<?php echo $Total_Soft_Gallery_Video;?>-caption
					{
						background:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_31; ?> !important;
						opacity:1 !important;
					}
					#swipebox<?php echo $Total_Soft_Gallery_Video;?>-slider .slide img, #cboxContent<?php echo $Total_Soft_Gallery_Video;?>, .swipebox<?php echo $Total_Soft_Gallery_Video;?>-video
					{
						border:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_32; ?>px solid <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_33; ?> !important;
						box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_34; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_35; ?> !important;
						-moz-box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_34; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_35; ?> !important;
						-webkit-box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_34; ?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_35; ?> !important;
						box-sizing: border-box;
						-moz-box-sizing: border-box;
						-webkit-box-sizing: border-box;
					}
					#swipebox<?php echo $Total_Soft_Gallery_Video;?>-slider .slide img
					{
						box-sizing:border-box !important;
						-moz-box-sizing:border-box !important;
						-webkit-box-sizing:border-box !important;
						margin-top:0px !important;
					}
					#cboxContent<?php echo $Total_Soft_Gallery_Video;?>, #swipebox<?php echo $Total_Soft_Gallery_Video;?>-action
					{
						background:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_36; ?> !important;
						opacity:1 !important;
					}
					#colorbox<?php echo $Total_Soft_Gallery_Video;?>, #cboxOverlay<?php echo $Total_Soft_Gallery_Video;?>, #cboxWrapper<?php echo $Total_Soft_Gallery_Video;?>
					{
						overflow:visible !important;
						max-width:100% !important;
					}
					#cboxContent<?php echo $Total_Soft_Gallery_Video;?>
					{
						max-width:calc(100% - <?php echo 2*$TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_32; ?>px);
					}
					#cboxTitle<?php echo $Total_Soft_Gallery_Video;?>, #swipebox<?php echo $Total_Soft_Gallery_Video;?>-caption
					{
						font-size:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_37; ?>px !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_38; ?> !important;
						color:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_39; ?> !important;
						bottom:0px !important;
					}
					#cboxTitle<?php echo $Total_Soft_Gallery_Video;?>
					{
						line-height:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_37+8; ?>px !important;
					}
					#cboxNext<?php echo $Total_Soft_Gallery_Video;?>,#cboxPrevious<?php echo $Total_Soft_Gallery_Video;?>,#cboxClose<?php echo $Total_Soft_Gallery_Video;?>, #swipebox<?php echo $Total_Soft_Gallery_Video;?>-close, #swipebox<?php echo $Total_Soft_Gallery_Video;?>-prev, #swipebox<?php echo $Total_Soft_Gallery_Video;?>-next
					{
						font-size:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_01; ?>px !important;
						color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_02; ?> !important;
					}
					<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_05 == '1'){ ?>
						#swipebox<?php echo $Total_Soft_Gallery_Video;?>-slider .slide, #cboxLoadedContent<?php echo $Total_Soft_Gallery_Video;?>
						{
							background: url("<?php echo plugins_url('../Images/loading1.gif',__FILE__);?>") no-repeat center center !important;
						}
					<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_05 == '2'){ ?>
						#swipebox<?php echo $Total_Soft_Gallery_Video;?>-slider .slide, #cboxLoadedContent<?php echo $Total_Soft_Gallery_Video;?>
						{
							background: url("<?php echo plugins_url('../Images/loading2.gif',__FILE__);?>") no-repeat center center !important;
						}
					<?php }else{ ?>
						#swipebox<?php echo $Total_Soft_Gallery_Video;?>-slider .slide, #cboxLoadedContent<?php echo $Total_Soft_Gallery_Video;?>
						{
							background: url("<?php echo plugins_url('../Images/loading.gif',__FILE__);?>") no-repeat center center !important;
						}
					<?php } ?>
					ul.pagination<?php echo $Total_Soft_Gallery_Video;?> li { border:none !important; list-style:none !important; }
					ul.pagination<?php echo $Total_Soft_Gallery_Video;?> li span
					{
						background-color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_08;?>;
						color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_09;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_10;?>px;
						font-family:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11;?>;
						height:auto !important;
						line-height: 1 !important;
						<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_09!='none'){ ?>
							border: 1px <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_16;?> <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_17;?> !important;
						<?php } else { ?>
							border: none !important;
						<?php }?>
						display:block;
					}
					ul.pagination<?php echo $Total_Soft_Gallery_Video;?> li span:hover:not(.active)
					{
						background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14;?>;
						color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_15;?>;
					}
					ul.pagination<?php echo $Total_Soft_Gallery_Video;?> li span.active
					{
						background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_12;?>;
						color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_13;?>;
					}
					.TotalSoftGV_PE_LM<?php echo $Total_Soft_Gallery_Video;?>
					{
						background-color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_08;?>;
						color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_09;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_10;?>px;
						font-family:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11;?>;
						<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_09!='none'){ ?>
							border: 1px <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_16;?> <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_17;?>;
						<?php } else { ?>
							border: none !important;
						<?php }?>
						cursor:pointer;
						display: block;
						padding: 3px !important;
						line-height: 1 !important;
					}
					.TotalSoftGV_PE_LM<?php echo $Total_Soft_Gallery_Video;?>:hover
					{
						background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14;?>;
						color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_15;?>;
					}
					@media screen and (max-width:820px)
					{
						ul.pagination<?php echo $Total_Soft_Gallery_Video;?> li span { cursor:default; }
						.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>
						{
							margin:<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_08; ?>px 0 !important;
						}
					}
					.TotSoft_GV_Container_<?php echo $Total_Soft_Gallery_Video;?>
					{
						<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18 == 'fallPerspective'){ ?>
							-webkit-perspective: 1300px;
							-moz-perspective: 1300px;
							perspective: 1300px;
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18 == 'fly'){ ?>
							-webkit-perspective: 1300px;
							-moz-perspective: 1300px;
							perspective: 1300px;
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18 == 'flip'){ ?>
							-webkit-perspective: 1300px;
							-moz-perspective: 1300px;
							perspective: 1300px;
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18 == 'helix'){ ?>
							-webkit-perspective: 1300px;
							-moz-perspective: 1300px;
							perspective: 1300px;
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18 == 'popUp'){ ?>
							-webkit-perspective: 1300px;
							-moz-perspective: 1300px;
							perspective: 1300px;
						<?php }?>
					}
					.TS_GV_PE_Loading_<?php echo $Total_Soft_Gallery_Video;?>
					{
						position: absolute;
						left: 0;
						top: 0;
						width: 100%;
						height: 100%;
						background: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_20;?>;
						z-index: 10;
						padding: 0;
						overflow: hidden !important;
						text-align: center;
					}
					.TS_GV_PE_Loading_<?php echo $Total_Soft_Gallery_Video;?> img
					{
						margin: 0 auto !important;
						position: relative;
						top: 50%;
						transform: translateY(-50%);
						-moz-transform: translateY(-50%);
						-webkit-transform: translateY(-50%);
					}
				</style>
				<div class="TotSoft_GV_Container-parent<?php echo $Total_Soft_Gallery_Video;?>" style="position: relative; width: 100%; float: left;">
					<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_19 != ''){ ?>
						<div class="TS_GV_PE_Loading_<?php echo $Total_Soft_Gallery_Video;?>">
							<img src="<?php echo plugins_url('../Images/Loading/loading' . $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_19 . '.gif',__FILE__);?>">
						</div>
					<?php }?>
					<div class="TotSoft_GV_Container TotSoft_GV_Container_<?php echo $Total_Soft_Gallery_Video;?> myExMul" id="swipeboxVideo_Totsoft">
						<?php for($i=0;$i<count($Total_Soft_GalleryV_Videos);$i++){ ?>
							<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL == '')
							{
								$TS_GV_PE_VSR = $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;
							}
							else
							{
								if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_29==1)
								{
                                    $str = $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL;
									$TS_GV_PE_VSR = $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_Video;
									$TS_GV_PE_VSRST = $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL;
								}
								else{ $TS_GV_PE_VSR = $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL; }
							}?>
							<?php if($Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType=='All'){ ?>
								<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_29==1) { ?>
									<a id="TotalSoft_GV_PE_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i+1;?>" class="TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?> <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_07; ?> swipebox<?php echo $Total_Soft_Gallery_Video;?>-video-TotSoft<?php echo $Total_Soft_Gallery_Video; ?>" href="<?php echo $TS_GV_PE_VSRST;?>" name="<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>" datah="<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL);?>">
										<img class="TotalSoft_HZ2" alt="<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>" src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>" />
										<span style="display:inline-block;" class="TotalSoft_Title_Ef <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_14; ?>">
											<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
											<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15==1 || $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15=='true') { ?>
												<br /><i class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16; ?> TotalSoft_PI"></i>
											<?php } ?>
										</span>
										<div class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19; ?> line_TotalSoft">
											<div class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19; ?>_1"></div>
											<div class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19; ?>_2"></div>
											<div class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19; ?>_3"></div>
											<div class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19; ?>_4"></div>
										</div>
										<div class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_26; ?> Ov_TotalSoft"></div>
									</a>
								<?php }else{ ?>
									<a id="TotalSoft_GV_PE_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i+1;?>" class="TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?> <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_07; ?> swipebox<?php echo $Total_Soft_Gallery_Video;?>-video-TotSoft<?php echo $Total_Soft_Gallery_Video; ?>" href="<?php echo $TS_GV_PE_VSRST;?>" name="<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>">
										<img class="TotalSoft_HZ2" alt="<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>" src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>" />
										<span style="display:inline-block;" class="TotalSoft_Title_Ef <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_14; ?>">
											<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
											<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15==1 || $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15=='true') { ?>
											<br /><i class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16; ?> TotalSoft_PI"></i>
											<?php } ?>
										</span>
										<div class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19; ?> line_TotalSoft">
											<div class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19; ?>_1"></div>
											<div class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19; ?>_2"></div>
											<div class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19; ?>_3"></div>
											<div class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19; ?>_4"></div>
										</div>
										<div class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_26; ?> Ov_TotalSoft"></div>
									</a>
								<?php } ?>
							<?php }else{ ?>
								<?php if($i<$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage){ ?>
									<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_29==1) { ?>
										<a id="TotalSoft_GV_PE_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i+1;?>" class="TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?> <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_07; ?> swipebox<?php echo $Total_Soft_Gallery_Video;?>-video-TotSoft<?php echo $Total_Soft_Gallery_Video; ?>" href="<?php echo $TS_GV_PE_VSRST;?>" name="<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>">
											<img class="TotalSoft_HZ2" alt="<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>" src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>" />
											<span style="display:inline-block;" class="TotalSoft_Title_Ef <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_14; ?>">
												<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
												<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15==1 || $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15=='true') { ?>
												<br /><i class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16; ?> TotalSoft_PI"></i>
												<?php } ?>
											</span>
											<div class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19; ?> line_TotalSoft">
												<div class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19; ?>_1"></div>
												<div class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19; ?>_2"></div>
												<div class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19; ?>_3"></div>
												<div class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19; ?>_4"></div>
											</div>
											<div class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_26; ?> Ov_TotalSoft"></div>
										</a>
									<?php }else{?>
										<a id="TotalSoft_GV_PE_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i+1;?>" class="TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?> <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_07; ?> swipebox<?php echo $Total_Soft_Gallery_Video;?>-video-TotSoft<?php echo $Total_Soft_Gallery_Video; ?>" href="<?php echo $TS_GV_PE_VSRST;?>" name="<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>">
											<img class="TotalSoft_HZ2" alt="<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>" src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>" />
											<span style="display:inline-block;" class="TotalSoft_Title_Ef <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_14; ?>">
												<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
												<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15==1 || $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15=='true') { ?>
												<br /><i class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16; ?> TotalSoft_PI"></i>
												<?php } ?>
											</span>
											<div class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19; ?> line_TotalSoft">
												<div class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19; ?>_1"></div>
												<div class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19; ?>_2"></div>
												<div class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19; ?>_3"></div>
												<div class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19; ?>_4"></div>
											</div>
											<div class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_26; ?> Ov_TotalSoft"></div>
										</a>
									<?php } ?>
								<?php }else{ ?>
									<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_29==1) { ?>
										<a id="TotalSoft_GV_PE_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i+1;?>" style="display:none;" class="noshow1 TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?> <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_07; ?> swipebox<?php echo $Total_Soft_Gallery_Video;?>-video-TotSoft<?php echo $Total_Soft_Gallery_Video; ?>" href="<?php echo $TS_GV_PE_VSRST;?>" name="<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>">
											<img class="TotalSoft_HZ2" alt="<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>" src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>" />
											<span style="display:inline-block;" class="TotalSoft_Title_Ef <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_14; ?>">
												<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
												<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15==1 || $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15=='true') { ?>
												<br /><i class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16; ?> TotalSoft_PI"></i>
												<?php } ?>
											</span>
											<div class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19; ?> line_TotalSoft">
												<div class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19; ?>_1"></div>
												<div class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19; ?>_2"></div>
												<div class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19; ?>_3"></div>
												<div class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19; ?>_4"></div>
											</div>
											<div class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_26; ?> Ov_TotalSoft"></div>
										</a>
									<?php }else{ ?>
										<a id="TotalSoft_GV_PE_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i+1;?>" style="display:none;" class="noshow1 TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?> <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_07; ?> swipebox<?php echo $Total_Soft_Gallery_Video;?>-video-TotSoft<?php echo $Total_Soft_Gallery_Video; ?>" href="<?php echo $TS_GV_PE_VSRST;?>" name="<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>">
											<img class="TotalSoft_HZ2" alt="<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>" src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>" />
											<span style="display:inline-block;" class="TotalSoft_Title_Ef <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_14; ?>">
												<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
												<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15==1 || $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15=='true') { ?>
												<br /><i class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16; ?> TotalSoft_PI"></i>
												<?php } ?>
											</span>
											<div class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19; ?> line_TotalSoft">
												<div class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19; ?>_1"></div>
												<div class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19; ?>_2"></div>
												<div class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19; ?>_3"></div>
												<div class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19; ?>_4"></div>
											</div>
											<div class="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_26; ?> Ov_TotalSoft"></div>
										</a>
						<?php } } } }?>
					</div>
					<?php if($Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType=='Pagination'){ ?>
						<div class="TotalSoftcenter">
							<ul class="pagination pagination<?php echo $Total_Soft_Gallery_Video;?>" style='margin:0px;padding:0px;'>
								<li onclick="Total_Soft_GV_PE_PageP('<?php echo $Total_Soft_Gallery_Video;?>', '<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>')"><span><?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_07;?></span></li>
								<?php for($i=1;$i<=ceil(count($Total_Soft_GalleryV_Videos)/$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage);$i++){ ?>
									<?php if($i==1){ ?>
										<li id="TotalSoft_GV_PE_PLi_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i;?>" onclick="Total_Soft_GV_PE_Page('<?php echo $Total_Soft_Gallery_Video;?>','<?php echo $i?>','<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>')"><span class="active"><?php echo $i;?></span></li>
										<?php } else { ?>
										<li id="TotalSoft_GV_PE_PLi_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i;?>" onclick="Total_Soft_GV_PE_Page('<?php echo $Total_Soft_Gallery_Video;?>','<?php echo $i?>','<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>')"><span><?php echo $i;?></span></li>
										<?php }?>
								<?php }?>
									<li onclick="Total_Soft_GV_PE_PageN('<?php echo $Total_Soft_Gallery_Video;?>', '<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>', '<?php echo ceil(count($Total_Soft_GalleryV_Videos)/$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage);?>')"><span><?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_06;?></span></li>
							</ul>
						</div>
					<?php }?>
					<?php if($Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType=='Load'){ ?>
						<div class="TotalSoftcenter" id="TotalSoft_VG_PE_PageDiv_<?php echo $Total_Soft_Gallery_Video;?>">
							<span class="TotalSoftGV_PE_LM TotalSoftGV_PE_LM<?php echo $Total_Soft_Gallery_Video;?>" onclick="Total_Soft_GV_PE_PageLM('<?php echo $Total_Soft_Gallery_Video;?>', '<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>', '<?php echo ceil(count($Total_Soft_GalleryV_Videos)/$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage);?>')"><?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_LoadMore;?></span>
							<input type="text" style="display:none;" id="TotalSoft_VG_PE_Page_<?php echo $Total_Soft_Gallery_Video;?>" value="1">
						</div>
					<?php } ?>
				</div>
				<input type="text" style="display:none;" class="TotalSoft_JGV_P_T<?php echo $Total_Soft_Gallery_Video; ?>" value="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_29; ?>">
				<input type="text" style="display:none;" class="TotalSoft_PS_Left_Icon" value="<?php echo $TotalSoft_PS_Left_Icon; ?>">
				<input type="text" style="display:none;" class="TotalSoft_PS_Right_Icon" value="<?php echo $TotalSoft_PS_Right_Icon; ?>">
				<input type="text" style="display:none;" class="TotalSoft_JGV_PS_DIcT" value="<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_04; ?>">
				<input type="text" style="display:none;" class="TotalSoft_JGV_P1S_ET<?php echo $Total_Soft_Gallery_Video; ?>" value="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_30; ?>">
				<input type='text' style="display:none;" class="TS_VG_PE_AE_<?php echo $Total_Soft_Gallery_Video;?>" value="<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18;?>">
				<script>
					jQuery(document).ready(function(){
						var array_images<?php echo $Total_Soft_Gallery_Video;?>=[];
						jQuery('.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>').each(function(){
							if( jQuery(this).find('img').attr("src") != "" ) { array_images<?php echo $Total_Soft_Gallery_Video;?>.push(jQuery(this).find('img').attr("src")); }
						})
						var y_images<?php echo $Total_Soft_Gallery_Video;?>=0;
						jQuery('.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>').each(function(i){
							jQuery(this).find('img').attr('src', array_images<?php echo $Total_Soft_Gallery_Video;?>[i]).on("load",function(){
								y_images<?php echo $Total_Soft_Gallery_Video;?>++;
								if(y_images<?php echo $Total_Soft_Gallery_Video;?> == array_images<?php echo $Total_Soft_Gallery_Video;?>.length)
								{
									jQuery('.TS_GV_PE_Loading_<?php echo $Total_Soft_Gallery_Video;?>').css('display','none');
								}
							})
						})

						var TotalSoft_JGV_P_T<?php echo $Total_Soft_Gallery_Video; ?> = jQuery('.TotalSoft_JGV_P_T<?php echo $Total_Soft_Gallery_Video; ?>').val();
							TotalSoft_JGV_P1S_ET<?php echo $Total_Soft_Gallery_Video; ?> = jQuery('.TotalSoft_JGV_P1S_ET<?php echo $Total_Soft_Gallery_Video; ?>').val();
						var total_soft_gallery_video = jQuery('.TotSoft_GV_Container').parent().parent();
						jQuery(total_soft_gallery_video).css({'padding-left':'0','padding-right':'20px'});
						if(TotalSoft_JGV_P_T<?php echo $Total_Soft_Gallery_Video; ?>==1)
						{
							jQuery('.swipebox<?php echo $Total_Soft_Gallery_Video;?>-video-TotSoft<?php echo $Total_Soft_Gallery_Video; ?>').swipebox<?php echo $Total_Soft_Gallery_Video;?>();
						}
						else
						{
							jQuery('.swipebox<?php echo $Total_Soft_Gallery_Video;?>-video-TotSoft<?php echo $Total_Soft_Gallery_Video; ?>').colorbox<?php echo $Total_Soft_Gallery_Video;?>({iframe:true,transition:TotalSoft_JGV_P1S_ET<?php echo $Total_Soft_Gallery_Video; ?>,innerWidth:jQuery(window).width()*0.7,innerHeight:jQuery(window).width()*0.7*0.6,maxWidth : "80%",maxHeight : "80%",current : "",rel:'slideshow', slideshow:false});
						}

						var delaytime = 0;
						var TS_VG_PE_AE = jQuery('.TS_VG_PE_AE_<?php echo $Total_Soft_Gallery_Video; ?>').val();

						jQuery('.TotSoft_GV_Container_<?php echo $Total_Soft_Gallery_Video;?> a.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>').each(function(){
							if(!jQuery(this).hasClass('noshow1'))
							{
								delaytime++;
								if(TS_VG_PE_AE == '')
								{
									jQuery(this).css({'display':'inline-block','opacity':'1'});
								}
								else if(TS_VG_PE_AE == 'fadeIn')
								{
									jQuery(this).css({'display':'inline-block','animation':'fadeIn 0.65s ease '+0.2*delaytime+'s forwards','-webkit-animation':'fadeIn 0.65s ease '+0.2*delaytime+'s forwards','-moz-animation':'fadeIn 0.65s ease '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_PE_AE == 'moveUp')
								{
									jQuery(this).css({'display':'inline-block','animation':'moveUp 0.65s ease '+0.2*delaytime+'s forwards','-webkit-animation':'moveUp 0.65s ease '+0.2*delaytime+'s forwards','-moz-animation':'moveUp 0.65s ease '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_PE_AE == 'scaleUp')
								{
									jQuery(this).css({'display':'inline-block','animation':'scaleUp 0.65s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'scaleUp 0.65s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'scaleUp 0.65s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_PE_AE == 'fallPerspective')
								{
									jQuery(this).css({'display':'inline-block','animation':'fallPerspective 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'fallPerspective 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'fallPerspective 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_PE_AE == 'fly')
								{
									jQuery(this).css({'display':'inline-block','animation':'fly 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'fly 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'fly 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_PE_AE == 'flip')
								{
									jQuery(this).css({'display':'inline-block','animation':'flip 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'flip 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'flip 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_PE_AE == 'helix')
								{
									jQuery(this).css({'display':'inline-block','animation':'helix 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'helix 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'helix 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_PE_AE == 'popUp')
								{
									jQuery(this).css({'display':'inline-block','animation':'popUp 0.8s ease-in '+0.2*delaytime+'s forwards','-webkit-animation':'popUp 0.8s ease-in '+0.2*delaytime+'s forwards','-moz-animation':'popUp 0.8s ease-in '+0.2*delaytime+'s forwards'});
								}
							}
						})
					})
					function TotalSoft_Hov_Anim(event){
						var img="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_07; ?>";
						var title="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_14; ?>";
						var line="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19; ?>";
						var overlay="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_26; ?>"
						jQuery('.TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>').each(function(){
							jQuery(this).on('hover',function(){
							},function(){
								if(img=="TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>1")
								{
									jQuery(".TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>1").css({"transform":"translateY(-50%) translateX(-50%)","-webkit-transform":"translateY(-50%) translateX(-50%)","-ms-transform":"translateY(-50%) translateX(-50%)","-moz-transform":"translateY(-50%) translateX(-50%)","-o-transform":"translateY(-50%) translateX(-50%)",})
									// jQuery(".TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>").css({"transform":"rotateX(0deg) rotateY(0deg)","-webkit-transform":"rotateX(0deg) rotateY(0deg)","-ms-transform":"rotateX(0deg) rotateY(0deg)","-moz-transform":"rotateX(0deg) rotateY(0deg)","-o-transform":"rotateX(0deg) rotateY(0deg)"});
								}
								else if(img=="TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>2")
								{
									jQuery(".TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>2").css({"transform":"translateY(-50%) translateX(-50%)","-webkit-transform":"translateY(-50%) translateX(-50%)","-ms-transform":"translateY(-50%) translateX(-50%)","-moz-transform":"translateY(-50%) translateX(-50%)","-o-transform":"translateY(-50%) translateX(-50%)",})
									// jQuery(".TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>").css({"transform":"rotateX(0deg) rotateY(0deg)","-webkit-transform":"rotateX(0deg) rotateY(0deg)","-ms-transform":"rotateX(0deg) rotateY(0deg)","-moz-transform":"rotateX(0deg) rotateY(0deg)","-o-transform":"rotateX(0deg) rotateY(0deg)"});
								}
								if(line=="TotalSoft_HovLine1")
								{
									jQuery(".TotalSoft_HovLine1").css({"transform":"translateY(-50%) translateX(-50%)","-webkit-transform":"translateY(-50%) translateX(-50%)","-ms-transform":"translateY(-50%) translateX(-50%)","-moz-transform":"translateY(-50%) translateX(-50%)","-o-transform":"translateY(-50%) translateX(-50%)",})
									// jQuery(".TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>").css({"transform":"rotateX(0deg) rotateY(0deg)","-webkit-transform":"rotateX(0deg) rotateY(0deg)","-ms-transform":"rotateX(0deg) rotateY(0deg)","-moz-transform":"rotateX(0deg) rotateY(0deg)","-o-transform":"rotateX(0deg) rotateY(0deg)"});
								}
								else if(line=="TotalSoft_HovLine5")
								{
									jQuery(".TotalSoft_HovLine5").css({"transform":"rotateX(0deg) rotateY(0deg) translateY(-50%) translateX(-50%)","-webkit-transform":"rotateX(0deg) rotateY(0deg) translateY(-50%) translateX(-50%)","-ms-transform":"rotateX(0deg) rotateY(0deg) translateY(-50%) translateX(-50%)","-moz-transform":"rotateX(0deg) rotateY(0deg) translateY(-50%) translateX(-50%)","-o-transform":"rotateX(0deg) rotateY(0deg) translateY(-50%) translateX(-50%)"})
								}
								else if(line=="TotalSoft_HovLine8")
								{
									jQuery(".TotalSoft_HovLine8").css({"transform":"translateY(-50%) translateX(-50%)","-webkit-transform":"translateY(-50%) translateX(-50%)","-ms-transform":"translateY(-50%) translateX(-50%)","-moz-transform":"translateY(-50%) translateX(-50%)","-o-transform":"translateY(-50%) translateX(-50%)",})
									// jQuery(".TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>").css({"transform":"rotateX(0deg) rotateY(0deg)","-webkit-transform":"rotateX(0deg) rotateY(0deg)","-ms-transform":"rotateX(0deg) rotateY(0deg)","-moz-transform":"rotateX(0deg) rotateY(0deg)","-o-transform":"rotateX(0deg) rotateY(0deg)"});
								}
								else if(line=="TotalSoft_HovLine9")
								{
									jQuery(".TotalSoft_HovLine9").css({"transform":"rotateX(0deg) rotateY(0deg) translateY(-50%) translateX(-50%)","-webkit-transform":"rotateX(0deg) rotateY(0deg) translateY(-50%) translateX(-50%)","-ms-transform":"rotateX(0deg) rotateY(0deg) translateY(-50%) translateX(-50%)","-moz-transform":"rotateX(0deg) rotateY(0deg) translateY(-50%) translateX(-50%)","-o-transform":"rotateX(0deg) rotateY(0deg) translateY(-50%) translateX(-50%)"})
								}
								else if(line=="TotalSoft_HovLine10")
								{
									jQuery(".TotalSoft_HovLine10").css({"transform":"translateY(-50%) translateX(-50%)","-webkit-transform":"translateY(-50%) translateX(-50%)","-ms-transform":"translateY(-50%) translateX(-50%)","-moz-transform":"translateY(-50%) translateX(-50%)","-o-transform":"translateY(-50%) translateX(-50%)",})
									// jQuery(".TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>").css({"transform":"rotateX(0deg) rotateY(0deg)","-webkit-transform":"rotateX(0deg) rotateY(0deg)","-ms-transform":"rotateX(0deg) rotateY(0deg)","-moz-transform":"rotateX(0deg) rotateY(0deg)","-o-transform":"rotateX(0deg) rotateY(0deg)"});
								}
								else if(line=="TotalSoft_HovLine11")
								{
									jQuery(".TotalSoft_HovLine11").css({"transform":"rotateX(0deg) rotateY(0deg) translateY(-50%) translateX(-50%)","-webkit-transform":"rotateX(0deg) rotateY(0deg) translateY(-50%) translateX(-50%)","-ms-transform":"rotateX(0deg) rotateY(0deg) translateY(-50%) translateX(-50%)","-moz-transform":"rotateX(0deg) rotateY(0deg) translateY(-50%) translateX(-50%)","-o-transform":"rotateX(0deg) rotateY(0deg) translateY(-50%) translateX(-50%)"})
								}
								if(title=="TotalSoft_Title_Ef1")
								{
									jQuery(".TotalSoft_Title_Ef1").css({"transform":"rotateX(0deg) rotateY(0deg) translateY(-50%) translateX(-50%) translate3d(0, 0, 0)","-webkit-transform":"rotateX(0deg) rotateY(0deg) translateY(-50%) translateX(-50%) translate3d(0, 0, 0)","-ms-transform":"rotateX(0deg) rotateY(0deg) translateY(-50%) translateX(-50%) translate3d(0, 0, 0)","-moz-transform":"rotateX(0deg) rotateY(0deg) translateY(-50%) translateX(-50%) translate3d(0, 0, 0)","-o-transform":"rotateX(0deg) rotateY(0deg) translateY(-50%) translateX(-50%) translate3d(0, 0, 0)"})
								}
								else if(title=="TotalSoft_Title_Ef4")
								{
									jQuery(".TotalSoft_Title_Ef4").css({"transform":"rotateX(0deg) rotateY(0deg) translateY(-50%) translateX(-50%) translate3d(0, 0, 0)","-webkit-transform":"rotateX(0deg) rotateY(0deg) translateY(-50%) translateX(-50%) translate3d(0, 0, 0)","-ms-transform":"rotateX(0deg) rotateY(0deg) translateY(-50%) translateX(-50%) translate3d(0, 0, 0)","-moz-transform":"rotateX(0deg) rotateY(0deg) translateY(-50%) translateX(-50%) translate3d(0, 0, 0)","-o-transform":"rotateX(0deg) rotateY(0deg) translateY(-50%) translateX(-50%) translate3d(0, 0, 0)"})
								}
							})
							jQuery(this).mousemove(function(event){
								event = event || window.event
								if(line=="TotalSoft_HovLine1")
								{
									jQuery(this).find(".TotalSoft_HovLine1").css({"transform":"translateY("+Math.floor(((event.pageY-jQuery(this).find(".TotalSoft_HovLine1").offset().top)/10-jQuery(this).height()/2))+"px) translateX("+Math.floor(((event.pageX-jQuery(this).find(".TotalSoft_HovLine1").offset().left)/10-jQuery(this).width()/2))+"px)","-webkit-transform":"translateY("+Math.floor(((event.pageY-jQuery(this).find(".TotalSoft_HovLine1").offset().top)/10-jQuery(this).height()/2))+"px) translateX("+Math.floor(((event.pageX-jQuery(this).find(".TotalSoft_HovLine1").offset().left)/10-jQuery(this).width()/2))+"px)","-ms-transform":"translateY("+Math.floor(((event.pageY-jQuery(this).find(".TotalSoft_HovLine1").offset().top)/10-jQuery(this).height()/2))+"px) translateX("+Math.floor(((event.pageX-jQuery(this).find(".TotalSoft_HovLine1").offset().left)/10-jQuery(this).width()/2))+"px)","-moz-transform":"translateY("+Math.floor(((event.pageY-jQuery(this).find(".TotalSoft_HovLine1").offset().top)/10-jQuery(this).height()/2))+"px) translateX("+Math.floor(((event.pageX-jQuery(this).find(".TotalSoft_HovLine1").offset().left)/10-jQuery(this).width()/2))+"px)","-o-transform":"translateY("+Math.floor(((event.pageY-jQuery(this).find(".TotalSoft_HovLine1").offset().top)/10-jQuery(this).height()/2))+"px) translateX("+Math.floor(((event.pageX-jQuery(this).find(".TotalSoft_HovLine1").offset().left)/10-jQuery(this).width()/2))+"px)"})
								}
								else if(line=="TotalSoft_HovLine5")
								{
									jQuery(this).find(".TotalSoft_HovLine5").css({"transform":"rotateX("+Math.floor((event.pageX-jQuery(this).offset().left-jQuery(this).width()/2)/15)+"deg) rotateY("+Math.floor((event.pageY-jQuery(this).offset().top+jQuery(this).height()/2)/15)+"deg) translateY(-50%) translateX(-50%)","-webkit-transform":"rotateX("+Math.floor((event.pageX-jQuery(this).offset().left-jQuery(this).width()/2)/15)+"deg) rotateY("+Math.floor((event.pageY-jQuery(this).offset().top+jQuery(this).height()/2)/15)+"deg) translateY(-50%) translateX(-50%)","-ms-transform":"rotateX("+Math.floor((event.pageX-jQuery(this).offset().left-jQuery(this).width()/2)/15)+"deg) rotateY("+Math.floor((event.pageY-jQuery(this).offset().top+jQuery(this).height()/2)/15)+"deg) translateY(-50%) translateX(-50%)","-moz-transform":"rotateX("+Math.floor((event.pageX-jQuery(this).offset().left-jQuery(this).width()/2)/15)+"deg) rotateY("+Math.floor((event.pageY-jQuery(this).offset().top+jQuery(this).height()/2)/15)+"deg) translateY(-50%) translateX(-50%)","-o-transform":"rotateX("+Math.floor((event.pageX-jQuery(this).offset().left-jQuery(this).width()/2)/15)+"deg) rotateY("+Math.floor((event.pageY-jQuery(this).offset().top+jQuery(this).height()/2)/15)+"deg) translateY(-50%) translateX(-50%)"})
								}
								else if(line=="TotalSoft_HovLine8")
								{
									jQuery(this).find(".TotalSoft_HovLine8").css({"transform":"translateY("+Math.floor(((event.pageY-jQuery(this).find(".TotalSoft_HovLine8").offset().top)/10-jQuery(this).height()/2))+"px) translateX("+Math.floor(((event.pageX-jQuery(this).find(".TotalSoft_HovLine8").offset().left)/10-jQuery(this).width()/2))+"px)","-webkit-transform":"translateY("+Math.floor(((event.pageY-jQuery(this).find(".TotalSoft_HovLine8").offset().top)/10-jQuery(this).height()/2))+"px) translateX("+Math.floor(((event.pageX-jQuery(this).find(".TotalSoft_HovLine8").offset().left)/10-jQuery(this).width()/2))+"px)","-ms-transform":"translateY("+Math.floor(((event.pageY-jQuery(this).find(".TotalSoft_HovLine8").offset().top)/10-jQuery(this).height()/2))+"px) translateX("+Math.floor(((event.pageX-jQuery(this).find(".TotalSoft_HovLine8").offset().left)/10-jQuery(this).width()/2))+"px)","-moz-transform":"translateY("+Math.floor(((event.pageY-jQuery(this).find(".TotalSoft_HovLine8").offset().top)/10-jQuery(this).height()/2))+"px) translateX("+Math.floor(((event.pageX-jQuery(this).find(".TotalSoft_HovLine8").offset().left)/10-jQuery(this).width()/2))+"px)","-o-transform":"translateY("+Math.floor(((event.pageY-jQuery(this).find(".TotalSoft_HovLine8").offset().top)/10-jQuery(this).height()/2))+"px) translateX("+Math.floor(((event.pageX-jQuery(this).find(".TotalSoft_HovLine8").offset().left)/10-jQuery(this).width()/2))+"px)"})
								}
								else if(line=="TotalSoft_HovLine9")
								{
									jQuery(this).find(".TotalSoft_HovLine9").css({"transform":"rotateX("+Math.floor((event.pageX-jQuery(this).offset().left-jQuery(this).width()/2)/15)+"deg) rotateY("+Math.floor((event.pageY-jQuery(this).offset().top+jQuery(this).height()/2)/15)+"deg) translateY(-50%) translateX(-50%)","-webkit-transform":"rotateX("+Math.floor((event.pageX-jQuery(this).offset().left-jQuery(this).width()/2)/15)+"deg) rotateY("+Math.floor((event.pageY-jQuery(this).offset().top+jQuery(this).height()/2)/15)+"deg) translateY(-50%) translateX(-50%)","-ms-transform":"rotateX("+Math.floor((event.pageX-jQuery(this).offset().left-jQuery(this).width()/2)/15)+"deg) rotateY("+Math.floor((event.pageY-jQuery(this).offset().top+jQuery(this).height()/2)/15)+"deg) translateY(-50%) translateX(-50%)","-moz-transform":"rotateX("+Math.floor((event.pageX-jQuery(this).offset().left-jQuery(this).width()/2)/15)+"deg) rotateY("+Math.floor((event.pageY-jQuery(this).offset().top+jQuery(this).height()/2)/15)+"deg) translateY(-50%) translateX(-50%)","-o-transform":"rotateX("+Math.floor((event.pageX-jQuery(this).offset().left-jQuery(this).width()/2)/15)+"deg) rotateY("+Math.floor((event.pageY-jQuery(this).offset().top+jQuery(this).height()/2)/15)+"deg) translateY(-50%) translateX(-50%)"})
								}
								else if(line=="TotalSoft_HovLine10")
								{
									jQuery(this).find(".TotalSoft_HovLine10").css({"transform":"translateY("+Math.floor(((event.pageY-jQuery(this).find(".TotalSoft_HovLine10").offset().top)/10-jQuery(this).height()/2))+"px) translateX("+Math.floor(((event.pageX-jQuery(this).find(".TotalSoft_HovLine10").offset().left)/10-jQuery(this).width()/2))+"px)","-webkit-transform":"translateY("+Math.floor(((event.pageY-jQuery(this).find(".TotalSoft_HovLine10").offset().top)/10-jQuery(this).height()/2))+"px) translateX("+Math.floor(((event.pageX-jQuery(this).find(".TotalSoft_HovLine10").offset().left)/10-jQuery(this).width()/2))+"px)","-ms-transform":"translateY("+Math.floor(((event.pageY-jQuery(this).find(".TotalSoft_HovLine10").offset().top)/10-jQuery(this).height()/2))+"px) translateX("+Math.floor(((event.pageX-jQuery(this).find(".TotalSoft_HovLine10").offset().left)/10-jQuery(this).width()/2))+"px)","-moz-transform":"translateY("+Math.floor(((event.pageY-jQuery(this).find(".TotalSoft_HovLine10").offset().top)/10-jQuery(this).height()/2))+"px) translateX("+Math.floor(((event.pageX-jQuery(this).find(".TotalSoft_HovLine10").offset().left)/10-jQuery(this).width()/2))+"px)","-o-transform":"translateY("+Math.floor(((event.pageY-jQuery(this).find(".TotalSoft_HovLine10").offset().top)/10-jQuery(this).height()/2))+"px) translateX("+Math.floor(((event.pageX-jQuery(this).find(".TotalSoft_HovLine10").offset().left)/10-jQuery(this).width()/2))+"px)"})
								}
								else if(line=="TotalSoft_HovLine11")
								{
									jQuery(this).find(".TotalSoft_HovLine11").css({"transform":"rotateX("+Math.floor((event.pageX-jQuery(this).offset().left-jQuery(this).width()/2)/15)+"deg) rotateY("+Math.floor((event.pageY-jQuery(this).offset().top+jQuery(this).height()/2)/15)+"deg) translateY(-50%) translateX(-50%)","-webkit-transform":"rotateX("+Math.floor((event.pageX-jQuery(this).offset().left-jQuery(this).width()/2)/15)+"deg) rotateY("+Math.floor((event.pageY-jQuery(this).offset().top+jQuery(this).height()/2)/15)+"deg) translateY(-50%) translateX(-50%)","-ms-transform":"rotateX("+Math.floor((event.pageX-jQuery(this).offset().left-jQuery(this).width()/2)/15)+"deg) rotateY("+Math.floor((event.pageY-jQuery(this).offset().top+jQuery(this).height()/2)/15)+"deg) translateY(-50%) translateX(-50%)","-moz-transform":"rotateX("+Math.floor((event.pageX-jQuery(this).offset().left-jQuery(this).width()/2)/15)+"deg) rotateY("+Math.floor((event.pageY-jQuery(this).offset().top+jQuery(this).height()/2)/15)+"deg) translateY(-50%) translateX(-50%)","-o-transform":"rotateX("+Math.floor((event.pageX-jQuery(this).offset().left-jQuery(this).width()/2)/15)+"deg) rotateY("+Math.floor((event.pageY-jQuery(this).offset().top+jQuery(this).height()/2)/15)+"deg) translateY(-50%) translateX(-50%)"})
								}
								if(img=="TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>1")
								{
									jQuery(this).css({"transform":"rotateX("+Math.floor((event.pageX-jQuery(this).offset().left-jQuery(this).width()/2)/15)+"deg) rotateY("+Math.floor((event.pageY-jQuery(this).offset().top+jQuery(this).height()/2)/15)+"deg)","-webkit-transform":"rotateX("+Math.floor((event.pageX-jQuery(this).offset().left-jQuery(this).width()/2)/15)+"deg) rotateY("+Math.floor((event.pageY-jQuery(this).offset().top+jQuery(this).height()/2)/15)+"deg)","-ms-transform":"rotateX("+Math.floor((event.pageX-jQuery(this).offset().left-jQuery(this).width()/2)/15)+"deg) rotateY("+Math.floor((event.pageY-jQuery(this).offset().top+jQuery(this).height()/2)/15)+"deg)","-moz-transform":"rotateX("+Math.floor((event.pageX-jQuery(this).offset().left-jQuery(this).width()/2)/15)+"deg) rotateY("+Math.floor((event.pageY-jQuery(this).offset().top+jQuery(this).height()/2)/15)+"deg)","-o-transform":"rotateX("+Math.floor((event.pageX-jQuery(this).offset().left-jQuery(this).width()/2)/15)+"deg) rotateY("+Math.floor((event.pageY-jQuery(this).offset().top+jQuery(this).height()/2)/15)+"deg)"})
								}
								else if(img=="TotalSoft_H_Ef<?php echo $Total_Soft_Gallery_Video;?>2")
								{
									jQuery(this).css({"transform":"translateY("+Math.floor(((event.pageY-jQuery(this).offset().top-jQuery(this).height()/2)/15))+"px) translateX("+Math.floor(((event.pageX-jQuery(this).offset().left-jQuery(this).width()/2)/15))+"px)","-webkit-transform":"translateY("+Math.floor(((event.pageY-jQuery(this).offset().top-jQuery(this).height()/2)/15))+"px) translateX("+Math.floor(((event.pageX-jQuery(this).offset().left-jQuery(this).width()/2)/15))+"px)","-ms-transform":"translateY("+Math.floor(((event.pageY-jQuery(this).offset().top-jQuery(this).height()/2)/15))+"px) translateX("+Math.floor(((event.pageX-jQuery(this).offset().left-jQuery(this).width()/2)/15))+"px)","-moz-transform":"translateY("+Math.floor(((event.pageY-jQuery(this).offset().top-jQuery(this).height()/2)/15))+"px) translateX("+Math.floor(((event.pageX-jQuery(this).offset().left-jQuery(this).width()/2)/15))+"px)","-o-transform":"translateY("+Math.floor(((event.pageY-jQuery(this).offset().top-jQuery(this).height()/2)/15))+"px) translateX("+Math.floor(((event.pageX-jQuery(this).offset().left-jQuery(this).width()/2)/15))+"px)"})
								}
								if(title=="TotalSoft_Title_Ef1")
								{
									jQuery(this).find(".TotalSoft_Title_Ef1").css({"transform":"translateY("+Math.floor(((event.pageY-jQuery(this).find(".TotalSoft_Title_Ef1").offset().top)/5-jQuery(this).find(".TotalSoft_Title_Ef1").height()/2))+"px) translateX("+Math.floor(((event.pageX-jQuery(this).find(".TotalSoft_Title_Ef1").offset().left)/5-jQuery(this).find(".TotalSoft_Title_Ef1").width()/2))+"px) translate3d(0, 0, 0)","-webkit-transform":"translateY("+Math.floor(((event.pageY-jQuery(this).find(".TotalSoft_Title_Ef1").offset().top)/5-jQuery(this).find(".TotalSoft_Title_Ef1").height()/2))+"px) translateX("+Math.floor(((event.pageX-jQuery(this).find(".TotalSoft_Title_Ef1").offset().left)/5-jQuery(this).find(".TotalSoft_Title_Ef1").width()/2))+"px) translate3d(0, 0, 0)","-ms-transform":"translateY("+Math.floor(((event.pageY-jQuery(this).find(".TotalSoft_Title_Ef1").offset().top)/5-jQuery(this).find(".TotalSoft_Title_Ef1").height()/2))+"px) translateX("+Math.floor(((event.pageX-jQuery(this).find(".TotalSoft_Title_Ef1").offset().left)/5-jQuery(this).find(".TotalSoft_Title_Ef1").width()/2))+"px) translate3d(0, 0, 0)","-moz-transform":"translateY("+Math.floor(((event.pageY-jQuery(this).find(".TotalSoft_Title_Ef1").offset().top)/5-jQuery(this).find(".TotalSoft_Title_Ef1").height()/2))+"px) translateX("+Math.floor(((event.pageX-jQuery(this).find(".TotalSoft_Title_Ef1").offset().left)/5-jQuery(this).find(".TotalSoft_Title_Ef1").width()/2))+"px) translate3d(0, 0, 0)","-o-transform":"translateY("+Math.floor(((event.pageY-jQuery(this).find(".TotalSoft_Title_Ef1").offset().top)/5-jQuery(this).find(".TotalSoft_Title_Ef1").height()/2))+"px) translateX("+Math.floor(((event.pageX-jQuery(this).find(".TotalSoft_Title_Ef1").offset().left)/5-jQuery(this).find(".TotalSoft_Title_Ef1").width()/2))+"px) translate3d(0, 0, 0)"})
								}
								else if(title=="TotalSoft_Title_Ef4")
								{
									jQuery(this).find(".TotalSoft_Title_Ef4").css({"transform":"rotateX("+Math.floor((event.pageX-jQuery(this).find(".TotalSoft_Title_Ef4").offset().left-jQuery(this).find(".TotalSoft_Title_Ef4").width()/2)/10)+"deg) rotateY("+Math.floor((event.pageY-jQuery(this).find(".TotalSoft_Title_Ef4").offset().top+jQuery(this).find(".TotalSoft_Title_Ef4").height()/2)/10)+"deg) translateY(-50%) translateX(-50%) translate3d(0, 0, 0)","-webkit-transform":"rotateX("+Math.floor((event.pageX-jQuery(this).find(".TotalSoft_Title_Ef4").offset().left-jQuery(this).find(".TotalSoft_Title_Ef4").width()/2)/10)+"deg) rotateY("+Math.floor((event.pageY-jQuery(this).offset().top+jQuery(this).height()/2)/10)+"deg) translateY(-50%) translateX(-50%) translate3d(0, 0, 0)","-ms-transform":"rotateX("+Math.floor((event.pageX-jQuery(this).offset().left-jQuery(this).width()/2)/10)+"deg) rotateY("+Math.floor((event.pageY-jQuery(this).offset().top+jQuery(this).height()/2)/10)+"deg) translateY(-50%) translateX(-50%) translate3d(0, 0, 0)","-moz-transform":"rotateX("+Math.floor((event.pageX-jQuery(this).offset().left-jQuery(this).width()/2)/10)+"deg) rotateY("+Math.floor((event.pageY-jQuery(this).offset().top+jQuery(this).height()/2)/10)+"deg) translateY(-50%) translateX(-50%) translate3d(0, 0, 0)","-o-transform":"rotateX("+Math.floor((event.pageX-jQuery(this).offset().left-jQuery(this).width()/2)/10)+"deg) rotateY("+Math.floor((event.pageY-jQuery(this).offset().top+jQuery(this).height()/2)/10)+"deg) translateY(-50%) translateX(-50%) translate3d(0, 0, 0)"})
								}
								if(overlay=="TotalSoft_Hov_Overlay1"){ }
							})
						})
					}
					TotalSoft_Hov_Anim();
				</script>
	<?php } else if($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Classic Gallery'){ ?>
    <style type="text/css">
        .TS_GV_ClG_<?php echo $Total_Soft_Gallery_Video;?> *, .TS_GV_ClG_<?php echo $Total_Soft_Gallery_Video;?> *:before, .TS_GV_ClG_<?php echo $Total_Soft_Gallery_Video;?> *:after
        {
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
        }
        .TS_GV_ClG_<?php echo $Total_Soft_Gallery_Video;?>
        {
            position: relative;
            width: 100%;
            text-align: center;
            float: left;
        <?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_19 == 'fallPerspective'){ ?>
            -webkit-perspective: 1300px;
            -moz-perspective: 1300px;
            perspective: 1300px;
        <?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_19 == 'fly'){ ?>
            -webkit-perspective: 1300px;
            -moz-perspective: 1300px;
            perspective: 1300px;
        <?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_19 == 'flip'){ ?>
            -webkit-perspective: 1300px;
            -moz-perspective: 1300px;
            perspective: 1300px;
        <?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_19 == 'helix'){ ?>
            -webkit-perspective: 1300px;
            -moz-perspective: 1300px;
            perspective: 1300px;
        <?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_19 == 'popUp'){ ?>
            -webkit-perspective: 1300px;
            -moz-perspective: 1300px;
            perspective: 1300px;
        <?php }?>
        }
        .TS_GV_ClG_Div1_Main_<?php echo $Total_Soft_Gallery_Video;?>
        {
        <?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01 == '1'){ ?>
            width: calc(100% - 1em);
        <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01 == '2'){ ?>
            width: calc(49% - 1em);
        <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01 == '3'){ ?>
            width: calc(32.3% - 1em);
        <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01 == '4'){ ?>
            width: calc(24% - 1em);
        <?php }else{ ?>
            width: calc(19% - 1em);
        <?php }?>
            display: inline-block;
            margin: 0 !important;
            padding: 0.5em;
            border: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_07;?>px solid <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_08;?>;
            position:relative;
            z-index: 0;
            cursor: pointer;
            overflow: hidden;
            opacity: 0;
        <?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_19 == 'moveUp'){ ?>
            -webkit-transform: translateY(200px);
            -moz-transform: translateY(200px);
            transform: translateY(200px);
        <?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_19 == 'scaleUp'){ ?>
            -webkit-transform: scale(0.6);
            -moz-transform: scale(0.6);
            transform: scale(0.6);
        <?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_19 == 'fallPerspective'){ ?>
            -webkit-transform-style: preserve-3d;
            -moz-transform-style: preserve-3d;
            transform-style: preserve-3d;
            -webkit-transform: translateZ(400px) translateY(300px) rotateX(-90deg);
            -moz-transform: translateZ(400px) translateY(300px) rotateX(-90deg);
            transform: translateZ(400px) translateY(300px) rotateX(-90deg);
        <?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_19 == 'fly'){ ?>
            -webkit-transform-style: preserve-3d;
            -moz-transform-style: preserve-3d;
            transform-style: preserve-3d;
            -webkit-transform-origin: 50% 50% -300px;
            -moz-transform-origin: 50% 50% -300px;
            transform-origin: 50% 50% -300px;
            -webkit-transform: rotateX(-180deg);
            -moz-transform: rotateX(-180deg);
            transform: rotateX(-180deg);
        <?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_19 == 'flip'){ ?>
            -webkit-transform-style: preserve-3d;
            -moz-transform-style: preserve-3d;
            transform-style: preserve-3d;
            -webkit-transform-origin: 0% 0%;
            -moz-transform-origin: 0% 0%;
            transform-origin: 0% 0%;
            -webkit-transform: rotateX(-80deg);
            -moz-transform: rotateX(-80deg);
            transform: rotateX(-80deg);
        <?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_19 == 'helix'){ ?>
            -webkit-transform-style: preserve-3d;
            -moz-transform-style: preserve-3d;
            transform-style: preserve-3d;
            -webkit-transform: rotateY(-180deg);
            -moz-transform: rotateY(-180deg);
            transform: rotateY(-180deg);
        <?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_19 == 'popUp'){ ?>
            -webkit-transform-style: preserve-3d;
            -moz-transform-style: preserve-3d;
            transform-style: preserve-3d;
            -webkit-transform: scale(0.4);
            -moz-transform: scale(0.4);
            transform: scale(0.4);
        <?php }?>
        }
        .TS_GV_ClG_Div1_Main_<?php echo $Total_Soft_Gallery_Video;?> * { line-height: 1 !important; list-style-type: none;}
        <?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_05 == 'effect01'){ ?>
        .TS_GV_ClG_Div1_Main_<?php echo $Total_Soft_Gallery_Video;?>:before
        {
            z-index: -1;
            position: absolute;
            content: "";
            left: 0.5em;
            width: calc(100% - 1em);
            top: 0.5em;
            height: calc(100% - 1em);
            -webkit-box-shadow: 0 10px 6px -6px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>;
            -moz-box-shadow: 0 10px 6px -6px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>;
            -o-box-shadow: 0 10px 6px -6px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>;
            box-shadow: 0 10px 6px -6px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>;
        }
        <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_05 == 'effect02'){ ?>
        .TS_GV_ClG_Div1_Main_<?php echo $Total_Soft_Gallery_Video;?>:before, .TS_GV_ClG_Div1_Main_<?php echo $Total_Soft_Gallery_Video;?>:after
        {
            z-index: -1;
            position: absolute;
            content: "";
            bottom: 23px;
            left: 10px;
            width: 50%;
            top: 80%;
            max-width:300px;
            background: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>;
            -webkit-box-shadow: 0 11px 6px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>;
            -moz-box-shadow: 0 11px 6px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>;
            -o-box-shadow: 0 11px 6px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>;
            box-shadow: 0 11px 6px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>;
            -webkit-transform: rotate(-5deg);
            -moz-transform: rotate(-5deg);
            -o-transform: rotate(-5deg);
            -ms-transform: rotate(-5deg);
            transform: rotate(-5deg);
        }
        .TS_GV_ClG_Div1_Main_<?php echo $Total_Soft_Gallery_Video;?>:after
        {
            -webkit-transform: rotate(5deg);
            -moz-transform: rotate(5deg);
            -o-transform: rotate(5deg);
            -ms-transform: rotate(5deg);
            transform: rotate(5deg);
            right: 10px;
            left: auto;
        }
        <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_05 == 'effect03'){ ?>
        .TS_GV_ClG_Div1_Main_<?php echo $Total_Soft_Gallery_Video;?>:before
        {
            z-index: -1;
            position: absolute;
            content: "";
            bottom: 23px;
            left: 10px;
            width: 50%;
            top: 80%;
            max-width:300px;
            background: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>;
            -webkit-box-shadow: 0 11px 6px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>;
            -moz-box-shadow: 0 11px 6px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>;
            -o-box-shadow: 0 11px 6px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>;
            box-shadow: 0 11px 6px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>;
            -webkit-transform: rotate(-5deg);
            -moz-transform: rotate(-5deg);
            -o-transform: rotate(-5deg);
            -ms-transform: rotate(-5deg);
            transform: rotate(-5deg);
        }
        <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_05 == 'effect04'){ ?>
        .TS_GV_ClG_Div1_Main_<?php echo $Total_Soft_Gallery_Video;?>:after
        {
            z-index: -1;
            position: absolute;
            content: "";
            bottom: 23px;
            right: 10px;
            left: auto;
            width: 50%;
            top: 80%;
            max-width:300px;
            background: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>;
            -webkit-box-shadow: 0 11px 6px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>;
            -moz-box-shadow: 0 11px 6px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>;
            -o-box-shadow: 0 11px 6px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>;
            box-shadow: 0 11px 6px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>;
            -webkit-transform: rotate(5deg);
            -moz-transform: rotate(5deg);
            -o-transform: rotate(5deg);
            -ms-transform: rotate(5deg);
            transform: rotate(5deg);
        }
        <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_05 == 'effect05'){ ?>
        .TS_GV_ClG_Div1_Main_<?php echo $Total_Soft_Gallery_Video;?>:before, .TS_GV_ClG_Div1_Main_<?php echo $Total_Soft_Gallery_Video;?>:after
        {
            z-index: -1;
            position: absolute;
            content: "";
            bottom: 25px;
            left: 10px;
            width: 50%;
            top: 80%;
            max-width:300px;
            background: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>;
            -webkit-box-shadow: 0 18px 5px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>;
            -moz-box-shadow: 0 18px 5px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>;
            -o-box-shadow: 0 18px 5px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>;
            box-shadow: 0 18px 5px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>;
            -webkit-transform: rotate(-3deg);
            -moz-transform: rotate(-3deg);
            -o-transform: rotate(-3deg);
            -ms-transform: rotate(-3deg);
            transform: rotate(-3deg);
        }
        .TS_GV_ClG_Div1_Main_<?php echo $Total_Soft_Gallery_Video;?>:after
        {
            -webkit-transform: rotate(3deg);
            -moz-transform: rotate(3deg);
            -o-transform: rotate(3deg);
            -ms-transform: rotate(3deg);
            transform: rotate(3deg);
            right: 10px;
            left: auto;
        }
        <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_05 == 'effect06'){ ?>
        .TS_GV_ClG_Div1_Main_<?php echo $Total_Soft_Gallery_Video;?>:before, .TS_GV_ClG_Div1_Main_<?php echo $Total_Soft_Gallery_Video;?>:after
        {
            content:"";
            position:absolute;
            z-index:-1;
            -webkit-box-shadow:0 6px 6px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>;
            -moz-box-shadow:0 6px 6px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>;
            -o-box-shadow:0 6px 6px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>;
            box-shadow:0 6px 6px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>;
            top:50%;
            bottom:0.7em;
            left:0.7em;
            right:0.7em;
            -moz-border-radius:100px / 10px;
            border-radius:100px / 10px;
        }
        <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_05 == 'effect07'){ ?>
        .TS_GV_ClG_Div1_Main_<?php echo $Total_Soft_Gallery_Video;?>:before, .TS_GV_ClG_Div1_Main_<?php echo $Total_Soft_Gallery_Video;?>:after
        {
            content:"";
            position:absolute;
            z-index:-1;
            -webkit-box-shadow:0 1px 6px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>;
            -moz-box-shadow:0 1px 6px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>;
            -o-box-shadow:0 1px 6px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>;
            box-shadow:0 1px 6px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>;
            top:0.5em;
            bottom:0.5em;
            left:0.5em;
            right:0.5em;
            -moz-border-radius:100px / 10px;
            border-radius:100px / 10px;
        }
        <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_05 == 'effect08'){ ?>
        .TS_GV_ClG_Div1_Main_<?php echo $Total_Soft_Gallery_Video;?>:before, .TS_GV_ClG_Div1_Main_<?php echo $Total_Soft_Gallery_Video;?>:after
        {
            content:"";
            position:absolute;
            z-index:-1;
            -webkit-box-shadow:0 0 6px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>;
            -moz-box-shadow:0 0 6px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>;
            -o-box-shadow:0 0 6px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>;
            box-shadow:0 0 6px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>;
            top:0.5em;
            bottom:0.5em;
            left:0.7em;
            right:0.7em;
            -moz-border-radius:100px / 10px;
            border-radius:100px / 10px;
        }
        <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_05 == 'effect09'){ ?>
        .TS_GV_ClG_Div1_Main_<?php echo $Total_Soft_Gallery_Video;?>:before, .TS_GV_ClG_Div1_Main_<?php echo $Total_Soft_Gallery_Video;?>:after
        {
            content:"";
            position:absolute;
            z-index:-1;
            -webkit-box-shadow:0 1px 6px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>;
            -moz-box-shadow:0 1px 6px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>;
            -o-box-shadow:0 1px 6px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>;
            box-shadow:0 1px 6px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>;
            top:0.6em;
            bottom:0.6em;
            left:0.5em;
            right:0.5em;
            -moz-border-radius:100px / 10px;
            border-radius:100px / 10px;
        }
        .TS_GV_ClG_Div1_Main_<?php echo $Total_Soft_Gallery_Video;?>:after
        {
            right:0.5em;
            -webkit-transform:skew(5deg) rotate(3deg);
            -moz-transform:skew(5deg) rotate(3deg);
            -ms-transform:skew(5deg) rotate(3deg);
            -o-transform:skew(5deg) rotate(3deg);
            transform:skew(5deg) rotate(3deg);
        }
        <?php }?>
        .TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?>
        {
            -webkit-transition: all 1s ease;
            -moz-transition: all 1s ease;
            -o-transition: all 1s ease;
            transition: all 1s ease;
            position: relative;
        }
        <?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02 == 'effect01'){ ?>
        .TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?> { overflow: hidden; }
        .TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?>:before
        {
            content: '';
            background: -webkit-linear-gradient(top, transparent 0%, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_03;?> 100%);
            background: linear-gradient(to bottom, transparent 0%, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_03;?> 100%);
            width: 100%;
            height: 50%;
            opacity: 0;
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 2;
            -webkit-transition-property: top, opacity;
            -moz-transition-property: top, opacity;
            -o-transition-property: top, opacity;
            transition-property: top, opacity;
            -webkit-transition-duration: 0.3s;
            -moz-transition-duration: 0.3s;
            -o-transition-duration: 0.3s;
            transition-duration: 0.3s;
        }
        .TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?> .TS_GV_ClG_Div2_Hov1_<?php echo $Total_Soft_Gallery_Video;?>
        {
            padding: 20px;
            position: absolute;
            bottom: 0;
            left: 0;
            z-index: 3;
        }
        .TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?> .TS_GV_ClG_Div2_Hov1_<?php echo $Total_Soft_Gallery_Video;?> span
        {
            display: block;
            opacity: 0;
            position: relative;
            top: 100px;
            -webkit-transition-property: top, opacity;
            -moz-transition-property: top, opacity;
            -o-transition-property: top, opacity;
            transition-property: top, opacity;
            -webkit-transition-duration: 0.3s;
            -moz-transition-duration: 0.3s;
            -o-transition-duration: 0.3s;
            transition-duration: 0.3s;
            -webkit-transition-delay: 0s;
            -moz-transition-delay: 0s;
            -o-transition-delay: 0s;
            transition-delay: 0s;
        }
        .TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?> .TS_GV_ClG_Div2_Hov1_<?php echo $Total_Soft_Gallery_Video;?> .TS_GV_ClG_Div2_Hov1_Title_<?php echo $Total_Soft_Gallery_Video;?>
        {
            line-height: 1;
            font-weight: 400;
            font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>px;
            font-family: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>;
            color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_11;?>;
        }
        .TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?>:focus:before, .TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?>:focus .TS_GV_ClG_Div2_Hov1_Title_<?php echo $Total_Soft_Gallery_Video;?>, .TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?>:hover:before, .TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?>:hover .TS_GV_ClG_Div2_Hov1_Title_<?php echo $Total_Soft_Gallery_Video;?>
        {
            opacity: 1;
        }
        .TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?>:focus:before, .TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?>:hover:before { top: 50%; }
        .TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?>:focus .TS_GV_ClG_Div2_Hov1_Title_<?php echo $Total_Soft_Gallery_Video;?>, .TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?>:hover .TS_GV_ClG_Div2_Hov1_Title_<?php echo $Total_Soft_Gallery_Video;?>
        {
            top: 0;
        }
        .TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?>:focus .TS_GV_ClG_Div2_Hov1_Title_<?php echo $Total_Soft_Gallery_Video;?>, .TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?>:hover .TS_GV_ClG_Div2_Hov1_Title_<?php echo $Total_Soft_Gallery_Video;?>
        {
            -webkit-transition-delay: 0.15s;
            -moz-transition-delay: 0.15s;
            -o-transition-delay: 0.15s;
            transition-delay: 0.15s;
        }
        <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02 == 'effect02'){ ?>
        .TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?> { overflow: hidden; }
        .TS_GV_ClG_Div2_Hov2_<?php echo $Total_Soft_Gallery_Video;?>
        {
            position: absolute;
            top: 0;
            left: 0;
            background: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_03;?>;
            width: 100%;
            height: 100%;
            opacity: 0;
            -webkit-transition: opacity 0.5s ease;
            -moz-transition: opacity 0.5s ease;
            -o-transition: opacity 0.5s ease;
            transition: opacity 0.5s ease;
        }
        .TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?>:hover .TS_GV_ClG_Div2_Hov2_<?php echo $Total_Soft_Gallery_Video;?> { opacity: 1; }
        .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?> img
        {
            -moz-transform: scale(1.09, 1.09);
            -ms-transform: scale(1.09, 1.09);
            -webkit-transform: scale(1.09, 1.09);
            transform: scale(1.09, 1.09);
            -moz-transition-property: all;
            -o-transition-property: all;
            -webkit-transition-property: all;
            transition-property: all;
            -moz-transition-duration: 0.4s;
            -o-transition-duration: 0.4s;
            -webkit-transition-duration: 0.4s;
            transition-duration: 0.4s;
        }
        .TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?>:hover .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?> img
        {
            -moz-transform: scale(1, 1);
            -ms-transform: scale(1, 1);
            -webkit-transform: scale(1, 1);
            transform: scale(1, 1);
            -webkit-filter: blur(2px);
            filter: blur(2px);
            -moz-transition-property: all;
            -o-transition-property: all;
            -webkit-transition-property: all;
            transition-property: all;
            -moz-transition-duration: 0.8s;
            -o-transition-duration: 0.8s;
            -webkit-transition-duration: 0.8s;
            transition-duration: 0.8s;
        }
        .TS_GV_ClG_Div2_Hov2_Title_<?php echo $Total_Soft_Gallery_Video;?>
        {
            line-height: 1;
            font-weight: 400;
            font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>px;
            font-family: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>;
            color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_11;?>;
            position: relative;
            display: block;
            top: 50%;
            transform: translateY(-50%);
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            -webkit-transition-delay: 0.5s;
            transition-delay: 0.5s;
            -moz-transition-duration: 0.8s;
            -o-transition-duration: 0.8s;
            -webkit-transition-duration: 0.8s;
            transition-duration: 0.8s;
            opacity: 0;
        }
        .TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?>:hover .TS_GV_ClG_Div2_Hov2_Title_<?php echo $Total_Soft_Gallery_Video;?> { opacity: 1; }
        <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02 == 'effect03'){ ?>
        .TS_GV_ClG_Div2_Hov3_Icon_<?php echo $Total_Soft_Gallery_Video;?>
        {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0);
            -webkit-transform: translate(-50%, -50%) scale(0);
            -moz-transform: translate(-50%, -50%) scale(0);
            -o-transform: translate(-50%, -50%) scale(0);
            transition: all 300ms 0ms cubic-bezier(0.6, -0.28, 0.735, 0.045);
            color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_13;?>;
            font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_14;?>px;
        }
        .TS_GV_ClG_Div2_Hov3_<?php echo $Total_Soft_Gallery_Video;?>
        {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_03;?>;
            -moz-transition-duration: 0.8s;
            -o-transition-duration: 0.8s;
            -webkit-transition-duration: 0.8s;
            transition-duration: 0.8s;
            opacity: 0;
        }
        .TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?>:hover .TS_GV_ClG_Div2_Hov3_<?php echo $Total_Soft_Gallery_Video;?> { opacity: 1; }
        .TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?>:hover .TS_GV_ClG_Div2_Hov3_Icon_<?php echo $Total_Soft_Gallery_Video;?>
        {
            transform: translate(-50%, -50%) scale(1);
            -webkit-transform: translate(-50%, -50%) scale(1);
            -moz-transform: translate(-50%, -50%) scale(1);
            -o-transform: translate(-50%, -50%) scale(1);
            transition: all 300ms 100ms cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02 == 'effect04'){ ?>
        .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?>::before, .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?>::after
        {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            transform: scale3d(0, 0, 1);
            -webkit-transform: scale3d(0, 0, 1);
            -moz-transform: scale3d(0, 0, 1);
            -o-transform: scale3d(0, 0, 1);
            transition: transform .3s ease-out 0s;
            -webkit-transition: transform .3s ease-out 0s;
            -moz-transition: transform .3s ease-out 0s;
            -o-transition: transform .3s ease-out 0s;
            content: '';
            pointer-events: none;
        }
        .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?>::before
        {
            transform-origin: left top;
            z-index: 1;
            background: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_03;?>;
        }
        .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?>::after
        {
            transform-origin: right bottom;
            background: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_04;?>;
        }
        .TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?>:hover .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?>::before, .TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?>:hover .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?>::after
        {
            transform: scale3d(1, 1, 1);
        }
        .TS_GV_ClG_Div2_Hov4_Span_<?php echo $Total_Soft_Gallery_Video;?>
        {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0);
            -webkit-transform: translate(-50%, -50%) scale(0);
            -moz-transform: translate(-50%, -50%) scale(0);
            -o-transform: translate(-50%, -50%) scale(0);
            transition: all 300ms 0ms cubic-bezier(0.6, -0.28, 0.735, 0.045);
            line-height: 1;
            font-weight: 400;
            font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>px;
            font-family: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>;
            color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_11;?>;
            z-index: 2;
        }
        .TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?>:hover .TS_GV_ClG_Div2_Hov4_Span_<?php echo $Total_Soft_Gallery_Video;?>
        {
            transform: translate(-50%, -50%) scale(1);
            -webkit-transform: translate(-50%, -50%) scale(1);
            -moz-transform: translate(-50%, -50%) scale(1);
            -o-transform: translate(-50%, -50%) scale(1);
            transition: all 300ms 100ms cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02 == 'effect05'){ ?>
        .TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?> { overflow: hidden; }
        .TS_GV_ClG_Div2_Hov5_<?php echo $Total_Soft_Gallery_Video;?>
        {
            position: absolute;
            top: 0;
            left: 0;
            background: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_03;?>;
            width: 100%;
            height: 100%;
            opacity: 0;
            -webkit-transition: opacity 0.5s ease;
            -moz-transition: opacity 0.5s ease;
            -o-transition: opacity 0.5s ease;
            transition: opacity 0.5s ease;
            padding: 30px 3em;
        }
        .TS_GV_ClG_Div2_Hov5_<?php echo $Total_Soft_Gallery_Video;?>::before
        {
            position: absolute;
            top: 30px;
            right: 30px;
            bottom: 30px;
            left: 100%;
            border-left: 4px solid <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_04;?>;
            content: '';
            opacity: 0;
            background-color: rgba(255, 255, 255, 0.5);
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;
            -webkit-transition-delay: 0.6s;
            -moz-transition-delay: 0.6s;
            -o-transition-delay: 0.6s;
            transition-delay: 0.6s;
        }
        .TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?>:hover .TS_GV_ClG_Div2_Hov5_<?php echo $Total_Soft_Gallery_Video;?> { opacity: 1; }
        .TS_GV_ClG_Div2_Hov5_Title_<?php echo $Total_Soft_Gallery_Video;?>
        {
            line-height: 1;
            font-weight: 400;
            font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>px;
            font-family: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>;
            color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_11;?>;
            position: relative;
            display: block;
            top: 50%;
            -webkit-transform: translate3d(30%, -50%, 0);
            -moz-transform: translate3d(30%, -50%, 0);
            -o-transform: translate3d(30%, -50%, 0);
            transform: translate3d(30%, -50%, 0);
            -webkit-transition-delay: 0.3s;
            -moz-transition-delay: 0.3s;
            -o-transition-delay: 0.3s;
            transition-delay: 0.3s;
            opacity: 0;
            -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
            transition: opacity 0.35s,
            -webkit-transform 0.35s,
            -moz-transform 0.35s,
            -o-transform 0.35s,
            transform 0.35s;
            text-align: left;
        }
        .TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?>:hover .TS_GV_ClG_Div2_Hov5_Title_<?php echo $Total_Soft_Gallery_Video;?>
        {
            opacity: 1;
            -webkit-transform: translate3d(0%, -50%, 0);
            -moz-transform: translate3d(0%, -50%, 0);
            -o-transform: translate3d(0%, -50%, 0);
            transform: translate3d(0%, -50%, 0);
            -webkit-transition-delay: 0.4s;
            -moz-transition-delay: 0.4s;
            -o-transition-delay: 0.4s;
            transition-delay: 0.4s;
        }
        .TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?>:hover .TS_GV_ClG_Div2_Hov5_<?php echo $Total_Soft_Gallery_Video;?>::before
        {
            background: rgba(255, 255, 255, 0);
            left: 30px;
            opacity: 1;
            -webkit-transition-delay: 0s;
            -moz-transition-delay: 0s;
            -o-transition-delay: 0s;
            transition-delay: 0s;
        }
        <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02 == 'effect06'){ ?>
        .TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?> { overflow: hidden; }
        .TS_GV_ClG_Div2_Hov6_<?php echo $Total_Soft_Gallery_Video;?>
        {
            bottom: 0;
            display: block;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            background: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_03;?>;
            opacity: 0;
            -webkit-transition: opacity 0.5s ease;
            -moz-transition: opacity 0.5s ease;
            -o-transition: opacity 0.5s ease;
            transition: opacity 0.5s ease;
        }
        .TS_GV_ClG_Div2_Hov6_Title_<?php echo $Total_Soft_Gallery_Video;?>
        {
            line-height: 1;
            font-weight: 400;
            font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>px;
            font-family: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>;
            color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_11;?>;
            position: absolute;
            left: 0;
            width: 100%;
            bottom: 50%;
            -webkit-transform: translateY(50%);
            -moz-transform: translateY(50%);
            -o-transform: translateY(50%);
            transform: translateY(50%);
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }
        .TS_GV_ClG_Div2_Hov6_1_<?php echo $Total_Soft_Gallery_Video;?>
        {
            height: 78px;
            width: 78px;
            overflow: hidden;
            position: absolute;
            top: 50%;
            left: 50%;
            content: '';
            -webkit-transform: rotate(45deg) translate(-50%, -50%);
            -moz-transform: rotate(45deg) translate(-50%, -50%);
            -o-transform: rotate(45deg) translate(-50%, -50%);
            transform: rotate(45deg) translate(-50%, -50%);
            -webkit-transform-origin: 0 0;
            transform-origin: 0 0;
        }
        .TS_GV_ClG_Div2_Hov6_1_<?php echo $Total_Soft_Gallery_Video;?>:before, .TS_GV_ClG_Div2_Hov6_1_<?php echo $Total_Soft_Gallery_Video;?>:after, .TS_GV_ClG_Div2_Hov6_2_<?php echo $Total_Soft_Gallery_Video;?>:before, .TS_GV_ClG_Div2_Hov6_2_<?php echo $Total_Soft_Gallery_Video;?>:after
        {
            background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_04;?>;
            position: absolute;
            content: "";
            display: block;
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            -o-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
        }
        .TS_GV_ClG_Div2_Hov6_1_<?php echo $Total_Soft_Gallery_Video;?>:before, .TS_GV_ClG_Div2_Hov6_1_<?php echo $Total_Soft_Gallery_Video;?>:after { width: 65%; height: 2px; }
        .TS_GV_ClG_Div2_Hov6_2_<?php echo $Total_Soft_Gallery_Video;?>:before, .TS_GV_ClG_Div2_Hov6_2_<?php echo $Total_Soft_Gallery_Video;?>:after { width: 2px; height: 65%; }
        .TS_GV_ClG_Div2_Hov6_1_<?php echo $Total_Soft_Gallery_Video;?>:before, .TS_GV_ClG_Div2_Hov6_2_<?php echo $Total_Soft_Gallery_Video;?>:before { left: 0; top: 0; }
        .TS_GV_ClG_Div2_Hov6_1_<?php echo $Total_Soft_Gallery_Video;?>:after, .TS_GV_ClG_Div2_Hov6_2_<?php echo $Total_Soft_Gallery_Video;?>:after { bottom: 0; right: 0; }
        .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?> img
        {
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }
        .TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?>:hover .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?> img
        {
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.1);
            -o-transform: scale(1.1);
            transform: scale(1.1);
        }
        .TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?>:hover .TS_GV_ClG_Div2_Hov6_<?php echo $Total_Soft_Gallery_Video;?> { opacity: 1; }
        .TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?>:hover .TS_GV_ClG_Div2_Hov6_Title_<?php echo $Total_Soft_Gallery_Video;?>
        {
            opacity: 1;
            -webkit-transform: translateY(0px);
            -moz-transform: translateY(0px);
            -o-transform: translateY(0px);
            transform: translateY(0px);
        }
        .TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?>:hover .TS_GV_ClG_Div2_Hov6_1_<?php echo $Total_Soft_Gallery_Video;?>:before { width: 38%; }
        .TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?>:hover .TS_GV_ClG_Div2_Hov6_2_<?php echo $Total_Soft_Gallery_Video;?>:before { height: 38%; }
        .TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?>:hover .TS_GV_ClG_Div2_Hov6_1_<?php echo $Total_Soft_Gallery_Video;?>:after { width: 55%; }
        .TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?>:hover .TS_GV_ClG_Div2_Hov6_2_<?php echo $Total_Soft_Gallery_Video;?>:after { height: 55%; }
        <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02 == 'effect07'){ ?>
        .TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?> { overflow: hidden; }
        .TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?>:before
        {
            content: "";
            width: 70%;
            height: 100%;
            border-radius: 50%;
            background: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_03;?>;
            position: absolute;
            top: 0;
            left: -30%;
            transform: scale(0);
            -webkit-transform: scale(0);
            -moz-transform: scale(0);
            -o-transform: scale(0);
            transition: all 0.2s ease 0s;
            -webkit-transition: all 0.2s ease 0s;
            -moz-transition: all 0.2s ease 0s;
            -o-transition: all 0.2s ease 0s;
            z-index: 1;
        }
        .TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?>:hover:before
        {
            transform: scale(2);
            -webkit-transform: scale(2);
            -moz-transform: scale(2);
            -o-transform: scale(2);
        }
        .TS_GV_ClG_Div2_Hov7_<?php echo $Total_Soft_Gallery_Video;?>
        {
            position: absolute;
            top: 50%;
            left: 15%;
            transform: translate(-200%, -50%);
            -webkit-transform: translate(-200%, -50%);
            -moz-transform: translate(-200%, -50%);
            -o-transform: translate(-200%, -50%);
            transition: all 0.2s ease 0s;
            -webkit-transition: all 0.2s ease 0s;
            -moz-transition: all 0.2s ease 0s;
            -o-transition: all 0.2s ease 0s;
            z-index: 2;
            text-align: center;
            max-width: 50%;
        }
        .TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?>:hover .TS_GV_ClG_Div2_Hov7_<?php echo $Total_Soft_Gallery_Video;?>
        {
            transform: translate(0, -50%);
            -webkit-transform: translate(0, -50%);
            -moz-transform: translate(0, -50%);
            -o-transform: translate(0, -50%);
        }
        .TS_GV_ClG_Div2_Hov7_Title_<?php echo $Total_Soft_Gallery_Video;?>
        {
            line-height: 1;
            font-weight: 400;
            font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>px;
            font-family: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>;
            color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_11;?>;
            margin: 0;
        }
        .TS_GV_ClG_Div2_Hov7_Ul_<?php echo $Total_Soft_Gallery_Video;?> { padding: 0; margin: 15px 0 !important; list-style: none; }
        .TS_GV_ClG_Div2_Hov7_Icon_<?php echo $Total_Soft_Gallery_Video;?>
        {
            color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_13;?>;
            font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_14;?>px;
        }
        <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02 == 'effect08'){ ?>
        .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?> { position: relative; overflow: hidden; }
        .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?>:after
        {
            content: "";
            width: 100%;
            height: 100%;
            position: absolute;
            top:0;
            left: 0;
            background: rgba(0,0,0,0);
            transition: all 0.3s;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            -o-transition: all 0.3s;
        }
        .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?>:hover:after { background: rgba(0,0,0,0.2); }
        .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?> .TS_GV_ClG_Div2_Hov8_<?php echo $Total_Soft_Gallery_Video;?>
        {
            position: absolute;
            top:35%;
            left:0;
            width:100%;
            z-index: 1;
            transition: all 0.3s;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            -o-transition: all 0.3s;
        }
        .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?> .TS_GV_ClG_Div2_Hov8_Ul_<?php echo $Total_Soft_Gallery_Video;?>
        {
            width: 40%;
            position:relative;
            top:0;
            padding:5px;
            text-align:center;
            background: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_04;?>;
            border-radius: 0 0 5px 5px ;
            margin: 0 auto;
            transform: translate(0px, 0px);
            -webkit-transform: translate(0px, 0px);
            -moz-transform: translate(0px, 0px);
            -o-transform: translate(0px, 0px);
            transition: all 0.35s;
            -webkit-transition: all 0.35s;
            -moz-transition: all 0.35s;
            -o-transition: all 0.35s;
            line-height: 1;
        }
        .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?>:hover .TS_GV_ClG_Div2_Hov8_Ul_<?php echo $Total_Soft_Gallery_Video;?>
        {
            transform: translate(0px, 95%);
            -webkit-transform: translate(0px, 95%);
            -moz-transform: translate(0px, 95%);
            -o-transform: translate(0px, 95%);
        }
        .TS_GV_ClG_Div2_Hov8_Icon_<?php echo $Total_Soft_Gallery_Video;?>
        {
            color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_13;?>;
            font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_14;?>px;
        }
        .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?> .TS_GV_ClG_Div2_Hov8_Title_<?php echo $Total_Soft_Gallery_Video;?>
        {
            width: 80%;
            position: absolute;
            top:0;
            left: 10%;
            padding: 10px;
            margin: 0;
            line-height: 1;
            font-weight: 400;
            font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>px;
            font-family: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>;
            color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_11;?>;
            background: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_03;?>;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.85);
            text-align: center;
            transform: translate(0px, 0px);
            -webkit-transform: translate(0px, 0px);
            -moz-transform: translate(0px, 0px);
            -o-transform: translate(0px, 0px);
            transition: all 0.2s;
            -webkit-transition: all 0.2s;
            -moz-transition: all 0.2s;
            -o-transition: all 0.2s;
        }
        .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?>:hover .TS_GV_ClG_Div2_Hov8_Title_<?php echo $Total_Soft_Gallery_Video;?>
        {
            transform: translate(0px, -2px);
            -webkit-transform: translate(0px, -2px);
            -moz-transform: translate(0px, -2px);
            -o-transform: translate(0px, -2px);
        }
        <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02 == 'effect09'){ ?>
        .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?> { position: relative; overflow: hidden; }
        .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?>:before, .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?>:after
        {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_03;?>;
            -webkit-transition: all 0.45s ease 0s;
            -moz-transition: all 0.45s ease 0s;
            -o-transition: all 0.45s ease 0s;
            transition: all 0.45s ease 0s;
        }
        .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?>:before
        {
            -webkit-transform: skew(30deg) translateX(-80%);
            -moz-transform: skew(30deg) translateX(-80%);
            -o-transform: skew(30deg) translateX(-80%);
            transform: skew(30deg) translateX(-80%);
            z-index: 1;
        }
        .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?>:hover:before
        {
            -webkit-transform: skew(30deg) translateX(-20%);
            -moz-transform: skew(30deg) translateX(-20%);
            -o-transform: skew(30deg) translateX(-20%);
            transform: skew(30deg) translateX(-20%);
            -webkit-transition-delay: 0.05s;
            -moz-transition-delay: 0.05s;
            -o-transition-delay: 0.05s;
            transition-delay: 0.05s;
        }
        .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?>:after
        {
            -webkit-transform: skew(-30deg) translateX(-70%);
            -moz-transform: skew(-30deg) translateX(-70%);
            -o-transform: skew(-30deg) translateX(-70%);
            transform: skew(-30deg) translateX(-70%);
        }
        .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?>:hover:after
        {
            -webkit-transform: skew(-30deg) translateX(-10%);
            -moz-transform: skew(-30deg) translateX(-10%);
            -o-transform: skew(-30deg) translateX(-10%);
            transform: skew(-30deg) translateX(-10%);
        }
        .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?> .TS_GV_ClG_Div2_Hov9_<?php echo $Total_Soft_Gallery_Video;?>
        {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 1;
            padding: 20px 40% 20px 20px;
        }
        .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?> .TS_GV_ClG_Div2_Hov9_<?php echo $Total_Soft_Gallery_Video;?>:before, .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?> .TS_GV_ClG_Div2_Hov9_<?php echo $Total_Soft_Gallery_Video;?>:after
        {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_04;?>;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.7);
            z-index: -1;
            -webkit-transition: all 0.45s ease 0s;
            -moz-transition: all 0.45s ease 0s;
            -o-transition: all 0.45s ease 0s;
            transition: all 0.45s ease 0s;
        }
        .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?> .TS_GV_ClG_Div2_Hov9_<?php echo $Total_Soft_Gallery_Video;?>:before
        {
            -webkit-transform: skew(30deg) translateX(-100%);
            -moz-transform: skew(30deg) translateX(-100%);
            -o-transform: skew(30deg) translateX(-100%);
            transform: skew(30deg) translateX(-100%);
        }
        .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?>:hover .TS_GV_ClG_Div2_Hov9_<?php echo $Total_Soft_Gallery_Video;?>:before
        {
            -webkit-transform: skew(30deg) translateX(-40%);
            -moz-transform: skew(30deg) translateX(-40%);
            -o-transform: skew(30deg) translateX(-40%);
            transform: skew(30deg) translateX(-40%);
            -webkit-transition-delay: 0.15s;
            -moz-transition-delay: 0.15s;
            -o-transition-delay: 0.15s;
            transition-delay: 0.15s;
        }
        .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?> .TS_GV_ClG_Div2_Hov9_<?php echo $Total_Soft_Gallery_Video;?>:after
        {
            -webkit-transform: skew(-30deg) translateX(-90%);
            -moz-transform: skew(-30deg) translateX(-90%);
            -o-transform: skew(-30deg) translateX(-90%);
            transform: skew(-30deg) translateX(-90%);
        }
        .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?>:hover .TS_GV_ClG_Div2_Hov9_<?php echo $Total_Soft_Gallery_Video;?>:after
        {
            -webkit-transform: skew(-30deg) translateX(-30%);
            -moz-transform: skew(-30deg) translateX(-30%);
            -o-transform: skew(-30deg) translateX(-30%);
            transform: skew(-30deg) translateX(-30%);
            -webkit-transition-delay: 0.1s;
            -moz-transition-delay: 0.1s;
            -o-transition-delay: 0.1s;
            transition-delay: 0.1s;
        }
        .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?> .TS_GV_ClG_Div2_Hov9_Title_<?php echo $Total_Soft_Gallery_Video;?>
        {
            line-height: 1;
            font-weight: 400;
            font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>px;
            font-family: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>;
            color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_11;?>;
            margin: 0;
            opacity: 0;
            -webkit-transition: all 0.5s ease 0s;
            -moz-transition: all 0.5s ease 0s;
            -o-transition: all 0.5s ease 0s;
            transition: all 0.5s ease 0s;
            z-index: 2;
            text-align: left;
        }
        .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?>:hover .TS_GV_ClG_Div2_Hov9_Title_<?php echo $Total_Soft_Gallery_Video;?>
        {
            opacity: 0.9;
            -webkit-transition-delay: 0.2s;
            -moz-transition-delay: 0.2s;
            -o-transition-delay: 0.2s;
            transition-delay: 0.2s;
        }
        <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02 == 'effect10'){ ?>
        .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?>
        {
            position: relative;
            overflow: hidden;
            text-align: center;
            -webkit-transition: all 0.55s ease;
            -moz-transition: all 0.55s ease;
            -o-transition: all 0.55s ease;
            transition: all 0.55s ease;
        }
        .TS_GV_ClG_Div2_Hov10_2_<?php echo $Total_Soft_Gallery_Video;?>
        {
            -webkit-transition: opacity 0.55s ease;
            -moz-transition: opacity 0.55s ease;
            -o-transition: opacity 0.55s ease;
            transition: opacity 0.55s ease;
            background: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_03;?>;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
        }
        .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?>:hover .TS_GV_ClG_Div2_Hov10_2_<?php echo $Total_Soft_Gallery_Video;?> { opacity: 1; }
        .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?> .TS_GV_ClG_Div2_Hov10_<?php echo $Total_Soft_Gallery_Video;?>
        {
            padding: 10px;
            position: absolute;
            bottom: 25px;
            right: 25px;
        }
        .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?> .TS_GV_ClG_Div2_Hov10_<?php echo $Total_Soft_Gallery_Video;?>:before, .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?> .TS_GV_ClG_Div2_Hov10_<?php echo $Total_Soft_Gallery_Video;?>:after
        {
            content: "";
            width: 3000px;
            height: 2px;
            position: absolute;
            background: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_04;?>;
            -webkit-transition: all 0.55s ease;
            -moz-transition: all 0.55s ease;
            -o-transition: all 0.55s ease;
            transition: all 0.55s ease;
        }
        .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?> .TS_GV_ClG_Div2_Hov10_<?php echo $Total_Soft_Gallery_Video;?>:before
        {
            top: 0;
            left: 0;
            -webkit-transform: translateX(100%);
            -moz-transform: translateX(100%);
            -o-transform: translateX(100%);
            transform: translateX(100%);
        }
        .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?> .TS_GV_ClG_Div2_Hov10_<?php echo $Total_Soft_Gallery_Video;?>:after
        {
            bottom: 0;
            right: 0;
            -webkit-transform: translateX(-100%);
            -moz-transform: translateX(-100%);
            -o-transform: translateX(-100%);
            transform: translateX(-100%);
        }
        .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?> .TS_GV_ClG_Div2_Hov10_1_<?php echo $Total_Soft_Gallery_Video;?>:before, .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?> .TS_GV_ClG_Div2_Hov10_1_<?php echo $Total_Soft_Gallery_Video;?>:after
        {
            content: "";
            width: 2px;
            height: 3000px;
            position: absolute;
            background: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_04;?>;
            -webkit-transition: all 0.55s ease;
            -moz-transition: all 0.55s ease;
            -o-transition: all 0.55s ease;
            transition: all 0.55s ease;
        }
        .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?> .TS_GV_ClG_Div2_Hov10_1_<?php echo $Total_Soft_Gallery_Video;?>:before
        {
            top: 0;
            left: 0;
            -webkit-transform: translateY(100%);
            -moz-transform: translateY(100%);
            -o-transform: translateY(100%);
            transform: translateY(100%);
        }
        .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?> .TS_GV_ClG_Div2_Hov10_1_<?php echo $Total_Soft_Gallery_Video;?>:after
        {
            bottom: 0;
            right: 0;
            -webkit-transform: translateY(-100%);
            -moz-transform: translateY(-100%);
            -o-transform: translateY(-100%);
            transform: translateY(-100%);
        }
        .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?>:hover .TS_GV_ClG_Div2_Hov10_<?php echo $Total_Soft_Gallery_Video;?>:before, .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?>:hover .TS_GV_ClG_Div2_Hov10_<?php echo $Total_Soft_Gallery_Video;?>:after, .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?>:hover .TS_GV_ClG_Div2_Hov10_1_<?php echo $Total_Soft_Gallery_Video;?>:before, .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?>:hover .TS_GV_ClG_Div2_Hov10_1_<?php echo $Total_Soft_Gallery_Video;?>:after
        {
            -webkit-transform: translate(0, 0);
            -moz-transform: translate(0, 0);
            -o-transform: translate(0, 0);
            transform: translate(0, 0);
        }
        .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?>:hover .TS_GV_ClG_Div2_Hov10_<?php echo $Total_Soft_Gallery_Video;?>:before, .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?>:hover .TS_GV_ClG_Div2_Hov10_<?php echo $Total_Soft_Gallery_Video;?>:after
        {
            -webkit-transition-delay: 0.15s;
            -moz-transition-delay: 0.15s;
            -o-transition-delay: 0.15s;
            transition-delay: 0.15s;
        }
        .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?> .TS_GV_ClG_Div2_Hov10_Title_<?php echo $Total_Soft_Gallery_Video;?>
        {
            line-height: 1;
            font-weight: 400;
            font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>px;
            font-family: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>;
            color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_11;?>;
            margin: 0;
        }
        <?php }else{ ?>
        .TS_GV_ClG_Div2_Hov_None_<?php echo $Total_Soft_Gallery_Video;?>
        {
            background: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_03;?>;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .TS_GV_ClG_Div2_Hov_None_Title_<?php echo $Total_Soft_Gallery_Video;?>
        {
            line-height: 1;
            font-weight: 400;
            font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>px;
            font-family: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>;
            color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_11;?>;
            margin: 0;
            position: relative;
            display: block;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
        }
        .TS_GV_ClG_Div2_Hov_None_Title_<?php echo $Total_Soft_Gallery_Video;?> span
        {
            padding: 5px 10px;
            border: 2px solid <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_04;?>;
            border-radius: 2px;
        }
        <?php }?>
        .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?> { display: block; width: 100%; padding-top: 56.25%; position: relative; }
        .TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?> img { width: 100%; height: 100%; position: absolute; top: 0; left: 0; margin: 0; }
        .TS_GV_ClG_Div_Full_<?php echo $Total_Soft_Gallery_Video;?>
        {
            position: fixed;
            width: 0%;
            height: 0%;
            top: 50%;
            left: 50%;
            background: rgba(0,0,0,0.1);
            z-index: 10000000;
            cursor: pointer;
        }
        .TS_GV_ClG_Div_box_<?php echo $Total_Soft_Gallery_Video;?>
        {
            position: fixed;
            display: none;
            width: 100%;
            top: 50%;
            left: 0;
            z-index: 10000001;
            transform: translateY(-50%);
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
        }
        @media screen and (max-width:820px)
        {
            .TS_GV_ClG_Div_box_<?php echo $Total_Soft_Gallery_Video;?> { top:0; transform: translateY(0%); -webkit-transform: translateY(0%); -moz-transform: translateY(0%); }
        }
        @media screen and (max-width:400px)
        {
            .TS_GV_ClG_Div_box_<?php echo $Total_Soft_Gallery_Video;?> { top:10%; transform: translateY(0%); -webkit-transform: translateY(0%); -moz-transform: translateY(0%); }
        }
        .TS_GV_ClG_Div_box_div1_<?php echo $Total_Soft_Gallery_Video;?>
        {
            position: relative;
            margin: 0 auto;
            width: 50%;
            height: inherit;
            display: none;
            padding: 1em;
            height: 100%;
            overflow-y: auto;
            border: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_17;?>px solid <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16;?>;
            border-radius: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_18;?>px;
            background: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15;?>;
            max-height: 85vh !important;
        }
        .TS_GV_ClG_Div_box_div1_<?php echo $Total_Soft_Gallery_Video;?>::-webkit-scrollbar { width: 0.3em; }
        .TS_GV_ClG_Div_box_div1_<?php echo $Total_Soft_Gallery_Video;?>::-webkit-scrollbar-track
        {
            -webkit-box-shadow: inset 0 0 6px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15;?>;
        }
        .TS_GV_ClG_Div_box_div1_<?php echo $Total_Soft_Gallery_Video;?>::-webkit-scrollbar-thumb
        {
            background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22;?>;
            outline: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22;?>;
        }
        .TS_GV_ClG_Div_box_<?php echo $Total_Soft_Gallery_Video;?> h3
        {
            font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_20;?>px !important;
            font-family: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_21;?> !important;
            color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22;?> !important;
            text-align: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23;?> !important;
            line-height: 1 !important;
            font-weight: 400 !important;
            margin: 10px !important;
            text-transform: none !important;
            letter-spacing: 0 !important;
        }
        .TS_GV_ClG_Div_box_<?php echo $Total_Soft_Gallery_Video;?> p { margin: 10px 0; line-height: 1.3; }
        .TS_GV_ClG_Div_Close_Icon_<?php echo $Total_Soft_Gallery_Video;?>
        {
            position: fixed;
            display: none;
            top: 1em;
            right: 1em;
            color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_30;?>;
            font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_31;?>px !important;
            z-index: 10000002;
            line-height: 1;
            cursor: pointer;
        }
        .TotalSoft_GV_CG_Link_<?php echo $Total_Soft_Gallery_Video;?>
        {
            position: absolute;
            left: calc(-1em - <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_17;?>px);
            padding: 0.3em 1em;
            top: 0;
            border-top: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_32;?>px solid <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_33;?>;
            border-right: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_32;?>px solid <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_33;?>;
            border-top-right-radius: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_34;?>px;
            background: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_36;?>;
            color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_37;?> !important;
            font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_38;?>px;
            font-family: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_39;?>;
            text-decoration: none !important;
            line-height: 1;
            box-shadow: none !important;
            -webkit-box-shadow: none !important;
            -moz-box-shadow: none !important;
            -o-box-shadow: none !important;
        }
        .TotalSoft_GV_CG_Link_<?php echo $Total_Soft_Gallery_Video;?>:hover, .TotalSoft_GV_CG_Link_<?php echo $Total_Soft_Gallery_Video;?>:focus
        {
            outline: none !important;
            text-decoration: none !important;
            box-shadow: none !important;
            -webkit-box-shadow: none !important;
            -moz-box-shadow: none !important;
            -o-box-shadow: none !important;
        }
        .TotalSoft_GV_CG_Link_<?php echo $Total_Soft_Gallery_Video;?>:hover
        {
            background: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_01;?>;
            color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_02;?> !important;
        }
        .TotalSoft_GV_CG_Link_Icon_<?php echo $Total_Soft_Gallery_Video;?>:before
        {
            font-size: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_04;?>px !important;
            color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_05;?> !important;
        }
        .TS_GV_ClG_Div_box_span_<?php echo $Total_Soft_Gallery_Video;?>
        {
            display: block;
            margin: 10px auto;
            width: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_25;?>%;
            border-top: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_26;?>px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_27;?> <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_28;?>;
        }
        .TS_GV_ClG_Div_Image_<?php echo $Total_Soft_Gallery_Video;?>
        {
            position: relative;
            display: block;
            text-align: center;
        }
        .TS_GV_ClG_Div_Image_<?php echo $Total_Soft_Gallery_Video;?> img
        {
            position: relative;
            margin: 0 auto;
            height: 300px;
            width: auto;
        }
        .TS_GV_ClG_Div_video_<?php echo $Total_Soft_Gallery_Video;?>
        {
            position: relative;
            padding-bottom: 56.25%;
            padding-top: 30px;
            height: 0;
            width: 100%;
            overflow: hidden;
        }
        .TS_GV_ClG_Div_video_<?php echo $Total_Soft_Gallery_Video;?> iframe
        {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        <?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01 >= '1'){ ?>
        /* Landscape phones and down */
        @media (max-width: 620px)
        {
            .TS_GV_ClG_Div1_Main_<?php echo $Total_Soft_Gallery_Video;?> { width: 100%; margin: 0.5em 0; }
            .TS_GV_ClG_Div_box_div1_<?php echo $Total_Soft_Gallery_Video;?> { width: 100%;top:40px;}
            .TS_GV_ClG_Div_Close_Icon_<?php echo $Total_Soft_Gallery_Video;?> { z-index: 1000000000; top: 0.2em; right: 0.4em; font-size: 30px; }
        }
        <?php }?>
        <?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01 >= '3'){ ?>
        /* Landscape phone to portrait tablet */
        @media (max-width: 850px)
        {
            .TS_GV_ClG_Div1_Main_<?php echo $Total_Soft_Gallery_Video;?> { width: calc(49% - 1em); }
            .TS_GV_ClG_Div_box_div1_<?php echo $Total_Soft_Gallery_Video;?> { margin: auto; width: 80%; max-height: 500px; }
        }
        <?php } ?>
        <?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01 >= '4'){ ?>
        /* Portrait tablet to landscape and desktop */
        @media (min-width: 850px) and (max-width: 979px)
        {
            .TS_GV_ClG_Div1_Main_<?php echo $Total_Soft_Gallery_Video;?> { width: calc(32.3% - 1em); }
            .TS_GV_ClG_Div_box_div1_<?php echo $Total_Soft_Gallery_Video;?> { width: 70%; max-height: 550px; }
        }
        <?php }?>
        .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> { list-style: none; display: inline-block; padding: 0; cursor: pointer; }
        .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> li { display: inline; text-align: center; margin-left: 0 !important; }
        .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span
        {
            float: left;
            display: block;
            font-size: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_09;?>px;
            text-decoration: none;
            padding: 5px 12px;
            color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_08;?>;
            margin-left: -1px;
            border: 1px solid transparent;
            line-height: 1.5;
        }
        .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span:active { outline: none; }
        <?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14 == 'style01'){ ?>
        .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> li:first-child span
        {
            -moz-border-radius: 6px 0 0 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px 0 0 6px;
        }
        .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> li:last-child span
        {
            -moz-border-radius: 0 6px 6px 0;
            -webkit-border-radius: 0;
            border-radius: 0 6px 6px 0;
        }
        .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span
        {
            border-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_15;?>;
            background: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_07;?>;
        }
        .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span:hover:not(.active)
        {
            background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_12;?>;
            color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_13;?>;
        }
        .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span.active, .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span:active
        {
            background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_10;?>;
            color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11;?>;
        }
        <?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14 == 'style02'){ ?>
        .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> li:first-child span
        {
            -moz-border-radius: 50px 0 0 50px;
            -webkit-border-radius: 50px;
            border-radius: 50px 0 0 50px;
        }
        .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> li:last-child span
        {
            -moz-border-radius: 0 50px 50px 0;
            -webkit-border-radius: 0;
            border-radius: 0 50px 50px 0;
        }
        .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span
        {
            border-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_15;?>;
            background: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_07;?>;
        }
        .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span:hover:not(.active)
        {
            background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_12;?>;
            color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_13;?>;
        }
        .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span.active, .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span:active
        {
            background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_10;?>;
            color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11;?>;
        }
        <?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14 == 'style03'){ ?>
        .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span
        {
            margin-left: 3px;
            padding: 0;
            width: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_09 + 15;?>px;
            -moz-border-radius: 100%;
            -webkit-border-radius: 100%;
            border-radius: 100%;
            background: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_07;?>;
        }
        .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span:hover:not(.active)
        {
            background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_12;?>;
            color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_13;?>;
        }
        .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span.active, .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span:active
        {
            background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_10;?>;
            color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11;?>;
        }
        <?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14 == 'style04'){ ?>
        .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span
        {
            margin: 0 5px;
            padding: 0;
            width: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_09 + 15;?>px;
            -moz-border-radius: 100%;
            -webkit-border-radius: 100%;
            border-radius: 100%;
            background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_07;?>;
        }
        .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> li:first-child span
        {
            -moz-border-radius: 50px 0 0 50px;
            -webkit-border-radius: 50px;
            border-radius: 50px 0 0 50px;
        }
        .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> li:last-child span
        {
            -moz-border-radius: 0 50px 50px 0;
            -webkit-border-radius: 0;
            border-radius: 0 50px 50px 0;
        }
        .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span:hover:not(.active)
        {
            background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_12;?>;
            color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_13;?>;
        }
        .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span.active, .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span:active
        {
            background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_10;?>;
            color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11;?>;
        }
        <?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14 == 'style05'){ ?>
        .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> { position: relative; z-index: 0; }
        .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?>:after
        {
            content: '';
            position: absolute;
            width: 100%;
            height: calc(100% - 7px);
            left: 0;
            bottom: 0;
            z-index: -1;
            background: -moz-linear-gradient(left, rgba(0, 0, 0, 0) 0%, <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_07;?> 50%, rgba(0, 0, 0, 0) 100%);
            background: -webkit-linear-gradient(left, rgba(0, 0, 0, 0) 0%, <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_07;?> 50%, rgba(0, 0, 0, 0) 100%);
            background: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_07;?> 50%, rgba(0, 0, 0, 0) 100%);
        }
        .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span { padding: 12px 5px 5px; margin: 0 10px; position: relative; z-index: 0; }
        .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span:hover:not(.active)
        {
            color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_13;?>;
        }
        .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span:hover:not(.active):after
        {
            content: '';
            position: absolute;
            width: calc(100% + 10px);
            height: calc(100% - 17px);
            background: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_12;?>;
            -moz-border-radius: 100%;
            -webkit-border-radius: 100%;
            border-radius: 100%;
            z-index: -1;
            left: -5px;
            bottom: 5px;
            margin: auto;
        }
        .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> li:first-child span:hover:after, .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> li:last-child span:hover:after
        {
            display: none;
        }
        .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span.active
        {
            background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_10;?>;
            color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11;?>;
        }
        .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span.active:before
        {
            content: '';
            position: absolute;
            top: -11px;
            left: -10px;
            width: calc(100% + 20px);
            border: 10px solid transparent;
            border-bottom: 7px solid <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_10;?>;
            z-index: -1;
        }
        .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span.active:hover:after { display: none; }
        <?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14 == 'style06'){ ?>
        .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?>
        {
            -moz-border-radius: 50px;
            -webkit-border-radius: 50px;
            border-radius: 50px;
        }
        .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span
        {
            border-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_15;?>;
            background: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_07;?>;
            padding: 10px 15px;
        }
        .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span:hover:not(.active):after
        {
            color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_13;?>;
            background: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_12;?>;
        }
        .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> li:first-child span
        {
            -moz-border-radius: 50px 0 0 50px;
            -webkit-border-radius: 50px;
            border-radius: 50px 0 0 50px;
            padding: 10px 20px;
            position: relative;
        }
        .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> li:first-child span:after, .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> li:first-child span:hover:after
        {
            content: '';
            position: absolute;
            width: 10px;
            height: 100%;
            top: 0;
            right: 0;
            background: -moz-linear-gradient(left, rgba(0, 0, 0, 0) 0%, <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_08;?> 100%);
            background: -webkit-linear-gradient(left, rgba(0, 0, 0, 0) 0%, <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_08;?> 100%);
            background: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_08;?> 100%);
        }
        .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> li:last-child span
        {
            -moz-border-radius: 0 50px 50px 0;
            -webkit-border-radius: 0;
            border-radius: 0 50px 50px 0;
            width: 50px;
            position: relative;
        }
        .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> li:last-child span:after, .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> li:last-child span:hover:after
        {
            content: '';
            position: absolute;
            width: 10px;
            height: 100%;
            top: 0;
            left: 0;
            background: -moz-linear-gradient(left, <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_08;?> 0%, rgba(0, 0, 0, 0) 100%);
            background: -webkit-linear-gradient(left, <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_08;?> 0%, rgba(0, 0, 0, 0) 100%);
            background: linear-gradient(to right, <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_08;?> 0%, rgba(0, 0, 0, 0) 100%);
        }
        .TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span.active
        {
            background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_10;?>;
            color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11;?>;
            -moz-box-shadow: 0 0 3px <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11;?> inset;
            -webkit-box-shadow: 0 0 3px <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11;?> inset;
            box-shadow: 0 0 3px <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11;?> inset;
        }
        <?php }?>
        .TS_GV_ClG_LoadMore_<?php echo $Total_Soft_Gallery_Video;?>
        {
            background-color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_07;?>;
            color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_08;?>;
            font-size:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_09;?>px;
            border: 1px solid <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_15;?>;
            cursor:pointer;
            display: inline-block;
            padding: 0.3em 1em !important;
            line-height: 1 !important;
        }
        .TS_GV_ClG_LoadMore_<?php echo $Total_Soft_Gallery_Video;?>:hover
        {
            background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_12;?>;
            color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_13;?>;
        }
        .TS_GV_ClG_Div_videoTD_<?php echo $Total_Soft_Gallery_Video;?>
        {
            position: relative;
            width: 100%;
        }
        .TS_GV_ClG_Loading_<?php echo $Total_Soft_Gallery_Video;?>
        {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21;?>;
            z-index: 10;
            padding: 0;
            overflow: hidden !important;
            text-align: center;
        }
        .TS_GV_ClG_Loading_<?php echo $Total_Soft_Gallery_Video;?> img
        {
            margin: 0 auto !important;
            position: relative;
            top: 50%;
            transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -webkit-transform: translateY(-50%);
        }
    </style>
    <div class="TS_GV_ClG_<?php echo $Total_Soft_Gallery_Video;?>">
        <?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_20 != ''){ ?>
            <div class="TS_GV_ClG_Loading_<?php echo $Total_Soft_Gallery_Video;?>">
                <img src="<?php echo plugins_url('../Images/Loading/loading' . $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_20 . '.gif',__FILE__);?>">
            </div>
        <?php }?>
        <?php for($i=0;$i<count($Total_Soft_GalleryV_Videos);$i++){ ?>
           <?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL == '')
				{
					$TS_GV_CG_VSR = $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;
				}
				else
				{
					$TS_GV_CG_VSR = $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL;
				}?>
            <?php if($Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType=='All'){ ?>
                <div class="TS_GV_ClG_Div1_Main_<?php echo $Total_Soft_Gallery_Video;?>" onclick="TS_GV_ClG_Div_Full<?php echo $Total_Soft_Gallery_Video;?>(<?php echo $Total_Soft_Gallery_Video;?>, <?php echo $i;?>)">
                    <div class="TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?>">
                        <div class="TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?>">
                            <img id="TS_GV_ClG_Div2_Img_<?php echo $Total_Soft_Gallery_Video . '_' . $i;?>" src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>" alt="<?php echo $TS_GV_CG_VSR;?>"/>
                            <?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02 == 'effect01'){ ?>
                                <div class="TS_GV_ClG_Div2_Hov1_<?php echo $Total_Soft_Gallery_Video;?>">
												<span class="TS_GV_ClG_Div2_Hov1_Title_<?php echo $Total_Soft_Gallery_Video;?>">
													<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
												</span>
                                </div>
                            <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02 == 'effect02'){ ?>
                                <div class="TS_GV_ClG_Div2_Hov2_<?php echo $Total_Soft_Gallery_Video;?>">
												<span class="TS_GV_ClG_Div2_Hov2_Title_<?php echo $Total_Soft_Gallery_Video;?>">
													<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
												</span>
                                </div>
                            <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02 == 'effect03'){ ?>
                                <div class="TS_GV_ClG_Div2_Hov3_<?php echo $Total_Soft_Gallery_Video;?>"></div>
                                <i class="TS_GV_ClG_Div2_Hov3_Icon_<?php echo $Total_Soft_Gallery_Video;?> totalsoft totalsoft-<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>"></i>
                            <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02 == 'effect04'){ ?>
                                <span class="TS_GV_ClG_Div2_Hov4_Span_<?php echo $Total_Soft_Gallery_Video;?>">
												<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
											</span>
                            <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02 == 'effect05'){ ?>
                                <div class="TS_GV_ClG_Div2_Hov5_<?php echo $Total_Soft_Gallery_Video;?>">
												<span class="TS_GV_ClG_Div2_Hov5_Title_<?php echo $Total_Soft_Gallery_Video;?>">
													<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
												</span>
                                </div>
                            <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02 == 'effect06'){ ?>
                                <div class="TS_GV_ClG_Div2_Hov6_<?php echo $Total_Soft_Gallery_Video;?>"></div>
                                <div class="TS_GV_ClG_Div2_Hov6_1_<?php echo $Total_Soft_Gallery_Video;?>">
                                    <div class="TS_GV_ClG_Div2_Hov6_2_<?php echo $Total_Soft_Gallery_Video;?>"></div>
                                </div>
                                <span class="TS_GV_ClG_Div2_Hov6_Title_<?php echo $Total_Soft_Gallery_Video;?>">
												<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
											</span>
                            <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02 == 'effect07'){ ?>
                                <div class="TS_GV_ClG_Div2_Hov7_<?php echo $Total_Soft_Gallery_Video;?>">
												<span class="TS_GV_ClG_Div2_Hov7_Title_<?php echo $Total_Soft_Gallery_Video;?>">
													<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
												</span>
                                    <ul class="TS_GV_ClG_Div2_Hov7_Ul_<?php echo $Total_Soft_Gallery_Video;?>">
                                        <li>
                                            <i class="TS_GV_ClG_Div2_Hov7_Icon_<?php echo $Total_Soft_Gallery_Video;?> totalsoft totalsoft-<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>"></i>
                                        </li>
                                    </ul>
                                </div>
                            <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02 == 'effect08'){ ?>
                                <span class="TS_GV_ClG_Div2_Hov8_<?php echo $Total_Soft_Gallery_Video;?>">
												<ul class="TS_GV_ClG_Div2_Hov8_Ul_<?php echo $Total_Soft_Gallery_Video;?>">
													<li>
														<i class="TS_GV_ClG_Div2_Hov8_Icon_<?php echo $Total_Soft_Gallery_Video;?> totalsoft totalsoft-<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>"></i>
													</li>
												</ul>
												<span class="TS_GV_ClG_Div2_Hov8_Title_<?php echo $Total_Soft_Gallery_Video;?>">
													<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
												</span>
											</span>
                            <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02 == 'effect09'){ ?>
                                <div class="TS_GV_ClG_Div2_Hov9_<?php echo $Total_Soft_Gallery_Video;?>">
												<span class="TS_GV_ClG_Div2_Hov9_Title_<?php echo $Total_Soft_Gallery_Video;?>">
													<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
												</span>
                                </div>
                            <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02 == 'effect10'){ ?>
                                <div class="TS_GV_ClG_Div2_Hov10_2_<?php echo $Total_Soft_Gallery_Video;?>"></div>
                                <div class="TS_GV_ClG_Div2_Hov10_<?php echo $Total_Soft_Gallery_Video;?>">
                                    <div class="TS_GV_ClG_Div2_Hov10_1_<?php echo $Total_Soft_Gallery_Video;?>">
													<span class="TS_GV_ClG_Div2_Hov10_Title_<?php echo $Total_Soft_Gallery_Video;?>">
														<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
													</span>
                                    </div>
                                </div>
                            <?php }else{ ?>
                                <div class="TS_GV_ClG_Div2_Hov_None_<?php echo $Total_Soft_Gallery_Video;?>">
												<span class="TS_GV_ClG_Div2_Hov_None_Title_<?php echo $Total_Soft_Gallery_Video;?>">
													<span>
														<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
													</span>
												</span>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            <?php }else{ ?>
                <?php if($i<$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage){ ?>
                    <div class="TS_GV_ClG_Div1_Main_<?php echo $Total_Soft_Gallery_Video;?> GV_CG_Height_<?php echo $Total_Soft_Gallery_Video;?>" onclick="TS_GV_ClG_Div_Full<?php echo $Total_Soft_Gallery_Video;?>(<?php echo $Total_Soft_Gallery_Video;?>, <?php echo $i;?>)" id="TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i+1;?>">
                        <div class="TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?>">
                            <div class="TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?>">
                                <img id="TS_GV_ClG_Div2_Img_<?php echo $Total_Soft_Gallery_Video . '_' . $i;?>" src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>" alt="<?php echo $TS_GV_CG_VSR;?>"/>
                                <?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02 == 'effect01'){ ?>
                                    <div class="TS_GV_ClG_Div2_Hov1_<?php echo $Total_Soft_Gallery_Video;?>">
													<span class="TS_GV_ClG_Div2_Hov1_Title_<?php echo $Total_Soft_Gallery_Video;?>">
														<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
													</span>
                                    </div>
                                <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02 == 'effect02'){ ?>
                                    <div class="TS_GV_ClG_Div2_Hov2_<?php echo $Total_Soft_Gallery_Video;?>">
													<span class="TS_GV_ClG_Div2_Hov2_Title_<?php echo $Total_Soft_Gallery_Video;?>">
														<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
													</span>
                                    </div>
                                <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02 == 'effect03'){ ?>
                                    <div class="TS_GV_ClG_Div2_Hov3_<?php echo $Total_Soft_Gallery_Video;?>"></div>
                                    <i class="TS_GV_ClG_Div2_Hov3_Icon_<?php echo $Total_Soft_Gallery_Video;?> totalsoft totalsoft-<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>"></i>
                                <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02 == 'effect04'){ ?>
                                    <span class="TS_GV_ClG_Div2_Hov4_Span_<?php echo $Total_Soft_Gallery_Video;?>">
													<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
												</span>
                                <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02 == 'effect05'){ ?>
                                    <div class="TS_GV_ClG_Div2_Hov5_<?php echo $Total_Soft_Gallery_Video;?>">
													<span class="TS_GV_ClG_Div2_Hov5_Title_<?php echo $Total_Soft_Gallery_Video;?>">
														<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
													</span>
                                    </div>
                                <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02 == 'effect06'){ ?>
                                    <div class="TS_GV_ClG_Div2_Hov6_<?php echo $Total_Soft_Gallery_Video;?>"></div>
                                    <div class="TS_GV_ClG_Div2_Hov6_1_<?php echo $Total_Soft_Gallery_Video;?>">
                                        <div class="TS_GV_ClG_Div2_Hov6_2_<?php echo $Total_Soft_Gallery_Video;?>"></div>
                                    </div>
                                    <span class="TS_GV_ClG_Div2_Hov6_Title_<?php echo $Total_Soft_Gallery_Video;?>">
													<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
												</span>
                                <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02 == 'effect07'){ ?>
                                    <div class="TS_GV_ClG_Div2_Hov7_<?php echo $Total_Soft_Gallery_Video;?>">
													<span class="TS_GV_ClG_Div2_Hov7_Title_<?php echo $Total_Soft_Gallery_Video;?>">
														<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
													</span>
                                        <ul class="TS_GV_ClG_Div2_Hov7_Ul_<?php echo $Total_Soft_Gallery_Video;?>">
                                            <li>
                                                <i class="TS_GV_ClG_Div2_Hov7_Icon_<?php echo $Total_Soft_Gallery_Video;?> totalsoft totalsoft-<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>"></i>
                                            </li>
                                        </ul>
                                    </div>
                                <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02 == 'effect08'){ ?>
                                    <span class="TS_GV_ClG_Div2_Hov8_<?php echo $Total_Soft_Gallery_Video;?>">
													<ul class="TS_GV_ClG_Div2_Hov8_Ul_<?php echo $Total_Soft_Gallery_Video;?>">
														<li>
															<i class="TS_GV_ClG_Div2_Hov8_Icon_<?php echo $Total_Soft_Gallery_Video;?> totalsoft totalsoft-<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>"></i>
														</li>
													</ul>
													<span class="TS_GV_ClG_Div2_Hov8_Title_<?php echo $Total_Soft_Gallery_Video;?>">
														<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
													</span>
												</span>
                                <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02 == 'effect09'){ ?>
                                    <div class="TS_GV_ClG_Div2_Hov9_<?php echo $Total_Soft_Gallery_Video;?>">
													<span class="TS_GV_ClG_Div2_Hov9_Title_<?php echo $Total_Soft_Gallery_Video;?>">
														<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
													</span>
                                    </div>
                                <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02 == 'effect10'){ ?>
                                    <div class="TS_GV_ClG_Div2_Hov10_2_<?php echo $Total_Soft_Gallery_Video;?>"></div>
                                    <div class="TS_GV_ClG_Div2_Hov10_<?php echo $Total_Soft_Gallery_Video;?>">
                                        <div class="TS_GV_ClG_Div2_Hov10_1_<?php echo $Total_Soft_Gallery_Video;?>">
														<span class="TS_GV_ClG_Div2_Hov10_Title_<?php echo $Total_Soft_Gallery_Video;?>">
															<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
														</span>
                                        </div>
                                    </div>
                                <?php }else{ ?>
                                    <div class="TS_GV_ClG_Div2_Hov_None_<?php echo $Total_Soft_Gallery_Video;?>">
													<span class="TS_GV_ClG_Div2_Hov_None_Title_<?php echo $Total_Soft_Gallery_Video;?>">
														<span>
															<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
														</span>
												</span>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                <?php }else{ ?>
                    <div class="TS_GV_ClG_Div1_Main_<?php echo $Total_Soft_Gallery_Video;?> noshow1" onclick="TS_GV_ClG_Div_Full<?php echo $Total_Soft_Gallery_Video;?>(<?php echo $Total_Soft_Gallery_Video;?>, <?php echo $i;?>)" id="TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i+1;?>" style="padding: 0; height: 0; display: none;">
                        <div class="TS_GV_ClG_Div1_<?php echo $Total_Soft_Gallery_Video;?>">
                            <div class="TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video;?>">
                                <img id="TS_GV_ClG_Div2_Img_<?php echo $Total_Soft_Gallery_Video . '_' . $i;?>" src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>" alt="<?php echo $TS_GV_CG_VSR;?>"/>
                                <?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02 == 'effect01'){ ?>
                                    <div class="TS_GV_ClG_Div2_Hov1_<?php echo $Total_Soft_Gallery_Video;?>">
													<span class="TS_GV_ClG_Div2_Hov1_Title_<?php echo $Total_Soft_Gallery_Video;?>">
														<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
													</span>
                                    </div>
                                <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02 == 'effect02'){ ?>
                                    <div class="TS_GV_ClG_Div2_Hov2_<?php echo $Total_Soft_Gallery_Video;?>">
													<span class="TS_GV_ClG_Div2_Hov2_Title_<?php echo $Total_Soft_Gallery_Video;?>">
														<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
													</span>
                                    </div>
                                <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02 == 'effect03'){ ?>
                                    <div class="TS_GV_ClG_Div2_Hov3_<?php echo $Total_Soft_Gallery_Video;?>"></div>
                                    <i class="TS_GV_ClG_Div2_Hov3_Icon_<?php echo $Total_Soft_Gallery_Video;?> totalsoft totalsoft-<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>"></i>
                                <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02 == 'effect04'){ ?>
                                    <span class="TS_GV_ClG_Div2_Hov4_Span_<?php echo $Total_Soft_Gallery_Video;?>">
													<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
												</span>
                                <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02 == 'effect05'){ ?>
                                    <div class="TS_GV_ClG_Div2_Hov5_<?php echo $Total_Soft_Gallery_Video;?>">
													<span class="TS_GV_ClG_Div2_Hov5_Title_<?php echo $Total_Soft_Gallery_Video;?>">
														<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
													</span>
                                    </div>
                                <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02 == 'effect06'){ ?>
                                    <div class="TS_GV_ClG_Div2_Hov6_<?php echo $Total_Soft_Gallery_Video;?>"></div>
                                    <div class="TS_GV_ClG_Div2_Hov6_1_<?php echo $Total_Soft_Gallery_Video;?>">
                                        <div class="TS_GV_ClG_Div2_Hov6_2_<?php echo $Total_Soft_Gallery_Video;?>"></div>
                                    </div>
                                    <span class="TS_GV_ClG_Div2_Hov6_Title_<?php echo $Total_Soft_Gallery_Video;?>">
													<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
												</span>
                                <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02 == 'effect07'){ ?>
                                    <div class="TS_GV_ClG_Div2_Hov7_<?php echo $Total_Soft_Gallery_Video;?>">
													<span class="TS_GV_ClG_Div2_Hov7_Title_<?php echo $Total_Soft_Gallery_Video;?>">
														<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
													</span>
                                        <ul class="TS_GV_ClG_Div2_Hov7_Ul_<?php echo $Total_Soft_Gallery_Video;?>">
                                            <li>
                                                <i class="TS_GV_ClG_Div2_Hov7_Icon_<?php echo $Total_Soft_Gallery_Video;?> totalsoft totalsoft-<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>"></i>
                                            </li>
                                        </ul>
                                    </div>
                                <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02 == 'effect08'){ ?>
                                    <span class="TS_GV_ClG_Div2_Hov8_<?php echo $Total_Soft_Gallery_Video;?>">
													<ul class="TS_GV_ClG_Div2_Hov8_Ul_<?php echo $Total_Soft_Gallery_Video;?>">
														<li>
															<i class="TS_GV_ClG_Div2_Hov8_Icon_<?php echo $Total_Soft_Gallery_Video;?> totalsoft totalsoft-<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>"></i>
														</li>
													</ul>
													<span class="TS_GV_ClG_Div2_Hov8_Title_<?php echo $Total_Soft_Gallery_Video;?>">
														<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
													</span>
												</span>
                                <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02 == 'effect09'){ ?>
                                    <div class="TS_GV_ClG_Div2_Hov9_<?php echo $Total_Soft_Gallery_Video;?>">
													<span class="TS_GV_ClG_Div2_Hov9_Title_<?php echo $Total_Soft_Gallery_Video;?>">
														<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
													</span>
                                    </div>
                                <?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02 == 'effect10'){ ?>
                                    <div class="TS_GV_ClG_Div2_Hov10_2_<?php echo $Total_Soft_Gallery_Video;?>"></div>
                                    <div class="TS_GV_ClG_Div2_Hov10_<?php echo $Total_Soft_Gallery_Video;?>">
                                        <div class="TS_GV_ClG_Div2_Hov10_1_<?php echo $Total_Soft_Gallery_Video;?>">
														<span class="TS_GV_ClG_Div2_Hov10_Title_<?php echo $Total_Soft_Gallery_Video;?>">
															<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
														</span>
                                        </div>
                                    </div>
                                <?php }else{ ?>
                                    <div class="TS_GV_ClG_Div2_Hov_None_<?php echo $Total_Soft_Gallery_Video;?>">
													<span class="TS_GV_ClG_Div2_Hov_None_Title_<?php echo $Total_Soft_Gallery_Video;?>">
														<span>
															<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
														</span>
													</span>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                <?php } } } ?>
        <?php if($Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType=='Pagination'){ ?>
            <div class="TotalSoftcenter" style="float: none !important;">
                <ul class="TS_GV_ClG_Pagination_<?php echo $Total_Soft_Gallery_Video;?>" style='margin:0px;padding:0px;'>
                    <?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_16 != 'none'){ ?>
                        <li onclick="Total_Soft_GV_CG_PageP('<?php echo $Total_Soft_Gallery_Video;?>', '<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>')">
                            <span><i class="totalsoft totalsoft-<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_16;?>-left"></i></span>
                        </li>
                    <?php }?>
                    <?php for($i=1;$i<=ceil(count($Total_Soft_GalleryV_Videos)/$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage);$i++){ ?>
                        <?php if($i==1){ ?>
                            <li id="TotalSoft_GV_CG_PLi_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i;?>" onclick="Total_Soft_GV_CG_Page('<?php echo $Total_Soft_Gallery_Video;?>','<?php echo $i?>','<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>')">
                                <span class="active"><?php echo $i;?></span>
                            </li>
                        <?php } else { ?>
                            <li id="TotalSoft_GV_CG_PLi_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i;?>" onclick="Total_Soft_GV_CG_Page('<?php echo $Total_Soft_Gallery_Video;?>','<?php echo $i?>','<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>')">
                                <span><?php echo $i;?></span>
                            </li>
                        <?php }?>
                    <?php }?>
                    <?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_16 != 'none'){ ?>
                        <li onclick="Total_Soft_GV_CG_PageN('<?php echo $Total_Soft_Gallery_Video;?>', '<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>', '<?php echo ceil(count($Total_Soft_GalleryV_Videos)/$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage);?>')">
                            <span><i class="totalsoft totalsoft-<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_16;?>-right"></i></span>
                        </li>
                    <?php }?>
                </ul>
            </div>
        <?php }?>
        <?php if($Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType=='Load'){ ?>
            <div class="TotalSoftcenter" style="float: none !important;" id="TotalSoft_VG_CG_PageDiv_<?php echo $Total_Soft_Gallery_Video;?>">
							<span class="TS_GV_ClG_LoadMore_<?php echo $Total_Soft_Gallery_Video;?>" onclick="Total_Soft_GV_CG_PageLM('<?php echo $Total_Soft_Gallery_Video;?>', '<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>', '<?php echo ceil(count($Total_Soft_GalleryV_Videos)/$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage);?>')">
								<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18 == 'Before' && $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_17 != 'none'){ ?>
                                    <i class="totalsoft totalsoft-<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_17;?>" style="margin-right: 5px;"></i>
                                <?php }?>
                                <?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_LoadMore;?>
                                <?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18 == 'After' && $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_17 != 'none'){ ?>
                                    <i class="totalsoft totalsoft-<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_17;?>" style="margin-left: 5px;"></i>
                                <?php }?>
							</span>
                <input type="text" style="display:none;" id="TotalSoft_VG_CG_Page_<?php echo $Total_Soft_Gallery_Video;?>" value="1">
            </div>
        <?php } ?>
        <input type="text" style="display:none;" class="TS_VG_CG_AE_<?php echo $Total_Soft_Gallery_Video;?>" value="<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_19;?>">
    </div>
    <div class="TS_GV_ClG_Div_Full_<?php echo $Total_Soft_Gallery_Video;?>" onclick="TS_GV_ClG_Div_Full_Cl<?php echo $Total_Soft_Gallery_Video;?>(<?php echo $Total_Soft_Gallery_Video;?>)"></div>
    <i class="TS_GV_ClG_Div_Close_Icon_<?php echo $Total_Soft_Gallery_Video;?> totalsoft totalsoft-<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_29;?>" onclick="TS_GV_ClG_Div_Full_Cl<?php echo $Total_Soft_Gallery_Video;?>(<?php echo $Total_Soft_Gallery_Video;?>)" style="display:none;"></i>
    <div class="TS_GV_ClG_Div_box_<?php echo $Total_Soft_Gallery_Video;?>">
        <?php for($i=0;$i<count($Total_Soft_GalleryV_Videos);$i++){ ?>
            <div class="TS_GV_ClG_Div_box_div1_<?php echo $Total_Soft_Gallery_Video;?> TS_GV_ClG_Div_box_div1_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i;?>">
                <div class="TS_GV_ClG_Div_video_<?php echo $Total_Soft_Gallery_Video;?>">
                    <iframe src="" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="TS_GV_ClG_Div_Image_<?php echo $Total_Soft_Gallery_Video;?>">
                    <img src=""/>
                </div>
                <div class="TS_GV_ClG_Div_videoTD_<?php echo $Total_Soft_Gallery_Video;?>">
                    <?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19 == 'true'){ ?>
                        <h3><?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?></h3>
                        <span class="TS_GV_ClG_Div_box_span_<?php echo $Total_Soft_Gallery_Video;?>"></span>
                    <?php }?>
                </div>
                <?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24 == 'true'){ ?>
                    <?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc);?>
                <?php }?>
                <?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink != ''){ ?>
                    <div style='margin-top:10px; position: relative;'>
                        <a class="TotalSoft_GV_CG_Link_<?php echo $Total_Soft_Gallery_Video;?>" href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink;?>" <?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VONT=='true'){echo 'target="_blank"';}?>>
                            <?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_06 == 'Before'){ ?>
                                <i class="TotalSoft_GV_CG_Link_Icon_<?php echo $Total_Soft_Gallery_Video;?> totalsoft totalsoft-<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03;?>" style="margin-right: 5px;"></i>
                            <?php }?>
                            <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_35;?>
                            <?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_06 == 'After'){ ?>
                                <i class="TotalSoft_GV_CG_Link_Icon_<?php echo $Total_Soft_Gallery_Video;?> totalsoft totalsoft-<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03;?>" style="margin-left: 5px;"></i>
                            <?php }?>
                        </a>
                    </div>
                <?php }?>
            </div>
        <?php }?>
    </div>
    <script type="text/javascript">
        function TS_GV_ClG_Div_Full<?php echo $Total_Soft_Gallery_Video;?>(id, num)
        {
            jQuery('.fixed-header-box').css({'z-index':'0'});
            jQuery('.TS_GV_ClG_Div_Full_'+id).animate({'width':'100%', 'height':'100%','top':'0','left':'0'},500);
            setTimeout(function(){
                jQuery('.TS_GV_ClG_Div_box_'+id).css({'display':'flex','display':'-webkit-flex'});
                jQuery('.TS_GV_ClG_Div_box_div1_'+id).css('display','none');
                jQuery('.TS_GV_ClG_Div_box_div1_'+id+'_'+num).css({'display':'block'});
                jQuery('.TS_GV_ClG_Div_Close_Icon_'+id).css({'display':'block'});
                var iframesource = jQuery('#TS_GV_ClG_Div2_Img_'+id+'_'+num).attr('alt');
                var isvideotf = 'false';
                if(iframesource.indexOf('youtube.com/embed/') > -1){ isvideotf = 'true'; }
                else if(iframesource.indexOf('player.vimeo.com/video/') > -1){ isvideotf = 'true'; }
                else if(iframesource.indexOf('.mp4') > -1){ isvideotf = 'true'; }
                else if(iframesource.indexOf('fast.wistia.net/embed/iframe/') > -1){ isvideotf = 'true'; }
                if(isvideotf == 'true')
                {
                	if(iframesource.indexOf('start')===-1){jQuery('.TS_GV_ClG_Div_box_div1_'+id+'_'+num+' iframe').attr('src',iframesource+'?autoplay=1;rel=0;iv_load_policy=3');}else{jQuery('.TS_GV_ClG_Div_box_div1_'+id+'_'+num+' iframe').attr('src',iframesource+'&autoplay=1;rel=0;iv_load_policy=3');}
                   // jQuery('.TS_GV_ClG_Div_box_div1_'+id+'_'+num+' iframe').attr('src',iframesource+'?autoplay=1;rel=0;iv_load_policy=3');
                    jQuery('.TS_GV_ClG_Div_video_'+id).css('display','block');
                    jQuery('.TS_GV_ClG_Div_Image_'+id).css('display','none');
                }
                else
                {
                    jQuery('.TS_GV_ClG_Div_box_div1_'+id+'_'+num+' img').attr('src',iframesource);
                    jQuery('.TS_GV_ClG_Div_video_'+id).css('display','none');
                    jQuery('.TS_GV_ClG_Div_Image_'+id).css('display','block');
                }
            },500)
        }
        function TS_GV_ClG_Div_Full_Cl<?php echo $Total_Soft_Gallery_Video;?>(id)
        {
            jQuery('.fixed-header-box').css({'z-index':'10'});
            jQuery('.TS_GV_ClG_Div_box_'+id).css({'display':'none'});
            jQuery('.TS_GV_ClG_Div_box_div1_'+id).css('display','none');
            jQuery('.TS_GV_ClG_Div_box_div1_'+id+' iframe').attr('src','');
            jQuery('.TS_GV_ClG_Div_box_div1_'+id+' img').attr('src','');
            jQuery('.TS_GV_ClG_Div_Close_Icon_'+id).css({'display':'none'});
            jQuery('.TS_GV_ClG_Div_Full_'+id).animate({'width':'0%', 'height':'0%','top':'50%','left':'50%'},500);
        }
        /*----poxel---*/
		jQuery('.TS_GV_ClG_Div_box_<?php echo $Total_Soft_Gallery_Video;?>').click(function(e){
			if (e.target !== this){return;}
			var id = '<?php echo $Total_Soft_Gallery_Video; ?>';
			jQuery('.fixed-header-box').css({'z-index':'10'});
			jQuery('.TS_GV_ClG_Div_box_'+id).css({'display':'none'});
			jQuery('.TS_GV_ClG_Div_box_div1_'+id).css('display','none');
			jQuery('.TS_GV_ClG_Div_box_div1_'+id+' iframe').attr('src','');
			jQuery('.TS_GV_ClG_Div_box_div1_'+id+' img').attr('src','');
			jQuery('.TS_GV_ClG_Div_Close_Icon_'+id).css({'display':'none'});
			jQuery('.TS_GV_ClG_Div_Full_'+id).animate({'width':'0%', 'height':'0%','top':'50%','left':'50%'},500);
		});
		/*---*/
        jQuery(document).ready(function(){
        	var win = jQuery(window);
			checkWidth();
			win.resize(checkWidth);
            function checkWidth () {
            var parent_element = jQuery('.TS_GV_ClG_Div1_Main_<?php echo $Total_Soft_Gallery_Video;?>').parent().parent();
        	jQuery(parent_element).each(function(index, elem){
               if(jQuery(elem).width()<=250){
                    jQuery(parent_element).find('.TS_GV_ClG_Div1_Main_<?php echo $Total_Soft_Gallery_Video;?>').css('width',jQuery(parent_element).width());
                    jQuery(parent_element).css({'padding-right':'10px','padding-left':'10px'});
	        	}
        	});
            }
            var array_images<?php echo $Total_Soft_Gallery_Video;?>=[];
            jQuery('.TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video; ?>').each(function(){
                if( jQuery(this).find('img').attr("src") != "" ) { array_images<?php echo $Total_Soft_Gallery_Video;?>.push(jQuery(this).find('img').attr("src")); }
            })
            var y_images<?php echo $Total_Soft_Gallery_Video;?>=0;
            jQuery('.TS_GV_ClG_Div2_<?php echo $Total_Soft_Gallery_Video; ?>').each(function(i){
                jQuery(this).find('img').attr('src', array_images<?php echo $Total_Soft_Gallery_Video;?>[i]).on("load",function(){
                    y_images<?php echo $Total_Soft_Gallery_Video;?>++;
                    if(y_images<?php echo $Total_Soft_Gallery_Video;?> == array_images<?php echo $Total_Soft_Gallery_Video;?>.length)
                    {
                        jQuery('.TS_GV_ClG_Loading_<?php echo $Total_Soft_Gallery_Video;?>').css('display','none');
                    }
                })
            })

            var delaytime = 0;
            var TS_VG_CG_AE = jQuery('.TS_VG_CG_AE_<?php echo $Total_Soft_Gallery_Video; ?>').val();
            var GV_CG_Height = jQuery('.GV_CG_Height_<?php echo $Total_Soft_Gallery_Video; ?>').css('height');

            jQuery('.TS_GV_ClG_<?php echo $Total_Soft_Gallery_Video;?> .TS_GV_ClG_Div1_Main_<?php echo $Total_Soft_Gallery_Video;?>').each(function(){
                if(!jQuery(this).hasClass('noshow1'))
                {
                    delaytime++;
                    if(TS_VG_CG_AE == 'none')
                    {
                        jQuery(this).css({'height': GV_CG_Height, 'padding': '0.5em', 'display':'inline-block','opacity':'1'});
                    }
                    else if(TS_VG_CG_AE == '')
                    {
                        jQuery(this).animate({'height': GV_CG_Height, 'padding': '0.5em','opacity':'1'},1000).css({'display': 'inline-block'}).addClass('GV_CG_Height_<?php echo $Total_Soft_Gallery_Video; ?>');
                    }
                    else if(TS_VG_CG_AE == 'fadeIn')
                    {
                        jQuery(this).css({'height': GV_CG_Height, 'padding': '0.5em', 'display':'inline-block','animation':'fadeIn 0.65s ease '+0.2*delaytime+'s forwards','-webkit-animation':'fadeIn 0.65s ease '+0.2*delaytime+'s forwards','-moz-animation':'fadeIn 0.65s ease '+0.2*delaytime+'s forwards'});
                    }
                    else if(TS_VG_CG_AE == 'moveUp')
                    {
                        jQuery(this).css({'height': GV_CG_Height, 'padding': '0.5em', 'display':'inline-block','animation':'moveUp 0.65s ease '+0.2*delaytime+'s forwards','-webkit-animation':'moveUp 0.65s ease '+0.2*delaytime+'s forwards','-moz-animation':'moveUp 0.65s ease '+0.2*delaytime+'s forwards'});
                    }
                    else if(TS_VG_CG_AE == 'scaleUp')
                    {
                        jQuery(this).css({'height': GV_CG_Height, 'padding': '0.5em', 'display':'inline-block','animation':'scaleUp 0.65s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'scaleUp 0.65s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'scaleUp 0.65s ease-in-out '+0.2*delaytime+'s forwards'});
                    }
                    else if(TS_VG_CG_AE == 'fallPerspective')
                    {
                        jQuery(this).css({'height': GV_CG_Height, 'padding': '0.5em', 'display':'inline-block','animation':'fallPerspective 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'fallPerspective 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'fallPerspective 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
                    }
                    else if(TS_VG_CG_AE == 'fly')
                    {
                        jQuery(this).css({'height': GV_CG_Height, 'padding': '0.5em', 'display':'inline-block','animation':'fly 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'fly 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'fly 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
                    }
                    else if(TS_VG_CG_AE == 'flip')
                    {
                        jQuery(this).css({'height': GV_CG_Height, 'padding': '0.5em', 'display':'inline-block','animation':'flip 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'flip 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'flip 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
                    }
                    else if(TS_VG_CG_AE == 'helix')
                    {
                        jQuery(this).css({'height': GV_CG_Height, 'padding': '0.5em', 'display':'inline-block','animation':'helix 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'helix 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'helix 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
                    }
                    else if(TS_VG_CG_AE == 'popUp')
                    {
                        jQuery(this).css({'height': GV_CG_Height, 'padding': '0.5em', 'display':'inline-block','animation':'popUp 0.8s ease-in '+0.2*delaytime+'s forwards','-webkit-animation':'popUp 0.8s ease-in '+0.2*delaytime+'s forwards','-moz-animation':'popUp 0.8s ease-in '+0.2*delaytime+'s forwards'});
                    }
                }
            })
        })
    </script>
<?php } else if($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Space Gallery'){ ?>
				<style type="text/css">
					.TotalSoft_GV_SG_Website_<?php echo $Total_Soft_Gallery_Video;?>, .TotalSoft_GV_SG_Website_<?php echo $Total_Soft_Gallery_Video;?> *
					{
						margin: 0;
						padding: 0;
						box-sizing: border-box;
						-webkit-box-sizing: border-box;
						-moz-box-sizing: border-box;
						line-height: 1;
					}
					.TotalSoft_GV_SG_Grid_<?php echo $Total_Soft_Gallery_Video;?>
					{
						-webkit-column-count: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02;?>;
						-moz-column-count: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02;?>;
						column-count: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_02;?>;
						-webkit-column-gap: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_03;?>px;
						-moz-column-gap: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_03;?>px;
						column-gap: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_03;?>px;
						<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01 == 'fallPerspective'){ ?>
							-webkit-perspective: 1300px;
							-moz-perspective: 1300px;
							perspective: 1300px;
						<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01 == 'fly'){ ?>
							-webkit-perspective: 1300px;
							-moz-perspective: 1300px;
							perspective: 1300px;
						<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01 == 'flip'){ ?>
							-webkit-perspective: 1300px;
							-moz-perspective: 1300px;
							perspective: 1300px;
						<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01 == 'helix'){ ?>
							-webkit-perspective: 1300px;
							-moz-perspective: 1300px;
							perspective: 1300px;
						<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01 == 'popUp'){ ?>
							-webkit-perspective: 1300px;
							-moz-perspective: 1300px;
							perspective: 1300px;
						<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01 == 'animno' || $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01 == 'animsc' || $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01 == 'animtr'){ ?>
							-webkit-perspective: 1000px;
							-moz-perspective: 1000px;
							perspective: 1000px;
						<?php }?>
						float: left !important;
						width: 100%;
					}
					@media (max-width: 850px) { .TotalSoft_GV_SG_Grid_<?php echo $Total_Soft_Gallery_Video;?> { -webkit-column-count: 2; -moz-column-count: 2; column-count: 2; } }
					@media (max-width: 600px) { .TotalSoft_GV_SG_Grid_<?php echo $Total_Soft_Gallery_Video;?> { -webkit-column-count: 1; -moz-column-count: 1; column-count: 1; } }
					.TotalSoft_GV_SG_Item_<?php echo $Total_Soft_Gallery_Video;?>
					{
						-webkit-column-break-inside: avoid;
						page-break-inside: avoid;
						break-inside: avoid;
						will-change: transform;
						opacity: 0;
						width: 100%;
						margin-bottom: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_03;?>px;
						position: relative;
						<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01 == 'moveUp'){ ?>
							-webkit-transform: translateY(200px) translateZ(0);
							-moz-transform: translateY(200px) translateZ(0);
							transform: translateY(200px) translateZ(0);
						<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01 == 'scaleUp'){ ?>
							-webkit-transform: scale(0.6) translateZ(0);
							-moz-transform: scale(0.6) translateZ(0);
							transform: scale(0.6) translateZ(0);
						<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01 == 'fallPerspective'){ ?>
							-webkit-transform-style: preserve-3d;
							-moz-transform-style: preserve-3d;
							transform-style: preserve-3d;
							-webkit-transform: translateZ(400px) translateY(300px) rotateX(-90deg);
							-moz-transform: translateZ(400px) translateY(300px) rotateX(-90deg);
							transform: translateZ(400px) translateY(300px) rotateX(-90deg);
						<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01 == 'fly'){ ?>
							-webkit-transform-style: preserve-3d;
							-moz-transform-style: preserve-3d;
							transform-style: preserve-3d;
							-webkit-transform-origin: 50% 50% -300px;
							-moz-transform-origin: 50% 50% -300px;
							transform-origin: 50% 50% -300px;
							-webkit-transform: rotateX(-180deg) translateZ(0);
							-moz-transform: rotateX(-180deg) translateZ(0);
							transform: rotateX(-180deg) translateZ(0);
						<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01 == 'flip'){ ?>
							-webkit-transform-style: preserve-3d;
							-moz-transform-style: preserve-3d;
							transform-style: preserve-3d;
							-webkit-transform-origin: 0% 0%;
							-moz-transform-origin: 0% 0%;
							transform-origin: 0% 0%;
							-webkit-transform: rotateX(-80deg) translateZ(0);
							-moz-transform: rotateX(-80deg) translateZ(0);
							transform: rotateX(-80deg) translateZ(0);
						<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01 == 'helix'){ ?>
							-webkit-transform-style: preserve-3d;
							-moz-transform-style: preserve-3d;
							transform-style: preserve-3d;
							-webkit-transform: rotateY(-180deg) translateZ(0);
							-moz-transform: rotateY(-180deg) translateZ(0);
							transform: rotateY(-180deg) translateZ(0);
						<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01 == 'popUp'){ ?>
							-webkit-transform-style: preserve-3d;
							-moz-transform-style: preserve-3d;
							transform-style: preserve-3d;
							-webkit-transform: scale(0.4) translateZ(0);
							-moz-transform: scale(0.4) translateZ(0);
							transform: scale(0.4) translateZ(0);
						<?php }else{ ?>
							-webkit-transform: translateZ(0);
							-moz-transform: translateZ(0);
							transform: translateZ(0);
						<?php }?>
					}
					.TotalSoft_GV_SG_Videodiv_<?php echo $Total_Soft_Gallery_Video;?> { width: 100%; padding-top: 56.25%; position: relative; }
					.TotalSoft_GV_SG_Imagediv_<?php echo $Total_Soft_Gallery_Video;?> { width: 100%; display: block; text-align: center; position: relative; }
					.TotalSoft_GV_SG_Imagediv_<?php echo $Total_Soft_Gallery_Video;?> img { width: 100%; height: auto; margin: 0 auto !important; }
					.TotalSoft_GV_SG_Item_<?php echo $Total_Soft_Gallery_Video;?> .TotalSoft_GV_SG_VideoTitle_<?php echo $Total_Soft_Gallery_Video;?>
					{
						position: relative;
						display: block;
						padding: 5px 10px;
						font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_04;?>px;
						font-family: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_05;?>;
						text-align: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_06;?>;
						color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_07;?>;
						<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_08 == 'transparent'){ ?>
							background: transparent !important;
						<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_08 == 'color'){ ?>
							background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?> !important;
						<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_08 == 'gradient1'){ ?>
							background: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>;
							background: -webkit-linear-gradient(<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>);
							background: -o-linear-gradient(<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>);
							background: -moz-linear-gradient(<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>);
							background: linear-gradient(<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>);
						<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_08 == 'gradient2'){ ?>
							background: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>;  
							background: -webkit-linear-gradient(left, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>);
							background: -o-linear-gradient(right, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>);
							background: -moz-linear-gradient(right, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>);
							background: linear-gradient(to right, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>);
						<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_08 == 'gradient3'){ ?>
							background: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>;  
							background: -webkit-linear-gradient(left top, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>);
							background: -o-linear-gradient(bottom right, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>);
							background: -moz-linear-gradient(bottom right, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>);
							background: linear-gradient(to bottom right, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>);
						<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_08 == 'gradient4'){ ?>
							background: -webkit-linear-gradient(<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>);
							background: -o-linear-gradient(<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>);
							background: -moz-linear-gradient(<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>);
							background: linear-gradient(<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>);
						<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_08 == 'gradient5'){ ?>
							background: -webkit-linear-gradient(left, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>);
							background: -o-linear-gradient(left, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>);
							background: -moz-linear-gradient(left, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>);
							background: linear-gradient(to right, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>);
						<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_08 == 'gradient6'){ ?>
							background: -webkit-repeating-linear-gradient(<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>, 10%, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?> 20%);
							background: -o-repeating-linear-gradient(<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>, 10%, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?> 20%);
							background: -moz-repeating-linear-gradient(<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>, 10%, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?> 20%);
							background: repeating-linear-gradient(<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>, 10%, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?> 20%);
						<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_08 == 'gradient7'){ ?>
							background: -webkit-repeating-linear-gradient(45deg,<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>,<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?> 7%,<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?> 10%);
							background: -o-repeating-linear-gradient(45deg,<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>,<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?> 7%,<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?> 10%);
							background: -moz-repeating-linear-gradient(45deg,<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>,<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?> 7%,<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?> 10%);
							background: repeating-linear-gradient(45deg,<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>,<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?> 7%,<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?> 10%);
						<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_08 == 'gradient8'){ ?>
							background: -webkit-repeating-linear-gradient(190deg,<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>,<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?> 7%,<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?> 10%);
							background: -o-repeating-linear-gradient(190deg,<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>,<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?> 7%,<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?> 10%);
							background: -moz-repeating-linear-gradient(190deg,<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>,<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?> 7%,<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?> 10%);
							background: repeating-linear-gradient(190deg,<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>,<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?> 7%,<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?> 10%);
						<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_08 == 'gradient9'){ ?>
							background: -webkit-repeating-linear-gradient(90deg,<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>,<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?> 7%,<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?> 10%);
							background: -o-repeating-linear-gradient(90deg,<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>,<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?> 7%,<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?> 10%);
							background: -moz-repeating-linear-gradient(90deg,<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>,<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?> 7%,<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?> 10%);
							background: repeating-linear-gradient(90deg,<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>,<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?> 7%,<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?> 10%);
						<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_08 == 'gradient10'){ ?>
							background: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>;
							background: -webkit-radial-gradient(<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>);
							background: -o-radial-gradient(<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>);
							background: -moz-radial-gradient(<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>);
							background: radial-gradient(<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>);
						<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_08 == 'gradient11'){ ?>
							background: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>;
							background: -webkit-radial-gradient(<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?> 5%, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?> 15%, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?> 60%);
							background: -o-radial-gradient(<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?> 5%, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?> 15%, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?> 60%);
							background: -moz-radial-gradient(<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?> 5%, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?> 15%, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?> 60%);
							background: radial-gradient(<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?> 5%, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?> 15%, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?> 60%);
						<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_08 == 'gradient12'){ ?>
							background: -webkit-radial-gradient(circle, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>);
							background: -o-radial-gradient(circle, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>);
							background: -moz-radial-gradient(circle, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>);
							background: radial-gradient(circle, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>);
						<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_08 == 'gradient13'){ ?>
							background: -webkit-repeating-radial-gradient(<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?> 10%, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?> 15%);
							background: -o-repeating-radial-gradient(<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?> 10%, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?> 15%);
							background: -moz-repeating-radial-gradient(<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?> 10%, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?> 15%);
							background: repeating-radial-gradient(<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?>, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_10;?> 10%, <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_09;?> 15%);
						<?php }?>
					}
					<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19 == 'none'){ ?>
						.TotalSoft_GV_SG_Item_<?php echo $Total_Soft_Gallery_Video;?> .TotalSoft_GV_SG_VideoPMspan_<?php echo $Total_Soft_Gallery_Video;?>
						{
							position: relative;
							display: block;
							padding: 3px 0 0 0;
							cursor: pointer;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>
						{
							padding: 10px;
							position: relative;
							display: block;
							text-align: center;
							background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15;?>;
							color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16;?>;
							font-family: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_17;?>;
							font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_18;?>px;
							font-weight: 400;
							text-shadow: none;
							-webkit-transition: all 0.3s;
							-moz-transition: all 0.3s;
							transition: all 0.3s;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover, .TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:focus
						{
							color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_21;?>;
							background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_20;?>; 
						}
					<?php } else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19 == 'effect01'){ ?>
						.TotalSoft_GV_SG_Item_<?php echo $Total_Soft_Gallery_Video;?> .TotalSoft_GV_SG_VideoPMspan_<?php echo $Total_Soft_Gallery_Video;?>
						{
							position: relative;
							display: block;
							padding: 3px 0 0 0;
							cursor: pointer;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>
						{
							padding: 10px;
							position: relative;
							display: block;
							text-align: center;
							background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15;?>;
							color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16;?>;
							font-family: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_17;?>;
							font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_18;?>px;
							font-weight: 400;
							text-shadow: none;
							-webkit-transition: all 0.3s;
							-moz-transition: all 0.3s;
							transition: all 0.3s;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:before, .TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:after
						{
							position: absolute;
							left: 0;
							width: 100%;
							height: 2px;
							background: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							content: '';
							opacity: 0;
							-webkit-transition: all 0.3s;
							-moz-transition: all 0.3s;
							transition: all 0.3s;
							-webkit-transform: translateY(-10px);
							-moz-transform: translateY(-10px);
							transform: translateY(-10px);
							backface-visibility: hidden;
							-webkit-backface-visibility: hidden;
							-moz-backface-visibility: hidden;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:before
						{
							top: 0;
							-webkit-transform: translateY(-10px);
							-moz-transform: translateY(-10px);
							transform: translateY(-10px);
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:after
						{
							bottom: 0;
							-webkit-transform: translateY(10px);
							-moz-transform: translateY(10px);
							transform: translateY(10px);
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover, .TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:focus
						{
							color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_21;?>;
							background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_20;?>; 
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover:before, .TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover:after, .TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:focus:before, .TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:focus:after
						{
							opacity: 1;
							-webkit-transform: translateY(0px);
							-moz-transform: translateY(0px);
							transform: translateY(0px);
						}
					<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19 == 'effect02'){ ?>
						.TotalSoft_GV_SG_Item_<?php echo $Total_Soft_Gallery_Video;?> .TotalSoft_GV_SG_VideoPMspan_<?php echo $Total_Soft_Gallery_Video;?>
						{
							position: relative;
							display: block;
							padding: 3px 0 0 0;
							cursor: pointer;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>
						{
							display: block;
							text-align: center;
							background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15;?>;
							color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16;?>;
							font-family: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_17;?>;
							font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_18;?>px;
							padding: 10px;
							text-decoration: none;
							-webkit-tap-highlight-color: transparent;
							vertical-align: middle;
							/*-webkit-transform: translateZ(0);*/
							/*transform: translateZ(0);*/
							-webkit-backface-visibility: hidden;
							backface-visibility: hidden;
							-moz-osx-font-smoothing: grayscale;
							position: relative;
							overflow: hidden;
							-webkit-transition: 0.3s ease-in-out color;
							-moz-transition: 0.3s ease-in-out color;
							transition: 0.3s ease-in-out color;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:before
						{
							content: "";
							position: absolute;
							z-index: 1;
							left: 50%;
							right: 50%;
							top: 0;
							background: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							height: 3px;
							-webkit-transition-property: left, right;
							transition-property: left, right;
							-webkit-transition-duration: 0.3s;
							transition-duration: 0.3s;
							-webkit-transition-timing-function: ease-out;
							transition-timing-function: ease-out;
							backface-visibility: hidden;
							-webkit-backface-visibility: hidden;
							-moz-backface-visibility: hidden;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover, .TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:focus, .TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:active
						{
							color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_21;?>;
							background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_20;?>; 
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover:before, .TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:focus:before, .TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:active:before
						{
							left: 0;
							right: 0;
						}
					<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19 == 'effect03'){ ?>
						.TotalSoft_GV_SG_Item_<?php echo $Total_Soft_Gallery_Video;?> .TotalSoft_GV_SG_VideoPMspan_<?php echo $Total_Soft_Gallery_Video;?>
						{
							position: relative;
							display: block;
							padding: 3px 0 0 0;
							cursor: pointer;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>
						{
							padding: 10px;
							cursor: pointer;
							background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15;?>;
							color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16;?>;
							font-family: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_17;?>;
							font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_18;?>px;
							text-align: center;
							text-decoration: none;
							-webkit-tap-highlight-color: transparent;
							display: block;
							vertical-align: middle;
							-webkit-transform: translateZ(0);
							transform: translateZ(0);
							box-shadow: 0 0 1px transparent;
							-webkit-backface-visibility: hidden;
							backface-visibility: hidden;
							-moz-osx-font-smoothing: grayscale;
							position: relative;
							-webkit-transition-property: color;
							transition-property: color;
							-webkit-transition-duration: 0.3s;
							transition-duration: 0.3s;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:before
						{
							content: "";
							position: absolute;
							z-index: -1;
							top: 0;
							left: 0;
							right: 0;
							bottom: 0;
							background: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_20;?>;
							-webkit-transform: scaleY(0);
							transform: scaleY(0);
							-webkit-transform-origin: 50% 0;
							transform-origin: 50% 0;
							-webkit-transition-property: transform;
							transition-property: transform;
							-webkit-transition-duration: 0.3s;
							transition-duration: 0.3s;
							-webkit-transition-timing-function: ease-out;
							transition-timing-function: ease-out;
							backface-visibility: hidden;
							-webkit-backface-visibility: hidden;
							-moz-backface-visibility: hidden;
						}
						.TotalSoft_GV_SG_VideoPMspan_<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>, .TotalSoft_GV_SG_VideoPMspan_<?php echo $Total_Soft_Gallery_Video;?>:focus .TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>, .TotalSoft_GV_SG_VideoPMspan_<?php echo $Total_Soft_Gallery_Video;?>:active .TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>
						{
							color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_21;?>;
						}
						.TotalSoft_GV_SG_VideoPMspan_<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:before
						{
							-webkit-transform: scaleY(1);
							-moz-transform: scaleY(1);
							transform: scaleY(1);
						}
					<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19 == 'effect04'){ ?>
						.TotalSoft_GV_SG_VideoPMspan_<?php echo $Total_Soft_Gallery_Video;?>
						{
							background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15;?>;
							color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16;?>;
							font-family: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_17;?>;
							font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_18;?>px;
							padding: 10px 20px;
							position: relative;
							overflow: hidden;
							display: block;
							-webkit-transition: 0.3s ease-out;
							-moz-transition: 0.3s ease-out;
							transition: 0.3s ease-out;
							cursor: pointer;
							text-align: center;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>::before
						{
							width: 5px;
							height: 5px;
							background: transparent;
							content: "";
							position: absolute;
							left: 5px;
							top: 5px;
							border-top: 2px solid <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							border-left: 2px solid <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							-webkit-transition: 0.3s;
							-moz-transition: 0.3s;
							transition: 0.3s;
							opacity: 0;
							backface-visibility: hidden;
							-webkit-backface-visibility: hidden;
							-moz-backface-visibility: hidden;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>::after
						{
							width: 5px;
							height: 5px;
							background: transparent;
							content: "";
							position: absolute;
							right: 5px;
							bottom: 5px;
							border-right: 2px solid <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							border-bottom: 2px solid <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							-webkit-transition: 0.3s;
							-moz-transition: 0.3s;
							transition: 0.3s;
							opacity: 0;
							backface-visibility: hidden;
							-webkit-backface-visibility: hidden;
							-moz-backface-visibility: hidden;
						}
						.TotalSoft_GV_SG_VideoPMspan_<?php echo $Total_Soft_Gallery_Video;?>::before
						{
							width: 5px;
							height: 5px;
							background: transparent;
							content: "";
							position: absolute;
							right: 5px;
							top: 5px;
							border-right: 2px solid <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							border-top: 2px solid <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							-webkit-transition: 0.3s;
							-moz-transition: 0.3s;
							transition: 0.3s;
							opacity: 0;
							backface-visibility: hidden;
							-webkit-backface-visibility: hidden;
							-moz-backface-visibility: hidden;
						}
						.TotalSoft_GV_SG_VideoPMspan_<?php echo $Total_Soft_Gallery_Video;?>::after
						{
							width: 5px;
							height: 5px;
							background: transparent;
							content: "";
							position: absolute;
							left: 5px;
							bottom: 5px;
							border-left: 2px solid <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							border-bottom: 2px solid <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							-webkit-transition: 0.3s;
							-moz-transition: 0.3s;
							transition: 0.3s;
							opacity: 0;
							backface-visibility: hidden;
							-webkit-backface-visibility: hidden;
							-moz-backface-visibility: hidden;
						}
						.TotalSoft_GV_SG_VideoPMspan_<?php echo $Total_Soft_Gallery_Video;?>:hover
						{
							color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_21;?>;
							background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_20;?>;
						}
						.TotalSoft_GV_SG_VideoPMspan_<?php echo $Total_Soft_Gallery_Video;?>:hover::before { opacity: 1; right: 0px; top: 0px; }
						.TotalSoft_GV_SG_VideoPMspan_<?php echo $Total_Soft_Gallery_Video;?>:hover::after { opacity: 1; left: 0px; bottom: 0px; }
						.TotalSoft_GV_SG_VideoPMspan_<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>::before
						{
							opacity: 1;
							left: 0px;
							top: 0px;
						}
						.TotalSoft_GV_SG_VideoPMspan_<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>::after
						{
							opacity: 1;
							right: 0px;
							bottom: 0px;
						}
					<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19 == 'effect05'){ ?>
						.TotalSoft_GV_SG_Item_<?php echo $Total_Soft_Gallery_Video;?> .TotalSoft_GV_SG_VideoPMspan_<?php echo $Total_Soft_Gallery_Video;?>
						{
							position: relative;
							display: block;
							padding: 3px 0 0 0;
							cursor: pointer;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>
						{
							padding: 10px;
							cursor: pointer;
							background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15;?>;
							color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16;?>;
							font-family: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_17;?>;
							font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_18;?>px;
							text-align: center;
							text-decoration: none;
							-webkit-tap-highlight-color: transparent;
							display: block;
							position: relative;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover
						{
							color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_21;?>;
							background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_20;?>;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>::before, .TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>::after
						{
							display: inline-block;
							opacity: 0;
							-webkit-transition: -webkit-transform 0.3s, opacity 0.2s;
							-moz-transition: -moz-transform 0.3s, opacity 0.2s;
							transition: transform 0.3s, opacity 0.2s;
							color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							backface-visibility: hidden;
							-webkit-backface-visibility: hidden;
							-moz-backface-visibility: hidden;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>::before
						{
							margin-right: 10px;
							content: "[";
							-webkit-transform: translateX(20px);
							-moz-transform: translateX(20px);
							transform: translateX(20px);
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>::after
						{
							margin-left: 10px;
							content: "]";
							-webkit-transform: translateX(-20px);
							-moz-transform: translateX(-20px);
							transform: translateX(-20px);
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover::before, .TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover::after, .TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:focus::before, .TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:focus::after
						{
							opacity: 1;
							-webkit-transform: translateX(0px);
							-moz-transform: translateX(0px);
							transform: translateX(0px);
						}
					<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19 == 'effect06'){ ?>
						.TotalSoft_GV_SG_Item_<?php echo $Total_Soft_Gallery_Video;?> .TotalSoft_GV_SG_VideoPMspan_<?php echo $Total_Soft_Gallery_Video;?>
						{
							position: relative;
							display: block;
							padding: 3px 0 0 0;
							cursor: pointer;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>
						{
							padding: 12px 10px 10px;
							background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15;?>;
							color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16;?>;
							font-family: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_17;?>;
							font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_18;?>px;
							text-shadow: none;
							font-weight: 700;
							display: block;
							text-align: center;
							position: relative;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover
						{
							color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_21;?>;
							background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_20;?>;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>::before, .TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>::after
						{
							position: absolute;
							left: 0;
							width: 100%;
							height: 3px;
							background: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							content: "";
							-webkit-transition: -webkit-transform 0.3s;
							-moz-transition: -moz-transform 0.3s;
							transition: transform 0.3s;
							-webkit-transform: scale(0.85);
							-moz-transform: scale(0.85);
							transform: scale(0.85);
							backface-visibility: hidden;
							-webkit-backface-visibility: hidden;
							-moz-backface-visibility: hidden;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>::before
						{
							bottom: 0;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>::after
						{
							opacity: 0;
							-webkit-transition: top 0.3s, opacity 0.3s, -webkit-transform 0.3s;
							-moz-transition: top 0.3s, opacity 0.3s, -moz-transform 0.3s;
							transition: top 0.3s, opacity 0.3s, transform 0.3s;
							top: calc(100% - 3px);
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover::before, .TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover::after, .TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:focus::before, .TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:focus::after
						{
							-webkit-transform: scale(1);
							-moz-transform: scale(1);
							transform: scale(1);
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover::after, .TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:focus::after
						{
							top: 0%;
							opacity: 1;
						}
					<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19 == 'effect07'){ ?>
						.TotalSoft_GV_SG_Item_<?php echo $Total_Soft_Gallery_Video;?> .TotalSoft_GV_SG_VideoPMspan_<?php echo $Total_Soft_Gallery_Video;?>
						{
							position: relative;
							display: block;
							padding: 3px 0 0 0;
							cursor: pointer;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>
						{
							padding: 5px 10px;
							background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15;?>;
							color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16;?>;
							font-family: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_17;?>;
							font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_18;?>px;
							text-shadow: none;
							display: block;
							text-align: center;
							-webkit-transition: color 0.3s;
							-moz-transition: color 0.3s;
							transition: color 0.3s;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>::before
						{
							position: absolute;
							top: calc(100% - <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_18/2;?>px);
							left: 50%;
							color: transparent;
							content: "•";
							text-shadow: 0 0 transparent;
							-webkit-transition: text-shadow 0.3s, color 0.3s;
							-moz-transition: text-shadow 0.3s, color 0.3s;
							transition: text-shadow 0.3s, color 0.3s;
							-webkit-transform: translateX(-50%);
							-moz-transform: translateX(-50%);
							transform: translateX(-50%);
							pointer-events: none;
							backface-visibility: hidden;
							-webkit-backface-visibility: hidden;
							-moz-backface-visibility: hidden;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover::before, .TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:focus::before
						{
							color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							text-shadow: 10px 0 <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>, -10px 0 <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover, .TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:focus
						{
							color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_21;?>;
							background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_20;?>;
						}
					<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19 == 'effect08'){ ?>
						.TotalSoft_GV_SG_Item_<?php echo $Total_Soft_Gallery_Video;?> .TotalSoft_GV_SG_VideoPMspan_<?php echo $Total_Soft_Gallery_Video;?>
						{
							position: relative;
							display: block;
							padding: 3px 0 0 0;
							cursor: pointer;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>
						{
							padding: 5px 10px;
							background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15;?>;
							color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16;?>;
							font-family: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_17;?>;
							font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_18;?>px;
							display: block;
							text-align: center;
							position: relative;
							border: 1px solid <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							transform-style: flat;
							-moz-transform-style: flat;
							-webkit-transform-style: flat;
							transition: all 250ms ease-out;
							-moz-transition: all 250ms ease-out;
							-webkit-transition: all 250ms ease-out;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:before, .TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:after
						{
							content: "";
							position: absolute;
							z-index: -2;
							transition: all 250ms ease-out;
							-moz-transition: all 250ms ease-out;
							-webkit-transition: all 250ms ease-out;
							backface-visibility: hidden;
							-webkit-backface-visibility: hidden;
							-moz-backface-visibility: hidden;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:before
						{
							top: 0;
							left: 0;
							width: 100%;
							height: 100%;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover
						{
							border: 1px solid <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_20;?>;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover:before
						{
							box-shadow: 0 15px 10px -10px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							-moz-box-shadow: 0 15px 10px -10px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							-webkit-box-shadow: 0 15px 10px -10px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover
						{
							color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_21;?>;
							background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_20;?>;
						}
					<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19 == 'effect09'){ ?>
						.TotalSoft_GV_SG_Item_<?php echo $Total_Soft_Gallery_Video;?> .TotalSoft_GV_SG_VideoPMspan_<?php echo $Total_Soft_Gallery_Video;?>
						{
							position: relative;
							display: block;
							padding: 3px 0 0 0;
							cursor: pointer;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>
						{
							padding: 5px 10px;
							background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15;?>;
							color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16;?>;
							font-family: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_17;?>;
							font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_18;?>px;
							display: block;
							text-align: center;
							position: relative;
							border: 1px solid <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15;?>;
							transform-style: flat;
							-moz-transform-style: flat;
							-webkit-transform-style: flat;
							transition: all 250ms ease-out;
							-moz-transition: all 250ms ease-out;
							-webkit-transition: all 250ms ease-out;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:before, .TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:after
						{
							content: "";
							position: absolute;
							z-index: -2;
							transition: all 250ms ease-out;
							-moz-transition: all 250ms ease-out;
							-webkit-transition: all 250ms ease-out;
							backface-visibility: hidden;
							-webkit-backface-visibility: hidden;
							-moz-backface-visibility: hidden;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover
						{
							color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_21;?>;
							background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_20;?>;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:before
						{
							top: 0;
							left: 0;
							width: 100%;
							height: 100%;
							box-shadow: 0 15px 10px -10px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							-moz-box-shadow: 0 15px 10px -10px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							-webkit-box-shadow: 0 15px 10px -10px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover
						{
							border-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover:before
						{
							box-shadow: 0 1px 4px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							-moz-box-shadow: 0 1px 4px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							-webkit-box-shadow: 0 1px 4px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
						}
					<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19 == 'effect10'){ ?>
						.TotalSoft_GV_SG_Item_<?php echo $Total_Soft_Gallery_Video;?> .TotalSoft_GV_SG_VideoPMspan_<?php echo $Total_Soft_Gallery_Video;?>
						{
							position: relative;
							display: block;
							padding: 3px 0 0 0;
							cursor: pointer;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>
						{
							padding: 5px 10px;
							background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15;?>;
							color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16;?>;
							font-family: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_17;?>;
							font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_18;?>px;
							display: block;
							text-align: center;
							position: relative;
							border: 1px solid <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							transform-style: flat;
							-moz-transform-style: flat;
							-webkit-transform-style: flat;
							transition: all 250ms ease-out;
							-moz-transition: all 250ms ease-out;
							-webkit-transition: all 250ms ease-out;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:before, .TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:after
						{
							content: "";
							position: absolute;
							z-index: -2;
							transition: all 250ms ease-out;
							-moz-transition: all 250ms ease-out;
							-webkit-transition: all 250ms ease-out;
							backface-visibility: hidden;
							-webkit-backface-visibility: hidden;
							-moz-backface-visibility: hidden;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover
						{
							color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_21;?>;
							background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_20;?>;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:before, .TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:after
						{
							bottom: 15px;
							width: 50%;
							height: 20%;
							max-width: 300px;
							max-height: 100px;
							box-shadow: 0 10px 10px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							-moz-box-shadow: 0 10px 10px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							-webkit-box-shadow: 0 10px 10px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:before
						{
							left: 8px;
							transform: rotate(-3deg);
							-moz-transform: rotate(-3deg);
							-webkit-transform: rotate(-3deg);
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:after
						{
							right: 8px;
							transform: rotate(3deg);
							-moz-transform: rotate(3deg);
							-webkit-transform: rotate(3deg);
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover
						{
							border-color: transparent;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover:before, .TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover:after
						{
							box-shadow: 0 15px 12px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							-moz-box-shadow: 0 15px 12px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							-webkit-box-shadow: 0 15px 12px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover:before { left: 10px; }
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover:after { right: 10px; }
					<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19 == 'effect11'){ ?>
						.TotalSoft_GV_SG_Item_<?php echo $Total_Soft_Gallery_Video;?> .TotalSoft_GV_SG_VideoPMspan_<?php echo $Total_Soft_Gallery_Video;?>
						{
							position: relative;
							display: block;
							padding: 3px 0 0 0;
							cursor: pointer;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>
						{
							padding: 5px 10px;
							background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15;?>;
							color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16;?>;
							font-family: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_17;?>;
							font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_18;?>px;
							display: block;
							text-align: center;
							position: relative;
							border: 1px solid transparent;
							transform-style: flat;
							-moz-transform-style: flat;
							-webkit-transform-style: flat;
							transition: all 250ms ease-out;
							-moz-transition: all 250ms ease-out;
							-webkit-transition: all 250ms ease-out;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:before, .TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:after
						{
							content: "";
							position: absolute;
							z-index: -2;
							transition: all 250ms ease-out;
							-moz-transition: all 250ms ease-out;
							-webkit-transition: all 250ms ease-out;
							backface-visibility: hidden;
							-webkit-backface-visibility: hidden;
							-moz-backface-visibility: hidden;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover
						{
							color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_21;?>;
							background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_20;?>;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:before, .TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:after
						{
							bottom: 15px;
							width: 50%;
							height: 20%;
							max-width: 300px;
							max-height: 100px;
							box-shadow: 0 15px 12px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							-moz-box-shadow: 0 15px 12px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							-webkit-box-shadow: 0 15px 12px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:before
						{
							left: 10px;
							transform: rotate(-3deg);
							-moz-transform: rotate(-3deg);
							-webkit-transform: rotate(-3deg);
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:after
						{
							right: 10px;
							transform: rotate(3deg);
							-moz-transform: rotate(3deg);
							-webkit-transform: rotate(3deg);
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover
						{
							border-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover:before, .TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover:after
						{
							transition: box-shadow 600ms ease-out, left 200ms, right 200ms;
							-moz-transition: box-shadow 600ms ease-out, left 200ms, right 200ms;
							-webkit-transition: box-shadow 600ms ease-out, left 200ms, right 200ms;
							box-shadow: 0 8px 8px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							-moz-box-shadow: 0 8px 8px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							-webkit-box-shadow: 0 8px 8px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover:before { left: 5px; }
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover:after { right: 5px; }
					<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19 == 'effect12'){ ?>
						.TotalSoft_GV_SG_Item_<?php echo $Total_Soft_Gallery_Video;?> .TotalSoft_GV_SG_VideoPMspan_<?php echo $Total_Soft_Gallery_Video;?>
						{
							position: relative;
							display: block;
							padding: 3px 0 0 0;
							cursor: pointer;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>
						{
							padding: 5px 10px;
							background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15;?>;
							color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16;?>;
							font-family: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_17;?>;
							font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_18;?>px;
							display: block;
							text-align: center;
							position: relative;
							border: 1px solid <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							transform-style: flat;
							-moz-transform-style: flat;
							-webkit-transform-style: flat;
							transition: all 250ms ease-out;
							-moz-transition: all 250ms ease-out;
							-webkit-transition: all 250ms ease-out;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:before, .TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:after
						{
							content: "";
							position: absolute;
							z-index: -2;
							transition: all 250ms ease-out;
							-moz-transition: all 250ms ease-out;
							-webkit-transition: all 250ms ease-out;
							backface-visibility: hidden;
							-webkit-backface-visibility: hidden;
							-moz-backface-visibility: hidden;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover
						{
							color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_21;?>;
							background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_20;?>;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:before,
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:after
						{
							bottom: 12px;
							width: 50%;
							height: 55%;
							max-width: 200px;
							max-height: 100px;
							box-shadow: 1px 8px 12px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							-moz-box-shadow: 1px 8px 12px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							-webkit-box-shadow: 1px 8px 12px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:before { left: 10px; }
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:after { right: 10px; }
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover:before, .TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover:after
						{
							box-shadow: 1px 8px 12px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							-moz-box-shadow: 1px 8px 12px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							-webkit-box-shadow: 1px 8px 12px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover:before
						{
							transform: skew(-8deg) rotate(-3deg);
							-moz-transform: skew(-8deg) rotate(-3deg);
							-webkit-transform: skew(-8deg) rotate(-3deg);
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover:after
						{
							transform: skew(8deg) rotate(3deg);
							-moz-transform: skew(8deg) rotate(3deg);
							-webkit-transform: skew(8deg) rotate(3deg);
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:before { display: none; }
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover { border-radius: 0 0 40% 0 / 0 0 30% 0; }
					<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19 == 'effect13'){ ?>
						.TotalSoft_GV_SG_Item_<?php echo $Total_Soft_Gallery_Video;?> .TotalSoft_GV_SG_VideoPMspan_<?php echo $Total_Soft_Gallery_Video;?>
						{
							position: relative;
							display: block;
							padding: 3px 0 0 0;
							cursor: pointer;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>
						{
							padding: 5px 10px;
							background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15;?>;
							color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16;?>;
							font-family: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_17;?>;
							font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_18;?>px;
							display: block;
							text-align: center;
							position: relative;
							border: 1px solid <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							transform-style: flat;
							-moz-transform-style: flat;
							-webkit-transform-style: flat;
							transition: all 250ms ease-out;
							-moz-transition: all 250ms ease-out;
							-webkit-transition: all 250ms ease-out;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:before, .TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:after
						{
							content: "";
							position: absolute;
							z-index: -2;
							transition: all 250ms ease-out;
							-moz-transition: all 250ms ease-out;
							-webkit-transition: all 250ms ease-out;
							backface-visibility: hidden;
							-webkit-backface-visibility: hidden;
							-moz-backface-visibility: hidden;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover
						{
							color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_21;?>;
							background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_20;?>;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:before, .TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:after
						{
							right: 10px;
							width: 50%;
							height: 55%;
							max-width: 200px;
							max-height: 100px;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:before
						{
							top: 12px;
							box-shadow: 1px -4px 12px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							-moz-box-shadow: 1px -4px 12px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							-webkit-box-shadow: 1px -4px 12px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:after
						{
							bottom: 12px;
							box-shadow: 1px 4px 12px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							-moz-box-shadow: 1px 4px 12px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							-webkit-box-shadow: 1px 4px 12px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover
						{
							right: 0;
							border-radius: 0 3% 3% 0 / 0% 50% 50% 0;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover:before
						{
							box-shadow: 10px -4px 12px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							-moz-box-shadow: 10px -4px 12px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							-webkit-box-shadow: 10px -4px 12px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							transform: skew(-8deg) rotate(-3deg);
							-moz-transform: skew(-8deg) rotate(-3deg);
							-webkit-transform: skew(-8deg) rotate(-3deg);
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover:after
						{
							box-shadow: 10px 4px 12px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							-moz-box-shadow: 10px 4px 12px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							-webkit-box-shadow: 10px 4px 12px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							transform: skew(8deg) rotate(3deg);
							-moz-transform: skew(8deg) rotate(3deg);
							-webkit-transform: skew(8deg) rotate(3deg);
						}
					<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19 == 'effect14'){ ?>
						.TotalSoft_GV_SG_Item_<?php echo $Total_Soft_Gallery_Video;?> .TotalSoft_GV_SG_VideoPMspan_<?php echo $Total_Soft_Gallery_Video;?>
						{
							position: relative;
							display: block;
							padding: 3px 0 0 0;
							cursor: pointer;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>
						{
							padding: 5px 10px;
							background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15;?>;
							color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16;?>;
							font-family: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_17;?>;
							font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_18;?>px;
							display: block;
							text-align: center;
							position: relative;
							border: 1px solid <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							transform-style: flat;
							-moz-transform-style: flat;
							-webkit-transform-style: flat;
							transition: all 250ms ease-out;
							-moz-transition: all 250ms ease-out;
							-webkit-transition: all 250ms ease-out;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:before, .TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:after
						{
							content: "";
							position: absolute;
							z-index: -2;
							transition: all 250ms ease-out;
							-moz-transition: all 250ms ease-out;
							-webkit-transition: all 250ms ease-out;
							backface-visibility: hidden;
							-webkit-backface-visibility: hidden;
							-moz-backface-visibility: hidden;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover
						{
							color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_21;?>;
							background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_20;?>;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:before,
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:after
						{
							bottom: 12px;
							width: 50%;
							height: 55%;
							max-width: 200px;
							max-height: 100px;
							box-shadow: 1px 8px 12px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							-moz-box-shadow: 1px 8px 12px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							-webkit-box-shadow: 1px 8px 12px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:before { left: 10px; }
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:after { right: 10px; }
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover:before, .TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover:after
						{
							box-shadow: 1px 8px 12px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							-moz-box-shadow: 1px 8px 12px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							-webkit-box-shadow: 1px 8px 12px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover:before
						{
							transform: skew(-8deg) rotate(-3deg);
							-moz-transform: skew(-8deg) rotate(-3deg);
							-webkit-transform: skew(-8deg) rotate(-3deg);
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover:after
						{
							transform: skew(8deg) rotate(3deg);
							-moz-transform: skew(8deg) rotate(3deg);
							-webkit-transform: skew(8deg) rotate(3deg);
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover { border-radius: 0 0 40% 40% / 0 0 30% 30%; }
					<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19 == 'effect15'){ ?>
						.TotalSoft_GV_SG_Item_<?php echo $Total_Soft_Gallery_Video;?> .TotalSoft_GV_SG_VideoPMspan_<?php echo $Total_Soft_Gallery_Video;?>
						{
							position: relative;
							display: block;
							padding: 3px 0 0 0;
							cursor: pointer;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>
						{
							padding: 5px 10px;
							background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15;?>;
							color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16;?>;
							font-family: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_17;?>;
							font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_18;?>px;
							display: block;
							text-align: center;
							position: relative;
							border: 1px solid <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							overflow: hidden;
							-webkit-transition: all 0.2s linear 0s;
							-moz-transition: all 0.2s linear 0s;
							transition: all 0.2s linear 0s;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover
						{
							color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_21;?>;
							background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_20;?>;
						}
						.TotalSoft_GV_SG_VideoPMicon_<?php echo $Total_Soft_Gallery_Video;?> { display: none; }
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:before
						{
							<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22 == 'none'){ ?>
								content: "";
							<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22 == 'file-video-o'){ ?>
								content: "\f1c8";
							<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22 == 'video-camera'){ ?>
								content: "\f03d";
							<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22 == 'camera-retro'){ ?>
								content: "\f083";
							<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22 == 'eye'){ ?>
								content: "\f06e";
							<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22 == 'film'){ ?>
								content: "\f008";
							<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22 == 'youtube-play'){ ?>
								content: "\f16a";
							<?php }?>
							font-family: FontAwesome;
							font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23;?>px;
							position: absolute;
							display: -webkit-box;
							display: -ms-flexbox;
							display: flex;
							-webkit-box-align: center;
							-ms-flex-align: center;
							align-items: center;
							-webkit-box-pack: center;
							-ms-flex-pack: center;
							justify-content: center;
							<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24 == 'before'){ ?>
								left: 0;
							<?php }else{ ?>
								right: 0;
							<?php }?>
							top: 0;
							opacity: 0;
							height: 100%;
							width: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23;?>px;
							-webkit-transition: opacity 0.2s linear 0s;
							-moz-transition: opacity 0.2s linear 0s;
							transition: opacity 0.2s linear 0s;
							backface-visibility: hidden;
							-webkit-backface-visibility: hidden;
							-moz-backface-visibility: hidden;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover
						{
							<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24 == 'before'){ ?>
								text-indent: 20px;
							<?php }else{ ?>
								text-indent: -20px;
							<?php }?>
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover:before { opacity: 1; }
					<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19 == 'effect16'){ ?>
						.TotalSoft_GV_SG_Item_<?php echo $Total_Soft_Gallery_Video;?> .TotalSoft_GV_SG_VideoPMspan_<?php echo $Total_Soft_Gallery_Video;?>
						{
							position: relative;
							display: block;
							padding: 3px 0 0 0;
							cursor: pointer;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>
						{
							padding: 5px 10px;
							background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15;?>;
							color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16;?>;
							font-family: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_17;?>;
							font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_18;?>px;
							display: block;
							text-align: center;
							position: relative;
							border: 1px solid <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							overflow: hidden;
							-webkit-transition: all 0.2s linear 0s;
							-moz-transition: all 0.2s linear 0s;
							transition: all 0.2s linear 0s;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover
						{
							color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_21;?>;
							background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_20;?>;
						}
						.TotalSoft_GV_SG_VideoPMicon_<?php echo $Total_Soft_Gallery_Video;?> { display: none; }
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:before
						{
							<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22 == 'none'){ ?>
								content: "";
							<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22 == 'file-video-o'){ ?>
								content: "\f1c8";
							<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22 == 'video-camera'){ ?>
								content: "\f03d";
							<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22 == 'camera-retro'){ ?>
								content: "\f083";
							<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22 == 'eye'){ ?>
								content: "\f06e";
							<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22 == 'film'){ ?>
								content: "\f008";
							<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22 == 'youtube-play'){ ?>
								content: "\f16a";
							<?php }?>
							font-family: FontAwesome;
							font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23;?>px;
							position: absolute;
							display: -webkit-box;
							display: -ms-flexbox;
							display: flex;
							-webkit-box-align: center;
							-ms-flex-align: center;
							align-items: center;
							-webkit-box-pack: center;
							-ms-flex-pack: center;
							justify-content: center;
							<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24 == 'before'){ ?>
								left: -<?php echo 2*$TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23;?>px;
							<?php }else{ ?>
								right: -<?php echo 2*$TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23;?>px;
							<?php }?>
							top: 0;
							height: 100%;
							width: <?php echo 2*$TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23;?>px;
							background-color: rgba(255, 255, 255, 0.3);
							-webkit-transition: all 0.2s linear 0s;
							-moz-transition: all 0.2s linear 0s;
							transition: all 0.2s linear 0s;
							text-align: center;
							backface-visibility: hidden;
								-webkit-backface-visibility: hidden;
							-moz-backface-visibility: hidden;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover
						{
							<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24 == 'before'){ ?>
								text-indent: 20px;
							<?php }else{ ?>
								text-indent: -20px;
							<?php }?>
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover:before
						{
							<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24 == 'before'){ ?>
								left: 0px;
							<?php }else{ ?>
								right: 0px;
							<?php }?>
							text-indent: 0px;
						}
					<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19 == 'effect17'){ ?>
						.TotalSoft_GV_SG_Item_<?php echo $Total_Soft_Gallery_Video;?> .TotalSoft_GV_SG_VideoPMspan_<?php echo $Total_Soft_Gallery_Video;?>
						{
							position: relative;
							display: block;
							padding: 3px 0 0 0;
							cursor: pointer;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>
						{
							padding: 5px 10px;
							background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15;?>;
							color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16;?>;
							font-family: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_17;?>;
							font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_18;?>px;
							display: block;
							text-align: center;
							position: relative;
							border: 1px solid <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							overflow: hidden;
							-webkit-transition: all 0.2s linear 0s;
							-moz-transition: all 0.2s linear 0s;
							transition: all 0.2s linear 0s;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover
						{
							color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_21;?>;
							background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_20;?>;
						}
						.TotalSoft_GV_SG_VideoPMicon_<?php echo $Total_Soft_Gallery_Video;?> { display: none; }
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:before
						{
							<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22 == 'none'){ ?>
								content: "";
							<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22 == 'file-video-o'){ ?>
								content: "\f1c8";
							<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22 == 'video-camera'){ ?>
								content: "\f03d";
							<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22 == 'camera-retro'){ ?>
								content: "\f083";
							<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22 == 'eye'){ ?>
								content: "\f06e";
							<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22 == 'film'){ ?>
								content: "\f008";
							<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22 == 'youtube-play'){ ?>
								content: "\f16a";
							<?php }?>
							font-family: FontAwesome;
							font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23;?>px;
							position: absolute;
							display: -webkit-box;
							display: -ms-flexbox;
							display: flex;
							-webkit-box-align: center;
							-ms-flex-align: center;
							align-items: center;
							-webkit-box-pack: center;
							-ms-flex-pack: center;
							justify-content: center;
							top: 100%;
							height: 100%;
							width: 100%;
							left: 0;
							-webkit-transition: all 0.2s linear 0s;
							-moz-transition: all 0.2s linear 0s;
							transition: all 0.2s linear 0s;
							text-align: center;
							backface-visibility: hidden;
							-webkit-backface-visibility: hidden;
							-moz-backface-visibility: hidden;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover { text-indent: -9999px; }
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover:before { top: 0; text-indent: 0; }
					<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19 == 'effect18'){ ?>
						.TotalSoft_GV_SG_Item_<?php echo $Total_Soft_Gallery_Video;?> .TotalSoft_GV_SG_VideoPMspan_<?php echo $Total_Soft_Gallery_Video;?>
						{
							position: relative;
							display: block;
							padding: 3px 0 0 0;
							cursor: pointer;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>
						{
							padding: 5px 10px;
							background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15;?>;
							color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16;?>;
							font-family: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_17;?>;
							font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_18;?>px;
							display: block;
							text-align: center;
							position: relative;
							border: 1px solid <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							overflow: hidden;
							-webkit-transition: all 0.2s linear 0s;
							-moz-transition: all 0.2s linear 0s;
							transition: all 0.2s linear 0s;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover
						{
							color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_21;?>;
							background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_20;?>;
						}
						.TotalSoft_GV_SG_VideoPMicon_<?php echo $Total_Soft_Gallery_Video;?> { display: none; }
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:before
						{
							<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22 == 'none'){ ?>
								content: "";
							<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22 == 'file-video-o'){ ?>
								content: "\f1c8";
							<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22 == 'video-camera'){ ?>
								content: "\f03d";
							<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22 == 'camera-retro'){ ?>
								content: "\f083";
							<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22 == 'eye'){ ?>
								content: "\f06e";
							<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22 == 'film'){ ?>
								content: "\f008";
							<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22 == 'youtube-play'){ ?>
								content: "\f16a";
							<?php }?>
							font-family: FontAwesome;
							font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23;?>px;
							position: absolute;
							display: -webkit-box;
							display: -ms-flexbox;
							display: flex;
							-webkit-box-align: center;
							-ms-flex-align: center;
							align-items: center;
							-webkit-box-pack: center;
							-ms-flex-pack: center;
							justify-content: center;
							top: 0;
							height: 100%;
							width: 100%;
							left: 0;
							-webkit-transform: scale(0, 1);
							-moz-transform: scale(0, 1);
							transform: scale(0, 1);
							-webkit-transition: all 0.2s linear 0s;
							-moz-transition: all 0.2s linear 0s;
							transition: all 0.2s linear 0s;
							text-align: center;
							backface-visibility: hidden;
							-webkit-backface-visibility: hidden;
							-moz-backface-visibility: hidden;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover { text-indent: -9999px; }
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover:before
						{
							-webkit-transform: scale(1, 1);
							-moz-transform: scale(1, 1);
							transform: scale(1, 1);
							text-indent: 0;
						}
					<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_19 == 'effect19'){ ?>
						.TotalSoft_GV_SG_Item_<?php echo $Total_Soft_Gallery_Video;?> .TotalSoft_GV_SG_VideoPMspan_<?php echo $Total_Soft_Gallery_Video;?>
						{
							position: relative;
							display: block;
							padding: 3px 0 0 0;
							cursor: pointer;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>
						{
							padding: 5px 10px;
							background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_15;?>;
							color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_16;?>;
							font-family: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_17;?>;
							font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_18;?>px;
							display: block;
							text-align: center;
							position: relative;
							border: 1px solid <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_12;?>;
							overflow: hidden;
							-webkit-transition: all 0.2s linear 0s;
							-moz-transition: all 0.2s linear 0s;
							transition: all 0.2s linear 0s;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover
						{
							color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_21;?>;
							background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_20;?>;
						}
						.TotalSoft_GV_SG_VideoPMicon_<?php echo $Total_Soft_Gallery_Video;?> { display: none; }
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:before
						{
							<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22 == 'none'){ ?>
								content: "";
							<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22 == 'file-video-o'){ ?>
								content: "\f1c8";
							<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22 == 'video-camera'){ ?>
								content: "\f03d";
							<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22 == 'camera-retro'){ ?>
								content: "\f083";
							<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22 == 'eye'){ ?>
								content: "\f06e";
							<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22 == 'film'){ ?>
								content: "\f008";
							<?php }else if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22 == 'youtube-play'){ ?>
								content: "\f16a";
							<?php }?>
							font-family: FontAwesome;
							font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23;?>px;
							position: absolute;
							display: -webkit-box;
							display: -ms-flexbox;
							display: flex;
							-webkit-box-align: center;
							-ms-flex-align: center;
							align-items: center;
							-webkit-box-pack: center;
							-ms-flex-pack: center;
							justify-content: center;
							<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24 == 'before'){ ?>
								left: 0px;
								border-radius: 0 50% 50% 0;
								-webkit-transform-origin: left center;
								-moz-transform-origin: left center;
								transform-origin: left center;
							<?php }else{ ?>
								right: 0px;
								border-radius: 50% 0 0 50%;
								-webkit-transform-origin: right center;
								-moz-transform-origin: right center;
								transform-origin: right center;
							<?php }?>
							top: 0;
							height: 100%;
							width: <?php echo 2*$TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23;?>px;
							background-color: rgba(255, 255, 255, 0.3);
							-webkit-transform: scale(0, 1);
							-moz-transform: scale(0, 1);
							transform: scale(0, 1);
							-webkit-transition: all 0.2s linear 0s;
							-moz-transition: all 0.2s linear 0s;
							transition: all 0.2s linear 0s;
							text-align: center;
							backface-visibility: hidden;
							-webkit-backface-visibility: hidden;
							-moz-backface-visibility: hidden;
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover
						{
							<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24 == 'before'){ ?>
								text-indent: 20px;
							<?php }else{ ?>
								text-indent: -20px;
							<?php }?>
						}
						.TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>:hover:before
						{
							-webkit-transform: scale(1, 1);
							-moz-transform: scale(1, 1);
							transform: scale(1, 1);
							text-indent: 0px;
						}
					<?php }?>
					.TotalSoft_GV_SG_VideoPMicon_<?php echo $Total_Soft_Gallery_Video;?>
					{
						<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24 == 'before'){ ?>
							margin-right: 5px;
						<?php }else{ ?>
							margin-left: 5px;
						<?php }?>
						font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_23;?>px;
					}
					.TotalSoft_GV_SG_Item_<?php echo $Total_Soft_Gallery_Video;?> iframe, .TotalSoft_GV_SG_Item_<?php echo $Total_Soft_Gallery_Video;?> video { position: absolute; width: 100%; height: 100%; top: 0; left: 0; }
					@-webkit-keyframes animtr
					{
						0% { -webkit-transform: translateY(100px); -moz-transform: translateY(100px); transform: translateY(100px); }
						70% { -webkit-transform: translateY(0px); -moz-transform: translateY(0px); transform: translateY(0px); }
						100% { opacity: 1; }
					}
					@-moz-keyframes animtr
					{
						0% { -moz-transform: translateY(100px); -moz-transform: translateY(100px); -moz-transform: translateY(100px); }
						70% { -moz-transform: translateY(0px); -moz-transform: translateY(0px); -moz-transform: translateY(0px); }
						100% { opacity: 1; }
					}
					@keyframes animtr
					{
						0% { -webkit-transform: translateY(100px); -moz-transform: translateY(100px); transform: translateY(100px); }
						70% { -webkit-transform: translateY(0px); -moz-transform: translateY(0px); transform: translateY(0px); }
						100% { opacity: 1; }
					}
					@-webkit-keyframes animsc
					{
						0% { -webkit-transform: scale(0.7); -moz-transform: scale(0.7); transform: scale(0.7); }
						50% { -webkit-transform: scale(1.2); -moz-transform: scale(1.2); transform: scale(1.2); }
						70% { -webkit-transform: scale(1); -moz-transform: scale(1); transform: scale(1); }
						100% { opacity: 1; }
					}
					@-moz-keyframes animsc
					{
						0% { -moz-transform: scale(0.7); -moz-transform: scale(0.7); -moz-transform: scale(0.7); }
						50% { -moz-transform: scale(1.2); -moz-transform: scale(1.2); -moz-transform: scale(1.2); }
						70% { -moz-transform: scale(1); -moz-transform: scale(1); -moz-transform: scale(1); }
						100% { opacity: 1; }
					}
					@keyframes animsc
					{
						0% { -webkit-transform: scale(0.7); -moz-transform: scale(0.7); transform: scale(0.7); }
						50% { -webkit-transform: scale(1.2); -moz-transform: scale(1.2); transform: scale(1.2); }
						70% { -webkit-transform: scale(1); -moz-transform: scale(1); transform: scale(1); }
						100% { opacity: 1; }
					}
					@-webkit-keyframes animno { 0% { opacity: 0; } 50% { opacity: 0.5; } 70% { opacity: 0.7; } 100% { opacity: 1; } }
					@-moz-keyframes animno { 0% { opacity: 0; } 50% { opacity: 0.5; } 70% { opacity: 0.7; } 100% { opacity: 1; } }
					@keyframes animno { 0% { opacity: 0; } 50% { opacity: 0.5; } 70% { opacity: 0.7; } 100% { opacity: 1; } }
					.TS_GV_SG_Div_Full_<?php echo $Total_Soft_Gallery_Video;?>
					{
						position: fixed;
						width: 0%;
						height: 0%;
						top: 50%;
						left: 50%;
						background: rgba(0,0,0,0.1);
						z-index: 10000000;
						cursor: pointer;
					}
					.TS_GV_SG_Div_box_<?php echo $Total_Soft_Gallery_Video;?>
					{
						position: fixed;
						display: none;
						width: 100%;
						top: 50%;
						left: 0;
						z-index: 10000001;
						transform: translateY(-50%);
						-webkit-transform: translateY(-50%);
						-moz-transform: translateY(-50%);
					}
					.TS_GV_SG_Div_box_div1_<?php echo $Total_Soft_Gallery_Video;?>
					{
						position: relative;
						margin: 0 25%;
						width: 50%;
						height: inherit;
						display: none;
						height: 100%;
						transition: transform 1s;
						-webkit-transition: transform 1s;
						-moz-transition: transform 1s;
						transition-delay: 1s;
						-webkit-transition-delay: 1s;
						-moz-transition-delay: 1s;
						transform: translateX(0);
						-webkit-transform: translateX(0%);
						-moz-transform: translateX(0%);
					}
					.TS_GV_SG_Div_box_div1_a_<?php echo $Total_Soft_Gallery_Video;?>
					{
						transition-delay: 0s;
						-webkit-transition-delay: 0s;
						-moz-transition-delay: 0s;
						transform: translateX(-25%);
						-webkit-transform: translateX(-25%);
						-moz-transform: translateX(-25%);
					}
					.TS_GV_SG_Div_video_<?php echo $Total_Soft_Gallery_Video;?>
					{
						position: relative;
						padding-top: 56.25%;
						width: 100%;
						z-index: 2;
						border: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_25;?>px solid <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_26;?>;
						background: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_26;?>;
						overflow: hidden;
						backface-visibility: hidden;
					}
					.TS_GV_SG_Div_video_<?php echo $Total_Soft_Gallery_Video;?> iframe { position: absolute; top: 0; left: 0; width: 100%; height: 100%; transform: translateZ(0); -moz-transform: translateZ(0); -webkit-transform: translateZ(0); }
					.TS_GV_SG_Div_video_<?php echo $Total_Soft_Gallery_Video;?> img { position: absolute; top: 0; left: 50%; width: auto; margin: 0 !important; height: 100%; transform: translateZ(0) translateX(-50%); -moz-transform: translateZ(0) translateX(-50%); -webkit-transform: translateZ(0) translateX(-50%); }
					.TS_GV_SG_Div_box_div2_<?php echo $Total_Soft_Gallery_Video;?>
					{
						position: absolute;
						height: 50px;
						width: 50px;
						background: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_27;?>;
						top: 50%;
						right: 0px;
						border: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_25;?>px solid <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_26;?>;
						transform: rotate(45deg) translate(0px, -36px) translate3d(0, 0, 0);
						-webkit-transform: rotate(45deg) translate(0px, -36px) translate3d(0, 0, 0);
						-moz-transform: rotate(45deg) translate(0px, -36px) translate3d(0, 0, 0);
						perspective: 800px;
						transition-delay: 1s;
						-webkit-transition-delay: 1s;
						-moz-transition-delay: 1s;
						transition-duration: 1s;
						-webkit-transition-duration: 1s;
						-moz-transition-duration: 1s;
						cursor: pointer;
						z-index: 1;
					}
					.TS_GV_SG_Div_box_div2_a_<?php echo $Total_Soft_Gallery_Video;?>
					{
						transition-duration: 1s;
						-webkit-transition-duration: 1s;
						-moz-transition-duration: 1s;
						transition-delay: 0s;
						-webkit-transition-delay: 0s;
						-moz-transition-delay: 0s;
						transform: rotate(45deg) translate(-25px, -10px);
						-webkit-transform: rotate(45deg) translate(-25px, -10px);
						-moz-transform: rotate(45deg) translate(-25px, -10px);
					}
					.TotalSoft_GV_SG_Info_<?php echo $Total_Soft_Gallery_Video;?>
					{
						position: absolute;
						top: 50%;
						left: 50%;
						transform: translate(20%, -100%) rotate(-45deg);
						-webkit-transform: translate(20%, -100%) rotate(-45deg);
						-moz-transform: translate(20%, -100%) rotate(-45deg);
						color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_26;?>;
					}
					.TotalSoft_GV_SG_Info_1_<?php echo $Total_Soft_Gallery_Video;?>
					{
						position: absolute;
						top: 50%;
						left: 50%;
						transform: translate(20%, -100%) rotate(-45deg);
						-webkit-transform: translate(20%, -100%) rotate(-45deg);
						-moz-transform: translate(20%, -100%) rotate(-45deg);
						color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_26;?>;
					}
					.TS_GV_SG_Div_box_div3_<?php echo $Total_Soft_Gallery_Video;?>
					{
						position: absolute;
						height: 100%;
						width: 50%;
						background: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_27;?>;
						padding: 10px 10px 10px 45px;
						top: 0;
						right: 0;
						border: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_25;?>px solid <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_26;?>;
						border-left: none;
						cursor: pointer;
						transition: transform 2s;
						-webkit-transition: transform 2s;
						-moz-transition: transform 2s;
						transition-delay: 0s;
						-webkit-transition-delay: 0s;
						-moz-transition-delay: 0s;
						transform: translateX(0%);
						-webkit-transform: translateX(0%);
						-moz-transform: translateX(0%);
						overflow-y: auto;
						box-sizing: border-box;
						-moz-box-sizing: border-box;
						-webkit-box-sizing: border-box;
						backface-visibility: hidden;
						-moz-backface-visibility: hidden;
						-webkit-backface-visibility: hidden;
					}
					.TS_GV_SG_Div_box_div3_a_<?php echo $Total_Soft_Gallery_Video;?>
					{
						transition-delay: 1s;
						-webkit-transition-delay: 1s;
						-moz-transition-delay: 1s;
						transform: translateX(99%);
						-webkit-transform: translateX(99%);
						-moz-transform: translateX(99%);
					}
					@media (max-width: 1000px)
					{
						.TS_GV_SG_Div_box_div1_<?php echo $Total_Soft_Gallery_Video;?>
						{
							transform: translateY(0%);
							-webkit-transform: translateY(0%);
							-moz-transform: translateY(0%);
						}
						.TS_GV_SG_Div_box_div1_a_<?php echo $Total_Soft_Gallery_Video;?>
						{
							transform: translateY(-25%);
							-webkit-transform: translateY(-25%);
							-moz-transform: translateY(-25%);
						}
						.TS_GV_SG_Div_box_div2_<?php echo $Total_Soft_Gallery_Video;?>
						{
							top: 100%;
							right: 50%;
							transform: rotate(45deg) translate(0px, -36px);
							-webkit-transform: rotate(45deg) translate(0px, -36px);
							-moz-transform: rotate(45deg) translate(0px, -36px);
							transition-delay: 1s;
							-webkit-transition-delay: 1s;
							-moz-transition-delay: 1s;
							transition-duration: 1s;
							-webkit-transition-duration: 1s;
							-moz-transition-duration: 1s;
						}
						.TS_GV_SG_Div_box_div2_a_<?php echo $Total_Soft_Gallery_Video;?>
						{
							transition-duration: 1s;
							-webkit-transition-duration: 1s;
							-moz-transition-duration: 1s;
							transition-delay: 0s;
							-webkit-transition-delay: 0s;
							-moz-transition-delay: 0s;
							transform: rotate(45deg) translate(-25px, -62px);
							-webkit-transform: rotate(45deg) translate(-25px, -62px);
							-moz-transform: rotate(45deg) translate(-25px, -62px);
						}
						.TotalSoft_GV_SG_Info_<?php echo $Total_Soft_Gallery_Video;?>
						{
							transform: translate(20%, 0%) rotate(45deg);
							-webkit-transform: translate(20%, 0%) rotate(45deg);
							-moz-transform: translate(20%, 0%) rotate(45deg);
						}
						.TotalSoft_GV_SG_Info_1_<?php echo $Total_Soft_Gallery_Video;?>
						{
							transform: translate(20%, 0%) rotate(45deg);
							-webkit-transform: translate(20%, 0%) rotate(45deg);
							-moz-transform: translate(20%, 0%) rotate(45deg);
						}
						.TS_GV_SG_Div_box_div3_<?php echo $Total_Soft_Gallery_Video;?>
						{
							height: 50%;
							width: 100%;
							padding: 35px 10px 10px 10px;
							top: 50%;
							left: 0;
							border: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_25;?>px solid <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_26;?>;
							border-top: none;
							transform: translateY(0%);
							-webkit-transform: translateY(0%);
							-moz-transform: translateY(0%);
						}
						.TS_GV_SG_Div_box_div3_a_<?php echo $Total_Soft_Gallery_Video;?>
						{
							transform: translateY(99%);
							-webkit-transform: translateY(99%);
							-moz-transform: translateY(99%);
						}
					}
					@media (max-width: 600px)
					{
						.TS_GV_SG_Div_box_div1_<?php echo $Total_Soft_Gallery_Video;?>
						{
							width: 90%;
							margin: 0 5%;
							transform: translateY(-20%);
							-webkit-transform: translateY(-20%);
							-moz-transform: translateY(-20%);
						}
						.TS_GV_SG_Div_box_div1_a_<?php echo $Total_Soft_Gallery_Video;?>
						{
							transform: translateY(-20%);
							-webkit-transform: translateY(-20%);
							-moz-transform: translateY(-20%);
						}
						.TS_GV_SG_Div_box_div2_<?php echo $Total_Soft_Gallery_Video;?> { display: none; }
						.TS_GV_SG_Div_box_div2_a_<?php echo $Total_Soft_Gallery_Video;?> { display: none; }
						.TS_GV_SG_Div_box_div3_<?php echo $Total_Soft_Gallery_Video;?>
						{
							height: 45%;
							padding: 10px 10px 10px 10px;
							transform: translateY(99%);
							-webkit-transform: translateY(99%);
							-moz-transform: translateY(99%);
						}
						.TS_GV_SG_Div_box_div3_a_<?php echo $Total_Soft_Gallery_Video;?>
						{
							transform: translateY(99%);
							-webkit-transform: translateY(99%);
							-moz-transform: translateY(99%);
						}
						.TotalSoft_GV_SG_CIcon_<?php echo $Total_Soft_Gallery_Video;?>
						{
							transform: translate(-50%, -50%) !important;
							-webkit-transform: translate(-50%, -50%) !important;
							-moz-transform: translate(-50%, -50%) !important;
						}
					}
					@media (max-width: 400px)
					{
						.TS_GV_SG_Div_box_div1_<?php echo $Total_Soft_Gallery_Video;?>
						{
							width: 98%;
							margin: 0 1%;
							transform: translateY(-25%);
							-webkit-transform: translateY(-25%);
							-moz-transform: translateY(-25%);
						}
						.TS_GV_SG_Div_box_div1_a_<?php echo $Total_Soft_Gallery_Video;?>
						{
							transform: translateY(-25%);
							-webkit-transform: translateY(-25%);
							-moz-transform: translateY(-25%);
						}
						.TS_GV_SG_Div_box_div2_<?php echo $Total_Soft_Gallery_Video;?> { display: none; }
						.TS_GV_SG_Div_box_div2_a_<?php echo $Total_Soft_Gallery_Video;?> { display: none; }
						.TS_GV_SG_Div_box_div3_<?php echo $Total_Soft_Gallery_Video;?>
						{
							top: 20%;
							height: 80%;
							padding: 10px 10px 10px 10px;
							transform: translateY(99%);
							-webkit-transform: translateY(99%);
							-moz-transform: translateY(99%);
						}
						.TS_GV_SG_Div_box_div3_a_<?php echo $Total_Soft_Gallery_Video;?>
						{
							transform: translateY(99%);
							-webkit-transform: translateY(99%);
							-moz-transform: translateY(99%);
						}
						.TotalSoft_GV_SG_CIcon_<?php echo $Total_Soft_Gallery_Video;?>
						{
							transform: translate(0%, -100%) !important;
							-webkit-transform: translate(0%, -100%) !important;
							-moz-transform: translate(0%, -100%) !important;
						}
					}
					.TS_GV_SG_Div_box_div3_<?php echo $Total_Soft_Gallery_Video;?>::-webkit-scrollbar { width: 6px; }
					.TS_GV_SG_Div_box_div3_<?php echo $Total_Soft_Gallery_Video;?>::-webkit-scrollbar-track
					{
						-webkit-box-shadow: inset 0 0 6px <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_30;?>;
					}
					.TS_GV_SG_Div_box_div3_<?php echo $Total_Soft_Gallery_Video;?>::-webkit-scrollbar-thumb
					{
						background-color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_30;?>;
						outline: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_30;?>;
					}
					.TS_GV_SG_Div_box_div3_Title_<?php echo $Total_Soft_Gallery_Video;?>
					{
						font-size: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_28;?>px;
						font-family: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_29;?>;
						color: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_30;?>;
						display: block;
						text-align: center;
						padding: 7px 0;
					}
					.TS_GV_SG_Div_box_div3_LAT_<?php echo $Total_Soft_Gallery_Video;?> { position: relative; padding: 10px 0; }
					.TS_GV_SG_Div_box_div3_LAT_<?php echo $Total_Soft_Gallery_Video;?> span
					{
						width: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_31;?>%;
						height: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_32;?>px;
						background: <?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_33;?>;
						display: block;
						<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_01 == 'left'){ ?>
							float: left;
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_01 == 'right'){ ?>
							float: right;
						<?php }else{ ?>
							margin: 0 auto;
						<?php }?>
					}
					.TS_GV_SG_Div_box_div3_<?php echo $Total_Soft_Gallery_Video;?> * { line-height: 1; }
					.TS_GV_SG_Div_box_div3_<?php echo $Total_Soft_Gallery_Video;?> p { margin: 0; padding: 0; }
					.TotalSoft_GV_SG_Link_<?php echo $Total_Soft_Gallery_Video;?>
					{
						padding: 5px 10px;
						display: block;
						border: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_02;?>px solid <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_03;?>;
						border-radius: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_04;?>px;
						text-decoration: none;
						box-shadow: none !important;
						-moz-box-shadow: none !important;
						-webkit-box-shadow: none !important;
						line-height: 1 !important;
						background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_06;?>;
						color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_07;?>;
						text-align: center;
						<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_09 == 'left'){ ?>
							margin-right: auto;
							margin-left: 0;
							width: max-content;
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_09 == 'right'){ ?>
							margin-left: auto;
							margin-right: 0;
							width: max-content;
						<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_09 == 'center'){ ?>
							margin: 0 auto;
							width: max-content;
						<?php }?>
						font-family: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_10;?>;
						font-size: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_11;?>px;
					}
					.TotalSoft_GV_SG_Link_<?php echo $Total_Soft_Gallery_Video;?>:hover
					{
						text-decoration: none !important;
						background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_12;?> !important;
						color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_13;?> !important;
						box-shadow: none !important;
						-moz-box-shadow: none !important;
						-webkit-box-shadow: none !important;
					}
					.TotalSoft_GV_SG_Link_<?php echo $Total_Soft_Gallery_Video;?>:focus
					{
						box-shadow: none !important;
						-moz-box-shadow: none !important;
						-webkit-box-shadow: none !important;
						outline: none !important;
					}
					.TotalSoft_GV_SG_Link_Icon_<?php echo $Total_Soft_Gallery_Video;?>
					{
						font-size: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_15;?>px;
						color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_16;?>;
					}
					.TotalSoft_GV_SG_Link_<?php echo $Total_Soft_Gallery_Video;?>:hover .TotalSoft_GV_SG_Link_Icon_<?php echo $Total_Soft_Gallery_Video;?>
					{
						color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_17;?>;
					}
					.TotalSoft_GV_SG_CIcon_<?php echo $Total_Soft_Gallery_Video;?>
					{
						position: absolute;
						top: 0;
						left: 0;
						z-index: 3;
						font-size: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_20;?>px;
						color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_21;?>;
						transform: translate(-50%, -50%);
						-webkit-transform: translate(-50%, -50%);
						-moz-transform: translate(-50%, -50%);
						cursor: pointer;
					}
					.TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> { list-style: none; display: inline-block; padding: 0; cursor: pointer; }
					.TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> li { display: inline; text-align: center; margin-left: 0 !important; }
					.TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span
					{
						float: left;
						display: block;
						font-size: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_23;?>px;
						text-decoration: none;
						padding: 5px 12px;
						color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_25;?>;
						margin-left: -1px;
						border: 1px solid transparent;
						line-height: 1.5!important;
					}
					.TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span:active { outline: none; }
					<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_22 == 'style01'){ ?>
						.TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> li:first-child span
						{
							-moz-border-radius: 6px 0 0 6px;
							-webkit-border-radius: 6px;
							border-radius: 6px 0 0 6px;
						}
						.TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> li:last-child span
						{
							-moz-border-radius: 0 6px 6px 0;
							-webkit-border-radius: 0;
							border-radius: 0 6px 6px 0;
						}
						.TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span
						{
							border-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_30;?>;
							background: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_24;?>;
						}
						.TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span:hover:not(.active)
						{
							background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_28;?>;
							color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_29;?>;
						}
						.TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span.active, .TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span:active
						{
							background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26;?>;
							color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_27;?>;
						}
					<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_22 == 'style02'){ ?>
						.TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> li:first-child span
						{
							-moz-border-radius: 50px 0 0 50px;
							-webkit-border-radius: 50px;
							border-radius: 50px 0 0 50px;
						}
						.TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> li:last-child span
						{
							-moz-border-radius: 0 50px 50px 0;
							-webkit-border-radius: 0;
							border-radius: 0 50px 50px 0;
						}
						.TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span
						{
							border-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_30;?>;
							background: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_24;?>;
						}
						.TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span:hover:not(.active)
						{
							background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_28;?>;
							color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_29;?>;
						}
						.TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span.active, .TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span:active
						{
							background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26;?>;
							color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_27;?>;
						}
					<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_22 == 'style03'){ ?>
						.TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span
						{
							margin-left: 3px;
							padding: 0;
							width: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_23 + 15;?>px;
							-moz-border-radius: 100%;
							-webkit-border-radius: 100%;
							border-radius: 100%;
							background: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_24;?>;
						}
						.TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span:hover:not(.active)
						{
							background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_28;?>;
							color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_29;?>;
						}
						.TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span.active, .TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span:active
						{
							background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26;?>;
							color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_27;?>;
						}
					<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_22 == 'style04'){ ?>
						.TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span
						{
							margin: 0 5px;
							padding: 0;
							width: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_23 + 15;?>px;
							-moz-border-radius: 100%;
							-webkit-border-radius: 100%;
							border-radius: 100%;
							background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_24;?>;
						}
						.TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> li:first-child span
						{
							-moz-border-radius: 50px 0 0 50px;
							-webkit-border-radius: 50px;
							border-radius: 50px 0 0 50px;
						}
						.TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> li:last-child span
						{
							-moz-border-radius: 0 50px 50px 0;
							-webkit-border-radius: 0;
							border-radius: 0 50px 50px 0;
						}
						.TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span:hover:not(.active)
						{
							background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_28;?>;
							color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_29;?>;
						}
						.TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span.active, .TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span:active
						{
							background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26;?>;
							color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_27;?>;
						}
					<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_22 == 'style05'){ ?>
						.TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> { position: relative; z-index: 0; }
						.TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?>:after
						{
							content: '';
							position: absolute;
							width: 100%;
							height: calc(100% - 7px);
							left: 0;
							bottom: 0;
							z-index: -1;
							background: -moz-linear-gradient(left, rgba(0, 0, 0, 0) 0%, <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_24;?> 50%, rgba(0, 0, 0, 0) 100%);
							background: -webkit-linear-gradient(left, rgba(0, 0, 0, 0) 0%, <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_24;?> 50%, rgba(0, 0, 0, 0) 100%);
							background: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_24;?> 50%, rgba(0, 0, 0, 0) 100%);
						}
						.TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span { padding: 12px 5px 5px; margin: 0 10px; position: relative; z-index: 0; }
						.TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span:hover:not(.active)
						{
							color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_29;?>;
						}
						.TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span:hover:not(.active):after
						{
							content: '';
							position: absolute;
							width: calc(100% + 10px);
							height: calc(100% - 17px);
							background: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_28;?>;
							-moz-border-radius: 100%;
							-webkit-border-radius: 100%;
							border-radius: 100%;
							z-index: -1;
							left: -5px;
							bottom: 5px;
							margin: auto;
						}
						.TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> li:first-child span:hover:after, .TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> li:last-child span:hover:after
						{
							display: none;
						}
						.TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span.active
						{
							background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26;?>;
							color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_27;?>;
						}
						.TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span.active:before
						{
							content: '';
							position: absolute;
							top: -11px;
							left: -10px;
							width: calc(100% + 20px);
							border: 10px solid transparent;
							border-bottom: 7px solid <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26;?>;
							z-index: -1;
						}
						.TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span.active:hover:after { display: none; }
					<?php }else if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_22 == 'style06'){ ?>
						.TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?>
						{
							-moz-border-radius: 50px;
							-webkit-border-radius: 50px;
							border-radius: 50px;
						}
						.TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span
						{
							border-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_30;?>;
							background: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_24;?>;
							padding: 10px 15px;
						}
						.TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span:hover:not(.active):after
						{
							color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_29;?>;
							background: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_28;?>;
						}
						.TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> li:first-child span
						{
							-moz-border-radius: 50px 0 0 50px;
							-webkit-border-radius: 50px;
							border-radius: 50px 0 0 50px;
							padding: 10px 20px;
							position: relative;
						}
						.TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> li:first-child span:after, .TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> li:first-child span:hover:after
						{
							content: '';
							position: absolute;
							width: 10px;
							height: 100%;
							top: 0;
							right: 0;
							background: -moz-linear-gradient(left, rgba(0, 0, 0, 0) 0%, <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_25;?> 100%);
							background: -webkit-linear-gradient(left, rgba(0, 0, 0, 0) 0%, <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_25;?> 100%);
							background: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_25;?> 100%);
						}
						.TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> li:last-child span
						{
							-moz-border-radius: 0 50px 50px 0;
							-webkit-border-radius: 0;
							border-radius: 0 50px 50px 0;
							width: 50px;
							position: relative;
						}
						.TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> li:last-child span:after, .TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> li:last-child span:hover:after
						{
							content: '';
							position: absolute;
							width: 10px;
							height: 100%;
							top: 0;
							left: 0;
							background: -moz-linear-gradient(left, <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_25;?> 0%, rgba(0, 0, 0, 0) 100%);
							background: -webkit-linear-gradient(left, <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_25;?> 0%, rgba(0, 0, 0, 0) 100%);
							background: linear-gradient(to right, <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_25;?> 0%, rgba(0, 0, 0, 0) 100%);
						}
						.TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?> span.active
						{
							background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_26;?>;
							color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_27;?>;
							-moz-box-shadow: 0 0 3px <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_27;?> inset;
							-webkit-box-shadow: 0 0 3px <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_27;?> inset;
							box-shadow: 0 0 3px <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_27;?> inset;
						}
					<?php }?>
					.TS_GV_SG_LoadMore_<?php echo $Total_Soft_Gallery_Video;?>
					{
						background-color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_24;?>;
						color:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_25;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_23;?>px;
						border: 1px solid <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_30;?>;
						cursor:pointer;
						display: inline-block;
						padding: 0.3em 1em !important;
						line-height: 1 !important;
					}
					.TS_GV_SG_LoadMore_<?php echo $Total_Soft_Gallery_Video;?>:hover
					{
						background-color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_28;?>;
						color: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_29;?>;
					}
					.TS_GV_SG_Loading_<?php echo $Total_Soft_Gallery_Video;?>
					{
						position: absolute;
						left: 0;
						top: 0;
						width: 100%;
						height: 100%;
						background: <?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_35;?>;
						z-index: 10;
						padding: 0;
						overflow: hidden !important;
						text-align: center;
					}
					.TS_GV_SG_Loading_<?php echo $Total_Soft_Gallery_Video;?> img
					{
						margin: 0 auto !important;
						position: relative;
						top: 50%;
						transform: translateY(-50%);
						-moz-transform: translateY(-50%);
						-webkit-transform: translateY(-50%);
					}
				</style>
				<script type="text/javascript">
					function TotalSoft_GV_SG_OPop<?php echo $Total_Soft_Gallery_Video;?>(SG_ID, SG_V_NUM)
					{
						jQuery('.TS_GV_SG_Div_Full_'+SG_ID).animate({'width':'100%', 'height':'100%','top':'0','left':'0'},500);
						setTimeout(function(){
							var TotalSoftGallery_Video_ShowType<?php echo $Total_Soft_Gallery_Video;?> = jQuery(".TotalSoftGallery_Video_ShowType<?php echo $Total_Soft_Gallery_Video;?>").val();
							var iframesource<?php echo $Total_Soft_Gallery_Video;?>="";
							if( TotalSoftGallery_Video_ShowType<?php echo $Total_Soft_Gallery_Video;?> == "All" )
							{
								iframesource<?php echo $Total_Soft_Gallery_Video;?> = jQuery('.TotalSoft_GV_SG_Item_'+SG_ID+'_'+SG_V_NUM+ ' iframe').attr('src');
								if(!iframesource<?php echo $Total_Soft_Gallery_Video;?>)
								{
									iframesource<?php echo $Total_Soft_Gallery_Video;?> = jQuery('.TotalSoft_GV_SG_Item_'+SG_ID+'_'+SG_V_NUM+ ' video source').attr('src');
								}
								if(!iframesource<?php echo $Total_Soft_Gallery_Video;?>)
								{
									imagesource<?php echo $Total_Soft_Gallery_Video;?> = jQuery('.TotalSoft_GV_SG_Item_'+SG_ID+'_'+SG_V_NUM+ ' img').attr('src');
								}
							}
							else
							{
								iframesource<?php echo $Total_Soft_Gallery_Video;?> = jQuery('.TotalSoft_GV_SG_Item_'+SG_ID+'_'+(SG_V_NUM+1)+ ' iframe').attr('src');
								if(!iframesource<?php echo $Total_Soft_Gallery_Video;?>)
								{
									iframesource<?php echo $Total_Soft_Gallery_Video;?> = jQuery('.TotalSoft_GV_SG_Item_'+SG_ID+'_'+(SG_V_NUM+1)+ ' video source').attr('src');
								}
								if(!iframesource<?php echo $Total_Soft_Gallery_Video;?>)
								{
									imagesource<?php echo $Total_Soft_Gallery_Video;?> = jQuery('.TotalSoft_GV_SG_Item_'+SG_ID+'_'+SG_V_NUM+ ' img').attr('src');
								}
							}
							if(!iframesource<?php echo $Total_Soft_Gallery_Video;?>)
							{
								jQuery('.TS_GV_SG_Div_box_div1_'+SG_ID+'_'+SG_V_NUM+' iframe').css('display','none');
								jQuery('.TS_GV_SG_Div_box_div1_'+SG_ID+'_'+SG_V_NUM+' img').attr('src',imagesource<?php echo $Total_Soft_Gallery_Video;?>);
							}
							else
							{
								jQuery('.TS_GV_SG_Div_box_div1_'+SG_ID+'_'+SG_V_NUM+' iframe').attr('src',iframesource<?php echo $Total_Soft_Gallery_Video;?>);
								jQuery('.TS_GV_SG_Div_box_div1_'+SG_ID+'_'+SG_V_NUM+' img').css('display','none');
							}
							jQuery('.TS_GV_SG_Div_box_'+SG_ID).css({'display':'block','display':'-webkit-flex'});
							jQuery('.TS_GV_SG_Div_box_div1_'+SG_ID).css('display','none');
							jQuery('.TS_GV_SG_Div_box_div1_'+SG_ID+'_'+SG_V_NUM).css({'display':'block'});
						},500)
					}
					function TotalSoft_GV_SG_CPop<?php echo $Total_Soft_Gallery_Video;?>(SG_ID)
					{
						jQuery('.TS_GV_SG_Div_box_'+SG_ID).css({'display':'none'});
						jQuery('.TS_GV_SG_Div_box_div1_'+SG_ID).css('display','none');
						jQuery('.TS_GV_SG_Div_box_div1_'+SG_ID+' iframe').attr('src','');
						jQuery('.TS_GV_SG_Div_box_div1_'+SG_ID+' img').attr('src','');
						jQuery('.TS_GV_SG_Div_box_div1_'+SG_ID+' video source').attr('src','');
						jQuery('.TS_GV_SG_Div_Full_'+SG_ID).animate({'width':'0%', 'height':'0%','top':'50%','left':'50%'},500);
					}
					function TotalSoft_GV_SG_IPop<?php echo $Total_Soft_Gallery_Video;?>(SG_ID, SG_V_NUM)
					{
						jQuery('.TS_GV_SG_Div_box_div3_'+SG_ID+'_'+SG_V_NUM).addClass('TS_GV_SG_Div_box_div3_a_'+SG_ID);
						jQuery('.TS_GV_SG_Div_box_div1_'+SG_ID+'_'+SG_V_NUM).addClass('TS_GV_SG_Div_box_div1_a_'+SG_ID);
						jQuery('.TS_GV_SG_Div_box_div1_'+SG_ID+'_'+SG_V_NUM+' .TS_GV_SG_Div_box_div2_1_'+SG_ID).addClass('TS_GV_SG_Div_box_div2_a_'+SG_ID);
						jQuery('.TS_GV_SG_Div_box_div1_'+SG_ID+'_'+SG_V_NUM+' .TS_GV_SG_Div_box_div2_2_'+SG_ID).removeClass('TS_GV_SG_Div_box_div2_a_'+SG_ID);
					}
					function TotalSoft_GV_SG_DPop<?php echo $Total_Soft_Gallery_Video;?>(SG_ID, SG_V_NUM)
					{
						jQuery('.TS_GV_SG_Div_box_div3_'+SG_ID+'_'+SG_V_NUM).removeClass('TS_GV_SG_Div_box_div3_a_'+SG_ID);
						jQuery('.TS_GV_SG_Div_box_div1_'+SG_ID+'_'+SG_V_NUM).removeClass('TS_GV_SG_Div_box_div1_a_'+SG_ID);
						jQuery('.TS_GV_SG_Div_box_div1_'+SG_ID+'_'+SG_V_NUM+' .TS_GV_SG_Div_box_div2_2_'+SG_ID).addClass('TS_GV_SG_Div_box_div2_a_'+SG_ID);
						jQuery('.TS_GV_SG_Div_box_div1_'+SG_ID+'_'+SG_V_NUM+' .TS_GV_SG_Div_box_div2_1_'+SG_ID).removeClass('TS_GV_SG_Div_box_div2_a_'+SG_ID);
					}
					function TotalSoft_GV_SG_ClPop<?php echo $Total_Soft_Gallery_Video;?>(SG_ID, SG_V_NUM)
					{
						TotalSoft_GV_SG_DPop<?php echo $Total_Soft_Gallery_Video;?>(SG_ID, SG_V_NUM);
						TotalSoft_GV_SG_CPop<?php echo $Total_Soft_Gallery_Video;?>(SG_ID);
					}
					
					jQuery(document).ready(function(){
						var win = jQuery(window);
						checkWidth();
						//win.resize(checkWidth);
			            function checkWidth () {
			            var parent_element = jQuery('.TotalSoft_GV_SG_Item_<?php echo $Total_Soft_Gallery_Video;?>').parent().parent().parent();
			        	jQuery(parent_element).each(function(index, elem){
			               if(jQuery(elem).width()<=250){
			                    jQuery(parent_element).find('.TotalSoft_GV_SG_Grid_<?php echo $Total_Soft_Gallery_Video;?>').css({'column-count':'1'});
			                    jQuery(parent_element).css({'padding-left':'0','padding-right':'0'});
				        	}
			        	});
			            }
						var array_images<?php echo $Total_Soft_Gallery_Video;?>=[];
						var array_videos<?php echo $Total_Soft_Gallery_Video;?>=[];
						jQuery('.TotalSoft_GV_SG_Item_<?php echo $Total_Soft_Gallery_Video;?>').each(function(){
							if( jQuery(this).find('img').attr("src") != "" && jQuery(this).find('img').attr("src") != undefined){ array_images<?php echo $Total_Soft_Gallery_Video;?>.push(jQuery(this).find('img').attr("src")); }
							if( jQuery(this).find('iframe').attr("src") != "" && jQuery(this).find('iframe').attr("src") != undefined){ array_videos<?php echo $Total_Soft_Gallery_Video;?>.push(jQuery(this).find('iframe').attr("src")); }
						})
						var imagesload<?php echo $Total_Soft_Gallery_Video;?> = 'false';
						var videosload<?php echo $Total_Soft_Gallery_Video;?> = 'false';
						var y_images<?php echo $Total_Soft_Gallery_Video;?>=0;
						var y_videos<?php echo $Total_Soft_Gallery_Video;?>=0;

						if(array_images<?php echo $Total_Soft_Gallery_Video;?>.length != 0)
						{
							jQuery('.TotalSoft_GV_SG_Imagediv_<?php echo $Total_Soft_Gallery_Video;?>').each(function(i){
								jQuery(this).find('img').attr('src', array_images<?php echo $Total_Soft_Gallery_Video;?>[i]).on("load",function(){
									y_images<?php echo $Total_Soft_Gallery_Video;?>++;
									if(y_images<?php echo $Total_Soft_Gallery_Video;?> == array_images<?php echo $Total_Soft_Gallery_Video;?>.length)
									{
										imagesload<?php echo $Total_Soft_Gallery_Video;?> = 'true';
									}
								})
							})
						}
						else
						{
							imagesload<?php echo $Total_Soft_Gallery_Video;?> = 'true';
						}
						if(array_videos<?php echo $Total_Soft_Gallery_Video;?>.length != 0)
						{
							jQuery('.TotalSoft_GV_SG_Videodiv_<?php echo $Total_Soft_Gallery_Video;?> iframe').each(function(i){
								jQuery(this).attr('src', array_videos<?php echo $Total_Soft_Gallery_Video;?>[i]).on("load",function(){
									y_videos<?php echo $Total_Soft_Gallery_Video;?>++;
									if(y_videos<?php echo $Total_Soft_Gallery_Video;?> == array_videos<?php echo $Total_Soft_Gallery_Video;?>.length)
									{
										videosload<?php echo $Total_Soft_Gallery_Video;?> = 'true';
									}
								})
							})
						}
						else
						{
							videosload<?php echo $Total_Soft_Gallery_Video;?> = 'true';
						}
						setInterval(function(){
							if(imagesload<?php echo $Total_Soft_Gallery_Video;?> == 'true' && videosload<?php echo $Total_Soft_Gallery_Video;?> == 'true')
							{
								jQuery('.TS_GV_SG_Loading_<?php echo $Total_Soft_Gallery_Video;?>').css('display','none');
							}
						},100)
						var delaytime = 0;
						var TS_VG_SG_AE = jQuery('.TS_VG_SG_AE_<?php echo $Total_Soft_Gallery_Video; ?>').val();
						jQuery('.TotalSoft_GV_SG_Grid_<?php echo $Total_Soft_Gallery_Video;?> .TotalSoft_GV_SG_Item_<?php echo $Total_Soft_Gallery_Video;?>').each(function(){
							if(!jQuery(this).hasClass('noshow1'))
							{
								delaytime++;
								if(TS_VG_SG_AE == 'animno')
								{
									jQuery(this).css({'display':'block','animation':'animno 3s cubic-bezier(0.77, 0.35, 0, 1.6) '+0.2*delaytime+'s forwards','-webkit-animation':'animno 3s cubic-bezier(0.77, 0.35, 0, 1.6) '+0.2*delaytime+'s forwards','-moz-animation':'animno 3s cubic-bezier(0.77, 0.35, 0, 1.6) '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_SG_AE == 'animsc')
								{
									jQuery(this).css({'display':'block','animation':'animsc 3s cubic-bezier(0.77, 0.35, 0, 1.6) '+0.2*delaytime+'s forwards','-webkit-animation':'animsc 3s cubic-bezier(0.77, 0.35, 0, 1.6) '+0.2*delaytime+'s forwards','-moz-animation':'animsc 3s cubic-bezier(0.77, 0.35, 0, 1.6) '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_SG_AE == 'animtr')
								{
									jQuery(this).css({'display':'block','animation':'animtr 3s cubic-bezier(0.77, 0.35, 0, 1.6) '+0.2*delaytime+'s forwards','-webkit-animation':'animtr 3s cubic-bezier(0.77, 0.35, 0, 1.6) '+0.2*delaytime+'s forwards','-moz-animation':'animtr 3s cubic-bezier(0.77, 0.35, 0, 1.6) '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_SG_AE == 'fadeIn')
								{
									jQuery(this).css({'display':'block','animation':'fadeIn 0.65s ease '+0.2*delaytime+'s forwards','-webkit-animation':'fadeIn 0.65s ease '+0.2*delaytime+'s forwards','-moz-animation':'fadeIn 0.65s ease '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_SG_AE == 'moveUp')
								{
									jQuery(this).css({'display':'block','animation':'moveUp 0.65s ease '+0.2*delaytime+'s forwards','-webkit-animation':'moveUp 0.65s ease '+0.2*delaytime+'s forwards','-moz-animation':'moveUp 0.65s ease '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_SG_AE == 'scaleUp')
								{
									jQuery(this).css({'display':'block','animation':'scaleUp 0.65s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'scaleUp 0.65s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'scaleUp 0.65s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_SG_AE == 'fallPerspective')
								{
									jQuery(this).css({'display':'block','animation':'fallPerspective 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'fallPerspective 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'fallPerspective 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_SG_AE == 'fly')
								{
									jQuery(this).css({'display':'block','animation':'fly 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'fly 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'fly 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_SG_AE == 'flip')
								{
									jQuery(this).css({'display':'block','animation':'flip 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'flip 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'flip 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_SG_AE == 'helix')
								{
									jQuery(this).css({'display':'block','animation':'helix 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'helix 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'helix 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_SG_AE == 'popUp')
								{
									jQuery(this).css({'display':'block','animation':'popUp 0.8s ease-in '+0.2*delaytime+'s forwards','-webkit-animation':'popUp 0.8s ease-in '+0.2*delaytime+'s forwards','-moz-animation':'popUp 0.8s ease-in '+0.2*delaytime+'s forwards'});
								}
							}
						})
					})
					function Total_Soft_GV_SG_Page(TotalSoftGV_ID, TotalSoftPage, TotalSoftPP, TotalSoftCV)
					{
						//jQuery("html, body").animate({ scrollTop: jQuery('.TotalSoft_GV_SG_Website_'+TotalSoftGV_ID).position().top-10 }, 1000);
						jQuery('html,body').animate({
						      scrollTop: jQuery('.TotalSoft_GV_SG_Website_'+TotalSoftGV_ID).offset().top - jQuery(window).height()/2+200
						   }, 1000);
						var delaytime = 0;
						var TS_VG_SG_AE = jQuery('.TS_VG_SG_AE_'+TotalSoftGV_ID).val();
						for(i=1;i<=TotalSoftCV;i++)
						{
							if(i>TotalSoftPP*(TotalSoftPage-1) && i<=TotalSoftPP*TotalSoftPage)
							{
								delaytime++;
								if(TS_VG_SG_AE == 'animno')
								{
									jQuery('.TotalSoft_GV_SG_Item_'+TotalSoftGV_ID+'_'+i).css({'display':'block','animation':'animno 3s cubic-bezier(0.77, 0.35, 0, 1.6) '+0.2*delaytime+'s forwards','-webkit-animation':'animno 3s cubic-bezier(0.77, 0.35, 0, 1.6) '+0.2*delaytime+'s forwards','-moz-animation':'animno 3s cubic-bezier(0.77, 0.35, 0, 1.6) '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_SG_AE == 'animsc')
								{
									jQuery('.TotalSoft_GV_SG_Item_'+TotalSoftGV_ID+'_'+i).css({'display':'block','animation':'animsc 3s cubic-bezier(0.77, 0.35, 0, 1.6) '+0.2*delaytime+'s forwards','-webkit-animation':'animsc 3s cubic-bezier(0.77, 0.35, 0, 1.6) '+0.2*delaytime+'s forwards','-moz-animation':'animsc 3s cubic-bezier(0.77, 0.35, 0, 1.6) '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_SG_AE == 'animtr')
								{
									jQuery('.TotalSoft_GV_SG_Item_'+TotalSoftGV_ID+'_'+i).css({'display':'block','animation':'animtr 3s cubic-bezier(0.77, 0.35, 0, 1.6) '+0.2*delaytime+'s forwards','-webkit-animation':'animtr 3s cubic-bezier(0.77, 0.35, 0, 1.6) '+0.2*delaytime+'s forwards','-moz-animation':'animtr 3s cubic-bezier(0.77, 0.35, 0, 1.6) '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_SG_AE == 'fadeIn')
								{
									jQuery('.TotalSoft_GV_SG_Item_'+TotalSoftGV_ID+'_'+i).css({'display':'block','animation':'fadeIn 0.65s ease '+0.2*delaytime+'s forwards','-webkit-animation':'fadeIn 0.65s ease '+0.2*delaytime+'s forwards','-moz-animation':'fadeIn 0.65s ease '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_SG_AE == 'moveUp')
								{
									jQuery('.TotalSoft_GV_SG_Item_'+TotalSoftGV_ID+'_'+i).css({'display':'block','animation':'moveUp 0.65s ease '+0.2*delaytime+'s forwards','-webkit-animation':'moveUp 0.65s ease '+0.2*delaytime+'s forwards','-moz-animation':'moveUp 0.65s ease '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_SG_AE == 'scaleUp')
								{
									jQuery('.TotalSoft_GV_SG_Item_'+TotalSoftGV_ID+'_'+i).css({'display':'block','animation':'scaleUp 0.65s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'scaleUp 0.65s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'scaleUp 0.65s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_SG_AE == 'fallPerspective')
								{
									jQuery('.TotalSoft_GV_SG_Item_'+TotalSoftGV_ID+'_'+i).css({'display':'block','animation':'fallPerspective 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'fallPerspective 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'fallPerspective 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_SG_AE == 'fly')
								{
									jQuery('.TotalSoft_GV_SG_Item_'+TotalSoftGV_ID+'_'+i).css({'display':'block','animation':'fly 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'fly 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'fly 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_SG_AE == 'flip')
								{
									jQuery('.TotalSoft_GV_SG_Item_'+TotalSoftGV_ID+'_'+i).css({'display':'block','animation':'flip 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'flip 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'flip 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_SG_AE == 'helix')
								{
									jQuery('.TotalSoft_GV_SG_Item_'+TotalSoftGV_ID+'_'+i).css({'display':'block','animation':'helix 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'helix 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'helix 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
								}
								else if(TS_VG_SG_AE == 'popUp')
								{
									jQuery('.TotalSoft_GV_SG_Item_'+TotalSoftGV_ID+'_'+i).css({'display':'block','animation':'popUp 0.8s ease-in '+0.2*delaytime+'s forwards','-webkit-animation':'popUp 0.8s ease-in '+0.2*delaytime+'s forwards','-moz-animation':'popUp 0.8s ease-in '+0.2*delaytime+'s forwards'});
								}
							}
							else
							{
								jQuery('.TotalSoft_GV_SG_Item_'+TotalSoftGV_ID+'_'+i).css({'display': 'none'});
							}
						}
						jQuery('.TS_GV_SG_Pagination_'+TotalSoftGV_ID+' li').each(function(){ jQuery(this).find('span').removeClass('active'); })
						jQuery('#TotalSoft_GV_SG_PLi_'+TotalSoftGV_ID+'_'+TotalSoftPage).find('span').addClass('active');
					}
					function Total_Soft_GV_SG_PageP(TotalSoftGV_ID, TotalSoftPP, TotalSoftCV)
					{
						var TotalSoftPage='';
						jQuery('.TS_GV_SG_Pagination_'+TotalSoftGV_ID+' li').each(function(){
							if(jQuery(this).find('span').hasClass('active'))
							{
								if(jQuery(this).find('span').html()!='1')
								{
									TotalSoftPage=parseInt(parseInt(jQuery(this).find('span').html())-1);
									Total_Soft_GV_SG_Page(TotalSoftGV_ID, TotalSoftPage, TotalSoftPP, TotalSoftCV);
								}
							}
						})
					}
					function Total_Soft_GV_SG_PageN(TotalSoftGV_ID, TotalSoftPP, TotalSoftCV, TotalSoftPC)
					{
						var TotalSoftPage='';
						jQuery('.TS_GV_SG_Pagination_'+TotalSoftGV_ID+' li').each(function(){
							if(jQuery(this).find('span').hasClass('active'))
							{
								if(jQuery(this).find('span').html()!=TotalSoftPC)
								{
									TotalSoftPage=parseInt(parseInt(jQuery(this).find('span').html())+1);
									Total_Soft_GV_SG_Page(TotalSoftGV_ID, TotalSoftPage, TotalSoftPP, TotalSoftCV);
									return false;
								}
							}
						})
					}
					function Total_Soft_GV_SG_PageLM(TotalSoftGV_ID, TotalSoftPP, TotalSoftCV, TotalSoftPC)
					{
						var TotalSoftPage=parseInt(parseInt(jQuery('#TotalSoft_VG_SG_Page_'+TotalSoftGV_ID).val())+1);
						jQuery('#TotalSoft_VG_SG_Page_'+TotalSoftGV_ID).val(TotalSoftPage);
						var delaytime = 0;
						var TS_VG_SG_AE = jQuery('.TS_VG_SG_AE_'+TotalSoftGV_ID).val();

						if(TotalSoftPage<=TotalSoftPC)
						{
							for(i=1;i<=TotalSoftCV;i++)
							{
								if(i<=TotalSoftPP*TotalSoftPage && i > TotalSoftPP*parseInt(parseInt(TotalSoftPage)-1))
								{
									delaytime++;
									if(TS_VG_SG_AE == 'animno')
									{
										jQuery('.TotalSoft_GV_SG_Item_'+TotalSoftGV_ID+'_'+i).css({'display':'block','animation':'animno 3s cubic-bezier(0.77, 0.35, 0, 1.6) '+0.2*delaytime+'s forwards','-webkit-animation':'animno 3s cubic-bezier(0.77, 0.35, 0, 1.6) '+0.2*delaytime+'s forwards','-moz-animation':'animno 3s cubic-bezier(0.77, 0.35, 0, 1.6) '+0.2*delaytime+'s forwards'});
									}
									else if(TS_VG_SG_AE == 'animsc')
									{
										jQuery('.TotalSoft_GV_SG_Item_'+TotalSoftGV_ID+'_'+i).css({'display':'block','animation':'animsc 3s cubic-bezier(0.77, 0.35, 0, 1.6) '+0.2*delaytime+'s forwards','-webkit-animation':'animsc 3s cubic-bezier(0.77, 0.35, 0, 1.6) '+0.2*delaytime+'s forwards','-moz-animation':'animsc 3s cubic-bezier(0.77, 0.35, 0, 1.6) '+0.2*delaytime+'s forwards'});
									}
									else if(TS_VG_SG_AE == 'animtr')
									{
										jQuery('.TotalSoft_GV_SG_Item_'+TotalSoftGV_ID+'_'+i).css({'display':'block','animation':'animtr 3s cubic-bezier(0.77, 0.35, 0, 1.6) '+0.2*delaytime+'s forwards','-webkit-animation':'animtr 3s cubic-bezier(0.77, 0.35, 0, 1.6) '+0.2*delaytime+'s forwards','-moz-animation':'animtr 3s cubic-bezier(0.77, 0.35, 0, 1.6) '+0.2*delaytime+'s forwards'});
									}
									else if(TS_VG_SG_AE == 'fadeIn')
									{
										jQuery('.TotalSoft_GV_SG_Item_'+TotalSoftGV_ID+'_'+i).css({'display':'block','animation':'fadeIn 0.65s ease '+0.2*delaytime+'s forwards','-webkit-animation':'fadeIn 0.65s ease '+0.2*delaytime+'s forwards','-moz-animation':'fadeIn 0.65s ease '+0.2*delaytime+'s forwards'});
									}
									else if(TS_VG_SG_AE == 'moveUp')
									{
										jQuery('.TotalSoft_GV_SG_Item_'+TotalSoftGV_ID+'_'+i).css({'display':'block','animation':'moveUp 0.65s ease '+0.2*delaytime+'s forwards','-webkit-animation':'moveUp 0.65s ease '+0.2*delaytime+'s forwards','-moz-animation':'moveUp 0.65s ease '+0.2*delaytime+'s forwards'});
									}
									else if(TS_VG_SG_AE == 'scaleUp')
									{
										jQuery('.TotalSoft_GV_SG_Item_'+TotalSoftGV_ID+'_'+i).css({'display':'block','animation':'scaleUp 0.65s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'scaleUp 0.65s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'scaleUp 0.65s ease-in-out '+0.2*delaytime+'s forwards'});
									}
									else if(TS_VG_SG_AE == 'fallPerspective')
									{
										jQuery('.TotalSoft_GV_SG_Item_'+TotalSoftGV_ID+'_'+i).css({'display':'block','animation':'fallPerspective 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'fallPerspective 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'fallPerspective 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
									}
									else if(TS_VG_SG_AE == 'fly')
									{
										jQuery('.TotalSoft_GV_SG_Item_'+TotalSoftGV_ID+'_'+i).css({'display':'block','animation':'fly 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'fly 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'fly 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
									}
									else if(TS_VG_SG_AE == 'flip')
									{
										jQuery('.TotalSoft_GV_SG_Item_'+TotalSoftGV_ID+'_'+i).css({'display':'block','animation':'flip 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'flip 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'flip 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
									}
									else if(TS_VG_SG_AE == 'helix')
									{
										jQuery('.TotalSoft_GV_SG_Item_'+TotalSoftGV_ID+'_'+i).css({'display':'block','animation':'helix 0.8s ease-in-out '+0.2*delaytime+'s forwards','-webkit-animation':'helix 0.8s ease-in-out '+0.2*delaytime+'s forwards','-moz-animation':'helix 0.8s ease-in-out '+0.2*delaytime+'s forwards'});
									}
									else if(TS_VG_SG_AE == 'popUp')
									{
										jQuery('.TotalSoft_GV_SG_Item_'+TotalSoftGV_ID+'_'+i).css({'display':'block','animation':'popUp 0.8s ease-in '+0.2*delaytime+'s forwards','-webkit-animation':'popUp 0.8s ease-in '+0.2*delaytime+'s forwards','-moz-animation':'popUp 0.8s ease-in '+0.2*delaytime+'s forwards'});
									}
								}
							}
							if(TotalSoftPage==TotalSoftPC)
							{
								jQuery('#TotalSoft_VG_SG_PageDiv_'+TotalSoftGV_ID).animate({'opacity':'0'},500).css('display','none');
							}
						}
						else
						{
							jQuery('#TotalSoft_VG_SG_PageDiv_'+TotalSoftGV_ID).animate({'opacity':'0'},500).css('display','none');
						}
					}
				</script>
				<div class="TotalSoft_GV_SG_Website_<?php echo $Total_Soft_Gallery_Video;?>" style="position: relative; width: 100%; float: left;">
					<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34 != ''){ ?>
						<div class="TS_GV_SG_Loading_<?php echo $Total_Soft_Gallery_Video;?>">
							<img src="<?php echo plugins_url('../Images/Loading/loading' . $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_34 . '.gif',__FILE__);?>">
						</div>
					<?php }?>
					<div class="TotalSoft_GV_SG_Grid_<?php echo $Total_Soft_Gallery_Video;?>">
						<?php for($i=0;$i<count($Total_Soft_GalleryV_Videos);$i++){ ?>
							<?php if($Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType == 'All'){ ?>
								<div class="TotalSoft_GV_SG_Item_<?php echo $Total_Soft_Gallery_Video;?> TotalSoft_GV_SG_Item_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i;?>">
									<span class="TotalSoft_GV_SG_VideoTitle_<?php echo $Total_Soft_Gallery_Video;?>">
										<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
									</span>
									<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL == '') { ?>
										<div class="TotalSoft_GV_SG_Imagediv_<?php echo $Total_Soft_Gallery_Video;?>">
											<img src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>">
										</div>
									<?php }else{ ?>
										<div class="TotalSoft_GV_SG_Videodiv_<?php echo $Total_Soft_Gallery_Video;?>">
											<?php if(strpos($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL,'.mp4') > 0){ ?>
												<video controls poster="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>">
													<source src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL;?>" type="video/mp4">
												</video>
											<?php } else { ?>
												<?php if(strpos($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL, 'start')){ ?>
													<iframe src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL;?>&autoplay=0&controls=1&showinfo=0&autohide=1&rel=0&iv_load_policy=3" frameborder="0" webkitAllowFullScreen></iframe>
												<?php } else { ?><iframe src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL;?>?autoplay=0&controls=1&showinfo=0&autohide=1&rel=0&iv_load_policy=3" frameborder="0" webkitAllowFullScreen></iframe> <?php } ?>
											<?php } ?>
										</div>
									<?php }?>
									<span class="TotalSoft_GV_SG_VideoPMspan_<?php echo $Total_Soft_Gallery_Video;?>" onclick="TotalSoft_GV_SG_OPop<?php echo $Total_Soft_Gallery_Video;?>(<?php echo $Total_Soft_Gallery_Video;?>, <?php echo $i;?>)">
										<span class="TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>">
											<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24 == 'before' && $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22 != 'none'){ ?>
												<i class="TotalSoft_GV_SG_VideoPMicon_<?php echo $Total_Soft_Gallery_Video;?> totalsoft totalsoft-<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22;?>"></i>
											<?php }?>
											<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_14;?>
											<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24 == 'after' && $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22 != 'none'){ ?>
												<i class="TotalSoft_GV_SG_VideoPMicon_<?php echo $Total_Soft_Gallery_Video;?> totalsoft totalsoft-<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22;?>"></i>
											<?php }?>
										</span>
									</span>
								</div>
							<?php } else { ?>
								<?php if($i<$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage){ ?>
									<div class="TotalSoft_GV_SG_Item_<?php echo $Total_Soft_Gallery_Video;?> TotalSoft_GV_SG_Item_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i+1;?>">
										<span class="TotalSoft_GV_SG_VideoTitle_<?php echo $Total_Soft_Gallery_Video;?>">
											<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
										</span>
										<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL == '') { ?>
											<div class="TotalSoft_GV_SG_Imagediv_<?php echo $Total_Soft_Gallery_Video;?>">
												<img src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>">
											</div>
										<?php }else{ ?>
											<div class="TotalSoft_GV_SG_Videodiv_<?php echo $Total_Soft_Gallery_Video;?>">
												<?php if(strpos($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL,'.mp4') > 0){ ?>
													<video controls poster="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>">
														<source src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL;?>" type="video/mp4">
													</video>
												<?php } else { ?>
												<?php if(strpos($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL, 'start')){ ?>
													<iframe src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL;?>&autoplay=0&controls=1&showinfo=0&autohide=1&rel=0&iv_load_policy=3" frameborder="0" webkitAllowFullScreen></iframe>
												<?php } else { ?><iframe src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL;?>?autoplay=0&controls=1&showinfo=0&autohide=1&rel=0&iv_load_policy=3" frameborder="0" webkitAllowFullScreen></iframe> <?php } ?>
												<?php }?>
											</div>
										<?php }?>
										<span class="TotalSoft_GV_SG_VideoPMspan_<?php echo $Total_Soft_Gallery_Video;?>" onclick="TotalSoft_GV_SG_OPop<?php echo $Total_Soft_Gallery_Video;?>(<?php echo $Total_Soft_Gallery_Video;?>, <?php echo $i;?>)">
											<span class="TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>">
												<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24 == 'before' && $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22 != 'none'){ ?>
													<i class="TotalSoft_GV_SG_VideoPMicon_<?php echo $Total_Soft_Gallery_Video;?> totalsoft totalsoft-<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22;?>"></i>
												<?php }?>
												<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_14;?>
												<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24 == 'after' && $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22 != 'none'){ ?>
													<i class="TotalSoft_GV_SG_VideoPMicon_<?php echo $Total_Soft_Gallery_Video;?> totalsoft totalsoft-<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22;?>"></i>
												<?php }?>
											</span>
										</span>
									</div>
								<?php }else{ ?>
									<div class="TotalSoft_GV_SG_Item_<?php echo $Total_Soft_Gallery_Video;?> TotalSoft_GV_SG_Item_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i+1;?> noshow1" style="display: none;">
										<span class="TotalSoft_GV_SG_VideoTitle_<?php echo $Total_Soft_Gallery_Video;?>">
											<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
										</span>
										<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL == '') { ?>
											<div class="TotalSoft_GV_SG_Imagediv_<?php echo $Total_Soft_Gallery_Video;?>">
												<img src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>">
											</div>
										<?php }else{ ?>
											<div class="TotalSoft_GV_SG_Videodiv_<?php echo $Total_Soft_Gallery_Video;?>">
												<?php if(strpos($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL,'.mp4') > 0){ ?>
													<video controls poster="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>">
														<source src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL;?>" type="video/mp4">
													</video>
												<?php } else { ?>
												<?php if(strpos($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL, 'start')){ ?>
													<iframe src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL;?>&autoplay=0&controls=1&showinfo=0&autohide=1&rel=0&iv_load_policy=3" frameborder="0" webkitAllowFullScreen></iframe>
												<?php } else { ?><iframe src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL;?>?autoplay=0&controls=1&showinfo=0&autohide=1&rel=0&iv_load_policy=3" frameborder="0" webkitAllowFullScreen></iframe> <?php } ?>
												<?php }?>
											</div>
										<?php }?>
										<span class="TotalSoft_GV_SG_VideoPMspan_<?php echo $Total_Soft_Gallery_Video;?>" onclick="TotalSoft_GV_SG_OPop<?php echo $Total_Soft_Gallery_Video;?>(<?php echo $Total_Soft_Gallery_Video;?>, <?php echo $i;?>)">
											<span class="TotalSoft_GV_SG_VideoPM_<?php echo $Total_Soft_Gallery_Video;?>">
												<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24 == 'before' && $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22 != 'none'){ ?>
													<i class="TotalSoft_GV_SG_VideoPMicon_<?php echo $Total_Soft_Gallery_Video;?> totalsoft totalsoft-<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22;?>"></i>
												<?php }?>
												<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_14;?>
												<?php if($TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_24 == 'after' && $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22 != 'none'){ ?>
													<i class="TotalSoft_GV_SG_VideoPMicon_<?php echo $Total_Soft_Gallery_Video;?> totalsoft totalsoft-<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_22;?>"></i>
												<?php }?>
											</span>
										</span>
									</div>
						<?php } } }?>
					</div>
					<input type="text" style="display: none;" class="TS_VG_SG_AE_<?php echo $Total_Soft_Gallery_Video; ?>" value="<?php echo $TotalSoftGallery_Video_Opt1[0]->TotalSoft_GV_1_01;?>">
					<?php if($Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType=='Pagination'){ ?>
						<div class="TotalSoftcenter">
							<ul class="TS_GV_SG_Pagination_<?php echo $Total_Soft_Gallery_Video;?>" style='margin:0px;padding:0px;'>
								<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_31 != 'none'){ ?>
									<li onclick="Total_Soft_GV_SG_PageP('<?php echo $Total_Soft_Gallery_Video;?>', '<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>')">
										<span><i class="totalsoft totalsoft-<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_31;?>-left"></i></span>
									</li>
								<?php } ?>
								<?php for($i=1;$i<=ceil(count($Total_Soft_GalleryV_Videos)/$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage);$i++){ ?> 
									<?php if($i==1){ ?>
										<li id="TotalSoft_GV_SG_PLi_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i;?>" onclick="Total_Soft_GV_SG_Page('<?php echo $Total_Soft_Gallery_Video;?>','<?php echo $i?>','<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>')">
											<span class="active"><?php echo $i;?></span>
										</li>
									<?php } else { ?>
										<li id="TotalSoft_GV_SG_PLi_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i;?>" onclick="Total_Soft_GV_SG_Page('<?php echo $Total_Soft_Gallery_Video;?>','<?php echo $i?>','<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>')">
											<span><?php echo $i;?></span>
										</li>
									<?php }?>
								<?php }?>
								<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_31 != 'none'){ ?>
									<li onclick="Total_Soft_GV_SG_PageN('<?php echo $Total_Soft_Gallery_Video;?>', '<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>', '<?php echo ceil(count($Total_Soft_GalleryV_Videos)/$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage);?>')">
										<span><i class="totalsoft totalsoft-<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_31;?>-right"></i></span>
									</li>
								<?php }?>
							</ul>
						</div>
					<?php }?>
					<?php if($Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType=='Load'){ ?>
						<div class="TotalSoftcenter" id="TotalSoft_VG_SG_PageDiv_<?php echo $Total_Soft_Gallery_Video;?>">
							<span class="TS_GV_SG_LoadMore_<?php echo $Total_Soft_Gallery_Video;?>" onclick="Total_Soft_GV_SG_PageLM('<?php echo $Total_Soft_Gallery_Video;?>', '<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>', '<?php echo ceil(count($Total_Soft_GalleryV_Videos)/$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage);?>')">
								<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_33 == 'Before' && $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_32 != 'none'){ ?>
									<i class="totalsoft totalsoft-<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_32;?>" style="margin-right: 5px;"></i>
								<?php }?>
								<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_LoadMore;?>
								<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_33 == 'After' && $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_32 != 'none'){ ?>
									<i class="totalsoft totalsoft-<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_32;?>" style="margin-left: 5px;"></i>
								<?php }?>
							</span>
							<input type="text" style="display:none;" id="TotalSoft_VG_SG_Page_<?php echo $Total_Soft_Gallery_Video;?>" value="1">
						</div>
					<?php } ?>
				</div>
				<div class="TS_GV_SG_Div_Full_<?php echo $Total_Soft_Gallery_Video;?>" onclick="TotalSoft_GV_SG_CPop<?php echo $Total_Soft_Gallery_Video;?>(<?php echo $Total_Soft_Gallery_Video;?>)"></div>
				<div class="TS_GV_SG_Div_box_<?php echo $Total_Soft_Gallery_Video;?>">
					<?php for($i=0;$i<count($Total_Soft_GalleryV_Videos);$i++){ ?>
						<div class="TS_GV_SG_Div_box_div1_<?php echo $Total_Soft_Gallery_Video;?> TS_GV_SG_Div_box_div1_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i;?>">
							<div class="TS_GV_SG_Div_video_<?php echo $Total_Soft_Gallery_Video;?>">								
								<iframe src="" frameborder="0" allowfullscreen></iframe>
								<img src="">
							</div>
							<i onclick="TotalSoft_GV_SG_ClPop<?php echo $Total_Soft_Gallery_Video;?>(<?php echo $Total_Soft_Gallery_Video;?>,<?php echo $i;?>)" class="TotalSoft_GV_SG_CIcon_<?php echo $Total_Soft_Gallery_Video;?> totalsoft totalsoft-<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_19;?>"></i>
							<div class="TS_GV_SG_Div_box_div2_<?php echo $Total_Soft_Gallery_Video;?> TS_GV_SG_Div_box_div2_1_<?php echo $Total_Soft_Gallery_Video;?>" onclick="TotalSoft_GV_SG_IPop<?php echo $Total_Soft_Gallery_Video;?>(<?php echo $Total_Soft_Gallery_Video;?>,<?php echo $i;?>)">
								<i class="TotalSoft_GV_SG_Info_<?php echo $Total_Soft_Gallery_Video;?> totalsoft totalsoft-chevron-right"></i>
							</div>
							<div class="TS_GV_SG_Div_box_div2_<?php echo $Total_Soft_Gallery_Video;?> TS_GV_SG_Div_box_div2_2_<?php echo $Total_Soft_Gallery_Video;?> TS_GV_SG_Div_box_div2_a_<?php echo $Total_Soft_Gallery_Video;?>" onclick="TotalSoft_GV_SG_DPop<?php echo $Total_Soft_Gallery_Video;?>(<?php echo $Total_Soft_Gallery_Video;?>,<?php echo $i;?>)">
								<i class="TotalSoft_GV_SG_Info_1_<?php echo $Total_Soft_Gallery_Video;?> totalsoft totalsoft-chevron-left"></i>
							</div>
							<div class="TS_GV_SG_Div_box_div3_<?php echo $Total_Soft_Gallery_Video;?> TS_GV_SG_Div_box_div3_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i;?>">
								<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_08 == 'beforetitle'){ ?>
									<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink != ''){ ?>
										<div style='position: relative;'>
											<a class="TotalSoft_GV_SG_Link_<?php echo $Total_Soft_Gallery_Video;?>" href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink;?>" <?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VONT=='true'){echo 'target="_blank"';}?>>
												<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18 == 'before' && $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14 != 'none'){ ?>
													<i class="TotalSoft_GV_SG_Link_Icon_<?php echo $Total_Soft_Gallery_Video;?> totalsoft totalsoft-<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14;?>" style="margin-right: 5px;"></i>
												<?php }?>
												<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_05;?>
												<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18 == 'after' && $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14 != 'none'){ ?>
													<i class="TotalSoft_GV_SG_Link_Icon_<?php echo $Total_Soft_Gallery_Video;?> totalsoft totalsoft-<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14;?>" style="margin-left: 5px;"></i>
												<?php }?>
											</a>
										</div>
									<?php }?>
								<?php }?>
								<div style='position: relative;'>
									<span class="TS_GV_SG_Div_box_div3_Title_<?php echo $Total_Soft_Gallery_Video;?>">
										<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT);?>
									</span>
								</div>
								<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_08 == 'aftertitle'){ ?>
									<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink != ''){ ?>
										<div style='position: relative;'>
											<a class="TotalSoft_GV_SG_Link_<?php echo $Total_Soft_Gallery_Video;?>" href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink;?>" <?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VONT=='true'){echo 'target="_blank"';}?>>
												<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18 == 'before' && $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14 != 'none'){ ?>
													<i class="TotalSoft_GV_SG_Link_Icon_<?php echo $Total_Soft_Gallery_Video;?> totalsoft totalsoft-<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14;?>" style="margin-right: 5px;"></i>
												<?php }?>
												<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_05;?>
												<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18 == 'after' && $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14 != 'none'){ ?>
													<i class="TotalSoft_GV_SG_Link_Icon_<?php echo $Total_Soft_Gallery_Video;?> totalsoft totalsoft-<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14;?>" style="margin-left: 5px;"></i>
												<?php }?>
											</a>
										</div>
									<?php }?>
								<?php }?>
								<div class="TS_GV_SG_Div_box_div3_LAT_<?php echo $Total_Soft_Gallery_Video;?>">
									<span></span>
								</div>
								<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_08 == 'afterline'){ ?>
									<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink != ''){ ?>
										<div style='position: relative;'>
											<a class="TotalSoft_GV_SG_Link_<?php echo $Total_Soft_Gallery_Video;?>" href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink;?>" <?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VONT=='true'){echo 'target="_blank"';}?>>
												<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18 == 'before' && $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14 != 'none'){ ?>
													<i class="TotalSoft_GV_SG_Link_Icon_<?php echo $Total_Soft_Gallery_Video;?> totalsoft totalsoft-<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14;?>" style="margin-right: 5px;"></i>
												<?php }?>
												<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_05;?>
												<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18 == 'after' && $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14 != 'none'){ ?>
													<i class="TotalSoft_GV_SG_Link_Icon_<?php echo $Total_Soft_Gallery_Video;?> totalsoft totalsoft-<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14;?>" style="margin-left: 5px;"></i>
												<?php }?>
											</a>
										</div>
									<?php }?>
								<?php }?>
								<div style="position: relative; padding: 5px 0;">
									<?php echo html_entity_decode($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc);?>
								</div>
								<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_08 == 'afterdesc'){ ?>
									<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink != ''){ ?>
										<div style='margin:5px 0; position: relative;'>
											<a class="TotalSoft_GV_SG_Link_<?php echo $Total_Soft_Gallery_Video;?>" href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink;?>" <?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VONT=='true'){echo 'target="_blank"';}?>>
												<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18 == 'before' && $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14 != 'none'){ ?>
													<i class="TotalSoft_GV_SG_Link_Icon_<?php echo $Total_Soft_Gallery_Video;?> totalsoft totalsoft-<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14;?>" style="margin-right: 5px;"></i>
												<?php }?>
												<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_05;?>
												<?php if($TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_18 == 'after' && $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14 != 'none'){ ?>
													<i class="TotalSoft_GV_SG_Link_Icon_<?php echo $Total_Soft_Gallery_Video;?> totalsoft totalsoft-<?php echo $TotalSoftGallery_Video_Opt2[0]->TotalSoft_GV_2_14;?>" style="margin-left: 5px;"></i>
												<?php }?>
											</a>
										</div>
									<?php }?>
								<?php }?>
							</div>
						</div>
					<?php }?>
				</div>
				<input type="text" style="display: none;" class="TotalSoftGallery_Video_ShowType<?php echo $Total_Soft_Gallery_Video;?>" value="<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType; ?>">
<?php } echo $after_widget;

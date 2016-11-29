<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" />
	<meta name="renderer" content="webkit">
	<title>瓷爱助残</title>

	<link href="/Public/Css/bootstrap.min.css" rel="stylesheet">

	<style type="text/css">

	.myFont{
		margin:10% auto;
		width: 600px;
		height: 800px;
		font-family: myFont;
		font-size:50px;

	}

	.myFont h1:first-child{
		width:100%;
        display: inline-block;
	}

	.myFont a{
		background: url('/Public/Img/button.jpg') no-repeat;
		top:-100px;
		width:200px;
		height:58px;
		border-radius: 5px;
		display: inline-block;
        font-family:myFont;
	}

	.myFont a:hover{
		filter:alpha(opacity=80); 
		opacity:0.8; 
	}
	.btnimg{
		width:50%;
		border-radius: 10px;
	}

	@font-face{
		font-family:myFont;
		src:url('/Public/fonts/main.otf');
		/*src: url('/Public/fonts/maineot.eot?#iefix') format('embedded-opentype'),
	     	url('/Public/fonts/mainwoff.woff') format('woff'),
	     	url('/Public/fonts/mainsvg.svg#webfont') format('svg');*/
	}
		.nav{
			position:fixed;
			padding-top:100px;
			margin-left: 10px;
			z-index: 100;
			color:white;
			font-size:22px;
			font-family: myFont;
			/*font-family:"Microsoft YaHei", Verdana, Geneva, sans-serif;*/
			background-color: rgba(250,74,97,0.9);
			border-radius: 0px 0px 10px 10px;
		}
		.nav li{
			padding:10px;
		}
		#mycarousel {height:100%;}
		.item img{width:100%;}
		/*.mylink{position: absolute;margin-top:350px;width:20%;height:100px;background-color: #FA4961;font-size: 50px;padding:20px;margin-left: -10%;overflow: hidden;}*/
		body{color:#222;-webkit-text-size-adjust:none;}
		body,h1,h2,h3,h4,h5,h6,hr,p,blockquote,dl, dt,dd,ul,ol,li,pre,form,fieldset,legend,button,input,textarea,th,td,iframe{margin:0px; padding:0;}
		h1,h2,h3,h4,h5,h6{font-size:100%;}
		body,button,input,select,textarea {font-family:Tahoma,Arial,Roboto,”Droid Sans”,”Helvetica Neue”,”Droid Sans Fallback”,”Heiti SC”,sans-self;font-size:62.5%; line-height:1.5;}
		ol,ul{list-style:none;}
		
		html,body{ width:100%; height:100%; overflow:hidden;}
		.section-wrap{ width:100%;height:100%;overflow:visible;transition:transform 1s cubic-bezier(0.86,0,0.03,1);-webkit-transition:-webkit-transform 1s cubic-bezier(0.86,0,0.03,1);}
		.section-wrap .section{ position:relative; width:100%; height:100%; background-position:center center; background-repeat:no-repeat;}
		.section-wrap .section .title{width:100%;position:absolute;top:10%;color:#fff;font-size:2.4em;text-align:center;}
		.section-wrap .section .title p{ padding:0 4%;opacity:0}
		.section-wrap .section .title.active .tit{ opacity:1;transform:translateY(-25px);-webkit-transform:translateY(-25px);transition:all 2s cubic-bezier(0.86,0,0.8,1);-webkit-transition:all 2s cubic-bezier(0.86,0,0.8,1);}
		.section-wrap .section-1{ background-image: url("/Public/Img/1.jpg");background-size:100% 100%;border-bottom: 5px solid rgba(250,74,97,0.9);}
		.section-wrap .section-2{ background-image: url("/Public/Img/2.jpg"); background-size:100% 100%;border-bottom: 5px solid #000000;}
		.section-wrap .section-3{ background-image: url("/Public/Img/3.jpg");background-size:100% 100%;}
		.section-wrap .section-4{ background-color:#f0ad4e}
		.section-wrap .section-5{ background-color:#d9534f}
		.put-section-0{ transform:translateY(0);-webkit-transform:translateY(0);}
		.put-section-1{ transform:translateY(-100%);-webkit-transform:translateY(-100%);}
		.put-section-2{ transform:translateY(-200%);-webkit-transform:translateY(-200%);}
		.put-section-3{ transform:translateY(-300%);-webkit-transform:translateY(-300%);}
		.put-section-4{ transform:translateY(-400%);-webkit-transform:translateY(-400%);}
		.section-btn{ width:14px;position:fixed;right:4%;top:50%;}
		.section-btn li{ width:20px;height:20px;cursor:pointer;text-indent:-9999px;border-radius:50%;-webkit-border-radius:50%;margin-bottom:12px; background:rgba(255,255,255,0.3);text-align:center; color:#fff; onsor:pointer;}
		.section-btn li.on{ background:#fff}
		.arrow{ opacity:1;animation:arrow 3s cubic-bezier(0.5,0,0.1,1) infinite;-webkit-animation:arrow 3s cubic-bezier(0.5,0,0.1,1) infinite;transform:rotate(-90deg);-webkit-transform:rotate(-90deg); position:absolute;bottom:10px;left:50%;margin-left:-30px;width:60px;height:60px;border-radius:100%;-webkit-border-radius:100%;line-height:60px;text-align:center;font-size:20px;color:#fff;border:1px solid #fff;cursor:pointer;overflow:hidden;}
		.arrow:hover{ animation-play-state:paused;-webkit-animation-play-state:paused;}
		@keyframes arrow{ %0,%100{bottom:10px; opacity:1;} 50%{bottom:50px; opacity:.5} }
		@-webkit-keyframes arrow{ %0,%100{bottom:10px; opacity:1;} 50%{bottom:50px; opacity:.5} }
	</style>
	<!--[if lte IE 8]>
	<style type="text/css">
		html,body{width:100%; height:100%; overflow:scroll}
		.section-btn{display:none;}
	</style>
	<![endif]-->
</head>
<body>

	<div class="nav">
			<ul>
				<li>您好!</li>
				<li>欢迎!</li>
				<li>光临!</li>
			</ul>
	</div>
	
	<section class="section-wrap">	



		

		<div class="section section-1">

			
			<div class="title active">
				<p class="tit"></p>
			</div>
		</div>



		<div class="section section-2">

			<div class="title">
				<p class="tit"></p>
			</div>
		</div>

		<div class="section section-3">
			<div class="title">
				<p class="tit"></p>
				<h1></h1>
				<div class="myFont">
					<h1 class="firmig" >让每个孩子成为家庭的骄傲</h1>
                    <h1>想要更深的了解我们~</h1>
                    <br>
					<a href="<?php echo U('Home/index/main');?>"></a>
				</div>
			</div>
		</div>

		
	
		
	</section>
	<ul class="section-btn">
	  <li class="on"></li>
	  <li></li>
	  <li></li>
	  <!--<li></li>
	  <li></li>-->
	</ul>
	<div class="arrow">&laquo;</div>


<script src="/Public/Js/jquery.min.js"></script>
<script type="text/javascript">
	//此处引用：鼠标滚轮mousewheel插件
	!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):"object"==typeof exports?module.exports=a:a(jQuery)}(function(a){function b(b){var g=b||window.event,h=i.call(arguments,1),j=0,l=0,m=0,n=0,o=0,p=0;if(b=a.event.fix(g),b.type="mousewheel","detail"in g&&(m=-1*g.detail),"wheelDelta"in g&&(m=g.wheelDelta),"wheelDeltaY"in g&&(m=g.wheelDeltaY),"wheelDeltaX"in g&&(l=-1*g.wheelDeltaX),"axis"in g&&g.axis===g.HORIZONTAL_AXIS&&(l=-1*m,m=0),j=0===m?l:m,"deltaY"in g&&(m=-1*g.deltaY,j=m),"deltaX"in g&&(l=g.deltaX,0===m&&(j=-1*l)),0!==m||0!==l){if(1===g.deltaMode){var q=a.data(this,"mousewheel-line-height");j*=q,m*=q,l*=q}else if(2===g.deltaMode){var r=a.data(this,"mousewheel-page-height");j*=r,m*=r,l*=r}if(n=Math.max(Math.abs(m),Math.abs(l)),(!f||f>n)&&(f=n,d(g,n)&&(f/=40)),d(g,n)&&(j/=40,l/=40,m/=40),j=Math[j>=1?"floor":"ceil"](j/f),l=Math[l>=1?"floor":"ceil"](l/f),m=Math[m>=1?"floor":"ceil"](m/f),k.settings.normalizeOffset&&this.getBoundingClientRect){var s=this.getBoundingClientRect();o=b.clientX-s.left,p=b.clientY-s.top}return b.deltaX=l,b.deltaY=m,b.deltaFactor=f,b.offsetX=o,b.offsetY=p,b.deltaMode=0,h.unshift(b,j,l,m),e&&clearTimeout(e),e=setTimeout(c,200),(a.event.dispatch||a.event.handle).apply(this,h)}}function c(){f=null}function d(a,b){return k.settings.adjustOldDeltas&&"mousewheel"===a.type&&b%120===0}var e,f,g=["wheel","mousewheel","DOMMouseScroll","MozMousePixelScroll"],h="onwheel"in document||document.documentMode>=9?["wheel"]:["mousewheel","DomMouseScroll","MozMousePixelScroll"],i=Array.prototype.slice;if(a.event.fixHooks)for(var j=g.length;j;)a.event.fixHooks[g[--j]]=a.event.mouseHooks;var k=a.event.special.mousewheel={version:"3.1.12",setup:function(){if(this.addEventListener)for(var c=h.length;c;)this.addEventListener(h[--c],b,!1);else this.onmousewheel=b;a.data(this,"mousewheel-line-height",k.getLineHeight(this)),a.data(this,"mousewheel-page-height",k.getPageHeight(this))},teardown:function(){if(this.removeEventListener)for(var c=h.length;c;)this.removeEventListener(h[--c],b,!1);else this.onmousewheel=null;a.removeData(this,"mousewheel-line-height"),a.removeData(this,"mousewheel-page-height")},getLineHeight:function(b){var c=a(b),d=c["offsetParent"in a.fn?"offsetParent":"parent"]();return d.length||(d=a("body")),parseInt(d.css("fontSize"),10)||parseInt(c.css("fontSize"),10)||16},getPageHeight:function(b){return a(b).height()},settings:{adjustOldDeltas:!0,normalizeOffset:!0}};a.fn.extend({mousewheel:function(a){return a?this.bind("mousewheel",a):this.trigger("mousewheel")},unmousewheel:function(a){return this.unbind("mousewheel",a)}})});
	
	$(function(){
		var i=0;
		var $btn = $('.section-btn li'),
			$wrap = $('.section-wrap'),
			$arrow = $('.arrow');
		
		/*当前页面赋值*/
		function up(){i++;if(i==$btn.length){i=0};}
		function down(){i--;if(i<0){i=$btn.length-1};}
		
		/*页面滑动*/
		function run(){
			$btn.eq(i).addClass('on').siblings().removeClass('on');	
			$wrap.attr("class","section-wrap").addClass(function() { return "put-section-"+i; }).find('.section').eq(i).find('.title').addClass('active');
		};
		
		/*右侧按钮点击*/
		$btn.each(function(index) {
			$(this).click(function(){
				i=index;
				run();
			})
		});
		
		/*翻页按钮点击*/
		$arrow.one('click',go);
		function go(){
			up();run();	
			setTimeout(function(){ $arrow.one('click',go)},1000)
		};
		
		/*响应鼠标*/
		$wrap.one('mousewheel',mouse_);
		function mouse_(event){
			if(event.deltaY<0) {up()}
			else{down()}
			run();
			setTimeout(function(){ $wrap.one('mousewheel',mouse_)},1000)
		};
		
		/*响应键盘上下键*/
		$(document).one('keydown',k);
		function k(event){
			var e=event||window.event;
			var key=e.keyCode||e.which||e.charCode;
			switch(key)	{
				case 38: down();run();	
				break;
				case 40: up();run();	
				break;
			};
			setTimeout(function(){$(document).one('keydown',k)},1000);
		}

	});
</script>
<script type="text/javascript" src="/Public/Js/bootstrap.min.js"></script>
<script src="/Public/Js/bstraplang/zh_CN.js"></script>


</body>
</html>
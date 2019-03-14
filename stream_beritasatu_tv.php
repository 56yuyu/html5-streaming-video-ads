<!DOCTYPE html>
<html lang="id">
<head>
	<title>LIVE STREAMING - BeritSatu.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name = "format-detection" content = "telephone=no">
	<meta name="keywords" content="Streaming" />
	<meta name="description" content="Live Streaming BeritaSatu TV" />
  	<link rel="icon" type="image/png" href="https://www.beritasatu.com/assets/img/favicon.jpeg">
  	
  	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/microsite/vid/style.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/microsite/vid/bootstrap.css') ?>">
 	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/microsite/vid/bootstrap-theme.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/microsite/vid/font-awesome.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/microsite/vid/custom.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/microsite/vid/responsive.css') ?>">
	<script type="text/javascript" src="<?=base_url('assets/microsite/vid/jquery.v2.1.3.js') ?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/microsite/vid/bootstrap.min.js') ?>"></script>
	
	<!-- <link rel="stylesheet" type="text/css" href="assets/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
 	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/custom.css">
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
	<script type="text/javascript" src="assets/js/jquery.v2.1.3.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script> -->
	
</head>
<body>
	<div class="all_content news_layout container">
		<div class="row" id="home">
          <div class="main_content container">
					
			<div class="posts_sidebar b1tv-outer layout_right_sidebar clearfix"><!-- Start posts sidebar -->
				<div class="inner_single col-md-12 left-area"> <!-- Start inner single -->
					<div class="row">	
						<div class="col-md-12 col-sm-12 kanal-title-outer">
							<div class="col-md-12 header-streaming  pl0">
								<a href="http://www.beritasatu.com/">
				                	<img src="http://www.beritasatu.com/assets/img/news/news_logo.png" class="hz_appear" style="max-width:200px;margin-top:3px;" alt="BeritaSatu Logo">
				                </a>
								
								<div class="streaming-title nsbox-kanal-label text-uppercase">
									<img src="<?=base_url('assets/microsite/vid/streaming.png') ?>" />
									<span>Live Streaming</span>
								</div>
								<div class="bordering"></div>
							</div>
						</div>
						<div class="col-md-12 col-sm-12 landing-frame-outer">
							<iframe name="video_target" id="video_target" src="<?=base_url('view_jwplayer/?channel=news') ?>" 
								width="100%" height="600" frameborder="0" allow="autoplay" scrolling="no" allowfullscreen="true"></iframe>
						</div>
						<div class="col-md-12 col-sm-12 channel-btn-outer mb20">
							<a href="<?=base_url('view_jwplayer/?channel=news') ?>" onclick="return loadIframe('video_target', this.href);" class="btn btn-channel ">
								<i class="fa fa-play-circle" aria-hidden="true"></i> News
							</a>
							<a href="<?=base_url('view_jwplayer/?channel=world') ?>" onclick="return loadIframe('video_target', this.href);" class="btn btn-channel ">
								<i class="fa fa-play-circle" aria-hidden="true"></i> World
							</a>
							<a href="<?=base_url('view_jwplayer/?channel=english') ?>" onclick="return loadIframe('video_target', this.href);" class="btn btn-channel ">
								<i class="fa fa-play-circle" aria-hidden="true"></i> English
							</a>
						</div>
					</div>	
				</div>
			</div>
		</div>


		<a href="http://www.beritasatu.com/" class="fix-home z-i9"></a>
		<div id="footer" class="footer container-fulid">
			<div class="row mrl0">
				<footer class="main_footer">
					<div class="col-md-12">
						<div class="row mr0">
							<div class="col-md-12 text-center">
								<div class="row">
							   		<a href="http://brt.st/ios" target="_blank">
							   			<img class="hz_appear w100p" alt="ios" src="<?=base_url('assets/microsite/vid/app-download-buttons_ios.png') ?>">
							   		</a>
							   		<a href="http://brt.st/android" target="_blank">
							   		<img class="hz_appear w100p" alt="android" src="<?=base_url('assets/microsite/vid/app-download-buttons_android.png') ?>" >
							   		</a><br />
							   		<p class="footer-copy">Copyright @ 2018 BeritaSatu <br />Allright Reserved</p>
						   		</div>
							</div>
						</div>
					</div>
				</footer>
			</div>	
		</div> 
	</div>
</div>
	<script type="text/javascript">
		$(document).ready(function(){
		    $("#rtaFrame").remove();
		    $("#floating-ads-div").remove();	
		});
	</script>
	<script type="text/javascript">
		function loadIframe(iframeName, url) {
    			var $iframe = $('#' + iframeName);
    			if ( $iframe.length ) {
        			$iframe.attr('src',url);   
        			return false;
    			}
    			return true;
		}
	</script>
</body>
</html>
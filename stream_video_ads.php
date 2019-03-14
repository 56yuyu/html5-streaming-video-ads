<?php $link_channel = ($get_channel==""||$get_channel==null)?"'99'":"'".$get_channel."'"; ?>

<!DOCTYPE html>
<html lang="id">
<head>
	<title>Streaming</title>
	<style>
		html, body {
            overflow: hidden;
        }
        
        body {
            margin: 0;
            padding: 0;
        }
        
		.button {
			position: absolute;
			right: 0px;
			bottom: 80px;
  			background-color: #4CAF50; /* Green */
  			border: none;
  			color: white;
  			padding: 10px 15px;
  			text-align: center;
  			text-decoration: none;
  			display: inline-block;
  			font-size: 16px;
		}

		#btnSkipVid{
			margin: 40px 20px;
		}
		
		.breakingStyle{
			width: calc(100% - 200px); 
			background-color: #be291f; 
			padding: 10px; 
			color: #fff;
    			text-transform: uppercase; 
    			font-family: Monaco,Arial,sans-serif; 
    			font-size: 24px;
		}
		
		.livestreamStyle{
			margin: 7px 5px; 
			text-transform: uppercase; 
			font-family: Monaco,Arial,sans-serif; 
			font-size: 24px;
			bottom: 10px;
		}
		
		@media only screen and (min-width: 768px) {
	

		}

		@media only screen and (max-width: 767px) {
			.breakingStyle{
				width: calc(100% - 200px); 
				background-color: #be291f; 
				padding: 15px 10px; 
				color: #fff;
    				text-transform: uppercase; 
    				font-family: Monaco,Arial,sans-serif; 
    				font-size: 14px;
			}
			
			.livestreamStyle{
				margin: 7px 5px; 
				text-transform: uppercase; 
				font-family: Monaco,Arial,sans-serif; 
				font-size: 12px;
				bottom: 10px;
			}
		}
		
		video::-webkit-media-controls-panel{background:transparent;}
		video::-webkit-media-controls-current-time-display{color:#fff}
		video::-webkit-media-controls-time-remaining-display{color:#fff}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript">
			var m3u8source = "http://edge.linknetott.swiftserve.com/live/BsNew/amlst:beritasatunewsbs/playlist.m3u8";
			
			if(<?=$link_channel?>=='news'){
    				m3u8source = "http://edge.linknetott.swiftserve.com/live/BsNew/amlst:beritasatunewsbs/playlist.m3u8";
    			} else if(<?=$link_channel?>=='world'){
    				m3u8source = "http://edge.linknetott.swiftserve.com/live/BsNew/amlst:bsworld/playlist.m3u8";
    			} else if(<?=$link_channel?>=='english'){
    				m3u8source = "http://edge.linknetott.swiftserve.com/live/BsNew/amlst:bsenglish/playlist.m3u8";	
    			} else {
    				m3u8source = "http://edge.linknetott.swiftserve.com/live/BsNew/amlst:beritasatunewsbs/playlist.m3u8";
    			}
    			
    		    var poster = "<?=base_url('assets/img/capres/STOPER-BANNER-DEBAT-PILPRES.png') ?>";
            var dimentions = function() {
                var ori_width   = 768,
                    ori_height  = 425,
                    new_width   = $('#screen').width();
                
                $('#screen').css({height:(ori_height/ori_width*new_width)+'px'});
                
                $('#screen:before').css({width:'100px'});
                $('#wraper').css({width:$('#screen').outerWidth()+'px'});
            },
            embedMobileVideos= function() {
                var embeded = '<video id="streamplayer" controls src="'+m3u8source+'" width="100%" height="100%"><div style="font-size:16px;text-align:center;" poster="'+poster+'"><a href="'+m3u8source+'" style="color:#666;"><b>KLIK DISINI</b></a><br/></div></video>';
                return embeded;
            }
            $(document).ready(function(){
                $(window).resize(function(){
                    dimentions();
                })
            })
            
            // onclick skiip video ads
	    		$(document).ready(function() {
				$("#btnSkipVid").click(function(){
    					video.pause();
    					$("#contentVid").hide();
    				
    					$("#contentStreaming").show();
    					jwplayer().play();
  				
  					//kirim log
  					// sendLogAds(sesVal, ipClient);
  				
    					//setting ads
  					setTimerAds();
				});
			});
    </script>
</head>

<body style="background-color: #ddd;">
	
    <div id="contentVid">
        <video id="vidAdds" width="100%" height="100%" autobuffer poster="https://www.beritasatu.com/assets/images/beritasatu-clip-big.jpg" controls controlsList="nodownload"
        		   src="<?=base_url('assets/microsite/vid/nissan.MP4') ?>" onended="vidSelesai()"> 
            <source src="<?=base_url('assets/microsite/vid/nissan.MP4') ?>" type="video/mp4">
		</video>
		<button id="btnSkipVid" class="button">Lewati Iklan</button>
    </div>
    
    <div id="contentStreaming">
		<div id="streaming"></div>
    	</div>
	<div id="tme">rrr</div>

	<script type="text/javascript" src="https://img.beritasatu.com/assets/jwplayer/jwplayer.js"></script>
    <script>jwplayer.key="3oaOLQQlum3sgFU37Eueo5Vmy535foOP1VpW3paxmVQ=";</script>

    <script type="text/javascript">
    
		var sesBtn = sessionStorage.getItem('key77');
  		sessionStorage.setItem('key77', 1);
	
        if ((navigator.userAgent.indexOf('iPad') != -1)  || (navigator.userAgent.indexOf('iPhone') != -1) )  {
          document.write(embedMobileVideos());
        }else if((navigator.userAgent.indexOf('BlackBerry') != -1)  || (navigator.userAgent.indexOf('BlackBerrye') != -1) )  {
          document.write(embedMobileVideos());
        }else if(navigator.userAgent.indexOf('Android') > -1){
          
          jwplayer('streaming').setup({
                autostart: false,
                image: poster,
                sources: [
                    { file: m3u8source},
                ],
                primary: "html5",
                width: "100%",
                height: "100%",
                aspectratio: "16:9",
                stretching:"exactfit",
                fallback: true,
                ga: {
                    idstring: "title",
                    trackingobject: "pageTracker",
                    label: "mediaid"
                }
            });
			
        }else if(navigator.userAgent.indexOf('Windows Phone') > -1){
          document.write(embedMobileVideos());
        }else {
            jwplayer('streaming').setup({
                autostart: false,
                image: poster,
                sources: [
                    { file: m3u8source},
                ],
                primary: "html5",
                width: "100%",
                height: "100%",
                aspectratio: "16:9",
                stretching:"exactfit",
                fallback: true,
                ga: {
                    idstring: "title",
                    trackingobject: "pageTracker",
                    label: "mediaid"
                }
            });
        }
        dimentions();
        
        // event start ads
        jwplayer('streaming').on('play', function(e) {
        		
        		// ads awal
        		if(sesBtn==1){
        			startAds();
        		}
	
        		function startAds() {
    				$("#contentStreaming").hide();
    				jwplayer().pause();
    				
     			$("#contentVid").show();
     			video.currentTime = 0;
     			video.play();
  			};
  			
		});
		
		jwplayer('streaming').on('all', function(e) {
        		
        		// document.getElementById("tme").value = "Woooi oosaanng";
//         		
        		// if("<?=date("h:i:s");?>" == "03:08:10"){
        			// alert('hello');
        			// if(sesBtn==1){
        				// // setTimeout(startAds, 500);
        				// startAds();
        			// }
        		// }
//         		
        		// function startAds() {
    				// $("#contentStreaming").hide();
    				// jwplayer().pause();
//     				
     			// $("#contentVid").show();
     			// video.currentTime = 0;
     			// video.play();
  			// };
  			
		});
		
		jwplayer('streaming').on('pause', function(e) {
        		sesBtn+=1;
		});
        
        $(document).ready(function(){
	        document.getElementById('streamplayer').setAttribute('poster', poster);
	    });
        
    </script>

	<script type="text/javascript">
	var video = document.getElementById("vidAdds");
	var videoLayout = document.getElementById("contentVid");
	var sesVal = sessionStorage.getItem('key99');
	var ipClient = "<?=get_client_ip();?>";
			
	// hide video ads 
	$("#contentVid").hide();  
	
	// init counter
  	sessionStorage.setItem('key99', 1);
		
	//event video ads selesai
	function vidSelesai(){
  		video.pause();
  		$("#contentVid").hide();
  		
  		$("#contentStreaming").show();
  		jwplayer().play();
  		
  		//kirim log
  		// sendLogAds(sesVal, ipClient);
  		
  		//setting ads
  		setTimerAds();
  	}
  			
  	function setTimerAds(){
  		if(sesVal<=2){
    			var limiter = 10000; //video kedua
  			if(sesVal==2){
  				limiter = 10000*2; //video ketiga
  			}
  			
  			setTimeout(showAds, limiter);
  			sesVal = parseInt(sesVal)+1;
  		}
  	}
  			
  	function showAds() {
    		$("#contentStreaming").hide();
    		jwplayer().pause();
    				
     	$("#contentVid").show();
     	video.currentTime = 0;
     	video.play();
  	};
  			
  	function sendLogAds(jml, ipc){
  		$.post("<?=base_url('onpost-logads/') ?>", { 
			count: jml,
			ip_client: ipc
		}, 
		function(response, status){ 
			//alert("*----Received Data----*nnResponse : " + response+"nnStatus : " +status);
		});
  	}
  			
  	function skipTime(time) {
     	video.play();
     	video.pause();
     	video.currentTime = time;
     	video.play();
  	};
  	
	</script>

<?php	
	// Function to get the client IP address
	function get_client_ip() {
    		$ipaddress = '';
    		if (isset($_SERVER['HTTP_CLIENT_IP']))
        		$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    		else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        		$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    		else if(isset($_SERVER['HTTP_X_FORWARDED']))
        		$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    		else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        		$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    		else if(isset($_SERVER['HTTP_FORWARDED']))
        		$ipaddress = $_SERVER['HTTP_FORWARDED'];
    		else if(isset($_SERVER['REMOTE_ADDR']))
        		$ipaddress = $_SERVER['REMOTE_ADDR'];
    		else
        		$ipaddress = 'UNKNOWN';
    		return $ipaddress;
	}
	
	//function www.test/onpost-logads/
	/*
	if(isset($_POST["count"])&&isset($_POST["ip_client"])){
		$log_count = $_POST["count"]; 
		$log_ipclient = $_POST["ip_client"]; 
					
		$myfile = fopen(getcwd().'/assets/logtxt/log_video_ads_2019.txt', "a+") or die("Unable to open file!");
		$txtValue = "\n> user@".$log_ipclient." melihat iklan video ke ".$log_count." kali ".date("Y-m-d h:i:s");
		fwrite($myfile, $txtValue);
		fclose($myfile);
	} else {
		echo "Oppps, sssstttt";
	}
	*/ 
?>

</body>
</html>
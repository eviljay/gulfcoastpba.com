<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
<head>

    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    
    <meta name="description" content="Check this page for the latest news and current events related to the Gulf Coast PBA chapter." />
    
	<meta name="author" content="Battle Plan Web Design" />
	<meta name="copyright" content="Copyright 2013 Battle Plan Web Design" />
	<meta name="robots" content="index,follow" />
	<meta name="revisit-after" content="31 days" />
	
	<link rel="canonical" href="http://gulfcoastpba.com/events.php">

    <title>Gulf Coast Police Benevolent Association | News &amp; Events</title>

    <script src="http://battleplanmedia.com/js/jquery.js" type="text/javascript"></script>
    <script src="http://battleplanmedia.com/js/jquery-easing.js" type="text/javascript"></script>

    <script src="js/script-menu.js" type="text/javascript"></script>
    <script src="js/script-page.js" type="text/javascript"></script>
    <script src="js/jquery-nivo-slider.js" type="text/javascript"></script>

    <link rel="stylesheet" href="styles-nivo-slider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="styles-menu.css" type="text/css"/>
    <link rel="stylesheet" href="styles-page.css" type="text/css" />
    
	<!--<link href='http://fonts.googleapis.com/css?family=Chivo' rel='stylesheet' type='text/css' />-->

    <link rel="SHORTCUT ICON" href="favicon.ico" />   
    
	<script type="text/javascript">
	
		$(document).ready(function() {  
		
		//control the news boxes opening/closing
			var infoSpeed=1000;
			var infoTransIn="easeOutExpo";
			var startH = 80;
			
			$(".newsBtn").click(function() {
				var totalH = $(this).height();
				if (totalH == startH) {
					var newsBoxH = $(this).find(".newsBox").height();
					var leftColH = $("#leftCol").height();
					var newNewsBoxH = newsBoxH+startH;
					var newleftColH = leftColH+newsBoxH;
					$(this).animate({ height:newNewsBoxH+"px" }, infoSpeed, infoTransIn);
					$("#leftCol").animate({ height:newleftColH+"px" }, infoSpeed, infoTransIn);
				} else {
					var newsBoxH = $(this).find(".newsBox").height();
					var newleftColH = $("#leftCol").height()-newsBoxH;
					$(this).animate({ height:startH+"px" }, infoSpeed, infoTransIn);
					$("#leftCol").animate({ height:newleftColH+"px" }, infoSpeed, infoTransIn);
				}
			});
		  		
		});	
		
	</script>
    
</head>

<body>

	<!--<div id="googleText">
	</div>-->

<!--Facebook Code .... don't forget to add the xmlns namespace to the top-->
    <div id="fb-root"></div>
	<script type="text/javascript">
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
			fjs.parentNode.insertBefore(js, fjs);
		}
		(document, 'script', 'facebook-jssdk'));
  	</script>


<div id="site">    

		<div id="headerCase">
        <div id="headerBox"> 
			<a href="index.php"><div id="logo"></div></a>
			<div id="logoText1">Gulf Coast</div>
		</div>
	</div>
	<div id="logoCase">
		<div id="logoBox">
			<div id="logoText2">Police Benevolent Association</div>
		</div>
	</div>       
	<div id="topPicCase">
		<div id="topPicBox">
			<!--php include("loadBannerPic.php"); --> 
			<div id="picSlider">
						
				<div id="slider" class="nivoSlider">					
				<img src="images/photos/header2.jpg" data-thumb="images/photos/header2.jpg" /><img src="images/photos/header1.jpg" data-thumb="images/photos/header1.jpg" /><img src="images/photos/header3.jpg" data-thumb="images/photos/header3.jpg" /><img src="images/photos/header5.jpg" data-thumb="images/photos/header5.jpg" /><img src="images/photos/header4.jpg" data-thumb="images/photos/header4.jpg" />						
				</div>
			</div>
				
			<div class="clearFloats"></div>					
			
		</div>
	</div>       
 

    <div id="bodyCase">
		<div id="bodyBox">
			<div id="leftCol">
								<div id="menuBox">
					<div id="menu">
						<ul class="menu">
							<li><a href="index.php"><span>Home</span></a></li>
							<li><a href="about-us.php" class="parent"><span>About The PBA</span></a>
								<!--<div><ul>
									<li><a href="about-us.php"><span>About The PBA</span></a></li>
									<li><a href="officers.php"><span>Officers</span></a></li>
									<li><a href="bylaws.php"><span>Bylaws</span></a></li>
								</ul></div>-->
							</li>
							<!--<li><a href="#" class="parent"><span>Membership</span></a>
								<div><ul>
									<li><a href="#"><span>Legal</span></a></li>
									<li><a href="#"><span>Benefits</span></a></li>
									<li><a href="#"><span>Services</span></a></li>
									<li><a href="#"><span>Application</span></a></li>
								</ul></div>
							</li>-->
							<li><a href="leadership.php"><span>Leadership</span></a></li>
							<li><a href="bylaws.php"><span>Bylaws</span></a></li>
							<li><a href="cba.php"><span>CBA Downloads</span></a></li>
							<li><a href="events.php"><span>News &amp; Events</span></a></li>
							<li><a href="contact-us.php"><span>Contact Us</span></a></li>
							<li><a href="http://www.flpba.org/join/" target="_new"><span>Join Us</span></a></li>
							<br/>
						</ul>                     
					</div>    
				</div> 
				
				<!--
				<div class="sidebarBox">
					<span class="sidebarHead">UPCOMING EVENTS</span><br/>
					<br/>
					<span class="sidebarSubhead">General Membership Meeting</span><br/>
					<span class="sidebarText2">Friday, July 19 in Fort Myers</span><br/>
					<span class="sidebarText2"><a href="events.php" class="sidebarLink">Click for details</a></span><br/>
					<br/>
				</div>
				-->
				<br/><br/><br/>

			</div>
			<div id="rightCol">
		
				<h2 class="headline">News &amp; Events</h2>
				
				

				

				<h2>Saving the Fort Myers Police Department</h2>
				<h4>Campaign 2013</h4>
				
				<div class="photoBox">
					<img src="images/photos/events/2013-11-01-j.jpg" width="275" alt="Campaign to save Fort Myers Police Department, 2013" class="rightPic" style="margin-top:0px;"/>
				</div>
				<div class="photoBox">
					<img src="images/photos/events/2013-11-01-c.jpg" width="275" alt="Campaign to save Fort Myers Police Department, 2013" class="rightPic" style="margin-top:0px;"/>
				</div>
				<div class="photoBox">
					<img src="images/photos/events/2013-11-01-f.jpg" width="275" alt="Campaign to save Fort Myers Police Department, 2013" class="rightPic" style="margin-top:0px;"/>
				</div>
				<div class="photoBox">
					<img src="images/photos/events/2013-11-01-d.jpg" width="275" alt="Campaign to save Fort Myers Police Department, 2013" class="rightPic" style="margin-top:0px;"/>
				</div>
				<div class="photoBox">
					<img src="images/photos/events/2013-11-01-g.jpg" width="275" alt="Campaign to save Fort Myers Police Department, 2013" class="rightPic" style="margin-top:0px;"/>
				</div>
				<div class="photoBox">
					<img src="images/photos/events/2013-11-01-a.jpg" width="275" alt="Campaign to save Fort Myers Police Department, 2013" class="rightPic" style="margin-top:0px;"/>
				</div>
				<div class="photoBox">
					<img src="images/photos/events/2013-11-01-e.jpg" width="275" alt="Campaign to save Fort Myers Police Department, 2013" class="rightPic" style="margin-top:0px;"/>
				</div>
				<div class="photoBox">
					<img src="images/photos/events/2013-11-01-h.jpg" width="275" alt="Campaign to save Fort Myers Police Department, 2013" class="rightPic" style="margin-top:0px;"/>
				</div>
				<div class="photoBox">
					<img src="images/photos/events/2013-11-01-i.jpg" width="275" alt="Campaign to save Fort Myers Police Department, 2013" class="rightPic" style="margin-top:0px;"/>
				</div>
				<div class="photoBox">
					<img src="images/photos/events/2013-11-01-b.jpg" width="275" alt="Campaign to save Fort Myers Police Department, 2013" class="rightPic" style="margin-top:0px;"/>
				</div>

<div class="clearFloats"></div>
<br/><br/>

				<h2>Fort Myers PD Gets An Overwhelming Win</h2>
				<h4>83% Voted To Save The Department</h4>
				
				<p>Fort Myers police officers let out a sigh of relief Tuesday evening when they learned city residents voted against the disbandment of the city's 127-year-old police force.</p>

				<p>Amendment 1 failed by a landslide, with 83 percent of those voting saying no. The victory was not a surprise for police Chief Doug Baker. He said he believed citizens informed themselves of the amendment's potential repercussions and voted it down.</p>

				<p>Click <a href="http://www.news-press.com/article/20131106/NEWS0110/311060039/Fort-Myers-Amendments-FMPD-gets-an-overwhelming-win?nclick_check=1" class="bodyLink" target="_new">HERE</a> for more details.</p>
				
				 <br/><br/>

<!-- 
				<h2>Public Hearing &amp; Protest</h2>
				<h4>Monday, June 24, 2013</h4>
				
				<ul>
					<li class="bodyList">Officers took voluntary pay cut in 2010 of 5.25%</li>
					<li class="bodyList">City offers a pay raise that really is a pay cut for 60% of the Officers</li>
					<li class="bodyList">2011 - Senate Bill 1128 - Pension Reform - Stops Pension Spiking</li>
					<li class="bodyList">2012 - Officers tentatively agree to additional pension reform saving the city one million dollars the first year</li>
					<li class="bodyList">Pension reform saves city for years beyond our contract</li>
				</ul>

				<div class="photoBox">
					<img src="images/photos/events/2013-06-26-protest1.jpg" width="275" alt="June 24th protest at City Hall" class="rightPic" style="margin-top:0px;"/>
					Protest at City Hall, June 2013<br/>
				</div>
				<div class="photoBox">
					<img src="images/photos/events/2013-06-26-protest2.jpg" width="275" alt="June 24th protest at City Hall" class="rightPic" style="margin-top:0px;"/>
					Protest at City Hall, June 2013<br/>
				</div>
				<div class="photoBox">
					<img src="images/photos/events/2013-06-26-protest3.jpg" width="275" alt="June 24th protest at City Hall" class="rightPic" style="margin-top:0px;"/>
					Protest at City Hall, June 2013<br/>
				</div>
				<div class="photoBox">
					<img src="images/photos/events/2013-06-26-protest4.jpg" width="275" alt="June 24th protest at City Hall" class="rightPic" style="margin-top:0px;"/>
					Protest at City Hall, June 2013<br/>
				</div>
-->
				

				
			</div>		
			<div class="clearFloats"></div>
		</div>
	</div>
				   
		<div class="clearFloats"></div>
	<div id="footerCase">
		<div id="footerBox">       	          
			<div id="copyrightBox"> 
							   
				<script type="text/javascript">
					var currentTime = new Date()
					var year = currentTime.getFullYear()
					if (year > 2013) {
						document.write("© 2013-" + year + " Gulf Coast Police Benevolent Association&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;All Rights Reserved")
					} else {
						document.write("© " + year + " Gulf Coast Police Benevolent Association&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;All Rights Reserved")
					}
				</script>
				
				<br/>
				
				<span class="copyrightDisclaimer">This site and the information contained herein is intended for information purposes only and should</span><br/> 
				<span class="copyrightDisclaimer">not be construed as legal advice. Seek competent legal counsel for advice on any legal matter.</span><br/>
				
				<br/>
				
				Website developed &amp; maintained by <a href = "http://battleplanwebdesign.com" class="copyrightLink" target = "_new" >BATTLE PLAN WEB DESIGN</a>
				
			</div>  
		</div> 
	</div>        
  

</div>

</body>
</html>
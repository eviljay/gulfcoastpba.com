	//Google Analytics code
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
		ga('create', 'UA-17547288-29', 'gulfcoastpba.com');
		ga('send', 'pageview');


		$(document).ready(function() {
			
		//CODE FOR THE HOME PAGE GRAPHIC
			$('#slider').nivoSlider({
				effect: 'sliceUpDownLeft', // Specify: sliceDown, sliceDownLeft, sliceUp, sliceUpLeft, sliceUpDown, sliceUpDownLeft, fold, fade, random, slideInRight, slideInLeft, boxRandom, boxRain, boxRainReverse, boxRainGrow, boxRainGrowReverse
				slices: 12, // For slice animations
				boxCols: 8, // For box animations
				boxRows: 4, // For box animations
				animSpeed: 1000, // Slide transition speed
				pauseTime: 4000, // How long each slide will show
				startSlide: 0, // Set starting Slide (0 index)
				directionNav: true, // Next & Prev navigation
				controlNav: true, // 1,2,3... navigation
				controlNavThumbs: false, // Use thumbnails for Control Nav
				pauseOnHover: true, // Stop animation while hovering
				manualAdvance: false, // Force manual transitions
				prevText: '', // Prev directionNav text
				nextText: '', // Next directionNav text
				randomStart: false, // Start on a random slide
				beforeChange: function(){}, // Triggers before a slide transition
				afterChange: function(){}, // Triggers after a slide transition
				slideshowEnd: function(){}, // Triggers after all slides have been shown
				lastSlide: function(){}, // Triggers when last slide is shown
				afterLoad: function(){} // Triggers when slider has loaded
			});
    		

		//Even up the two colums
			function showHeight(l,r) {
				r=r+415;
				if (l < r) {
					var amt=r+50;
					$("#leftCol").animate({ height:amt }, 0);
				}
			}
			
			function getHeight() {
				showHeight($("#leftCol").height(),$("#rightCol").height()); 
			}

			//$("#site").each(function () { 
				 //getHeight(); 

						
			setTimeout(getHeight, 100);
			setTimeout(getHeight, 1000);

		});	
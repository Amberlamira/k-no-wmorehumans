<?php function print_header() { ?>

<!DOCTYPE HTML>
<html>
<head>
  <title>k(no)w more humans</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href='http://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/style.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="js/mobile.js"></script>
	<script src="js/menu.js"></script>
</head>
<body>
  <div id="container">
  	<!---start-wrap---->
		<div class="wrap">
			<!---start-sidebar---->
			<div id="w3-universal-nav">
    	<ul id="header">
    		<div class="logo">
    		<a href="index.html"><h1 class="growbigger">k(no)w more humans</h1></a>
    		</div>
    		<div class="top-socialicons">
    			<ul>
    				<li><a class="icon1" href="#"></a></li>
    				<li><a class="icon2" href="#"></a></li>
            <li><a class="icon3" href="http://www.instagram.com"></a></li>
    			</ul>
    		</div>
    		<div class="clear"> </div>
    	</ul>
    	<ul id="w3-menu-links" style="display: none;">
    	</ul>
    </div>
</div>
<!-- The menu -->
  <nav class="clearfix">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="knowmore.php">k(no)w more</a></li>
					<li><a href="whaddyak(no)w.php">whaddya k(no)w</a></li>
					<li><a href="contact.php">Contact</a></li>
					<div class="clear"> </div>
				</ul>
		<a href="#" id="pull"></a></a>
	</nav>
	<div class="clear"> </div>
			<div class="left-sidebar">
					</div>
    <div id="main" role="main">

<?php } ?>

<?php function print_foot() { ?>
  </div>
   </div>
    <footer>

    </footer>
  </div>
    
  <!-- include jQuery -->
  <script src="js/jquery.min.js"></script>

  <!-- Include the imagesLoaded plug-in -->
  <script src="js/jquery.imagesloaded.js"></script>

  <!-- Include the plug-in -->
  <script src="js/jquery.wookmark.js"></script>

  <!-- Once the page is loaded, initalize the plug-in. -->
  <script type="text/javascript">
    (function ($){
      $('#tiles').imagesLoaded(function() {
        var handler = null;

        // Prepare layout options.
        var options = {
          autoResize: true, // This will auto-update the layout when the browser window is resized.
          container: $('#main'), // Optional, used for some extra CSS styling
          offset: 20, // Optional, the distance between grid items
          itemWidth: 275 // Optional, the width of a grid item
        };

        /**
         * When scrolled all the way to the bottom, add more tiles.
         */
        function onScroll(event) {
          // Check if we're within 100 pixels of the bottom edge of the broser window.
          var winHeight = window.innerHeight ? window.innerHeight : $(window).height(); // iphone fix
          var closeToBottom = ($(window).scrollTop() + winHeight > $(document).height() - 100);

          if (closeToBottom) {
            // Get the first then items from the grid, clone them, and add them to the bottom of the grid.
            var items = $('#tiles li'),
                firstTen = items.slice(0, 10);
            $('#tiles').append(firstTen.clone());

            // Destroy the old handler
            if (handler.wookmarkInstance) {
              handler.wookmarkInstance.clear();
            }

            // Create a new layout handler.
            handler = $('#tiles li');
            handler.wookmark(options);
          }
        };

        // Capture scroll event.
        $(window).bind('scroll', onScroll);

        // Call the layout function.
        handler = $('#tiles li');
        handler.wookmark(options);
      });
    })(jQuery);
  </script>
</div>
</body>
</html>

<?php } ?>


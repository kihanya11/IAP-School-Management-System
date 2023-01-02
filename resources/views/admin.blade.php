<!Doctype html>
<html class="no-js" lang="">
    <head>


        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="fonts/stylesheet.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <header class="container header_area fix" >
			<div id="sticker">
				<div class="head">
					
					<div class="uniname fix">
						<h2>Middleview University</h2>
						<h2>Welcome, {{Session('username')}}</h2>
					</div>
				</div>
				<div class="menu fix">
					<div class="dateshow fix"><p><?php echo "Date : ".date("d M Y"); ?></p></div>
				<!--	<ul>
						<li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
						
						<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> </a></li>
					</ul>-->
				
				</div>
			</div>
		</header>
		<div class="maincontent container fix">
			<div id="stickerside">
				<div class="sidebar fix" >
						<ul>
							<li><span class="spcl"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Administrator</span></li>
								<ul>
									<li><a href="list"><i class="fa fa-sign-in" aria-hidden="true"></i> View Students </a></li>
									<li><a href="\reg"><i class="fa fa-user-plus" aria-hidden="true"></i> Register student to a course</a></li>
									
									<li><a href="\register"><i class="fa fa-outdent" aria-hidden="true"></i> Add student</a></li>
									<li><a href="logout"><i class="fa fa-outdent" aria-hidden="true"></i> Log out</a></li>
								</ul>
							
						
						</ul>
					
					</div>
				</div>
				<div class="content fix">
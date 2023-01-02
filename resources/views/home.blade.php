@extends('layouts.app')

@section('content')

                <!--<div class="card-header">{{ __('Dashboard') }} </div>-->
    <head>


        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="fonts/stylesheet.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
                <?php
	$pageTitle = "Middleview";
?>
     <header class="container header_area fix" >
			<div id="sticker">
				<div class="head">
					
					<div class="uniname fix">
						<h2>Middleview University Management System</h2>
					</div>
				</div>
				<div class="menu fix">
					<div class="dateshow fix"><p><?php echo "Date : ".date("d M Y"); ?></p></div>
				<!--	<ul>
						<li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
						
						<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> User</a></li>
					</ul>
				-->
				</div>
			</div>
		</header>
		<div class="maincontent container fix">
			<div id="stickerside">
				<div class="sidebar fix" >
						<ul>
							<li><span class="spcl"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Student Area</span></li>
								<ul>
									<li><a href="list"><i class="fa fa-sign-in" aria-hidden="true"></i> View Enrolled Programs </a></li>
									<li><a href="\reg"><i class="fa fa-user-plus" aria-hidden="true"></i> Register for a program</a></li>
									<li><a href="student_profile"><i class="fa fa-user" aria-hidden="true"></i> Student's Table</a></li>
									
								</ul>
							
						
						</ul>
					
					</div>
				</div>
				<div class="content fix">



					
<?php include "PHP/footer.php"; ?>			

--> <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!DOCTYPE html>
<html>
    <head>
        <title>Login Form</title>

        <!-- Meta tag Keywords -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8" />
        <meta name="keywords" content="Triple Forms Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
        <script>
            addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        <!-- Meta tag Keywords -->
        <!-- css files -->
        <link rel="stylesheet" href="loginD/css/style.css" type="text/css" media="all" />
        <!-- Style-CSS -->
        <link href="loginD/css/font-awesome.min.css" rel="stylesheet">
        <!-- Font-Awesome-Icons-CSS -->
        <!-- //css files -->

        <!-- web-fonts -->
        <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext"
         rel="stylesheet">
        <!-- //web-fonts -->
    </head>
<body>
    <div class="main-bg">
		<!-- title -->
		<h1>Login Forms</h1>
		<!-- //title -->
		<div class="sub-main-w3">
			<div class="image-style">

			</div>
			<!-- vertical tabs -->
			<div class="vertical-tab">
				<div id="section1" class="section-w3ls">
					<input type="radio" name="sections" id="option1" checked>
					<label for="option1" class="icon-left-w3pvt"><span class="fa fa-user-circle" aria-hidden="true"></span>Login</label>
					<article href="/login">
						<form method="post">
                            @csrf
							<h3 class="legend">Login Here</h3>
							<div class="input">
								{{-- <span class="fa fa-envelope-o" aria-hidden="true"></span> --}}
                                <span class="fa fa-user-o" aria-hidden="true"></span>
								<input type="name" placeholder="name" name="sa_name" />
							</div>
							<div class="input">
								<span class="fa fa-key" aria-hidden="true"></span>
								<input type="password" placeholder="Password" name="sa_password" />
							</div>
							<button type="submit" class="btn submit">Login</button>
							<a class="bottom-text-w3ls"></a>
                            <h2 style="color: red">{{session('msg')}}</h2>
						</form>
					</article>
				</div>
                <div id="section2" class="section-w3ls">
					<input type="radio" name="sections" id="option2">
					<label for="option2" class="icon-left-w3pvt"><span class="fa fa-pencil-square" aria-hidden="true"></span>
                        <a href="/registration">Register</a>
                        </label>

				</div>

                <div id="section3" class="section-w3ls">
                    <input type="radio" name="sections" id="option3">
                    <label for="option3" class="icon-left-w3pvt"><span class="fa fa-lock" aria-hidden="true"></span>Forgot Password?</label>
                </div>

			</div>


			<!-- //vertical tabs -->
			<div class="clear"></div>
		</div>
		<!-- copyright -->
		<div class="copyright">
			<h2>&copy; 2019 Triple Forms. All rights reserved | Design by
				<a href="http://w3layouts.com" target="_blank">W3layouts</a>
			</h2>
		</div>
		<!-- //copyright -->
	</div>

   <!-- session global helper. jekno jayga theke access kora jabe  -->

</body>
</html>

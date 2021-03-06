<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"D:\IDE\xampp\htdocs\BookHouse\public/../application/index\view\index\login.html";i:1515849646;}*/ ?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>登录</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="<?php echo $DIR_CSS; ?>/login_main.css" />
		<noscript><link rel="stylesheet" href="<?php echo $DIR_CSS; ?>/noscript.css" /></noscript>
	</head>
	<body class="is-loading">


			<div id="wrapper">


					<section id="main">
						<header>
							<span class="avatar"><img src="<?php echo $DIR_IMG; ?>/avatar.jpg" alt="" /></span>
							<h1>Login</h1>
						</header>
						<hr />
						<form method="post" action="admin" id="loginForm">
							<div class="field">
								<input type="text" name="username" id="name" placeholder="UserName (not case sensitive)" />
							</div>
							<div class="field">
								<input type="password" name="password" id="password" placeholder="Password" />
							</div>

							<ul class="actions">
								<li><a href="#" class="button" onclick="document:loginForm.submit();">Login</a></li>
							</ul>
						</form>
						<hr />
						
						<footer>
							<ul class="icons">
								<li><a href="https://github.com/juzicheng" class="fa-github">Github</a></li>
								<li><a href="https://user.qzone.qq.com/793228635" class="fa-qq">QQ</a></li>
								<li><a href="https://dribbble.com/" class="fa-dribbble">dribbble</a></li>
							</ul>
						</footer>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="copyright">
							<li>&copy; DZQ</li><li><a href="home">Home</a></li>
						</ul>
					</footer>
			</div>
			<script>
				if ('addEventListener' in window) {
					window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-loading\b/, ''); });
				}
			</script>

	</body>
</html>
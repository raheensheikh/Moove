<?php include 'includes/header-links.php'; ?>
<section class="initial-sec">
	<div class="initial-row">
		<div class="leftCol">
			<a href="index.php">
                <img src="assets/images/logo.png" alt="">
			</a>
		</div>
		<div class="rightCol login xy-center p-3">
			<form class="loginForm">
				<h1 class="loginHeading">Get’s Started</h1>
				<p class="logindesc mb-5">Please Sign in to continue.</p>
                <div class="form-group loginField mb-2">
					<span class="login_input_label">
						<input type="email" placeholder="john.smith@example.com">
					</span>
					<span class="login_Icon"><img src="assets/images/mail.png" alt=""></span>
				</div>
				<div class="form-group loginField mb-2">
					<span class="login_input_label">
						<input type="password" placeholder="Password">
					</span>
					<span class="login_Icon"><img src="assets/images/lock.png" alt=""></span>
				</div>
				<div class="loginBtn">
					<a href="#" class="cta mb-4" data-bs-toggle="modal" data-bs-target="#account_Modal">Sign In</a>
				</div>
			</form>
		</div>
	</div>
</section>
<?php include 'includes/footer.php'; ?>
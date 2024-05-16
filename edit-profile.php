<?php include 'includes/header-links.php'; ?>
<?php include 'includes/header-mechanics.php'; ?>
<?php include 'includes/aside.php'; ?>


<!-- Page Section Start's Here -->
<section class="content-section edit_profile_wrapper">
    <div class="serviceRequest_sect1">
        <h5 class="title">
			<a href="#" class="prevBtn" onclick="goBack()"><img src="assets/images/arrow_circle_left.png" alt=""></a>
            <span>Edit Profile</span>
        </h5>
        <div class="row mt-5">
            <div class="col-12">
                <div class="new-service-section">
                <form class="loginForm createProfile">
				<div class="avatar-upload">
					<div class="avatar-edit">
						<input type="file" id="imageUpload" accept=".png, .jpg, .jpeg">
						<label for="imageUpload" class="xy-center">
							<img src="assets/images/camera.png" alt="img">
						</label>
					</div>
					<div class="avatar-preview">
						<div id="imagePreview" style="background-image: url('assets/images/user-img.png');">
						</div>
					</div>
				</div>
				<div class="row mt-3">
					<div class="col-lg-6 col-md-12 col-12">
						<div class="form-group loginField mb-2">
							<span class="login_input_label">
								<input type="text" placeholder="First Name">
							</span>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-12">
						<div class="form-group loginField mb-2">
							<span class="login_input_label">
								<input type="text" placeholder="Last Name">
							</span>
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-12">
						<div class="form-group loginField mb-2">
							<span class="login_input_label">
								<input type="email" placeholder="kevin@email.com">
							</span>
							<span class="login_Icon"><img src="assets/images/mail.png" alt=""></span>
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-12">
						<div class="form-group loginField mb-2">
							<span class="login_input_label">
								<input type="text" placeholder="+123-456-7890">
							</span>
							<span class="login_Icon"><img src="assets/images/call.png" alt=""></span>
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-12">
						<div class="form-group loginField mb-2">
							<span class="login_input_label">
								<input type="email" placeholder="Location">
							</span>
							<span class="login_Icon"><img src="assets/images/my_location.png" alt=""></span>
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-12">
						<div class="form-group loginField mb-2">
							<span class="login_input_label">
								<input type="email" placeholder="Address">
							</span>
							<span class="login_Icon"><img src="assets/images/location_on.png" alt=""></span>
						</div>
					</div>
                    <div class="col-12 col-lg-6 col-md-6">
                        <div class="form-group loginField mb-2">
                            <input type="time" class="form-control mt-2" id="exampleFormControlInput12" placeholder="00/00/2023">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6">
                        <div class="form-group loginField mb-2">
                            <input type="time" class="form-control mt-2" id="exampleFormControlInput13" placeholder="00:00">
                        </div>
                    </div>
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="form-group loginField mb-2">
                            <input type="date" class="form-control mt-2" id="exampleFormControlInput13" placeholder="00:00">
                        </div>
                    </div>

					<div class="col-lg-12 col-md-12 col-12">
						<div class="form-group loginField loginField_txtarea mb-2">
							<span class="login_input_label">
								<textarea name="" placeholder="Description"></textarea>
							</span>
						</div>
					</div>
					<div class="col-12">
						<div class="loginBtn">
							<a href="my-profile2.php" class="cta mb-4">Save Updates</a>
						</div>
					</div>
				</div>
			</form>
                  
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Page Section End's Here -->
<?php include 'includes/footer.php'; ?>
<?php include 'includes/header-links.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/aside.php'; ?>
<section class="content-section profile_sec">
    <div class="row bgWhite mt-5">
        <div class="col-12 col-md-10 col-lg-6 col-xl-6 mb-3">
            <h5 class="title mb-3">
                <a href="#" class="prevBtn" onclick="goBack()"><img src="assets/images/arrow_circle_left.png" alt=""></a>
                <span>Mover Profile</span>
            </h5>
            <div class="profile_box serviceDetail">
                <a href="" class="edit_function" data-bs-toggle="modal" data-bs-target="#editmover_Modal"><img src="assets/images/edit.png" alt=""></a>
                <div class="profileDetail mb-5">
                    <span><img src="assets/images/mover-profile.png" alt=""></span>
                    <p class="name mt-2">Liam Smith</p>
                    <div class="ratings">
                        <p class="name">4.0</p>
                        <span class="star selected" data-rating="1">★</span>
                        <span class="star selected" data-rating="2">★</span>
                        <span class="star selected" data-rating="3">★</span>
                        <span class="star selected" data-rating="4">★</span>
                        <span class="star " data-rating="5">★</span>
                    </div>
                    <a href="reviews.php" class="View_All">Rating & Reviews</a>
                </div>
                <ul class="service_description mt-3">
                    <li>
                        <span><strong>Email Address</strong></span>
                        <span><small>Liam@email.com</small></span>
                    </li>
                    <li>
                        <span><strong>Phone Number</strong></span>
                        <span><small>+123-456-789</small></span>
                    </li>
                    <li>
                        <span><strong>Address</strong></span>
                        <span><small>Lorem ipsum dolor sit amet consectetur</small></span>
                    </li>
                    <li class="last">
                        <span><strong>Password</strong></span>
                        <span><small>1235wac</small></span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-12 col-md-10 col-lg-6 col-xl-6 mb-3">
            <h5 class="title d_flexStartBetween mb-4">
                <span>Ongoing Booking</span>
                <a href="mover-bookings.php" class="View_All">View All</a>
            </h5>
            <div class="serviceDetail mb-3">
                <div class="profile_info d_flexStartBetween mb-4">
                    <div class="d_flexCenterGap">
                        <img src="assets/images/job-profile.png" class="profile_img" alt="">
                        <div class="details">
                            <p class="name">John Smith</p>
                            <p class="name">Mover Schedule 25 Sep, 2023</p>
                        </div>
                    </div>
                    <div class="msg_icon">
                        <img src="assets/images/message-icon.png" alt="">
                    </div>
                </div>
                <div class="box_bottom d_flexCenter mt-3">
                    <div class="mover_location info_box">
                        <h6 class="box_title">Pickup Location</h6>
                        <p class="text"><span><img src="assets/images/location_on.png" alt=""></span>1514 Robin St, Auburndale</p>
                    </div>
                    <div class="mover_location info_box">
                        <h6 class="box_title">Drop-off Location</h6>
                        <p class="text"><span><img src="assets/images/location_on.png" alt=""></span>Lorem Ipsum St, posuere</p>
                    </div>
                    <div class="mover_location info_box">
                        <h6 class="box_title">Time</h6>
                        <p class="text"><span><img src="assets/images/clock.png" alt=""></span>8 AM</p>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="location_img_sec">
                    <div class="responsive-map-container userhome-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1737.6221882978507!2d-98.48650795000005!3d29.421653200000023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x865c58aa57e6a56f%3A0xf08a9ad66f03e879!2sHenry+B.+Gonzalez+Convention+Center!5e0!3m2!1sen!2sus!4v1393884854786" width="600" height="450" frameborder="0" style="border:0"></iframe>
                        <a href="#"> <img src="assets/images/map-center.png" alt="img" class="overlay-image"></a>
                        <a href="#"> <img src="assets/images/location-1.png" alt="img" class="overlay-image first-image"></a>
                        <a href="#"> <img src="assets/images/location-2.png" alt="img" class="overlay-image firstt-image"></a>
                        <a href="#"> <img src="assets/images/location-3.png" alt="img" class="overlay-image sec-image"></a>
                        <a href="#"> <img src="assets/images/map-center.png" alt="img" class="overlay-image center2_img"></a>
                    </div>
                </div>
            </div>

        </div>
</section>
<?php include 'includes/footer.php'; ?>
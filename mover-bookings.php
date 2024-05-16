<?php include 'includes/header-links.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/aside.php'; ?>
<!-- Page Section Start's Here -->
<section class="content-section">
    <div class="myBooking_sect1">
        <h5 class="title">Service Request</h5>
        <div class="row mt-5">
            <div class="col-12 mb-4">
                <div class="bgWhite">
                    <div class="d_flexSpacebetween days_tabSect">
                        <h5 class="title mb-3">
                            <a href="#" class="prevBtn" onclick="goBack()"><img src="assets/images/arrow_circle_left.png" alt=""></a>
                            <span>Completed Booking Details</span>
                        </h5>
                        <div class="filterSect">
                            <span class="selectDate">
                                <input type="date">
                                <small>To</small>
                                <input type="date">
                            </span>
                            <a href="javascript:void(0)" class="cta">Apply Filter</a>
                        </div>
                    </div>
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="bgWhite myBookingTable">
                                <div class="service_table table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Customer</th>
                                                <th scope="col">Mover</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Location</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <div class="customerProfile">
                                                        <span>
                                                            <img src="assets/images/job-profile.png" alt="">
                                                        </span>
                                                        <p class="customerName">John Smith</p>
                                                    </div>
                                                </th>
                                                <td>
                                                    <span class="td_date">Liam Smith</span>
                                                </td>
                                                <td>
                                                <span class="td_date">01-01-2023</span>
                                                </td>
                                                <td>
                                                    <span class="td_date"><a href="javascript:void(0)">Florida <img src="assets/images/near_me.png" alt=""></a></span>
                                                </td>
                                                <td>
                                                    On The Way to Pickup
                                                </td>
                                                <td>
                                                    <a href="booking-details2.php" class="View_All">View Details</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="customerProfile">
                                                        <span>
                                                            <img src="assets/images/job-profile.png" alt="">
                                                        </span>
                                                        <p class="customerName">John Smith</p>
                                                    </div>
                                                </th>
                                                <td>
                                                    <span class="td_date">Liam Smith</span>
                                                </td>
                                                <td>
                                                    01-01-2023
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0)">Florida <img src="assets/images/near_me.png" alt=""></a>
                                                </td>
                                                <td>
                                                    <span class="td_date"> Arrived at Pickup</span>
                                                </td>
                                                <td>
                                                    <a href="booking-details2.php" class="View_All">View Details</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="customerProfile">
                                                        <span>
                                                            <img src="assets/images/job-profile.png" alt="">
                                                        </span>
                                                        <p class="customerName">John Smith</p>
                                                    </div>
                                                </th>
                                                <td>
                                                    <span class="td_date">Liam Smith</span>
                                                </td>
                                                <td>
                                                    01-01-2023
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0)">Florida <img src="assets/images/near_me.png" alt=""></a>
                                                </td>
                                                <td>
                                                    <span class="td_date">In Progress</span>
                                                </td>
                                                <td>
                                                    <a href="booking-details2.php" class="View_All">View Details</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="customerProfile">
                                                        <span>
                                                            <img src="assets/images/job-profile.png" alt="">
                                                        </span>
                                                        <p class="customerName">John Smith</p>
                                                    </div>
                                                </th>
                                                <td>
                                                    <span class="td_date">Liam Smith</span>
                                                </td>
                                                <td>
                                                    01-01-2023
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0)">Florida <img src="assets/images/near_me.png" alt=""></a>
                                                </td>
                                                <td>
                                                    <span class="td_date">On The Way to Drop-Off</span>
                                                </td>
                                                <td>
                                                    <a href="booking-details2.php" class="View_All">View Details</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="customerProfile">
                                                        <span>
                                                            <img src="assets/images/job-profile.png" alt="">
                                                        </span>
                                                        <p class="customerName">John Smith</p>
                                                    </div>
                                                </th>
                                                <td>
                                                    <span class="td_date">Liam Smith</span>
                                                </td>
                                                <td>
                                                    01-01-2023
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0)">Florida <img src="assets/images/near_me.png" alt=""></a>
                                                </td>
                                                <td>
                                                    <span class="td_date">Arrived at Drop-Off</span>
                                                </td>
                                                <td>
                                                    <a href="booking-details2.php" class="View_All">View Details</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="customerProfile">
                                                        <span>
                                                            <img src="assets/images/job-profile.png" alt="">
                                                        </span>
                                                        <p class="customerName">John Smith</p>
                                                    </div>
                                                </th>
                                                <td>
                                                    <span class="td_date">Liam Smith</span>
                                                </td>
                                                <td>
                                                    01-01-2023
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0)">Florida <img src="assets/images/near_me.png" alt=""></a>
                                                </td>
                                                <td>
                                                    <span class="td_date"> Arrived at Drop-Off</span>                                                   
                                                </td>
                                                <td>
                                                    <a href="booking-details2.php" class="View_All">View Details</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="customerProfile">
                                                        <span>
                                                            <img src="assets/images/job-profile.png" alt="">
                                                        </span>
                                                        <p class="customerName">John Smith</p>
                                                    </div>
                                                </th>
                                                <td>
                                                    <span class="td_date">Liam Smith</span>
                                                </td>
                                                <td>
                                                    01-01-2023
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0)">Florida <img src="assets/images/near_me.png" alt=""></a>
                                                </td>
                                                <td>
                                                    <span class="td_date"> Arrived at Drop-Off</span>                                                   
                                                </td>
                                                <td>
                                                    <a href="booking-details2.php" class="View_All">View Details</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        

                </div>
            </div>

        </div>
    </div>
</section>
<!-- Page Section End's Here -->
<?php include 'includes/footer.php'; ?>
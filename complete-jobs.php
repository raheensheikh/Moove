<?php include 'includes/header-links.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/aside.php'; ?>
<!-- Page Section Start's Here -->
<section class="content-section">
    <div class="My_Earnings_sect1">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 col-xl-8 col-xxl-9 mb-4">
                <div class="bgWhite earnigGraph">
                    <h5 class="title">Completed Jobs</h5>
                    <div class="d_flexSpacebetween">
                        <p class="date">01 - 29 February 2023</p>
                        <div class="filterSect">
                            <span class="selectDate">
                                <input type="date">
                                <small>To</small>
                                <input type="date">
                            </span>
                            <a href="javascript:void(0)" class="cta">Apply Filter</a>
                        </div>
                    </div>
                    <div class="graph">
                        <div id="chartContainer4" style="height: 300px;"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-12 col-xl-4 col-xxl-3 mb-4">
                <div class="bgWhite totalEarning_section">
                    <img src="assets/images/monetization_on.png" alt="">
                    <p class="title">Total Earnings</p>
                    <h5 class="earning">$56254.00</h5>
                </div>
            </div>
            <div class="col-12">
                <div class="bgWhite">
                    <!-- <div class="d_flexSpacebetween">
                        <p class="title">Booking Requests</p>
                        <a href="javascript:void(0)" class="View_All">View All</a>
                    </div> -->
                    <div class="service_table">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Customer</th>
                                        <th scope="col">Mover</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Estimated Payments</th>
                                        <th scope="col">After Discount</th>
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
                                            <span class="td_date">$250.00</span>
                                        </td>
                                        <td>
                                            <span class="td_date">$230.00</span>
                                        </td>
                                        <td>
                                            <a href="complete-bookings.php" class="View_All">View Details</a>
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
                                            Liam Smith
                                        </td>
                                        <td>01-01-2023</td>
                                        <td>
                                            <span class="td_date">$250.00</span>
                                        </td>
                                        <td>
                                            $230.00
                                        </td>
                                        <td>
                                            <a href="complete-bookings.php" class="View_All">View Details</a>
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
                                            Liam Smith
                                        </td>
                                        <td>01-01-2023</td>
                                        <td>
                                            <span class="td_date">$250.00</span>
                                        </td>
                                        <td>
                                            $230.00
                                        </td>
                                        <td>
                                            <a href="complete-bookings.php" class="View_All">View Details</a>
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
                                            Liam Smith
                                        </td>
                                        <td>01-01-2023</td>
                                        <td>
                                            <span class="td_date">$250.00</span>
                                        </td>
                                        <td>
                                            $230.00
                                        </td>
                                        <td>
                                            <a href="complete-bookings.php" class="View_All">View Details</a>
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
</section>
<!-- Page Section End's Here -->
<?php include 'includes/footer.php'; ?>
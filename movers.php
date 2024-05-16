<?php include 'includes/header-links.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/aside.php'; ?>
<!-- Page Section Start's Here -->
<section class="content-section">
    <div class="movers_sect1">
        <!-- <h5 class="title">Movers</h5> -->
        <div class="row mt-5">
            <div class="col-12 mb-4">
                <div class="bgWhite">
                    <div class="mover-title d_flexSpacebetween">
                        <p class="title2">Movers</p>

                        <div class="filterSect">
                            <div class="searchField">
                                <img src="assets/images/search.png" alt="search" data-bs-toggle="modal" data-bs-target="#search_Modal">
                                <input type="search" placeholder="Search or type...">
                            </div>
                            <a href="javascript:void(0)" class="cta" data-bs-toggle="modal" data-bs-target="#addmover_Modal">Add New Mover</a>
                        </div>
                    </div>
                    <div class="bgWhite myBookingTable">
                        <div class="service_table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Mover Name</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Email</th>
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
                                                <p class="customerName">Liam Smith</p>
                                            </div>
                                        </th>
                                        <td>
                                            Deactivate
                                        </td>
                                        <td>
                                            liamsmith@email.com
                                        </td>
                                        <td>
                                            <span class="td_date"><a href="mover-profile.php" class="View_All">View Profile</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="customerProfile">
                                                <span>
                                                    <img src="assets/images/job-profile.png" alt="">
                                                </span>
                                                <p class="customerName">Liam Smith</p>
                                            </div>
                                        </th>
                                        <td>
                                            Deactivate
                                        </td>
                                        <td>
                                            liamsmith@email.com
                                        </td>
                                        <td>
                                            <a href="mover-profile.php" class="View_All">View Profile</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="customerProfile">
                                                <span>
                                                    <img src="assets/images/job-profile.png" alt="">
                                                </span>
                                                <p class="customerName">Liam Smith</p>
                                            </div>
                                        </th>
                                        <td>
                                            Deactivate
                                        </td>
                                        <td>
                                            liamsmith@email.com
                                        </td>
                                        <td>
                                            <a href="mover-profile.php" class="View_All">View Profile</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="customerProfile">
                                                <span>
                                                    <img src="assets/images/job-profile.png" alt="">
                                                </span>
                                                <p class="customerName">Liam Smith</p>
                                            </div>
                                        </th>
                                        <td>
                                            Activate
                                        </td>
                                        <td>
                                            liamsmith@email.com
                                        </td>
                                        <td>
                                            <a href="mover-profile.php" class="View_All">View Profile</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="customerProfile">
                                                <span>
                                                    <img src="assets/images/job-profile.png" alt="">
                                                </span>
                                                <p class="customerName">Liam Smith</p>
                                            </div>
                                        </th>
                                        <td>
                                        Activate
                                        </td>
                                        <td>
                                            <span class="td_date">liamsmith@email.com</span>
                                        </td>
                                        <td>
                                            <a href="mover-profile.php" class="View_All">View Profile</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="customerProfile">
                                                <span>
                                                    <img src="assets/images/job-profile.png" alt="">
                                                </span>
                                                <p class="customerName">Liam Smith</p>
                                            </div>
                                        </th>
                                        <td>
                                            Deactivate
                                        </td>
                                        <td>
                                            liamsmith@email.com
                                        </td>
                                        <td>
                                            <a href="mover-profile.php" class="View_All">View Profile</a>
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
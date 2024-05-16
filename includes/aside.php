<aside class="aside">
    <div class="logoSect">
        <a href="index.php">
            <img src="assets/images/logo.png" alt="logo">
        </a>
    </div>
    <div class="navSection">
        <ul class="all_navLinks">
            <li>
                <a href="index.php">
                    <span class="icons">
                        <img src="assets/images/home.png" class="default_icons" alt="">
                        <img src="assets/images/home-active.png" class="active_icons" alt="">
                    </span>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="movers.php">
                    <span class="icons">
                        <img src="assets/images/movers.png" class="default_icons" alt="">
                        <img src="assets/images/movers-active.png" class="active_icons" alt="">
                    </span>
                    <span>Movers</span>
                </a>
            </li>
            <li>
                <a href="user.php">
                    <span class="icons">
                        <img src="assets/images/users.png" class="default_icons" alt="">
                        <img src="assets/images/users-active.png" class="active_icons" alt="">
                    </span>
                    <span>Users</span>
                </a>
            </li>
            <li>
                <a href="job.php">
                    <span class="icons">
                        <img src="assets/images/jobs.png" class="default_icons" alt="">
                        <img src="assets/images/jobs-active.png" class="active_icons" alt="">
                    </span>
                    <span>Jobs</span>
                </a>
            </li>
            <li>
                <a href="disputes.php">
                    <span class="icons">
                        <img src="assets/images/dispute.png" class="default_icons" alt="">
                        <img src="assets/images/dispute-active.png" class="active_icons" alt="">
                    </span>
                    <span>Disputes</span>
                </a>
            </li>
            <li>
                <a href="user-chat.php">
                    <span class="icons">
                        <img src="assets/images/message.png" class="default_icons" alt="">
                        <img src="assets/images/message-active.png" class="active_icons" alt="">
                    </span>
                    <span>Messages</span>
                </a>
            </li>
            <li>
                <a href="complete-jobs.php">
                    <span class="icons">
                        <img src="assets/images/complete-job.png" class="default_icons" alt="">
                        <img src="assets/images/complete-job-active.png" class="active_icons" alt="">
                    </span>
                    <span>Completed Jobs</span>
                </a>
            </li>
            <li>
                <a href="cancel-jobs.php">
                    <span class="icons">
                        <img src="assets/images/cancel-jobs.png" class="default_icons" alt="">
                        <img src="assets/images/cancel-jobs-active.png" class="active_icons" alt="">
                    </span>
                    <span>Cancelled Jobs</span>
                </a>
            </li>
            <li>
                <a href="settings.php">
                    <span class="icons">
                        <img src="assets/images/settings.png" class="default_icons" alt="">
                        <img src="assets/images/settings-active.png" class="active_icons" alt="">
                    </span>
                    <span>Settings</span>
                </a>
            </li>
            <li>
                <a href="#" data-bs-toggle="modal" data-bs-target="#logout_Modal">
                    <span class="icons">
                        <img src="assets/images/logout.png" class="default_icons" alt="">
                        <img src="assets/images/logout-active.png" class="active_icons" alt="">
                    </span>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
    // Get the current page URL
    const currentPageUrl = window.location.href;
    
    // Get all the links in the aside menu
    const menuLinks = document.querySelectorAll('.all_navLinks a');

    // Loop through each link and compare its href with the current page URL
    menuLinks.forEach(link => {
        if (currentPageUrl.includes(link.href)) {
            // Add the 'active' class to the link if its href is part of the current page URL
            link.index.php.classList.add('active');
        }
    });
});
</script>


</aside>
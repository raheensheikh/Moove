<header class="header">
    <div class="headerSection d_flexSpacebetween">
        <div class="menuSect">
            <a href="javascript:void(0)" class="sideBar" onclick="toggleSidebar()">
                <img src="assets/images/menu-burger.png" alt="menu burger">
            </a>
        </div>
        <div class="searchField">
            <img src="assets/images/search.png" alt="search" data-bs-toggle="modal" data-bs-target="#search_Modal">
            <input type="search" placeholder="Search or type...">
        </div>
        <div class="search_userSect">
            <div class="notificationSect">
                <a href="havascript:void(0)" class="menu-toggle">
                    <img src="assets/images/notification.png" alt="">
                </a>
                <div class="notification_wrapper menu_wrapper">
                    <div class="modal-header-notificaions">
                        <div class="form-check form-switch mb-2">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked2" checked>
                            <label class="form-check-label name" for="flexSwitchCheckChecked2">Notifications</label>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="scroll">
                            <div class="chat">
                                <div class="chat-img">
                                    <img src="assets/images/job-profile.png" alt>
                                </div>
                                <div class="userdesc">
                                    <div class="title">
                                        <p class="name">Message.</p>
                                        <p class="time">
                                            <span>12 min ago</span>
                                        </p>
                                    </div>
                                    <p class="para">Lorem ipsum dolor sit amet, consectetur.</p>
                                </div>
                            </div>
                            <div class="chat">
                               
                                <div class="userdesc">
                                    <div class="title">
                                        <p class="name">Jhon Smith</p>
                                        <p class="time">
                                            <span>12 min</span>
                                        </p>
                                    </div>
                                    <p class="para">Lorem ipsum dolor sit amet, consectetur.</p>
                                </div>
                            </div>
                            <div class="chat">
                                <div class="userdesc">
                                    <div class="title">
                                        <p class="name">Jhon Smith</p>
                                        <p class="time">
                                            <span>12 min</span>
                                        </p>
                                    </div>
                                    <p class="para">Lorem ipsum dolor sit amet, consectetur.</p>
                                </div>
                            </div>
                            <div class="chat">
                                <div class="userdesc">
                                    <div class="title">
                                        <p class="name">Jhon Smith</p>
                                        <p class="time">
                                            <span>12 min</span>
                                        </p>
                                    </div>
                                    <p class="para">Lorem ipsum dolor sit amet, consectetur.</p>
                                </div>
                            </div>
                            <div class="chat">
                                <div class="userdesc">
                                    <div class="title">
                                        <p class="name">Jhon Smith</p>
                                        <p class="time">
                                            <span>12 min</span>
                                        </p>
                                    </div>
                                    <p class="para">Lorem ipsum dolor sit amet, consectetur.</p>
                                </div>
                            </div>
                            <div class="chat">
                                <div class="userdesc">
                                    <div class="title">
                                        <p class="name">Jhon Smith</p>
                                        <p class="time">
                                            <span>12 min</span>
                                        </p>
                                    </div>
                                    <p class="para">Lorem ipsum dolor sit amet, consectetur.</p>
                                </div>
                            </div>
                            <div class="chat">
                                <div class="userdesc">
                                    <div class="title">
                                        <p class="name">Jhon Smith</p>
                                        <p class="time">
                                            <span>12 min</span>
                                        </p>
                                    </div>
                                    <p class="para">Lorem ipsum dolor sit amet, consectetur.</p>
                                </div>
                            </div>
                            <div class="chat">
                                <div class="userdesc">
                                    <div class="title">
                                        <p class="name">Jhon Smith</p>
                                        <p class="time">
                                            <span>12 min</span>
                                        </p>
                                    </div>
                                    <p class="para">Lorem ipsum dolor sit amet, consectetur.</p>
                                </div>
                            </div>
                            <div class="chat">
                                <div class="userdesc">
                                    <div class="title">
                                        <p class="name">Jhon Smith</p>
                                        <p class="time">
                                            <span>12 min</span>
                                        </p>
                                    </div>
                                    <p class="para">Lorem ipsum dolor sit amet, consectetur.</p>
                                </div>
                            </div>
                            <div class="chat last">
                                <div class="userdesc">
                                    <div class="title">
                                        <p class="name">Jhon Smith</p>
                                        <p class="time">
                                            <span>12 min</span>
                                        </p>
                                    </div>
                                    <p class="para">Lorem ipsum dolor sit amet, consectetur.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="javascript:void(0)" class="closeBtn">
                        <img src="../assets/images/close-btn.png" alt="close icon">
                    </a>
                </div>
            </div>
            <!-- <div class="userProfile">
                <a href="my-profile.php" class="userSect">
                    <span class="user_img">
                        <img src="assets/images/user-img.png" alt="">
                    </span>
                </a>
            </div> -->
        </div>
    </div>
</header>

<script>
    $(".menu-toggle").click(function (e) {
  e.stopPropagation(); // Stop the event from propagating to the document

  // Close all open menus
  closeAllMenus();

  // Find the next sibling with the class 'menu_wrapper' and toggle the 'active' class
  $(this).next('.menu_wrapper').toggleClass("active");
});

$(".closeBtn").click(function () {
  // Find the closest ancestor with the class 'menu_wrapper' and remove the 'active' class from it
  $(this).closest('.menu_wrapper').removeClass("active");
});

// Handle clicks outside the menu wrapper to close it
$(document).on('click', function (e) {
  if (!$(e.target).closest('.menu_wrapper').length && !$(e.target).is('.menu-toggle')) {
    closeAllMenus();
  }
});
</script>
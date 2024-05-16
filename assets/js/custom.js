$(document).ready(function () {
  var currentPageUrl = window.location.href;

  $(".all_navLinks a").each(function () {
    var linkUrl = $(this).attr("href");

    if (currentPageUrl.indexOf(linkUrl) !== -1) {
      $(this).addClass("active");
    }
  });
});


// Side Bar Js
function toggleSidebar() {
  var sidebar = document.querySelector('.sideBar');
  var aside = document.querySelector('.aside');
  var headerSection = document.querySelector('.headerSection');
  var contentsection = document.querySelector('.content-section');

  aside.classList.toggle('active');
  headerSection.classList.toggle('active');
  contentsection.classList.toggle('active');
}


function increment(element) {
  var inputElement = element.parentNode.querySelector('input[type="number"]');
  inputElement.value = parseInt(inputElement.value, 10) + 1;
}

function decrement(element) {
  var inputElement = element.parentNode.querySelector('input[type="number"]');
  var currentValue = parseInt(inputElement.value, 10);
  if (currentValue > 0) {
    inputElement.value = currentValue - 1;
  }
}





// 
var swiper = new Swiper(".nearbySlider", {
	slidesPerView: 4,
	spaceBetween: 30,
	loop: true,
	autoplay: {
		delay: 2500,
		disableOnInteraction: false,
	  },
	  breakpoints: {
		320: {
			slidesPerView: 1,
			spaceBetween: 10,
		  },
		575: {
			slidesPerView: 1,
			spaceBetween: 10,
		  },    
		660: {
		  slidesPerView: 2,
		  spaceBetween: 10,
		},
		767: {
		  slidesPerView: 2,
		  spaceBetween: 10,
		},
		910: {
			slidesPerView: 3,
			spaceBetween: 30,
		  },
		1024: {
		  slidesPerView: 3,
		  spaceBetween: 30,
		},
    1200: {
		  slidesPerView: 4,
		  spaceBetween: 30,
		},
    1366: {
		  slidesPerView: 4,
		  spaceBetween: 30,
		},
	  },
  });
//


//
$(function() {
  function increment(element) {
    var inputElement = element.parentNode.querySelector('input[type="number"]');
    inputElement.value = parseInt(inputElement.value, 10) + 1;
  }
  
  function decrement(element) {
    var inputElement = element.parentNode.querySelector('input[type="number"]');
    var currentValue = parseInt(inputElement.value, 10);
    if (currentValue > 0) {
        inputElement.value = currentValue - 1;
    }
  }

// ***************************************rating star js start*****************************
$(document).ready(function() {
  // Handle star rating click event
  $('.star').on('click', function() {
      const rating = $(this).data('rating');
      // You can use this rating value as needed, e.g., to send to a server or display feedback.

      // Toggle a CSS class to change the star color (e.g., to yellow)
      $(this).addClass('selected');
      $(this).prevAll('.star').addClass('selected');
      $(this).nextAll('.star').removeClass('selected');
  });
});

});

// ***************************************rating star js end*******************************


// Function to close all open menus
function closeAllMenus() {
  $(".menu_wrapper.active").removeClass("active");
}


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

// --------------------one page back script
    function goBack() {
        window.history.back(); 
        return false; 
    }
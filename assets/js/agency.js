(function($) {
  "use strict"; // Start of use strict

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 54)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    offset: 56
  });

  // Collapse Navbar
  var navbarCollapse = function() {
      $("#mainNav").addClass("navbar-shrink");
  };
  // Collapse now if page is not at top
  navbarCollapse();
  // Collapse the navbar when page is scrolled
  //$(window).scroll(navbarCollapse);

  // Hide navbar when modals trigger
  $('.portfolio-modal').on('show.bs.modal', function(e) {
    $(".navbar").addClass("d-none");
  })
  $('.portfolio-modal').on('hidden.bs.modal', function(e) {
    $(".navbar").removeClass("d-none");
  })

})(jQuery); // End of use strict
$('input[type=radio][name=paymentAnalysis]').on('change', function() {
  switch($(this).val()) {
      case 'automatic':
          $('#automated').show(300);
          $('#manual').hide(300);
          break;
      case 'manual':
          $('#manual').show(300);
          $('#automated').hide(300);
          break;
  }
});
function renderPage(id,event)
{
    event.preventDefault();
    $('#pageId').val(id);
    $('#pageForm').submit();
}

//course filters

$('#categoriesFilterCourse').on('change', function() {
  var category = this.value;
  
  $.ajax({
    type: 'POST',
    url: "mvc/controllers/courseController.php",
    data: {'route':'filterCourses',
    'category': category},
    dataType: "text",
    success: function(resultData) { 
      $('#courseHolder').html(resultData);
     }
});
})
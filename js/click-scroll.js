//jquery-click-scroll
//by syamsul'isul' Arifin

var sectionArray = [1, 2, 3, 4, 5, 6];

$(document).scroll(function () {
  var scrollTop = $(this).scrollTop();

  // Loop melalui setiap bagian dan periksa jika bagian sedang terlihat
  sectionArray.forEach(function (value, index) {
    var offsetSection = $("#section_" + value).offset().top - 83;

    if (scrollTop >= offsetSection) {
      $(".navbar-nav .nav-item .nav-link")
        .removeClass("active")
        .addClass("inactive");
      $(".navbar-nav .nav-item .nav-link:eq(" + index + ")")
        .removeClass("inactive")
        .addClass("active");
    }
  });
});

$(".click-scroll").click(function (e) {
  e.preventDefault();
  var targetSection = $(this).attr("href");
  var offsetClick = $(targetSection).offset().top - 83;

  $("html, body").animate(
    {
      scrollTop: offsetClick,
    },
    300
  );

  // Tambahkan kelas 'active' pada link yang diklik dan hapus 'active' dari link lainnya
  $(".navbar-nav .nav-item .nav-link")
    .removeClass("active")
    .addClass("inactive");
  $(this).removeClass("inactive").addClass("active");
});

$(document).ready(function () {
  $(".navbar-nav .nav-item .nav-link").addClass("inactive");
  $(".navbar-nav .nav-item .nav-link:eq(0)")
    .removeClass("inactive")
    .addClass("active");
});


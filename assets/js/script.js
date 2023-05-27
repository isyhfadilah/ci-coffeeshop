$(document).ready(function() {
    $('#hamburger').click(function() {
      $('#navbar').toggle(); // tampil navbar
      $('#hamburger').toggle(); // hidden burger
      $('#close').toggle(); // tampil close
    });
  
    $('#close').click(function() {
      $('#navbar').toggle(); // hidden navbar
      $('#hamburger').toggle(); // tampil burger
      $('#close').toggle(); // hidden close
    });

    $('#hapusButton').click(function() {
      alert("Anda akan menghapus data. Apakah anda yakin?");
    });

    $(window).on("scroll", function() {
        if($(window).scrollTop() > 50) {
          $(".navbar").removeClass("bg-gray-950");
          $(".navbar").addClass("bg-white");
        } else {
          $(".navbar").removeClass("bg-white");
          $(".navbar").addClass("bg-gray-950");
        }
      });

  });

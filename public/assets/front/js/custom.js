// Aos
AOS.init();

setTimeout(() => {
  $(".loading").fadeOut(1000);
}, 1000);

window.onload = function () {
  setTimeout(() => {
    $(".header-pages").addClass("active");
  }, 500);
};

$(".asked-introducing ul li h2").click(function (e) {
  e.preventDefault();
  $(this).next().slideToggle(300);
  $(this).parent().toggleClass("active");

})





// ----------------------

















// chenge img prpfile


$(document).ready(function () {
  var readURLprofile = function (input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        $('.img-profile img').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    }
  }

  $("#chenge1").on('change', function () {
    readURLprofile(this);
  });

});









if ($("#slider-categories").length) {
  $("#slider-categories").owlCarousel({
    loop: false,
    margin: 10,
    nav: true,
    items: 4,
    autoplayTimeout: 3500,
    autoplayHoverPause: false,
    rtl: $('html').attr('lang') === 'ar',
    autoplay: false,
    autoplayHoverPause: true,
    dots: false,
    smartSpeed: 700,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        margin: 0,

      },
      500: {
        items: 2,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 4,
      },
    },
  });
}
if ($("#slider-product").length) {
  $("#slider-product").owlCarousel({
    loop: false,
    margin: 0,
    nav: false,
    items: 3,
    autoplayTimeout: 3500,
    autoplayHoverPause: false,
    rtl: $('html').attr('lang') === 'ar',
    autoplay: false,
    autoplayHoverPause: true,
    dots: true,
    smartSpeed: 700,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
      1000: {
        items: 3,
      },
    },
  });
}


if ($("#slider-img").length) {
  $("#slider-img").owlCarousel({
    loop: true,
    margin: 20,
    nav: false,
    items: 5,
    autoplayTimeout: 3500,
    autoplayHoverPause: false,
    rtl: true,
    autoplay: true,

    autoplayHoverPause: true,
    dots: true,
    smartSpeed: 700,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      }
    },
  });
}

$(document).ready(function () {
  var readURLprofile = function (input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        $('.img-providers img').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    }
  }

  $("#chenge1").on('change', function () {
    readURLprofile(this);
  });

});


$(".remove_mune").click(function () {
  $("#menu-div").removeClass("active");
  $(".bg_menu").removeClass("active");
});

function open() {
  $(".navicon").addClass("is-active");
  $("#menu-div").addClass("active");
  $("#times-ican").addClass("active");
  $(".bg_menu").addClass("active");
}

function close() {
  $(".navicon").removeClass("is-active");
  $("#menu-div").removeClass("active");
  $("#times-ican").removeClass("active");
  $(".bg_menu").removeClass("active");


  $(".remove-mune").click(function () {
    $("#menu-div").removeClass("active");
    $(".bg_menu").removeClass("active");
    $(".times-ican").removeClass("active");
  });
}

$("#times-ican").click(function () {
  if ($(this).hasClass("active")) {
    close();
  } else {
    open();
  }
});

$(".btns_menu_responsive").click(function (e) {
  close();

})

$(".remove-mune").click(function () {
  $("#menu-div").removeClass("active");
  $(".bg_menu").removeClass("active");
  $(".times-ican").removeClass("active");
  $(".navicon").removeClass("is-active");
});

$("#menu-div a").click(function () {
  e.preventDefault();
});

var $winl = $(window); // or $box parent container
var $boxl = $(
  "#menu-div, #times-ican"
);
$winl.on("click.Bst", function (event) {
  if (
    $boxl.has(event.target).length === 0 && //checks if descendants of $box was clicked
    !$boxl.is(event.target) //checks if the $box itself was clicked
  ) {
    close();
  }
});

let btnShowPass = document.querySelectorAll(".show-password i");
btnShowPass.forEach((ele) => {
  ele.parentElement.nextElementSibling.setAttribute("type", "password");
  ele.addEventListener("click", function (e) {
    e.preventDefault();
    const type =
      e.target.parentElement.nextElementSibling.getAttribute("type") ===
      "password"
        ? "text"
        : "password";

    e.target.parentElement.nextElementSibling.setAttribute("type", type);

    if (e.target.classList.contains("bi-eye-slash")) {
      e.target.classList.add("bi-eye");
      e.target.classList.remove("bi-eye-slash");
    } else {
      e.target.classList.add("bi-eye-slash");
      e.target.classList.remove("bi-eye");
    }
  });
});




function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $("#image-preview").attr("src", e.target.result);
      $("#image-preview").hide();
      $("#image-preview").fadeIn(650);
    };
    reader.readAsDataURL(input.files[0]);
  }
}

$("#uplaod-file-1").change(function () {
  $(".chat-wrapper").prepend(` 
    <div class="msg-send">
        <p> 
          <img src="${readURL(this)}" id="image-preview" alt="">
        </p>
    </div>
`);
});


$(".sub-asked-questions h2").click(function(e) {
  e.preventDefault();
  $(this).next().slideToggle(300);
  $(this).parent().toggleClass("active");

})

$(function () {
  $("#chat-form").on("submit", function (e) {
    e.preventDefault();
    var message = $("#text-message").val();
    $("#text-message").val("");
    $(".chat-wrapper").prepend(` 
    <div class="msg-send">
      <p> 
      ${message}
      </p>
  </div>
    
    `);
  });
});

$(function () {
  $(".mune-chat").click(function () {
    $(".users-chat").toggleClass("active");
  });
});









// upload file ==============

$("#ulpload-1").change(function (e) {
  $(".input-upload label span").text(e.target.files[0].name);
});
$("#file-2").change(function (e) {
  $(".input-file #file-2 ~ label  span").text(e.target.files[0].name);
});







document.getElementById('imageInput').addEventListener('change', handleImageUpload);
function handleImageUpload(event) {
  const files = event.target.files;
  const imageContainer = document.getElementById('imageContainer');

  for (let i = 0; i < files.length; i++) {
    const file = files[i];
    const reader = new FileReader();

    reader.onload = function (e) {
      const mainDivDelete = document.createElement('div')
      const imageElement = document.createElement('img');
      imageElement.src = e.target.result;
      imageElement.classList.add('uploadedImage');

      const deleteButton = document.createElement('span');
      deleteButton.innerText = 'حذف';
      deleteButton.classList.add('deleteButton');
      deleteButton.addEventListener('click', function () {
        this.parentElement.style.display = 'none';
      });
      mainDivDelete.appendChild(imageElement);
      mainDivDelete.appendChild(deleteButton);
      imageContainer.appendChild(mainDivDelete);
    };

    reader.readAsDataURL(file);
  }
}
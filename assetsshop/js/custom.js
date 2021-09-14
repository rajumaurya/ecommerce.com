/** 
  * Template Name: Daily Shop
  * Version: 1.0  
  * Template Scripts
  * Author: MarkUps
  * Author URI: http://www.markups.io/

  Custom JS
  

  1. CARTBOX
  2. TOOLTIP
  3. PRODUCT VIEW SLIDER 
  4. POPULAR PRODUCT SLIDER (SLICK SLIDER) 
  5. FEATURED PRODUCT SLIDER (SLICK SLIDER)
  6. LATEST PRODUCT SLIDER (SLICK SLIDER) 
  7. TESTIMONIAL SLIDER (SLICK SLIDER)
  8. CLIENT BRAND SLIDER (SLICK SLIDER)
  9. PRICE SLIDER  (noUiSlider SLIDER)
  10. SCROLL TOP BUTTON
  11. PRELOADER
  12. GRID AND LIST LAYOUT CHANGER 
  13. RELATED ITEM SLIDER (SLICK SLIDER)

  
**/

jQuery(function ($) {


  /* ----------------------------------------------------------- */
  /*  1. CARTBOX 
  /* ----------------------------------------------------------- */

  jQuery(".aa-cartbox").hover(function () {
    jQuery(this).find(".aa-cartbox-summary").fadeIn(500);
  }
    , function () {
      jQuery(this).find(".aa-cartbox-summary").fadeOut(500);
    }
  );

  /* ----------------------------------------------------------- */
  /*  2. TOOLTIP
  /* ----------------------------------------------------------- */
  jQuery('[data-toggle="tooltip"]').tooltip();
  jQuery('[data-toggle2="tooltip"]').tooltip();

  /* ----------------------------------------------------------- */
  /*  3. PRODUCT VIEW SLIDER 
  /* ----------------------------------------------------------- */

  jQuery('#demo-1 .simpleLens-thumbnails-container img').simpleGallery({
    loading_image: 'demo/images/loading.gif'
  });

  jQuery('#demo-1 .simpleLens-big-image').simpleLens({
    loading_image: 'demo/images/loading.gif'
  });

  /* ----------------------------------------------------------- */
  /*  4. POPULAR PRODUCT SLIDER (SLICK SLIDER)
  /* ----------------------------------------------------------- */

  jQuery('.aa-popular-slider').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });


  /* ----------------------------------------------------------- */
  /*  5. FEATURED PRODUCT SLIDER (SLICK SLIDER)
  /* ----------------------------------------------------------- */

  jQuery('.aa-featured-slider').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  /* ----------------------------------------------------------- */
  /*  6. LATEST PRODUCT SLIDER (SLICK SLIDER)
  /* ----------------------------------------------------------- */
  jQuery('.aa-latest-slider').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  /* ----------------------------------------------------------- */
  /*  7. TESTIMONIAL SLIDER (SLICK SLIDER)
  /* ----------------------------------------------------------- */

  jQuery('.aa-testimonial-slider').slick({
    dots: true,
    infinite: true,
    arrows: false,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true
  });

  /* ----------------------------------------------------------- */
  /*  8. CLIENT BRAND SLIDER (SLICK SLIDER)
  /* ----------------------------------------------------------- */

  jQuery('.aa-client-brand-slider').slick({
    dots: false,
    infinite: false,
    speed: 300,
    autoplay: true,
    autoplaySpeed: 2000,
    slidesToShow: 5,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 4,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  /* ----------------------------------------------------------- */
  /*  9. PRICE SLIDER  (noUiSlider SLIDER)
  /* ----------------------------------------------------------- */

  jQuery(function () {
    if ($('body').is('.productPage')) {
      var skipSlider = document.getElementById('skipstep');
      noUiSlider.create(skipSlider, {
        range: {
          'min': 0,
          '10%': 10,
          '20%': 20,
          '30%': 30,
          '40%': 40,
          '50%': 50,
          '60%': 60,
          '70%': 70,
          '80%': 80,
          '90%': 90,
          'max': 100
        },
        snap: true,
        connect: true,
        start: [20, 70]
      });
      // for value print
      var skipValues = [
        document.getElementById('skip-value-lower'),
        document.getElementById('skip-value-upper')
      ];

      skipSlider.noUiSlider.on('update', function (values, handle) {
        skipValues[handle].innerHTML = values[handle];
      });
    }
  });



  /* ----------------------------------------------------------- */
  /*  10. SCROLL TOP BUTTON
  /* ----------------------------------------------------------- */

  //Check to see if the window is top if not then display button

  jQuery(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $('.scrollToTop').fadeIn();
    } else {
      $('.scrollToTop').fadeOut();
    }
  });

  //Click event to scroll to top

  jQuery('.scrollToTop').click(function () {
    $('html, body').animate({ scrollTop: 0 }, 800);
    return false;
  });

  /* ----------------------------------------------------------- */
  /*  11. PRELOADER
  /* ----------------------------------------------------------- */

  jQuery(window).load(function () { // makes sure the whole site is loaded      
    jQuery('#wpf-loader-two').delay(200).fadeOut('slow'); // will fade out      
  })

  /* ----------------------------------------------------------- */
  /*  12. GRID AND LIST LAYOUT CHANGER 
  /* ----------------------------------------------------------- */

  jQuery("#list-catg").click(function (e) {
    e.preventDefault(e);
    jQuery(".aa-product-catg").addClass("list");
  });
  jQuery("#grid-catg").click(function (e) {
    e.preventDefault(e);
    jQuery(".aa-product-catg").removeClass("list");
  });


  /* ----------------------------------------------------------- */
  /*  13. RELATED ITEM SLIDER (SLICK SLIDER)
  /* ----------------------------------------------------------- */

  jQuery('.aa-related-item-slider').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

});


// account settings

$('#wishlist').on('click', function () {
  alert('hello');
  window.location.href = 'http://localhost/ecommerce/dashboard/wishlist';
});

// user signup

$(document).on('submit', '#signup_form', function (e) {
  // alert("helll");
  e.preventDefault();
  $.ajax({
    url: '/ecommerce/auth/check',
    type: 'post',
    datatype: 'json',
    data: $(this).serialize(),
    success: function (data) {
      if (data == 1) {
        swal("Signup !", "signup form submitted ", "success");
        setTimeout(function () {
          window.location.href = 'http://localhost/ecommerce/dashboard';
        }, 1000);

        //  swal("sorry!","email already created","warning");
      }
      else {
        swal("OOps!", "Registraion failed", "warning");

      }
    }
  });

});

// user login
$(document).on('submit', '#user_login', function (e) {
  e.preventDefault();
  // alert('hello');

  $.ajax({
    url: '/ecommerce/auth/user_check',
    type: 'post',
    datatype: 'json',
    data: $(this).serialize(),
    success: function (data) {

      if (data == true) {
        swal("login!", "Successfully.", "success");
        setTimeout(function () {
          window.location.href = 'http://localhost/ecommerce/dashboard';
        }, 1000);

      }
      else {
        swal("Login!", "Opps!", "warning");
        // setTimeout(function () {
        //   window.location.href = 'http://localhost/ecommerce/dashboard/account';
        // }, 1000);
      }
    }
  });
});

// client login 
$(document).on('click', '.client_login', function (e) {
  e.preventDefault();
  var email = $("#username").val();
  var password = $("#password").val();
  $.ajax({
    url: '/ecommerce/auth/user_check',
    type: 'post',
    data: { email: email, password: password },
    success: function (data) {

      if (data == true) {
        swal("login!", "Successfully.", "success");
        setTimeout(function () {
          window.location.href = 'http://localhost/ecommerce/dashboard/checkout';
        }, 1000);

      }
      else {
        swal("Login!", "Opps!", "warning");
        // setTimeout(function () {
        //   window.location.href = 'http://localhost/ecommerce/dashboard/account';
        // }, 1000);
      }
    }
  });
});

// add bill detail

$(document).on('click', '.add_bill', function (e) {
  // alert("helll");
  e.preventDefault();

   var fname=$('#fname').val();
   var lname=$('#lname').val();
   var company=$('#company').val();
   var email=$('#email').val();
   var phone=$('#phone').val();
   var address=$('#address').val();
   var country=$('#country').val();
   var appartment=$('#appartment').val();
   var city=$('#city').val();
   var district=$('#district').val();
   var postcode=$('#postcode').val();
  $.ajax({
    url: '/ecommerce/dashboard/add_bill_detail',
    type: 'post',
    data:{fname:fname,lname:lname,company:company,email:email,phone:phone,address:address,country:country,appartment:appartment,city:city,district:district,postcode:postcode},
    success: function (data) {
      if (data == 1) {
        swal("success!", "billing address added successfully ", "success");
        setTimeout(function () {
          window.location.href = 'http://localhost/ecommerce/dashboard/checkout';
        }, 1000);

        //  swal("sorry!","email already created","warning");
      }
      else {
        swal("OOps!", "Failed to Address", "warning");

      }
    }
  });

});





// add to product 


// $('.aa-add-card-btn')
$('.adds').click(function () {
  var product_id = $(this).data('id');
  var product_name = $(this).data('itemname');
  // alert(product_name);
  var product_image = $(this).data("image");
  var product_price = $(this).data("price");
  var quantity = 1;

  if (quantity != '' && quantity > 0) {
    $.ajax({
      url: 'http://localhost/ecommerce/dashboard/add',
      method: "POST",
      data: { product_id: product_id, product_name: product_name, product_price: product_price, product_image: product_image, quantity: quantity },
      success: function (data) {
        alert("Product Added into Cart");
        $('#cart_details').html(data);
        $('#' + id).val('');
      }
    });
  }


  $(document).on('click', '.remove_inventory ', function () {
    var row_id = $(this).attr('id');
    if (confirm("Are you sure you want to remove this?")) {
      $.ajax({
        url: 'dashboard/remove',
        method: 'POST',
        data: { row_id: row_id },
        success: function (data) {
          alert("Product removed from Cart");
          $('#cart_details').html(data);
          // location.reload(); 
        }
      });
    }
    else {
      return false;
    }
  });

  $(document).on('click', '#clear_cart', function () {
    if (confirm("Are you sure you want to clear cart?")) {
      $.ajax({
        url: "dashboard/clear",
        success: function (data) {
          alert("Your cart has been clear...");
          $('#cart_details').html(data);

        }
      });
    }
    else {
      return false;
    }
  });

});

// $("#checkout").on('click', function () {
//   window.location.href = "checkout";
// })

$("#goadmin").on('click', function () {
  window.location.href = "admin";
})


$(document).on('submit', '#checkout_form', function (e) {
  e.preventDefault();
  $.ajax({
    url: 'checkout/savecheckout',
    method: 'post',
    datatype: 'json',
    data: $(this).serialize(),
    success: function (data) {
      if (data == true) {
        swal("success", " detail added successfully", "success");
        redirect('/payment');
      }
      else {
        swal("failed", "failed to added your detail", "warning");
      }
    }


  });
});
$(document).ready(function () {
  $('#cart_details').load("./dashboard/load");
  $('#cart_details').hide();
  jQuery('#cart-popover').hover(function () {
    $('#cart_details').toggle();
  });

});



// add wlist into cart

$(document).ready(function(){
  $(".wlist").on('click', function(){
   var product_id=$(this).data('id');
  //  alert(product_id);
   $.ajax({
            url: 'dashboard/addwlist',
            data: {'product_id': product_id}, 
            type: "post",
            dataType: "json",
            success: function(res){   
            var  pdata=res.wlist; 
            var  pdata=pdata.split(',');
              $('.icofont-heart').css('color','');
              if ($.inArray(product_id, pdata)>0) {
                $('#desc').text('Add list');
               $('.icofont-heart').css('color','#007bff');         
              }else {
                $('.icofont-heart').css('color','#dc3545 !important');
                $('#desc').text('Remove list');
              }
              launch_toast();
              $('#pdata').val(pdata);
            }
        });
     });

     $("#rlist").on('click', function(){
      var product_id=$('#product_id').val();
      // alert(product_id);
      $.ajax({
               url: 'dashboard/addwlist',
               data: {'product_id': product_id}, 
               type: "post",
               dataType: "json",
               success: function(res){
                $('.item-'+product_id).hide(); 
                location.reload();

               }
           });
        });


});

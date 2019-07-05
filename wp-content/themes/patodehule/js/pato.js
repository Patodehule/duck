$(document).ready(function () {
  $(this).scrollTop(0);
});

jQuery(function () {
  ////////////// VARIABLES ///////////////////////
  var toggle = $('.toggle input');
  var over_menu = $('.menuo');
  var item_menu = $('.menu-duck li');
  var j = 0;
  //////////////// END VARIABLES /////////////////
  toggle.prop('checked', false);

  ////////////// FUNCTION MENU OVER ///////
  toggle.click(function () {
    over_menu.toggle();
    over_menu.animate({
      top: '0',
      opacity: '1',
    }, 200);
    toggle.checked = !toggle.checked;
    if (toggle.checked==true) {
      //alert("is true");
    }else {
      //alert("no true");
    }
  });
  ////////////// FUNCTION MENU ITEMS OVER ///////
  item_menu.hover(function () {
      $(this).toggleClass('menuo-over');
  });
  item_menu.click(function () {
    
    over_menu.animate({
      top: '-100%',
      opacity: '0',
    }, 200);
    setTimeout(() => {
      over_menu.toggle();
    }, 200);

    toggle.prop('checked', false);


  });

  
});



$(function () {
  $(".typed").typed({
    strings: ["marca.", "estrategia."],
    // Optionally use an HTML element to grab strings from (must wrap each string in a <p>)
    stringsElement: null,
    // typing speed
    typeSpeed: 30,
    // time before typing starts
    startDelay: 30,
    // backspacing speed
    backSpeed: 20,
    // time before backspacing
    backDelay: 1500,
    // loop
    loop: true,
    // false = infinite
    loopCount: false,
    // show cursor
    showCursor: false,
    // character for cursor
    cursorChar: "|",
    // attribute to type (null == text)
    attr: null,
    // either html or text
    contentType: 'html',
    // call when done callback function
    callback: function () {},
    // starting callback function before each string
    preStringTyped: function () {},
    //callback for every typed string
    onStringTyped: function () {},
    // callback for reset
    resetCallback: function () {}
  });
});


//////////// PORTFOLIO

$(document).ready(function () {

  $(".filter-button").click(function () {
    var value = $(this).attr('data-filter');

    if (value == "all") {
      //$('.filter').removeClass('hidden');
      $('.filter').show('300');
    } else {
      //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
      //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
      $(".filter").not('.' + value).hide('300');
      $('.filter').filter('.' + value).show('300');

    }
    if ($(".filter-button").removeClass("active")) {
      $(this).removeClass("active");
    }
    $(this).addClass("active");
  });
  var blogitem = $(".blog-item");


  blogitem.hover(function () {
      $("#blog").find("h2").addClass("translate30");
  });
  blogitem.mouseout(function () { 
    $("#blog").find("h2").removeClass("translate30");
  });
   


  

});

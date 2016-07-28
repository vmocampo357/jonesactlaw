/*global jQuery */

/*jslint browser: true, devel: true, white: true */

jQuery(function ($) {

  'use strict';

  var

    is_menu_mobile = function () {

      return $('#header_menu_contE .icon').is(':visible');

    },



    injury_update = function () {

      var

        $injury,

        $injury_cont = $('#injury_selector .injury_cont'),

        $injury_left = $('#injury_selector .arrow_left'),

        $injury_right = $('#injury_selector .arrow_right'),

        injury_fit,

        wt, w1;

      //reset & get data

      if ($injury_cont.data('cycle.API')) { $injury_cont.cycle('destroy'); }

      $injury = $('#injury_selector .injury_w');

      $injury_cont.add($injury).css({width: ''});

      w1 = $injury.width();

      wt = $injury_cont.width();

      injury_fit = Math.floor((wt + 10) / w1);

//console.log({wt: wt, have: $injury.length, fit: injury_fit, w1: w1});

      $injury_left.add($injury_right).toggle(injury_fit < $injury.length); //toggle controls

      //add cycle if needed

      if ($injury.length > injury_fit) {

        $injury.css({width: w1});

        $injury_cont.cycle({

          autoHeight: -1,

          carouselVisible: injury_fit,

          easing: 'linear',

          fx: 'carousel',

          log: false,

          next: $injury_right,

          prev: $injury_left,

          //reverse: false,

          slides: '> .injury_w',

          speed: 600,

          timeout: 0

        });

      }

    },	



    window_resize_time = 200,

    window_resize_timeout,

    window_resize_do = function () {

      //injury selector

      injury_update();

    },

    window_resize = function () {

      clearTimeout(window_resize_timeout);

      window_resize_timeout = setTimeout(window_resize_do, window_resize_time);

    };



  //mobile header menu

  $('#header_menu_contE .icon').click(function (e) {

    e.preventDefault();

    $('#header_menu_cont3E').fadeToggle(300);

  });

  //header menu hover & click

  $('#innerEs_header ul li.sub').hover(function (e) {

    //hover only works on non mobile menu

    if (!is_menu_mobile()) {

      $(this).toggleClass('sel', e.type === 'mouseenter');

    }

  });

  //header menu clicked

  $('#innerEs_header ul li.sub > a').click(function (e) {

   // e.preventDefault();

    var

      $li = $(this).parent(),

      toggle = !$li.hasClass('sel');

    $li.toggleClass('sel', toggle);

    $li.siblings('li').removeClass('sel');

  });

  //header search

  $('#innerEs_header ul .searchE').click(function (e) {

    e.preventDefault();

    $('#innerEs_header ul .search_formE').fadeToggle();

  });

  //header search submit

  $('#innerEs_header ul .search_formE').submit(function (e) {

    //cancel if empty

    if (!$(this).find('[name="search"]').val()) { e.preventDefault(); }

  });

  //header arrow

  $('#header_arrow').click(function (e) {

    e.preventDefault();

    $('html, body').stop(true).animate({scrollTop: $('#feat_w').offset().top}, 900);

  });

  //faq question

  $('#cfaq h4').click(function (e) {

    e.preventDefault();

    $(this).toggleClass('sel');

  });

  //reach out to us

  $('#contact_w .top').click(function (e) {

    e.preventDefault();

    $(this).toggleClass('sel');

  });



  //window resize & initial resize

  $(window).resize(window_resize);

  window_resize_do();

});
/**
 * Created by kylemagee on 7/13/17.
 */
jQuery('#mag-row .vc_col-sm-3.wpb_column').height(jQuery('#mag-row .vc_col-sm-4.wpb_column').parents('.mk-grid').height());

jQuery('#mag-row .post-card').parent('div').addClass('mag-inner');

jQuery(window).load(function(){
  // companionTestimonials();
  // jQuery('.mk-flexslider').flexslider('start', 'companionTestimonials');


  // CORE scripts changed on line :10254
  jQuery('.home .flex-next').on('click', function(){
    $next = jQuery('.testimonial-headshots .mk-pagination .js-pagination-next');
    if(!$next.hasClass('is-vis-hidden'))
      $next.trigger('click');
  });

  jQuery('.home .flex-prev').on('click', function(){
    $prev = jQuery('.testimonial-headshots .mk-pagination .js-pagination-prev');
    if(!$prev.hasClass('is-vis-hidden'))
      $prev.trigger('click');
  });

});


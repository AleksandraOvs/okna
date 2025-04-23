function initFAQAccordion() {
    jQuery(function($) {
      $('.faq-item').accordion({
        active: 0,
        animate: {
          duration: 300,
          easing: '',
        },
        heightStyle: 'content',
        collapsible: true,
        icons: false,
        active: false,
      });
    });
  }

  window.addEventListener('DOMContentLoaded', function() {
    initFAQAccordion();
  });
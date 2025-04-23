document.addEventListener('DOMContentLoaded', function () {

    if (window.innerWidth <= 1024) {
        let menuParent = document.querySelectorAll(".menu-item-has-children");
        let subMenu = document.querySelectorAll(".sub-menu");
        //let currentColor;

        for (let i = 0; i < menuParent.length; i++) {
            menuParent[i].addEventListener("mouseover", function () {
                this.classList.add("active");
            });
            menuParent[i].addEventListener("mouseout", function () {
                this.classList.remove("active");
            });
        }
    }

    const body = document.body;
    const menu = document.querySelector('.header-navigation');
    const toggle = document.querySelector('.menu-toggle');
    const subMenu = document.querySelector('.sub-menu');

    toggle.addEventListener('click', function () {
        body.classList.toggle('active');
        menu.classList.toggle('active');
        toggle.classList.toggle('active');
    });

   // window.addEventListener("DOMContentLoaded", setDecoreFirstWord(".num-item__num"));
    //anim numbers
  
  
    if ($('#numbers').length) {
      let isAnim = 0;
      scrollTracking();
      function scrollTracking() {
        let wt = $(window).scrollTop();
        let wh = $(window).height();
        let et = $('.nums-list').offset().top + 50;
        let eh = $('.nums-list').outerHeight();
        let dh = $(document).height();
        if (wt + wh >= et || wh + wt == dh || eh + et < wh) {
          isAnim = 1;
          $('.js-anim-numbers').addClass('_show')
          $('.js-anim-numbers').delay(800).spincrement({
            thousandSeparator: "",
            duration: 3500
          });
        }
      };
      $(window).scroll(function () {
        if (!isAnim) {
          scrollTracking();
        }
      });
    }

    
  

})

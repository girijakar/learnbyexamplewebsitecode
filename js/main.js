$(document).ready(function () {
      // Init Sidenav
      $('.button-collapse').sideNav();

      // Init Scrollspy
      $('.scrollspy').scrollSpy();
      $('.parallax').parallax();

      // ScrollFire
      const options = [
        {
          selector: '.main-text', offset: 0, callback: function (el) {
            Materialize.fadeInImage($(el));
          }
        },
        {
          selector: '.navbar-fixed', offset: 1500, callback: function () {
            $('nav').removeClass('transparent');
            $('nav').addClass('blue-grey darken-3');
          }
        }
      ];

      Materialize.scrollFire(options);
        $('.dropdown-button').dropdown({
        constrainWidth: true,
        hover: true,
        belowOrigin: true,
        alignment: 'left'
      });

    });
    $(document).ready(function () {

      // Init Slider
      $('.slider').slider({
        indicators: false,
        height: 500,
        transition: 500,
        interval: 6000
      });

      // Autocomplete
      $('.autocomplete').autocomplete({
        data: {
          "Aruba": null,
          "Cancun Mexico": null,
          "Hawaii": null,
          "Florida": null,
          "California": null,
          "Jamaica": null,
          "Europe": null,
          "The Bahamas": null,
        }
      });

    });
    document.onkeydown = function(ev)
    {
         var key;
         ev = ev || event;
         key = ev.keyCode;
         if(key == 37 || key == 38 || key == 39 || key == 40)
        {

           ev.cancelBubble = true;
           ev.returnValue = false;
        }

    }
     $('.modal').modal({
        dismissible: true,
        inDuration: 300,
        outDuration: 200,
        ready: function (modal, trigger) {
          console.log('Modal Opened', modal, trigger);
        }
      });
      
      
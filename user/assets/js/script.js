(function ($) {
	var allfunction = {
		slider : ()=>{
            $(".banner-area").owlCarousel({
                items:1,
                loop:true,
                nav:false,
                autoplay:true,
                autoplayTimeout:4000,
                animateIn: 'fadeIn',
                dots:false,
              });
        },
        popUpVideo : () =>{
            $('.popup-video').magnificPopup({
                  type: 'iframe'
              });
      },

      dataTable : () =>{
            $('#example').DataTable({
          responsive: false,
          "paging": false,
          "info": false,
                  "searching": false,				
      });
      },
		init: function () {
            allfunction.slider();
            allfunction.popUpVideo();
            allfunction.dataTable();
		},
	}
	$(document).ready(function () {
		allfunction.init();
	});
})(jQuery);


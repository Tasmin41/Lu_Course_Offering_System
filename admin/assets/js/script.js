
(function ($) {
	var allfunction = {


		elemntCatSLider: () => {
			$('.menuitem').on("click",function () {
				$(this).siblings().slideToggle().parents().siblings().children('.submenu').slideUp();
			}),
            $('.submenuitem').on("click",function () {
				$(this).siblings().slideToggle().parents().siblings().children('.submenuitem-child').slideUp();
			});
		},
		dataTable : () =>{
            $('#example').DataTable({
          responsive: false,
          "paging": true,
          "info": false,
        	"searching": true,				
      });
      },

		aosEnimation:() =>{
			AOS.init({
				once :true,	
			});
		},
		init: function () {

			allfunction.elemntCatSLider();
			allfunction.dataTable();
		},
	}
	$(document).ready(function () {
		allfunction.init();
	});
})(jQuery);

    
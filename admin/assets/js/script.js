
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
		  "pageLength": 50,
          "paging": true,
          "info": false,
        	"searching": true,	
			"pageLength": 50,
			"lengthMenu": [ 10, 25, 50, 75, 100 ],
			"ordering": false			
      });
      },

		aosEnimation:() =>{
			AOS.init({
				once :true,	
			});
		},
		// preventEvent:()=>{
		// 	$('.btn-default').click(function(e){
		// 		e.preventDefault();
		// 	});
		// },
		init: function () {

			allfunction.elemntCatSLider();
			allfunction.dataTable();
			// allfunction.preventEvent();
		},
	}
	$(document).ready(function () {
		allfunction.init();
	});
})(jQuery);



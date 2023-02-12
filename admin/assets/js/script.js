
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


/*Download pdf*/
$(document).ready(function(){
	$('#downloadPDF').click(function () {
domtoimage.toPng(document.getElementById('all_teacher_table'))
.then(function (blob) {
	var pdf = new jsPDF('l', 'pt', [$('#all_teacher_table').width(), $('#all_teacher_table').height()]);

	pdf.addImage(blob, 'PNG', 0, 0, $('#all_teacher_table').width(), $('#all_teacher_table').height());
	pdf.save("test.pdf");
	that.options.api.optionsChanged();
});
});
});

/*teacher course calculation starts from here*/
const tableList = document.querySelectorAll(".teacher");
const creditList = document.querySelectorAll(".credit");
const courseList = document.querySelectorAll(".courses");
const regularCourseList = document.querySelectorAll(".regular-class");
const extraClassList = document.querySelectorAll(".extra-class");
const totalCourseList = document.querySelectorAll(".total-class");

for (let i = 0; i < tableList.length; i++) {
var credit=0;credit =parseInt(credit); 
var courses=0;courses =parseInt(courses);

var noOfrowTeacher = tableList[i].rows.length;
for(var j = 1; j <noOfrowTeacher - 2; j++)
{
credit = credit + parseInt(tableList[i].rows[j].cells[3].innerHTML);
courses = courses + parseInt(tableList[i].rows[j].cells[4].innerHTML);
}
creditList[i].innerHTML = credit;
courseList[i].innerHTML = courses;

var regularCourse = regularCourseList[i].innerHTML;
var totalExtraClass = regularCourse - courses;

if(totalExtraClass >=0){
extraClassList[i].innerHTML = "No Extra Class";
}
else{
extraCourse =Math.floor((Math.abs(totalExtraClass))/42);

var extraClass =Math.floor(((Math.abs(totalExtraClass))/42 - extraCourse)*42);

extraClassList[i].innerHTML =extraCourse +  " courses " + extraClass + " Classes";
}

var totalCourse = Math.floor(courses/42);
var totalClass =Math.ceil(((courses/42) - totalCourse)*42);

totalCourseList[i].innerHTML=totalCourse + " Courses " + totalClass + " Classes";
}

/*Total course + extra course calculation starts from here*/


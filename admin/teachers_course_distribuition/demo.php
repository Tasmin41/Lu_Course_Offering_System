<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery Get Multiple Selected Option Value</title>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function() {
//     $('.country option').each(function() {
//     if ($(this).prop("selected") == true)
//        alert('this option is selected');
//      else
//        alert('this is not');
// });
$('.myForms').submit(function () {
    console.log("Submiited");
    return true;
})

$("#clickMe").click(function () {
    $(".myForms").trigger('submit'); // should show 3 alerts (one for each form submission)
});
});
function submit(){
  let forms = document.getElementsByClassName("form");
  for(var i =0; i < forms.length; i++){
    // $name = $_POST['name'];
	// console.log($name);
    forms[i].submit();
  }
}
</script>
</head>
<body>
<form class="form" id="form1" action=”” method=”POST”>
    <input type="text" name="name"/>
</form>
<form class="form" id="form2" action=”” method=”POST”>
<input type="text" name="name"/>
</form>
<form class="form" id="form3" action=”” method=”POST”>
<input type="text" name="name"/>
</form>
<button id="submit" type="submit" onclick="submit()" name="submit_changes">Save Changes</button>

</body>
</html>
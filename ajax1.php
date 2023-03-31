<!DOCTYPE html>
<html>
    <head>
</head>

<body>
<form action="ajax1.php">
CONTROL ID : <input type="text" id="controlid" oninput="studentinfo()"><br>
NAME : <input type="text" id="namee" READONLY style="width:50%"><br>
DEPARTMENT : <input type="text" id="departmet" style="width:50%"><br>
YEAR : <input type="text" id="year"><br>
DIVISION : <input type="text" id="divsion"><br>
ROLL NUMBER : <input type="text" id="roll">
<input type="submit" value="submit">
<div id="rse">
</div>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
function studentinfo(){
	var le=document.getElementById("controlid").value;
	$.ajax({
        type: 'POST',
        url: 'cajax.php',
        data: 'ctrlid=' + $('#controlid').val(),
        success: function(data) {
			let name_set = $('#set_name').val();
			$('#namee').val(data);
			console.log(data);
			console.log(name_set);
			
        },
        error: function() {
            console.log(response.status);
        },
    })
	



$.ajax({
        type: 'POST',
        url: 'cajax.php',
        data: 'ctrlid1=' + $('#controlid').val(),
        success: function(data) {
			let name_set = $('#set_name').val();
			$('#departmet').val(data);
			console.log(data);
			console.log(name_set);
        },
        error: function() {
            console.log(response.status);
        },
    })


	$.ajax({
        type: 'POST',
        url: 'cajax.php',
        data: 'ctrlid2=' + $('#controlid').val(),
        success: function(data) {
			let name_set = $('#set_name').val();
			$('#year').val(data);
			console.log(data);
			console.log(name_set);
        },
        error: function() {
            console.log(response.status);
        },
    })

	$.ajax({
        type: 'POST',
        url: 'cajax.php',
        data: 'ctrlid3=' + $('#controlid').val(),
        success: function(data) {
			let name_set = $('#set_name').val();
			$('#divsion').val(data);
			console.log(data);
			console.log(name_set);
        },
        error: function() {
            console.log(response.status);
        },
    })

	$.ajax({
        type: 'POST',
        url: 'cajax.php',
        data: 'ctrlid4=' + $('#controlid').val(),
        success: function(data) {
			let name_set = $('#set_name').val();
			$('#roll').val(data);
			console.log(data);
			console.log(name_set);
        },
        error: function() {
            console.log(response.status);
        },
    })
}


	</script>






</body>
</html>
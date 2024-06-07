<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Show/Hide div on dropdown value change</title>

<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-font-smoothing: antialiased;
    -moz-font-smoothing: antialiased;
    -o-font-smoothing: antialiased;
    font-smoothing: antialiased;
    text-rendering: optimizeLegibility;
}
body {
    font-family: "Roboto", Helvetica, Arial, sans-serif;
    font-weight: 100;
    font-size: 12px;
    line-height: 30px;
    color: #777;
}
.container {
    max-width: 400px;
    width: 100%;
    margin: 0 auto;
    position: relative;
}
#contForm input[type="text"], #contForm input[type="date"], #contForm select, #contForm button[type="submit"] {
    font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
}
#contForm {
    background: #F9F9F9;
    padding: 25px;
    margin: 150px 0;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
#contForm h3 {
    display: block;
    font-size: 26px;
    font-weight: 300;
    margin-bottom: 10px;
    text-align: center;
}
#contForm h4 {
    margin: 5px 0 15px;
    display: block;
    font-size: 13px;
    font-weight: 400;
}
fieldset {
    border: medium none !important;
    margin: 0 0 10px;
    min-width: 100%;
    padding: 0;
    width: 100%;
}
#contForm input[type="text"], #contForm input[type="date"], #contForm select {
    width: 100%;
    border: 1px solid #ccc;
    background: #FFF;
    margin: 0 0 5px;
    padding: 10px;
}
#contForm input[type="text"]:hover, #contForm input[type="date"]:hover, #contForm select:hover {
    -webkit-transition: border-color 0.3s ease-in-out;
    -moz-transition: border-color 0.3s ease-in-out;
    transition: border-color 0.3s ease-in-out;
    border: 1px solid #aaa;
}
#contForm button[type="submit"] {
    cursor: pointer;
    width: 100%;
    border: none;
    background: #df3812;
    color: #FFF;
    margin: 0 0 5px;
    padding: 10px;
    font-size: 15px;
}
#contForm button[type="submit"]:hover {
    background: #be2907;
    -webkit-transition: background 0.3s ease-in-out;
    -moz-transition: background 0.3s ease-in-out;
    transition: background-color 0.3s ease-in-out;
}
#contForm button[type="submit"]:active {
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}
.copyright {
    text-align: center;
}
#contForm input:focus {
    outline: 0;
    border: 1px solid #aaa;
}

::-webkit-input-placeholder {
color: #888;
}

:-moz-placeholder {
color: #888;
}

::-moz-placeholder {
color: #888;
}

:-ms-input-placeholder {
color: #888;
}
	.hidden{
		display: none;
	}
	.show{
		display: block;
	}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<div class="container">
	<form id="contForm" action="" method="">
	<h3>Show/Hide div on dropdown value change</h3>
		<h4>Do you have a passport? Kindly fill the details.</h4>
		<fieldset>
		<select name="passport" id="passport" class="passport">
			<option value="" selected>-Select-</option>
			<option value="Yes">Yes</option>
			<option value="No">No</option>
			</select>
		</fieldset>
		<div class="hidden" id="pDetails">
		<fieldset>
		<input type="text" name="passportNumber" required placeholder="Passport Number">
		</fieldset>
		<fieldset>
		<input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg" />
		</fieldset>
			</div>
		<fieldset>
		<button name="submit" type="submit" id="contact-submit">Submit</button>
		</fieldset>
	</form>
	</div>
	
	<script>
	$('.passport').change(function(){
		var responseID = $(this).val();
		if(responseID =="Yes"){
			$('#pDetails').removeClass("hidden");
			$('#pDetails').addClass("show");
		} else{
			$('#pDetails').removeClass("show");
			$('#pDetails').addClass("hidden");
		}
		console.log(responseID);
	});
	</script>
	
</body>
</html>
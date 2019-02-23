<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a id="logo-header" href="#">
<img src="https://lh3.googleusercontent.com/KuR1UQu-SeWcoChNjaYsUJJGJSCG7XrKRiX0HHTub8t2M1sDHGLfkFwVVVy1c1gw0P7Q-CVulg=w480-h270-p-rw" />
<form class='contacto'>
			<div><label>Tu Nombre:</label><input type='text' value=''></div>
			<div><label>Tu Email:</label><input type='text' value=''></div>
			<div><label>Asunto:</label><input type='text' value=''></div>
			<div><label>Mensaje:</label><textarea rows='6'></textarea></div>
			<div><input type='submit' value='Envia Mensaje'></div>
		</form>
</body>
<style>
*{
	font-family: sans-serif;
	font-size: 12px;
	color: #798e94;
}
body{
	width: 400px;
	margin: auto;
	background-color: #E2ECEE;
}
.contacto{
	border: 1px solid #CED5D7;
	border-radius: 6px;
	padding: 45px 45px 20px;
	margin-top: 50px;
	background-color: white;
	box-shadow: 0px 5px 10px #B5C1C5, 0 0 0 10px #EEF5F7 inset;
}
.contacto label{
	display: block;
	font-weight: bold;
}
.contacto div{
	margin-bottom: 15px;
}
.contacto input[type='text'], .contacto textarea{
	padding: 7px 6px;
	width: 294px;
	border: 1px solid #CED5D7;
	resize: none;
	box-shadow:0 0 0 3px #EEF5F7;
	margin: 5px 0;
}
.contacto input[type='text']:focus, .contacto textarea:focus{
	outline: none;
	box-shadow:0 0 0 3px #dde9ec;
}
.contacto input[type='submit']{
	border: 1px solid #CED5D7;
	box-shadow:0 0 0 3px #EEF5F7;
	padding: 8px 16px;
	border-radius: 20px;
	font-weight: bold;
	text-shadow: 1px 1px 0px white;

	background: #e4f1f6;
	background: -moz-linear-gradient(top, #e4f1f6 0%, #cfe6ef 100%);
	background: -webkit-linear-gradient(top, #e4f1f6 0%,#cfe6ef 100%);
}
.contacto input[type='submit']:hover{
	background: #edfcff;
	background: -moz-linear-gradient(top, #edfcff 0%, #cfe6ef 100%);
	background: -webkit-linear-gradient(top, #edfcff 0%,#cfe6ef 100%);
}
.contacto input[type='submit']:active{
	background: #cfe6ef;
	background: -moz-linear-gradient(top, #cfe6ef 0%, #edfcff 100%);
    background: -webkit-linear-gradient(top, #cfe6ef 0%,#edfcff 100%);
}
    #logo-header {
	float: left;
	padding: 15px 0 0 20px;
	text-decoration: none;
}
	#logo-header:hover {
		color: #0b76a6;
	}

	#logo-header .site-name {
		display: block;
		font-weight: 700;
		font-size: 1.2em;
	}

	#logo-header .site-desc {
		display: block;
		font-weight: 300;
		font-size: 0.8em;
		color: #999;
    }
}</style>
</html>

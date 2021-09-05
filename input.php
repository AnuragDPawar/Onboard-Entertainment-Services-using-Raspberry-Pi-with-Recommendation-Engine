<?php
session_start();
$userid = $_SESSION['userid'];
?>

<html>
<head> <h1> <font face="verdana" color="white">Please help us to deliver you the best content by submitting your interests.</font> </h1> </head>
<style>
/* The container */
.container {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default checkbox */
.container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom checkbox */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
    display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);

.button {
     background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;

	
}

</style>
<body background = images/5549c4471c049_thumb900.jpg>

<form action="process3.php" method="post">

<h1><font face="verdana" color="white">What kind of movies do you like?</font></h1><br />
<label class="container"><input type="checkbox" name="formDoor[]" value="Action" /><font face="verdana" color="white">Action</font><br /> <span class="checkmark"></span></label>

<label class="container"><input type="checkbox" name="formDoor[]" value="Drama" /><font face="verdana" color="white">Drama</font><br /> <span class="checkmark"></span></label>

<label class="container"><input type="checkbox" name="formDoor[]" value="Romance" /><font face="verdana" color="white">Romance</font><br /> <span class="checkmark"></span></label>

<label class="container"><input type="checkbox" name="formDoor[]" value="Sci-Fi" /><font face="verdana" color="white">Sci-Fi</font><br /> <span class="checkmark"></span></label>

<label class="container"><input type="checkbox" name="formDoor[]" value="Comedy" /><font face="verdana" color="white">Comedy</font><br/> <span class="checkmark"></span></label>


<label class="button"><input type="submit" name="formSubmit" value="Submit"/></button>



</form>
<!-- footer -->
			<?php include("footer.php");

			?> 
			<!-- //footer -->

</body>
</html>
<?php
session_start();
?>

<html>
<style>
.button {
     background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 50px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;

}

.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

</style>

<body background = images/image113.jpg>

<form action="input.php" method="post">
<br><br><br><br><br><br><br><br><br><center><button class="button button2">START</button></center></br></br></br></br></br></br></br></br></br>

								
</form>
<?php
$userid=mt_rand();
$_SESSION['userid'] = $userid;

?>

 

</body>
</html>
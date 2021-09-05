<?php
session_start();
$userid = $_SESSION['userid'];

?>

<?php
$movies = $_POST['formDoor'];
$genres = $_POST['formDoor1'];
$user_profile = array(0,0,0,0,0);
$o_profile = array(0,0,0,0,0);
/*if(empty($movies))
{
echo "<br>";
echo "<br>";
echo("You didn't select any movie category.");
echo "<br>";
}

else
{
$N = count($movies);
echo("\nYou selected $N category(ies): ");
echo "<br>";

    for($i=0; $i < $N; $i++)

    {

      echo($movies[$i] . " ");
	  echo "<br>";

    }*/
$N = count($movies);
for($i=0; $i < $N; $i++)
{
	if($movies[$i]=="Action")
	{$user_profile[0]=7.5;  
$o_profile[0]=7.5;}

	if($movies[$i]=="Drama")
	{$user_profile[1]=7.5;
	$o_profile[1]=7.5;}
	
	if($movies[$i]=="Romance")
	{$user_profile[2]=7.5;
$o_profile[2]=7.5;}
	
	if($movies[$i]=="Sci-Fi")
	{$user_profile[3]=7.5;
	$o_profile[3]=7.5;}

	if($movies[$i]=="Comedy")
	{$user_profile[4]=7.5;
	$o_profile[4]=7.5;}
}
	


/*for($i=0; $i <5; $i++)

    {

      echo($user_profile[$i] . "  ,");

    }


  


if(empty($genres))
{
echo "<br>";
echo "<br>";
echo("You didn't select any genres.");

}

else
{
$P = count($genres);
 echo "<br>";
echo "<br>";
echo("\nYou selected $P genre(s): ");
echo "<br>";


    /*for($i=0; $i < $P; $i++)

    {

      echo($genres[$i] . " ");
	  echo "<br>";

    }
*/
$ct=0;
$_SESSION['user_profile']=$user_profile;
$_SESSION['o_profile']=$o_profile;
$_SESSION['ct']=$ct;

header("Location: home.php");
?>


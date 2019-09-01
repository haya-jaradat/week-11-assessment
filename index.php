
<?php
/* Question 1 : Write a PHP script to display names and the salaries amounts, within a table. ou should use `echo ` to generate your table. */
//////////////////////// Your Code Here /////////////////////

<?php 

$name1= "Ais";
$name2= "B";
$salary1 = 200$;
$salary2 = 700$;

echo <<< _END
<td>
 <tr>"Salary for .$name1 </tr>
 <tr> $salary1 </tr>
</td>

<td>
 <tr>"Salary for .$name2 </tr>
 <tr> $salary2 </tr>
</td>

_END;

?>



/*Question 2 : Write a PHP script which displays the capital and country name from the below array $c. as unordered list after sorting the array list by countries names  */
//////////////////////// Your Code Here /////////////////////

  <?php

$countries = array( "Italy"=>"Rome",
              "Luxembourg"=>"Luxembourg",
               "Belgium"=> "Brussels",
               "Denmark"=>"Copenhagen",
               "Finland"=>"Helsinki",
               "France" => "Paris",
               "Slovakia"=>"Bratislava" ) ;

   sort($countries) ;
foreach ($countries as $country => $capital){      
{
    <li>
echo "The capital of $country is $capital"."\n" ;
    </li>
}
    
              

?>

/*Question 3 : Write a script to build the following stars pattern, using a nested for loop.

*
* *
* * *
* * * *
* * * * *
* * * * *
* * * *
* * *
* *
*

*/

<?php

for ($i = 0 ; $i <= 10; $i++ ){
   for ($j = 0; $j <= $i; $j--){

echo "*" 

    }
}

?>

// /*Question 4 : Write a PHP script to calculate the difference between two dates.
// Input : 1981-11-04, 2013-09-04
// Output : 31 years, 10 months, 11 days

<?php
$date1 = 1981-11-04;
$date2 = 2013-09-04;



?>

/*Question 5 : Create a simple HTML form that accept the user name after submitting display the name 
using PHP echo statement under the form. */

<?php

<form>
 <input type="text" name="name">
 <input type="submit" value="Submit">
 </form>

$name = $_POST['name'];
echo "<h1> $name </h1>";


?>

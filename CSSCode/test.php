<?php

//Procedural style
$connection = mysqli_connect('rerun', 'potiro', 'pcXZb(kL', 'poti');
if(!$connection)
die("Could not connect Server!");

$made_after = $_REQUEST['earliest_made'];
$made_before = $_REQUEST['latest_made'];

$query_string = "select * from films where (year>=$made_after and
 year <= $made_before)";
 
$result=mysqli_query($connection,$query_string);
 
$num_rows=mysqli_num_rows($result);
echo "Displaying the results using associative array";

//using associative array
// mysqli_fetch_assoc: This function will return a row as an associative array where the column names will be the keys storing corresponding value.
if ($num_rows > 0 ) {
    print "<table border='0'>";
    while($a_row = mysql_fetch_assoc($result)){
        print "<tr>\n";
        print "<td>$a_row[film_id]</td>";
        print "<td>$a_row[title]</td>";
        print "<td>$a_row[year]</td>";
        print "</tr>";

    }

    
	//write the code here to get values using associative array
    print "</table>";
}
 
mysqli_close($connection);


?>
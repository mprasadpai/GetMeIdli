<?php
require_once('visitors_connections.php');//the file with connection code and functions

$result = mysqli_query($visitors,"SELECT * FROM order");
echo 'Total orders : '.$result->num_rows;


function showVisitors($visitors)
{

$result = mysqli_query($visitors,"SELECT * FROM orders order by ID DESC limit 5");
echo '<table style="width:100%; border:1px dashed #CCC" cellpadding="3">
<tr>
<td style="width:15%;border-bottom:1px solid #CCC">ID</td>
<td style="width:15%;border-bottom:1px solid #CCC">Date</td>
<td style="width:15%;border-bottom:1px solid #CCC">Time</td>
</tr>';


while($row_visitors = mysqli_fetch_array($result)) {
 echo '<tr>
        <td>'.$row_visitors['ID']'</td>
        <td>'.$row_visitors['Name']''</td>
        <td>'.$row_visitors['Email']'</td>
        <td>'.$row_visitors['Number']'</td>
        <td>'.$row_visitors['Location']'</td>
        <td>'.$row_visitors['Phone']'</td>
       </tr>';
}
mysqli_close($visitors);

echo'</table>';

}



/* paginate($start,$limit,$result->num_rows,"display_visits.php",""); */


?>

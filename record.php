<?php 

include 'database.php';


    // $sid=$_POST['sid'];
  	// $sname=$_POST['sname'];
  	// $mob=$_POST['mob'];
    
    $q="SELECT * FROM stud";
    $result = $con->query($q);
	$num_rows = mysqli_num_rows($result);
  	if ($num_rows > 0) 
	{
	?><div id="printableArea">
   
		<table border="2">
  		<thead>
    	<tr>
      	<th>No</th>
      	<th>Name</th>
      	<th>mob</th>
		<th>Action</th>
		<th>Action</th>
		<th>Action</th>
    	</tr>
 	 	</thead>
  		<tbody>
	<?php
   
    // output data of each row
    	while($row = mysqli_fetch_assoc($result)) 
		{
       	 echo "<tr>
		 <td>".$row["sid"]."</td>
		 <td>".$row["sname"]." </td>	
		 <td>".$row["mob"]."</td>
		 <td><a href=update.php?sid=".$row["sid"].">Edit</a></td>	 
        <td><a href=delete.php?sid=".$row["sid"].">delete</a></td>
		<td><a href=view.php?sid=".$row['sid'].">view</a></td>

		 </tr>";
		 
    	}

    	?>
		<a href=insert.php>Add New Record</a>
		</br>
	

  		</tbody>
		</table>
	</div>
	<?php
			} 
	else 
	{
        ?>
		<a href=insert.php>Add New Record</a><br>

        <?php
   		 echo "0 results";
	}
  	   


?>

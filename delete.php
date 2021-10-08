
<?php
include 'database.php';


$sid = $_GET['sid'];
echo "update record no: $sid";
$q = "SELECT * FROM stud WHERE sid = '$sid'";
// var_dump($q);
$result = $con->query($q);
while ($row = $result->fetch_assoc()) {
    $sname = $row['sname'];
    $mob = $row['mob'];
}


?>


<form id="form1" name="form1" method="post" action="">

    <table width="200" border="1">
        <tr>
            <td>sid</td>
            <td><label>
                    <input name="sid" type="text" id="sid" size="5" value="<?php echo  $sid; ?>" />
                </label></td>
        </tr>
        <tr>
            <td>sname</td>
            <td><label>
                    <input name="sname" type="text" id="sname" value="<?php echo  $sname; ?>" />
                </label></td>
        </tr>

        <tr>
            <td>mob</td>
            <td><label>
                    <input name="mob" type="text" id="mob" size="10" value="<?php echo  $mob; ?>" />
                </label></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><label>
                    <input name="save" type="submit" id="Delete" value="Delete" />
                </label></td>
        </tr>
    </table>
</form>


<?php


if(isset($_POST['save']))
  {
  	$sid=$_POST['sid'];
  	$sname=$_POST['sname'];
  	$mob=$_POST['mob'];
 
      $q = "DELETE FROM stud WHERE sid = '$sid'" ;	
      if ($con->query($q) === true) {
    //    echo "thai gayu oyye";
        header('Location: record.php');
    } else {
        echo " ERROR " . $sql . "<br>" . $con->error;
    }
	}//save


?>
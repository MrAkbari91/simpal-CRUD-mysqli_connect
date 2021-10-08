<form id="form1" name="form1" method="post" action="">
    <table width="200" border="1">
        <tr>
            <td>sid</td>
            <td><label>
                    <input name="sid" type="text" id="sid" size="5" />
                </label></td>
        </tr>
        <tr>
            <td>sname</td>
            <td><label>
                    <input name="sname" type="text" id="sname" />
                </label></td>
        </tr>
        
        <tr>
            <td>mob</td>
            <td><label>
                    <input name="mob" type="text" id="mob" size="10" />
                </label></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><label>
                    <input name="add" type="submit" id="add" value="add" />
                </label></td>
        </tr>
    </table>

</form>



<?php


include 'database.php';


$f = true;
if (isset($_POST['add'])) {
    $sid = $_POST['sid'];
    $sname = $_POST['sname'];
    $mob = $_POST['mob'];
    if (strlen($sid) <= 0) {
        echo "enter value for student number<br>";
        $f = false;
    }
    if (strlen($sname) <= 0) {
        echo "enter value for student name<br>";
        $f = false;
    }

    if (strlen($mob) <= 0) {
        echo "enter value for student mobile number<br>";
        $f = false;
    }

    if ($f == true) {
        $q = "INSERT INTO stud (sid,sname,mob) VALUES ('$sid','$sname','$mob')";
         if ($con->query($q) === true) {
            //echo "thai gayu oyye";
            header('Location: record.php');
        } else {
            echo " ERROR " . $sql . "<br>" . $con->error;
        }
    }
}
?>
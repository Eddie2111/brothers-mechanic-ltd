<?php
    require 'components/head.php';
    require 'components/adminnav.php';

$email = $_GET['id'];
include '../model/db.php';
$sql = "SELECT * FROM appointment where email = '$email'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);

if ($num > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "
        <center>
        <p> Modify Mechanic For Appointment of ".$row['firstName']." ".$row['lastName']."</p>
        <tr class='tr'>
            <p>First Name → ".$row['firstName']."</td>
            <p>Last Name → ".$row['lastName']."</td>
            <p>Email → ".$row['email']."</td>
            <p>Phone Number → ".$row['phoneNumber']."</td>
            <p>Vehicle Type → ".$row['vehicleType']."</td>
            <p>Vehicle Year → ".$row['vehicleYear']."</td>
            <p>Vehicle Model → ".$row['vehicleModel']."</td>
            <p>Appointment Date → ".$row['appointmentDate']."</td>
            <p>Assigned Mechanic → ".$row['mechanic']."</td>
        </tr>";
    }
} else {
    echo "0 results";
}
?>
<p> Change mechanic </p>
<form method="POST" action="../controller/changeMechanic.php">
    <input type="hidden" name="email" value="<?php echo $email; ?>">
    <select name="mechanic" id="mechanic">
        <option value="mechanic1">Mechanic 1</option>
        <option value="mechanic2">Mechanic 2</option>
        <option value="mechanic3">Mechanic 3</option>
    </select>
    <button type="submit" class="button">Update</button>
</form>

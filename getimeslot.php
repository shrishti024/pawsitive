<?php
include "connection.php";
$vet = $_REQUEST['q'];
$dt = $_REQUEST['d'];

$select = "select morning,evening from vet where email='$vet'";
$res = mysqli_query($conn, $select);
$row = mysqli_fetch_array($res);
$mrng = $row[0];
$eve = $row[1];
$marr = explode("-", $mrng);
$mstart = $marr[0];
$mend = $marr[1];
$count = 0;
$slotarray = [];
while ($mstart < $mend) {
    $slotarray[$count] = $mstart . ":00";
    $count++;
    $slotarray[$count] = $mstart . ":30";
    $count++;
    $mstart++;
}
$slotarray[$count] = $mend;
$earr = explode("-", $eve);
$estart = $earr[0];
$eend = $earr[1];
while ($estart < $eend) {
    $slotarray[$count] = $estart . ":00";
    $count++;
    $slotarray[$count] = $estart . ":30";
    $count++;
    $estart++;
}
$slotarray[$count] = $eend;
//print_r($slotarray);
//$getprevslot = "select max(app_id),time_slot from appointment where vet_email='$vet' and app_date='$app_date'";
$newid=0;
$getprevslot = "select max(app_id),time_slot from appointment where vet_email='$vet' and app_date='$dt'";
//echo $getprevslot;
$gpsres = mysqli_query($conn, $getprevslot);
if(mysqli_num_rows($gpsres)){
    $gpsrow=mysqli_fetch_array($gpsres);
    for ($k = 0; $k < count($slotarray); $k++) {
        if ($slotarray[$k] == $gpsrow['time_slot']) {
            $newid = $k + 1;
            $availtimeslot = $slotarray[$newid];
            //echo $availtimeslot;
        }
        else{
            $availtimeslot = $slotarray[$newid];
            //echo $availtimeslot;
            //$availtimeslot = $slotarray[0];
        }
    }
}
else{
    $availtimeslot = $slotarray[$newid];
}
echo $availtimeslot;
?>
<input type="hidden" name="timeslot" value="<?php echo $availtimeslot ?>"/>

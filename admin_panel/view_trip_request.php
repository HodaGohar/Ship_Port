<?php
@include 'connect.php';

$select = mysqli_query($conn,"SELECT r.firstName, r.email,  r.number as userNumber, t.companyName , t.number as companyNumber, t.address, t.destinationPort, tr.paymentStatus, tr.tripStatus, r.registerID, t.tripID, tr.tripRequestID
FROM tripRequest tr
JOIN registration r ON tr.registerID = r.registerID
JOIN trips t ON tr.tripID = t.tripID
WHERE tr.tripRequestID = $tripRequestID");

$data = array();

while($row = mysqli_fetch_assoc($select)){
    $trip_request_data[] = $row;
}

echo json_encode($trip_request_data);
mysqli_close($conn);
?>
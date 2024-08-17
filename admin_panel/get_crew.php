<?php
@include 'connect.php';

if (isset($_GET['crewID'])) {
    $crewID = $_GET['crewID'];
    $query = "SELECT * FROM crew WHERE crewID = '$crewID'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
        echo json_encode($data);
    } else {
        echo json_encode(['error' => 'Crew member not found.']);
    }
} else {
    echo json_encode(['error' => 'No crew ID provided.']);
}
?>

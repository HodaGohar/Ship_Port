<?php
@include 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="dashboard">
    <div class="menu">
            <ul>
                <li class="profile">
                    <div class="img-box">
                        <img src="images/logo1.png" alt="profile">
                    </div>
                    <h2>Ocean haven admin</h2>
                </li>
                <li>
                    <a class="active" href="#">
                       <i class="fas fa-home"></i>
                       <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="crew_admin.html">
                       <i class="fa-solid fa-users"></i>
                       <p>Crew</p>
                    </a>
                </li>
                <li>
                    <a href="ships_admin.html">
                       <i class="fas fa-ship"></i>
                       <p>ships</p>
                    </a>
                </li>
                <li>
                    <a href="arrivals_admin.html">
                       <i class="fa-solid fa-anchor"></i>
                       <p>Ship Arrivals</p>
                    </a>
                </li>
                <li>
                    <a href="cargo_admin.php">
                       <i class="fa-solid fa-dolly"></i>
                       <p>cargo </p>
                    </a>
                </li>
                <li>
                    <a href="trips_admin.php">
                        <i class="fa-solid fa-ticket"></i>
                        <p>book trips</p>
                    </a>
                </li>
                <li>
                    <a href="trip_request_admin.php">
                        <i class="fas fa-paper-plane"></i>
                        <p>book trips</p>
                    </a>
                </li>
                <li>
                    <a href="service_admin.php">
                       <i class="fa-solid fa-cogs"></i>
                       <p>sevices </p>
                    </a>
                </li>
                <li>
                    <a href="user_admin.php">
                       <i class="fas fa-user"></i>
                       <p>users </p>
                    </a>
                </li>
                <li>
                    <a href="contact_admin.php">
                        <i class="fa-solid fa-message"></i>
                         <p>contact</p>
                    </a>
                </li>

                <li class="log-out">
                    <a href="../registration/login_form.html">
                       <i class="fas fa-sign-out-alt"></i>
                       <p>Log out</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
     <div class="content">
        <div class="title-info">
            <p>Dashboard</p>
            <i class="fas fa-home"></i>
        </div>
        <div class="data-info">
            <div class="box">
                <i class="fas fa-user"></i>
                <div class="data">
                    <p>users</p>
                    <span>500</span>
                </div>
            </div>
            <div class="box">
                <i class="fa-solid fa-users"></i>
                <div class="data">
                    <p>crew</p>
                    <span>100</span>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-ship"></i>
                <div class="data">
                    <p>ships</p>
                    <span>50</span>
                </div>
            </div>
            <div class="box">
                <i class="fa-solid fa-anchor"></i>
                <div class="data">
                    <p>ship arrivals</p>
                    <span>90</span>
                </div>
            </div>
            <!-- <div class="box">
                <i class="fa-solid fa-bookmark"></i>
                <div class="data">
                    <p>Shipping book</p>
                    <span>40</span>
                </div>
            </div>
            <div class="box">
                <i class="fa-solid fa-dolly"></i>
                <div class="data">
                    <p>cargo</p>
                    <span>15000</span>
                </div>
            </div>
            <div class="box">
                <i class="fa-solid fa-money-check-dollar"></i>
                <div class="data">
                    <p>payment</p>
                    <span>1000</span>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-dollar"></i>
                <div class="data">
                    <p>revenue</p>
                    <span>100000</span>
                </div>
            </div> -->
            <!-- <div class="box">
                <i class="fa-solid fa-envelope"></i>
                <div class="data">
                    <p>contact</p>
                    <span>us</span>
                </div>
            </div>
            <div class="box">
                <i class="fa-solid fa-star"></i>
                <div class="data">
                    <p>exclusive</p>
                    <span>services</span>
                </div>
            </div> -->
        </div>
        <h3 class="table-name">ships table</h3>
        <?php
            $select = mysqli_query($conn, "SELECT * FROM ships");
             ?>
              <div class="crew-display">
                 <table class="crew-display-table">
                     <thead>
                         <tr>
                             <th>ship image</th>
                             <th>ship name</th>
                             <th>ship type</th>
                             <th>max capacity</th>
                             <th>registration date</th>
                             <th>owner info</th>
                         </tr>
                     </thead>
                     <?php
                    while($row = mysqli_fetch_assoc($select)){
                        ?>
                        <tr>
                           <td><img src="images/<?php echo $row['shipImg'];?>" height="100" alt=""></td>
                           <td><?php echo $row['shipName'];?></td>
                           <td><?php echo $row['shipType'];?></td>
                           <td><?php echo $row['maxCapacity'];?></td>
                           <td><?php echo $row['registrationDate'];?></td>
                           <td><?php echo $row['ownerInfo'];?></td>
                           <td>
                    </tr>
                    <?php };?>
          </table>
         </div>
         <h3 class="table-name">crew table</h3>
         <?php
            $select = mysqli_query($conn, "SELECT * FROM crew");
             ?>
              <div class="crew-display">
                 <table class="crew-display-table">
                     <thead>
                         <tr>
                             <th>crew image</th>
                             <th>name</th>
                             <th>role</th>
                             <th>nationality</th>
                             <th>join date</th>
                             <th>email</th>
                         </tr>
                     </thead>
                     <?php
                    while($row = mysqli_fetch_assoc($select)){
                        ?>
                        <tr>
                           <td><img src="images/<?php echo $row['crewImg'];?>" height="100" alt=""></td>
                           <td><?php echo $row['crewName'];?></td>
                           <td><?php echo $row['role'];?></td>
                           <td><?php echo $row['nationality'];?></td>
                           <td><?php echo $row['joinDate'];?></td>
                           <td><?php echo $row['contactInfo'];?></td>
                  </tr>
                  <?php };?>
          </table>
         </div>
        <h3 class="table-name">arrivals table</h3>
        <?php
            $select = mysqli_query($conn, "SELECT * FROM shiparrivals");
             ?>
              <div class="crew-display">
                 <table class="crew-display-table">
                     <thead>
                         <tr>
                             <th>ship image</th>
                             <th>captain name</th>
                             <th>arrival date</th>
                             <th>departure date</th>
                             <th>cargo description</th>
                             <th>arrival status</th>
                             <th>berth allocated</th>
                         </tr>
                     </thead>
                     <?php
                    while($row = mysqli_fetch_assoc($select)){
                        ?>
                        <tr>
                           <td><img src="images/<?php echo $row['shipImg'];?>" height="100" alt=""></td>
                           <td><?php echo $row['captainName'];?></td>
                           <td><?php echo $row['arrivalDate'];?></td>
                           <td><?php echo $row['departureDate'];?></td>
                           <td><?php echo $row['cargoDescription'];?></td>
                           <td><?php echo $row['arrivalStatus'];?></td>
                           <td><?php echo $row['berthAllocated'];?></td>
                  </tr>
                  <?php };?>
          </table>
         </div>
          <h3 class="table-name">cargo table</h3>
          <?php
            $select = mysqli_query($conn, "SELECT * FROM cargo");
             ?>
              <div class="crew-display">
                 <table class="crew-display-table">
                     <thead>
                         <tr>
                             <th>cargo description </th>
                             <th>cargo quantity </th>
                             <th>cargo weight </th>
                             <th>container type </th>
                             <th>ship ID</th>
                         </tr>
                     </thead>
                     <?php
                    while($row = mysqli_fetch_assoc($select)){
                        ?>
                        <tr>
                           <td><?php echo $row['description'];?></td>
                           <td><?php echo $row['quantity'];?></td>
                           <td><?php echo $row['weight'];?></td>
                           <td><?php echo $row['containerType'];?></td>
                           <td><?php echo $row['shipID'];?></td>
                  </tr>
                  <?php };?>
          </table>
         </div> 
         <h3 class="table-name">services table</h3>
         <?php
             $select = mysqli_query($conn, "SELECT * FROM services");
             ?>
          <div class="crew-display">
            <table class="crew-display-table">
                <thead>
                    <tr>
                             <th>portID </th>
                             <th>icon class</th>
                             <th>service Name</th>
                             <th>Service Description</th>
                             <th>Service Price</th>
                             <th>Operating Hours</th>
                             <th>Contact Info</th>
                             <th>service status</th>
                         </tr>
                </thead>
                <?php
                               while($row = mysqli_fetch_assoc($select)){
                        ?>  
                   <tr>
                       <td><?php echo $row['portID'];?></td>
                       <td> <i class=" <?php echo $row['iconClass'];?> "></i></td>
                       <td><?php echo $row['serviceName'];?></td>
                       <td><?php echo $row['ServiceDescription'];?></td>
                       <td><?php echo $row['ServicePrice'];?></td>
                       <td><?php echo $row['OperatingHours'];?></td>
                       <td><?php echo $row['ContactInfo'];?></td>
                       <td><?php echo $row['status'];?></td>
                  </tr>
                  <?php };?>
          </table>
         </div>
         <h3 class="table-name">trip requests table</h3>
         <?php
             $select = mysqli_query($conn, "SELECT * , t.bookingDate FROM tripRequest tr JOIN trips t ON tr.tripID = t.tripID");
             ?>
          <div class="crew-display">
            <table class="crew-display-table">
                <thead>
                    <tr>
                             <th>tripID </th>
                             <th>registerID </th>
                             <th>bookingDate </th>
                             <th>paymentStatus </th>
                             <th>tripStatus </th>
                         </tr>
                </thead>
                <?php
                               while($row = mysqli_fetch_assoc($select)){
                        ?>  
                   <tr>
                        <td><?php echo $row['tripID']; ?></td>
                        <td><?php echo $row['registerID']; ?></td>
                        <td><?php echo $row['bookingDate']; ?></td>
                        <td><?php echo $row['paymentStatus']; ?></td>
                        <td><?php echo $row['tripStatus']; ?></td>
                  </tr>
                  <?php };?>
          </table>
         </div> 
         <h3 class="table-name">book trips table</h3>
         <?php
             $select = mysqli_query($conn, "SELECT * FROM trips");
             ?>
          <div class="crew-display">
            <table class="crew-display-table">
                <thead>
                    <tr>
                        <th>company name</th>
                        <th>email</th>
                        <th>phone number</th>
                        <th>address</th>
                        <th>destination port</th>
                        <th>cargo description</th>
                        <th>cargo weight</th>
                        <!-- <th>cargo quantity</th> -->
                        <th>payment method</th>
                        <th>shipping date</th>


                    </tr>
                </thead>
                <?php
                    while($row = mysqli_fetch_assoc($select)){
                        ?> 
                   <tr>
                      <td><?php echo $row['companyName'];?></td>
                      <td><?php echo $row['email'];?></td>
                      <td><?php echo $row['number'];?></td>
                      <td><?php echo $row['address'];?></td>
                      <td><?php echo $row['destinationPort'];?></td>
                      <td><?php echo $row['cargoDescription'];?></td>
                      <td><?php echo $row['cargoWeight'];?></td>
                      <!-- <td> -->
                        <?php 
                    //   echo $row['cargoQuantity'];
                      ?>
                      <!-- </td> -->
                      <td><?php echo $row['paymentMethod'];?></td>
                      <td><?php echo $row['shippingDate'];?></td>
                  </tr>
                  <?php };?>
          </table>
         </div>     
         <h3 class="table-name">users table</h3>
         <?php
             $select = mysqli_query($conn, "SELECT * FROM registration");
             ?>
              <div class="crew-display">
                 <table class="crew-display-table">
                     <thead>
                         <tr>
                             <th>first name</th>
                             <th>last name</th>
                             <th>email</th>
                             <th>phone number</th>
                             <th>password</th>
                             <th>gender</th>
                             <th>type</th>
                             <th>create date</th>
                         </tr>
                     </thead>
                     <?php
                               while($row = mysqli_fetch_assoc($select)){
                        ?>     
                        <tr>
                           <td><?php echo $row['firstName'];?></td>
                           <td><?php echo $row['lastName'];?></td>
                           <td><?php echo $row['email'];?></td>
                           <td><?php echo $row['number'];?></td>
                           <td><?php echo $row['password'];?></td>
                           <td><?php echo $row['gender'];?></td>
                           <td><?php echo $row['userType'];?></td>
                           <td><?php echo $row['createdAt'];?></td>
                  </tr>
                  <?php };?>
          </table>
         </div>                 
         <h3 class="table-name">contact table</h3>
         <?php
             $select = mysqli_query($conn, "SELECT * FROM contact");
             ?>
          <div class="crew-display">
            <table class="crew-display-table">
                <thead>
                    <tr>
                        <th>name</th>
                        <th>email </th>
                        <th>phone number </th>
                        <th>message</th>
                    </tr>
                </thead>
                <?php
                     while($row = mysqli_fetch_assoc($select)){
                        ?>
                   <tr>
                      <td><?php echo $row['name'];?></td>
                      <td><?php echo $row['email'];?></td>
                      <td><?php echo $row['number'];?></td>
                      <td><?php echo $row['message'];?></td>
                  </tr>
                  <?php };?>
          </table>
         </div>      
      </div> 
</body>
</html>
      
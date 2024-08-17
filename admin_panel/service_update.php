<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>service update</title>
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/all.min.css">
    <!-- css link  -->
    <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="admin-crew centered">
<div class="container ">
            <div class="title">update service </div>
            <form action="update_service.php" method="post" enctype="multipart/form-data">
            <div class="user-details">
                        <div class="input-box">
                             <span class="details">portID</span>
                             <input type="number" placeholder="Enter port id" id="portID" name="portID" value="1" readonly>
                         </div> 
                         <div class="input-box">
                             <span class="details">icon class</span>
                             <input type="text" placeholder="Enter icon class of service (e.g., fa-solid fa-camera)" id="iconClass" name="iconClass" required>
                         </div>
                         <div class="input-box">
                             <span class="details">service Name</span>
                             <input type="text" placeholder="Enter the name of service" id="serviceName" name="serviceName" required>
                         </div>
                         <div class="input-box">
                             <span class="details"> Service Description</span>
                             <input type="text" placeholder="Enter service description" id="ServiceDescription" name="ServiceDescription" required>
                         </div>
                         <div class="input-box">
                             <span class="details">Service Price</span>
                             <input type="number" placeholder="Enter Service Price" id="ServicePrice" name="ServicePrice" required>
                         </div>
                         <div class="input-box">
                             <span class="details">Operating Hours</span>
                             <input type="text" placeholder="Enter Operating Hours" id="OperatingHours" name="OperatingHours" required>
                         </div>
                        <div class="input-box">
                             <span class="details">Contact Info</span>
                             <input type="text" placeholder="Enter Contact Info" id="ContactInfo" name="ContactInfo" required>
                         </div> 
                         <div class="input-box">
                            <label for="status" class="details">service status</label>
                            <select name="status" id="status">
                                 <option value="active">active</option>
                                 <option value="inactive">inactive</option>
                           </select>
                         </div>
            </div>
            <div class="button">
                        <input type="submit" class="btn" name="update_service" value="update service">
                        <a href="service_admin.html">go back</a>
            </div>
            </form>
        </div>
</div>
</body>
</html>
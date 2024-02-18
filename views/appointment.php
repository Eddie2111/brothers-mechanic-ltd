<html>
    <?php require 'components/head.php' ?>
    <body class="body">
    <?php 
        session_start();
        if(isset($_SESSION['usertype']) && $_SESSION['usertype'] == 'admin'){
            require 'components/adminnav.php';
        }
        if(isset($_SESSION['usertype']) && $_SESSION['usertype'] == 'customer'){
            require 'components/usernav.php';
        }
    ?>
        <div class="container">
            <form class="appointmentCard" method="POST" action="../controller/appointment.php">
                <label class="labelText">First Name</label>
                <input class="inputBox" type="text" name="firstName" placeholder="John" required>
                <label class="labelText">Last Name</label>
                <input class="inputBox" type="text" name="lastName" placeholder="Last Name" required>
                <label class="labelText">Email</label>
                <input class="inputBox" type="email" name="email" placeholder="example@email.com" required>
                <label class="labelText">Phone Number</label>
                <input class="inputBox" type="text" name="phoneNumber" placeholder="Phone Number" required>
                
                <label class="labelText">Vehicle Type</label>
                <input class="inputBox" type="text" name="vehicleType" placeholder="Vehicle Type" required>
                <label class="labelText">Vehicle Model</label>
                <input class="inputBox" type="text" name="vehicleModel" placeholder="Vehicle Model" required>
                <label class="labelText">Vehicle Year</label>
                <input class="inputBox" type="text" name="vehicleYear" placeholder="Vehicle Year" required>

                <label class="labelText">Appointment Date</label>
                <input class="inputBox" type="date" name="appointmentDate" placeholder="Appointment Date" required>
                <label class="labelText">Mechanic</label>
                <select class="inputBox1" name="mechanic">
                    <option value="mechanic1">Mechanic 1</option>
                    <option value="mechanic2">Mechanic 2</option>
                    <option value="mechanic3">Mechanic 3</option>
                    <option value="mechanic4">Mechanic 4</option>
                </select>

                <center><button class="route1" type="submit" class="btn">Submit</button></center>
            </form>
        </div>


    </body>
</html>
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
            header ("Location: ../views/appointment.php");
        }
    ?>
        <div class="container">
            <form class="appointmentCard" method="POST" action="../controller/register.php">
                <label class="labelText">First Name</label>
                <input class="inputBox" type="text" name="firstName" placeholder="John" required>
                <label class="labelText">Last Name</label>
                <input class="inputBox" type="text" name="lastName" placeholder="Last Name" required>
                <label class="labelText">Email</label>
                <input class="inputBox" type="text" name="email" placeholder="example@email.com" required>
                <label class="labelText">Phone Number</label>
                <input class="inputBox" type="text" name="phoneNumber" placeholder="+8801xxxxxxx" required>
                <label class="labelText">Password</label>
                <input class="inputBox" type="text" name="password" placeholder="*******" required>
                <label class="labelText">Confirm Password</label>
                <input class="inputBox" type="text" name="cpassword" placeholder="*******" required>
                <center><button class="route1" type="submit" class="btn">Submit</button></center>
            </form>
        </div>


    </body>
</html>
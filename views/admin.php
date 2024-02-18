<html>
    <?php require 'components/head.php' ?>
    <body class="body-admin">
    <?php 
        session_start();
        if(isset($_SESSION['usertype']) && $_SESSION['usertype'] == 'admin'){
            require 'components/adminnav.php';
            header ("Location: ../views/adminDashboard.php");
        }
        if(isset($_SESSION['usertype']) && $_SESSION['usertype'] == 'customer'){
            require 'components/usernav.php';
        }
    ?>
        <div class="container">
            <form class="appointmentCard" method="POST" action="../controller/admin.php">
                <label class="labelText">Email</label>
                <input class="inputBox" type="text" name="email" placeholder="example@email.com" required>
                <label class="labelText">Password</label>
                <input class="inputBox" type="text" name="password" placeholder="*******" required>
                <center><button class="route1" type="submit" class="btn">Submit</button></center>
            </form>
        </div>


    </body>
</html>
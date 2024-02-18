<html>
    <?php require 'components/head.php' ?>
    <body class="body">
        <center>
            <div class="headingIndex"> 
                <p>Brothers Mechanics LTD </p>
            </div>
            <br/><br/><br/><br/><br/>
            <?php 
                session_start();
                if(isset($_SESSION['usertype']) && $_SESSION['usertype'] == 'admin'){
                    require 'components/adminnav.php';
                }
                if(isset($_SESSION['usertype']) && $_SESSION['usertype'] == 'customer'){
                    require 'components/usernav.php';
                }else{
                    require 'components/nav.php';
                }
            ?>
        </center>
    </body>
</html>
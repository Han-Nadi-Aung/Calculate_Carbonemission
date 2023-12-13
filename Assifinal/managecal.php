   <?php
   include "Connect.php";
   session_start();
    if (isset($_POST['calculate'])) {
    if (isset($_SESSION['calculation'])) {
       
          $count = count($_SESSION['calculation']);
        $_SESSION['calculation'][$count] = array("name"=>$_POST['name'], "minutes"=>$_POST['minutes'],"minute"=>$_POST['minute'],"carbon_emission"=>$_POST['minutes']*$_POST['minute']);
          echo"
        <script>
            alert('item addedd');
            window.location.href ='./Calculationn.php';
        </script>
        ";
       }
     else{
        $_SESSION['calculation'][0] = array("name"=>$_POST['name'], "minutes"=>$_POST['minutes'],"minute"=>$_POST['minute'],"carbon_emission"=>$_POST['minutes']*$_POST['minute']);
           echo"
        <script>
            alert('item added first');
            window.location.href ='./Calculationn.php';
        </script>
        ";
    }
  

     }
    ?>
   <a href="./Calculationn.php">Back</a>
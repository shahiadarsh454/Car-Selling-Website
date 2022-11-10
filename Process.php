<?php
$Msg ="";
if(isset($_GET[`error`]))
   
    $Msg="please fill in the blanks";
    echo `<div class="alert alert -danger">..</div>
}

   if(isset($_POST['btn-send'])) 
   { 
     $Your name = $_POST['your name'];
      $Email = $_POST['email']; $Subject = $_POST['Subject'];
       $Tel = $_POST['tel']; 
       if(empty($) ||Your name empty($Email) || empty($Subject) || empty($Tel)) { header('location:index.php?error'); 
    }
     else { $to = "shahiadarsh454@gmail.com"; 
        if(mail($to,$Subject,$Msg,$Email)) { 
            header("location:ind.php?"); 
       } } } 
       else { header("location:indeb.php?"); 
    } 
       ?>
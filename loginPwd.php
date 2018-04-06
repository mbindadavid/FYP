<?php

function validPW($pass1){
    if(strlen($pass1) >= 8) {
        if(!ctype_upper($pass1) && !ctype_lower($pass1)) {
           return TRUE; 
             }
   }//IF length
}

if(isset ($_POST['uName'])) {
require_once'../../require/connect133p.php';

$uName = mysqli_real_escape_string($dbc, $POST['uName']);
$pass1 = mysqli_real_escape_string($dbc, $POST['pass1']);
$pass2 =$_POST['pass2'];
    


    
}//IF ISSET
     
//require 'head.html';
?>

 <h1>Register Now!</h1>
<?php
require 'nav.html';
?>
<content>
 <form method='POST' action='<?php echo $_SERVER['PHP_SELF']; ?>'>
     <label>User Name:</label><input type="text" name="uName"><br>
     <label>Password:</label><input type="password" name='pass2'><br>
     <input  type="submit">
    </form>
</content>


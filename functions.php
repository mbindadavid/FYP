<?php
//this file is the place to store all basic functons
function confirm_query($result_set){
    if (!$result_set){
        die("Database query failed: " . mysql_erro());
      }
}

function get_all_subject(){
    $quer = "SELECT *
    FROM subject 
    ORDER BY position ASC" ;    
   $subject_set = mysql_query($quer, $connections);
   confirm_query ($subject_set);  
   return $subject_set;
}
?>

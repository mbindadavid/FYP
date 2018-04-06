<?php require _once("connecton.php"); ?>
<?php require _once("functions.php"); ?>
<?php include("header1.php"); ?>
<table id="structure">
<tr> 
  <td id="navigation">
  <ul class="subjects">
    <?php
    $quer = "SELECT *
     FROM subject 
     ORDER BY position ASC" ;    
    $subject_set = mysql_query($quer, $connections);
    confirm_query ($subject_set);

    while ($subject = mysql_fetch_array($subject_set)) {
      echo "<li>{$subject["menu_name"]}<li/>";      
    $quer = "SELECT * 
    FROM pages 
    WHERE subject_id={$subject[id]}
    ORDER BY position ASC ";
      $page_set = mysql_query($quer, $connections); 
    confirm_query (page_set);

    echo "<ul class=\"pages\">"; 
    while ($page = mysql_fetch_array($page_set)) {
      echo "<li>{$page["menu_name"]}<li/>";
    } 
echo "</ul>"; 
    } 

    ?>
    </ul>
   </td>
   <td id="page">
     <h2>Graduaate Menu<h2>
     
     </td>
     </tr>
  </table>
  <?php require("footer.php"); ?>
       
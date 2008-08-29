<?php
// use this code to extract email addresses from a text message 
function parseText($input) {
  $email = array();
  $invalid_email = array(); 
  $input = ereg_replace("[^A-Za-z._0-9@ ]"," ",$input);
 
  $token = trim(strtok($input, " "));
 
  while($token !== "") {
 
    if(strpos($token, "@") !== false) {    
 
      $token = ereg_replace("[^A-Za-z._0-9@]","", $token);
 
      if(is_valid_email($email) !== true) {
        $email[] = strtolower($token);
      }
      else {
        $invalid_email[] = strtolower($token);
      }
    }
 
    $token = trim(strtok(" "));
  } 
  $email = array_unique($email);
  $invalid_email = array_unique($invalid_email); 
//  return array("valid_email"=>$email, "invalid_email" => $invalid_email);
	return array("valid_email"=>$email);
}
 
function is_valid_email($email) {
  if (eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.([a-z]){2,4})$",$email)) return true;
  else return false;
}

function csv($input){

return var_dump(parseText($input));
}
?>
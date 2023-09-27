<?php
// 5-Create a PHP function called generatePassword($length) that generates a random 
// password of the specified length. The password should include lowercase letters, 
// uppercase letters, numbers, and special characters (!@#$%^&*()_+). Write a PHP program to generate a password with a length of 12 characters using this function and print the password

function generatePassword($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    $password = '';
    
    $maxIndex = strlen($characters) - 1;
    
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, $maxIndex)];
    }
    
    return $password;
  }
  
  $length = 12;
  $password = generatePassword($length);
  
  echo "Generated password: $password";
  
?>
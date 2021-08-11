<?php 
include("connection_db.php");


  
// Store a string into the variable which
// need to be Encrypted
$username = "admin12345";
$password="admin12345";
// Display the original string
echo "Original String: " . $username;
  
// Store the cipher method
$ciphering = "AES-128-CTR";
  
// Use OpenSSl Encryption method
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;
  
// Non-NULL Initialization Vector for encryption
$encryption_iv = '1234567891011121';
  
// Store the encryption key
$encryption_key = "atsportal";
  
// Use openssl_encrypt() function to encrypt the data
$encryptionusername = openssl_encrypt($username, $ciphering,
            $encryption_key, $options, $encryption_iv);
$encryptionpassword = openssl_encrypt($password, $ciphering,
$encryption_key, $options, $encryption_iv);
$insert=mysqli_query($connection,"INSERT INTO admin_details(admin_username, admin_password) VALUES ('$encryptionusername','$encryptionpassword')");

// Display the encrypted string
echo "Encrypted String: " . $encryptionusername . "\n";
  
// Non-NULL Initialization Vector for decryption
$decryption_iv = '1234567891011121';
  
// Store the decryption key
$decryption_key = "atsportal";
  
// Use openssl_decrypt() function to decrypt the data
$decryption=openssl_decrypt ($encryptionusername, $ciphering, 
        $decryption_key, $options, $decryption_iv);
  
// Display the decrypted string
echo "Decrypted String: " . $decryption;
  

?>
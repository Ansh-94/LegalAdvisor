<?php
// define('ENCRYPTION_KEY', 'your-strong-secret-key'); // Change this to a secure key

// Encrypt Function
define('ENCRYPTION_KEY', 'your-secure-32-byte-key'); // Ensure this is exactly 32 bytes for AES-256

function encryptData($data)
{
    $key = ENCRYPTION_KEY;
    $iv_length = openssl_cipher_iv_length('AES-256-CBC');
    $iv = openssl_random_pseudo_bytes($iv_length); // Generate a secure 16-byte IV

    $encrypted = openssl_encrypt($data, 'AES-256-CBC', $key, 0, $iv);

    return base64_encode($iv . $encrypted); // Store IV + encrypted data together
}


// Decrypt Function
function decryptData($encryptedData)
{
    $key = ENCRYPTION_KEY;
    $encryptedData = base64_decode($encryptedData);
    $iv_length = openssl_cipher_iv_length('AES-256-CBC');

    if (strlen($encryptedData) < $iv_length) {
        return "Decryption Error: Data is too short!";
    }

    $iv = substr($encryptedData, 0, $iv_length); // Extract IV
    $encrypted = substr($encryptedData, $iv_length); // Extract encrypted content

    return openssl_decrypt($encrypted, 'AES-256-CBC', $key, 0, $iv);
}

?>
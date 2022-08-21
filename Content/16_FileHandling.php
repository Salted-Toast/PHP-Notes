<?php
/* ---------- File Handling --------- */

    /* 
    File handling is the ability to read and write files on the server.
    PHP has built in functions for reading and writing files.
    */


    $file = 'extras/users.txt';

    // Reads the file
    if(file_exists($file)) {
        // echo readfile($file); // Num = Num of bytes
        $handle = fopen($file,'r'); // Opens it in read mode
        $contents = fread($handle,filesize($file)); // Reads the file
        fclose($handle); // Closes the file
        echo $contents; // Outputs the file
    };

    // Write to a file
    if(file_exists($file)); {
        $handle = fopen($file,'w');
        $contents = "Salted-Toast\nBen\nDover\nMike" . PHP_EOL . 'Oxlong'; // PHP_EOL & \n are newline
        fwrite($handle,$contents);
        fclose($handle);
    };

    

?>
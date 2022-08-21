<?php
    /*==========Exceptions=(Try=&=Accept)==========*\

    - This is basically error handling

    \*=============================================*/

    // Func to mimic divis by 0
    function inverse($x) {
        if(!$x) {
            throw new Exception('Division by zero ');
        }

        return $x/1;
    };

    // Try Statement No.1
    try { 
        echo inverse(5); // Works Fine
        echo inverse(0); // Error

    } catch(Exception $e) {
        echo ' Caught Exception ', $e->getMessage(), '';

    } finally { // Finally Executes Regardless if catch is met
        echo 'First Finally ';
    };

    // Try Statement No.2
    try { 
        echo inverse(3);// Works Fine
        echo inverse(0); // Error

    } catch(Exception $e) {
        echo ' Caught Exception ', $e->getMessage(), '';
    } finally {
        echo 'Second Finally ';
    };

?>
<?php
    //php is a server side scripting language
    //retrieve all 6 values send by ajax using POST
    //field1=fdsis&field2=sksak&....

    //all variables in PHP start with $
    $field1 = $_POST["field1"]; //field1=fdsis => $field1 contains "fdsis"
    $field2 = $_POST["field2"];
    $field3 = $_POST["field3"];
    $field4 = $_POST["field4"];
    $field5 = $_POST["field5"];
    $field6 = $_POST["field6"];

    //all 6 values have now been retrieved into variables to interact with

    //do error checking (just like JS) => IN FALL

    //as response, we will just send the data back to the client in a string
    echo "field1: $field1, field2: $field2, field3: $field3, 
          field4: $field4, field5: $field5, field6: $field6";

?>
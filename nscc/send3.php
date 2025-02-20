<?php

    $title = $_POST["title"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $streetAddress = $_POST["streetAddress"];
    $address2 = $_POST["address2"];
    $address3 = $_POST["address3"];
    $province = $_POST["province"];
    $country = $_POST["country"];
    $email = $_POST["email"];
    $password1 = $_POST["password1"];
    $password2 = $_POST["password2"];

    $response = array(
        "title" => $title,
        "firstName" => $firstName,
        "lastName" => $lastName,
        "streetAddress" => $streetAddress,
        "address2" => $address2,
        "address3" => $address3,
        "province" => $province,
        "country" => $country,
        "email" => $email,
        "password1" => $password1,
        "password2" => $password2,
        "all_values" => [
            "title" => $title,
            "firstName" => $firstName,
            "lastName" => $lastName,
            "streetAddress" => $streetAddress,
            "address2" => $address2,
            "address3" => $address3,
            "province" => $province,
            "country" => $country,
            "email" => $email,
            "password1" => $password1,
            "password2" => $password2
        ]
    );
    $output = json_encode($response);
    echo $output;

?>
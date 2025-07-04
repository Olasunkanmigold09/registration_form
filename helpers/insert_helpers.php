<?php
    include("C:/xampp/htdocs/sk-registration/helpers/connection_helpers.php");

    // Get POST data
    $ref_no      = $_POST["ref_no"];
    $passport    = $_POST["passport"];
    $reg_no      = $_POST["reg_no"];
    $surname     = $_POST["surname"];
    $firstname   = $_POST["firstname"];
    $middlename  = $_POST["middlename"];
    $date_of_birth = $_POST["date_of_birth"];
    $gender      = $_POST["gender"];
    $marital_status = $_POST["marital_status"];
    $e_mail      = $_POST["e_mail"];
    $nationality = $_POST["nationality"];
    $phone_no    = $_POST["phone_no"];
    $address     = $_POST["address"];
    $state       = $_POST["state"];
    $lga         = $_POST["lga"];
    $jamb_yr     = $_POST["jamb_yr"];
    $mat_yr      = $_POST["mat_yr"];
    $grad_yr     = $_POST["grad_yr"];
    $matric_no   = $_POST["matric_no"];
    $department  = $_POST["department"];
    $religion    = $_POST["religion"];
    $father_name = $_POST["father_name"];
    $mother_name = $_POST["mother_name"];
    $par_no      = $_POST["par_no"];
    $par_address = $_POST["par_address"];

    // Use prepared statement for security
    $stmt = $conn->prepare("INSERT INTO students_users (ref_no, passport, reg_no, surname, firstname, middlename, date_of_birth, gender, marital_status, e_mail, nationality, phone_no, address, state, lga, jamb_yr, mat_yr, grad_yr, matric_no, department, religion, father_name, mother_name, par_no, par_address) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param(
        "sssssssssssssssssssssssss",
        $ref_no, $passport, $reg_no, $surname, $firstname, $middlename, $date_of_birth, $gender, $marital_status, $e_mail, $nationality, $phone_no, $address, $state, $lga, $jamb_yr, $mat_yr, $grad_yr, $matric_no, $department, $religion, $father_name, $mother_name, $par_no, $par_address
    );

    if ($stmt->execute()) {
        header('location: ../popup.html');
        exit();
        
    } else {
        header('location: ../basic.html');
        exit();
    }

    $stmt->close();
    $conn->close();


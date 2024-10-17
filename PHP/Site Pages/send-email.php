<?php
include "../Includes/db_connection.php";

header('Content-Type: application/json');


$response = [];
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $companyName = $_POST["company"];
    $email = $_POST["email"];
    $phoneNum = $_POST["telephone"];
    $message = $_POST["message"];

    // VALIDATION CHECKS
    if (empty($name)) {
        $errors[] = "Please enter your name.";
    }

    if (empty($email)) {
        $errors[] = "Please enter your email.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email.";
    }

    if (empty($phoneNum)) {
        $errors[] = "Please enter your phone number.";
    } elseif (!preg_match("/^[0-9]{10,15}$/", $phoneNum)) {
        $errors[] = "Please enter a valid phone number.";
    }

    if (empty($message)) {
        $errors[] = "Mesaage contents are required.";
    }

    if (!empty($errors)) {
        $response["status"] = "error";
        $response["errors"] = $errors;
    } else {

    // DATABASE LOGIC 
    try {
        $contactSQL = "INSERT INTO contact_emails(name, company_name, email, telephone_number, message) 
                        VALUES (:name, :company_name, :email, :telephone_number, :message)";
        $statement = $conn->prepare($contactSQL);
        
        $statement->bindValue(':name', $name);
        $statement->bindValue(':company_name', $companyName);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':telephone_number', $phoneNum);
        $statement->bindValue(':message', $message);


        if ($statement->execute()) {
            $response['status'] = 'success';
            $response['message'] = 'New email was stored successfully';
        } else {
            $response['status'] = 'error';
            $response['message'] = 'Database error: ' . implode(", ", $statement->errorInfo());
        }
    } catch (PDOException $e) {
        $response['status'] = 'error';
        $response['message'] = 'Connection failed: ' . $e->getMessage();
    }

}
    
} else {
    // Handle invalid request method
    $response['status'] = 'error';
    $response['message'] = 'Invalid request method';
}

echo json_encode($response);

?>
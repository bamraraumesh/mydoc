Create a simple API in PHP

Creating a simple API in core PHP involves defining endpoints, handling incoming requests, processing data, and sending back appropriate responses. Here's a basic example of how you can create an API in PHP:

php
Copy code
<?php

// Check if the request method is GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Check if the 'action' parameter is set in the URL
    if (isset($_GET['action'])) {
        // Get the value of the 'action' parameter
        $action = $_GET['action'];
        
        // Perform actions based on the value of 'action'
        switch ($action) {
            case 'hello':
                echo json_encode(array('message' => 'Hello, world!'));
                break;
            case 'add':
                // Check if 'num1' and 'num2' parameters are set
                if (isset($_GET['num1']) && isset($_GET['num2'])) {
                    $num1 = $_GET['num1'];
                    $num2 = $_GET['num2'];
                    // Calculate the sum of 'num1' and 'num2'
                    $result = $num1 + $num2;
                    // Return the result as JSON
                    echo json_encode(array('result' => $result));
                } else {
                    // 'num1' or 'num2' parameter is missing
                    echo json_encode(array('error' => 'Parameters num1 and num2 are required.'));
                }
                break;
            default:
                // Unknown action
                echo json_encode(array('error' => 'Unknown action.'));
                break;
        }
    } else {
        // 'action' parameter is missing
        echo json_encode(array('error' => 'Action parameter is missing.'));
    }
} else {
    // Invalid request method
    http_response_code(405); // Method Not Allowed
    echo json_encode(array('error' => 'Invalid request method.'));
}
?>
This PHP script defines a simple API with two endpoints:

/api.php?action=hello: Returns a JSON response with a greeting message.
/api.php?action=add&num1=5&num2=3: Adds two numbers passed as query parameters (num1 and num2) and returns the result as JSON.
You can extend this example by adding more endpoints, handling different HTTP methods (POST, PUT, DELETE), implementing authentication and authorization, validating input data, and connecting to a database if needed. Additionally, you may want to consider using a PHP framework like Laravel or Symfony for more complex APIs.

how to get api in php give with same example 

how to do mvc patter in core php make a curd operation with mvc patter
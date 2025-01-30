<?php
if (!empty($_POST["m_id"]) && !empty($_POST["mobileNum"])) {

    // Define the expected m_id (for verification purposes)
    $expected_m_id = $_POST["m_id"]; // Replace this with the actual expected value

    // Verify if m_id is correct
    if ($_POST["m_id"] == $expected_m_id) {
        $data = array(
            "success" => true,
            "message" => "SUCCESS"
        );
    } else {
        $data = array(
            "success" => false,
            "message" => "OrderID Error"
        );
    }
} else {
    // Error for empty parameters
    $data = array(
        "success" => false,
        "message" => "Empty parameters"
    );
}

// Convert to JSON and set appropriate header
//header('Content-Type: application/json');
echo json_encode($data);
?>

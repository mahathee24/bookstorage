<?php
// Include the PDFShift library
require_once('vendor/autoload.php');
use \PDFShift\PDFShift;

// Set your API key
PDFShift::setApiKey('sk_be488ef9366a7da72dc12ac56a7978d8bde114ae');

// Check if the form is submitted and URL is provided
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['url'])) {
    $url = $_POST['url']; // Get the URL from the form

    try {
        // Convert the URL to a PDF and output it to the browser
        header('Content-Type: application/pdf');
        header('Content-Disposition: inline; filename="website.pdf"');
        echo PDFShift::convertTo($url); // Pass the dynamic URL for conversion
    } catch (Exception $e) {
        // Handle exceptions and display the error message
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Please provide a valid URL.";
}
?>

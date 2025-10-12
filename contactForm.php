<?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nm = htmlspecialchars($_POST['name']);
        $ph = htmlspecialchars($_POST['phone']);
        $em = htmlspecialchars($_POST['email']);
        $mes = htmlspecialchars($_POST['message']);
        $ordNum = htmlspecialchars($_POST['orNum']);
        if (empty($nm) || empty($ph) || empty($mes)) {
        die("Name, phone, and message are required.")else {
        echo "<h1>Information Captured</h1>";
        echo "<p>Thank you for your submission, $nm.</p>";
      } else {
        echo "<h1>Error</h1>";
        echo "<p>Please go back and fill in all the required fields.</p>";
    }
    
} 
?>

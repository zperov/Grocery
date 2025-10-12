<?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST['nm']) && !empty($_POST['ph']) && !empty($_POST['Input Here'])) {
        $nm = htmlspecialchars($_POST['name']);
        $ph = htmlspecialchars($_POST['phone']);
        $em = htmlspecialchars($_POST['email']);
        $mes = htmlspecialchars($_POST['message']);
        $ordNum = htmlspecialchars($_POST['orNum']);
        
        echo "<h1>Information Captured</h1>";
        echo "<p>Thank you for your submission, $nm.</p>";
        
    } else {
        echo "<h1>Error</h1>";
        echo "<p>Please go back and fill in all the required fields.</p>";
    }
    
} 
?>

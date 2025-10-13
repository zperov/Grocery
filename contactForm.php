<?php
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nm = htmlspecialchars($_POST['nm']);
        $ph = htmlspecialchars($_POST['ph']);
        $mes = htmlspecialchars($_POST['mes']);
        if (empty($nm) || empty($ph) || empty($mes)) {
        die("Name, phone, and message are required.");}
        else {
        echo "<h1>Information Captured</h1>";
        echo "<p>Thank you for your submission, $nm.</p>";
      } 
      }
?>

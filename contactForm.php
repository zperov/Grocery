<?php
      $error = '';
      $submitted = '';
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nm = htmlspecialchars($_POST["nm"]);
        $ph = htmlspecialchars($_POST["ph"]);
        $mes = htmlspecialchars($_POST["mes"]);
        if (empty($nm) || empty($ph) || empty($mes)) {
        $error = ("Name, phone, and message are required.");}
        else {
        $success = "Thank you for your submission, $nm.";
      } 
      }
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nm = isset($_POST['nm']) ? htmlspecialchars($_POST['nm']) : '';
    $ph = isset($_POST['ph']) ? htmlspecialchars($_POST['ph']) : '';
    $em = isset($_POST['em']) ? htmlspecialchars($_POST['em']) : '';
    $mes = isset($_POST['mes']) ? htmlspecialchars($_POST['mes']) : '';
    $orNum = isset($_POST['orNum']) ? htmlspecialchars($_POST['orNum']) : '';
    echo "Information Submitted";
} else {
   echo "Information Not Submitted";
}
?>

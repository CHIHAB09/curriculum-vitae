<?php

$sender = $address = $subject = $content = "";
$errorSender = $errorAddress = $errorSubject = $errorContent = "";
$senderPattern = $mailPattern = $subjectPattern = $contentPattern = "";
$nameLength = $subjectLength = "";
$onMailSent = "";

if (isset($_POST["submit"])) {
    //full securitey

    $sender = filter_var(trim(htmlspecialchars(strip_tags($_POST["name"])), ENT_QUOTES), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

    $address = filter_var(trim(htmlspecialchars(strip_tags($_POST["mail"])), ENT_QUOTES), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

    $subject = filter_var(trim(htmlspecialchars(strip_tags($_POST["subject"])), ENT_QUOTES), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

    $content = filter_var(trim(htmlspecialchars(strip_tags($_POST["message"])), ENT_QUOTES), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($sender)) {
            $errorSender = "Please enter your name.";
        } else if (!preg_match("/^[a-zA-Z\s\.]$/", $sender)) {
            $senderPattern = "This is not a valid name.";
        } else if (strlen($sender) < 4) {
            $nameLength = "This is a bit short.";
        }

        if (empty($address)) {
            $errorAddress = "Please enter your email address.";
        } else if (!preg_match("/^[A-Za-z0-9-_]+@[a-z0-9]+\.{1,}[a-z]{2,}$/", $address)) {
            $mailPattern = "This is not a valid email address.";
        }

        if (empty($subject)) {
            $errorSubject = "Please type in a subject.";
        } else if (!preg_match("/^[a-zA-Z\s\.]+$/", $subject)) {
            $subjectPattern = "This is not a valid subject.";
        } else if (strlen($sender) < 4) {
            $subjectLength = "This is a bit short.";
        }

        if (empty($content)) {
            $errorContent = "Please type in your message.";
        } else if (!preg_match("/^[a-zA-Z\s\.\-\,]+$/", $content)) {
            $contentPattern = "This is not a valid message.";
        }

        if (!empty($sender) && !empty($address) && !empty($subject) && !empty($content)) {
            $receiver = "cherifi.chihab@live.be";
            $headers = "Incoming mail form " . $address;
            mail($receiver, $subject, $content, $headers);
            $onMailSent = "Thanks for taking the time to write. You will get an answer as soon as possible";

        }

    }

}

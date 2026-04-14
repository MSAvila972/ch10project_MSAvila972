<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Confirmation</title>
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
    <h1>Dynamic Form Project</h1>
    <p>Mark Avila</p>
    <p>April 13, 2026</p>

    <?php
    // Check if the form was submitted via POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // 1. Store submitted values in variables and use trim() to remove extra spaces
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);

        // 2. Sanitize the email to ensure it's a clean string
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        $displayMessage = "";
        $msgClass = "";

        // 3. Validation: Check if any fields are empty
        if (empty($name) || empty($email) || empty($message)) {
            $displayMessage = "Please fill in all required fields.";
            $msgClass = "error";
        } else {
            // 4. Success logic
            $displayMessage = "Thank you for your submission, " . $name . "!";
            $msgClass = "success";
        }

        // 5. Display the output
        echo "<div class='$msgClass'>$displayMessage</div>";
        
        if ($msgClass == "success") {
            echo "<p><strong>Name:</strong> $name</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Message:</strong> $message</p>";
        }
    }
    ?>
</body>
</html>
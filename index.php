<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dynamic Form Project</title>
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
    <h1>Dynamic Form Project</h1>
    <p>Mark Avila</p>
    <p>April 13, 2026</p>

    <form action="confirm.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
$success = '';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "youremail@example.com"; // Change to your email
    $subject = "Contact Form Message from $name";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";
    
    if(mail($to, $subject, $body, $headers)){
        $success = "Thank you! Your message has been sent.";
    }else{
        $success = "Oops! Something went wrong.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Me - Sheetal's Project</title>
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<nav class="navbar">
    <div class="logo">Sheetal's Project</div>
    <div class="nav-links">
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
    </div>
</nav>

<section class="contact">
    <h1>Contact Me</h1>
    <?php if($success){ echo "<p class='success'>$success</p>"; } ?>
    <form method="POST" action="contact.php">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="message" placeholder="Your Message" required></textarea>
        <button type="submit" class="btn">Send Message</button>
    </form>
</section>

<footer>
    Made with ❤️ by Sheetal Chive
</footer>

</body>
</html>

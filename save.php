
<?php

$status = 'error';
$title = 'Message Not Sent';
$message = 'Sorry, something went wrong while submitting your message.';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $msg = trim($_POST['message'] ?? '');

    if ($name === '' || $email === '' || $subject === '' || $msg === '') {

        $title = 'Missing Information';
        $message = 'Please complete all fields before submitting.';

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $title = 'Invalid Email';
        $message = 'Please enter a valid email address.';

    } else {

        try {

            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

            // Database connection
            $conn = new mysqli(
                'sql201.infinityfree.com',
                'if0_34618359',
                'ntrK9gqNPVLRnu',
                'if0_34618359_db_portfolio'
            );

            $conn->set_charset('utf8mb4');

            // Insert message using prepared statement
            $sql = "INSERT INTO tb_message
                    (u_name, u_email, u_subject, u_message)
                    VALUES (?, ?, ?, ?)";

            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssss", $name, $email, $subject, $msg);

            $stmt->execute();

            $status = 'success';
            $title = 'Message Sent Successfully!';
            $message = 'Thank you for contacting me. Your message has been received. I will get back to you as soon as possible.';

            $stmt->close();
            $conn->close();

        } catch (Throwable $e) {

            error_log('Contact form error: ' . $e->getMessage());

            $title = 'Message Not Sent';
            $message = 'Unable to submit your message at the moment. Please try again later.';
        }
    }

} else {

    $title = 'Invalid Request';
    $message = 'Please submit your message through the contact form.';
}

$title = htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $title; ?> | Dineth Weerasinghe</title>

    <link rel="icon" href="images/icon.ico">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
          rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            background: #080808;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        .message-card {
            max-width: 550px;
            width: 100%;
            background: #141414;
            padding: 50px 35px;
            border-radius: 18px;
            border: 1px solid #292929;
            text-align: center;
            box-shadow: 0 15px 50px rgba(0,0,0,.4);
        }

        .message-icon {
            font-size: 75px;
            margin-bottom: 20px;
        }

        .success .message-icon,
        .success h2 {
            color: #ffbd39;
        }

        .error .message-icon,
        .error h2 {
            color: #ff5c5c;
        }

        h2 {
            font-weight: 700;
            margin-bottom: 20px;
        }

        p {
            color: #b5b5b5;
            line-height: 1.8;
            margin-bottom: 30px;
        }

        .btn-home {
            display: inline-block;
            padding: 13px 28px;
            background: #ffbd39;
            color: #111;
            text-decoration: none;
            border-radius: 7px;
            font-weight: 600;
        }

        .btn-home:hover {
            background: white;
            color: #111;
        }

        .footer {
            margin-top: 35px;
            font-size: 13px;
            color: #777;
        }

        .footer span {
            color: #ffbd39;
        }
    </style>
</head>

<body>

    <div class="message-card <?php echo $status; ?>">

        <div class="message-icon">
            <i class="bi <?php echo $status === 'success'
                ? 'bi-check-circle-fill'
                : 'bi-exclamation-circle-fill'; ?>"></i>
        </div>

        <h2><?php echo $title; ?></h2>

        <p><?php echo $message; ?></p>

        <a href="index.php" class="btn-home">
            <i class="bi bi-arrow-left"></i>
            Back to Portfolio
        </a>

        <div class="footer">
            Designed & Developed by
            <span>Dineth Weerasinghe</span>
        </div>

    </div>

</body>
</html>

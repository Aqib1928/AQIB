<?php
// Stylish Maintenance Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Website Under Maintenance</title>
    <style>
        body {
            background: #0d1117;
            color: #fff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        h1 {
            font-size: 3em;
            color: #ffcc00;
            margin-bottom: 10px;
        }
        p {
            font-size: 1.2em;
            color: #ccc;
            max-width: 500px;
            margin-bottom: 30px;
        }
        .loader {
            border: 6px solid #f3f3f3;
            border-top: 6px solid #ffcc00;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
            margin: 20px auto;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        .social {
            margin-top: 20px;
        }
        .social a {
            color: #ffcc00;
            text-decoration: none;
            font-size: 1.5em;
            margin: 0 10px;
            transition: color 0.3s ease;
        }
        .social a:hover {
            color: #fff;
        }
        .contact {
            margin-top: 20px;
            font-size: 1em;
            color: #aaa;
        }
        .contact a {
            color: #ffcc00;
            text-decoration: none;
        }
        .contact a:hover {
            color: #fff;
        }
    </style>
</head>
<body>
    <h1>🚧 Website Under Maintenance 🚧</h1>
    <p>We are currently updating our website to serve you better. Please check back soon! 
       In the meantime, feel free to connect with us through our social media or contact us directly.</p>
    <div class="loader"></div>

    <div class="social">
        <a href="www.linkedin.com/in/muhammadaaqib" target="_blank">💼 LinkedIn</a>
    </div>

    <div class="contact">
        📧 Contact us: <a href="mailto:aqib21028@gmail.com">aqib21028@gmail.com</a>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
    body {
        margin-top: 150px; /* Adjusted the top margin to accommodate the larger header */
    }

    header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background: linear-gradient(to right, #2196F3, #4CAF50); /* Mixed color effect */
        padding: 20px 0; /* Increased padding to make the header taller */
        text-align: center;
        color: #fff;
        z-index: 1000; /* Ensure the header is on top of other content */
        font-size: 24px; /* Increased font size for the header text */
    }

    header nav {
        display: flex;
        justify-content: center;
    }

    header nav a {
        color: #fff;
        text-decoration: none;
        margin: 0 15px;
        font-size: 16px;
    }

    footer {
        background-color: #57cfc9;
        color: #fff;
        text-align: center;
        padding: 0em 0;
        position: fixed;
        bottom: 0;
        width: 100%;
    }

    .container {
        max-width: 600px;
        margin: 0 auto;
        background-color: #f0f8ff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .contact-info {
        margin-bottom: 20px;
    }

    .contact-info h2 {
        font-size: 24px;
        margin-bottom: 10px;
        color: #333;
    }

    .contact-info p {
        font-size: 16px;
        margin-bottom: 5px;
        color: #666;
    }

    .contact-info p a {
        color: #007bff;
        text-decoration: none;
    }

    .contact-info p a:hover {
        text-decoration: underline;
    }
.google-map {
  padding-bottom: 30%;
  position: relative;
}

.google-map iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 70%;
  height: 75%;
}

</style>

</head>
<body>

<?php include("header.php"); ?>


<br>
<br>
<br>

    <div class="container">
        <div class="contact-info">
            <h2>Contact Us</h2>
            <p><strong>Email:</strong> <a href="mailto:chirstiansevasangam@gmail.com">chirstiansevasangam@gmail.com</a></p>
            <p><strong>Mobile:</strong> <a href="tel:0452 269 2575">+0452 269 2575</a></p>
            <p><strong>Address:</strong>  Alagappan Nagar,Muthu Patti, Madurai<br>Tamil Nadu 625003</p>
            <p><strong>Instagram:</strong> <a href="https://www.instagram.com/christiansevasangam/" target="_blank">@christiansevasangam</a></p>
        </div>
        <div class="details">
            <h3>About Us</h3>
            <p >At Chirstian Seva Sangam, we believe that every stage of life deserves respect, care, and dignity.Our home is a sanctuary for seniors,providing a warm and nurturing environment where they can thrive,connect,and enjoy their golden years.</p>
            <h3>Business Hours</h3>
            <p>All day available ( 24/ 7 Services) </p>
<h3>This is my Google Maps web page</h3>
<div class="google-map">
<br>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62887.499495654905!2d78.02665485820314!3d9.894863400000018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00cf9232e48ba1%3A0x41efa50a3b1905fb!2sOld%20Age%20Homes%20Madurai%20Christian%20Seva%20Sangam%20Trust!5e0!3m2!1sen!2sin!4v1710524571398!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


</div>
        </div>
    </div>
</body>
</html>
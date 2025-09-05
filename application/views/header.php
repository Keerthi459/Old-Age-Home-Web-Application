
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

<header>
  <h1>THE CHRISTIAN SEVA SANGAM TRUST</h1>
<nav>
    <a href="<?php echo base_url();?>index">Home</a>
    <a href="<?php echo base_url();?>services">Services</a>
    <a href="<?php echo base_url();?>facilities">Facilities</a>
    <a href="<?php echo base_url();?>gallery">Gallery</a>
    <a href="<?php echo base_url();?>event">Events</a>
    <a href="<?php echo base_url();?>donation">Donation</a>
    <a href="<?php echo base_url();?>chatbot">Chatbot</a>
    <a href="<?php echo base_url();?>contact">Contact Us</a>
  </nav>
</header>
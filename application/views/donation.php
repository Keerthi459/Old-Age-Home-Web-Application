<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Donate to [Old Age Home Name]</title>
  <style>
body {
            font-family: 'Arial black', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
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

    

    .container {
      max-width: 500px;
      margin: 0 auto;
      background-color: #f0f8ff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
      color: #FFFFFF;
      text-align: center;
      margin-bottom: 20px;
    }
    p {
      color: #555;
      line-height: 1.6;
    }
    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
      color: #333;
    }
    select {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 5px;
      appearance: none;
      -webkit-appearance: none;
      -moz-appearance: none;
      background-color: #f9f9f9;
      background-repeat: no-repeat;
      background-position-x: 95%;
      background-position-y: center;
      cursor: pointer;
    }
    select:focus {
      outline: none;
      border-color: #007bff;
    }
    table.center {
    width: 100%;
    border-collapse: collapse;
    width: 350px;
    height: 150px;
    margin: 30px 80px 50px;
    align-items: center;
    padding: 60px;
    }

  table.center td {
  border: 1px solid #ddd;
  padding: 1px;
  }

  table.center td:first-child {
  font-weight: bold;
  padding: 5px;
  background-color: #f2f2f2;
  }
    input[type="number"],
    textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
      resize: vertical;
    }
    input[type="submit"] {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 12px 20px;
      border-radius: 5px;
      cursor: pointer;
      display: inline-block;
      width: auto;
    }
    input[type="submit"]:hover {
      background-color: #0056b3;
    }
    .form-group {
      margin-bottom: 20px;
    }
    .form-group:last-child {
      margin-bottom: 0;
    }
    .thank-you {
      display: none;
      color: #333;
      text-align: center;
      margin-top: 20px;
    }
  </style>
    <script src="<?php echo base_url();?>assets/jquery-3.4.1.js"></script>
    <script src="<?php echo base_url();?>assets/sweetalert.min.js"></script>

    <?php if(!empty($this->session->flashdata('Succ'))){ ?>
  <script>
    $(function() {
      swal({
        text: "<?php echo $this->session->flashdata('Succ'); ?>",
        timer: 3000,
        buttons: false,
        type: 'success',
        icon: "success"
    });
  });
</script>
<?php } ?> 
<?php if(!empty($this->session->flashdata('Err'))){ ?>
  <script>
    $(function() {
      swal({
        text: "<?php echo $this->session->flashdata('Err'); ?>",
        timer: 3000,
        buttons: false,
        type: 'error',
        icon: "error"
    });
  });
</script>
<?php } ?>

</head>
<body>
<div class="navbar">

<?php include("header.php"); ?>

<br>
<br>
<br>
<br>
<br>
  <div class="container">
    <h2 style="font-family: 'Arial black', sans-serif;">Donate to Christian Seva Sangam Trust</h2>
    <p>Your donation helps us provide care and support to elderly residents.</p>
   
    <form id="donationForm" name="donationForm" action="" method="POST">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required style="height: 30px;width: 100%;">
      </div>
     
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required style="height: 30px;width: 100%;">
      </div>

       <div class="form-group">
        <label for="mobile">Mobile:</label>
        <input type="mobile" id="mobile" name="mobile" required style="height: 30px;width: 100%;">
      </div>
     
      <div class="form-group">
        <label for="category">Fund Category:</label>
        <select id="category" name="category" required>
          <option value="" disabled selected>Select Category</option>
          <option value="Medical">Medical</option>
          <option value="Daily Care">Daily Care</option>
          <option value="Facility Maintenance">Facility Maintenance</option>
          <option value="Other Purpose">Other Purpose</option>
        </select>
      </div>

      <div class="form-group">
        <label for="type">Fund Type:</label>
        <select id="type" name="type" required>
          <option value="" disabled selected>Select Type</option>
          <option value="One-Time">One-Time</option>
          <option value="Monthly">Monthly</option>
        </select>
      </div>
     
      <div class="form-group">
        <label for="amount">Donation Amount:</label>
        <input type="number" id="amount" name="amount" min="1" required>
      </div>
     
      <div class="form-group">
        <label for="message">Message (optional):</label>
        <textarea id="message" name="message" rows="4"></textarea>
      </div>

      <div class="form-group">
        <h3>Bank Account Details:</h3>
        <table class="center">
        <tr>
            <td>Bank Name</td>
            <td>ICIC Bank</td>
        </tr>
        <tr>
            <td>Account Number</td>
            <td>601701004690</td>
        </tr>
        <tr>
             <td>IFSC Code </td>
             <td>ICIC0006017</td>
        </tr>
        <tr>
             <td>Branch </td>
             <td>Kochadai Branch, Madurai</td>
        </tr>
      </table>

      </div>
     
      <div class="form-group">
       <div style="text-align: center;">
        <input type="submit" name="submit" id="submit" value="Donate Now">
       </div>
      </div>
    </form>
   
    <!-- <p class="thank-you" id="thankYouMessage">Thank you for your generosity!</p> -->
  </div>

</body>
</html>

<?php $this->session->set_flashdata("Succ",''); ?>
<?php $this->session->set_flashdata("Err",''); ?>
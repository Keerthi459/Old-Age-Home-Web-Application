<!DOCTYPE html>
<html>
<head>
<style>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE CHRISTIAN SEVA SANGAM TRUST</title>
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

    footer {
        background-color: #57cfc9;
        color: #fff;
        text-align: center;
        padding: 0em 0;
        position: fixed;
        bottom: 0;
        width: 100%;
    }

div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>

<div class="navbar">

<?php include("header.php"); ?>

<br>
<br>


<h1 style="text-align: center;">Image Gallery </h1><br>

<?php 
if ($photos) {
  foreach ($photos as $key => $value) { ?>
    
    <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="<?php echo base_url();?>images/gallery/<?php echo $value['name']; ?>">
      <img src="<?php echo base_url();?>images/gallery/<?php echo $value['name']; ?>" alt="home" width="600" height="400" style="width: 300px;height: 200px;">
    </a>
    <!-- <div class="desc">Seva Sangam</div> -->
  </div>
</div>


 <?php }
} 
?>



<br>
<div class="clearfix"></div>

<div style="padding:0px;">
 
</div>
<footer>
       <br> <p>&copy; 2024 Old Age Home. All rights reserved.</p>
 </footer>

</body>
</html>




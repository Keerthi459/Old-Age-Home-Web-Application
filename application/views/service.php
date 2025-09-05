<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <title>THE CHRISTIAN SEVA SANGAM TRUST</title>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
 
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/style1.css">

   <!-- custom js file link  -->
   <script src="<?php echo base_url(); ?>assets/script.js" defer></script>

</head>
<body>
 
<div class="container">

   <h3 class="title"> OUR SERVICES </h3>

   <div class="products-container">

      <div class="product" data-name="p-1">
         <img src="images/1.png" alt="">
         <h3>Medical Support</h3>
      </div>

      <div class="product" data-name="p-2">
         <img src="images/2.png" alt="">
         <h3>Transport</h3>
      </div>

      <div class="product" data-name="p-3">
         <img src="images/3.png" alt="">
         <h3>Activities</h3>
      </div>

      <div class="product" data-name="p-4">
         <img src="images/4.png" alt="">
         <h3>Members</h3>
      </div>

      <div class="product" data-name="p-5">
         <img src="images/5.png" alt="">
         <h3>Facility</h3>
      </div>

      <div class="product" data-name="p-6">
         <img src="images/6.png" alt="">
         <h3>Amenities</h3>
       </div>

   </div>

</div>

<div class="products-preview">

   <div class="preview" data-target="p-1">
      <i class="fas fa-times"></i>
      <img src="images/1.png" alt="">
      <h3>MedicalSupport</h3>
      <p>Regular Medical checkup,Emercency services,Medicine supply by Apollo</p>
      </div>

   <div class="preview" data-target="p-2">
      <i class="fas fa-times"></i>
      <img src="images/2.png" alt="">
      <h3>Transport</h3>
      <p>Auto services,Bus Transportaion,Emergency purpose.</p>
   </div>

   <div class="preview" data-target="p-3">
      <i class="fas fa-times"></i>
      <img src="images/3.png" alt="">
      <h3>Activities</h3>
      <p>chruch prayer,prayer song,outing at chruch and other places.</p>
   </div>

   <div class="preview" data-target="p-4">
      <i class="fas fa-times"></i>
      <img src="images/4.png" alt="">
      <h3>Members</h3>
      <p>Five Wardens,At present 30 old age people,Working staff</p>
   </div>

   <div class="preview" data-target="p-5">
      <i class="fas fa-times"></i>
      <img src="images/5.png" alt="">
      <h3>Facility</h3>
      <p>Wheel chair accessible,Parking,Wheel chair Entrance.</p>
   </div>

   <div class="preview" data-target="p-6">
      <i class="fas fa-times"></i>
      <img src="images/6.png" alt="">
      <h3>Amenities</h3>
      <p>Food provided,Basic requirement,Clothes are Donated.</p>
   </div>

</div>
<script >
	let preveiwContainer = document.querySelector('.products-preview');
let previewBox = preveiwContainer.querySelectorAll('.preview');

document.querySelectorAll('.products-container .product').forEach(product =>{
  product.onclick = () =>{
    preveiwContainer.style.display = 'flex';
    let name = product.getAttribute('data-name');
    previewBox.forEach(preview =>{
      let target = preview.getAttribute('data-target');
      if(name == target){
        preview.classList.add('active');
      }
    });
  };
});

previewBox.forEach(close =>{
  close.querySelector('.fa-times').onclick = () =>{
    close.classList.remove('active');
    preveiwContainer.style.display = 'none';
  };
});
</script>
</body>
</html>
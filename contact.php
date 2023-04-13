<?php

/*
    template Name: Contact
*/

?>
<?php get_header(); ?>

<section class="contact_section">
<div class="container">
        <div class="about__wrapper">

    <div class="contact__wrapper"> 
    <h1>Contact</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, quaerat.</p>
    <div class="icon">
        <i class="fa-solid fa-phone-flip fa-sm"></i>
        <span class="text" style="  margin-left: 5px;">+63 932 102 0819</span>
    </div>
    <div class="icon">
        <i class="fa-solid fa-envelope fa-sm"></i>
        <span class="text"style="  margin-left: 5px;">inquire@©Creativevisualdesign</span>
    </div>
    <div class="icon">
        <i class="fa-sharp fa-solid fa-location-dot fa-sm"></i>
        <span class="text" style="  margin-left: 13px;">Baloc Road, brgy san ignacio San Pablo city,Laguna 4000</span>
    </div>
    <div class="social__icon">
        <i class="fa-brands fa-facebook fa-xl"></i>
        <i class="fa-brands fa-twitter fa-xl"></i>
        <i class="fa-brands fa-instagram fa-xl"></i>
        <i class="fa-brands fa-youtube fa-xl"></i>
    </div>
    </div>
    <div class="form-container">
        <form>
            <input type="text" id="name" name="name" placeholder="Enter your name">
            <input type="text" id="email" name="email" placeholder="Enter Email">
            <textarea id="message" name="message" placeholder="message" required></textarea>
            <a href="#" class="Button">Submit</a>
      </div>
    
</div>
</div>
</section>







<!----Contact US-->



</section>
 <!------Script for toggle menu-->
 <script>

    const nav = document.querySelector('.nav');
    const toggle__menu = document.querySelector('.toggle__menu');

    toggle__menu.addEventListener("click",()=>{
     toggle__menu.classList.toggle('open'); 
     nav.classList.toggle('open');
    })

  </script>

<?php get_footer(); ?>
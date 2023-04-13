<?php wp_footer(); ?>
<footer>
        <div class="icons">
            <i class="fa-brands fa-facebook fa-2xl"></i>
            <i class="fa-brands fa-twitter fa-2xl"></i>
            <i class="fa-brands fa-instagram fa-2xl"></i>
            <i class="fa-brands fa-youtube fa-2xl"></i>
            <i class="fa-solid fa-envelope fa-2xl"></i>
        </div>
        <div class="center-text">Baloc Road, brgy san ignacio San Pablo city,Laguna 4000</div>
        <div class="right-text">©CreativeVisualDesign 2022</div>
      </footer>
      <!------Script for toggle menu-->
      <script>

        const nav = document.querySelector('.nav');
        const toggle__menu = document.querySelector('.toggle__menu');

        toggle__menu.addEventListener("click",()=>{
         toggle__menu.classList.toggle('open'); 
         nav.classList.toggle('open');
        })

      </script>
      

</body>
</html>
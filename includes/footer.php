 
    <div class="py-5 bg-dark ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
             
                <div class="row  ">
                    <div class="col-md-4 mb-4">
                        <h3 class="text-white">SecureNet</h3>
                        <br>
                        <a href="index.php"><i class="fa fa-right-angle"> Home</i></a><br>
                        <a href="#about">About us</a><br>
                        <a href="">Contact us</a><br>
                        <a href="categories.php">Our offers</a><br>
                    </div>
                    
                    <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14692.51079253616!2d30.447273749999997!3d-22.982331249999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ec5c67c6c0a3043%3A0x4f27808f87dcb818!2sUniversity%20of%20Venda%20Auditorium!5e0!3m2!1sen!2sza!4v1722679758848!5m2!1sen!2sza" width="500" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-md-2">
                    <h3 class="text-white">Contact us</h3>
                    <br>
                    <a href="https://wa.me/+27638642571"  style="font-size: 35px;" class="whatsapp-icon me-10" target="_blank" title="Chat with us on WhatsApp">
                         <i  class="fa fa-whatsapp"></i>
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=61563548619120&mibextid=ZbWKwL"  style="font-size: 35px;" class="whatsapp-icon me-10" target="_blank" title="Chat with us on WhatsApp">
                         <i  class="fa fa-facebook"></i>
                    </a>
                    <a href="https://wa.me/+27606242290"  style="font-size: 35px;" class="whatsapp-icon me-10" target="_blank" title="Chat with us on WhatsApp">
                         <i  class="fa fa-twitter"></i>
                    </a>
                    <a href="https://wa.me/+27606242290"  style="font-size: 35px;" class="whatsapp-icon me-6" target="_blank" title="Chat with us on WhatsApp">
                         <i  class="fa fa-instagram"></i>
                    </a>
                    <br>
                    
                    <h6 class="text-white">Email us on: <a class="text-white" href="mailto:securenet923@gmail.com">securenet923@gmail.com</a></h6><br>
                    <h6 class="text-white">Call us on:   <a class="text-white" href="tel:+27723197498">+27 72 3197498</a></h6>
                    </div>
                    
                    
                </div>
                <p class="text-white text-center">&copy; 2024 SecureNet. All rights reserved.</p>
            </div>
        </div>
    </div>
 </div>
  

<script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<script>
  alertify.set('notifier','position', 'top-right');
  <?php if(isset($_SESSION['message'])){  ?>
     
    alertify.success('<?= $_SESSION['message']; ?>');
    <?php
    unset($_SESSION['message']);

   }
   ?>
   </script>
    
  </body>

</html>
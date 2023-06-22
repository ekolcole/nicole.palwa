<?php foreach ($web_info as $row) :
        $web_name =$row->web_name;
        $web_description=$row->web_description;
        $contact_num=$row->contact_num;
        $email=$row->email;
        $address=$row->address;
        endforeach;
    ?>

<footer id="contact" >
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
          <div class="row justify-content-center">
            <div class="section-heading text-center">
            <h4>Contact Us</h4>
            <p ><a href="#"><?php echo isset($address) ? $address : ''; ?></a></p>
            <p><a href="#"><?php echo isset($contact_num) ? $contact_num : ''; ?></a></p>
            <p><a href="#"><?php echo isset($email) ? $email : ''; ?></a></p>
          </div>
<br>
<br>
<br>
<br>
<br>
<br>
<hr>
<br>
<br>
      </div>
        </div>
      </div>
        </div>
        <div id="about" class="col-lg-12">
        <div class="row justify-content-center">
          
        <div class="col-lg-1">
          <div class="footer-widget">
          <div class="logo">
              <img src="<?=base_url();?>/assets/frontend/images/white-logo.png" alt="">
            </div>
          </div>
        </div>
<br>
<br>
        <div class="col-lg-12">
        <div class="section-heading">
        <h4 class="text-center">About Us</h4>
        </div>
          <div class="footer-widget">
            <p><?php echo isset($web_description) ? $web_description : ''; ?></p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="copyright-text">
            <p>Copyright © 2023 Chain: Posture Care App. All Rights Reserved. 
          <br>Design: <a href="https://templatemo.com/" target="_blank" title="css templates">NicKulay</a></p>
          </div>
        </div>
      </div>
    </div>
    </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="<?=base_url();?>/assets/frontend/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url();?>/assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url();?>/assets/frontend/js/owl-carousel.js"></script>
  <script src="<?=base_url();?>/assets/frontend/js/animation.js"></script>
  <script src="<?=base_url();?>/assets/frontend/js/imagesloaded.js"></script>
  <script src="<?=base_url();?>/assets/frontend/js/popup.js"></script>
  <script src="<?=base_url();?>/assets/frontend/js/custom.js"></script>
</body>
</html>
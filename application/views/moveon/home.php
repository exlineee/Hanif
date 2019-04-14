<?php $this->load->view('frame/header_view')?>

<div id="page-wrapper">
            <?php if($this->session->flashdata('success')):?>
                &nbsp;<div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong><?php echo $this->session->flashdata('success'); ?></strong>
                </div>
            <?php elseif($this->session->flashdata('error')):?>
                &nbsp;<div class="alert alert-warning">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong><?php echo $this->session->flashdata('error'); ?></strong>
                </div>
            <?php endif;?>
            <!--<img rel="stylesheet" src="<?=base_url()?>assets/images/bg.jpg" type="hidden">!-->
            <style>
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}
/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}
/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}
/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}
/* The dots/bullets/indicators */
.dot {
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
.active {
  background-color: #717171;
}
/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>

<div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Home</h3>
                </div>
                <div class="col-lg-12">
                    <div class="row text-center">
                        
                        <h2>Selamat Datang di Sistem Informasi Surat Masuk dan Penjadwalan di Kecamatan Sukasari</h2>
                    </div>
                  <div class="slideshow-container">

<div class="mySlides fade" align="center">
  <div class="numbertext">1 / 3</div>
  <img src="<?=base_url()?>assets/images/CNBLUE.jpg" style="width:60%">
  
</div>

<div class="mySlides fade" align="center">
  <div class="numbertext">2 / 3</div>
  <img src="<?=base_url()?>assets/images/BOYFRIEND.jpg" style="width:60%">
  
</div>

<div class="mySlides fade" align="center">
  <div class="numbertext">3 / 3</div>
  <img src="<?=base_url()?>assets/images/Astro.jpg" style="width:60%">
  
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();
function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
                   
                    
                        </div>
                    </div>
                </div>
                </div></div>

<?php $this->load->view('frame/footer_view')?>
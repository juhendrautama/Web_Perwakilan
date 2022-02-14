<!DOCTYPE html>
<html lang="en">
  <head>
      <?php $this->load->view('tools/head'); ?>
       <!-- galleri -->
    <link href="PagesGallery/css/style.css" rel="stylesheet"/>
    
    <!-- CSS Lightbox -->
    <link href="PagesGallery/css/lightbox.css" rel="stylesheet"/>
  </head>
  <body class="body">
 
 <?php $this->load->view('tools/menu_atas'); ?>

 
  <hr><hr><br>

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section id="services">
      <div class="container" data-aos="fade-up">

     

        <div class="row">

        <div class="col-md-8">
        <header class="section-header wow fadeInUp">
          <h3> Gallery Foto</h3>
        </header>
          <hr>
             <div class="panel panel-default ">
                    <div class="panel-heading" style="font-size:18px;">
                      <a href="Galleri/Album" class="btn-sm btn-primary">Kembali</a>
                      <b><center>Album : <?php echo $tampil_album_id_allbum->nama_allbum ?></center></b>
                    </div>

                    <div class="panel-body">

                         <div class="row">
                             <?php foreach($tampil_semua_foto_id_allbum->result()as $rs) {?>   
                              <div class="col-sm-4">
                            <center>    
                                  <a class="example-image-link"  href="img/foto/<?php echo $rs->gambar; ?>" data-lightbox="example-set" data-title="<?php echo $rs->nama; ?>" >
                                  <img class="media-object img-thumbnail user-img a" style="width:100%;height:200px;" alt="Bootstrap template" src="img/foto/<?php echo $rs->gambar; ?>" /><br>
                                  </a>
                                  <b><i><?php echo $rs->nama; ?></i></b>  
                              </center>
                            
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                  </div>    
        </div>  
        <div class="col-md-4">
          
          <div class="row">
            <div class="co-md-12">
              <div class="card text-dark bg-light" >
                <div class="card-header">GPR WIDGET</div>
                <div class="card-body">
                  <script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>
                  <div id="gpr-kominfo-widget-container"></div>       
                </div>
              </div>
            </div>
          </div>


              
        </div>


        </div>

      </div>
    </section><!-- End Services Section -->

   


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">


          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Profil</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Program</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Undahan</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Kontak</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Jl. Mayjen H M.J. Singedekane <br> Sungai Putri <br> Kec. Telanaipura <br> Kota Jambi  <br> Jambi 36361

              <strong>Phone:</strong><br>
              <strong>Email:</strong> <br>
            </p>

           

          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Media Sosial</h4>
            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>PEMERINTAH PROVINSI JAMBI  </strong>. All Rights Reserved
      </div>
      <div class="credits">
       
        Designed by <a href="https://bootstrapmade.com/">Diskominfo Provinsi jambi</a>
      </div>
    </div>
  </footer><!-- End Footer -->

 


 <?php $this->load->view('tools/js_footer'); ?>
 <script src="PagesGallery/js/lightbox-plus-jquery.min.js"></script>
  </body>
</html>
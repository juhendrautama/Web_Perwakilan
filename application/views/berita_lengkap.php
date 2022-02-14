<!DOCTYPE html>
<html lang="en">
  <head>
      <?php $this->load->view('tools/head'); ?>
  </head>
  <body class="body">
 
 <?php $this->load->view('tools/menu_atas'); ?>

 
  <hr>

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section id="services">
      <div class="container" data-aos="fade-up">

     

        <div class="row">

        <div class="col-md-12">
        
          <hr>
           <div class="panel panel-default">
                    <div class="panel-heading">
                      <b  style="font-size:18px;"><?php echo $tampil_berita_id->judul; ?></b>
                      <br>

                      Penulis : <?php echo $tampil_berita_id->penulis; ?> || Tgl : <?php echo $tampil_berita_id->tgl; ?>
                      <hr>
                    </div>
                    <div class="panel-body">
                          <img src="img/berita/<?php echo $tampil_berita_id->img; ?>" class="img-responsive" style="width:100% ; height:450%;">
                          <hr>
                          <?php echo $tampil_berita_id->isi_lengkap; ?>
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

  <a href="Berita/Selengkap_nya/<?php echo $tampil_berita_id->id_berita; ?>/<?php echo str_replace(' ','-',$tampil_berita_id->judul) ?>#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->


 <?php $this->load->view('tools/js_footer'); ?>
  </body>
</html>
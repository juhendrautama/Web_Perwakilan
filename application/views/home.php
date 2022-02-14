<!DOCTYPE html>
<html lang="en">
  <head>
  		<?php $this->load->view('tools/head'); ?>
  </head>
  <body class="body">
 
 <?php $this->load->view('tools/menu_atas'); ?>

 
  <hr><hr><br>

<!-- slider -->
     <?php $this->load->view('tools/slider'); ?>
<!-- slider -->






  <main id="main">

    <!-- ======= Services Section ======= -->
    <section id="services">
      <div class="container" data-aos="fade-up">

     

        <div class="row">

        <div class="col-md-8">
        <header class="section-header wow fadeInUp">
          <h3>Berita</h3>
        </header>
          <hr>

                            <div class="row">
                              <div class="col-md-12">
                                <?php foreach($tampil_berita_terbaru_1->result()as $rs){?>
                                    <h3><?php echo $rs->judul; ?></h3>
                                    <p>Penulis:<?php echo $rs->penulis; ?> || TGl:<?php echo $rs->tgl; ?> </p>
                                    <a href="Berita/Selengkap_nya/<?php echo $rs->id_berita; ?>/<?php echo str_replace(' ','-',$rs->judul) ?>" title="<?php echo $rs->judul; ?>">Read More..</a>
                                <?php } ?>    
                              </div>
                            </div>
                            <hr>
                            <div class="col-md-12">
                                  <div class="row">
                                <?php foreach($tampil_berita_terbaru_4->result()as $rs){?>
                                      <div class="col-md-6">
                                       <!--   -->
                                      <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                  <img src="img/berita/<?php echo $rs->img ?>" style="width:100%; height:80%;" class="img-responsive" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                  <a href="Berita/Selengkap_nya/<?php echo $rs->id_berita; ?>/<?php echo str_replace(' ','-',$rs->judul) ?>">
                                                    <p style="font-size:15px;"><?php echo $rs->judul;  ?></p>
                                                    </a>
                                                    <p style="font-size:10px;">Penulis:<?php echo $rs->penulis; ?> || TGl:<?php echo $rs->tgl; ?> </p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                        
                                      </div>
                              <?php } ?>
                                  </div>
                                </div>
                            </div>

        <div class="col-md-4">
          
           <div class="row">
            <div class="co-md-12">
              <div class="card text-dark" >
                <div class="card-header  bg-primary " style="color:#fff;"><center>10 Program Pokok PKK</center></div>
                <div class="card-body">
                  <div class="list-group">
                    <?php foreach($tampil_kategori_program->result()as $rs) {?>
                    <a href="Program_dan_kegiatan/Selengkap_nya/<?php echo $rs->id_kegitan_program; ?>/<?php echo str_replace(' ','-',$rs->nama) ?>">
                      <button type="button" class="list-group-item list-group-item-action"><?php echo $rs->nama; ?></button>
                    </a>
                    <?php } ?>
                  </div>       
                </div>
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="co-md-12">
              <div class="card text-dark " >
                <div class="card-header  bg-primary " style="color:#fff;"><center>GPR WIDGET</center></div>
                <div class="card-body">
                  <script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>
                  <div id="gpr-kominfo-widget-container"></div>       
                </div>
              </div>
            </div>
          </div>
          <br>
           <div class="row">
            <div class="co-md-12">
              <div class="card text-dark " >
                <div class="card-header  bg-primary " style="color:#fff;"><center>WEB TERKAIT</center></div>
                <div class="card-body">
                   <?php foreach($tampil_data_web_terkait->result()as $rs){?>
                  <a href="<?php echo $rs->link; ?>" target="blank">
                    <img class="media-object img-thumbnail user-img" style="width:100%;height:200px;"  src="img/web_terkait/<?php echo $rs->gambar_web_terkait; ?>" /> 
                  </a>
                    <?php } ?>      
                </div>
              </div>
            </div>
          </div>


              
        </div>


        </div>

      </div>
    </section><!-- End Services Section -->

   

   



   <!-- GAMBAR -->
     <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="section-bg">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3 class="section-title">Galleri</h3>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class=" col-lg-12">
          <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <?php foreach($tampil_semua_album->result()as $rs) {?>   
                <li data-filter=".filter-<?php echo $rs->id_album; ?>"><?php echo $rs->nama_allbum; ?></li>
                <?php } ?>
              </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

         <?php foreach($tampil_semua_foto_depan->result()as $rs) {?>
                  <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo $rs->id_album; ?>">
                    <div class="portfolio-wrap">
                      <figure>
                        <img src="img/foto/<?php echo $rs->gambar; ?>" class="img-fluid" alt="">
                        <a href="img/foto/<?php echo $rs->gambar; ?>" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="<?php echo $rs->nama; ?>">
                        <i class="bi bi-plus"></i>
                        </a>
                      </figure>

                      <div class="portfolio-info">
                        <h5><a href="portfolio-details.html"><?php echo $rs->nama; ?></a></h5>
                      </div>
                    </div>
                  </div>
           <?php } ?>





      </div>
      </div>
    </section><!-- End Portfolio Section -->
 <!-- GAMBAR -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h3>Contact Us</h3>
        </div>

        <div class="row contact-info">
<?php $no=1; foreach($tampil_data_kontak_addres->result()as $rs){?> 
          <div class="col-md-4">
            <div class="contact-address">
              <i class="bi bi-geo-alt"></i>
              <h3><?php echo $rs->nama_kontak; ?></h3>
              <address><?php echo $rs->isi; ?></address>
            </div>
          </div>
<?php } ?>

<?php $no=1; foreach($tampil_data_kontak_nomber_phone->result()as $rs){?>
          <div class="col-md-4">
            <div class="contact-phone">
              <i class="bi bi-phone"></i>
              <h3><?php echo $rs->nama_kontak; ?></h3>
              <p><a href="tel:<?php echo $rs->isi; ?>"><?php echo $rs->isi; ?></a></p>
            </div>
          </div>
<?php } ?>


<?php $no=1; foreach($tampil_data_kontak_email->result()as $rs){?>
          <div class="col-md-4">
            <div class="contact-email">
              <i class="bi bi-envelope"></i>
              <h3><?php echo $rs->nama_kontak; ?></h3>
              <p><a href="mailto:<?php echo $rs->isi; ?>"><?php echo $rs->isi; ?></a></p>
            </div>
          </div>
<?php } ?>

        </div>

        <div class="form">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d249.2655523455227!2d103.59174013738415!3d-1.6071395551411123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2588f5bc403133%3A0x29729fe476efb836!2sRumah%20Tenun!5e0!3m2!1sid!2sid!4v1635407157172!5m2!1sid!2sid" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        
        </div>

      </div>
    </section><!-- End Contact Section -->

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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->


 <?php $this->load->view('tools/js_footer'); ?>
  </body>
</html>
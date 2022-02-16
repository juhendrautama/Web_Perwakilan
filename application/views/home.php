<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view('tools/head'); ?>
</head>

<body id="home">


<!--MENU ATAS -->
    <?php $this->load->view('tools/menu_atas'); ?>
<!--MENU ATAS-->



<!-- banner -->
<div class="banner">         
    <img src="images/photos/31762.jpg"  class="img-responsive" alt="slide">
    <div class="welcome-message">
        <div class="wrap-info">
                       
            </div>
           
        </div>
    </div>
</div>
<!-- banner-->
<!-- / banner --><!--about-->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row"><br>
                <div class="col-md-12 text-center marb-35"><p>
                    <h3 class="header-h"> SELAMAT DATANG DI WEBSITE RESMI BADAN PENGHUBUNG</h3>
                    <p style="line-height: normal" class="MsoNormal">
<strong><span style="font-size: 14pt; font-family: &quot;Times New Roman&quot;, serif">PEMERINTAH PROVINSI JAMBI</span></strong><span style="font-size: 14pt; font-family: &quot;Times New Roman&quot;, serif"><br />
Alamat: Jl. Cidurian No.15-17, RT.5/RW.4, Cikini, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10330&nbsp;<br />
<p>
    <hr>


<!--[if !supportLineBreakNewLine]-->
<!--[endif]--></span>
</p>

                    </p>
                </div>

<!-- reservation-information -->
<div id="information" class="spacer reserve-info ">

<div class="row">
<?php  foreach($tampil_vidio_level_utama->result()as $rs){?>    
<div class="col-sm-7 col-md-8">
<h3><?php echo $rs->nama; ?></h3>
    <iframe src="https://www.youtube.com/embed/<?php echo $rs->link; ?>" width="100%" height="400"></iframe>
</div>
<?php } ?>
<div class="col-sm-5 col-md-4"><br>
    <form role="form" class="wowload fadeInRight">
        <div class="form-group">
            <img src="https://diskominfo.jambiprov.go.id/template2/images/kadiss.jpg" width="100%" height="350">
            <div class="featured-author-footer"><br>
<center>
  Ir. Nurachmat Herlambang, MMA 
</div>
<center>
 <div class="featured-author-footer">
 Kepala Dinas Kominfo Provinsi Jambi

</div>
</div>
</div>



<div id="information" class="spacer reserve-info ">
<div class="">
<div class="row">
<div class="col-sm-7 col-md-8">
<hr>    
<h3>BERITA</h3>
<hr>

<div class="row">
    <div class="col-md-12">
                                  <div class="row">
                                <?php foreach($tampil_berita_terbaru_4->result()as $rs){?>
                                      <div class="col-md-12">
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
</div>


<div class="col-sm-5 col-md-4">

          
        
        <div class="form-group">
            <div class="row">
            <div class="col-xs-4">
              <div class="title-box">
                    <h4 class="title">Radio Streaming</h4>
                    </div>
                    <div class="video">
                    <audio controls><source src="https://egov.riau.go.id/;stream.mp3" type="audio/mp3">Your browser does not support the audio element.</audio>
                 </div>

            </div>
            <div class="col-xs-4">
             
            </div>
            <div class="col-xs-4">
             
            </div>
          </div>
        </div>
        <div class="form-group">     
    </form>  


<div class="col-sm-6-col-md-3">
    <div class="col-ctr">
        <div class="row-heading"><br>
        <h4><span class="title">GPR WIDGET</span>
    <span class="border"></span>
</div>
<div class="info-list">
    <div class="info-list-ctn">
        
    </div>
    <div class="info-list-footer">
            <script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>

    <div id="gpr-kominfo-widget-container"></div>
    </div>
</div>
</div>
</div>
</div>
</div>  
</div>
</div>

<!-- reservation-information -->
<h2>Gallery Room </h2></center>
<!-- services -->
<div class=" services wowload fadeInUp">

    <div class="row">
        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="RoomCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/gal/room.jpg" class="img-responsive" alt="slide"></div>                
                <div class="item  height-full"><img src="images/photos/gal/roomv.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/gal/pasilitas.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#RoomCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#RoomCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Rooms<a href="rooms-tariff.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>


        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="TourCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/gal/tangga.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/gal/santai.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/gal/makan.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#TourCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#TourCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Tour Packages<a href="gallery.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>


        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="FoodCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/gal/Resepsionis.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/gal/lantai2.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/gal/santai.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#FoodCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#FoodCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Food and Drinks<a href="gallery.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>
    </div>
</div>
</div>

<div class="container" id="row-4">

    <div class="row galery-row">

        <div class="row-heading album-foto-terbaru"><br>

    <h3><center><div class="title"><hr>GALERI VIDEO TERBARU <h3></div>

    <div class="border hidden-xs hidden-sm"></div>

</div>


<div class="col-sm-4">

    <div class="info-list" style="margin-top: 10px;">

            <iframe src="https://www.youtube.com/embed/vq5pCJrCm2E" width="100%" height="250"></iframe>

            <a href="video-gubernur-jambi-h-al-haris-menerima-dua-penghargaan-abdi-bakti-tani-2021.html"><div class="fp-title-album">Gubernur Jambi H. Al Haris menerima dua penghargaan Abdi Bakti Tani 2021</div></a>

    </div>
</div>
<div class="col-sm-4">

    <div class="info-list" style="margin-top: 10px;">

            <iframe src="https://www.youtube.com/embed/6ru77bteXtQ" width="100%" height="250"></iframe>

            <a href="video--gubernur-al-haris-kita-harus-bijak-dalam-bermedsos.html"><div class="fp-title-album"> Gubernur Al Haris: Kita Harus bijak dalam bermedsos</div></a>

    </div>
    </div>

<div class="col-sm-4">

    <div class="info-list" style="margin-top: 10px;">

            <iframe src="https://www.youtube.com/embed/IEE_N9MRccA" width="100%" height="250"></iframe>

            <a href="video-----.html"><div class="fp-title-album">Vaksin Provinsi Jambi   </div></a>

    </div>
    </div>
    </div>
<hr>
<h2><div class="title"><hr>LINK TERKAIT</div></h2>
<marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">

                        
                        <a href="http://kominfo.go.id" target="_BLANK"><img src="foto_pasangiklan/851409KOMINFO.jpg"  width="175" height="89"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                        
                        <a href="http://kemendagri.go.id" target="_BLANK"><img src="foto_pasangiklan/133544kemendagri.jpg"  width="175" height="89"></a>&nbsp;&nbsp;&nbsp;&nbsp;

                        
                        <a href="https://www.setneg.go.id/" target="_BLANK"><img src="foto_pasangiklan/995492sekretariatanegra.jpg"  width="175" height="89"></a>&nbsp;&nbsp;&nbsp;&nbsp;

                        
                        <a href="http://www.lkpp.go.id/v3/" target="_BLANK"><img src="foto_pasangiklan/355621lkpp.jpg"  width="175" height="89"></a>&nbsp;&nbsp;&nbsp;&nbsp;

                        
                        <a href="https://ulp.lkpp.go.id/" target="_BLANK"><img src="foto_pasangiklan/38295ulp.jpg"  width="175" height="89"></a>&nbsp;&nbsp;&nbsp;&nbsp;

                        
                        <a href="http://lpse.jambiprov.go.id/eproc4/" target="_BLANK"><img src="foto_pasangiklan/896828lpse.jpg"  width="175" height="89"></a>&nbsp;&nbsp;&nbsp;&nbsp;

                        
                        <a href="http://www.bpk.go.id/" target="_BLANK"><img src="foto_pasangiklan/64973BPKRI.jpg"  width="175" height="89"></a>&nbsp;&nbsp;&nbsp;&nbsp;

                        
                        <a href="https://www.kpk.go.id/id" target="_BLANK"><img src="foto_pasangiklan/179043kpk.jpg"  width="175" height="89"></a>&nbsp;&nbsp;&nbsp;&nbsp;

                        
                        <a href="https://www.kejaksaan.go.id/" target="_BLANK"><img src="foto_pasangiklan/127600kejaksaanrepublikindonesia.jpg"  width="175" height="89"></a>&nbsp;&nbsp;&nbsp;&nbsp;

                        
                        <a href="http://jambiprov.go.id/v2/profil-website-kabupaten-dan-kota.html" target="_BLANK"><img src="foto_pasangiklan/229070851409KOMINFO.jpg"  width="175" height="89"></a>&nbsp;&nbsp;&nbsp;&nbsp;

                        
                        <a href="http://bappenas.go.id" target="_BLANK"><img src="foto_pasangiklan/63343BAPENAS.jpg"  width="175" height="89"></a>&nbsp;&nbsp;&nbsp;&nbsp;

                        
                        <a href="http://www.djpk.kemenkeu.go.id/" target="_BLANK"><img src="foto_pasangiklan/856384KEMENKEU.jpg"  width="175" height="89"></a>&nbsp;&nbsp;&nbsp;&nbsp;

                        
                        <a href="http://bps.go.id" target="_BLANK"><img src="foto_pasangiklan/235264BPS.jpg"  width="175" height="89"></a>&nbsp;&nbsp;&nbsp;&nbsp;

                        
                        <a href="http://simaya.jambiprov.go.id" target="_BLANK"><img src="foto_pasangiklan/324170simaya.jpg"  width="175" height="89"></a>&nbsp;&nbsp;&nbsp;&nbsp;

                        
                        <a href="https://sikejar.id" target="_BLANK"><img src="foto_pasangiklan/873649sikejar.jpg"  width="175" height="89"></a>&nbsp;&nbsp;&nbsp;&nbsp;

                         <a href="https://www.lapor.go.id/" target="_BLANK"><img src="foto_pasangiklan/lapor.png"  width="175" height="89"></a>&nbsp;&nbsp;&nbsp;&nbsp;

                        
                        </marquee>


<!-- services -->



<br>
<br><br><br>

<br><br><br>
<hr>

<footer class="spacer">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <h4>Badan Penghubung Provinsi Jambi</h4>
                     <p>Alamat: Jl. Cidurian No.15-17, RT.5/RW.4, Cikini, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta  | 10330</p>
                     <p>Telp : (021) 31935635  | Fax (021) 3922638</p>
                     <p>Email : bapengdapprovjambi@jambiprov.go.id</p>
               </div>              
                 
                 <div class="col-sm-3">
                   
                     <h4>Covid-19 Prov Jambi</h4>
               <p>Semua informasi mengenai Covid 19 di Provinsi Jambi tercakup dalam satu website covid 19 Provinsi Jambi.</p>
               <div>
                  <a target="_blank" href="https://corona.jambiprov.go.id/v2/"><img width="40%" class="img-fluid" src="https://pertuni.or.id/wp-content/uploads/2020/03/covid-19-4960254_1920-651x350.png" alt=""></a>
               </div>

                </div>
                 <div class="col-sm-4 subscribe">
                    <h4>Media Sosial</h4>
                   
                    <div class="social">
                    <a href="#"><i class="fa fa-facebook-square" data-toggle="tooltip" data-placement="top" data-original-title="facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"  data-toggle="tooltip" data-placement="top" data-original-title="instragram"></i></a>
                    <a href="#"><i class="fa fa-twitter-square" data-toggle="tooltip" data-placement="top" data-original-title="twitter"></i></a>
                    <a href="#"><i class="fa fa-tumblr-square" data-toggle="tooltip" data-placement="top" data-original-title="tumblr"></i></a>
                    <a href="#"><i class="fa fa-youtube-square" data-toggle="tooltip" data-placement="top" data-original-title="youtube"></i></a>
                    </div>
                 <img src="images/download.jpg" alt="HTML5 Icon" width="133" height="128">
                </div>
            </div>
            <!--/.row--> 
        </div>
        <!--/.container-->    
    
    <!--/.footer-bottom--> 
</footer>




<div class="row">
    <div class="col-md-12">
        
        <div class="text-center copyright">Powered by <a href="http://thebootstrapthemes.com">COPYRIGHT © DISKOMINFO PROVINSI JAMBI 2022. ALL RIGHT RESERVED.</a></div>

        <a href="#home" class="toTop scroll"><i class="fa fa-angle-up"></i></a>

        <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
        <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
            <!-- The container for the modal slides -->
            <div class="slides"></div>
            <!-- Controls for the borderless lightbox -->
            <h3 class="title">title</h3>
            <a class="prev">‹</a>
            <a class="next">›</a>
            <a class="close">×</a>
            <!-- The modal dialog, which will be used to wrap the lightbox content -->    
        </div>

    </div>
</div>






<script src="assets/jquery.js"></script>

<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>

<!-- uniform -->
<script src="assets/uniform/js/jquery.uniform.js"></script>


<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="assets/mobile/touchSwipe.min.js"></script>

<!-- jquery mobile -->
<script src="assets/respond/respond.js"></script>

<!-- gallery -->
<script src="assets/gallery/jquery.blueimp-gallery.min.js"></script>


<!-- custom script -->
<script src="assets/script.js"></script>










</body>
</html>






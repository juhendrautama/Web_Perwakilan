 <header id="header" class="fixed-top d-flex align-items-center header bg-primary" >
    <div class="container-fluid">

      <div class="row justify-content-center align-items-center">
        <div class="col-md-10 d-flex align-items-center justify-content-between">
          <h1>
            <img src="img/logo/logo2.png" width="50" height="40">
            <a href="" style="font-size: 60%; color:white;">TP PKK PROVINSI JAMBI</a>
          </h1>
          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto active" href="#">Home</a></li>
               <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                 <?php foreach($tampil_data_profil->result()as $rs) {?> 
                  <li>
                    <a class="dropdown-item a" href="Profil/Selengkap_nya/<?php echo $rs->id_profil; ?>/<?php echo str_replace(' ','-',$rs->nama) ?>">
                            <?php echo $rs->nama; ?>
                        </a>
                  </li>
                <?php } ?>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Program</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                   <?php foreach($tampil_kategori_program->result()as $rs) {?>
                  <li>
                     <a class="dropdown-item a" href="Program_dan_kegiatan/Selengkap_nya/<?php echo $rs->id_kegitan_program; ?>/<?php echo str_replace(' ','-',$rs->nama) ?>">
                            <?php echo $rs->nama; ?>
                        </a>
                </li>
                 <?php } ?>
                 
                </ul>
              </li>

               <li class="dropdown"><a href="#"><span>Kegiatan</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                   <?php foreach($tampil_kategori_kegiatan->result()as $rs) {?>
                  <li>
                     <a class="dropdown-item a" href="Program_dan_kegiatan/Selengkap_nya/<?php echo $rs->id_kegitan_program; ?>/<?php echo str_replace(' ','-',$rs->nama) ?>">
                            <?php echo $rs->nama; ?>
                        </a>
                </li>
                 <?php } ?>
                 
                </ul>
              </li>
              <li><a class="nav-link scrollto " href="Undahan">Undahan</a></li>
              <li class="dropdown"><a href="#"><span>Galleri</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a  class="dropdown-item a" href="Galleri/Album">Galleri Foto</a></li>
                  <li><a  class="dropdown-item a" href="Galleri/Vidio">Galleri Vidio</a></li>
                </ul>
              </li>
              <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
               
              
             
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->
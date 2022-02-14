<nav class="navbar  navbar-default" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img src="images/logo_banhub_01.png"  alt="holiday crown" style="width:330px;height:70px;">
</a>
    </div>

    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">     
         
        <li><a   href="Home">Home </a></li>

        <li>
          <a  href="#" class="dropdown-toggle dropdown" type="button" data-toggle="dropdown">
            Profil
            <span class="caret"></span>
          </a>

          <ul class="dropdown-menu">
              <?php foreach($tampil_data_profil->result()as $rs) {?> 
                <li> 
                  <a class="dropdown-item a" href="Profil/Selengkap_nya/<?php echo $rs->id_profil; ?>/<?php echo str_replace(' ','-',$rs->nama) ?>">
                              <?php echo $rs->nama; ?>
                          </a>
                </li>        
              <?php } ?>               
          </ul>
        
        </li>

        <li><a href="Berita">Berita </a>
        <li><a href="#" class="dropdown-toggle dropdown" type="button" data-toggle="dropdown">Informasi
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <?php foreach($tampil_informasi->result()as $rs) {?> 
              <li>
                <a href="Profil/Selengkap_nya/<?php echo $rs->id_kegitan_program; ?>/<?php echo str_replace(' ','-',$rs->nama) ?>">
                  <?php echo $rs->nama; ?>
                </a>
              </li>        
              <?php } ?>  
            </ul>
        </li> 

        <li>
          
            <a href="#" class="dropdown-toggle dropdown" type="button" data-toggle="dropdown">Gallery
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="Galleri/Album">Foto</a></li>
              <li><a href="Galleri/Vidio">Video</a></li>            
            </ul>
        
        </li>

        <li><a href="contact.php">Contact</a></li>

      </ul>
    </div>
  </div>
</nav>
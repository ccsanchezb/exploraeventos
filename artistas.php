<?php 
  $page = "artistas";
  session_start();
  include 'layout/header.php';
  include 'layout/topnavbar.php';
  include 'layout/modal.php';
  require 'bd/open.php';
  require 'bd/login.php';
?>

<section id="grupos">
  <h1>Grupos</h1>
  <div class="boxgrid captionfull g1">
    <div class="cover boxcaption" style="top: 260px;">
      <h3>Grupo 1</h3>
      <p>
        <br>        
      </p>
      <a href="" target="_BLANK">
      </a>
    </div>    
  </div>

  <div class="boxgrid captionfull g2">
    <div class="cover boxcaption" style="top: 260px;">
      <h3>Grupo 2</h3>
      <p>
        <br>        
      </p>
      <a href="" target="_BLANK">
      </a>
    </div>    
  </div>

  <div class="boxgrid captionfull g3">
    <div class="cover boxcaption" style="top: 260px;">
      <h3>Grupo 3</h3>
      <p>
        <br>        
      </p>
      <a href="" target="_BLANK">
      </a>
    </div>    
  </div>
</section>

<section id="artistas">
  <h1>Bailarines</h1>
  <div class="boxgrid captionfull b1">
    <div class="cover boxcaption" style="top: 260px;">
      <h3>Artista 1</h3>
      <p>      
        <br>        
      </p>
      <a href="" target="_BLANK">
        </a>
    </div>    
  </div>
  <div class="boxgrid captionfull b2">
    <div class="cover boxcaption" style="top: 260px;">
      <h3>Artista 2</h3>
      <p>      
        <br>        
      </p>
      <a href="" target="_BLANK">
        </a>
    </div>    
  </div>
  <div class="boxgrid captionfull b3">
    <div class="cover boxcaption" style="top: 260px;">
      <h3>Artista 3</h3>
      <p>      
        <br>        
      </p>
      <a href="" target="_BLANK">
        </a>
    </div>    
  </div>
</section>

<?php 
  require 'bd/close.php';
  include 'layout/content_footer.php';
  include 'layout/footer.php';
?>
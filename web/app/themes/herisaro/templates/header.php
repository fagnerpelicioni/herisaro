<header class="banner">


  
  <nav class="navbar navbar-default top-bar affix" data-spy="affix" data-offset-top="250" >


      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>



          <a class="navbar-brand" href="<?php home_url( ); ?>">HERI<span>SA</span>RO</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          
                      <?php wp_nav_menu( array (
                                        'theme_location' => 'primary',
                                        'container'      => false,
                                        'menu_class'     => 'nav navbar-nav navbar-right'
                                        )); ?>
        
        </div><!--/.nav-collapse -->
      </div>
    </nav>

</header>

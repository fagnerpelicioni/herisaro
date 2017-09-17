
<div class="jumbotron" 
           style=" background: url('<?php get_the_post_thumbnail_url() ?>');" id="home">
 <div class="container">
     <div class="row">
         <div class="col-md-6 col-sm-12 content-sec">
            
             <h1>Reservas de visitas.</h1>
         </div>
     </div>
    </div>
</div>

<aside class="under-banner">
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center content-box" >
                <i class="fa fa-area-chart"></i>
                <h3>Calendário</h3>
                <p>Verifique a disponibilidade no calendário, e marque uma visita.</p>
            </div>
        </div>
    </div>      

</aside>
<div class="container">
    <div class="row">   
        <div class="col-lg-6 col-md-6 col-sm-6">
        <?php the_content(); ?>
</div>
</div>
</div>

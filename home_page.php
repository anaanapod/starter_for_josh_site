<?php
    /*
    Template Name: Home page
    */
    ?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>

      
      <section class="container-fluid aboutbg text-center">
        
          <div class="container">
          
<!--placeholder for aboutme   -->

    <h2><?php the_field('titleforaboutme'); ?></h2><!--  custom field for the aboutme content-->    
              <p class="particle"><?php the_field('subtitleforaboutme'); ?></p>
              <p class="about-text"><?php the_field('paragraphforaboutme'); ?></p>
          
              <div class="blocker"></div>
          </div>
          
      
      </section>
      
      <section class="container-fluid articlesbg">
          <div class="container">
          <div class="row">
            <div>
              <h3><?php the field('titleforarticles'); ?></h3>
              </div>  
              
              <div class="col-md-4 article-cent" >
                  
                  <img class="img-responsive" alt="portrait" src="<?php the_field('articleimage'); ?>">
                  <h4> <?php the_field('articletitle'); ?></h4>
                  <p><?php the_field('articleecert'); ?></p>
                  <a href="<?php the_field('readmore'); ?>" class="readmore"> CONTINUE READING</a>
<!--placeholder for col1   -->
                  
                  
              </div>
              
              
             <div class="col-md-4 article-cent">
                
  <!--placeholder for col1   -->   
                  
                 
              </div>
              
              
              
              <div class="col-md-4 article-cent">
                  
 <!--placeholder for  col1   --> 
             
              </div>
              
              
              
              
              
              </div>  
<!--           row-->
              </div>
<!--          container-->
          </section>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>
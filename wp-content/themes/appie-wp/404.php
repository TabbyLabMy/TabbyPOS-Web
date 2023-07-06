
<?php
/**
 * the template for displaying 404 pages (Not Found)
 */

   get_header();
   $error_image          = appie_option('error_404_image');
   if($error_image == '' ){
      $error_image = APPIE_IMG.'/error.png';
   }
  
?>
      <?php if(appie_option('error_enable_main_container',0)): ?>
         <main id="site-content" class="content-area section-padding" role="main">
      <?php  endif; ?>

         <div class="appie-error-area">
            <div class="container">
                  <div class="row justify-content-center">
                     <div class="col-lg-6">
                        <div class="appie-error-content text-center">
                              <?php if($error_image !=''): ?>
                                 <img src="<?php echo esc_url($error_image); ?>" alt="<?php echo esc_attr(bloginfo('name')); ?> ">
                              <?php endif; ?>

                              <span><?php echo esc_html__('Sorry!','appie'); ?></span>

                              <?php if(appie_option('error_title','The page can’t be found.') !=''): ?>
                                    <h3> <?php echo esc_html( appie_option('error_title','The page can’t be found.') ); ?> </h3>
                              <?php endif; ?>
                              <?php if( appie_option('error_text',"The page you're looking for isn't available. Try with another page or use the go home button below") !='' ): ?>
                                    <p> <?php echo esc_html( appie_option('error_text',"The page you're looking for isn't available. Try with another page or use the go home button below") ); ?> </p>
                              <?php endif; ?>
                              <?php if( appie_option( 'enable_404_return_home_button',1 ) ): ?>
                                 <a href="<?php echo esc_url( home_url('/') ); ?>"><?php echo esc_html__('Go Back Home','appie'); ?> <i class="fal fa-arrow-right"></i></a>
                              <?php endif; ?>
                        </div>
                     </div>
                  </div>
            </div>
         </div>
         <!-- 404 End -->
      
      <?php if(appie_option('error_enable_main_container',0)): ?>        
         </main><!-- Main container end -->
      <?php  endif; ?>

<?php get_footer(); ?>
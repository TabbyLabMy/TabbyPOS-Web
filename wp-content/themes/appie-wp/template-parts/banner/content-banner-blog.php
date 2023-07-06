<?php 


      $banner_image                = '';
      $banner_url                  = APPIE_IMG.'/page-bg.jpg';
      $banner_title                = get_bloginfo( 'name' );
      $show                        = appie_option('blog_banner_show',1);
      $show_breadcrumb             = appie_option('blog_show_breadcrumb',1);
      $banner_blog_image           = appie_option('banner_blog_image');
      $banner_class                = '';
      $enable_transparent_header   = appie_option( 'enable_transparent_header' , 0 );
      if( appie_option( 'banner_blog_title') != '' ){
         $banner_title = appie_option( 'banner_blog_title');
      }

      if( isset($banner_blog_image['background-image']['url']) && $banner_blog_image['background-image']['url'] == ''){
         $banner_image = 'style="background-image:url('.esc_url( $banner_url ).');"';
      }

      if( is_singular( 'post' ) ){
         $show_breadcrumb = appie_option('blog_single_show_breadcrumb',0);
      }
     
     
      
?>
<?php if($show): ?>
      <div class="appie-page-title-area <?php echo esc_attr( $enable_transparent_header? 'ts-header' : '' ); ?>" <?php echo appie_kses($banner_image); ?>>
         <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="appie-page-title-item">
                           <h3 class="title">
                              <?php 
                                    if(is_archive()){
                                       the_archive_title();
                                    }else{
                                       echo esc_html($banner_title);
                                    }
                              ?>
                           </h3>
                           <nav aria-label="breadcrumb">
                              <?php if($show_breadcrumb): ?>
                              
                                 <?php appie_get_breadcrumbs(''); ?>
                              
                              <?php endif; ?>
                           </nav>
                     </div>
                  </div>
               </div>
         </div>
      </div>
<?php endif; ?>

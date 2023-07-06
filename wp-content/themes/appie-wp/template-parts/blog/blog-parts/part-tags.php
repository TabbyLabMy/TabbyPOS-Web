<?php 
   
   $single_post_tags = appie_option('single_post_tags','1');

   if( ! $single_post_tags ){
      return;
   }

   $tag_list = get_the_tag_list();

   if(!$tag_list){
      return;
   } 
   
   ?> 
   <div class="post-footer-tags clearfix">
      <div class="post-tags">
         <h5> <?php echo  esc_html__( 'Tags', 'appie' ).':'; ?> </h5>
         <?php echo appie_kses($tag_list); ?>
      </div>
   </div>
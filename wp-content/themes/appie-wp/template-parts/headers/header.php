<?php
    // get header customizer option 
  
    $logo                      = APPIE_IMG . '/logo-white.svg';
    $appie_logo_url            = appie_option( 'logo' ) == ''? $logo : appie_option( 'logo' );
    $sticky_logo               = APPIE_IMG.'/logo.svg';
    $appie_sticky_logo_url     = appie_option( 'sticky_logo' ) == '' ? $sticky_logo : appie_option( 'sticky_logo' );
    $appie_offcanvas_logo_url  = appie_option( 'offcanvas_logo' ) == '' ? $sticky_logo : appie_option( 'offcanvas_logo' );
    $enable_cta                = appie_option( 'enable_cta' , false );
    $enable_sticky_header      = appie_option( 'enable_sticky_header' , 1 );
    $enable_transparent_header = appie_option( 'enable_transparent_header' , 0 );
    $enable_user_account       = appie_option( 'enable_user_account' , false );
   
    $user_account_link         = appie_option( 'user_account_link' , false );
    $cta_text                  = appie_option( 'cta_text' , 'Get Started' );
    $cta_link                  = appie_option( 'cta_link' , '#' );
    $social_links              = appie_option( 'social_link' , [] );
    $fcontent                  = appie_option( 'offcanvas_footer_content' , [] );
    $header_style_override     = appie_meta_option(get_the_id(),'header_style_override',0);
    
    if($header_style_override && is_page()){

        $appie_sticky_logo_url = appie_meta_option(get_the_id(),'sticky_logo') == ''?$appie_sticky_logo_url:appie_meta_option(get_the_id(),'sticky_logo');
        $appie_logo_url = appie_meta_option(get_the_id(),'logo') == ''?$appie_logo_url:appie_meta_option(get_the_id(),'logo');
        $enable_cta     = appie_meta_option(get_the_id(),'enable_button_override',0);
        
    }


    $col_lg_1 = 7;
    $col_lg_2 = 3;

    if(($enable_user_account && !$enable_cta) ||
     (!$enable_user_account && $enable_cta) ||
     (!$enable_user_account && !$enable_cta)
     ){
        $col_lg_1 = 8;
        $col_lg_2 = 2;
    }

    if(is_404()){

        $enable_transparent_header = appie_option('enable_404_transparent_header',true);
  
    }

     
?>

     <!--====== OFFCANVAS MENU PART START ======-->

        <div class="off_canvars_overlay">
        </div>
        <div class="offcanvas_menu">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="offcanvas_menu_wrapper">
                            <div class="canvas_close">
                                <a href="javascript:void(0)"><i class="fa fa-times"></i></a>  
                            </div>
                            <div class="offcanvas-brand text-center mb-40">
                            <a href="<?php echo esc_url( home_url('/') ); ?>">
                                <?php echo appie_get_logo_type_tag( $appie_offcanvas_logo_url, 'img-fluid' ); ?>
                            </a>
                            </div>
                            <div id="menu" class="text-left ">
                                <?php get_template_part( 'template-parts/navigations/nav', 'mobile' ); ?>
                            </div>
                            <?php if(appie_option('enable_blog_social_link') == true && is_array($social_links) && !empty($social_links)): ?>
                              
                                <div class="offcanvas-social">
                                    <ul class="text-center">
                                         <?php foreach($social_links as $item): ?>
                                           
                                            <li><a href="<?php echo esc_url($item['bookmark_url']); ?>"><i class="<?php echo esc_attr($item['bookmark_icon']); ?>"></i></a></li>
                                       
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            <?php if(is_array($fcontent) && !empty($fcontent)): ?>
                            <div class="footer-widget-info">
                                <ul>
                                    <?php foreach($fcontent as $item): ?>
                                        <?php

                                            $link = $item['link'];
                                            $link_type = $item['link_type'];

                                            if($link_type == 'phone'){
                                                 $link = 'tel:'.$link;
                                            }

                                            if($link_type == 'email'){
                                                $link = 'mailto:'.$link;
                                            }
                                   
                                        ?>
                                        <li>
                                            <?php if($link !=''): ?>
                                                <a href="<?php echo 'url' == $link_type ? esc_url( $link ) : esc_attr($link); ?>">
                                            <?php endif; ?>    
                                                <i class="<?php echo esc_attr($item['icon']); ?>"></i>
                                                <?php echo esc_html($item['content']); ?>
                                            <?php if($link !=''): ?>
                                                </a>
                                            <?php endif; ?>  
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
    <!--====== OFFCANVAS MENU PART ENDS ======-->
               
   <!--====== PART START ======-->
                
    <header class="appie-header-area <?php echo esc_attr($enable_transparent_header? 'appie-transparent-header' : ''); ?> <?php echo esc_attr($enable_sticky_header?'appie-sticky' : ''); ?>">
        <div class="container">
            <div class="header-nav-box">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-4 col-sm-5 col-6 order-1 order-sm-1">
                        <div class="appie-logo-box">
                            <a href="<?php echo esc_url( home_url('/') ); ?>">
                                <?php echo appie_get_logo_type_tag( $appie_logo_url, 'img-fluid main-logo' ); ?>
                                <?php echo appie_get_logo_type_tag( $appie_sticky_logo_url , 'img-fluid sticky-logo d-none' ); ?>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-<?php echo esc_attr($col_lg_1); ?> col-md-1 col-sm-1 order-3 order-sm-2">
                        <div class="appie-header-main-menu">
                            <?php get_template_part( 'template-parts/navigations/nav', 'primary' ); ?>
                        </div>
                    </div>
                    <div class="col-lg-<?php echo esc_attr($col_lg_2); ?> col-md-7 col-sm-6 col-6 order-2 order-sm-3">
                        <div class="appie-btn-box text-right">
                            <?php if($enable_user_account): ?>
                                <a class="login-btn" href="<?php echo esc_url($user_account_link); ?>"><i class="fal fa-user"></i><?php echo appie_option('user_account_text','Login') ?></a>
                            <?php endif; ?>

                            <?php if($enable_cta): ?>
                                <a class="main-btn ml-30" href="<?php echo esc_url($cta_link); ?>"><?php echo esc_html($cta_text); ?></a>
                            <?php endif; ?>

                            <div class="toggle-btn ml-30 canvas_open d-lg-none d-block">
                                <i class="fa fa-bars"></i>
                            </div>
   
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </header>





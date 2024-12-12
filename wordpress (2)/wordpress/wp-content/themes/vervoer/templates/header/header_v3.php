<?php
$options = vervoer_WSH()->option(); 
$allowed_html = wp_kses_allowed_html( 'post' );

//Logo Settings
$image_logo = $options->get( 'image_normal_logo' );
$logo_dimension = $options->get( 'normal_logo_dimension' );

$image_logo2 = $options->get( 'image_normal_logo2' );
$logo_dimension2 = $options->get( 'normal_logo_dimension2' );

$image_logo3 = $options->get( 'image_normal_logo3' );
$logo_dimension3 = $options->get( 'normal_logo_dimension3' );

$image_logo4 = $options->get( 'image_normal_logo4' );
$logo_dimension4 = $options->get( 'normal_logo_dimension4' );

$logo_type = '';
$logo_text = '';
$logo_typography = '';
?>


<!-- Main Header -->
<header class="main-header home-two">

    <!-- Header Upper -->
    <div class="header-upper" style="background-image: url(<?php echo esc_url(get_template_directory_uri().'/assets/images/background/header-bg.jpg');?>);">
        <div class="container">
            <div class="header-outer-box">
                <div class="header-top-left">                    
                    <div class="contact-info">
                        <ul>
							<?php if( $options->get( 'phone_v1' ) ):?>
                            <li><a href="<?php echo wp_kses( $options->get( 'phone_link_v1'), $allowed_html ); ?>"><i class="flaticon-telephone"></i><?php echo wp_kses( $options->get( 'phone_v1'), $allowed_html ); ?></a></li>
							<?php endif; ?>
							<?php if( $options->get( 'email_v1' ) ):?>
                            <li><a href="<?php echo wp_kses( $options->get( 'email_link_v1'), $allowed_html ); ?>"><i class="flaticon-mail"></i><?php echo wp_kses( $options->get( 'email_v1'), $allowed_html ); ?></a></li>
							<?php endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="header-top-right">
					<?php if( $options->get( 'header_social_show_v1' ) ):?>
                    <div class="social-midea">
                        <ul>
						
                            <?php if( $options->get( 'socialtitle_v1' ) ):?>
                            <li><?php echo wp_kses( $options->get( 'socialtitle_v1'), $allowed_html ); ?></li>
							<?php endif; ?>
							
							<?php echo wp_kses( $options->get( 'header_social_v1'), $allowed_html ); ?>
							
                        </ul>
                    </div>
					<?php endif; ?>
                </div>
            </div>
            <div class="upper-inner">
                <div class="logo-box">
                    <figure class="logo">
						<?php echo vervoer_logo( $logo_type, $image_logo2, $logo_dimension2, $logo_text, $logo_typography ); ?>
					</figure>
                </div>
                <ul class="company-info">
					<?php if( $options->get( 'address_title3_v1' ) ):?>
                    <li class="office-location">
                        <i class="flaticon-airplane-2"></i>
                        <h6><?php echo wp_kses( $options->get( 'address_title3_v1'), $allowed_html ); ?></h6>
                        <span><?php echo wp_kses( $options->get( 'address_text_v1'), $allowed_html ); ?></span>
                    </li>
					<?php endif; ?>
					<?php if( $options->get( 'phone_link_v1' ) ):?>
                    <li class="office-time">
                        <i class="flaticon-time"></i>
                        <h6><?php echo wp_kses( $options->get( 'time_title_v1'), $allowed_html ); ?></h6>
                        <span><?php echo wp_kses( $options->get( 'open_time_v1'), $allowed_html ); ?></span>
                    </li>
					<?php endif; ?>
                </ul>
				<?php if( $options->get( 'button_show_v1' ) ):?>
                <div class="header-right-button">
                    <a href="<?php echo wp_kses( $options->get( 'button_link_v1'), $allowed_html ); ?>" class="button-style-two"><i class="fa fa-paper-plane"></i><?php echo wp_kses( $options->get( 'button_v1'), $allowed_html ); ?></a>
                </div>
				<?php endif; ?>
            </div>
        </div>
    </div>
    <!-- End Header Upper -->

    <!-- Header Lower -->
    <div class="header-lower">
        <div class="container"> 
            <div class="outer-box">
                <div class="menu-area">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <?php wp_nav_menu( array( 'theme_location' => 'main_menu', 'container_id' => 'navbarSupportedContent',
								'container_class'=>'collapse navbar-collapse sub-menu-bar',
								'menu_class'=>'nav navbar-nav',
								'fallback_cb'=>false, 
								'add_li_class'  => 'nav-item',
								'items_wrap' => '%3$s', 
								'container'=>false,
								'depth'=>'3',
								'walker'=> new Bootstrap_walker()  
								) ); ?>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="nav-right">
                    <div class="search-box search-toggler">
                        <i class="flaticon-search"></i>
                    </div>
                    <div class="side-menu-nav sidemenu-nav-toggler">
                        <i class="flaticon-menu"></i>
                    </div>
                </div>                
            </div>
        </div>
    </div>
    <!-- End Header Lower -->

    <!-- Sticky Header-->
    <div class="sticky-header">
        <div class="container">     
            <div class="outer-box">
                <div class="logo-box">
                    <figure class="logo">
						<?php echo vervoer_logo( $logo_type, $image_logo, $logo_dimension, $logo_text, $logo_typography ); ?>
					</figure>
                </div>
                <div class="menu-area">
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
            </div>
        </div> 
    </div>
    <!-- End Sticky Header-->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn">X</div>
        
        <nav class="menu-box">
            <div class="nav-logo">
				<?php echo vervoer_logo( $logo_type, $image_logo2, $logo_dimension2, $logo_text, $logo_typography ); ?>
			</div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <div class="contact-info">
			
                <h4><?php echo wp_kses( $options->get( 'address_title_v1'), $allowed_html ); ?></h4>
				
                <ul>
				
                    <li><?php echo wp_kses( $options->get( 'address_v1'), $allowed_html ); ?></li>
					
					
                    <?php if( $options->get( 'phone_link_v1' ) ):?>
					<li><a href="<?php echo wp_kses( $options->get( 'phone_link_v1'), $allowed_html ); ?>"><i class="flaticon-telephone"></i><?php echo wp_kses( $options->get( 'phone_v1'), $allowed_html ); ?></a></li>
					<?php endif; ?>
					
					
                    <?php if( $options->get( 'email_v1' ) ):?>
					<li><a href="<?php echo wp_kses( $options->get( 'email_link_v1'), $allowed_html ); ?>"><i class="flaticon-mail"></i><?php echo wp_kses( $options->get( 'email_v1'), $allowed_html ); ?></a></li>
					<?php endif; ?>
					
					
                </ul>
            </div>
			<?php if( $options->get( 'header_social_show_v1' ) ):?>
            <ul class="social-links centred">
                <?php echo wp_kses( $options->get( 'header_social_v1'), $allowed_html ); ?>
            </ul>
			<?php endif; ?>
        </nav>
    </div>
    <!-- End Mobile Menu -->

</header>
<!-- End Main Header -->



<!-- Hidden Sidebar -->
<section class="hidden-sidebar close-sidebar">
    <div class="wrapper-box">
        <div class="content-wrapper">
            <div class="hidden-sidebar-close"><i class="flaticon-cross"></i></div>
            <div class="text-widget mb_30">
                <div class="logo">
					<?php echo vervoer_logo( $logo_type, $image_logo, $logo_dimension, $logo_text, $logo_typography ); ?>
				</div>
                <div class="text"><?php echo wp_kses( $options->get( 'about_text_v1'), $allowed_html ); ?></div>
            </div>
            <!-- PDF Widget -->
            <div class="pdf-widget mb_30">
                <div class="content mb_10">
                    <div class="icon">
						<img src="<?php echo esc_url(get_template_directory_uri().'/assets/images/icons/low-price.svg');?>" alt="<?php esc_attr_e('icon', 'vervoer');?>">
					</div>
                    <h6><?php echo wp_kses( $options->get( 'about_title_v1'), $allowed_html ); ?></h6>
                </div>
                <div class="content">
                    <div class="icon">
						<img src="<?php echo esc_url(get_template_directory_uri().'/assets/images/icons/order-tracking.svg');?>" alt="<?php esc_attr_e('icon', 'vervoer');?>">
					</div>
                    <h6><?php echo wp_kses( $options->get( 'about_title2_v1'), $allowed_html ); ?></h6>
                </div>                 
            </div>
            <!-- Contact Widget -->
            <div class="contact-widget">
				<?php if( $options->get( 'address2nd_v1' ) ):?>
                <div class="icon-box">
                    <div class="icon"><i class="flaticon-pin"></i></div>
                    <div class="text"><?php echo wp_kses( $options->get( 'address2nd_v1'), $allowed_html ); ?></div>
                </div>
				<?php endif; ?>
				<?php if( $options->get( 'phone_v1' ) ):?>
                <div class="icon-box">
                    <div class="icon"><i class="flaticon-telephone-1"></i></div>
                    <div class="text"><strong><?php echo wp_kses( $options->get( 'phone_title_v1'), $allowed_html ); ?></strong><a href="tel:<?php echo wp_kses( $options->get( 'phone_link_v1'), $allowed_html ); ?>"><?php echo wp_kses( $options->get( 'phone_v1'), $allowed_html ); ?></a></div>
                </div>
				<?php endif; ?>
				<?php if( $options->get( 'email_v1' ) ):?>
                <div class="icon-box">
                    <div class="icon"><i class="flaticon-envelope"></i></div>
                    <div class="text"><strong><?php echo wp_kses( $options->get( 'email_title_v1'), $allowed_html ); ?></strong><a href="tel:<?php echo wp_kses( $options->get( 'email_link_v1'), $allowed_html ); ?>"><?php echo wp_kses( $options->get( 'email_v1'), $allowed_html ); ?></a></div>
                </div>
				<?php endif; ?>
            </div>
			<?php if( $options->get( 'quote_v1' ) ):?>
            <!-- Link Btn -->
            <div class="link-btn"><a href="<?php echo wp_kses( $options->get( 'quote_link_v1'), $allowed_html ); ?>" class="button-style-three"><i class="flaticon-document"></i><?php echo wp_kses( $options->get( 'quote_v1'), $allowed_html ); ?></a></div>
			<?php endif; ?>
        </div>
    </div>
</section>
<!-- End Hidden Sidebar -->
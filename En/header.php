<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta name=viewport content="width=device-width, initial-scale=1.0">
  <meta name="google-site-verification" content="2XcRGIXiTveI7Wx70UnTv2SZwGiFjK1GGnLWd_7m4eY">
  <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
  <div class="wrap" id="wrap">
    <div class="nav_wrap_0" id="nav_wrap_0">
      <div class="nav_0">
        <div class="header_logo_social_wrap">
          <div class="header_title"> <a href="https://shedov.top">
              <div class="name">
                <p>ANDREW SHEDOV</p>
              </div>
            </a> </div>
            <div class="header_social_wrap" id="header_social_wrap">
            <div class="header_social">
            <a
                href="https://t.me/AndrewShedovChannel" aria-label="telegram" target="_blank">
                <div class="telegram_icon_pro_svg_wrap"> <svg class="telegram_icon_pro_svg" width="24" height="24"
                    viewBox="-2 -2 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M18.384,22.779c0.322,0.228 0.737,0.285 1.107,0.145c0.37,-0.141 0.642,-0.457 0.724,-0.84c0.869,-4.084 2.977,-14.421 3.768,-18.136c0.06,-0.28 -0.04,-0.571 -0.26,-0.758c-0.22,-0.187 -0.525,-0.241 -0.797,-0.14c-4.193,1.552 -17.106,6.397 -22.384,8.35c-0.335,0.124 -0.553,0.446 -0.542,0.799c0.012,0.354 0.25,0.661 0.593,0.764c2.367,0.708 5.474,1.693 5.474,1.693c0,0 1.452,4.385 2.209,6.615c0.095,0.28 0.314,0.5 0.603,0.576c0.288,0.075 0.596,-0.004 0.811,-0.207c1.216,-1.148 3.096,-2.923 3.096,-2.923c0,0 3.572,2.619 5.598,4.062Zm-11.01,-8.677l1.679,5.538l0.373,-3.507c0,0 6.487,-5.851 10.185,-9.186c0.108,-0.098 0.123,-0.262 0.033,-0.377c-0.089,-0.115 -0.253,-0.142 -0.376,-0.064c-4.286,2.737 -11.894,7.596 -11.894,7.596Z" />
                  </svg> </div>

              </a>
              <a href="https://www.behance.net/AndrewShedov"
                aria-label="behance" target="_blank" class="fab fa-behance"></a>
              <a href="https://codepen.io/AndrewShedov" aria-label="codepen" target="_blank"
                class="fab fa-codepen"></a> <a href="https://github.com/AndrewShedov" aria-label="github"
                target="_blank" class="fab fa-github"></a>  </div>
          </div>
        </div>
        <div class="nav_0_lang_wrap">
        <a href="https://shedov.top/ru">Ru</a>
        </div>
      </div>
    </div>
    <div class="nav_wrap_1" id="nav_wrap_1">
      <div class="nav_wrap">
        <div class="nav" id="nav">
          <?php if(has_nav_menu('head_menu')){ wp_nav_menu(array ( 'theme_location' => 'head_menu', 'container'=> false, 'menu_class' => 'nav', 'items_wrap' => ' <ul class="%2$s">%3$s' . $mobile_search . '</ul>', 'depth' => 30, 'walker' => new Cust_Nav() ) ); } ?>
        </div>
        <div class="nav_search_wrap">
          <div class="nav_search">
            <div class="nav_search_icon_wrap">
              <div class="toggle-block nav_search_icon"> <i class="fas fa-search"></i> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="search_wrap_0_1">
        <div class="search_wrap_0_0">
          <div class="search_wrap_0_2">
            <div class="search_0_2">
              <div class="search_open nav_search_input_wrap" id="search_open">
                <div class="nav_search_input_wrap_2"> <?php get_search_form();?> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mobile_nav_wrap_2" id="mobile_nav_wrap_2">
      <div class="mobile_nav_wrap_2_0">
        <div class="mobile_header_adress_phone_lang_wrap">
          <div class="mobile_header_adress_phone">
            <div class="mobile_header_social_wrap" id="mobile_header_social_wrap">
              <div class="mobile_header_social"> 
                 <a href="https://t.me/AndrewShedovChannel" aria-label="telegram"
                  target="_blank">
                  <div class="telegram_icon_pro_svg_wrap"> <svg class="telegram_icon_pro_svg" width="24" height="24"
                      viewBox="-2 -2 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M18.384,22.779c0.322,0.228 0.737,0.285 1.107,0.145c0.37,-0.141 0.642,-0.457 0.724,-0.84c0.869,-4.084 2.977,-14.421 3.768,-18.136c0.06,-0.28 -0.04,-0.571 -0.26,-0.758c-0.22,-0.187 -0.525,-0.241 -0.797,-0.14c-4.193,1.552 -17.106,6.397 -22.384,8.35c-0.335,0.124 -0.553,0.446 -0.542,0.799c0.012,0.354 0.25,0.661 0.593,0.764c2.367,0.708 5.474,1.693 5.474,1.693c0,0 1.452,4.385 2.209,6.615c0.095,0.28 0.314,0.5 0.603,0.576c0.288,0.075 0.596,-0.004 0.811,-0.207c1.216,-1.148 3.096,-2.923 3.096,-2.923c0,0 3.572,2.619 5.598,4.062Zm-11.01,-8.677l1.679,5.538l0.373,-3.507c0,0 6.487,-5.851 10.185,-9.186c0.108,-0.098 0.123,-0.262 0.033,-0.377c-0.089,-0.115 -0.253,-0.142 -0.376,-0.064c-4.286,2.737 -11.894,7.596 -11.894,7.596Z" />
                    </svg> </div>
                </a>
                <a href="https://www.behance.net/AndrewShedov"
                  aria-label="behance" target="_blank" class="fab fa-behance"></a>
                 <a href="https://codepen.io/AndrewShedov" aria-label="codepen" target="_blank"
                  class="fab fa-codepen"></a> <a href="https://github.com/AndrewShedov" aria-label="github"
                  target="_blank" class="fab fa-github"></a> </div>
            </div>
          </div>
          <div class="mobile_header_lang_wrap">
          <a href="https://shedov.top/ru">Ru</a>
          </div>
        </div>
      </div>
    </div>
    <div class="mobile_nav_wrap_1" id="mobile_nav_wrap_1">
      <div class="mobile_nav_wrap_3">
        <div class="header_title"> <a href="https://shedov.top">
            <div class="name">
              <p>ANDREW SHEDOV</p>
            </div>
          </a> </div>
        <div class="mobile_search_login_burger_wrap">
          <div class="mobile_nav_1">
            <div class="mobile_nav_search_wrap">
              <div class="mobile_nav_search">
                <div class="mobile_nav_search_icon_wrap">
                  <div class="mobile_1_toggle-block mobile_nav_search_icon"> <i class="fas fa-search"></i> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mobile_nav_login_wrap">
            <div class="mobile_nav_login"> <i class="fas fa-user-circle"></i> </div>
          </div>
          <div class="mobile_1_burger_wrap">
            <div class="mobile_1_burger">
              <div class="burger" id="burger">
                <div class="burger-bar burger-bar-top"></div>
                <div class="burger-bar burger-bar-middle"></div>
                <div class="burger-bar burger-bar-bottom"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mobile_1_search_wrap_0_2">
        <div class="mobile_1_search_0_2">
          <div class="mobile_1_search_open mobile_1_nav_search_input_wrap" id="mobile_1_search_open">
            <div class="mobile_1_nav_search_input_wrap_2">
              <form class="mobile_1_nav_search_input_wrap_3" role="search" method="get" id="mobile_searchform"
                action="<?php echo home_url( '/' ) ?>"> <label class="screen-reader-text" >Search: </label>
                <input class="mobile_1_nav_search_input" id="mobile_1_search_input_focus" type="text" value="" name="s"
                   > <button class="mobile_1_nav_search_button_clear" name="clear" type="reset"><i
                    class="far fa-times-circle"></i></button> <input class="mobile_1_nav_search_input_button_search"
                  type="submit" id="mobile_searchsubmit" value="Search" > </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="menu" id="menu">
      <p><?php echo $str11;?></p>
      <div class="wrap_m">
        <div class="menu-modal cover-modal">
          <div class="menu-wrapper ">
            <?php $mobile_menu_location = 'Mobile_Menu_1'; if ( 'expanded' !== $mobile_menu_location ) { ?> <nav
              class="mobile-menu">
              <div class="mobile_side_burger_wrap">
                <div class="mobile_2_header_social_wrap">
                  <div class="mobile_2_header_social"> <a href="https://www.behance.net/AndrewShedov" target="_blank"
                      class="fab fa-behance"></a> <a href="https://twitter.com/AndrewShedov" target="_blank"
                      class="fab fa-twitter"></a> <a href="https://codepen.io/AndrewShedov" target="_blank"
                      class="fab fa-codepen"></a> <a href="https://github.com/AndrewShedov" target="_blank"
                      class="fab fa-github"></a> </div>
                </div>
                <div class="mobile_side_burger">
                  <div class="burger" id="mobile_Side_burger">
                    <div class="burger-bar burger-bar-top"></div>
                    <div class="burger-bar burger-bar-middle"></div>
                    <div class="burger-bar burger-bar-bottom"></div>
                  </div>
                </div>
              </div>
              <ul class="modal-menu reset-list-style">
                <?php if ( $mobile_menu_location ) { wp_nav_menu( array( 'theme_location' => $mobile_menu_location, 'container' => '', 'items_wrap' => '%3$s', 'show_toggles' => true, ) ); } ?>
              </ul>
            </nav> <?php } ?> </div>
        </div>
      </div>
    </div>
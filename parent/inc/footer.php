  <div id="footer" class="container-fluid text-center text-lg-left">

    <div class="row">

      <div id="footer_left" class="col-12 col-lg-5 offset-lg-1 col-xl-4 offset-xl-2">

        <div class="row">

          <div class="col-lg-6">

            <img src="<?php echo $url . $micro_info->company_info->logos->white_logo; ?>" alt="<?php echo $micro_info->company_info->name;?> White Logo" class="img-fluid footer_logo" />

          </div>

        </div>

        <div class="row">

          <?php echo display_contact_information($micro_info); ?>

        </div>

        <?php /*Removed as per the request of the PPC team for all microsites 

        if(is_array($micro_info->social_networks) || is_object($micro_info->social_networks)) : 

          echo '<ul class="social d-inline-block">';

            foreach($micro_info->social_networks as $value) :

              if($value->icon_class && $value->url) :

                echo '<li class="d-inline">

                <a href="' . $value->url . '" target="_blank" rel="nofollow">

                  <i class="fab ' . $value->icon_class . ' fa-fw"></i>

                </a>

              </li>';

              endif;

            endforeach;

          echo '</ul>'; 

        endif; */?>
  
  

      </div>


      

    <?php if(!empty($micro_info->footer_menu)) : ?>

      <div id="footer_right" class="d-none d-sm-block col-12 col-lg-4 offset-lg-2 col-xl-4 offset-xl-2">

        <div class="footer_menu text-uppercase">

          <ul>

            <li class="main_item"><?php echo $micro_info->footer_menu->title; ?></li>

        <?php 

        $target = '';



        foreach($micro_info->footer_menu->items as $menu_item) :

        if($menu_item->menu_link == $page_id || ($page_id == 'home' && $menu_item->menu_link == '/')) :

          $menu_classes = 'menu_item active';

        else :

          $menu_classes = 'menu_item';

        endif;

        if(!empty($menu_item->menu_target)) :

          $target = 'target="' . $menu_item->menu_target . '"';

        else :

          $target = '';

        endif;

          echo '<li class="' . $menu_classes . '"><a href="' . $menu_item->menu_link . '" ' . $target . '>' . $menu_item->menu_title . '</a></li>';

        endforeach; ?>

          </ul>

          </div>

        </div>

      </div>

    </div>

  <?php endif; ?>

  
    
  <div id="bottom_bar" class="container-fluid d-none d-lg-block">

      <div class="row">

        <div class="col text-center">

          <a href="tel:<?php echo $micro_info->company_info->phone_number; ?>" class="d-block phone_changer"><strong><?php echo $micro_info->theme_content->bottom_bar->text; ?> <?php echo format_telephone($micro_info->company_info->phone_number);?></strong></a>

        </div>

      </div>

    </div>

    <?php if(!empty($micro_info->mobile_bar_menu)) : ?>

    <div id="mobile_bar" class="container-fluid d-block d-lg-none fixed-bottom">

      <div class="row">

        <?php 

        $target = '';



        foreach($micro_info->mobile_bar_menu as $menu_item) :

          if(!empty($menu_item->menu_target)) :

            $target = 'target="' . $menu_item->menu_target . '"';

          else :

            $target = '';

          endif; ?>

          <div id="<?php echo $menu_item->id; ?>" class="mobile_bar_button col-6 text-center">

            <a href="<?php echo $menu_item->menu_link; ?>"" class="d-block phone_changer"><?php echo $menu_item->menu_title; ?></a>

          </div>

        <?php endforeach; ?>

      </div>

    </div>

  <?php endif; ?>


  <?php if(!empty($micro_info->company_info->tracking_body_tag)) :

    echo $micro_info->company_info->tracking_body_tag;

  endif; ?>

<div id="header" class="fixed-top">

  <div id="top_bar" class="container-fluid">

    <div class="row">

      <div class="col">

        <div id="top_bar_info" class="float-right">

        <?php /*Removed as per the request of the PPC team for all microsites 

        if(is_array($micro_info->social_networks) || is_object($micro_info->social_networks)) : 

          echo '<ul class="social float-left">';

            foreach($micro_info->social_networks as $value) :

              if($value->icon_class && $value->url) :

                echo '<li class="float-left">

                <a href="' . $value->url . '" target="_blank" rel="nofollow">

                  <i class="fab ' . $value->icon_class . ' fa-fw"></i>

                </a>

              </li>';

              endif;

            endforeach;

          echo '</ul>'; 

        endif; */?>

          <a href="tel:<?php echo $micro_info->company_info->phone_number; ?>" class="tel_link phone phone_changer float-right"><?php echo format_telephone($micro_info->company_info->phone_number);?></a>

        </div>

      </div>

    </div>

  </div>

  <nav class="navbar navbar-light bg-light">

    <a class="navbar-brand" href="<?php echo $url; ?>">

      <img src="<?php echo $url . $micro_info->company_info->logos->main_logo; ?>" alt="<?php echo $micro_info->company_info->name; ?> Main Logo" class="img-fluid">

    </a>

    <?php if(!empty($forms->sticky)) :

    echo '<div id="sticky_form_container" class="d-none d-lg-block" style="display: none !important;">';

    echo display_form($forms->sticky,$micro_info->theme_content->sticky->form->buttontext,false,false,false,true); 

    echo '</div>';

    endif;?>

    <?php if(!empty($micro_info->main_menu)) : ?>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">

      <i class="fas fa-bars fa-fw"></i>

    </button>

    <div class="collapse navbar-collapse text-uppercase" id="navbarToggler">

      <ul class="navbar-nav ml-auto">

        <?php 

        $target = '';

        foreach($micro_info->main_menu as $menu_item) :

        if($menu_item->menu_link == $page_id || ($page_id == 'home' && $menu_item->menu_link == '/')) :

          $menu_classes = 'nav-item active';

        else :

          $menu_classes = 'nav-item';

        endif;

        if(!empty($menu_item->menu_target)) :

          $target = 'target="' . $menu_item->menu_target . '"';

        else :

          $target = '';

        endif;

          echo '<li class="' . $menu_classes . '"><a class="nav-link" href="' . $menu_item->menu_link . '" ' . $target . '>' . $menu_item->menu_title . '</a></li>';

        endforeach; ?>

      </ul>

    </div>    

      

  <?php endif; ?>

  </nav>

  </div>
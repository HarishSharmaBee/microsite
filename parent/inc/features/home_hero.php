  <div id="hero" class="jumbotron jumbotron-fluid" style="background-image:url('<?php echo $page_data->hero->image; ?>')">

    <div id="hero_overlay"></div>

    <div id="hero_content" class="container-fluid">

      <div id="hero_left" class="text-center text-md-left">
        <div class="hero_text">

          <?php echo $page_data->hero->title; ?>

        </div>

        <a href="<?php echo $page_data->hero->button->url; ?>" class="d-inline-block d-md-none btn btn-success"><?php echo $page_data->hero->button->text; ?></a>

      </div>

      <div id="hero_right" class="d-none d-md-block">

      <?php

      echo display_form($forms->hero,$page_data->hero->form_button_text,$page_data->hero->form_title,$page_data->hero->form_subtitle,$micro_info->theme_content->trust->form_trust); ?>

      </div>

    </div>

    <div class="concave_curve"></div>

  </div>
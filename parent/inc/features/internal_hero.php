  <div id="hero" class="jumbotron internal_hero jumbotron-fluid" style="background-image:url('<?php echo $page_data->hero->image; ?>')">
    <div id="hero_overlay"></div>
    <div id="hero_content" class="container-fluid">
      <div id="hero_top" class="text-center hero_text col-12 col-md-10 offset-md-1 col-lg-6 offset-lg-3">
          <div class="d-block"><?php echo $page_data->hero->title; ?></div>
        <a href="<?php echo $page_data->hero->button->url; ?>" class="d-inline-block d-md-none btn btn-success"><?php echo $page_data->hero->button->text; ?></a>
      </div>
      <div id="internal_hero_form" class="d-none d-md-block col-12 col-md-10 offset-md-1 col-lg-6 offset-lg-3">
      <?php
      echo display_form($forms->hero,$page_data->hero->form_button_text,false,$page_data->hero->form_subtitle,false); ?>
      </div>
    </div>
    <div class="concave_curve"></div>
  </div>
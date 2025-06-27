  <div id="hero" class="jumbotron internal_hero jumbotron-fluid" style="background-image:url('<?php echo $page_data->hero->image; ?>')">
    <div id="hero_overlay"></div>
    <div id="hero_content" class="container-fluid">
      <div id="hero_top" class="text-center hero_text col-12 col-md-10 offset-md-1 col-lg-6 offset-lg-3">
          <div class="d-block"><?php echo $page_data->hero->title; ?></div>
      </div>
			  <?php if($page_data->hero->form_subtitle) :
			    echo '<div class="form_subtitle text-center">' . $page_data->hero->form_subtitle . '</div>';
			  endif; ?>
    </div>
    <div class="concave_curve"></div>
  </div>
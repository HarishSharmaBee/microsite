<?php if(!empty($micro_info->theme_content->home_ctas)) : ?>
  <div id="main_ctas" class="convex_fix container-fluid" data-aos="fade-up" data-aos-duration="1000">
    <div class="convex_curve"></div>
    <div class="row">
      <?php foreach($micro_info->theme_content->home_ctas as $cta) : ?>
      <div id="<?php echo $cta->id; ?>" class="cta col-12 col-lg">
        <div class="row">
          <div class="cta_image_container col-12 col-sm-4 col-md-5 col-lg-4 col-xl-3">
            <div class="row">
              <div class="cta_image col" style="background-image:url('<?php echo $cta->image_url; ?>')"></div>
            </div>
          </div>

          <div class="cta_text text-center text-sm-left col-12 col-sm-8 col-md-7 col-lg-8 col-xl-9">
            <div class="cta_top_text">
              <?php echo $cta->top_text; ?>
            </div>
            <div class="cta_bottom_text">
              <?php echo $cta->bottom_text; ?>
            </div>
            <a href="<?php echo $cta->button->url; ?>" class="btn btn-success"><?php echo $cta->button->text; ?></a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
    </div>
  </div>
<?php endif; ?>
<?php if(!empty($micro_info->theme_content->whychoose)) : ?>
  <div id="secondary_content_area" class="convex_fix container-fluid" data-aos="fade-up" data-aos-duration="1000">
    <div class="convex_curve"></div>
    <div class="row">
      <div id="secondary_content_left" class="col-12 col-sm-6 col-md-5 offset-md-1" style="background-image:url('<?php echo $micro_info->theme_content->whychoose->image_url; ?>')"></div>
      <div id="secondary_content_right" class="col-12 col-sm-6 col-md-5">
        <div class="secondary_content_text_container">
          <div class="secondary_content_top_text"><?php echo $micro_info->theme_content->whychoose->top_text; ?></div>
          <?php echo $micro_info->theme_content->whychoose->content; ?>
          <a href="<?php echo $micro_info->theme_content->whychoose->button->url; ?>" class="btn btn-success"><?php echo $micro_info->theme_content->whychoose->button->text; ?></a>
        </div>
      </div>
    </div>
  </div>

<?php endif; ?>
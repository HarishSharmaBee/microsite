
  <div id="testimonials" class="container-fluid text-center" data-aos="fade-up" data-aos-duration="1000">
            <a href="javascript:void(0)" class="nav_arrow slick-prev d-none d-md-block" id="prev_testimonial_arrow"><i class="fas fa-angle-left fa-fw"></i></a>
            <a href="javascript:void(0)" class="nav_arrow slick-next d-none d-md-block" id="next_testimonial_arrow"><i class="fas fa-angle-right fa-fw"></i></a>
    <div class="row">
      <div class="container">
        <div class="row">
          <div id="testimonials_top_container" class="col-10 offset-1 col-md-8 offset-md-2 col-lg-10 offset-lg-1">
            <div class="feature_top_text testimonial_top_text"><?php echo $micro_info->theme_content->testimonials->top_text; ?></div>
            <div class="feature_lower_top_text testimonial_lower_top_text">
              <?php echo $micro_info->theme_content->testimonials->bottom_text; ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div id="testimonials_container" class="col-10 offset-1 col-md-8 offset-md-2 col-lg-10 offset-lg-1">
            <div class="testimonial_carousel">
              <?php foreach($micro_info->theme_content->testimonials->reviews as $review) : ?>
              <div class="testimonial_item text-left">
                <div class="testimonial_title"><?php echo $review->author; ?></div>
                <div class="testimonial_rating_container">
                  <?php 
                    $rating = round($review->rating * 2) / 2;
                    for($x = $rating; $x>0; $x--) :
                      if($rating < 1) :
                        $rating_class = 'fa-star-half';
                      else :
                        $rating_class = 'fa-star';                        
                      endif;
                      echo '<i class="fas ' . $rating_class . ' fa-fw"></i>';
                      $rating--;
                    endfor; ?>
                </div>
                <div class="testmonial_content">
                  <?php echo $review->content; ?>
                </div>
              </div>
            <?php endforeach; ?>
            </div>
          </div>
        </div>
        <?php if(!empty($micro_info->theme_content->testimonials->button)) : ?>
        <div class="row">
          <div id="testimonials_bottom_container" class="col-12">
            <a href="<?php echo $micro_info->theme_content->testimonials->button->url; ?>" class="btn btn-success"><?php echo $micro_info->theme_content->testimonials->button->text; ?></a>
          </div>
        </div>
      <?php endif; ?>
      </div>
    </div>
  </div>
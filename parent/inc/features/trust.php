
<div id="trust" class="container-fluid text-center" data-aos="fade-up" data-aos-duration="1000">
  <div class="row">
    <div class="col-12 col-xl-10 offset-xl-1">
      <div class="feature_top_text trust_top_text"><?php echo $micro_info->theme_content->trust->title; ?></div>
      <div class="feature_lower_top_text trust_lower_top_text">
        <p><?php echo $micro_info->theme_content->trust->subtitle; ?></p>
      </div>
      <div id="trust_container" class="container-fluid">
        <?php 
        if(is_array($micro_info->trust) || is_object($micro_info->trust)) : 
          $value = count((array)$micro_info->trust);
          if($value > 6) :
            $loop_counter = 0;
            minussix($micro_info->trust,$value, $loop_counter);

          else :
            echo display_trust_logos($micro_info->trust, $value, 0);
          endif;
        endif; ?>
      </div>
    </div>
  </div>
</div>
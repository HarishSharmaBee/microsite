
  <div id="sub_footer">
    <div class="row no-gutters">
        <?php if(!empty($micro_info->locations)) : 
          $sub_footer_classes = 'col-12 col-lg-6';
        else :
          $sub_footer_classes = 'col-12';
        endif; ?>
        <?php if(!empty($micro_info->locations)) : ?>
      <div id="sub_footer_left" class="<?php echo $sub_footer_classes; ?>">

        <!-- <div id="googleMap" style="width:100%;height:100%;" class="d-flex"></div> -->

        <div class="container-iframe">
          <iframe class="responsive-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3029.219206221437!2d-74.8758003!3d40.60298699999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c38b550b89ece1%3A0x3280a6ba89bb3543!2sHunterdon%20Roofing%2C%20Siding%20and%20Window%20Company!5e0!3m2!1sen!2sin!4v1656304605277!5m2!1sen!2sin" width="100%"     
          height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        
        <?php if(!empty($micro_info->theme_content->subfooter->directions_button)) :
        $directions_target = '';
        if(!empty($micro_info->theme_content->subfooter->directions_button->target)) : 
          $directions_target = 'target="' . $micro_info->theme_content->subfooter->directions_button->target . '"';
        endif;?>
        <div id="directions_link">
          <a href="<?php echo $micro_info->theme_content->subfooter->directions_button->url; ?>" class="btn mx-auto" <?php echo $directions_target; ?>><i class="fas fa-location-arrow fa-fw"></i> <?php echo $micro_info->theme_content->subfooter->directions_button->text; ?></a>
        </div>
      <?php endif; ?>
      </div> 
      <?php endif; ?>
      <div id="sub_footer_right" class="<?php echo $sub_footer_classes; ?>">
        <div class="container-fluid">
          <div class="row">
            <div class="col-10 offset-1">
      <?php
      echo display_form($forms->subfooter,$micro_info->theme_content->subfooter->form->buttontext,$micro_info->theme_content->subfooter->form->title,$micro_info->theme_content->subfooter->form->subtitle,$micro_info->theme_content->trust->form_trust); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php if(!empty($page_data->gallery->type)) : 

  $gallery = $micro_info->galleries->{$page_data->gallery->type};

else :

  $gallery = $micro_info->galleries->main;

endif;?>

<div id="gallery" data-aos="fade-up" data-aos-duration="1000" class="container-fluid text-center" >

  <div class="row">

    <div class="col-12 offset-md-0 col-lg-10 offset-lg-1">

      <div class="feature_top_text gallery_top_text"><?php echo $gallery->top_text; ?></div>

      <div class="feature_lower_top_text gallery_lower_top_text">

        <p><?php echo $gallery->bottom_text; ?></p>

      </div>

      <div id="photo_carousel_container">

        <a href="javascript:void(0)" class="nav_arrow slick-prev d-block d-sm-none" id="prev_gallery_arrow"><i class="fas fa-angle-left fa-fw"></i></a>

        <a href="javascript:void(0)" class="nav_arrow slick-next d-block d-sm-none" id="next_gallery_arrow"><i class="fas fa-angle-right fa-fw"></i></a>

        <div class="photo_carousel">

          <?php foreach($gallery->images as $image) : ?>

            <div class="grid-item col-sm-6 col-md-3 <?php echo $image->height_class; ?>"><a href="<?php echo $image->image_url; ?>" data-thumb="<?php echo $image->image_url; ?>" data-fancybox="images" class="grid-item-content" style="background-image:url('<?php echo $image->image_url; ?>');"></a></div>

          <?php endforeach; ?>

        </div>

      </div>

    </div>

  </div>

</div>
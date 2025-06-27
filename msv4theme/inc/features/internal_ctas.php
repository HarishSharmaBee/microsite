
  <div id="main_ctas" class="internal_ctas convex_fix container-fluid" data-aos="fade-up" data-aos-duration="1000" style="background-image:url('<?php echo $page_data->cta->image; ?>')">
    <div class="convex_curve"></div>
    <div class="row">
      <div id="cta_internal" class="cta col-10 offset-1 col-lg-6 offset-lg-3">
        <div class="row">
          <div class="cta_text col text-center">
            <div class="cta_top_text">
              <?php echo $page_data->cta->top_text; ?>
            </div>
            <div class="cta_bottom_text">
              <?php echo $page_data->cta->bottom_text; ?>
            </div>
            <a href="<?php echo $page_data->cta->button->url; ?>" class="btn btn-success text-center"><?php echo $page_data->cta->button->text; ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
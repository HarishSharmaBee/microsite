<?php include '../msv4theme/inc/functions.php';
include 'data.php'; 
if(!empty($page_data->header_code)) :
  header($page_data->header_code);
endif;
 ?>
<!doctype html>
<html lang="en">
<?php include '../msv4theme/inc/head.php'; ?>
<body>
  <?php include '../msv4theme/inc/header.php'; ?>
  <?php if($page_data->hero) :
    if(file_exists('../msv4theme/inc/features/' . $page_data->hero->type . '_hero.php')) :
      include '../msv4theme/inc/features/' . $page_data->hero->type . '_hero.php'; 
    endif;
  endif;
  ?>
  <div id="content" class="container-fluid">
  <div id="content_container" data-aos="fade-up" data-aos-duration="1000">
    <?php foreach($page_data->content as $content_item) : ?>
    <div class="row entry_content">
      <?php if(!empty($content_item->image)) :
        $contentsideclasses = 'col-lg-6 offset-lg-0 order-lg-last';
        if(!empty($content_item->image->side)) :
          if($content_item->image->side == 'right')
            $contentsideclasses = 'col-lg-6 offset-lg-1 order-lg-first';
        endif;
        $content_classes = 'col-10 offset-1 col-md-10 offset-md-1 order-last ' . $contentsideclasses;
        if(!empty($content_item->overlay_image)) :
          $overlay_image = $content_item->overlay_image;
        else :
          $overlay_image = false;
        endif;
        echo display_content_image($content_item->image,$overlay_image); 
      elseif(!empty($content_item->contact)) :
        $content_classes = 'col-10 offset-1 col-md-5 offset-md-1 col-lg-6 offset-lg-1';
      else :
        $content_classes = 'col-10 offset-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 order-last order-lg-first';
      endif;?>
      <div class="<?php echo $content_classes; ?>">
        <div class="page_content">
        <?php if(!empty($content_item->entry_content)) : ?>
          <?php echo $content_item->entry_content; ?>
        <?php endif; ?>
        <?php if(!empty($content_item->form_id)) : 
          $form_button_text = 'Submit';
          if(!empty($content_item->form_button_text)) :
            $form_button_text = $content_item->form_button_text;
          endif;
          $form_title = false;
          if(!empty($content_item->form_title)) :
            $form_title = $content_item->form_title;
          endif;
          $form_subtitle = false;
          if(!empty($content_item->form_subtitle)) :
            $form_subtitle = $content_item->form_subtitle;
          endif;
            echo display_form($forms->{$content_item->form_id},$form_button_text,$form_title,$form_subtitle,false);
          endif; ?>
        <?php if(!empty($content_item->button)) : ?>
          <a href="<?php echo $content_item->button->url; ?>" class="btn btn-success"><?php echo $content_item->button->text; ?></a>
        <?php endif; ?>
        </div>
      </div>
      <?php if(!empty($content_item->contact)) : ?>
        <div class="col-10 offset-1 col-md-5 offset-md-0 col-lg-4">
          <!-- <div id='contactGoogleMap' style='width:100%;height:400px; margin-bottom: 20px;'></div> -->
          <!-- Make "Locations" plural if more than 2 locations in theme.php exist -->

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3029.219206221437!2d-74.8758003!3d40.60298699999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c38b550b89ece1%3A0x3280a6ba89bb3543!2sHunterdon%20Roofing%2C%20Siding%20and%20Window%20Company!5e0!3m2!1sen!2sin!4v1656304605277!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

          <?php  
          $num_locations = $micro_info->locations;
          if ( count($num_locations) > 1 ) : ?>
            <h3>Locations</h3>
          <?php else : ?>
            <h3>Location</h3>
          <?php endif; ?>
          <?php echo display_contact_information($micro_info); ?>

        </div>
      <?php endif; ?>
    </div>
  <?php endforeach; ?>
  </div>
  </div>
  <?php if($page_data->cta) :
    if($page_data->cta->type == 'home') :
      include '../msv4theme/inc/features/main_ctas.php'; 
    elseif($page_data->cta->type == 'internal') :
      include '../msv4theme/inc/features/internal_ctas.php'; 
    endif;
  endif;
  if($page_data->gallery) :
    include '../msv4theme/inc/features/gallery.php';
  endif;
  if($page_data->trust == true) :
    include '../msv4theme/inc/features/trust.php';
  endif;
  if($page_data->whychoose == true) :
    include '../msv4theme/inc/features/whychoose.php';
  endif;
  if($page_data->testimonials == true) :
    include '../msv4theme/inc/features/testimonials.php';
  endif;
  if($page_data->subfooter == true) :
    include '../msv4theme/inc/features/subfooter.php';
  endif; ?>
  <?php include '../msv4theme/inc/footer.php'; ?>
  <?php include '../msv4theme/inc/scripts.php'; ?>


<!-- <script src="/micro/roofing/js/moment.min.js"></script>

<?//php if ($page_id == 'home') : ?>

<script>
document.addEventListener("DOMContentLoaded", function(event) { 
  
//var blackFriday = new Date(11/23/2018); 
var currentdate = moment();
var targetDate = moment('November 23rd 2018, 12:00:00 am' , 'MMMM Do YYYY, h:mm:ss a');

  if(currentdate.isAfter(targetDate)){
    console.log('Cyber Monday Special is Live');
    swapHeroText();
  }
  else {
    console.log('no events today');
  }

});
</script>

<script>
  var header = '<span class=\"hero_text_rl highlight_color\" style=\"font-size:1.9em\">Cyber Monday Savings!</span> <span class=\"hero_text_sl\">Up to 35% off</span><br/>Today Only <br />'
</script>
<?//php endif; ?>

<?//php if ($page_id == 'specials') : ?>

<script>
document.addEventListener("DOMContentLoaded", function(event) { 
  

//var blackFriday = new Date(11/23/2018); 
var currentdate = moment();
var targetDate = moment('November 23rd 2018, 12:00:00 am' , 'MMMM Do YYYY, h:mm:ss a');

  if(currentdate.isAfter(targetDate)){
    console.log('Cyber Monday special is live!');
    swapSpecialHeroText();
  }
  else {
    console.log('no events today');
  }

});
</script>

<script>

  var heroHeader = '<div class="d-block">Cyber Monday Savings!</div>'

  var heroSubHeader = '<div class="form_subtitle text-center">Save Up to 35% Off Today Only!</div>'

  var pageContentHeadline = 'Cyber Monday Savings! Up to 35% Off Today Only!'

</script>
<?//php endif; ?>

<script>
  function swapHeroText(){
    jQuery('.hero_text').empty().append(header);

  }
  function swapSpecialHeroText(){
    jQuery('.d-block').empty().append(heroHeader);
    jQuery('.form_subtitle').empty().append(heroSubHeader);
    jQuery('.page_content h1').empty().append(pageContentHeadline);
  }
</script> -->


</body>
</html>
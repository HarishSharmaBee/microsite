<?php


function siteURL()

{

    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

    $domainName = $_SERVER['HTTP_HOST'];

    $page_file_temp = $_SERVER["PHP_SELF"];

    $page_directory = dirname($page_file_temp); 

    return $protocol.$domainName.$page_directory.'/';

}

define( 'SITE_URL', siteURL() );

function curl_request($url) {
// New data retrival section -Start
  // Try file_get_contents before curling resource
  $contents = file_get_contents($url);

  if ($contents) {
      return $contents;
  }
// New data retrival section -End
  // Get cURL resource
  $curl = curl_init();

  // Set some options - we are passing in a useragent too here

  $agent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36';

  curl_setopt_array($curl, array(

      CURLOPT_RETURNTRANSFER => 1,

      CURLOPT_URL => $url,

      CURLOPT_HTTPHEADER => [
        'User-Agent: ' . $agent
      ]

  ));

  // Send the request & save response to $resp

  $resp = curl_exec($curl);

  // Close request to clear up some resources

  curl_close($curl);

  return $resp;

}


function format_telephone($phone_number)

{

    $cleaned = preg_replace('/[^[:digit:]]/', '', $phone_number);

    preg_match('/(\d{3})(\d{3})(\d{4})/', $cleaned, $matches);

    return "({$matches[1]}) {$matches[2]}-{$matches[3]}";

}



function minussix($trust_logos,$value,&$loop_counter) {

  $max_items = 6;

  if(ceil($value/2) > $max_items) :

    $start = $loop_counter * $max_items;

    echo display_trust_logos($trust_logos, $max_items, $start);

    $value = $value - $max_items;

    $loop_counter++;

    minussix($trust_logos,$value,$loop_counter);

  else :

    $num_items = ceil($value/2); 

    echo display_trust_logos($trust_logos, $num_items, 0);

    $num_items = $value - $num_items; 

    echo display_trust_logos($trust_logos, $num_items, 0);

  endif;

  return $value;

}

function display_trust_logos($trust_logos, $num_items, $start) {

  $item_position = $start;

  $response = '<div class="row justify-content-center">';

  for($x = 0; $x<$num_items; $x++) :

    $response .= '<div class="trust_item col-12 col-sm">';

    $image_container = '<img src="' . $trust_logos[$item_position]->url . '" class="img-fluid" alt="' . $trust_logos[$item_position]->alt . '" />';

    if(!empty($trust_logos[$item_position]->link_url)) :

      $response .= '<a href="' . $trust_logos[$item_position]->link_url. '">' . $image_container . '</a>';

    else :

      $response .= $image_container;

    endif;

    $response .= '</div>';

    $item_position++;

  endfor;

    $response .= '</div>';

  return $response;

}



function display_content_image($image,$overlay=false) {

  $gradient_style_image_style = '';

  $gradient_style_position_style = '';

  $gradient_style_repeat_style = '';

  $gradient_style_size_style = '';

  if(!empty($image->gradient)) :

    $gradient_style_image_style = 'linear-gradient(45deg, rgba(0, 0, 0, 1),rgba(0, 0, 0, .45),rgba(0, 0, 0, .15),transparent), ';

    $gradient_style_position_style = '0 0, ';

    $gradient_style_repeat_style = 'repeat, ';

    $gradient_style_size_style = 'auto, ';

  endif;

  $image_background_position = '50% 50%';

  if(!empty($image->background_position)) :

    $image_background_position = $image->background_position;

  endif;

  $image_style_image_style = $gradient_style_image_style . 'url(\'' . $image->url . '\')';

  $image_style_position_style = $gradient_style_position_style . $image_background_position;

  $image_style_repeat_style = $gradient_style_repeat_style . 'no-repeat';

  $image_style_size_style = $gradient_style_size_style . 'cover';

  $overlay_info = '';

  if(!empty($overlay)) :

    $overlay_info = '<img src="' . $overlay->url . '" alt="' . $overlay->alt . '" class="img-fluid" />';

  endif;

  $sideclasses = 'col-lg-4 offset-lg-1';

  if(!empty($image->side)) :

    if($image->side == 'right')

    $sideclasses = 'col-lg-4 offset-lg-0 order-lg-last';

  endif;

  return '<div class="content_image col-10 offset-1 col-md-10 offset-md-1 order-first ' . $sideclasses . '" style="background-image:' . $image_style_image_style . '; background-position:' . $image_style_position_style . '; background-repeat:' . $image_style_repeat_style . '; background-size:' . $image_style_size_style . ';"><div class="overlay">' . $overlay_info . '</div></div>';

}



function display_form($form_object, $button_text = 'Submit', $title = false, $subtitle = false, $trust_imagery = false, $form_inline = false) {

  $form_id = '';

  if(!empty($form_object->id)) :

    $form_id = $form_object->id;

  endif;

  $output = '<form id="' . $form_id . '" action="' . $form_object->action . '" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data" method="post">';

  if($title) :

    $output .= '<div class="form_title text-center">' . $title . '</div>';

  endif;  

  if($subtitle) :

    $output .= '<div class="form_subtitle text-center">' . $subtitle . '</div>';

  endif;

  foreach($form_object->field_rows as $field_row) :

    $output .= '<div class="form-group"><div class="form-row">';

      foreach($field_row as $field) :

        $validation = '';

        if(!empty($field->validation)) :

          $validation = 'data-bvalidator="' . $field->validation . '"';

        endif;

        $maxlength = '';

        if(!empty($field->maxlength)) :

          $maxlength = 'maxlength="' . $field->maxlength . '"';

        endif;

        $output .= '

          <div class="col">

            <label>' . $field->label . '</label>

            <input type="' . $field->type . '" class="form-control ' . $field->classes . '" name="' . $field->name . '" placeholder="' . $field->placeholder . '" ' . $validation . ' ' . $maxlength . '>

          </div>';

      endforeach;

      if($form_inline) :

       $output .= '<div class="col"><button type="submit" class="btn btn-success btn-block">' . $button_text . '</button></div>';

      endif;

    $output .= '</div></div>';

  endforeach;

      if(!$form_inline) :

     $output .= '<button type="submit" class="btn btn-success btn-block">' . $button_text . '</button>';

    endif;

          if(!empty($trust_imagery)) :

          $output .= '<div class="trust_logos d-flex justify-content-center">

            <div class="row">';

            foreach($trust_imagery as $trust_logo) : 

              $output .= '<div class="col-auto"><img src="' . $trust_logo->url . '" alt="' . $trust_logo->alt . '" class="img-fluid" /></div>';

              endforeach; 

            $output .= '</div></div>';

        endif;

        if(!empty($form_object->hidden_fields)) :

    $output .= '<div class="d-none">';

    foreach($form_object->hidden_fields as $hidden_field) :

        $output .= '<input type="hidden" id="' . $hidden_field->id . '" class="' . $hidden_field->classes . '" name="' . $hidden_field->name . '" value="' . $hidden_field->value . '">';

      endforeach;

    $output .= '</div>';

    endif;

        $output .= '</form>';

    return $output;

}

function display_contact_information($micro_info) {

  $output = '';

  foreach($micro_info->locations as $location) :

    $output .= '<div class="col-12 col-sm">

      <p>' . $location->footer_description;

    if(!empty($location->phone_number)) :

      $output .= ' <br /><a class="phone_changer" href="tel:' . $location->phone_number . '">' . format_telephone($location->phone_number) . ' </a>'; 

    endif;

    if(!empty($location->hours_of_operation)) :

      $output .= ' <p class="hourstitle"><strong>Hours: </strong></p> ' . $location->hours_of_operation; 

    endif; 

      $output .= '</p>

    </div>' ;

  endforeach;

  return $output;

}


    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>

    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <script src="//unpkg.com/aos@3.0.0-beta.5/dist/aos.js"></script>

    <script defer src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <script defer src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script defer src="//unpkg.com/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"></script>

    <script defer src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script defer src="//cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>

    <script defer src='//cdn.jsdelivr.net/jquery.cookie/1.4.1/jquery.cookie.min.js'></script> 

    <script defer src="//cdn.jsdelivr.net/jquery.lazyload/1.9.3/jquery.lazyload.min.js"></script>

    <script defer src="../msv4theme/js/jquery.mask.min.js"></script>

    <script defer src="../msv4theme/js/jquery.bvalidator-yc.js"></script>

    <script defer src="../msv4theme/js/custom.js"></script>

    <script defer src="js/custom_per_micro.js"></script>

    <script>

      var formstovalidate = [];

      var source_numbers = {};

      var city_texts = {};

      var default_phone_number = "<?php echo $micro_info->company_info->phone_number; ?>";

      var default_formatted_phone_number = "<?php echo format_telephone($micro_info->company_info->phone_number); ?>";

        <?php 

        if(!empty($forms)) :

          $formstovalidate = array();

          foreach($forms as $form) :

            if(!empty($form->id)) :

              $formstovalidate[] = '"' . $form->id . '"';

          endif;

          endforeach;

            echo 'formstovalidate = [' . implode(",", $formstovalidate) . '];';

        endif;

        if(!empty($micro_info->ppc_info)) :

          if(!empty($micro_info->ppc_info->source_cookie_phone_numbers)) :

            foreach($micro_info->ppc_info->source_cookie_phone_numbers as $source_cookie => $source_numbers) :

              echo 'source_numbers.' . $source_cookie . ' = "' . $source_numbers . '";';

            endforeach;

          endif;

          if(!empty($micro_info->ppc_info->city_cookie_text)) :

            foreach($micro_info->ppc_info->city_cookie_text as $city_cookie => $city_text) :

              echo 'city_texts.' . $city_cookie . ' = "' . $city_text . '";';

            endforeach;

          endif;

        endif;

        $referral_url = '';

        if(!empty($_SERVER['HTTP_REFERER'])) :

          $referral_url = $_SERVER['HTTP_REFERER'];

        endif;

        if($referral_url == '') :

          $referral_url = $url;

        endif;

        echo "var referral_url = '" . $referral_url . "';";



        $icon_set = 'var icon = [];';

        if(is_array($micro_info->locations) || is_object($micro_info->locations)) : 

          $location_array = array();

          $location_counter = 0;

            foreach($micro_info->locations as $value) :

              if($value->lat && $value->lng && $value->description) :

                $location_array[] = array(

                    $value->description,

                    $value->lat,

                    $value->lng

                );

              endif;

              $icon_set .= 'icon[' . $location_counter . '] = {'; 

              if(empty($value->marker)) :

                  $icon_set .= 'url: "' . $url . $micro_info->company_info->default_maps_marker . '",';

                else : 

                  $icon_set .= 'url: "' . $url . $value->marker . '",';

              endif;

              $icon_set .= '

              };';

              $location_counter++;

            endforeach;

          $location_js_array = array();

            foreach($location_array as $value) :

                $location_js_array[] = '["' . implode('","',$value) . '"]';

            endforeach;

            $locations = implode(',',$location_js_array);

          echo 'var locations = [';

            echo $locations;

          echo '];'; 

        endif;?>

      <?php echo $icon_set;?>

               

    </script>

    <script src="../msv4theme/js/map.js"></script>

    <?php if(!empty($micro_info->company_info->google_maps_api_key)) : ?>

     <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $micro_info->company_info->google_maps_api_key; ?>&callback=myMap"></script>

   <?php endif; ?>

    <script type="text/javascript">

      AOS.init();

      </script>

  <?php if(!empty($micro_info->company_info->scripts_body_tag)) :

    echo $micro_info->company_info->scripts_body_tag;

  endif; ?>
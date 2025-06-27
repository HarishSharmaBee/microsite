<!-- Rendered CSS -->

<style type="text/css">

  <?php 

  $styles = $micro_info->styles;

  foreach($styles as $value) :

    echo $value->element . '{';



    foreach($value->styles as $key => $style) :

      echo $key . ':' . $style . ';';

    endforeach;



    echo '}';

  endforeach;

  ?>

  .flash-banner{

      display: none;

      width: 100%;

      width: 100%;

      background: black;

      color: #ffb800;

      font-weight: 600;

      font-size: 14px;

      padding: 10px;

      line-height: 1.3;

      text-align: center;

  }

  .flash-enable .flash-banner{

      display: block;

  }

  

  @media(min-width: 580px) {

        .flash-banner{

             font-size: 16px;

        }

  }

  #directions_link {
    display: none;
  }

</style>
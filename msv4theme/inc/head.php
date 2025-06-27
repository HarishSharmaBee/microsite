<head>

  <!-- Required meta tags -->

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php if(!empty($micro_info->company_info->favicon)) : ?>

  <link rel="shortcut icon" href="<?php echo $micro_info->company_info->favicon; ?>">

<?php endif; ?>

  <!-- Font CSS -->

  <link href="//fonts.googleapis.com/css?family=Exo:300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">

  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <!-- Font Awesome CSS -->

  <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.1.1/css/all.css">

  <!-- Animate on Scroll CSS -->

  <link rel="stylesheet" href="//unpkg.com/aos@2.3.1/dist/aos.css" media="screen">

  <!-- Slick CSS -->

  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" media="screen">

  <!-- Fancybox CSS -->

  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" media="screen">

  <!-- BValidator CSS -->

  <link rel="stylesheet" href="../msv4theme/css/bvalidator.css" media="screen">

  <!-- BValidator Theme CSS -->

  <link rel="stylesheet" href="../msv4theme/css/themes/bvalidator.theme.red.css" media="screen">

  <!-- Local CSS -->

  <link rel="stylesheet" href="../msv4theme/css/style.css" media="screen">

  <!-- Per Micro CSS -->

  <link rel="stylesheet" href="css/custom_per_micro.css" media="screen">

  <?php include '../msv4theme/inc/styles.php'; ?>

  <title><?php echo $page_data->seo_title; ?></title>

  <?php if(!empty($page_data->seo_description)) : ?>

    <meta name="description" content="<?php echo $page_data->seo_description; ?>">

  <?php endif; ?>

  <?php if(!empty($micro_info->company_info->tracking_head_tag)) :

    echo $micro_info->company_info->tracking_head_tag;

  endif; ?>

  <?php if(!empty($micro_info->company_info->do_not_index)) :

    echo '<meta name="robots" content="noindex, nofollow">';

  endif; ?>

</head>
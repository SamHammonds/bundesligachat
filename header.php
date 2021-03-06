<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114042696-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-114042696-1');
  </script>

  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <script>
    (adsbygoogle = window.adsbygoogle || []).push({
      google_ad_client: "ca-pub-8504027587436487",
      enable_page_level_ads: true
    });
  </script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Arimo|Open+Sans:700" rel="stylesheet">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>

<div class="logo">
  <a href="<?php echo home_url(); ?>">
    <img src="<?php echo get_template_directory_uri() . "/assets/images/Logo.png"; ?>" alt="logo" />
  </a>
</div>
<body <?php body_class(); ?>>
  <a class="burger-menu" href="#">&#9776;</a>
  <?php get_template_part("/template-parts/burger-menu"); ?>
  <?php get_template_part("/template-parts/nav-bar"); ?>
  <div class='site-content'>

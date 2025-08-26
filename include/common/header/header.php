<!DOCTYPE html>
<html>

<head>
    <?php
  $title          = "「ひのきの家」千年檜の家、受け継がれる本物の住まい　株式会社富士住建";
  $keyword        = "ヒノキ,ひのき,檜,和風モダン,高気密,高断熱,注文住宅,埼玉,東京,神奈川,千葉,群馬,茨木,栃木";
  $description    = "ハウスメーカー・富士住建の注文住宅｜高気密高断熱の家｜完全フル装備の家｜ひのきの家｜埼玉を中心に東京・ 神奈川・千葉・群馬・茨城・栃木｜1都6県の都内・関東近郊をサポート.";
  $thumbs         = "img/og.png";
  $metaThumbs     = "img/thumbs.png";
  $favicon        = "img/favicon.png";
  $url = "https://www2.fujijuken.co.jp/hinoki_lp";
  ?>
    <meta charset="UTF-8">
    <meta content="text/css" http-equiv="Content-Style-Type" />
    <meta content="text/javascript" http-equiv="Content-Script-Type" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="expires" content="86400">
    <meta http-equiv="Content-Language" content="ja">
    <meta name="Robots" content="max-image-preview:large">
    <meta name="Author" content="">
    <meta name="copyright" content="" />
    <title><?php echo $title; ?></title>
    <meta name="keywords" content="<?php echo $keyword; ?>" />
    <meta name="description" content="<?php echo $description; ?>" />
    <meta name="thumbnail" content="<?php echo $metaThumbs; ?>" />
    <!--
  <PageMap>
    <DataObject type="thumbnail">
      <Attribute name="src" value="<?php echo $metaThumbs; ?>"/>
      <Attribute name="width" value="100"/>
      <Attribute name="height" value="100"/>
    </DataObject>
  </PageMap>
-->
    <link rel="icon" href="<?php echo $favicon; ?>" sizes="32x32" />
    <link rel="icon" href="<?php echo $favicon; ?>" sizes="192x192" />
    <link rel="apple-touch-icon" href="<?php echo $favicon; ?>" />
    <meta name="msapplication-TileImage" content="<?php echo $favicon; ?>" />
    <link rel="canonical" href="<?php echo $url; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $title; ?>" />
    <meta property="og:description" content="<?php echo $description; ?>" />
    <meta property="og:Url" content="<?php echo $url; ?>" />
    <meta property="og:site_name" content="<?php echo $title; ?>" />
    <meta property="og:image" content="<?php echo $thumbs; ?>" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="<?php echo $title; ?>" />
    <meta name="twitter:description" content="<?php echo $description; ?>" />
    <meta name="twitter:image" content="<?php echo $thumbs; ?>" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src="//unpkg.com/lenis@1.2.3/dist/lenis.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <script src="//cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <link href="//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <link rel='stylesheet' id='theme_base_css' href='<?php echo $homeUrl; ?>css/common.css?ver=<?php echo date('Y-m-d-H-i-s'); ?>' media='all' />
    <script type='text/javascript' src="<?php echo $homeUrl; ?>js/config.js?ver=<?php echo date('Y-m-d-H-i-s'); ?>"></script>
    <script type='text/javascript' src="<?php echo $homeUrl; ?>js/bxsliderSetting.js?ver=<?php echo date('Y-m-d-H-i-s'); ?>"></script>
</head>

<body id="body" class="body">
    <div class="wap" id="pagetop">
        <header id="scroll_off" class="base_header">
            <div class="pc_only"><?php include_once(dirname(__FILE__) . '/00_headerPc.php'); ?></div>
            <div class="sp_only"><?php include_once(dirname(__FILE__) . '/01_headerSp.php'); ?></div>
        </header>
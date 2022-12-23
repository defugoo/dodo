<?php
require('./php/info.php');
?>
<!doctype html>
<html lang="en-US" prefix="og: https://ogp.me/ns#">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?=$webTagname ?> | <?=$webName ?></title>
<meta name="theme-color" content="#232b32">
<meta name="description" content="<?=$webName ?> Watch hentai online free download HD on mobile phone tablet laptop desktop. Stream online, regularly released uncensored, subbed, in 720p and 1080p!" />
<meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
<link rel="canonical" href="<?=$webUrl ?>/home" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="<?=$webTagname ?> | <?=$webName ?>" />
<meta property="og:description" content="<?=$webName ?> Watch hentai online free download HD on mobile phone tablet laptop desktop. Stream online, regularly released uncensored, subbed, in 720p and 1080p!" />
<meta property="og:url" content="<?=$webUrl ?>/home" />
<meta property="og:site_name" content="<?=$webTagname ?> | <?=$webName ?>" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="<?=$webTagname ?> | <?=$webName ?>" />
<meta name="twitter:description" content="<?=$webName ?> Watch hentai online free download HD on mobile phone tablet laptop desktop. Stream online, regularly released uncensored, subbed, in 720p and 1080p!" />
<meta name="google-site-verification" content="<?=$google ?>" />
<meta name="yandex-verification" content="<?=$yandex ?>" />
<meta name="msvalidate.01" content="<?=$bing ?>" />
<link rel="icon" href="<?=$webUrl ?>/assets/img/favicon.png">
<link rel="icon" href="<?=$webUrl ?>/assets/img/favicon.png" rel=icon sizes="32x32" sizes="32x32" />
<link rel="icon" href="<?=$webUrl ?>/assets/img/favicon.png" rel=icon sizes="32x32" sizes="192x192" />
<link rel="apple-touch-icon" href="<?=$webUrl ?>/assets/img/favicon.png" rel=icon sizes="32x32" />
<meta name="msapplication-TileImage" content="<?=$webUrl ?>/assets/img/favicon.png" rel=icon sizes="32x32" />
<link rel=stylesheet href="https://use.fontawesome.com/releases/v6.1.0/css/all.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.0/css/v4-shims.css">
<link rel="stylesheet" href="<?=$webUrl ?>/jstyle.css">
<link rel="stylesheet" href="<?=$webUrl ?>/doujin.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="<?=$webUrl ?>/files/js/site.js"></script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?=$googletag ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', '<?=$googletag ?>');
</script>
</head>
<body>
<header>
<h1 id="logo"><a href="<?=$webUrl ?>/home" title="<?=$webName ?>"><img src="<?=$webUrl ?>/assets/img/desunime.png" alt="<?=$webName ?>"></a></h1>
<nav aria-label="Primary">
<ul id="primary-menu" class="menu">
<li class="item nav-item current-menu-item "><a href="<?=$webUrl ?>/home" aria-current="page"><i class="fa fa-home"></i><span>Home</span></a></li><li class="item nav-item "><a href="<?=$webUrl ?>/trending"><i class="fa fa-refresh"></i><span>Trending</span></a></li><li class="item nav-item "><a href="/popular/"><i class="fa fa-star"></i><span>Popular</span></a></li><li class="item nav-item "><a href="<?=$webUrl ?>/genre/"><i class="fa fa-tags"></i><span>Genres</span></a></li>
</ul>
<ul>
<li>
<a class="login" href="/login/"><i class="fa fa-sign-in-alt"></i> Sign in</a>
</li>
<li>
<a class="register" href="/register/"><i class="fa fa-edit"></i> Register</a>
</li>
</ul>
</nav>
<div>
<button type="button" aria-label="Show menu">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
<line x1="3" y1="12" x2="21" y2="12"></line>
<line x1="3" y1="6" x2="21" y2="6"></line>
<line x1="3" y1="18" x2="21" y2="18"></line>
</svg>
</button>
<form action="/search/" method="get">
<input type="text" name="keyword" placeholder="Find anime here..." autocomplete="off" />
<button type="submit" aria-label="Search">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
<circle cx="11" cy="11" r="8"></circle>
<line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>
</button>
</form>
</div>
</header>
</section>
<div class="row">
<main id="archive">
<section class="feed" id="archives">
<header>
<a href="<?=$webUrl ?>/trending" title="View All New Releases" class="see-all"><span>View All</span></a>
<h3 class="widget-title"><i class="fa fa-refresh color-icon"></i>  New Releases</h3>
</header>
<div class="entries">
<?php
$json = file_get_contents("$api/getLanding/newest");
$brand = json_decode($json, true);
$brand = $brand["results"];
?>
<?php foreach ($brand as $recentRelease) :
?>
<article class='entry' data-tags='<?=$recentRelease ["name"] ?>'>
<a href='/video/<?=$recentRelease ["slug"] ?>' title='<?=$recentRelease ["name"] ?>'>
<figure class='thumbnail'>
<div class='ply'>
<i class='fa fa-play'></i>
</div>
<img alt='<?=$recentRelease ["name"] ?>' title='<?=$recentRelease ["name"] ?>' src='<?=$recentRelease ["cover_url"] ?>' loading='lazy' />
<span class='type'><i class='fa fa-eye'></i> <?=$recentRelease ["views"] ?></span>
</figure>
<div class='metadata'>
<h3 class='title'>
<span><?=$recentRelease ["name"] ?></span>
</h3>
</a>
</div>
</article>
<?php endforeach; ?>
<div class="clear"></div>
<section class="feed" id="archives">
<header>
<a href="<?=$webUrl ?>/trending" title="View All Latest Videos" class="see-all"><span>View All</span></a>
<h3 class="widget-title"><i class="fa fa-fire"></i>  Latest Trending</h3>
</header>
<div class="entries">
<?php
$json = file_get_contents("$api/getLanding/trending");
$brand = json_decode($json, true);
$brand = $brand["results"];
?>
<?php foreach ($brand as $recentRelease) :
?>
<article class='entry' data-tags='<?=$recentRelease ["name"] ?>'>
<a href='/video/<?=$recentRelease ["slug"] ?>' title='<?=$recentRelease ["name"] ?>'>
<figure class='thumbnail'>
<div class='ply'>
<i class='fa fa-play'></i>
</div>
<img alt='<?=$recentRelease ["name"] ?>' title='<?=$recentRelease ["name"] ?>' src='<?=$recentRelease ["cover_url"] ?>' loading='lazy' />
<span class='type'><i class='fa fa-eye'></i> <?=$recentRelease ["views"] ?></span>
</figure>
<div class='metadata'>
<h3 class='title'>
<span><?=$recentRelease ["name"] ?></span>
</h3>
</a>
</div>
</article>
<?php endforeach; ?>
</div>
<p class="clear"></p>
</div>
</div>
</div>
</div>
<?php
require('./foot.php');
?>
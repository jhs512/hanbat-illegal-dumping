<!DOCTYPE html>
<html lang="ko">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.7/tailwind.min.css">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@1.12.0/dist/full.css" rel="stylesheet" type="text/css" />

  <link rel="stylesheet" href="/resource/common.css" />
  <script src="/resource/common.js" defer></script>

  <script>
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
  </script>

  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>한밭대학교 - 무단투기 멈춰</title>
</head>

<body>
  <script>
    function showYoutube(code) {
      $('.youtube-modal > iframe').attr('src', 'https://www.youtube.com/embed/' + code);
      $('.youtube-modal').show();
    }

    function hideYoutube() {
      $('.youtube-modal > iframe').attr('src', '');
      $('.youtube-modal').hide();
    }
  </script>
  <div class="youtube-modal">
    <div onclick="hideYoutube();" class="btn-close cursor-pointer" style="background-image:url(<?= $imgUrlStarts ?>JFZ8g1.png);"></div>
    <iframe width="100%" height="100%" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>

  <div class="site-wrap">
    <header class="top-bar absolute inset-0 bottom-auto p-4 sm:p-10 z-50">
      <div class="flex items-center">
        <a href="index.ssg.php" class="logo" style="background-image:url(<?= $imgUrlStarts ?>oLyuPg.png);"></a>
        <div class="flex-grow"></div>
        <a href="#" class="logo-2" style="background-image:url(<?= $imgUrlStarts ?>XGTxhD.png);"></a>
      </div>
    </header>
    <main style="background-image:url(<?= $imgUrlStarts ?>Sb439x.png);" class="bg-color-2">
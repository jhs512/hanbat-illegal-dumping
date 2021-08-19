<?php require_once "config.php" ?>
<?php
$youtubeVideoCodes = [
  'CuHh96inI1k',
  'VY_Ox7pHN8A',
  '7fNsIYETA9U',
  'UfOCJI3RC9U',
  'CuHh96inI1k',
  'fQXnmyshpFA',
];
?>
<?php require_once "head.php" ?>

<section class="section-movieList-1 flex items-center justify-center min-h-screen">
  <div class="border-4 m-4 p-4 rounded-3xl max-w-2xl bg-color-2 overflow-hidden">
    <div>
      <?php foreach ($youtubeVideoCodes as $youtubeVideoCode) { ?>
        <div>
          <img onclick="showYoutube('<?= $youtubeVideoCode ?>');" src="http://img.youtube.com/vi/<?= $youtubeVideoCode ?>/0.jpg" />
        </div>
      <?php } ?>
      <div class="mt-4">
        <a href="map.ssg.php" class="btn btn-primary">지도</a>
      </div>
    </div>
    <script>
      $('.result-box .result-' + urlParams.get("point")).removeClass('hidden');
    </script>
  </div>
</section>
<?php require_once "foot.php" ?>
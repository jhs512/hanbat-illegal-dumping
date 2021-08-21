<?php require_once "config.php" ?>

<?php
$youtubeVideoCodes = [
  ['CuHh96inI1k', 'G5ACPw.jpg'],
  ['VY_Ox7pHN8A', 'f724HL.jpg'],
  ['7fNsIYETA9U', 'QK3HRe.jpg'],
  ['UfOCJI3RC9U', 'gZu2QO.jpg'],
  ['CuHh96inI1k', 'XjO1Fm.jpg'],
  ['fQXnmyshpFA', 'UHyRXS.jpg'],
];
?>
<?php require_once "head.php" ?>

<section class="section-movieList-1 flex items-center justify-center min-h-screen">
  <div class="border-4 m-4 p-8 rounded-3xl w-full max-w-2xl bg-color-2 overflow-hidden">
    <div>
       <div class="my-4  sm:mx-10 text-center bg-white rounded-3xl py-8 text-2xl ">
      <span>영상 섬네일을 클릭해 보세요!</span>

       </div>
      
      <?php foreach ($youtubeVideoCodes as $youtubeVideoCode) { ?>
        <div class="mb-4">
          <div class="youtube-thumb-img" onclick="showYoutube('<?= $youtubeVideoCode[0] ?>'); saveVisitLog('visit_log');" style="background-image:url(<?= $imgUrlStarts ?><?= $youtubeVideoCode[1] ?>); "></div>
        </div>
      <?php } ?>
      <div class="mt-4 text-center">
        <a href="interview-map.ssg.php" class="btn btn-primary btn-go-next-page">다음으로 가기!</a>
      </div>
    </div>
    <script>
      $('.result-box .result-' + urlParams.get("point")).removeClass('hidden');
    </script>
  </div>
</section>
<?php require_once "foot.php" ?>
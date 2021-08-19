<?php require_once "config.php" ?>
<?php
$results = [];

$results[] = [
  '마카롱',
  $imgUrlStarts . 'DeolTF.jpg',
  '당신은 정확한 요리법에 따라 만들어야 하는 마카롱처럼 올바른 쓰레기 배출법에 따라 열심히 분리수거 해주고 있는 사람이군요!',
];

$results[] = [
  '감초',
  $imgUrlStarts . 'lJ61OK.jpg',
  '당신은 어디에든 빠지지 않는 감초처럼 쓰레기 배출법을 지키려고 노력하지만 귀찮은 일은 안 하는 대다수의 사람이군요!',
];

$results[] = [
  '마라탕',
  $imgUrlStarts . 'KGGthm.jpg',
  '당신은 온갖 재료를 넣어 먹는 마라탕처럼 쓰레기도 온갖 종류를 넣어 혼합배출하는 사람이군요!',
];

$results[] = [
  '부먹',
  $imgUrlStarts . 'MJJcIU.jpg',
  '당신은 다른 사람의 의견을 무시하고 소스를 부어버리는 부먹 탕수육처럼 쓰레기를 어떻게 배출하든 관심이 없는 사람이군요!',
];

$resultsScores = [
  0, 0, // 0점 ~ 1점은, 마라탕(0)
  1, 1, 1, 1, // 2점 ~ 5점은, 감초(1)
  2, 2, 2, // 6점 ~ 8점은, 마라탕(2)
  3, 3, // 9점 ~ 10점은, 부먹(3)
];
?>
<?php require_once "head.php" ?>
<section class="section-quizProcess-1 flex items-center justify-center min-h-screen">
  <div class="border-4 m-4 p-4 rounded-3xl max-w-2xl bg-color-2 overflow-hidden">
    <div class="result-box">
      <?php foreach ($resultsScores as $resultsScore =>
        $resultCode) { ?>
        <div class="result-<?= $resultsScore ?> hidden">
          <h1>
            <?= $results[$resultCode][0] ?>
          </h1>
          <div>
            <img src="<?= $results[$resultCode][1] ?>" alt="" />
          </div>
          <div>
            <?= $results[$resultCode][2] ?>
          </div>
        </div>
      <?php } ?>
      <div>
        <a href="quiz-process.ssg.php" class="btn btn-secondary">다시하기</a>
        <a href="movie-list.ssg.php" class="btn btn-primary">동영상 리스트</a>
      </div>
    </div>
    <script>
      $('.result-box .result-' + urlParams.get("point")).removeClass('hidden');
    </script>
  </div>
</section>
<?php require_once "foot.php" ?>
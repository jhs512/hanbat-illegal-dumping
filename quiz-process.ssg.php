<?php require_once "config.php" ?>
<?php
$questions = [];

$questions[] = '나는 전 남친(여친)이 준 곰인형을 그냥 쓰레기 더미에 버릴
것이다.';

$questions[] = '나는 다 마신 음료수 캔을 찌그러뜨려서 축구를 한 적이 있다.';

$questions[] = '나는 배달음식 마니아라 플라스틱 쓰레기가 많이 나온다.';

$questions[] = '나는 눈치를 많이 보는 사람이라 늦은 밤에만 쓰레기를 버린다.';

$questions[] = '나는 씹던 껌을 그냥 바닥에 뱉을 수 있는 용기 있는 사람이다.';

$questions[] = '나는 썸남(썸녀)이 일반쓰레기에 재활용을 섞어버리는 모습을 봐도 썸이 깨지지 않는다.';

$questions[] = '나는 음식 주문할 때 “모자란 것보다 남는 게 좋지!” 하면서 많이 시키고 남기는 편이다.';

$questions[] = '나는 남자친구(여자친구)가 내 자취방에 놀러 와서 갈아준 형광등을 유리로 분류해서 버린다.';

$questions[] = '나는 무단투기를 한 후 쓰레기통이 없어서 어쩔 수 없었다고 자기합리화를 한다.';

$questions[] = '나는 이별을 한 직후 그냥 큰 봉지에 전 애인이 준 쓰레기를 다 모아서 버려 버린다.';

$maxQuestionsNo = count($questions);
?>
<?php require_once "head.php" ?>
<section class="section-quizProcess-1 flex items-center justify-center min-h-screen">
  <div class="border-4 m-4 p-4 rounded-3xl max-w-2xl bg-color-2 overflow-hidden">
    <div class="question-box">
      <script>
        function QuizForm__checkCurrent(el) {
          const $el = $(el);

          if ($el.parent().prev().find('input[type="radio"]:checked').length == 0) {
            alert('`예` 또는 `아니오`를 선택해주세요.');

            return false;
          }

          return true;
        }

        function QuizForm__next(el) {
          const $el = $(el);

          if (QuizForm__checkCurrent(el) == false) {
            return;
          }

          $el.parent().parent().addClass('hidden');
          $el.parent().parent().next().removeClass('hidden');
        }

        function QuizForm__complete(el) {
          const $el = $(el);

          if (QuizForm__checkCurrent(el) == false) {
            return;
          }

          const form = $el.closest('form').get(0);

          form.point.value = $(form).find('input[type="radio"][value="Y"]:checked').length;

          form.submit();
        }
      </script>
      <form action="quiz-result.ssg.php" onsubmit="return false;">
        <input type="hidden" name="point">
        <?php foreach ($questions as $index => $question) { ?>
          <?php
          $no = $index + 1;
          ?>
          <div class="<?= $no > 1 ? 'hidden' : '' ?>">
            <h1>질문 <?= $no ?></h1>
            <div><?= $question ?></div>

            <div>
              <label>
                <input type="radio" name="q<?= $no ?>" value="Y" />
                <span>예</span>
              </label>
              <label>
                <input type="radio" name="q<?= $no ?>" value="N" />
                <span>아니오</span>
              </label>
            </div>

            <div>
              <?php if ($no < $maxQuestionsNo) { ?>
                <button onclick="QuizForm__next(this)" type="button" class="btn btn-primary">다음</button>
              <?php } else { ?>
                <button onclick="QuizForm__complete(this)" type="button" class="btn btn-primary">완료</button>
              <?php } ?>
            </div>
          </div>
        <?php } ?>
      </form>
    </div>
  </div>
</section>
<?php require_once "foot.php" ?>
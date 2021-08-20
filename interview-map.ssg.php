<?php require_once "config.php" ?>
<?php require_once "head.php" ?>
<section class="section-quiz-1 flex items-center justify-center min-h-screen">
  <div class="border-4 m-4 p-4 rounded-3xl max-w-2xl bg-color-2 overflow-hidden map-box  ">
    <div>
      <div class="mt-4 mx-2 sm:mx-10 text-center bg-white rounded-3xl p-8 text-2xl ">
        <div class="">
          <span>사진에 보이는 점을</span></br>
          <span> 클릭 해보세요! </span>
        </div>


      </div>
      <div class="px-5 mt-6 relative flex">
        <img src="https://ifh.cc/g/9Nx9Pn.jpg " class="sm:max-w-sm max-w-full mx-auto " alt="">

        <div class="absolute hidden sm:block">

          <!--지도와 연결된 링크(상인분들 이야기페이지로 이동)-->

          <a class="h-6 w-6 bg-red-400 block rounded-2xl border-4 ml-20 mt-16" href="interview-map-detail1.ssg.php"></a>
          <a class="h-6 w-6 bg-yellow-400 block rounded-2xl border-4 ml-28 mt-4 " href="interview-map-detail2.ssg.php"></a>

          <a class="h-6 w-6 bg-green-500 block rounded-2xl border-4 ml-44 mt-4" href="interview-map-detail3.ssg.php"></a>


          <a class="h-6 w-6 bg-blue-400 block rounded-2xl border-4 ml-36 " href="interview-map-detail4.ssg.php"></a>


          <a class="h-6 w-6 bg-purple-500 block rounded-2xl border-4 ml-56  mt-20" href="interview-map-detail5.ssg.php"></a>
          <!---->

          <!-- pc 화면 -->
          <!--지도와 연결된 링크(상인분들 이야기페이지로 이동) 끝-->
        </div>

        <div class="absolute sm:hidden">

          <!--지도와 연결된 링크(상인분들 이야기페이지로 이동)-->
          <!-- 모바일화면 -->
          <a class="h-6 w-6 bg-red-400 block rounded-2xl border-4 ml-8 mt-6" href="interview-map-detail1.ssg.php"></a>
          <a class="h-6 w-6 bg-yellow-400 block rounded-2xl border-4 ml-6 mt-4 " href="interview-map-detail2.ssg.php"></a>

          <a class="h-6 w-6 bg-green-500 block rounded-2xl border-4 ml-24 mt-4" href="interview-map-detail3.ssg.php"></a>

          <a class="h-6 w-6 bg-blue-400 block rounded-2xl border-4 ml-28 mt-4" href="interview-map-detail4.ssg.php"></a>


          <a class="h-6 w-6 bg-purple-500 block rounded-2xl border-4 ml-28  mt-4" href="interview-map-detail5.ssg.php"></a>
          <!---->


          <!--지도와 연결된 링크(상인분들 이야기페이지로 이동) 끝-->
        </div>
        <div class="h-4/6 w-6">


        </div>

      </div>

      <div class="mt-8 text-center">
        <a href="last-page.ssg.php" class="btn btn-primary">다음으로 가기!</a>
      </div>
    </div>
  </div>
</section>
<?php require_once "foot.php" ?>
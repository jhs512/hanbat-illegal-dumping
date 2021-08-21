<?php require_once "config.php" ?>
<?php require_once "head.php" ?>
<section class="section-quiz-1 flex items-center justify-center min-h-screen">
  <div class="border-4 m-4 p-4 rounded-3xl max-w-2xl bg-color-2 overflow-hidden map-box  ">
    <div>
      <div class="mt-4 mx-2 sm:mx-10 text-center bg-white rounded-3xl p-2 text-1xl ">
        <div class="">
          <span>지도에 보이는 점을 클릭해서</span></br>
          <span> 학교주변 상인분들의 이야기를 들어보세요! </span>
        </div>


      </div>
      <div class="px-5 mt-6 relative flex">
        <img src="https://ifh.cc/g/9Nx9Pn.jpg " class="sm:max-w-sm max-w-full mx-auto " alt="">

        <div class="absolute hidden sm:block">

          <!--지도와 연결된 링크(상인분들 이야기페이지로 이동)-->

          <a onclick="saveVisitLog2('visit_log2')" class="h-6 w-6 bg-yellow-400 block rounded-2xl border-4 ml-10 mt-16  absolute" href="interview-map-detail3.ssg.php"></a>
          <a onclick="saveVisitLog2('visit_log2')"  class="h-6 w-6 bg-red-400 block rounded-2xl border-4 ml-24 mt-28 absolute" href="interview-map-detail5.ssg.php"></a> 
          <a onclick="saveVisitLog2('visit_log2')"  class="h-6 w-6 bg-green-500 block rounded-2xl border-4 ml-24 mt-36 absolute" href="interview-map-detail1.ssg.php"></a>
          <a onclick="saveVisitLog2('visit_log2')"  class="h-6 w-6 bg-purple-500 block rounded-2xl border-4 ml-32  mt-32 absolute" href="interview-map-detail2.ssg.php"></a>     
          <a onclick="saveVisitLog2('visit_log2')"  class="h-6 w-6 bg-blue-400 block rounded-2xl border-4 ml-40 mt-56" href="interview-map-detail4.ssg.php"></a>

          
          <!-- pc 화면 -->
          <!--지도와 연결된 링크(상인분들 이야기페이지로 이동) 끝-->
        </div>

        <div class=" sm:hidden absolute">

          <!--지도와 연결된 링크(상인분들 이야기페이지로 이동)-->
          
         
          
          <a onclick="saveVisitLog2('visit_log2')" class="h-6 w-6 bg-yellow-400 block rounded-2xl border-4 ml-6 mt-12  absolute" href="interview-map-detail3.ssg.php"></a>
          <a  onclick="saveVisitLog2('visit_log2')"  class="h-6 w-6 bg-red-400 block rounded-2xl border-4 ml-16 mt-20 absolute" href="interview-map-detail5.ssg.php"></a> 
          <a  onclick="saveVisitLog2('visit_log2')"  class="h-6 w-6 bg-green-500 block rounded-2xl border-4 ml-16 mt-28 absolute" href="interview-map-detail1.ssg.php"></a>
          <a  onclick="saveVisitLog2('visit_log2')"  class="h-6 w-6 bg-purple-500 block rounded-2xl border-4 ml-28  mt-28 absolute" href="interview-map-detail2.ssg.php"></a>     
          <a  onclick="saveVisitLog2('visit_log2')"  class="h-6 w-6 bg-blue-400 block rounded-2xl border-4 ml-32 mt-44" href="interview-map-detail4.ssg.php"></a>

          
          <!--모바일화면 -->
          <!--지도와 연결된 링크(상인분들 이야기페이지로 이동) 끝-->
        </div>
        <div class="h-4/6 w-6">


        </div>

      </div>

      <div class="mt-8 text-center">
        <a href="last-page.ssg.php" class="btn btn-primary btn-go-last-page2">다음으로 가기!</a>
      </div>
    </div>
  </div>
</section>
<?php require_once "foot.php" ?>
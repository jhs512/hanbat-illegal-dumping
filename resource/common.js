//다음페이지 조건 검사 (동영상 리스트페이지)

function saveVisitLog(pageName) {
  localStorage.setItem(pageName, true);
}

function btnGoLastButtonVisible() {
  const keys = "visit_log";

  if (localStorage.getItem(keys) !== "true") {
    return false;
  }

  return true;
}

function Page__init() {
  $(".btn-go-next-page").click(function () {
    if (!btnGoLastButtonVisible()) {
      alert("영상을 한개 이상 봐주세요!");

      return false;
    }
  });
}

$(function () {
  Page__init();
});

//다음페이지 조건 검사 (동영상 리스트페이지) 끝
//다음페이지 조건 검사 (지도 페이지)

function saveVisitLog2(pageName) {
  localStorage.setItem(pageName, true);
}

function btnGoLastButtonVisible2() {
  const keys = "visit_log2";

 
    if (localStorage.getItem(keys) !== "true") {
      return false;
    }
  

  return true;
}

function Page__init2() {
  $(".btn-go-last-page2").click(function () {
    if (!btnGoLastButtonVisible2()) {
      alert("상인 분들의 이야기를 들어주세요!");
      return false;
    }
  });
}

$(function () {
  Page__init2();
});

//다음페이지 조건 검사끝 (지도 페이지)

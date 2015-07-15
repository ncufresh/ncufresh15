// 預設要隱藏的 ul 們
var all_ul = $(".main-list ul");
// 先全部隱藏
all_ul.hide();

// 綁定 [class 有 "main-list" 的物件] hover 時的效果
  // 寫法：$('.className').hover(func1 () { ... }, func2() { ... })
  // 其中 function1 是 hover 開始時做的事、function2 是 hover 結束時開始做的事
$(".main-list").hover(
  function () {
    // note: 這邊的 this = 目前被 hover 到的那個 $(".main-list")

    // 取得目前 hover 到的 list 的子元素
    var ul = $(this).children('ul');
    var div = $(this).children('div');

    // 先全部隱藏 ( 其實我覺得這兩行不需要 )
    //all_ul.hide();
    $('.main-list > div').hide();

    // 顯示目前 hover 到的 list 的子元素
    ul.show();
    div.show();
    
    // 改樣式 ( 這部分我覺得可以寫在 css 就好 )
    $('div.nav-column').css("display","inline-block");
  },
  function(){
    // 全部隱藏
    all_ul.hide();
    
    // 隱藏目前 hover 到的 list 的子元素 ( 我覺得這行不需要 XDD )
    $('.main-list > div').hide();
  }
);
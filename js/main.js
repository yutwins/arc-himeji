//モバイルメニュー
class MobileMenu{
    constructor(){
    this.DOM={};
    this.DOM.btn=document.querySelector('.mobile-menu__btn');
    this.DOM.cover = document.querySelector(".mobile-menu__cover");
    this.DOM.links = document.querySelectorAll(".mobile-menu__link");
    this.DOM.container=document.querySelector('#global-container');
    this.eventType = this._getEventType();
    this._addEvent();
  }

  _getEventType() {
    const isTouchCapable = "ontouchstart" in window ||
    (window.DocumentTouch && document instanceof DocumentTouch);

    return isTouchCapable ? "touchstart" : "click";
  }
  _toggle(){
      this.DOM.container.classList.toggle('menu-open');
  }
  _addEvent() {
    this.DOM.btn.addEventListener('click',this._toggle.bind(this));
    this.DOM.links.forEach((link) => {
      link.addEventListener(this.eventType, this._toggle.bind(this));
    });
    this.DOM.cover.addEventListener('click',this._toggle.bind(this));
  }
}
new MobileMenu();



//郵便番号自動
$(document).ready(function() {
  $("#zip").on("input", function() {
    const zip = $(this).val();
    if (zip.length === 7) {
      $.ajax({
        url: "https://zipcloud.ibsnet.co.jp/api/search",
        dataType: "jsonp",
        data: {
          zipcode: zip
        },
        success: function(data) {
          if (data.status === 200) {
            const address = data.results[0].address1 + data.results[0].address2 + data.results[0].address3;
            $("#address").val(address);
          } else {
            $("#address").val("住所が見つかりませんでした");
          }
        },
        error: function() {
          $("#address").val("住所の取得に失敗しました");
        }
      });
    } else {
      $("#address").val("");
    }
  });
});


// セレクトボックスのカラー変更
function changeColor(hoge){
  if( hoge.value == 0 ){
      hoge.style.color = '';
  }else{
      hoge.style.color = 'black';
  }
}

//qaセクショントグル
const qaItem = document.querySelectorAll(".qa-item");
console.log(qaItem);
const qaQ = document.querySelectorAll(".qa-item__q")
const qaA = document.querySelectorAll(".qa-item__a")

// Add 'open' class to the first qa-item
qaItem[0].classList.add('open');

const qaQClick = function() {
  for(let i = 0; i < qaItem.length; i++) {
    qaItem[i].addEventListener('click', function() {
      this.classList.toggle('open');
      
      return false;
    });
  }
}
qaQClick();
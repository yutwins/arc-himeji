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
jQuery(document).ready(function() {
  jQuery("#zip").on("input", function() {
    const zip = jQuery(this).val();
    if (zip.length === 7) {
      jQuery.ajax({
        url: "https://zipcloud.ibsnet.co.jp/api/search",
        dataType: "jsonp",
        data: {
          zipcode: zip
        },
        success: function(data) {
          if (data.status === 200) {
            const address = data.results[0].address1 + data.results[0].address2 + data.results[0].address3;
            jQuery("#address").val(address);
          } else {
            jQuery("#address").val("住所が見つかりませんでした");
          }
        },
        error: function() {
          jQuery("#address").val("住所の取得に失敗しました");
        }
      });
    } else {
      jQuery("#address").val("");
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
const qaQ = document.querySelectorAll(".qa-item__q")
const qaA = document.querySelectorAll(".qa-item__a")
const qaTitle = document.querySelectorAll(".qa-wrap__title")
const qaItems = document.querySelectorAll(".qa-items")
console.log(qaTitle);

// Add 'open' class to the first qa-item
qaTitle[0].classList.add('open');
qaItems[0].classList.add('open');
qaItem[0].classList.add('open');

const qaTitleClick = function() {
  for(let i = 0; i < qaTitle.length; i++) {
    qaTitle[i].addEventListener('click', function() {
      // this.node.nextElementSibling.classList.toggle('open');
      this.classList.toggle('open');
      this.nextElementSibling.classList.toggle('open');
      
      return false;
    });
  }
}
const qaQClick = function() {
  for(let i = 0; i < qaItem.length; i++) {
    qaItem[i].addEventListener('click', function() {
      this.classList.toggle('open');
      
      return false;
    });
  }
}

qaTitleClick();
qaQClick();
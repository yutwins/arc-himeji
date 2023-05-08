//モバイルメニュー
class MobileMenu {
  constructor() {
    this.DOM = {};
    this.DOM.btn = document.querySelector(".mobile-menu__btn");
    this.DOM.cover = document.querySelector(".mobile-menu__cover");
    this.DOM.links = document.querySelectorAll(".mobile-menu__link");
    this.DOM.container = document.querySelector("#global-container");
    this._addEvent();
  }

  _toggle() {
    this.DOM.container.classList.toggle("menu-open");
  }

  _addEvent() {
    this.DOM.btn.addEventListener("click", this._toggle.bind(this));
    this.DOM.links.forEach((link) => {
      link.addEventListener("click", this._toggle.bind(this));
    });
    this.DOM.cover.addEventListener("click", this._toggle.bind(this));
  }
}
new MobileMenu();




//郵便番号入力→ 住所自動入力
document.addEventListener('DOMContentLoaded', function() {
  var zipcodeInput = document.getElementById('your_zipcode');
  var addressInput = document.getElementById('your_address');

  if (zipcodeInput && addressInput) {
    zipcodeInput.addEventListener('change', function() {
      var zipcode = zipcodeInput.value;
      
      fetch('https://api.zipaddress.net/?zipcode=' + zipcode)
        .then(function(response) {
          return response.json();
        })
        .then(function(data) {
          if (data.code === 200) {
            addressInput.value = data.data.fullAddress;
          } else {
            alert('住所が見つかりませんでした。');
          }
        })
        .catch(function(error) {
          console.error('Error:', error);
        });
    });
  }
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
const qaWrap = document.querySelectorAll(".qa-wrap");
const qaItem = document.querySelectorAll(".qa-item");
const qaQ = document.querySelectorAll(".qa-item__q")
const qaA = document.querySelectorAll(".qa-item__a")
const qaTitle = document.querySelectorAll(".qa-wrap__title")
const qaItems = document.querySelectorAll(".qa-items")

// Add 'open' class to the first qa-item
qaWrap[0].classList.add('open');
qaTitle[0].classList.add('open');
qaItems[0].classList.add('open');
qaItem[0].classList.add('open');

const qaTitleClick = function() {
  for(let i = 0; i < qaTitle.length; i++) {
    qaTitle[i].addEventListener('click', function() {
      this.classList.toggle('open');
      this.nextElementSibling.classList.toggle('open');
      this.parentElement.classList.toggle('open');
      
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
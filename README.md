<!-- 後で消す -->
【Todo】
・画像にwidthとheightを指定する（レイアウト崩れがされないように）
・全体の見直し
・不要なコードを削除
・不要なファイルを削除



【確認事項】



【JavaScript】
・QAのトグルアニメーション
・スクロールアニメーション
・FVスクロールダウンアニメーション（CSSでできそう。下記参照）
(https://coco-factory.jp/ugokuweb/move01/9-1-4/)

【動的部分は？（PHP）】
・ブログ部分
・

【メモ】
・optionはCSSが効かない
<!-- 後で消すここまで -->

<components>
<a href="#" class="btn">
    <img src="./images/arc-icon-mail.png" alt="メールアイコン" class="btn__icon">
    <span class="btn__text">お問い合わせ</span>
</a>


<お問い合わせ>
<form action="" class="contact-form">
 <dl class="contact-form__dl">
  <div class="contact-form__row">
   <div class="contact-form__label"><label for="your-entity_type">法人/ 個人</label></div>
   <div class="contact-form__radio">
    <dd class="contact-form__input contact-form__input--radio">
[radio entity_type id:your_entry_type use_label_element default:1 "法人" "個人"]
    </dd>
   </div>
  </div>
  <div class="contact-form__row">
   <div class="contact-form__label"><label for="your-name">お名前<span class="require-label"></span></label></div>
   <dd class="contact-form__input">
[text* text-678 placeholder "山田 太郎"]
   </dd>
  </div>
  <div class="contact-form__row">
   <div class="contact-form__label"><label for="your-furigana">フリガナ<span class="require-label"></span></label></div>
   <dd class="contact-form__input">
[text* text-551 id:your-furigana placeholder "ヤマダ　タロウ"]
   </dd>
  </div>
  <div class="contact-form__row">
   <div class="contact-form__label"><label for="your-email">メールアドレス<span class="require-label"></span></label></div>
   <dd class="contact-form__input">
[email* email-507 id:your-email placeholder "xxx@example.com"]
   </dd>
  </div>
  <div class="contact-form__row">
   <div class="contact-form__label"><label for="your-number">電話番号<span class="require-label"></span></label></div>
   <dd class="contact-form__input">
[text* text-731 id:your-number placeholder "000-0000-0000"]
   </dd>
  </div>
  <div class="contact-form__row">
   <div class="contact-form__label"><label for="your-zip">郵便番号<span class="require-label"></span></label></div>
   <dd class="contact-form__input">
[text* text-81 id:your_post placeholder "000-0000"]
   </dd>
  </div>
  <div class="contact-form__row">
   <div class="contact-form__label"><label for="your-address">ご住所<span class="require-label"></span></label></div>
   <dd class="contact-form__input">
[text* text-81 id:your_address placeholder "兵庫県姫路市安田三丁目９３番地アバエル１階"]
   </dd>
  </div>
  <div class="contact-form__row">
   <div class="contact-form__label"><label for="your-item">お問い合わせ項目</label></div>
   <dd class="contact-form__input">
[select* menu-118 id:your-select "選択" "テスト1" "テスト2" "テスト3" "テスト4"]
   </dd>
  </div>
  <div class="contact-form__row">
   <dt class="contact-form__label"><label for="your-message">お問い合わせ内容<span class="require-label"></span></label></dt>
   <dd class="contact-form__input">
[textarea* textarea-105 id:your-message]
   </dd>
  </div> 
 </dl>
 <div class="contact-form__submit">
  <input type="submit" value="送信する">
 </div>
</form>

<!-- <form action="" class="contact-form">
            <dl class="contact-form__dl">
                <div class="contact-form__row">
                    <dt class="contact-form__label"><label for="your-entity_type">法人/ 個人</label></dt>
                    <div class="contact-form__radio">
                        <dd class="contact-form__input contact-form__input--radio">
                            <input id="corporate" name="entity_type" type="radio">
                            <p class="contact-form__radioLabel">法人</p>
                        </dd>
                        <dd class="contact-form__input contact-form__input--radio">
                            <input id="individual" name="entity_type" type="radio">
                            <p class="contact-form__radioLabel">個人</p>
                        </dd>
                    </div>
                </div>
                <div class="contact-form__row">
                    <dt class="contact-form__label"><label for="your-name">お名前<span class="require-label"></span></label></dt>
                    <dd class="contact-form__input">
                        <input id="your-name" type="text" placeholder="山田 太郎" required>
                    </dd>
                </div>
                <div class="contact-form__row">
                    <dt class="contact-form__label"><label for="your-furigana">フリガナ<span class="require-label"></span></label></dt>
                    <dd class="contact-form__input">
                        <input id="your-furigana" type="text" placeholder="ヤマダ タロウ" required>
                    </dd>
                </div>
                <div class="contact-form__row">
                    <dt class="contact-form__label"><label for="your-email">メールアドレス<span
                                class="require-label"></span></label></dt>
                    <dd class="contact-form__input"><input id="your-email" type="email"
                            placeholder="xxx@example.com" required></dd>
                </div>
                <div class="contact-form__row">
                    <dt class="contact-form__label"><label for="your-number">電話番号<span
                                class="require-label"></span></label></dt>
                    <dd class="contact-form__input"><input id="your-number" type="text"
                            placeholder="000-0000-000" required></dd>
                </div>
                <div class="contact-form__row">
                    <dt class="contact-form__label"><label for="your-zip">郵便番号<span class="require-label"></span></label></dt>
                    <dd class="contact-form__input">
                        <input id="your-zip" type="text" placeholder="山田 太郎" maxlength="7" required>
                    </dd>
                </div>
                <div class="contact-form__row">
                    <dt class="contact-form__label"><label for="your-address">ご住所<span class="require-label"></span></label></dt>
                    <dd class="contact-form__input">
                        <input id="address" type="text" placeholder="兵庫県姫路市安田三丁目９３番地アバエル１階" readonly>
                    </dd>
                </div>
                <div class="contact-form__row">
                    <dt class="contact-form__label"><label for="your-item">お問い合わせ項目</label></dt>
                    <dd class="contact-form__input">
                        <select class="contact-form__select" name="example" onchange="changeColor(this)">
                            <option class="contact-form__option" value="" disabled selected hidden>選択してください</option>
                            <option class="contact-form__option" value="相続">相続</option>
                            <option class="contact-form__option" value="遺言">遺言</option>
                            <option class="contact-form__option" value="終活">終活</option>
                            <option class="contact-form__option" value="税金">税金</option>
                            <option class="contact-form__option" value="お知らせ">お知らせ</option>
                            <option class="contact-form__option" value="家族信託">家族信託</option>
                            <option class="contact-form__option" value="その他">その他</option>
                        </select>
                    </dd>
                </div>
                <div class="contact-form__row">
                    <dt class="contact-form__label"><label for="your-message">お問い合わせ内容<span
                                class="require-label"></span></label></dt>
                    <dd class="contact-form__input">
                        <textarea name="your-message" id="your-message" placeholder="ご自由にご記入ください"></textarea>
                    </dd>
                </div> 
            </dl>
            <div class="contact-form__submit">
                <input type="submit" value="送信する">
            </div>
        </form> -->
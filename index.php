<?php
require_once ('connection.php');

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <title>English Test</title>
    <link rel="icon" href="img/icons8-english-96%201.png">

<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<div class="item">
    <div class="abstract">
        <div class="panel1">
            <a href="index.php">
                <div class="icon">
                    <h2>English</h2>
                    <img src="/img/icons8-english-96%201.png" alt="icon">
                </div>
            </a>
            <div class="text">Вкладывайте незначительные деньги каждый день в копилку своих знаний.</div>
            <div class="text2">Следующий курс для вас будет стоить всего<span>178 рублей в день</span></div>
            <div class="cafe1">
                <img src="/img/cafe2.png" alt="cafe">
            </div>
            <div class="cafe2">
                <img src="/img/cafe1.png" alt="cafe">
            </div>
            <div class="phone-man">
                <img src="/img/man2.png" alt="photo">
            </div>
            <div class="mobile"></div>
            <a href="#panels1">
                <div class="block3">
                    <p>Узнать подробнее</p>
                </div>
            </a>
            <a href="#panels2">
                <div class="block4">
                    <p>Бесплатная консультация</p>
                </div>
            </a>
            <div class="photo">
                <img src="/img/man.png" alt="photo">
            </div>
            <div class="block1">
                <h5>01</h5>
                <span>Ноября</span>
                <p>Ближайший старт</p>
                <div class="block2">
                    <h5>21</h5>
                    <span>Октября</span>
                    <p>Конец акции</p>
                </div>
            </div>

        </div>
        <img src="/img/abstract.png" alt="img">
    </div>
   <div class="category" id="panels1">
    <?php
       while ($row = mysqli_fetch_array($result)) {
       ?>
        <h1>Выберите свой вариант обучения </h1>
        <div class="education">
            <h3><?php print($row['title']);?></h3>
            <div class="block5">
                <h5>-65%</h5>
            </div>
            <h5> <?php print($row['price']);?> ₽</h5>
            <div class="price">
                <div class="line"></div>
                <span><?php print($row['oldprice']);?> ₽</span>
            </div>
            <div class="categories1">
                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path id="Vector 15" d="M1 4.06383L4.11111 9L9 1" stroke="#1B002F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                <span><?php print($row['months']);?> месяца обучения</span>
            </div>
            <div class="categories2">
                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="Vector 15" d="M1 4.06383L4.11111 9L9 1" stroke="#1B002F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>Грамматическая выжимка</span>
            </div>
            <div class="categories3">
                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="Vector 15" d="M1 4.06383L4.11111 9L9 1" stroke="#1B002F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>Разговорный тренажёр</span>
            </div>
            <div class="categories4">
                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="Vector 15" d="M1 4.06383L4.11111 9L9 1" stroke="#1B002F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>Слова с ассоциациями</span>
            </div>
            <div class="categories5">
                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="Vector 15" d="M1 4.06383L4.11111 9L9 1" stroke="#1B002F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>Регулярные мини-задания</span>
            </div>
            <div class="categories6">
                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="Vector 15" d="M1 4.06383L4.11111 9L9 1" stroke="#1B002F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>Персональный куратор</span>
            </div>
            <div class="categories7">
                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="Vector 15" d="M1 4.06383L4.11111 9L9 1" stroke="#1B002F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>Сертификат об обучении</span>
            </div>
            <div class="categories8">
                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="Vector 15" d="M1 4.06383L4.11111 9L9 1" stroke="#1B002F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>Best Teachers</span>
            </div>
            <div class="categories9">
                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="Vector 15" d="M1 4.06383L4.11111 9L9 1" stroke="#1B002F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>Звонки от Second Teacher</span>
            </div>
            <div class="price-old">
                <span>Предоплата</span>
                <h4><?php print($row['prepay']);?> ₽</h4>
            </div>
            <a href="<?php print($row['link_ru']);?>"><div class="click1">
                <p>внести предоплату<br/>из рф</p>
                </div></a>
            <a href="<?php print($row['link_en']);?>"><div class="click2">
               <p>внести предоплату<br/>из-за границы</p>
                </div></a>
        </div>
       <?php }?>
    </div>
    <div class="prize">
        <div class="block6"></div>
        <div class="cafe4">
            <img src="img/cafe3.png" alt="cage">
        </div>
        <div class="prize-icon">
            <img src="img/prize.png" alt="prize-icon"/>
        </div>
        <img src="/img/cafe1.png" alt="cafe"/>
        <div class="books">
            <div class="book1">
                <img src="img/77483a81eeab292b14989d08f9ccd91e.png" alt="book"/>
            </div>
            <div class="book2">
                <img src="/img/77483a81eeab292b14989d08f9ccd91e.png" alt="book"/>
            </div>
            <span>+</span>
             </div>
        <p>подарок</p>
        <div class="text3">
            <span>"Английский для эмиграции"</span>
            <h4>Спецкурс</h4>
            <span> "Как преодолеть языковой барьер"</span>
            <h4>Спецкурс</h4>
        </div>
        </div>
    <div class="forms" id="panels2">
        <h5>Еще думаете?</h5>
         <span>Записывайтесь на бесплатный урок и попробуйте сами, это поможет принять решение</span>
         <form method="post" action="connection.php">
              <input class="name" type="text" name="name" id="name" placeholder="Введите ваше имя" required>
              <input class="number" type="tel" name="phone" id="phone" placeholder="Введите ваш телефон" required>
              <input class="email" type="email" name="email" id="email" placeholder="Введите ваш email" required>
              <p>Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь с политикой конфиденциальности</p>
              <input class="submit" type="submit" value="записаться">
          </form>

    </div>
    <div class="footer">
         <div class="icons-footer">
             <a href="index.php"><h5>English</h5>
             <img src="/img/icons8-english-96%202.png" alt="icon"/>
             </a>
         </div>
         <div class="info">
             <span>2015 - 2021 © English. Все права защищены.</span>
             <a href="#">Политика конфиденциальности</a>
             <br>
             <a href="#">Соглашение об обработке персональных данных</a>
         </div>
          <div class="company">
                <p>ООО "Инглиш", юридический адрес: 000000, Санкт-Петербург, ул. Улица, д. 0/00 лит. 0, пом. 0</br>ОГРН: 000000000000 | ИНН: 000000000 | КПП: 000000000</p>
         <div class="social">
              <div class="vk">
                  <a href="#"><svg width="30" height="15" viewBox="0 0 30 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path id="vk_red copy" fill-rule="evenodd" clip-rule="evenodd" d="M14.6782 14.9369H16.4715C16.4715 14.9369 17.0128 14.8849 17.2893 14.624C17.5446 14.3836 17.5361 13.9333 17.5361 13.9333C17.5361 13.9333 17.5011 11.8249 18.6176 11.5139C19.7182 11.2075 21.1323 13.5517 22.6301 14.4532C23.7636 15.1356 24.6248 14.9861 24.6248 14.9861L28.6309 14.9369C28.6309 14.9369 30.7262 14.8237 29.7326 13.38C29.651 13.2621 29.1532 12.3114 26.7539 10.359C24.2413 8.31553 24.5782 8.64604 27.6045 5.11067C29.4466 2.95862 30.1838 1.644 29.9529 1.08139C29.7337 0.544768 28.3788 0.686814 28.3788 0.686814L23.8674 0.710952C23.8674 0.710952 23.5327 0.671031 23.2848 0.801008C23.0433 0.9282 22.8876 1.22529 22.8876 1.22529C22.8876 1.22529 22.1725 2.89085 21.2213 4.3076C19.2129 7.29707 18.4089 7.4549 18.0806 7.26922C17.3168 6.83658 17.5075 5.53217 17.5075 4.60469C17.5075 1.70713 18.0096 0.499276 16.5319 0.186403C16.0415 0.0833498 15.6802 0.0146477 14.4261 0.00350683C12.817 -0.0113477 11.4548 0.00722047 10.6836 0.338662C10.1699 0.558694 9.77372 1.04982 10.0152 1.07767C10.3129 1.11295 10.9887 1.23736 11.3467 1.66443C11.8086 2.2159 11.7927 3.45346 11.7927 3.45346C11.7927 3.45346 12.0586 6.8635 11.172 7.28778C10.5639 7.57745 9.73029 6.98512 7.93905 4.27232C7.02172 2.88342 6.32895 1.34784 6.32895 1.34784C6.32895 1.34784 6.19548 1.06096 5.95715 0.906846C5.66796 0.721165 5.26438 0.661747 5.26438 0.661747L0.977491 0.686814C0.977491 0.686814 0.334511 0.702597 0.0982924 0.947696C-0.112504 1.16587 0.081344 1.61708 0.081344 1.61708C0.081344 1.61708 3.43713 8.49842 7.23675 11.966C10.7218 15.1458 14.6782 14.9369 14.6782 14.9369Z" fill="white"/>
                  </svg></a>
              </div>
             <div class="telegram">
                 <a href="#">
                     <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                 <g id="bxl:telegram">
                     <path id="Vector" d="M23.2477 4.18179L3.30143 11.8734C1.94018 12.4202 1.94806 13.1795 3.05168 13.5182L8.17268 15.1157L20.0212 7.64004C20.5814 7.29916 21.0933 7.48254 20.6726 7.85604L11.0729 16.5197H11.0707L11.0729 16.5208L10.7197 21.7993C11.2372 21.7993 11.4656 21.5619 11.7558 21.2818L14.2432 18.863L19.4171 22.6847C20.3711 23.21 21.0562 22.94 21.2936 21.8015L24.6899 5.79504C25.0376 4.40116 24.1578 3.77004 23.2477 4.18179Z" fill="white"/>
                 </g>
             </svg>
                 </a>
             </div>
              </div>
         </div>
    </div>
    <script src="js/index.js">

    </script>
</body>
</html>

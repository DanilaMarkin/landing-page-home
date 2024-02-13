<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Кодировка UTF-8 -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <!-- Подключение CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<!-- start nav -->
<? include './blocks/navigation.php'?>
<!-- end nav -->
<!-- start header -->
<header>
    <div class="header__blocks container">
        <!-- start header left block -->
        <div class="header__text">
            <div class="header__text__link">
                <a href="#" class="header__text__link__main">Главная</a>
                <img src="./img/arrow-right.svg" alt="arrow-right">
                <a href="#" class="header__text__link__last">Как выбрать отделку фасада для частного дома</a>
            </div>
            <div class="header__text__main-text">
                <h1>Как выбрать отделку фасада для частного дома</h1>
                <p>Lorem ipsum dolor sit amet consectetur. Turpis risus lorem id faucibus convallis ut. Vel in nunc lacus sagittis ac at varius</p>
            </div>
            <div class="header__text__author">
                <img src="./img/author.png" alt="author">
                <div class="header__text__author__info">
                    <p class="header__text__author__info__name">Арсений Даниленко</p>
                    <p class="header__text__author__info__new">Автор статьи</p>
                </div>
            </div>
        </div>
        <!-- end header left block -->
        <!-- start header right block -->
        <div class="header__img">
            <img src="./img/modern_house.png" alt="Modern-House">
        </div>
        <!-- end header righte block -->
    </div>
</header>
<!-- end header -->
<!-- start download block -->
<section class="download container">
    <div class="download__slider">
        <!-- start slider -->
        <div class="download__slider__slideshow">
            <div class="mySlides">
                <img src="./img/slide.png" alt="slider-photo">
            </div>
            <div class="mySlides fade">
                <img src="./img/slide-2.jpg" alt="slider-photo">
            </div>
            <div class="mySlides fade">
                <img src="./img/slide-3.jpg" alt="slider-photo">
            </div>
            <div class="mySlides fade">
                <img src="./img/slide-4.jpg" alt="slider-photo">
            </div>
            <div class="download__slider__slideshow_center">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
        <!-- end slider -->
    </div>
    <div class="download__info">
        <p>Lorem ipsum dolor sit amet consectetur. Viverra nulla metus id sem. Dictum consectetur et nec pretium est nisi. Fusce quis ultrices neque aliquet eu amet. Tincidunt condimentum lacinia tincilesuada vel sodales lobortis convallis auctor. At sit fames enim facilisis sem. Gravida elit placerat egestas tempor.</p>
        <div class="download__info__btn-info">
            <button class="download__info__btn-info__windows" type="button">Скачать бесплатно<img src="./img/download.svg" alt="download-free"></button>
            <p>Для<img src="./img/windows-icon.svg" class="icon" alt="windows-icon-download">Windows 7, 8, 10, 11</p>
        </div>
    </div>
</section>
<!-- end download block -->
<!-- start video -->
<section class="video container">
    <h1 class="video__main-text">Enim tincidunt interdum ipsum elementum</h1>
    <div class="video__container">
        <div class="video__overlay" id="videoOverlay">
            <div class="video__popup">
                <span class="close-btn" onclick="closePopup()">&times;</span>
                <iframe width="971" height="537" src="https://www.youtube.com/embed/KzWdixEf7qU?si=CZ7nNsi5DiTrnIaK" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
           <iframe class="video-frame" width="971" height="537" src="https://www.youtube.com/embed/KzWdixEf7qU?si=CZ7nNsi5DiTrnIaK" frameborder="0" ></iframe>
           <div class="overlay" onclick="openPopup()"></div>
        </div>
    </div>
    <div class="video__text">
        <p class="video__info">Lorem ipsum dolor sit amet consectetur. Viverra nulla metus id sem. Dictum consectetur et nec pretium est nisi. Fusce quis ultrices neque aliquet eu amet. Tincidunt condimentum lacinia tincidunt vivamus nunc ut quis elementum sed. Malesuada vel sodales lobortis convallis auctor. </p>
        <div class="video__faq">
            <p><span class="video__start-icon"></span>Lorem ipsum dolor sit amet consectetur. Viverra nulla metus id sem. Tincidunt condimentum lacinia tincidunt</p>
            <p><span class="video__start-icon"></span>Dictum consectetur et nec pretium est nisi. Fusce quis ultrices neque neque aliquet eu amet. </p>
            <p><span class="video__start-icon"></span>Fusce quis ultrices neque aliquet eu amet. Gravida elit placerat egestas. </p>
            <p><span class="video__start-icon"></span>At sit fames enim facilisis sem. Gravida elit placerat egestas tempor. Enim tincidunt interdum ipsum elementum </p>
        </div>
    </div>
</section>
<!-- end video -->
<!-- start faq -->
<section class="faq container">
    <h1>Вопрос - Ответ</h1>
    <div class="faq__blocks">
        <div class="faq__block__one">
            <button class="accordion">Lorem ipsum dolor sit amet consectetur. Viverra nulla metus id sem?</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet consectetur. Viverra nulla metus id sem. Dictum consectetur et nec pretium est nisi. Fusce quis ultrices neque aliquet eu amet. Tincidunt condimentum lacinia tincidunt vivamus nunc ut quis elementum sed.  Dictum consectetur et nec pretium est nisi. Fusce quis ultrices neque aliquet eu amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur. Viverra nulla metus id sem. Dictum consectetur et nec pretium est nisi. Fusce quis ultrices neque aliquet eu amet. Tincidunt condimentum lacinia tincidunt vivamus nunc ut quis elementum sed.  Dictum consectetur et nec pretium est nisi. Fusce quis ultrices neque aliquet eu amet. Lorem ipsum dolor sit amet </p>
            </div>
        </div>
        <div class="faq__block__two">
            <button class="accordion">Lorem ipsum dolor sit amet consectetur?</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet consectetur. Viverra nulla metus id sem. Dictum consectetur et nec pretium est nisi. Fusce quis ultrices neque aliquet eu amet. Tincidunt condimentum lacinia tincidunt vivamus nunc ut quis elementum sed.  Dictum consectetur et nec pretium est nisi. Fusce quis ultrices neque aliquet eu amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur. Viverra nulla metus id sem. Dictum consectetur et nec pretium est nisi. Fusce quis ultrices neque aliquet eu amet. Tincidunt condimentum lacinia tincidunt vivamus nunc ut quis elementum sed.  Dictum consectetur et nec pretium est nisi. Fusce quis ultrices neque aliquet eu amet. Lorem ipsum dolor sit amet </p>
            </div>
        </div>
        <div class="faq__block__three">
            <button class="accordion">Lorem ipsum dolor sit amet consectetur. Viverra nulla metus id sem?</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet consectetur. Viverra nulla metus id sem. Dictum consectetur et nec pretium est nisi. Fusce quis ultrices neque aliquet eu amet. Tincidunt condimentum lacinia tincidunt vivamus nunc ut quis elementum sed.  Dictum consectetur et nec pretium est nisi. Fusce quis ultrices neque aliquet eu amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur. Viverra nulla metus id sem. Dictum consectetur et nec pretium est nisi. Fusce quis ultrices neque aliquet eu amet. Tincidunt condimentum lacinia tincidunt vivamus nunc ut quis elementum sed.  Dictum consectetur et nec pretium est nisi. Fusce quis ultrices neque aliquet eu amet. Lorem ipsum dolor sit amet </p>
            </div>
        </div>
    </div>    
</section>
<!-- end faq -->
<!-- start footer -->
<? include './blocks/footer.php' ?>
<!-- end footer -->
<script src="./js/script.js"></script>
</body>
</html>
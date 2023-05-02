$(document).ready(function () {
  const STARTING_HEIGHT = 35;
  const NUMBER_OF_IMAGES = 5;

  const clouds = document.querySelectorAll(".cloud");
  const men = document.querySelector(".men");
  const button = document.querySelector(".thoughts .promo-link");
  // счётчик дата атрибута-счётчика свг
  let menCounter = men.dataset.counter;

  if(screen.width > 980) {
    $("html, body").animate(
      {
        scrollTop: 50
      },
      1000
    );
  }
  // анимация облаков и смена свг человека


  for (let i = 0; i < clouds.length; i++) {
    clouds[i].addEventListener("click", function () {
       menCounter = men.dataset.counter;
      // проверяю счётчик и наличие активного класса у облака и добавляю значение к счётчику
      if (menCounter <= NUMBER_OF_IMAGES && !this.classList.contains("active")) {
        menCounter++;
        clouds[i].classList.add("active");
      } else if (menCounter <= NUMBER_OF_IMAGES && this.classList.contains("active")) {
        menCounter--;
        clouds[i].classList.remove("active");
      }
      men.dataset.counter = menCounter;
      // меняю адрес иззображения, подставляю дата атрибут-счётчик
      men.src =
        "/wp-content/themes/retro-child/img/tpl_mac-new-life/men_" +
        menCounter +
        ".svg";
      if(menCounter == 5) {
        button.classList.remove("hidden");
      } else {
        button.classList.add("hidden");
      }
      // скролл к изображению после клика
      if(screen.width > 980) {
        $("html, body").animate(
          {
            scrollTop: $(men).offset().top - 350
          },
          1000
        );
      } else  if((screen.width >= 640) && (screen.width <= 980)) {
        $("html, body").animate(
          {
            scrollTop: $(men).offset().top - 450
          },
          1000
        );
      } else {
        $("html, body").animate(
          {
            scrollTop: $(men).offset().top - 250
          },
          1000
        );
      }
    
    });
  }
  // раскрытие блока с программой при нажатии 'показать всё'

  $(document).ready(function () {
    $(".show-more").click(function () {
      $(this).toggleClass("show-more-active");
      if ($(this).hasClass("show-more-active")) {
        $(this).text("скрыть");
        // создаю переменную, содержащую высоту списка, в том же блоке,где произошёл клик на кнопку
        let programHeight = $(this)
          .parent()
          .next(".program-result")
          .children()
          .height();
        // анимирую изменение высоты дива-обёртки до размера списка
        $(this)
          .parent()
          .next(".program-result")
          .animate({ height: programHeight }, 600, function () {
            $("program-result").css("height", "auto");
          });
        // удаляю класс,для скрытия маски
        $(this).parent().next(".program-result").removeClass("has-mask");
      } else {
        $(this).text("подробнее");
        // анимирую изменение высоты дива-обёртки до стартового размера
        $(this)
          .parent()
          .next(".program-result")
          .animate({ height: STARTING_HEIGHT }, 600, function () {
            $("program-result").css("height", STARTING_HEIGHT);
          });
        // возвращаю маску
        let that = this;

        setTimeout(function () {
          $(that).parent().next(".program-result").addClass("has-mask");
        }, 600);
      }
    });

    // запоминание выбранной программы при клике на кнопку с ценой
    $("a.program-price").click(function () {
      var pPrice = $(this).text();
      var pName = $(this).parent('.program').find('.program-title').text();
      $('form #tarif-value').val(pName + ', ' + pPrice);
      $('#tarif-value-text').text('Я интересуюсь тарифом "'+ pName + '", ' + pPrice);
    });

    // прокрутка до якоря
    $("a[href*='#'].scroll-to-anchor").on("click", function(e){
        var anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top - 100
        }, 1000);
        e.preventDefault();
        return false;
    });

  });
});

$(document).ready(function () {
  $('.video').on('click', function (e) {
    e.preventDefault();
    const video = $(this).find('video')[0];
    video.paused ? video.play() : video.pause()
    $(this).toggleClass('playing')
  })
  $('video').on('ended', function () {
    $(this)[0].load();
    $(this).parents('.video').removeClass('playing')
  });


  $(window).scroll(function () {
    let scrollHeight = $(window).scrollTop();
    const mission = $('#mission');
    if (mission.length) {
      const missionOffset = mission.offset().top
      scrollHeight > missionOffset - 160 ? $('.download-fixed').addClass('active') : $('.download-fixed').removeClass('active');
    }
    scrollHeight >= 160 ? $('.header').addClass('fixed') : $('.header').removeClass('fixed');
  });

  const select = $('#select');

  if (select) {
    $.getJSON("practices_ru.json", function (data) {
      const arrHtml = data.practices.map(el => `<li id=${el.id} class="select__item">${el.text}</li>`).join('')

      select
        .after(`<div class="select">
                            <div class="select__box">
                                <div class="select__label">${data.label}</div>
                                <div class="select__choose"></div>
                                <div class="select__arrow"></div>
                            </div>
                            <ul class="select__dropdown">${arrHtml}</ul>
                        </div>`
        );
    });
  }

  $('.dropdown').on('click', '.select__box', function () {
    const id = $('.select__choose').attr('id');
    $(`.select__item`).show()
    $(`.select__item[id=${id}]`).hide()
    $('.select').toggleClass('open');

  })

  $('.dropdown').on('click', '.select__item', function () {
    const text = $(this).text();
    const id = $(this).attr('id')
    $('.select').addClass('filled')
    $('.select__choose').text(text).attr('id', id)
    $('.select').removeClass('open')

  })
  $(document).on('mouseup', 'body', function(e){
    var div = $( ".select" );
    if ( !div.is(e.target)
      && div.has(e.target).length === 0 ) {
      $('.select').removeClass('open')
    }
  });


  $('.info__question').on('click', function () {
    $(this).parent().toggleClass('open');
  })


  $('.open-modal-product').on('click', function () {
    $('.overlay-product').addClass('active');
  })

  $('.open-modal-practice').on('click', function () {
    $('.overlay-practice').addClass('active');
  })

  $('.close').on('click', function () {
    $('.overlay').removeClass('active');
  })


  /* Preloader */
  let preloader = $('.preloader'),
    imagesCount = $('img').length,
    loadedImg = 0;

  if (imagesCount > 0) {
    $('html, body').css('overflow', 'hidden');
    for (let i = 0; i < imagesCount; i++) {
      let img_copy = new Image();
      img_copy.src = document.images[i].src;
      img_copy.onload = img_load;
      img_copy.onerror = img_load;
    }

    function img_load() {
      loadedImg++;
      if (loadedImg == imagesCount) {
        preloader.hide()
        $('html, body').css('overflow', '');
      }
    }
  } else {
    preloader.hide()
  }

  /* End Preloader */


})
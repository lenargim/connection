function isCyrillic(str) {
  return /[а-я]/i.test(str);
}
function isEmail(str) {
  return /(^[a-zA-Z0-9_.-]+[@]{1}[a-z0-9]+[\.][a-z]+$)/mg.test(str)
}
function isUrl(str) {
  const pattern = new RegExp('^(https?:\\/\\/)?' + // protocol
    '((([a-z\\d]([a-z\\d-_]*[a-z\\d])*)\\.)+[a-z]{2,}|' + // domain name
    '((\\d{1,3}\\.){3}\\d{1,3}))' + // OR ip (v4) address
    '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*' + // port and path
    '(\\?[;&a-z\\d%_.~+=-]*)?' + // query string
    '(\\#[-a-z\\d_]*)?$', 'i'); // fragment locator
  return !!pattern.test(str);
}
function checkButton(form) {
  if (!form.find('.errored').length) {
    alert('ok')
    form[0].reset()
  }
}

$(document).ready(function () {
  const textAreas = $('textarea');
  textAreas.each(function () {
    let content = null;
    let hiddenDiv = $('<div class="hiddendiv">');
    $(this).after(hiddenDiv);
    $(this).on('input, keyup', function (e) {
      content = $(this).val();
      hiddenDiv.html(content);
      const height = e.keyCode === 13 ? `calc(${hiddenDiv.height()}px + 1.2em)` : hiddenDiv.height() + 'px';
      $(this).css({height: height})
    });
  })

  $('form').on('submit', function (e) {
    e.preventDefault();
    $(this).find('input, textarea').each(function () {
      $(this).removeClass('errored')
      if ($(this).hasClass('required')) {
        if (!$(this).val()) {
          $(this).addClass('errored')
        }
      }

      if ($(this).hasClass('lang')) {
        if (!isCyrillic($(this).val())) {
          $(this).addClass('errored')
        }
      }

      if ($(this).hasClass('tel')) {
        if ($(this).val().length < 12) {
          $(this).addClass('errored')
        }
      }

      if ($(this).hasClass('email')) {
        if (!isEmail($(this).val())) {
          $(this).addClass('errored')
        }
      }

      if ($(this).hasClass('url')) {
        if (!isUrl($(this).val())) {
          $(this).addClass('errored')
        }
      }
    })

    checkButton($(this))
  })
})
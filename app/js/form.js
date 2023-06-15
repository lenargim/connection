function isCyrillic(str) {
  return /^[а-яё \W]*$/i.test(str) && str.length
}

function isPhone(str) {
  return /^[0-9+]*$/i.test(str) && str.length
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
  let touched = 0;
  form.find('.required').each(function () {
    if (!$(this).hasClass('touched')) {
      touched += 1
    }
  })
  if (!form.find('.errored').length && !touched) {
    form.find('button[type=submit]').prop('disabled', false)
  } else {
    form.find('button[type=submit]').prop('disabled', true)
  }
}

$(document).ready(function () {
  const form = $('form');
  let fields = [];
  $.ajax({
    dataType: "json",
    url: "form_errors_ru.json",
    success: function (data) {
      fields = data?.fields;
    }
  });


  const formInputs = form.find('input, textarea');

  formInputs.on('click, change, keyup', function (e) {
    const input = $(this);
    input.addClass('touched');
    const val = input.val();
    const type = input.attr('name');
    const errors = fields.find(field => field.name === type).errors;
    let verification = []
    if (errors) {
      for (let error in errors) {
        switch (error) {
          case "empty":
            !val ? verification.push(errors[error]) : false;
            break;
          case "max":
            val.length > errors[error].number ? verification.push(errors[error].text) : false;
            break;
          case "lang":
            !isCyrillic(val) ? verification.push(errors[error]) : false
            break;
          case "phone":
            !isPhone(val) ? verification.push(errors[error]) : false
            break;
          case "email":
            !isEmail(val) ? verification.push(errors[error]) : false
            break;
          case "link":
            !isUrl(val) ? verification.push(errors[error]) : false
            break;
        }
      }
    }

    input.removeClass('errored');
    input.siblings().remove()
    if (verification.length) {
      input.addClass('errored');
      input.after(`<div class="error">${verification[0]}</div>`)
    }


    if (input.is('textarea')) {
      let hiddenDiv = $('<div class="hiddendiv">');
      input.after(hiddenDiv);
      hiddenDiv.html(val);
      const height = e.keyCode === 13 ? `calc(${hiddenDiv.height()}px + 1.2em)` : hiddenDiv.height() + 'px';
      input.css({height: height})
    }

    checkButton(input.parents('form'))
  })

  formInputs.on('blur', () => checkButton($(this).parents('form')))


  form.on('submit', function (e) {
    e.preventDefault();
    if ($(this).find('button[type=submit]').prop('disabled') === false) {
      location.href = '/thanks.php'
    }
  })
})
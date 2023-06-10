$(document).ready(function () {
  let textareas = $('textarea');
  textareas.each(function () {
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
})
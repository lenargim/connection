function isCyrillic(t){return/[а-я]/i.test(t)}$(document).ready((function(){$("textarea").each((function(){let t=null,i=$('<div class="hiddendiv">');$(this).after(i),$(this).on("input, keyup",(function(e){t=$(this).val(),i.html(t);const n=13===e.keyCode?`calc(${i.height()}px + 1.2em)`:i.height()+"px";$(this).css({height:n})}))}))}));
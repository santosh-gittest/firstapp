
<!DOCTYPE html><html class=''>
<head><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="canonical" href="http://codepen.io/kunalbhat/pen/ctwKe" />


<style>body {
  font-family: "Helvetica Neue", Helvetica, sans-serif;
  font-size: 14px;
}

#compose-tweet {
  background: #efefef;
  border: 1px solid #ccc;
  display: inline-block;
  padding: 10px;
}

#placeholder {
  color: #ccc;
  font-size: 13px;
  left: 28px;
  position: absolute;
  top: 26px;
}

#compose-editor {
  background: #fff;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-family: "Helvetica Neue", Helvetica, sans-serif;
  font-size: 13px;
  min-height: 16px;
  outline: none;
  padding: 7px;
  width: 300px;
}
#compose-editor:focus, #compose-editor.focus {
  border-color: #56b4ef;
  box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.05), 0px 0px 8px rgba(82, 168, 236, 0.6);
  height: 100px;
}
#compose-editor:focus + fieldset, #compose-editor.focus + fieldset {
  display: block;
}
#compose-editor em {
  color: #56b4ef;
  font-style: normal;
}

fieldset {
  border: none;
  display: none;
  margin-top: 5px;
  text-align: right;
  width: 100%;
}

input[type=submit] {
  background: #0271bf;
  border: none;
  border-radius: 3px;
  color: #fff;
  cursor: pointer;
  margin-right: 10px;
  padding: 7px;
}
input[type=submit][disabled] {
  background: #ccc;
  color: #666;
  cursor: default;
}
input[type=submit][disabled]:hover {
  background: #ccc;
  color: #666;
}
input[type=submit]:hover {
  background: #0262a6;
}

#char-count.warning {
  color: red;
}
</style></head><body>
<form name="compose-tweet" id="compose-tweet">
  <span id="placeholder">Compose new Tweet...</span>
  <div id="compose-editor" contenteditable="true"></div>
  
  <fieldset>
    <span id="char-count"></span>
    <input id="submit-button" type="submit" value="Tweet" disabled="disabled">
  </fieldset>
</form>
<script style='display: none;'>var __links = document.querySelectorAll('a');function __linkClick(e) { parent.window.postMessage(this.href, '*');} ;for (var i = 0, l = __links.length; i < l; i++) {if ( __links[i].getAttribute('target') == '_blank' ) { __links[i].addEventListener('click', __linkClick, false);}}</script>
<script src='//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
<script>(function() {
  var $characterCount, $composeEditor, $placeholder, $submitButton, updateCharCount;

  $characterCount = $('#char-count');

  $composeEditor = $('#compose-editor');

  $placeholder = $('#placeholder');

  $submitButton = $('#submit-button');

  window.tweetTotal = 140;

  $characterCount.text(tweetTotal);

  $composeEditor.on('click', function(event) {
    $placeholder.hide();
    return $(event.currentTarget).focus();
  });

  $composeEditor.on('blur', function(event) {
    if ($(event.currentTarget).text().length === 0) {
      $placeholder.show();
      return $(event.currentTarget).removeClass('focus');
    } else {
      if ($(event.currentTarget).hasClass('focus')) {
        return $(event.currentTarget).removeClass('focus');
      } else {
        return $(event.currentTarget).addClass('focus');
      }
    }
  });

  $placeholder.on('click', function(event) {
    $(event.currentTarget).hide();
    return $composeEditor.focus();
  });

  $composeEditor.on('keyup', function(event) {
    var tweetCount;
    tweetCount = $(event.currentTarget).text().length;
    updateCharCount(tweetCount);
    if (tweetCount >= 140 || tweetCount === 0) {
      return $submitButton.attr('disabled', 'disabled');
    } else {
      return $submitButton.removeAttr('disabled');
    }
  });

  updateCharCount = function(tweetCount) {
    var remainingChars;
    remainingChars = window.tweetTotal - tweetCount;
    if (remainingChars <= 20) {
      $characterCount.addClass('warning');
    } else {
      $characterCount.removeClass('warning');
    }
    return $characterCount.text(remainingChars);
  };

}).call(this);
//@ sourceURL=pen.js
</script>

</body></html>
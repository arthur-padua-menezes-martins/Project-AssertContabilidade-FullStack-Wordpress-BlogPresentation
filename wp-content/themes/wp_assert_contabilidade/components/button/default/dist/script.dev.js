"use strict";

function getDefaultButton() {
  var text = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : '';
  var url = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : '';
  var ajax = new XMLHttpRequest(),
      result;

  ajax.onreadystatechange = function (response) {
    if (ajax.readyState == 4 && ajax.status == 200) {
      result = ajax.responseText;
    }
  };

  ajax.open("GET", "http://localhost/Wordpress/wordpress/wp-content/themes/wp_assert_contabilidade/components/button/default/index.php?text=".concat(text, "&url=").concat(url), false);
  ajax.send();
  return result;
}
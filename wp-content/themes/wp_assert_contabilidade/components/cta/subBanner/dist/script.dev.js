"use strict";

function getSubBanner() {
  var subBannerType = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 'home_default';
  var title = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : '';
  var msg = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : '';
  var btn_text = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : '';
  var btn_url = arguments.length > 4 && arguments[4] !== undefined ? arguments[4] : '';
  var ajax = new XMLHttpRequest(),
      result;

  ajax.onreadystatechange = function (response) {
    if (ajax.readyState == 4 && ajax.status == 200) {
      result = ajax.response;
    }
  };

  ajax.open("GET", "http://localhost/Wordpress/wordpress/wp-content/themes/wp_assert_contabilidade/components/cta/subBanner/index.php?subBannerType=".concat(subBannerType, "&title=").concat(title, "&msg=").concat(msg, "&btn_text=").concat(btn_text, "&btn_url=").concat(btn_url), false);
  ajax.send();
  return result;
}
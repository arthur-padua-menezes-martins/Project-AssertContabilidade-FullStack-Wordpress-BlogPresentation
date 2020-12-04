"use strict";

function getSpecialitiesAndServicesBanner(_ref) {
  var _ref$category = _ref.category,
      category = _ref$category === void 0 ? '' : _ref$category,
      _ref$title = _ref.title,
      title = _ref$title === void 0 ? '' : _ref$title,
      _ref$msg = _ref.msg,
      msg = _ref$msg === void 0 ? '' : _ref$msg,
      _ref$style = _ref.style,
      style = _ref$style === void 0 ? '' : _ref$style,
      _ref$identifier = _ref.identifier,
      identifier = _ref$identifier === void 0 ? '' : _ref$identifier;
  var ajax = new XMLHttpRequest(),
      result,
      form;
  form = new FormData();
  form.append('category', category);
  form.append('title', title);
  form.append('msg', msg);
  form.append('style', style);
  form.append('identifier', identifier);

  ajax.onreadystatechange = function (response) {
    if (ajax.readyState == 4 && ajax.status == 200) {
      result = ajax.response;
    }
  };

  ajax.open("POST", "http://localhost/Wordpress/wordpress/wp-content/themes/wp_assert_contabilidade/components/page_specialities_and_services/banner/index.php", false);
  ajax.send(form);
  return result;
}
"use strict";

function getSpecialitiesContainer(_ref) {
  var _ref$containerTitle = _ref.containerTitle,
      containerTitle = _ref$containerTitle === void 0 ? '' : _ref$containerTitle,
      _ref$containerMsg = _ref.containerMsg,
      containerMsg = _ref$containerMsg === void 0 ? '' : _ref$containerMsg,
      _ref$icon = _ref.icon,
      icon = _ref$icon === void 0 ? '' : _ref$icon,
      _ref$style = _ref.style,
      style = _ref$style === void 0 ? '' : _ref$style,
      _ref$index = _ref.index,
      index = _ref$index === void 0 ? '' : _ref$index;
  var ajax = new XMLHttpRequest(),
      result,
      form;
  form = new FormData();
  form.append('containerTitle', containerTitle);
  form.append('containerMsg', containerMsg);
  form.append('icon', icon);
  form.append('style', style);
  form.append('index', index);

  ajax.onreadystatechange = function (response) {
    if (ajax.readyState == 4 && ajax.status == 200) {
      result = ajax.response;
    }
  };

  ajax.open("POST", "http://localhost/Wordpress/wordpress/wp-content/themes/wp_assert_contabilidade/components/ourSpecialities/container/index.php", false);
  ajax.send(form);
  return Promise.resolve(result);
}
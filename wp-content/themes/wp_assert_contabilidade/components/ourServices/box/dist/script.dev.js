"use strict";

function getServicesBox(_ref) {
  var _ref$title = _ref.title,
      title = _ref$title === void 0 ? '' : _ref$title,
      _ref$msg = _ref.msg,
      msg = _ref$msg === void 0 ? '' : _ref$msg,
      _ref$createdAt = _ref.createdAt,
      createdAt = _ref$createdAt === void 0 ? '' : _ref$createdAt,
      _ref$btn_text = _ref.btn_text,
      btn_text = _ref$btn_text === void 0 ? '' : _ref$btn_text,
      _ref$btn_url = _ref.btn_url,
      btn_url = _ref$btn_url === void 0 ? '' : _ref$btn_url,
      _ref$icon = _ref.icon,
      icon = _ref$icon === void 0 ? '' : _ref$icon,
      _ref$svg = _ref.svg,
      svg = _ref$svg === void 0 ? '' : _ref$svg,
      _ref$redirect = _ref.redirect,
      redirect = _ref$redirect === void 0 ? '' : _ref$redirect,
      _ref$style = _ref.style,
      style = _ref$style === void 0 ? '' : _ref$style,
      _ref$index = _ref.index,
      index = _ref$index === void 0 ? '0' : _ref$index;
  console.log('arguments', arguments);
  var ajax = new XMLHttpRequest(),
      result,
      form;
  form = new FormData();
  form.append('title', title);
  form.append('createdAt', createdAt);
  form.append('msg', msg);
  form.append('btn_text', btn_text);
  form.append('btn_url', btn_url);
  form.append('icon', icon);
  form.append('svg', svg);
  form.append('redirect', redirect);
  form.append('style', style);
  form.append('index', index);

  ajax.onreadystatechange = function (response) {
    if (ajax.readyState == 4 && ajax.status == 200) {
      result = ajax.response;
    }
  };

  ajax.open("POST", "http://localhost/Wordpress/wordpress/wp-content/themes/wp_assert_contabilidade/components/ourServices/box/index.php", false);
  ajax.send(form);
  return result;
}
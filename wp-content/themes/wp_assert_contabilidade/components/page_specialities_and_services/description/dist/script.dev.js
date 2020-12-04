"use strict";

function getSpecialitiesAndServicesDescription(_ref) {
  var _ref$description = _ref.description,
      description = _ref$description === void 0 ? '' : _ref$description,
      _ref$img = _ref.img,
      img = _ref$img === void 0 ? '' : _ref$img;
  var ajax = new XMLHttpRequest(),
      result,
      form;
  form = new FormData();
  form.append('description', description);
  form.append('img', img);

  ajax.onreadystatechange = function (response) {
    if (ajax.readyState == 4 && ajax.status == 200) {
      result = ajax.response;
    }
  };

  ajax.open("POST", "http://localhost/Wordpress/wordpress/wp-content/themes/wp_assert_contabilidade/components/page_specialities_and_services/description/index.php", false);
  ajax.send(form);
  return Promise.resolve(result);
}
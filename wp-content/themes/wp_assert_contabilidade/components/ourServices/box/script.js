"use strict";
function getServicesBox({
  title = '', msg = '', createdAt = '', btn_text = '', btn_url = '', icon = '', svg = '', redirect = '', style = '', index = '0'
}) {
  console.log('arguments', arguments)
  let ajax = new XMLHttpRequest, result, form

  form = new FormData()
  form.append('title', title)
  form.append('createdAt', createdAt)
  form.append('msg', msg)
  form.append('btn_text', btn_text)
  form.append('btn_url', btn_url)
  form.append('icon', icon)
  form.append('svg', svg)
  form.append('redirect', redirect)
  form.append('style', style)
  form.append('index', index)


  ajax.onreadystatechange = (response) => {
    if (ajax.readyState == 4 && ajax.status == 200) {
      result = ajax.response
    }
  }

  ajax.open(`POST`, `http://localhost/Wordpress/wordpress/wp-content/themes/wp_assert_contabilidade/components/ourServices/box/index.php`, false)
  ajax.send(form)

  return result

}

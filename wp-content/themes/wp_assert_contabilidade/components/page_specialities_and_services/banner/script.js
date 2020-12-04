"use strict";
function getSpecialitiesAndServicesBanner({
    category = '', title = '', msg = '', style = '', identifier = ''
}) {

    let ajax = new XMLHttpRequest, result, form

    form = new FormData()
    form.append('category', category)
    form.append('title', title)
    form.append('msg', msg)
    form.append('style', style)
    form.append('identifier', identifier)

    ajax.onreadystatechange = (response) => {
        if (ajax.readyState == 4 && ajax.status == 200) {
            result = ajax.response
        }
    }

    ajax.open(`POST`, `http://localhost/Wordpress/wordpress/wp-content/themes/wp_assert_contabilidade/components/page_specialities_and_services/banner/index.php`, false)
    ajax.send(form)

    return result

}

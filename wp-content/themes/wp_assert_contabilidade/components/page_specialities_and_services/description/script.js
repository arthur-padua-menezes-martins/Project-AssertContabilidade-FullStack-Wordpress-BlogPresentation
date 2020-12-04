"use strict";
function getSpecialitiesAndServicesDescription({
    description = '', img = ''
}) {

    let ajax = new XMLHttpRequest, result, form

    form = new FormData()
    form.append('description', description)
    form.append('img', img)

    ajax.onreadystatechange = (response) => {
        if (ajax.readyState == 4 && ajax.status == 200) {
            result = ajax.response
        }
    }
    ajax.open(`POST`, `http://localhost/Wordpress/wordpress/wp-content/themes/wp_assert_contabilidade/components/page_specialities_and_services/description/index.php`, false)
    ajax.send(form)

    return Promise.resolve(result)

}

"use strict";
function getSpecialitiesContainer({
    containerTitle = '', containerMsg = '', icon = '', style = '', index = ''
}) {

    let ajax = new XMLHttpRequest, result, form

    form = new FormData()
    form.append('containerTitle', containerTitle)
    form.append('containerMsg', containerMsg)
    form.append('icon', icon)
    form.append('style', style)
    form.append('index', index)

    ajax.onreadystatechange = (response) => {
        if (ajax.readyState == 4 && ajax.status == 200) {
            result = ajax.response
        }
    }
    ajax.open(`POST`, `http://localhost/Wordpress/wordpress/wp-content/themes/wp_assert_contabilidade/components/ourSpecialities/container/index.php`, false)
    ajax.send(form)
    
    return Promise.resolve(result)

}

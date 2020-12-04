function getDefaultButton(text = '', url = '') {

    let ajax = new XMLHttpRequest,
        result

    ajax.onreadystatechange = (response) => {
        if (ajax.readyState == 4 && ajax.status == 200) {
            result = ajax.responseText
        }
    }
    ajax.open(`GET`, `http://localhost/Wordpress/wordpress/wp-content/themes/wp_assert_contabilidade/components/button/default/index.php?text=${text}&url=${url}`, false)
    ajax.send()

    return result

}
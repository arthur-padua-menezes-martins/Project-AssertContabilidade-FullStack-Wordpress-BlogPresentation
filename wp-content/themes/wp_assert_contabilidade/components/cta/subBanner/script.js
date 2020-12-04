function getSubBanner(subBannerType = 'home_default', title = '', msg = '', btn_text = '', btn_url = '') {

    let
        ajax = new XMLHttpRequest,
        result

    ajax.onreadystatechange = (response) => {
        if (ajax.readyState == 4 && ajax.status == 200) {
            result = ajax.response
        }
    }
    ajax.open(`GET`, `http://localhost/Wordpress/wordpress/wp-content/themes/wp_assert_contabilidade/components/cta/subBanner/index.php?subBannerType=${subBannerType}&title=${title}&msg=${msg}&btn_text=${btn_text}&btn_url=${btn_url}`, false)
    ajax.send()

    return result
}

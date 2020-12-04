<link rel="stylesheet" href="http://localhost/Wordpress/wordpress/wp-content/themes/wp_assert_contabilidade/components/page_specialities_and_services/description/style.css" />


<section id="page_specialities_and_services_description_section">
    <article id="page_specialities_and_services_description_article">

        <article id="page_specialities_and_services_description_article_left" class="page_specialities_and_services_description_article_left_right">

            <div id="page_specialities_and_services_description_div_text" class="page_specialities_and_services_description_div">
                <span>
                    <?= $_POST['description']; ?>
                </span>
            </div>

            <div id="page_specialities_and_services_description_div_button" class="page_specialities_and_services_description_div">

            </div>

        </article>

        <article style="background-image: url(<?= $_POST['img']; ?>);" id="page_specialities_and_services_description_article_right" class="page_specialities_and_services_description_article_left_right">

            <div id="page_specialities_and_services_description_div_img_filter"></div>
           
        </article>

    </article>
</section>
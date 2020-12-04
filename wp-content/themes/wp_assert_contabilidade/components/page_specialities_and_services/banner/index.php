<link rel="stylesheet" href="http://localhost/Wordpress/wordpress/wp-content/themes/wp_assert_contabilidade/components/page_specialities_and_services/banner/style.css" />


<section id="page_specialities_and_services_banner_section_<?= $_POST['style']; ?>" class="page_specialities_and_services_banner_section">

    <div id="page_specialities_and_services_banner_filter_<?= $_POST['style']; ?>" class="page_specialities_and_services_banner_filter"></div>
    <div id="page_specialities_and_services_banner_container" class="<?= $_POST['category']; ?>">
        <article id="page_specialities_and_services_banner_article_<?= $_POST['style']; ?>">

            <article id="page_specialities_and_services_banner_left" class="page_specialities_and_services_banner_left_right page_specialities_and_services_banner_left_<?= $_POST['category']; ?> page_specialities_and_services_banner_left_<?= $_POST['style']; ?>">
                <?php

                if ($_POST['style'] == 'specialities') { ?>

                    <div id="page_specialities_and_services_banner_left_text_container">
                        <div id="page_specialities_and_services_banner_left_text">

                            <span>ESPECIALIDADES</span>
                            <h1><?= $_POST['title'] ?></h1>
                            <span><?= $_POST['msg'] ?></span>

                        </div>
                    </div>

                <?php } else {

                ?>
            </article>

            <article id="page_specialities_and_services_banner_right" class="page_specialities_and_services_banner_left_right page_specialities_and_services_banner_right_<?= $_POST['category']; ?>">

                    <div id="page_specialities_and_services_banner_right_container">
                        <div id="page_specialities_and_services_banner_right_text">
                            <span>
                                <?= $_POST['identifier'] ?>
                            </span>
                            <h1><?= $_POST['title'] ?></h1>
                        </div>
                    </div>

                <?php }

                ?>

            </article>

        </article>
    </div>

</section>
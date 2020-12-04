<link rel="stylesheet" href="http://localhost/Wordpress/wordpress/wp-content/themes/wp_assert_contabilidade/components/cta/subBanner/style.css" />


<section id="cta_subBanner_section">

    <div id="cta_subBanner_filter"></div>
    <article id="cta_subBanner_article" class="<?php echo $_GET['subBannerType'] ?>">

        <div id="cta_subBanner_div">

            <div id="cta_subBanner_div_title" class="cta_subBanner_div_"><span><?= $_GET['title'] ?></span></div>

            <div id="cta_subBanner_div_msg" class="cta_subBanner_div_"><span><?= $_GET['msg'] ?></span></div>

            <div id="cta_subBanner_div_button" class="cta_subBanner_div_ cta_subBanner_div_button_<?= $_GET['subBannerType'] ?>">

                <?php

                if (true) { ?>

                    <div>
                        <a href="<?php echo $_GET['btn_url'] ?>">
                            <button class="button_default_button">
                                <span>
                                    <?php echo $_GET['btn_text'] ?>
                                </span>
                            </button>
                        </a>
                    </div>

                <?php }

                ?>

            </div>

        </div>

    </article>

</section>
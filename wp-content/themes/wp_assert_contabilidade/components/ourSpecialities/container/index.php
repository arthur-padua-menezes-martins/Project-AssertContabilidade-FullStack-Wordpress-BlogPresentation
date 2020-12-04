<section id="<?= $_POST['style'] ?>_container">

    <?php
    if ($_POST['style'] == 'blogPresentation') { ?>
        <div id="blogPresentation_filter"></div>
    <?php }
    ?>

    <section id="<?= $_POST['style'] ?>_section" class="<?= $_POST['style'] ?>_backgroundImage">

        <section id="<?= $_POST['style'] ?>_box"></section>

        <section id="<?= $_POST['style'] ?>_text">

            <article id="<?= $_POST['style'] ?>_text_article">
                <div id="<?= $_POST['style'] ?>_text_div">

                    <?php
                    if ($_POST['style'] == 'page_services_cta') { ?>
                        <div id="<?= $_POST['style'] ?>_text_div_icon" class="<?= $_POST['style'] ?>_text_div_">
                            <span>
                                <?= $_POST['icon']; ?>
                            </span>
                        </div>
                    <?php }
                    ?>

                    <div class="<?= $_POST['style'] ?>_text_div_">
                        <span><?= $_POST['containerTitle'] ?></span>
                    </div>
                    <div class="<?= $_POST['style'] ?>_text_div_">
                        <span><?= $_POST['containerMsg'] ?></span>
                    </div>

                </div>
            </article>

        </section>

    </section>

</section>
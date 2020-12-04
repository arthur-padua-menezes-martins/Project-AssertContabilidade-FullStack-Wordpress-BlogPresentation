<?php

if ($_POST['style'] === 'default') { ?>

    <article style="grid-area: ourServices_box_article_<?= $_POST['index']; ?>;" class="ourServices_box_article ourServices_box_<?= $_POST['index']; ?>">
        <div class="ourServices_box_div">
            <div class="ourServices_box_div_ ourServices_box_div_icon"><span><img src="<?= $_POST['icon']; ?>" alt="serviços prestados" /></span></div>
            <div class="ourServices_box_div_ ourServices_box_div_title"><span><?= $_POST['title']; ?></span></div>
            <div class="ourServices_box_div_ ourServices_box_div_msg"><span><?= $_POST['msg']; ?></span></div>
            <div id="ourServices_box_div_button_<?= $_POST['style']; ?>_<?= $_POST['index']; ?>" class="ourServices_box_div_ ourServices_box_div_button ourServices_box_div_button_<?= $_POST['style']; ?>"></div>
        </div>
    </article>

<?php } elseif ($_POST['style'] === 'specialities') { ?>

    <article style="grid-area: ourSpecialities_box_article_<?= $_POST['index']; ?>;" class="ourSpecialities_box_article ourSpecialities_box_<?= $_POST['index']; ?>">
        <div class="ourSpecialities_box_div">

                <div class="ourSpecialities_box_div_ ourSpecialities_box_div_icon"><span>
                    <?php
                        if($_POST['icon']) { ?>
                            <img src="<?= $_POST['icon']; ?>" alt="serviços prestados" />
                        <?php } else if($_POST['svg']) { ?>
                            <?= `` . $_POST['svg'] . ``; ?>
                        <?php }
                    ?>
                </span></div>
                <div class="ourSpecialities_box_div_ ourSpecialities_box_div_title"><span><?= $_POST['title']; ?></span></div>
                <div class="ourSpecialities_box_div_ ourSpecialities_box_div_msg"><span><?= $_POST['msg']; ?></span></div>
                <div id="ourSpecialities_box_div_button_<?= $_POST['style']; ?>_<?= $_POST['index']; ?>" class="ourSpecialities_box_div_ ourSpecialities_box_div_button ourSpecialities_box_div_button_<?= $_POST['style']; ?>"></div>
            
        </div>
    </article>

<?php } elseif ($_POST['style'] === 'blogPresentation') { ?>

    <article onclick="redirect('<?= $_POST['redirect']; ?>')" style="grid-area: blogPresentation_box_article_<?= $_POST['index']; ?>;" class="blogPresentation_box_article blogPresentation_box_<?= $_POST['index']; ?>">
        <div class="blogPresentation_box_div">
            <div class="blogPresentation_box_div_ blogPresentation_box_div_container_icon">
                <div class="blogPresentation_box_div_ blogPresentation_box_div_icon_filter_1"></div>
                <div class="blogPresentation_box_div_ blogPresentation_box_div_icon_filter_2"></div>
                <div class="blogPresentation_box_div_ blogPresentation_box_div_icon"><span><img src="<?= $_POST['icon']; ?>" alt="serviços prestados" /></span></div>
            </div>
            <div class="blogPresentation_box_div_ blogPresentation_box_div_title"><span><?= $_POST['title']; ?></span></div>
            <div class="blogPresentation_box_div_ blogPresentation_box_div_createdAt"><span><?= $_POST['createdAt']; ?></span></div>
            <div class="blogPresentation_box_div_ blogPresentation_box_div_msg"><span><?= $_POST['msg']; ?></span></div>
        </div>
    </article>

<?php }

?>
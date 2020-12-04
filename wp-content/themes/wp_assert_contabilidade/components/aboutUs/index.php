<?php

$aboutUs_text_content = array(
    'title' => 'Sobre Nós',
    'msg' => 'Assert Contabilidade, surgiu do desejo de ajudar os empresários dos mais diversos setores, a entenderem melhor seus números, e, com isso, terem em suas mãos informações valiosas que os auxiliem no processo de tomada de decisão dentro do seu negócio.',
    'sub_msg' => '<br/><br/>Assert se faz presente com informações seguras e relevantes, em diversas áreas'
);

?>


<link rel="stylesheet" href="http://localhost/Wordpress/wordpress/wp-content/themes/wp_assert_contabilidade/components/aboutUs/style.css" />


<section id="aboutUs_section">

    <section id="aboutUs_text">

        <article id="aboutUs_text_article">
            <div id="aboutUs_text_div">

                <div class="aboutUs_text_div_"><span><?= $aboutUs_text_content['title'] ?></span></div>
                <div class="aboutUs_text_div_">
                    <span>
                        <?= $aboutUs_text_content['msg']; ?>
                        <?php /*echo $aboutUs_text_content['sub_msg'];*/ ?>
                    </span>
                </div>

            </div>
        </article>

    </section>

</section>
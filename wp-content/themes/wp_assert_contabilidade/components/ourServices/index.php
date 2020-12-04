<?php

$ourServices_box_content = array(

    array(
        'title' => 'Gestão Contábil',
        'msg'  => 'a gestão contábil é usada para diagnosticar a saúde financeira de uma empresa, identificar...',
        'btn_text' => 'saiba mais',
        'btn_url' => 'gestao-contabil',
        'icon' => 'http://localhost/Wordpress/wordpress/wp-content/themes/wp_assert_contabilidade/components/svg/ourServices/management_accounting.svg'
    ),

    array(
        'title' => 'Gestão Fiscal e Tributária',
        'msg'  => 'a Gestão Fiscal e Tributária trabalha como uma forma preventiva de evitar autuações...',
        'btn_text' => 'saiba mais',
        'btn_url' => 'gestao-fiscal-e-tributaria',
        'icon' => 'http://localhost/Wordpress/wordpress/wp-content/themes/wp_assert_contabilidade/components/svg/ourServices/fiscal_and_tax_management.svg'
    ),

    array(
        'title' => 'Gestão Trabalhista',
        'msg'  => 'é inviável falar sobre o vínculo entre empregador e empregado sem falar dos trâmites legais...',
        'btn_text' => 'saiba mais',
        'btn_url' => 'gestao-trabalhista',
        'icon' => 'http://localhost/Wordpress/wordpress/wp-content/themes/wp_assert_contabilidade/components/svg/ourServices/labor_management.svg'
    ),

    array(
        'title' => 'Legalização de Empresas',
        'msg'  => 'a legalização de uma empresa é um passo essencial para todo empreendedor que deseja...',
        'btn_text' => 'saiba mais',
        'btn_url' => 'legalizacao-de-empresas',
        'icon' => 'http://localhost/Wordpress/wordpress/wp-content/themes/wp_assert_contabilidade/components/svg/ourServices/legalization_of_companies.svg'
    )

);

$ourServices_text_content = array(
    'title' => 'Nossos Serviços',
    'msg' => 'Assert Contabilidade presta serviços de Gestão Contábil, Gestão Fiscal e Tributária, Gestão Trabalhista e Legalização de Empresas'
);

?>


<link rel="stylesheet" href="http://localhost/Wordpress/wordpress/wp-content/themes/wp_assert_contabilidade/components/ourServices/style.css" />
<script src="http://localhost/Wordpress/wordpress/wp-content/themes/wp_assert_contabilidade/components/ourServices/box/script.js"></script>


<section id="ourServices_section">

    <section id="ourServices_box"></section>

    <section id="ourServices_text">

        <article id="ourServices_text_article">
            <div id="ourServices_text_div">

                <div class="ourServices_text_div_"><span><?= $ourServices_text_content['title'] ?></span></div>
                <div class="ourServices_text_div_"><span><?= $ourServices_text_content['msg'] ?></span></div>

            </div>
        </article>

    </section>

</section>

<script>
    let box

    <?php

    foreach ($ourServices_box_content as $index => $key) { ?>

        box = getServicesBox({
            title: '<?= $ourServices_box_content[$index]['title']; ?>',
            msg: '<?= $ourServices_box_content[$index]['msg']; ?>',
            btn_text: '<?= $ourServices_box_content[$index]['btn_text']; ?>',
            btn_url: '<?= $ourServices_box_content[$index]['btn_url']; ?>',
            icon: '<?= $ourServices_box_content[$index]['icon']; ?>',
            style: 'default',
            index: <?= $index ?>
        })

        document.getElementById('ourServices_box').innerHTML = document.getElementById('ourServices_box').innerHTML.concat(box)
        document.getElementById('ourServices_box_div_button_default_<?= $index ?>').innerHTML = getDefaultButton(
            '<?= $ourServices_box_content[$index]['btn_text']; ?>',
            '<?= $ourServices_box_content[$index]['btn_url']; ?>'
        )

    <?php }

    ?>
</script>
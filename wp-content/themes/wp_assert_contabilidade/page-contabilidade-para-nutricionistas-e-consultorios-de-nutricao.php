<?php
/*
 Template Name: contabilidade-para-nutricionistas-e-consultorios-de-nutricao
 */
?>
<!DOCTYPE html>
<html lang="pt-BR">

  <?php
  /*<!-- HTML HEAD -->*/
  require_once('wp-content/themes/wp_assert_contabilidade/html/head.php');
  ?>

<body>

  <?php
  /*<!-- REQUIRE_ONCE HEADER -->*/
  require_once('wp-content/themes/wp_assert_contabilidade/components/header/index.php');
  ?>

  <section id="page_specialities_and_services_banner_container"></section>

  <?php
  /*<!-- REQUIRE_ONCE PAGE/SERVICES/CTA -->*/
  require_once('wp-content/themes/wp_assert_contabilidade/components/page_services/cta/index.php');
  ?>

  <section id="page_specialities_and_services_description_container"></section>

  <?php
  /*<!-- REQUIRE_ONCE FOOTER -->*/
  require_once('wp-content/themes/wp_assert_contabilidade/components/footer/index.php');
  ?>

  <script>
    /*page_specialities_and_services/banner*/
    document.getElementById('page_specialities_and_services_banner_container').innerHTML = getSpecialitiesAndServicesBanner({
      category: 'nutrition_office',
      title: 'Contabilidade para Nutricionistas e Consultórios de Nutrição em Fortaleza - CE',
      msg: 'ter o suporte de uma contabilidade para nutricionistas e consultório de nutrição pode ser a chave para o alcance do êxito!',
      style: 'specialities'
    })
    /*page_specialities_and_services/banner*/

    /*page_services/cta*/
    getSpecialitiesContainer({
      category: 'nutrition_office',
      containerTitle: 'a experiência e conhecimento de uma contabilidade para nutricionistas e consultórios de nutrição pode fazer toda a diferença na conquista do sucesso!',
      containerMsg: 'a atuação do contador é fundamental em qualquer empreendimento. Os profissionais de nutrição que atuam em clínicas especializadas ou por conta própria necessitam de uma boa assessoria contábil para garantir o crescimento do seu negócio e ainda estar em conformidade com as obrigações legais.',
      icon: `<?= require_once('wp-content/themes/wp_assert_contabilidade/components/svg/page_services/conquest.svg'); ?>`,
      style: 'page_services_cta',
    }).then((response) => {
      document.getElementById('page_services_cta_article').innerHTML = response
    })
    /*page_services/cta*/

    /*page_specialities_and_services/description*/
    getSpecialitiesAndServicesDescription({
      description: 'Através da nossa contabilidade especializada para nutricionistas e consultórios de nutrição, podemos lhe oferecer segurança para que tome as decisões certas e diminua os gastos desnecessários na sua empresa.</br></br>Entre em contato conosco agora mesmo. Um dos nossos profissionais, com certeza, vai poder te auxiliar e ajudar a organizar toda a parte legal, contábil e tributária de sua empresa.',
      img: 'https://lirp-cdn.multiscreensite.com/d19c105c/dms3rep/multi/opt/contabilidade-para-nutricionistas-e-consultorios-de-nutricao-64ab9a16-1920w.jpg',
    }).then((response) => {
      document.getElementById('page_specialities_and_services_description_container').innerHTML = response
      document.getElementById('page_specialities_and_services_description_div_button').innerHTML = getDefaultButton(
        'entre em contato conosco',
        ''
      )
    })
    /*page_specialities_and_services/description*/
  </script>

</body>

</html>
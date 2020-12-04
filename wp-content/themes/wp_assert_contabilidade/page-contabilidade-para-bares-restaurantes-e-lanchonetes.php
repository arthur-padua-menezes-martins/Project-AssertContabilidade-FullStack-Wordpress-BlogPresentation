<?php
/*
 Template Name: contabilidade-para-bares-restaurantes-e-lanchonetes
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
      category: 'snack_bars_and_restaurants',
      title: 'Contabilidade para Restaurantes, Bares e Lanchonetes em Fortaleza - CE',
      msg: 'descubra como a contabilidade para restaurante, bares e lanchonetes pode alavancar o seu negócio!',
      style: 'specialities'
    })
    /*page_specialities_and_services/banner*/

    /*page_services/cta*/
    getSpecialitiesContainer({
      category: 'snack_bars_and_restaurants',
      containerTitle: 'a contabilidade voltada para restaurantes, bares e lanchonetes é a chave para conquistar o sucesso!',
      containerMsg: 'ambiente perfeito, boa comida e excelente serviço. Parece fácil, mas a vida do empresário do segmento de restaurantes, bares e lanchonetes vai muito além. Ao gerenciar um estabelecimento, é preciso se atentar a todas as questões que envolvem seu funcionamento e que estão diretamente relacionadas com a sua lucratividade.',
      icon: `<?= require_once('wp-content/themes/wp_assert_contabilidade/components/svg/page_services/star_key.svg'); ?>`,
      style: 'page_services_cta',
    }).then((response) => {
      document.getElementById('page_services_cta_article').innerHTML = response
    })
    /*page_services/cta*/

    /*page_specialities_and_services/description*/
    getSpecialitiesAndServicesDescription({
      description: 'Compreender a saúde financeira de seu restaurante, bar ou lanchonete e como aumentar a sua lucratividade pode significaFfr o sucesso ou fracasso do seu negócio. Por isso, assim como você confia a sua cozinha a um chef, confie sua contabilidade a profissionais competentes para lidar com as finanças. Conte com o nosso apoio e tenha a segurança de que as questões contábeis e tributárias de sua empresa estão nas mãos de profissionais capacitados, atualizados e experientes.</br></br>Realizamos também, através de profissionais especializados, um planejamento tributário específico, onde buscamos lhe orientar a optar pelo regime de tributação que mais se adeque ao seu negócio, e, assim, garantir uma redução legal da carga tributária incidente sobre seu empreendimento.',
      img: 'https://irp-cdn.multiscreensite.com/d19c105c/dms3rep/multi/contabilidade-para-restaurantes-bares-e-lanchonetes-em-fortaleza-35c72bc6.jpg',
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
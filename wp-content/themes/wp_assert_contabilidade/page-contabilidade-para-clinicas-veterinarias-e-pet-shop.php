<?php
/*
 Template Name: contabilidade-para-clinicas-veterinarias-e-pet-shop
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
      category: 'veterinary_clinics_and_pet_shops',
      title: 'contabilidade para Clínicas Veterinárias e Pet Shop em Fortaleza - CE',
      msg: 'descubra como a contabilidade para clínicas veterinárias e pet shop pode melhorar os resultados no seu negócio!',
      style: 'specialities'
    })
    /*page_specialities_and_services/banner*/

    /*page_services/cta*/
    getSpecialitiesContainer({
      category: 'veterinary_clinics_and_pet_shops',
      containerTitle: 'ter o suporte de uma contabilidade para clínicas veterinárias e pet shop é essencial para garantir o crescimento do seu empreendimento!',
      containerMsg: 'a contabilidade veterinária é cada vez mais necessária, pois ela é capaz de auxiliar a Clínica ou Pet Shop em sua gestão, garantindo a excelência dos serviços prestados.',
      icon: `<?= require_once('wp-content/themes/wp_assert_contabilidade/components/svg/page_services/pet.svg'); ?>`,
      style: 'page_services_cta',
    }).then((response) => {
      document.getElementById('page_services_cta_article').innerHTML = response
    })
    /*page_services/cta*/

    /*page_specialities_and_services/description*/
    getSpecialitiesAndServicesDescription({
      description: 'Para garantir uma gestão eficiente, é preciso garantir que todos os aspectos do seu negócio estejam sendo cuidados por profissionais que estão preparados e qualificados para garantir ações efetivas que irão promover o sucesso do seu negócio.</br></br>Somos uma empresa especializada na assessoria ao segmento de Clínica veterinária e Pet Shop. Nosso objetivo é assessorar os empreendedores nos aspectos contábeis, fiscais e trabalhistas, transmitindo informações com qualidade, para que sua clínica funcione com uma boa saúde financeira.',
      img: 'https://lirp-cdn.multiscreensite.com/d19c105c/dms3rep/multi/opt/contabilidade-para-pet-shop-em-fortaleza-64744bb4-1920w.jpg',
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
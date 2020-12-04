<?php
/*
 Template Name: gestao-trabalhista
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


  <section id="page_specialities_and_services_description_container"></section>

  <?php
  /*<!-- REQUIRE_ONCE FOOTER -->*/
  require_once('wp-content/themes/wp_assert_contabilidade/components/footer/index.php');
  ?>

  <script>
    /*page_specialities_and_services/banner*/
    document.getElementById('page_specialities_and_services_banner_container').innerHTML = getSpecialitiesAndServicesBanner({
      category: 'labor_management',
      title: 'GESTÃO TRABALHISTA EM FORTALEZA',
      style: 'services',
      identifier: 'SERVIÇOS'
    })
    /*page_specialities_and_services/banner*/

    /*page_specialities_and_services/description*/
    getSpecialitiesAndServicesDescription({
      description: 'É inviável falar sobre o vínculo entre empregador e empregado sem falar dos trâmites legais. São eles que asseguram os princípios básicos de uma relação trabalhista: respeito, definição de deveres e obrigações e a garantia de direitos fundamentais.</br></br>Com o objetivo de garantir a execução de suas obrigações trabalhistas, assim como garantir o direito de seus colaboradores, oferecemos todos os serviços relativos a Gestão Trabalhista de sua empresa.',
      img: 'https://lirp-cdn.multiscreensite.com/d19c105c/dms3rep/multi/opt/gestao-trabalhista-em-fortaleza-11fca7a1-1920w.png',
    }).then((response) => {
      document.getElementById('page_specialities_and_services_description_container').innerHTML = response
      document.getElementById('page_specialities_and_services_description_div_button').innerHTML = getDefaultButton(
        'entrar em contato',
        ''
      )
    })
    /*page_specialities_and_services/description*/
  </script>

</body>

</html>
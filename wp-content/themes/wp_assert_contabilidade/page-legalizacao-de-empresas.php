<?php
/*
 Template Name: legalizacao-de-empresas
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
      category: 'legalization_of_companies',
      title: 'LEGALIZAÇÃO DE EMPRESAS EM FORTALEZA',
      style: 'services',
      identifier: 'SERVIÇOS'
    })
    /*page_specialities_and_services/banner*/

    /*page_specialities_and_services/description*/
    getSpecialitiesAndServicesDescription({
      description: 'A legalização de uma empresa é um passo essencial para todo empreendedor que deseja ter sucesso profissional, pois, é graças a legalização que a empresa pode usufruir de todos os benefícios que tem direito.</br></br>Regularizamos sua empresa em todos os órgãos e garantimos todas as licenças necessárias para o seu funcionamento, com máxima prioridade e no menor espaço de tempo.</br></br>Se você deseja que sua empresa se mantenha regularizada e em constante crescimento, é hora de contar com nosso apoio!',
      img: 'https://lirp-cdn.multiscreensite.com/d19c105c/dms3rep/multi/opt/legalizacao-de-empresas-em-fortaleza-7600b3fa-1920w.jpg',
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
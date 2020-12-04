<?php
/*
 Template Name: gestao-fiscal-e-tributaria
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
      category: 'management-fiscal-and-tax',
      title: 'GESTÃO FISCAL E TRIBUTÁRIA EM FORTALEZA',
      style: 'services',
      identifier: 'SERVIÇOS'
    })
    /*page_specialities_and_services/banner*/

    /*page_specialities_and_services/description*/
    getSpecialitiesAndServicesDescription({
      description: 'A Gestão Fiscal e Tributária trabalha como uma forma preventiva de evitar autuações fiscais, administrando as informações para estar sempre de acordo com a legislação, realizando todos os procedimentos obrigatórios, garantindo, assim, o pagamento devido de tributos, e implementando formas lícitas de economia tributária para a empresa.</br></br>A ausência de uma boa gestão fiscal pode resultar em complicações tributárias, que, para uma pequena empresa, pode ser fatal.</br></br>Pense nisso e não perca tempo! Conte com nossos serviços.',
      img: 'https://lirp-cdn.multiscreensite.com/d19c105c/dms3rep/multi/opt/gestao-fiscal-e-tributaria-em-fortaleza-1920w.png',
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
<?php
/*
 Template Name: gestao-contabil
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
      category: 'accounting_management',
      title: 'GESTÃO CONTÁBIL EM FORTALEZA',
      style: 'services',
      identifier: 'SERVIÇOS'
    })
    /*page_specialities_and_services/banner*/

    /*page_specialities_and_services/description*/
    getSpecialitiesAndServicesDescription({
      description: 'A gestão contábil é usada para diagnosticar a saúde financeira de uma empresa, identificar problemas e apresentar relatórios contábeis, financeiros e gerenciais que auxiliem o empresário na tomada de decisão.</br></br>Para que o processo de tomada de decisão seja à prova de falhas, ele necessita de uma base de dados extremamente confiável, do contrário, a organização corre o risco de arcar com os resultados de decisões incertas.</br></br>A ASSERT Contabilidade oferece os serviços na área de gestão contábil, seguindo todas as orientações da legislação e obedecendo as normas contábeis vigentes, com o intuito de fornecer ao empresário todas as informações necessárias para melhorar o resultado do seu negócio.',
      img: 'https://lirp-cdn.multiscreensite.com/d19c105c/dms3rep/multi/opt/gestao-contabil-em-fortaleza-a886d324-1920w.jpg',
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
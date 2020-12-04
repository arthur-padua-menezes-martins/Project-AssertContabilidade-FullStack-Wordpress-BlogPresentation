<?php
/*
 Template Name: contador-em-fortaleza
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
    require_once('wp-content/themes/wp_assert_contabilidade/controller/content/about.class.php');
    $aboutInstance = new About();
  ?>
  <section id="ourSpecialities_default"></section>

  <?php
  /*<!-- REQUIRE_ONCE FOOTER -->*/
  require_once('wp-content/themes/wp_assert_contabilidade/components/footer/index.php');
  ?>

  <script>
    /*page_specialities_and_services/banner*/
    document.getElementById('page_specialities_and_services_banner_container').innerHTML = getSpecialitiesAndServicesBanner({
      category: 'about',
      title: 'NOSSA TRAJETÓRIA',
      style: 'services',
      identifier: 'SOBRE'
    })
    /*page_specialities_and_services/banner*/

    /*page_specialities_and_services/description*/
    getSpecialitiesAndServicesDescription({
      description: 'A ASSERT Contabilidade, surgiu do desejo de ajudar os empresários dos mais diversos setores, a entenderem melhor seus números, e, com isso, terem em suas mãos informações valiosas que os auxiliem no processo de tomada de decisão dentro do seu negócio.</br></br>A ASSERT se faz presente com informações seguras e relevantes, em diversas áreas.',
      img: 'https://lirp-cdn.multiscreensite.com/d19c105c/dms3rep/multi/opt/contador-em-fortaleza-1920w.jpg',
    }).then((response) => {
      document.getElementById('page_specialities_and_services_description_container').innerHTML = response
      document.getElementById('page_specialities_and_services_description_div_button').innerHTML = getDefaultButton(
        'entrar em contato',
        ''
      )
    })
    /*page_specialities_and_services/description*/

    getSpecialitiesContainer({
    containerTitle: 'Nossa Função',
    containerMsg: 'Através de nossos serviços contábeis, desejamos auxiliar empresas a se manterem regularizadas, bem geridas financeiramente para que, assim, possam ter muito sucesso.',
    style: 'ourSpecialities',
  }).then((result) => {
    document.getElementById('ourSpecialities_default').innerHTML = result

    
    <?php
    $about_box_content = $aboutInstance->get_about_box_content();
    foreach ($about_box_content as $index => $key) { ?>

      about = getServicesBox({
        title: '<?= $about_box_content[$index]['title']; ?>',
        msg: '<?= $about_box_content[$index]['msg']; ?>',
        svg: `<?= $about_box_content[$index]['svg']; ?>`,
        style: 'specialities',
        index: <?= $index ?>
      })
      console.log('about: ', about)
      document.getElementById('ourSpecialities_box').innerHTML = document.getElementById('ourSpecialities_box').innerHTML.concat(about)

    <?php }

    ?>  
  })

  </script>

</body>

</html>
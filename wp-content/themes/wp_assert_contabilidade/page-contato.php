<?php
/*
 Template Name: escritorio-de-contabilidade-em-fortaleza
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

  <section id="page_services_cta_article_1"></section>

  <div id="map"></div>

  <?php
  /*<!-- REQUIRE_ONCE FOOTER -->*/
  require_once('wp-content/themes/wp_assert_contabilidade/components/footer/index.php');
  ?>

  <script>
    /*page_specialities_and_services/banner*/
    document.getElementById('page_specialities_and_services_banner_container').innerHTML = getSpecialitiesAndServicesBanner({
      category: 'contact',
      title: 'FALE CONOSCO',
      style: 'services',
      identifier: 'CONTATO'
    })
    /*page_specialities_and_services/banner*/

    /*page_services/cta*/
    getSpecialitiesContainer({
      category: 'contact',
      containerTitle: 'telefone',
      containerMsg: '(85) 98887-2655',
      icon: `<?= require('wp-content/themes/wp_assert_contabilidade/components/svg/contact/phone.svg'); ?>`,
      style: 'page_services_cta'
    }).then((response) => {
      document.getElementById('page_services_cta_article').innerHTML = response
    })
    /*page_services/cta*/

    /*page_services/cta*/
    getSpecialitiesContainer({
      category: 'contact',
      containerTitle: 'e-mail',
      containerMsg: 'carmemlimamnz@gmail.com',
      icon: `<?= require('wp-content/themes/wp_assert_contabilidade/components/svg/contact/email.svg'); ?>`,
      style: 'page_services_cta'
    }).then((response) => {
      document.getElementById('page_services_cta_article_1').innerHTML = response
    })
    /*page_services/cta*/

    /*page_services/cta*/
    getSpecialitiesContainer({
      category: 'contact',
      containerTitle: 'localização',
      containerMsg: 'Rua Afonso Lopes, 687A</br>Parque Dois Irmãos - Fortaleza / CE',
      icon: `<?= require('wp-content/themes/wp_assert_contabilidade/components/svg/contact/location.svg'); ?>`,
      style: 'page_services_cta'
    }).then((response) => {
      document.getElementById('page_services_cta_article_2').innerHTML = response
    })
    /*page_services/cta*/

    /*page_services/cta*/
    getSpecialitiesContainer({
      category: 'contact',
      containerTitle: 'horários',
      containerMsg: 'Segunda a Sexta-Feira</br>das 09:00 ás 18:00',
      icon: `<?= require('wp-content/themes/wp_assert_contabilidade/components/svg/contact/hour.svg'); ?>`,
      style: 'page_services_cta'
    }).then((response) => {
      document.getElementById('page_services_cta_article_3').innerHTML = response
    })
    /*page_services/cta*/

  </script>

<style>
  #page_services_cta_text_article {
    box-shadow: none;
  }
</style>

<script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet' />

<script>
  //pk.eyJ1IjoiYXJ0aHVyLXBhZHVhIiwiYSI6ImNraTZobGZjaTBhazkycm40eW5oMmNzeXMifQ.CSiRdqC1eyqRLWd3nYbcgQ
  mapboxgl.accessToken = 'pk.eyJ1IjoiYXJ0aHVyLXBhZHVhIiwiYSI6ImNraTZobGZjaTBhazkycm40eW5oMmNzeXMifQ.CSiRdqC1eyqRLWd3nYbcgQ'
  var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11',  
    center: [-38.548400, -3.793780],
    zoom: 15
  })

  let el = document.createElement('div')
  el.className = 'marker'

  let marker = new mapboxgl.Marker(el).setLngLat({
    lng: -38.548400,
    lat: -3.793780
  }).addTo(map)
</script>

</body>

</html>
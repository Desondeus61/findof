<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Elite-Monetix</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
     <link rel="shortcut icon" href="/assets/images/logo/favicon.png">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="site_web/css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Navbar Start -->
    @include('siteweb_vitrine.nav')
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5" style="background-image: url('site_web/img/consolidation_de_dettes.jpg'); background-size:cover;background-repeat:no-repeat; background-position: center; ">
      <div
        class="d-flex flex-column align-items-center justify-content-center"
        style="min-height: 500px"
      >
        <h3 class="display-3 font-weight-bold text-white">Prêt de consolidation de dettes</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a class="text-white" href="">Accueil</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0">Demande de prêt de consolidation de dettes</p>
        </div>
      </div>
    </div>
    <!-- Header End -->
    <div class="container">
      <div class="text-center pb-2">
        <p class="section-title px-5">
          <span class="px-2">Consolider ces dettes rien n'a jamais ete plus dificile</span>
        </p>
        
      </div>
      <div>
         <p> Un financement spécialement conçu pour regrouper et rembourser vos dettes existantes en un seul prêt, vous permettant ainsi de simplifier vos paiements et de réduire votre taux d'intérêt global. Nous vous offrons des conditions avantageuses, telles que des taux d'intérêt compétitifs et des modalités de remboursement flexibles, pour vous aider à reprendre le contrôle de votre 
          situation financière et à progresser vers une meilleure gestion de votre dette.</p>
      </div>
      <a href="{{ route('form_debt_consolidation_loan')}}" class="btn btn-dark  rounded py-2 px-4 m-2">Faire ma Demande </a>
      
      
  </div>    
  <div class="container">
      <div class="text-center pb-2">
        <p class="section-title px-5">
          <span class="px-2">Avantage</span>
        </p>
        
      </div>
      
      <div class="col-6 col-md-8">
          <ul class="list-inline m-0">
            <li class="py-2 border-top border-bottom">
              <i class="fa fa-check text-primary mr-3"></i>Simplification des paiements : Regroupez toutes vos dettes en un seul paiement mensuel
            </li>
            <li class="py-2 border-bottom">
              <i class="fa fa-check text-primary mr-3"></i>Réduction des taux d'intérêt : Obtenez des taux d'intérêt plus avantageux pour réduire votre charge financière.
            </li>
            <li class="py-2 border-bottom">
              <i class="fa fa-check text-primary mr-3"></i>Gestion efficace de la dette 
            </li>
          </ul>
        </div>
      </div>
  </div>  
  <div class="container">
      <div class="text-center pb-2">
        <p class="section-title px-5">
          <span class="px-2">Conditions</span>
        </p>
        
      </div>
      <div>
         <p>Historique de crédit : Un bon historique de crédit démontrant une gestion responsable des dettes.
          Capacité de remboursement : Une capacité financière suffisante pour effectuer les remboursements du prêt.
          Dettes admissibles : Les dettes admissibles doivent être conformes aux critères spécifiés par {{ config('app.app_name') }}.</p>
      </div>
  </div>      

 

   

   

    <!-- Footer Start -->
    @include('siteweb_vitrine.pied_page')
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"
      ><i class="fa fa-angle-double-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>


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
    <div class="container-fluid bg-primary mb-5" style="background-image: url('site_web/img/mariage.jpg'); background-size:cover;background-repeat:no-repeat; background-position: center; ">
      <div
        class="d-flex flex-column align-items-center justify-content-center"
        style="min-height: 500px"
      >
        <h3 class="display-3 font-weight-bold text-white">Crédit mariage</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a class="text-white" href="">Accueil</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0">Demande de crédit mariage</p>
        </div>
      </div>
    </div>
    <!-- Header End -->

    <div class="container">
      <div class="text-center pb-2">
        <p class="section-title px-5">
          <span class="px-2">une fois dans votre vie </span>
        </p>
        
      </div>
      <div>
         <p>Un financement dédié à rendre votre journée spéciale encore plus mémorable. Nous proposons des conditions avantageuses pour financer tous les aspects de votre mariage, tels que les frais de location de salle, 
          les prestataires, les tenues, la décoration et bien plus encore. Profitez de taux d'intérêt compétitifs et de modalités de remboursement flexibles pour réaliser le mariage de vos rêves sans compromettre votre situation financière. {{ config('app.app_name') }} est là pour vous aider à concrétiser votre vision et à faire de votre mariage un moment inoubliable.</p>
      </div>
      <a href="{{ route('form_loan_mariage')}}" class="btn btn-dark  rounded py-2 px-4 m-2">Faire ma Demande </a>
      
      
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
              <i class="fa fa-check text-primary mr-3"></i>Financement rapide pour organiser un mariage sans soucis.
            </li>
            <li class="py-2 border-bottom">
              <i class="fa fa-check text-primary mr-3"></i>Taux d'intérêt compétitifs pour un mariage abordable.
            </li>
            <li class="py-2 border-bottom">
              <i class="fa fa-check text-primary mr-3"></i>Flexibilité de remboursement pour s'adapter à votre budget de mariage.
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
         <p> Preuve de planification de mariage avec un devis détaillé.
          Capacité de remboursement démontrée par des revenus stables.
          Évaluation favorable du risque de crédit par {{ config('app.app_name') }}.</p>
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


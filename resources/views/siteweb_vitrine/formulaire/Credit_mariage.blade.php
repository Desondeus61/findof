
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Formulaire</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

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
    <link rel="stylesheet" href="/assets/css/sign-up.css">
    <script src="/assets/js/sign-up.js"></script>
    
    <style>
        .form-group {
            margin-bottom: 20px;
        }
    
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
    
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    
        button[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
  </head>

  <body>
    <!-- Navbar Start -->
    @include('siteweb_vitrine.nav')
    <!-- Navbar End -->
    
   
    <div class="text-center pb-2" style="margin: 50px;">
        <p class="section-title px-5">
          <span class="px-2">Credit mariage</span>
        </p>
        <h1 class="mb-4">Veuillez remplir le formulaire ci-dessous pour faire votre demande.</h1>
    </div>

    

    
<section class="donate-area relative section-gap  col-lg-12" id="donate">
				
    <div class="container justify-content-center col-lg-9">
        
      
        
        
        <form method="POST"  id="step-form" class="step-form" onsubmit="return validateForm(event)" action="{{ route('form_car-loan')}}">
            @csrf
            @method('post')
            
            @if ($errors->any())
            <div class="alert alert-danger">
                <p class="p-2 bg-red-100 mb-2">Merci de bien vouloir examiner le formulaire  afin de détecter et de corriger toute éventuelle erreur.</p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif 

            <div class="form-group col-lg-6 d-none">
                <label for="typepret">Type de pret </label>
            <select id="typepret" name="typepret" class="form-control" required>
                
                <option value="Mariage">Mariage</option>
             
            </select>
            </div>
            <div class="step step-form">

                <label class="mb-2 col-lg-6">Information personnel</label>
                <div class="form-group col-lg-6">
                    <label for="nom">Nom du conjoint</label>
                    <input type="text" name="nom" id="nom" class="form-control" required>
                </div>
            
                <div class="form-group col-lg-6">
                    <label for="prenom">Prénom du conjoint </label>
                    <input type="text" name="prenom" id="prenom" class="form-control" required>
                </div>
                <div class="form-group col-lg-6">
                    <label for="nom_conjointe">Nom de la conjointe</label>
                    <input type="text" name="nom_conjointe" id="nom" class="form-control" required>
                </div>
            
                <div class="form-group col-lg-6">
                    <label for="prenom_conjointe">Prénom de la conjointe </label>
                    <input type="text" name="prenom_conjointe" id="prenom" class="form-control" required>
                </div>
        
                <div class="form-group col-lg-6">
                    <label for="email">Email </label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div><div class="form-group col-lg-6">
                    <label for="telephone">Téléphone</label>
                    <input type="tel" id="telephone" name="telephone" class="form-control" required>
        
                </div>
                <button class="btn btn-primary rounded align-items-end next-btn col-lg-3" onclick="nextStep(event)">Suivant</button>
            </div>
            <div class="step">
                <label class="mb-2 col-lg-6">Adresse</label>
                <div class="form-group flex flex-col col-lg-6">
                    <label for="pays" class="form-label font-weight-semibold ">PAYS</label>
                    <select class="form-select border-2 border-indigo-200 rounded-lg py-2 form-control" required id="pays" name="pays" aria-label="Default select example" value = {{ old('pays') }}>
                  
                    <option value="France" >France </option>
        
                    <option value="Afghanistan">Afghanistan </option>
                    <option value="Afrique_Centrale">Afrique_Centrale </option>
                    <option value="Afrique_du_sud" >Afrique_du_Sud </option>
                    <option value="Albanie">Albanie </option>
                    <option value="Algerie">Algerie </option>
                    <option value="Allemagne">Allemagne </option>
                    <option value="Andorre">Andorre </option>
                    <option value="Angola">Angola </option>
                    <option value="Anguilla">Anguilla </option>
                    <option value="Arabie_Saoudite">Arabie_Saoudite </option>
                    <option value="Argentine">Argentine </option>
                    <option value="Armenie">Armenie </option>
                    <option value="Australie">Australie </option>
                    <option value="Autriche">Autriche </option>
                    <option value="Azerbaidjan">Azerbaidjan </option>
        
                    <option value="Bahamas">Bahamas </option>
                    <option value="Bangladesh">Bangladesh </option>
                    <option value="Barbade">Barbade </option>
                    <option value="Bahrein">Bahrein </option>
                    <option value="Belgique">Belgique </option>
                    <option value="Belize">Belize </option>
                    <option value="Benin">Benin </option>
                    <option value="Bermudes">Bermudes </option>
                    <option value="Bielorussie">Bielorussie </option>
                    <option value="Bolivie">Bolivie </option>
                    <option value="Botswana">Botswana </option>
                    <option value="Bhoutan">Bhoutan </option>
                    <option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
                    <option value="Bresil">Bresil </option>
                    <option value="Brunei">Brunei </option>
                    <option value="Bulgarie">Bulgarie </option>
                    <option value="Burkina_Faso">Burkina_Faso </option>
                    <option value="Burundi">Burundi </option>
        
                    <option value="Caiman">Caiman </option>
                    <option value="Cambodge">Cambodge </option>
                    <option value="Cameroun">Cameroun </option>
                    <option value="Canada">Canada </option>
                    <option value="Canaries">Canaries </option>
                    <option value="Cap_vert">Cap_Vert </option>
                    <option value="Chili">Chili </option>
                    <option value="Chine">Chine </option>
                    <option value="Chypre">Chypre </option>
                    <option value="Colombie">Colombie </option>
                    <option value="Comores">Colombie </option>
                    <option value="Congo">Congo </option>
                    <option value="Congo_democratique">Congo_democratique </option>
                    <option value="Cook">Cook </option>
                    <option value="Coree_du_Nord">Coree_du_Nord </option>
                    <option value="Coree_du_Sud">Coree_du_Sud </option>
                    <option value="Costa_Rica">Costa_Rica </option>
                    <option value="Cote_d_Ivoire">Côte_d_Ivoire </option>
                    <option value="Croatie">Croatie </option>
                    <option value="Cuba">Cuba </option>
        
                    <option value="Danemark">Danemark </option>
                    <option value="Djibouti">Djibouti </option>
                    <option value="Dominique">Dominique </option>
        
                    <option value="Egypte">Egypte </option>
                    <option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
                    <option value="Equateur">Equateur </option>
                    <option value="Erythree">Erythree </option>
                    <option value="Espagne">Espagne </option>
                    <option value="Estonie">Estonie </option>
                    <option value="Etats_Unis">Etats_Unis </option>
                    <option value="Ethiopie">Ethiopie </option>
        
                    <option value="Falkland">Falkland </option>
                    <option value="Feroe">Feroe </option>
                    <option value="Fidji">Fidji </option>
                    <option value="Finlande">Finlande </option>
                    <option value="France">France </option>
        
                    <option value="Gabon">Gabon </option>
                    <option value="Gambie">Gambie </option>
                    <option value="Georgie">Georgie </option>
                    <option value="Ghana">Ghana </option>
                    <option value="Gibraltar">Gibraltar </option>
                    <option value="Grece">Grece </option>
                    <option value="Grenade">Grenade </option>
                    <option value="Groenland">Groenland </option>
                    <option value="Guadeloupe">Guadeloupe </option>
                    <option value="Guam">Guam </option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guernesey">Guernesey </option>
                    <option value="Guinee">Guinee </option>
                    <option value="Guinee_Bissau">Guinee_Bissau </option>
                    <option value="Guinee equatoriale">Guinee_Equatoriale </option>
                    <option value="Guyana">Guyana </option>
                    <option value="Guyane_Francaise ">Guyane_Francaise </option>
        
                    <option value="Haiti">Haiti </option>
                    <option value="Hawaii">Hawaii </option>
                    <option value="Honduras">Honduras </option>
                    <option value="Hong_Kong">Hong_Kong </option>
                    <option value="Hongrie">Hongrie </option>
        
                    <option value="Inde">Inde </option>
                    <option value="Indonesie">Indonesie </option>
                    <option value="Iran">Iran </option>
                    <option value="Iraq">Iraq </option>
                    <option value="Irlande">Irlande </option>
                    <option value="Islande">Islande </option>
                    <option value="Israel">Israel </option>
                    <option value="Italie">italie </option>
        
                    <option value="Jamaique">Jamaique </option>
                    <option value="Jan Mayen">Jan Mayen </option>
                    <option value="Japon">Japon </option>
                    <option value="Jersey">Jersey </option>
                    <option value="Jordanie">Jordanie </option>
        
                    <option value="Kazakhstan">Kazakhstan </option>
                    <option value="Kenya">Kenya </option>
                    <option value="Kirghizstan">Kirghizistan </option>
                    <option value="Kiribati">Kiribati </option>
                    <option value="Koweit">Koweit </option>
        
                    <option value="Laos">Laos </option>
                    <option value="Lesotho">Lesotho </option>
                    <option value="Lettonie">Lettonie </option>
                    <option value="Liban">Liban </option>
                    <option value="Liberia">Liberia </option>
                    <option value="Liechtenstein">Liechtenstein </option>
                    <option value="Lituanie">Lituanie </option>
                    <option value="Luxembourg">Luxembourg </option>
                    <option value="Lybie">Lybie </option>
        
                    <option value="Macao">Macao </option>
                    <option value="Macedoine">Macedoine </option>
                    <option value="Madagascar">Madagascar </option>
                    <option value="Madère">Madère </option>
                    <option value="Malaisie">Malaisie </option>
                    <option value="Malawi">Malawi </option>
                    <option value="Maldives">Maldives </option>
                    <option value="Mali">Mali </option>
                    <option value="Malte">Malte </option>
                    <option value="Man">Man </option>
                    <option value="Mariannes du Nord">Mariannes du Nord </option>
                    <option value="Maroc">Maroc </option>
                    <option value="Marshall">Marshall </option>
                    <option value="Martinique">Martinique </option>
                    <option value="Maurice">Maurice </option>
                    <option value="Mauritanie">Mauritanie </option>
                    <option value="Mayotte">Mayotte </option>
                    <option value="Mexique">Mexique </option>
                    <option value="Micronesie">Micronesie </option>
                    <option value="Midway">Midway </option>
                    <option value="Moldavie">Moldavie </option>
                    <option value="Monaco">Monaco </option>
                    <option value="Mongolie">Mongolie </option>
                    <option value="Montserrat">Montserrat </option>
                    <option value="Mozambique">Mozambique </option>
        
                    <option value="Namibie">Namibie </option>
                    <option value="Nauru">Nauru </option>
                    <option value="Nepal">Nepal </option>
                    <option value="Nicaragua">Nicaragua </option>
                    <option value="Niger">Niger </option>
                    <option value="Nigeria">Nigeria </option>
                    <option value="Niue">Niue </option>
                    <option value="Norfolk">Norfolk </option>
                    <option value="Norvege">Norvege </option>
                    <option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
                    <option value="Nouvelle_Zelande">Nouvelle_Zelande </option>
        
                    <option value="Oman">Oman </option>
                    <option value="Ouganda">Ouganda </option>
                    <option value="Ouzbekistan">Ouzbekistan </option>
        
                    <option value="Pakistan">Pakistan </option>
                    <option value="Palau">Palau </option>
                    <option value="Palestine">Palestine </option>
                    <option value="Panama">Panama </option>
                    <option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee </option>
                    <option value="Paraguay">Paraguay </option>
                    <option value="Pays_Bas">Pays_Bas </option>
                    <option value="Perou">Perou </option>
                    <option value="Philippines">Philippines </option>
                    <option value="Pologne">Pologne </option>
                    <option value="Polynesie">Polynesie </option>
                    <option value="Porto_Rico">Porto_Rico </option>
                    <option value="Portugal">Portugal </option>
        
                    <option value="Qatar">Qatar </option>
        
                    <option value="Republique_Dominicaine">Republique_Dominicaine </option>
                    <option value="Republique_Tcheque">Republique_Tcheque </option>
                    <option value="Reunion">Reunion </option>
                    <option value="Roumanie">Roumanie </option>
                    <option value="Royaume_Uni">Royaume_Uni </option>
                    <option value="Russie">Russie </option>
                    <option value="Rwanda">Rwanda </option>
        
                    <option value="Sahara Occidental">Sahara Occidental </option>
                    <option value="Sainte_Lucie">Sainte_Lucie </option>
                    <option value="Saint_Marin">Saint_Marin </option>
                    <option value="Salomon">Salomon </option>
                    <option value="Salvador">Salvador </option>
                    <option value="Samoa_Occidentales">Samoa_Occidentales</option>
                    <option value="Samoa_Americaine">Samoa_Americaine </option>
                    <option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option>
                    <option value="Senegal">Senegal </option>
                    <option value="Seychelles">Seychelles </option>
                    <option value="Sierra Leone">Sierra Leone </option>
                    <option value="Singapour">Singapour </option>
                    <option value="Slovaquie">Slovaquie </option>
                    <option value="Slovenie">Slovenie</option>
                    <option value="Somalie">Somalie </option>
                    <option value="Soudan">Soudan </option>
                    <option value="Sri_Lanka">Sri_Lanka </option>
                    <option value="Suede">Suede </option>
                    <option value="Suisse">Suisse </option>
                    <option value="Surinam">Surinam </option>
                    <option value="Swaziland">Swaziland </option>
                    <option value="Syrie">Syrie </option>
        
                    <option value="Tadjikistan">Tadjikistan </option>
                    <option value="Taiwan">Taiwan </option>
                    <option value="Tonga">Tonga </option>
                    <option value="Tanzanie">Tanzanie </option>
                    <option value="Tchad">Tchad </option>
                    <option value="Thailande">Thailande </option>
                    <option value="Tibet">Tibet </option>
                    <option value="Timor_Oriental">Timor_Oriental </option>
                    <option value="Togo">Togo </option>
                    <option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
                    <option value="Tristan da cunha">Tristan de cuncha </option>
                    <option value="Tunisie">Tunisie </option>
                    <option value="Turkmenistan">Turmenistan </option>
                    <option value="Turquie">Turquie </option>
        
                    <option value="Ukraine">Ukraine </option>
                    <option value="Uruguay">Uruguay </option>
        
                    <option value="Vanuatu">Vanuatu </option>
                    <option value="Vatican">Vatican </option>
                    <option value="Venezuela">Venezuela </option>
                    <option value="Vierges_Americaines">Vierges_Americaines </option>
                    <option value="Vierges_Britanniques">Vierges_Britanniques </option>
                    <option value="Vietnam">Vietnam </option>
        
                    <option value="Wake">Wake </option>
                    <option value="Wallis et Futuma">Wallis et Futuma </option>
        
                    <option value="Yemen">Yemen </option>
                    <option value="Yougoslavie">Yougoslavie </option>
        
                    <option value="Zambie">Zambie </option>
                    <option value="Zimbabwe">Zimbabwe </option>
                    </select>
                    
        
                </div>
                <div class="form-group col-lg-6">
                    <label for="codePostal">Code postal </label>
                    <input type="text" id="codePostal" name="codePostal" class="form-control"  required>
                </div>
        
                <div class="form-group col-lg-6">
                    <label class="font-weight-semibold form-label" for="adresse" >ADRESSE</label>
                    <input type="text" class="form-control" id="adresse" required name="adresse" placeholder="Votre address" value = {{ old('adresse') }}>
                    
                    
                </div>
                <div class="form-group col-lg-6">
                    <label class="font-weight-semibold form-label" for="ville" >VILLE</label>
                    <input type="text" class="form-control" id="ville" class="form-control"  required name="ville" placeholder="Ville" value = {{ old('ville') }}>
                    
                
                </div>
                <button class="btn btn-danger  rounded prev-btn mb-2 col-lg-3"  onclick="prevStep(event)">Precedent</button>
         

                <button class="btn btn-primary rounded align-items-end next-btn mb-2 col-lg-3" onclick="nextStep(event)">Suivant</button>
            </div>    
        
            

            <div class="step">
            
                <label for="montantCredit " class="mb-2 col-lg-6">Informations sur la demande de crédit</label>
                <div class="form-group col-lg-6">
                    <label for="montant">Montant du crédit :</label>
                    <input type="text" id="montant" name="montant" class="form-control"  required>

                </div>
                <div class="form-group col-lg-6">
                    <label for="duree">Durée du Crédit</label>
                    <select id="duree" name="duree" class="form-control" >
                        <option value="1">1 an</option>
                        <option value="2">2 ans</option>
                        <option value="3">3 ans</option>
                        <option value="4">4 ans</option>
                        <option value="5">5 ans</option>
                    </select>
                </div>
              
                <button class="btn btn-danger  rounded prev-btn mb-2 col-lg-3"  onclick="prevStep(event)">Precedent</button>
                <button type="submit" class="btn btn-primary mb-2 col-lg-3">Envoyer la demande</button>

            </div>
        </form>
       </div>      
        
        
    </div>

</section>
    
    
  
        
      
        

     
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
 
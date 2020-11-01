<?php
	get_header();
?>

  <div class="container-fluid px-0">
    <section id="heading" class="section-dark d-flex justify-content-center align-items-center">
      <div class="heading-description text-center">
        <h1>Ludwig HENRIQUES</h1>
        <h2>Développeur web</h2>
        <p class="d-flex flex-column"><span>Créateur de sites web</span><span>-</span><span>Spécialiste React et Vue.js</span></p>
        <div class="heading-action">
          <a href="#services" class="btn btn-services mr-2 anchor">En savoir plus</a>
          <a href="#contact" class="btn btn-contact ml-2 anchor">Contactez-moi</a>
        </div>
      </div>
      <a href="#services" class="next-link anchor">
        <span class="fas fa-chevron-down animate__animated animate__slideInDown animate__infinite	infinite"></span>
      </a>
      <canvas class="header__background"></canvas>
    </section>
    <section id="services">
      <div class="container">
        <div class="section-heading">
          <h2>Services</h2>
          <h3 class="mb-5">Des prestations sur-mesures adaptées à vos besoins</h3>
          <div class="section-content row row-cols-1 row-cols-md-2">
            <div class="col mb-4">
              <div class="card flex-row align-items-center">
                <div class="card-icon pl-4 pr-1">
                  <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-list-task" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z"/>
                    <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z"/>
                    <path fill-rule="evenodd" d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z"/>
                  </svg>
                </div>
                
                <div class="card-body">
                  <h4 class="card-title">Gestion de projets web</h4>
                  <p class="card-text">Site vitrine, évènementiel,
                    e-commerce, landing page, intranet, application mobile.</p>
                </div>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card flex-row align-items-center">
                <div class="card-icon pl-4 pr-1">
                  <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-code-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                    <path fill-rule="evenodd" d="M6.854 4.646a.5.5 0 0 1 0 .708L4.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0zm2.292 0a.5.5 0 0 0 0 .708L11.793 8l-2.647 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708 0z"/>
                  </svg>
                </div>
                
                <div class="card-body">
                  <h4 class="card-title">Intégration web</h4>
                  <p class="card-text">Transformer vos maquettes en page web avec des intégrations rapides et soignées.</p>
                </div>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card flex-row align-items-center">
                <div class="card-icon pl-4 pr-1">
                  <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-gear" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z"/>
                    <path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z"/>
                  </svg>
                </div>
                
                <div class="card-body">
                  <h4 class="card-title">Développements spécifiques</h4>
                  <p class="card-text">Des outils adaptés à votre métier et vos différents besoin,
                    applications & solutions personnalisées.</p>
                </div>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card flex-row align-items-center">
                <div class="card-icon pl-4 pr-1">
                  <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-image" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M14.002 2h-12a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1zm-12-1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12z"/>
                    <path d="M10.648 7.646a.5.5 0 0 1 .577-.093L15.002 9.5V14h-14v-2l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71z"/>
                    <path fill-rule="evenodd" d="M4.502 7a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                  </svg>
                </div>
                
                <div class="card-body">
                  <h4 class="card-title">Conception graphique et webdesign</h4>
                  <p class="card-text">Logos, templates Web, plaquettes publicitaires,
                    cartes de visite, photo montage.</p>
                </div>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card flex-row align-items-center">
                <div class="card-icon pl-4 pr-1">
                  <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-arrow-left-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.146 7.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 11l-2.647-2.646a.5.5 0 0 1 0-.708z"/>
                    <path fill-rule="evenodd" d="M2 11a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 11zm3.854-9.354a.5.5 0 0 1 0 .708L3.207 5l2.647 2.646a.5.5 0 1 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"/>
                    <path fill-rule="evenodd" d="M2.5 5a.5.5 0 0 1 .5-.5h10.5a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                  </svg>
                </div>
                
                <div class="card-body">
                  <h4 class="card-title">Rendu dynamique des pages</h4>
                  <p class="card-text">Ajouter des animations de contenu
                    et améliorer l'expérience de l'utilisateur.</p>
                </div>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card flex-row align-items-center">
                <div class="card-icon pl-4 pr-1">
                  <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-aspect-ratio" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M0 3.5A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5v-9zM1.5 3a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"/>
                    <path fill-rule="evenodd" d="M2 4.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H3v2.5a.5.5 0 0 1-1 0v-3zm12 7a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H13V8.5a.5.5 0 0 1 1 0v3z"/>
                  </svg>
                </div>
                
                <div class="card-body">
                  <h4 class="card-title">Responsive design</h4>
                  <p class="card-text">Des sites adaptés à tous les supports: ordinateur de bureau, tablette et mobile.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>      
    </section>
    <section id="competences" class="section-dark">
      <div class="container">
        <div class="section-heading">
          <h2>Compétences</h2>
          <h3 class="mb-5">Des compétences à votre services</h3>
          <div class="row">
            <div class="col-md-6">
              <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                      <h4 class="mb-0">HTML5/CSS3 90%</h4>
                  </div>
              </div>
              <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                      <h4 class="mb-0">JAVASCRIPT 85%</h4>
                  </div>
              </div>
              <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                      <h4 class="mb-0">REACT 85%</h4>
                  </div>
              </div>
              <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                      <h4 class="mb-0">VUE 85%</h4>
                  </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                      <h4 class="mb-0">PHP 80%</h4>
                  </div>
              </div>
              <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                      <h4 class="mb-0">PHOTOSHOP 70%</h4>
                  </div>
              </div>
              <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                      <h4 class="mb-0">ILLUSTRATOR 70%</h4>
                  </div>
              </div>
              <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                      <h4 class="mb-0">PREMIERE PRO 60%</h4>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="portfolio">
      <div class="section-heading">
        <h2>Mes projets</h2>
        <h3 class="mb-5">Mes dernières réalisations</h3>
        <p class="text-center display-4">En cours d'élaboration</p>
      </div>
      
    </section>
    <section id="tarifs" class="section-dark">
      <div class="section-heading">
        <div class="container">
          <h2>Tarifs</h2>
          <h3 class="mb-5">Un tarif adapté à votre besoin!</h3>
          <div class="row row-cols-1 row-cols-lg-4">
            <div class="col mb-4">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Site vitrine<br>standard</h4>
                  <p class="card-price d-flex flex-column">
                    <span class="card-price-text">A partir de</span>
                    <span class="card-price-amount">990<sup>€ *</sup></span> 
                  </p>
                  <ul class="list-unstyled card-price-detail mb-0">
                    <li class="row">
                      <span class="col-icon col-2 col-lg-2">&nbsp;</span>
                      <span class="col-libelle col-10 col-lg-10">
                        <b>Développé sous WORDPRESS</b> <br>(Outil de gestion de contenu)
                      </span>
                    </li>
                    <li class="row row-alt">
                      <span class="col-icon col-2 col-lg-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                          <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                        </svg>
                      </span>
                      <span class="col-libelle col-10 col-lg-10">
                        Charte graphique à partir d'une maquette pré-définie
                      </span>
                    </li>
                    <li class="row">
                      <span class="col-icon col-2 col-lg-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                          <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                        </svg>
                      </span>
                      <span class="col-libelle col-10 col-lg-10">
                        Sélection d'une palette de couleur
                      </span>
                    </li>
                    <li class="row row-alt">
                      <span class="col-icon col-2 col-lg-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                          <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                        </svg>
                      </span>
                      <span class="col-libelle col-10 col-lg-10">
                        <b>Domaine + hébergement <br>+ e-mail pendant 12 mois</b>
                      </span>
                    </li>						
                    <li class="row">
                      <span class="col-icon col-2 col-lg-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                          <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                        </svg>
                      </span>
                      <span class="col-libelle col-10 col-lg-10">
                        Interface administrateur <br>STANDARD
                      </span>
                    </li>
                    <li class="row row-alt">
                      <span class="col-icon col-2 col-lg-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                          <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                        </svg>
                      </span>
                      <span class="col-libelle col-10 col-lg-10">
                        <b>Site responsive <br>(adapté tous supports)</b>
                      </span>
                    </li>
                    <li class="row">
                      <span class="col-icon col-2 col-lg-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                          <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                        </svg>
                      </span>
                      <span class="col-libelle col-10 col-lg-10">
                        Mise en place du contenu <br>(textes &amp; images)
                      </span>
                    </li>
                    <li class="row row-alt">
                      <span class="col-icon col-2 col-lg-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                          <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                        </svg>
                      </span>
                      <span class="col-libelle col-10 col-lg-10">
                        Formulaire de contact
                      </span>
                    </li>
                    <li class="row">
                      <span class="col-icon col-2 col-lg-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                          <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                        </svg>
                      </span>
                      <span class="col-libelle col-10 col-lg-10">
                        Liens de partage sur les <br>réseaux sociaux
                      </span>
                    </li>
                    <li class="row row-alt">
                      <span class="col-icon col-2 col-lg-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                          <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                        </svg>
                      </span>
                      <span class="col-libelle col-10 col-lg-10">
                        Optimisation <br>du référencement
                      </span>
                    </li>
                    <li class="row">
                      <span class="col-icon col-2 col-lg-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                          <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                        </svg>
                      </span>
                      <span class="col-libelle col-10 col-lg-10">
                        Statistiques de visite
                      </span>
                    </li>
                    <li class="row row-alt">
                      <span class="col-icon col-2 col-lg-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                          <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                        </svg>
                      </span>
                      <span class="col-libelle col-10 col-lg-10">
                        Mise en ligne du site
                      </span>
                    </li>
                    <li class="row">
                      <span class="col-icon col-2 col-lg-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                          <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                        </svg>
                      </span>
                      <span class="col-libelle col-10 col-lg-10">
                        <b>Formation utilisation du site</b>
                      </span>
                    </li>
                  </ul>
                  <a data-id="1" href="#contact" class="btn btn-contact-link anchor">Demander un devis</a>
                </div>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Site vitrine personnalisé</h4>
                  <p class="card-price d-flex flex-column">
                    <span class="card-price-text">A partir de</span>
                    <span class="card-price-amount">1500<sup>€ *</sup></span> 
                  </p>
                  <ul class="list-unstyled card-price-detail mb-0">
                    <li class="row">
                      <span class="col-icon col-2 col-lg-2">&nbsp;</span>
                      <span class="col-libelle col-10 col-lg-10">
                        <b>Développé SUR-MESURE</b> <br>(Codage à la main)
                      </span>
                    </li>
                    <li class="row row-alt">
                      <span class="col-icon col-2 col-lg-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                          <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                        </svg>
                      </span>
                      <span class="col-libelle col-10 col-lg-10">
                        <b>Création charte graphique personnalisée</b>
                      </span>
                    </li>
                    <li class="row">
                      <span class="col-icon col-2 col-lg-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                          <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                        </svg>
                      </span>
                      <span class="col-libelle col-10 col-lg-10">
                        <b>Proposition de logo</b>
                      </span>
                    </li>
                    <li class="row row-alt">
                      <span class="col-icon col-2 col-lg-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                          <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                        </svg>
                      </span>
                      <span class="col-libelle col-10 col-lg-10">
                        <b>Domaine + hébergement <br>+ e-mail pendant 12 mois</b>
                      </span>
                    </li>						
                    <li class="row">
                      <span class="col-icon col-2 col-lg-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                          <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                        </svg>
                      </span>
                      <span class="col-libelle col-10 col-lg-10">
                        <b>Interface administrateur <br>SUR-MESURE</b>
                      </span>
                    </li>
                    <li class="row row-alt">
                      <span class="col-icon col-2 col-lg-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                          <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                        </svg>
                      </span>
                      <span class="col-libelle col-10 col-lg-10">
                        <b>Site responsive <br>(adapté tous supports)</b>
                      </span>
                    </li>
                    <li class="row">
                      <span class="col-icon col-2 col-lg-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                          <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                        </svg>
                      </span>
                      <span class="col-libelle col-10 col-lg-10">
                        Mise en place du contenu <br>(textes &amp; images)
                      </span>
                    </li>
                    <li class="row row-alt">
                      <span class="col-icon col-2 col-lg-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                          <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                        </svg>
                      </span>
                      <span class="col-libelle col-10 col-lg-10">
                        Formulaire de contact &amp; Map
                      </span>
                    </li>
                    <li class="row">
                      <span class="col-icon col-2 col-lg-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                          <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                        </svg>
                      </span>
                      <span class="col-libelle col-10 col-lg-10">
                        Liens de partage sur les <br>réseaux sociaux
                      </span>
                    </li>
                    <li class="row row-alt">
                      <span class="col-icon col-2 col-lg-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                          <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                        </svg>
                      </span>
                      <span class="col-libelle col-10 col-lg-10">
                        Optimisation du référencement<br> et des performances
                      </span>
                    </li>
                    <li class="row">
                      <span class="col-icon col-2 col-lg-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                          <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                        </svg>
                      </span>
                      <span class="col-libelle col-10 col-lg-10">
                        Statistiques de visite
                      </span>
                    </li>
                    <li class="row row-alt">
                      <span class="col-icon col-2 col-lg-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                          <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                        </svg>
                      </span>
                      <span class="col-libelle col-10 col-lg-10">
                        Mise en ligne du site
                      </span>
                    </li>
                    <li class="row">
                      <span class="col-icon col-2 col-lg-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                          <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                        </svg>
                      </span>
                      <span class="col-libelle col-10 col-lg-10">
                        <b>Formation utilisation du site</b>
                      </span>
                    </li>						
                  </ul>
                  <a data-id="1" href="#contact" class="btn btn-contact-link anchor">Demander un devis</a>
                </div>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Plateforme e-commerce</h4>
                  <p class="card-price d-flex flex-column">
                    <span class="card-price-text">A partir de</span>
                    <span class="card-price-amount">3000<sup>€ *</sup></span> 
                  </p>
                  <ul class="list-unstyled card-price-detail mb-0">
                    <li class="row">
                      <span class="col-icon col-2 col-lg-2">&nbsp;</span>
                      <span class="col-libelle col-10 col-lg-10">
                        <b>PRESTASHOP</b> ou <b>WORDPRESS</b><br>&nbsp;&nbsp;(Outil de gestion de contenu)
                      </span>
                    </li>
                    <li class="row row-alt">
                      <span class="col-icon col-2 col-lg-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                          <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                        </svg>
                      </span>
                      <span class="col-libelle col-10 col-lg-10">
                        <b>Création charte graphique personnalisée</b>
                      </span>
                    </li>
                    <li class="row">
                      <span class="col-icon col-2 col-lg-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                          <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                        </svg>
                      </span>
                      <span class="col-libelle col-10 col-lg-10">
                        <b>Proposition de logo</b>
                      </span>
                    </li>
                    <li class="row row-alt">
                      <span class="col-icon col-2 col-lg-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                          <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                        </svg>
                      </span>
                      <span class="col-libelle col-10 col-lg-10">
                        <b>Domaine + hébergement <br>+ e-mail pendant 12 mois</b>
                      </span>
                    </li>						
                    <li class="row">
                      <span class="col-icon col-2 col-lg-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                          <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                        </svg>
                      </span>
                      <span class="col-libelle col-10 col-lg-10">
                        <b>Installation &amp; configuration des plugins choisis</b>
                      </span>
                    </li>
                    <li class="row row-alt">
                      <span class="col-icon col-2 col-lg-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                          <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                        </svg>
                      </span>
                      <span class="col-libelle col-10 col-lg-10">
                        <b>Site responsive <br>(adapté tous supports)</b>
                      </span>
                    </li>
                    <li class="row">
                      <span class="col-icon col-2 col-lg-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                          <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                        </svg>
                      </span>
                      <span class="col-libelle col-10 col-lg-10">
                        Mise en place du contenu <br>(textes &amp; images)
                      </span>
                    </li>
                    <li class="row row-alt">
                      <span class="col-icon col-2 col-lg-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                          <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                        </svg>
                      </span>
                      <span class="col-libelle col-10 col-lg-10">
                        Formulaire de contact &amp; Map
                      </span>
                    </li>
                    <li class="row">
                      <span class="col-icon col-2 col-lg-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                          <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                        </svg>
                      </span>
                      <span class="col-libelle col-10 col-lg-10">
                        Liens de partage sur les <br>réseaux sociaux
                      </span>
                    </li>
                    <li class="row row-alt">
                      <span class="col-icon col-2 col-lg-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                          <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                        </svg>
                      </span>
                      <span class="col-libelle col-10 col-lg-10">
                        Optimisation du référencement<br> et des performances
                      </span>
                    </li>
                    <li class="row">
                      <span class="col-icon col-2 col-lg-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                          <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                        </svg>
                      </span>
                      <span class="col-libelle col-10 col-lg-10">
                        Statistiques de visite
                      </span>
                    </li>
                    <li class="row row-alt">
                      <span class="col-icon col-2 col-lg-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                          <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                        </svg>
                      </span>
                      <span class="col-libelle col-10 col-lg-10">
                        Mise en ligne du site
                      </span>
                    </li>
                    <li class="row">
                      <span class="col-icon col-2 col-lg-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                          <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                        </svg>
                      </span>
                      <span class="col-libelle col-10 col-lg-10">
                        <b>Formation utilisation du site</b>
                      </span>
                    </li>
                  </ul>
                  <a data-id="1" href="#contact" class="btn btn-contact-link anchor">Demander un devis</a>
                </div>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Forfait Maintenance</h4>
                  <p class="card-price d-flex flex-column">
                    <span class="card-price-text">A partir de</span>
                    <span class="card-price-amount">350<sup>€/AN***</sup></span> 
                  </p>
                  <ul class="list-unstyled card-price-detail mb-0">
                    <li class="row">
                      <span class="col-icon col-2 col-lg-2">&nbsp;</span>
                      <span class="col-libelle col-10 col-lg-10">
                        <b>Mises à jour site internet</b>
                      </span>
                    </li>
                    <li class="row row-alt">
                      <span class="col-icon col-2 col-lg-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                          <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                        </svg>
                      </span>
                      <span class="col-libelle col-10 col-lg-10">
                        <b>Petites modifications graphiques ou de contenu</b>
                      </span>
                    </li>
                    <li class="row">
                      <span class="col-icon col-2 col-lg-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                          <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                        </svg>
                      </span>
                      <span class="col-libelle col-10 col-lg-10">
                        <b>Sauvegardes externalisées mensuelles</b>
                      </span>
                    </li>
                    <li class="row row-alt">
                      <span class="col-icon col-2 col-lg-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                          <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                        </svg>
                      </span>
                      <span class="col-libelle col-10 col-lg-10">
                        <b>Optimisation performances</b>
                      </span>
                    </li>						
                    <li class="row">
                      <span class="col-icon col-2 col-lg-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                          <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                        </svg>
                      </span>
                      <span class="col-libelle col-10 col-lg-10">
                        Restauration en cas de piratage
                      </span>
                    </li>
                  </ul>
                  <a data-id="1" href="#contact" class="btn btn-contact-link anchor">Demander un devis</a>
                </div>
              </div>
              <div class="card mt-4">
                <div class="card-body">
                  <h4 class="card-title">Développements spécifiques</h4>
                  <p class="card-price d-flex flex-column">
                    <span class="card-price-text">A partir de</span>
                    <span class="card-price-amount">300<sup>€/JOUR</sup></span> 
                  </p>
                  <ul class="list-unstyled card-price-detail mb-0">
                    <li class="row">
                      <span class="col-icon col-2 col-lg-2">&nbsp;</span>
                      <span class="col-libelle col-10 col-lg-10">
                        <b>Spécialiste React et Vue.js</b>
                      </span>
                    </li>
                    <li class="row row-alt">
                      <span class="col-icon col-2 col-lg-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                          <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                        </svg>
                      </span>
                      <span class="col-libelle col-10 col-lg-10">
                        <b>Intégration de maquette</b>
                      </span>
                    </li>
                    <li class="row">
                      <span class="col-icon col-2 col-lg-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                          <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                        </svg>
                      </span>
                      <span class="col-libelle col-10 col-lg-10">
                        <b>Développements outils métiers</b>
                      </span>
                    </li>
                  </ul>
                  <a data-id="1" href="#contact" class="btn btn-contact-link anchor">Demander un devis</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </section>
    <section id="contact">
      <div class="container">
        <div class="section-heading">
          <h2>Contact</h2>
          <h3 class="mb-5">Des pretations sur-mesures adapter à vos besoins</h3>
        </div>
        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <h4 class="mb-4">Coordonnées</h4>
            <div class="contact-informations-list">
              <div class="contact-informations-item contact-informations-address">
                <h5>Adresse</h5>
                <p class="mb-0">
                  19 impasse du chenier <br>
                  38121 REVENTIN-VAUGRIS
                </p>
              </div>
              <div class="contact-informations-item contact-informations-phone">
                <h5>Téléphone</h5>
                <p class="mb-0">
                  <a href="tel:+33678494691">(+33)6 78 49 46 91</a>
                </p>
              </div>
              <div class="contact-informations-item contact-informations-email">
                <h5>E-mail</h5>
                <p class="mb-0">
                  contact@ludwighenriques.fr
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <!-- <form id="contact-form" method="post" action="" role="form">
              <div class="row">
                <div class="col-md-6" data-children-count="1">
                    <label for="firstname">Prenom<span class="blue" data-children-count="0">  *</span></label>
                    <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Votre prénom" value="" data-kwimpalastatus="alive" data-kwimpalaid="1598354823615-0">
                    <p class="comments"></p>
                </div>
                <div class="col-md-6" data-children-count="1">
                        <label for="name">Nom<span class="blue" data-children-count="0"> *</span></label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Votre nom" value="" data-kwimpalastatus="alive" data-kwimpalaid="1598354823615-1">
                        <p class="comments"></p>
                </div>
                <div class="col-md-6" data-children-count="1">
                    <label for="email">Email<span class="blue" data-children-count="0"> *</span></label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Votre email" value="" data-kwimpalastatus="alive" data-kwimpalaid="1598354823615-2">
                    <p class="comments"></p>
                </div>
                <div class="col-md-6" data-children-count="1">
                        <label for="phone">Téléphone</label>
                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Votre numéro de téléphone" value="" data-kwimpalastatus="alive" data-kwimpalaid="1598354823615-3">
                        <p class="comments"></p>
                </div>
                <div class="col-md-12" data-children-count="1">
                        <label for="message">Message<span class="blue" data-children-count="0"> *</span></label>
                        <textarea id="message" name="message" class="form-control" placeholder="Votre message" rows="4"></textarea>
                        <p class="comments"></p>
                </div>
                <div class="col-md-12">
                        <p class="blue"><strong>* Ces informations sont requises</strong></p>
                </div>
                <div class="col-md-12">
                        <input type="submit" class="btn btn-submit-contact" value="Envoyer">
                </div>
              </div>
            </form> -->
            <?= do_shortcode('[contact-form-7 id="9" title="Formulaire de contact 1"]')?>
          </div>
        </div>
      </div>
      
    </section>
	</div>

<?php
	get_footer();
?>
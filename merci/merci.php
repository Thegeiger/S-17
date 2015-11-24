---
layout: merci
title: S-17
thanks:
  title: "Merci"
  text: "Merci d'avoir remplis notre formulaire nous vous recontacterons dés que possible Cras et orci placerat, condimentum purus nec, sagittis lorem. Sed faucibus dolor eu velit sollicitudin, ac imperdiet augue gravida. Mauris id dapibus orci. Curabitur sagittis, lectus at scelerisque molestie, sem mauris malesuada elit pour toutes question merci de me contacter par les moyen ci dessous"
  text2: ""
footer:
  facebook: https://www.facebook.com/RL-Stand17-580838335389312/?fref=ts
  disponibilite:
    text: "Pour plus d'information vous pouvez me contacter par telephone ou bien par email"
    email: "Je suis disponible par telephone de xx à xx"
    tel: "Par mail de xx à xx"
  email: "contact@s-17.com"
  tel: "01-60-84-64-87"
---

     <div class="contain-to-grid sticky">
       <nav class="top-bar" data-topbar role="navigation">
         <ul class="title-area">
           <li class="name">
            <h1><a href="#app">{{page.title}}<img src="/s-17/images/S17.png"></a></h1>
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
           </li>
         </ul>
         <section class="top-bar-section">
           <!-- Right Nav Section -->
           <ul class="right">
             <li><a id="lapp" href="../index.htm">Á propos</a></li>
             <li><a id="lrech" href="../index.htm">Formulaire de recherche</a></li>
           </ul>
         </section>
       </nav>
     </div>

      <section class="appsec" id="app">

        <div class="row">
                <div class="large-12 columns">
                       <h1 class="text-center">{{page.thanks.title}}</h1>
                </div>
        </div>
        <div class="row">
                <div class="large-offset-1 large-10 columns">
                       <p class="text-center">{{page.thanks.text}}</p>
                       <p class="text-center">{{page.thanks.text2}}</p>
                       <p class="text-center"><a href="../index.html">Retour au site</a></p>
                </div>
        </div>

      </section>
      {% include footer.html %}

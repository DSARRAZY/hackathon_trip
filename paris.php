<!DOCTYPE html>
<html>
    <head>
        <title>Paris</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/paris.css">
        <link href="https://fonts.googleapis.com/css2?family=Original+Surfer&display=swap" rel="stylesheet">
    </head>
​
    <body class="body">
    <header class="header">
            <div class="header-logo"><a class="link" href='bastia.php'><svg id="logo" width="41" height="22" viewBox="0 0 41 22" fill="none">
                    <path d="M33.7857 18.6786C33.739 18.6552 33.6903 18.6252 33.6399 18.5889C31.7025 17.4062 27.6816 15.275 25.9746 15.5536C24.9235 17.4362 23.9189 19.5535 23.2857 21C18.4456 18.9651 7.21239 12.1163 1 1L39.268 6.25659C39.5365 6.25356 39.7837 6.28434 40 6.35714L39.268 6.25659C37.6925 6.27436 35.3842 7.45629 34.2857 8.14286C35.2571 10.2857 34.3571 16.0595 33.7857 18.6786Z" fill="white" />
                    <path d="M1 1L40 6.35714C38.5143 5.85714 35.5714 7.33929 34.2857 8.14286M1 1L29.3571 11.3571M1 1L34.2857 8.14286M1 1C7.21239 12.1163 18.4456 18.9651 23.2857 21C23.9189 19.5535 24.9235 17.4362 25.9746 15.5536M29.3571 11.3571C30.3571 13.5595 32.6429 18.1071 33.7857 18.6786M29.3571 11.3571C28.5217 11.4345 27.2158 13.3304 25.9746 15.5536M33.7857 18.6786C34.3571 16.0595 35.2571 10.2857 34.2857 8.14286M33.7857 18.6786C31.9116 17.5179 27.7257 15.2679 25.9746 15.5536" stroke="#FF8989"/>
                    <path id="wave1" d="M506.329 191.177c-57.905-82.817-183.788-78.873-229.105 0C243.116 250.54 84.696 291.744 0 259.173V476.5h1440V78.14c-57.7-78.365-229.98-132.117-338.67 12.051-92.63 122.865-244.276 240.635-295.048 105.165-42.957-114.62-162.964-90.264-198.894-34.179-29.53 46.095-43.153 112.818-101.059 30z" fill="#FFD6C0"/>
                </svg></a> 
            </div>
    </header>
        <section class="site-hero overlay">
            <div class="container">
                <div class="row site-hero-inner justify-content-center align-items-center">
                    <div class="col-md-10 text-center">
                        <h1 class="heading" data-aos="fade-up">Bienvenue à<em> Paris</em></h1>
                    </div>
                </div>
            </div>
        </section>
        <div style="text-align:center;padding:1em 0;"> 
        <h2><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/fr/city/2988507"></h2>
         <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=fr&size=large&timezone=Europe%2FParis" width="100%" height="140" frameborder="0" seamless></iframe> </div>
         
            <div class="row justify-content-center">
              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-3">
                  <div class="card text-danger" >
                      <div class="card-body text-sm-center">
                          <h5 class="card-title">METEO</h5>
                          <h6 class="card-subtitle mb-2 text-muted">en temps réel</h6>
                          <img class="icon">
                          <p class="weather"></p>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-3">
                  <div class="card text-danger" >
                      <div class="card-body text-sm-center">
                          <h5 class="card-title">TEMPERATURE</h5>
                          <h6 class="card-subtitle mb-2 text-muted">en degré</h6>
                          <p class="temp"></p>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-3">
                  <div class="card text-danger">
                      <div class="card-body text-sm-center">
                          <h5 class="card-title">VITESSE DU VENT</h5>
                          <h6 class="card-subtitle mb-2 text-muted">en km/h</h6>
                          <p class="speed"></p>
                      </div>
                  </div>
              </div>
          </div>
            <div class="row justify-content-between">
                <div class="col-lg-4 offset-2 col-md-4 offset-0 col-sm-5 offset-0">
                  <div class="card" style="width: 18rem;">
                      <div class="card-body text-sm-center">
                          <h5 class="card-title">Map de la ville</h5>
                          <h6 class="card-subtitle mb-2 text-muted">vous pouvez zoomer/dézoomer</h6>
                          <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
    src="https://www.openstreetmap.org/export/embed.html?bbox=2.2180366516113286%2C48.80822011553444%2C2.433128356933594%2C48.909413314221865&amp;
    layer=mapnik" style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/#map=13/48.8588/2.3256">
      Afficher une carte plus grande</a></small>
                      </div>
                  </div>
                </div>
                    <div class=" col-lg-4 col-md-4 col-sm-5 ">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body text-sm-center">
                                <h5 class="card-title">Webcam de la ville</h5>
                                <h6 class="card-subtitle mb-2 text-muted">vous pouvez lancer la vidéo</h6>
                                <a name="windy-webcam-timelapse-player" data-id="1549489174" data-play="day" href="https://windy.com/webcams/1549489174" target="_blank">Paris: Arc de Triomphe - Eiffel Tower</a><script async type="text/javascript" src="https://webcams.windy.com/webcams/public/embed/script/player.js"></script>
                                <a name="windy-webcam-timelapse-player" data-id="1247612995" data-play="day" href="https://windy.com/webcams/1247612995" target="_blank">Paris: Weather</a><script async type="text/javascript" src="https://webcams.windy.com/webcams/public/embed/script/player.js"></script>
                                <a name="windy-webcam-timelapse-player" data-id="1511477795" data-play="lifetime" href="https://windy.com/webcams/1511477795" target="_blank">Paris: Radisson Blu Hotel Champs-Elysées</a><script async type="text/javascript" src="https://webcams.windy.com/webcams/public/embed/script/player.js"></script>
                                    
                                    <a name="windy-webcam-timelapse-player" data-id="1541698349" data-play="lifetime" href="https://windy.com/webcams/1541698349" target="_blank">Paris: 16th arrondissement - Bois de Boulogne - Paris La Défense</a><script async type="text/javascript" src="https://webcams.windy.com/webcams/public/embed/script/player.js"></script>
                            </div>
                        </div>
                    </div>
            </div>
        <div class="row justify-content-between">
            <div class="col-lg-4 offset-2 col-md-4 offset-0 col-sm-5 offset-0" >
                <div class="card" style="width: 18rem;">
                    <div class="card-body text-sm-center">
                        <h5 class="card-title">Prévision météo</h5>
                        <h6 class="card-subtitle mb-2 text-muted">vous pouvez déplacer la carte</h6>
                        <iframe width="650" height="450" src="https://embed.windy.com/embed2.html?lat=48.446&lon=2.343&zoom=8&level=surface&overlay=wind&menu=&message=&marker=&calendar=&pressure=&type=map&location=coordinates&detail=&detailLat=48.446&detailLon=2.343&metricWind=default&metricTemp=default&radarRange=-1" frameborder="0"></iframe> 
                    </div>
                </div>
            </div>
      
        
                <div class="col-lg-4 col-md-4 col-sm-5 ">
                  <div class="card" style="width: 18rem;">
                      <div class="card-body text-sm-center">
                          <h5 class="card-title">Paris 360° Experience</h5>
                          <iframe width="560" height="315" src="https://www.youtube.com/embed/EkshFcLESPU" frameborder="0" allow="accelerometer; 
                          autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          <h5 class="card-title">Visitez tous les lieux touristiques avec des explication</h5>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/Cnvi6oI3Eno" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>
                  </div>
                </div>
                </div>
                <section class="site-hero overlay">
            <div class="container">
                <div class="row site-hero-inner justify-content-center align-items-center">
                    <div class="col-md-10 text-center">
                        <p class="cultur">Capitale de la France
Paris, capitale de la France, est une grande ville européenne et un centre mondial de l'art,
 de la mode, de la gastronomie et de la culture. Son paysage urbain du XIXe siècle est traversé par de larges boulevards et la Seine.
  Outre les monuments comme la tour Eiffel et la cathédrale gothique Notre-Dame du XIIe siècle, la ville est réputée pour ses cafés et ses boutiques de luxe bordant la rue du Faubourg-Saint-Honoré.
Le célèbre musée du Louvre abrite "La Joconde" de Léonard de Vinci. Le musée d'Orsay expose les œuvres d'impressionnistes comme Monet, Degas et Renoir.
 Sur la rive droite de la Seine, le quartier de Montmartre comprend la basilique du Sacré-Cœur et offre une vue sur la ville depuis le sommet de la colline. Dans le Marais, des boîtes de nuit côtoient des demeures restaurées du XVIIe siècle. Sur la rive gauche se trouvent le Quartier latin, regorgeant d'universitaires de la Sorbonne, et le quartier bohème de Saint-Germain-des-Prés. Les cafés en plein air de la ville sont propices aux repas décontractés et à l'observation des passants. Les restaurants gastronomiques, les bistrots, les marchés et les pâtisseries reflètent d'autres aspects du célèbre patrimoine culinaire de la France.</p>
                    </div>
                </div>
            </div>
        </section>
      <form method="post" actions=""></form>
​
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <script src="js/paris.js"></script>
​
    </body>
</html>
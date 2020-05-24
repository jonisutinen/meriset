<?php get_header(); ?>

<?php 
    $carousel = get_field('karuselli');
?>
<div id="frontPageCarousel" class="carousel slide front--page--carousel" data-ride="carousel">
      <div class="carousel-inner">
        
        
        <div class="carousel-item active">
          <img src="<?php echo esc_url($carousel['karuselli_kuva_1']['url'])?>" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <?php if($carousel['karuselli_kuva_2']): ?>
        <div class="carousel-item">
          <img src="<?php echo esc_url($carousel['karuselli_kuva_2']['url'])?>" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <?php endif; ?>
        <?php if($carousel['karuselli_kuva_3']): ?>
        <div class="carousel-item">
          <img src="<?php echo esc_url($carousel['karuselli_kuva_2']['url'])?>" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <?php endif; ?>
      </div>
    </div>
    <div class="content">
    <div class="container">
    <!-- <div class="card-group"> -->
      <div class="row row-cols-1 row-cols-lg-3">
          <div class="col mb-4">

      <div class="card">
        <img src="<?php bloginfo('template_directory'); ?>/img/haapasaarilinnut.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title">Syysartika</h3>
          <p class="card-text">COVID-19-pandemiasta johtuen risteilykautemme siirtyy ja liikenne on keskeytetty 31.5.2020 asti.
          <br><br>
          Seuraamme tiiviisti viranomaisten tiedotteita. Kun tilanne taas sallii irtautua laiturista, aloitamme välittömästi
          liikennöinnin.
          <br><br>
          Meihin voi olla kuitenkin yhteydessä säköpostitse tai puhelimitse. Suunnitellaan yhdessä loppukesän risteilypaketteja
          tai varaa ryhmällesi merielämys jo vuodelle 2021.
          <br><br>
          Kaikesta huolimatta nautitaan keväästä ja valosta. Pysykää terveinä!</p>
          <div class="button-container">
          <a href="#" class="btn btn-primary">Lue lisää</a>
          </div>
        </div>
        <!-- <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div> -->
      </div>
    </div>
      <div class="col mb-4">

      <div class="card">
        <img src="<?php bloginfo('template_directory'); ?>/img/tammionranta.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title">Tammion kalastajakylä</h3>
          <p class="card-text">Tammion reittiliikenne on keskeytetty COVID-19- pandemian takia 31.5.2020 asti.
          <br><br>
          Seuraamme tiiviisti viranomaisten tiedotteita ja toivomme pääsevämme aloittamaan reittiliikenteen Tammioon niin pian
          kuin mahdollista.
          <br><br>
          Nyt on aika pitää huolta itsestämme ja läheisistämme!
          <br><br>
          Kyllä tämäkin myrsky selätetään ja irrotetaan köydet entistä vahvempina.</p>
          <div class="button-container">
            <a href="#" class="btn btn-primary">Lue lisää</a>
          </div>
        
        </div>
        <!-- <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div> -->
      </div>
      </div>
      <div class="col mb-4">

      <div class="card">
        <img src="<?php bloginfo('template_directory'); ?>/img/vikla1joki.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title">Yleisön suosikki: jokiristeilyt</h3>
          <p class="card-text">Risteilyn lähtö- ja paluupaikat ovat kahden ainutlaatuisen puiston kyljessä.
          <br><br>
          Tällä risteilyllä nautitaan sekä merimaisemista että joen virtaavasta kauneudesta.</p>
          <div class="button-container">
        <a href="#" class="btn btn-primary">Lue lisää</a>
        </div>
        </div>

        <!-- <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div> -->
      </div>
      </div>
      <div class="col mb-4">
      
        <div class="card">
          <img src="<?php bloginfo('template_directory'); ?>/img/vikla1joki.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h3 class="card-title">Yleisön suosikki: jokiristeilyt</h3>
            <p class="card-text">Risteilyn lähtö- ja paluupaikat ovat kahden ainutlaatuisen puiston kyljessä.
              <br><br>
              Tällä risteilyllä nautitaan sekä merimaisemista että joen virtaavasta kauneudesta.</p>
            <div class="button-container">
              <a href="#" class="btn btn-primary">Lue lisää</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>

    <?php get_footer(); ?>

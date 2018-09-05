    <?php 
    include 'header.php'; 
    ?>
    
    <div id="target"></div>
    <!-- hero image -->
    <section class="hero-image jumbotron text-center">
        <h2>
            Twój dealer samochodów używanych
        </h2>
        <p>
            Niezawodna gwarancja i satysfakcja
        </p>
        <button class="btn btn-gradient btn-round-big btn-lg">
            Sprawdź ofertę
        </button>
    </section>
    <section class="aboutUs justify-content-center container" id="aboutUs">
        <h2 class="text-center">
            Krótko o nas
        </h2>
        <p class="text-center short-info">
            Firma <b class="blue">AutoEmocion</b> to komis samochodowy w Myślenicach z usługami auto detalingu
        </p>
        <div class="row">
            <div class="col-md-8">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa obcaecati voluptatibus tempore? Perferendis est harum aperiam
                    quasi neque, quam eius enim quibusdam necessitatibus cum saepe eum ipsam maxime. Nihil, ducimus.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa obcaecati voluptatibus tempore? Perferendis est harum aperiam
                    quasi neque, quam eius enim quibusdam necessitatibus cum saepe eum ipsam maxime. Nihil, ducimus.
                </p>
            </div>
            <div class="col-md statistics">
                <div class="d-flex flex-wrap">
                    <div class="statistics-item">
                        <p class="big-number">241</p> sprzedanych aut
                    </div>
                    <div class="statistics-item">
                        <p class="big-number">119</p> Wesołych klientów
                    </div>
                    <div class="statistics-item">
                        <p class="big-number">686</p> Detalingów
                    </div>
                    <div class="statistics-item">
                        <p class="big-number green">Tak</p> - wolne terminy
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="offer container-fluid" id="offer">
        <h2 class="text-center">
            Oferta
        </h2>
        <div class="text-center offer-menu">
            <i class="fas fa-car"></i>
            <span>
                <a href="#" id="offer-menu-komis">
                    Komis samochodowy
                </a>
            </span>
            <span>/</span>
            <i class="fas fa-eye"></i>
            <span>
                <a href="#" id="offer-menu-autodetailing">
                    Auto detailing
                </a>
            </span>
        </div>
        <hr>
        <div class="container" id="offer-target">
            <!-- place for data, please don't remove -->
        </div>
    </section>

<?php 
    include 'footer.php'
?>
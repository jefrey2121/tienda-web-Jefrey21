@include('plantilla.navegacion')
    <main class="main">
        <section class="home section" id="home">
            <div class="home__container container grid">
                <div class="home__data">
                <h1 class="home__tittle">
                    Tenemos lo <br>
                    ultimo en <br>
                    moda 
                </h1>
                <p class="homme__description">
                    Obten lo ultimo en moda,
                    tenemos las mejores ropas con los mejores
                    precios.
                </p>
                <a href="" class="button">COMPRA YA</a>
                <img src="img/mariposa.png" alt="image" class="home__fruit">
                </div>
                <img src="img/modelo-1.png" alt="image" class="home__img">
            </div>
            
            <img src="img/rosa.png" alt="image" class="home__branch">
        </section>
        <!-- =========POPULAR======= -->
        <section class="enjoy section" id="enjoy">
            <h2 class="section__title">
                La moda es para todos
            </h2>
            <div class="enjoy__container container grid">
                <article class="enjoy__card">
                    <div class="enjoy__bg"></div>
                    <a href="#">
                        <img src="img/men.png" alt="img" class="enjoy__img">
                        <h3 class="enjoy__tittle">Hombre</h3>
                        <span class="enjoy_subtittle">Nike-Adidas-Zara <br>
                                                    Levi's- H&M                    
                        </span>
                    </a>
                </article>
                <article class="enjoy__card">
                    <div class="enjoy__bg"></div>
                    <a href="">
                        <img src="img/women.png" alt="img" class="enjoy__img">
                        <h3 class="enjoy__tittle">Mujer</h3>
                        <span class="enjoy_subtittle">Forever 21-Victoria's Secret-Zara <br>
                                                    Levi's- H&M </span>
                    </a>
                </article>

                <article class="enjoy__card">
                    <div class="enjoy__bg"></div>
                    <a href="#">
                        <img src="img/bb.jpg" alt="img" class="enjoy__img">
                        <h3 class="enjoy__tittle">Niños</h3>
                        <span class="enjoy_subtittle">Para los engreidos</span>
                    </a>
                </article>
            </div>
        </section>
        
        @include('popular')
        @include('sub')
    </main> 

    @include('plantilla.footer')
    <!-- SCROLL UP -->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-s-line"></i>
    </a>
    <script src="js/scrollreveal.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/tema.js"></script>
</body>
</html>
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
       
        <section class="popular section" id="popular">
            <h2 class="section__title">
                Ropa Populares
            </h2>
            <div class="popular__container container grid">
                <article class="popular__card">
                    <div class="popular__bg"></div>
                    <img src="img/mona3.png" alt="image" class="popular__img">
                    <h3 class="popular__title">polo</h3>
                    <span class="popular__subtitle">Gucci</span>
                    <h3 class="popular__price">S/40.99</h3>
                    <button class="popular__button button">
                    <i class="ri-shopping-cart-line"></i>
                    </button>
                </article>
                <article class="popular__card">
                    <div class="popular__bg"></div>
                    <img src="img/mona3.png" alt="image" class="popular__img">
                    <h3 class="popular__title">Pantalon</h3>
                    <span class="popular__subtitle">Zara</span>
                    <h3 class="popular__price">S/40.99</h3>
                    <button class="popular__button button">
                    <i class="ri-shopping-cart-line"></i>
                    </button>
                </article>
                <article class="popular__card">
                    <div class="popular__bg"></div>
                    <img src="img/mona3.png" alt="image" class="popular__img">
                    <h3 class="popular__title">Vestido</h3>
                    <span class="popular__subtitle">Zara</span>
                    <h3 class="popular__price">S/40.99</h3>
                    <button class="popular__button button">
                    <i class="ri-shopping-cart-line"></i>
                    </button>
                </article>
            </article>
            <article class="popular__card">
                <div class="popular__bg"></div>
                <img src="img/mona3.png" alt="image" class="popular__img">
                <h3 class="popular__title">Vestido</h3>
                <span class="popular__subtitle">Zara</span>
                <h3 class="popular__price">S/40.99</h3>
                <button class="popular__button button">
                <i class="ri-shopping-cart-line"></i>
                </button>
            </article>
        </article>
        <article class="popular__card">
            <div class="popular__bg"></div>
            <img src="img/mona3.png" alt="image" class="popular__img">
            <h3 class="popular__title">Vestido</h3>
            <span class="popular__subtitle">Zara</span>
            <h3 class="popular__price">S/40.99</h3>
            <button class="popular__button button">
            <i class="ri-shopping-cart-line"></i>
            </button>
        </article>
    </article>
    <article class="popular__card">
        <div class="popular__bg"></div>
        <img src="img/mona3.png" alt="image" class="popular__img">
        <h3 class="popular__title">Vestido</h3>
        <span class="popular__subtitle">Zara</span>
        <h3 class="popular__price">S/40.99</h3>
        <button class="popular__button button">
        <i class="ri-shopping-cart-line"></i>
        </button>
    </article>
            </div>
        </section>
        <section class="about section" id="about">
            <div class="about__container container grid">
                <div class="about__data">
                    <h2 class="section__title">
                        Proporcionamos <br>
                        la mejores marca al mejor precio
                    </h2>
                    <p class="about_description">
                        Ropas a medidas de marcas conocidas, no te quedes atras 
                        y viste lo actual, 
                    </p>
                    <a href="#" class="button">Saber mas</a>
                    <img src="img/mariposa.png " alt="image" class="about__fruit">
                </div>
                <img src="img/modelo-1.png" alt="image" class="about__img">
            </div>
            <img src="img/rosa.png" alt="image" class="about__branch">
        </section>

        
        <section class="join__section" id="join">
            <div class="join__container container grid">
                <div class="join__content grid">
                    <div class="join__data">
                        <h2 class="section__title">
                        Únete a nosotros <br>
                        Se parte de la comunidad
                        </h2>
                        <p class="join__description">
                            Enterate de la ofertas y novedades que
                            tenemos para ti.
                        </p>
                    </div>
                    <form action="join" class="join__form">
                        <input type="email" placeholder="Ingrese su Email" required class="join__input">
                        <button class="join__button button">
                            Suscribete Ahora
                        </button>
                    </form>
                    <img src="img/join.jpg" alt="image" class="join__bg">
                </div>
                <img src="img/flor azul.png" alt="image" class="join__leaf-1">
                <img src="img/flor azul.png" alt="image" class="join__leaf-2">
            </div>
        </section>
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
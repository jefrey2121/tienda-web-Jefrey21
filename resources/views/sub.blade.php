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
                    <form action="{{ route('subs.store') }}" method="POST" class="join__form">
                     @csrf
                        <input type="email" name="correo" placeholder="Ingrese su Correo" required class="join__input">
                             <button class="join__button button">
                          Suscribirse Ahora
                             </button>
                    </form>
                    <img src="img/join.jpg" alt="image" class="join__bg">
                </div>
                <img src="img/flor azul.png" alt="image" class="join__leaf-1">
                <img src="img/flor azul.png" alt="image" class="join__leaf-2">
            </div>
        </section>
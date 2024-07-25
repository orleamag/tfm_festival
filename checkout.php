<!-- Header -->
<?php include 'header.html'; ?>
    <main class="container">
        <section class="checkout">
            <h1 class="checkout__title">Posesion infernal</h1>
            <div class="checkout__content">
                <figure class="film__img">
                    <img src="img/films/PosesionInfernal.webp" alt="">
                </figure>
                <ul class="checkout__data">
                    <li>Dirección: <span>Lee Cronin</span></li>
                    <li>Reparto: <span>Alyssa Sutherland, Lily Sullivan, Morgan Davies, Nell Fisher</span></li>
                </ul>
            </div>
        </section>
        <section class="shopping">
            <div class="shopping__film">
                <h2>Datos de compra</h2>
                <hr/>                
                <div class="shopping__select">
                    <h2>Fecha y hora</h2>
                    <form>
                        <label>
                            <input type="radio" name="radio" checked/>
                            <span>17 de Octubre | 23:00h</span>
                        </label>
                        <label>
                            <input type="radio" name="radio"/>
                            <span>22 de Octubre | 15:00h</span>
                        </label>
                    </form>
                </div>
                <div class="shopping__select">
                    <h2>Selección de butacas</h2>
                    <p>Para elegir un lugar debe hacer clic en la butaca deseada.</p>
                    <div class="shopping__leyend">
                        <ul class="leyend">
                            <li><div class="leyend__color-empty"></div>Disponible</li>
                            <li><div class="leyend__color-select"></div>Selección</li>
                            <li><div class="leyend__color-sold"></div>Vendido</li>
                            <li><div class="leyend__color-special"></div>Especiales</li>
                        </ul>
                    </div>
                </div>
                <div class="shopping__select">
                    <h3 class="shopping__scenario">Escenario</h3>
                    <div class="more__less">
                        <button class="more__btn"><span class="material-symbols-outlined">add</span></button>
                        <button class="less__btn"><span class="material-symbols-outlined">remove</span></button>
                    </div>
                    <div class="shopping__seats">
                        <ul class="seats__rows">
                            <li>A</li>
                            <li>B</li>
                            <li>C</li>
                            <li>D</li>
                            <li>E</li>
                            <li>F</li>
                            <li>G</li>
                            <li>H</li>
                        </ul>
                        <ul class="seats__group">
                            <li id="b-a1" class="seat"></li>
                            <li id="b-a2" class="seat"></li>
                            <li id="b-a3" class="seat"></li>
                            <li id="b-a4" class="seat"></li>
                            <li id="b-a5" class="seat"></li>
                            <li id="b-a6" class="seat"></li>
                            <li id="b-a7" class="seat"></li>
                            <li id="b-a8" class="seat"></li>
                            <li id="b-a9" class="seat"></li>
                            <li id="b-a10" class="seat"></li>
                            <li id="b-b1" class="seat"></li>
                            <li id="b-b2" class="seat"></li>
                            <li id="b-b3" class="seat"></li>
                            <li id="b-b4" class="seat"></li>
                            <li id="b-b5" class="seat"></li>
                            <li id="b-b6" class="seat"></li>
                            <li id="b-b7" class="seat"></li>
                            <li id="b-b8" class="seat"></li>
                            <li id="b-b9" class="seat"></li>
                            <li id="b-b10" class="seat"></li>
                            <li id="b-c1" class="seat"></li>
                            <li id="b-c2" class="seat"></li>
                            <li id="b-c3" class="seat"></li>
                            <li id="b-c4" class="seat"></li>
                            <li id="b-c5" class="seat"></li>
                            <li id="b-c6" class="seat"></li>
                            <li id="b-c7" class="seat"></li>
                            <li id="b-c8" class="seat"></li>
                            <li id="b-c9" class="seat"></li>
                            <li id="b-c10" class="seat"></li>
                            <li id="b-d1" class="seat"></li>
                            <li id="b-d2" class="seat"></li>
                            <li id="b-d3" class="seat"></li>
                            <li id="b-d4" class="seat"></li>
                            <li id="b-d5" class="seat"></li>
                            <li id="b-d6" class="seat"></li>
                            <li id="b-d7" class="seat sold"></li>
                            <li id="b-d8" class="seat sold"></li>
                            <li id="b-d9" class="seat sold"></li>
                            <li id="b-d10" class="seat"></li>
                            <li id="b-e1" class="seat"></li>
                            <li id="b-e2" class="seat"></li>
                            <li id="b-e3" class="seat"></li>
                            <li id="b-e4" class="seat"></li>
                            <li id="b-e5" class="seat"></li>
                            <li id="b-e6" class="seat"></li>
                            <li id="b-e7" class="seat"></li>
                            <li id="b-e8" class="seat"></li>
                            <li id="b-e9" class="seat"></li>
                            <li id="b-e10" class="seat"></li>
                            <li id="b-f1" class="seat"></li>
                            <li id="b-f2" class="seat"></li>
                            <li id="b-f3" class="seat"></li>
                            <li id="b-f4" class="seat"></li>
                            <li id="b-f5" class="seat"></li>
                            <li id="b-f6" class="seat"></li>
                            <li id="b-f7" class="seat"></li>
                            <li id="b-f8" class="seat"></li>
                            <li id="b-f9" class="seat"></li>
                            <li id="b-f10" class="seat"></li>
                            <li id="b-g1" class="seat"></li>
                            <li id="b-g2" class="seat"></li>
                            <li id="b-g3" class="seat"></li>
                            <li id="b-g4" class="seat"></li>
                            <li id="b-g5" class="seat"></li>
                            <li id="b-g6" class="seat"></li>
                            <li id="b-g7" class="seat"></li>
                            <li id="b-g8" class="seat"></li>
                            <li id="b-g9" class="seat"></li>
                            <li id="b-g10" class="seat"></li>
                            <li id="b-h3" class="seat special"></li>
                            <li id="b-h4" class="seat"></li>
                            <li id="b-h5" class="seat"></li>
                            <li id="b-h6" class="seat"></li>
                            <li id="b-h7" class="seat"></li>
                            <li id="b-h8" class="seat special"></li>
                        </ul>
                        <ul class="seats__group">
                            <li id="b-a11" class="seat"></li>
                            <li id="b-a12" class="seat"></li>
                            <li id="b-a13" class="seat"></li>
                            <li id="b-a14" class="seat"></li>
                            <li id="b-a15" class="seat"></li>
                            <li id="b-a16" class="seat"></li>
                            <li id="b-a17" class="seat"></li>
                            <li id="b-a18" class="seat"></li>
                            <li id="b-a19" class="seat"></li>
                            <li id="b-a20" class="seat"></li>
                            <li id="b-b11" class="seat"></li>
                            <li id="b-b12" class="seat"></li>
                            <li id="b-b13" class="seat"></li>
                            <li id="b-b14" class="seat"></li>
                            <li id="b-b15" class="seat"></li>
                            <li id="b-b16" class="seat"></li>
                            <li id="b-b17" class="seat"></li>
                            <li id="b-b18" class="seat"></li>
                            <li id="b-b19" class="seat"></li>
                            <li id="b-b20" class="seat"></li>
                            <li id="b-c11" class="seat"></li>
                            <li id="b-c12" class="seat"></li>
                            <li id="b-c13" class="seat"></li>
                            <li id="b-c14" class="seat"></li>
                            <li id="b-c15" class="seat"></li>
                            <li id="b-c16" class="seat"></li>
                            <li id="b-c17" class="seat"></li>
                            <li id="b-c18" class="seat"></li>
                            <li id="b-c19" class="seat"></li>
                            <li id="b-c20" class="seat"></li>
                            <li id="b-d11" class="seat"></li>
                            <li id="b-d12" class="seat"></li>
                            <li id="b-d13" class="seat"></li>
                            <li id="b-d14" class="seat"></li>
                            <li id="b-d15" class="seat sold"></li>
                            <li id="b-d16" class="seat sold"></li>
                            <li id="b-d17" class="seat sold"></li>
                            <li id="b-d18" class="seat sold"></li>
                            <li id="b-d19" class="seat sold"></li>
                            <li id="b-d20" class="seat"></li>
                            <li id="b-e11" class="seat"></li>
                            <li id="b-e12" class="seat"></li>
                            <li id="b-e13" class="seat"></li>
                            <li id="b-e14" class="seat"></li>
                            <li id="b-e15" class="seat"></li>
                            <li id="b-e16" class="seat"></li>
                            <li id="b-e17" class="seat"></li>
                            <li id="b-e18" class="seat"></li>
                            <li id="b-e19" class="seat"></li>
                            <li id="b-e20" class="seat"></li>
                            <li id="b-f11" class="seat"></li>
                            <li id="b-f12" class="seat"></li>
                            <li id="b-f13" class="seat"></li>
                            <li id="b-f14" class="seat"></li>
                            <li id="b-f15" class="seat"></li>
                            <li id="b-f16" class="seat"></li>
                            <li id="b-f17" class="seat"></li>
                            <li id="b-f18" class="seat"></li>
                            <li id="b-f19" class="seat"></li>
                            <li id="b-f20" class="seat"></li>
                            <li id="b-g11" class="seat"></li>
                            <li id="b-g12" class="seat"></li>
                            <li id="b-g13" class="seat"></li>
                            <li id="b-g14" class="seat"></li>
                            <li id="b-g15" class="seat"></li>
                            <li id="b-g16" class="seat"></li>
                            <li id="b-g17" class="seat"></li>
                            <li id="b-g18" class="seat"></li>
                            <li id="b-g19" class="seat"></li>
                            <li id="b-g20" class="seat"></li>
                            <li id="b-h13" class="seat special"></li>
                            <li id="b-h14" class="seat"></li>
                            <li id="b-h15" class="seat"></li>
                            <li id="b-h16" class="seat"></li>
                            <li id="b-h17" class="seat"></li>
                            <li id="b-h18" class="seat special"></li>
                        </ul>
                    </div>
                    <div class="seats__select">
                        <h2>Butacas seleccionadas</h2>
                        <div class="seat__selected">
                            <p class="seat__desc"> Aquí podrá ver los asientos seleccionados</p>                          
                        </div>
                    </div>
                </div>
                <div class="resume__shop">
                    <a class="btn__liquid-film checkout__open" href="#" ><span>Comprar estradas</span><div class="liquid"></div></a>
                </div>
                <p class="shopping__disclaimer">Por favor, revisa la película, fecha, sesión y verifica que la información mostrada en el Resumen de Compra corresponde a la que has seleccionado, ya que, no se podrá hacer cambios ni devoluciones una vez finalizada la transacción. Para modificar vuelve a las secciones superiores.</p>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <?php include 'footer.html'; ?>
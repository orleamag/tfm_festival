<!-- Header -->
<?php include 'header.html'; ?>
    <main class="container">
    <section class="container__content">
        <img class="img__category" src="img/films/001.webp" alt="">
        <div class="title__category">
            <h1>Películas</h1>
        </div>
    </section>
    <section class="category">
            <div class="category__content">
                <nav class="tabbar">
                    <ul class="category" >
                        <li class="active all"><a href="" ><span>Todas</span></a></li>
                        <li class="history"><a href=""><span>Historia</span></a></li>
                        <li class="award"><a href="" disabled><span>Galardonadas</span></a></li>
                        <li class="psicology"><a href=""><span>Psicológicas</span></a></li>
                        <li class="sobrenatural"><a href=""><span>Sobrenatural</span></a></li>
                        <li class="damed"><a href=""><span>Maldición</span></a></li>
                        <li class="slasher"><a href=""><span>Slasher</span></a></li>
                        <li class="horror"><a href=""><span>Horror</span></a></li>
                        <li class="childrens"><a href=""><span>Infantiles</span></a></li>
                    </ul>
                </nav>
                <section id="category__cards">
                    <div id="all" class="category__filter show">
                        <?php include 'category_filter_all.html'; ?>
                    </div>
                    <div id="history" class="category__filter hide">
                        <?php include 'category_filter_history.html'; ?>
                    </div>
                    <!-- <div id="award" class="category__filter show">
                        <?php include 'category_filter_award.html'; ?>
                    </div>
                    <div id="psychologic" class="category__filter show">
                        <?php include 'category_filter_psycho.html'; ?>
                    </div>
                    <div id="supernatural" class="category__filter show">
                        <?php include 'category_filter_supernatural.html'; ?>
                    </div> -->
                </section>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <?php include 'footer.html'; ?>
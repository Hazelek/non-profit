<?php include 'header.php' ?>
<section class="section about" id="about">
    <div class="container">
        <div class="about-me-box">
            <h3>O mnie</h3>
            <p>Jestem Przemek, mam 22 lata, od ponad pół roku interesuję się tematyką związaną z budowaniem stron internetowych. Uwielbiam kodować, bo sprawia mi to olbrzymią przyjemność i satysfakcję oraz uważam to za świetny sposób spędzania wolnego czasu :) Obecnie zajmuje się tylko Front Endem pracując w agencji interaktywnej, jednak jestem otwarty na zdobywanie wiedzy w innych technologiach w przyszłości ;)</p>
            <h3>
                W czym pracuję?
            </h3>
        </div>
        <!--.aboue-me-box-->
        <div class="technology-container">
            <div class="technology-box col-md-4">
                <div class="t-inside-box">
                    <img src="images/html5_logo.png" alt="">
                </div>
            </div>
            <!--.col-md-3.technology-box-->
            <div class="technology-box col-md-4">
                <div class="t-inside-box">
                    <img src="images/css3_logo.png" alt="">
                </div>
            </div>
            <!--.col-md-3.technology-box-->
            <div class="technology-box col-md-4">
                <div class="t-inside-box">
                    <img src="images/js5_logo.png" alt="">
                </div>
            </div>
            <!--.col-md-3.technology-box-->
            <div class="technology-box col-md-4">
                <div class="t-inside-box">
                    <img src="images/sass_logo.png" alt="">
                </div>
            </div>
            <!--.col-md-3.technology-box-->
            <div class="technology-box col-md-4">
                <div class="t-inside-box">
                    <img src="images/jquery_logo.png" alt="">
                </div>
            </div>
            <!--.col-md-3.technology-box-->
            <div class="technology-box col-md-4">
                <div class="t-inside-box">
                    <img src="images/bootstrap_logo.png" alt="">
                </div>
            </div>
            <!--.col-md-3.technology-box-->
            <div class="technology-box col-md-4">
                <div class="t-inside-box">
                    <img src="images/git_logo.png" alt="">
                </div>
            </div>
            <!--.col-md-3.technology-box-->
            <div class="technology-box col-md-4">
                <div class="t-inside-box">
                    <img src="images/gulp_logo.png" alt="">
                </div>
            </div>
            <!--.col-md-3.technology-box-->
        </div>
        <!--.technology-container-->
    </div>
    <!--.container-->
</section> 
<!--.about-->

<section class="portfolio" id="portfolio">
    <div class="container">
        <h3>
            Projekty które sam realizowałem/pomagałem przy tworzeniu
        </h3>
    </div>
    <!--.container-->


    <a class="realization-item col-md-3" href="http://vesuna-m.mmdev.org/" target="_blank">
        <img src="images/vesuna_logo.png" alt="">
    </a>

    <!--.realization-item-->

    <a class="realization-item col-md-3" href="https://hazelek.github.io/clemo/" target="_blank">
        <img src="images/clemo_logo.png" alt="">
    </a>

    <!--.realization-item-->

    <a class="realization-item col-md-3" href="http://remax-landing.mmdev.org/nowy2/" target="_blank">
        <img src="images/remax_logo.png" alt="">
    </a>

    <!--.realization-item-->


    <a class="realization-item col-md-3" href="" target="_blank">
        <img src="images/modern_logo.png" alt="" >
    </a>

    <!--.realization-item-->
</section>
<!--.portfolio-->

<section class="contact" id="contact">
    <div class="container">
        <h3>Masz jakieś pytania?</h3>
        <p>Pisz śmiało, postaram się odpowiedzieć w przeciągu kilku godzin.</p>

        <!-- Trigger/Open The Modal -->
        <button id="modal-but">Napisz</button>

        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content-box">
                <span class="close">x</span>
                <h3>Formularz kontaktowy</h3>
                <div class="contact-form-box">
                    <form action="mail.php" method="POST" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="six-columns">
                                <input name="name" type="text" placeholder="Imię*"/>
                            </div>
                            <!--.six-columns-->
                            <div class="six-columns">
                                <input name="email" type="text" placeholder="Adres e-mail*"/>
                            </div>
                            <!--.six-columns-->
                        </div>
                        <!--.form-row-->
                        <div class="form-row">
                            <div class="six-columns">
                                <input name="phone" type="text" placeholder="Telefon"/>
                            </div>
                            <!--.six-columns-->
                            <div class="six-columns">
                                <input name="topic" type="text" placeholder="Temat wiadomości*"/>
                            </div>
                            <!--.six-columns-->
                        </div>
                        <!--.form-row-->
                        <textarea name="message"placeholder="Wiadomość"></textarea>
                        <button type="submit" class="but-details">Wyślij</button>
                    </form>
                </div>
                <!--.contact-form-box-->
            </div>

        </div>


        <!--        <div class="contact-form-box col-md-12">
                    <form>
                        <fieldset><input type="text" placeholder="Imię i nazwisko*"/></fieldset>
                        <fieldset><input type="text" placeholder="Adres e-mail*"/></fieldset>
                        <fieldset><input type="text" placeholder="Telefon"/></fieldset>
                        <fieldset><textarea placeholder="Wiadomość"></textarea></fieldset>
                    </form>
                </div>
                .contact-form-box-->
    </div>
    <!--.container-->
</section>
<!--.contact-->
<?php include 'footer.php' ?>
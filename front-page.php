<?php

/**
 * The template for displaying front page
 */

get_header('front-page');
?>


<section id="hero">
    <div class="container show-on-scroll">
        <div class="presentation">
            <h1>Rstartr, la plateforme d’apprentissage en ligne.</h1>
            <p>Devenez chef d’entreprise, développeur, community manager et bien d’autres métiers pour vous rendre plus indépendant.</p>
            <div class="call-to-action">
                <a href="#" class="btn btn-primary">Se connecter</a>
                <a href="#" class="btn">Découvrir</a>
            </div>
        </div>
        <img src="<?= get_stylesheet_directory_uri() . '/assets/images/section1.png' ?>" alt="Rstartr, la plateforme d’apprentissage en ligne.">
    </div>
</section>


<section id="how-section">
    <!-- <img src="images/section2-back.png" class="back-img" alt="Prêt pour un changement de vie ?"> -->
    <div class="how show-on-scroll ">
        <div class="container">
            <h1>Prêt pour un changement de vie ?</h1>
            <div class="row">
                <div class="image-area">
                    <img src="<?= get_stylesheet_directory_uri() . '/assets/images/section2.png' ?>" alt="Prêt pour un changement de vie ?">
                </div>
                <div class="way-area">
                    <div class="way">
                        <span class="subtitle">Suivez vos cours à votre rythme</span>
                        <p>Notre plateforme elearning propose plusieurs supports pédagogiques afin de s’adapter à votre méthode d’apprentissage.</p>
                    </div>
                    <div class="way">
                        <span class="subtitle">Des exercices concrets à réaliser</span>
                        <p>Savoir c’est bien. Faire c’est mieux ! Nous développons des exercices pratiques pour appliquer la théorie et la retenir enfin.</p>
                    </div>
                    <div class="way">
                        <span class="subtitle">Passez à l’apprentissage hybride</span>
                        <p>En alternant elearning et cours lives avec nos experts, vous n’êtes plus seuls devant ce beau challenge qu’est la reconversion.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="why-section">
    <div class="why">
        <div class="show-on-scroll">
            <div class="container">
                <h1>Une plateforme qui accompagne vos besoins</h1>

                <div class="reason-area">
                    <div class="reason">
                        <img src="<?= get_stylesheet_directory_uri() . '/assets/images/icon1.png' ?>" alt="Formations d'avenir">
                        <div class="content">
                            <div class="subtitle">Formations d'avenir</div>
                            <p class="description">Les principes enseignées sont tirés des nouvelles méthodes de travail et de consommation. Vous ne trouverez aucune formation comme les nôtres ailleurs !</p>
                        </div>
                    </div>
                    <div class="reason">
                        <img src="<?= get_stylesheet_directory_uri() . '/assets/images/icon2.png' ?>" alt="Simple, clair, efficace">
                        <div class="content">
                            <div class="subtitle">Simple, clair, efficace</div>
                            <p class="description">Notre plateforme pédagogique est le meilleur bureau virtuel pour apprendre de nouvelles choses et développer vos compétences transversales.</p>
                        </div>
                    </div>
                    <div class="reason last">
                        <img src="<?= get_stylesheet_directory_uri() . '/assets/images/icon3.png' ?>" alt="Seul, mais ensemble !">
                        <div class="content">
                            <div class="subtitle">Seul, mais ensemble !</div>
                            <p class="description">Nous combinons la praticité de l’autonomie du elearning avec l’efficacité de l’apprentissage synchrone. Le tout 100% en ligne.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="login">
    <img src="<?= get_stylesheet_directory_uri().'/assets/images/login-back.png' ?>" alt="Rstartr, la plateforme d’apprentissage en ligne.">
    <div class="login-area container show-on-scroll ">
        <form action="#" method="post">
            <div class="subtitle">Se connecter</div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" placeholder="Email">
            </div>
            <div class="input-group">
                <label for="password">Mot de passe</label>
                <input type="password" class="password-input" placeholder="Mot de passe">
            </div>
            <div class="input-check-group">
                <input type="checkbox" name="">
                <label>Se souvenir de moi</label>
            </div>
            <div class="forget-password">
                <a href="#">Mot de passe oublié ?</a>
            </div>
            <input type="submit" value="Valider" class="btn btn-primary">

            <div class="register-action">
                <p>Pas encore de compte ?</p>
                <a href="#">S'inscrire</a>
            </div>
        </form>
    </div>
</section>

<?php

get_footer('front-page');
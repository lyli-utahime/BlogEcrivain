<?php 

$title = "Connexion"; ?>

<?php ob_start(); ?>

<!-- start section navbar -->
<nav id="main-nav">
    <div class="row">
      <div class="container">

        <div class="logo">
            <a href="index.php?action=listPosts">Billet simple pour l'alaska</a>
        </div>

        <div class="responsive"><i data-icon="m" class="ion-navicon-round"></i></div>

        <ul class="nav-menu list-unstyled">
            <li><a href="index.php?action=listPosts" class="smoothScroll">Accueil</a></li>
            <li><a href="index.php?action=displayLoginAdmin" class="smoothScroll">Administration</a></li>
        </ul>

      </div>
    </div>
</nav>
<!-- End section navbar -->

<section class="paddsection">
    <div class="container">
        <div class="section-title text-center">
            <h1>Se connecter</h1>
        </div>
    </div>
    <div class="container">
        <div class="contact-block1">
            <div class="row">
                <div class="offset-md-4 col-md-6">
                    <?php
                    if (isset($_GET['account-status']) &&  $_GET['account-status'] == 'unsuccess-login') {
                    echo '<p style="color: red">Mauvais identifiant ou mot de passe !<p>';
                    }
                    ?>

                    <div class="form">
                        <form action="index.php?action=loginAdmin" method="post">
                        <div class="col-lg-6">
                            <div class="form-group contact-block1">
                                <label for="login">Pseudo</label><br/>
                                <input type="text" name="login" id="login" required />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="pass">Mot de passe</label><br />
                                <input type="password" name="pass" id="pass" required />
                            </div>
                        </div>
                        <div class="col-lg-12">
                                <input type="submit" class="btn" value="Se connecter" />
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
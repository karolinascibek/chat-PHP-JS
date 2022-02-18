<?= $this->extend('layouts/app') ?>


<?= $this->section('content') ?>

    <div id="signup-form" class='base-form'>
        <div class="header">
            <h1>Witaj! Dołacz do czatu</h1>
            <h2>Zaloguj się</h1>
        </div>
        <form action="#" metod="POST">
            <div class="form-section row-column">
                <input type="text" placeholder="email">
                <input type="text" placeholder="hasło">
            </div>
            <div class="form-section">
                 <input type="submit" value="Zaloguj się">
            </div>
        </form>
        <div>
            <p> Nie masz konta? <a href="<?php echo base_url()."/signup" ?>">Zarejestruj się</a> </p>
        </div>
    </div>

<?= $this->endSection() ?>

<style>




</style>
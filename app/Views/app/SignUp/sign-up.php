<?= $this->extend('layouts/app') ?>


<?= $this->section('content') ?>

    <div id="signup-form" class='base-form'>
        <div class="header">
            <h1>Zarejestruj się</h1>
        </div>
        <form action="#" metod="POST">
            <div class="form-section row-column">
                <input type="text" placeholder="email">
                <input type="text" placeholder="hasło">
            </div>
            <div class="form-section">
                 <input type="submit" value="Zarejestruj się">
            </div>
        </form>
        <div>
            <p> Masz juz konta? <a href="">Zaloguj się</a> </p>
        </div>
    </div>

<?= $this->endSection() ?>

<style>




</style>
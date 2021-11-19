<?= $this->extend('layouts/app') ?>


<?= $this->section('content') ?>

    <div id="login-form" class='base-form'> 
        <div class="header">
            <h1>Zaloguj się</h1>
        </div>
        <form action="#" metod="POST">
            <div class="form-section row-group">
                <input type="text" placeholder="imie">
                <input type="text" placeholder="nazwisko">
            </div>
            <div class="form-section row-column">
                <input type="text" placeholder="email">
            </div>
            <div class="form-section row-group">
                <input type="text" placeholder="hasło">
                <input type="text" placeholder="powtórz haslo">
            </div>
            <div class="form-section">
                 <input type="submit" value="Zaloguj się">
            </div>
        </form>
        <div>
            <p> Nie masz konta? <a href="">Zarejestruj się</a> </p>
        </div>
    </div>

<?= $this->endSection() ?>

<style>


</style>
<?= $this->extend('layouts/app') ?>


<?= $this->section('content') ?>

    <div id="login-form" class='base-form'> 
        <div class="header">
            <h1>Zarejestruj się</h1>
        </div>
        <form action="#" metod="POST">
            <div class="form-section row-group">
                <input type="text" placeholder="imie">
                <input type="text" placeholder="nazwisko">
            </div>
            <div class="form-section row-column">
                <input type="text" placeholder="email">
                <input type="file" name="image" placeholder="email">
            </div>
            <div class="form-section row-group">
                <input type="text" placeholder="hasło">
                <input type="text" placeholder="powtórz haslo">
            </div>
            <div class="form-section">
                 <input type="submit" value="Zarejestruj się">
            </div>
        </form>
        <div>
            <p> Nie masz konta? <a href="">Zaloguj się</a> </p>
        </div>
    </div>

<?= $this->endSection() ?>

<style>


</style>
<?php $this->extend("app/default") ?>

<?php $this->section("content") ?>

<section id="signup-section" class="bg-image">

    <form id="signup-form">

        <header>
            <h1>Witaj! Dołacz do czatu</h1>
            <h2>Zarejestruj się</h1>
        </header>
        <div class="group-form-row">
            <input type="text" name="firstName" placeholder="imie">
            <input type="text" name="lastName" placeholder="nazwisko">
        </div>
        <div class="group-form-column">
            <input type="text" name="email" placeholder="email">
            <input type="file" name="image">
        </div>
        <div class="group-form-row">
            <input type="text" name="password" placeholder="hasło">
            <input type="text" name="confirmPassword" placeholder="powtórz haslo">
        </div>

        <div class="group-form-column">
            <input type="submit" value="Zarejestruj się" name="submit">
        </div>
        <p>Masz już konto? <a href="<?= base_url() . "/login" ?>"> Zaloguj się </a></p>
    </form>

</section>
<?php $this->endsection() ?>
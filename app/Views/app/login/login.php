<?php $this->extend("app/default") ?>

<?php $this->section("content") ?>

<section id="login-section" class="bg-image">

    <form id="login-form">
        <header>
            <h1>Witaj! Dołacz do czatu</h1>
            <h2>Zaloguj się</h1>
        </header>
        <div class="group-form-column">
            <input type="text" name="email" placeholder="email">
            <input type="text" name="password" placeholder="haslo" id="">
        </div>
        <input type="submit" value="Zaloguj się" name="submit">
        <p>Nie masz konto? <a href="<?= base_url() . "/signup" ?>"> Zarejestruj się </a></p>
    </form>

</section>
<?php $this->endsection() ?>
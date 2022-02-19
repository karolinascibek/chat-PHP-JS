<?= $this->extend("app/default"); ?>
<?= $this->section("content"); ?>

<article id="user-page">
    <section id="user-section">

        <section id="user-profile-section">
            <div class="user">
                <div class="user-image">
                    <img class="user-photo" src="<?= base_url() . "/uploads/images/img.jpg" ?>" alt="">
                </div>
                <header class="user-profile-header">
                    <p>Witaj Karo</p>
                </header>

                <div class="tools-options">
                    <button><i class="fas fa-edit"></i></button>
                    <button><i class="fas fa-search"></i></i></button>
                </div>
            </div>
        </section>

        <section id="user-profile-search-section">
            <div class="user-search">
                <div class="form-user-search">
                    <input class="input-search" type="text" name="serach" id="" placeholder="szukaj...">
                    <button><i class="fas fa-search"></i></button>
                </div>
            </div>
        </section>

        <section id="user-profile-users-list-section">
            <div class="user">
                <div class="user-image">
                    <img class="user-photo" src="<?= base_url() . "/uploads/images/img.jpg" ?>" alt="">
                    <div class="dot active-dot"></div>
                </div>
                <header class="user-header">
                    <p class="user-name">Karolina Kowalska</p>
                    <p class="active">aktywna teraz</p>
                    <p class="current-message">
                        Me: Dzień dobry witam panią!
                    </p>
                </header>
            </div>
            <div class="user">
                <div class="user-image">
                    <img class="user-photo" src="<?= base_url() . "/uploads/images/img.jpg" ?>" alt="">
                    <div class="dot inactive-dot"></div>
                </div>
                <header class="user-header">
                    <p class="user-name">Andrzej Kozioł</p>
                    <p class="offline">niedostępny</p>
                    <p class="current-message">
                        You: Dzień dobry witam panią!
                    </p>
                </header>
            </div>
            <div class="user">
                <div class="user-image">
                    <img class="user-photo" src="<?= base_url() . "/uploads/images/prince.jpg" ?>" alt="">
                    <div class="dot active-dot"></div>
                </div>
                <header class="user-header">
                    <p class="user-name">Karolina Kowalska</p>
                    <p class="active">aktywna teraz</p>
                    <p class="current-message">
                        Me: Dzień dobry witam panią!
                    </p>
                </header>
            </div>
            <div class="user">
                <div class="user-image">
                    <img class="user-photo" src="<?= base_url() . "/uploads/images/img.jpg" ?>" alt="">
                    <div class="dot active-dot"></div>
                </div>
                <header class="user-header">
                    <p class="user-name">Karolina Kowalska</p>
                    <p class="active">aktywna teraz</p>
                    <p class="current-message">
                        Me: Dzień dobry witam panią!
                    </p>
                </header>
            </div>
            <div class="user">
                <div class="user-image">
                    <img class="user-photo" src="<?= base_url() . "/uploads/images/img.jpg" ?>" alt="">
                    <div class="dot active-dot"></div>
                </div>
                <header class="user-header">
                    <p class="user-name">Karolina Kowalska</p>
                    <p class="active">aktywna teraz</p>
                    <p class="current-message">
                        Me: Dzień dobry witam panią!
                    </p>
                </header>
            </div>
            <div class="user">
                <div class="user-image">
                    <img class="user-photo" src="<?= base_url() . "/uploads/images/img.jpg" ?>" alt="">
                    <div class="dot active-dot"></div>
                </div>
                <header class="user-header">
                    <p class="user-name">Karolina Kowalska</p>
                    <p class="active">aktywna teraz</p>
                    <p class="current-message">
                        Me: Dzień dobry witam panią!
                    </p>
                </header>
            </div>
        </section>
    </section>
</article>

<?= $this->endsection(); ?>
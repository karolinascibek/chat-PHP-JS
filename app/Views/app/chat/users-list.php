<?= $this->extend('layouts/app') ?>


<?= $this->section('content') ?>


<div id="chat-list-users" class="chat">
    <header class="user">
        <div class="photo">
            <img src="<?=base_url()?>/uploads/images/img.jpg" alt="">
            <div class=""><i class="fas fa-circle dot dot-active"></i></div>
        </div>
        <div class="details">
            <p>Karolina Ścibek</p>   
        </div>
    </header>

    <div id="search-section">
        <input class="input-search" type="text">
        <button class="btn-search"><i class="fas fa-search"></i></button>
    </div>

    <div id="list-users" class=''>
        <div class="user">
            <div class="photo">
                <img src="<?=base_url()?>/uploads/images/img.jpg" alt="">
                <div class=""><i class="fas fa-circle dot dot-active"></i></div>
            </div>
            <div class="details">
                <p>Karolina Ścibek</p>    
                <p class="msg-to-read">Masz wiadomosć</p> 
            </div>
        </div>

        <div class="user">
            <div class="photo">
                <img src="<?=base_url()?>/uploads/images/img.jpg" alt="">
                <div class=""><i class="fas fa-circle dot dot-active"></i></div>
            </div>
            <div class="details">
                <p>Karolina Ścibek</p>  
                <p class="msg-just-read">Masz wiadomosć</p>   
            </div>
        </div>

        <div class="user">
            <div class="photo">
                <img src="<?=base_url()?>/uploads/images/img.jpg" alt="">
                <div class=""><i class="fas fa-circle dot dot-offline"></i></div>
            </div>
            <div class="details">
                <p>Karolina Ścibek</p>  
                <p class="msg-to-read">Masz wiadomosć</p>   
            </div>
        </div>

        <div class="user">
            <div class="photo">
                <img src="<?=base_url()?>/uploads/images/img.jpg" alt="">
                <div class=""><i class="fas fa-circle dot dot-active"></i></div>
            </div>
            <div class="details">
                <p>Karolina Ścibek</p>  
                <p class="msg-just-read">Masz wiadomosć</p>   
            </div>
        </div>


        <div class="user">
            <div class="photo">
                <img src="<?=base_url()?>/uploads/images/img.jpg" alt="">
                <div class=""><i class="fas fa-circle dot-active"></i></div>
            </div>
            <div class="details">
                <p>Karolina Ścibek</p>   
                <p class="msg-just-read">Masz wiadomosć</p>  
            </div>
        </div>


        <div class="user">
            <div class="photo">
                <img src="<?=base_url()?>/uploads/images/img.jpg" alt="">
                <div class=""><i class="fas fa-circle dot-active"></i></div>
            </div>
            <div class="details">
                <p>Karolina Ścibek</p>    
                <p class="msg-to-read">Masz wiadomosć</p> 
            </div>
        </div>


    </div>
</div>

<?= $this->endSection() ?>
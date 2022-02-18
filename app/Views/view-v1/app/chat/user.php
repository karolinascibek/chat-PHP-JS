<?= $this->extend('layouts/app') ?>


<?= $this->section('content') ?>


<div id="chat-user" class="chat">
    <header class="user">
        <div class="photo">
            <img src="<?=base_url()?>/uploads/images/prince.jpg" alt="">
            <div class=""><i class="fas fa-circle dot dot-active"></i></div>
        </div>
        <div class="details">
            <h3>Alicja Poldowska</h3>   
            <p>Aktywna teraz</p>
        </div>
    </header>

    <div id="conversation-space" class=''>
       <div class="message my-message">
         <img src="<?=base_url()?>/uploads/images/img.jpg" alt="">
        <span class="">
            Hellow
        </span>
       </div>
        <div class="message my-message" >
          <img src="<?=base_url()?>/uploads/images/img.jpg" alt="">
          <span class="">
            Hi What's up?
            </span>
        </div>
        <div class="message user-message">
          <img src="<?=base_url()?>/uploads/images/prince.jpg" alt="">
          <span class="">
            L love you xD
            </span>
        </div>
        <div class="message user-message">
          <img src="<?=base_url()?>/uploads/images/prince.jpg" alt="">
          <span class="">
            L love you xD Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, dignissimos?
            </span>
        </div>
        <div class="message user-message">
          <img src="<?=base_url()?>/uploads/images/prince.jpg" alt="">
          <span class="">
            L love you xD Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, dignissimos?
            </span>
        </div>
        <div class="message user-message">
          <img src="<?=base_url()?>/uploads/images/prince.jpg" alt="">
          <span class="">
            L love you xD Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, dignissimos?
            </span>
        </div>
        <div class="message user-message">
          <img src="<?=base_url()?>/uploads/images/prince.jpg" alt="">
          <span class="">
            L love you xD
            </span>
        </div>
        <div class="message user-message">
          <img src="<?=base_url()?>/uploads/images/prince.jpg" alt="">
          <span class="">
            L love you xD
            </span>
        </div>


    </div>
    <div id="send-message">
        <!-- <input type="text"> -->
        <textarea name="" id="" cols="30" rows="1"></textarea>
        <button><i class="fas fa-paper-plane"></i></button>
    </div>
</div>

<?= $this->endSection() ?>
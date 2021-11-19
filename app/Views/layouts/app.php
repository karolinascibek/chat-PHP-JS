<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href= "<?php echo base_url('assets/css/layouts/app.css'); ?>" >
    <title>Chat</title>
</head>
<body> 
    <?=view('layouts/header'); ?>  
    <div class="container">
        <?=$this->renderSection('content'); ?>
    </div>
    <?=view('layouts/footer'); ?> 
</body>
</html>
<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Poppins:wght@200;300;400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,900;1,100;1,300;1,700&display=swap" rel="stylesheet">

    <!-- css styles -->
    <!-- default styles app -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/app/settings/variables.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/app/default-style.css'); ?>">

    <!-- login styles -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/app/login/login-style.css'); ?>">

    <!-- register styles -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/app/signup/signup-style.css'); ?>">

    <!-- user profile styles -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/app/user/user-profile-style.css'); ?>">


    <title>Chat</title>
</head>

<body>

    <main>
        <?= $this->renderSection("content") ?>
    </main>
</body>

</html>
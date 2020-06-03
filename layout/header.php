
<div class="head">
    <div class="logo"></div>
    <div class="section">
        <p class="phone">+7 (347) 666-69-69</p>
    </div>
    <div class="section2">
        <img class="kabinet_kartinka" src="images/kabinet.png">

        <a class="email" href="../layout/entry/entry.php"><?php if(isset($_SESSION['name'])){ echo $_SESSION['name']; } else { ?>Личный кабинет<?php } ?></a>
    </div>
    <div class="section2">
        <img class="basket_image" src="images/basket.png">
        <a class="basket" href="../new/basket/basket.php">Корзина</a>
    </div>
</div>

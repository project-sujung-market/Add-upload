<?php
    use Art\Core\DB;

    $data = DB::fetchAll("SELECT * FROM boards ORDER BY id DESC",[]);
?>
<div class="view">
    <h3 class="main-title">중고물품</h3>
    <?php foreach ($data as $idx=>$d): ?>
        <?php if($idx % 3 == 0): ?>
            <ul>
        <?php endif; ?>
        <li class="list">
            <div class="box">
                <?php if($d->image != ""): ?>
                    <img src="<?= $d->image ?>" alt="">
                <?php else : ?>
                    <img src="images/noImage2.jpg" alt="">
                <?php endif; ?>
            </div>
            <a href=""><?= $d->title ?></a>
            <p><?= $d->class ?></p>
            <p class="price"><?= $d->price ?>원</p>
        </li>
        <?php if($idx % 3 == 2): ?>
            </ul>
        <?php endif; ?>
    <?php endforeach; ?>

</div>

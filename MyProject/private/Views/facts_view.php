<?php foreach ($facts as $arr): ?>
<main class="fact">
    <div class="content">
        <div class="picture">
            <img src="img/<?php echo $arr['picture'];?>" alt="foto"> <!-- сделай обтекание текстом -->
        </div>
        <h2><?php echo $arr['title']; ?></h2>
        <p class="text"><?php echo $arr['text']; ?></p>
    </div>
    <ul class="more">
        <li><a href="">Интересные факты о тарантулах</a></li>
        <li><a href="">Дорогой город</a></li>
        <li><a href="">3</a></li>
        <li><a href="">4</a></li>
    </ul>
</main>
<?php endforeach; ?>


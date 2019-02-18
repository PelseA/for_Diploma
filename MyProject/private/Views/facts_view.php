<main class="fact">

<?php foreach ($facts as $arr): ?>
    <div class="content">
        <div class="picture">
            <img src="/img/<?php echo $arr['img'];?>" alt="foto"> 
        </div>
        <h2><?php echo $arr['title']; ?></h2>
        <p class="text"><?php echo $arr['text']; ?></p>
    </div>
<?php endforeach; ?>

<?php foreach ($listFact as $arr): ?>
	<ul>
		<li><a href="/<?php echo $arr['id']; ?>/fact"><?php echo $arr['title']; ?> </a></li>
	</ul>
<?php endforeach; ?>
</main>

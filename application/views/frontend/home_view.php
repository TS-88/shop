<div class="content">
	<?php foreach ($news as $value):?>
	<div class="ok">	
		<h2 class="usser_title"><?=$value['title'];?></h2>
		<p class="description"><?=$value['description'];?></p>
		<img class="img_size" src="<?=base_url('assets/img')?>/<?=$value['img'];?>">
		<span class="date"><?=$value['date'];?></span><br>
		<span class="author"><?=$value['author'];?></span>
	</div>
	<?php endforeach;?>
		<span class="page"><?php echo $this->pagination->create_links();?></span>

</div>
<div class="content">
	<?php foreach ($news as $value):?>
	<div class="ok">	
		<a href="<?=base_url('index.php/frontend/home/viewDetails/'.$value['id']."")?>"><h2 class="usser_title"><?=$value['title'];?></h2></a>
		<p class="description"><?=$value['description'];?></p>
		<img class="img_size" src="<?=base_url('assets/img')?>/<?=$value['img'];?>">
		<span class="date"><?=$value['date'];?></span><br>
		<span class="author"><?=$value['author'];?></span>
	</div>
	<?php endforeach;?>
		<span class="page"><?php echo $this->pagination->create_links();?></span>

</div>
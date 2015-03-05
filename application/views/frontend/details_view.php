	<?php foreach ($news as $value):?>
	<div class="det_ok">	
		<h1 class="det_title"><?=$value['title'];?></h1>
		<p class="det_description"><?=$value['description'];?></p><br>
		<img class="det_img_size" src="<?=base_url('assets/img')?>/<?=$value['img'];?>"><br>
	<div class="hi">
		<span class="det_date"><?=$value['date'];?></span><br>
		<span class="det_date"><?=$value['author'];?></span>
	</div>
	</div>
	<?php endforeach;?>

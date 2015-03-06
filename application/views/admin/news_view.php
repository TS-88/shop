
<head>
	<script type="text/js" src="<?=base_url("assets/js/jquery-2.1.3.min.js")?>"></script>
	<script type="text/js" src="<?=base_url("custom.js")?>"></script>
</head>
	<div class="content">
		 <?php foreach ($news as $value):?>
		 	<div class="ok1">
				<h2 class="usser_title"><?=$value['title'];?></h2>
				<img class="img_size_form" src="<?=base_url('assets/img')?>/<?=$value['img'];?>"><br>
			<div class="date_author">
				<span class="date"><?=$value['date'];?></span></br>
				<span class="author"><?=$value['author'];?></span></br>
			</div>
				<div class="admin_button">
					<?="<a href=".base_url("index.php/admin/news/addResalt")."><span class='btn btn-success btn-lg'>Add</span></a>
						<a href=".base_url("index.php/admin/news/edit/".$value['id']."")."><span class='btn btn-primary btn-lg'>Edit</span></a>"?>
						<a href="<?=base_url("index.php/admin/news/delete/")?>/<?=$value['id'];?>" class='btn btn-danger btn-lg' onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
					
				</div>
			</div>
		<?php endforeach;?>
		<span class="page"><?php echo $this->pagination->create_links();?></span>
	</div>
	<!-- <button onclick="return confirm('Are you sure you want to delete this item?');>ok</button> -->
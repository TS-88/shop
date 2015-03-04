<?php foreach ($news as $value):?>
<form  class="add_form" method="post" action="<?=base_url('index.php/admin/news/updateNews/'.$value['id']."")?>" enctype="multipart/form-data">
 	<span>Title:</span><br>
 	<input type="text" class="form form-control" name="title" value="<?=$value['title'];?>">
 	<br>
 	<span>Description</span><br>
 	<textarea class="form form-control" rows="3" name="description"><?=$value['description'];?></textarea>
 	<br>
 	<span>Image</span><br>
 	<input type="file" name="userfile" class="download">
 	<br>
 	<span>Date:</span><br>
 	<input type="text" class="form form-control" name="date" value="<?=$value['date'];?>">
 	<br>
 	<span>Author:</span><br>
 	<input type="text" class="form form-control" name="author" value="<?=$value['author'];?>">
 	<br>
 	<input class="add" class="btn btn-success" type="submit" value="Edit" name="send">
 </form>

 <?php endforeach;?>

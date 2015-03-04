<form  class="add_form" method="post" action="<?=base_url('index.php/admin/news/add');?>" enctype="multipart/form-data">
 	<span>Title:</span><br>
 	<input type="text" class="form form-control" name="title">
 	<br>
 	<span>Description</span><br>
 	<textarea class="form form-control" rows="3" name="description"></textarea>
 	<br>
 	<span>Image</span><br>
 	<input type="file" name="userfile">
 	<br>
 	<span>Date:</span><br>
 	<input type="text" class="form form-control" name="date">
 	<br>
 	<span>Author:</span><br>
 	<input type="text" class="form form-control" name="author">
 	<br>
 	<input class="add" class="btn btn-success" type="submit" value="Add" name="send">
 </form>

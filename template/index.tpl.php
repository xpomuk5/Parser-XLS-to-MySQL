<!doctype html>
<html>
<head>
<meta charset="utf-8" /> 
<link rel="stylesheet" href="template/css/style.css"/>
<title><?php echo $title;?></title>
</head>
<body>

	<div class="wrap">

	<form action="index.php?task=export" method="POST" enctype="multipart/form-data">
			<p>Выберите файл для загрузки <input type="file" name="xls"/></p>
			<input type="submit" value="Отправить"/>
		</form>
	</div>
</body>	
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>2015.09.18 게시판 연습</title>
	<link rel="stylesheet" href="http://cdn.jsdelivr.net/font-nanum/1.0/nanumbarungothic/nanumbarungothic.css">
	<style>
		h1,h2,h3,h4,h5,h6,ul,li,a,p,span,input,button,strong,td,tr,table,div,ol,li {font-family:Helvetica,'Nanum Barun Gothic','돋움'; letter-spacing:-0.025em; font-size:12px;}
		h1 {font-size:24px;}
		.box_write {border:1px solid #d4d4d4; width:600px; height:600px; margin:100px auto; padding:50px;}
		.box_write {text-align:center;}
		.box_write label {vertical-align:top;}
		.box_write input {margin:0 0 40px; padding:10px; width:200px;}
		.box_write #body {width:200px; padding:10px; font-size:12px; line-height:1.7; border:1px solid #d4d4d4; resize:none;}
		.box_write input[type=submit] {display:block; width:100px; height:60px; background:#333; color:#fff; outline:none; margin:50px auto; border:none; cursor:pointer;}
		.box_write input[type=submit]:hover {background::#333;}
	</style>
</head>

<body>

	<form action="controller/_write.php" method="post">
		<div class="box_write">
			<h1>게시판 연습하기</h1>
			<label for="name">이름 : </label><input type="text" name="name" id="name" class="" placeholder="이름"><br>
			<label for="subject">제목 : </label><input type="text" name="subject" id="subject" class="" placeholder="제목"><br>
			<label for="body">내용 : </label><textarea type="text" name="body" id="body" class="" placeholder="내용"></textarea>
			<input type="submit" value="글쓰기">
		</div>
	</form>
</body>
</html>
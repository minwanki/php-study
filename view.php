<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>2015.09.18 게시판 연습</title>
	<link rel="stylesheet" href="http://cdn.jsdelivr.net/font-nanum/1.0/nanumbarungothic/nanumbarungothic.css">
	<style>
		h1,h2,h3,h4,h5,h6,ul,li,a,p,span,input,button,strong,td,tr,table,div,ol,li {font-family:Helvetica,'Nanum Barun Gothic','돋움'; letter-spacing:-0.025em; font-size:12px;}
		h1 {font-size:24px;}
		.box_write {border:1px solid #d4d4d4; width:600px; height:600px; margin:100px auto; padding:50px 50px 50px; }
		.box_write {text-align:center;}
		.box_write label {vertical-align:top;}
		.box_write input {margin:0 0 40px; padding:10px; width:200px;}
		.box_write #body {width:200px; padding:10px; font-size:12px; line-height:1.7; border:1px solid #d4d4d4; resize:none;}
		.box_write input[type=submit] {display:block; width:100px; height:60px; background:#333; color:#fff; outline:none; margin:50px auto; border:none; cursor:pointer;}
		.box_write input[type=submit]:hover {background::#333;}
		.box_table {height:500px; overflow:scroll; border-top:1px solid #d4d4d4; border-bottom:1px solid #d4d4d4;}
		table {border-collapse:collapse; width:100%;}
		th, td {border:1px solid #d4d4d4; padding:20px;}
		th {border-top:none; background:#f4f4f4;}
		tr:last-child td {border-bottom:none;}
		.bbs_btn {display:inline-block; width:100px; height:60px; line-height:60px; color:#fff; background-color:#333; text-decoration:none; margin:50px 5px;}
	</style>
</head>

<body>
	<div class="box_write">
		<h2>게시판리스트</h2>
		
		<div class="box_table">
	<?php
		if ($row):
	?>
		<table>
			<tr>
				<th>번호</th>
				<th>제목</th>
				<th>이름</th>
				<th>내용</th>
			</tr>
			<tr>
				<td><?=$row['no'] ?></td>
				<td><a href="_view.php?no=<?= $row['no'] ?>"><?=$row['subject'] ?></a></td>
				<td><?=$row['name'] ?></td>
				<td><?=$row['body'] ?></td>
			</tr>
		</table>
	<?php
		else:
	?>
		<p>글이 없습니다.</p>
		<a href="_list.php">돌아가기</a>
	<?php
		endif;
	?>
	<a class="bbs_btn" href="_modify.php?no=<?=$no ?>">수정하기</a>
	<a class="bbs_btn" href="_list.php">목록보기</a>
	<a class="bbs_btn" href="_del.php?no=<?=$row['no'] ?>">삭제하기</a>
	</div>
	</div>

</body>
</html>
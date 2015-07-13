@extends('layout')

@section('title', '加新公告')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>wordDesk</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="workDesk.css">
</head>
<body>
	<div id="form">
		<form action="workDesk.php" method="POST">
			<div class="input-field col s12">
    			<select>
				    <option value="1">大學部</option>
				    <option value="2">研究所</option>
				    <option value="3">104校曆</option>
				    <label>第一層</label>
			    </select>
  			</div>

			起始日期:<input placeholder="此欄位日期會決定排序優先順序，但不顯示給使用者" type="date" name="startingDate" class="datepicker">
			期限:<input placeholder="請輸入詳細的期限，這會顯示給使用者" type="text" name="startingDate">
		<br>
		<br>
			公告內文:
		<br>
			<textarea placeholder="輸入公告......" cols="50" rows="10" name="content"></textarea>
		<br>
		<br>
			公告單位：<input type="text" name="office">
		<br>
		<br>
			<input type="submit" value="取消">
			<input type="submit" value="完成">
		</form>
	</div>
</body>
</html>

@stop
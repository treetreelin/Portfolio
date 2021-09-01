<?php
//Debug用的語法
ini_set('display_errors',E_ALL);
//載入取得課程的資料庫程式
include("Courses.php");
//取得課程名稱搜尋$_POST值
$coursename = (Empty($_POST['coursename']))?"":$_POST['coursename'];
//使用課程資料庫物件
$courses = new Courses();
$coursesData = $courses->getCoursesDataByName($coursename);
//var_dump($courseData);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Course View</title>
		<link rel="stylesheet" type="text/css" href="css/courseview_style.css">
    </head>
    <body>
		<div class="container">
			<div class="header">
				<h2>課程查詢</h2>
				<form action= "" method="post">
					<div>
						<label for="coursename">課程名稱搜尋:</label>
						<input type="text" id="coursename" name="coursename" />
					</div>
					<div>
						<button type="submit">送出</button>
						<button type="reset">清除</button>
					</div>
				</form> 
			</div>
			<div class="container">
				<table class="thetable">
					<div class="container">
					<table class="tbl-course-view">
						<caption>課程搜尋結果</caption>
						<thead>
							<tr>
								<th>學期</th>
								<th>科目名稱</th>
								<th>老師姓名</th>
								<th>開課班級</th>
								<th>必/選修</th>
								<th>上課校區</th>
								<th>上課時間</th>
								<th>開課課號</th>
								<th>科目代號</th>
								<th>開放人數</th>
								<th>選課人數</th>
								<th>學分</th>
								<th>備註</th>
							</tr>
						</thead>
						<tbody>
							<?php
																
								/*foreach($coursesData as $key => $value)
								{
									echo '<tr>';
									echo '<td>'.$value['semester'].'</td>';
									echo '<td>'.$value['subject_name'].'</td>';
									echo '<td>'.$value['teacher_name'].'</td>';
									echo '<td>'.$value['class'].'</td>';
									echo '<td>'.$value['course_type'].'</td>';
									echo '<td>'.$value['campus'].'</td>';
									echo '<td>'.$value['course_time'].'</td>';
									echo '<td>'.$value['course_code'].'</td>';
									echo '<td>'.$value['subject_code'].'</td>';
									echo '<td>'.$value['quota'].'</td>';
									echo '<td>'.$value['""'].'</td>';
									echo '<td>'.$value['credit'].'</td>';
									echo '<td>'.$value['remark'].'</td>';
									echo '</tr>';
								}*/
								foreach($coursesData as $key => $value)
								{
									echo '<tr>';
									echo '<td>'.$value['semester'].'</td>';
									echo '<td>'.$value['subject_name'].'</td>';
									echo '<td>'.$value['teacher_name'].'</td>';
									echo '<td>'.$value['class'].'</td>';
									echo '<td>'.$value['course_type'].'</td>';
									echo '<td>'.$value['campus'].'</td>';
									echo '<td>'.$value['course_time'].'</td>';
									echo '<td>'.$value['course_code'].'</td>';
									echo '<td>'.$value['subject_code'].'</td>';
									echo '<td>'.$value['quota'].'</td>';
									echo '<td>'.NULL.'</td>';
									echo '<td>'.$value['credit'].'</td>';
									echo '<td>'.$value['remark'].'</td>';
									echo '</tr>';
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
    </body>
</html>

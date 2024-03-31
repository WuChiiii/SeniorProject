<link href="img/ndhu1.png" rel="icon" type="image"> 
<?php
	include "connect.php" ;
	$sql = "SELECT * FROM normalschedule";
	$normal = $conn->query($sql);
	$sql1 = "SELECT * FROM internationalschedule";
	$international = $conn->query($sql1);
	$professor = "SELECT * FROM teachers";
	$classroom = "SELECT * FROM classroom";
	$normal1 = $normal->fetch(PDO::FETCH_ASSOC);
	$normal2 = $normal->fetch(PDO::FETCH_ASSOC);
	$normal3 = $normal->fetch(PDO::FETCH_ASSOC);
	$normal4 = $normal->fetch(PDO::FETCH_ASSOC);
	$international1 = $international->fetch(PDO::FETCH_ASSOC);
	$international2 = $international->fetch(PDO::FETCH_ASSOC);
	$international3 = $international->fetch(PDO::FETCH_ASSOC);
	$international4 = $international->fetch(PDO::FETCH_ASSOC);
?>
<header>
	<style>
		th.center-text {
			text-align: center;
			word-wrap: break-word;
		}

		td.center-text {
			text-align: center;
			font-size: 5px;
			word-wrap: break-word;
		}

		.colored-row {
			background-color: #BDBDBD;
		}
		th, td {
			min-width: 60px;
			height: 80px;
		}
		/* p {
			text-align: center;
			font-size: 5px;
		} */

	</style>
</header>

<center>
	<h4 align="center">
		資工系課程表</br>
	</h4>
<form action="edit_table_database.php" method="post">
	<table border="1" style="border-collapse:collapse;">
		<thead>
			<tr>
				<thead>
					<tr>
						<td width="30" align="center"></td>
						
						<th colspan="10" class="center-text">
							<font size="2">星期一</font>
						</th>
						<th colspan="10" class="center-text">
							<font size="2">星期二</font>
						</th>
						<th colspan="10" class="center-text">
							<font size="2">星期三</font>
						</th>
						<th colspan="10" class="center-text">
							<font size="2">星期四</font>
						</th>
						<th colspan="10" class="center-text">
							<font size="2">星期五</font>
						</th>
					</tr>
		<tbody>
			<tr>
				<td width="30" align="center"></td>

				<!-- 星期一 -->
				<td colspan="3" class="center-text">
					<font size="1" class="center-text">學士班資工組</font>
				</td>
				<td colspan="3" class="center-text">
					<font size="1" class="center-text">學士班國際組</font>
				</td>
				<td  class="center-text">
					<font size="1" class="center-text">學程</font>
				</td>
				<td  class="center-text">
					<font size="1" class="center-text">研究所 </font>
				</td>
				<td  class="center-text">
					<font size="1" class="center-text">AI碩</font>
				</td>
				<td  class="center-text">
					<font size="1" class="center-text">支援</font>
				</td>

				<!-- 星期二 -->
				<td colspan="3" class="center-text" >
					<font size="1" class="center-text">學士班資工組</font>
				</td>
				<td colspan="3" class="center-text">
					<font size="1" class="center-text">學士班國際組</font>
				</td>
				<td class="center-text">
					<font size="1" class="center-text">學程 </font>
				</td>
				<td class="center-text">
					<font size="1" class="center-text">研究所 </font>
				</td>
				<td class="center-text">
					<font size="1" class="center-text">AI碩</font>
				</td>
				<td class="center-text">
					<font size="1" class="center-text">支援</font>
				</td>

				<!-- 星期三 -->
				<td colspan="3" class="center-text">
					<font size="1" class="center-text">學士班資工組</font>
				</td>
				<td colspan="3" class="center-text">
					<font size="1" class="center-text">學士班國際組</font>
				</td>
				<td class="center-text">
					<font size="1" class="center-text">學程 </font>
				</td>
				<td class="center-text">
					<font size="1" class="center-text">研究所 </font>
				</td>
				<td class="center-text">
					<font size="1" class="center-text">AI碩</font>
				</td>
				<td class="center-text">
					<font size="1" class="center-text">支援</font>
				</td>

				<!-- 星期四 -->
				<td colspan="3" class="center-text">
					<font size="1" class="center-text">學士班資工組</font>
				</td>
				<td colspan="3" class="center-text">
					<font size="1" class="center-text">學士班國際組</font>
				</td>
				<td class="center-text">
					<font size="1" class="center-text">學程 </font>
				</td>
				<td class="center-text">
					<font size="1" class="center-text">研究所 </font>
				</td>
				<td class="center-text">
					<font size="1" class="center-text">AI碩</font>
				</td>
				<td class="center-text">
					<font size="1" class="center-text">支援</font>
				</td>

				<!-- 星期五 -->
				<td colspan="3" class="center-text">
					<font size="1" class="center-text">學士班資工組</font>
				</td>
				<td colspan="3" class="center-text">
					<font size="1" class="center-text">學士班國際組</font>
				</td>
				<td class="center-text">
					<font size="1" class="center-text">學程 </font>
				</td>
				<td class="center-text">
					<font size="1" class="center-text">研究所 </font>
				</td>
				<td class="center-text">
					<font size="1" class="center-text">AI碩</font>
				</td>
				<td class="center-text">
					<font size="1" class="center-text">支援</font>
				</td>

			</tr>
		</tbody>

		<!-- 星期一 -->
		<tbody>
			<tr>
				<td width="30" align="center"></td>

				<!-- 星期一 start -->
				<!-- 學士班資工組 -->
				<td>
					<font size="1" class="center-text">大一</font>
				</td>
				<td>
					<font size="1" class="center-text">大二</font>
				</td>
				<td>
					<font size="1" class="center-text">大三</font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text">大一</font>
				</td>
				<td>
					<font size="1" class="center-text">大二</font>
				</td>
				<td>
					<font size="1" class="center-text">大三</font>
				</td>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期一 end -->


				<!-- 星期二 start -->
				<!-- 學士班資工組 -->
				<td>
					<font size="1" class="center-text">大一</font>
				</td>
				<td>
					<font size="1" class="center-text">大二</font>
				</td>
				<td>
					<font size="1" class="center-text">大三</font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text">大一</font>
				</td>
				<td>
					<font size="1" class="center-text">大二</font>
				</td>
				<td>
					<font size="1" class="center-text">大三</font>
				</td>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期二 end -->

				<!-- 星期三 start -->
				<!-- 學士班資工組 -->
				<td>
					<font size="1" class="center-text">大一</font>
				</td>
				<td>
					<font size="1" class="center-text">大二</font>
				</td>
				<td>
					<font size="1" class="center-text">大三</font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text">大一</font>
				</td>
				<td>
					<font size="1" class="center-text">大二</font>
				</td>
				<td>
					<font size="1" class="center-text">大三</font>
				</td>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期三 end -->

				<!-- 星期四 start -->
				<!-- 學士班資工組 -->
				<td>
					<font size="1" class="center-text">大一</font>
				</td>
				<td>
					<font size="1" class="center-text">大二</font>
				</td>
				<td>
					<font size="1" class="center-text">大三</font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text">大一</font>
				</td>
				<td>
					<font size="1" class="center-text">大二</font>
				</td>
				<td>
					<font size="1" class="center-text">大三</font>
				</td>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期四 end -->

				<!-- 星期五 start -->
				<!-- 學士班資工組 -->
				<td>
					<font size="1" class="center-text">大一</font>
				</td>
				<td>
					<font size="1" class="center-text">大二</font>
				</td>
				<td>
					<font size="1" class="center-text">大三</font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text">大一</font>
				</td>
				<td>
					<font size="1" class="center-text">大二</font>
				</td>
				<td>
					<font size="1" class="center-text">大三</font>
				</td>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期五 end -->
				
		</tbody>

		

		<!-- Row1 -->
		<tr>
			<td width="30" align="center">
				<font size="1">
					<b>
						<font color="black">1 <br /> 06:10 <br /> 07:10
					</b>
				</font>
			</td>

				<!-- 星期一 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-1-1 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["1-1"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-1-1 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-1-1 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["1-1"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-1-1 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-1-1 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["1-1"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-1-1 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-1-1 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["1-1"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-1-1 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-1-1 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["1-1"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-1-1 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-1-1 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["1-1"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-1-1 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-1-1 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["1-1"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-1-1 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期一 end -->


				<!-- 星期二 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-2-1 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["2-1"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-2-1 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-2-1 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["2-1"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-2-1 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-2-1 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["2-1"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-2-1 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-2-1 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["2-1"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-2-1 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-2-1 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["2-1"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-2-1 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-2-1 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["2-1"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-2-1 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-2-1 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["2-1"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-2-1 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期二 end -->

				<!-- 星期三 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-3-1 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["3-1"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-3-1 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-3-1 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["3-1"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-3-1 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-3-1 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["3-1"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-3-1 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-3-1 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["3-1"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-3-1 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-3-1 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["3-1"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-3-1 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-3-1 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["3-1"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-3-1 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-3-1 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["3-1"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-3-1 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期三 end -->

				<!-- 星期四 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-4-1 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["4-1"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-4-1 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-4-1 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["4-1"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-4-1 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-4-1 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["4-1"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-4-1 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-4-1 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["4-1"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-4-1 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-4-1 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["4-1"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-4-1 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-4-1 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["4-1"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-4-1 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-4-1 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["4-1"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-4-1 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期四 end -->

				<!-- 星期五 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-5-1 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["5-1"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-5-1 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-5-1 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["5-1"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-5-1 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-5-1 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["5-1"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-5-1 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-5-1 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["5-1"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-5-1 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-5-1 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["5-1"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-5-1 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-5-1 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["5-1"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-5-1 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-5-1 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["5-1"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-5-1 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期五 end -->

		</tr>

		<!-- Row 2  -->
		<tr>
			<td width="30" align="center">
				<font size="1" color="black">
					<b>2 <br /> 07:10 <br /> 08:10</b>
				</font>
			</td>

			<!-- 星期一 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-1-2 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["1-2"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-1-2 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-1-2 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["1-2"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-1-2 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-1-2 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["1-2"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-1-2 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-1-2 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["1-2"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-1-2 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-1-2 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["1-2"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-1-2 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-1-2 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["1-2"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-1-2 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-1-2 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["1-2"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-1-2 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期一 end -->


				<!-- 星期二 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-2-2 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["2-2"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-2-2 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-2-2 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["2-2"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-2-2 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-2-2 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["2-2"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-2-2 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-2-2 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["2-2"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-2-2 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-2-2 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["2-2"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-2-2 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-2-2 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["2-2"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-2-2 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-2-2 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["2-2"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-2-2 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期二 end -->

				<!-- 星期三 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-3-2 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["3-2"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-3-2 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-3-2 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["3-2"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-3-2 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-3-2 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["3-2"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-3-2 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-3-2 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["3-2"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-3-2 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-3-2 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["3-2"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-3-2 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-3-2 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["3-2"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-3-2 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-3-2 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["3-2"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-3-2 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期三 end -->

				<!-- 星期四 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-4-2 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["4-2"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-4-2 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-4-2 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["4-2"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-4-2 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-4-2 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["4-2"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-4-2 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-4-2 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["4-2"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-4-2 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-4-2 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["4-2"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-4-2 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-4-2 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["4-2"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-4-2 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-4-2 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["4-2"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-4-2 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期四 end -->

				<!-- 星期五 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-5-2 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["5-2"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-5-2 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-5-2 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["5-2"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-5-2 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-5-2 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["5-2"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-5-2 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-5-2 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["5-2"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-5-2 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-5-2 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["5-2"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-5-2 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-5-2 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["5-2"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-5-2 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-5-2 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["5-2"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-5-2 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期五 end -->

		</tr>

		<!-- Row 3  -->
		<tr>
			<td width="30" align="center">
				<font size="1" color="black">
					<b>3 <br /> 08:10 <br /> 09:00</b>
				</font>
			</td>	
				<!-- 星期一 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-1-3 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["1-3"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-1-3 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-1-3 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["1-3"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-1-3 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-1-3 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["1-3"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-1-3 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-1-3 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["1-3"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-1-3 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-1-3 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["1-3"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-1-3 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-1-3 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["1-3"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-1-3 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-1-3 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["1-3"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-1-3 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期一 end -->


				<!-- 星期二 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-2-3 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["2-3"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-2-3 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-2-3 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["2-3"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-2-3 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-2-3 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["2-3"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-2-3 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-2-3 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["2-3"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-2-3 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-2-3 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["2-3"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-2-3 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-2-3 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["2-3"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-2-3 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-2-3 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["2-3"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-2-3 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期二 end -->

				<!-- 星期三 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-3-3 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["3-3"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-3-3 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-3-3 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["3-3"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-3-3 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-3-3 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["3-3"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-3-3 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-3-3 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["3-3"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-3-3 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-3-3 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["3-3"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-3-3 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-3-3 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["3-3"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-3-3 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-3-3 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["3-3"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-3-3 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期三 end -->

				<!-- 星期四 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-4-3 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["4-3"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-4-3 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-4-3 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["4-3"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-4-3 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-4-3 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["4-3"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-4-3 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-4-3 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["4-3"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-4-3 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-4-3 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["4-3"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-4-3 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-4-3 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["4-3"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-4-3 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-4-3 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["4-3"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-4-3 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期四 end -->

				<!-- 星期五 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-5-3 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["5-3"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-5-3 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-5-3 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["5-3"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-5-3 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-5-3 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["5-3"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-5-3 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-5-3 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["5-3"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-5-3 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-5-3 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["5-3"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-5-3 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-5-3 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["5-3"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-5-3 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-5-3 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["5-3"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-5-3 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期五 end -->

			</td>

		</tr>

		<!-- Row 4  -->
		<tr>
			<td width="30" align="center">
				<font size="1" color="black">
					<b>4 <br /> 09:10 <br /> 10:00</b>
				</font>
			</td>
				<!-- 星期一 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-1-4 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["1-4"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-1-4 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-1-4 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["1-4"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-1-4 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-1-4 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["1-4"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-1-4 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 777-->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-1-4 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["1-4"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-1-4 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-1-4 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["1-4"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-1-4 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-1-4 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["1-4"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-1-4 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-1-4 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["1-4"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-1-4 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期一 end -->


				<!-- 星期二 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-2-4 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["2-4"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-2-4 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-2-4 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["2-4"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-2-4 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-2-4 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["2-4"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-2-4 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-2-4 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["2-4"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-2-4 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-2-4 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["2-4"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-2-4 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-2-4 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["2-4"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-2-4 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-2-4 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["2-4"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-2-4 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期二 end -->

				<!-- 星期三 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-3-4 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["3-4"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-3-4 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-3-4 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["3-4"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-3-4 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-3-4 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["3-4"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-3-4 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-3-4 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["3-4"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-3-4 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-3-4 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["3-4"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-3-4 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-3-4 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["3-4"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-3-4 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-3-4 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["3-4"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-3-4 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期三 end -->

				<!-- 星期四 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-4-4 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["4-4"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-4-4 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-4-4 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["4-4"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-4-4 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-4-4 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["4-4"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-4-4 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-4-4 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["4-4"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-4-4 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-4-4 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["4-4"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-4-4 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-4-4 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["4-4"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-4-4 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-4-4 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["4-4"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-4-4 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期四 end -->

				<!-- 星期五 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-5-4 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["5-4"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-5-4 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-5-4 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["5-4"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-5-4 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-5-4 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["5-4"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-5-4 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-5-4 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["5-4"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-5-4 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-5-4 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["5-4"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-5-4 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-5-4 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["5-4"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-5-4 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-5-4 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["5-4"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-5-4 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期五 end -->

			</td>

		</tr>

		<!-- Row 5  -->
		<tr>
			<td width="30" align="center">
				<font size="1" color="black">
					<b>5 <br /> 10:10 <br /> 11:00</b>
				</font>
			</td>

			<!-- 星期一 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-1-5 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["1-5"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-1-5 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-1-5 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["1-5"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-1-5 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-1-5 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["1-5"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-1-5 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-1-5 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["1-5"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-1-5 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-1-5 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["1-5"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-1-5 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-1-5 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["1-5"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-1-5 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-1-5 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["1-5"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-1-5 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期一 end -->


				<!-- 星期二 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-2-5 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["2-5"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-2-5 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-2-5 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["2-5"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-2-5 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-2-5 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["2-5"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-2-5 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-2-5 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["2-5"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-2-5 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-2-5 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["2-5"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-2-5 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-2-5 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["2-5"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-2-5 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-2-5 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["2-5"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-2-5 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期二 end -->

				<!-- 星期三 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-3-5 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["3-5"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-3-5 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-3-5 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["3-5"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-3-5 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-3-5 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["3-5"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-3-5 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-3-5 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["3-5"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-3-5 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-3-5 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["3-5"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-3-5 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-3-5 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["3-5"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-3-5 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-3-5 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["3-5"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-3-5 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期三 end -->

				<!-- 星期四 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-4-5 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["4-5"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-4-5 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-4-5 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["4-5"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-4-5 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-4-5 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["4-5"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-4-5 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-4-5 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["4-5"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-4-5 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-4-5 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["4-5"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-4-5 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-4-5 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["4-5"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-4-5 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-4-5 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["4-5"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-4-5 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期四 end -->

				<!-- 星期五 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-5-5 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["5-5"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-5-5 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-5-5 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["5-5"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-5-5 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-5-5 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["5-5"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-5-5 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-5-5 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["5-5"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-5-5 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-5-5 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["5-5"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-5-5 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-5-5 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["5-5"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-5-5 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-5-5 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["5-5"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-5-5 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期五 end -->

		</tr>

		<!-- Row 6  -->
		<tr>
			<td width="30" align="center">
				<font size="1" color="black">
					<b>6 <br /> 11:10 <br /> 12:00</b>
				</font>
			</td>

			<!-- 星期一 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-1-6 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["1-6"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-1-6 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-1-6 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["1-6"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-1-6 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-1-6 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["1-6"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-1-6 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-1-6 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["1-6"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-1-6 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-1-6 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["1-6"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-1-6 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-1-6 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["1-6"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-1-6 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-1-6 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["1-6"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-1-6 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期一 end -->


				<!-- 星期二 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-2-6 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["2-6"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-2-6 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-2-6 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["2-6"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-2-6 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-2-6 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["2-6"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-2-6 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-2-6 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["2-6"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-2-6 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-2-6 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["2-6"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-2-6 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-2-6 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["2-6"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-2-6 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-2-6 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["2-6"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-2-6 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期二 end -->

				<!-- 星期三 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-3-6 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["3-6"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-3-6 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-3-6 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["3-6"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-3-6 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-3-6 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["3-6"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-3-6 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-3-6 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["3-6"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-3-6 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-3-6 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["3-6"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-3-6 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-3-6 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["3-6"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-3-6 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-3-6 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["3-6"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-3-6 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期三 end -->

				<!-- 星期四 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-4-6 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["4-6"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-4-6 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-4-6 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["4-6"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-4-6 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-4-6 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["4-6"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-4-6 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-4-6 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["4-6"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-4-6 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-4-6 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["4-6"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-4-6 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-4-6 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["4-6"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-4-6 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-4-6 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["4-6"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-4-6 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期四 end -->

				<!-- 星期五 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-5-6 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["5-6"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-5-6 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-5-6 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["5-6"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-5-6 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-5-6 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["5-6"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-5-6 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-5-6 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["5-6"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-5-6 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-5-6 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["5-6"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-5-6 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-5-6 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["5-6"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-5-6 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-5-6 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["5-6"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-5-6 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期五 end -->
				
		</tr>

		<!-- Row 7  -->
		<tr class="colored-row">
			<td width="30" align="center">
				<font size="1" color="black">
					<b>7 <br /> 12:00 <br /> 13:00</b>
				</font>
			</td>

			<!-- 星期一 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-1-7 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["1-7"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-1-7 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-1-7 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["1-7"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-1-7 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-1-7 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["1-7"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-1-7 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-1-7 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["1-7"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-1-7 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-1-7 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["1-7"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-1-7 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-1-7 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["1-7"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-1-7 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-1-7 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["1-7"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-1-7 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期一 end -->


				<!-- 星期二 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-2-7 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["2-7"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-2-7 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-2-7 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["2-7"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-2-7 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-2-7 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["2-7"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-2-7 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-2-7 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["2-7"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-2-7 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-2-7 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["2-7"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-2-7 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-2-7 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["2-7"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-2-7 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-2-7 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["2-7"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-2-7 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期二 end -->

				<!-- 星期三 start -->
				<!-- 學士班資工組 -->
				<td rowspan="2" colspan="10">
					<font size="4" class="center-text"><center>全校統一不排課時間</center></font>
				</td>
				
				<!-- 星期四 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-4-7 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["4-7"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-4-7 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-4-7 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["4-7"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-4-7 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-4-7 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["4-7"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-4-7 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-4-7 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["4-7"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-4-7 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-4-7 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["4-7"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-4-7 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-4-7 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["4-7"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-4-7 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-4-7 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["4-7"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-4-7 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期四 end -->

				<!-- 星期五 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-5-7 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["5-7"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-5-7 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-5-7 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["5-7"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-5-7 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-5-7 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["5-7"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-5-7 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-5-7 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["5-7"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-5-7 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-5-7 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["5-7"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-5-7 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-5-7 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["5-7"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-5-7 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-5-7 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["5-7"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-5-7 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期五 end -->

		</tr>

		<!-- Row 8  -->
		<tr>
			<td width="30" align="center">
				<font size="1" color="black">
					<b>8 <br /> 13:10 <br /> 14:00</b>
				</font>
			</td>

			<!-- 星期一 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-1-8 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["1-8"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-1-8 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-1-8 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["1-8"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-1-8 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-1-8 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["1-8"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-1-8 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-1-8 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["1-8"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-1-8 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-1-8 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["1-8"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-1-8 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-1-8 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["1-8"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-1-8 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-1-8 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["1-8"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-1-8 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期一 end -->


				<!-- 星期二 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-2-8 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["2-8"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-2-8 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-2-8 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["2-8"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-2-8 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-2-8 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["2-8"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-2-8 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-2-8 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["2-8"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-2-8 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-2-8 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["2-8"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-2-8 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-2-8 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["2-8"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-2-8 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-2-8 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["2-8"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-2-8 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期二 end -->

				<!-- 星期四 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-4-8 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["4-8"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-4-8 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-4-8 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["4-8"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-4-8 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-4-8 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["4-8"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-4-8 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-4-8 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["4-8"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-4-8 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-4-8 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["4-8"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-4-8 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-4-8 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["4-8"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-4-8 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-4-8 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["4-8"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-4-8 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期四 end -->

				<!-- 星期五 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-5-8 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["5-8"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-5-8 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-5-8 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["5-8"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-5-8 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-5-8 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["5-8"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-5-8 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-5-8 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["5-8"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-5-8 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-5-8 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["5-8"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-5-8 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-5-8 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["5-8"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-5-8 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-5-8 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["5-8"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-5-8 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期五 end -->

		</tr>

		<!-- Row 9  -->
		<tr>
			<td width="30" align="center">
				<font size="1" color="black">
					<b>9 <br /> 14:10 <br /> 15:00</b>
				</font>
			</td>

			<!-- 星期一 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-1-9 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["1-9"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-1-9 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-1-9 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["1-9"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-1-9 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-1-9 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["1-9"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-1-9 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-1-9 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["1-9"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-1-9 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-1-9 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["1-9"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-1-9 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-1-9 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["1-9"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-1-9 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-1-9 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["1-9"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-1-9 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期一 end -->


				<!-- 星期二 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-2-9 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["2-9"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-2-9 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-2-9 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["2-9"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-2-9 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-2-9 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["2-9"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-2-9 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-2-9 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["2-9"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-2-9 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-2-9 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["2-9"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-2-9 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-2-9 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["2-9"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-2-9 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-2-9 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["2-9"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-2-9 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期二 end -->

				<!-- 星期三 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-3-9 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["3-9"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-3-9 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-3-9 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["3-9"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-3-9 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-3-9 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["3-9"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-3-9 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-3-9 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["3-9"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-3-9 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-3-9 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["3-9"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-3-9 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-3-9 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["3-9"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-3-9 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-3-9 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["3-9"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-3-9 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期三 end -->

				<!-- 星期四 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-4-9 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["4-9"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-4-9 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-4-9 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["4-9"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-4-9 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-4-9 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["4-9"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-4-9 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-4-9 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["4-9"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-4-9 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-4-9 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["4-9"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-4-9 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-4-9 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["4-9"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-4-9 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-4-9 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["4-9"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-4-9 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期四 end -->

				<!-- 星期五 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-5-9 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["5-9"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-5-9 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-5-9 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["5-9"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-5-9 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-5-9 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["5-9"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-5-9 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-5-9 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["5-9"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-5-9 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-5-9 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["5-9"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-5-9 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-5-9 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["5-9"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-5-9 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-5-9 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["5-9"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-5-9 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期五 end -->

		</tr>

		<!-- Row 10  -->
		<tr>
			<td width="30" align="center">
				<font size="1" color="black">
					<b>10 <br /> 15:10 <br /> 16:00</b>
				</font>
			</td>

			<!-- 星期一 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-1-10 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["1-10"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-1-10 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-1-10 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["1-10"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-1-10 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-1-10 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["1-10"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-1-10 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-1-10 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["1-10"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-1-10 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-1-10 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["1-10"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-1-10 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-1-10 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["1-10"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-1-10 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-1-10 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["1-10"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-1-10 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期一 end -->


				<!-- 星期二 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-2-10 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["2-10"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-2-10 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-2-10 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["2-10"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-2-10 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-2-10 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["2-10"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-2-10 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-2-10 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["2-10"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-2-10 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-2-10 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["2-10"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-2-10 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-2-10 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["2-10"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-2-10 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-2-10 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["2-10"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-2-10 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期二 end -->

				<!-- 星期三 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-3-10 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["3-10"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-3-10 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-3-10 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["3-10"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-3-10 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-3-10 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["3-10"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-3-10 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-3-10 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["3-10"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-3-10 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-3-10 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["3-10"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-3-10 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-3-10 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["3-10"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-3-10 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-3-10 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["3-10"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-3-10 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期三 end -->

				<!-- 星期四 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-4-10 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["4-10"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-4-10 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-4-10 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["4-10"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-4-10 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-4-10 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["4-10"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-4-10 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-4-10 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["4-10"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-4-10 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-4-10 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["4-10"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-4-10 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-4-10 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["4-10"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-4-10 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-4-10 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["4-10"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-4-10 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期四 end -->

				<!-- 星期五 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-5-10 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["5-10"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-5-10 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-5-10 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["5-10"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-5-10 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-5-10 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["5-10"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-5-10 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-5-10 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["5-10"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-5-10 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-5-10 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["5-10"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-5-10 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-5-10 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["5-10"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-5-10 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-5-10 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["5-10"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-5-10 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期五 end -->

		</tr>

		<!-- Row 11  -->
		<tr>
			<td width="30" align="center">
				<font size="1" color="black">
					<b>11 <br /> 16:10 <br /> 17:00</b>
				</font>
			</td>

			<!-- 星期一 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-1-11 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["1-11"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-1-11 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-1-11 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["1-11"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-1-11 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-1-11 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["1-11"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-1-11 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-1-11 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["1-11"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-1-11 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-1-11 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["1-11"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-1-11 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-1-11 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["1-11"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-1-11 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-1-11 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["1-11"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-1-11 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期一 end -->


				<!-- 星期二 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-2-11 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["2-11"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-2-11 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-2-11 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["2-11"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-2-11 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-2-11 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["2-11"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-2-11 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-2-11 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["2-11"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-2-11 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-2-11 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["2-11"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-2-11 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-2-11 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["2-11"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-2-11 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-2-11 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["2-11"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-2-11 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期二 end -->

				<!-- 星期三 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-3-11 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["3-11"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-3-11 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-3-11 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["3-11"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-3-11 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-3-11 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["3-11"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-3-11 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-3-11 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["3-11"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-3-11 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-3-11 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["3-11"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-3-11 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-3-11 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["3-11"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-3-11 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-3-11 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["3-11"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-3-11 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期三 end -->

				<!-- 星期四 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-4-11 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["4-11"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-4-11 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-4-11 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["4-11"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-4-11 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-4-11 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["4-11"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-4-11 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-4-11 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["4-11"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-4-11 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-4-11 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["4-11"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-4-11 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-4-11 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["4-11"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-4-11 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-4-11 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["4-11"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-4-11 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期四 end -->

				<!-- 星期五 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-5-11 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["5-11"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-5-11 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-5-11 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["5-11"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-5-11 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-5-11 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["5-11"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-5-11 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-5-11 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["5-11"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-5-11 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-5-11 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["5-11"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-5-11 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-5-11 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["5-11"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-5-11 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-5-11 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["5-11"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-5-11 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期五 end -->

		</tr>

		<!-- Row 12  -->
		<tr>
			<td width="30" align="center">
				<font size="1" color="black">
					<b>12 <br /> 17:00 <br /> 18:00</b>
				</font>
			</td>

			<!-- 星期一 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-1-12 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["1-12"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-1-12 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-1-12 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["1-12"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-1-12 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-1-12 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["1-12"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-1-12 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-1-12 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["1-12"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-1-12 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-1-12 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["1-12"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-1-12 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-1-12 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["1-12"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-1-12 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-1-12 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["1-12"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-1-12 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期一 end -->


				<!-- 星期二 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-2-12 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["2-12"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-2-12 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-2-12 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["2-12"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-2-12 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-2-12 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["2-12"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-2-12 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-2-12 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["2-12"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-2-12 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-2-12 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["2-12"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-2-12 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-2-12 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["2-12"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-2-12 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-2-12 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["2-12"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-2-12 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期二 end -->

				<!-- 星期三 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-3-12 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["3-12"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-3-12 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-3-12 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["3-12"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-3-12 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-3-12 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["3-12"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-3-12 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-3-12 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["3-12"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-3-12 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-3-12 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["3-12"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-3-12 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-3-12 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["3-12"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-3-12 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-3-12 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["3-12"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-3-12 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期三 end -->

				<!-- 星期四 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-4-12 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["4-12"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-4-12 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-4-12 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["4-12"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-4-12 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-4-12 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["4-12"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-4-12 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-4-12 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["4-12"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-4-12 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-4-12 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["4-12"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-4-12 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-4-12 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["4-12"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-4-12 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-4-12 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["4-12"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-4-12 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期四 end -->

				<!-- 星期五 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-5-12 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["5-12"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-5-12 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-5-12 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["5-12"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-5-12 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-5-12 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["5-12"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-5-12 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-5-12 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["5-12"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-5-12 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-5-12 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["5-12"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-5-12 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-5-12 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["5-12"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-5-12 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-5-12 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["5-12"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-5-12 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期五 end -->

		</tr>


		<tr>
		<td width="30" align="center">
				<font size="1" color="black">
					<b>13 <br /> 18:00 <br /> 19:00</b>
				</font>
			</td>

			<!-- 星期一 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-1-13 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["1-13"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-1-13 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-1-13 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["1-13"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-1-13 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-1-13 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["1-13"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-1-13 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-1-13 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["1-13"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-1-13 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-1-13 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["1-13"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-1-13 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-1-13 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["1-13"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-1-13 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-1-13 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["1-13"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-1-13 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期一 end -->


				<!-- 星期二 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-2-13 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["2-13"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-2-13 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-2-13 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["2-13"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-2-13 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-2-13 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["2-13"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-2-13 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-2-13 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["2-13"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-2-13 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-2-13 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["2-13"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-2-13 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-2-13 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["2-13"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-2-13 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-2-13 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["2-13"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-2-13 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期二 end -->

				<!-- 星期三 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-3-13 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["3-13"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-3-13 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-3-13 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["3-13"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-3-13 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-3-13 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["3-13"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-3-13 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-3-13 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["3-13"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-3-13 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-3-13 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["3-13"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-3-13 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-3-13 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["3-13"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-3-13 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-3-13 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["3-13"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-3-13 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期三 end -->

				<!-- 星期四 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-4-13 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["4-13"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-4-13 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-4-13 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["4-13"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-4-13 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-4-13 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["4-13"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-4-13 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-4-13 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["4-13"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-4-13 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-4-13 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["4-13"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-4-13 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-4-13 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["4-13"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-4-13 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-4-13 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["4-13"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-4-13 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期四 end -->

				<!-- 星期五 start -->
				<!-- 學士班資工組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom1-5-13 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal1["5-13"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse1-5-13 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom2-5-13 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal2["5-13"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse2-5-13 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=csieclassroom3-5-13 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal3["5-13"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse3-5-13 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=1) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=internationalclassroom1-5-13 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international1["5-13"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse1-5-13 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='1' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom2-5-13 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international2["5-13"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse2-5-13 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='2' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';

					echo "<td><font size='1' class='center-text'><select name=internationalclassroom3-5-13 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$international3["5-13"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=internationalcourse3-5-13 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='3' || $row['groupType']!=0) continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					echo "<td><font size='1' class='center-text'><select name=csieclassroom4-5-13 class='form-control'>";//這裡要改
					$classdata = $conn->query('select * from classroom;');
					$temp=$normal4["5-13"];//這裡要改
					if($temp != -1){
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroom = $conn->query("SELECT * FROM classroom WHERE classroomid = ".$idrow["classroom_id"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$classroom['classroom_no'].'</option>';
					}
					echo "<option></option>";
					while ($row = $classdata->fetch(PDO::FETCH_ASSOC))
						echo '<option>' . $row['classroom_no'] . '</option>';
					echo '</select><select name=csiecourse4-5-13 class="form-control">';//這裡要改
					$coursedata = $conn->query('select * from course_selection;');
					if($temp != -1){
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$idrow["professor_id"])->fetch(PDO::FETCH_ASSOC);
						$course = $conn->query("SELECT * FROM course_selection WHERE id = $temp")->fetch(PDO::FETCH_ASSOC);
						echo '<option>'.$course['courseName']."\<br>".$professor['teacher_name']."</option>";
					}
					echo "<option></option>";
					while ($row = $coursedata->fetch(PDO::FETCH_ASSOC)){
						if($row['semester'][0] !='4') continue;//這裡要改
						$professor = $conn->query("SELECT * FROM teachers WHERE teacherid = ".$row["teacherid"])->fetch(PDO::FETCH_ASSOC);
						echo '<option>'. $row['courseName'] ."\<br>".$professor['teacher_name']."</option>";
					}
					echo '</select></font></td>';
				?>
				<!-- AI碩 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 支援 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 星期五 end -->

		</tr>

		</tbody>
	</table>
	<div>
			<button name = "update" type="submit" class="btn btn-success btn-lg" >Save</button>
			<span><a href = "forschedule.php" class = "btn btn-danger"> Close</a></span>
	</div>

</center>
</html>
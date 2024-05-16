<link href="img/ndhu1.png" rel="icon" type="image"> 
<?php
	include "connect.php" ;
	$sql = "SELECT * FROM pre2_csie";
	$normal = $conn->query($sql);
	$sql1 = "SELECT * FROM pre2_international";
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
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>History Curriculum_Graduate 2</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.9/xlsx.full.min.js"></script>
</head>
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
	<table border="1" style="border-collapse:collapse;" id=graduate2>
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["1-1"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else {//當下有課並且為第一堂
						$temp=$normal4["1-1"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "1-1");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}	
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["2-1"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else {//當下有課並且為第一堂
						$temp=$normal4["2-1"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "2-1");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}	
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["3-1"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else {//當下有課並且為第一堂
						$temp=$normal4["3-1"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "3-1");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}	
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["4-1"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else {//當下有課並且為第一堂
						$temp=$normal4["4-1"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "4-1");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}	
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["5-1"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else {//當下有課並且為第一堂
						$temp=$normal4["5-1"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "5-1");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}	
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["1-2"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["1-2"] != -1 && $normal4["1-1"] != $normal4["1-2"]){//當下有課並且為第一堂
						$temp=$normal4["1-2"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "1-2");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["2-2"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["2-2"] != -1 && $normal4["2-1"] != $normal4["2-2"]){//當下有課並且為第一堂
						$temp=$normal4["2-2"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "2-2");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["3-2"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["3-2"] != -1 && $normal4["3-1"] != $normal4["3-2"]){//當下有課並且為第一堂
						$temp=$normal4["3-2"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "3-2");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["4-2"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["4-2"] != -1 && $normal4["4-1"] != $normal4["4-2"]){//當下有課並且為第一堂
						$temp=$normal4["4-2"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "4-2");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["5-2"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["5-2"] != -1 && $normal4["5-1"] != $normal4["5-2"]){//當下有課並且為第一堂
						$temp=$normal4["5-2"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "5-2");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["1-3"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["1-3"] != -1 && $normal4["1-2"] != $normal4["1-3"]){//當下有課並且為第一堂
						$temp=$normal4["1-3"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "1-3");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["2-3"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["2-3"] != -1 && $normal4["2-2"] != $normal4["2-3"]){//當下有課並且為第一堂
						$temp=$normal4["2-3"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "2-3");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["3-3"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["3-3"] != -1 && $normal4["3-2"] != $normal4["3-3"]){//當下有課並且為第一堂
						$temp=$normal4["3-3"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "3-3");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["4-3"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["4-3"] != -1 && $normal4["4-2"] != $normal4["4-3"]){//當下有課並且為第一堂
						$temp=$normal4["4-3"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "4-3");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["5-3"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["5-3"] != -1 && $normal4["5-2"] != $normal4["5-3"]){//當下有課並且為第一堂
						$temp=$normal4["5-3"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "5-3");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 777-->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["1-4"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["1-4"] != -1 && $normal4["1-3"] != $normal4["1-4"]){//當下有課並且為第一堂
						$temp=$normal4["1-4"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "1-4");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["2-4"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["2-4"] != -1 && $normal4["2-3"] != $normal4["2-4"]){//當下有課並且為第一堂
						$temp=$normal4["2-4"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "2-4");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["3-4"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["3-4"] != -1 && $normal4["3-3"] != $normal4["3-4"]){//當下有課並且為第一堂
						$temp=$normal4["3-4"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "3-4");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["4-4"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["4-4"] != -1 && $normal4["4-3"] != $normal4["4-4"]){//當下有課並且為第一堂
						$temp=$normal4["4-4"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "4-4");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["5-4"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["5-4"] != -1 && $normal4["5-3"] != $normal4["5-4"]){//當下有課並且為第一堂
						$temp=$normal4["5-4"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "5-4");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["1-5"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["1-5"] != -1 && $normal4["1-4"] != $normal4["1-5"]){//當下有課並且為第一堂
						$temp=$normal4["1-5"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "1-5");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["2-5"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["2-5"] != -1 && $normal4["2-4"] != $normal4["2-5"]){//當下有課並且為第一堂
						$temp=$normal4["2-5"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "2-5");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["3-5"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["3-5"] != -1 && $normal4["3-4"] != $normal4["3-5"]){//當下有課並且為第一堂
						$temp=$normal4["3-5"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "3-5");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["4-5"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["4-5"] != -1 && $normal4["4-4"] != $normal4["4-5"]){//當下有課並且為第一堂
						$temp=$normal4["4-5"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "4-5");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["5-5"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["5-5"] != -1 && $normal4["5-4"] != $normal4["5-5"]){//當下有課並且為第一堂
						$temp=$normal4["5-5"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "5-5");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["1-6"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["1-6"] != -1 && $normal4["1-5"] != $normal4["1-6"]){//當下有課並且為第一堂
						$temp=$normal4["1-6"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "1-6");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["2-6"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["2-6"] != -1 && $normal4["2-5"] != $normal4["2-6"]){//當下有課並且為第一堂
						$temp=$normal4["2-6"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "2-6");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["3-6"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["3-6"] != -1 && $normal4["3-5"] != $normal4["3-6"]){//當下有課並且為第一堂
						$temp=$normal4["3-6"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "3-6");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["4-6"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["4-6"] != -1 && $normal4["4-5"] != $normal4["4-6"]){//當下有課並且為第一堂
						$temp=$normal4["4-6"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "4-6");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["5-6"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["5-6"] != -1 && $normal4["5-5"] != $normal4["5-6"]){//當下有課並且為第一堂
						$temp=$normal4["5-6"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "5-6");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["1-7"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["1-7"] != -1 && $normal4["1-6"] != $normal4["1-7"]){//當下有課並且為第一堂
						$temp=$normal4["1-7"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "1-7");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["2-7"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["2-7"] != -1 && $normal4["2-6"] != $normal4["2-7"]){//當下有課並且為第一堂
						$temp=$normal4["2-7"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "2-7");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["4-7"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["4-7"] != -1 && $normal4["4-6"] != $normal4["4-7"]){//當下有課並且為第一堂
						$temp=$normal4["4-7"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "4-7");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["5-7"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["5-7"] != -1 && $normal4["5-6"] != $normal4["5-7"]){//當下有課並且為第一堂
						$temp=$normal4["5-7"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "5-7");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["1-8"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["1-8"] != -1 && $normal4["1-7"] != $normal4["1-8"]){//當下有課並且為第一堂
						$temp=$normal4["1-8"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "1-8");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["2-8"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["2-8"] != -1 && $normal4["2-7"] != $normal4["2-8"]){//當下有課並且為第一堂
						$temp=$normal4["2-8"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "2-8");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["4-8"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["4-8"] != -1 && $normal4["4-7"] != $normal4["4-8"]){//當下有課並且為第一堂
						$temp=$normal4["4-8"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "4-8");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["5-8"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["5-8"] != -1 && $normal4["5-7"] != $normal4["5-8"]){//當下有課並且為第一堂
						$temp=$normal4["5-8"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "5-8");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["1-9"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["1-9"] != -1 && $normal4["1-8"] != $normal4["1-9"]){//當下有課並且為第一堂
						$temp=$normal4["1-9"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "1-9");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["2-9"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["2-9"] != -1 && $normal4["2-8"] != $normal4["2-9"]){//當下有課並且為第一堂
						$temp=$normal4["2-9"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "2-9");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["3-9"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["3-9"] != -1 && $normal4["3-8"] != $normal4["3-9"]){//當下有課並且為第一堂
						$temp=$normal4["3-9"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "3-9");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["4-9"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["4-9"] != -1 && $normal4["4-8"] != $normal4["4-9"]){//當下有課並且為第一堂
						$temp=$normal4["4-9"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "4-9");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["5-9"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["5-9"] != -1 && $normal4["5-8"] != $normal4["5-9"]){//當下有課並且為第一堂
						$temp=$normal4["5-9"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "5-9");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["1-10"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["1-10"] != -1 && $normal4["1-9"] != $normal4["1-10"]){//當下有課並且為第一堂
						$temp=$normal4["1-10"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "1-10");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["2-10"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["2-10"] != -1 && $normal4["2-9"] != $normal4["2-10"]){//當下有課並且為第一堂
						$temp=$normal4["2-10"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "2-10");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["3-10"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["3-10"] != -1 && $normal4["3-9"] != $normal4["3-10"]){//當下有課並且為第一堂
						$temp=$normal4["3-10"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "3-10");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["4-10"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["4-10"] != -1 && $normal4["4-9"] != $normal4["4-10"]){//當下有課並且為第一堂
						$temp=$normal4["4-10"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "4-10");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["5-10"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["5-10"] != -1 && $normal4["5-9"] != $normal4["5-10"]){//當下有課並且為第一堂
						$temp=$normal4["5-10"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "5-10");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["1-11"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["1-11"] != -1 && $normal4["1-10"] != $normal4["1-11"]){//當下有課並且為第一堂
						$temp=$normal4["1-11"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "1-11");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["2-11"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["2-11"] != -1 && $normal4["2-10"] != $normal4["2-11"]){//當下有課並且為第一堂
						$temp=$normal4["2-11"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "2-11");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["3-11"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["3-11"] != -1 && $normal4["3-10"] != $normal4["3-11"]){//當下有課並且為第一堂
						$temp=$normal4["3-11"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "3-11");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["4-11"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["4-11"] != -1 && $normal4["4-10"] != $normal4["4-11"]){//當下有課並且為第一堂
						$temp=$normal4["4-11"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "4-11");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["5-11"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["5-11"] != -1 && $normal4["5-10"] != $normal4["5-11"]){//當下有課並且為第一堂
						$temp=$normal4["5-11"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "5-11");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["1-12"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["1-12"] != -1 && $normal4["1-11"] != $normal4["1-12"]){//當下有課並且為第一堂
						$temp=$normal4["1-12"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "1-12");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["2-12"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["2-12"] != -1 && $normal4["2-11"] != $normal4["2-12"]){//當下有課並且為第一堂
						$temp=$normal4["2-12"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "2-12");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["3-12"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["3-12"] != -1 && $normal4["3-11"] != $normal4["3-12"]){//當下有課並且為第一堂
						$temp=$normal4["3-12"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "3-12");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["4-12"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["4-12"] != -1 && $normal4["4-11"] != $normal4["4-12"]){//當下有課並且為第一堂
						$temp=$normal4["4-12"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "4-12");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["5-12"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["5-12"] != -1 && $normal4["5-11"] != $normal4["5-12"]){//當下有課並且為第一堂
						$temp=$normal4["5-12"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "5-12");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["1-13"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["1-13"] != -1 && $normal4["1-12"] != $normal4["1-13"]){//當下有課並且為第一堂
						$temp=$normal4["1-13"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "1-13");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["2-13"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["2-13"] != -1 && $normal4["2-12"] != $normal4["2-13"]){//當下有課並且為第一堂
						$temp=$normal4["2-13"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "2-13");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["3-13"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["3-13"] != -1 && $normal4["3-12"] != $normal4["3-13"]){//當下有課並且為第一堂
						$temp=$normal4["3-13"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "3-13");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["4-13"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["4-13"] != -1 && $normal4["4-12"] != $normal4["4-13"]){//當下有課並且為第一堂
						$temp=$normal4["4-13"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "4-13");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學士班國際組 -->
				<?php
					echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>";
                    echo "<td><font size='1' class='center-text'></font></td>"; 
				?>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<?php
					if($normal4["5-13"] == -1)//當下沒課
						echo "<td><font size='1' class='center-text'></font></td>";
					else if($normal4["5-13"] != -1 && $normal4["5-12"] != $normal4["5-13"]){//當下有課並且為第一堂
						$temp=$normal4["5-13"];
						$row = $conn->query("SELECT * FROM course_selection WHERE id =".$temp)->fetch(PDO::FETCH_ASSOC); 
						$num=$row["period"];
						$parts = explode('-', "5-13");$first=$parts[0];$last=$parts[1];
						$cnt=1;
						for( $i=1 ; $i < $num && $last + $i <=16 ; $i++, $cnt++){
							$str = $first . '-' . ($last + $i);
							if($normal4[$str]!= $temp)
								break;
						}
						echo "<td rowspan='".$cnt."'><font size='1' class='center-text'>";
						$idrow = $conn->query("SELECT * FROM mapping_id WHERE class_id =".$temp)->fetch(PDO::FETCH_ASSOC);
						$classroomid=$idrow["classroom_id"];$professorid=$idrow["professor_id"]; 
						$name=$row["courseName"];
						$maximum=$row["studentNumber"];
						$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
						$row1 = $conn->query("SELECT * FROM teachers WHERE teacherid = $professorid")->fetch(PDO::FETCH_ASSOC);
						echo $row["classroom_no"]."<br>".$name."\<br>".$row1["teacher_name"];
						if($maximum!=999)
							echo"<br>"."(".$maximum."/".$row["classroom_no_seat"].")<br>";
						echo "</font></td>";
						
					}
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
</center>
<button onclick="exportToExcel()">Export to Excel</button>

<script>
function exportToExcel() {
  var table = document.getElementById("graduate2");
  var wb = XLSX.utils.table_to_book(table, {sheet:"Sheet1"});
  XLSX.writeFile(wb, "History_Curriculum_Graduate2.xlsx");
}
</script>

</body>
</html>

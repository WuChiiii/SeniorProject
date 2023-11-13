<link href="img/ndhu1.png" rel="icon" type="image"> 
<?php
	include "connect.php" ;
	$sql = "SELECT * FROM normalschedule";
	$normal = $conn->query($sql);
	$sql1 = "SELECT * FROM internationalschedule";
	$international = $conn->query($sql1);
	$professor = "SELECT * FROM users";
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
				<td rowspan="0" class="center-text">
					<font size="1" class="center-text">學程</font>
				</td>
				<td rowspan="0" class="center-text">
					<font size="1" class="center-text">研究所 </font>
				</td>
				<td rowspan="0" class="center-text">
					<font size="1" class="center-text">AI碩</font>
				</td>
				<td rowspan="0" class="center-text">
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
				<td rowspan="2" class="center-text">
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
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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

		</tr>

		<!-- Row 3  -->
		<tr>
			<td width="30" align="center">
				<font size="1" color="black">
					<b>3 <br /> 08:10 <br /> 09:00</b>
				</font>

				<!-- 星期一 start -->
				<!-- 學士班資工組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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

			</td>

		</tr>

		<!-- Row 4  -->
		<tr>
			<td width="30" align="center">
				<font size="1" color="black">
					<b>4 <br /> 09:10 <br /> 10:00</b>
				</font>

				<!-- 星期一 start -->
				<!-- 學士班資工組 -->
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($normal1["1-4"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$normal1["1-4"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$normal1["1-4"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($normal2["1-4"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$normal2["1-4"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$normal2["1-4"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($normal3["1-4"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$normal3["1-4"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$normal3["1-4"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<!-- 學士班國際組 777-->
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($international1["1-4"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$international1["1-4"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$international1["1-4"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($international2["1-4"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$international2["1-4"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$international2["1-4"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($international3["1-4"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$international3["1-4"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$international3["1-4"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($normal4["1-4"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$normal4["1-4"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$normal4["1-4"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
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
					<font size="1" class="center-text">
						<?php 
							if ($normal1["2-4"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$normal1["2-4"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$normal1["2-4"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($normal2["2-4"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$normal2["2-4"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$normal2["2-4"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($normal3["2-4"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$normal3["2-4"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$normal3["2-4"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($international1["2-4"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$international1["2-4"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$international1["2-4"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($international2["2-4"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$international2["2-4"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$international2["2-4"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($international3["2-4"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$international3["2-4"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$international3["2-4"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($normal4["2-4"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$normal4["2-4"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$normal4["2-4"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
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
					<font size="1" class="center-text">
						<?php 
							if ($normal1["3-4"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$normal1["3-4"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$normal1["3-4"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($normal2["3-4"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$normal2["3-4"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$normal2["3-4"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($normal3["3-4"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$normal3["3-4"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$normal3["3-4"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($international1["3-4"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$international1["3-4"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$international1["3-4"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($international2["3-4"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$international2["3-4"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$international2["3-4"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($international3["3-4"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$international3["3-4"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$international3["3-4"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($normal4["3-4"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$normal4["3-4"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$normal4["3-4"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
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
					<font size="1" class="center-text">
						<?php 
							if ($normal1["4-4"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$normal1["4-4"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$normal1["4-4"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($normal2["4-4"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$normal2["4-4"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$normal2["4-4"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($normal3["4-4"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$normal3["4-4"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$normal3["4-4"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($international1["4-4"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$international1["4-4"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$international1["4-4"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($international2["4-4"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$international2["4-4"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$international2["4-4"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($international3["4-4"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$international3["4-4"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$international3["4-4"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($normal4["4-4"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$normal4["4-4"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$normal4["4-4"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
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
					<font size="1" class="center-text">
						<?php 
							if ($normal1["5-4"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$normal1["5-4"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$normal1["5-4"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($normal2["5-4"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$normal2["5-4"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$normal2["5-4"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($normal3["5-4"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$normal3["5-4"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$normal3["5-4"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($international1["5-4"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$international1["5-4"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$international1["5-4"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($international2["5-4"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$international2["5-4"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$international2["5-4"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<td>
					<font size="1" class="center-text">
					<?php 
							if ($international3["5-4"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$international3["5-4"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$international3["5-4"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($normal4["5-4"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$normal4["5-4"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$normal4["5-4"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
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
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
				<td rowspan="2" colspan="9">
					<font size="4" class="center-text"><center>全校統一不排課時間</center></font>
				</td>
				
				<!-- 星期四 start -->
				<!-- 學士班資工組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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

				<!-- 星期四 start -->
				<!-- 學士班資工組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($normal1["1-9"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$normal1["1-9"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$normal1["1-9"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($normal2["1-9"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$normal2["1-9"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$normal2["1-9"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($normal3["1-9"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$normal3["1-9"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$normal3["1-9"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($international1["1-9"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$international1["1-9"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$international1["1-9"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($international2["1-9"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$international2["1-9"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$internationa2["1-9"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($international3["1-9"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$international3["1-9"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$international3["1-9"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($normal4["1-9"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$normal4["1-9"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$normal4["1-9"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
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
					<font size="1" class="center-text">
						<?php 
							if ($normal1["2-9"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$normal1["2-9"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$normal1["2-9"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($normal2["2-9"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$normal2["2-9"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$normal2["2-9"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($normal3["2-9"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$normal3["2-9"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$normal3["2-9"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($international1["2-9"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$international1["2-9"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$international1["2-9"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($international2["2-9"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$international2["2-9"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$international2["2-9"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($international3["2-9"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$international3["2-9"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$international3["2-9"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<td>
					<font size="1" class="center-text">
					<?php 
							if ($normal4["2-9"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$normal4["2-9"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$normal4["2-9"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
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
					<font size="1" class="center-text">
						<?php 
							if ($normal1["3-9"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$normal1["3-9"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$normal1["3-9"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($normal2["3-9"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$normal2["3-9"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$normal2["3-9"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($normal3["3-9"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$normal3["3-9"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$normal3["3-9"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($international1["3-9"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$international1["3-9"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$international1["3-9"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($international2["3-9"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$international2["3-9"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$international2["3-9"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($international3["3-9"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$international3["3-9"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$international3["3-9"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($normal4["3-9"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$normal4["3-9"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$normal4["3-9"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
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
					<font size="1" class="center-text">
						<?php 
							if ($normal1["4-9"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$normal1["4-9"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$normal1["4-9"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($normal2["4-9"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$normal2["4-9"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$normal2["4-9"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($normal3["4-9"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$normal3["4-9"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$normal3["4-9"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($international1["4-9"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$international1["4-9"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$international1["4-9"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($international2["4-9"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$international2["4-9"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$international2["4-9"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($international3["4-9"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$international3["4-9"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$international3["4-9"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($normal4["4-9"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$normal4["4-9"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$normal4["4-9"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
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
					<font size="1" class="center-text">
						<?php 
							if ($normal1["5-9"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$normal1["5-9"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$normal1["5-9"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($normal2["5-9"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$normal2["5-9"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$normal2["5-9"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($normal3["5-9"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$normal3["5-9"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$normal3["5-9"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($international1["5-9"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$international1["5-9"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$international1["5-9"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($international2["5-9"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$international2["5-9"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$international2["5-9"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($international3["5-9"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$international3["5-9"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$international3["5-9"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
				</td>
				<!-- 學程 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 研究所 -->
				<td>
					<font size="1" class="center-text">
						<?php 
							if ($normal4["5-9"] != -1) {
								$row = $conn->query("SELECT * FROM classroompair WHERE classinfoid =".$normal4["5-9"])->fetch(PDO::FETCH_ASSOC);
								$classroomid=$row["classroom"];
								$row = $conn->query("SELECT * FROM course_selection WHERE id =".$normal4["5-9"])->fetch(PDO::FETCH_ASSOC);
								$professorid=$row["userid"];
								$name=$row["courseName"];
								$row = $conn->query("SELECT * FROM classroom WHERE classroomid = $classroomid")->fetch(PDO::FETCH_ASSOC);
								$row1 = $conn->query("SELECT * FROM users WHERE userid = $professorid")->fetch(PDO::FETCH_ASSOC);
								echo $row["classroom_no"]."<br>".$name."\<br>".$row1["name"];
							} else {
								echo "";
							}
						?>
					</font>
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
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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

		</tr>


		<tr>
			<td width="30" align="center">
				<font size="1" color="black">
					<b></b>
				</font>
			</td>

			<!-- 星期一 start -->
				<!-- 學士班資工組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<!-- 學士班國際組 -->
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
				</td>
				<td>
					<font size="1" class="center-text"></font>
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

		</tr>

		</tbody>
	</table>
</center>

</html>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead_sub.php'); ?>
<link rel="stylesheet" href="/assets/css/information.css" />
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
	<div class="jumbo-wall">
		<div class="container">
			<p>
				<small>우리문화예술의 정통성을 바탕으로 그 본류를 주도하고</small><br>
				미래를 선도하는 예술인 교육
			</p>
		</div>
	</div>
	<div class="page-nav">
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li><a href="#">입시정보</a></li>
				<!-- li class="active">수업자료실</li -->
				<li class="active dropdown">
					<a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">내신성적산출<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">경쟁률</a></li>
					</ul>
				</li>
			</ol>
		</div>
	</div>
	<main id="content" class="information grade">
		<div class="container">
			<section class="grade-info">
				<div class="section-header">
					<hr />
					<h3>성적등록</h3>
				</div>
				<div class="section-content">
					<form action="registration">
						<ul class="content-list">
							<li>
								<dl class="dl-inline">
									<dt>반영구분</dt>
									<dd>
										<label for="class"><input type="radio" name="#" id="class" checked>&nbsp;등급표기과목</label>
										<label for="move-up"><input type="radio" name="#" id="move-up">&nbsp;석차표기과목</label>
									</dd>
								</dl>
							</li>
							<li>
								<dl class="dl-inline">
									<dt><label for="absence">해당학년 사고 결석일수</label></dt>
									<dd>
										<input type="text" name="#" id="absence">&nbsp;일
									</dd>
								</dl>
							</li>
						</ul>
						<div class="table-wrap">
							<table class="table table-border">
								<colgroup>
									<col style="width: 142px;"/>
									<col style="width: 257px;"/>
									<col style="width: 257px;"/>
									<col style="width: 257px;"/>
									<col style="width: 257px;"/>
								</colgroup>
								<thead>
									<tr>
										<th rowspan="2">학년</th>
										<th colspan="2">1학기</th>
										<th colspan="2">2학기</th>
									</tr>
									<tr>
										<th>1과목 이수단위/석차등급</th>
										<th>2과목 이수단위/석차등급</th>
										<th>1과목 이수단위/석차등급</th>
										<th>2과목 이수단위/석차등급</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1(2)학년</td>
										<td>
											<label for="complete1-1-1" class="sr-only">1(2)학년 1학기 1과목 이수단위</label>
											<input type="text" name="#" id="complete1-1-1" >
											/
											<label for="class1-1-1" class="sr-only">1(2)학년 1학기 1과목 석차등급</label>
											<input type="text" name="#" id="class1-1-1" >
										</td>
										<td>
											<label for="complete1-1-2" class="sr-only">1(2)학년 1학기 2과목 이수단위</label>
											<input type="text" name="#" id="complete1-1-2" >
											/
											<label for="class1-1-2" class="sr-only">1(2)학년 1학기 2과목 석차등급</label>
											<input type="text" name="#" id="class1-1-2" >
										</td>
										<td>
											<label for="complete1-2-1" class="sr-only">1(2)학년 2학기 1과목 이수단위</label>
											<input type="text" name="#" id="complete1-2-1" >
											/
											<label for="class1-2-1" class="sr-only">1(2)학년 2학기 1과목 석차등급</label>
											<input type="text" name="#" id="class1-2-1" >
										</td>
										<td>
											<label for="complete1-2-2" class="sr-only">1(2)학년 2학기 1과목 이수단위</label>
											<input type="text" name="#" id="complete1-2-2" >
											/
											<label for="class1-2-2" class="sr-only">1(2)학년 2학기 2과목 석차등급</label>
											<input type="text" name="#" id="class1-2-2" >
										</td>
									</tr>
									<tr>
										<td>2(3)학년</td>
										<td>
											<label for="complete2-1-1" class="sr-only">2(3)학년 1학기 1과목 이수단위</label>
											<input type="text" name="#" id="complete2-1-1" >
											/
											<label for="class2-1-1" class="sr-only">2(3)학년 1학기 1과목 석차등급</label>
											<input type="text" name="#" id="class2-1-1" >
										</td>
										<td>
											<label for="complete2-1-2" class="sr-only">2(3)학년 1학기 2과목 이수단위</label>
											<input type="text" name="#" id="complete2-1-2" >
											/
											<label for="class2-1-2" class="sr-only">2(3)학년 1학기 2과목 석차등급</label>
											<input type="text" name="#" id="class2-1-2" >
										</td>
										<td>
											<label for="complete2-2-1" class="sr-only">2(3)학년 2학기 1과목 이수단위</label>
											<input type="text" name="#" id="complete2-2-1" >
											/
											<label for="class2-2-1" class="sr-only">2(3)학년 2학기 1과목 석차등급</label>
											<input type="text" name="#" id="class2-2-1" >
										</td>
										<td>
											<label for="complete2-2-2" class="sr-only">2(3)학년 2학기 1과목 이수단위</label>
											<input type="text" name="#" id="complete2-2-2" >
											/
											<label for="class2-2-2" class="sr-only">2(3)학년 2학기 2과목 석차등급</label>
											<input type="text" name="#" id="class2-2-2" >
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</form>
					<div class="btn-area">
						<p>
							<button type="submit" class="btn btn-pink">내신성적확인</button>
							<a class="btn btn-gray" href="#" role="button">입력값초기화</a>
						</p>
					</div>
				</div>
			</section>
			<section class="caution">
				<div class="section-header">
					<hr />
					<h3>내신성적산출 주의사항</h3>
				</div>
				<div class="section-content">
					<ul class="content-list">
						<li>
							본교의 입학전형 시 수험생의 학생부성적은 비실기/비면접학과는 과목성적(80%, 800점)과 출석성적 (20%, 200점)으로 총 1000점 만점이며,<br>
							실기/면접학과는 과목성적(80%, 400점)과 출석성적(20%, 100점)으로 구성되며 총 500점 만점입니다.
						</li>
						<li>
							수험생의 학생부성적 모의 산출을 위해서는 고교 1,2학년 또는 2,3학년 과목별 성적의 이수단위, 석차등급(석차, 재적수)을   정확하게 입력하여야만이<br>본교 입학사정 기준의 정확한 내신성적을 구할 수 있습니다.
						</li>
						<li>먼저 과목성적입력 시 반영구분에서 등급표기과목으로 평가 받을지 석차표기과목으로 평가 받을 것인지를 선택합니다.</li>
						<li>
							교과목 반영방법
							<div class="table-wrap">
								<table class="table table-border">
									<colgroup>
										<col style="width: 120px; "/>
										<col style="width: 216px; "/>
										<col style="width: 811px; "/>
									</colgroup>
									<thead>
										<tr>
											<th>전형</th>
											<th>반영교과</th>
											<th>학과</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td rowspan="3">일반전형<br>특별전형<br>농어촌출신자<br>기초생활수급자</td>
											<td>국어, 음악</td>
											<td>미디어음악과, 뮤지컬과, 실용댄스과, 실용음악과, 음악과</td>
										</tr>
										<tr>
											<td>국어, 미술</td>
											<td>시각디자인과, 뷰티아트과, 사진과, 전시디자인과, 무대디자인과</td>
										</tr>
										<tr>
											<td>국어, 사회</td>
											<td>방송연예과, 모델과, 방송시나리오극작과, 연예매니지먼트과</td>
										</tr>
									</tbody>
								</table>
							</div>
						</li>
						<li>과목별 성적 입력 시 위의 교과목 반영방법에 따라 각 학년별 학기별 취득한 성적을 정확하게 입력합니다.</li>
						<li>입력된 성적이 숫자가 아닌 다른 문자 등으로 입력되거나 기타 규정에 위배되게 입력된 경우, 그 과목은 성적계산시  적용되지 않습니다.</li>
						<li>출석성적은 선택하신 평가 학년동안 발생한 사고 결석일수만을 기재합니다. 비실기/비면접학과는 200점, 실기/면접학과는 100점 만점입니다.</li>
						<li>수험생의 성적이 과목별 석차가 없고 계열별 석차만 있는 경우는 계열별 석차 및 정원을 각 학년별 학기별로 과목성적 입력란에 입력하여도 동일한 결과를 보입니다.</li>
						<li>각 학기별 석차 및 정원 구분이 없고 학년 단위의 석차 및 정원만 있는 경우는 1학기나 2학기 어느곳에 입력하여도 동일한 결과를 보입니다.</li>
					</ul>
				</div>
			</section>
		</div>
	</main>
<style>
/* grade */
.information.grade .container {
	padding-bottom:140px;
}
.information.grade .container .grade-info .section-content .content-list {
	margin-bottom:40px;
}
.information.grade .container .grade-info .section-content .content-list li:first-child .dl-inline dt {
	margin-right:20px;
}
.information.grade .container .grade-info .section-content .content-list li .dl-inline dt {
	font-size:16px;
	color:#333;
	margin-right:10px;
	font-weight:400;
}
.information.grade .container .grade-info .section-content .content-list li .dl-inline dt:after {
	content:"";
}
.information.grade .container .grade-info .section-content .content-list li .dl-inline dt label {
	font-size:16px;
	color:#333;
	font-weight:400;
}
.information.grade .container .grade-info .section-content .content-list li:first-child .dl-inline dd input:last-child {
	margin-left:10px;
}
.information.grade .container .grade-info .section-content .content-list li .dl-inline dd {
	font-size:16px;
}
.information.grade .container .grade-info .section-content .content-list li .dl-inline dd label {
	font-size:16px;
	font-weight:300;
	color:#333;
}
.information.grade .container .grade-info .section-content .content-list li:last-child {
	background-position:0 12px;
}
.information.grade .container .grade-info .section-content .content-list li:last-child .dl-inline dd input {
	width:90px;
	height:33px;
}
.information.grade .container .grade-info .section-content .table-wrap .table tbody tr td {
	text-align:center;
	padding:8px 0;
}
.information.grade .container .grade-info .section-content .table-wrap .table tbody tr td input {
	width:66px; 
	height:26px;
}
.information.grade .container .grade-info .section-content .table-wrap .table tbody tr td input:nth-of-type(1) {
	margin-right:10px;
}
.information.grade .container .grade-info .section-content .table-wrap .table tbody tr td input:nth-of-type(2) {
	margin-left:10px;
}
.information.grade .container .grade-info .section-content .btn-area {
	margin-top:40px;
	text-align:center;
}
.information.grade .container .grade-info .section-content .btn-area .btn-pink{ 
	margin-right:10px;
}
.information.grade .container .caution .section-content .content-list li .table-wrap .table {
	margin:15px 0;
}
.information.grade .container .caution .section-content .content-list li .table-wrap .table tbody tr:first-child {
	border-bottom:1px solid #ccc;
}
.information.grade .container .caution .section-content .content-list li .table-wrap .table tbody tr td {
	padding:10px 14px;
	text-align:center;
}
.information.grade .container .caution .section-content .content-list li .table-wrap .table tbody tr td:last-child {
	text-align:left;
}
</style>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>

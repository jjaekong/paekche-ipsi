<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead_sub.php'); ?>
<link rel="stylesheet" href="/assets/css/entrance.css" />
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
				<li><a href="#">입학 Q&A</a></li>
				<!-- li class="active">수업자료실</li -->
				<li class="active dropdown">
					<a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">입학 Q&A<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">입학 Q&A</a></li>
					</ul>
				</li>
			</ol>
		</div>
	</div>
	<main id="content" class="entrance qna-write">
		<div class="container">
			<section class="write">
				<div class="section-header">
					<hr />
					<h3>입학 Q&A</h3>
				</div>
				<div class="section-content">
					<form class="notice-form">
						<table class="table">
							<colgroup>
								<col style="width: 140px"/>
								<col style="width: 1030px"/>
							</colgroup>
							<tbody>
								<tr class="writer">
									<th>작성자</th>
									<td>입학처</td>
								</tr>
								<tr class="subject">
									<th><label for="subject">제목</label></th>
									<td><input type="text" id="subject" class="form-control"/></td>
								</tr>
								<tr class="text-content">
									<th><label for="text-content">내용</label></th>
									<td><textarea id="text-content" class="form-control"></textarea></td>
								</tr>
								<tr class="file">
									<th><label for="file" class="attach">첨부파일</label></th>
									<td><input type="file" id="file" class="form-control"/></td>
								</tr>
								<tr class="password">
									<th><label for="password">비밀번호</label></th>
									<td><input type="password" id="password" class="form-control"/></td>
								</tr>
							</tbody>
						</table>
					</form>
				</div>
				<div class="btn-area">
				<p>
					<button type="submit" class="btn btn-pink">확인</button>
					<a class="btn btn-gray" href="#" role="button">취소</a>
				</p>
			</div>
			</section>
		</div>
	</main>
<style>
/* qna-write */
.entrance.qna-write .container .write {padding-bottom:140px; }
.entrance.qna-write .container .write .section-header {padding:63px 0 43px 0; }
.entrance.qna-write .container .write .section-content .notice-form .table {
	border-top:2px solid #555; 
}
.entrance.qna-write .container .write .section-content .notice-form .table tbody tr {
	height:50px;
}
.entrance.qna-write .container .write .section-content .notice-form .table tbody tr:nth-of-type(3) {
	height:240px;
}
.entrance.qna-write .container .write .section-content .notice-form .table tbody tr:nth-of-type(3) th {
	vertical-align:middle;
}
.entrance.qna-write .container .write .section-content .notice-form .table tbody tr th {
	background-color:#f9f9f9;
	border-left:1px solid #ccc; 
	font-weight:400; 
	padding-left:40px; 
	vertical-align:middle; 
	color:#333;
}
.entrance.qna-write .container .write .section-content .notice-form .table tbody tr td {
	padding:10px 20px; 
	border-right:1px solid #ccc; 
	border-left:1px solid #ccc; 
	vertical-align:middle; 
}
.entrance.qna-write .container .write .section-content .notice-form .table tbody tr:last-child {
	border-bottom:1px solid #ccc; 
}
.entrance.qna-write .container .write .section-content .notice-form .table tbody tr th label {
	font-weight:400; 
}
.entrance.qna-write .container .write .section-content .notice-form .table tbody tr td input {
	width:100%; 
	height:30px; 
	border-radius:0; 
}
.entrance.qna-write .container .write .section-content .notice-form .table tbody .file input {
	width:286px !important; 
}
.entrance.qna-write .container .write .section-content .notice-form .table tbody .password input {
	width:286px; 
}
.entrance.qna-write .container .write .section-content .notice-form .table tbody .file label {
	background-image:url('/assets/images/sub/attach.png');
	background-size:11px auto;
	background-repeat:no-repeat;
	background-position:55px 4px;
	width:80px;
}
.entrance.qna-write .container .write .section-content .notice-form .table tbody tr td .form-control {box-shadow:none !important; }
.entrance.qna-write .container .write .section-content .notice-form .table tbody tr td .form-control:focus {border-color:#ccc; }
.entrance.qna-write .container .write .section-content .notice-form .table tbody tr td textarea {
	width:100%; 
	height:210px;
	padding:6px 12px; 
	border-radius:0; 
}

.entrance.qna-write .container .write .btn-area {
	margin-top:20px; 
	text-align:center; 
}
.entrance.qna-write .container .write .btn-area .btn-pink {
	margin-right:10px; 
}
</style>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>

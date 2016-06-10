<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
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
				<li><a href="#">자료실</a></li>
				<!-- li class="active">수업자료실</li -->
				<li class="active dropdown">
					<a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">수업자료실 <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">수업자료실</a></li>
						<li><a href="#">학생작품갤러리</a></li>
					</ul>
				</li>
			</ol>
		</div>
	</div>
	<main id="content">
		<div class="container">
			<section class="sub">
				<div class="section-header">
					<hr />
					<h3>일반 전형</h3>
				</div>
				<div class="table-wrap">
					<table class="table table-border">
						<colgroup>
							<col style="width: 100px"/>
							<col style="width: 100px"/>
							<col style="width: 100px"/>
							<col style="width: 100px"/>
						</colgroup>
						<thead>
							<tr>
								<th>제목</th>
								<th>제목</th>
								<th>제목</th>
								<th>제목</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>내용</td>
								<td>내용</td>
								<td>내용</td>
								<td>내용</td>
							</tr>
							<tr>
								<td>내용</td>
								<td>내용</td>
								<td>내용</td>
								<td>내용</td>
							</tr>
						</tbody>
					</table>
				</div>

				<ul class="content-list" style="margin:30px 0;">
					<li>고등학교 졸업자 또는 2016년 2월 고등학교 졸업예정자</li>
					<li>고등학교 졸업자 또는 2016년 2월 고등학교 졸업예정자</li>
					<li>고등학교 졸업자 또는 2016년 2월 고등학교 졸업예정자</li>
				</ul>
				<ol class="circle-list" style="margin:30px 0;">
					<li>지방자치법 제3조에 의한 읍면(도서·벽지)에 소재한 고등학교의 전 교육과정을 이수하고,</li>
					<li>고등학교 재학기간 동안 본인과 부모 모두가 농어촌 지역에 거주한 자로서 출신 고등학교장의 확인을 받은 자.</li>
				</ol>

				<div class="btn-area">
					<p>
						<a class="btn btn-sm btn-gray" href="#" role="button">목록</a>
						<a class="btn btn-sm btn-white" href="#" role="button">수정</a>
						<a class="btn btn-sm btn-white" href="#" role="button">삭제</a>
						<a class="btn btn-sm btn-pink" href="#" role="button">글쓰기</a>
					</p>
				</div>

				<div class="btn-area">
					<p>
						<button type="submit" class="btn btn-pink">확인</button>
						<a class="btn btn-gray" href="#" role="button">취소</a>
					</p>
				</div>

				<nav class="paging">
					<ul class="pagination">
						<li>
							<a href="#" aria-label="first-Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li>
						<li>
							<a href="#" aria-label="Previous">
								<span aria-hidden="true">&lsaquo;</span>
							</a>
						</li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li>
							<a href="#" aria-label="Next" >
								<span aria-hidden="true">&rsaquo;</span>
							</a>
						</li>
						<li>
							<a href="#" aria-label="end-Next">
								<span aria-hidden="true">&raquo;</span>
							</a>
						</li>
					</ul>
				</nav>

				<div class="search-area" style="margin:30px 0;">
					<form>
						<div class="form-group">
							<label for="search-keyword" class="sr-only">검색어</label>
							<input type="text" name="#" id="search-keyword" class="form-control" placeholder="Search">
						</div>
						<button type="submit" class="btn"><span class="glyphicon glyphicon-search"></span><span class="sr-only">검색</span></button>
					</form>
				</div>

			</section>
		</div>
	</main>
<style>
.content-container {width:1170px; margin:0 auto; }
/* 공통 section-header */
.section-header {padding:70px 0 40px 0; }
.section-header hr {
	width:24px; 
	border: 1px solid #000;
	display: inline-block;
	margin-bottom:12px;
}
.section-header h3 {
	margin:0;
	font-size:30px;
	color:#0d0d0d;
	font-weight:300;
}

/* 공통 table-wrap */
/* 공통 table-border  ,  table */
.table-wrap .table-border {
	border-top:2px solid #555; 
	border-left:1px solid #ccc; 
	border-right:1px solid #ccc;
}
.table-wrap .table thead {
	background-color:#f9f9f9; 
}
.table-wrap .table thead th {
	border-bottom:0; 
	border-right:1px solid #ccc; 
}
.table-wrap .table thead th:last-child {
	border-right:0; 
}
.table-wrap .table tbody tr:last-child {
	border-bottom:1px solid #ccc; 
}
.table-wrap .table tbody tr td {
	border-right:1px solid #ccc;
}
.table-wrap .table tbody tr td:last-child {
	border-right:0; 
}

/* 공통 content-list */
.content-list { }
.content-list li { 
	background-image:url('/assets/images/sub/r_arrow_l.png');
	background-size:5px auto;
	background-repeat:no-repeat;
	background-position:0 7px;
	padding-left:20px;
	font-size:15px; 
	color:#666;
	line-height:24px;
}
/* circle-list */
.circle-list {
	padding-left:0; 
}
.circle-list > li {
	position:relative; 
	padding-left:20px; 
	counter-increment:my-list-index; 
	letter-spacing:-1px; 
	font-size:14px;
	color:#666;
	line-height:20px;
}
.circle-list > li:before {
	position:absolute; 
	left:0; 
	top:5px; 
	display:inline-block; 
	margin-right:5px; 
	width:12px; 
	height:12px; 
	border-radius:50%; 
	border:1px solid #333; line-height:10px; 
	content:counter(my-list-index); 
	font-size:11px; 
	text-align:center; 
	line-height:10px; 
}

/* btn-sm */
.btn-area {
	margin:30px 0 30px 0; 
}
.btn-area .btn-sm {
	width:90px; 
	height:30px !important; 
	border-radius:0; 
	font-size:14px; 
	text-decoration:none; 
	color:#fff; 
	text-align:center; 
	padding:0; 
	line-height:28px !important; 
}
.btn-area .btn-gray {
	background-color:#333; 
}
.btn-area .btn-pink {
	background-color:#d22d36; 
}
.btn-area .btn-white {
	background-color:#fff; 
	border:1px solid #ccc;
	width:60px; 
	color:#666 !important; 
}

/* btn */
.btn-area .btn {
	width:100px; 
	height:40px; 
	border-radius:0; 
	font-size:14px; 
	text-decoration:none; 
	color:#fff; 
	text-align:center; 
	padding:0; 
	line-height:40px; 
}
.btn-area .btn:hover {
	opacity:0.8;
}

/* paging */
.paging .pagination .active a {
	border-radius:19px !important; 
	background-color:#333; 
	color:#fff; 
	width:32px; 
}
.paging .pagination .active a:hover {
	background-color:#333 !important; 
	color:#fff; 
	text-decoration:none; 
}
.paging .pagination a {
	color:#666; 
	font-size:14px; 
	border-radius:0 !important; 
	border:0; 
}
.paging .pagination a:hover {
	text-decoration:underline; 
	background-color:#fff !important; 
}

/* search-area */
.search-area {
	position:relative; 
	margin-bottom:40px; 
}
.search-area .form-control {
	border-radius:0; 
	height:40px; 
	box-shadow:none; 
	width:1101px;
}
.search-area .form-control:hover {
	border-color:#ccc; 
}
.search-area button {
	position:absolute; 
	top:0; 
	right:0; 
	width:100px; 
	height:40px; 
	border-radius:0; 
	border:1px solid #ccc; 
	border-left:0; 
	background-color:#fff; 
}
</style>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
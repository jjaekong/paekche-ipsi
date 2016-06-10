<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css" />
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
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
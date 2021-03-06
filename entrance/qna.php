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
	<main id="content" class="entrance qna">
		<div class="container">
			<section class="qna-list">
				<div class="section-header">
					<hr />
					<h3>입학 Q&A</h3>
				</div>
				<div class="section-content">
					<div class="search-area">
						<form>
							<div class="form-group">
								<label for="search-keyword" class="sr-only">검색어</label>
								<input type="text" name="#" id="search-keyword" class="form-control" placeholder="Search">
							</div>
							<button type="submit" class="btn"><span class="glyphicon glyphicon-search"></span><span class="sr-only">검색</span></button>
						</form>
					</div>
					<div class="table-wrap">
						<table class="table">
							<colgroup>
								<col style="width: 120px"/>
								<col style="width: 750px"/>
								<col style="width: 100px"/>
								<col style="width: 100px"/>
								<col style="width: 100px"/>
							</colgroup>
							<thead>
								<tr>
									<th>번호</th>
									<th>제목</th>
									<th>작성자</th>
									<th>등록일</th>
									<th>조회</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>10</td>
									<td><a href="#">미디어음악 kpop 보컬과 질문합니다</a><img src="/assets/images/sub/lock.png" alt="비밀글" class="lock"></td>
									<td>홍종보</td>
									<td>2016.01.20</td>
									<td>46</td>
								</tr>
								<tr>
									<td>9</td>
									<td><a href="#">ㄴ 미디어음악 kpop 보컬과 질문합니다</a><img src="/assets/images/sub/lock.png" alt="비밀글" class="lock"></td>
									<td>입학처</td>
									<td>2016.01.19</td>
									<td>57</td>
								</tr>
								<tr>
									<td>8</td>
									<td><a href="#">17학년도 입시</a></td>
									<td>박상준</td>
									<td>2016.01.04</td>
									<td>8</td>
								</tr>
								<tr>
									<td>7</td>
									<td><a href="#">출석에관해서</a><span class="new">N</span></td>
									<td>권지은</td>
									<td>2015.12.13</td>
									<td>65</td>
								</tr>
								<tr>
									<td>6</td>
									<td><a href="#">17년도 사진과 입시에대해 여쭤봅니다</a></td>
									<td>김경훈</td>
									<td>2015.12.09</td>
									<td>78</td>
								</tr>
								<tr>
									<td>5</td>
									<td><a href="#">문의드립니다</a></td>
									<td>석진주</td>
									<td>2015.11.23</td>
									<td>12</td>
								</tr>
								<tr>
									<td>4</td>
									<td><a href="#">물어볼 게 있습니다</a></td>
									<td>최현석</td>
									<td>2015.11.17</td>
									<td>34</td>
								</tr>
								<tr>
									<td>3</td>
									<td><a href="#">16년도 2학기복학</a></td>
									<td>이지윤</td>
									<td>2015.10.13</td>
									<td>12</td>
								</tr>
								<tr>
									<td>2</td>
									<td><a href="#">연매과 내신과 수업장소</a></td>
									<td>정초연</td>
									<td>2015.09.07</td>
									<td>78</td>
								</tr>
								<tr>
									<td>1</td>
									<td><a href="#">17학년도 입시</a></td>
									<td>김국태</td>
									<td>2015.08.07</td>
									<td>45</td>
								</tr>
							</tbody>
						</table>
					</div>
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
					<div class="btn-area">
						<p>
							<a class="btn btn-sm btn-pink" href="#" role="button">글쓰기</a>
						</p>
					</div>
				</nav>
			</section>
		</div>
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>

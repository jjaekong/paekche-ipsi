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
					<a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">경쟁률<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="/information/notice.php">공지사항</a></li>
						<li><a href="/information/faq_all.php">FAQ</a></li>
						<li><a href="/information/competition.php">경쟁률</a></li>
						<li><a href="/information/data.php">자료실</a></li>
						<li><a href="/information/star_list.php">백제스타</a></li>
						<li><a href="/information/grade.php">내신성적산출</a></li>
						<li><a href="/information/ipsidata.php">입시자료신청</a></li>
					</ul>
				</li>
			</ol>
		</div>
	</div>
	<main id="content" class="information competition">
		<div class="container">
			<section class="competition-list">
				<div class="section-header">
					<hr />
					<h3>경쟁률</h3>
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
								<col style="width: 950px"/>
								<col style="width: 100px"/>
							</colgroup>
							<thead>
								<tr>
									<th>번호</th>
									<th>제목</th>
									<th>조회</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>10</td>
									<td><a href="#">2016학년도 정시 경쟁률 [최종]</a></td>
									<td>46</td>
								</tr>
								<tr>
									<td>9</td>
									<td><a href="#">2016학년도 수시2차 경쟁률 [최종]</a></td>
									<td>57</td>
								</tr>
								<tr>
									<td>8</td>
									<td><a href="#">2016학년도 수시1차 경쟁률 [최종]</a></td>
									<td>8</td>
								</tr>
								<tr>
									<td>7</td>
									<td><a href="#">2015학년도 정시 경쟁률 [최종]</a></td>
									<td>65</td>
								</tr>
								<tr>
									<td>6</td>
									<td><a href="#">2015학년도 수시2차 경쟁률 [최종]</a></td>
									<td>78</td>
								</tr>
								<tr>
									<td>5</td>
									<td><a href="#">2015학년도 수시1차 경쟁률 [최종]</a></td>
									<td>12</td>
								</tr>
								<tr>
									<td>4</td>
									<td><a href="#">2014학년도 정시 경쟁률 [최종]</a></td>
									<td>34</td>
								</tr>
								<tr>
									<td>3</td>
									<td><a href="#">2014학년도 수시2차 경쟁률 [최종]</a></td>
									<td>12</td>
								</tr>
								<tr>
									<td>2</td>
									<td><a href="#">2016학년도 정시 경쟁률 [최종]</a></td>
									<td>78</td>
								</tr>
								<tr>
									<td>1</td>
									<td><a href="#">2016학년도 수시2차 경쟁률 [최종]</a></td>
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

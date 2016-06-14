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
	<main id="content" class="entrance qna-view">
		<section class="container">
			<div class="section-header">
				<hr />
				<h3>입학 Q&A</h3>
			</div>
			<article class="article-header">
				<h4>미디어음악과 실기 및 면접 안내</h4>
				<dl>
					<dt class="sr-only">작성자</dt>
					<dd class="writer">학과사무실</dd>
					<dt class="sr-only">등록일</dt>
					<dd class="date">2016.01.20</dd>
				</dl>
			</article>
			<article class="article-content">
				미디어음악과 실기 및 면접에 관한 안내 사항입니다.<br>
				문의가 많은 k-pop 미디 작.편곡 실기에 관해 다시 공지해드립니다. 
			</article>
			<article class="article-footer">
				<dl class="attach">
					<dt><a href="#">첨부파일</a></dt>
					<dd><a href="#">면접안내.hwp,</a></dd>
					<dd><a href="#">면접안내.doc,</a></dd>
					<dd><a href="#">noname_test001.txt</a></dd>
				</dl>
			</article>
			<p><a href="#">2016년도 수강신청문의요!</a></p>
			<p><a href="#">휴학신청서</a></p>
			<div class="btn-area">
				<p>
					<a class="btn btn-sm btn-gray" href="#" role="button">목록</a>
				</p>
				<p>
					<a class="btn btn-sm btn-white" href="#" role="button">수정</a>
					<a class="btn btn-sm btn-white" href="#" role="button">삭제</a>
					<a class="btn btn-sm btn-pink" href="#" role="button">글쓰기</a>
				</p>
			</div>
		</section>
	</main>
<style>
/* qna-view */
.entrance.qna-view .container {padding-bottom:140px; }
.entrance.qna-view .container .section-header {padding:63px 0 43px 0; }
.entrance.qna-view .container .article-header {
	height:45px; 
	border-top:2px solid #333;
	border-bottom:1px solid #ccc;
	background-color:#f9f9f9;
	padding:0 36px 0 36px;
	overflow:hidden;
}
.entrance.qna-view .container .article-header h4 {
	margin:0px;
	font-size:14px;
	color:#333;
	display:inline;
	line-height:45px;
}
.entrance.qna-view .container .article-header dl {
	overflow:hidden;
	float:right;
}
.entrance.qna-view .container .article-header dl dt {float:left; }
.entrance.qna-view .container .article-header dl .writer {
	float:left;
	line-height:45px;
	padding-right:10px;
	font-size:13px;
	color:#333;
}
.entrance.qna-view .container .article-header dl .date {
	float:left;
	line-height:45px;
	font-size:13px;
	color:#333;
}
.entrance.qna-view .container .article-header dl .date:before { 
	content:"|"; 
	padding-right:10px;
}
.entrance.qna-view .container .article-content {
	height:300px; 
	color:#333; 
	font-size:15px;
	padding:27px 35px;
}
.entrance.qna-view .container .article-footer {
	padding:30px 38px;
	border-bottom:1px solid #ccc;
}
.entrance.qna-view .container .article-footer .attach{overflow:hidden; }
.entrance.qna-view .container .article-footer .attach dt {
	background-image:url('/assets/images/sub/attach.png');
	background-size:11px auto;
	background-repeat:no-repeat;
	background-position:0 4px;
	padding-left:20px;
	font-size:14px;
	font-weight:300;
	margin-bottom:10px;
	10px;
	color:#666; 
}
.entrance.qna-view .container .article-footer .attach dt a {color:#666; }
.entrance.qna-view .container .article-footer .attach dd:nth-of-type(1) {
	padding-left:20px;
	margin-left:0;
}
.entrance.qna-view .container .article-footer .attach dd {
	float:left;
	margin-left:3px;
	font-size:13px;
}
.entrance.qna-view .container .article-footer .attach dd a {color:#222;}
.entrance.qna-view .container > p a {color:#666; }
.entrance.qna-view .container > p {
	height:40px; 
	line-height:40px; 
	font-size:14px; 
	color:#666; 
	border-bottom:1px solid #ccc;
}
.entrance.qna-view .container > p:nth-of-type(1) {
	background-image:url('/assets/images/sub/top_arrow.png');
	background-size:10px auto;
	background-repeat:no-repeat;
	background-position:40px 50%;
	padding-left:78px;
}
.entrance.qna-view .container > p:nth-of-type(2) {
	background-image:url('/assets/images/sub/bottom_arrow.png');
	background-size:12px auto;
	background-repeat:no-repeat;
	background-position:39px 50%;
	padding-left:78px;
}
.entrance.qna-view .container .btn-area {overflow:hidden; margin-top:20px; }
.entrance.qna-view .container .btn-area p:nth-of-type(1) {float:left; }
.entrance.qna-view .container .btn-area p:nth-of-type(2) {float:right; }
.entrance.qna-view .container .btn-area p:nth-of-type(2) .btn-white {width:60px !important; margin-right:10px; }
.entrance.qna-view .container .btn-area p:nth-of-type(2) .btn-gray {width:90px !important; }
.entrance.qna-view .container .btn-area p:nth-of-type(2) .btn-pink {width:90px !important; }
</style>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>

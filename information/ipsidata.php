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
					<a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">입시자료신청<span class="caret"></span></a>
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
	<main id="content" class="information ipsidata">
		<section class="container">
			<div class="section-header">
				<hr />
				<h3>입시자료신청</h3>
			</div>
			<div class="section-content">
				<form>
					<div class="table-wrap">
						<table class="table table-border">
							<colgroup>
								<col style="width: 140px"/>
								<col style="width: 1030px"/>
							</colgroup>
							<tbody>
								<tr class="user-name">
									<th><label for="user-name">이름</label></th>
									<td><input type="text" name="#" id="user-name"></td>
								</tr>
								<tr class="user-email">
									<th><label for="user-email">이메일</label></th>
									<td><input type="email" name="#" id="user-email" ></td>
								</tr>
								<tr class="user-tel">
									<th>전화번호</th>
									<td>
										<select>
											<option value="선택">선택</option>
											<option value="서울">02</option>
										</select>
										-
										<label for="user-tel-2" class="sr-only"></label><input type="text" name="#" id="user-tel-2">-
										<label for="user-tel-3" class="sr-only"></label><input type="text" name="#" id="user-tel-3">
									</td>
								</tr>
								<tr class="user-phone">
									<th>핸드폰</th>
									<td>
										<select>
											<option value="선택">선택</option>
											<option value="010">010</option>
											<option value="011">011</option>
										</select>
										-
										<label for="user-phone-2" class="sr-only"></label><input type="text" name="#" id="user-phone-2">-
										<label for="user-phone-3" class="sr-only"></label><input type="text" name="#" id="user-phone-3">
									</td>
								</tr>
								<tr class="user-addr">
									<th><label for="user-addr">주소</label></th>
									<td>
										<input type="text" name="#" id="user-addr" >
										<a href="#" role="button" class="btn-white">주소찾기</a>
										<label for="user-addr-2" class="sr-only"></label><input type="text" name="#" id="user-addr-2">
										<label for="user-addr-3" class="sr-only"></label><input type="text" name="#" id="user-addr-3">
									</td>
								</tr>
								<tr class="high-school">
									<th><label for="high-school">고등학교</label></th>
									<td>
										<input type="text" name="#" id="high-school" > 지구
										<label for="in-school"><input type="radio" name="#" id="in-school" checked>&nbsp;재학</label>
										<label for="graduation"><input type="radio" name="#" id="graduation">&nbsp;졸업</label>
										<label for="exam"><input type="radio" name="#" id="exam" >&nbsp;검정고시</label>
									</td>
								</tr>
								<tr class="departments">
									<th>관심학과</th>
									<td>
										<select>
											<option value="관심학과 선택(1)">관심학과 선택(1)</option>
											<option value="departments">관심학과(1)</option>
											<option value="departments">관심학과(1)</option>
										</select>
										<select>
											<option value="관심학과 선택(2)">관심학과 선택(2)</option>
											<option value="departments">관심학과(2)</option>
											<option value="departments">관심학과(2)</option>
										</select>
										<select>
											<option value="관심학과 선택(2)">관심학과 선택(3)</option>
											<option value="departments">관심학과(3)</option>
											<option value="departments">관심학과(3)</option>
										</select>
									</td>
								</tr>
							</tbody>
						</table>
						<div class="btn-area">
							<p>
								<button type="submit" class="btn btn-pink">확인</button>
								<a class="btn btn-gray" href="#" role="button">취소</a>
							</p>
						</div>
					</div>
				</form>
			</div>
		</section>
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>

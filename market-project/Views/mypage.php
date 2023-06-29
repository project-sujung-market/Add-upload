<h2 id="myPageTitle">마이페이지</h2>
<form>
    <div class="form-group">
        <label for="usernumber">아이디</label>
        <input type="text" name="uid" class="nope" id="usernumber" value="<?= $_SESSION['user']->uid ?>" readonly>
    </div>
    <div class="form-group">
        <label for="username">이름</label>
        <input type="text" id="username" name="name" value="<?= $_SESSION['user']->name ?>" placeholder="이름도 변경 가능합니다.">
    </div>
    <div class="form-group">
        <label for="password">비밀번호</label>
        <input type="password" name="pass" id="password" placeholder="변경하실 비밀번호를 입력해주세요." required>
    </div>
    <div class="form-group">
        <label for="update-password">변경확인 비밀번호</label>
        <input type="update-password" id="update-password" placeholder="현재 비밀번호를 입력해주세요." required>
    </div>
    <div class="form-group">
        <h4>수원정보과학고 수정마켓</h4>
        <ul class="list1">
            <li>
                <a href="#">
                    <img src="images/bulletin.png" alt="">
                </a>
                <div class="img-p">내 게시글</div>
            </li>
            <li>
                <a href="#">
                    <img src="images/inquiry.png" alt="">
                </a>
                <div class="img-p">문의하기</div>
            </li>
            <li>
                <a href="#">
                    <img src="images/point.png" alt="">
                </a>
                <div class="img-p">내 포인트</div>
            </li>
        </ul>
        <button type="submit">저장</button>
    </div>
</form>
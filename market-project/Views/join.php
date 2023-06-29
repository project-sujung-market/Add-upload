<h2>회원가입</h2>
<form method="post" action="/join">
    <div class="form-group">
        <label for="username">사용자 이름:</label>
        <input type="text" name="name" id="username" placeholder="사용자 이름을 입력해주세요" required>
    </div>
    <div class="form-group">
        <label for="text">아이디:</label>
        <input type="text" name="uid" id="text" placeholder="사용하실 아이디을 입력해주세요" required>
    </div>
    <div class="form-group">
        <label for="text">전화번호:</label>
        <input type="text" name="phone" id="phone" onkeyup="formatPhoneNumber()" placeholder="전화번호를 입력해주세요" required>
    </div>
    <div class="form-group">
        <label for="password">비밀번호:</label>
        <input type="password" name="pass1" id="password" placeholder="사용하실 비밀번호를 입력해주세요" required>
    </div>
    <div class="form-group">
        <label for="password">비밀번호 재확인:</label>
        <input type="password" name="pass2" id="password" placeholder="사용하실 비밀번호를 입력해주세요" required>
    </div>
    <div class="form-group">
        <button type="submit">회원가입</button>
    </div>
</form>
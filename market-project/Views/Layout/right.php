<form class="login" method="post" action="/login">
    <h1>회원정보</h1>
    <?php if(!user()) : ?>
        <input type="text" name="uid" id="uid" placeholder="ID">
        <input type="password" name="pass" id="pass" placeholder="PASSWORD">
    <?php else : ?>
        <input type="text" class="nope" name="uid" id="uid" value="ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?= $_SESSION['user']->uid ?>" readonly>
        <input type="text" class="nope" name="pass" id="pass" value="NAME: <?= $_SESSION['user']->name ?>" readonly>
    <?php endif; ?>

    <div class="btns">
        <?php if(!user()) : ?>
            <button class="btn" type="submit">로그인</button>
            <a href="/join" class="btn">회원가입</a>
        <?php else : ?>
            <a href="/logout" class="btn logout">로그아웃</a>
        <?php endif; ?>
    </div>
</form>

<?php if(user()) : ?>
    <a class="write" href="/upload">글쓰기</a>
    <a class="write" href="/mypage">My Page</a>
<?php endif; ?>
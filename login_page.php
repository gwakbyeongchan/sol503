<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .message {
            font-size: 1.2em;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>로그인1</h1>

    <!-- 성공 또는 실패 메시지 출력 -->
    <?php if (isset($_GET['success'])): ?>
        <?php if ($_GET['success'] == '1'): ?>
            <p class="message" style="color: green;">로그인 성공!</p>
        <?php elseif ($_GET['success'] == '0'): ?>
            <p class="message" style="color: red;">로그인 실패! 사용자 이름 또는
 비밀번호를 확인하세요.</p>
        <?php endif; ?>
    <?php endif; ?>
<!-- 로그인 폼 -->
<form action="login.php" method="POST">
        <label for="username">사용자 이름:</label>
        <input type="text" id="username" name="username" required>
        <br><br>
        <label for="password">비밀번호:</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        <input type="submit" value="로그인">
    </form>
</body>
</html>

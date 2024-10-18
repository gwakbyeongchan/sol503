<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
    <style>
        body {
            font-family: 'Noto Sans', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #5A5A5A; /* 중립적인 회색 계열 */
            color: #fff; /* 흰색으로 텍스트 가독성 향상 */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            font-size: 2em;
            color: #fff;
            margin-bottom: 30px;
        }

        .message {
            font-size: 1.2em;
            margin-bottom: 20px;
            padding: 15px;
            width: 100%;
            max-width: 350px;
            text-align: center;
            border-radius: 8px;
            background-color: #444; /* 약간 어두운 회색 */
        }

        .message.success {
            color: #28a745;
            background-color: #e6f4ea;
            border-left: 5px solid #28a745;
        }

        .message.fail {
            color: #d32f2f;
            background-color: #fbe9e7;
            border-left: 5px solid #d32f2f;
        }

        form {
            background-color: #444; /* 다크 회색 폼 배경 */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3); /* 약간의 그림자 추가 */
            width: 100%;
            max-width: 350px;
        }

        label {
            font-size: 1em;
            color: #fff;
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1em;
            background-color: #5A5A5A; /* 회색 배경 입력 필드 */
            color: #fff;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus, input[type="password"]:focus {
            border-color: #a68a64; /* 따뜻한 갈색 포커스 */
            outline: none;
        }

        input[type="submit"] {
            background-color: #a68a64; /* 따뜻한 갈색 버튼 */
            color: white;
            border: none;
            padding: 12px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 1.1em;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #8b6c4f; /* 버튼 호버 시 진한 갈색 */
        }
    </style>
</head>
<body>
    <h1>로그인</h1>

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

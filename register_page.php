<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <style>
        body {
            font-family: 'Noto Sans', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        header {
            background-color: #5A5A5A; /* 중립적인 회색 */
            color: white;
            padding: 20px;
            text-align: center;
            width: 100%;
            position: absolute;
            top: 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin: 0;
            font-size: 1.8em;
        }

        .message {
            font-size: 1.2em;
            margin-bottom: 20px;
            padding: 15px;
            background-color: #fbe9e7;
            color: #d32f2f;
            border-radius: 5px;
            border-left: 5px solid #d32f2f;
        }

        .register-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 350px;
            margin-top: 80px; /* Header 아래로 약간의 공간 추가 */
            text-align: center;
        }

        label {
            display: block;
            margin: 15px 0 5px;
            text-align: left;
            color: #333;
            font-size: 1em;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 20px;
            font-size: 1em;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #a68a64; /* 따뜻한 갈색 포커스 */
            outline: none;
        }

        input[type="submit"] {
            background-color: #a68a64; /* 따뜻한 갈색 */
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
            background-color: #8b6c4f; /* 호버 시 진한 갈색 */
        }
    </style>
</head>
<body>
    <header>
        <h1>HR회원가입</h1>
    </header>

    <div class="register-container">
        <!-- 성공 또는 실패 메시지 출력 -->
        <?php if (isset($_GET['success'])): ?>
            <?php if ($_GET['success'] == '1'): ?>
                <p class="message" style="color: green;">회원가입 성공!</p>
            <?php elseif ($_GET['success'] == '0'): ?>
                <p class="message" style="color: red;">회원가입 실패! 이미 존재하는 사용자 이름입니다.</p>
            <?php endif; ?>
        <?php endif; ?>

        <!-- 회원가입 폼 -->
        <form action="register.php" method="POST">
            <label for="username">사용자 이름:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">비밀번호:</label>
            <input type="password" id="password" name="password" required>
            <input type="submit" value="회원가입">
        </form>
    </div>
</body>
</html>

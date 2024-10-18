<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HRservice</title>
    <style>
body {
    font-family: 'Noto Sans', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #333;
    transition: background-color 0.3s, color 0.3s;
}

header {
    background-color: #5A5A5A; /* 중립적인 회색 계열 */
    color: white;
    padding: 20px;
    text-align: center;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    position: relative;
}

header h1 {
    margin: 0;
    font-size: 32px;
    font-weight: bold;
    letter-spacing: 1.5px;
}

header .search-bar {
    margin-top: 20px;
    display: flex;
    justify-content: center;
}

header .search-bar input[type="text"] {
    width: 300px;
    padding: 12px;
    border: 2px solid #ccc;
    border-radius: 25px;
    outline: none;
    font-size: 16px;
    transition: border-color 0.3s;
}

header .search-bar input[type="text"]:focus {
    border-color: #5A5A5A; /* 포커스 시 중립 회색 */
}

header .search-bar button {
    padding: 12px 25px;
    border: none;
    border-radius: 25px;
    margin-left: 10px;
    background-color: #A68A64; /* 따뜻한 갈색 계열 */
    color: white;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

header .search-bar button:hover {
    background-color: #8B6C4F; /* 더 진한 갈색으로 변경 */
}

header .mode-toggle {
    margin-top: 15px;
    cursor: pointer;
    color: #5A5A5A;
    background-color: white;
    border: 2px solid #5A5A5A;
    padding: 8px 15px;
    border-radius: 25px;
    transition: background-color 0.3s, color 0.3s;
}

header .mode-toggle:hover {
    background-color: #5A5A5A;
    color: white;
}

main {
    padding: 40px;
}

.filter-sort {
    margin-bottom: 30px;
    display: flex;
    justify-content: flex-end;
}

.filter-sort select {
    padding: 12px;
    border-radius: 25px;
    border: 2px solid #ccc;
    font-size: 16px;
    outline: none;
    transition: border-color 0.3s;
}

.filter-sort select:focus {
    border-color: #A68A64; /* 따뜻한 갈색 포커스 */
}

.product-grid {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 20px;
}

.product {
    background-color: white;
    padding: 20px;
    border-radius: 20px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: transform 0.3s, box-shadow 0.3s;
    width: 30%;
}

.product:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.product p {
    font-size: 18px;
    font-weight: bold;
    margin: 15px 0;
}

footer {
    background-color: #5A5A5A; /* 헤더와 일치하는 회색 */
    color: white;
    padding: 15px 0;
    text-align: center;
    margin-top: 40px;
    box-shadow: 0 -4px 10px rgba(0, 0, 0, 0.1);
}

footer p {
    margin: 5px 0;
    font-size: 16px;
}

footer a {
    color: white;
    text-decoration: none;
    font-weight: bold;
    margin: 0 15px;
}

footer a:hover {
    text-decoration: underline;
}

header .login-signup {
    position: absolute;
    right: 20px;
    top: 25px;
}

header .login-signup button {
    padding: 8px 15px;
    border: none;
    border-radius: 25px;
    background-color: white;
    color: #5A5A5A;
    cursor: pointer;
    margin-left: 10px;
    transition: background-color 0.3s, color 0.3s;
}

header .login-signup button:hover {
    background-color: #5A5A5A;
    color: white;
}

@media (max-width: 768px) {
    .product-grid {
        flex-direction: column;
        align-items: center;
    }

    .product {
        width: 90%;
    }
}

    </style>
</head>
<body>
    <?php
    session_start(); // 세션 시작

    // 로그인 상태 확인
    $isLoggedIn = isset($_SESSION['username']);
    $username = $isLoggedIn ? $_SESSION['username'] : '';
    ?>

    <header id="header">
        <div class="login-signup">
            <?php if ($isLoggedIn): ?>
                <span><?php echo htmlspecialchars($username); ?>님, 환영합니다!</span>
                <button onclick="location.href='logout.php'">로그아웃</button>
            <?php else: ?>
                <button onclick="location.href='login_page.php'">로그인</button>
                <button onclick="location.href='register_page.php'">회원가입</button>
            <?php endif; ?>
        </div>
        <h1>HRSERVICE</h1>
        <div class="search-bar">
            <input type="text" placeholder="조회 검색...">
            <button>조회</button>
        </div>
    </header>
    
    
    <footer id="footer">
        <p>&copy; 자료 조회.</p>
        <p>
            <a href=_blank">1팀</a> |
            <a href="ht" target="_blank">2팀</a> |
            <a href="httom" target="_blank">3팀</a>
        </p>
    </footer>

    </script>
</body>
</html>

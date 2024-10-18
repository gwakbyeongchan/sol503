<?php
$servername = "database-1.cveqww86w9de.ap-northeast-2.rds.amazonaws.com"; // 서>버 이름
$username = "admin"; // DB 사용자 이름
$password = "qwer1234"; // DB 비밀번호
$dbname = "UserDB"; // 데이터베이스 이름

// MySQLi 연결
$conn = new mysqli($servername, $username, $password, $dbname);

// 문자 집합을 utf8mb4로 설정
$conn->set_charset("utf8mb4");

// 연결 확인
if ($conn->connect_error) {
    die("연결 실패: " . $conn->connect_error);
}

// 사용자 입력 받기
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = $_POST['username'];
    $pwd = $_POST['password'];

    // 사용자 이름 중복 확인 쿼리
    $stmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
    $stmt->bind_param("s", $uname);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        // 사용자 이름이 이미 존재함
        header("Location: register_page.php?success=0");
        exit();
    } else {
        // 사용자 이름이 중복되지 않으면 회원가입 진행
        $stmt->close();

        // 비밀번호 해싱 (선택적으로 해싱하지 않고 저장 가능)
        $hashed_password = $pwd; // 비밀번호 해싱 안 할 경우: 그냥 $pwd 사용
        // 해싱을 원할 경우: $hashed_password = password_hash($pwd, PASSWORD_DEFAULT);

        // 데이터베이스에 사용자 추가
        $stmt = $conn->prepare("INSERT INTO users (username, password, created_at) VALUES (?, ?, NOW())");
        $stmt->bind_param("ss", $uname, $hashed_password);

        if ($stmt->execute()) {
            // 회원가입 성공
            header("Location: index.html");
        } else {
            // 회원가입 실패
            header("Location: register_page.php?success=0");
        }
        $stmt->close();
    }
}

$conn->close();
?>

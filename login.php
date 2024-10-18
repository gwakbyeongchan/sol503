<?php
session_start(); // 세션 시작

$servername = "database-1.cveqww86w9de.ap-northeast-2.rds.amazonaws.com"; // 서버 이름
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

    // 사용자 확인 쿼리
    $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
    $stmt->bind_param("s", $uname);
    $stmt->execute();
    $stmt->store_result();

    // 사용자 존재 여부 확인
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($db_password);
        $stmt->fetch();

        // 비밀번호 확인
        if ($pwd === $db_password) { // 비밀번호 직접 비교
            // 로그인 성공: 세션에 사용자 이름 저장
            $_SESSION['username'] = $uname; // 사용자 이름을 세션에 저장
            header("Location: index.php"); // 로그인 성공 시 index.html로 리다이렉트
            exit(); // 리다이렉트 후 코드 실행 중단
        } else {
            // 비밀번호 불일치
            header("Location: login_page.php?success=0");
            exit();
        }
    } else {
        // 사용자 존재하지 않음
        header("Location: login_page.php?success=0");
        exit();
    }

    $stmt->close();
}

// 연결 종료
$conn->close();
?>

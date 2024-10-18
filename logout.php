<?php
// 세션을 시작합니다.
session_start();

// 세션 변수 모두 제거
$_SESSION = array();

// 세션을 완전히 파괴합니다.
session_destroy();

// index.php로 리다이렉트
header("Location: index.php");
exit;
?>

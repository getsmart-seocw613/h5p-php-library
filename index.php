<?php
// 오류 표출 여부 설정 (0: 미표출, 1: 표출)
ini_set('display_errors', 1);

require_once './h5p.classes.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/h5p.css">
    <script src="./js/h5p-resizer.js"></script>
    <script src="./js/h5p.js"></script>
</head>
<body>
    <div class="h5p-iframe-wrapper" style="width: 800px;">
        <iframe src="https://h5p.org/h5p/embed/617" width="1090" height="675" frameborder="0" allowfullscreen="allowfullscreen" allow="geolocation *; microphone *; camera *; midi *; encrypted-media *" title="Interactive Video"></iframe>
    </div>
<?php
// H5P 라이브러리의 버전 정보 출력
echo 'H5P Library loaded successfully. Version: ' . H5PCore::$coreApi['majorVersion'] . '.' . H5PCore::$coreApi['minorVersion'];
?>
</body>
</html>
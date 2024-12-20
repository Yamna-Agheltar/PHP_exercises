<?php
$first_name = isset($_GET['first_name']) ? $_GET['first_name'] : '';
$last_name = isset($_GET['last_name']) ? $_GET['last_name'] : '';
$grade = isset($_GET['grade']) ? $_GET['grade'] : '';

$status_message = '';
$status_class = '';

if ($grade !== '') {
    if ($grade < 12) {
        $status_message = 'مطلوب نیست';
        $status_class = 'error';
    } else {
        $status_message = 'مطلوب است';
        $status_class = 'success';
    }
} else {
    $status_message = 'لطفاً ابتدا فرم را پر کنید.';
    $status_class = '';
}
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>وضعیت تحصیلی دانش‌آموز</title>
    <style>
        body {
            padding: 20px;
            text-align: center;
        }
        .error {
            color: #EB5353;
            font-size: 18px;
        }
        .success {
            color: #36AE7C;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <h1>وضعیت تحصیلی دانش‌آموز</h1>
    
    <?php if ($first_name && $last_name && $grade): ?>
        <p>معدل دانش‌آموز به نام <strong><?php echo htmlspecialchars($first_name . " " . $last_name); ?></strong> عدد <strong><?php echo htmlspecialchars($grade); ?></strong> است.</p>
        <p class="<?php echo $status_class; ?>">وضعیت تحصیلی: <strong><?php echo $status_message; ?></strong></p>
    <?php else: ?>
        <p>لطفاً ابتدا فرم را پر کنید.</p>
    <?php endif; ?>
</body>
</html>

<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Calculator;

$calculator = new Calculator();
$result = $calculator->add(2, 3);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Buildkite Test App</title>
</head>
<body>
    <h1>Buildkite Test App</h1>
    <p>2 + 3 = <?php echo htmlspecialchars((string) $result, ENT_QUOTES, 'UTF-8'); ?></p>
</body>
</html>

<body>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $n = $_POST['n'];
    
    function fibonacci($n) {
        if ($n == 0) {
            return [];
        } elseif ($n == 1) {
            return [1];
        } else {
            $fib = [1, 1];
            for ($i = 2; $i < $n; $i++) {
                $fib[$i] = $fib[$i-1] + $fib[$i-2];
            }
            return $fib;
        }
    }
    
    $fibonacci_sequence = fibonacci($n);

    echo "<table>";
    echo "<tr><th>i</th><th>fi</th><th>fi+1/fi</th></tr>";
    echo "<tr><td>1</td><td>1</td><td>1</td></tr>";
    for ($i = 2; $i <= $n; $i++) {
        $fi = $fibonacci_sequence[$i-1];
        $fi1 = $fibonacci_sequence[$i-2];
        $fi_ratio = $fi1 == 0 ? "" : round($fi / $fi1, 6);
        echo "<tr><td>$i</td><td>$fi</td><td>$fi_ratio</td></tr>";
    }
    echo "</table>";
}
?>

<form method="post">
    <label for="n">n (1~100):</label>
    <input type="number" id="n" name="n" min="1" max="100" required>
    <input type="submit" value="Calculate">
</form>

</body>
</html>

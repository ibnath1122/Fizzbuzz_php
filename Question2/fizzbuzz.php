<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <ul class="list">
            <h2>Prime Numbers</h2>
            <?php
            function isPrime($number) {
                if ($number < 2) 
				{
                    return false;
                }
                for ($i = 2; $i <= sqrt($number); $i++) {
                    if ($number % $i === 0) {
                        return false;
                    }
                }
                return true;
            }

            $file = 'numbers.txt';  // Update with the correct file path/name

            $primeNumbers = array();
            $fizzbuzzNumbers = array();

            if (file_exists($file)) {
                $numbers = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

                foreach ($numbers as $number) {
                    $number = intval($number);
                    if (isPrime($number)) {
                        $primeNumbers[] = $number;
                    }
                    if ($number % 3 === 0 && $number % 5 === 0) {
                        $fizzbuzzNumbers[] = $number;
                    }
                }
            }

            foreach ($primeNumbers as $number) {
                echo "<li>$number</li>";
            }
            ?>
        </ul>
        <ul class="list">
            <h2>Fizzbuzz Numbers</h2>
            <?php
            foreach ($fizzbuzzNumbers as $number) {
                echo "<li>$number</li>";
            }
            ?>
        </ul>
    </div>
</body>
</html>





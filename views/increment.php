<?php
$cmd = "src/increment.mac";

$dscr = array(
    0 => array("pipe", "r"),
    1 => array("pipe", "w"),
    2 => array("pipe", "w"),
);

//call increment.mac function with $input from post
$input = isset($_POST["intText"]);
if ($input) {
    echo "Input is: $input<br>";
    $process = proc_open($cmd, $dscr, $pipes);
    if (is_resource($process)) {

        fwrite($pipes[0], $input);
        fclose($pipes[0]);

        while ($output = fgets($pipes[1]))
         {$outputResult = $output;}
        fclose($pipes[1]);
    }
    $return_value = proc_close($process);

} else {
    $outputResult = 0;
}

$result = "<p> Answer $outputResult</p>";


echo "increment.mac.php was called with output = $output";
return $result;


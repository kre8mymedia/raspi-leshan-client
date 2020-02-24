<?php
$output = shell_exec('ps -aux | grep -v grep | grep "java -jar ./leshan-client-demo.jar -n RasPiClient -u tyme.ml:5683"');

if(isset($output)){
        echo "Leshan Server is RUNNING\n";
	echo $output;
} else {
        $run_program = shell_exec('cd /var/www/leshanclient && java -jar ./leshan-client-demo.jar -n RasPiClient -u tyme.ml:5683 >> /var/www/leshanclient/client-data.txt');
        echo "Leshan Client is NOT running... Starting now!\n";
        echo $run_program;
}
?>



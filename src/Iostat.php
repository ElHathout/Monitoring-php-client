<?php

namespace Monitor;

use Symfony\Component\Process\Process;

/**
 * netstat -s
 *
 * @author tibo
 */
class Iostat implements SensorInterface
{

    public function run()
    {
        $process = new Process('iostat -x 2 2');
        $process->run();
        return $process->getOutput();
    }
}

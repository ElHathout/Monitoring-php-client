<?php

namespace Monitor;

use Symfony\Component\Process\Process;

/**
 * netstat -antp
 *
 * @author tibo
 */
class NetstatListenTCP implements SensorInterface
{

    public function run()
    {
        $process = new Process('netstat -antp | grep LISTEN');
        $process->run();
        return $process->getOutput();
    }
}

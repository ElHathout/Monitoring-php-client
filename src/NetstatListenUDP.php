<?php

namespace Monitor;

use Symfony\Component\Process\Process;

/**
 * netstat -anup
 *
 * @author tibo
 */
class NetstatListenUDP implements SensorInterface
{

    public function run()
    {
        $process = new Process('netstat -anup | grep LISTEN');
        $process->run();
        return $process->getOutput();
    }
}

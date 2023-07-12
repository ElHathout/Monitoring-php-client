<?php

namespace Monitor;

use Symfony\Component\Process\Process;

/**
 * netstat -s
 *
 * @author tibo
 */
class NetstatStatistics implements SensorInterface
{

    public function run()
    {
        $process = new Process('netstat -s');
        $process->run();
        return $process->getOutput();
    }
}

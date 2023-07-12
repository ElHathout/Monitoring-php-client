<?php

namespace Monitor;

use Symfony\Component\Process\Process;

/**
 * cat /proc/uptime
 *
 * @author tibo
 */
class Uptime implements SensorInterface
{

    public function run()
    {
        $process = new Process('cat /proc/uptime');
        $process->run();
        return $process->getOutput();
    }
}

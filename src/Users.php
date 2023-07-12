<?php

namespace Monitor;

use Symfony\Component\Process\Process;

/**
 * returns content of /etc/passwd
 *
 * @author Elias El Hathout
 */
class Users implements SensorInterface
{

    public function run()
    {
        $process = new Process('cat /etc/passwd');
        $process->run();
        return $process->getOutput();
    }
}

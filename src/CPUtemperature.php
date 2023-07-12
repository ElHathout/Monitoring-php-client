<?php

namespace Monitor;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

/**
 * Description
 *
 * @author helha
 */
class CPUtemperature implements SensorInterface
{

    public function run()
    {
        $process = new Process('sensors');
        $process->run();
        return $process->getOutput();
    }
}

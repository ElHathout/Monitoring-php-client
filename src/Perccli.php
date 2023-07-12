<?php

namespace Monitor;

use Symfony\Component\Process\Process;

/**
 * Use percli64 Dell servers to get state or RAID disks.
 *
 * @author tibo
 */
class Perccli implements SensorInterface
{

    public function run()
    {
        $process = new Process('perccli64 /c0 show');
        $process->run();
        return $process->getOutput();
    }
}

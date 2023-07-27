<?php

namespace Monitor;

use Symfony\Component\Process\Process;

/**
 * Uses docker stats command to retrieve cpu usage, memory usage,... of docker containers
 *
 * @author Elias El Hathout
 */
class DockerStats implements SensorInterface
{

    public function run()
    {
        $process = new Process('docker stats --no-stream');
        $process->run();
        return $process->getOutput();
    }
}

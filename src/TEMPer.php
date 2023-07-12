<?php

namespace Monitor;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

/**
 * Description
 *
 * @author helha
 */
class TEMPer implements SensorInterface
{

    public function run()
    {
        $process = new Process('/usr/local/bin/hid-query /dev/hidraw1 0x01 0x80 0x33 0x01 0x00 0x00 0x00 0x00 ' .
            ' | grep -A1 ^Response | tail -1');
        $process->run();
        return $process->getOutput();
    }
}

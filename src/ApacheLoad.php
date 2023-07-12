<?php

namespace Monitor;

use Symfony\Component\Process\Process;

/**
 * Uses wget to retrieve statistics on httpd. The statistics are usually retrievable on http://server-url/server-status if mod_status is enabled in apache configuration. 
 *
 * @author Elias El Hathout
 */
class ApacheLoad implements SensorInterface
{

    public function run()
    {
        $process = new Process('wget -O - http://127.0.0.1/server-status');
        $process->run();
        return $process->getOutput();
    }
}

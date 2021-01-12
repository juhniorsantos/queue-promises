<?php

return [

    // Table for saving promises
    'database'      => [
        'connection' => null,  //null = default connection
        'table_promises' => 'promises',
        'table_jobs' => 'promise_jobs',
        'table_events' => 'promise_events',
    ],

    // Queue for timeout check tasks
    'timeout_queue' => 'default',

    // Channel for logs
    'log_channel'   => 'default',

];

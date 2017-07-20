<?php
return array(
    // set your paypal credential
    'client_id' => 'AXXa49pGjRVUykY_Va9PSjpzLL74uQxmB_GBs1R2Gx7bvfPGt_kuZRo1Pc6NjV1NdMQJvhJ6DLD7dgOT',
    'secret' => 'ELHKMgLcIpE2aow52YwUPSWzfbRBOGa2Ggud_3uBLz90nCFquuus9Mj_r9n6G1-_x40JCA_MgeU_o1ao',
    'currency' => 'GBP',
    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);
<?php

return [
    /**
     * This specified the Mpesa consumer key
     */
    'consumer_key' => env('MPESA_CONSUMER_KEY', ''),

    /**
     * This specifies the mpesa consumer secret
     */
    'consumer_secret' => env('MPESA_CONSUMER_SECRET', ''),

    /**
     * This specifies the mpesa api passkey, and is used to
     * initiate requests such as stk push, B2C, etc.
     */
    'passkey' => env('MPESA_PASS_KEY', ''),

    /**
     * This specifies the environment you are running the package on
     * by default this is reolved to your current environment set in the
     *  app.env variables
     *
     * If the environment is set to production, then the mpesa production API endpoints will
     * be used instead, otherwise the sandbox API endpoints
    */
    'environment' => env('APP_ENV', 'sandbox'),

    /**
     * This class is the model used for storing auth token for mpesa.
     *
     * It must be or extend `Hackdelta\LaravelMpesa\Models\MpesaAuth::class`
     *
     * @see Hackdelta\LaravelMpesa\Models\MpesaAuth::class
    */
    'auth_model' => Hackdelta\LaravelMpesa\Models\MpesaAuth::class,

];

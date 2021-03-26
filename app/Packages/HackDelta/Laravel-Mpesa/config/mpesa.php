<?php

return [
    /**
     * This specifies the environment you are running the package on
     * by default this is reolved to your current environment set in the
     *  app.env variables
     *
     * If the environment is set to production, then the mpesa production URLs will
     * be used instead.
    */
    'environment' => env('APP_ENV', 'sandbox'),

    /**
     * This class is the model used for storing auth token for mpesa
     *
     * It must be or extend `Hackdelta\LaravelMpesa\Models\MpesaAuth::class`
    */
    'auth_model' => Hackdelta\LaravelMpesa\Models\MpesaAuth::class,

];

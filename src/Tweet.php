<?php

namespace Noweh\TwitterApi;

use Exception;

class Tweet extends AbstractController
{
    /**
     * @param array $settings
     * @throws \Exception
     */
    public function __construct(array $settings)
    {
        parent::__construct($settings);

        if (!isset($settings['account_id'])) {
            throw new Exception('Incomplete settings passed. Expected "account_id"');
        }

        $this->setEndpoint('tweets');
    }
}

<?php

namespace Pulsar;

class Client
{
    public function __construct($serviceUrl)
    {
    }

    /**
     * @param $topic
     * @return Producer
     */
    public function createProducer($topic)
    {
    }

    /**
     * @param $topic
     * @param $consumerName
     * @param ...$consumerConf
     * @return Consumer
     */
    public function subscribe($topic, $consumerName, ...$consumerConf)
    {
    }
}

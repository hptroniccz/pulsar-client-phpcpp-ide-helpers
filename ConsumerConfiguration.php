<?php

namespace Pulsar;


class ConsumerConfiguration
{
    /**
     * @param $consumerType int
     *  There can be only 1 consumer on the same topic with the same consumerName
     *
     *  ConsumerExclusive
     *
     *  Multiple consumers will be able to use the same consumerName and the messages
     *  will be dispatched according to a round-robin rotation between the connected consumers
     *
     *  ConsumerShared
     *
     * Only one consumer is active on the subscription; Subscription can have N consumers
     *  connected one of which will get promoted to master if the current master becomes inactive
     *
     * ConsumerFailover
     *
     * Multiple consumer will be able to use the same subscription and all messages with the same key
     * will be dispatched to only one consumer
     *
     * ConsumerKeyShared
     *
     * @return ConsumerConfiguration
     */
    public function setConsumerType(int $consumerType)
    {

    }
}
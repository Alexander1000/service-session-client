<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Session;

/**
 */
class SessionServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Session\SaveRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Save(\Session\SaveRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/session.SessionService/Save',
        $argument,
        ['\Session\SaveResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Session\GetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Get(\Session\GetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/session.SessionService/Get',
        $argument,
        ['\Session\GetResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Session\CreateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Create(\Session\CreateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/session.SessionService/Create',
        $argument,
        ['\Session\CreateResponse', 'decode'],
        $metadata, $options);
    }

}

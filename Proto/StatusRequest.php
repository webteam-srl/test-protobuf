<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Schema/cosmic-modules.proto

namespace WebTeam\Demo\Cosmic\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>demo.StatusRequest</code>
 */
class StatusRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.demo.Provider provider = 1;</code>
     */
    protected $provider = 0;
    /**
     * Generated from protobuf field <code>.demo.Account account = 2;</code>
     */
    protected $account = null;
    /**
     * Generated from protobuf field <code>int64 request_id = 3;</code>
     */
    protected $request_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $provider
     *     @type \WebTeam\Demo\Cosmic\Proto\Account $account
     *     @type int|string $request_id
     * }
     */
    public function __construct($data = NULL) {
        \WebTeam\Demo\Cosmic\Proto\Metadata\CosmicModules::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.demo.Provider provider = 1;</code>
     * @return int
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Generated from protobuf field <code>.demo.Provider provider = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setProvider($var)
    {
        GPBUtil::checkEnum($var, \WebTeam\Demo\Cosmic\Proto\Provider::class);
        $this->provider = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.demo.Account account = 2;</code>
     * @return \WebTeam\Demo\Cosmic\Proto\Account|null
     */
    public function getAccount()
    {
        return $this->account;
    }

    public function hasAccount()
    {
        return isset($this->account);
    }

    public function clearAccount()
    {
        unset($this->account);
    }

    /**
     * Generated from protobuf field <code>.demo.Account account = 2;</code>
     * @param \WebTeam\Demo\Cosmic\Proto\Account $var
     * @return $this
     */
    public function setAccount($var)
    {
        GPBUtil::checkMessage($var, \WebTeam\Demo\Cosmic\Proto\Account::class);
        $this->account = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 request_id = 3;</code>
     * @return int|string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Generated from protobuf field <code>int64 request_id = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkInt64($var);
        $this->request_id = $var;

        return $this;
    }

}


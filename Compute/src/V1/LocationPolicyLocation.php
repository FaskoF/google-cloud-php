<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.LocationPolicyLocation</code>
 */
class LocationPolicyLocation extends \Google\Protobuf\Internal\Message
{
    /**
     * Preference for a given locaction: ALLOW or DENY.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.LocationPolicyLocation.Preference preference = 150781147;</code>
     */
    private $preference = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $preference
     *           Preference for a given locaction: ALLOW or DENY.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Preference for a given locaction: ALLOW or DENY.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.LocationPolicyLocation.Preference preference = 150781147;</code>
     * @return int
     */
    public function getPreference()
    {
        return isset($this->preference) ? $this->preference : 0;
    }

    public function hasPreference()
    {
        return isset($this->preference);
    }

    public function clearPreference()
    {
        unset($this->preference);
    }

    /**
     * Preference for a given locaction: ALLOW or DENY.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.LocationPolicyLocation.Preference preference = 150781147;</code>
     * @param int $var
     * @return $this
     */
    public function setPreference($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\LocationPolicyLocation\Preference::class);
        $this->preference = $var;

        return $this;
    }

}

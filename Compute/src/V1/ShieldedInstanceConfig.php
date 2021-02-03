<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A set of Shielded Instance options.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.ShieldedInstanceConfig</code>
 */
class ShieldedInstanceConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Defines whether the instance has integrity monitoring enabled. Enabled by default.
     *
     * Generated from protobuf field <code>bool enable_integrity_monitoring = 140635574;</code>
     */
    private $enable_integrity_monitoring = false;
    /**
     * Defines whether the instance has Secure Boot enabled. Disabled by default.
     *
     * Generated from protobuf field <code>bool enable_secure_boot = 123568638;</code>
     */
    private $enable_secure_boot = false;
    /**
     * Defines whether the instance has the vTPM enabled. Enabled by default.
     *
     * Generated from protobuf field <code>bool enable_vtpm = 181858935;</code>
     */
    private $enable_vtpm = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enable_integrity_monitoring
     *           Defines whether the instance has integrity monitoring enabled. Enabled by default.
     *     @type bool $enable_secure_boot
     *           Defines whether the instance has Secure Boot enabled. Disabled by default.
     *     @type bool $enable_vtpm
     *           Defines whether the instance has the vTPM enabled. Enabled by default.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Defines whether the instance has integrity monitoring enabled. Enabled by default.
     *
     * Generated from protobuf field <code>bool enable_integrity_monitoring = 140635574;</code>
     * @return bool
     */
    public function getEnableIntegrityMonitoring()
    {
        return $this->enable_integrity_monitoring;
    }

    /**
     * Defines whether the instance has integrity monitoring enabled. Enabled by default.
     *
     * Generated from protobuf field <code>bool enable_integrity_monitoring = 140635574;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableIntegrityMonitoring($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_integrity_monitoring = $var;

        return $this;
    }

    /**
     * Defines whether the instance has Secure Boot enabled. Disabled by default.
     *
     * Generated from protobuf field <code>bool enable_secure_boot = 123568638;</code>
     * @return bool
     */
    public function getEnableSecureBoot()
    {
        return $this->enable_secure_boot;
    }

    /**
     * Defines whether the instance has Secure Boot enabled. Disabled by default.
     *
     * Generated from protobuf field <code>bool enable_secure_boot = 123568638;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableSecureBoot($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_secure_boot = $var;

        return $this;
    }

    /**
     * Defines whether the instance has the vTPM enabled. Enabled by default.
     *
     * Generated from protobuf field <code>bool enable_vtpm = 181858935;</code>
     * @return bool
     */
    public function getEnableVtpm()
    {
        return $this->enable_vtpm;
    }

    /**
     * Defines whether the instance has the vTPM enabled. Enabled by default.
     *
     * Generated from protobuf field <code>bool enable_vtpm = 181858935;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableVtpm($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_vtpm = $var;

        return $this;
    }

}

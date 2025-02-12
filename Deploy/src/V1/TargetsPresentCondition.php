<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * TargetsPresentCondition contains information on any Targets defined in
 * the Delivery Pipeline that do not actually exist.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.TargetsPresentCondition</code>
 */
class TargetsPresentCondition extends \Google\Protobuf\Internal\Message
{
    /**
     * True if there aren't any missing Targets.
     *
     * Generated from protobuf field <code>bool status = 1;</code>
     */
    private $status = false;
    /**
     * The list of Target names that do not exist. For example,
     * `projects/{project_id}/locations/{location_name}/targets/{target_name}`.
     *
     * Generated from protobuf field <code>repeated string missing_targets = 2 [(.google.api.resource_reference) = {</code>
     */
    private $missing_targets;
    /**
     * Last time the condition was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4;</code>
     */
    private $update_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $status
     *           True if there aren't any missing Targets.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $missing_targets
     *           The list of Target names that do not exist. For example,
     *           `projects/{project_id}/locations/{location_name}/targets/{target_name}`.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Last time the condition was updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * True if there aren't any missing Targets.
     *
     * Generated from protobuf field <code>bool status = 1;</code>
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * True if there aren't any missing Targets.
     *
     * Generated from protobuf field <code>bool status = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkBool($var);
        $this->status = $var;

        return $this;
    }

    /**
     * The list of Target names that do not exist. For example,
     * `projects/{project_id}/locations/{location_name}/targets/{target_name}`.
     *
     * Generated from protobuf field <code>repeated string missing_targets = 2 [(.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMissingTargets()
    {
        return $this->missing_targets;
    }

    /**
     * The list of Target names that do not exist. For example,
     * `projects/{project_id}/locations/{location_name}/targets/{target_name}`.
     *
     * Generated from protobuf field <code>repeated string missing_targets = 2 [(.google.api.resource_reference) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMissingTargets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->missing_targets = $arr;

        return $this;
    }

    /**
     * Last time the condition was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Last time the condition was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

}


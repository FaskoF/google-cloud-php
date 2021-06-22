<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/appengine.proto

namespace Google\Cloud\AppEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for `Versions.CreateVersion`.
 *
 * Generated from protobuf message <code>google.appengine.v1.CreateVersionRequest</code>
 */
class CreateVersionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the parent resource to create this version under. Example:
     * `apps/myapp/services/default`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * Application deployment configuration.
     *
     * Generated from protobuf field <code>.google.appengine.v1.Version version = 2;</code>
     */
    private $version = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Name of the parent resource to create this version under. Example:
     *           `apps/myapp/services/default`.
     *     @type \Google\Cloud\AppEngine\V1\Version $version
     *           Application deployment configuration.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Appengine\V1\Appengine::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the parent resource to create this version under. Example:
     * `apps/myapp/services/default`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Name of the parent resource to create this version under. Example:
     * `apps/myapp/services/default`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Application deployment configuration.
     *
     * Generated from protobuf field <code>.google.appengine.v1.Version version = 2;</code>
     * @return \Google\Cloud\AppEngine\V1\Version|null
     */
    public function getVersion()
    {
        return isset($this->version) ? $this->version : null;
    }

    public function hasVersion()
    {
        return isset($this->version);
    }

    public function clearVersion()
    {
        unset($this->version);
    }

    /**
     * Application deployment configuration.
     *
     * Generated from protobuf field <code>.google.appengine.v1.Version version = 2;</code>
     * @param \Google\Cloud\AppEngine\V1\Version $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AppEngine\V1\Version::class);
        $this->version = $var;

        return $this;
    }

}

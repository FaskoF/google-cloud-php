<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/dataflow/v1beta3/templates.proto

namespace Google\Cloud\Dataflow\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Launch FlexTemplate Parameter.
 *
 * Generated from protobuf message <code>google.dataflow.v1beta3.LaunchFlexTemplateParameter</code>
 */
class LaunchFlexTemplateParameter extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The job name to use for the created job. For update job request,
     * job name should be same as the existing running job.
     *
     * Generated from protobuf field <code>string job_name = 1;</code>
     */
    private $job_name = '';
    /**
     * The parameters for FlexTemplate.
     * Ex. {"num_workers":"5"}
     *
     * Generated from protobuf field <code>map<string, string> parameters = 2;</code>
     */
    private $parameters;
    /**
     * Launch options for this flex template job. This is a common set of options
     * across languages and templates. This should not be used to pass job
     * parameters.
     *
     * Generated from protobuf field <code>map<string, string> launch_options = 6;</code>
     */
    private $launch_options;
    /**
     * The runtime environment for the FlexTemplate job
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.FlexTemplateRuntimeEnvironment environment = 7;</code>
     */
    private $environment = null;
    /**
     * Set this to true if you are sending a request to update a running
     * streaming job. When set, the job name should be the same as the
     * running job.
     *
     * Generated from protobuf field <code>bool update = 8;</code>
     */
    private $update = false;
    /**
     * Use this to pass transform_name_mappings for streaming update jobs.
     * Ex:{"oldTransformName":"newTransformName",...}'
     *
     * Generated from protobuf field <code>map<string, string> transform_name_mappings = 9;</code>
     */
    private $transform_name_mappings;
    protected $template;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $job_name
     *           Required. The job name to use for the created job. For update job request,
     *           job name should be same as the existing running job.
     *     @type \Google\Cloud\Dataflow\V1beta3\ContainerSpec $container_spec
     *           Spec about the container image to launch.
     *     @type string $container_spec_gcs_path
     *           Cloud Storage path to a file with json serialized ContainerSpec as
     *           content.
     *     @type array|\Google\Protobuf\Internal\MapField $parameters
     *           The parameters for FlexTemplate.
     *           Ex. {"num_workers":"5"}
     *     @type array|\Google\Protobuf\Internal\MapField $launch_options
     *           Launch options for this flex template job. This is a common set of options
     *           across languages and templates. This should not be used to pass job
     *           parameters.
     *     @type \Google\Cloud\Dataflow\V1beta3\FlexTemplateRuntimeEnvironment $environment
     *           The runtime environment for the FlexTemplate job
     *     @type bool $update
     *           Set this to true if you are sending a request to update a running
     *           streaming job. When set, the job name should be the same as the
     *           running job.
     *     @type array|\Google\Protobuf\Internal\MapField $transform_name_mappings
     *           Use this to pass transform_name_mappings for streaming update jobs.
     *           Ex:{"oldTransformName":"newTransformName",...}'
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Dataflow\V1Beta3\Templates::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The job name to use for the created job. For update job request,
     * job name should be same as the existing running job.
     *
     * Generated from protobuf field <code>string job_name = 1;</code>
     * @return string
     */
    public function getJobName()
    {
        return $this->job_name;
    }

    /**
     * Required. The job name to use for the created job. For update job request,
     * job name should be same as the existing running job.
     *
     * Generated from protobuf field <code>string job_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setJobName($var)
    {
        GPBUtil::checkString($var, True);
        $this->job_name = $var;

        return $this;
    }

    /**
     * Spec about the container image to launch.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.ContainerSpec container_spec = 4;</code>
     * @return \Google\Cloud\Dataflow\V1beta3\ContainerSpec|null
     */
    public function getContainerSpec()
    {
        return $this->readOneof(4);
    }

    public function hasContainerSpec()
    {
        return $this->hasOneof(4);
    }

    /**
     * Spec about the container image to launch.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.ContainerSpec container_spec = 4;</code>
     * @param \Google\Cloud\Dataflow\V1beta3\ContainerSpec $var
     * @return $this
     */
    public function setContainerSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataflow\V1beta3\ContainerSpec::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Cloud Storage path to a file with json serialized ContainerSpec as
     * content.
     *
     * Generated from protobuf field <code>string container_spec_gcs_path = 5;</code>
     * @return string
     */
    public function getContainerSpecGcsPath()
    {
        return $this->readOneof(5);
    }

    public function hasContainerSpecGcsPath()
    {
        return $this->hasOneof(5);
    }

    /**
     * Cloud Storage path to a file with json serialized ContainerSpec as
     * content.
     *
     * Generated from protobuf field <code>string container_spec_gcs_path = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setContainerSpecGcsPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * The parameters for FlexTemplate.
     * Ex. {"num_workers":"5"}
     *
     * Generated from protobuf field <code>map<string, string> parameters = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * The parameters for FlexTemplate.
     * Ex. {"num_workers":"5"}
     *
     * Generated from protobuf field <code>map<string, string> parameters = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setParameters($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->parameters = $arr;

        return $this;
    }

    /**
     * Launch options for this flex template job. This is a common set of options
     * across languages and templates. This should not be used to pass job
     * parameters.
     *
     * Generated from protobuf field <code>map<string, string> launch_options = 6;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLaunchOptions()
    {
        return $this->launch_options;
    }

    /**
     * Launch options for this flex template job. This is a common set of options
     * across languages and templates. This should not be used to pass job
     * parameters.
     *
     * Generated from protobuf field <code>map<string, string> launch_options = 6;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLaunchOptions($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->launch_options = $arr;

        return $this;
    }

    /**
     * The runtime environment for the FlexTemplate job
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.FlexTemplateRuntimeEnvironment environment = 7;</code>
     * @return \Google\Cloud\Dataflow\V1beta3\FlexTemplateRuntimeEnvironment|null
     */
    public function getEnvironment()
    {
        return isset($this->environment) ? $this->environment : null;
    }

    public function hasEnvironment()
    {
        return isset($this->environment);
    }

    public function clearEnvironment()
    {
        unset($this->environment);
    }

    /**
     * The runtime environment for the FlexTemplate job
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.FlexTemplateRuntimeEnvironment environment = 7;</code>
     * @param \Google\Cloud\Dataflow\V1beta3\FlexTemplateRuntimeEnvironment $var
     * @return $this
     */
    public function setEnvironment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataflow\V1beta3\FlexTemplateRuntimeEnvironment::class);
        $this->environment = $var;

        return $this;
    }

    /**
     * Set this to true if you are sending a request to update a running
     * streaming job. When set, the job name should be the same as the
     * running job.
     *
     * Generated from protobuf field <code>bool update = 8;</code>
     * @return bool
     */
    public function getUpdate()
    {
        return $this->update;
    }

    /**
     * Set this to true if you are sending a request to update a running
     * streaming job. When set, the job name should be the same as the
     * running job.
     *
     * Generated from protobuf field <code>bool update = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setUpdate($var)
    {
        GPBUtil::checkBool($var);
        $this->update = $var;

        return $this;
    }

    /**
     * Use this to pass transform_name_mappings for streaming update jobs.
     * Ex:{"oldTransformName":"newTransformName",...}'
     *
     * Generated from protobuf field <code>map<string, string> transform_name_mappings = 9;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getTransformNameMappings()
    {
        return $this->transform_name_mappings;
    }

    /**
     * Use this to pass transform_name_mappings for streaming update jobs.
     * Ex:{"oldTransformName":"newTransformName",...}'
     *
     * Generated from protobuf field <code>map<string, string> transform_name_mappings = 9;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setTransformNameMappings($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->transform_name_mappings = $arr;

        return $this;
    }

    /**
     * @return string
     */
    public function getTemplate()
    {
        return $this->whichOneof("template");
    }

}

<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1beta2/document_understanding.proto

namespace Google\Cloud\DocumentAI\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response to a single document processing request.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1beta2.ProcessDocumentResponse</code>
 */
class ProcessDocumentResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Information about the input file. This is the same as the corresponding
     * input config in the request.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1beta2.InputConfig input_config = 1;</code>
     */
    private $input_config = null;
    /**
     * The output location of the parsed responses. The responses are written to
     * this location as JSON-serialized `Document` objects.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1beta2.OutputConfig output_config = 2;</code>
     */
    private $output_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DocumentAI\V1beta2\InputConfig $input_config
     *           Information about the input file. This is the same as the corresponding
     *           input config in the request.
     *     @type \Google\Cloud\DocumentAI\V1beta2\OutputConfig $output_config
     *           The output location of the parsed responses. The responses are written to
     *           this location as JSON-serialized `Document` objects.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1Beta2\DocumentUnderstanding::initOnce();
        parent::__construct($data);
    }

    /**
     * Information about the input file. This is the same as the corresponding
     * input config in the request.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1beta2.InputConfig input_config = 1;</code>
     * @return \Google\Cloud\DocumentAI\V1beta2\InputConfig|null
     */
    public function getInputConfig()
    {
        return isset($this->input_config) ? $this->input_config : null;
    }

    public function hasInputConfig()
    {
        return isset($this->input_config);
    }

    public function clearInputConfig()
    {
        unset($this->input_config);
    }

    /**
     * Information about the input file. This is the same as the corresponding
     * input config in the request.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1beta2.InputConfig input_config = 1;</code>
     * @param \Google\Cloud\DocumentAI\V1beta2\InputConfig $var
     * @return $this
     */
    public function setInputConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1beta2\InputConfig::class);
        $this->input_config = $var;

        return $this;
    }

    /**
     * The output location of the parsed responses. The responses are written to
     * this location as JSON-serialized `Document` objects.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1beta2.OutputConfig output_config = 2;</code>
     * @return \Google\Cloud\DocumentAI\V1beta2\OutputConfig|null
     */
    public function getOutputConfig()
    {
        return isset($this->output_config) ? $this->output_config : null;
    }

    public function hasOutputConfig()
    {
        return isset($this->output_config);
    }

    public function clearOutputConfig()
    {
        unset($this->output_config);
    }

    /**
     * The output location of the parsed responses. The responses are written to
     * this location as JSON-serialized `Document` objects.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1beta2.OutputConfig output_config = 2;</code>
     * @param \Google\Cloud\DocumentAI\V1beta2\OutputConfig $var
     * @return $this
     */
    public function setOutputConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1beta2\OutputConfig::class);
        $this->output_config = $var;

        return $this;
    }

}

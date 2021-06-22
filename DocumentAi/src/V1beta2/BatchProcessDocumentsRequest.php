<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1beta2/document_understanding.proto

namespace Google\Cloud\DocumentAI\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to batch process documents as an asynchronous operation. The output
 * is written to Cloud Storage as JSON in the [Document] format.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1beta2.BatchProcessDocumentsRequest</code>
 */
class BatchProcessDocumentsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Individual requests for each document.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1beta2.ProcessDocumentRequest requests = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $requests;
    /**
     * Target project and location to make a call.
     * Format: `projects/{project-id}/locations/{location-id}`.
     * If no location is specified, a region will be chosen automatically.
     *
     * Generated from protobuf field <code>string parent = 2;</code>
     */
    private $parent = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DocumentAI\V1beta2\ProcessDocumentRequest[]|\Google\Protobuf\Internal\RepeatedField $requests
     *           Required. Individual requests for each document.
     *     @type string $parent
     *           Target project and location to make a call.
     *           Format: `projects/{project-id}/locations/{location-id}`.
     *           If no location is specified, a region will be chosen automatically.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1Beta2\DocumentUnderstanding::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Individual requests for each document.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1beta2.ProcessDocumentRequest requests = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRequests()
    {
        return $this->requests;
    }

    /**
     * Required. Individual requests for each document.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1beta2.ProcessDocumentRequest requests = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\DocumentAI\V1beta2\ProcessDocumentRequest[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRequests($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DocumentAI\V1beta2\ProcessDocumentRequest::class);
        $this->requests = $arr;

        return $this;
    }

    /**
     * Target project and location to make a call.
     * Format: `projects/{project-id}/locations/{location-id}`.
     * If no location is specified, a region will be chosen automatically.
     *
     * Generated from protobuf field <code>string parent = 2;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Target project and location to make a call.
     * Format: `projects/{project-id}/locations/{location-id}`.
     * If no location is specified, a region will be chosen automatically.
     *
     * Generated from protobuf field <code>string parent = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

}

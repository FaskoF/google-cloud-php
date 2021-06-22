<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1beta3/document.proto

namespace Google\Cloud\DocumentAI\V1beta3\Document\PageAnchor;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a weak reference to a page element within a document.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1beta3.Document.PageAnchor.PageRef</code>
 */
class PageRef extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Index into the [Document.pages][google.cloud.documentai.v1beta3.Document.pages] element, for example using
     * [Document.pages][page_refs.page] to locate the related page element.
     * This field is skipped when its value is the default 0. See
     * https://developers.google.com/protocol-buffers/docs/proto3#json.
     *
     * Generated from protobuf field <code>int64 page = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $page = 0;
    /**
     * Optional. The type of the layout element that is being referenced if any.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1beta3.Document.PageAnchor.PageRef.LayoutType layout_type = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $layout_type = 0;
    /**
     * Optional. Deprecated.  Use [PageRef.bounding_poly][google.cloud.documentai.v1beta3.Document.PageAnchor.PageRef.bounding_poly] instead.
     *
     * Generated from protobuf field <code>string layout_id = 3 [deprecated = true, (.google.api.field_behavior) = OPTIONAL];</code>
     * @deprecated
     */
    protected $layout_id = '';
    /**
     * Optional. Identifies the bounding polygon of a layout element on the page.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1beta3.BoundingPoly bounding_poly = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $bounding_poly = null;
    /**
     * Optional. Confidence of detected page element, if applicable. Range [0, 1].
     *
     * Generated from protobuf field <code>float confidence = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $confidence = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $page
     *           Required. Index into the [Document.pages][google.cloud.documentai.v1beta3.Document.pages] element, for example using
     *           [Document.pages][page_refs.page] to locate the related page element.
     *           This field is skipped when its value is the default 0. See
     *           https://developers.google.com/protocol-buffers/docs/proto3#json.
     *     @type int $layout_type
     *           Optional. The type of the layout element that is being referenced if any.
     *     @type string $layout_id
     *           Optional. Deprecated.  Use [PageRef.bounding_poly][google.cloud.documentai.v1beta3.Document.PageAnchor.PageRef.bounding_poly] instead.
     *     @type \Google\Cloud\DocumentAI\V1beta3\BoundingPoly $bounding_poly
     *           Optional. Identifies the bounding polygon of a layout element on the page.
     *     @type float $confidence
     *           Optional. Confidence of detected page element, if applicable. Range [0, 1].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1Beta3\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Index into the [Document.pages][google.cloud.documentai.v1beta3.Document.pages] element, for example using
     * [Document.pages][page_refs.page] to locate the related page element.
     * This field is skipped when its value is the default 0. See
     * https://developers.google.com/protocol-buffers/docs/proto3#json.
     *
     * Generated from protobuf field <code>int64 page = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int|string
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Required. Index into the [Document.pages][google.cloud.documentai.v1beta3.Document.pages] element, for example using
     * [Document.pages][page_refs.page] to locate the related page element.
     * This field is skipped when its value is the default 0. See
     * https://developers.google.com/protocol-buffers/docs/proto3#json.
     *
     * Generated from protobuf field <code>int64 page = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int|string $var
     * @return $this
     */
    public function setPage($var)
    {
        GPBUtil::checkInt64($var);
        $this->page = $var;

        return $this;
    }

    /**
     * Optional. The type of the layout element that is being referenced if any.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1beta3.Document.PageAnchor.PageRef.LayoutType layout_type = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getLayoutType()
    {
        return $this->layout_type;
    }

    /**
     * Optional. The type of the layout element that is being referenced if any.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1beta3.Document.PageAnchor.PageRef.LayoutType layout_type = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setLayoutType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DocumentAI\V1beta3\Document\PageAnchor\PageRef\LayoutType::class);
        $this->layout_type = $var;

        return $this;
    }

    /**
     * Optional. Deprecated.  Use [PageRef.bounding_poly][google.cloud.documentai.v1beta3.Document.PageAnchor.PageRef.bounding_poly] instead.
     *
     * Generated from protobuf field <code>string layout_id = 3 [deprecated = true, (.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     * @deprecated
     */
    public function getLayoutId()
    {
        @trigger_error('layout_id is deprecated.', E_USER_DEPRECATED);
        return $this->layout_id;
    }

    /**
     * Optional. Deprecated.  Use [PageRef.bounding_poly][google.cloud.documentai.v1beta3.Document.PageAnchor.PageRef.bounding_poly] instead.
     *
     * Generated from protobuf field <code>string layout_id = 3 [deprecated = true, (.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setLayoutId($var)
    {
        @trigger_error('layout_id is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->layout_id = $var;

        return $this;
    }

    /**
     * Optional. Identifies the bounding polygon of a layout element on the page.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1beta3.BoundingPoly bounding_poly = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\DocumentAI\V1beta3\BoundingPoly|null
     */
    public function getBoundingPoly()
    {
        return isset($this->bounding_poly) ? $this->bounding_poly : null;
    }

    public function hasBoundingPoly()
    {
        return isset($this->bounding_poly);
    }

    public function clearBoundingPoly()
    {
        unset($this->bounding_poly);
    }

    /**
     * Optional. Identifies the bounding polygon of a layout element on the page.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1beta3.BoundingPoly bounding_poly = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\DocumentAI\V1beta3\BoundingPoly $var
     * @return $this
     */
    public function setBoundingPoly($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1beta3\BoundingPoly::class);
        $this->bounding_poly = $var;

        return $this;
    }

    /**
     * Optional. Confidence of detected page element, if applicable. Range [0, 1].
     *
     * Generated from protobuf field <code>float confidence = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return float
     */
    public function getConfidence()
    {
        return $this->confidence;
    }

    /**
     * Optional. Confidence of detected page element, if applicable. Range [0, 1].
     *
     * Generated from protobuf field <code>float confidence = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param float $var
     * @return $this
     */
    public function setConfidence($var)
    {
        GPBUtil::checkFloat($var);
        $this->confidence = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PageRef::class, \Google\Cloud\DocumentAI\V1beta3\Document_PageAnchor_PageRef::class);

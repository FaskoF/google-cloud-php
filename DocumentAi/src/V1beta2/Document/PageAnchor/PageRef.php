<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1beta2/document.proto

namespace Google\Cloud\DocumentAI\V1beta2\Document\PageAnchor;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a weak reference to a page element within a document.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1beta2.Document.PageAnchor.PageRef</code>
 */
class PageRef extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Index into the [Document.pages][google.cloud.documentai.v1beta2.Document.pages] element
     *
     * Generated from protobuf field <code>int64 page = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $page = 0;
    /**
     * Optional. The type of the layout element that is being referenced.  If not
     * specified the whole page is assumed to be referenced.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1beta2.Document.PageAnchor.PageRef.LayoutType layout_type = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $layout_type = 0;
    /**
     * Optional. The [Page.Layout.id][google.cloud.documentai.v1beta2.Document.Page.Layout.id] on the page that this element
     * references.  If [LayoutRef.type][] is specified this id must also be
     * specified.
     *
     * Generated from protobuf field <code>string layout_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $layout_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $page
     *           Required. Index into the [Document.pages][google.cloud.documentai.v1beta2.Document.pages] element
     *     @type int $layout_type
     *           Optional. The type of the layout element that is being referenced.  If not
     *           specified the whole page is assumed to be referenced.
     *     @type string $layout_id
     *           Optional. The [Page.Layout.id][google.cloud.documentai.v1beta2.Document.Page.Layout.id] on the page that this element
     *           references.  If [LayoutRef.type][] is specified this id must also be
     *           specified.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1Beta2\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Index into the [Document.pages][google.cloud.documentai.v1beta2.Document.pages] element
     *
     * Generated from protobuf field <code>int64 page = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int|string
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Required. Index into the [Document.pages][google.cloud.documentai.v1beta2.Document.pages] element
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
     * Optional. The type of the layout element that is being referenced.  If not
     * specified the whole page is assumed to be referenced.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1beta2.Document.PageAnchor.PageRef.LayoutType layout_type = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getLayoutType()
    {
        return $this->layout_type;
    }

    /**
     * Optional. The type of the layout element that is being referenced.  If not
     * specified the whole page is assumed to be referenced.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1beta2.Document.PageAnchor.PageRef.LayoutType layout_type = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setLayoutType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DocumentAI\V1beta2\Document\PageAnchor\PageRef\LayoutType::class);
        $this->layout_type = $var;

        return $this;
    }

    /**
     * Optional. The [Page.Layout.id][google.cloud.documentai.v1beta2.Document.Page.Layout.id] on the page that this element
     * references.  If [LayoutRef.type][] is specified this id must also be
     * specified.
     *
     * Generated from protobuf field <code>string layout_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getLayoutId()
    {
        return $this->layout_id;
    }

    /**
     * Optional. The [Page.Layout.id][google.cloud.documentai.v1beta2.Document.Page.Layout.id] on the page that this element
     * references.  If [LayoutRef.type][] is specified this id must also be
     * specified.
     *
     * Generated from protobuf field <code>string layout_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setLayoutId($var)
    {
        GPBUtil::checkString($var, True);
        $this->layout_id = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PageRef::class, \Google\Cloud\DocumentAI\V1beta2\Document_PageAnchor_PageRef::class);

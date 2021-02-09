<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/common.proto

namespace Google\Cloud\Retail\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The price information of a [Product][google.cloud.retail.v2.Product].
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.PriceInfo</code>
 */
class PriceInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The 3-letter currency code defined in [ISO
     * 4217](https://www.iso.org/iso-4217-currency-codes.html).
     * If this field is an unrecognizable currency code, an INVALID_ARGUMENT
     * error is returned.
     *
     * Generated from protobuf field <code>string currency_code = 1;</code>
     */
    private $currency_code = '';
    /**
     * Price of the product.
     * Google Merchant Center property
     * [price](https://support.google.com/merchants/answer/6324371). Schema.org
     * property [Offer.priceSpecification](https://schema.org/priceSpecification).
     *
     * Generated from protobuf field <code>float price = 2;</code>
     */
    private $price = 0.0;
    /**
     * Price of the product without any discount. If zero, by default set to be
     * the [price][google.cloud.retail.v2.PriceInfo.price].
     *
     * Generated from protobuf field <code>float original_price = 3;</code>
     */
    private $original_price = 0.0;
    /**
     * The costs associated with the sale of a particular product. Used for gross
     * profit reporting.
     * * Profit = [price][google.cloud.retail.v2.PriceInfo.price] -
     * [cost][google.cloud.retail.v2.PriceInfo.cost]
     * Google Merchant Center property
     * [cost_of_goods_sold](https://support.google.com/merchants/answer/9017895).
     *
     * Generated from protobuf field <code>float cost = 4;</code>
     */
    private $cost = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $currency_code
     *           The 3-letter currency code defined in [ISO
     *           4217](https://www.iso.org/iso-4217-currency-codes.html).
     *           If this field is an unrecognizable currency code, an INVALID_ARGUMENT
     *           error is returned.
     *     @type float $price
     *           Price of the product.
     *           Google Merchant Center property
     *           [price](https://support.google.com/merchants/answer/6324371). Schema.org
     *           property [Offer.priceSpecification](https://schema.org/priceSpecification).
     *     @type float $original_price
     *           Price of the product without any discount. If zero, by default set to be
     *           the [price][google.cloud.retail.v2.PriceInfo.price].
     *     @type float $cost
     *           The costs associated with the sale of a particular product. Used for gross
     *           profit reporting.
     *           * Profit = [price][google.cloud.retail.v2.PriceInfo.price] -
     *           [cost][google.cloud.retail.v2.PriceInfo.cost]
     *           Google Merchant Center property
     *           [cost_of_goods_sold](https://support.google.com/merchants/answer/9017895).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * The 3-letter currency code defined in [ISO
     * 4217](https://www.iso.org/iso-4217-currency-codes.html).
     * If this field is an unrecognizable currency code, an INVALID_ARGUMENT
     * error is returned.
     *
     * Generated from protobuf field <code>string currency_code = 1;</code>
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currency_code;
    }

    /**
     * The 3-letter currency code defined in [ISO
     * 4217](https://www.iso.org/iso-4217-currency-codes.html).
     * If this field is an unrecognizable currency code, an INVALID_ARGUMENT
     * error is returned.
     *
     * Generated from protobuf field <code>string currency_code = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCurrencyCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->currency_code = $var;

        return $this;
    }

    /**
     * Price of the product.
     * Google Merchant Center property
     * [price](https://support.google.com/merchants/answer/6324371). Schema.org
     * property [Offer.priceSpecification](https://schema.org/priceSpecification).
     *
     * Generated from protobuf field <code>float price = 2;</code>
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Price of the product.
     * Google Merchant Center property
     * [price](https://support.google.com/merchants/answer/6324371). Schema.org
     * property [Offer.priceSpecification](https://schema.org/priceSpecification).
     *
     * Generated from protobuf field <code>float price = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setPrice($var)
    {
        GPBUtil::checkFloat($var);
        $this->price = $var;

        return $this;
    }

    /**
     * Price of the product without any discount. If zero, by default set to be
     * the [price][google.cloud.retail.v2.PriceInfo.price].
     *
     * Generated from protobuf field <code>float original_price = 3;</code>
     * @return float
     */
    public function getOriginalPrice()
    {
        return $this->original_price;
    }

    /**
     * Price of the product without any discount. If zero, by default set to be
     * the [price][google.cloud.retail.v2.PriceInfo.price].
     *
     * Generated from protobuf field <code>float original_price = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setOriginalPrice($var)
    {
        GPBUtil::checkFloat($var);
        $this->original_price = $var;

        return $this;
    }

    /**
     * The costs associated with the sale of a particular product. Used for gross
     * profit reporting.
     * * Profit = [price][google.cloud.retail.v2.PriceInfo.price] -
     * [cost][google.cloud.retail.v2.PriceInfo.cost]
     * Google Merchant Center property
     * [cost_of_goods_sold](https://support.google.com/merchants/answer/9017895).
     *
     * Generated from protobuf field <code>float cost = 4;</code>
     * @return float
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * The costs associated with the sale of a particular product. Used for gross
     * profit reporting.
     * * Profit = [price][google.cloud.retail.v2.PriceInfo.price] -
     * [cost][google.cloud.retail.v2.PriceInfo.cost]
     * Google Merchant Center property
     * [cost_of_goods_sold](https://support.google.com/merchants/answer/9017895).
     *
     * Generated from protobuf field <code>float cost = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setCost($var)
    {
        GPBUtil::checkFloat($var);
        $this->cost = $var;

        return $this;
    }

}

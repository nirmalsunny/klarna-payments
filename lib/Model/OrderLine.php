<?php

/**
 * OrderLine
 *
 * PHP version 5
 *
 * @category Class
 * @package  nirmalsunny\KlarnaPayments
 * @author   Nirmal Sunny and contributors
 * @link     https://github.com/nirmalsunny/klarna-payments
 */

/**
 * Klarna Payments API V1
 *
 * The payments API is used to create a session to offer Klarna's payment methods as part of your checkout.  As soon as the purchase is completed the order should be read and handled using the [`Order Management API`](/order-management/api/).
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.32
 */

namespace nirmalsunny\KlarnaPayments\Model;

use \ArrayAccess;
use \nirmalsunny\KlarnaPayments\ObjectSerializer;

/**
 * OrderLine Class Doc Comment
 *
 * @category Class
 * @package  nirmalsunny\KlarnaPayments
 * @author   Nirmal Sunny and contributors
 * @link     https://github.com/nirmalsunny/klarna-payments
 */
class OrderLine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'order_line';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'image_url' => 'string',
        'merchant_data' => 'string',
        'name' => 'string',
        'product_identifiers' => '\nirmalsunny\KlarnaPayments\Model\ProductIdentifiers',
        'product_url' => 'string',
        'quantity' => 'int',
        'quantity_unit' => 'string',
        'reference' => 'string',
        'tax_rate' => 'int',
        'total_amount' => 'int',
        'total_discount_amount' => 'int',
        'total_tax_amount' => 'int',
        'type' => 'string',
        'unit_price' => 'int'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'image_url' => null,
        'merchant_data' => null,
        'name' => null,
        'product_identifiers' => null,
        'product_url' => null,
        'quantity' => 'int64',
        'quantity_unit' => null,
        'reference' => null,
        'tax_rate' => 'int64',
        'total_amount' => 'int64',
        'total_discount_amount' => 'int64',
        'total_tax_amount' => 'int64',
        'type' => null,
        'unit_price' => 'int64'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'image_url' => 'image_url',
        'merchant_data' => 'merchant_data',
        'name' => 'name',
        'product_identifiers' => 'product_identifiers',
        'product_url' => 'product_url',
        'quantity' => 'quantity',
        'quantity_unit' => 'quantity_unit',
        'reference' => 'reference',
        'tax_rate' => 'tax_rate',
        'total_amount' => 'total_amount',
        'total_discount_amount' => 'total_discount_amount',
        'total_tax_amount' => 'total_tax_amount',
        'type' => 'type',
        'unit_price' => 'unit_price'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'image_url' => 'setImageUrl',
        'merchant_data' => 'setMerchantData',
        'name' => 'setName',
        'product_identifiers' => 'setProductIdentifiers',
        'product_url' => 'setProductUrl',
        'quantity' => 'setQuantity',
        'quantity_unit' => 'setQuantityUnit',
        'reference' => 'setReference',
        'tax_rate' => 'setTaxRate',
        'total_amount' => 'setTotalAmount',
        'total_discount_amount' => 'setTotalDiscountAmount',
        'total_tax_amount' => 'setTotalTaxAmount',
        'type' => 'setType',
        'unit_price' => 'setUnitPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'image_url' => 'getImageUrl',
        'merchant_data' => 'getMerchantData',
        'name' => 'getName',
        'product_identifiers' => 'getProductIdentifiers',
        'product_url' => 'getProductUrl',
        'quantity' => 'getQuantity',
        'quantity_unit' => 'getQuantityUnit',
        'reference' => 'getReference',
        'tax_rate' => 'getTaxRate',
        'total_amount' => 'getTotalAmount',
        'total_discount_amount' => 'getTotalDiscountAmount',
        'total_tax_amount' => 'getTotalTaxAmount',
        'type' => 'getType',
        'unit_price' => 'getUnitPrice'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }



    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['image_url'] = isset($data['image_url']) ? $data['image_url'] : null;
        $this->container['merchant_data'] = isset($data['merchant_data']) ? $data['merchant_data'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['product_identifiers'] = isset($data['product_identifiers']) ? $data['product_identifiers'] : null;
        $this->container['product_url'] = isset($data['product_url']) ? $data['product_url'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['quantity_unit'] = isset($data['quantity_unit']) ? $data['quantity_unit'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['tax_rate'] = isset($data['tax_rate']) ? $data['tax_rate'] : null;
        $this->container['total_amount'] = isset($data['total_amount']) ? $data['total_amount'] : null;
        $this->container['total_discount_amount'] = isset($data['total_discount_amount']) ? $data['total_discount_amount'] : null;
        $this->container['total_tax_amount'] = isset($data['total_tax_amount']) ? $data['total_tax_amount'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['unit_price'] = isset($data['unit_price']) ? $data['unit_price'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['total_amount'] === null) {
            $invalidProperties[] = "'total_amount' can't be null";
        }
        if ($this->container['unit_price'] === null) {
            $invalidProperties[] = "'unit_price' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets image_url
     *
     * @return string
     */
    public function getImageUrl()
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     *
     * @param string $image_url URL to an image that can be later embedded in communications between Klarna and the customer. (max 1024 characters).  A minimum of 250x250 px resolution is recommended for the image to look good in the Klarna app, and below 50x50 px won't even show. We recommend using a good sized image (650x650 px or more), however the file size must not exceed 12MB.
     *
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets merchant_data
     *
     * @return string
     */
    public function getMerchantData()
    {
        return $this->container['merchant_data'];
    }

    /**
     * Sets merchant_data
     *
     * @param string $merchant_data Used for storing merchant's internal order number or other reference. Pass through field. (max 255 characters)
     *
     * @return $this
     */
    public function setMerchantData($merchant_data)
    {
        $this->container['merchant_data'] = $merchant_data;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Descriptive name of the order line item.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets product_identifiers
     *
     * @return \nirmalsunny\KlarnaPayments\Model\ProductIdentifiers
     */
    public function getProductIdentifiers()
    {
        return $this->container['product_identifiers'];
    }

    /**
     * Sets product_identifiers
     *
     * @param \nirmalsunny\KlarnaPayments\Model\ProductIdentifiers $product_identifiers product_identifiers
     *
     * @return $this
     */
    public function setProductIdentifiers($product_identifiers)
    {
        $this->container['product_identifiers'] = $product_identifiers;

        return $this;
    }

    /**
     * Gets product_url
     *
     * @return string
     */
    public function getProductUrl()
    {
        return $this->container['product_url'];
    }

    /**
     * Sets product_url
     *
     * @param string $product_url URL to the product in the merchant’s webshop that can be later used in communications between Klarna and the customer. (max 1024 characters)
     *
     * @return $this
     */
    public function setProductUrl($product_url)
    {
        $this->container['product_url'] = $product_url;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity Quantity of the order line item. Must be a non-negative number.
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets quantity_unit
     *
     * @return string
     */
    public function getQuantityUnit()
    {
        return $this->container['quantity_unit'];
    }

    /**
     * Sets quantity_unit
     *
     * @param string $quantity_unit Unit used to describe the quantity, e.g. kg, pcs, etc. If defined the value has to be 1-8 characters.
     *
     * @return $this
     */
    public function setQuantityUnit($quantity_unit)
    {
        $this->container['quantity_unit'] = $quantity_unit;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string $reference Client facing article number, SKU or similar. Max length is 64 characters.
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets tax_rate
     *
     * @return int
     */
    public function getTaxRate()
    {
        return $this->container['tax_rate'];
    }

    /**
     * Sets tax_rate
     *
     * @param int $tax_rate Tax rate of the order line. Non-negative value. The percentage value is represented with two implicit decimals. I.e 1900 = 19%.
     *
     * @return $this
     */
    public function setTaxRate($tax_rate)
    {
        $this->container['tax_rate'] = $tax_rate;

        return $this;
    }

    /**
     * Gets total_amount
     *
     * @return int
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param int $total_amount Total amount of the order line. Must be defined as non-negative minor units. Includes tax and discount. Eg: 2500=25 euros Value = (quantity x unit_price) - total_discount_amount.  (max value: 100000000)
     *
     * @return $this
     */
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;

        return $this;
    }

    /**
     * Gets total_discount_amount
     *
     * @return int
     */
    public function getTotalDiscountAmount()
    {
        return $this->container['total_discount_amount'];
    }

    /**
     * Sets total_discount_amount
     *
     * @param int $total_discount_amount Non-negative minor units. Includes tax. Eg: 500=5 euros
     *
     * @return $this
     */
    public function setTotalDiscountAmount($total_discount_amount)
    {
        $this->container['total_discount_amount'] = $total_discount_amount;

        return $this;
    }

    /**
     * Gets total_tax_amount
     *
     * @return int
     */
    public function getTotalTaxAmount()
    {
        return $this->container['total_tax_amount'];
    }

    /**
     * Sets total_tax_amount
     *
     * @param int $total_tax_amount Total tax amount of the order line. Must be within ±1 of total_amount - total_amount 10000 / (10000 + tax_rate). Negative when type is discount.
     *
     * @return $this
     */
    public function setTotalTaxAmount($total_tax_amount)
    {
        $this->container['total_tax_amount'] = $total_tax_amount;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Type of the order line item. The possible values are:  physical discount shipping_fee sales_tax digital gift_card store_credit surcharge
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets unit_price
     *
     * @return int
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param int $unit_price Price for a single unit of the order line. Non-negative minor units. Includes tax, excludes discount. (max value: 100000000)
     *
     * @return $this
     */
    public function setUnitPrice($unit_price)
    {
        $this->container['unit_price'] = $unit_price;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

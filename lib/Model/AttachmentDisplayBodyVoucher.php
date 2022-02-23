<?php
/**
 * AttachmentDisplayBodyVoucher
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
 * AttachmentDisplayBodyVoucher Class Doc Comment
 *
 * @category Class
 * @package  nirmalsunny\KlarnaPayments
 * @author   Nirmal Sunny and contributors
 * @link     https://github.com/nirmalsunny/klarna-payments
 */
class AttachmentDisplayBodyVoucher implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'attachment_display_body_voucher';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'voucher_name' => 'string',
'voucher_company' => 'string',
'start_time' => '\DateTime',
'end_time' => '\DateTime',
'affiliate_name' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'voucher_name' => null,
'voucher_company' => null,
'start_time' => 'date-time',
'end_time' => 'date-time',
'affiliate_name' => null    ];

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
        'voucher_name' => 'voucher_name',
'voucher_company' => 'voucher_company',
'start_time' => 'start_time',
'end_time' => 'end_time',
'affiliate_name' => 'affiliate_name'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'voucher_name' => 'setVoucherName',
'voucher_company' => 'setVoucherCompany',
'start_time' => 'setStartTime',
'end_time' => 'setEndTime',
'affiliate_name' => 'setAffiliateName'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'voucher_name' => 'getVoucherName',
'voucher_company' => 'getVoucherCompany',
'start_time' => 'getStartTime',
'end_time' => 'getEndTime',
'affiliate_name' => 'getAffiliateName'    ];

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
        $this->container['voucher_name'] = isset($data['voucher_name']) ? $data['voucher_name'] : null;
        $this->container['voucher_company'] = isset($data['voucher_company']) ? $data['voucher_company'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['end_time'] = isset($data['end_time']) ? $data['end_time'] : null;
        $this->container['affiliate_name'] = isset($data['affiliate_name']) ? $data['affiliate_name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets voucher_name
     *
     * @return string
     */
    public function getVoucherName()
    {
        return $this->container['voucher_name'];
    }

    /**
     * Sets voucher_name
     *
     * @param string $voucher_name Description of the product the voucher entitles to, e.g. \"China trip\"
     *
     * @return $this
     */
    public function setVoucherName($voucher_name)
    {
        $this->container['voucher_name'] = $voucher_name;

        return $this;
    }

    /**
     * Gets voucher_company
     *
     * @return string
     */
    public function getVoucherCompany()
    {
        return $this->container['voucher_company'];
    }

    /**
     * Sets voucher_company
     *
     * @param string $voucher_company Name of the company that will provide good / service upon voucher (not the same as the selling merchant), e.g. \"Sun Trips Ltd.\"
     *
     * @return $this
     */
    public function setVoucherCompany($voucher_company)
    {
        $this->container['voucher_company'] = $voucher_company;

        return $this;
    }

    /**
     * Gets start_time
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param \DateTime $start_time ISO 8601 e.g. 2012-11-24T15:00
     *
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets end_time
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     *
     * @param \DateTime $end_time ISO 8601 e.g. 2012-11-24T15:00
     *
     * @return $this
     */
    public function setEndTime($end_time)
    {
        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets affiliate_name
     *
     * @return string
     */
    public function getAffiliateName()
    {
        return $this->container['affiliate_name'];
    }

    /**
     * Sets affiliate_name
     *
     * @param string $affiliate_name Name of the affiliate that originated the purchase. If none, leave blank.
     *
     * @return $this
     */
    public function setAffiliateName($affiliate_name)
    {
        $this->container['affiliate_name'] = $affiliate_name;

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

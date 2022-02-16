<?php
/**
 * AttachmentDisplayBodyPaymentHistoryFull
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
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
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * AttachmentDisplayBodyPaymentHistoryFull Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AttachmentDisplayBodyPaymentHistoryFull implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'attachment_display_body_payment_history_full';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'unique_account_identifier' => 'string',
'payment_option' => 'string',
'number_paid_purchases' => 'int',
'total_amount_paid_purchases' => 'float',
'date_of_last_paid_purchase' => '\DateTime',
'date_of_first_paid_purchase' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'unique_account_identifier' => null,
'payment_option' => null,
'number_paid_purchases' => null,
'total_amount_paid_purchases' => null,
'date_of_last_paid_purchase' => 'date-time',
'date_of_first_paid_purchase' => 'date-time'    ];

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
        'unique_account_identifier' => 'unique_account_identifier',
'payment_option' => 'payment_option',
'number_paid_purchases' => 'number_paid_purchases',
'total_amount_paid_purchases' => 'total_amount_paid_purchases',
'date_of_last_paid_purchase' => 'date_of_last_paid_purchase',
'date_of_first_paid_purchase' => 'date_of_first_paid_purchase'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'unique_account_identifier' => 'setUniqueAccountIdentifier',
'payment_option' => 'setPaymentOption',
'number_paid_purchases' => 'setNumberPaidPurchases',
'total_amount_paid_purchases' => 'setTotalAmountPaidPurchases',
'date_of_last_paid_purchase' => 'setDateOfLastPaidPurchase',
'date_of_first_paid_purchase' => 'setDateOfFirstPaidPurchase'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'unique_account_identifier' => 'getUniqueAccountIdentifier',
'payment_option' => 'getPaymentOption',
'number_paid_purchases' => 'getNumberPaidPurchases',
'total_amount_paid_purchases' => 'getTotalAmountPaidPurchases',
'date_of_last_paid_purchase' => 'getDateOfLastPaidPurchase',
'date_of_first_paid_purchase' => 'getDateOfFirstPaidPurchase'    ];

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

    const PAYMENT_OPTION_CARD = 'card';
const PAYMENT_OPTION_DIRECT_BANKING = 'direct banking';
const PAYMENT_OPTION_NON_KLARNA_CREDIT = 'non klarna credit';
const PAYMENT_OPTION_SMS = 'sms';
const PAYMENT_OPTION_OTHER = 'other';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentOptionAllowableValues()
    {
        return [
            self::PAYMENT_OPTION_CARD,
self::PAYMENT_OPTION_DIRECT_BANKING,
self::PAYMENT_OPTION_NON_KLARNA_CREDIT,
self::PAYMENT_OPTION_SMS,
self::PAYMENT_OPTION_OTHER,        ];
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
        $this->container['unique_account_identifier'] = isset($data['unique_account_identifier']) ? $data['unique_account_identifier'] : null;
        $this->container['payment_option'] = isset($data['payment_option']) ? $data['payment_option'] : null;
        $this->container['number_paid_purchases'] = isset($data['number_paid_purchases']) ? $data['number_paid_purchases'] : null;
        $this->container['total_amount_paid_purchases'] = isset($data['total_amount_paid_purchases']) ? $data['total_amount_paid_purchases'] : null;
        $this->container['date_of_last_paid_purchase'] = isset($data['date_of_last_paid_purchase']) ? $data['date_of_last_paid_purchase'] : null;
        $this->container['date_of_first_paid_purchase'] = isset($data['date_of_first_paid_purchase']) ? $data['date_of_first_paid_purchase'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPaymentOptionAllowableValues();
        if (!is_null($this->container['payment_option']) && !in_array($this->container['payment_option'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'payment_option', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets unique_account_identifier
     *
     * @return string
     */
    public function getUniqueAccountIdentifier()
    {
        return $this->container['unique_account_identifier'];
    }

    /**
     * Sets unique_account_identifier
     *
     * @param string $unique_account_identifier Unique name / number to identify the specific customer account. Max 24 characters. E.g. \"Adam Adamsson\"
     *
     * @return $this
     */
    public function setUniqueAccountIdentifier($unique_account_identifier)
    {
        $this->container['unique_account_identifier'] = $unique_account_identifier;

        return $this;
    }

    /**
     * Gets payment_option
     *
     * @return string
     */
    public function getPaymentOption()
    {
        return $this->container['payment_option'];
    }

    /**
     * Sets payment_option
     *
     * @param string $payment_option payment_option
     *
     * @return $this
     */
    public function setPaymentOption($payment_option)
    {
        $allowedValues = $this->getPaymentOptionAllowableValues();
        if (!is_null($payment_option) && !in_array($payment_option, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'payment_option', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_option'] = $payment_option;

        return $this;
    }

    /**
     * Gets number_paid_purchases
     *
     * @return int
     */
    public function getNumberPaidPurchases()
    {
        return $this->container['number_paid_purchases'];
    }

    /**
     * Sets number_paid_purchases
     *
     * @param int $number_paid_purchases Total number of successful purchases
     *
     * @return $this
     */
    public function setNumberPaidPurchases($number_paid_purchases)
    {
        $this->container['number_paid_purchases'] = $number_paid_purchases;

        return $this;
    }

    /**
     * Gets total_amount_paid_purchases
     *
     * @return float
     */
    public function getTotalAmountPaidPurchases()
    {
        return $this->container['total_amount_paid_purchases'];
    }

    /**
     * Sets total_amount_paid_purchases
     *
     * @param float $total_amount_paid_purchases Total amount of successful purchases (local currency), e.g. 1234.00
     *
     * @return $this
     */
    public function setTotalAmountPaidPurchases($total_amount_paid_purchases)
    {
        $this->container['total_amount_paid_purchases'] = $total_amount_paid_purchases;

        return $this;
    }

    /**
     * Gets date_of_last_paid_purchase
     *
     * @return \DateTime
     */
    public function getDateOfLastPaidPurchase()
    {
        return $this->container['date_of_last_paid_purchase'];
    }

    /**
     * Sets date_of_last_paid_purchase
     *
     * @param \DateTime $date_of_last_paid_purchase ISO 8601 e.g. 2012-11-24T15:00
     *
     * @return $this
     */
    public function setDateOfLastPaidPurchase($date_of_last_paid_purchase)
    {
        $this->container['date_of_last_paid_purchase'] = $date_of_last_paid_purchase;

        return $this;
    }

    /**
     * Gets date_of_first_paid_purchase
     *
     * @return \DateTime
     */
    public function getDateOfFirstPaidPurchase()
    {
        return $this->container['date_of_first_paid_purchase'];
    }

    /**
     * Sets date_of_first_paid_purchase
     *
     * @param \DateTime $date_of_first_paid_purchase ISO 8601 e.g. 2012-11-24T15:00
     *
     * @return $this
     */
    public function setDateOfFirstPaidPurchase($date_of_first_paid_purchase)
    {
        $this->container['date_of_first_paid_purchase'] = $date_of_first_paid_purchase;

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

<?php
/**
 * AttachmentDisplayBodyCustomerAccountInfo
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
 * AttachmentDisplayBodyCustomerAccountInfo Class Doc Comment
 *
 * @category Class
 * @package  nirmalsunny\KlarnaPayments
 * @author   Nirmal Sunny and contributors
 * @link     https://github.com/nirmalsunny/klarna-payments
 */
class AttachmentDisplayBodyCustomerAccountInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'attachment_display_body_customer_account_info';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'unique_account_identifier' => 'string',
'account_registration_date' => '\DateTime',
'account_last_modified' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'unique_account_identifier' => null,
'account_registration_date' => 'date-time',
'account_last_modified' => 'date-time'    ];

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
'account_registration_date' => 'account_registration_date',
'account_last_modified' => 'account_last_modified'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'unique_account_identifier' => 'setUniqueAccountIdentifier',
'account_registration_date' => 'setAccountRegistrationDate',
'account_last_modified' => 'setAccountLastModified'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'unique_account_identifier' => 'getUniqueAccountIdentifier',
'account_registration_date' => 'getAccountRegistrationDate',
'account_last_modified' => 'getAccountLastModified'    ];

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
        $this->container['unique_account_identifier'] = isset($data['unique_account_identifier']) ? $data['unique_account_identifier'] : null;
        $this->container['account_registration_date'] = isset($data['account_registration_date']) ? $data['account_registration_date'] : null;
        $this->container['account_last_modified'] = isset($data['account_last_modified']) ? $data['account_last_modified'] : null;
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
     * Gets account_registration_date
     *
     * @return \DateTime
     */
    public function getAccountRegistrationDate()
    {
        return $this->container['account_registration_date'];
    }

    /**
     * Sets account_registration_date
     *
     * @param \DateTime $account_registration_date ISO 8601 e.g. 2012-11-24T15:00
     *
     * @return $this
     */
    public function setAccountRegistrationDate($account_registration_date)
    {
        $this->container['account_registration_date'] = $account_registration_date;

        return $this;
    }

    /**
     * Gets account_last_modified
     *
     * @return \DateTime
     */
    public function getAccountLastModified()
    {
        return $this->container['account_last_modified'];
    }

    /**
     * Sets account_last_modified
     *
     * @param \DateTime $account_last_modified ISO 8601 e.g. 2012-11-24T15:00
     *
     * @return $this
     */
    public function setAccountLastModified($account_last_modified)
    {
        $this->container['account_last_modified'] = $account_last_modified;

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

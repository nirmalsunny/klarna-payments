<?php
/**
 * AttachmentDisplayBodyAccountLastModified
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
 * AttachmentDisplayBodyAccountLastModified Class Doc Comment
 *
 * @category Class
 * @package  nirmalsunny\KlarnaPayments
 * @author   Nirmal Sunny and contributors
 * @link     https://github.com/nirmalsunny/klarna-payments
 */
class AttachmentDisplayBodyAccountLastModified implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'attachment_display_body_account_last_modified';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'password' => '\DateTime',
'email' => '\DateTime',
'listing' => '\DateTime',
'login' => '\DateTime',
'address' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'password' => 'date-time',
'email' => 'date-time',
'listing' => 'date-time',
'login' => 'date-time',
'address' => 'date-time'    ];

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
        'password' => 'password',
'email' => 'email',
'listing' => 'listing',
'login' => 'login',
'address' => 'address'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'password' => 'setPassword',
'email' => 'setEmail',
'listing' => 'setListing',
'login' => 'setLogin',
'address' => 'setAddress'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'password' => 'getPassword',
'email' => 'getEmail',
'listing' => 'getListing',
'login' => 'getLogin',
'address' => 'getAddress'    ];

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
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['listing'] = isset($data['listing']) ? $data['listing'] : null;
        $this->container['login'] = isset($data['login']) ? $data['login'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
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
     * Gets password
     *
     * @return \DateTime
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param \DateTime $password ISO 8601 e.g. 2012-11-24T15:00
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets email
     *
     * @return \DateTime
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param \DateTime $email ISO 8601 e.g. 2012-11-24T15:00
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets listing
     *
     * @return \DateTime
     */
    public function getListing()
    {
        return $this->container['listing'];
    }

    /**
     * Sets listing
     *
     * @param \DateTime $listing ISO 8601 e.g. 2012-11-24T15:00
     *
     * @return $this
     */
    public function setListing($listing)
    {
        $this->container['listing'] = $listing;

        return $this;
    }

    /**
     * Gets login
     *
     * @return \DateTime
     */
    public function getLogin()
    {
        return $this->container['login'];
    }

    /**
     * Sets login
     *
     * @param \DateTime $login ISO 8601 e.g. 2012-11-24T15:00
     *
     * @return $this
     */
    public function setLogin($login)
    {
        $this->container['login'] = $login;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \DateTime
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \DateTime $address ISO 8601 e.g. 2012-11-24T15:00
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

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

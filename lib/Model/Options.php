<?php
/**
 * Options
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
 * Options Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Options implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'options';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'color_border' => 'string',
'color_border_selected' => 'string',
'color_details' => 'string',
'color_text' => 'string',
'radius_border' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'color_border' => null,
'color_border_selected' => null,
'color_details' => null,
'color_text' => null,
'radius_border' => null    ];

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
        'color_border' => 'color_border',
'color_border_selected' => 'color_border_selected',
'color_details' => 'color_details',
'color_text' => 'color_text',
'radius_border' => 'radius_border'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'color_border' => 'setColorBorder',
'color_border_selected' => 'setColorBorderSelected',
'color_details' => 'setColorDetails',
'color_text' => 'setColorText',
'radius_border' => 'setRadiusBorder'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'color_border' => 'getColorBorder',
'color_border_selected' => 'getColorBorderSelected',
'color_details' => 'getColorDetails',
'color_text' => 'getColorText',
'radius_border' => 'getRadiusBorder'    ];

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
        $this->container['color_border'] = isset($data['color_border']) ? $data['color_border'] : null;
        $this->container['color_border_selected'] = isset($data['color_border_selected']) ? $data['color_border_selected'] : null;
        $this->container['color_details'] = isset($data['color_details']) ? $data['color_details'] : null;
        $this->container['color_text'] = isset($data['color_text']) ? $data['color_text'] : null;
        $this->container['radius_border'] = isset($data['radius_border']) ? $data['radius_border'] : null;
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
     * Gets color_border
     *
     * @return string
     */
    public function getColorBorder()
    {
        return $this->container['color_border'];
    }

    /**
     * Sets color_border
     *
     * @param string $color_border Color for the border of elements within the iFrame. Value should be a CSS hex color, e.g. \"#FF9900\"
     *
     * @return $this
     */
    public function setColorBorder($color_border)
    {
        $this->container['color_border'] = $color_border;

        return $this;
    }

    /**
     * Gets color_border_selected
     *
     * @return string
     */
    public function getColorBorderSelected()
    {
        return $this->container['color_border_selected'];
    }

    /**
     * Sets color_border_selected
     *
     * @param string $color_border_selected Color for the border of elements within the iFrame when selected by the customer. Value should be a CSS hex color, e.g. \"#FF9900\"
     *
     * @return $this
     */
    public function setColorBorderSelected($color_border_selected)
    {
        $this->container['color_border_selected'] = $color_border_selected;

        return $this;
    }

    /**
     * Gets color_details
     *
     * @return string
     */
    public function getColorDetails()
    {
        return $this->container['color_details'];
    }

    /**
     * Sets color_details
     *
     * @param string $color_details Color for the bullet points within the iFrame. Value should be a CSS hex color, e.g. \"#FF9900\"
     *
     * @return $this
     */
    public function setColorDetails($color_details)
    {
        $this->container['color_details'] = $color_details;

        return $this;
    }

    /**
     * Gets color_text
     *
     * @return string
     */
    public function getColorText()
    {
        return $this->container['color_text'];
    }

    /**
     * Sets color_text
     *
     * @param string $color_text Color for the texts within the iFrame. Value should be a CSS hex color, e.g. \"#FF9900\"
     *
     * @return $this
     */
    public function setColorText($color_text)
    {
        $this->container['color_text'] = $color_text;

        return $this;
    }

    /**
     * Gets radius_border
     *
     * @return string
     */
    public function getRadiusBorder()
    {
        return $this->container['radius_border'];
    }

    /**
     * Sets radius_border
     *
     * @param string $radius_border Radius for the border of elements within the iFrame.
     *
     * @return $this
     */
    public function setRadiusBorder($radius_border)
    {
        $this->container['radius_border'] = $radius_border;

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

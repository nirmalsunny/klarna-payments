<?php
/**
 * AttachmentDisplayBodyHotelReservationDetails
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
 * AttachmentDisplayBodyHotelReservationDetails Class Doc Comment
 *
 * @category Class
 * @package  nirmalsunny\KlarnaPayments
 * @author   Nirmal Sunny and contributors
 * @link     https://github.com/nirmalsunny/klarna-payments
 */
class AttachmentDisplayBodyHotelReservationDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'attachment_display_body_hotel_reservation_details';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pnr' => 'string',
'hotel_itinerary' => '\nirmalsunny\KlarnaPayments\Model\AttachmentDisplayBodyHotelItinerary[]',
'insurance' => '\nirmalsunny\KlarnaPayments\Model\AttachmentDisplayBodyInsurance[]',
'passengers' => '\nirmalsunny\KlarnaPayments\Model\AttachmentDisplayBodyPassengers[]',
'affiliate_name' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pnr' => null,
'hotel_itinerary' => null,
'insurance' => null,
'passengers' => null,
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
        'pnr' => 'pnr',
'hotel_itinerary' => 'hotel_itinerary',
'insurance' => 'insurance',
'passengers' => 'passengers',
'affiliate_name' => 'affiliate_name'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pnr' => 'setPnr',
'hotel_itinerary' => 'setHotelItinerary',
'insurance' => 'setInsurance',
'passengers' => 'setPassengers',
'affiliate_name' => 'setAffiliateName'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pnr' => 'getPnr',
'hotel_itinerary' => 'getHotelItinerary',
'insurance' => 'getInsurance',
'passengers' => 'getPassengers',
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
        $this->container['pnr'] = isset($data['pnr']) ? $data['pnr'] : null;
        $this->container['hotel_itinerary'] = isset($data['hotel_itinerary']) ? $data['hotel_itinerary'] : null;
        $this->container['insurance'] = isset($data['insurance']) ? $data['insurance'] : null;
        $this->container['passengers'] = isset($data['passengers']) ? $data['passengers'] : null;
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
     * Gets pnr
     *
     * @return string
     */
    public function getPnr()
    {
        return $this->container['pnr'];
    }

    /**
     * Sets pnr
     *
     * @param string $pnr Trip booking number, e.g. VH67899
     *
     * @return $this
     */
    public function setPnr($pnr)
    {
        $this->container['pnr'] = $pnr;

        return $this;
    }

    /**
     * Gets hotel_itinerary
     *
     * @return \nirmalsunny\KlarnaPayments\Model\AttachmentDisplayBodyHotelItinerary[]
     */
    public function getHotelItinerary()
    {
        return $this->container['hotel_itinerary'];
    }

    /**
     * Sets hotel_itinerary
     *
     * @param \nirmalsunny\KlarnaPayments\Model\AttachmentDisplayBodyHotelItinerary[] $hotel_itinerary Hotel itinerary data, one per hotel stay
     *
     * @return $this
     */
    public function setHotelItinerary($hotel_itinerary)
    {
        $this->container['hotel_itinerary'] = $hotel_itinerary;

        return $this;
    }

    /**
     * Gets insurance
     *
     * @return \nirmalsunny\KlarnaPayments\Model\AttachmentDisplayBodyInsurance[]
     */
    public function getInsurance()
    {
        return $this->container['insurance'];
    }

    /**
     * Sets insurance
     *
     * @param \nirmalsunny\KlarnaPayments\Model\AttachmentDisplayBodyInsurance[] $insurance Insurance data
     *
     * @return $this
     */
    public function setInsurance($insurance)
    {
        $this->container['insurance'] = $insurance;

        return $this;
    }

    /**
     * Gets passengers
     *
     * @return \nirmalsunny\KlarnaPayments\Model\AttachmentDisplayBodyPassengers[]
     */
    public function getPassengers()
    {
        return $this->container['passengers'];
    }

    /**
     * Sets passengers
     *
     * @param \nirmalsunny\KlarnaPayments\Model\AttachmentDisplayBodyPassengers[] $passengers Passengers data
     *
     * @return $this
     */
    public function setPassengers($passengers)
    {
        $this->container['passengers'] = $passengers;

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

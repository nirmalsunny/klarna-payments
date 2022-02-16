<?php
/**
 * AttachmentDisplayBodyItinerary
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
 * AttachmentDisplayBodyItinerary Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AttachmentDisplayBodyItinerary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'attachment_display_body_itinerary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'departure' => 'string',
'departure_city' => 'string',
'arrival' => 'string',
'arrival_city' => 'string',
'carrier' => 'string',
'segment_price' => 'float',
'departure_date' => '\DateTime',
'ticket_delivery_method' => 'string',
'ticket_delivery_recipient' => 'string',
'passenger_id' => 'int[]',
'class' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'departure' => null,
'departure_city' => null,
'arrival' => null,
'arrival_city' => null,
'carrier' => null,
'segment_price' => null,
'departure_date' => 'date-time',
'ticket_delivery_method' => null,
'ticket_delivery_recipient' => null,
'passenger_id' => null,
'class' => null    ];

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
        'departure' => 'departure',
'departure_city' => 'departure_city',
'arrival' => 'arrival',
'arrival_city' => 'arrival_city',
'carrier' => 'carrier',
'segment_price' => 'segment_price',
'departure_date' => 'departure_date',
'ticket_delivery_method' => 'ticket_delivery_method',
'ticket_delivery_recipient' => 'ticket_delivery_recipient',
'passenger_id' => 'passenger_id',
'class' => 'class'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'departure' => 'setDeparture',
'departure_city' => 'setDepartureCity',
'arrival' => 'setArrival',
'arrival_city' => 'setArrivalCity',
'carrier' => 'setCarrier',
'segment_price' => 'setSegmentPrice',
'departure_date' => 'setDepartureDate',
'ticket_delivery_method' => 'setTicketDeliveryMethod',
'ticket_delivery_recipient' => 'setTicketDeliveryRecipient',
'passenger_id' => 'setPassengerId',
'class' => 'setClass'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'departure' => 'getDeparture',
'departure_city' => 'getDepartureCity',
'arrival' => 'getArrival',
'arrival_city' => 'getArrivalCity',
'carrier' => 'getCarrier',
'segment_price' => 'getSegmentPrice',
'departure_date' => 'getDepartureDate',
'ticket_delivery_method' => 'getTicketDeliveryMethod',
'ticket_delivery_recipient' => 'getTicketDeliveryRecipient',
'passenger_id' => 'getPassengerId',
'class' => 'getClass'    ];

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
        $this->container['departure'] = isset($data['departure']) ? $data['departure'] : null;
        $this->container['departure_city'] = isset($data['departure_city']) ? $data['departure_city'] : null;
        $this->container['arrival'] = isset($data['arrival']) ? $data['arrival'] : null;
        $this->container['arrival_city'] = isset($data['arrival_city']) ? $data['arrival_city'] : null;
        $this->container['carrier'] = isset($data['carrier']) ? $data['carrier'] : null;
        $this->container['segment_price'] = isset($data['segment_price']) ? $data['segment_price'] : null;
        $this->container['departure_date'] = isset($data['departure_date']) ? $data['departure_date'] : null;
        $this->container['ticket_delivery_method'] = isset($data['ticket_delivery_method']) ? $data['ticket_delivery_method'] : null;
        $this->container['ticket_delivery_recipient'] = isset($data['ticket_delivery_recipient']) ? $data['ticket_delivery_recipient'] : null;
        $this->container['passenger_id'] = isset($data['passenger_id']) ? $data['passenger_id'] : null;
        $this->container['class'] = isset($data['class']) ? $data['class'] : null;
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
     * Gets departure
     *
     * @return string
     */
    public function getDeparture()
    {
        return $this->container['departure'];
    }

    /**
     * Sets departure
     *
     * @param string $departure IATA Airport Code (three letters)
     *
     * @return $this
     */
    public function setDeparture($departure)
    {
        $this->container['departure'] = $departure;

        return $this;
    }

    /**
     * Gets departure_city
     *
     * @return string
     */
    public function getDepartureCity()
    {
        return $this->container['departure_city'];
    }

    /**
     * Sets departure_city
     *
     * @param string $departure_city departure_city
     *
     * @return $this
     */
    public function setDepartureCity($departure_city)
    {
        $this->container['departure_city'] = $departure_city;

        return $this;
    }

    /**
     * Gets arrival
     *
     * @return string
     */
    public function getArrival()
    {
        return $this->container['arrival'];
    }

    /**
     * Sets arrival
     *
     * @param string $arrival IATA Airport Code (three letters)
     *
     * @return $this
     */
    public function setArrival($arrival)
    {
        $this->container['arrival'] = $arrival;

        return $this;
    }

    /**
     * Gets arrival_city
     *
     * @return string
     */
    public function getArrivalCity()
    {
        return $this->container['arrival_city'];
    }

    /**
     * Sets arrival_city
     *
     * @param string $arrival_city arrival_city
     *
     * @return $this
     */
    public function setArrivalCity($arrival_city)
    {
        $this->container['arrival_city'] = $arrival_city;

        return $this;
    }

    /**
     * Gets carrier
     *
     * @return string
     */
    public function getCarrier()
    {
        return $this->container['carrier'];
    }

    /**
     * Sets carrier
     *
     * @param string $carrier IATA Airline standard (two letters or digits)
     *
     * @return $this
     */
    public function setCarrier($carrier)
    {
        $this->container['carrier'] = $carrier;

        return $this;
    }

    /**
     * Gets segment_price
     *
     * @return float
     */
    public function getSegmentPrice()
    {
        return $this->container['segment_price'];
    }

    /**
     * Sets segment_price
     *
     * @param float $segment_price Local currency
     *
     * @return $this
     */
    public function setSegmentPrice($segment_price)
    {
        $this->container['segment_price'] = $segment_price;

        return $this;
    }

    /**
     * Gets departure_date
     *
     * @return \DateTime
     */
    public function getDepartureDate()
    {
        return $this->container['departure_date'];
    }

    /**
     * Sets departure_date
     *
     * @param \DateTime $departure_date ISO 8601 e.g. 2012-11-24T15:00
     *
     * @return $this
     */
    public function setDepartureDate($departure_date)
    {
        $this->container['departure_date'] = $departure_date;

        return $this;
    }

    /**
     * Gets ticket_delivery_method
     *
     * @return string
     */
    public function getTicketDeliveryMethod()
    {
        return $this->container['ticket_delivery_method'];
    }

    /**
     * Sets ticket_delivery_method
     *
     * @param string $ticket_delivery_method ticket_delivery_method
     *
     * @return $this
     */
    public function setTicketDeliveryMethod($ticket_delivery_method)
    {
        $this->container['ticket_delivery_method'] = $ticket_delivery_method;

        return $this;
    }

    /**
     * Gets ticket_delivery_recipient
     *
     * @return string
     */
    public function getTicketDeliveryRecipient()
    {
        return $this->container['ticket_delivery_recipient'];
    }

    /**
     * Sets ticket_delivery_recipient
     *
     * @param string $ticket_delivery_recipient The name of the recipient the ticket is delivered to. If email or phone, then use either the email address or the phone number.
     *
     * @return $this
     */
    public function setTicketDeliveryRecipient($ticket_delivery_recipient)
    {
        $this->container['ticket_delivery_recipient'] = $ticket_delivery_recipient;

        return $this;
    }

    /**
     * Gets passenger_id
     *
     * @return int[]
     */
    public function getPassengerId()
    {
        return $this->container['passenger_id'];
    }

    /**
     * Sets passenger_id
     *
     * @param int[] $passenger_id passenger_id
     *
     * @return $this
     */
    public function setPassengerId($passenger_id)
    {
        $this->container['passenger_id'] = $passenger_id;

        return $this;
    }

    /**
     * Gets class
     *
     * @return string
     */
    public function getClass()
    {
        return $this->container['class'];
    }

    /**
     * Sets class
     *
     * @param string $class class
     *
     * @return $this
     */
    public function setClass($class)
    {
        $this->container['class'] = $class;

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

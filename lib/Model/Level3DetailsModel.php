<?php
/**
 * Level3DetailsModel
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DCarbone\ParagonSolutionsPHPSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * PARAGON PAYMENT SOLUTIONS REST API
 *
 * <h2>Paragon Processing Platform</h2><p>This document is to provide a detailed description of how a developer or software solution provider can integrate with the Paragon Processing Platform (Paragon Platform).  <br>The Paragon Platform is for developers who wish to use Paragon's processing services within their software applications.  The Paragon Platform can stand alone as a web-based storefront with (or without) attached card readers or may be used in combination with point-of-sale (POS) and order entry applications.<br>The Paragon Platform accepts payments in many forms, including check, credit, debit, gift, loyalty and EBT cards. Payments may be taken online, over the telephone, from a mobile phone and at physical store locations. In addition to handling large volumes of payment transactions, the Paragon Platform manages and settles batches, protects sensitive card information, administers billing contracts and produces operational and analytical reports. </p><br><h2>Application Programming Interfaces (APIs)</h2><img src=\"../../Media/Images/Paragon_API_Communication.png\" alt=\"\" width=\"624\" height=\"242\"> <p>With our API, software systems and devices communicate with the Paragon Platform by exchanging messages.  <ol> <li>Client Application formulates a message and transmits the request to the Paragon Platform.</li> <li>The Paragon Platform translates the request and relays it to the Payment Processing Network.</li> <li>The Payment Processing Network processes the request and returns a response to the Paragon Platform.</li> <li>The Paragon Platform translates the response and relays it to the Client Application.</li></ol></p><br><h2>The Path to Integration </h2><img src=\"../../Media/Images/Paragon_Path_To_Integration.png\" alt=\"\" width=\"624\" height=\"258\"> <p><br><h3>Step 1: Open a Test Account </h3><p>Visit https://developer.paragonsolutions.com/testaccount to register for a free test account. Once registered you have instant access to your test account credentials and all the documentation you need to get started.  Head over to the library and make sure to check out all of our API's to learn about the Paragon Processing Platform transaction requests and responses.</p><br><h3>Step 2: Code & Certify</h3><p>Once in the Paragon Development portal, begin your certification or have an experienced Paragon integration specialist guide you through the testing process.  Once coding and testing are completed submit your request for certification.   Our team will then perform a detailed review of your integration to make sure your integration meets all your business requirements for success. </p><br><h3>Step 3: Go Live!</h3><p>After final review and testing your software solution is ready to begin taking live payments!  We know, an integration that is easy sounds too good to be true.  Don't take our word for it, start your integration today! </p><p><h3>Developer Notes</h3><ul><li>Install your development platform according to its product documentation.</li><li>Read through all the steps before you get started. We recommend reviewing the rest of this guide to familiarize yourself with the Paragon Processing Platform's terms, capabilities, web services and operations.</li></ul></p></p>
 *
 * The version of the OpenAPI document: 2.0
 * Contact: isvsupport@paragonsolutions.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace DCarbone\ParagonSolutionsPHPSDK\Model;

use \ArrayAccess;
use \DCarbone\ParagonSolutionsPHPSDK\ObjectSerializer;

/**
 * Level3DetailsModel Class Doc Comment
 *
 * @category Class
 * @package  DCarbone\ParagonSolutionsPHPSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Level3DetailsModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Level3DetailsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'level3_amount' => 'string',
        'line_item_details' => '\DCarbone\ParagonSolutionsPHPSDK\Model\Level3LineItemModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'level3_amount' => null,
        'line_item_details' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'level3_amount' => 'level3_amount',
        'line_item_details' => 'line_item_details'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'level3_amount' => 'setLevel3Amount',
        'line_item_details' => 'setLineItemDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'level3_amount' => 'getLevel3Amount',
        'line_item_details' => 'getLineItemDetails'
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
        return self::$openAPIModelName;
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
        $this->container['level3_amount'] = $data['level3_amount'] ?? null;
        $this->container['line_item_details'] = $data['line_item_details'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['level3_amount'] === null) {
            $invalidProperties[] = "'level3_amount' can't be null";
        }
        if ($this->container['line_item_details'] === null) {
            $invalidProperties[] = "'line_item_details' can't be null";
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
     * Gets level3_amount
     *
     * @return string
     */
    public function getLevel3Amount()
    {
        return $this->container['level3_amount'];
    }

    /**
     * Sets level3_amount
     *
     * @param string $level3_amount Total amount for line items in order
     *
     * @return self
     */
    public function setLevel3Amount($level3_amount)
    {
        $this->container['level3_amount'] = $level3_amount;

        return $this;
    }

    /**
     * Gets line_item_details
     *
     * @return \DCarbone\ParagonSolutionsPHPSDK\Model\Level3LineItemModel[]
     */
    public function getLineItemDetails()
    {
        return $this->container['line_item_details'];
    }

    /**
     * Sets line_item_details
     *
     * @param \DCarbone\ParagonSolutionsPHPSDK\Model\Level3LineItemModel[] $line_item_details XML element. Detail for 1 – 99 line items which must be provided to qualify transaction for Level III interchange. See LineItemDetail section below for definition.  Required in order to qualify for Level III transactions.
     *
     * @return self
     */
    public function setLineItemDetails($line_item_details)
    {
        $this->container['line_item_details'] = $line_item_details;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}



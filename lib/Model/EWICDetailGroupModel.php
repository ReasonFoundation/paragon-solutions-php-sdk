<?php
/**
 * EWICDetailGroupModel
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
 * EWICDetailGroupModel Class Doc Comment
 *
 * @category Class
 * @package  DCarbone\ParagonSolutionsPHPSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EWICDetailGroupModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EWICDetailGroupModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'universal_product_code_price_look_up_indicator' => 'string',
        'universal_product_code_price_look_up_data' => 'string',
        'universal_product_code_price' => 'string',
        'universal_product_code_quantity' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'universal_product_code_price_look_up_indicator' => null,
        'universal_product_code_price_look_up_data' => null,
        'universal_product_code_price' => null,
        'universal_product_code_quantity' => null
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
        'universal_product_code_price_look_up_indicator' => 'universal_product_code_price_look_up_indicator',
        'universal_product_code_price_look_up_data' => 'universal_product_code_price_look_up_data',
        'universal_product_code_price' => 'universal_product_code_price',
        'universal_product_code_quantity' => 'universal_product_code_quantity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'universal_product_code_price_look_up_indicator' => 'setUniversalProductCodePriceLookUpIndicator',
        'universal_product_code_price_look_up_data' => 'setUniversalProductCodePriceLookUpData',
        'universal_product_code_price' => 'setUniversalProductCodePrice',
        'universal_product_code_quantity' => 'setUniversalProductCodeQuantity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'universal_product_code_price_look_up_indicator' => 'getUniversalProductCodePriceLookUpIndicator',
        'universal_product_code_price_look_up_data' => 'getUniversalProductCodePriceLookUpData',
        'universal_product_code_price' => 'getUniversalProductCodePrice',
        'universal_product_code_quantity' => 'getUniversalProductCodeQuantity'
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
        $this->container['universal_product_code_price_look_up_indicator'] = $data['universal_product_code_price_look_up_indicator'] ?? null;
        $this->container['universal_product_code_price_look_up_data'] = $data['universal_product_code_price_look_up_data'] ?? null;
        $this->container['universal_product_code_price'] = $data['universal_product_code_price'] ?? null;
        $this->container['universal_product_code_quantity'] = $data['universal_product_code_quantity'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['universal_product_code_price_look_up_indicator'] === null) {
            $invalidProperties[] = "'universal_product_code_price_look_up_indicator' can't be null";
        }
        if ($this->container['universal_product_code_price_look_up_data'] === null) {
            $invalidProperties[] = "'universal_product_code_price_look_up_data' can't be null";
        }
        if ($this->container['universal_product_code_price'] === null) {
            $invalidProperties[] = "'universal_product_code_price' can't be null";
        }
        if ($this->container['universal_product_code_quantity'] === null) {
            $invalidProperties[] = "'universal_product_code_quantity' can't be null";
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
     * Gets universal_product_code_price_look_up_indicator
     *
     * @return string
     */
    public function getUniversalProductCodePriceLookUpIndicator()
    {
        return $this->container['universal_product_code_price_look_up_indicator'];
    }

    /**
     * Sets universal_product_code_price_look_up_indicator
     *
     * @param string $universal_product_code_price_look_up_indicator Indicator of Universal Product Code (UPC) or Price Look Up (PLU) code (0 - UPC, 1 – PLU).  Required for EWIC transactions.
     *
     * @return self
     */
    public function setUniversalProductCodePriceLookUpIndicator($universal_product_code_price_look_up_indicator)
    {
        $this->container['universal_product_code_price_look_up_indicator'] = $universal_product_code_price_look_up_indicator;

        return $this;
    }

    /**
     * Gets universal_product_code_price_look_up_data
     *
     * @return string
     */
    public function getUniversalProductCodePriceLookUpData()
    {
        return $this->container['universal_product_code_price_look_up_data'];
    }

    /**
     * Sets universal_product_code_price_look_up_data
     *
     * @param string $universal_product_code_price_look_up_data Item Code (UPC or PLU, based on UPCPLUInd).  Required for EWIC transactions.
     *
     * @return self
     */
    public function setUniversalProductCodePriceLookUpData($universal_product_code_price_look_up_data)
    {
        $this->container['universal_product_code_price_look_up_data'] = $universal_product_code_price_look_up_data;

        return $this;
    }

    /**
     * Gets universal_product_code_price
     *
     * @return string
     */
    public function getUniversalProductCodePrice()
    {
        return $this->container['universal_product_code_price'];
    }

    /**
     * Sets universal_product_code_price
     *
     * @param string $universal_product_code_price Item Price.  Required for EWIC transactions.
     *
     * @return self
     */
    public function setUniversalProductCodePrice($universal_product_code_price)
    {
        $this->container['universal_product_code_price'] = $universal_product_code_price;

        return $this;
    }

    /**
     * Gets universal_product_code_quantity
     *
     * @return string
     */
    public function getUniversalProductCodeQuantity()
    {
        return $this->container['universal_product_code_quantity'];
    }

    /**
     * Sets universal_product_code_quantity
     *
     * @param string $universal_product_code_quantity Number or Total Weight of item (NNNDD – Implied Decimal).  Required for EWIC transactions.
     *
     * @return self
     */
    public function setUniversalProductCodeQuantity($universal_product_code_quantity)
    {
        $this->container['universal_product_code_quantity'] = $universal_product_code_quantity;

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



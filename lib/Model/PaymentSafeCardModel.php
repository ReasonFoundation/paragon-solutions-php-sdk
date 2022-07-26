<?php
/**
 * PaymentSafeCardModel
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
 * PaymentSafeCardModel Class Doc Comment
 *
 * @category Class
 * @package  DCarbone\ParagonSolutionsPHPSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PaymentSafeCardModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentSafeCardModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'card_key' => 'string',
        'expiration_date' => 'string',
        'card_number_last_four_digits' => 'string',
        'card_type' => 'string',
        'name_on_card' => 'string',
        'street1' => 'string',
        'city' => 'string',
        'state' => 'string',
        'zip_code' => 'string',
        'card_account_updater_enabled' => 'string',
        'last_update' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'card_key' => null,
        'expiration_date' => null,
        'card_number_last_four_digits' => null,
        'card_type' => null,
        'name_on_card' => null,
        'street1' => null,
        'city' => null,
        'state' => null,
        'zip_code' => null,
        'card_account_updater_enabled' => null,
        'last_update' => null
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
        'card_key' => 'card_key',
        'expiration_date' => 'expiration_date',
        'card_number_last_four_digits' => 'card_number_last_four_digits',
        'card_type' => 'card_type',
        'name_on_card' => 'name_on_card',
        'street1' => 'street1',
        'city' => 'city',
        'state' => 'state',
        'zip_code' => 'zip_code',
        'card_account_updater_enabled' => 'card_account_updater_enabled',
        'last_update' => 'last_update'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'card_key' => 'setCardKey',
        'expiration_date' => 'setExpirationDate',
        'card_number_last_four_digits' => 'setCardNumberLastFourDigits',
        'card_type' => 'setCardType',
        'name_on_card' => 'setNameOnCard',
        'street1' => 'setStreet1',
        'city' => 'setCity',
        'state' => 'setState',
        'zip_code' => 'setZipCode',
        'card_account_updater_enabled' => 'setCardAccountUpdaterEnabled',
        'last_update' => 'setLastUpdate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'card_key' => 'getCardKey',
        'expiration_date' => 'getExpirationDate',
        'card_number_last_four_digits' => 'getCardNumberLastFourDigits',
        'card_type' => 'getCardType',
        'name_on_card' => 'getNameOnCard',
        'street1' => 'getStreet1',
        'city' => 'getCity',
        'state' => 'getState',
        'zip_code' => 'getZipCode',
        'card_account_updater_enabled' => 'getCardAccountUpdaterEnabled',
        'last_update' => 'getLastUpdate'
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
        $this->container['card_key'] = $data['card_key'] ?? null;
        $this->container['expiration_date'] = $data['expiration_date'] ?? null;
        $this->container['card_number_last_four_digits'] = $data['card_number_last_four_digits'] ?? null;
        $this->container['card_type'] = $data['card_type'] ?? null;
        $this->container['name_on_card'] = $data['name_on_card'] ?? null;
        $this->container['street1'] = $data['street1'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['zip_code'] = $data['zip_code'] ?? null;
        $this->container['card_account_updater_enabled'] = $data['card_account_updater_enabled'] ?? null;
        $this->container['last_update'] = $data['last_update'] ?? null;
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
     * Gets card_key
     *
     * @return string|null
     */
    public function getCardKey()
    {
        return $this->container['card_key'];
    }

    /**
     * Sets card_key
     *
     * @param string|null $card_key Paragon Token Identifier
     *
     * @return self
     */
    public function setCardKey($card_key)
    {
        $this->container['card_key'] = $card_key;

        return $this;
    }

    /**
     * Gets expiration_date
     *
     * @return string|null
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     *
     * @param string|null $expiration_date Credit card date of expiration (MMYY).
     *
     * @return self
     */
    public function setExpirationDate($expiration_date)
    {
        $this->container['expiration_date'] = $expiration_date;

        return $this;
    }

    /**
     * Gets card_number_last_four_digits
     *
     * @return string|null
     */
    public function getCardNumberLastFourDigits()
    {
        return $this->container['card_number_last_four_digits'];
    }

    /**
     * Sets card_number_last_four_digits
     *
     * @param string|null $card_number_last_four_digits Last 4 of Card Number
     *
     * @return self
     */
    public function setCardNumberLastFourDigits($card_number_last_four_digits)
    {
        $this->container['card_number_last_four_digits'] = $card_number_last_four_digits;

        return $this;
    }

    /**
     * Gets card_type
     *
     * @return string|null
     */
    public function getCardType()
    {
        return $this->container['card_type'];
    }

    /**
     * Sets card_type
     *
     * @param string|null $card_type Card Logo
     *
     * @return self
     */
    public function setCardType($card_type)
    {
        $this->container['card_type'] = $card_type;

        return $this;
    }

    /**
     * Gets name_on_card
     *
     * @return string|null
     */
    public function getNameOnCard()
    {
        return $this->container['name_on_card'];
    }

    /**
     * Sets name_on_card
     *
     * @param string|null $name_on_card Name of cardholder (as it appears on card).
     *
     * @return self
     */
    public function setNameOnCard($name_on_card)
    {
        $this->container['name_on_card'] = $name_on_card;

        return $this;
    }

    /**
     * Gets street1
     *
     * @return string|null
     */
    public function getStreet1()
    {
        return $this->container['street1'];
    }

    /**
     * Sets street1
     *
     * @param string|null $street1 House number and street of cardholder's billing address.
     *
     * @return self
     */
    public function setStreet1($street1)
    {
        $this->container['street1'] = $street1;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city City of cardholder's billing address.
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state State of cardholder's billing address.
     *
     * @return self
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets zip_code
     *
     * @return string|null
     */
    public function getZipCode()
    {
        return $this->container['zip_code'];
    }

    /**
     * Sets zip_code
     *
     * @param string|null $zip_code ZIP Code of cardholder's billing address.
     *
     * @return self
     */
    public function setZipCode($zip_code)
    {
        $this->container['zip_code'] = $zip_code;

        return $this;
    }

    /**
     * Gets card_account_updater_enabled
     *
     * @return string|null
     */
    public function getCardAccountUpdaterEnabled()
    {
        return $this->container['card_account_updater_enabled'];
    }

    /**
     * Sets card_account_updater_enabled
     *
     * @param string|null $card_account_updater_enabled Enabled for Card Account Updater
     *
     * @return self
     */
    public function setCardAccountUpdaterEnabled($card_account_updater_enabled)
    {
        $this->container['card_account_updater_enabled'] = $card_account_updater_enabled;

        return $this;
    }

    /**
     * Gets last_update
     *
     * @return string|null
     */
    public function getLastUpdate()
    {
        return $this->container['last_update'];
    }

    /**
     * Sets last_update
     *
     * @param string|null $last_update Last Update Date
     *
     * @return self
     */
    public function setLastUpdate($last_update)
    {
        $this->container['last_update'] = $last_update;

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



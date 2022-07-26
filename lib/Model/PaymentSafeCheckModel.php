<?php
/**
 * PaymentSafeCheckModel
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
 * PaymentSafeCheckModel Class Doc Comment
 *
 * @category Class
 * @package  DCarbone\ParagonSolutionsPHPSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PaymentSafeCheckModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentSafeCheckModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'check_key' => 'string',
        'customer_key' => 'string',
        'check_type' => 'string',
        'account_type' => 'string',
        'check_number' => 'string',
        'branch_city' => 'string',
        'state_code' => 'string',
        'name_on_check' => 'string',
        'email' => 'string',
        'day_phone' => 'string',
        'street1' => 'string',
        'street2' => 'string',
        'street3' => 'string',
        'city' => 'string',
        'state_id' => 'string',
        'province' => 'string',
        'zip_code' => 'string',
        'country_id' => 'string',
        'secc_type' => 'string',
        'auth_option_form' => 'string',
        'auth_option_voice' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'check_key' => null,
        'customer_key' => null,
        'check_type' => null,
        'account_type' => null,
        'check_number' => null,
        'branch_city' => null,
        'state_code' => null,
        'name_on_check' => null,
        'email' => null,
        'day_phone' => null,
        'street1' => null,
        'street2' => null,
        'street3' => null,
        'city' => null,
        'state_id' => null,
        'province' => null,
        'zip_code' => null,
        'country_id' => null,
        'secc_type' => null,
        'auth_option_form' => null,
        'auth_option_voice' => null
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
        'check_key' => 'check_key',
        'customer_key' => 'customer_key',
        'check_type' => 'check_type',
        'account_type' => 'account_type',
        'check_number' => 'check_number',
        'branch_city' => 'branch_city',
        'state_code' => 'state_code',
        'name_on_check' => 'name_on_check',
        'email' => 'email',
        'day_phone' => 'day_phone',
        'street1' => 'street1',
        'street2' => 'street2',
        'street3' => 'street3',
        'city' => 'city',
        'state_id' => 'state_id',
        'province' => 'province',
        'zip_code' => 'zip_code',
        'country_id' => 'country_id',
        'secc_type' => 'secc_type',
        'auth_option_form' => 'auth_option_form',
        'auth_option_voice' => 'auth_option_voice'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'check_key' => 'setCheckKey',
        'customer_key' => 'setCustomerKey',
        'check_type' => 'setCheckType',
        'account_type' => 'setAccountType',
        'check_number' => 'setCheckNumber',
        'branch_city' => 'setBranchCity',
        'state_code' => 'setStateCode',
        'name_on_check' => 'setNameOnCheck',
        'email' => 'setEmail',
        'day_phone' => 'setDayPhone',
        'street1' => 'setStreet1',
        'street2' => 'setStreet2',
        'street3' => 'setStreet3',
        'city' => 'setCity',
        'state_id' => 'setStateId',
        'province' => 'setProvince',
        'zip_code' => 'setZipCode',
        'country_id' => 'setCountryId',
        'secc_type' => 'setSeccType',
        'auth_option_form' => 'setAuthOptionForm',
        'auth_option_voice' => 'setAuthOptionVoice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'check_key' => 'getCheckKey',
        'customer_key' => 'getCustomerKey',
        'check_type' => 'getCheckType',
        'account_type' => 'getAccountType',
        'check_number' => 'getCheckNumber',
        'branch_city' => 'getBranchCity',
        'state_code' => 'getStateCode',
        'name_on_check' => 'getNameOnCheck',
        'email' => 'getEmail',
        'day_phone' => 'getDayPhone',
        'street1' => 'getStreet1',
        'street2' => 'getStreet2',
        'street3' => 'getStreet3',
        'city' => 'getCity',
        'state_id' => 'getStateId',
        'province' => 'getProvince',
        'zip_code' => 'getZipCode',
        'country_id' => 'getCountryId',
        'secc_type' => 'getSeccType',
        'auth_option_form' => 'getAuthOptionForm',
        'auth_option_voice' => 'getAuthOptionVoice'
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
        $this->container['check_key'] = $data['check_key'] ?? null;
        $this->container['customer_key'] = $data['customer_key'] ?? null;
        $this->container['check_type'] = $data['check_type'] ?? null;
        $this->container['account_type'] = $data['account_type'] ?? null;
        $this->container['check_number'] = $data['check_number'] ?? null;
        $this->container['branch_city'] = $data['branch_city'] ?? null;
        $this->container['state_code'] = $data['state_code'] ?? null;
        $this->container['name_on_check'] = $data['name_on_check'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['day_phone'] = $data['day_phone'] ?? null;
        $this->container['street1'] = $data['street1'] ?? null;
        $this->container['street2'] = $data['street2'] ?? null;
        $this->container['street3'] = $data['street3'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['state_id'] = $data['state_id'] ?? null;
        $this->container['province'] = $data['province'] ?? null;
        $this->container['zip_code'] = $data['zip_code'] ?? null;
        $this->container['country_id'] = $data['country_id'] ?? null;
        $this->container['secc_type'] = $data['secc_type'] ?? null;
        $this->container['auth_option_form'] = $data['auth_option_form'] ?? null;
        $this->container['auth_option_voice'] = $data['auth_option_voice'] ?? null;
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
     * Gets check_key
     *
     * @return string|null
     */
    public function getCheckKey()
    {
        return $this->container['check_key'];
    }

    /**
     * Sets check_key
     *
     * @param string|null $check_key Unique identifier for check token (in Paragon platform).
     *
     * @return self
     */
    public function setCheckKey($check_key)
    {
        $this->container['check_key'] = $check_key;

        return $this;
    }

    /**
     * Gets customer_key
     *
     * @return string|null
     */
    public function getCustomerKey()
    {
        return $this->container['customer_key'];
    }

    /**
     * Sets customer_key
     *
     * @param string|null $customer_key Unique identifier for existing customer (in Paragon platform).
     *
     * @return self
     */
    public function setCustomerKey($customer_key)
    {
        $this->container['customer_key'] = $customer_key;

        return $this;
    }

    /**
     * Gets check_type
     *
     * @return string|null
     */
    public function getCheckType()
    {
        return $this->container['check_type'];
    }

    /**
     * Sets check_type
     *
     * @param string|null $check_type Checking Account Type (PERSONAL, BUSINESS).
     *
     * @return self
     */
    public function setCheckType($check_type)
    {
        $this->container['check_type'] = $check_type;

        return $this;
    }

    /**
     * Gets account_type
     *
     * @return string|null
     */
    public function getAccountType()
    {
        return $this->container['account_type'];
    }

    /**
     * Sets account_type
     *
     * @param string|null $account_type Account type (CHECKING, SAVINGS).
     *
     * @return self
     */
    public function setAccountType($account_type)
    {
        $this->container['account_type'] = $account_type;

        return $this;
    }

    /**
     * Gets check_number
     *
     * @return string|null
     */
    public function getCheckNumber()
    {
        return $this->container['check_number'];
    }

    /**
     * Sets check_number
     *
     * @param string|null $check_number Unique identifier for an original check (on a Checking Account).
     *
     * @return self
     */
    public function setCheckNumber($check_number)
    {
        $this->container['check_number'] = $check_number;

        return $this;
    }

    /**
     * Gets branch_city
     *
     * @return string|null
     */
    public function getBranchCity()
    {
        return $this->container['branch_city'];
    }

    /**
     * Sets branch_city
     *
     * @param string|null $branch_city City of the checking account bank branch.
     *
     * @return self
     */
    public function setBranchCity($branch_city)
    {
        $this->container['branch_city'] = $branch_city;

        return $this;
    }

    /**
     * Gets state_code
     *
     * @return string|null
     */
    public function getStateCode()
    {
        return $this->container['state_code'];
    }

    /**
     * Sets state_code
     *
     * @param string|null $state_code United States Postal Service abbreviation for a state, district, possession or territory of checking account owner's billing address.
     *
     * @return self
     */
    public function setStateCode($state_code)
    {
        $this->container['state_code'] = $state_code;

        return $this;
    }

    /**
     * Gets name_on_check
     *
     * @return string|null
     */
    public function getNameOnCheck()
    {
        return $this->container['name_on_check'];
    }

    /**
     * Sets name_on_check
     *
     * @param string|null $name_on_check Check account owner's name as it appears on the check.
     *
     * @return self
     */
    public function setNameOnCheck($name_on_check)
    {
        $this->container['name_on_check'] = $name_on_check;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email Electronic Mail Address of checking account owner.
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets day_phone
     *
     * @return string|null
     */
    public function getDayPhone()
    {
        return $this->container['day_phone'];
    }

    /**
     * Sets day_phone
     *
     * @param string|null $day_phone Daytime Phone Number of checking account owner.
     *
     * @return self
     */
    public function setDayPhone($day_phone)
    {
        $this->container['day_phone'] = $day_phone;

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
     * @param string|null $street1 House number and Street name of checking account owner's billing address.
     *
     * @return self
     */
    public function setStreet1($street1)
    {
        $this->container['street1'] = $street1;

        return $this;
    }

    /**
     * Gets street2
     *
     * @return string|null
     */
    public function getStreet2()
    {
        return $this->container['street2'];
    }

    /**
     * Sets street2
     *
     * @param string|null $street2 Second line of checking account owner's billing address.
     *
     * @return self
     */
    public function setStreet2($street2)
    {
        $this->container['street2'] = $street2;

        return $this;
    }

    /**
     * Gets street3
     *
     * @return string|null
     */
    public function getStreet3()
    {
        return $this->container['street3'];
    }

    /**
     * Sets street3
     *
     * @param string|null $street3 Third line of checking account owner's billing address.
     *
     * @return self
     */
    public function setStreet3($street3)
    {
        $this->container['street3'] = $street3;

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
     * @param string|null $city City of the checking account owner's billing address.
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state_id
     *
     * @return string|null
     */
    public function getStateId()
    {
        return $this->container['state_id'];
    }

    /**
     * Sets state_id
     *
     * @param string|null $state_id United States Postal Service abbreviation for a state, district, possession or territory.
     *
     * @return self
     */
    public function setStateId($state_id)
    {
        $this->container['state_id'] = $state_id;

        return $this;
    }

    /**
     * Gets province
     *
     * @return string|null
     */
    public function getProvince()
    {
        return $this->container['province'];
    }

    /**
     * Sets province
     *
     * @param string|null $province Canadian Province (if applicable) of checking account owner's billing address
     *
     * @return self
     */
    public function setProvince($province)
    {
        $this->container['province'] = $province;

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
     * @param string|null $zip_code ZIP/Postal code of checking account owner's billing address.
     *
     * @return self
     */
    public function setZipCode($zip_code)
    {
        $this->container['zip_code'] = $zip_code;

        return $this;
    }

    /**
     * Gets country_id
     *
     * @return string|null
     */
    public function getCountryId()
    {
        return $this->container['country_id'];
    }

    /**
     * Sets country_id
     *
     * @param string|null $country_id Code (USA, CAN) for country of checking account owner's billing address.
     *
     * @return self
     */
    public function setCountryId($country_id)
    {
        $this->container['country_id'] = $country_id;

        return $this;
    }

    /**
     * Gets secc_type
     *
     * @return string|null
     */
    public function getSeccType()
    {
        return $this->container['secc_type'];
    }

    /**
     * Sets secc_type
     *
     * @param string|null $secc_type One of: CCD, PPD, ARC, RCK, TEL, WEB
     *
     * @return self
     */
    public function setSeccType($secc_type)
    {
        $this->container['secc_type'] = $secc_type;

        return $this;
    }

    /**
     * Gets auth_option_form
     *
     * @return string|null
     */
    public function getAuthOptionForm()
    {
        return $this->container['auth_option_form'];
    }

    /**
     * Sets auth_option_form
     *
     * @param string|null $auth_option_form Signed Form authorization option.
     *
     * @return self
     */
    public function setAuthOptionForm($auth_option_form)
    {
        $this->container['auth_option_form'] = $auth_option_form;

        return $this;
    }

    /**
     * Gets auth_option_voice
     *
     * @return string|null
     */
    public function getAuthOptionVoice()
    {
        return $this->container['auth_option_voice'];
    }

    /**
     * Sets auth_option_voice
     *
     * @param string|null $auth_option_voice Recorded Voice authorization option.
     *
     * @return self
     */
    public function setAuthOptionVoice($auth_option_voice)
    {
        $this->container['auth_option_voice'] = $auth_option_voice;

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



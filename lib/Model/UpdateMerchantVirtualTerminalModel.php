<?php
/**
 * UpdateMerchantVirtualTerminalModel
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
 * UpdateMerchantVirtualTerminalModel Class Doc Comment
 *
 * @category Class
 * @package  DCarbone\ParagonSolutionsPHPSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UpdateMerchantVirtualTerminalModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateMerchantVirtualTerminalModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accept_level_3_data' => 'string',
        'allow_shipping_amount' => 'string',
        'allow_repeat_sales' => 'string',
        'allow_refunds' => 'string',
        'allow_tip_amount' => 'string',
        'allow_tax_amount' => 'string',
        'allow_convenience_amount' => 'string',
        'allow_duty_amount' => 'string',
        'allow_corporate_card_specifier' => 'string',
        'show_recurring_billing' => 'string',
        'has_readonly_recurring_billing_customer_id' => 'string',
        'has_readonly_recurring_billing_contract_id' => 'string',
        'has_readonly_cardsafe_customer_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'accept_level_3_data' => null,
        'allow_shipping_amount' => null,
        'allow_repeat_sales' => null,
        'allow_refunds' => null,
        'allow_tip_amount' => null,
        'allow_tax_amount' => null,
        'allow_convenience_amount' => null,
        'allow_duty_amount' => null,
        'allow_corporate_card_specifier' => null,
        'show_recurring_billing' => null,
        'has_readonly_recurring_billing_customer_id' => null,
        'has_readonly_recurring_billing_contract_id' => null,
        'has_readonly_cardsafe_customer_id' => null
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
        'accept_level_3_data' => 'accept_level_3_data',
        'allow_shipping_amount' => 'allow_shipping_amount',
        'allow_repeat_sales' => 'allow_repeat_sales',
        'allow_refunds' => 'allow_refunds',
        'allow_tip_amount' => 'allow_tip_amount',
        'allow_tax_amount' => 'allow_tax_amount',
        'allow_convenience_amount' => 'allow_convenience_amount',
        'allow_duty_amount' => 'allow_duty_amount',
        'allow_corporate_card_specifier' => 'allow_corporate_card_specifier',
        'show_recurring_billing' => 'show_recurring_billing',
        'has_readonly_recurring_billing_customer_id' => 'has_readonly_recurring_billing_customer_id',
        'has_readonly_recurring_billing_contract_id' => 'has_readonly_recurring_billing_contract_id',
        'has_readonly_cardsafe_customer_id' => 'has_readonly_cardsafe_customer_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accept_level_3_data' => 'setAcceptLevel3Data',
        'allow_shipping_amount' => 'setAllowShippingAmount',
        'allow_repeat_sales' => 'setAllowRepeatSales',
        'allow_refunds' => 'setAllowRefunds',
        'allow_tip_amount' => 'setAllowTipAmount',
        'allow_tax_amount' => 'setAllowTaxAmount',
        'allow_convenience_amount' => 'setAllowConvenienceAmount',
        'allow_duty_amount' => 'setAllowDutyAmount',
        'allow_corporate_card_specifier' => 'setAllowCorporateCardSpecifier',
        'show_recurring_billing' => 'setShowRecurringBilling',
        'has_readonly_recurring_billing_customer_id' => 'setHasReadonlyRecurringBillingCustomerId',
        'has_readonly_recurring_billing_contract_id' => 'setHasReadonlyRecurringBillingContractId',
        'has_readonly_cardsafe_customer_id' => 'setHasReadonlyCardsafeCustomerId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accept_level_3_data' => 'getAcceptLevel3Data',
        'allow_shipping_amount' => 'getAllowShippingAmount',
        'allow_repeat_sales' => 'getAllowRepeatSales',
        'allow_refunds' => 'getAllowRefunds',
        'allow_tip_amount' => 'getAllowTipAmount',
        'allow_tax_amount' => 'getAllowTaxAmount',
        'allow_convenience_amount' => 'getAllowConvenienceAmount',
        'allow_duty_amount' => 'getAllowDutyAmount',
        'allow_corporate_card_specifier' => 'getAllowCorporateCardSpecifier',
        'show_recurring_billing' => 'getShowRecurringBilling',
        'has_readonly_recurring_billing_customer_id' => 'getHasReadonlyRecurringBillingCustomerId',
        'has_readonly_recurring_billing_contract_id' => 'getHasReadonlyRecurringBillingContractId',
        'has_readonly_cardsafe_customer_id' => 'getHasReadonlyCardsafeCustomerId'
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
        $this->container['accept_level_3_data'] = $data['accept_level_3_data'] ?? null;
        $this->container['allow_shipping_amount'] = $data['allow_shipping_amount'] ?? null;
        $this->container['allow_repeat_sales'] = $data['allow_repeat_sales'] ?? null;
        $this->container['allow_refunds'] = $data['allow_refunds'] ?? null;
        $this->container['allow_tip_amount'] = $data['allow_tip_amount'] ?? null;
        $this->container['allow_tax_amount'] = $data['allow_tax_amount'] ?? null;
        $this->container['allow_convenience_amount'] = $data['allow_convenience_amount'] ?? null;
        $this->container['allow_duty_amount'] = $data['allow_duty_amount'] ?? null;
        $this->container['allow_corporate_card_specifier'] = $data['allow_corporate_card_specifier'] ?? null;
        $this->container['show_recurring_billing'] = $data['show_recurring_billing'] ?? null;
        $this->container['has_readonly_recurring_billing_customer_id'] = $data['has_readonly_recurring_billing_customer_id'] ?? null;
        $this->container['has_readonly_recurring_billing_contract_id'] = $data['has_readonly_recurring_billing_contract_id'] ?? null;
        $this->container['has_readonly_cardsafe_customer_id'] = $data['has_readonly_cardsafe_customer_id'] ?? null;
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
     * Gets accept_level_3_data
     *
     * @return string|null
     */
    public function getAcceptLevel3Data()
    {
        return $this->container['accept_level_3_data'];
    }

    /**
     * Sets accept_level_3_data
     *
     * @param string|null $accept_level_3_data Enable (T), Can accept level 3 datat.
     *
     * @return self
     */
    public function setAcceptLevel3Data($accept_level_3_data)
    {
        $this->container['accept_level_3_data'] = $accept_level_3_data;

        return $this;
    }

    /**
     * Gets allow_shipping_amount
     *
     * @return string|null
     */
    public function getAllowShippingAmount()
    {
        return $this->container['allow_shipping_amount'];
    }

    /**
     * Sets allow_shipping_amount
     *
     * @param string|null $allow_shipping_amount Enable (T) merchant to specify an amount for shipping through virtual terminal user interface.
     *
     * @return self
     */
    public function setAllowShippingAmount($allow_shipping_amount)
    {
        $this->container['allow_shipping_amount'] = $allow_shipping_amount;

        return $this;
    }

    /**
     * Gets allow_repeat_sales
     *
     * @return string|null
     */
    public function getAllowRepeatSales()
    {
        return $this->container['allow_repeat_sales'];
    }

    /**
     * Sets allow_repeat_sales
     *
     * @param string|null $allow_repeat_sales Enable (T) merchant to process repeat sales through virtual terminal user interface.
     *
     * @return self
     */
    public function setAllowRepeatSales($allow_repeat_sales)
    {
        $this->container['allow_repeat_sales'] = $allow_repeat_sales;

        return $this;
    }

    /**
     * Gets allow_refunds
     *
     * @return string|null
     */
    public function getAllowRefunds()
    {
        return $this->container['allow_refunds'];
    }

    /**
     * Sets allow_refunds
     *
     * @param string|null $allow_refunds Enable (T) merchant to process refunds/credits through virtual terminal user interface.
     *
     * @return self
     */
    public function setAllowRefunds($allow_refunds)
    {
        $this->container['allow_refunds'] = $allow_refunds;

        return $this;
    }

    /**
     * Gets allow_tip_amount
     *
     * @return string|null
     */
    public function getAllowTipAmount()
    {
        return $this->container['allow_tip_amount'];
    }

    /**
     * Sets allow_tip_amount
     *
     * @param string|null $allow_tip_amount Enable (T) merchant to specify a tip amount through virtual terminal user interface.
     *
     * @return self
     */
    public function setAllowTipAmount($allow_tip_amount)
    {
        $this->container['allow_tip_amount'] = $allow_tip_amount;

        return $this;
    }

    /**
     * Gets allow_tax_amount
     *
     * @return string|null
     */
    public function getAllowTaxAmount()
    {
        return $this->container['allow_tax_amount'];
    }

    /**
     * Sets allow_tax_amount
     *
     * @param string|null $allow_tax_amount Enable (T), Allow merchant to specify a tax amount through virtual terminal user interface.
     *
     * @return self
     */
    public function setAllowTaxAmount($allow_tax_amount)
    {
        $this->container['allow_tax_amount'] = $allow_tax_amount;

        return $this;
    }

    /**
     * Gets allow_convenience_amount
     *
     * @return string|null
     */
    public function getAllowConvenienceAmount()
    {
        return $this->container['allow_convenience_amount'];
    }

    /**
     * Sets allow_convenience_amount
     *
     * @param string|null $allow_convenience_amount Enable (T), Allow merchant to specify a convenience amount through virtual terminal user interface.
     *
     * @return self
     */
    public function setAllowConvenienceAmount($allow_convenience_amount)
    {
        $this->container['allow_convenience_amount'] = $allow_convenience_amount;

        return $this;
    }

    /**
     * Gets allow_duty_amount
     *
     * @return string|null
     */
    public function getAllowDutyAmount()
    {
        return $this->container['allow_duty_amount'];
    }

    /**
     * Sets allow_duty_amount
     *
     * @param string|null $allow_duty_amount Enable (T), Allow merchant to specify a duty amount through virtual terminal user interface.
     *
     * @return self
     */
    public function setAllowDutyAmount($allow_duty_amount)
    {
        $this->container['allow_duty_amount'] = $allow_duty_amount;

        return $this;
    }

    /**
     * Gets allow_corporate_card_specifier
     *
     * @return string|null
     */
    public function getAllowCorporateCardSpecifier()
    {
        return $this->container['allow_corporate_card_specifier'];
    }

    /**
     * Sets allow_corporate_card_specifier
     *
     * @param string|null $allow_corporate_card_specifier Enable (T) merchant to specify that payment method is corporate card through virtual terminal user interface.
     *
     * @return self
     */
    public function setAllowCorporateCardSpecifier($allow_corporate_card_specifier)
    {
        $this->container['allow_corporate_card_specifier'] = $allow_corporate_card_specifier;

        return $this;
    }

    /**
     * Gets show_recurring_billing
     *
     * @return string|null
     */
    public function getShowRecurringBilling()
    {
        return $this->container['show_recurring_billing'];
    }

    /**
     * Sets show_recurring_billing
     *
     * @param string|null $show_recurring_billing Enable (T) merchant to specify that payment method is corporate card through virtual terminal user interface.
     *
     * @return self
     */
    public function setShowRecurringBilling($show_recurring_billing)
    {
        $this->container['show_recurring_billing'] = $show_recurring_billing;

        return $this;
    }

    /**
     * Gets has_readonly_recurring_billing_customer_id
     *
     * @return string|null
     */
    public function getHasReadonlyRecurringBillingCustomerId()
    {
        return $this->container['has_readonly_recurring_billing_customer_id'];
    }

    /**
     * Sets has_readonly_recurring_billing_customer_id
     *
     * @param string|null $has_readonly_recurring_billing_customer_id Enable (T) to have Customer ID under Recurring Billing Customer Profile un-editable
     *
     * @return self
     */
    public function setHasReadonlyRecurringBillingCustomerId($has_readonly_recurring_billing_customer_id)
    {
        $this->container['has_readonly_recurring_billing_customer_id'] = $has_readonly_recurring_billing_customer_id;

        return $this;
    }

    /**
     * Gets has_readonly_recurring_billing_contract_id
     *
     * @return string|null
     */
    public function getHasReadonlyRecurringBillingContractId()
    {
        return $this->container['has_readonly_recurring_billing_contract_id'];
    }

    /**
     * Sets has_readonly_recurring_billing_contract_id
     *
     * @param string|null $has_readonly_recurring_billing_contract_id Enable (T) to have Contract ID under Recurring Billing Contract Profile un-editable
     *
     * @return self
     */
    public function setHasReadonlyRecurringBillingContractId($has_readonly_recurring_billing_contract_id)
    {
        $this->container['has_readonly_recurring_billing_contract_id'] = $has_readonly_recurring_billing_contract_id;

        return $this;
    }

    /**
     * Gets has_readonly_cardsafe_customer_id
     *
     * @return string|null
     */
    public function getHasReadonlyCardsafeCustomerId()
    {
        return $this->container['has_readonly_cardsafe_customer_id'];
    }

    /**
     * Sets has_readonly_cardsafe_customer_id
     *
     * @param string|null $has_readonly_cardsafe_customer_id Enable (T) to have Customer ID under CardSafe Customer Profile un-editable
     *
     * @return self
     */
    public function setHasReadonlyCardsafeCustomerId($has_readonly_cardsafe_customer_id)
    {
        $this->container['has_readonly_cardsafe_customer_id'] = $has_readonly_cardsafe_customer_id;

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



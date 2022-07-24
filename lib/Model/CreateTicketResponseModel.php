<?php
/**
 * CreateTicketResponseModel
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
 * CreateTicketResponseModel Class Doc Comment
 *
 * @category Class
 * @package  DCarbone\ParagonSolutionsPHPSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateTicketResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateTicketResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'result' => 'string',
        'result_message' => 'string',
        'result_details' => 'string',
        'ticket_id' => 'string',
        'ticket_status' => 'string',
        'terminal_id' => 'string',
        'transaction_type' => 'string',
        'clerk_id' => 'string',
        'transaction_id' => 'string',
        'invoice_number' => 'string',
        'customer_key' => 'string',
        'auth_amount' => 'string',
        'tip_amount' => 'string',
        'sales_tax_amount' => 'string',
        'purchase_order_number' => 'string',
        'prompt_for_tip' => 'string',
        'override_duplicates' => 'string',
        'commercial_card_mode' => 'string',
        'level3_data' => '\DCarbone\ParagonSolutionsPHPSDK\Model\Level3DetailsModel',
        'original_payment_reference_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'result' => null,
        'result_message' => null,
        'result_details' => null,
        'ticket_id' => null,
        'ticket_status' => null,
        'terminal_id' => null,
        'transaction_type' => null,
        'clerk_id' => null,
        'transaction_id' => null,
        'invoice_number' => null,
        'customer_key' => null,
        'auth_amount' => null,
        'tip_amount' => null,
        'sales_tax_amount' => null,
        'purchase_order_number' => null,
        'prompt_for_tip' => null,
        'override_duplicates' => null,
        'commercial_card_mode' => null,
        'level3_data' => null,
        'original_payment_reference_number' => null
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
        'result' => 'result',
        'result_message' => 'result_message',
        'result_details' => 'result_details',
        'ticket_id' => 'ticket_id',
        'ticket_status' => 'ticket_status',
        'terminal_id' => 'terminal_id',
        'transaction_type' => 'transaction_type',
        'clerk_id' => 'clerk_id',
        'transaction_id' => 'transaction_id',
        'invoice_number' => 'invoice_number',
        'customer_key' => 'customer_key',
        'auth_amount' => 'auth_amount',
        'tip_amount' => 'tip_amount',
        'sales_tax_amount' => 'sales_tax_amount',
        'purchase_order_number' => 'purchase_order_number',
        'prompt_for_tip' => 'prompt_for_tip',
        'override_duplicates' => 'override_duplicates',
        'commercial_card_mode' => 'commercial_card_mode',
        'level3_data' => 'level3_data',
        'original_payment_reference_number' => 'original_payment_reference_number'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'result' => 'setResult',
        'result_message' => 'setResultMessage',
        'result_details' => 'setResultDetails',
        'ticket_id' => 'setTicketId',
        'ticket_status' => 'setTicketStatus',
        'terminal_id' => 'setTerminalId',
        'transaction_type' => 'setTransactionType',
        'clerk_id' => 'setClerkId',
        'transaction_id' => 'setTransactionId',
        'invoice_number' => 'setInvoiceNumber',
        'customer_key' => 'setCustomerKey',
        'auth_amount' => 'setAuthAmount',
        'tip_amount' => 'setTipAmount',
        'sales_tax_amount' => 'setSalesTaxAmount',
        'purchase_order_number' => 'setPurchaseOrderNumber',
        'prompt_for_tip' => 'setPromptForTip',
        'override_duplicates' => 'setOverrideDuplicates',
        'commercial_card_mode' => 'setCommercialCardMode',
        'level3_data' => 'setLevel3Data',
        'original_payment_reference_number' => 'setOriginalPaymentReferenceNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'result' => 'getResult',
        'result_message' => 'getResultMessage',
        'result_details' => 'getResultDetails',
        'ticket_id' => 'getTicketId',
        'ticket_status' => 'getTicketStatus',
        'terminal_id' => 'getTerminalId',
        'transaction_type' => 'getTransactionType',
        'clerk_id' => 'getClerkId',
        'transaction_id' => 'getTransactionId',
        'invoice_number' => 'getInvoiceNumber',
        'customer_key' => 'getCustomerKey',
        'auth_amount' => 'getAuthAmount',
        'tip_amount' => 'getTipAmount',
        'sales_tax_amount' => 'getSalesTaxAmount',
        'purchase_order_number' => 'getPurchaseOrderNumber',
        'prompt_for_tip' => 'getPromptForTip',
        'override_duplicates' => 'getOverrideDuplicates',
        'commercial_card_mode' => 'getCommercialCardMode',
        'level3_data' => 'getLevel3Data',
        'original_payment_reference_number' => 'getOriginalPaymentReferenceNumber'
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
        $this->container['result'] = $data['result'] ?? null;
        $this->container['result_message'] = $data['result_message'] ?? null;
        $this->container['result_details'] = $data['result_details'] ?? null;
        $this->container['ticket_id'] = $data['ticket_id'] ?? null;
        $this->container['ticket_status'] = $data['ticket_status'] ?? null;
        $this->container['terminal_id'] = $data['terminal_id'] ?? null;
        $this->container['transaction_type'] = $data['transaction_type'] ?? null;
        $this->container['clerk_id'] = $data['clerk_id'] ?? null;
        $this->container['transaction_id'] = $data['transaction_id'] ?? null;
        $this->container['invoice_number'] = $data['invoice_number'] ?? null;
        $this->container['customer_key'] = $data['customer_key'] ?? null;
        $this->container['auth_amount'] = $data['auth_amount'] ?? null;
        $this->container['tip_amount'] = $data['tip_amount'] ?? null;
        $this->container['sales_tax_amount'] = $data['sales_tax_amount'] ?? null;
        $this->container['purchase_order_number'] = $data['purchase_order_number'] ?? null;
        $this->container['prompt_for_tip'] = $data['prompt_for_tip'] ?? null;
        $this->container['override_duplicates'] = $data['override_duplicates'] ?? null;
        $this->container['commercial_card_mode'] = $data['commercial_card_mode'] ?? null;
        $this->container['level3_data'] = $data['level3_data'] ?? null;
        $this->container['original_payment_reference_number'] = $data['original_payment_reference_number'] ?? null;
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
     * Gets result
     *
     * @return string|null
     */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     *
     * @param string|null $result Method result code
     *
     * @return self
     */
    public function setResult($result)
    {
        $this->container['result'] = $result;

        return $this;
    }

    /**
     * Gets result_message
     *
     * @return string|null
     */
    public function getResultMessage()
    {
        return $this->container['result_message'];
    }

    /**
     * Sets result_message
     *
     * @param string|null $result_message Method result message
     *
     * @return self
     */
    public function setResultMessage($result_message)
    {
        $this->container['result_message'] = $result_message;

        return $this;
    }

    /**
     * Gets result_details
     *
     * @return string|null
     */
    public function getResultDetails()
    {
        return $this->container['result_details'];
    }

    /**
     * Sets result_details
     *
     * @param string|null $result_details Method result details
     *
     * @return self
     */
    public function setResultDetails($result_details)
    {
        $this->container['result_details'] = $result_details;

        return $this;
    }

    /**
     * Gets ticket_id
     *
     * @return string|null
     */
    public function getTicketId()
    {
        return $this->container['ticket_id'];
    }

    /**
     * Sets ticket_id
     *
     * @param string|null $ticket_id ticket_id
     *
     * @return self
     */
    public function setTicketId($ticket_id)
    {
        $this->container['ticket_id'] = $ticket_id;

        return $this;
    }

    /**
     * Gets ticket_status
     *
     * @return string|null
     */
    public function getTicketStatus()
    {
        return $this->container['ticket_status'];
    }

    /**
     * Sets ticket_status
     *
     * @param string|null $ticket_status ticket_status
     *
     * @return self
     */
    public function setTicketStatus($ticket_status)
    {
        $this->container['ticket_status'] = $ticket_status;

        return $this;
    }

    /**
     * Gets terminal_id
     *
     * @return string|null
     */
    public function getTerminalId()
    {
        return $this->container['terminal_id'];
    }

    /**
     * Sets terminal_id
     *
     * @param string|null $terminal_id terminal_id
     *
     * @return self
     */
    public function setTerminalId($terminal_id)
    {
        $this->container['terminal_id'] = $terminal_id;

        return $this;
    }

    /**
     * Gets transaction_type
     *
     * @return string|null
     */
    public function getTransactionType()
    {
        return $this->container['transaction_type'];
    }

    /**
     * Sets transaction_type
     *
     * @param string|null $transaction_type transaction_type
     *
     * @return self
     */
    public function setTransactionType($transaction_type)
    {
        $this->container['transaction_type'] = $transaction_type;

        return $this;
    }

    /**
     * Gets clerk_id
     *
     * @return string|null
     */
    public function getClerkId()
    {
        return $this->container['clerk_id'];
    }

    /**
     * Sets clerk_id
     *
     * @param string|null $clerk_id clerk_id
     *
     * @return self
     */
    public function setClerkId($clerk_id)
    {
        $this->container['clerk_id'] = $clerk_id;

        return $this;
    }

    /**
     * Gets transaction_id
     *
     * @return string|null
     */
    public function getTransactionId()
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id
     *
     * @param string|null $transaction_id transaction_id
     *
     * @return self
     */
    public function setTransactionId($transaction_id)
    {
        $this->container['transaction_id'] = $transaction_id;

        return $this;
    }

    /**
     * Gets invoice_number
     *
     * @return string|null
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     *
     * @param string|null $invoice_number invoice_number
     *
     * @return self
     */
    public function setInvoiceNumber($invoice_number)
    {
        $this->container['invoice_number'] = $invoice_number;

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
     * @param string|null $customer_key customer_key
     *
     * @return self
     */
    public function setCustomerKey($customer_key)
    {
        $this->container['customer_key'] = $customer_key;

        return $this;
    }

    /**
     * Gets auth_amount
     *
     * @return string|null
     */
    public function getAuthAmount()
    {
        return $this->container['auth_amount'];
    }

    /**
     * Sets auth_amount
     *
     * @param string|null $auth_amount auth_amount
     *
     * @return self
     */
    public function setAuthAmount($auth_amount)
    {
        $this->container['auth_amount'] = $auth_amount;

        return $this;
    }

    /**
     * Gets tip_amount
     *
     * @return string|null
     */
    public function getTipAmount()
    {
        return $this->container['tip_amount'];
    }

    /**
     * Sets tip_amount
     *
     * @param string|null $tip_amount tip_amount
     *
     * @return self
     */
    public function setTipAmount($tip_amount)
    {
        $this->container['tip_amount'] = $tip_amount;

        return $this;
    }

    /**
     * Gets sales_tax_amount
     *
     * @return string|null
     */
    public function getSalesTaxAmount()
    {
        return $this->container['sales_tax_amount'];
    }

    /**
     * Sets sales_tax_amount
     *
     * @param string|null $sales_tax_amount sales_tax_amount
     *
     * @return self
     */
    public function setSalesTaxAmount($sales_tax_amount)
    {
        $this->container['sales_tax_amount'] = $sales_tax_amount;

        return $this;
    }

    /**
     * Gets purchase_order_number
     *
     * @return string|null
     */
    public function getPurchaseOrderNumber()
    {
        return $this->container['purchase_order_number'];
    }

    /**
     * Sets purchase_order_number
     *
     * @param string|null $purchase_order_number purchase_order_number
     *
     * @return self
     */
    public function setPurchaseOrderNumber($purchase_order_number)
    {
        $this->container['purchase_order_number'] = $purchase_order_number;

        return $this;
    }

    /**
     * Gets prompt_for_tip
     *
     * @return string|null
     */
    public function getPromptForTip()
    {
        return $this->container['prompt_for_tip'];
    }

    /**
     * Sets prompt_for_tip
     *
     * @param string|null $prompt_for_tip prompt_for_tip
     *
     * @return self
     */
    public function setPromptForTip($prompt_for_tip)
    {
        $this->container['prompt_for_tip'] = $prompt_for_tip;

        return $this;
    }

    /**
     * Gets override_duplicates
     *
     * @return string|null
     */
    public function getOverrideDuplicates()
    {
        return $this->container['override_duplicates'];
    }

    /**
     * Sets override_duplicates
     *
     * @param string|null $override_duplicates override_duplicates
     *
     * @return self
     */
    public function setOverrideDuplicates($override_duplicates)
    {
        $this->container['override_duplicates'] = $override_duplicates;

        return $this;
    }

    /**
     * Gets commercial_card_mode
     *
     * @return string|null
     */
    public function getCommercialCardMode()
    {
        return $this->container['commercial_card_mode'];
    }

    /**
     * Sets commercial_card_mode
     *
     * @param string|null $commercial_card_mode commercial_card_mode
     *
     * @return self
     */
    public function setCommercialCardMode($commercial_card_mode)
    {
        $this->container['commercial_card_mode'] = $commercial_card_mode;

        return $this;
    }

    /**
     * Gets level3_data
     *
     * @return \DCarbone\ParagonSolutionsPHPSDK\Model\Level3DetailsModel|null
     */
    public function getLevel3Data()
    {
        return $this->container['level3_data'];
    }

    /**
     * Sets level3_data
     *
     * @param \DCarbone\ParagonSolutionsPHPSDK\Model\Level3DetailsModel|null $level3_data level3_data
     *
     * @return self
     */
    public function setLevel3Data($level3_data)
    {
        $this->container['level3_data'] = $level3_data;

        return $this;
    }

    /**
     * Gets original_payment_reference_number
     *
     * @return string|null
     */
    public function getOriginalPaymentReferenceNumber()
    {
        return $this->container['original_payment_reference_number'];
    }

    /**
     * Sets original_payment_reference_number
     *
     * @param string|null $original_payment_reference_number original_payment_reference_number
     *
     * @return self
     */
    public function setOriginalPaymentReferenceNumber($original_payment_reference_number)
    {
        $this->container['original_payment_reference_number'] = $original_payment_reference_number;

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



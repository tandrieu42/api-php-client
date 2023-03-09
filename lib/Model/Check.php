<?php
/**
 * Check
 *
 * PHP version 5
 *
 * @category Class
 * @package  Onfido
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Onfido API
 *
 * The Onfido API is used to submit check requests.
 *
 * The version of the OpenAPI document: 3.0.0
 *
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Onfido\Model;

use \ArrayAccess;
use \Onfido\ObjectSerializer;

/**
 * Check Class Doc Comment
 *
 * @category Class
 * @package  Onfido
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Check implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'check';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_at' => '\DateTime',
        'href' => 'string',
        'status' => 'string',
        'result' => 'string',
        'download_uri' => 'string',
        'form_uri' => 'string',
        'redirect_uri' => 'string',
        'results_uri' => 'string',
        'report_names' => 'string[]',
        'applicant_id' => 'string',
        'privacy_notices_read_consent_given' => 'bool',
        'tags' => 'string[]',
        'applicant_provides_data' => 'bool',
        'suppress_form_emails' => 'bool',
        'asynchronous' => 'bool',
        'report_ids' => 'string[]',
        'document_ids' => 'string[]',
        'consider' => 'string[]',
        'sub_result' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'created_at' => 'date-time',
        'href' => null,
        'status' => null,
        'result' => null,
        'download_uri' => null,
        'form_uri' => null,
        'redirect_uri' => null,
        'results_uri' => null,
        'report_names' => null,
        'applicant_id' => null,
        'privacy_notices_read_consent_given' => null,
        'tags' => null,
        'applicant_provides_data' => null,
        'suppress_form_emails' => null,
        'asynchronous' => null,
        'report_ids' => null,
        'document_ids' => null,
        'consider' => null,
        'sub_result' => null
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
        'id' => 'id',
        'created_at' => 'created_at',
        'href' => 'href',
        'status' => 'status',
        'result' => 'result',
        'download_uri' => 'download_uri',
        'form_uri' => 'form_uri',
        'redirect_uri' => 'redirect_uri',
        'results_uri' => 'results_uri',
        'report_names' => 'report_names',
        'applicant_id' => 'applicant_id',
        'privacy_notices_read_consent_given' => 'privacy_notices_read_consent_given',
        'tags' => 'tags',
        'applicant_provides_data' => 'applicant_provides_data',
        'suppress_form_emails' => 'suppress_form_emails',
        'asynchronous' => 'asynchronous',
        'report_ids' => 'report_ids',
        'document_ids' => 'document_ids',
        'consider' => 'consider',
        'sub_result' => 'sub_result'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'href' => 'setHref',
        'status' => 'setStatus',
        'result' => 'setResult',
        'download_uri' => 'setDownloadUri',
        'form_uri' => 'setFormUri',
        'redirect_uri' => 'setRedirectUri',
        'results_uri' => 'setResultsUri',
        'report_names' => 'setReportNames',
        'applicant_id' => 'setApplicantId',
        'privacy_notices_read_consent_given' => 'setPrivacyNoticesReadConsentGiven',
        'tags' => 'setTags',
        'applicant_provides_data' => 'setApplicantProvidesData',
        'suppress_form_emails' => 'setSuppressFormEmails',
        'asynchronous' => 'setAsynchronous',
        'report_ids' => 'setReportIds',
        'document_ids' => 'setDocumentIds',
        'consider' => 'setConsider',
        'sub_result' => 'setSubResult'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'href' => 'getHref',
        'status' => 'getStatus',
        'result' => 'getResult',
        'download_uri' => 'getDownloadUri',
        'form_uri' => 'getFormUri',
        'redirect_uri' => 'getRedirectUri',
        'results_uri' => 'getResultsUri',
        'report_names' => 'getReportNames',
        'applicant_id' => 'getApplicantId',
        'privacy_notices_read_consent_given' => 'getPrivacyNoticesReadConsentGiven',
        'tags' => 'getTags',
        'applicant_provides_data' => 'getApplicantProvidesData',
        'suppress_form_emails' => 'getSuppressFormEmails',
        'asynchronous' => 'getAsynchronous',
        'report_ids' => 'getReportIds',
        'document_ids' => 'getDocumentIds',
        'consider' => 'getConsider',
        'sub_result' => 'getSubResult'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['href'] = isset($data['href']) ? $data['href'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['download_uri'] = isset($data['download_uri']) ? $data['download_uri'] : null;
        $this->container['form_uri'] = isset($data['form_uri']) ? $data['form_uri'] : null;
        $this->container['redirect_uri'] = isset($data['redirect_uri']) ? $data['redirect_uri'] : null;
        $this->container['results_uri'] = isset($data['results_uri']) ? $data['results_uri'] : null;
        $this->container['report_names'] = isset($data['report_names']) ? $data['report_names'] : null;
        $this->container['applicant_id'] = isset($data['applicant_id']) ? $data['applicant_id'] : null;
        $this->container['privacy_notices_read_consent_given'] = isset($data['privacy_notices_read_consent_given']) ? $data['privacy_notices_read_consent_given'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['applicant_provides_data'] = isset($data['applicant_provides_data']) ? $data['applicant_provides_data'] : null;
        $this->container['suppress_form_emails'] = isset($data['suppress_form_emails']) ? $data['suppress_form_emails'] : null;
        $this->container['asynchronous'] = isset($data['asynchronous']) ? $data['asynchronous'] : null;
        $this->container['report_ids'] = isset($data['report_ids']) ? $data['report_ids'] : null;
        $this->container['document_ids'] = isset($data['document_ids']) ? $data['document_ids'] : null;
        $this->container['consider'] = isset($data['consider']) ? $data['consider'] : null;
        $this->container['sub_result'] = isset($data['sub_result']) ? $data['sub_result'] : null;
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The unique identifier for the check. Read-only.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at The date and time when this check was created. Read-only.
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets href
     *
     * @return string|null
     */
    public function getHref()
    {
        return $this->container['href'];
    }

    /**
     * Sets href
     *
     * @param string|null $href The uri of this resource. Read-only.
     *
     * @return $this
     */
    public function setHref($href)
    {
        $this->container['href'] = $href;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status The current state of the check in the checking process. Read-only.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
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
     * @param string|null $result The overall result of the check, based on the results of the constituent reports. Read-only.
     *
     * @return $this
     */
    public function setResult($result)
    {
        $this->container['result'] = $result;

        return $this;
    }

    /**
     * Gets download_uri
     *
     * @return string|null
     */
    public function getDownloadUri()
    {
        return $this->container['download_uri'];
    }

    /**
     * Sets download_uri
     *
     * @param string|null $download_uri A link to a PDF output of the check results. Append `.pdf` to get the pdf file. Read-only.
     *
     * @return $this
     */
    public function setDownloadUri($download_uri)
    {
        $this->container['download_uri'] = $download_uri;

        return $this;
    }

    /**
     * Gets form_uri
     *
     * @return string|null
     */
    public function getFormUri()
    {
        return $this->container['form_uri'];
    }

    /**
     * Sets form_uri
     *
     * @param string|null $form_uri A link to the applicant form, if `applicant_provides_data` is `true`. Read-only.
     *
     * @return $this
     */
    public function setFormUri($form_uri)
    {
        $this->container['form_uri'] = $form_uri;

        return $this;
    }

    /**
     * Gets redirect_uri
     *
     * @return string|null
     */
    public function getRedirectUri()
    {
        return $this->container['redirect_uri'];
    }

    /**
     * Sets redirect_uri
     *
     * @param string|null $redirect_uri For checks where `applicant_provides_data` is `true`, redirect to this URI when the applicant has submitted their data. Read-only.
     *
     * @return $this
     */
    public function setRedirectUri($redirect_uri)
    {
        $this->container['redirect_uri'] = $redirect_uri;

        return $this;
    }

    /**
     * Gets results_uri
     *
     * @return string|null
     */
    public function getResultsUri()
    {
        return $this->container['results_uri'];
    }

    /**
     * Sets results_uri
     *
     * @param string|null $results_uri A link to the corresponding results page on the Onfido dashboard.
     *
     * @return $this
     */
    public function setResultsUri($results_uri)
    {
        $this->container['results_uri'] = $results_uri;

        return $this;
    }

    /**
     * Gets report_names
     *
     * @return string[]|null
     */
    public function getReportNames()
    {
        return $this->container['report_names'];
    }

    /**
     * Sets report_names
     *
     * @param string[]|null $report_names An array of report names (strings).
     *
     * @return $this
     */
    public function setReportNames($report_names)
    {
        $this->container['report_names'] = $report_names;

        return $this;
    }

    /**
     * Gets applicant_id
     *
     * @return string|null
     */
    public function getApplicantId()
    {
        return $this->container['applicant_id'];
    }

    /**
     * Sets applicant_id
     *
     * @param string|null $applicant_id The ID of the applicant to do the check on.
     *
     * @return $this
     */
    public function setApplicantId($applicant_id)
    {
        $this->container['applicant_id'] = $applicant_id;

        return $this;
    }

    /**
     * Gets privacy_notices_read_consent_given
     *
     * @return bool|null
     */
    public function getPrivacyNoticesReadConsentGiven()
    {
        return $this->container['privacy_notices_read_consent_given'];
    }

    /**
     * Sets privacy_notices_read_consent_given
     *
     * @param bool|null $privacy_notices_read_consent_given Indicates whether the privacy notices and terms of service have been read and, where specific laws require, that consent has been given for Onfido.
     *
     * @return $this
     */
    public function setPrivacyNoticesReadConsentGiven($privacy_notices_read_consent_given)
    {
        $this->container['privacy_notices_read_consent_given'] = $privacy_notices_read_consent_given;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[]|null $tags Array of tags being assigned to this check.
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets applicant_provides_data
     *
     * @return bool|null
     */
    public function getApplicantProvidesData()
    {
        return $this->container['applicant_provides_data'];
    }

    /**
     * Sets applicant_provides_data
     *
     * @param bool|null $applicant_provides_data Send an applicant form to applicant to complete to proceed with check. Defaults to false.
     *
     * @return $this
     */
    public function setApplicantProvidesData($applicant_provides_data)
    {
        $this->container['applicant_provides_data'] = $applicant_provides_data;

        return $this;
    }

    /**
     * Gets suppress_form_emails
     *
     * @return bool|null
     */
    public function getSuppressFormEmails()
    {
        return $this->container['suppress_form_emails'];
    }

    /**
     * Sets suppress_form_emails
     *
     * @param bool|null $suppress_form_emails For checks where `applicant_provides_data` is `true`, applicant form will not be automatically sent if `suppress_form_emails` is set to `true`. You can manually send the form at any time after the check has been created, using the link found in the form_uri attribute of the check object. Write-only. Defaults to false.
     *
     * @return $this
     */
    public function setSuppressFormEmails($suppress_form_emails)
    {
        $this->container['suppress_form_emails'] = $suppress_form_emails;

        return $this;
    }

    /**
     * Gets asynchronous
     *
     * @return bool|null
     */
    public function getAsynchronous()
    {
        return $this->container['asynchronous'];
    }

    /**
     * Sets asynchronous
     *
     * @param bool|null $asynchronous Defaults to `true`. Write-only. If set to `false`, you will only receive a response when all reports in your check have completed.
     *
     * @return $this
     */
    public function setAsynchronous($asynchronous)
    {
        $this->container['asynchronous'] = $asynchronous;

        return $this;
    }

    /**
     * Gets report_ids
     *
     * @return string[]|null
     */
    public function getReportIds()
    {
        return $this->container['report_ids'];
    }

    /**
     * Sets report_ids
     *
     * @param string[]|null $report_ids An array of report ids.
     *
     * @return $this
     */
    public function setReportIds($report_ids)
    {
        $this->container['report_ids'] = $report_ids;

        return $this;
    }

    /**
     * Gets document_ids
     *
     * @return string[]|null
     */
    public function getDocumentIds()
    {
        return $this->container['document_ids'];
    }

    /**
     * Sets document_ids
     *
     * @param string[]|null $document_ids Optional. An array of document ids, for use with Document reports only. If omitted, the Document report will use the most recently uploaded document by default.
     *
     * @return $this
     */
    public function setDocumentIds($document_ids)
    {
        $this->container['document_ids'] = $document_ids;

        return $this;
    }

    /**
     * Gets consider
     *
     * @return string[]|null
     */
    public function getConsider()
    {
        return $this->container['consider'];
    }

    /**
     * Sets consider
     *
     * @param string[]|null $consider Returns a pre-determined consider sub-result in sandbox for the specific reports in the consider array.
     *
     * @return $this
     */
    public function setConsider($consider)
    {
        $this->container['consider'] = $consider;

        return $this;
    }

    /**
     * Gets sub_result
     *
     * @return string|null
     */
    public function getSubResult()
    {
        return $this->container['sub_result'];
    }

    /**
     * Sets sub_result
     *
     * @param string|null $sub_result Triggers a pre-determined sub-result response for sandbox Document reports.
     *
     * @return $this
     */
    public function setSubResult($sub_result)
    {
        $this->container['sub_result'] = $sub_result;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
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
    public function offsetGet(mixed $offset): mixed
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
    public function offsetSet(mixed $offset, mixed $value): void
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
    public function offsetUnset(mixed $offset): void
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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}



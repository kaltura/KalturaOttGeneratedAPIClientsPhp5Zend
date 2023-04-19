<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platforms allow them to do with
// text.
//
// Copyright (C) 2006-2023  Kaltura Inc.
//
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU Affero General Public License as
// published by the Free Software Foundation, either version 3 of the
// License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU Affero General Public License for more details.
//
// You should have received a copy of the GNU Affero General Public License
// along with this program.  If not, see <http://www.gnu.org/licenses/>.
//
// @ignore
// ===================================================================================================

/**
 * @package Kaltura
 * @subpackage Client
 */
class Kaltura_Client_Type_Announcement extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaAnnouncement';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->name))
			$this->name = (string)$xml->name;
		if(!is_null($jsonObject) && isset($jsonObject->name))
			$this->name = (string)$jsonObject->name;
		if(!is_null($xml) && count($xml->message))
			$this->message = (string)$xml->message;
		if(!is_null($jsonObject) && isset($jsonObject->message))
			$this->message = (string)$jsonObject->message;
		if(!is_null($xml) && count($xml->enabled))
		{
			if(!empty($xml->enabled) && ((int) $xml->enabled === 1 || strtolower((string)$xml->enabled) === 'true'))
				$this->enabled = true;
			else
				$this->enabled = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->enabled))
		{
			if(!empty($jsonObject->enabled) && ((int) $jsonObject->enabled === 1 || strtolower((string)$jsonObject->enabled) === 'true'))
				$this->enabled = true;
			else
				$this->enabled = false;
		}
		if(!is_null($xml) && count($xml->startTime))
			$this->startTime = (string)$xml->startTime;
		if(!is_null($jsonObject) && isset($jsonObject->startTime))
			$this->startTime = (string)$jsonObject->startTime;
		if(!is_null($xml) && count($xml->timezone))
			$this->timezone = (string)$xml->timezone;
		if(!is_null($jsonObject) && isset($jsonObject->timezone))
			$this->timezone = (string)$jsonObject->timezone;
		if(!is_null($xml) && count($xml->status))
			$this->status = (string)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (string)$jsonObject->status;
		if(!is_null($xml) && count($xml->recipients))
			$this->recipients = (string)$xml->recipients;
		if(!is_null($jsonObject) && isset($jsonObject->recipients))
			$this->recipients = (string)$jsonObject->recipients;
		if(!is_null($xml) && count($xml->id))
			$this->id = (int)$xml->id;
		if(!is_null($jsonObject) && isset($jsonObject->id))
			$this->id = (int)$jsonObject->id;
		if(!is_null($xml) && count($xml->imageUrl))
			$this->imageUrl = (string)$xml->imageUrl;
		if(!is_null($jsonObject) && isset($jsonObject->imageUrl))
			$this->imageUrl = (string)$jsonObject->imageUrl;
		if(!is_null($xml) && count($xml->includeMail))
		{
			if(!empty($xml->includeMail) && ((int) $xml->includeMail === 1 || strtolower((string)$xml->includeMail) === 'true'))
				$this->includeMail = true;
			else
				$this->includeMail = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->includeMail))
		{
			if(!empty($jsonObject->includeMail) && ((int) $jsonObject->includeMail === 1 || strtolower((string)$jsonObject->includeMail) === 'true'))
				$this->includeMail = true;
			else
				$this->includeMail = false;
		}
		if(!is_null($xml) && count($xml->mailTemplate))
			$this->mailTemplate = (string)$xml->mailTemplate;
		if(!is_null($jsonObject) && isset($jsonObject->mailTemplate))
			$this->mailTemplate = (string)$jsonObject->mailTemplate;
		if(!is_null($xml) && count($xml->mailSubject))
			$this->mailSubject = (string)$xml->mailSubject;
		if(!is_null($jsonObject) && isset($jsonObject->mailSubject))
			$this->mailSubject = (string)$jsonObject->mailSubject;
		if(!is_null($xml) && count($xml->includeSms))
		{
			if(!empty($xml->includeSms) && ((int) $xml->includeSms === 1 || strtolower((string)$xml->includeSms) === 'true'))
				$this->includeSms = true;
			else
				$this->includeSms = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->includeSms))
		{
			if(!empty($jsonObject->includeSms) && ((int) $jsonObject->includeSms === 1 || strtolower((string)$jsonObject->includeSms) === 'true'))
				$this->includeSms = true;
			else
				$this->includeSms = false;
		}
		if(!is_null($xml) && count($xml->includeIot))
		{
			if(!empty($xml->includeIot) && ((int) $xml->includeIot === 1 || strtolower((string)$xml->includeIot) === 'true'))
				$this->includeIot = true;
			else
				$this->includeIot = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->includeIot))
		{
			if(!empty($jsonObject->includeIot) && ((int) $jsonObject->includeIot === 1 || strtolower((string)$jsonObject->includeIot) === 'true'))
				$this->includeIot = true;
			else
				$this->includeIot = false;
		}
		if(!is_null($xml) && count($xml->includeUserInbox))
		{
			if(!empty($xml->includeUserInbox) && ((int) $xml->includeUserInbox === 1 || strtolower((string)$xml->includeUserInbox) === 'true'))
				$this->includeUserInbox = true;
			else
				$this->includeUserInbox = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->includeUserInbox))
		{
			if(!empty($jsonObject->includeUserInbox) && ((int) $jsonObject->includeUserInbox === 1 || strtolower((string)$jsonObject->includeUserInbox) === 'true'))
				$this->includeUserInbox = true;
			else
				$this->includeUserInbox = false;
		}
	}
	/**
	 * Announcement name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Announcement message
	 *
	 * @var string
	 */
	public $message = null;

	/**
	 * Announcement enabled
	 *
	 * @var bool
	 */
	public $enabled = null;

	/**
	 * Announcement start time
	 *
	 * @var bigint
	 */
	public $startTime = null;

	/**
	 * Announcement time zone
	 *
	 * @var string
	 */
	public $timezone = null;

	/**
	 * Announcement status: NotSent=0/Sending=1/Sent=2/Aborted=3
	 *
	 * @var Kaltura_Client_Enum_AnnouncementStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * Announcement recipients: All=0/LoggedIn=1/Guests=2/Other=3
	 *
	 * @var Kaltura_Client_Enum_AnnouncementRecipientsType
	 */
	public $recipients = null;

	/**
	 * Announcement id
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Announcement image URL, relevant for system announcements
	 *
	 * @var string
	 */
	public $imageUrl = null;

	/**
	 * Include Mail
	 *
	 * @var bool
	 */
	public $includeMail = null;

	/**
	 * Mail Template
	 *
	 * @var string
	 */
	public $mailTemplate = null;

	/**
	 * Mail Subject
	 *
	 * @var string
	 */
	public $mailSubject = null;

	/**
	 * Include SMS
	 *
	 * @var bool
	 */
	public $includeSms = null;

	/**
	 * Include IOT
	 *
	 * @var bool
	 */
	public $includeIot = null;

	/**
	 * Should add to user inbox
	 *
	 * @var bool
	 */
	public $includeUserInbox = null;


}


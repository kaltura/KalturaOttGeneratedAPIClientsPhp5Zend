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
// Copyright (C) 2006-2022  Kaltura Inc.
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
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->name))
		{
			if(isset($xml->name->item) && count($xml->name->item))
				$this->multiLingual_name = Kaltura_Client_ParseUtils::unmarshalArray($xml->name, '');
			else
				$this->name = (string)$xml->name;
		}
		if(count($xml->message))
		{
			if(isset($xml->message->item) && count($xml->message->item))
				$this->multiLingual_message = Kaltura_Client_ParseUtils::unmarshalArray($xml->message, '');
			else
				$this->message = (string)$xml->message;
		}
		if(count($xml->enabled))
		{
			if(!empty($xml->enabled) && ((int) $xml->enabled === 1 || strtolower((string)$xml->enabled) === 'true'))
				$this->enabled = true;
			else
				$this->enabled = false;
		}
		if(count($xml->startTime))
			$this->startTime = (string)$xml->startTime;
		if(count($xml->timezone))
		{
			if(isset($xml->timezone->item) && count($xml->timezone->item))
				$this->multiLingual_timezone = Kaltura_Client_ParseUtils::unmarshalArray($xml->timezone, '');
			else
				$this->timezone = (string)$xml->timezone;
		}
		if(count($xml->status))
		{
			if(isset($xml->status->item) && count($xml->status->item))
				$this->multiLingual_status = Kaltura_Client_ParseUtils::unmarshalArray($xml->status, '');
			else
				$this->status = (string)$xml->status;
		}
		if(count($xml->recipients))
		{
			if(isset($xml->recipients->item) && count($xml->recipients->item))
				$this->multiLingual_recipients = Kaltura_Client_ParseUtils::unmarshalArray($xml->recipients, '');
			else
				$this->recipients = (string)$xml->recipients;
		}
		if(count($xml->id))
			$this->id = (int)$xml->id;
		if(count($xml->imageUrl))
		{
			if(isset($xml->imageUrl->item) && count($xml->imageUrl->item))
				$this->multiLingual_imageUrl = Kaltura_Client_ParseUtils::unmarshalArray($xml->imageUrl, '');
			else
				$this->imageUrl = (string)$xml->imageUrl;
		}
		if(count($xml->includeMail))
		{
			if(!empty($xml->includeMail) && ((int) $xml->includeMail === 1 || strtolower((string)$xml->includeMail) === 'true'))
				$this->includeMail = true;
			else
				$this->includeMail = false;
		}
		if(count($xml->mailTemplate))
		{
			if(isset($xml->mailTemplate->item) && count($xml->mailTemplate->item))
				$this->multiLingual_mailTemplate = Kaltura_Client_ParseUtils::unmarshalArray($xml->mailTemplate, '');
			else
				$this->mailTemplate = (string)$xml->mailTemplate;
		}
		if(count($xml->mailSubject))
		{
			if(isset($xml->mailSubject->item) && count($xml->mailSubject->item))
				$this->multiLingual_mailSubject = Kaltura_Client_ParseUtils::unmarshalArray($xml->mailSubject, '');
			else
				$this->mailSubject = (string)$xml->mailSubject;
		}
		if(count($xml->includeSms))
		{
			if(!empty($xml->includeSms) && ((int) $xml->includeSms === 1 || strtolower((string)$xml->includeSms) === 'true'))
				$this->includeSms = true;
			else
				$this->includeSms = false;
		}
		if(count($xml->includeIot))
		{
			if(!empty($xml->includeIot) && ((int) $xml->includeIot === 1 || strtolower((string)$xml->includeIot) === 'true'))
				$this->includeIot = true;
			else
				$this->includeIot = false;
		}
		if(count($xml->includeUserInbox))
		{
			if(!empty($xml->includeUserInbox) && ((int) $xml->includeUserInbox === 1 || strtolower((string)$xml->includeUserInbox) === 'true'))
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


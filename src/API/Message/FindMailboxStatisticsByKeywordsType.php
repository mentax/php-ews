<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing FindMailboxStatisticsByKeywordsType
 *
 * Request type for the FindMailboxStatisticsByKeywords web method.
 * XSD Type: FindMailboxStatisticsByKeywordsType
 *
 * @method array getMailboxes()
 * @method FindMailboxStatisticsByKeywordsType setMailboxes(array $mailboxes)
 * @method array getKeywords()
 * @method FindMailboxStatisticsByKeywordsType setKeywords(array $keywords)
 * @method string getLanguage()
 * @method FindMailboxStatisticsByKeywordsType setLanguage(string $language)
 * @method array getSenders()
 * @method FindMailboxStatisticsByKeywordsType setSenders(array $senders)
 * @method array getRecipients()
 * @method FindMailboxStatisticsByKeywordsType setRecipients(array $recipients)
 * @method \DateTime getFromDate()
 * @method FindMailboxStatisticsByKeywordsType setFromDate(\DateTime $fromDate)
 * @method \DateTime getToDate()
 * @method FindMailboxStatisticsByKeywordsType setToDate(\DateTime $toDate)
 * @method array getMessageTypes()
 * @method FindMailboxStatisticsByKeywordsType setMessageTypes(array $messageTypes)
 * @method boolean getSearchDumpster()
 * @method FindMailboxStatisticsByKeywordsType setSearchDumpster(boolean $searchDumpster)
 * @method boolean getIncludePersonalArchive()
 * @method FindMailboxStatisticsByKeywordsType setIncludePersonalArchive(boolean $includePersonalArchive)
 * @method boolean getIncludeUnsearchableItems()
 * @method FindMailboxStatisticsByKeywordsType setIncludeUnsearchableItems(boolean $includeUnsearchableItems)
 */
class FindMailboxStatisticsByKeywordsType extends BaseRequestType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\UserMailboxType[]
     */
    protected $mailboxes = null;

    /**
     * @var string[]
     */
    protected $keywords = null;

    /**
     * @var string
     */
    protected $language = null;

    /**
     * @var string[]
     */
    protected $senders = null;

    /**
     * @var string[]
     */
    protected $recipients = null;

    /**
     * @var \DateTime
     */
    protected $fromDate = null;

    protected $_typeMap = array(
        'fromDate' => 'dateTime',
        'toDate' => 'dateTime',
    );

    /**
     * @var \DateTime
     */
    protected $toDate = null;

    /**
     * @var string[]
     */
    protected $messageTypes = null;

    /**
     * @var boolean
     */
    protected $searchDumpster = null;

    /**
     * @var boolean
     */
    protected $includePersonalArchive = null;

    /**
     * @var boolean
     */
    protected $includeUnsearchableItems = null;
}

<?php
/*-------------------------------------------------------+
| SYSTOPIA Event Messages                                |
| Copyright (C) 2020 SYSTOPIA                            |
| Author: B. Endres (endres@systopia.de)                 |
+--------------------------------------------------------+
| This program is released as free software under the    |
| Affero GPL license. You can redistribute it and/or     |
| modify it under the terms of this license which you    |
| can read by viewing the included agpl.txt or online    |
| at www.gnu.org/licenses/agpl.html. Removal of this     |
| copyright header is strictly prohibited without        |
| written permission from the original author(s).        |
+--------------------------------------------------------*/

use CRM_Eventmessages_ExtensionUtil as E;
use \Civi\EventMessages\MessageTokens;
use \Civi\ActionSchedule\Event\MailingQueryEvent;

/**
 * Basic Logic for adding our tokens to the scheduled reminder function
 */
class CRM_Eventmessages_ScheduledReminder
{
    /**
     * @param MailingQueryEvent $event
     */
    public static function injectTokens(MailingQueryEvent $event)
    {
        Civi::log()->debug("test");
    }
}

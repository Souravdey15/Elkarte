<?php

/**
 * Handles notifying users who have had email notifications disabled for failure to deliver
 *
 * @package   ElkArte Forum
 * @copyright ElkArte Forum contributors
 * @license   BSD http://opensource.org/licenses/BSD-3-Clause (see accompanying LICENSE.txt file)
 *
 * @version 2.0 dev
 *
 */

namespace ElkArte\Mentions\MentionType\Event;

/**
 * Class MailfailMention
 *
 * Handles notifying users who have had email notifications disabled for failure to deliver
 */
class Mailfail extends AbstractMentionBoardAccess
{
	/**
	 * {@inheritdoc }
	 */
	protected static $_type = 'mailfail';
}

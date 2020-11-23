<?php declare(strict_types = 1);

/**
 * ResponseAttributes.php
 *
 * @license        More in license.md
 * @copyright      https://fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:WebServer!
 * @subpackage     Http
 * @since          0.1.0
 *
 * @date           17.03.20
 */

namespace FastyBird\WebServer\Http;

interface ResponseAttributes
{

	public const ATTR_ENTITY = '__entity__';
	public const ATTR_TOTAL_COUNT = '__total_records_count__';

}

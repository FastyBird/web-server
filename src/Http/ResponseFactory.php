<?php declare(strict_types = 1);

/**
 * ResponseFactory.php
 *
 * @license        More in license.md
 * @copyright      https://fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:NodeWebServer!
 * @subpackage     Http
 * @since          0.1.0
 *
 * @date           17.03.20
 */

namespace FastyBird\NodeWebServer\Http;

use Fig\Http\Message\StatusCodeInterface;
use IPub\SlimRouter\Http\Stream;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Extended HTTP response factory
 *
 * @package        FastyBird:NodeWebServer!
 * @subpackage     Http
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
class ResponseFactory implements ResponseFactoryInterface
{

	/**
	 * {@inheritDoc}
	 */
	public function createResponse(
		int $code = StatusCodeInterface::STATUS_OK,
		string $reasonPhrase = ''
	): ResponseInterface {
		$stream = Stream::fromResourceUri('php://temp', 'w+b');

		return new Response($code, $stream, [], ['reason' => $reasonPhrase]);
	}

}

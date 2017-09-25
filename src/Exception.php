<?php
/**
 * League.Uri (http://uri.thephpleague.com)
 *
 * @package    League\Uri
 * @subpackage League\Uri
 * @author     Ignace Nyamagana Butera <nyamsprod@gmail.com>
 * @license    https://github.com/thephpleague/uri-parser/blob/master/LICENSE (MIT License)
 * @version    1.1.0
 * @link       https://github.com/thephpleague/uri-parser/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

namespace League\Uri;

use InvalidArgumentException;

/**
 * a Trait to validate a Hostname
 *
 * @see     https://tools.ietf.org/html/rfc3986
 * @package League\Uri
 * @author  Ignace Nyamagana Butera <nyamsprod@gmail.com>
 * @since   0.2.0
 */
class Exception extends InvalidArgumentException
{
    /**
     * Returns a new Instance from an error in URI characters
     *
     * @param string $uri
     *
     * @return static
     */
    public static function createFromInvalidCharacters(string $uri)
    {
        return new static(sprintf('The submitted uri `%s` contains invalid characters', $uri));
    }

    /**
     * Returns a new Instance from an error in URI characters
     *
     * @param string $uri
     *
     * @return static
     */
    public static function createFromInvalidScheme(string $uri)
    {
        return new static(sprintf('The submitted uri `%s` contains an invalid scheme', $uri));
    }

    /**
     * Returns a new Instance from an error in Host validation
     *
     * @param string $host
     *
     * @return static
     */
    public static function createFromInvalidHost(string $host)
    {
        return new static(sprintf('The submitted host `%s` is invalid', $host));
    }

    /**
     * Returns a new Instance from an error in port validation
     *
     * @param string $hostname
     *
     * @return static
     */
    public static function createFromInvalidHostname(string $hostname)
    {
        return new static(sprintf('The submitted hostname `%s` is invalid', $hostname));
    }

    /**
     * Returns a new Instance from an error in port validation
     *
     * @param string|int $port
     *
     * @return static
     */
    public static function createFromInvalidPort($port)
    {
        return new static(sprintf('The submitted port `%s` is invalid', $port));
    }

    /**
     * Returns a new Instance from an error in Uri path component
     *
     * @param string $uri
     *
     * @return static
     */
    public static function createFromInvalidPath(string $uri)
    {
        return new static(sprintf('The submitted uri `%s` contains an invalid path', $uri));
    }
}

<?php

/*
 * This file is part of the Supervisor Configuration package.
 *
 * (c) Márk Sági-Kazár <mark.sagikazar@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Supervisor\Exception;

/**
 * Thrown when an invalid section is passed to the Configuration parser
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
class UnknownSection extends \UnexpectedValueException
{
    /**
     * @param string $sectionName
     */
    public function __construct($sectionName)
    {
        parent::__construct(sprintf('Section "%s" is not found in the section map', $sectionName));
    }
}

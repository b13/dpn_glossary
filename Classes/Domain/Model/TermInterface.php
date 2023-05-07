<?php
declare(strict_types=1);

namespace Featdd\DpnGlossary\Domain\Model;

/***
 *
 * This file is part of the "dreipunktnull Glossar" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2023 Daniel Dorndorf <dorndorf@featdd.de>
 *
 ***/
interface TermInterface
{
    public const TABLE = 'tx_dpnglossary_domain_model_term';

    /**
     * @return string
     */
    public function getName(): string;
}

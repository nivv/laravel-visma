<?php

declare(strict_types=1);

namespace Webparking\LaravelVisma\Entities;

use Illuminate\Support\Collection;

/**
 * Class FiscalYear
 *
 * @property string $Id
 * @property string $StartDate
 * @property string $EndDate
 * @property boolean $IsLockedForAccounting
 * @property integer $BookkeepingMethod - Purpose: When posting fiscalyear, previous years bookkeeping method is chosen. 0 = Invoicing, 1 = Cash, 2 = NoBookkeeping = ['0', '1', '2']
 *
 * @package Webparking\LaravelVisma\Entities
 */
class FiscalYear extends BaseEntity
{
    /** @var string */
    protected $endpoint = '/fiscalyears';

    public function index(): collection
    {
        return $this->baseIndex();
    }
}

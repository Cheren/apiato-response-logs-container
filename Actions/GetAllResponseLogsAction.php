<?php

/**
 * ERP system
 *
 * This file is part of the ERM system package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license     https://kalistratov.ru/licenses/erp Proprietary license
 * @copyright   Copyright (C) kalistratov.ru, All rights reserved ©.
 * @link        https://kalistratov.ru
 * @author      Sergey Kalistratov <sergey@kalistratov.ru>
 */

namespace App\Containers\Vendor\ResponseLog\Actions;

use App\Containers\Vendor\ResponseLog\Tasks\GetAllResponseLogsTask;
use App\Ship\Parents\Actions\Action;
use Illuminate\Pagination\LengthAwarePaginator;

final class GetAllResponseLogsAction extends Action
{
    public function run(): LengthAwarePaginator
    {
        return app(GetAllResponseLogsTask::class)->run();
    }
}

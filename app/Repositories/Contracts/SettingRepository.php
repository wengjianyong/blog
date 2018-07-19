<?php

namespace App\Repositories\Contracts;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface SettingRepository.
 *
 * @package namespace App\Repositories\Contracts;
 */
interface SettingRepository extends RepositoryInterface
{
    /**
     * 网站基础配置
     *
     * @param null $tag
     * @return mixed
     */
    public function siteSettings($tag = null);
}

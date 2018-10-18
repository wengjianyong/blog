<?php

namespace App\Repositories\Eloquent;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Contracts\SettingRepository;
use App\Models\Setting;
use App\Validators\SettingValidator;

/**
 * Class SettingRepositoryEloquent.
 *
 * @package namespace App\Repositories\Eloquent;
 */
class SettingRepositoryEloquent extends BaseRepository implements SettingRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Setting::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    /**
     * 网站设置
     *
     * @param  null $tag 标签
     * @return array|mixed 返回值
     */
    public function siteSettings($tag = null)
    {
        if (method_exists($this->model, $method = 'formatData')) {
            return call_user_func_array([$this->model, $method], [$tag]);
        }

        return [];
    }

}

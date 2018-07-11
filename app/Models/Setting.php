<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Setting.
 *
 * @package namespace App\Models;
 */
class Setting extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * 与模型关联的数据表。
     *
     * @var string
     */
    protected $table = 'settings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['key', 'value', 'tag'];

    /**
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $tag
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeTag($query, $tag = null)
    {
        if (is_null($tag)) {
            return $query;
        }

        return $query->where('tag', $tag);
    }

    /**
     * @param null $tag
     * @return mixed
     */
    public function formatData($tag = null)
    {
        return $this->tag($tag)->pluck('value', 'key')->toArray();
    }

}

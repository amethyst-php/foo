<?php

namespace Amethyst\Models;

use Amethyst\Common\ConfigurableModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Railken\Lem\Contracts\EntityContract;

class Foo extends Model implements EntityContract
{
    use SoftDeletes;
    use ConfigurableModel;

    /**
     * Create a new Eloquent model instance.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        $this->ini('amethyst.foo.data.foo');
        parent::__construct($attributes);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bar(): BelongsTo
    {
        return $this->belongsTo(config('amethyst.foo.data.bar.model'));
    }
}

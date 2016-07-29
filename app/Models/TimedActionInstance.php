<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Models;

use AltThree\Validator\ValidatingTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * This is the timed action instance model.
 *
 * @author James Brooks <james@alt-three.com>
 */
class TimedActionInstance extends Model
{
    use ValidatingTrait;

    /**
     * The attributes that should be casted to native types.
     *
     * @var string[]
     */
    protected $casts = [
        'timed_action_id' => 'int',
        'message'         => 'string',
        'started_at'      => 'date',
        'completed_at'    => 'date',
    ];

    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = [
        'timed_action_id',
        'message',
        'started_at',
        'completed_at',
        'created_at',
        'updated_at',
    ];

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'timed_action_id' => 'required|int',
        'started_at'      => 'required|date',
        'completed_at'    => 'required|date',
    ];

    /**
     * Get the timed action relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function timed_action()
    {
        return $this->belongsTo(TimedAction::class);
    }
}

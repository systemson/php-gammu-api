<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Systemson\ApiMaker\ListableTrait;

class Outbox extends Model
{
	use ListableTrait;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'outbox';
}

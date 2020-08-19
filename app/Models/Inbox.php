<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Systemson\ApiMaker\ListableTrait;

class Inbox extends Model
{
	use ListableTrait;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'inbox';

    protected $listable = [
    	"UpdatedInDB",
    	"ReceivingDateTime",
    	"Text",
    	"SenderNumber",
    	"Coding",
    	"UDH",
    	"SMSCNumber",
    	"Class",
    	"TextDecoded",
    	"ID",
    	"RecipientID",
    	"Processed",
    	"Status",
	];
}

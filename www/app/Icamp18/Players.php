<?php

namespace App\Icamp18;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;


class Players extends Moloquent {

	protected $connection = 'mongodb_icamp18';

	protected $collection = 'players';

	protected $primaryKey = 'id';

	public $timestamps = true;

	protected $fillable = ['id', 'name', 'email', 'mobile_no', 'smobile', 'type', 'emailStatus', 'profile_status', 'mobile_status', 'address'
							, 'city', 'state', 'country', 'pincode'];
}

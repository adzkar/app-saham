<?php  
	defined('BASEPATH') OR exit('No direct script access allowed');
	use Illuminate\Database\Eloquent\Model as Eloquent;
	
	class Tobinsq extends Eloquent
	{
		protected $table = 'tobinsq';
		protected $primaryKey = 'id';    
	    public $timestamps = false;

		protected $fillable = ['kode','closing_price','list_share','list_share','debt','assets','id_user'];
	
		public function user()
		{
			return $this->belongsTo(User::class,'id_user','id_user');
		}

	}
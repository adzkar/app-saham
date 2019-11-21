<?php  
	defined('BASEPATH') OR exit('No direct script access allowed');
	use Illuminate\Database\Eloquent\Model as Eloquent;
	
	class Tobinsq extends Eloquent
	{
		protected $table = 'tobinsq';
		protected $primaryKey = 'id';    
	    public $timestamps = false;

		protected $fillable = ['kode','closing_price','list_share','list_share','assets','id_user','piutang','hutang','modal','pendapatan','eps','roa','roe','dar','der','pbv','tahun'];
	
		public function user()
		{
			return $this->belongsTo(User::class,'id_user','id_user');
		}

	}
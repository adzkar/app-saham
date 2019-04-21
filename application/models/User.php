<?php  
	defined('BASEPATH') OR exit('No direct script access allowed');
	use Illuminate\Database\Eloquent\Model as Eloquent;
	
	class User extends Eloquent
	{
		protected $table = 'user';
	    protected $primaryKey = 'id_user';
	    public $timestamps = false;

		protected $fillable = ['full_name','username','password'];
		protected $hidden = ['password'];
	
		public function tobinsq()
		{
			return $this->hasMany(Tobinsq::class,'id_user');
		}

	}
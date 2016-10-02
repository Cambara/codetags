<?php 
namespace Cambara\CodeTag\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	
	protected $table = 'cambara_tags';
	protected $fillable = ['name'];

	public function categorizable()
    {
        return $this->morphTo();
    } 
}
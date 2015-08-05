<?php 
namespace App;

use App\Departments;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    protected $fillable = ['id', 'category', 'name', 'content'];
    public function showPicture() {
    	$first = $this->hasMany('App\Department_pictures', 'rfid', 'name')->first();
    	if ($first != null) {
    		return $first->picName;
    	}
    	else {
    		return "None.jpg";
    	}
    }
}
<?php

/**
 * Room Type Model
 *
 * @package     Makent
 * @subpackage  Model
 * @category    Room Type
 * @author      Trioangle Product Team
 * @version     1.5.9
 * @link        http://trioangle.com
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Session;
use Request;
class RoomType extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'room_type';

    public $timestamps = false;

    // Get all Active status records
    public static function active_all()
    {
    	return RoomType::whereStatus('Active')->get();
    }

    // Get all Active status records in lists type
    public static function dropdown()
    {
        //return RoomType::whereStatus('Active')->pluck('name','id');
        $data=RoomType::whereStatus('Active')->get();
        return $data->pluck('name','id');
    }

    // Get single field data by using id and field name
    public static function single_field($id, $field)
    {
        return RoomType::whereId($id)->first()->$field;
    }

    public function getNameAttribute()
        {    

        if(Request::segment(1)==ADMIN_URL){ 

        return $this->attributes['name'];

        }
        
        $default_lang = Language::where('default_language',1)->first()->value;

        $lang = Language::whereValue((Session::get('language')) ? Session::get('language') : $default_lang)->first()->value;

        if($lang == 'en')
            return $this->attributes['name'];
        else {
            $name = @RoomTypeLang::where('room_type_id', $this->attributes['id'])->where('lang_code', $lang)->first()->name;
            if($name)
                return $name;
            else
                return $this->attributes['name'];
        }
    }
   
    public function getDescriptionAttribute()
    {
        if(Request::segment(1)==ADMIN_URL){ 

        return $this->attributes['description'];

        }
        
        $default_lang = Language::where('default_language',1)->first()->value;

        $lang = Language::whereValue((Session::get('language')) ? Session::get('language') : $default_lang)->first()->value;

        if($lang == 'en')
            return $this->attributes['description'];
        else {
            $name = @RoomTypeLang::where('room_type_id', $this->attributes['id'])->where('lang_code', $lang)->first()->description;
            if($name)
                return $name;
            else
                return $this->attributes['description'];
        }
    }

}

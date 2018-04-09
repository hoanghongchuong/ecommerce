<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
abstract class AbstractModel extends Model
{
    /**
     * @var bool
     * paginate for getList
     */
    protected $paginate = true;
    /**
     * @var int
     * get 10 record for page
     */
    protected $limit = 10;
    /**
     * @var array
     * select field for getList
     */
    protected $select = ['*'];
    /**
     * get list record
     * @return array
     */
    public function getList($condition = [])
    {
        $data = $this->selsect($this->select)->condition($condition);
        if($this->paginate){
            return $data->paginate($this->limit);
        }
        return $data->get();
    }

    /**
     * @return array
     * get field list
     */
    public function getFieldList()
    {
        return $this->fillable;
    }
}
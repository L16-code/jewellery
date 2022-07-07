<?php
use CodeIgniter\Model;

class Order_detailsModel extends Model
{
    protected $table = 'order_details';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
   // protected $useSoftDeletes = true;

  //  protected $allowedFields = ['order_id', 'order_date','order_total'];
}
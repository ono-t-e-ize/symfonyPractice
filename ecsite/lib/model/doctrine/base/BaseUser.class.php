<?php

/**
 * BaseUser
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $last_name
 * @property string $first_name
 * @property string $email
 * @property string $phone
 * @property string $password
 * @property text $address
 * @property Cart $Cart
 * 
 * @method integer getId()         Returns the current record's "id" value
 * @method string  getLastName()   Returns the current record's "last_name" value
 * @method string  getFirstName()  Returns the current record's "first_name" value
 * @method string  getEmail()      Returns the current record's "email" value
 * @method string  getPhone()      Returns the current record's "phone" value
 * @method string  getPassword()   Returns the current record's "password" value
 * @method text    getAddress()    Returns the current record's "address" value
 * @method Cart    getCart()       Returns the current record's "Cart" value
 * @method User    setId()         Sets the current record's "id" value
 * @method User    setLastName()   Sets the current record's "last_name" value
 * @method User    setFirstName()  Sets the current record's "first_name" value
 * @method User    setEmail()      Sets the current record's "email" value
 * @method User    setPhone()      Sets the current record's "phone" value
 * @method User    setPassword()   Sets the current record's "password" value
 * @method User    setAddress()    Sets the current record's "address" value
 * @method User    setCart()       Sets the current record's "Cart" value
 * 
 * @package    ecsite
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUser extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('user');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('last_name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('first_name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('email', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => 255,
             ));
        $this->hasColumn('phone', 'string', 20, array(
             'type' => 'string',
             'length' => 20,
             ));
        $this->hasColumn('password', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('address', 'text', null, array(
             'type' => 'text',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Cart', array(
             'local' => 'id',
             'foreign' => 'user_id',
             'onDelete' => 'CASCADE'));
    }
}
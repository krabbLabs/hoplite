<?php
/**
 * Created by IntelliJ IDEA.
 * User: gabrielgagno
 * Date: 7/13/17
 * Time: 2:15 AM
 */

namespace Krabblabs\Hoplite;


abstract class HopliteModel
{
    protected $connections = array();

    protected $tableName = array();

    protected $fillable = array();

    protected $hidden = array();

    public function __construct()
    {

    }
}
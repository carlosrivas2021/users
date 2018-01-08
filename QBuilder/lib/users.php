<?php
require_once "QBuilder.php";
class Users
{
    public $a;

    public function __construct()
    {
        $this->a = new QBuilder();
    }
    
    public function list()
    {
        
        //$a = new QBuilder();
        $result= $this->a   ->select()
                            ->from(strtolower(get_class($this)))
                            ->execute()
                            ->result();
        //var_dump(get_class($this));
        return $result;
    }


    public function findId($id)
    {
        //$a = new QBuilder();
        $result= $this->a   ->select()
                            ->from(strtolower(get_class($this)))
                            ->where("id = $id")
                            ->execute()
                            ->result();

        return $result;
    }

    public function findPassId($id, $app)
    {
        $result = $this->a  ->select()
                            ->from("password")
                            ->where("userId = $id")
                            ->where("appsId = $app")
                            ->execute()
                            ->result();
        return $result;
    }

    public function permission($id)
    {
        $result = $this->a  ->select()
                            ->from("users")
                            ->join("x_rols_users", "users.Id=x_rols_users.usersID")
                            ->join("rols", "rols.Id=x_rols_users.rolsID")
                            ->join("x_rols_modules", "rols.Id=x_rols_modules.rolsID")
                            ->where("users.id = $id")
                            ->execute()
                            ->result();
                            //->getRawQuery();
                            
        return $result;
    }

    public function listUsersXRols()
    {
        $result = $this->a  ->select()
                            ->from("rols")
                            ->join("x_rols_users", "rols.Id=x_rols_users.rolsID")
                            ->join("users", "users.Id=x_rols_users.usersID")
                            ->orderBy("rols.id","ASC")
                            //->where("rols.id = $id")
                            ->execute()
                            ->result();
                            //->getRawQuery();

        return $result;
    }

}

<?php


class DebtorRepository extends \Nette\Object
{
    /** @var Nette\Database\Connection */
    private $database;

    const TABLE = "debtors";

    public function __construct(Nette\Database\Connection $database)
    {
        $this->database = $database;
    }

    /** @return Nette\Database\Table\Selection */
    public function findAll()
    {
        return $this->database->table(self::TABLE);
    }

    /**
     * @param $id
     * @return \Nette\Database\Table\ActiveRow
     */
    public function findById($id)
    {
        return $this->findAll()->get($id);
    }

    public function insert($values)
    {
        return $this->findAll()->insert($values);
    }

    public function clear()
    {
        $this->findAll()->delete();
    }

}

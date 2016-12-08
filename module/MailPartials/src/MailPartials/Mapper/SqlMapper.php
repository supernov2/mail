<?php
namespace MailPartials\Mapper;

use MailPartials\Model\MailPartialInterface;
use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\Adapter\Driver\ResultInterface;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\Sql\Delete;
use Zend\Db\Sql\Insert;
use Zend\Db\Sql\Sql;
use Zend\Db\Sql\Update;
use Zend\Stdlib\Hydrator\HydratorInterface;

class SqlMapper implements MailPartialMapperInterface
{
    protected $dbAdapter;
    protected $hydrator;
    protected $partialPrototype;

    public function __construct(
        AdapterInterface $dbAdapter,
        HydratorInterface $hydrator,
        MailPartialInterface $partialPrototype
    )
    {
        $this->dbAdapter = $dbAdapter;
        $this->hydrator = $hydrator;

        $this->partialPrototype = $partialPrototype;
    }

    public function find($id)
    {

    }

    public function save(MailPartialInterface $partial)
    {

    }

    public function findAll()
    {

        $sql = new Sql($this->dbAdapter);
        $select = $sql->select('partials');

        $stmt = $sql->prepareStatementForSqlObject($select);
        $result = $stmt->execute();

        if ($result instanceof ResultInterface && $result->isQueryResult()) {

            $resultSet = new HydratingResultSet($this->hydrator,
                $this->partialPrototype);

            return $resultSet->initialize($result);
        }
        return [];
    }

    public function edit(MailPartialInterface $partial)
    {

    }

    public function delete(MailPartialInterface $partial)
    {

    }
}

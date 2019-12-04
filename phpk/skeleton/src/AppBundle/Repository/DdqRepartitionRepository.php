<?php

namespace AppBundle\Repository;
/**
 * DdqRepartitionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */


use CNAMTS\PHPK\CoreBundle\Data\Repository;

class DdqRepartitionRepository extends \Doctrine\ORM\EntityRepository implements Repository
{
    public function liste()
    {
        $qb = $this->createQueryBuilder('a');
        return $qb;
    }

    public function findOneByRepartitionContrat($idRepartition)
    {
        $query = $this->_em->createQuery(
            'SELECT q FROM AppBundle:DdqRepartition q '
            . 'WHERE q.id = :idContrat');
        $query->setParameter('idContrat', $idRepartition);

        return $query->getSingleResult();
    }

    public function findByRepartition($parameters)
    {


        /*      $query = $this->_em->createQuery(
                  'SELECT q FROM AppBundle:DdqRepartition q
                      JOIN q.idDdqContrat a'
                  . 'WHERE a.idDdqContrat = :idContrat
                  And q.id = a.idDdqRepartition
                   ');
              $query->setParameter('idContrat',$parameters);
            return $query->getResult();


              /*$query = $this->_em->createQuery(
                  'SELECT q FROM AppBundle:DdqQuestionnaireTp q '
                  . 'JOIN q.idDdqCampagne c '
                  . 'WHERE c.statut = \'nouvelle\' '
                  . 'AND q.idAgent = :idAgent');
              $query->setParameter('idAgent', $parameters[0]);
              return $query->getResult();*/
    }
}

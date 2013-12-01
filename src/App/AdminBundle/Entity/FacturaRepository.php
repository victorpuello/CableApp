<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * FacturaRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FacturaRepository extends EntityRepository
{
    public function findDatosFactura()
    {
        $em = $this->getEntityManager();
        $dql = "select f,a from AdminBundle:Factura f join f.afiliacion a";
        $consulta = $em->createQuery($dql);
        $reg = $consulta->getResult();
        return $reg;
    }
    
    public function findFactura($ind)
    {
        $em = $this->getEntityManager();
        $dql = "select f,a from AdminBundle:Factura f join f.afiliacion a where f.id=:bandera";
        $consulta = $em->createQuery($dql);
        $consulta->setParameter('bandera',$ind);
        $reg = $consulta->getSingleResult();
        return $reg;
    }
}

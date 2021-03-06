<?php

namespace Clobb\AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * UsuarioRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UsuarioRepository extends EntityRepository
{

    public function findAllActives() {
        return $this->getEntityManager()->getRepository('ClobbAppBundle:Usuario')->findBy(
            array(
                "dataExclusao"=> null
            ),
            array(
                "nome" => "ASC"
            )
        );
    }

    public function search($nome=null, $exibirInativos = false) {

        $query = $this->getEntityManager()->getRepository('ClobbAppBundle:Usuario')->createQueryBuilder('u');
        $query->where('1=1');

        if( !is_null($nome) )
            $query->andWhere("u.nome LIKE :nome")->setParameter("nome", "%". $nome ."%");

        if( $exibirInativos )
            $query->andWhere("u.dataExclusao IS NOT NULL OR u.dataExclusao IS NULL");
        else
            $query->andWhere("u.dataExclusao IS NULL");

        $query->addOrderBy("u.nome");

        return $query->getQuery()->getResult();
    }

    public function findUsuarioByEmailSenha($email, $senha) {
        return $this->getEntityManager()->getRepository('ClobbAppBundle:Usuario')->findOneBy(array(
            "email" => $email,
            "senha" => $senha
        ));
    }

    public function findUsuarioByEmail($email) {
        return $this->getEntityManager()->getRepository('ClobbAppBundle:Usuario')->findOneBy(array(
            "email" => $email
        ));
    }

    public function findUsuarioByEmailToken($email, $token) {
        return $this->getEntityManager()->getRepository('ClobbAppBundle:Usuario')->findOneBy(array(
            "email" => $email,
            "token" => $token
        ));
    }
}

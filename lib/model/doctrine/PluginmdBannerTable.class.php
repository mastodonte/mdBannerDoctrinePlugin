<?php

/**
 * PluginmdBannerTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class PluginmdBannerTable extends Doctrine_Table {

  /**
   * Returns an instance of this class.
   *
   * @return object PluginmdBannerTable
   */
  public static function getInstance() {
    return Doctrine_Core::getTable('PluginmdBanner');
  }
  
  public function findAllOrderByPosition() {
    $q = $this->createQuery('mdB')->where('mdB.activo = ?', true)->orderBy('mdB.position asc');
    return $q->execute();
  }

  public function retrieveBanners($sector, $orderBy = NULL) {
    $q = $this->createQuery('mdB')
      ->where('mdB.activo = ?', true)
      ->addWhere('mdB.sector = ?', $sector);
    
    if(is_null($orderBy))
    {
      $q = $q->orderBy('mdB.position asc');
    }else{
      $q = $q->orderBy($orderBy);      
    }

    return $q->execute();
  }  

}
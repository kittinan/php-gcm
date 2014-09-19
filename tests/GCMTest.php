<?php
require_once __DIR__.'/../src/KS/GCM.php';

/**
 * @property GCM $GCM
 */
class GCMTest extends PHPUnit_Framework_TestCase {
  
  private $GCM;
  
  private $key = 'thisisaandroidkey';
  
  function __construct() {
    
    $this->GCM = new \KS\GCM($this->key);
  }
  
  public function testSetAPIKey() {
    $new_api_key = 'gcmpushnotification';
    $this->GCM->setAPIKey($new_api_key);
    $result = $this->GCM->getAPIKey();
    $this->assertSame($new_api_key, $result);
  }
  
  public function testSetTimeOut() {
    $new_timeout = 100;
    $this->GCM->setTimeOut($new_timeout);
    $result = $this->GCM->getTimeOut();
    $this->assertSame($new_timeout, $result);
  }
  
}
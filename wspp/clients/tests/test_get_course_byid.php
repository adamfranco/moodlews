<?php
require_once ('../classes/mdl_soapserver.php');

$client=new mdl_soapserver();
require_once ('../auth.php');
/**test code for get_course_byid
* @param int $client
* @param string $sesskey
* @param string $info
* @return  courseRecord[]
*/

$lr=$client->login(LOGIN,PASSWORD);
$res=$client->get_course_byid($lr->getClient(),$lr->getSessionKey(),'');
print_r($res);
$client->logout($lr->getClient(),$lr->getSessionKey());

?>

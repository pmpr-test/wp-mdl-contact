<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800fba93eaf0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Contact\Widget; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Widget; class Direction extends Widget { public function __construct() { parent::__construct(__('Direction', PR__MDL__CONTACT), __('Display the direction links.', PR__MDL__CONTACT)); } public function ykwqaukkycogooii() { $ugakwukqcuqqsmsi = $this->ocksiywmkyaqseou('icon_sizes', []); $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::ackcaikowcokggsc)->gswweykyogmsyawy(__('Include', PR__MDL__CONTACT))->gucwmccyimoagwcm(__('Leave empty if you want to show all items.', PR__MDL__CONTACT))->acauweqyyugwisqc($this->kmuweyayaqoeqiyw()->baiiqkieecqyougq())->oikgogcweiiaocka())->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::ceyqggmwsusggwok)->gswweykyogmsyawy(__('Icon Size', PR__MDL__CONTACT))->acauweqyyugwisqc($ugakwukqcuqqsmsi)->wywmmeyauqkeskeq(!empty($ugakwukqcuqqsmsi))); } public function gayqqwwuycceosii($ywmkwiwkosakssii = [], $owgumcsyqsamiemg = []) : array { $qookweymeqawmcwo = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ooiewiwkegguusum = $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, Constants::ackcaikowcokggsc, []); if ($oammesyieqmwuwyi = $this->kmuweyayaqoeqiyw()->baiiqkieecqyougq([Constants::ackcaikowcokggsc => $ooiewiwkegguusum, Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym])) { $qookweymeqawmcwo = [Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi, Constants::ceyqggmwsusggwok => $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, Constants::ceyqggmwsusggwok)]; } return $qookweymeqawmcwo; } }

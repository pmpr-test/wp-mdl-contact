<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6720b6fe58f3a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Contact\Traits; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Contact\Model\Submission; use WP_Error; trait SubmitTrait { public function ygkskmsksmmiqaqu(array $icwicymcioeyeyek = []) { if (!$icwicymcioeyeyek) { $icwicymcioeyeyek = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(); } try { $iqauecoycmqkimak = $this->ocksiywmkyaqseou("\x63\157\x6e\164\141\x63\164\137\x73\x75\x62\155\x69\x73\163\151\x6f\x6e\x5f\163\x75\x62\155\x69\x74\137\x76\x61\154\151\x64\141\x74\151\x6f\x6e", true, $icwicymcioeyeyek); if (!is_wp_error($iqauecoycmqkimak)) { $oaswmaiguymasgcg = Submission::symcgieuakksimmu(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $icwicymcioeyeyek = $gkyciwoiiisgywcs->gucyquqwoimkiiaq($icwicymcioeyeyek, [Constants::NAME, Constants::muqaqimusmckkieq, Constants::memskaacyikisggk, Constants::qkimemawswowsmoa, Constants::oeoceeacyascgkai, Constants::eoskkkieowogacws]); $icwicymcioeyeyek[Constants::ioksewgkgwwikiwo] = $this->caokeucsksukesyo()->issssuygyewuaswa()->mmscegoieayuaguo(); $icwicymcioeyeyek[Constants::iockmgiyoygcswog] = $this->caokeucsksukesyo()->issssuygyewuaswa()->kuswmimkgmyuymiu($gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::iockmgiyoygcswog)); if (!empty($icwicymcioeyeyek[Constants::eoskkkieowogacws])) { $icwicymcioeyeyek[Constants::eoskkkieowogacws] = $this->caokeucsksukesyo()->owgcciayoweymuws()->nl2br($icwicymcioeyeyek[Constants::eoskkkieowogacws]); } $sogksuscggsicmac = $oaswmaiguymasgcg->gssiscqyqsacmeca()->gsegsiocqmsoayii($icwicymcioeyeyek); if (!is_wp_error($sogksuscggsicmac)) { $sogksuscggsicmac = true; } } else { $sogksuscggsicmac = $iqauecoycmqkimak; } } catch (Exception $wgaoewqkwgomoaai) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($wgaoewqkwgomoaai); } return $sogksuscggsicmac; } }

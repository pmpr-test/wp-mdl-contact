<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6705310d27397             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Contact\Traits; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Contact\Model\Submission; use WP_Error; trait SubmitTrait { public function ygkskmsksmmiqaqu(array $icwicymcioeyeyek = []) { if (!$icwicymcioeyeyek) { $icwicymcioeyeyek = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(); } try { $iqauecoycmqkimak = $this->ocksiywmkyaqseou("\x63\x6f\156\164\141\x63\164\137\163\x75\142\x6d\151\163\163\151\157\156\137\x73\x75\x62\155\x69\x74\137\166\141\154\151\144\x61\x74\151\157\x6e", true, $icwicymcioeyeyek); if (!is_wp_error($iqauecoycmqkimak)) { $oaswmaiguymasgcg = Submission::symcgieuakksimmu(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $icwicymcioeyeyek = $gkyciwoiiisgywcs->gucyquqwoimkiiaq($icwicymcioeyeyek, [Constants::NAME, Constants::muqaqimusmckkieq, Constants::memskaacyikisggk, Constants::qkimemawswowsmoa, Constants::oeoceeacyascgkai, Constants::eoskkkieowogacws]); $icwicymcioeyeyek[Constants::ioksewgkgwwikiwo] = $this->caokeucsksukesyo()->issssuygyewuaswa()->mmscegoieayuaguo(); $icwicymcioeyeyek[Constants::iockmgiyoygcswog] = $this->caokeucsksukesyo()->issssuygyewuaswa()->kuswmimkgmyuymiu($gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::iockmgiyoygcswog)); if (isset($icwicymcioeyeyek[Constants::eoskkkieowogacws]) && $icwicymcioeyeyek[Constants::eoskkkieowogacws]) { $icwicymcioeyeyek[Constants::eoskkkieowogacws] = $this->caokeucsksukesyo()->owgcciayoweymuws()->nl2br($icwicymcioeyeyek[Constants::eoskkkieowogacws]); } $sogksuscggsicmac = $oaswmaiguymasgcg->gssiscqyqsacmeca()->gsegsiocqmsoayii($icwicymcioeyeyek); if (!is_wp_error($sogksuscggsicmac)) { $sogksuscggsicmac = true; } } else { $sogksuscggsicmac = $iqauecoycmqkimak; } } catch (Exception $wgaoewqkwgomoaai) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($wgaoewqkwgomoaai); } return $sogksuscggsicmac; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c83a3f1d0be             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Contact\Traits; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Contact\Model\Submission; use WP_Error; trait SubmitTrait { public function ygkskmsksmmiqaqu(array $icwicymcioeyeyek = []) { if (!$icwicymcioeyeyek) { $icwicymcioeyeyek = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(); } try { $iqauecoycmqkimak = $this->ocksiywmkyaqseou('contact_submission_submit_validation', true, $icwicymcioeyeyek); if (!is_wp_error($iqauecoycmqkimak)) { $oaswmaiguymasgcg = Submission::symcgieuakksimmu(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $icwicymcioeyeyek = $gkyciwoiiisgywcs->gucyquqwoimkiiaq($icwicymcioeyeyek, [Constants::NAME, Constants::muqaqimusmckkieq, Constants::memskaacyikisggk, Constants::qkimemawswowsmoa, Constants::oeoceeacyascgkai, Constants::eoskkkieowogacws]); $icwicymcioeyeyek[Constants::ioksewgkgwwikiwo] = $this->caokeucsksukesyo()->issssuygyewuaswa()->mmscegoieayuaguo(); $icwicymcioeyeyek[Constants::iockmgiyoygcswog] = $this->caokeucsksukesyo()->issssuygyewuaswa()->kuswmimkgmyuymiu($gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::iockmgiyoygcswog)); if (!empty($icwicymcioeyeyek[Constants::eoskkkieowogacws])) { $icwicymcioeyeyek[Constants::eoskkkieowogacws] = $this->caokeucsksukesyo()->owgcciayoweymuws()->nl2br($icwicymcioeyeyek[Constants::eoskkkieowogacws]); } $sogksuscggsicmac = $oaswmaiguymasgcg->gssiscqyqsacmeca()->gsegsiocqmsoayii($icwicymcioeyeyek); if (!is_wp_error($sogksuscggsicmac)) { $sogksuscggsicmac = true; } } else { $sogksuscggsicmac = $iqauecoycmqkimak; } } catch (Exception $wgaoewqkwgomoaai) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($wgaoewqkwgomoaai); } return $sogksuscggsicmac; } }

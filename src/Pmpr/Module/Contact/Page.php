<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6801061feaa61             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Contact; use Pmpr\Common\Foundation\Frontend\Page as BaseClass; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Contact\Traits\SubmitTrait; class Page extends BaseClass { use SubmitTrait; const wcimqiagyusekeqq = 'submit_submission'; const kakwqaasqsqmekyq = 'submission_cookie'; public function qiccuiwooiquycsg() { $this->wegcaymyqqoyewmw('contact')->gswweykyogmsyawy(__('Contact', PR__MDL__CONTACT))->wmsaakuicamguoam($this->weysguygiseoukqw(Setting::cuikwuyswsmomkus)); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('head_meta', [$this, 'muuwokccecyewcmk']); $this->waqewsckuayqguos('contact_render_form', [$this, 'agcgsgakmqwqsieg'])->waqewsckuayqguos('contact_get_form', [$this, 'yyoqecggyacaseko'], 10, 2); parent::wigskegsqequoeks(); } public function init() { parent::init(); if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq()) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $aiamqeawckcsuaou = $eiicaiwgqkgsekce->ayueggmoqeeukqmq('submit_action'); if (self::wcimqiagyusekeqq === $aiamqeawckcsuaou) { $gwgqcsmomamyqsmy = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(Constants::xwwaeweqegiqeqkm); $iqaosyayeiuaisqi = Constants::ecioqysekgaasegg; if ($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->yiqagusumqeyaegq($gwgqcsmomamyqsmy, Constants::waoywqksqecymesy)) { $icwicymcioeyeyek = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(); $sogksuscggsicmac = $this->ygkskmsksmmiqaqu($icwicymcioeyeyek); if (!is_wp_error($sogksuscggsicmac)) { $eiicaiwgqkgsekce->ycasmmgsmaaumweg(self::kakwqaasqsqmekyq, ''); $iqaosyayeiuaisqi = Constants::ckcawaoawwioqecq; $wumguikkgaigkoee = $this->weysguygiseoukqw(Setting::aiyeuymiomaukaaa); } else { $wumguikkgaigkoee = $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($sogksuscggsicmac); $eiicaiwgqkgsekce->ycasmmgsmaaumweg(self::kakwqaasqsqmekyq, wp_json_encode($icwicymcioeyeyek)); } } else { $wumguikkgaigkoee = __('Your request is not valid. refresh page an try again', PR__MDL__CONTACT); } $this->caokeucsksukesyo()->kwoycoqogoswycgg()->goouywsgcekeeccu($this, $wumguikkgaigkoee, $aiamqeawckcsuaou, $iqaosyayeiuaisqi, false); $yeacayasgueouoqc = $eiicaiwgqkgsekce->ekcymmyqoceukosc(true); $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gwqgmkqcgwwmweom("{$yeacayasgueouoqc}#contact_form"); exit; } } } public function enqueue() { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->yawoscugkyysowie($meakksicouekcgoe->owygwqwawqoiusis($this, 'frontend', 'frontend.js')->okawmmwsiuauwsiu(Constants::iickqyckyaqcaokm))->qgkgieacuwasgiuy($this, ['ajax' => Ajax::smiaagwsguouuoiw]); } public function ugmceccgwaaaigiy() { $gusoaiguqeaommcc = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); $ikgwqyuyckaewsow = [$gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::qkimemawswowsmoa)->kyiucygqsgequoys(__('Subject', PR__MDL__CONTACT))->eumecwmqmukqgyea()->jyumyyugiwwiqomk(10), $gusoaiguqeaommcc->uouyygwcgsmygaee(Constants::eoskkkieowogacws)->kyiucygqsgequoys(__('Your Message', PR__MDL__CONTACT))->eumecwmqmukqgyea()->qsecygiycssgacqs(6)->jyumyyugiwwiqomk(40), $gusoaiguqeaommcc->kggsueyuyqeqeusc()->uwaiagiwycmiokqi(), $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::memskaacyikisggk)->kyiucygqsgequoys(__('Phone', PR__MDL__CONTACT))->smigkcmumwkgamkk()->eumecwmqmukqgyea()->jyumyyugiwwiqomk(23), $gusoaiguqeaommcc->cwiuiiakukcsaakw('submit_action')->iygyugseyaqwywyg(self::wcimqiagyusekeqq)->jyumyyugiwwiqomk(9999), $gusoaiguqeaommcc->qoeiescseggagsqs(Constants::iueeekcmggceyscu)->gswweykyogmsyawy(__('Submit', PR__MDL__CONTACT))->ooqqgmyocscgmyae()->ieoqemcqwqowuwie('contact_form')->ckccqugcgucieugo()->jyumyyugiwwiqomk(60)]; if (!$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { $ikgwqyuyckaewsow[] = $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::NAME)->kyiucygqsgequoys(__('Name', PR__MDL__CONTACT))->eumecwmqmukqgyea()->jyumyyugiwwiqomk(20); $ikgwqyuyckaewsow[] = $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::muqaqimusmckkieq)->kyiucygqsgequoys(__('Email', PR__MDL__CONTACT))->mkiaygiogeeyogqm()->eumecwmqmukqgyea()->jyumyyugiwwiqomk(21); $ikgwqyuyckaewsow[] = $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::oeoceeacyascgkai)->kyiucygqsgequoys(__('Website', PR__MDL__CONTACT))->kqqqugemmqagucuq()->jyumyyugiwwiqomk(22); } else { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $post = $seumokooiykcomco->iooowgsqoyqseyuu(); $aqimuaccmsoeoass = sprintf(__('Logged in as %s.', PR__MDL__CONTACT), $this->caokeucsksukesyo()->issssuygyewuaswa()->ygwimyogyaqgumam()); $aacgcicooyokqawy = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->eeqeqgakemisueqc($seumokooiykcomco->ycqquoiyyuesegsy($post)); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $aiamgkiewwakoegy = $swqimwqeweekeusq->yuawgssgauywkiia(sprintf('&nbsp; %s', __('Log out?', PR__MDL__CONTACT)), $aacgcicooyokqawy, []); $ewgwqamkygiqaawc = $swqimwqeweekeusq->gusouagusgyoaeya($aqimuaccmsoeoass . $aiamgkiewwakoegy); $ikgwqyuyckaewsow[] = $gusoaiguqeaommcc->yqgagqgesqyuyuqq('logged_in_as')->oguessuismosauuu($ewgwqamkygiqaawc)->jyumyyugiwwiqomk(0); } $ikgwqyuyckaewsow = $this->ocksiywmkyaqseou('get_contact_form_fields', $ikgwqyuyckaewsow); $ikgwqyuyckaewsow = $this->ocksiywmkyaqseou('get_contact_submission_fields', $ikgwqyuyckaewsow); if ($ikgwqyuyckaewsow && is_array($ikgwqyuyckaewsow) && ($icwicymcioeyeyek = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->aukgyiaewiccooqw(self::kakwqaasqsqmekyq))) { $icwicymcioeyeyek = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc(wp_unslash($icwicymcioeyeyek)); $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ycasmmgsmaaumweg(self::kakwqaasqsqmekyq, ''); foreach ($ikgwqyuyckaewsow as $momcykaoccoymeig => $aiowsaccomcoikus) { if ($eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, $aiowsaccomcoikus->mwikyscisascoeea())) { $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie); $ikgwqyuyckaewsow[$momcykaoccoymeig] = $aiowsaccomcoikus; } } } return $ikgwqyuyckaewsow; } public function muuwokccecyewcmk() { $oammesyieqmwuwyi = $this->kmuweyayaqoeqiyw()->yeokamaagskewssa([Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym]); if ($oammesyieqmwuwyi) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $wgkqagumoowawogg = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $eeamcawaiqocomwy = $seumokooiykcomco->ycqquoiyyuesegsy(); $sqeykgyoooqysmca = 'website'; $mcqieaigyeeyaksm = ''; $gkykacccamuwowwc = ''; if ($mumyimcwkaemyyue->seokosgecygsmqau() || $mumyimcwkaemyyue->takycgcamoacksqw()) { $gkykacccamuwowwc = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(Constants::NAME); } else { if ($mumyimcwkaemyyue->kccakwkaqugygwmq() || $mumyimcwkaemyyue->sgeaogakoscmysgc()) { $mcqieaigyeeyaksm = $wgkqagumoowawogg->uamasysiccecccmw(null, 'twitter'); $gkykacccamuwowwc = $seumokooiykcomco->igawqaomowicuayw('_wp_attachment_image_alt', $wgkqagumoowawogg->usieywkaugusugwm(), true); if ($mumyimcwkaemyyue->kccakwkaqugygwmq()) { $sqeykgyoooqysmca = 'article'; } } } $aiowsaccomcoikus = ''; $ccamueccusigaaio = ''; $yqicqqkokawiosom = []; $eiwicgsqoiaeawkk = []; foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, Constants::auqoykcmsiauccao); $gwgucoaaqcwwciqq = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($eqgoocgaqwqcimie, PHP_URL_HOST); preg_match('/([\\w]+?)$/', $eqgoocgaqwqcimie, $eiwicgsqoiaeawkk); switch ($gwgucoaaqcwwciqq) { case 'twitter.com': $aiowsaccomcoikus = 'twitter'; $ccamueccusigaaio = 'twitter'; break; case 'facebook.com': $aiowsaccomcoikus = 'facebook'; $ccamueccusigaaio = 'og'; break; } if (isset($eiwicgsqoiaeawkk[0]) && $ccamueccusigaaio && !in_array($ccamueccusigaaio, $yqicqqkokawiosom, true)) { $eiuuauwyukskgois = $this->uwkmaywceaaaigwo()->mguqscccckuywsya()->igawqaomowicuayw($aiowsaccomcoikus, $seumokooiykcomco->mguqscccckuywsya()); $qummwmsmceweyoqo = ['site' => "@{$eiwicgsqoiaeawkk[0]}", Constants::auqoykcmsiauccao => $eeamcawaiqocomwy, Constants::squoamkioomemiyi => $sqeykgyoooqysmca]; if ($eiuuauwyukskgois) { $qummwmsmceweyoqo['creator'] = "@{$eiuuauwyukskgois}"; } if ($mcqieaigyeeyaksm) { $qummwmsmceweyoqo[Constants::mkousmkiawwousws] = $mcqieaigyeeyaksm; if ($gkykacccamuwowwc) { $qummwmsmceweyoqo['image:alt'] = $gkykacccamuwowwc; } } foreach ($qummwmsmceweyoqo as $ymqmyyeuycgmigyo => $ewgwqamkygiqaawc) { $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->geegawyigkyiuyqu("{$ccamueccusigaaio}:{$ymqmyyeuycgmigyo}", $ewgwqamkygiqaawc); } $yqicqqkokawiosom[] = $ccamueccusigaaio; } } } } public function yyoqecggyacaseko(string $nsmgceoqaqogqmuw = '', $ywmkwiwkosakssii = []) : string { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->goumkccmgysgqueu()) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ikgwqyuyckaewsow = $gkyciwoiiisgywcs->yaeiiwwyckwugsem($this->ugmceccgwaaaigiy(), 'getPriority'); $eaoumsseceiowgsk = $this->caokeucsksukesyo()->kugiyqykwaskawsc()->umocagoqumikakom('contact_form')->ewweaossowcqywaw($ikgwqyuyckaewsow); $eaoumsseceiowgsk = $this->ocksiywmkyaqseou('contact_form', $eaoumsseceiowgsk); $eaoumsseceiowgsk = $this->ocksiywmkyaqseou('contact_submission_form', $eaoumsseceiowgsk); $ywmkwiwkosakssii[Constants::ygeqsmugcaeeeuwu] = $eaoumsseceiowgsk->render(); $wumguikkgaigkoee = ''; $ycyucwoysmwkgiui = $this->caokeucsksukesyo()->kwoycoqogoswycgg()->waumkquuqekmqeae($this, self::wcimqiagyusekeqq, false); if ($ycyucwoysmwkgiui && is_array($ycyucwoysmwkgiui) && ($uamcoiueqaamsqma = $gkyciwoiiisgywcs->get($ycyucwoysmwkgiui, Constants::eoskkkieowogacws))) { $iqaosyayeiuaisqi = $gkyciwoiiisgywcs->get($ycyucwoysmwkgiui, Constants::iiooageieusuyomy); if (!is_array($uamcoiueqaamsqma)) { $uamcoiueqaamsqma = [$uamcoiueqaamsqma]; } foreach ($uamcoiueqaamsqma as $eqgoocgaqwqcimie) { $wumguikkgaigkoee = $this->caokeucsksukesyo()->kugiyqykwaskawsc()->oockkqiqsssakuug([Constants::iiooageieusuyomy => $iqaosyayeiuaisqi, Constants::ssmskyqgcmeiayco => $eqgoocgaqwqcimie]); } } $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->iaaacsuskiakkwui($wumguikkgaigkoee, ['class' => 'contact-message']); $nsmgceoqaqogqmuw .= $this->iuygowkemiiwqmiw('form', $ywmkwiwkosakssii); } return $nsmgceoqaqogqmuw; } public function agcgsgakmqwqsieg($ywmkwiwkosakssii = []) { echo $this->yyoqecggyacaseko('', $ywmkwiwkosakssii); } public function giggwkkmeeeckuwa($ewgwqamkygiqaawc, $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::ssmskyqgcmeiayco => $ewgwqamkygiqaawc, Constants::qwumqqyuasyskkkc => $this->kmuweyayaqoeqiyw()->eqiocgwwikkieygw([Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym]), 'form' => $this->yyoqecggyacaseko(), 'map' => $this->kmuweyayaqoeqiyw()->weuacucqmawwaswo()]); return $this->iuygowkemiiwqmiw('page', $ywmkwiwkosakssii); } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post) : ?string { $ewgwqamkygiqaawc = $this->giggwkkmeeeckuwa($ewgwqamkygiqaawc); return parent::qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post); } }

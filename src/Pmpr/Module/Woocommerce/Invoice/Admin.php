<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ecdcefbbf12             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Woocommerce\Invoice; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Admin extends Common { const kiumkuawagkiqyyo = "\160\144\x66\x5f\151\156\x76\157\x69\143\x65\137\156\x75\x6d"; const uiyyaciimwoaokgo = "\160\144\146\137\x65\155\x61\x69\154\137\x69\x6e\166\157\151\143\145"; const cysoyggakakyywwg = "\160\x64\x66\137\143\162\145\141\x74\x65\137\x69\156\166\x6f\151\x63\x65"; const kykiacaosyqigmgm = "\160\144\146\137\x63\x72\x65\141\164\145\x5f\145\x6d\141\x69\154\x5f\151\x6e\166\157\151\143\x65"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\155\151\x6e\137\x69\156\151\x74", [$this, "\x69\151\147\171\x6b\171\171\157\143\155\x71\x61\x6f\x77\155\155"])->qcsmikeggeemccuu("\155\x61\156\141\147\145\x5f\163\x68\x6f\160\x5f\x6f\162\144\x65\162\x5f\x70\157\163\x74\x73\x5f\143\x75\163\x74\x6f\155\x5f\x63\157\x6c\x75\155\156", [$this, "\163\x6f\x63\141\163\161\147\x6d\x75\143\161\151\x73\x6f\171\x71"], 2); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\142\165\154\x6b\137\x61\x63\x74\x69\157\x6e\163\55\145\x64\151\x74\55\163\150\x6f\x70\137\157\x72\x64\x65\x72", [$this, "\165\163\161\163\151\x79\163\145\147\x77\x6f\x61\157\x67\155\141"])->cecaguuoecmccuse("\155\141\156\x61\147\x65\x5f\145\x64\x69\164\55\163\150\x6f\x70\x5f\x6f\162\144\145\x72\x5f\143\157\x6c\165\155\x6e\x73", [$this, "\155\151\x79\153\147\x79\165\x6f\x75\163\155\x71\171\151\145\171"]); $this->cecaguuoecmccuse("\x68\141\156\144\154\145\137\142\165\x6c\x6b\x5f\141\143\164\151\x6f\156\x73\55\x65\144\x69\x74\55\163\150\x6f\x70\137\x6f\162\x64\x65\x72", [$this, "\147\x77\151\161\x79\147\x6b\x73\157\x6b\143\171\x65\143\x6b\x71"], 10, 3); $this->cecaguuoecmccuse("\x77\157\157\x63\157\x6d\155\x65\162\143\x65\137\x61\144\x6d\151\156\x5f\x6f\162\x64\145\162\x5f\141\x63\x74\x69\x6f\x6e\x73", [$this, "\143\x71\157\147\151\161\151\161\145\147\147\x79\x79\x77\153\x71"], 11, 2); } public function ayyeiqikwseeegqg($umwqusowiqmyseom) { $gkkgcoiwayaccqgm = ManipulateWoocommerce::kcwiwskyggmcimie($umwqusowiqmyseom); if ($gkkgcoiwayaccqgm) { goto egasokooagakisiy; } global $post; $gkkgcoiwayaccqgm = ManipulatePost::mwikyscisascoeea($post); egasokooagakisiy: return $gkkgcoiwayaccqgm; } public function yiqqcseogewckugw($ccowyogiqwikkkie, $umwqusowiqmyseom) { $gkkgcoiwayaccqgm = $this->ayyeiqikwseeegqg($umwqusowiqmyseom); if (!$this->igawqaomowicuayw(self::sqsaisksswaayayo, $gkkgcoiwayaccqgm)) { goto kecwuwwcwokuksyq; } $ccowyogiqwikkkie["\163\x65\156\144\55\160\144\x66"] = [ "\165\x72\x6c" => "\43", "\156\141\155\x65" => __("\123\145\156\x64\40\x50\x44\x46", PR__MDL__WOOCOMMERCE), "\x61\x63\x74\x69\x6f\x6e" => "\163\145\x6e\144\55\x70\x64\146", ]; kecwuwwcwokuksyq: return $ccowyogiqwikkkie; } public function cqogiqiqeggyywkq($ccowyogiqwikkkie, $umwqusowiqmyseom) { $gkkgcoiwayaccqgm = $this->ayyeiqikwseeegqg($umwqusowiqmyseom); $musqmgugskoycykq = true; if (!($this->eiwcuqigayigimak(Setting::cysoyggakakyywwg) == self::ayeiaucmmgooomya && !$this->igawqaomowicuayw(self::sqsaisksswaayayo, $gkkgcoiwayaccqgm))) { goto qgegkeomwscwwiuw; } $musqmgugskoycykq = false; qgegkeomwscwwiuw: if (!$musqmgugskoycykq) { goto qmiwsequckckoaei; } $ccowyogiqwikkkie["\x64\x6f\167\x6e\x6c\157\x61\x64\x5f\x70\144\146"] = [self::auqoykcmsiauccao => DecoratorQuery::yqymaqmqiqmmmsoo(self::woacsaigwaqsmqaa, $gkkgcoiwayaccqgm, ManipulateServer::ekcymmyqoceukosc()), self::NAME => __("\104\157\167\156\154\x6f\141\144\40\120\104\x46", PR__MDL__WOOCOMMERCE), self::uqgcmmosieyimiku => "\144\157\x77\x6e\154\x6f\141\x64\55\160\x64\x66"]; qmiwsequckckoaei: return $ccowyogiqwikkkie; } public function iigykyyocmqaowmm() { $cgsaiiokwycueeeo = ManipulateServer::get(self::woacsaigwaqsmqaa); if (!($cgsaiiokwycueeeo && is_admin())) { goto eiawsoasmscmqswa; } $cgsaiiokwycueeeo = stripslashes($cgsaiiokwycueeeo); $iiwwoeukeeweaisc = ManipulateWoocommerce::mmmcswscsiecscwg($cgsaiiokwycueeeo); if (!$iiwwoeukeeweaisc) { goto goeoymmqqqeeoime; } $this->uykissogmuaaocsg()->siciqscsekqaqess()->imasugowgqyekses($iiwwoeukeeweaisc, true); goeoymmqqqeeoime: eiawsoasmscmqswa: } public function gwiqygksokcyeckq($cekycuiyagyouawk, $aiamqeawckcsuaou, $oysoyeaucuawyaky) : string { $kuuugksiksqcaaaa = in_array($aiamqeawckcsuaou, [self::uiyyaciimwoaokgo, self::cysoyggakakyywwg, self::kykiacaosyqigmgm]); if (!($kuuugksiksqcaaaa && is_array($oysoyeaucuawyaky) && $oysoyeaucuawyaky)) { goto cgewcsueoyaeikgm; } $oysoyeaucuawyaky = array_map("\141\x62\163\151\156\164", $oysoyeaucuawyaky); sort($oysoyeaucuawyaky); foreach ($oysoyeaucuawyaky as $aokagokqyuysuksm) { switch ($aiamqeawckcsuaou) { case self::uiyyaciimwoaokgo: $this->kmmqugkowuimgwuk($aokagokqyuysuksm); goto ygkcacsyyckescqs; case self::cysoyggakakyywwg: $this->iseiakqweswykkys($aokagokqyuysuksm); goto ygkcacsyyckescqs; case self::kykiacaosyqigmgm: $this->aqimiwwqygqeiuqk($aokagokqyuysuksm); goto ygkcacsyyckescqs; } cuoqqgaygogsmmic: ygkcacsyyckescqs: qmeoaqmsuseueqiy: } ickcmqoiosquugwe: cgewcsueoyaeikgm: return esc_url_raw($cekycuiyagyouawk); } public function kmmqugkowuimgwuk($aokagokqyuysuksm) { if (!$this->igawqaomowicuayw(self::sqsaisksswaayayo, $aokagokqyuysuksm)) { goto sukskmcwsoysiuqu; } $this->gaisoeyogkaguouo($aokagokqyuysuksm); sukskmcwsoysiuqu: } public function iseiakqweswykkys($aokagokqyuysuksm) { if ($this->igawqaomowicuayw(self::sqsaisksswaayayo, $aokagokqyuysuksm)) { goto igymseewwyiocoug; } $this->ykogmkwyscmsmuki($aokagokqyuysuksm); igymseewwyiocoug: } public function aqimiwwqygqeiuqk($aokagokqyuysuksm) { $this->iseiakqweswykkys($aokagokqyuysuksm); $this->kmmqugkowuimgwuk($aokagokqyuysuksm); } public function usqsiysegwoaogma($ccowyogiqwikkkie) { ManipulateArray::unset($ccowyogiqwikkkie, "\145\144\151\164"); $ccowyogiqwikkkie[self::cysoyggakakyywwg] = __("\103\x72\145\141\x74\x65\40\111\x6e\x76\157\151\143\x65\50\x73\x29", PR__MDL__WOOCOMMERCE); $ccowyogiqwikkkie[self::kykiacaosyqigmgm] = __("\103\x72\145\141\x74\x65\40\x61\156\x64\x20\x45\x6d\x61\151\154\x20\111\x6e\166\157\151\143\x65\x28\163\x29", PR__MDL__WOOCOMMERCE); $ccowyogiqwikkkie[self::uiyyaciimwoaokgo] = __("\x45\x6d\141\x69\154\40\111\156\x76\x6f\151\143\x65\50\x73\51", PR__MDL__WOOCOMMERCE); return $ccowyogiqwikkkie; } public function socasqgmucqisoyq($qgoqiacsiccwoawi) { global $post; $gcqseksiskwueksc = ManipulatePost::mwikyscisascoeea($post); if (!($gcqseksiskwueksc && $qgoqiacsiccwoawi == self::kiumkuawagkiqyyo)) { goto eyiamcekkgkiawqy; } if (!($eusockqasqqmoess = ManipulatePost::igawqaomowicuayw(self::uicuqucwwkscyyyy, $gcqseksiskwueksc))) { goto mqccmesakuemceqi; } $ocogsiouoiuuguym = ManipulatePost::igawqaomowicuayw(self::ykqogmimmamwckwe, $gcqseksiskwueksc); $aqykuigiuwmmcieu = ManipulateHTML::yuawgssgauywkiia("{$eusockqasqqmoess}\74\142\162\76{$ocogsiouoiuuguym}", DecoratorQuery::yqymaqmqiqmmmsoo(self::woacsaigwaqsmqaa, $gcqseksiskwueksc, ManipulateServer::ekcymmyqoceukosc())); echo $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\144\146\137\x69\x6e\x76\157\151\143\x65\x5f\x6e\x75\x6d\x62\x65\162\x5f\x6f\x72\x64\x65\x72\x5f\x73\143\x72\145\145\x6e\137\x6f\165\164\x70\x75\x74"), $aqykuigiuwmmcieu, $eusockqasqqmoess, $ocogsiouoiuuguym, $gcqseksiskwueksc); mqccmesakuemceqi: eyiamcekkgkiawqy: } public function miykgyuousmqyiey($wkkweuacukumqmya) : array { return ManipulateArray::ooskewwqwieyucec($wkkweuacukumqmya, [self::kiumkuawagkiqyyo => __("\x49\x6e\166\x6f\x69\143\145", PR__MDL__WOOCOMMERCE)], 2); } }

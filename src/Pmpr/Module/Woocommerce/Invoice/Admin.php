<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6300fef0e40df             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Woocommerce\Invoice; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Admin extends Common { const kiumkuawagkiqyyo = "\x70\144\146\x5f\x69\x6e\x76\x6f\151\143\x65\x5f\x6e\x75\155"; const uiyyaciimwoaokgo = "\160\144\x66\x5f\145\155\141\151\154\x5f\x69\x6e\166\x6f\x69\143\x65"; const cysoyggakakyywwg = "\160\144\146\x5f\143\162\x65\141\164\x65\137\151\x6e\x76\x6f\151\x63\145"; const kykiacaosyqigmgm = "\160\x64\x66\x5f\143\162\145\141\x74\145\137\145\x6d\141\x69\x6c\137\151\x6e\166\157\151\143\145"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\x6d\151\156\x5f\151\156\151\x74", [$this, "\151\151\147\x79\153\171\x79\x6f\143\155\x71\141\x6f\167\x6d\x6d"])->qcsmikeggeemccuu("\x6d\141\156\141\147\145\x5f\x73\x68\x6f\160\137\x6f\162\144\145\162\x5f\x70\157\163\x74\163\137\x63\165\x73\164\x6f\x6d\137\143\157\x6c\165\155\x6e", [$this, "\163\x6f\143\x61\x73\x71\x67\x6d\x75\143\x71\151\163\x6f\x79\161"], 2); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\142\165\x6c\153\137\141\x63\x74\151\x6f\x6e\163\55\145\144\x69\164\x2d\163\x68\157\160\137\157\x72\144\145\x72", [$this, "\x75\x73\161\x73\x69\171\163\x65\x67\x77\157\141\x6f\x67\x6d\141"])->cecaguuoecmccuse("\x6d\141\x6e\141\147\145\137\x65\144\151\x74\55\x73\x68\157\160\x5f\157\x72\x64\145\x72\x5f\143\x6f\x6c\165\155\x6e\x73", [$this, "\155\151\171\153\x67\171\165\157\x75\163\x6d\161\171\x69\x65\x79"]); $this->cecaguuoecmccuse("\150\141\x6e\144\x6c\x65\x5f\142\x75\154\x6b\x5f\141\143\x74\x69\157\x6e\x73\55\x65\144\x69\164\55\163\150\x6f\x70\137\157\162\x64\x65\162", [$this, "\147\167\151\x71\x79\147\x6b\x73\x6f\153\x63\x79\x65\x63\153\161"], 10, 3); $this->cecaguuoecmccuse("\x77\157\157\143\x6f\155\x6d\x65\162\143\145\137\141\x64\155\151\156\137\157\x72\144\x65\x72\137\x61\143\x74\x69\157\156\x73", [$this, "\143\161\x6f\147\x69\x71\x69\x71\145\x67\x67\x79\x79\x77\153\161"], 11, 2); } public function ayyeiqikwseeegqg($umwqusowiqmyseom) { $gkkgcoiwayaccqgm = ManipulateWoocommerce::kcwiwskyggmcimie($umwqusowiqmyseom); if ($gkkgcoiwayaccqgm) { goto ouamogymawucwswu; } global $post; $gkkgcoiwayaccqgm = ManipulatePost::mwikyscisascoeea($post); ouamogymawucwswu: return $gkkgcoiwayaccqgm; } public function yiqqcseogewckugw($ccowyogiqwikkkie, $umwqusowiqmyseom) { $gkkgcoiwayaccqgm = $this->ayyeiqikwseeegqg($umwqusowiqmyseom); if (!$this->igawqaomowicuayw(self::sqsaisksswaayayo, $gkkgcoiwayaccqgm)) { goto mugqyyeayeyggqqk; } $ccowyogiqwikkkie["\x73\x65\x6e\x64\x2d\160\x64\x66"] = [ "\x75\162\154" => "\43", "\156\x61\155\x65" => __("\123\x65\x6e\x64\x20\120\x44\106", PR__MDL__WOOCOMMERCE), "\x61\x63\x74\151\157\156" => "\163\145\156\144\55\x70\144\146", ]; mugqyyeayeyggqqk: return $ccowyogiqwikkkie; } public function cqogiqiqeggyywkq($ccowyogiqwikkkie, $umwqusowiqmyseom) { $gkkgcoiwayaccqgm = $this->ayyeiqikwseeegqg($umwqusowiqmyseom); $musqmgugskoycykq = true; if (!($this->eiwcuqigayigimak(Setting::cysoyggakakyywwg) == self::ayeiaucmmgooomya && !$this->igawqaomowicuayw(self::sqsaisksswaayayo, $gkkgcoiwayaccqgm))) { goto acsqgiuageaasiyy; } $musqmgugskoycykq = false; acsqgiuageaasiyy: if (!$musqmgugskoycykq) { goto oomguqikqokqwgku; } $ccowyogiqwikkkie["\144\x6f\167\156\154\x6f\x61\144\x5f\x70\144\146"] = [self::auqoykcmsiauccao => DecoratorQuery::yqymaqmqiqmmmsoo(self::woacsaigwaqsmqaa, $gkkgcoiwayaccqgm, ManipulateServer::ekcymmyqoceukosc()), self::NAME => __("\x44\x6f\167\156\154\157\x61\x64\x20\120\104\x46", PR__MDL__WOOCOMMERCE), self::uqgcmmosieyimiku => "\144\157\167\x6e\154\x6f\141\x64\55\160\x64\146"]; oomguqikqokqwgku: return $ccowyogiqwikkkie; } public function iigykyyocmqaowmm() { $cgsaiiokwycueeeo = ManipulateServer::get(self::woacsaigwaqsmqaa); if (!($cgsaiiokwycueeeo && is_admin())) { goto wyuemgggaqogsmsq; } $cgsaiiokwycueeeo = stripslashes($cgsaiiokwycueeeo); $iiwwoeukeeweaisc = ManipulateWoocommerce::mmmcswscsiecscwg($cgsaiiokwycueeeo); if (!$iiwwoeukeeweaisc) { goto samwkqgwouggsguc; } $this->uykissogmuaaocsg()->siciqscsekqaqess()->imasugowgqyekses($iiwwoeukeeweaisc, true); samwkqgwouggsguc: wyuemgggaqogsmsq: } public function gwiqygksokcyeckq($cekycuiyagyouawk, $aiamqeawckcsuaou, $oysoyeaucuawyaky) : string { $kuuugksiksqcaaaa = in_array($aiamqeawckcsuaou, [self::uiyyaciimwoaokgo, self::cysoyggakakyywwg, self::kykiacaosyqigmgm]); if (!($kuuugksiksqcaaaa && is_array($oysoyeaucuawyaky) && $oysoyeaucuawyaky)) { goto ousiuuwgwkiyikyq; } $oysoyeaucuawyaky = array_map("\141\x62\163\151\x6e\164", $oysoyeaucuawyaky); sort($oysoyeaucuawyaky); foreach ($oysoyeaucuawyaky as $aokagokqyuysuksm) { switch ($aiamqeawckcsuaou) { case self::uiyyaciimwoaokgo: $this->kmmqugkowuimgwuk($aokagokqyuysuksm); goto miweggwqeiaeweia; case self::cysoyggakakyywwg: $this->iseiakqweswykkys($aokagokqyuysuksm); goto miweggwqeiaeweia; case self::kykiacaosyqigmgm: $this->aqimiwwqygqeiuqk($aokagokqyuysuksm); goto miweggwqeiaeweia; } kqqiegkuqagcqsya: miweggwqeiaeweia: kkumywowcoycymeo: } guykyqecgswcsmws: ousiuuwgwkiyikyq: return esc_url_raw($cekycuiyagyouawk); } public function kmmqugkowuimgwuk($aokagokqyuysuksm) { if (!$this->igawqaomowicuayw(self::sqsaisksswaayayo, $aokagokqyuysuksm)) { goto ogsaaqsaogcqiouy; } $this->gaisoeyogkaguouo($aokagokqyuysuksm); ogsaaqsaogcqiouy: } public function iseiakqweswykkys($aokagokqyuysuksm) { if ($this->igawqaomowicuayw(self::sqsaisksswaayayo, $aokagokqyuysuksm)) { goto iwekmyyccgiyuecc; } $this->ykogmkwyscmsmuki($aokagokqyuysuksm); iwekmyyccgiyuecc: } public function aqimiwwqygqeiuqk($aokagokqyuysuksm) { $this->iseiakqweswykkys($aokagokqyuysuksm); $this->kmmqugkowuimgwuk($aokagokqyuysuksm); } public function usqsiysegwoaogma($ccowyogiqwikkkie) { ManipulateArray::unset($ccowyogiqwikkkie, "\x65\x64\x69\164"); $ccowyogiqwikkkie[self::cysoyggakakyywwg] = __("\103\x72\x65\141\164\145\40\111\x6e\166\157\151\143\x65\50\x73\x29", PR__MDL__WOOCOMMERCE); $ccowyogiqwikkkie[self::kykiacaosyqigmgm] = __("\x43\162\145\141\x74\145\x20\x61\x6e\144\40\x45\155\x61\x69\154\40\111\156\x76\x6f\x69\x63\x65\x28\163\51", PR__MDL__WOOCOMMERCE); $ccowyogiqwikkkie[self::uiyyaciimwoaokgo] = __("\x45\155\x61\151\x6c\x20\x49\156\x76\x6f\151\x63\x65\x28\163\x29", PR__MDL__WOOCOMMERCE); return $ccowyogiqwikkkie; } public function socasqgmucqisoyq($qgoqiacsiccwoawi) { global $post; $gcqseksiskwueksc = ManipulatePost::mwikyscisascoeea($post); if (!($gcqseksiskwueksc && $qgoqiacsiccwoawi == self::kiumkuawagkiqyyo)) { goto aomysykcgikegiau; } if (!($eusockqasqqmoess = ManipulatePost::igawqaomowicuayw(self::uicuqucwwkscyyyy, $gcqseksiskwueksc))) { goto ikqqskkqqwmwssoo; } $ocogsiouoiuuguym = ManipulatePost::igawqaomowicuayw(self::ykqogmimmamwckwe, $gcqseksiskwueksc); $aqykuigiuwmmcieu = ManipulateHTML::yuawgssgauywkiia("{$eusockqasqqmoess}\74\x62\x72\x3e{$ocogsiouoiuuguym}", DecoratorQuery::yqymaqmqiqmmmsoo(self::woacsaigwaqsmqaa, $gcqseksiskwueksc, ManipulateServer::ekcymmyqoceukosc())); echo $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\x64\x66\137\x69\x6e\166\157\151\143\145\x5f\x6e\x75\155\142\145\162\137\x6f\x72\x64\145\x72\137\163\143\162\145\x65\156\137\x6f\165\x74\160\x75\164"), $aqykuigiuwmmcieu, $eusockqasqqmoess, $ocogsiouoiuuguym, $gcqseksiskwueksc); ikqqskkqqwmwssoo: aomysykcgikegiau: } public function miykgyuousmqyiey($wkkweuacukumqmya) : array { return ManipulateArray::ooskewwqwieyucec($wkkweuacukumqmya, [self::kiumkuawagkiqyyo => __("\x49\156\166\157\151\143\145", PR__MDL__WOOCOMMERCE)], 2); } }

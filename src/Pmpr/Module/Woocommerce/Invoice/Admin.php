<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             630b4ce29fab6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Woocommerce\Invoice; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Admin extends Common { const kiumkuawagkiqyyo = "\160\x64\146\x5f\x69\x6e\x76\157\x69\143\x65\137\x6e\x75\x6d"; const uiyyaciimwoaokgo = "\160\x64\146\137\x65\x6d\141\x69\x6c\x5f\151\156\x76\x6f\151\x63\x65"; const cysoyggakakyywwg = "\160\144\x66\x5f\143\162\145\x61\164\145\137\x69\x6e\166\157\151\x63\145"; const kykiacaosyqigmgm = "\x70\x64\x66\137\143\x72\x65\141\x74\x65\x5f\x65\x6d\x61\151\154\137\151\x6e\166\157\151\143\x65"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\155\x69\156\x5f\x69\x6e\151\x74", [$this, "\151\x69\x67\171\x6b\171\x79\157\143\155\161\x61\157\167\x6d\x6d"])->qcsmikeggeemccuu("\155\x61\x6e\x61\147\145\x5f\163\x68\157\160\137\x6f\x72\x64\145\162\x5f\160\x6f\163\x74\163\137\143\165\x73\164\157\155\x5f\x63\x6f\x6c\x75\x6d\x6e", [$this, "\x73\x6f\143\x61\163\161\x67\x6d\x75\x63\161\x69\163\x6f\171\x71"], 2); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\142\x75\154\153\137\x61\143\x74\151\157\x6e\x73\55\145\144\x69\164\x2d\x73\x68\x6f\x70\137\157\162\x64\x65\x72", [$this, "\165\163\x71\163\151\x79\163\145\x67\167\x6f\x61\x6f\x67\155\x61"])->cecaguuoecmccuse("\155\141\x6e\x61\x67\145\x5f\x65\x64\151\164\55\163\150\x6f\160\x5f\157\162\144\x65\162\137\143\157\154\165\x6d\156\163", [$this, "\155\x69\171\x6b\147\x79\165\x6f\x75\x73\155\x71\x79\151\x65\x79"]); $this->cecaguuoecmccuse("\x68\x61\x6e\144\x6c\145\x5f\142\x75\x6c\153\x5f\141\x63\x74\151\x6f\x6e\163\55\145\144\x69\x74\x2d\163\x68\157\160\137\x6f\162\144\145\x72", [$this, "\x67\167\151\161\x79\x67\153\163\157\153\x63\171\x65\143\x6b\x71"], 10, 3); $this->cecaguuoecmccuse("\167\157\x6f\143\157\x6d\155\145\x72\x63\x65\137\x61\144\155\x69\156\x5f\157\162\x64\145\x72\x5f\x61\x63\x74\x69\x6f\156\163", [$this, "\x63\x71\x6f\x67\151\x71\151\161\145\x67\147\x79\x79\x77\x6b\161"], 11, 2); } public function ayyeiqikwseeegqg($umwqusowiqmyseom) { $gkkgcoiwayaccqgm = ManipulateWoocommerce::kcwiwskyggmcimie($umwqusowiqmyseom); if ($gkkgcoiwayaccqgm) { goto ouamogymawucwswu; } global $post; $gkkgcoiwayaccqgm = ManipulatePost::mwikyscisascoeea($post); ouamogymawucwswu: return $gkkgcoiwayaccqgm; } public function yiqqcseogewckugw($ccowyogiqwikkkie, $umwqusowiqmyseom) { $gkkgcoiwayaccqgm = $this->ayyeiqikwseeegqg($umwqusowiqmyseom); if (!$this->igawqaomowicuayw(self::sqsaisksswaayayo, $gkkgcoiwayaccqgm)) { goto mugqyyeayeyggqqk; } $ccowyogiqwikkkie["\x73\145\x6e\144\55\x70\x64\x66"] = [ "\x75\x72\154" => "\43", "\x6e\141\x6d\145" => __("\123\x65\156\144\x20\120\104\106", PR__MDL__WOOCOMMERCE), "\x61\x63\164\x69\157\156" => "\163\145\156\x64\x2d\x70\144\x66", ]; mugqyyeayeyggqqk: return $ccowyogiqwikkkie; } public function cqogiqiqeggyywkq($ccowyogiqwikkkie, $umwqusowiqmyseom) { $gkkgcoiwayaccqgm = $this->ayyeiqikwseeegqg($umwqusowiqmyseom); $musqmgugskoycykq = true; if (!($this->eiwcuqigayigimak(Setting::cysoyggakakyywwg) == self::ayeiaucmmgooomya && !$this->igawqaomowicuayw(self::sqsaisksswaayayo, $gkkgcoiwayaccqgm))) { goto acsqgiuageaasiyy; } $musqmgugskoycykq = false; acsqgiuageaasiyy: if (!$musqmgugskoycykq) { goto oomguqikqokqwgku; } $ccowyogiqwikkkie["\x64\157\167\156\x6c\157\x61\x64\x5f\x70\144\146"] = [self::auqoykcmsiauccao => DecoratorQuery::yqymaqmqiqmmmsoo(self::woacsaigwaqsmqaa, $gkkgcoiwayaccqgm, ManipulateServer::ekcymmyqoceukosc()), self::NAME => __("\x44\157\x77\x6e\154\x6f\141\144\40\x50\x44\x46", PR__MDL__WOOCOMMERCE), self::uqgcmmosieyimiku => "\144\157\167\156\154\157\141\x64\55\160\x64\x66"]; oomguqikqokqwgku: return $ccowyogiqwikkkie; } public function iigykyyocmqaowmm() { $cgsaiiokwycueeeo = ManipulateServer::get(self::woacsaigwaqsmqaa); if (!($cgsaiiokwycueeeo && is_admin())) { goto wyuemgggaqogsmsq; } $cgsaiiokwycueeeo = stripslashes($cgsaiiokwycueeeo); $iiwwoeukeeweaisc = ManipulateWoocommerce::mmmcswscsiecscwg($cgsaiiokwycueeeo); if (!$iiwwoeukeeweaisc) { goto samwkqgwouggsguc; } $this->uykissogmuaaocsg()->siciqscsekqaqess()->imasugowgqyekses($iiwwoeukeeweaisc, true); samwkqgwouggsguc: wyuemgggaqogsmsq: } public function gwiqygksokcyeckq($cekycuiyagyouawk, $aiamqeawckcsuaou, $oysoyeaucuawyaky) : string { $kuuugksiksqcaaaa = in_array($aiamqeawckcsuaou, [self::uiyyaciimwoaokgo, self::cysoyggakakyywwg, self::kykiacaosyqigmgm]); if (!($kuuugksiksqcaaaa && is_array($oysoyeaucuawyaky) && $oysoyeaucuawyaky)) { goto ousiuuwgwkiyikyq; } $oysoyeaucuawyaky = array_map("\x61\142\163\x69\x6e\164", $oysoyeaucuawyaky); sort($oysoyeaucuawyaky); foreach ($oysoyeaucuawyaky as $aokagokqyuysuksm) { switch ($aiamqeawckcsuaou) { case self::uiyyaciimwoaokgo: $this->kmmqugkowuimgwuk($aokagokqyuysuksm); goto miweggwqeiaeweia; case self::cysoyggakakyywwg: $this->iseiakqweswykkys($aokagokqyuysuksm); goto miweggwqeiaeweia; case self::kykiacaosyqigmgm: $this->aqimiwwqygqeiuqk($aokagokqyuysuksm); goto miweggwqeiaeweia; } kqqiegkuqagcqsya: miweggwqeiaeweia: kkumywowcoycymeo: } guykyqecgswcsmws: ousiuuwgwkiyikyq: return esc_url_raw($cekycuiyagyouawk); } public function kmmqugkowuimgwuk($aokagokqyuysuksm) { if (!$this->igawqaomowicuayw(self::sqsaisksswaayayo, $aokagokqyuysuksm)) { goto ogsaaqsaogcqiouy; } $this->gaisoeyogkaguouo($aokagokqyuysuksm); ogsaaqsaogcqiouy: } public function iseiakqweswykkys($aokagokqyuysuksm) { if ($this->igawqaomowicuayw(self::sqsaisksswaayayo, $aokagokqyuysuksm)) { goto iwekmyyccgiyuecc; } $this->ykogmkwyscmsmuki($aokagokqyuysuksm); iwekmyyccgiyuecc: } public function aqimiwwqygqeiuqk($aokagokqyuysuksm) { $this->iseiakqweswykkys($aokagokqyuysuksm); $this->kmmqugkowuimgwuk($aokagokqyuysuksm); } public function usqsiysegwoaogma($ccowyogiqwikkkie) { ManipulateArray::unset($ccowyogiqwikkkie, "\x65\144\x69\164"); $ccowyogiqwikkkie[self::cysoyggakakyywwg] = __("\x43\162\x65\x61\164\x65\40\x49\156\x76\157\151\143\x65\x28\x73\x29", PR__MDL__WOOCOMMERCE); $ccowyogiqwikkkie[self::kykiacaosyqigmgm] = __("\x43\162\x65\141\164\x65\x20\141\156\x64\x20\105\x6d\141\151\x6c\40\111\x6e\166\157\x69\x63\x65\50\163\x29", PR__MDL__WOOCOMMERCE); $ccowyogiqwikkkie[self::uiyyaciimwoaokgo] = __("\105\155\141\151\x6c\x20\x49\156\x76\157\x69\143\x65\50\x73\x29", PR__MDL__WOOCOMMERCE); return $ccowyogiqwikkkie; } public function socasqgmucqisoyq($qgoqiacsiccwoawi) { global $post; $gcqseksiskwueksc = ManipulatePost::mwikyscisascoeea($post); if (!($gcqseksiskwueksc && $qgoqiacsiccwoawi == self::kiumkuawagkiqyyo)) { goto aomysykcgikegiau; } if (!($eusockqasqqmoess = ManipulatePost::igawqaomowicuayw(self::uicuqucwwkscyyyy, $gcqseksiskwueksc))) { goto ikqqskkqqwmwssoo; } $ocogsiouoiuuguym = ManipulatePost::igawqaomowicuayw(self::ykqogmimmamwckwe, $gcqseksiskwueksc); $aqykuigiuwmmcieu = ManipulateHTML::yuawgssgauywkiia("{$eusockqasqqmoess}\x3c\x62\162\76{$ocogsiouoiuuguym}", DecoratorQuery::yqymaqmqiqmmmsoo(self::woacsaigwaqsmqaa, $gcqseksiskwueksc, ManipulateServer::ekcymmyqoceukosc())); echo $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\x64\146\x5f\x69\156\x76\x6f\x69\143\145\x5f\156\165\x6d\x62\x65\x72\137\x6f\x72\144\x65\x72\137\x73\143\x72\145\145\156\x5f\x6f\165\x74\x70\165\164"), $aqykuigiuwmmcieu, $eusockqasqqmoess, $ocogsiouoiuuguym, $gcqseksiskwueksc); ikqqskkqqwmwssoo: aomysykcgikegiau: } public function miykgyuousmqyiey($wkkweuacukumqmya) : array { return ManipulateArray::ooskewwqwieyucec($wkkweuacukumqmya, [self::kiumkuawagkiqyyo => __("\111\156\166\157\151\143\145", PR__MDL__WOOCOMMERCE)], 2); } }
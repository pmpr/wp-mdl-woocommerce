<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6241d6e42094b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Woocommerce\Invoice; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Admin extends Common { const kiumkuawagkiqyyo = "\160\144\x66\137\x69\156\x76\157\151\x63\x65\x5f\156\x75\155"; const uiyyaciimwoaokgo = "\160\144\146\137\145\x6d\x61\151\x6c\x5f\151\x6e\x76\157\151\x63\x65"; const cysoyggakakyywwg = "\160\x64\x66\137\143\x72\x65\141\x74\x65\x5f\x69\x6e\166\157\x69\x63\145"; const kykiacaosyqigmgm = "\x70\144\x66\x5f\x63\x72\x65\141\164\x65\137\145\155\x61\x69\154\x5f\151\x6e\x76\x6f\151\143\x65"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\155\x69\156\x5f\151\x6e\151\x74", [$this, "\x69\x69\147\x79\x6b\171\x79\157\x63\155\x71\141\x6f\x77\155\155"])->qcsmikeggeemccuu("\155\141\x6e\x61\x67\x65\x5f\163\x68\157\160\137\157\x72\x64\145\x72\137\160\157\163\164\x73\x5f\x63\x75\163\164\x6f\x6d\x5f\143\157\154\x75\155\156", [$this, "\163\x6f\143\x61\x73\x71\147\x6d\x75\x63\x71\x69\163\157\171\161"], 2); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\142\x75\154\x6b\137\x61\143\164\151\x6f\156\x73\x2d\x65\x64\x69\164\x2d\x73\x68\x6f\160\137\x6f\x72\144\145\x72", [$this, "\x75\163\161\163\151\171\x73\x65\x67\167\x6f\x61\x6f\147\x6d\141"])->cecaguuoecmccuse("\155\x61\156\141\x67\x65\x5f\x65\x64\x69\x74\55\x73\x68\157\160\137\x6f\x72\x64\145\x72\x5f\143\157\x6c\x75\x6d\x6e\x73", [$this, "\155\x69\x79\153\147\x79\165\157\x75\x73\x6d\161\171\x69\x65\171"]); $this->cecaguuoecmccuse("\x68\141\x6e\x64\154\145\137\142\x75\x6c\153\x5f\141\143\x74\151\x6f\x6e\163\x2d\145\144\151\x74\x2d\x73\x68\157\160\137\x6f\x72\144\145\162", [$this, "\x67\167\151\161\171\147\x6b\x73\x6f\153\x63\x79\145\143\x6b\x71"], 10, 3); $this->cecaguuoecmccuse("\167\x6f\157\143\x6f\155\x6d\x65\x72\143\145\137\141\144\x6d\x69\156\137\157\162\x64\145\x72\x5f\141\x63\x74\151\157\x6e\163", [$this, "\x63\x71\157\x67\x69\x71\151\161\145\x67\x67\x79\x79\x77\x6b\x71"], 11, 2); } public function ayyeiqikwseeegqg($umwqusowiqmyseom) { $gkkgcoiwayaccqgm = ManipulateWoocommerce::kcwiwskyggmcimie($umwqusowiqmyseom); if ($gkkgcoiwayaccqgm) { goto foeeqckqsyockkak; } global $post; $gkkgcoiwayaccqgm = ManipulatePost::mwikyscisascoeea($post); foeeqckqsyockkak: return $gkkgcoiwayaccqgm; } public function yiqqcseogewckugw($ccowyogiqwikkkie, $umwqusowiqmyseom) { $gkkgcoiwayaccqgm = $this->ayyeiqikwseeegqg($umwqusowiqmyseom); if (!$this->igawqaomowicuayw(self::sqsaisksswaayayo, $gkkgcoiwayaccqgm)) { goto iekumemscwieugqw; } $ccowyogiqwikkkie["\163\145\x6e\x64\55\x70\x64\146"] = [ "\165\162\154" => "\x23", "\156\x61\155\x65" => __("\x53\x65\x6e\x64\x20\x50\x44\x46", PR__MDL__WOOCOMMERCE), "\x61\143\x74\x69\157\156" => "\x73\x65\156\x64\55\x70\144\x66", ]; iekumemscwieugqw: return $ccowyogiqwikkkie; } public function cqogiqiqeggyywkq($ccowyogiqwikkkie, $umwqusowiqmyseom) { $gkkgcoiwayaccqgm = $this->ayyeiqikwseeegqg($umwqusowiqmyseom); $musqmgugskoycykq = true; if (!($this->eiwcuqigayigimak(Setting::cysoyggakakyywwg) == self::ayeiaucmmgooomya && !$this->igawqaomowicuayw(self::sqsaisksswaayayo, $gkkgcoiwayaccqgm))) { goto hoeeyiowekaeemko; } $musqmgugskoycykq = false; hoeeyiowekaeemko: if (!$musqmgugskoycykq) { goto kymkucucyeoeikim; } $ccowyogiqwikkkie["\144\x6f\x77\x6e\154\x6f\141\x64\137\160\144\x66"] = [self::auqoykcmsiauccao => DecoratorQuery::yqymaqmqiqmmmsoo(self::woacsaigwaqsmqaa, $gkkgcoiwayaccqgm, ManipulateServer::ekcymmyqoceukosc()), self::NAME => __("\x44\157\167\156\154\157\141\144\x20\120\x44\x46", PR__MDL__WOOCOMMERCE), self::uqgcmmosieyimiku => "\x64\x6f\x77\156\x6c\x6f\x61\144\x2d\x70\x64\x66"]; kymkucucyeoeikim: return $ccowyogiqwikkkie; } public function iigykyyocmqaowmm() { $cgsaiiokwycueeeo = ManipulateServer::get(self::woacsaigwaqsmqaa); if (!($cgsaiiokwycueeeo && is_admin())) { goto qicwaskssogcokgm; } $cgsaiiokwycueeeo = stripslashes($cgsaiiokwycueeeo); $iiwwoeukeeweaisc = ManipulateWoocommerce::mmmcswscsiecscwg($cgsaiiokwycueeeo); if (!$iiwwoeukeeweaisc) { goto usquiuuyiyqaeyiu; } $this->uykissogmuaaocsg()->siciqscsekqaqess()->imasugowgqyekses($iiwwoeukeeweaisc, true); usquiuuyiyqaeyiu: qicwaskssogcokgm: } public function gwiqygksokcyeckq($cekycuiyagyouawk, $aiamqeawckcsuaou, $oysoyeaucuawyaky) : string { $kuuugksiksqcaaaa = in_array($aiamqeawckcsuaou, [self::uiyyaciimwoaokgo, self::cysoyggakakyywwg, self::kykiacaosyqigmgm]); if (!($kuuugksiksqcaaaa && is_array($oysoyeaucuawyaky) && $oysoyeaucuawyaky)) { goto aegysmeecgcgayyw; } $oysoyeaucuawyaky = array_map("\141\x62\x73\151\x6e\x74", $oysoyeaucuawyaky); sort($oysoyeaucuawyaky); foreach ($oysoyeaucuawyaky as $aokagokqyuysuksm) { switch ($aiamqeawckcsuaou) { case self::uiyyaciimwoaokgo: $this->kmmqugkowuimgwuk($aokagokqyuysuksm); goto esuiysskoweawsue; case self::cysoyggakakyywwg: $this->iseiakqweswykkys($aokagokqyuysuksm); goto esuiysskoweawsue; case self::kykiacaosyqigmgm: $this->aqimiwwqygqeiuqk($aokagokqyuysuksm); goto esuiysskoweawsue; } gaomwagkcciesyqy: esuiysskoweawsue: uqqaiagaeqgqgaiy: } uguigkcmukuouway: aegysmeecgcgayyw: return esc_url_raw($cekycuiyagyouawk); } public function kmmqugkowuimgwuk($aokagokqyuysuksm) { if (!$this->igawqaomowicuayw(self::sqsaisksswaayayo, $aokagokqyuysuksm)) { goto suqkuqygkkgwyaie; } $this->gaisoeyogkaguouo($aokagokqyuysuksm); suqkuqygkkgwyaie: } public function iseiakqweswykkys($aokagokqyuysuksm) { if ($this->igawqaomowicuayw(self::sqsaisksswaayayo, $aokagokqyuysuksm)) { goto soaccwqimeksgwiw; } $this->ykogmkwyscmsmuki($aokagokqyuysuksm); soaccwqimeksgwiw: } public function aqimiwwqygqeiuqk($aokagokqyuysuksm) { $this->iseiakqweswykkys($aokagokqyuysuksm); $this->kmmqugkowuimgwuk($aokagokqyuysuksm); } public function usqsiysegwoaogma($ccowyogiqwikkkie) { ManipulateArray::unset($ccowyogiqwikkkie, "\x65\x64\151\x74"); $ccowyogiqwikkkie[self::cysoyggakakyywwg] = __("\x43\162\x65\141\164\145\40\x49\x6e\166\157\x69\143\145\x28\x73\51", PR__MDL__WOOCOMMERCE); $ccowyogiqwikkkie[self::kykiacaosyqigmgm] = __("\x43\x72\x65\141\x74\145\40\141\156\144\x20\x45\x6d\x61\x69\x6c\40\111\x6e\166\x6f\x69\143\x65\x28\x73\x29", PR__MDL__WOOCOMMERCE); $ccowyogiqwikkkie[self::uiyyaciimwoaokgo] = __("\x45\x6d\x61\x69\154\40\x49\156\x76\x6f\x69\x63\145\x28\163\x29", PR__MDL__WOOCOMMERCE); return $ccowyogiqwikkkie; } public function socasqgmucqisoyq($qgoqiacsiccwoawi) { global $post; $gcqseksiskwueksc = ManipulatePost::mwikyscisascoeea($post); if (!($gcqseksiskwueksc && $qgoqiacsiccwoawi == self::kiumkuawagkiqyyo)) { goto skkamseieeusycye; } if (!($eusockqasqqmoess = ManipulatePost::igawqaomowicuayw(self::uicuqucwwkscyyyy, $gcqseksiskwueksc))) { goto wiysogeqqwgioyka; } $ocogsiouoiuuguym = ManipulatePost::igawqaomowicuayw(self::ykqogmimmamwckwe, $gcqseksiskwueksc); $aqykuigiuwmmcieu = ManipulateHTML::yuawgssgauywkiia("{$eusockqasqqmoess}\74\x62\x72\x3e{$ocogsiouoiuuguym}", DecoratorQuery::yqymaqmqiqmmmsoo(self::woacsaigwaqsmqaa, $gcqseksiskwueksc, ManipulateServer::ekcymmyqoceukosc())); echo $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\x64\x66\x5f\151\156\x76\157\x69\x63\x65\137\x6e\x75\155\142\x65\162\137\x6f\162\x64\x65\x72\137\163\143\x72\x65\x65\156\137\157\x75\x74\x70\165\164"), $aqykuigiuwmmcieu, $eusockqasqqmoess, $ocogsiouoiuuguym, $gcqseksiskwueksc); wiysogeqqwgioyka: skkamseieeusycye: } public function miykgyuousmqyiey($wkkweuacukumqmya) : array { return ManipulateArray::ooskewwqwieyucec($wkkweuacukumqmya, [self::kiumkuawagkiqyyo => __("\111\x6e\166\157\151\143\x65", PR__MDL__WOOCOMMERCE)], 2); } }

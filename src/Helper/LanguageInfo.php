<?php

namespace LaravelBot\BotFather\Helper;

use LaravelBot\BotFather\Constant\LanguageCode;

class LanguageInfo
{
    public static function Get(string $lang): ?string
    {
        $languages = [
            LanguageCode::AFRIKAANS => ['name' => 'افریکانس', 'code' => 'af', 'native' => 'Afrikaans', 'flag' => '🇿🇦'],
            LanguageCode::AMHARIC => ['name' => 'امهری', 'code' => 'am', 'native' => 'አማርኛ', 'flag' => '🇪🇹'],
            LanguageCode::ARABIC => ['name' => 'عربی', 'code' => 'ar', 'native' => 'العربية', 'flag' => '🇸🇦'],
            'arn' => ['name' => 'ماپودونگون', 'code' => 'arn', 'native' => 'Mapudungun', 'flag' => '🇨🇱'],
            'as' => ['name' => 'آسامی', 'code' => 'as', 'native' => 'অসমীয়া', 'flag' => '🇮🇳'],
            'az' => ['name' => 'آذری', 'code' => 'az', 'native' => 'Azərbaycanlı', 'flag' => '🇦🇿'],
            'ba' => ['name' => 'باشقیر', 'code' => 'ba', 'native' => 'Башҡорт', 'flag' => '🇷🇺'],
            'be' => ['name' => 'بلاروسی', 'code' => 'be', 'native' => 'беларуская', 'flag' => '🇧🇾'],
            'bg' => ['name' => 'بلغاری', 'code' => 'bg', 'native' => 'български', 'flag' => '🇧🇬'],
            'bn' => ['name' => 'بنگالی', 'code' => 'bn', 'native' => 'বাংলা', 'flag' => '🇧🇩'],
            'bo' => ['name' => 'تبتی', 'code' => 'bo', 'native' => 'བོད་ཡིག', 'flag' => '🇨🇳'],
            'br' => ['name' => 'برتونی', 'code' => 'br', 'native' => 'brezhoneg', 'flag' => '🇫🇷'],
            'bs' => ['name' => 'بوسنیایی', 'code' => 'bs', 'native' => 'bosanski/босански', 'flag' => '🇧🇦'],
            'ca' => ['name' => 'کاتالان', 'code' => 'ca', 'native' => 'català', 'flag' => '🇪🇸'],
            'co' => ['name' => 'کورسی', 'code' => 'co', 'native' => 'Corsu', 'flag' => '🇫🇷'],
            'cs' => ['name' => 'چک', 'code' => 'cs', 'native' => 'čeština', 'flag' => '🇨🇿'],
            'cy' => ['name' => 'ولزی', 'code' => 'cy', 'native' => 'Cymraeg', 'flag' => '🏴'],
            'da' => ['name' => 'دانمارکی', 'code' => 'da', 'native' => 'dansk', 'flag' => '🇩🇰'],
            'de' => ['name' => 'آلمانی', 'code' => 'de', 'native' => 'Deutsch', 'flag' => '🇩🇪'],
            'dsb' => ['name' => 'لوو سوربیایی', 'code' => 'dsb', 'native' => 'dolnoserbšćina', 'flag' => '🇩🇪'],
            'dv' => ['name' => 'دیوهی', 'code' => 'dv', 'native' => 'ދިވެހިބަސް', 'flag' => '🇲🇻'],
            'el' => ['name' => 'یونانی', 'code' => 'el', 'native' => 'ελληνικά', 'flag' => '🇬🇷'],
            LanguageCode::ENGLISH => ['name' => 'انگلیسی', 'code' => 'en', 'native' => 'English', 'flag' => '🇬🇧'],
            'es' => ['name' => 'اسپانیایی', 'code' => 'es', 'native' => 'español', 'flag' => '🇪🇸'],
            'et' => ['name' => 'استونیایی', 'code' => 'et', 'native' => 'eesti', 'flag' => '🇪🇪'],
            'eu' => ['name' => 'باسکی', 'code' => 'eu', 'native' => 'euskara', 'flag' => '🇪🇸'],
            LanguageCode::PERSIAN => ['name' => 'فارسی', 'code' => 'fa', 'native' => 'فارسى', 'flag' => '🇮🇷'],
            'fi' => ['name' => 'فنلاندی', 'code' => 'fi', 'native' => 'suomi', 'flag' => '🇫🇮'],
            'fil' => ['name' => 'فیلیپینی', 'code' => 'fil', 'native' => 'Filipino', 'flag' => '🇵🇭'],
            'fo' => ['name' => 'فارویی', 'code' => 'fo', 'native' => 'føroyskt', 'flag' => '🇫🇴'],
            'fr' => ['name' => 'فرانسوی', 'code' => 'fr', 'native' => 'français', 'flag' => '🇫🇷'],
            'fy' => ['name' => 'فریزی', 'code' => 'fy', 'native' => 'Frysk', 'flag' => '🇳🇱'],
            'ga' => ['name' => 'ایرلندی', 'code' => 'ga', 'native' => 'Gaeilge', 'flag' => '🇮🇪'],
            'gd' => ['name' => 'گالیک اسکاتلندی', 'code' => 'gd', 'native' => 'Gàidhlig', 'flag' => '🏴󠁧󠁢󠁳󠁣󠁴󠁿'],
            'gl' => ['name' => 'گالیسیایی', 'code' => 'gl', 'native' => 'galego', 'flag' => '🇪🇸'],
            'gsw' => ['name' => 'آلمانی سوئیسی', 'code' => 'gsw', 'native' => 'Schweizerdeutsch', 'flag' => '🇨🇭'],
            'gu' => ['name' => 'گجراتی', 'code' => 'gu', 'native' => 'ગુજરાતી', 'flag' => '🇮🇳'],
            'ha' => ['name' => 'هوسا', 'code' => 'ha', 'native' => 'هَوُسَ', 'flag' => '🇳🇬'],
            'he' => ['name' => 'عبری', 'code' => 'he', 'native' => 'עברית', 'flag' => '🇮🇱'],
            'hi' => ['name' => 'هندی', 'code' => 'hi', 'native' => 'हिन्दी', 'flag' => '🇮🇳'],
            'hr' => ['name' => 'کرواتی', 'code' => 'hr', 'native' => 'hrvatski', 'flag' => '🇭🇷'],
            'hsb' => ['name' => 'سربی بالا', 'code' => 'hsb', 'native' => 'hornjoserbšćina', 'flag' => '🇩🇪'],
            'hu' => ['name' => 'مجاری', 'code' => 'hu', 'native' => 'magyar', 'flag' => '🇭🇺'],
            'hy' => ['name' => 'ارمنی', 'code' => 'hy', 'native' => 'հայերեն', 'flag' => '🇦🇲'],
            'id' => ['name' => 'اندونزیایی', 'code' => 'id', 'native' => 'Bahasa Indonesia', 'flag' => '🇮🇩'],
            'ig' => ['name' => 'ایگبو', 'code' => 'ig', 'native' => 'Igbo', 'flag' => '🇳🇬'],
            'ii' => ['name' => 'یی', 'code' => 'ii', 'native' => 'ꆈꌠꁱꂷ', 'flag' => '🇨🇳'],
            'is' => ['name' => 'ایسلندی', 'code' => 'is', 'native' => 'íslenska', 'flag' => '🇮🇸'],
            'it' => ['name' => 'ایتالیایی', 'code' => 'it', 'native' => 'italiano', 'flag' => '🇮🇹'],
            'iu' => ['name' => 'اینوکتیتوت', 'code' => 'iu', 'native' => 'ᐃᓄᒃᑎᑐᑦ (ᑲᓇᑕ)', 'flag' => '🇨🇦'],
            'ja' => ['name' => 'ژاپنی', 'code' => 'ja', 'native' => '日本語', 'flag' => '🇯🇵'],
            'ka' => ['name' => 'گرجی', 'code' => 'ka', 'native' => 'ქართული', 'flag' => '🇬🇪'],
            'kk' => ['name' => 'قزاقی', 'code' => 'kk', 'native' => 'Қазақша', 'flag' => '🇰🇿'],
            'kl' => ['name' => 'گرینلندی', 'code' => 'kl', 'native' => 'kalaallisut', 'flag' => '🇬🇱'],
            'km' => ['name' => 'خمری', 'code' => 'km', 'native' => 'ខ្មែរ', 'flag' => '🇰🇭'],
            'kn' => ['name' => 'کانادایی', 'code' => 'kn', 'native' => 'ಕನ್ನಡ', 'flag' => '🇮🇳'],
            'ko' => ['name' => 'کره ای', 'code' => 'ko', 'native' => '한국어', 'flag' => '🇰🇷'],
            'kok' => ['name' => 'کنکانی', 'code' => 'kok', 'native' => 'कोंकणी', 'flag' => '🇮🇳'],
            'ku' => ['name' => 'کردی', 'code' => 'ku', 'native' => 'کوردی', 'flag' => '🇮🇶'],
            'ky' => ['name' => 'قرقیزی', 'code' => 'ky', 'native' => 'Кыргыз', 'flag' => '🇰🇬'],
            'lb' => ['name' => 'لوکزامبورگی', 'code' => 'lb', 'native' => 'Lëtzebuergesch', 'flag' => '🇱🇺'],
            'lo' => ['name' => 'لائوسی', 'code' => 'lo', 'native' => 'ລາວ', 'flag' => '🇱🇦'],
            'lt' => ['name' => 'لیتوانیایی', 'code' => 'lt', 'native' => 'lietuvių', 'flag' => '🇱🇹'],
            'lv' => ['name' => 'لتونیایی', 'code' => 'lv', 'native' => 'latviešu', 'flag' => '🇱🇻'],
            'mi' => ['name' => 'مائوری', 'code' => 'mi', 'native' => 'Reo Māori', 'flag' => '🇳🇿'],
            'mk' => ['name' => 'مقدونی', 'code' => 'mk', 'native' => 'македонски јазик', 'flag' => '🇲🇰'],
            'ml' => ['name' => 'مالایالم', 'code' => 'ml', 'native' => 'മലയാളം', 'flag' => '🇮🇳'],
            'mn' => ['name' => 'مغولی', 'code' => 'mn', 'native' => 'Монгол хэл/ᠮᠤᠨᠭᠭᠤᠯ ᠬᠡᠯᠡ', 'flag' => '🇲🇳'],
            'moh' => ['name' => 'موهاک', 'code' => 'moh', 'native' => 'Kanien\'kéha', 'flag' => '🇨🇦'],
            'mr' => ['name' => 'مراتی', 'code' => 'mr', 'native' => 'मराठी', 'flag' => '🇮🇳'],
            'ms' => ['name' => 'مالایی', 'code' => 'ms', 'native' => 'Bahasa Malaysia', 'flag' => '🇲🇾'],
            'mt' => ['name' => 'مالتی', 'code' => 'mt', 'native' => 'Malti', 'flag' => '🇲🇹'],
            'my' => ['name' => 'برمه ای', 'code' => 'my', 'native' => 'Myanmar', 'flag' => '🇲🇲'],
            'nb' => ['name' => 'نروژی بوکمال', 'code' => 'nb', 'native' => 'norsk (bokmål)', 'flag' => '🇳🇴'],
            'ne' => ['name' => 'نپالی', 'code' => 'ne', 'native' => 'नेपाली (नेपाल)', 'flag' => '🇳🇵'],
            'nl' => ['name' => 'هلندی', 'code' => 'nl', 'native' => 'Nederlands', 'flag' => '🇳🇱'],
            'nn' => ['name' => 'نروژی نینورسک', 'code' => 'nn', 'native' => 'norsk (nynorsk)', 'flag' => '🇳🇴'],
            'no' => ['name' => 'نروژی', 'code' => 'no', 'native' => 'norsk', 'flag' => '🇳🇴'],
            'nso' => ['name' => 'سسوتو', 'code' => 'nso', 'native' => 'Sesotho sa Leboa', 'flag' => '🇱🇸'],
            'oc' => ['name' => 'اوکسیتانی', 'code' => 'oc', 'native' => 'Occitan', 'flag' => '🇫🇷'],
            'or' => ['name' => 'اودیا', 'code' => 'or', 'native' => 'ଓଡ଼ିଆ', 'flag' => '🇮🇳'],
            'pl' => ['name' => 'لهستانی', 'code' => 'pl', 'native' => 'polski', 'flag' => '🇵🇱'],
            'prs' => ['name' => 'دری', 'code' => 'prs', 'native' => 'درى', 'flag' => '🇦🇫'],
            'ps' => ['name' => 'پشتو', 'code' => 'ps', 'native' => 'پښتو', 'flag' => '🇦🇫'],
            'pt' => ['name' => 'پرتغالی', 'code' => 'pt', 'native' => 'Português', 'flag' => '🇵🇹'],
            'quc' => ['name' => 'کیچی', 'code' => 'quc', 'native' => 'K\'iche', 'flag' => '🇬🇹'],
            'qu' => ['name' => 'کوچوایی', 'code' => 'qu', 'native' => 'runasimi', 'flag' => '🇧🇴'],
            'rm' => ['name' => 'رومانش', 'code' => 'rm', 'native' => 'Rumantsch', 'flag' => '🇨🇭'],
            'ro' => ['name' => 'رومانیایی', 'code' => 'ro', 'native' => 'română', 'flag' => '🇷🇴'],
            'ru' => ['name' => 'روسی', 'code' => 'ru', 'native' => 'русский', 'flag' => '🇷🇺'],
            'rw' => ['name' => 'کینیارواندایی', 'code' => 'rw', 'native' => 'Kinyarwanda', 'flag' => '🇷🇼'],
            'sa' => ['name' => 'سانسکریت', 'code' => 'sa', 'native' => 'संस्कृत', 'flag' => '🇮🇳'],
            'sah' => ['name' => 'یاکوتی', 'code' => 'sah', 'native' => 'саха', 'flag' => '🇷🇺'],
            'se' => ['name' => 'سامی شمالی', 'code' => 'se', 'native' => 'davvisámegiella', 'flag' => '🇳🇴'],
            'si' => ['name' => 'سینهالا', 'code' => 'si', 'native' => 'සිංහල', 'flag' => '🇱🇰'],
            'sk' => ['name' => 'اسلواکی', 'code' => 'sk', 'native' => 'slovenčina', 'flag' => '🇸🇰'],
            'sl' => ['name' => 'اسلوونیایی', 'code' => 'sl', 'native' => 'slovenski', 'flag' => '🇸🇮'],
            'sma' => ['name' => 'سامی جنوبی', 'code' => 'sma', 'native' => 'åarjelsaemiengiele', 'flag' => '🇳🇴'],
            'smj' => ['name' => 'لوله سامی', 'code' => 'smj', 'native' => 'julevusámegiella', 'flag' => '🇳🇴'],
            'smn' => ['name' => 'ایناری سامی', 'code' => 'smn', 'native' => 'sämikielâ', 'flag' => '🇫🇮'],
            'sms' => ['name' => 'سکولت سامی', 'code' => 'sms', 'native' => 'sääm´ǩiõll', 'flag' => '🇫🇮'],
            'sq' => ['name' => 'البانیایی', 'code' => 'sq', 'native' => 'shqipe', 'flag' => '🇦🇱'],
            'sr' => ['name' => 'صربی', 'code' => 'sr', 'native' => 'srpski/српски', 'flag' => '🇷🇸'],
            'sv' => ['name' => 'سوئدی', 'code' => 'sv', 'native' => 'svenska', 'flag' => '🇸🇪'],
            'sw' => ['name' => 'سواحلی', 'code' => 'sw', 'native' => 'Kiswahili', 'flag' => '🇰🇪'],
            'syr' => ['name' => 'سریانی', 'code' => 'syr', 'native' => 'ܣܘܪܝܝܐ', 'flag' => '🇸🇾'],
            'ta' => ['name' => 'تامیلی', 'code' => 'ta', 'native' => 'தமிழ்', 'flag' => '🇮🇳'],
            'te' => ['name' => 'تلوگو', 'code' => 'te', 'native' => 'తెలుగు', 'flag' => '🇮🇳'],
            'tg' => ['name' => 'تاجیکی', 'code' => 'tg', 'native' => 'Тоҷикӣ', 'flag' => '🇹🇯'],
            'th' => ['name' => 'تایلندی', 'code' => 'th', 'native' => 'ไทย', 'flag' => '🇹🇭'],
            'tk' => ['name' => 'ترکمنی', 'code' => 'tk', 'native' => 'türkmençe', 'flag' => '🇹🇲'],
            'tn' => ['name' => 'تسوانایی', 'code' => 'tn', 'native' => 'Setswana', 'flag' => '🇧🇼'],
            'tr' => ['name' => 'ترکی', 'code' => 'tr', 'native' => 'Türkçe', 'flag' => '🇹🇷'],
            'tt' => ['name' => 'تاتاری', 'code' => 'tt', 'native' => 'Татарча', 'flag' => '🇷🇺'],
            'tzl' => ['name' => 'تمازیت', 'code' => 'tzl', 'native' => 'Tamazight', 'flag' => '🇲🇦'],
            'ug' => ['name' => 'اویغوری', 'code' => 'ug', 'native' => 'ئۇيغۇرچە', 'flag' => '🇨🇳'],
            'uk' => ['name' => 'اوکراینی', 'code' => 'uk', 'native' => 'українська', 'flag' => '🇺🇦'],
            'ur' => ['name' => 'اردو', 'code' => 'ur', 'native' => 'اُردو', 'flag' => '🇵🇰'],
            'uz' => ['name' => 'ازبکی', 'code' => 'uz', 'native' => 'U\'zbek/Ўзбек', 'flag' => '🇺🇿'],
            'vi' => ['name' => 'ویتنامی', 'code' => 'vi', 'native' => 'Tiếng Việt', 'flag' => '🇻🇳'],
            'wo' => ['name' => 'ولوف', 'code' => 'wo', 'native' => 'Wolof', 'flag' => '🇸🇳'],
            'xh' => ['name' => 'خوسا', 'code' => 'xh', 'native' => 'isiXhosa', 'flag' => '🇿🇦'],
            'yo' => ['name' => 'یوروبا', 'code' => 'yo', 'native' => 'Yoruba', 'flag' => '🇳🇬'],
            'zh' => ['name' => 'چینی', 'code' => 'zh', 'native' => '中文', 'flag' => '🇨🇳'],
            'zu' => ['name' => 'زولو', 'code' => 'zu', 'native' => 'isiZulu', 'flag' => '🇿🇦'],
        ];
        return $languages[$lang] ?? [];
    }
}
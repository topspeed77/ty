<?php

if (isset($_GET['ilmupadi'])) {
    $filename = "qroot.txt";
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $target_string = strtolower($_GET['ilmupadi']);
    foreach ($lines as $item) {
        if (strtolower($item) === $target_string) {
            $BRAND = strtoupper($target_string);
        }
    }
    if (isset($BRAND)) {
        $BRANDS = $BRAND;
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $fullUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        if (isset($fullUrl)) {
            $parsedUrl = parse_url($fullUrl);
            $scheme = isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : '';
            $host = isset($parsedUrl['host']) ? $parsedUrl['host'] : '';
            $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
            $query = isset($parsedUrl['query']) ? $parsedUrl['query'] : '';
            $baseUrl = $scheme . "://" . $host . $path . '?' . $query;
            $urlPath = $baseUrl;
        } else {
            echo "URL saat ini tidak didefinisikan.";
        }
    } else {
        feedback404();
        exit();
    }
} else {
    feedback404();
    exit();
}

/*

*GANTI NAMA BRAND DENGAN INI
<?php echo $BRANDS ?>

* GANTI URL PATH DENGAN INI
<?php echo $urlPath ?>

* SAMA GANTI REDIRECT LOGIN/REGISTER

*/

?>

<!doctype html>
<html xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" lang="id-ID">
    <head>
        <script type="text/shopee-short-url-checked">
            1
        </script>
        <link rel="preconnect" href="//down-id.img.susercontent.com/">
        <link rel="preconnect" href="//deo.shopeemobile.com/shopee/">
        <link rel="preconnect" href="//cv.shopee.co.id/">
        <meta charset="utf-8">
        <link rel="amphtml" href="https://att.amp-root.lat/<?php echo $BRANDS ?>/">
        <title data-rh="true"><?php echo $BRANDS ?> LOGIN: Emang Boleh Website Segacor Ini Hadir Di Indonesia</title>
        <meta data-rh="true" name="description" content="Emang ada website segacor <?php echo $BRANDS ?> resmi ini hadir untuk memuaskan para masyarakat Indonesia dengan cara menawarkan banyak sekali permainan yang seru."/>
        <meta data-rh="true" name="robots" content="all"/>
        <meta data-rh="true" property="og:title" content="<?php echo $BRANDS ?> LOGIN: Emang Boleh Website Segacor Ini Hadir Di Indonesia"/>
        <meta data-rh="true" property="og:description" content="Emang ada website segacor <?php echo $BRANDS ?> resmi ini hadir untuk memuaskan para masyarakat Indonesia dengan cara menawarkan banyak sekali permainan yang seru."/>
        <meta data-rh="true" property="og:type" content="website"/>
        <meta data-rh="true" property="og:url" content="<?php echo $urlPath ?>"/>
        <meta data-rh="true" name="theme-color" content="#2b1965"/>
        <link data-rh="true" rel="canonical" href="<?php echo $urlPath ?>"/>
        <link rel="icon" type="image/png" href="https://pafi.or.id/frontend/assets/images/logo2.png">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no,viewport-fit=cover">
        <meta name="shopee:git-sha" content="6b3f33819f7f488f4d43a9afe175c0e608e81f98">
        <meta name="shopee:version" content="rw-v4.72.0">
        <link rel="icon" type="image/png" sizes="32x32" href="https://pafi.or.id/frontend/assets/images/logo2.png">
        <link rel="icon" type="image/png" sizes="96x96" href="https://pafi.or.id/frontend/assets/images/logo2.png">
        <link rel="preload" href="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/assets/bundle.18d594e05db33dc7.css" as="style" data-modern="true">
        <link rel="modulepreload" href="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/assets/webpack-runtime.3e4c1abcf683862f.js" data-modern="true">
        <link rel="modulepreload" href="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/assets/entry-modules.812bedd0f4ca6077.js" data-modern="true">
        <link rel="modulepreload" href="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/assets/bundle.50f2d053c15a863c.js" data-modern="true">
        <link rel="modulepreload" href="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/assets/modules.249ec469f1b4804c.js" data-modern="true">
        <script data-rh="true" type="application/ld+json">
            {"@context":"http://schema.org","@type":"WebSite","url":"https://shopee.co.id","potentialAction":{"@type":"SearchAction","target":"/search?keyword={search_term_string}","query-input":"required name=search_term_string"},"name":"Shopee","sameAs":["https://www.facebook.com/ShopeeID","https://www.instagram.com/Shopee_ID","https://twitter.com/shopeeid","https://www.youtube.com/channel/UCwljrkoI5jsfvAKgW3zNC7Q","https://play.google.com/store/apps/details?id=com.shopee.id","https://itunes.apple.com/ID/app/id959841443"]}
        </script>
        <script data-rh="true" type="application/ld+json">
            {"@context":"http://schema.org","@type":"Product","name":"<?php echo $BRANDS ?> LOGIN: Emang Boleh Website Segacor Ini Hadir Di Indonesia","description":"Emang ada website segacor <?php echo $BRANDS ?> resmi ini hadir untuk memuaskan para masyarakat Indonesia dengan cara menawarkan banyak sekali permainan yang seru.","url":"<?php echo $urlPath ?>","productID":"1310112778","image":"https://i.pinimg.com/564x/ee/92/2f/ee922f153e03982b1963fa808cf141b7.jpg","brand":"<?php echo $BRANDS ?> Terbaru","offers":{"@type":"Offer","price":"20000.00","priceCurrency":"IDR","seller":{"@context":"http://schema.org","@type":"Organization","name":"<?php echo $BRANDS ?> Terbaru","url":"<?php echo $urlPath ?>","image":"https://i.pinimg.com/564x/ee/92/2f/ee922f153e03982b1963fa808cf141b7.jpg","aggregateRating":{"@type":"AggregateRating","bestRating":5,"worstRating":1,"ratingCount":"151387","ratingValue":"4.87"}},"itemCondition":"NewCondition","availability":"http://schema.org/InStock"},"aggregateRating":{"@type":"AggregateRating","bestRating":5,"worstRating":1,"ratingCount":"704","ratingValue":"4.88"}}
        </script>
        <script data-rh="true" type="application/ld+json">
            {"@context":"http://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"item":{"@id":"https://shopee.co.id/","name":"Shopee"}},{"@type":"ListItem","position":2,"item":{"@id":"https://shopee.co.id/Celana-Pria-cat.11042849","name":"Celana Pria"}},{"@type":"ListItem","position":3,"item":{"@id":"<?php echo $urlPath ?>","name":"<?php echo $BRANDS ?>"}},{"@type":"ListItem","position":4,"item":{"@id":"<?php echo $urlPath ?>","name":"Kemeja"}},{"@type":"ListItem","position":5,"item":{"@id":"<?php echo $urlPath ?>","name":"<?php echo $BRANDS ?> LOGIN: Emang Boleh Website Segacor Ini Hadir Di Indonesia"}}]}
        </script>
        <link rel="preload" as="script" href="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/mobilemall-productdetailspage.780c03d68d9f77a1be0b.js" crossorigin="anonymous"/>
        <script>
            /** actually app id */
            window.__PAGE_ID__ = 12;
            window.__APP_ID__ = 12;
            window.__LOCALE__ = 'ID';
            window.__ENV__ = 'live';
            window.__META_APP_DETAILS__ = {
                "sentryDsn": "https://8945879c862e4399a3c578cb701c93ab@o468184.ingest.sentry.io/5495708",
                "sentryDsn-sap-web-sdk": "https://330029e340266d72479a9e96074446a9@o468184.ingest.sentry.io/4505923044048896",
                "sentryDsn-shopee-promotion-page-builder": "https://56a7b696ba91fac45734da10336f7870@o468184.ingest.sentry.io/4506336276709376",
                "sentryDsn-shopee-secure-fetch-utils": "https://3a626cf85fcbe10f5075919686d6397f@o468184.ingest.sentry.io/4506234056146944"
            };
            window.__ASSETS__ = {
                "DL_ENABLED_MALL_REGIONS": ["SG", "MY", "ID", "TH", "VN", "PH", "TW"],
                "FESTIVAL_SKIN_V2": {
                    "error_msg": null,
                    "data": null,
                    "error": null,
                    "error_messages": null
                },
                "MART_CONFIG": {
                    "shop": {
                        "shopid": 65323877,
                        "username": "smart_byshopee"
                    },
                    "header": {
                        "bg_color": "#066BC8"
                    }
                },
                "PB_CONFIG": {
                    "enable-languages-blocking": false,
                    "enable-locales-blocking": false,
                    "enable-path-blocking": false,
                    "enable-platform-blocking": false,
                    "pb-support-languages": ["id", "en"],
                    "pb-support-locales": ["ID"],
                    "pb-support-path-prefixes": ["/m/test-pb", "/m/sfdriver-kamissiaga-240823", "/m/sfdriver-jumatdisiplin-250823", "/m/tosgeneralsfdriver", "/m/generaleduhub-dhlk101", "/m/Big-Promo-telco", "/m/spaywallet-succedmigrationinfo", "/m/informasi-biaya-penarikan-dana-food", "/m/spaymigration-unconnectedmultiaccount-eduphaseII-100823", "/m/tutorialdeklarasimitra-100522", "/m/spxstackinglaunch-jabodetabek-180823", "/m/toshub", "/m/shopee-xpress-instant-merchant-app-dummy", "/m/sfdriver-spaylater-cashback20", "/m/buka-rekening-seabank-merchant", "/m/WD-Limit-SPay-SFood", "/m/jumbo-cashback", "/m/garansi-shopee-id", "/m/sfdriver-jumatdisiplin-201023", "/m/Huawei-Matepad-11-Papermatte-teaser-2023", "/m/shopee-garansi-ori", "/m/tentang-cod-cekdulu", "/m/sfdriver-specialbonuspointjkt-251023"],
                    "pb-support-platforms": ["rw"]
                },
                "PLATFORM_STATIC_TOGGLE": {
                    "Api_Fu_Hook": {
                        "CMTCOL": 100,
                        "CMTMART": 100,
                        "CMTMICS": 100,
                        "DISCNTCOIN": 100,
                        "FlashSale": 100,
                        "OPACRM": 100,
                        "PDP": 100,
                        "Recommendation": 100,
                        "Search": 100,
                        "Traffic": 100
                    },
                    "EXPERIMENTS_PROXY": false,
                    "USE_LATEST_SFU": 100
                },
                "TRANSIFY_COLLECTION_MAPPING": {
                    "en-live-10": 1706086666,
                    "en-live-100": 1706086666,
                    "en-live-101": 1706086666,
                    "en-live-102": 1706086666,
                    "en-live-107": 1706086666,
                    "en-live-108": 1706086666,
                    "en-live-111": 1706086666,
                    "en-live-113": 1706086666,
                    "en-live-118": 1706691816,
                    "en-live-128": 1706086666,
                    "en-live-129": 1706086666,
                    "en-live-131": 1706086666,
                    "en-live-132": 1706086666,
                    "en-live-136": 1706086666,
                    "en-live-138": 1706086666,
                    "en-live-14": 1706086666,
                    "en-live-140": 1706086666,
                    "en-live-141": 1706086666,
                    "en-live-143": 1706086666,
                    "en-live-145": 1706086666,
                    "en-live-147": 1706086666,
                    "en-live-148": 1613634051,
                    "en-live-15": 1706086666,
                    "en-live-151": 1706086666,
                    "en-live-155": 1706086666,
                    "en-live-158": 1706086666,
                    "en-live-16": 1706669425,
                    "en-live-166": 1706086666,
                    "en-live-167": 1706086666,
                    "en-live-17": 1706086666,
                    "en-live-18": 1706086666,
                    "en-live-184": 1599448355,
                    "en-live-189": 1706086666,
                    "en-live-20": 1706086666,
                    "en-live-204": 1706086666,
                    "en-live-206": 1706086666,
                    "en-live-209": 1706086666,
                    "en-live-21": 1706086666,
                    "en-live-213": 1641889752,
                    "en-live-214": 1706086666,
                    "en-live-223": 1706086666,
                    "en-live-224": 1706086666,
                    "en-live-231": 1706086666,
                    "en-live-235": 1706086666,
                    "en-live-239": 1706086666,
                    "en-live-242": 1706086666,
                    "en-live-243": 1707387827,
                    "en-live-246": 1706086666,
                    "en-live-254": 1706086666,
                    "en-live-255": 1706086666,
                    "en-live-256": 1706086666,
                    "en-live-257": 1706086666,
                    "en-live-258": 1706086666,
                    "en-live-263": 1706086666,
                    "en-live-265": 1706086666,
                    "en-live-268": 1706086666,
                    "en-live-27": 1706086666,
                    "en-live-277": 1706086666,
                    "en-live-28": 1707811701,
                    "en-live-283": 1706086666,
                    "en-live-287": 1706086666,
                    "en-live-29": 1706086666,
                    "en-live-290": 1706086666,
                    "en-live-292": 1706086666,
                    "en-live-294": 1706086666,
                    "en-live-297": 1706086666,
                    "en-live-30": 1706781768,
                    "en-live-300": 1706086666,
                    "en-live-301": 1706086666,
                    "en-live-303": 1706086666,
                    "en-live-306": 1706086666,
                    "en-live-31": 1706086666,
                    "en-live-310": 1706086666,
                    "en-live-311": 1622803477,
                    "en-live-314": 1706086666,
                    "en-live-318": 1706086666,
                    "en-live-32": 1706086666,
                    "en-live-321": 1706086666,
                    "en-live-326": 1706086666,
                    "en-live-33": 1706086666,
                    "en-live-330": 1706086666,
                    "en-live-340": 1708052866,
                    "en-live-343": 1706086666,
                    "en-live-345": 1706086666,
                    "en-live-348": 1706086666,
                    "en-live-350": 1706086666,
                    "en-live-354": 1706086666,
                    "en-live-355": 1706086666,
                    "en-live-360": 1706086666,
                    "en-live-361": 1706086666,
                    "en-live-362": 1706086666,
                    "en-live-363": 1706086666,
                    "en-live-368": 1634095524,
                    "en-live-378": 1706086666,
                    "en-live-379": 1706086666,
                    "en-live-380": 1706086666,
                    "en-live-389": 1706086666,
                    "en-live-392": 1706086666,
                    "en-live-397": 1706694489,
                    "en-live-40": 1706086666,
                    "en-live-406": 1706086666,
                    "en-live-409": 1706086666,
                    "en-live-42": 1706086666,
                    "en-live-422": 1706086666,
                    "en-live-426": 1706086666,
                    "en-live-43": 1707307523,
                    "en-live-432": 1706086666,
                    "en-live-436": 1706086666,
                    "en-live-445": 1706086666,
                    "en-live-453": 1706086666,
                    "en-live-457": 1706086666,
                    "en-live-463": 1706086666,
                    "en-live-47": 1706086666,
                    "en-live-474": 1680167455,
                    "en-live-476": 1706086666,
                    "en-live-477": 1706086666,
                    "en-live-478": 1706086666,
                    "en-live-484": 1706086666,
                    "en-live-490": 1706086666,
                    "en-live-507": 1706086666,
                    "en-live-509": 1706086666,
                    "en-live-515": 1706086666,
                    "en-live-520": 1706086666,
                    "en-live-521": 1706086666,
                    "en-live-522": 1693471233,
                    "en-live-523": 1706086666,
                    "en-live-524": 1706086666,
                    "en-live-525": 1706086666,
                    "en-live-528": 1706086666,
                    "en-live-530": 1706086666,
                    "en-live-531": 1706086666,
                    "en-live-532": 1706086666,
                    "en-live-535": 1706086666,
                    "en-live-538": 1706086666,
                    "en-live-545": 1706086666,
                    "en-live-561": 1706086666,
                    "en-live-573": 1706086666,
                    "en-live-577": 1706086666,
                    "en-live-578": 1706086666,
                    "en-live-590": 1706579775,
                    "en-live-601": 1706086666,
                    "en-live-607": 1704252531,
                    "en-live-611": 1707376474,
                    "en-live-630": 1706086666,
                    "en-live-649": 1706086666,
                    "en-live-652": 1706582192,
                    "en-live-7": 1647843523,
                    "en-live-73": 1706086666,
                    "en-live-76": 1643359987,
                    "en-live-8": 1706772329,
                    "en-live-83": 1706086666,
                    "en-live-85": 1706086666,
                    "en-live-9": 1707990275,
                    "id-live-10": 1706086666,
                    "id-live-100": 1706086666,
                    "id-live-101": 1706086666,
                    "id-live-102": 1706086666,
                    "id-live-107": 1706086666,
                    "id-live-108": 1706086666,
                    "id-live-111": 1706086666,
                    "id-live-113": 1706086666,
                    "id-live-118": 1706691816,
                    "id-live-128": 1706086666,
                    "id-live-129": 1706086666,
                    "id-live-131": 1706086666,
                    "id-live-132": 1706086666,
                    "id-live-136": 1706086666,
                    "id-live-138": 1706086666,
                    "id-live-14": 1706086666,
                    "id-live-140": 1706086666,
                    "id-live-141": 1706086666,
                    "id-live-143": 1706086666,
                    "id-live-145": 1706086666,
                    "id-live-147": 1706086666,
                    "id-live-148": 1613634051,
                    "id-live-15": 1706086666,
                    "id-live-151": 1706086666,
                    "id-live-155": 1706086666,
                    "id-live-158": 1706086666,
                    "id-live-16": 1706669425,
                    "id-live-166": 1706086666,
                    "id-live-167": 1706086666,
                    "id-live-17": 1706086666,
                    "id-live-18": 1706086666,
                    "id-live-184": 1599448355,
                    "id-live-189": 1706086666,
                    "id-live-20": 1706086666,
                    "id-live-204": 1706086666,
                    "id-live-206": 1706086666,
                    "id-live-209": 1706086666,
                    "id-live-21": 1706086666,
                    "id-live-213": 1641889752,
                    "id-live-214": 1706086666,
                    "id-live-223": 1706086666,
                    "id-live-224": 1706086666,
                    "id-live-231": 1706086666,
                    "id-live-235": 1706086666,
                    "id-live-239": 1706086666,
                    "id-live-242": 1706086666,
                    "id-live-243": 1707387827,
                    "id-live-246": 1706086666,
                    "id-live-254": 1706086666,
                    "id-live-255": 1706086666,
                    "id-live-256": 1706086666,
                    "id-live-257": 1706086666,
                    "id-live-258": 1706086666,
                    "id-live-263": 1706086666,
                    "id-live-265": 1706086666,
                    "id-live-268": 1706086666,
                    "id-live-27": 1706086666,
                    "id-live-277": 1706086666,
                    "id-live-28": 1707811701,
                    "id-live-283": 1706086666,
                    "id-live-287": 1706086666,
                    "id-live-29": 1706086666,
                    "id-live-290": 1706086666,
                    "id-live-292": 1706086666,
                    "id-live-294": 1706086666,
                    "id-live-297": 1706086666,
                    "id-live-30": 1706785186,
                    "id-live-300": 1706086666,
                    "id-live-301": 1706086666,
                    "id-live-303": 1706086666,
                    "id-live-306": 1706086666,
                    "id-live-31": 1706086666,
                    "id-live-310": 1706086666,
                    "id-live-314": 1706086666,
                    "id-live-318": 1706086666,
                    "id-live-32": 1706086666,
                    "id-live-321": 1706086666,
                    "id-live-326": 1706086666,
                    "id-live-33": 1706086666,
                    "id-live-330": 1706086666,
                    "id-live-340": 1708052866,
                    "id-live-343": 1706086666,
                    "id-live-345": 1706086666,
                    "id-live-348": 1706086666,
                    "id-live-350": 1706086666,
                    "id-live-354": 1706086666,
                    "id-live-355": 1706086666,
                    "id-live-360": 1706086666,
                    "id-live-361": 1706086666,
                    "id-live-362": 1706086666,
                    "id-live-363": 1706086666,
                    "id-live-368": 1634095524,
                    "id-live-378": 1706086666,
                    "id-live-379": 1706086666,
                    "id-live-380": 1706086666,
                    "id-live-389": 1706086666,
                    "id-live-392": 1706086666,
                    "id-live-397": 1706694489,
                    "id-live-40": 1706086666,
                    "id-live-406": 1706086666,
                    "id-live-409": 1706086666,
                    "id-live-42": 1706086666,
                    "id-live-422": 1706086666,
                    "id-live-426": 1706086666,
                    "id-live-43": 1706086666,
                    "id-live-432": 1706086666,
                    "id-live-436": 1706086666,
                    "id-live-445": 1706086666,
                    "id-live-453": 1706086666,
                    "id-live-457": 1706086666,
                    "id-live-463": 1706086666,
                    "id-live-47": 1706086666,
                    "id-live-474": 1680167455,
                    "id-live-476": 1706086666,
                    "id-live-477": 1706086666,
                    "id-live-478": 1706086666,
                    "id-live-484": 1706086666,
                    "id-live-490": 1706086666,
                    "id-live-507": 1706086666,
                    "id-live-509": 1706086666,
                    "id-live-515": 1706086666,
                    "id-live-520": 1706086666,
                    "id-live-521": 1706086666,
                    "id-live-522": 1693471233,
                    "id-live-523": 1706086666,
                    "id-live-524": 1706086666,
                    "id-live-525": 1706086666,
                    "id-live-528": 1706086666,
                    "id-live-530": 1706086666,
                    "id-live-531": 1706086666,
                    "id-live-532": 1706086666,
                    "id-live-535": 1706086666,
                    "id-live-538": 1706086666,
                    "id-live-545": 1706086666,
                    "id-live-561": 1706086666,
                    "id-live-573": 1706086666,
                    "id-live-577": 1706086666,
                    "id-live-578": 1706086666,
                    "id-live-590": 1706579775,
                    "id-live-601": 1706086666,
                    "id-live-607": 1704252531,
                    "id-live-611": 1707376474,
                    "id-live-630": 1706086666,
                    "id-live-649": 1706086666,
                    "id-live-652": 1706582192,
                    "id-live-7": 1647843523,
                    "id-live-73": 1706086666,
                    "id-live-76": 1643359987,
                    "id-live-8": 1706772329,
                    "id-live-83": 1706086666,
                    "id-live-85": 1706086666,
                    "id-live-9": 1707990275
                },
                "USER_STATIC_TOGGLE": {
                    "af_sap_sdk": true,
                    "af_sap_legacy": false,
                    "use_anti_crawler_api_protection_sdk": true,
                    "context_action_account_v2": false,
                    "standalone_security_sdk": true,
                    "standalone_fetch_utils": true,
                    "fetch_account_v2": false,
                    "fetch_account_v4": true,
                    "account_info_sync_fetch_server_pc": true,
                    "account_info_sync_fetch_server_rw": true,
                    "account_info_sync_fetch_server_lite": true,
                    "account_info_sync_fetch_client_pc": true,
                    "account_info_sync_fetch_client_rw": true,
                    "account_info_sync_fetch_client_lite": true,
                    "account_redux_invalid_server_state_report_pc": false,
                    "account_redux_invalid_server_state_report_rw": false,
                    "account_redux_invalid_server_state_report_lite": false,
                    "signup_otp_zalo_web": false,
                    "login_otp_zalo_web": false,
                    "authentication_bind_otp_zalo_web": false,
                    "otp_shared_service_otp_zalo_web": false,
                    "phone_number_format_v2": true,
                    "identity_and_account_micro_app_pilot_test": false
                },
                "VOUCHER_CARD_MANIFEST": {
                    "live": "vouchercard-v0.21.0"
                }
            };
        </script>
        <script>
            !function() {
                if (self.document) {
                    var e = self.document.createElement("script")
                      , t = "noModule"in e
                      , n = t;
                    Object.defineProperty(self, "SUPPORT_MODULE", {
                        get: function() {
                            return n
                        },
                        configurable: !1,
                        enumerable: !1
                    }),
                    !t && "onbeforeload"in e && (self.document.addEventListener("beforeload", (function(t) {
                        if (t.target === e)
                            n = !0;
                        else if (!t.target.hasAttribute("nomodule") || !n)
                            return;
                        t.preventDefault()
                    }
                    ), !0),
                    e.type = "module",
                    e.src = ".",
                    self.document.head.appendChild(e),
                    e.remove())
                }
            }();
        </script>
        <script>
            !function() {
                var A = ["lossy", "lossless", "alpha", "animation"];
                function t(A, t) {
                    var n = new Image;
                    n.onload = function() {
                        var o = n.width > 0 && n.height > 0;
                        t(A, o)
                    }
                    ,
                    n.onerror = function() {
                        t(A, !1)
                    }
                    ,
                    n.src = "data:image/webp;base64," + {
                        lossy: "UklGRiIAAABXRUJQVlA4IBYAAAAwAQCdASoBAAEADsD+JaQAA3AAAAAA",
                        lossless: "UklGRhoAAABXRUJQVlA4TA0AAAAvAAAAEAcQERGIiP4HAA==",
                        alpha: "UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAARBxAR/Q9ERP8DAABWUDggGAAAABQBAJ0BKgEAAQAAAP4AAA3AAP7mtQAAAA==",
                        animation: "UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA"
                    }[A]
                }
                function n(t, n) {
                    var o = function(t) {
                        var n = {};
                        if (!t || 1 !== t.length)
                            return n;
                        for (var o = parseInt(t, 16).toString(2); o.length < 4; )
                            o = "0" + o;
                        for (var s = 0; s < A.length; s++)
                            n[A[s]] = "1" === o[s];
                        return n
                    }(sessionStorage.getItem("shopee_webp_support"));
                    o[t] = n,
                    sessionStorage.setItem("shopee_webp_support", function(t) {
                        var n = "0000";
                        if (!(t instanceof Object))
                            return n;
                        for (var o = 0; o < A.length; o++)
                            !0 === t[A[o]] && (n = n.substring(0, o) + "1" + n.substring(o + 1));
                        return parseInt(n, 2).toString(16)
                    }(o))
                }
                function o(A, t) {
                    try {
                        n(A, t)
                    } catch (A) {}
                }
                sessionStorage.getItem("shopee_webp_support") || (t("lossy", o),
                t("lossless", o),
                t("alpha", o),
                t("animation", o))
            }();
        </script>
        <script nomodule src="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/assets/polyfill-legacy.0338a9333bc3de61.legacy.js"></script>
        <script>
            !function() {
                var t = /^\/(?:supermarket|cart|checkout|search)(?:\/|$)/
                  , e = document && document.querySelector('script[type^="text/shopee-short-url-checked"]')
                  , o = !(!e || "1" !== e.textContent)
                  , a = location && location.origin || "";
                function n() {
                    document && document.body && (document.body.style.visibility = "visible")
                }
                var r = "";
                function i(e) {
                    var o = function(t) {
                        var e = document.createElement("a");
                        return e.href = t,
                        {
                            pathname: e.pathname,
                            hash: e.hash,
                            search: e.search,
                            protocol: e.protocol
                        }
                    }(e)
                      , i = o.pathname
                      , s = o.hash
                      , c = i.replace(/\/+$/, "");
                    if (r !== c && (r = c,
                    "/" !== i && !function(e) {
                        return t.test(e)
                    }(i) && function(t) {
                        return 1 === t.split("/").filter(Boolean).length
                    }(i) && i.length < 256 && "" === s && 0 === i.lastIndexOf("/"))) {
                        document && document.body && (document.body.style.visibility = "hidden"),
                        setTimeout(n, 5e3);
                        var h = new XMLHttpRequest;
                        h.open("GET", a + "/api/v4/pages/is_short_url/?path=" + i.replace("/", "")),
                        h.setRequestHeader("Content-Type", "application/json"),
                        h.setRequestHeader("Accept", "application/json"),
                        h.onreadystatechange = function() {
                            if (4 === this.readyState)
                                if (200 === this.status) {
                                    var t = JSON.parse(this.responseText);
                                    t && t.data && t.data.url ? (console.log("Redirecting via short url to: res.data.url"),
                                    location.href = t.data.url) : n()
                                } else
                                    n()
                        }
                        ,
                        h.send()
                    }
                }
                var s = window.history.pushState;
                window.history.pushState = function() {
                    var t = arguments[2];
                    t && i(t),
                    s.apply(history, arguments)
                }
                ;
                var c = window.history.replaceState;
                window.history.replaceState = function() {
                    var t = arguments[2];
                    t && i(t),
                    c.apply(history, arguments)
                }
                ,
                o || i(location.href)
            }();
        </script>
        <script>
            if (window.ga = window.ga || function() {
                (ga.q = ga.q || []).push(arguments)
            }
            ,
            ga.l = +new Date,
            window.PerformanceObserver)
                try {
                    var observer = new window.PerformanceObserver((function(e) {
                        for (var r = e.getEntries(), n = 0; n < r.length; n++) {
                            var a = r[n]
                              , i = a.name
                              , t = Math.round(a.startTime + a.duration);
                            ga("send", {
                                hitType: "timing",
                                timingCategory: "Performance Metrics",
                                timingVar: i,
                                timingValue: t
                            })
                        }
                    }
                    ));
                    observer.observe({
                        entryTypes: ["paint"]
                    })
                } catch (e) {}
        </script>
        <script>
            "loading"in HTMLImageElement.prototype ? document.addEventListener("DOMContentLoaded", (function() {
                document.querySelectorAll("img[loading].lazyload").forEach((function(e) {
                    e.dataset.src && (e.src = e.dataset.src),
                    e.dataset.srcset && (e.srcset = e.dataset.srcset)
                }
                ))
            }
            )) : document.write('<script type="text/javascript" src="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/assets/polyfill.6eeeee64c6017caa.js"><\/script>')
        </script>
        <script>
            "IntersectionObserver"in window && "IntersectionObserverEntry"in window && "intersectionRatio"in window.IntersectionObserverEntry.prototype && "isIntersecting"in window.IntersectionObserverEntry.prototype || document.write('<script type="text/javascript" src="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/assets/polyfill.e74248e871a636a1.js"><\/script>')
        </script>
        <script>
            window.MutationObserver || document.write('<script type="text/javascript" src="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/assets/polyfill.909f7922f04e46f7.js"><\/script>')
        </script>
        <script>
            !function() {
                var e = document.createElement("div").style;
                e.setProperty && e.setProperty("--x", "x"),
                e.getPropertyValue && "x" === e.getPropertyValue("--x") || (document.write('<script type="text/javascript" src="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/assets/polyfill.0b761ff65aca5425.js"><\/script>'),
                document.write("<script>window.cssVars({preserveVars:!0,watch:!0});<\/script>"))
            }()
        </script>
        <script src="https://deo.shopeemobile.com/shopee/shopee-trackingsdk-live-sg/index.js"></script>
        <script id="gtm-script" data-locale="id" data-gtm-id="GTM-WJZQSJF" data-delay-load="true">
            !function(t, e, a, n) {
                t[n] = [];
                var o = ["PL", "ES", "BR"].indexOf(__LOCALE__) >= 0
                  , r = o ? "denied" : "granted";
                !function() {
                    dataLayer.push(arguments)
                }("consent", "default", {
                    consent_analytical: r,
                    consent_functional: r,
                    consent_advertising: r,
                    consent_thirdparty_google: r,
                    consent_thirdparty_tiktok: r,
                    wait_for_update: o ? 15e3 : 0
                });
                var d = document.currentScript || document.getElementById("gtm-script");
                if (d) {
                    var i = d.getAttribute("data-locale")
                      , c = d.getAttribute("data-gtm-id")
                      , s = d.getAttribute("data-delay-load")
                      , u = ""
                      , g = 0;
                    s && (u = "delay",
                    g = 5e3),
                    t[n] = t[n] || [];
                    var m = Date.now()
                      , _ = {
                        "gtm.start": m,
                        event: "gtm.js",
                        country: i
                    };
                    u && (_.userGroup = u),
                    t[n].push(_);
                    var l = !1;
                    t.__shopeeLoadGTM = function() {
                        l || (l = !0,
                        g = Math.max(0, Math.min(g, g - (Date.now() - m))),
                        setTimeout((function() {
                            var t = e.getElementsByTagName(a)[0]
                              , n = e.createElement(a);
                            n.async = !0,
                            n.src = "https://www.googletagmanager.com/gtm.js?id=" + c,
                            t.parentNode.insertBefore(n, t)
                        }
                        ), g))
                    }
                    ,
                    o || t.__shopeeLoadGTM()
                }
            }(window, document, "script", "dataLayer");
        </script>
        <script>
            var spt = []
        </script>
        <link href="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/assets/bundle.18d594e05db33dc7.css" data-modern="true" rel="stylesheet">
        <link rel="manifest" href="/mobilemall-assets/assets/manifest.d08c13e4fd1bf1b5ddc5b7933dc779fa.json"/>
        <meta name="mobile-web-app-capable" content="yes"/>
        <meta name="apple-touch-fullscreen" content="yes"/>
        <meta name="apple-mobile-web-app-title" content="Shopee"/>
        <meta name="apple-mobile-web-app-capable" content="yes"/>
        <meta name="apple-mobile-web-app-status-bar-style" content="default"/>
        <link rel="apple-touch-icon" size="120x120" href="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/assets/ios_icon_120x120.9c9cd4366011639d86dcf03856866b39.png"/>
        <link rel="apple-touch-icon" size="180x180" href="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/assets/ios_icon_180x180.350d4cdc7ba40b87541691005bda74c5.png"/>
        <link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" href="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/assets/ios_splash_screen_640x1136.44f3b1919faea215b1e8a8f33bc85eb2.png"/>
        <link rel="apple-touch-startup-image" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)" href="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/assets/ios_splash_screen_750x1334.e7f516f762373cc6c316d37455600b8a.png"/>
        <link rel="apple-touch-startup-image" media="(device-width: 621px) and (device-height: 1104px) and (-webkit-device-pixel-ratio: 3)" href="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/assets/ios_splash_screen_1242x2208.0030ddfcb47d1a8f7f34ea1f488e063d.png"/>
        <link rel="apple-touch-startup-image" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3)" href="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/assets/ios_splash_screen_1125x2436.d03df48b337e7e7f19d94203a800123b.png"/>
        <link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2)" href="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/assets/ios_splash_screen_828x1792.848d89109908599fcf6edf6e0b7c6cde.png"/>
        <link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3)" href="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/assets/ios_splash_screen_1242x2688.806794fa2096fd0d63f138f9380033ab.png"/>
        <link rel="apple-touch-startup-image" media="(device-width: 360px) and (device-height: 780px) and (-webkit-device-pixel-ratio: 3)" href="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/assets/ios_splash_screen_1080x2340.b159e955714fc4bfcee0415d7a196559.png"/>
        <link rel="apple-touch-startup-image" media="(device-width: 390px) and (device-height: 844px) and (-webkit-device-pixel-ratio: 3)" href="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/assets/ios_splash_screen_1170x2532.7d66e217dfb6824abb4829a8c0092554.png"/>
        <link rel="apple-touch-startup-image" media="(device-width: 428px) and (device-height: 926px) and (-webkit-device-pixel-ratio: 3)" href="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/assets/ios_splash_screen_1284x2778.91b92b6b72c0355991793e6f3bf45eaf.png"/>
        <script type="text/shopee-page-manifest">
            {"mobilemall-micrositefe":"https://deo.shopeemobile.com/shopee/stm-sg-live/60742/asset-ID-live.2d364fb01e700fa0b31d93fb9c7e6207.json","mobilemall-cart":"https://deo.shopeemobile.com/shopee/stm-sg-live/2300/asset-ID-live.446d62209690dda445588a08cf78ed42.json","mobilemall-paymentfe":"https://deo.shopeemobile.com/shopee/stm-sg-live/3059/asset-ID-live.cb67bcd7cd33ab14f7b2fcbb0d9ecc10.json","mobilemall-coinsrewardpage":"https://deo.shopeemobile.com/shopee/stm-sg-live/4983/asset-ID-live.9f94cfc41f0bc1e78feeb5cfe201023d.json","mobilemall-shop":"https://deo.shopeemobile.com/shopee/stm-sg-live/5067/asset-ID-live.b2cf0a7812111a0669c1b1b5cd02ee71.json","mobilemall-chatbroadcast":"https://deo.shopeemobile.com/shopee/stm-sg-live/5273/asset-ID-live.0d0df1ab1e3b9c0d31feb40bc8288a24.json","mobilemall-return":"https://deo.shopeemobile.com/shopee/stm-sg-live/5561/asset-ID-live.8cfbf24a70259ec4a1d6225da64e9903.json","mobilemall-flashsale":"https://deo.shopeemobile.com/shopee/stm-sg-live/7767/asset-ID-live.980d359cc539d7a436f92e26f4f99efa.json","mobilemall-orderlist":"https://deo.shopeemobile.com/shopee/stm-sg-live/7899/asset-ID-live.7a3adcb8452ce6e034ece983f3be2a71.json","mobilemall-bundledeal":"https://deo.shopeemobile.com/shopee/stm-sg-live/13359/asset-ID-live.bf2022c1ce5dd517090650cd33c7d3d0.json","mobilemall-sclp":"https://deo.shopeemobile.com/shopee/stm-sg-live/webfe-rp-assets/15071/asset-ID-live.7cc18980fa9cb26f71e58f920990005b.json","mobilemall-dailycheckin":["https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/dailycheckin/main.da1b97a52225512efaa3.css","https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/dailycheckin/main.cee88ffc30251dae80de.js"],"mobilemall-addondeal-aod":"https://deo.shopeemobile.com/shopee/stm-sg-live/16972/asset-ID-live.bde24a1544a24d71315671113fbcf2b4.json","mobilemall-addondeal-pwg":"https://deo.shopeemobile.com/shopee/stm-sg-live/17362/asset-ID-live.5e07e1cf0b247fcbb515e6d69dc2c7ae.json","mobilemall-addondeal-pwp":"https://deo.shopeemobile.com/shopee/stm-sg-live/17572/asset-ID-live.20d8c9161da4c7bc3fe7c93a9ba9381f.json","mobilemall-brandsale":"https://deo.shopeemobile.com/shopee/stm-sg-live/17857/asset-ID-live.90d7adedf318d4a99de22f9c6fd90440.json","mobilemall-flashsaleentrance":"https://deo.shopeemobile.com/shopee/stm-sg-live/17897/asset-ID-live.9ada0d2b5a7f2e44e141e2f0b2a67899.json","mobilemall-brandsaleentrance":"https://deo.shopeemobile.com/shopee/stm-sg-live/17966/asset-ID-live.86aefe71fbc883f59e2b2631ba9e13dc.json","mobilemall-smartflashsale":"https://deo.shopeemobile.com/shopee/stm-sg-live/18030/asset-ID-live.0b637f895eb6a684eb6b2b9a30b67951.json","mobilemall-smartflashsaleentrance":"https://deo.shopeemobile.com/shopee/stm-sg-live/18090/asset-ID-live.cec189635add8b95ed66214c3f121fa8.json","mobilemall-shopcustompage":"https://deo.shopeemobile.com/shopee/stm-sg-live/18904/asset-ID-live.624be001a95a621b726c2c80693bbfe7.json","mobilemall-useraccount":"https://deo.shopeemobile.com/shopee/stm-sg-live/22297/asset-ID-live.aa5233069787e60729a5bc452a4f2035.json","mobilemall-rcmd-cart-ymal":"https://deo.shopeemobile.com/shopee/stm-sg-live/23232/asset-ID-live.afd07f51442b4758268c99c255972b2c.json","mobilemall-homepage":"https://deo.shopeemobile.com/shopee/stm-sg-live/23412/asset-ID-live.febb2957413789e6f2166adb9b62c720.json","mobilemall-platformvouchers":"https://deo.shopeemobile.com/shopee/stm-sg-live/23679/asset-ID-live.50eed51e08cf0b154d5cfed18a171ebd.json","mobilemall-shopvouchers":"https://deo.shopeemobile.com/shopee/stm-sg-live/23860/asset-ID-live.9e84740713a2d956b810ef7d487785a9.json","mobilemall-sellervouchercard":"https://deo.shopeemobile.com/shopee/stm-sg-live/23942/asset-ID-live.8feb2fa3e1c0c8658c85731230cb76c8.json","mobilemall-pdpvoucherdrawer":"https://deo.shopeemobile.com/shopee/stm-sg-live/24038/asset-ID-live.26339b4acf7e84376a60794c2e079d3d.json","mobilemall-sellervoucher":"https://deo.shopeemobile.com/shopee/stm-sg-live/24128/asset-ID-live.029cbc7af73ef0a3153561f521d1e542.json","mobilemall-voucherpromotiontext":"https://deo.shopeemobile.com/shopee/stm-sg-live/24219/asset-ID-live.a335f85fabc72834a3ad23964dabc408.json","mobilemall-pagedpvoucherredemption":"https://deo.shopeemobile.com/shopee/stm-sg-live/24305/asset-ID-live.25c69d05169f1b42d34edda3c04aebf3.json","mobilemall-shoppagesellervoucherpreview":"https://deo.shopeemobile.com/shopee/stm-sg-live/24392/asset-ID-live.6ca0371ffe1d94bf92c11f1bc6568e0f.json","mobilemall-micrositepage":"https://deo.shopeemobile.com/shopee/stm-sg-live/25724/asset-ID-live.02f1abb2f625e023d6c47be88fa86a9a.json","mobilemall-ebcomponents-quiz":"https://deo.shopeemobile.com/shopee/stm-sg-live//30752/asset-ID-live.002b3bfea767b61a6be1ad3a263ed227.json","mobilemall-ebcomponents-voting":"https://deo.shopeemobile.com/shopee/stm-sg-live//31902/asset-ID-live.abab29ae04158ca94199d850a54032b2.json","mobilemall-formmanagement":"https://deo.shopeemobile.com/shopee/stm-sg-live/32378/asset-ID-live.a1b4b80f2430f1771fd217ebe3142d3a.json","mobilemall-coins":"https://deo.shopeemobile.com/shopee/stm-sg-live/32586/asset-ID-live.b0f3a42ab4462dcfddbe03c79ac15558.json","mobilemall-productdetailspage":"https://deo.shopeemobile.com/shopee/stm-sg-live/32724/asset-ID-live.01a88bdb68c150028255fac2e6aa48b4.json","mobilemall-rcmd-flash-sale-sold-out-page":"https://deo.shopeemobile.com/shopee/stm-sg-live/33206/asset-ID-live.a2fb0b8a013555d37c8f1c76fe5b0a95.json","mobilemall-returnevidence":"https://deo.shopeemobile.com/shopee/stm-sg-live/34362/asset-ID-live.451a1c3f36668b906e72bfb8025941ce.json","mobilemall-ebcomponents-mb":"https://deo.shopeemobile.com/shopee/stm-sg-live//34547/asset-ID-live.77e74854023c2a50ed4fc5c21af5a3a0.json","mobilemall-rcmd-category-module":"https://deo.shopeemobile.com/shopee/stm-sg-live/34643/asset-ID-live.ea2de58a12ccdf698eea63d833808810.json","mobilemall-martcategorylistpage":"https://deo.shopeemobile.com/shopee/stm-sg-live/35135/asset-ID-live.c6bdcfe3125493d6f3f22494b436ee16.json","mobilemall-rcmd-pdp-ftss":"https://deo.shopeemobile.com/shopee/stm-sg-live/35507/asset-ID-live.5cd2d2c12485daadc4a449b33a0223b1.json","mobilemall-rcmd-pdp-ymal":"https://deo.shopeemobile.com/shopee/stm-sg-live/35706/asset-ID-live.671f7fea2393482c94ca1792b76c0f1e.json","mobilemall-checkout":"https://deo.shopeemobile.com/shopee/stm-sg-live/36182/asset-ID-live.71a67ec52fa62066f03bb202baf9f59d.json","mobilemall-mart-categorylandingpage":"https://deo.shopeemobile.com/shopee/stm-sg-live/36475/asset-ID-live.6c16406b7f70990adf5b3af1d7b89f00.json","mobilemall-mart-dealspage":"https://deo.shopeemobile.com/shopee/stm-sg-live/36570/asset-ID-live.bfc31a6562e3b8f739cc7904c6eeb572.json","mobilemall-mart-homepage":"https://deo.shopeemobile.com/shopee/stm-sg-live/36665/asset-ID-live.3983dc5bdefad0a2d76fb4633d576c0e.json","mobilemall-rcmd-mart-recommendation-module":"https://deo.shopeemobile.com/shopee/stm-sg-live/39174/asset-ID-live.928821691fe43a96a43c5e671e3bec61.json","mobilemall-malllanding":"https://deo.shopeemobile.com/shopee/stm-sg-live/39369/asset-ID-live.0befb5cc82c4e01d2c22898781df5665.json","mobilemall-mallbrands":"https://deo.shopeemobile.com/shopee/stm-sg-live/39452/asset-ID-live.ae329afdc981f30fe6a2c4e770569d3c.json","mobilemall-mallcategories":"https://deo.shopeemobile.com/shopee/stm-sg-live/39557/asset-ID-live.7aa4e3fb133829289a48abe9044f2cea.json","mobilemall-rcmd-mart-buy-again-module":"https://deo.shopeemobile.com/shopee/stm-sg-live/39989/asset-ID-live.8ecaef63aeb43ef11fdffe24f8c33230.json","mobilemall-rcmd-mart-buy-again-page":"https://deo.shopeemobile.com/shopee/stm-sg-live/40037/asset-ID-live.48b29a2310b5ec582163e1b6ec5f9180.json","mobilemall-rcmd-pdp-ftss-page":"https://deo.shopeemobile.com/shopee/stm-sg-live/40597/asset-ID-live.88e59bbb8a21c00075dbe07221186202.json","mobilemall-rcmd-home-top-products-module":"https://deo.shopeemobile.com/shopee/stm-sg-live/40792/asset-ID-live.e7abf5d1f2f25e043671001e64101c39.json","mobilemall-rcmd-home-top-products-page":"https://deo.shopeemobile.com/shopee/stm-sg-live/40886/asset-ID-live.3483e92694b7080e28e0bce141bb99ad.json","mobilemall-pageitemrating":"https://deo.shopeemobile.com/shopee/stm-sg-live/41296/asset-ID-live.c8033aaaa11daa8a6e56aecdedde2233.json","mobilemall-pageratingreport":"https://deo.shopeemobile.com/shopee/stm-sg-live/41419/asset-ID-live.fadc8f9677609259ac7d70b4b8d58462.json","mobilemall-pagereplyrating":"https://deo.shopeemobile.com/shopee/stm-sg-live/41515/asset-ID-live.edaf7ba073847c36e60b561c175e848f.json","mobilemall-pageshoprating":"https://deo.shopeemobile.com/shopee/stm-sg-live/41610/asset-ID-live.0e9d2cfe1fbff5dc87e6d568f5b8a73b.json","mobilemall-rcmd-featured-collections-page":"https://deo.shopeemobile.com/shopee/stm-sg-live/41794/asset-ID-live.33ace949a9acb4d1d1977579cb52e96d.json","mobilemall-welcomepackage":"https://deo.shopeemobile.com/shopee/stm-sg-live/41887/asset-ID-live.dbae2201655aadd1a22d99fb476bdc28.json","mobilemall-productrating":"https://deo.shopeemobile.com/shopee/stm-sg-live/42071/asset-ID-live.1e257ded4b600b03f51a3cfdb212f22d.json","mobilemall-mart-navigation-bar":"https://deo.shopeemobile.com/shopee/stm-sg-live/42272/asset-ID-live.07c672cf06eb0d3293a7b5f57bb59043.json","mobilemall-mart-voucherlandingpage":"https://deo.shopeemobile.com/shopee/stm-sg-live/42557/asset-ID-live.e7d999d9e0a4ac9279e36425676a86af.json","mobilemall-rcmd-fsp-page":"https://deo.shopeemobile.com/shopee/stm-sg-live/42848/asset-ID-live.eb39576b80685ea92b8fe87a42e0082f.json","mobilemall-rcmd-featured-collections-module":"https://deo.shopeemobile.com/shopee/stm-sg-live/43042/asset-ID-live.bca1e9b51c3c710ccdf7c5614f49b8a6.json","user-microfe-identity-mobile-demo-1":"https://deo.shopeemobile.com/shopee/stm-sg-live/50236/asset-ID-live.c2426c2529b6b5a97d88deef23ba6726.json","user-microfe-identity-mobile-demo-2":"https://deo.shopeemobile.com/shopee/stm-sg-live/50337/asset-ID-live.9c647ac641c6e4bb0ebbb1edd5366937.json","user-microfe-identity-mobile-noti-email-subscription-center":"https://deo.shopeemobile.com/shopee/stm-sg-live/51104/asset-ID-live.a89039d0899f406959d46adf42209eb0.json","mobilemall-anticrawler":"https://deo.shopeemobile.com/shopee/stm-sg-live/51304/asset-ID-live.d303f15cca18e5c4d8b78d40458338e6.json","mobilemall-returnlegacy":"https://deo.shopeemobile.com/shopee/stm-sg-live//51584/asset-ID-live.67b7f26b6241ff05af372570819425a5.json","mobilemall-captcha":"https://deo.shopeemobile.com/shopee/stm-sg-live/51776/asset-ID-live.61200274c94409e6d390ae8e86191fd1.json","mobilemall-invoicepage":"https://deo.shopeemobile.com/shopee/stm-sg-live/52081/asset-ID-live.e74595e80cd568cdd5dfd861294cc5cb.json","mobilemall-captchapopup":"https://deo.shopeemobile.com/shopee/stm-sg-live/52158/asset-ID-live.091328d62e5d7da82cb78c8202b489f9.json","mobilemall-dd-landing-page":"https://deo.shopeemobile.com/shopee/stm-sg-live/52697/asset-ID-live.a6a5fa4ed0b7586be6615ae5fe9aab25.json","mobilemall-dd-home-module":"https://deo.shopeemobile.com/shopee/stm-sg-live/52730/asset-ID-live.93b9de5c743e50a7db238d5543b6ac02.json","mobilemall-rcmd-mall-just-for-you-module":"https://deo.shopeemobile.com/shopee/stm-sg-live/53317/asset-ID-live.53e17643146b01236e56f07a3e573597.json","mobilemall-rcmd-mall-just-for-you-page":"https://deo.shopeemobile.com/shopee/stm-sg-live/53415/asset-ID-live.0ceaa63e29ef9583950851d7ae2edaf8.json","mobilemall-collectionfe-productcollection":"https://deo.shopeemobile.com/shopee/stm-sg-live/53978/asset-ID-live.aeb0ea0d83ca2db36186e8994e4997c2.json","mobilemall-collectionfe-product-clp":"https://deo.shopeemobile.com/shopee/stm-sg-live/54181/asset-ID-live.0349b81a1ac51cca2c5d7d03806be417.json","mobilemall-collectionfe-shop-clp":"https://deo.shopeemobile.com/shopee/stm-sg-live/54276/asset-ID-live.5d43cd2154c5daf96d66ca6cbbab6e93.json","mobilemall-collectionfe-entry-clp":"https://deo.shopeemobile.com/shopee/stm-sg-live/54367/asset-ID-live.2a04c7872bfa29b0b646962d29d8b168.json","mobilemall-collectionfe-allcampaigns":"https://deo.shopeemobile.com/shopee/stm-sg-live/54562/asset-ID-live.7353a13f6f4d82f578af7c8dfaf63177.json","mobilemall-antifraudverifyqr":"https://deo.shopeemobile.com/shopee/stm-sg-live/54658/asset-ID-live.802772efad09bb71f56b488a717aaa90.json","mobilemall-antifraudverifylink":"https://deo.shopeemobile.com/shopee/stm-sg-live/54754/asset-ID-live.1a5f93db9d2d00051ee1d2191b563c3e.json","mobilemall-antifraudivs":"https://deo.shopeemobile.com/shopee/stm-sg-live/55103/asset-ID-live.ded6766e8778334449e2a888b4b96873.json","mobilemall-antifraudverifyemaillink":"https://deo.shopeemobile.com/shopee/stm-sg-live/55390/asset-ID-live.fd669b2ad83ac9d5127cd4cdda1b55e2.json","mobilemall-antifraudverifylinkreceiver":"https://deo.shopeemobile.com/shopee/stm-sg-live/57249/asset-ID-live.d2540207fb27d3e4034c4695ed5b0301.json","mobilemall-antifraudverifyemaillinkreceiver":"https://deo.shopeemobile.com/shopee/stm-sg-live/57346/asset-ID-live.c1d74635e4ccc805be5558bb957eda1e.json","mobilemall-categoryfe":"https://deo.shopeemobile.com/shopee/stm-sg-live/57458/asset-ID-live.25711a467d8d735156d832d532dd2c5c.json","mobilemall-search-intermediate-page":"https://deo.shopeemobile.com/shopee/stm-sg-live/59287/asset-ID-live.f51155172b9e73e1256d40c1af5779c2.json","mobilemall-homepagefe":"https://deo.shopeemobile.com/shopee/stm-sg-live/59761/asset-ID-live.4bb28d6385a3c3564911d324e1484157.json","mobilemall-seo-brand-page":"https://deo.shopeemobile.com/shopee/stm-sg-live/60240/asset-ID-live.2764f38bc5e9af82c598fd3abe1b61a8.json","mobilemall-search-mart-page":"https://deo.shopeemobile.com/shopee/stm-sg-live/60442/asset-ID-live.30f040cb3c8bca4b3ed38efdbeee59fe.json","mobilemall-search-result-page":"https://deo.shopeemobile.com/shopee/stm-sg-live/60918/asset-ID-live.93de3c923a0203770bedef9c5a1a22f2.json","mobilemall-flashsalesoldout":"https://deo.shopeemobile.com/shopee/stm-sg-live/31328/asset-ID-live.e992488f3c90c89a1e988de46cb090f2.json","mobilemall-rcmd-pdp-hot-sales":"https://deo.shopeemobile.com/shopee/stm-sg-live/43710/asset-ID-live.2245aa9588ddf60bb17b689ddf308d5c.json","mobilemall-search-srp-user":"https://deo.shopeemobile.com/shopee/stm-sg-live/44470/asset-ID-live.aecd211f38908d6a8892501a20065bb6.json","VOUCHER_CARD_MANIFEST":{"live":"vouchercard-v0.21.0"},"mobilemall-search-user-page":"https://deo.shopeemobile.com/shopee/stm-sg-live/44670/asset-ID-live.faa63d6c8e4addc8d9c3487eda4c6ced.json","mobilemall-rcmd-home-top-products-list-page":"https://deo.shopeemobile.com/shopee/stm-sg-live/45156/asset-ID-live.934a2900976a3b04de767353f11d451a.json","user-microfe-account-mobile-demo":"https://deo.shopeemobile.com/shopee/stm-sg-live/48996/asset-ID-live.6228eec2dfd7625baf620a7cc97ed01a.json","mobilemall-returndetail":"https://deo.shopeemobile.com/shopee/stm-sg-live/47493/asset-ID-live.b17b59c9122b2fd013290bc571420d2b.json","mobilemall-antifrauderror":"https://deo.shopeemobile.com/shopee/stm-sg-live/47263/asset-ID-live.3fb84dd9a31be33bf4658bed61fde63a.json","user-microfe-account-mobile-demo-2":"https://deo.shopeemobile.com/shopee/stm-sg-live/50049/asset-ID-live.540d3e3f7be509f5819197ff93ac2ef1.json","mobilemall-vouchermarthomepage":"https://deo.shopeemobile.com/shopee/stm-sg-live/49379/asset-ID-live.ffc9fe17a939d19c5ba9efe752362426.json","mobilemall-vouchermartlandingpage":"https://deo.shopeemobile.com/shopee/stm-sg-live/49471/asset-ID-live.ba7fef990e94caab5e2bca0e3e7f0f42.json","mobilemall-rcmd-featured-collections-list-page":"https://deo.shopeemobile.com/shopee/stm-sg-live/49286/asset-ID-live.56bffae7d53d46781878dc2e3fa2ef5e.json","mobilemall-returnrequestissue":"https://deo.shopeemobile.com/shopee/stm-sg-live/50433/asset-ID-live.92af9b607b6b1ee4e5ea8b3a9bfaa8ef.json","mobilemall-returnrequestsummary":"https://deo.shopeemobile.com/shopee/stm-sg-live/50628/asset-ID-live.89a3622a0f4c4f5dfa17c72eba5eb54d.json","mobilemall-returnrequestitemselect":"https://deo.shopeemobile.com/shopee/stm-sg-live/50534/asset-ID-live.d17c99dbd062ef4fb03856ec3eeb7e88.json","user-microfe-account-mobile-verify-account-seller-main-sub":{"version":1,"assets":{},"metaAppDetails":{},"legacy":{"js":["https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/account/runtime.8e805b15ef6cb8aa3765.legacy.js","https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/account/vendor.d9dacc8de07cc0afba4f.legacy.js","https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/account/common.bffd39d927a718637659.legacy.js","https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/account/user-microfe-account-mobile-verify-account-seller-main-sub.3a7ab19b1fae66a906e9.legacy.js"],"css":["https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/account/user-microfe-account-mobile-verify-account-seller-main-sub.bbb1d0e27bfc7c86c4f3.legacy.css"]},"modern":{"js":["https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/account/runtime.30f40a5afcfeadbe652c.js","https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/account/vendor.2a8f0855480665eb7acd.js","https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/account/common.8498d35d7126c25ca309.js","https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/account/user-microfe-account-mobile-verify-account-seller-main-sub.fde4783e312614b37bb1.js"],"css":["https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/account/user-microfe-account-mobile-verify-account-seller-main-sub.9234ae22c31f99d9f43c.css"]}}}
        </script>
        <style data-href="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/mobilemall-productdetailspage.934c5d9ac545c1970e8f.css">
            .stardust-popup {
                align-items: center;
                display: flex
            }

            .stardust-popup,.stardust-popup__overlay {
                height: 100%;
                left: 0;
                position: fixed;
                top: 0;
                width: 100%
            }

            .stardust-popup__overlay {
                background: rgba(0,0,0,.4)
            }

            .stardust-popup__dialog {
                background: #fff;
                border-radius: 4px;
                margin: auto 34px
            }

            .stardust-popup__dialog--wrapper {
                margin: 0 auto;
                max-width: 375px;
                width: 100%;
                z-index: 2
            }

            .stardust-popup__dialog--wrapper-top {
                padding: 20px 20px 0
            }

            .stardust-popup-title {
                color: rgba(0,0,0,.87);
                font-size: 16px;
                text-align: center
            }

            .stardust-popup-content,.stardust-popup-title {
                font-family: -apple-system,Helvetica Neue,Helvetica,Roboto,Droid Sans,Arial,sans-serif;
                font-weight: 400
            }

            .stardust-popup-content {
                color: rgba(0,0,0,.54);
                font-size: 14px;
                text-align: left
            }

            .stardust-popup-buttons {
                align-content: space-between;
                display: flex;
                margin-top: 26px
            }

            .stardust-popup-button {
                border-top: 1px solid rgba(0,0,0,.09);
                color: #ee4d2d;
                cursor: pointer;
                flex: 1 100%;
                font-family: -apple-system,Helvetica Neue,Helvetica,Roboto,Droid Sans,Arial,sans-serif;
                font-size: 16px;
                font-weight: 400;
                height: 46px;
                line-height: 46px;
                text-align: center;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none
            }

            .stardust-popup-button:nth-child(2) {
                border-left: 1px solid rgba(0,0,0,.09)
            }

            @keyframes movement {
                0% {
                    transform: translateY(2px)
                }

                50% {
                    transform: translateY(-2px)
                }

                to {
                    transform: translateY(2px)
                }
            }

            .stardust-spinner--hidden {
                display: none
            }

            .stardust-spinner__background {
                align-content: center;
                align-items: center;
                background-color: rgba(0,0,0,.4);
                display: flex;
                height: 100%;
                justify-content: center;
                left: 0;
                position: fixed;
                top: 0;
                width: 100%
            }

            .stardust-spinner__background--no-overlay {
                background-color: transparent;
                height: auto;
                position: static;
                width: auto
            }

            .stardust-spinner__background--no-overlay .stardust-spinner__main {
                border-radius: 0;
                padding: 0
            }

            .stardust-spinner__main {
                background: #fff;
                border-radius: 1rem;
                color: #000;
                flex: 0 1 auto;
                padding: 1rem
            }

            .stardust-spinner__spinner {
                animation: movement .4s linear infinite
            }

            .stardust-spinner__spinner:nth-child(2) {
                animation-delay: .1s
            }

            .stardust-spinner__spinner:nth-child(3) {
                animation-delay: .2s
            }

            .with-loading-wrapper>.stardust-spinner>.stardust-spinner__background {
                background-color: #999;
                z-index: 20000
            }

            .with-loading-wrapper--transparent-background>.stardust-spinner>.stardust-spinner__background {
                background-color: rgba(0,0,0,.4);
                z-index: 20000
            }

            .stardust-toast {
                align-items: center;
                bottom: 0;
                display: flex;
                height: 100%;
                justify-content: center;
                left: 0;
                pointer-events: all;
                position: absolute;
                right: 0;
                top: 0;
                transition: opacity .1s cubic-bezier(.4,0,.6,1);
                width: 100%;
                z-index: 1
            }

            .stardust-toast--hidden {
                opacity: 0;
                pointer-events: none
            }

            .stardust-toast__container {
                align-items: center;
                background-color: rgba(0,0,0,.65);
                border-radius: 7px;
                color: #fff;
                cursor: default;
                display: flex;
                flex-direction: column;
                font-family: -apple-system,Helvetica Neue,Helvetica,Roboto,Droid Sans,Arial,sans-serif;
                font-size: 14px;
                font-weight: 400;
                justify-content: space-around;
                padding: 15px;
                pointer-events: all;
                pointer-events: inherit;
                text-align: center
            }

            .stardust-toast__icon svg {
                height: 30px;
                margin-bottom: 7px;
                width: 30px
            }

            .stardust-toast__text {
                display: -webkit-box;
                overflow: hidden;
                text-overflow: ellipsis;
                -webkit-box-orient: vertical;
                -webkit-line-clamp: 2;
                word-break: break-all;
                word-wrap: break-word
            }

            .stardust-carousel,.stardust-carousel__item-list-wrapper {
                height: 100%;
                position: relative;
                width: 100%
            }

            .stardust-carousel__item-list-wrapper {
                box-sizing: border-box;
                overflow-x: hidden
            }

            .stardust-carousel__item-list {
                bottom: 0;
                display: flex;
                height: 100%;
                left: 0;
                margin: 0;
                overflow: hidden;
                padding: 0;
                position: absolute;
                right: 0;
                top: 0;
                touch-action: pan-y
            }

            .stardust-carousel__item {
                align-items: center;
                align-self: center;
                display: flex;
                flex-shrink: 0;
                height: 100%;
                justify-content: center;
                list-style: none;
                overflow: hidden
            }

            .stardust-carousel__item-inner-wrapper {
                height: 100%;
                width: 100%
            }

            .stardust-carousel__item-inner-wrapper--hide {
                display: none
            }

            .stardust-carousel:hover .stardust-carousel__arrow {
                opacity: 1
            }

            .stardust-carousel__arrow {
                align-items: center;
                border-radius: 50%;
                box-shadow: 0 1px 8px 0 rgba(0,0,0,.09);
                color: rgba(0,0,0,.87);
                cursor: pointer;
                display: inline-flex;
                font-size: 20px;
                height: 20px;
                justify-content: center;
                line-height: 20px;
                opacity: 0;
                position: absolute;
                text-align: center;
                top: 50%;
                transform: translateY(-50%);
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
                width: 20px;
                fill: rgba(0,0,0,.87);
                background-color: #fff;
                transition: opacity .3s ease
            }

            .stardust-carousel__arrow>svg {
                color: #ee4d2d;
                flex: 0 1 auto;
                height: 75%;
                width: 75%
            }

            .stardust-carousel__arrow:hover {
                box-shadow: 0 1px 12px 0 rgba(0,0,0,.09)
            }

            .stardust-carousel__arrow:active {
                box-shadow: 0 1px 5px 0 rgba(0,0,0,.09)
            }

            .stardust-carousel__arrow--type-2 {
                opacity: 1
            }

            .stardust-carousel__arrow--prev {
                left: -10px
            }

            .stardust-carousel__arrow--next {
                right: -10px
            }

            .stardust-carousel__arrow--disabled>svg {
                fill: rgba(0,0,0,.12)
            }

            .stardust-carousel__dots {
                bottom: 1rem;
                left: 50%;
                position: absolute;
                text-align: center;
                transform: translate(-50%);
                transition: opacity .5s ease;
                width: 100%
            }

            .stardust-carousel__dot {
                background-color: hsla(0,0%,100%,.4);
                border: 1px solid hsla(0,0%,54%,.4);
                border-radius: 50%;
                cursor: pointer;
                display: inline-block;
                height: .5rem;
                opacity: 1;
                width: .5rem
            }

            .stardust-carousel__dot:not(:first-child) {
                margin-left: .5rem
            }

            .stardust-carousel__dot--active {
                background-color: #ee4d2d;
                border-color: #ee4d2d;
                opacity: 1
            }

            .stardust-carousel__indexing {
                background: #fff;
                border: 1px solid rgba(0,0,0,.2);
                border-radius: 12.4px;
                bottom: 10px;
                color: rgba(0,0,0,.65);
                color: #000;
                font-size: 14px;
                opacity: .65;
                padding: 3px 10px;
                position: absolute;
                right: 10px
            }

            .stardust-carousel__tabs {
                align-content: center;
                bottom: 0;
                display: flex;
                height: 30px;
                position: absolute;
                width: 100%
            }

            .stardust-carousel__tab {
                background-color: hsla(0,0%,100%,.5);
                cursor: pointer;
                flex: 1 0 0;
                font-size: 12px;
                overflow: hidden;
                text-align: center
            }

            .stardust-carousel__tab--active {
                background-color: #ee4d2d;
                color: #fff
            }

            .stardust-carousel__tab-name {
                line-height: 30px
            }

            .w7ks6r {
                background-color: #fff;
                cursor: pointer;
                display: flex;
                padding: 1rem .875rem 1rem .75rem;
                -webkit-text-decoration: none;
                text-decoration: none
            }

            .xccTfr {
                flex-grow: 1;
                margin-left: .75rem;
                margin-right: 1rem
            }

            .SlwkHx {
                color: rgba(0,0,0,.87);
                margin-bottom: .25rem
            }

            .PLjDaD,.SlwkHx {
                font-size: .875rem
            }

            .PLjDaD {
                color: rgba(0,0,0,.54);
                word-break: break-word
            }

            .jjGWyx {
                height: 1.25rem;
                width: 1.25rem
            }

            .yseyPt {
                align-self: center;
                height: .6875rem;
                width: .375rem
            }

            .SarUkj {
                padding-bottom: 100%;
                position: relative;
                width: 100%
            }

            .IMAW1w,.ltOSWU {
                height: 100%;
                left: 0;
                position: absolute;
                top: 0;
                width: 100%
            }

            .IMAW1w {
                display: block;
                object-fit: contain;
                object-position: center
            }

            .ltOSWU {
                align-items: center;
                display: flex;
                justify-content: center
            }

            .EoYuuW {
                background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23e5e4e4' viewBox='0 0 54 61'%3E%3Cpath stroke='none' d='M51.2 16.9H38.7C38.7 11.6 36 .6 27 .5 17.4.4 15.2 12.4 15.2 16.9H2.8c-3.4 0-2.7 3.4-2.7 3.4l2.4 33s-.1 7.3 6.3 7.5h36.5c6.2-.4 6.3-7.5 6.3-7.5l2.4-33c0-.1.5-3.5-2.8-3.4M27.1 4.2c7.1.2 7.9 11.7 7.7 12.6H19.1c-.1-.9.4-12.4 8-12.6m9.1 44.6c-1 1.7-2.7 3-5 3.7-1.2.4-2.4.5-3.6.5-3.2 0-6.5-1.1-9.3-3.3-.8-.6-1-1.5-.5-2.3.2-.4.7-.7 1.2-.8.4-.1.9 0 1.2.3 3.2 2.4 8.3 4 11.9 1.6 1.4-.9 2.1-2.7 1.6-4.3s-2.2-2.7-3.5-3.4c-1-.6-2.1-1-3.3-1.4-.9-.3-1.9-.7-2.9-1.2q-3.6-1.8-4.8-4.2c-1.2-2.3-.6-5.4 1.4-7.5 3.6-3.8 10-3.2 14-.4.9.6.9 1.7.4 2.5s-1.4.9-2.2.4c-2-1.4-4.4-2-6.4-1.7s-4.7 2-4.4 4.6c.2 1.5 2 2.6 3.3 3.3.8.4 1.5.7 2.3.9 4.3 1.3 7.2 3.3 8.6 5.7 1.2 2.1 1.2 4.9 0 7'/%3E%3C/svg%3E");
                background-position: 50%;
                background-repeat: no-repeat;
                background-size: contain;
                height: 60px;
                max-height: 100%;
                max-width: 100%;
                width: 60px
            }

            .WgnznX {
                left: 0
            }

            .WgnznX,.cPpNen {
                bottom: 0;
                position: absolute;
                width: 100%
            }

            .cPpNen {
                background-color: rgba(208,1,27,.9);
                color: #fff;
                font-size: 16px;
                font-weight: 300;
                height: 40px;
                line-height: 40px;
                text-align: center;
                vertical-align: middle;
                z-index: 1
            }

            .Xyi3YC {
                position: relative
            }

            .Xyi3YC img {
                vertical-align: bottom
            }

            .ihZUU6 {
                visibility: hidden
            }

            .LcYzP1 {
                align-items: center;
                bottom: 0;
                display: flex;
                height: 100%;
                justify-content: center;
                left: 0;
                position: absolute;
                right: 0;
                top: 0;
                width: 100%
            }

            .H_3FFk {
                opacity: 0
            }

            .OO1rEg {
                opacity: 1;
                transition: opacity .2s ease
            }

            .qlQujO {
                background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23e5e4e4' viewBox='0 0 54 61'%3E%3Cpath stroke='none' d='M51.2 16.9H38.7C38.7 11.6 36 .6 27 .5 17.4.4 15.2 12.4 15.2 16.9H2.8c-3.4 0-2.7 3.4-2.7 3.4l2.4 33s-.1 7.3 6.3 7.5h36.5c6.2-.4 6.3-7.5 6.3-7.5l2.4-33c0-.1.5-3.5-2.8-3.4M27.1 4.2c7.1.2 7.9 11.7 7.7 12.6H19.1c-.1-.9.4-12.4 8-12.6m9.1 44.6c-1 1.7-2.7 3-5 3.7-1.2.4-2.4.5-3.6.5-3.2 0-6.5-1.1-9.3-3.3-.8-.6-1-1.5-.5-2.3.2-.4.7-.7 1.2-.8.4-.1.9 0 1.2.3 3.2 2.4 8.3 4 11.9 1.6 1.4-.9 2.1-2.7 1.6-4.3s-2.2-2.7-3.5-3.4c-1-.6-2.1-1-3.3-1.4-.9-.3-1.9-.7-2.9-1.2q-3.6-1.8-4.8-4.2c-1.2-2.3-.6-5.4 1.4-7.5 3.6-3.8 10-3.2 14-.4.9.6.9 1.7.4 2.5s-1.4.9-2.2.4c-2-1.4-4.4-2-6.4-1.7s-4.7 2-4.4 4.6c.2 1.5 2 2.6 3.3 3.3.8.4 1.5.7 2.3.9 4.3 1.3 7.2 3.3 8.6 5.7 1.2 2.1 1.2 4.9 0 7'/%3E%3C/svg%3E");
                background-position: 50%;
                background-repeat: no-repeat;
                background-size: contain;
                height: 60px;
                max-height: 100%;
                max-width: 100%;
                width: 60px
            }

            .MvsmeB .JLwqOd {
                bottom: 0;
                right: 0
            }

            .JLwqOd,.MvsmeB .JLwqOd {
                left: 0;
                opacity: 0;
                pointer-events: none;
                position: absolute;
                top: 0;
                z-index: -1
            }

            .JLwqOd,._JU2rg {
                height: 100%;
                width: 100%
            }

            ._JU2rg {
                position: relative
            }

            .SKaJ5r {
                align-items: center;
                background: rgba(0,0,0,.26);
                border-bottom-right-radius: 50%;
                border-top-right-radius: 50%;
                display: flex;
                height: 44px;
                justify-content: center;
                position: absolute;
                top: calc(50% - 22px);
                width: 44px
            }

            .stardust-icon {
                stroke: currentColor;
                fill: currentColor;
                height: 1em;
                width: 1em
            }

            .product-video__main-image {
                position: relative
            }

            .product-video__main-image,.product-video__video {
                cursor: pointer;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none
            }

            .product-video__video {
                flex: 0 1 auto;
                height: 100%;
                width: 100%;
                -webkit-tap-highlight-color: transparent
            }

            .product-video__video::-webkit-media-controls-overlay-play-button,.product-video__video::-webkit-media-controls-rewind-button {
                display: none
            }

            .product-video__video::-webkit-media-controls-start-playback-button {
                -webkit-appearance: none;
                opacity: 0
            }

            .product-video__play-button,.product-video__replay-button {
                cursor: pointer;
                left: 50%;
                position: absolute;
                top: 50%;
                transform: translate(-2.3125rem,-2.3125rem);
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none
            }

            .product-video__play-button.stardust-icon,.product-video__replay-button.stardust-icon {
                height: 4.625rem;
                width: 4.625rem
            }

            .product-video__error {
                background-position: 50%;
                background-repeat: no-repeat;
                background-size: contain;
                flex: 0 1 auto;
                height: 100%;
                width: 100%
            }

            .product-video__error-mask {
                align-items: center;
                background-color: hsla(0,0%,100%,.9);
                display: flex;
                flex-direction: column;
                height: 100%;
                justify-content: center;
                width: 100%
            }

            .product-video__error-icon {
                cursor: not-allowed;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none
            }

            .product-video__error-icon.stardust-icon {
                color: #ee4d2d;
                height: 4.625rem;
                width: 4.625rem
            }

            .product-video__error-text {
                color: #ee4d2d;
                font-size: .875rem;
                line-height: 1.125rem;
                padding: 1.875rem 3.75rem 0;
                text-align: center;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
                width: 100%
            }

            .ucOt1C {
                height: 1px;
                opacity: 0;
                position: absolute;
                width: 1px
            }

            .mckFYA {
                border: 1px solid transparent;
                border-radius: 2px;
                box-sizing: border-box;
                margin-left: 8px;
                width: calc(22.22222vw - 8.88889px)
            }

            .t4sBog {
                background-color: #fff;
                border: 1px solid #ee4d2d;
                color: #ee4d2d
            }

            .gR3ufw {
                width: 8px
            }

            .n3HUw1 {
                display: flex;
                flex-direction: column;
                width: 100%
            }

            .IHDLnA {
                overflow-y: scroll;
                width: 100%;
                -webkit-overflow-scrolling: touch;
                background: #fff;
                margin-bottom: 8px
            }

            .IHOO97 {
                display: flex;
                padding: .6875rem 0;
                width: 100%
            }

            .IHOO97 * {
                flex-shrink: 0
            }

            .RUHAHe {
                align-items: center;
                background: #000;
                bottom: 0;
                display: flex;
                height: 32px;
                justify-content: center;
                opacity: .75;
                position: absolute;
                width: 100%;
                z-index: 1
            }

            .mP1cO1 {
                background: url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/c2cb044a1cd2e503857c.png) 50% no-repeat;
                background-size: contain;
                display: inline-block;
                height: 12px;
                margin-right: 6px;
                width: 8px
            }

            .mP1cO1.l6poyQ {
                background: url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/80c590e1d90d4f6d2a60.png) 50% no-repeat;
                background-size: contain
            }

            .KepJKO {
                color: #fff;
                font-weight: 500;
                text-transform: capitalize
            }

            .nkYyoS {
                overflow: auto;
                padding: 0 5px;
                word-break: break-word
            }

            .A0OaWY {
                margin-top: 6px
            }

            .product-carousel {
                display: block;
                margin-top: -2.75rem;
                position: relative;
                z-index: 1
            }

            .product-carousel:before {
                content: "";
                display: block;
                padding-top: 100%
            }

            .product-carousel--long {
                position: relative
            }

            .product-carousel--long:before {
                content: "";
                display: block;
                padding-top: 133.33333%
            }

            .product-carousel .stardust-carousel {
                bottom: 0;
                left: 0;
                overflow: hidden;
                position: absolute;
                right: 0;
                top: 0
            }

            .product-carousel .stardust-carousel__item-list-wrapper {
                height: 100%
            }

            .product-carousel .stardust-carousel__item-list {
                height: 100%!important
            }

            .product-carousel .stardust-carousel__item {
                height: 100%;
                overflow: hidden
            }

            .product-carousel .stardust-carousel__item img {
                object-fit: contain
            }

            .product-carousel .stardust-carousel__item .product-carousel__item--adult {
                object-fit: scale-down
            }

            .product-carousel .stardust-carousel__dots {
                text-align: center;
                width: 100%
            }

            .product-carousel__item {
                height: 100%;
                max-height: 100%;
                max-width: 100%;
                overflow: hidden
            }

            .product-carousel__unavailable {
                align-items: center;
                background: rgba(0,0,0,.8);
                border-radius: 80px;
                color: #fff;
                display: flex;
                height: 80px;
                justify-content: center;
                left: 50%;
                margin-left: -40px;
                margin-top: -40px;
                position: absolute;
                text-align: center;
                top: 50%;
                width: 80px;
                z-index: 2
            }

            .product-carousel__unavailable-label {
                flex: 0 1 auto;
                line-height: 1.3125rem;
                text-align: center;
                text-transform: uppercase;
                width: 40px
            }

            .product-carousel__unavailable--unavailable-models,.product-carousel__unavailable--unlisted {
                height: 150px;
                margin-left: -75px;
                margin-top: -75px;
                width: 150px
            }

            .product-carousel__unavailable-label--unavailable-models,.product-carousel__unavailable-label--unlisted {
                width: unset
            }

            .product-carousel__campaign-overlay {
                bottom: 0;
                height: 100%;
                left: 0;
                position: absolute;
                right: 0;
                top: 0;
                width: 100%
            }

            .product-carousel__campaign-overlay--1212 {
                height: 36px;
                right: auto;
                top: auto;
                width: 112px;
                z-index: 1
            }

            .MkcJt4 {
                overflow: hidden;
                position: relative
            }

            .ksNo1m {
                background-color: #fff;
                color: rgba(0,0,0,.87);
                font-size: .75rem;
                padding: .5rem
            }

            .ksNo1m span {
                font-weight: 500
            }

            .EutKDd {
                background: rgba(0,0,0,.86);
                border-radius: .6875rem;
                bottom: .5rem;
                color: #fff;
                left: .75rem;
                padding: .1875rem .5rem;
                position: absolute
            }

            .JKxwIc {
                opacity: 0;
                transition: opacity .4s ease
            }

            .H4_Umq {
                opacity: 1
            }

            .BbHxZ3.badge__shopee_mart,.XZcuDS.badge__official-shop {
                padding: 0
            }

            .jFttMC {
                font-size: .75rem;
                position: relative;
                width: 2.25rem
            }

            .jvXqN0 {
                left: 0;
                top: 0;
                width: 2.25rem
            }

            .jvXqN0,.uFKQP9 {
                position: absolute
            }

            .uFKQP9 {
                left: 50%;
                top: 50%;
                transform: translate(-50%,-50%);
                white-space: nowrap
            }

            .bPFkLZ {
                bottom: 0;
                left: 0;
                right: 0;
                top: 0;
                z-index: 2
            }

            .bPFkLZ,.bPFkLZ .HqR4t8 {
                align-items: center;
                display: flex;
                justify-content: center;
                position: absolute
            }

            .bPFkLZ .HqR4t8 {
                background-color: rgba(0,0,0,.65);
                border-radius: 5rem;
                color: #fff;
                font-size: .75rem;
                height: 3.75rem;
                line-height: .875rem;
                max-width: calc(100% - 5rem);
                min-width: 3.875rem;
                text-align: center
            }

            .bPFkLZ .lROqCL {
                border-radius: 6.25rem;
                max-width: calc(100% - 4.5rem);
                min-width: 4.1875rem
            }

            .bPFkLZ .kgtbTm {
                border-radius: 6.25rem;
                max-width: calc(100% - 3.625rem);
                min-width: 5.125rem
            }

            .bPFkLZ .V1LhHS {
                display: -webkit-box;
                overflow: hidden;
                text-overflow: ellipsis;
                -webkit-box-orient: vertical;
                -webkit-line-clamp: 2
            }

            .Ad2onj.badge__horizontal {
                background-color: #fff;
                border: 1px solid #ee4d2d;
                border-radius: 1px;
                padding: .09375rem .25rem
            }

            .theme--ofs .Ad2onj.badge__horizontal,.theme--s-mart .Ad2onj.badge__horizontal {
                border-color: #2b1965
            }

            .uRczFg {
                color: #ee4d2d;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap
            }

            .theme--ofs .uRczFg,.theme--s-mart .uRczFg {
                color: #2b1965
            }

            .LmbMns {
                align-items: center;
                display: inline-flex;
                justify-content: center;
                line-height: .875rem;
                margin: 0 .25rem 0 0;
                max-width: 100%
            }

            .LmbMns,.y8vAB8 {
                font-size: .625rem;
                height: 1rem
            }

            .y8vAB8 {
                background-color: #ee4d2d;
                border: 0;
                border-radius: .5rem .5rem .5rem 0;
                box-sizing: border-box;
                color: #fff;
                display: inline-block;
                line-height: 1rem;
                min-width: 1.875rem;
                padding: 0 .25rem;
                text-align: center;
                text-transform: none
            }

            .EbIClg {
                border: 1px solid #ee4d2d;
                color: #ee4d2d;
                font-size: 10px;
                line-height: .875rem;
                overflow: hidden;
                padding: 0 3px;
                text-overflow: ellipsis;
                white-space: nowrap
            }

            .aQYdBF {
                border: .0625rem solid;
                border-radius: .125rem;
                box-sizing: border-box;
                display: flex
            }

            .oyo8zY {
                color: #fff;
                flex-grow: 1;
                flex-shrink: 1
            }

            .oyo8zY,.ueZLsi {
                font-size: .625rem;
                line-height: .75rem;
                overflow: hidden;
                padding: .0625rem .25rem;
                text-overflow: ellipsis;
                white-space: nowrap
            }

            .ueZLsi {
                align-items: center;
                display: flex;
                flex-shrink: 0;
                position: relative
            }

            .ueZLsi .NXJD8d {
                border-right: 5px solid transparent;
                border-top: 5px solid;
                height: 0;
                left: -.0625rem;
                position: absolute;
                top: -.0625rem;
                width: 0
            }

            .OwzXc9 {
                color: #ee4d2d;
                font-size: .625rem;
                line-height: .75rem
            }

            .WOxHZ9 {
                color: rgba(0,0,0,.87);
                -webkit-user-select: text;
                -moz-user-select: text;
                user-select: text;
                word-break: break-word
            }

            .WOxHZ9>.badge__official-shop {
                margin-right: .5rem
            }

            .WOxHZ9>span {
                vertical-align: middle
            }

            .vfQm3e {
                padding-left: .375rem;
                vertical-align: -.0625rem
            }

            .DIKlen {
                display: flex;
                float: right;
                margin-bottom: .25rem
            }

            .DIKlen>.badge-text {
                margin-left: .25rem
            }

            .nx5rVB {
                display: inline-flex;
                margin-right: .5rem;
                vertical-align: middle
            }

            .nx5rVB>.badge__horizontal {
                font-size: .75rem;
                height: 1rem;
                line-height: .875rem;
                margin-bottom: 0;
                margin-top: 0
            }

            .Vqrakl {
                margin-bottom: .1875rem
            }

            .G6hhEE {
                align-items: flex-start;
                display: flex;
                margin-top: .625rem
            }

            .qksVIt {
                flex-shrink: 0;
                margin-bottom: .1875rem
            }

            .ViQfDB {
                color: #ee4d2d;
                flex-shrink: 0;
                margin-right: .75rem;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap
            }

            .theme--ofs .ViQfDB,.theme--s-mart .ViQfDB {
                color: #2b1965!important
            }

            .ODJsR8 {
                align-items: center;
                color: rgba(0,0,0,.26);
                display: flex;
                font-weight: 200;
                margin-top: .125rem;
                -webkit-text-decoration: line-through;
                text-decoration: line-through
            }

            .zhk4nq {
                display: inline-block;
                height: unset
            }

            .OwJYsX,.zhk4nq {
                overflow: hidden
            }

            .C8JtOq {
                max-width: 100%
            }

            .ux2deQ {
                align-items: center;
                display: flex;
                flex-grow: 1;
                flex-shrink: 1;
                flex-wrap: wrap;
                height: 1rem;
                margin-top: .1875rem;
                overflow: hidden
            }

            .u_O1nL {
                height: 1rem;
                line-height: .875rem;
                margin: 0!important;
                padding-bottom: 0!important;
                padding-top: 0!important
            }

            .u_O1nL:not(:first-child) {
                margin-left: .25rem!important
            }

            .YQByMS {
                margin-right: .75rem;
                margin-top: .25rem
            }

            .m6s_Gh {
                max-width: 100%
            }

            .X69LVN {
                height: 16px;
                line-height: 14px;
                margin: 0!important;
                padding-bottom: 0!important;
                padding-top: 0!important
            }

            ._1PWkR {
                box-sizing: border-box;
                display: inline-block;
                height: 1rem;
                min-width: 0;
                overflow: hidden;
                position: relative
            }

            ._1PWkR:after,._1PWkR:before {
                background: currentColor;
                content: "";
                display: block;
                height: .0625rem;
                left: .25rem;
                position: absolute;
                right: .25rem;
                transform: scaleY(.5)
            }

            ._1PWkR:before {
                top: 0;
                transform-origin: 0 0
            }

            ._1PWkR:after {
                bottom: 0;
                transform-origin: 0 100%
            }

            ._2DRZW {
                height: 1rem;
                position: absolute;
                top: 0;
                transform: translateZ(0);
                width: .25rem
            }

            ._2DRZW:first-of-type {
                left: 0
            }

            ._2DRZW:nth-of-type(2) {
                right: 0
            }

            ._1FKkT {
                height: 1rem;
                line-height: 1rem;
                margin: 0 .1875rem;
                overflow: hidden;
                padding: 0 .0625rem;
                padding: 0 calc(var(--ns-a, .25rem) - .1875rem);
                position: relative;
                text-overflow: ellipsis;
                white-space: nowrap;
                z-index: 1
            }

            ._2HdUY {
                color: rgba(0,0,0,.09);
                color: var(--nc-util-line,rgba(0,0,0,.09))
            }

            ._3VTkw {
                color: rgba(0,0,0,.26);
                color: var(--nc-util-disabled,rgba(0,0,0,.26))
            }

            ._3hvfJ {
                color: #bdbdbd;
                color: var(--nc-util-disabled-o,#bdbdbd)
            }

            .-ClOx {
                color: rgba(0,0,0,.54);
                color: var(--nc-text-tertiary,rgba(0,0,0,.54))
            }

            ._1AXbm._3Ao0A {
                background-color: #bdbdbd;
                background-color: var(--nc-util-disabled-o,#bdbdbd)
            }

            ._1AXbm._2xFcL {
                fill: #bdbdbd;
                fill: var(--nc-util-disabled-o,#bdbdbd)
            }

            .TDOxp7,.aKBgs2 {
                height: 16px;
                line-height: 14px;
                margin: 0!important;
                padding-bottom: 0!important;
                padding-top: 0!important
            }

            .ZuWaqn {
                align-items: center;
                display: flex;
                flex-grow: 1;
                flex-shrink: 1;
                flex-wrap: wrap;
                height: 16px;
                margin-top: 3px;
                overflow: hidden
            }

            .AkbYn8 {
                display: inline-flex;
                margin-left: 4px
            }

            .mNfraT {
                color: rgba(0,0,0,.65);
                font-size: .875rem;
                font-weight: 400;
                line-height: 1rem;
                margin-top: .625rem
            }

            .ajvSGB {
                align-items: center;
                display: inline-flex
            }

            .ajvSGB .AdyKFb {
                flex: 0 1 auto;
                height: .5em;
                position: relative;
                width: .5em
            }

            .ajvSGB .AdyKFb+.AdyKFb {
                margin-left: .0625rem
            }

            .ajvSGB .HIDP6x,.ajvSGB .RsQf0d,.ajvSGB .bXm5gg {
                height: inherit;
                left: 0;
                position: absolute;
                top: 0;
                width: inherit
            }

            .ajvSGB .HIDP6x {
                overflow: hidden
            }

            .ajvSGB .HIDP6x .RsQf0d {
                width: auto
            }

            .rating-stars {
                align-items: center;
                display: flex;
                flex-direction: row
            }

            .rating-stars .rating-stars__star {
                flex: 0 1 auto;
                height: .5rem;
                margin-right: .125rem;
                position: relative;
                width: .5rem
            }

            .rating-stars .rating-stars__star .stardust-icon,.rating-stars__star.stardust-icon {
                color: #ee4d2d
            }

            .rating-stars .rating-stars__star-hollow,.rating-stars .rating-stars__star-lit,.rating-stars .rating-stars__star-solid {
                height: inherit;
                left: 0;
                position: absolute;
                top: 0;
                width: inherit
            }

            .rating-stars .rating-stars__star-lit {
                overflow: hidden
            }

            .rating-stars .rating-stars__star-lit .rating-stars__star-solid {
                width: auto
            }

            .theme--ofs .rating-stars__star,.theme--ofs .rating-stars__star .stardust-icon,.theme--ofs .rating-stars__star-solid {
                fill: #2b1965;
                color: #2b1965;
                stroke: #2b1965
            }

            .axwREx {
                align-items: baseline;
                color: rgba(0,0,0,.26);
                display: flex;
                flex-wrap: wrap;
                height: .875rem;
                justify-content: flex-end;
                overflow: hidden
            }

            .axwREx .rating-stars {
                flex: 0 0 auto;
                font-size: .375rem;
                height: .875rem
            }

            .axwREx .rating-stars__star {
                margin: .0625rem
            }

            .HvMbkc {
                flex: 0 1 auto;
                margin-left: .125rem
            }

            .NtkrDO {
                width: 100%
            }

            .XE2ZGS {
                border-bottom: 1px solid rgba(0,0,0,.09);
                font-size: 16px;
                font-weight: 500;
                padding: 14px 0;
                text-align: center
            }

            .rM9t3p {
                line-height: 20px;
                margin: 18px 0;
                padding: 0 12px
            }

            .rM9t3p a {
                color: #05a
            }

            .peX5Em {
                align-items: center;
                display: flex
            }

            .jQTG1y {
                height: 60px
            }

            ._28pUO {
                bottom: 0;
                box-sizing: border-box;
                left: 0;
                padding: .5rem;
                padding: var(--ns-b,.5rem);
                position: absolute;
                width: 100%
            }

            ._3sjFp {
                align-items: center;
                border-radius: .125rem;
                display: inline-flex;
                flex: 0 0 auto;
                justify-content: center;
                outline: none;
                overflow: hidden;
                padding: 0 1rem;
                position: relative
            }

            ._3sjFp:active:before {
                background-color: rgba(0,0,0,.05);
                background-color: var(--nc-util-pressed,rgba(0,0,0,.05));
                bottom: 0;
                content: "";
                left: 0;
                position: absolute;
                right: 0;
                top: 0
            }

            .lJMau {
                height: 2.75rem
            }

            ._3zn07 {
                height: 2.25rem;
                min-width: 4rem
            }

            ._18F8b {
                height: 1.75rem;
                min-width: 4rem;
                padding: 0 .75rem
            }

            .uxSdp {
                height: 1.25rem;
                min-width: 3.25rem;
                padding: 0 .5rem
            }

            .xCn81 {
                background: transparent
            }

            .TOjHY.AHhqR {
                background: #ee4d2d;
                background: var(--nc-primary,#ee4d2d);
                border: .0625rem solid transparent;
                color: #fff
            }

            .TOjHY.xCn81 {
                border: .0625rem solid #ee4d2d;
                border: .0625rem solid var(--nc-primary,#ee4d2d);
                color: #ee4d2d;
                color: var(--nc-primary,#ee4d2d)
            }

            ._1-4Xn.xCn81 {
                border: .0625rem solid rgba(0,0,0,.26);
                color: rgba(0,0,0,.87);
                color: var(--nc-text-primary,rgba(0,0,0,.87))
            }

            ._1qQAl.xCn81 {
                border: .0625rem solid #fff;
                color: #fff
            }

            ._3sjFp:disabled {
                color: rgba(0,0,0,.26);
                color: var(--nc-util-disabled,rgba(0,0,0,.26))
            }

            ._3sjFp:disabled.xCn81 {
                border-color: rgba(0,0,0,.09);
                border-color: var(--nc-util-line,rgba(0,0,0,.09))
            }

            ._3sjFp:disabled._1qQAl.xCn81 {
                border-color: hsla(0,0%,100%,.54);
                color: hsla(0,0%,100%,.4)
            }

            ._3sjFp:disabled.TOjHY.AHhqR {
                background: rgba(0,0,0,.09)
            }

            ._2HCeY {
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap
            }

            ._19rDu {
                margin-left: .25rem
            }

            .gdYMVU {
                color: rgba(0,0,0,.54)
            }

            .wLmncS {
                margin-right: 5px
            }

            .UuhjH6 {
                font-size: 1.75rem
            }

            .yIRUr4 {
                align-self: center;
                color: var(--brand-primary-color,#ee4d2d);
                margin-left: .4375rem
            }

            .CjmmTK {
                align-items: center;
                display: flex
            }

            .wYvfla {
                margin-left: .3125rem
            }

            .product-review {
                align-items: center;
                display: flex;
                flex-grow: 1;
                margin-top: .25rem
            }

            .product-review__wrapper {
                align-items: center;
                display: flex;
                height: 3rem
            }

            .product-review__link {
                align-items: baseline;
                color: inherit;
                display: flex;
                flex: 0 1 auto;
                -webkit-text-decoration: none;
                text-decoration: none
            }

            .product-review .rating-stars {
                flex: 0 1 auto
            }

            .product-review__no-rating {
                color: rgba(0,0,0,.65);
                flex: 0 1 auto
            }

            .product-review__amount {
                color: #ee4d2d;
                flex: 0 1 auto;
                margin-left: .125rem
            }

            .product-review__label {
                color: rgba(0,0,0,.54);
                flex: 0 1 auto;
                margin-left: .25rem
            }

            .product-review__like {
                margin-left: auto
            }

            .product-review__like button {
                background-color: transparent;
                border: 0;
                margin: 0;
                padding: 0
            }

            .product-review__sold-count {
                align-items: center;
                display: flex;
                flex: 0 1 auto;
                margin-left: .75rem;
                overflow: hidden;
                padding-left: .75rem;
                position: relative;
                text-overflow: ellipsis;
                white-space: nowrap
            }

            .product-review__sold-count:before {
                background: rgba(0,0,0,.12);
                content: "";
                display: block;
                height: 12px;
                left: 0;
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                width: 1px
            }

            .product-review__badge {
                align-items: center;
                display: flex;
                flex: 0 1 auto
            }

            .product-review__badge>.badge__horizontal {
                flex: 0 1 auto;
                margin-bottom: 0;
                margin-top: 0
            }

            .theme--ofs .product-review__amount {
                color: #2b1965!important
            }

            .bmDnJo {
                align-items: center;
                background-color: rgba(255,87,34,.1);
                clear: both;
                cursor: pointer;
                display: flex;
                padding: 8px 12px;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none
            }

            .theme--ofs .bmDnJo,.theme--s-mart .bmDnJo {
                background-color: rgba(208,1,27,.08)
            }

            .bmDnJo .dhAedA {
                display: flex;
                flex-direction: column;
                flex-grow: 1
            }

            .bmDnJo .dhAedA .Xq8Ef1 {
                color: #ee4d2d
            }

            .theme--ofs .bmDnJo .dhAedA .Xq8Ef1,.theme--s-mart .bmDnJo .dhAedA .Xq8Ef1 {
                color: #2b1965
            }

            .bmDnJo .dhAedA .Oll6rU {
                color: rgba(0,0,0,.54);
                font-size: 12px;
                margin-top: 2px
            }

            .g9sxyL,.sfHJBJ {
                bottom: 0;
                left: 0;
                position: fixed;
                right: 0;
                top: 0
            }

            .g9sxyL {
                background-color: rgba(0,0,0,.4)
            }

            .sfHJBJ {
                align-items: center;
                display: flex;
                justify-content: center;
                z-index: 90000
            }

            .yIbrbf {
                z-index: 1
            }

            .AwKNQb {
                opacity: 0
            }

            .tmTImy {
                transition: opacity .15s
            }

            .HURkbO,.tmTImy {
                opacity: 1
            }

            .Fmzvyx {
                opacity: 0;
                transition: opacity .15s
            }

            .ShGmG6 {
                transform: scale(.8)
            }

            .c3rTq4 {
                transition: transform .2s
            }

            .b7DTVj,.c3rTq4 {
                transform: scale(1)
            }

            .Bd0F69 {
                transform: scale(.8);
                transition: transform .2s
            }

            .q8W4Hj {
                background: #fff;
                border-radius: 4px;
                max-width: 375px;
                text-align: center;
                width: calc(100vw - 68px)
            }

            ._s5heh {
                color: rgba(0,0,0,.54);
                font-size: .875rem;
                padding: .5rem 1.25rem .875rem
            }

            .nSOjHK {
                background: #fff;
                border: 0;
                border-radius: 4px;
                border-top: 1px solid rgba(0,0,0,.09);
                color: #ee4d2d;
                font-size: 1rem;
                height: 2.875rem;
                line-height: 2.875rem;
                width: 100%
            }

            .ETJnxV {
                padding-top: 1.125rem;
                position: relative
            }

            .uVjtxA {
                background: #ee4d2d;
                border-radius: .3125rem;
                border-top: 0;
                color: #fff;
                font-size: .875rem;
                font-weight: 300;
                height: 2rem;
                line-height: 2rem;
                margin: 1.25rem;
                width: calc(100% - 40px)
            }

            .cvBgpu {
                display: block;
                margin: .625rem auto 2.5rem
            }

            .zrKkAk {
                color: rgba(0,0,0,.45);
                cursor: pointer;
                height: .75rem;
                position: absolute;
                right: .9375rem;
                top: .9375rem;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
                width: .75rem
            }

            .dmcwCN {
                color: rgba(0,0,0,.65);
                font-size: .8125rem;
                line-height: 1rem;
                text-align: center
            }

            .w6jUK2 {
                background-color: rgba(255,87,34,.1);
                clear: both;
                cursor: pointer;
                display: flex;
                flex-direction: column;
                padding: .5rem .75rem;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none
            }

            .theme--ofs .w6jUK2,.theme--s-mart .w6jUK2 {
                background-color: rgba(208,1,27,.08)
            }

            .w6jUK2 .M_yefM,.w6jUK2 .idDFSW {
                flex: 1 0 auto
            }

            .w6jUK2 .idDFSW {
                color: #ee4d2d
            }

            .theme--ofs .w6jUK2 .idDFSW,.theme--s-mart .w6jUK2 .idDFSW {
                color: #2b1965
            }

            .w6jUK2 .M_yefM {
                color: rgba(0,0,0,.54);
                font-size: .75rem;
                margin-top: .125rem
            }

            .jI7wJL {
                align-items: center;
                background-color: #fff4f4;
                cursor: pointer;
                display: flex;
                margin: 0 -12px 12px;
                padding: .75rem;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none
            }

            .jI7wJL .nWofPk {
                fill: #ee4d2d
            }

            .theme--ofs .jI7wJL .nWofPk,.theme--s-mart .jI7wJL .nWofPk {
                fill: #2b1965
            }

            .jI7wJL .z5uoXg {
                flex-grow: 1;
                margin-left: .5rem
            }

            .jI7wJL .z5uoXg .Dy9Ezf {
                align-items: center;
                color: #ee4d2d;
                display: flex
            }

            .theme--ofs .jI7wJL .z5uoXg .Dy9Ezf,.theme--s-mart .jI7wJL .z5uoXg .Dy9Ezf {
                color: #2b1965
            }

            .jI7wJL .z5uoXg .SktLgX {
                color: rgba(0,0,0,.54);
                font-size: .75rem;
                margin-top: .125rem
            }

            .pQW9A9 {
                background-color: #fff4f4;
                clear: both;
                margin: 0 -.75rem;
                padding: .75rem
            }

            .kUpbkg {
                height: 1.75rem;
                margin-right: .625rem;
                width: 1.75rem
            }

            .theme--ofs .kUpbkg .orignal-guarantee-icon__path--fill,.theme--s-mart .kUpbkg .orignal-guarantee-icon__path--fill {
                fill: #2b1965
            }

            .EXeraP {
                color: #ee4d2d;
                font-size: .875rem
            }

            .theme--ofs .EXeraP .orignal-guarantee-icon__path--fill,.theme--s-mart .EXeraP .orignal-guarantee-icon__path--fill {
                color: #2b1965
            }

            .EsQDTw {
                color: rgba(0,0,0,.54);
                margin-top: .25rem
            }

            .EsQDTw,.lIorUZ {
                font-size: .75rem
            }

            .lIorUZ {
                align-items: center;
                background-color: #fff8e4;
                border-radius: .125rem;
                display: flex;
                justify-content: space-between;
                line-height: .875rem;
                margin-top: .75rem;
                padding: .5625rem .25rem
            }

            .lIorUZ .KmC1Pk {
                color: #ee4d2d
            }

            .lIorUZ .jGFSV8 {
                color: rgba(0,0,0,.54);
                flex-shrink: 0
            }

            .Bad8F2 {
                color: rgba(0,0,0,.65)
            }

            .SZIPCa {
                align-items: center;
                background-color: rgba(255,87,34,.1);
                display: flex;
                height: 58px;
                margin: 0 -12px 12px;
                padding: 12px
            }

            .theme--ofs .SZIPCa {
                background-color: rgba(208,1,27,.08)
            }

            .theme--s-mart .SZIPCa {
                background-color: #e6f0f9
            }

            .LUt799 {
                flex-grow: 1
            }

            .jLDyfS {
                margin-right: 8px;
                fill: #ee4d2d
            }

            .theme--ofs .jLDyfS {
                fill: #2b1965
            }

            .theme--s-mart .jLDyfS {
                fill: #066bc8
            }

            .VaUX69 {
                color: #ee4d2d;
                font-size: 14px;
                line-height: 16px
            }

            .theme--ofs .VaUX69 {
                color: #2b1965
            }

            .theme--s-mart .VaUX69 {
                color: #066bc8
            }

            .ElBWlp {
                color: rgba(0,0,0,.54);
                font-size: 12px;
                margin-top: 2px
            }

            .ezTNz_ {
                background: #fff;
                padding: 0 12px
            }

            .xKawm0 {
                padding-top: 12px
            }

            .hDwtBy {
                margin: 8px -12px 12px
            }

            .loQozf {
                margin: 0 -12px
            }

            .VknKiT {
                margin-top: 12px
            }

            .iJALQR {
                padding: 6px 12px 0
            }

            .fk5CgB {
                box-shadow: inset 0 .5px 0 0 rgba(0,0,0,.09);
                padding: 12px
            }

            .fk5CgB div:first-child {
                display: inline
            }

            .jUP97h {
                color: rgba(0,0,0,.54);
                font-size: 12px
            }

            .WA5Dnk {
                display: inline-block;
                margin-left: 2px;
                transform: translateY(3px)
            }

            .product-action-bar {
                align-items: center;
                color: rgba(0,0,0,.54);
                cursor: pointer;
                display: flex;
                height: 3rem;
                justify-content: space-between;
                padding: 0 .75rem;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none
            }

            .product-action-bar__arrow.stardust-icon {
                flex: 0 1 auto;
                margin: 0 0 0 .4375rem
            }

            .product-action-bar__label {
                color: rgba(0,0,0,.87);
                min-width: 0
            }

            .product-action-bar__content {
                display: -webkit-box;
                overflow: hidden;
                text-overflow: ellipsis;
                -webkit-box-orient: vertical;
                -webkit-line-clamp: 1;
                flex: 1;
                flex-shrink: 0;
                flex-wrap: wrap;
                font-weight: 300;
                justify-content: flex-end;
                min-width: -webkit-fit-content;
                min-width: -moz-fit-content;
                min-width: fit-content;
                text-align: right;
                white-space: normal
            }

            .product-action-bar__content .voucher-ticket {
                font-weight: 400
            }

            .product-action-bar__wrapper+.product-action-bar__wrapper {
                border-top: 1px solid #efefef
            }

            .product-voucher__vouchers {
                display: flex;
                flex-wrap: nowrap;
                margin-left: .1875rem
            }

            .product-voucher__voucher+.product-voucher__voucher {
                margin-left: .4375rem
            }

            .voucher-ticket--outline {
                border-color: #ee4d2d;
                border-image-repeat: repeat stretch;
                border-image-slice: 1 3;
                border-image-source: url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/6e2612ae0735b6550107.png);
                border-style: solid;
                border-width: .0625rem .125rem;
                color: #ee4d2d;
                font-size: .75rem;
                overflow: hidden;
                padding: 0 .25rem;
                text-overflow: ellipsis;
                white-space: nowrap
            }

            .voucher-ticket--outline .voucher-promo-label--coins-cashback,.voucher-ticket--outline .voucher-promo-label--off {
                margin-left: .125rem
            }

            .theme--ofs .voucher-ticket--outline {
                border-image-source: url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/81e7ac8f0d14a1948137.png);
                color: #2b1965
            }

            .voucher-ticket--outline:first-of-type {
                flex-shrink: 0
            }

            .theme--s-mart .product-voucher__voucher {
                background-color: #f69113;
                border-color: #f69113;
                border-image-outset: .0625rem .125rem;
                border-image-source: url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/4316975221c5c5f9b011.png);
                color: #fff
            }

            .theme--s-mart .product-voucher__voucher:last-of-type {
                margin-right: .125rem
            }

            .dctmjF {
                align-items: center;
                display: flex
            }

            .zYbl9r {
                height: 1.25rem;
                margin-right: 12px;
                width: 1.25rem
            }

            .lwa3Xy {
                display: inline-block;
                font-size: 0;
                margin-right: .5rem;
                margin-top: .25rem
            }

            .mX2a4k {
                align-items: center;
                display: flex
            }

            .ZblLo_ {
                background-color: #ee4d2d;
                border-radius: .5rem;
                border-bottom-left-radius: 0;
                color: #fff;
                flex-shrink: 0;
                font-size: .625rem;
                font-weight: 500;
                height: 1rem;
                line-height: 1rem;
                margin-left: .5rem;
                padding: 0 .3125rem
            }

            .stardust-drawer__background {
                background: rgba(0,0,0,.4);
                display: none;
                height: 100%;
                left: 0;
                position: fixed;
                top: 0;
                width: 100%
            }

            .stardust-drawer__background--active {
                display: block;
                z-index: 9000
            }

            .stardust-drawer__container {
                background: #fff;
                height: 100%;
                position: fixed;
                right: -80%;
                top: 0;
                transition: transform .5s cubic-bezier(.4,0,.6,1);
                width: 80%;
                z-index: 9001
            }

            .stardust-drawer__container--active {
                overflow-y: auto;
                transform: translateX(-100%)
            }

            .stardust-drawer__container--active.stardust-drawer__container--left {
                transform: translateX(100%)
            }

            .stardust-drawer__container--active.stardust-drawer__container--bottom {
                transform: translateY(-100%)
            }

            .stardust-drawer__container--active.stardust-drawer__container--top {
                transform: translateY(100%)
            }

            .stardust-drawer__container--left {
                left: -80%;
                right: auto
            }

            .stardust-drawer__container--bottom {
                bottom: -80%;
                height: 80%;
                right: 0;
                top: auto;
                width: 100%
            }

            .stardust-drawer__container--top {
                bottom: auto;
                height: 80%;
                right: 0;
                top: -80%;
                width: 100%
            }

            .stardust-no-scroll {
                overflow: hidden;
                touch-action: none
            }

            .stardust-dropdown {
                position: relative
            }

            .stardust-dropdown__item-body {
                height: 0;
                opacity: 0;
                overflow: hidden;
                transition: height .4s cubic-bezier(.4,0,.2,1),opacity .4s cubic-bezier(.4,0,.2,1)
            }

            .stardust-dropdown__item-body--open {
                height: auto;
                opacity: 1
            }

            .accordian__header {
                align-items: center;
                display: flex;
                flex-grow: 1
            }

            .accordian__header>div {
                flex: 1
            }

            .accordian__header-container {
                align-items: center;
                display: flex
            }

            .accordian__header-container-disabled {
                cursor: not-allowed;
                filter: grayscale(1);
                opacity: .26
            }

            .accordian__header-icon {
                color: rgba(0,0,0,.87);
                flex-shrink: 0;
                margin-left: 8px;
                margin-right: 12px
            }

            .dBAZD9 {
                align-items: center;
                border: 1px solid #ee4d2d;
                border-radius: .75rem;
                cursor: pointer;
                display: flex;
                flex-shrink: 0;
                height: 1.5rem;
                justify-content: center;
                margin-left: .25rem;
                position: absolute;
                right: .9375rem;
                top: .625rem;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
                width: 1.5rem
            }

            .dBAZD9 .stardust-icon {
                color: #ee4d2d;
                height: .5rem;
                width: .5rem
            }

            .pgPjNJ {
                align-items: center;
                background: #fbfbfb;
                border-bottom: 1px solid rgba(0,0,0,.09);
                display: flex;
                height: 2.75rem;
                max-width: 37.5rem;
                padding: 0 .9375rem;
                position: absolute;
                top: 0;
                width: 100%;
                z-index: 100
            }

            .RCX_jT {
                flex: 1
            }

            .RCX_jT,.ZA1Ay5 {
                text-align: center
            }

            .ZA1Ay5 {
                cursor: pointer;
                flex: 0 0 auto;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none
            }

            .Z7xiAO {
                align-items: center;
                color: rgba(0,0,0,.87);
                display: flex;
                margin-left: 46px;
                padding: 14px 11px 13px 4px
            }

            .Z7xiAO:nth-child(n+2) {
                border: solid rgba(0,0,0,.09)!important;
                border-width: 1px 0 0!important
            }

            .Z7xiAO.UHFhxF {
                margin-left: 0;
                padding-left: 12px
            }

            .JLEJbC {
                flex-grow: 1
            }

            .JLEJbC .HNJy9g {
                font-weight: 500;
                margin-right: 2px
            }

            .k8cXcx {
                flex-shrink: 0
            }

            .JzMzMu {
                cursor: not-allowed;
                opacity: .26
            }

            .product-installment-info {
                display: flex;
                flex-direction: column;
                height: 100%;
                overflow-y: scroll;
                padding-top: 2.75rem;
                width: 100%;
                -webkit-overflow-scrolling: touch
            }

            .product-installment-info .navbar-popup__title {
                text-transform: capitalize
            }

            .product-installment-info__title {
                color: rgba(0,0,0,.54);
                padding: .5rem .75rem
            }

            .product-installment-info__installment {
                background-color: #fff
            }

            .product-installment-info__installment:nth-child(n+2) {
                border: solid rgba(0,0,0,.09)!important;
                border-width: 1px 0 0!important
            }

            .product-installment-info__installment--flat .product-installment-info__row {
                margin-left: 0;
                padding-left: .75rem
            }

            .product-installment-info__header {
                align-items: center;
                cursor: pointer;
                display: flex;
                padding: .75rem;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none
            }

            .product-installment-info__header-icon {
                border-radius: 2px;
                height: 1.5rem;
                width: 1.5rem
            }

            .product-installment-info__header-title {
                color: rgba(0,0,0,.87);
                flex-shrink: 0;
                margin-left: .625rem
            }

            .product-installment-info__row {
                align-items: center;
                color: rgba(0,0,0,.87);
                display: flex;
                margin-left: 2.875rem;
                padding: .875rem .6875rem .8125rem .25rem
            }

            .product-installment-info__row:nth-child(n+2) {
                border: solid rgba(0,0,0,.09)!important;
                border-width: 1px 0 0!important
            }

            .product-installment-info__row-plan {
                flex-grow: 1
            }

            .product-installment-info__row-amount {
                flex-shrink: 0
            }

            .product-installment-info__row--disabled {
                cursor: not-allowed;
                opacity: .26
            }

            .product-installment-info .legalRegulation {
                color: rgba(0,0,0,.54);
                font-size: .75rem;
                padding: .75rem
            }

            .X9Av_J {
                display: flex;
                flex-wrap: wrap
            }

            .X9Av_J .nXjNcv {
                box-sizing: border-box;
                padding: .75rem .5rem;
                text-align: center;
                width: 25%
            }

            .X9Av_J .nXjNcv .iDHYYC {
                height: 1.5rem;
                width: 1.5rem
            }

            .X9Av_J .nXjNcv .GqgLLQ {
                color: rgba(0,0,0,.65);
                font-size: .75rem;
                margin-top: .5rem;
                text-align: center
            }

            .STNyCU {
                display: flex;
                flex-direction: column;
                height: 100%;
                overflow-y: scroll;
                padding-top: 2.75rem;
                width: 100%;
                -webkit-overflow-scrolling: touch
            }

            .STNyCU ._9kLnf {
                align-items: center;
                color: rgba(0,0,0,.87);
                display: flex;
                padding: 1rem 0 1rem .75rem
            }

            .STNyCU ._9kLnf:nth-child(n+2) {
                border: solid rgba(0,0,0,.09)!important;
                border-width: 1px 0 0!important
            }

            .STNyCU ._9kLnf .poAbNu {
                flex-grow: 1
            }

            .STNyCU ._9kLnf .t1D_eK {
                flex-shrink: 0
            }

            .STNyCU .pi0n7A {
                cursor: not-allowed;
                opacity: .26
            }

            .STNyCU .Ooo2Ga {
                background-color: #fff
            }

            .STNyCU .Ooo2Ga:nth-child(n+2) {
                border: solid rgba(0,0,0,.09)!important;
                border-width: 1px 0 0!important
            }

            .STNyCU .BAjO2F {
                color: rgba(0,0,0,.54);
                font-size: .75rem;
                padding: .75rem
            }

            .product-installment .product-action-bar__label {
                text-transform: capitalize
            }

            .product-installment .stardust-drawer__container {
                background-color: #efefef
            }

            .product-installment .stardust-drawer__container--bottom {
                bottom: -100%;
                height: 100%
            }

            .product-installment .stardust-drawer__container--active {
                overflow-y: initial
            }

            .zRcOiT .stardust-drawer__container {
                display: flex;
                max-height: 80%;
                max-width: 37.5rem
            }

            .zRcOiT .stardust-drawer__container--bottom.stardust-drawer__container--active {
                transform: none
            }

            .zRcOiT .stardust-drawer__container,.zRcOiT .stardust-drawer__container--bottom {
                bottom: 0;
                height: unset;
                transform: translateY(100%)
            }

            .nekjhk {
                display: flex;
                flex: 1;
                flex-direction: column
            }

            .HP96aD {
                flex-grow: 1;
                overflow: auto;
                padding-bottom: 1.5rem
            }

            .QnPsjO {
                background: #ee4d2d;
                color: #fff;
                cursor: pointer;
                flex-shrink: 0;
                height: 3rem;
                line-height: 3rem;
                margin: 0 .5rem .5rem;
                text-align: center;
                text-transform: capitalize;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none
            }

            .theme--ofs .INyFOo {
                background: #2b1965
            }

            .r_vsW6 {
                background-color: #fff;
                box-sizing: border-box;
                margin: .625rem 0
            }

            .r_vsW6 .stardust-icon {
                color: #16b6fb
            }

            .e1InVe {
                color: rgba(0,0,0,.87);
                padding: 12px;
                text-align: center;
                width: 100%
            }

            .WMJC0b {
                border: solid rgba(0,0,0,.09)!important;
                border-width: 1px 0 0!important;
                width: 100%
            }

            .GAUnRf,.WMJC0b {
                box-sizing: border-box
            }

            .GAUnRf {
                display: flex;
                text-align: center
            }

            .TG_7QL {
                color: rgba(0,0,0,.54);
                flex: 1 1 50%;
                font-weight: 400;
                padding: .5625rem 0
            }

            .TG_7QL,.pQSc1I {
                box-sizing: border-box
            }

            .pQSc1I {
                display: flex
            }

            .Td2dff {
                box-sizing: border-box;
                flex: 1 1 50%;
                line-height: .75rem;
                padding: .75rem;
                text-align: center
            }

            .THmiXI {
                color: #ee4d2d
            }

            .P38a_1 {
                height: auto;
                padding: 10px 12px
            }

            .lBCUpm {
                flex-grow: 1
            }

            .pfo5zo {
                flex-shrink: 0;
                height: 20px;
                margin-right: 12px;
                width: 20px
            }

            .EaCS3k {
                font-weight: 300;
                margin-top: 4px
            }

            .stardust-button {
                background-color: #fff;
                border: 1px solid rgba(0,0,0,.26);
                border-radius: 4px;
                color: rgba(0,0,0,.87);
                font-family: -apple-system,Helvetica Neue,Helvetica,Roboto,Droid Sans,Arial,sans-serif;
                font-size: 14px;
                font-weight: 400;
                padding: 8px 10px
            }

            .stardust-button.stardust-button--active,.stardust-button:hover {
                background-color: rgba(0,0,0,.09);
                border-color: rgba(0,0,0,.26);
                cursor: pointer
            }

            .stardust-button--disabled {
                background-color: rgba(0,0,0,.26);
                border: 1px solid rgba(0,0,0,.26)
            }

            .stardust-button--disabled.stardust-button--active,.stardust-button--disabled:hover {
                background-color: rgba(0,0,0,.26);
                border: 1px solid rgba(0,0,0,.26);
                cursor: not-allowed
            }

            .stardust-button--block {
                display: block;
                width: 100%
            }

            .stardust-button--block+.stardust-button--block {
                margin-top: 5px
            }

            .stardust-button--large {
                border-radius: 6px;
                font-size: 16px;
                padding: 12px 14px
            }

            .stardust-button--large,.stardust-button--small {
                font-family: -apple-system,Helvetica Neue,Helvetica,Roboto,Droid Sans,Arial,sans-serif;
                font-weight: 400
            }

            .stardust-button--small {
                border-radius: 3px;
                font-size: 12px;
                padding: 6px 8px
            }

            .stardust-button--primary {
                background-color: #ee4d2d;
                border-color: #cd3011;
                color: #fff
            }

            .stardust-button--primary.stardust-button--active,.stardust-button--primary:hover {
                background-color: #d73211;
                border-color: #ba2b0f
            }

            .stardust-button--primary.stardust-button--disabled {
                opacity: .7
            }

            .stardust-button--primary.stardust-button--active.stardust-button--disabled,.stardust-button--primary:hover.stardust-button--disabled {
                background-color: #ee4d2d;
                border-color: #cd3011
            }

            .stardust-button--warning {
                background-color: #ff424f;
                border-color: #ef0010;
                color: #fff
            }

            .stardust-button--warning.stardust-button--active,.stardust-button--warning:hover {
                background-color: #fa0011;
                border-color: #e50010
            }

            .stardust-button--warning.stardust-button--disabled {
                opacity: .7
            }

            .stardust-button--warning.stardust-button--active.stardust-button--disabled,.stardust-button--warning:hover.stardust-button--disabled {
                background-color: #ff424f;
                border-color: #ef0010
            }

            .stardust-button--outline-primary {
                background-color: transparent;
                border-color: #ee4d2d;
                color: #ee4d2d
            }

            .stardust-button--outline-primary.stardust-button--active,.stardust-button--outline-primary:hover {
                background-color: hsla(0,0%,100%,.3);
                border-color: #d73211
            }

            .stardust-button--outline-primary.stardust-button--disabled {
                opacity: .7
            }

            .stardust-button--outline-primary.stardust-button--active.stardust-button--disabled,.stardust-button--outline-primary:hover.stardust-button--disabled {
                background-color: transparent;
                border-color: #ee4d2d
            }

            .stardust-button--outline-white {
                background-color: transparent;
                border-color: #fff;
                color: #fff
            }

            .stardust-button--outline-white.stardust-button--active,.stardust-button--outline-white:hover {
                background-color: hsla(0,0%,100%,.3);
                border-color: #fff
            }

            .stardust-button--outline-white.stardust-button--disabled {
                opacity: .7
            }

            .stardust-button--outline-white.stardust-button--active.stardust-button--disabled,.stardust-button--outline-white:hover.stardust-button--disabled {
                background-color: transparent;
                border-color: #fff
            }

            .stardust-button--ghost-primary {
                background-color: transparent;
                border-color: transparent;
                color: #ee4d2d
            }

            .stardust-button--ghost-primary.stardust-button--active,.stardust-button--ghost-primary:hover {
                background-color: rgba(0,0,0,.09);
                border-color: rgba(0,0,0,.09)
            }

            .stardust-button--ghost-primary.stardust-button--disabled {
                opacity: .7
            }

            .stardust-button--ghost-primary.stardust-button--active.stardust-button--disabled,.stardust-button--ghost-primary:hover.stardust-button--disabled {
                background-color: transparent;
                border-color: transparent
            }

            .gbBkio {
                display: flex
            }

            .Gy66Nm {
                flex-grow: 0;
                flex-shrink: 0;
                font-weight: 300;
                padding: .625rem 0;
                width: 6.875rem
            }

            .Gy66Nm.uC1sgE {
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap
            }

            .rsjkjR {
                align-items: center;
                background: #fff;
                color: rgba(0,0,0,.65);
                display: flex;
                flex: 1;
                flex-wrap: wrap;
                padding: .5625rem .75rem
            }

            .product-attributes-sub-table__link {
                color: inherit;
                display: flex;
                -webkit-text-decoration: none;
                text-decoration: none;
                width: 100%
            }

            .product-attributes-sub-table__text {
                flex: 1
            }

            .product-attributes-sub-table__arrow.stardust-icon {
                color: rgba(0,0,0,.87);
                flex: 0 0 .75rem;
                margin-left: .75rem
            }

            .FpLu3u {
                margin: 0 .75rem .625rem
            }

            .FpLu3u:not(:last-child) {
                border: solid rgba(0,0,0,.09)!important;
                border-width: 0 0 1px!important
            }

            ._ong9w {
                color: inherit;
                display: flex;
                -webkit-text-decoration: none;
                text-decoration: none;
                width: 100%
            }

            .tHAAWp {
                flex: 1
            }

            .Tw7FX_ {
                color: rgba(0,0,0,.87);
                flex: 0 0 .75rem;
                margin-left: .75rem
            }

            .vZFV97 .stardust-drawer__container {
                bottom: 0;
                display: flex;
                flex-direction: column;
                height: unset;
                max-height: 80%;
                transform: translateY(100%)
            }

            .vZFV97 .stardust-drawer__container--active.stardust-drawer__container--bottom {
                transform: none
            }

            .wnvA8n {
                background-color: #fff;
                color: rgba(0,0,0,.87);
                display: flex;
                font-size: 14px;
                padding: 1rem .75rem
            }

            .LCP6Bf {
                font-weight: 500;
                margin-right: .5rem
            }

            .TTU7w3 {
                flex: 1;
                font-weight: 400;
                overflow: hidden;
                text-align: right;
                text-overflow: ellipsis;
                white-space: nowrap
            }

            .RnlaHh {
                align-items: center;
                display: flex
            }

            .SGYwf1 {
                color: rgba(0,0,0,.87);
                font-size: 1rem;
                height: 3rem;
                line-height: 3rem;
                position: relative;
                text-align: center
            }

            .VI323R {
                display: flex;
                position: absolute;
                right: 1rem;
                top: 50%;
                transform: translateY(-50%)
            }

            .Ks0TIv {
                overflow-y: auto
            }

            .ITZyUw {
                margin: 0 0 0 1rem
            }

            .En7Xkb {
                padding: .5rem
            }

            .En7Xkb .stardust-button--block {
                height: 2.75rem
            }

            .IsaxdN {
                overflow: hidden;
                position: relative
            }

            .yPJEjy {
                background: linear-gradient(transparent,hsla(0,0%,100%,0) 70%,#fff 90%);
                height: 100%;
                left: 0;
                position: absolute;
                top: 0;
                width: 100%
            }

            .MQQIj8 {
                background: #fff;
                box-sizing: border-box;
                line-height: 1rem
            }

            .q5eLaS {
                align-items: center;
                display: flex;
                justify-content: flex-start;
                padding: 1rem
            }

            .dQTDlC {
                margin: 0 .75rem;
                padding-bottom: .375rem
            }

            .vUDMZj {
                color: rgba(0,0,0,.65);
                white-space: pre-wrap
            }

            .tMJ4vW {
                color: rgba(0,0,0,.54);
                font-weight: lighter
            }

            .OfGomV.stardust-icon {
                color: rgba(0,0,0,.87);
                height: .875rem;
                margin-left: .5rem;
                margin-right: .1875rem;
                vertical-align: sub;
                width: .875rem
            }

            .qsfBix {
                margin: 0
            }

            .qsfBix img {
                pointer-events: none
            }

            .b5sdqk {
                overflow-wrap: break-word;
                word-wrap: break-word;
                margin: 0;
                overflow: hidden;
                -webkit-user-select: text;
                -moz-user-select: text;
                user-select: text
            }

            .b2zbXI {
                height: 100%;
                object-fit: fill!important;
                width: 100%
            }

            .vIVMvf {
                align-items: center;
                display: flex;
                justify-content: center
            }

            .KRGDZ9 {
                height: 7.5rem;
                width: 7.5rem
            }

            .product-attributes-table {
                margin: 0 .75rem .625rem
            }

            .product-attributes-table:not(:last-child) {
                border: solid rgba(0,0,0,.09)!important;
                border-width: 0 0 1px!important
            }

            .product-attributes-table__help.stardust-icon {
                color: rgba(0,0,0,.87);
                cursor: pointer;
                display: inline-block;
                height: .6875rem;
                margin-left: .3125rem;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
                width: .6875rem
            }

            .product-attributes-table__icon-location {
                height: 1.5rem;
                position: relative;
                top: .1875rem;
                width: 1.5rem
            }

            .product-attributes-table__link {
                color: inherit;
                display: flex;
                -webkit-text-decoration: none;
                text-decoration: none;
                width: 100%
            }

            .product-attributes-table__text {
                flex: 1
            }

            .product-attributes-table__arrow.stardust-icon {
                color: rgba(0,0,0,.87);
                flex: 0 0 .75rem;
                margin-left: .75rem
            }

            .product-attributes-variation {
                align-items: center;
                cursor: pointer;
                display: flex;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
                width: 100%
            }

            .product-attributes-variation__text {
                flex: 1
            }

            .product-attributes-variation__arrow.stardust-icon {
                color: rgba(0,0,0,.87);
                flex: 0 0 .75rem;
                margin-left: .75rem
            }

            .__slJM {
                align-items: center;
                color: var(--brand-primary-color,#ee4d2d);
                display: flex;
                height: 3rem;
                justify-content: center;
                margin-top: 1rem;
                text-transform: capitalize;
                white-space: nowrap
            }

            .__slJM .stardust-icon-arrow-down,.__slJM .stardust-icon-arrow-up {
                font-size: .75rem;
                margin-left: .5rem
            }

            .theme--s-mart .__slJM {
                color: rgba(0,0,0,.54)
            }

            .WUHKUK {
                overflow: auto;
                padding: 0 .3125rem;
                word-break: break-word
            }

            .F4kMBg {
                margin-top: .375rem
            }

            .JSlWcM {
                bottom: 3.75rem
            }

            .CR6XTg .stardust-popup-title {
                margin-bottom: 1rem
            }

            .CR6XTg .stardust-popup-button--secondary {
                color: rgba(0,0,0,.87)
            }

            .z5hxuO {
                margin-top: .75rem
            }

            .fho4rO {
                padding: 0!important
            }

            .product-page {
                margin-top: -2.75rem;
                padding-bottom: 3.75rem
            }

            .product-page .product-page__overview {
                margin-top: 0;
                padding: 0
            }

            .product-page .product-page__overview .product-action-bar {
                font-family: -apple-system,HelveticaNeue-Light,Helvetica Neue Light,Helvetica Neue,Helvetica,Roboto,Droid Sans,Arial,sans-serif;
                font-weight: 300;
                padding-bottom: .625rem;
                padding-top: .5625rem
            }

            .product-page .product-page__overview .product-action-bar+.product-action-bar,.product-page .product-page__overview .product-action-bar+.product-action-bar__wrapper,.product-page .product-page__overview .product-action-bar__wrapper+.product-action-bar,.product-page .product-page__overview .product-action-bar__wrapper+.product-action-bar__wrapper {
                border-top: 1px solid #efefef
            }

            .action-bar-section {
                background: #fff;
                margin-top: .625rem
            }

            .LgPiTp {
                padding: .75rem;
                position: relative
            }

            .LgPiTp>div:not(:first-child) {
                margin-top: 1rem
            }

            .OrKCZ6 {
                display: grid;
                grid-template-columns: auto 1fr;
                grid-gap: 1rem .5rem;
                gap: 1rem .5rem
            }

            .product-pre-order {
                background: #fff5f2;
                display: flex
            }

            .product-pre-order__icon {
                text-align: center;
                width: 1.25rem
            }

            .product-pre-order .stardust-icon {
                color: #ee4d2d;
                flex: 0 0 auto;
                height: 1.125rem;
                width: 1.125rem
            }

            .product-pre-order__text {
                color: #ee4d2d;
                flex: 1 1 auto;
                margin-left: .5rem
            }

            .imdXCy {
                align-items: center;
                display: flex
            }

            .CFyoxo {
                height: 1.25rem;
                stroke: none;
                justify-self: center
            }

            .OUIRQO {
                color: rgba(0,0,0,.8);
                flex: 0 1 auto
            }

            .NPqej3 {
                color: rgba(0,0,0,.54);
                line-height: 1.0625rem;
                margin-top: .125rem
            }

            .xftwqk {
                margin-left: .625rem
            }

            .FO1mk_ {
                margin-top: -.375rem;
                position: absolute;
                right: 1rem;
                top: 50%
            }

            .eDKx_4 {
                display: flex
            }

            .product-shipping-options__icon-wrapper {
                justify-self: center;
                text-align: center;
                width: 1.25rem
            }

            .product-shipping-options__icon {
                color: rgba(0,0,0,.87);
                flex: 0 0 auto;
                height: 1.125rem;
                width: 1.125rem
            }

            .product-shipping-options__icon--overseas {
                height: .8125rem;
                margin-top: .25rem;
                width: 1.25rem
            }

            .product-shipping-options__content {
                flex: 1 1 auto;
                overflow: hidden
            }

            .product-shipping-options__label-help.stardust-icon {
                color: rgba(0,0,0,.87);
                cursor: pointer;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
                vertical-align: -.0625rem
            }

            .product-shipping-options__list {
                display: none;
                margin-left: -.75rem;
                margin-right: -.75rem
            }

            .product-shipping-options__list--show {
                background-color: #fff;
                display: block;
                margin-bottom: -.75rem;
                margin-top: .75rem;
                position: relative
            }

            .product-shipping-options__list--show:after,.product-shipping-options__list--show:before {
                border: solid transparent;
                bottom: calc(100% - 1px);
                content: " ";
                height: 0;
                left: 50%;
                pointer-events: none;
                position: absolute;
                width: 0
            }

            .product-shipping-options__list--show:after {
                border-bottom-color: #efefef;
                border-width: .375rem;
                margin-left: -.375rem
            }

            .product-shipping-options__list--show:before {
                border-bottom-color: rgba(0,0,0,.09);
                border-width: 6.1px;
                bottom: 100%;
                margin-left: -6.1px
            }

            .product-shipping-label {
                line-height: 1.125rem
            }

            .product-shipping-options-arrow-down {
                margin-left: .375rem
            }

            .product-shipping-options-arrow-down.stardust-icon {
                color: rgba(0,0,0,.87);
                height: .75rem;
                width: .75rem
            }

            .product-shipping-cost {
                line-height: 1.125rem;
                padding-top: .125rem
            }

            .product-shipping-cost__label {
                color: #000;
                display: inline-block
            }

            .product-shipping-cost__detail {
                display: inline-block;
                margin-left: .25rem
            }

            .product-shipping-cost__inline-icon {
                vertical-align: middle
            }

            .MP7IGc {
                display: flex
            }

            .LUAQqJ {
                display: inline-flex;
                flex-direction: row
            }

            .YRa9CH {
                color: #929292;
                margin-right: .3125rem;
                -webkit-text-decoration: line-through;
                text-decoration: line-through
            }

            ._wxhaL {
                margin-right: .75rem
            }

            .AGvOhq,._wxhaL {
                color: rgba(0,0,0,.54);
                font-size: .75rem;
                line-height: .875rem;
                margin-top: .75rem
            }

            .WjX0SZ {
                padding-top: .125rem
            }

            .wJU0ED .stardust-drawer__container {
                bottom: -51%;
                height: 51%
            }

            .EsybbW {
                display: flex;
                flex-direction: column;
                height: 100%
            }

            .JhthO3 {
                flex-grow: 1
            }

            .JhthO3,.eZzlLG {
                padding: .375rem .75rem
            }

            .eZzlLG {
                text-transform: capitalize
            }

            .BSiye3.stardust-drawer__container {
                margin: 0 auto;
                max-width: 37.5rem
            }

            .BSiye3.stardust-drawer__container,.BSiye3.stardust-drawer__container--bottom {
                bottom: 0;
                height: unset;
                left: 0;
                transform: translateY(100%)!important
            }

            .BSiye3.stardust-drawer__container--active {
                overflow-y: visible;
                transform: none!important
            }

            .bFkCnI {
                display: flex;
                flex-direction: column;
                height: 100%
            }

            .b8t56P {
                align-items: center;
                display: flex;
                justify-content: center;
                margin-bottom: 1.375rem;
                margin-top: 1.5rem;
                text-align: center
            }

            .b8t56P .ck11kK {
                height: 1.25rem;
                width: 6.25rem
            }

            .b8t56P .KqH8zV {
                color: rgba(0,0,0,.54);
                font-size: 1rem;
                margin-left: .5rem
            }

            .j_lW11 {
                flex-grow: 1;
                padding: .375rem .5rem
            }

            .j_lW11 ol,.j_lW11 ul {
                margin-top: 0;
                padding-left: 1.25rem
            }

            .pO62NV {
                padding: .5rem;
                text-transform: capitalize
            }

            .theme--ofs .pO62NV button {
                background-color: #2b1965!important
            }

            .theme--s-mart .pO62NV button {
                background-color: #066bc8!important
            }

            .lh7dvC {
                align-items: center;
                display: flex;
                padding: 0 .75rem
            }

            .DDccIx {
                font-weight: 300;
                margin-left: .5rem;
                white-space: nowrap
            }

            .product-ndd {
                align-items: center;
                display: flex;
                padding: 0 .75rem
            }

            .product-ndd__icon {
                flex-shrink: 0
            }

            .product-ndd__icon-ndd {
                height: 1.125rem
            }

            .product-ndd__icon-help {
                height: .6875rem;
                margin-left: .25rem;
                width: .6875rem
            }

            .product-ndd__desc {
                color: rgba(0,0,0,.87);
                flex: 1;
                font-weight: 300;
                margin-left: .5rem;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap
            }

            .product-ndd__pullup {
                padding: 1.375rem .75rem
            }

            .product-ndd__pullup-header {
                align-items: center;
                color: #333;
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                margin-bottom: 1.25rem
            }

            .product-ndd__pullup-icon-wrapper {
                margin-bottom: 6px
            }

            .product-ndd__pullup-title {
                margin-bottom: 6px;
                text-align: center
            }

            .product-ndd__pullup-icon {
                margin-right: .5rem
            }

            .product-ndd__pullup-icon-ndd {
                height: 1.5rem;
                margin: 0;
                width: 10.5rem
            }

            .product-ndd__pullup-desc {
                color: #555;
                white-space: pre-line
            }

            .product-ndd__pullup-desc ol,.product-ndd__pullup-desc ul {
                margin-top: 0;
                padding-left: 1.25rem
            }

            .OXULFk {
                align-items: center;
                display: flex;
                padding: 0 .75rem
            }

            .nuEo7a path {
                fill: var(--brand-primary-color,#ee4d2d)
            }

            .h6UlAV {
                color: rgba(0,0,0,.87);
                font-weight: 300;
                margin-left: .5rem
            }

            .eUrfZM {
                border-bottom: 0;
                padding-bottom: 0
            }

            .RTSkgj button {
                background: var(--brand-primary-color,#ee4d2d)!important
            }

            .product-sbs {
                align-items: center;
                display: flex;
                padding: 0 12px
            }

            .product-sbs__icon {
                flex-shrink: 0
            }

            .product-sbs__icon-sbs {
                height: 18px
            }

            .product-sbs__icon-help {
                height: 11px;
                margin-left: 4px;
                width: 11px
            }

            .product-sbs__desc {
                color: rgba(0,0,0,.87);
                flex: 1;
                font-weight: 300;
                margin-left: 8px;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap
            }

            .product-sbs__pullup {
                padding: 22px 12px
            }

            .product-sbs__pullup-header {
                align-items: center;
                color: #333;
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                margin-bottom: 20px
            }

            .product-sbs__pullup-icon-wrapper {
                margin-bottom: 6px
            }

            .product-sbs__pullup-title {
                margin-bottom: 6px;
                text-align: center
            }

            .product-sbs__pullup-icon {
                margin-right: 8px
            }

            .product-sbs__pullup-icon-sbs {
                height: 24px;
                margin: 0;
                width: 168px
            }

            .product-sbs__pullup-desc {
                color: #555;
                white-space: pre-line
            }

            .product-sbs__pullup-desc ol,.product-sbs__pullup-desc ul {
                margin-top: 0;
                padding-left: 20px
            }

            .zqysKX {
                align-items: center;
                display: flex;
                padding: 0 .75rem
            }

            .GyLvVe {
                font-weight: 300;
                margin-left: .25rem;
                white-space: nowrap
            }

            .theme--ofs .j7ycuq .fill {
                fill: #2b1965!important
            }

            .H20WEx.stardust-drawer__container {
                margin: 0 auto;
                max-width: 37.5rem
            }

            .H20WEx.stardust-drawer__container,.H20WEx.stardust-drawer__container--bottom {
                bottom: 0;
                height: unset;
                left: 0;
                transform: translateY(100%)
            }

            .H20WEx.stardust-drawer__container--active {
                overflow-y: visible;
                transform: none
            }

            .vN1T7k {
                align-items: center;
                display: flex;
                justify-content: center;
                margin-bottom: .25rem;
                margin-top: 1.5rem;
                text-align: center
            }

            .theme--ofs .vN1T7k .okJg6k .fill {
                fill: #2b1965!important
            }

            .vN1T7k .tipnt1 {
                height: 1.5rem;
                width: 3.875rem
            }

            .vN1T7k .bwdHaK {
                height: 1.875rem;
                width: 3.15625rem
            }

            .vN1T7k .i1UYGR {
                font-size: 1rem;
                font-weight: 500;
                line-height: 1.25rem;
                margin-left: .375rem
            }

            .wRbkcg {
                display: flex;
                flex-direction: column;
                height: 100%
            }

            ._00HUm {
                flex-grow: 1
            }

            ._00HUm,.nn2Z8q {
                padding: .375rem .75rem
            }

            .nn2Z8q {
                text-transform: capitalize
            }

            .theme--ofs .nn2Z8q button {
                background-color: #2b1965!important
            }

            .qdO1TI {
                align-items: center;
                display: flex;
                height: 3rem;
                overflow-y: auto;
                scrollbar-width: none;
                -webkit-overflow-scrolling: touch
            }

            .qdO1TI::-webkit-scrollbar {
                height: 0;
                width: 0
            }

            .product-drawer-shipping-option-item {
                line-height: 1rem;
                padding: 1rem .75rem
            }

            .product-drawer-shipping-option-item+.product-drawer-shipping-option-item {
                border: solid rgba(0,0,0,.09)!important;
                border-width: 1px 0 0!important
            }

            .product-drawer-shipping-option-item__channel-cost-container {
                display: flex;
                justify-content: space-between
            }

            .product-drawer-shipping-option-item__warning {
                color: rgba(0,0,0,.26)
            }

            .product-drawer-shipping-option-item__original-channel-cost {
                color: rgba(0,0,0,.26);
                display: inline-block;
                -webkit-text-decoration: line-through;
                text-decoration: line-through
            }

            .product-drawer-shipping-option-item__original-channel-cost:empty {
                padding: 0
            }

            .product-drawer-shipping-option-item__current-channel-cost {
                display: inline-block;
                padding-left: .125rem
            }

            .product-drawer-shipping-option-item__current-channel-cost--has-discount {
                color: #ee4d2d
            }

            .product-drawer-shipping-option-item__delivery-time {
                line-height: 1rem;
                margin-top: .25rem
            }

            .product-drawer-shipping-option-item__promotion-text {
                color: rgba(0,0,0,.54);
                display: inline-block;
                line-height: 1.125rem;
                padding-top: .75rem;
                white-space: pre-wrap
            }

            .product-drawer-shipping-option-item__promotion-text:empty {
                padding: 0
            }

            .product-drawer-shipping-option-item__shipping-reminder {
                color: rgba(0,0,0,.54);
                line-height: 1rem;
                margin-top: .25rem
            }

            .product-drawer-shipping-option-item__channel-name {
                color: #000;
                font-size: .875rem;
                font-weight: 500;
                line-height: 1rem
            }

            .product-drawer-shipping-option-item .pl-c-primary {
                color: #ee4d2d
            }

            .UyQxXq {
                background: rgba(0,0,0,.04);
                display: flex;
                flex-direction: column;
                height: 100%
            }

            .WihX46 {
                box-sizing: content-box;
                height: 3rem;
                justify-content: center;
                text-transform: capitalize
            }

            .Tn4Rmu,.WihX46 {
                align-items: center;
                background: #fff;
                display: flex;
                flex: 0 0 3rem
            }

            .Tn4Rmu {
                border-bottom: 1px solid #efefef;
                border-top: 1px solid #efefef;
                padding: .375rem .75rem
            }

            .FZw0eE {
                flex: 0 0 auto
            }

            .pCYydB {
                flex: 0 1 auto;
                margin-left: auto;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap
            }

            .pCYydB .stardust-icon-arrow-right {
                color: rgba(0,0,0,.54);
                font-size: .5rem;
                margin-left: .5rem
            }

            .lZasm5 {
                flex: 1;
                overflow: auto
            }

            .v6qtfP {
                background-color: #fff;
                margin: .75rem 0 0
            }

            .v6qtfP .product-drawer-shipping-option-item__warning {
                color: rgba(0,0,0,.87);
                font-size: .75rem
            }

            .QiNQsr {
                text-transform: capitalize
            }

            .QiNQsr .stardust-button--block {
                border: 0;
                border-radius: 0;
                height: 3rem;
                padding: 0
            }

            .VWf2K0 {
                background: #fff
            }

            .cQR4wF {
                border: solid rgba(0,0,0,.09)!important;
                border-width: 0 0 1px!important;
                font-weight: 500;
                height: 3rem;
                line-height: 3rem;
                margin: .5rem .75rem 0
            }

            .tlFHGi {
                background: #fff;
                padding: .875rem .75rem .5rem
            }

            .tlFHGi:last-child {
                padding-bottom: 1.5rem
            }

            .tlFHGi .product-drawer-shipping-option-item__channel-name {
                font-size: .75rem;
                font-weight: 400
            }

            .tlFHGi .product-drawer-shipping-option-item__original-channel-cost {
                font-size: .75rem
            }

            .tlFHGi .product-drawer-shipping-option-item__promotion-text {
                padding-top: 0
            }

            .tlFHGi .product-drawer-shipping-option-item__promotion-text span {
                font-size: .75rem!important
            }

            .tlFHGi .product-drawer-shipping-option-item__current-channel-cost {
                color: rgba(0,0,0,.87)
            }

            .tlFHGi .product-drawer-shipping-option-item__current-channel-cost.product-drawer-shipping-option-item__current-channel-cost--has-discount {
                color: #ee4d2d
            }

            .tlFHGi .product-drawer-shipping-option-item__current-channel-cost {
                font-size: .75rem
            }

            .tlFHGi .product-drawer-shipping-option-item__delivery-time {
                font-size: .75rem;
                margin-top: .0625rem
            }

            .tlFHGi .product-drawer-shipping-option-item__warning {
                color: rgba(0,0,0,.87);
                font-size: .75rem
            }

            .PddMlc {
                margin-right: 5px
            }

            .PR1rp0 {
                align-items: center;
                background: #fff;
                border-bottom: 1px solid #efefef;
                border-top: 1px solid #efefef;
                display: flex;
                flex: 0 0 48px;
                padding: 6px 12px
            }

            .L2HSI9 {
                flex: 0 0 auto
            }

            .awxJLd {
                flex: 0 1 auto;
                margin-left: auto;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap
            }

            .awxJLd .stardust-icon-arrow-right {
                color: rgba(0,0,0,.54);
                font-size: 8px;
                margin-left: 8px
            }

            .jQFffX {
                color: rgba(0,0,0,.54);
                font-size: .75rem;
                line-height: .875rem;
                padding: 0 .75rem 1rem
            }

            .jQFffX,.ytozli {
                background-color: #fff
            }

            .ytozli {
                border-top: 1px solid #efefef;
                padding: 12px
            }

            .gxPhDY {
                margin-right: 4px
            }

            .SsEdP1 {
                align-items: center;
                color: rgba(0,0,0,.87);
                display: flex;
                font-size: 14px;
                line-height: 16px
            }

            .BYQWiH {
                color: rgba(0,0,0,.54);
                font-size: 12px;
                line-height: 14px;
                margin-top: 4px
            }

            .vquccy .stardust-drawer__container {
                bottom: -51%;
                height: 51%
            }

            .GgpQQ1 .stardust-drawer__container {
                height: 51%;
                top: 100%
            }

            .GgpQQ1 .product-drawer-shipping-option-item+.product-drawer-shipping-option-item {
                border-top: 0!important
            }

            .Y2znRB {
                background-color: #fff;
                box-sizing: border-box;
                line-height: 1.5;
                padding: 1rem .75rem;
                position: relative
            }

            .pDzgVw {
                left: .75rem;
                position: absolute;
                top: 1rem
            }

            .hlrJyJ {
                color: rgba(0,0,0,.87);
                height: 1rem
            }

            .s2FoN4 {
                color: rgba(0,0,0,.54);
                margin-top: .25rem
            }

            .s2FoN4 ul {
                margin-bottom: 0;
                margin-top: 0;
                padding-left: 1.5rem
            }

            .hlrJyJ,.s2FoN4 {
                line-height: 1rem;
                margin-left: 2rem
            }

            .product-select-variation__text {
                flex: 1
            }

            .product-select-variation__text-secondary {
                color: rgba(0,0,0,.65)
            }

            .product-select-variation__arrow.stardust-icon {
                color: rgba(0,0,0,.87);
                flex: 0 1 auto
            }

            .stardust-input__element {
                background: #f6f6f6;
                border: 2px solid rgba(0,0,0,.09);
                border-radius: 4px;
                font-family: -apple-system,HelveticaNeue-Light,Helvetica Neue Light,Helvetica Neue,Helvetica,Roboto,Droid Sans,Arial,sans-serif;
                font-size: 12px;
                font-weight: 300;
                padding: 4px 8px;
                resize: none
            }

            .stardust-input__element:focus {
                border-color: #f9c5bb;
                box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 4px #f9c5bb;
                outline: 0
            }

            .stardust-input__element--invalid,.stardust-input__element--invalid:focus,.stardust-input__element:invalid {
                background-color: #fff1f1;
                border-color: #ff424f;
                box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 4px #ff424f;
                outline: 0
            }

            .stardust-input__element--disabled,.stardust-input__element:disabled {
                background-color: #ddd;
                cursor: not-allowed
            }

            .stardust-input__invalid-message {
                color: #ff424f;
                font-family: -apple-system,HelveticaNeue-Light,Helvetica Neue Light,Helvetica Neue,Helvetica,Roboto,Droid Sans,Arial,sans-serif;
                font-size: 12px;
                font-weight: 300
            }

            .tfBf9I {
                text-align: center;
                width: 100%
            }

            .Sywmj0 {
                color: rgba(0,0,0,.54);
                font-size: .875rem;
                font-weight: 300;
                height: 1rem
            }

            .I0zjlB {
                color: var(--brand-primary-color,#ee4d2d);
                font-size: 1.125rem;
                height: 1.3125rem;
                margin-bottom: .3125rem
            }

            .JgC5PK {
                display: flex;
                padding-bottom: .5rem;
                padding-top: .25rem
            }

            .u0fIgc {
                display: flex;
                margin-right: .75rem
            }

            .sqTygw {
                color: rgba(0,0,0,.87);
                font-weight: 400;
                margin-left: .25rem
            }

            .XraX_X,.sqTygw {
                font-size: .75rem;
                height: .875rem
            }

            .XraX_X {
                color: var(--brand-primary-color,#ee4d2d)
            }

            .stardust-horizontal-scroll-view {
                align-items: center;
                display: flex;
                overflow-x: auto;
                overflow-y: hidden;
                white-space: nowrap;
                -webkit-overflow-scrolling: touch
            }

            .AIoTgU {
                margin-left: -.75rem;
                margin-right: -.75rem;
                padding: .5rem 0 .75rem
            }

            .KkVUs7 {
                margin-left: .75rem
            }

            .jTjcIO {
                display: flex;
                margin-top: .3125rem;
                padding-right: .75rem
            }

            .gKrChj {
                color: rgba(0,0,0,.54);
                font-size: .75rem;
                margin-left: .75rem;
                margin-top: .4375rem
            }

            .kl2AeP {
                align-items: center;
                display: flex;
                flex-direction: column;
                justify-content: center;
                margin-left: 1rem;
                padding-right: 1.25rem
            }

            .Wl6AMw path {
                fill: var(--brand-primary-color,#ee4d2d)
            }

            .d9Ovio {
                color: var(--brand-primary-color,#ee4d2d);
                margin-top: .25rem
            }

            .bPaN3S {
                color: rgba(0,0,0,.54)
            }

            .bPaN3S .ARRCQC,.bPaN3S .CxH_O0,.bPaN3S .tJJN9T,.bPaN3S .x4bjBT {
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap
            }

            .bPaN3S .x4bjBT {
                font-weight: 300
            }

            .bPaN3S .tJJN9T {
                color: #ff424f;
                display: inline-flex
            }

            .bPaN3S .drz2yF .stardust-icon {
                color: #fff
            }

            .bPaN3S .Tg5n7p .shopee-icon,.bPaN3S .drz2yF .stardust-icon {
                flex: 0 1 auto;
                height: .5rem;
                width: .5rem
            }

            .DosLFj {
                align-items: center;
                background-color: #ee4d2d;
                border-radius: 2px;
                display: flex;
                justify-content: center;
                margin-bottom: 2px;
                margin-top: 6px;
                padding: 2px 4px
            }

            .DosLFj.tdup_p {
                background-color: #2b1965
            }

            .tLKi5m {
                align-items: center;
                display: flex;
                flex: 0 1 auto;
                padding: 12px 0
            }

            .tLKi5m>button {
                border-color: var(--brand-primary-color,#ee4d2d)!important;
                color: var(--brand-primary-color,#ee4d2d)!important
            }

            .sIRciZ {
                flex: 0 0 auto;
                position: relative
            }

            .R4JpMx {
                height: 54px;
                width: 54px
            }

            .ApmXFx {
                bottom: -4px;
                left: 50%;
                position: absolute;
                text-align: center;
                transform: translateX(-50%);
                width: 58px
            }

            .ApmXFx img {
                height: auto;
                width: 100%
            }

            .ApmXFx .badge__official-shop,.ApmXFx .badge__preferred {
                display: inline-flex;
                font-size: 10px;
                height: auto;
                white-space: normal
            }

            .ApmXFx .badge__mall-img {
                height: auto;
                width: 100%
            }

            .l12TzQ {
                left: 50%;
                transform: translateX(-50%);
                width: auto
            }

            .l12TzQ .badge__preferred {
                font-size: 7px;
                white-space: nowrap
            }

            .u0ReQt {
                bottom: -6px
            }

            .u0ReQt .badge__official-shop,.u0ReQt .badge__preferred {
                font-size: 9px
            }

            .dxBoqK {
                display: flex;
                flex-direction: column;
                flex-grow: 1;
                justify-content: center;
                margin-left: 10px;
                margin-right: 12px;
                overflow: hidden
            }

            .dxBoqK .badge__horizontal {
                display: inline-flex;
                font-size: 10px;
                height: 15px
            }

            .dxBoqK .stardust-icon-tick {
                font-size: 10px
            }

            .BO7Miq {
                height: 16px;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap
            }

            .NVXQAd {
                height: 15px;
                margin-top: 4px;
                overflow: hidden
            }

            .iAvbMw {
                margin-top: 4px
            }

            .iAvbMw,.iAvbMw .r0BqTb {
                align-items: center;
                color: rgba(0,0,0,.54);
                display: flex;
                font-weight: 300
            }

            .iAvbMw .r0BqTb {
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap
            }

            .iAvbMw .r7XZaM {
                height: 13px;
                margin-right: 4px;
                vertical-align: middle;
                width: 10.4px
            }

            .iAvbMw .cR39ES {
                margin: 0 6px
            }

            .xZSRYM {
                padding: 0 12px 3.3rem
            }

            .xZSRYM a {
                color: rgba(0,0,0,.87);
                font-weight: 500
            }

            ._2xlbS {
                flex: 0 0 auto;
                height: 2.5rem;
                position: relative;
                width: 2.5rem
            }

            ._2xlbS>img {
                border: .0625rem solid rgba(0,0,0,.09);
                border: .0625rem solid var(--nc-util-line,rgba(0,0,0,.09));
                border-radius: 50%;
                box-sizing: border-box
            }

            ._2bUsF {
                overflow: hidden
            }

            ._2bUsF,.bROzW {
                border-radius: 50%
            }

            .bROzW {
                background: #fff;
                padding: .0625rem
            }

            ._2Ovjm {
                background: linear-gradient(to bottom left,#ee4d2d,#fb0);
                background: linear-gradient(to bottom left,var(--nc-primary,#ee4d2d),#fb0);
                display: inline-block;
                padding: .125rem
            }

            ._2Ovjm,._3KihA {
                border-radius: 50%
            }

            ._3KihA {
                align-items: center;
                background: #f5f5f5;
                background: var(--nc-util-bg,#f5f5f5);
                border: .0625rem solid rgba(0,0,0,.09);
                border: .0625rem solid var(--nc-util-line,rgba(0,0,0,.09));
                box-sizing: border-box;
                display: flex;
                justify-content: center;
                overflow: hidden
            }

            ._3KihA._3L6HA>svg {
                margin-top: -.0625rem;
                width: 2.25rem
            }

            ._3KihA._3SJz5>svg {
                margin-top: -.0625rem;
                width: 1.375rem
            }

            ._3KihA._3olON>svg {
                margin-top: -.0625rem;
                width: 1rem
            }

            ._3KihA.WuN6w>svg {
                width: .75rem
            }

            ._3L6HA {
                height: 3.75rem
            }

            ._3L6HA,._3L6HA ._2AckJ {
                width: 3.75rem
            }

            ._3SJz5 {
                height: 2.5rem;
                width: 2.5rem
            }

            ._3SJz5 ._3ZOJS {
                right: -.25rem
            }

            ._3SJz5 ._2AckJ {
                width: 2.5rem
            }

            ._3olON {
                height: 2rem;
                width: 2rem
            }

            ._3olON ._3ZOJS {
                right: -.25rem
            }

            .WuN6w {
                height: 1.5rem;
                width: 1.5rem
            }

            ._2AckJ {
                align-items: center;
                display: flex;
                height: 1rem;
                justify-content: center
            }

            ._1c2fy,._2AckJ {
                bottom: 0;
                overflow: hidden;
                position: absolute;
                z-index: 1
            }

            ._1c2fy {
                background: rgba(0,0,0,.4);
                background: var(--nc-util-mask,rgba(0,0,0,.4));
                box-sizing: border-box;
                color: #fff;
                height: 1.5rem;
                text-align: center;
                text-overflow: ellipsis;
                white-space: nowrap;
                width: 3.75rem
            }

            ._1c2fy._1c2fy {
                line-height: 1.5rem
            }

            ._3ZOJS {
                border-radius: .5rem;
                bottom: 0;
                height: 1rem;
                overflow: hidden;
                position: absolute;
                right: 0;
                width: 1rem
            }

            .JrSi7k {
                background: #fff;
                color: inherit;
                display: block;
                -webkit-text-decoration: none;
                text-decoration: none
            }

            .aYE0_r {
                display: flex;
                justify-content: space-around;
                margin-top: 1rem
            }

            .dBfDWY {
                background-color: rgba(0,0,0,.65);
                bottom: calc(3rem - 1px);
                color: #fff;
                font-size: .75rem;
                left: 0;
                line-height: .875rem;
                padding: .5625rem;
                position: fixed;
                right: 0;
                text-align: center
            }

            .dBfDWY+.product-bottom-panel-wrapper .product-bottom-panel {
                border-top-color: rgba(0,0,0,.65)!important
            }

            .vF60t2 {
                align-items: center;
                background: #fff;
                box-shadow: 0 0 6px 0 rgba(0,0,0,.06);
                display: flex;
                height: 2.75rem;
                max-width: 37.5rem;
                padding: 0 .75rem;
                position: fixed;
                top: 0;
                width: 100%;
                z-index: 100
            }

            .htKDFX {
                background: transparent
            }

            .fDK8vk {
                flex-shrink: 0;
                line-height: 0
            }

            .OWPOSs {
                flex: 1;
                overflow: hidden;
                padding: 0 1.25rem
            }

            .HVQ8nV {
                align-items: center;
                display: flex;
                flex-shrink: 0;
                white-space: nowrap
            }

            .wrTghk+.wrTghk {
                margin-left: 1.25rem
            }

            .wrTghk {
                line-height: 0
            }

            .wrTghk .stardust-popover__popover--open {
                overflow: visible
            }

            .wrTghk .stardust-popover__target {
                height: 100%
            }

            .D8W4Bw.D8W4Bw {
                width: 1.375rem;
                fill: #ee4d2d
            }

            .D8W4Bw.D8W4Bw,.lBW5d8 {
                cursor: pointer;
                display: block;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none
            }

            .lBW5d8 {
                -webkit-text-decoration: none;
                text-decoration: none
            }

            .stardust-popover {
                position: relative
            }

            .stardust-popover:focus-visible {
                border-radius: 2px;
                outline: 2px solid #000
            }

            .stardust-popover__popover {
                position: absolute;
                will-change: transform;
                z-index: -1
            }

            .stardust-popover__popover--show {
                animation: popover-enter-animation .2s cubic-bezier(.4,0,.6,1);
                opacity: 1;
                z-index: 3
            }

            .stardust-popover__popover--border {
                border: 1px solid rgba(0,0,0,.09)
            }

            .stardust-popover__popover--hide {
                animation: popover-hide-animation .2s cubic-bezier(.4,0,.6,1)
            }

            .stardust-popover__arrow {
                position: absolute;
                will-change: transform;
                z-index: 3
            }

            .stardust-popover__arrow--inner {
                height: 0;
                left: -8px;
                position: absolute;
                width: 0
            }

            @keyframes popover-enter-animation {
                0% {
                    opacity: 0;
                    transform: scale(0)
                }

                to {
                    opacity: 1;
                    transform: scale(1)
                }
            }

            @keyframes popover-hide-animation {
                0% {
                    opacity: 1;
                    transform: scale(1)
                }

                to {
                    opacity: 0;
                    transform: scale(0)
                }
            }

            .shopee-menu {
                background-color: #fff;
                border-radius: 2px;
                box-shadow: 0 2px 4px 0 rgba(0,0,0,.5);
                position: relative
            }

            .shopee-menu__main {
                padding-top: .25rem;
                position: relative
            }

            .shopee-menu__item {
                align-items: center;
                cursor: pointer;
                display: flex;
                padding-left: .875rem
            }

            .shopee-menu__item:last-child>.shopee-menu__item-label {
                border-bottom: 0
            }

            .shopee-menu__item-icon {
                color: rgba(0,0,0,.87)!important;
                height: 1.25rem!important;
                margin-right: .75rem;
                width: 1.25rem!important
            }

            .shopee-menu__item-label {
                border-bottom: 1px solid hsla(0,0%,100%,.12);
                box-sizing: border-box;
                padding: .75rem .875rem .75rem 0
            }

            .shopee-menu__item-label:first-letter {
                text-transform: uppercase
            }

            .IQshV3 {
                background: rgba(0,0,0,.4);
                bottom: 0;
                left: 0;
                position: fixed;
                right: 0;
                top: 0;
                z-index: 1
            }

            .navbar-icon-cart {
                position: relative
            }

            .navbar-icon-cart__icon {
                width: 24px
            }

            .navbar-icon-cart__count {
                background: #ee4d2d;
                border: 1px solid #fff;
                border-radius: 9px;
                color: #fff;
                font-size: 10px;
                height: 18px;
                left: 11px;
                line-height: 12px;
                min-width: 19px;
                padding: 2px;
                position: absolute;
                text-align: center;
                top: -7px
            }

            .theme--ofs .navbar-icon-cart__count {
                background-color: #2b1965
            }

            .product-page .HctEyP {
                position: -webkit-sticky;
                position: sticky
            }

            .product-page .HctEyP svg.navbar-generic__back,.product-page .HctEyP svg.navbar-generic__menu {
                fill: currentColor!important;
                color: currentColor!important;
                stroke: currentColor!important;
                display: block;
                height: 1.875rem;
                margin: 0 auto;
                width: 1.25rem
            }

            .product-page .HctEyP svg.navbar-icon-cart__icon {
                color: currentColor!important;
                display: block;
                height: 1.875rem;
                margin: 0 auto;
                width: 1.25rem
            }

            .product-page .Y7p4Ui {
                border-radius: 50%;
                height: 1.875rem;
                width: 1.875rem
            }

            .product-page .Y7p4Ui a {
                color: inherit
            }

            .product-page .Y7p4Ui span {
                color: rgba(0,0,0,.87)
            }

            .product-page .UBteaH {
                color: #000;
                font-family: -apple-system,HelveticaNeueMedium,HelveticaNeue-Medium,Helvetica Neue Medium,Helvetica Neue,Roboto,Droid Sans,Arial Bold,Arial,sans-serif;
                font-size: 1.25rem;
                font-weight: 500;
                overflow: hidden;
                text-align: center;
                text-overflow: ellipsis;
                text-transform: capitalize;
                white-space: nowrap
            }

            .product-page .sd55Cg {
                -webkit-text-decoration: none;
                text-decoration: none
            }

            .product-page .Zh9bwi,.product-page .sd55Cg {
                cursor: pointer;
                display: block;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none
            }

            .product-page .Zh9bwi {
                stroke: #ee4d2d
            }

            .product-page .DkNQ5h,.product-page .fRkQBR {
                stroke: none!important
            }

            .flash-sale-product-band {
                background: #ee4d2d;
                color: #fff;
                display: flex;
                justify-content: space-between;
                padding: .375rem .75rem;
                width: 100%
            }

            .flash-sale-product-band__right {
                overflow: auto
            }

            .flash-sale-banner-container {
                display: flex;
                flex-direction: row
            }

            .flash-sale-banner-mini {
                background: url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/9bb0d9cfb5e0ed2084a8.png) 0 no-repeat;
                background-repeat: no-repeat;
                background-size: contain;
                height: 1rem;
                margin-right: .5rem;
                width: 5.3125rem
            }

            .flash-sale-banner-mini--ph,.flash-sale-banner-mini--sg {
                background-image: url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/5b477d0da865d4e0f7b5.png);
                background-size: 100% 100%;
                width: 5.8125rem
            }

            @media screen and (-webkit-min-device-pixel-ratio: 2),screen and (min-resolution:192dpi),screen and (min-resolution:2dppx) {
                .flash-sale-banner-mini--ph,.flash-sale-banner-mini--sg {
                    background-image:url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/6d5c6e3381c8e32cff2a.png)
                }
            }

            @media screen and (-webkit-min-device-pixel-ratio: 3),screen and (min-resolution:288dpi),screen and (min-resolution:3dppx) {
                .flash-sale-banner-mini--ph,.flash-sale-banner-mini--sg {
                    background-image:url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/faf297004c9dad053948.png)
                }
            }

            .flash-sale-banner-mini--id,.flash-sale-banner-mini--th,.flash-sale-banner-mini--vn {
                background-image: url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/9bb0d9cfb5e0ed2084a8.png);
                background-size: 100% 100%;
                width: 5.3125rem
            }

            @media screen and (-webkit-min-device-pixel-ratio: 2),screen and (min-resolution:192dpi),screen and (min-resolution:2dppx) {
                .flash-sale-banner-mini--id,.flash-sale-banner-mini--th,.flash-sale-banner-mini--vn {
                    background-image:url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/b5e4a654db203956c413.png)
                }
            }

            @media screen and (-webkit-min-device-pixel-ratio: 3),screen and (min-resolution:288dpi),screen and (min-resolution:3dppx) {
                .flash-sale-banner-mini--id,.flash-sale-banner-mini--th,.flash-sale-banner-mini--vn {
                    background-image:url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/e6dcb19cabccaf317c28.png)
                }
            }

            .flash-sale-banner-mini--tw {
                background-image: url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/aa8d37a58ef23d2b3adf.png);
                background-size: 100% 100%;
                width: 4rem
            }

            @media screen and (-webkit-min-device-pixel-ratio: 2),screen and (min-resolution:192dpi),screen and (min-resolution:2dppx) {
                .flash-sale-banner-mini--tw {
                    background-image:url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/d20b7896735b59668189.png)
                }
            }

            @media screen and (-webkit-min-device-pixel-ratio: 3),screen and (min-resolution:288dpi),screen and (min-resolution:3dppx) {
                .flash-sale-banner-mini--tw {
                    background-image:url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/23c70daae69a19eee677.png)
                }
            }

            .flash-sale-banner-mini--my {
                background-image: url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/a8c4dd3d3da96ad06e8d.png);
                background-size: 100% 100%;
                width: 6.6875rem
            }

            @media screen and (-webkit-min-device-pixel-ratio: 2),screen and (min-resolution:192dpi),screen and (min-resolution:2dppx) {
                .flash-sale-banner-mini--my {
                    background-image:url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/437b2df46a84efb792bf.png)
                }
            }

            @media screen and (-webkit-min-device-pixel-ratio: 3),screen and (min-resolution:288dpi),screen and (min-resolution:3dppx) {
                .flash-sale-banner-mini--my {
                    background-image:url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/ddd7aef27a0fd492cfb8.png)
                }
            }

            .flash-sale-banner-mini--br {
                background-image: url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/af4872df837c9c8bb3b3.png);
                background-size: 100% 100%;
                width: 8.875rem
            }

            @media screen and (-webkit-min-device-pixel-ratio: 2),screen and (min-resolution:192dpi),screen and (min-resolution:2dppx) {
                .flash-sale-banner-mini--br {
                    background-image:url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/29b86e306ec66623f2ad.png)
                }
            }

            @media screen and (-webkit-min-device-pixel-ratio: 3),screen and (min-resolution:288dpi),screen and (min-resolution:3dppx) {
                .flash-sale-banner-mini--br {
                    background-image:url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/b95b4431bb37b2ae559a.png)
                }
            }

            .flash-sale-banner-mini--ar {
                background: url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/c47a7187e3f4905689f0.png) 0 no-repeat;
                background-size: contain;
                width: 6.875rem
            }

            .flash-sale-banner-mini--cl,.flash-sale-banner-mini--co,.flash-sale-banner-mini--mx {
                background: url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/8ecf3d7c7c4f512729ca.png) 0 no-repeat;
                background-size: contain
            }

            .flash-sale-banner-mini--fr {
                background: url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/7609e5079881acad76b5.png) 0 no-repeat;
                background-size: contain;
                width: 6.875rem
            }

            .flash-sale-banner-mini--pl {
                background-image: url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/be3a5e46fdc184f45db7.png);
                background-size: 100% 100%;
                width: 6.875rem
            }

            @media screen and (-webkit-min-device-pixel-ratio: 2),screen and (min-resolution:192dpi),screen and (min-resolution:2dppx) {
                .flash-sale-banner-mini--pl {
                    background-image:url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/32a17a15ff7939d78498.png)
                }
            }

            @media screen and (-webkit-min-device-pixel-ratio: 3),screen and (min-resolution:288dpi),screen and (min-resolution:3dppx) {
                .flash-sale-banner-mini--pl {
                    background-image:url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/dab8d8acb0c8a6519159.png)
                }
            }

            .flash-sale-banner-mini--es {
                background-image: url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/4f8dd0bf904f0ab7ab32.png);
                background-size: 100% 100%;
                width: 7.5625rem
            }

            @media screen and (-webkit-min-device-pixel-ratio: 2),screen and (min-resolution:192dpi),screen and (min-resolution:2dppx) {
                .flash-sale-banner-mini--es {
                    background-image:url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/cdf743e45a88675b3682.png)
                }
            }

            @media screen and (-webkit-min-device-pixel-ratio: 3),screen and (min-resolution:288dpi),screen and (min-resolution:3dppx) {
                .flash-sale-banner-mini--es {
                    background-image:url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/f1c3521212d423f2c3b8.png)
                }
            }

            .flash-sale-banner-mini--in {
                background-image: url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/58f6a8bb360e60eae335.png);
                background-size: 100% 100%;
                width: 5.625rem
            }

            @media screen and (-webkit-min-device-pixel-ratio: 2),screen and (min-resolution:192dpi),screen and (min-resolution:2dppx) {
                .flash-sale-banner-mini--in {
                    background-image:url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/40610d3958a6f7a5e50b.png)
                }
            }

            @media screen and (-webkit-min-device-pixel-ratio: 3),screen and (min-resolution:288dpi),screen and (min-resolution:3dppx) {
                .flash-sale-banner-mini--in {
                    background-image:url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/682c6f4b0c472010ad30.png)
                }
            }

            .flash-sale-amount-sold {
                text-align: right;
                text-transform: capitalize
            }

            .flash-sale-product-band-countdown-timer {
                margin-left: .25rem;
                margin-top: .25rem;
                transform: scale(.7);
                transform-origin: right
            }

            .flash-sale-product-band-countdown-timer__wrapper {
                align-items: center;
                display: flex;
                justify-content: flex-end;
                width: 100%
            }

            .flash-sale-product-band-countdown-timer .shopee-countdown-timer__number {
                background: #ee4d2d!important;
                border: 1px solid #fff
            }

            .flash-sale-product-band-ends-in {
                color: #fff;
                margin-right: -1.75rem;
                overflow: hidden;
                text-overflow: ellipsis;
                text-transform: uppercase;
                white-space: nowrap
            }

            .flash-sale-extra-discount-badge {
                border: 1px solid #fff;
                border-radius: .0625rem;
                color: #fff;
                display: flex;
                flex-direction: column;
                font-size: .625rem;
                font-weight: 400;
                height: 1rem;
                justify-content: center;
                margin-right: .5rem;
                padding-left: .25rem;
                padding-right: .25rem;
                white-space: nowrap
            }

            .DLaKKA,.y815_o {
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap
            }

            .Qp0UMi {
                align-items: center;
                display: flex;
                height: 1.5rem;
                margin-top: .3125rem
            }

            .DLaKKA {
                color: #fff;
                margin-right: .25rem;
                -webkit-text-decoration: line-through;
                text-decoration: line-through
            }

            .y815_o {
                align-items: baseline;
                color: #fff;
                display: block;
                font-size: .875rem;
                font-weight: 400;
                max-width: 8rem
            }

            .wrz3lI {
                line-height: 0;
                margin-left: .25rem
            }

            @keyframes second-ten {
                0% {
                    transform: translateY(0)
                }

                15% {
                    transform: translateY(0)
                }

                16.66% {
                    transform: translateY(-17px)
                }

                31.66% {
                    transform: translateY(-17px)
                }

                33.33% {
                    transform: translateY(-34px)
                }

                48.33% {
                    transform: translateY(-34px)
                }

                50% {
                    transform: translateY(-51px)
                }

                65% {
                    transform: translateY(-51px)
                }

                66.66% {
                    transform: translateY(-68px)
                }

                81.66% {
                    transform: translateY(-68px)
                }

                83.33% {
                    transform: translateY(-85px)
                }

                98.33% {
                    transform: translateY(-85px)
                }

                to {
                    transform: translateY(-102px)
                }
            }

            @keyframes second-digit {
                0% {
                    transform: translateY(0)
                }

                10% {
                    transform: translateY(-17px)
                }

                20% {
                    transform: translateY(-34px)
                }

                30% {
                    transform: translateY(-51px)
                }

                40% {
                    transform: translateY(-68px)
                }

                50% {
                    transform: translateY(-85px)
                }

                60% {
                    transform: translateY(-102px)
                }

                70% {
                    transform: translateY(-119px)
                }

                80% {
                    transform: translateY(-136px)
                }

                90% {
                    transform: translateY(-153px)
                }

                to {
                    transform: translateY(-170px)
                }
            }

            @keyframes minute-ten {
                0% {
                    transform: translateY(0)
                }

                16.633888% {
                    transform: translateY(0)
                }

                16.666666% {
                    transform: translateY(-17px)
                }

                33.305555% {
                    transform: translateY(-17px)
                }

                33.333333% {
                    transform: translateY(-34px)
                }

                49.972222% {
                    transform: translateY(-34px)
                }

                50% {
                    transform: translateY(-51px)
                }

                66.633888% {
                    transform: translateY(-51px)
                }

                66.666666% {
                    transform: translateY(-68px)
                }

                83.305555% {
                    transform: translateY(-68px)
                }

                83.333333% {
                    transform: translateY(-85px)
                }

                99.972222% {
                    transform: translateY(-85px)
                }

                to {
                    transform: translateY(-102px)
                }
            }

            @keyframes minute-digit {
                0% {
                    transform: translateY(0)
                }

                9.833% {
                    transform: translateY(0)
                }

                10% {
                    transform: translateY(-17px)
                }

                19.833% {
                    transform: translateY(-17px)
                }

                20% {
                    transform: translateY(-34px)
                }

                29.833% {
                    transform: translateY(-34px)
                }

                30% {
                    transform: translateY(-51px)
                }

                39.833% {
                    transform: translateY(-51px)
                }

                40% {
                    transform: translateY(-68px)
                }

                49.833% {
                    transform: translateY(-68px)
                }

                50% {
                    transform: translateY(-85px)
                }

                59.833% {
                    transform: translateY(-85px)
                }

                60% {
                    transform: translateY(-102px)
                }

                69.833% {
                    transform: translateY(-102px)
                }

                70% {
                    transform: translateY(-119px)
                }

                79.833% {
                    transform: translateY(-119px)
                }

                80% {
                    transform: translateY(-136px)
                }

                89.833% {
                    transform: translateY(-136px)
                }

                90% {
                    transform: translateY(-153px)
                }

                99.833% {
                    transform: translateY(-153px)
                }

                to {
                    transform: translateY(-170px)
                }
            }

            @keyframes hour-hundred {
                0% {
                    transform: translateY(0)
                }

                9.999972222% {
                    transform: translateY(0)
                }

                10% {
                    transform: translateY(-17px)
                }

                19.999972222% {
                    transform: translateY(-17px)
                }

                20% {
                    transform: translateY(-34px)
                }

                29.999972222% {
                    transform: translateY(-34px)
                }

                30% {
                    transform: translateY(-51px)
                }

                39.999972222% {
                    transform: translateY(-51px)
                }

                40% {
                    transform: translateY(-68px)
                }

                49.999972222% {
                    transform: translateY(-68px)
                }

                50% {
                    transform: translateY(-85px)
                }

                59.999972222% {
                    transform: translateY(-85px)
                }

                60% {
                    transform: translateY(-102px)
                }

                69.999972222% {
                    transform: translateY(-102px)
                }

                70% {
                    transform: translateY(-119px)
                }

                79.999972222% {
                    transform: translateY(-119px)
                }

                80% {
                    transform: translateY(-136px)
                }

                89.999972222% {
                    transform: translateY(-136px)
                }

                90% {
                    transform: translateY(-153px)
                }

                99.999972222% {
                    transform: translateY(-153px)
                }

                to {
                    transform: translateY(-170px)
                }
            }

            @keyframes hour-ten {
                0% {
                    transform: translateY(0)
                }

                9.99972222% {
                    transform: translateY(0)
                }

                10% {
                    transform: translateY(-17px)
                }

                19.99972222% {
                    transform: translateY(-17px)
                }

                20% {
                    transform: translateY(-34px)
                }

                29.99972222% {
                    transform: translateY(-34px)
                }

                30% {
                    transform: translateY(-51px)
                }

                39.99972222% {
                    transform: translateY(-51px)
                }

                40% {
                    transform: translateY(-68px)
                }

                49.99972222% {
                    transform: translateY(-68px)
                }

                50% {
                    transform: translateY(-85px)
                }

                59.99972222% {
                    transform: translateY(-85px)
                }

                60% {
                    transform: translateY(-102px)
                }

                69.99972222% {
                    transform: translateY(-102px)
                }

                70% {
                    transform: translateY(-119px)
                }

                79.99972222% {
                    transform: translateY(-119px)
                }

                80% {
                    transform: translateY(-136px)
                }

                89.99972222% {
                    transform: translateY(-136px)
                }

                90% {
                    transform: translateY(-153px)
                }

                99.99972222% {
                    transform: translateY(-153px)
                }

                to {
                    transform: translateY(-170px)
                }
            }

            @keyframes hour-digit {
                0% {
                    transform: translateY(0)
                }

                9.9972222% {
                    transform: translateY(0)
                }

                10% {
                    transform: translateY(-17px)
                }

                19.9972222% {
                    transform: translateY(-17px)
                }

                20% {
                    transform: translateY(-34px)
                }

                29.9972222% {
                    transform: translateY(-34px)
                }

                30% {
                    transform: translateY(-51px)
                }

                39.9972222% {
                    transform: translateY(-51px)
                }

                40% {
                    transform: translateY(-68px)
                }

                49.9972222% {
                    transform: translateY(-68px)
                }

                50% {
                    transform: translateY(-85px)
                }

                59.9972222% {
                    transform: translateY(-85px)
                }

                60% {
                    transform: translateY(-102px)
                }

                69.9972222% {
                    transform: translateY(-102px)
                }

                70% {
                    transform: translateY(-119px)
                }

                79.9972222% {
                    transform: translateY(-119px)
                }

                80% {
                    transform: translateY(-136px)
                }

                89.9972222% {
                    transform: translateY(-136px)
                }

                90% {
                    transform: translateY(-153px)
                }

                99.9972222% {
                    transform: translateY(-153px)
                }

                to {
                    transform: translateY(-170px)
                }
            }

            .shopee-countdown-timer {
                align-items: center;
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
                color: #000;
                cursor: default;
                display: flex
            }

            .shopee-countdown-timer__colon {
                background-position-y: 3px;
                display: flex;
                flex-direction: column;
                font-size: 20px;
                font-weight: 400;
                height: 17px;
                margin: 0 2px;
                text-align: center;
                width: 3px
            }

            .shopee-countdown-timer__colon--flashing-off {
                opacity: 0
            }

            .shopee-countdown-timer__number {
                background: currentColor;
                border-radius: 2px;
                box-sizing: content-box;
                display: flex;
                font-size: 19px;
                height: 17px;
                justify-content: space-around;
                line-height: 20px;
                margin-bottom: 4px;
                min-width: 20px;
                overflow: hidden;
                padding: 1px 3px;
                text-align: center
            }

            .shopee-countdown-timer__number__deca,.shopee-countdown-timer__number__hexa {
                display: inline-block;
                height: 187px;
                overflow: hidden;
                width: 9px
            }

            .shopee-countdown-timer__number__deca--second {
                animation-duration: 10s;
                animation-iteration-count: infinite;
                animation-name: second-digit
            }

            .shopee-countdown-timer__number__hexa--second {
                animation-duration: 60s;
                animation-iteration-count: infinite;
                animation-name: second-ten
            }

            .shopee-countdown-timer__number__deca--minute {
                animation-duration: 600s;
                animation-iteration-count: infinite;
                animation-name: minute-digit
            }

            .shopee-countdown-timer__number__hexa--minute {
                animation-duration: 3600s;
                animation-iteration-count: infinite;
                animation-name: minute-ten
            }

            .shopee-countdown-timer__number__deca--hour {
                animation-duration: 36000s;
                animation-iteration-count: infinite;
                animation-name: hour-digit
            }

            .shopee-countdown-timer__number__hexa--hour {
                animation-duration: 360000s;
                animation-iteration-count: infinite;
                animation-name: hour-ten
            }

            .shopee-countdown-timer__number__hund--hour {
                animation-duration: 3600000s;
                animation-iteration-count: infinite;
                animation-name: hour-hundred
            }

            .shopee-countdown-timer__number__item {
                height: 17px;
                position: relative;
                width: 9px
            }

            .shopee-countdown-timer__number__item svg {
                height: 13px;
                left: 50%;
                position: absolute;
                top: 50%;
                transform: translate(-50%,-50%);
                width: 17px;
                fill: #fff;
                stroke: #fff;
                overflow: visible
            }

            .colon-dot {
                background: currentColor;
                border-radius: 100%;
                height: 3px;
                left: 0;
                position: absolute;
                top: 10%;
                width: 3px
            }

            .colon-dot__wrapper {
                height: 50%;
                position: relative;
                width: 100%
            }

            .RzWDnq {
                background-repeat: no-repeat;
                background-size: contain;
                padding-top: 15.66667%;
                position: relative
            }

            .RzWDnq .LI1Uhm {
                display: flex;
                flex-direction: column;
                height: 100%;
                justify-content: center;
                left: 0;
                padding: .5rem .75rem;
                position: absolute;
                top: 0
            }

            .RzWDnq .LI1Uhm .CiV7Kn {
                color: #fff;
                font-size: 1.125rem;
                line-height: 1.375rem
            }

            .RzWDnq .LI1Uhm .Odp1so {
                color: #fff;
                font-size: .875rem;
                line-height: 1rem;
                -webkit-text-decoration: line-through;
                text-decoration: line-through
            }

            .RzWDnq .rJnHNt {
                display: inline-block;
                margin-left: .25rem
            }

            .hWej6u {
                display: flex;
                padding: 0 .75rem
            }

            .DrwyWr,.JmXrXB {
                margin-right: .25rem
            }

            .Y1aPGB {
                color: inherit;
                transform: scale(88.23529%);
                transform-origin: left
            }

            .HDZvJq {
                display: flex;
                flex-direction: column;
                height: 100%;
                justify-content: space-between
            }

            .GSMuS_ {
                padding: 0 .75rem
            }

            .h1xJBv {
                font-size: .875rem;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap
            }

            .FdTAto {
                display: flex;
                flex-direction: column;
                height: 100%;
                justify-content: space-between;
                position: relative
            }

            .ljkGM5 {
                padding: 0 3.75rem 0 .75rem
            }

            .PfMuis {
                font-size: 1rem;
                font-weight: 300;
                line-height: 1.0625rem;
                -webkit-text-decoration: line-through;
                text-decoration: line-through
            }

            .YZN187 {
                font-size: 1.25rem;
                line-height: 1.5rem
            }

            .lCng_Z {
                font-size: .875rem;
                line-height: 1rem;
                position: absolute;
                right: .625rem;
                top: 50%;
                transform: translateY(-50%)
            }

            .oc36a7 {
                background-size: contain;
                padding-top: 20.83333%;
                position: relative
            }

            .JXW6FD {
                bottom: 0;
                left: 0;
                padding: .5rem 0;
                position: absolute;
                right: 0;
                top: 0
            }

            .mIHg3O {
                background-color: #fffaea;
                color: rgba(0,0,0,.87);
                cursor: pointer;
                display: flex;
                height: inherit;
                padding: .75rem;
                position: relative;
                -webkit-text-decoration: none;
                text-decoration: none;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none
            }

            .gGlHMY {
                text-align: center;
                width: 1.25rem
            }

            .V6yEK_ {
                background-image: url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/2a5afa7c48cac075199d.png);
                background-size: 100% 100%;
                display: inline-block;
                height: 1rem;
                vertical-align: middle;
                width: 1rem
            }

            @media screen and (-webkit-min-device-pixel-ratio: 2),screen and (min-resolution:192dpi),screen and (min-resolution:2dppx) {
                .V6yEK_ {
                    background-image:url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/1eee42fb253321de9c0d.png)
                }
            }

            @media screen and (-webkit-min-device-pixel-ratio: 3),screen and (min-resolution:288dpi),screen and (min-resolution:3dppx) {
                .V6yEK_ {
                    background-image:url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/cc071cef4934813368c1.png)
                }
            }

            .LlPR0m {
                margin-left: .5rem
            }

            .mkZ3hp {
                color: #00bfa5;
                display: inline-block;
                margin-bottom: .25rem;
                vertical-align: middle
            }

            .slHjNs {
                color: rgba(0,0,0,.54);
                font-weight: 300
            }

            .product-social-link {
                display: inline-block;
                margin-right: .75rem;
                vertical-align: middle
            }

            .product-social-link--facebook>.product-social-link__main {
                background: #3e59a5;
                color: #fff
            }

            .product-social-link--facebook .product-social-link__text {
                color: #fff
            }

            .product-social-link__main {
                border: 1px solid rgba(0,0,0,.09);
                border-radius: .125rem;
                display: inline-block;
                height: 1.125rem;
                line-height: 1rem;
                padding-left: .25rem;
                padding-right: .25rem;
                vertical-align: middle
            }

            .product-social-link__logo {
                background-size: contain;
                display: inline-block;
                height: 10px;
                line-height: 1rem;
                vertical-align: -10%;
                width: 10px
            }

            .product-social-link__logo--facebook {
                background-image: url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/56f1bc740f596da7272b.png);
                background-size: 100% 100%
            }

            @media screen and (-webkit-min-device-pixel-ratio: 2),screen and (min-resolution:192dpi),screen and (min-resolution:2dppx) {
                .product-social-link__logo--facebook {
                    background-image:url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/6d600dc3c01de187608c.png)
                }
            }

            @media screen and (-webkit-min-device-pixel-ratio: 3),screen and (min-resolution:288dpi),screen and (min-resolution:3dppx) {
                .product-social-link__logo--facebook {
                    background-image:url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/2d288fd794c08b312a00.png)
                }
            }

            .product-social-link__logo--twitter {
                background-image: url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/53b90b9bc67264e9311f.png);
                background-size: 100% 100%
            }

            @media screen and (-webkit-min-device-pixel-ratio: 2),screen and (min-resolution:192dpi),screen and (min-resolution:2dppx) {
                .product-social-link__logo--twitter {
                    background-image:url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/f5f4277662e633c1f0bb.png)
                }
            }

            @media screen and (-webkit-min-device-pixel-ratio: 3),screen and (min-resolution:288dpi),screen and (min-resolution:3dppx) {
                .product-social-link__logo--twitter {
                    background-image:url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/ae629180063409037fc5.png)
                }
            }

            .product-social-link__logo--pinterest {
                background-image: url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/34b34956b4e25293fa2d.png);
                background-position: 0 -2px;
                background-size: 100% 100%;
                height: 20px;
                width: 20px
            }

            @media screen and (-webkit-min-device-pixel-ratio: 2),screen and (min-resolution:192dpi),screen and (min-resolution:2dppx) {
                .product-social-link__logo--pinterest {
                    background-image:url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/7ac000f3bdcc42744eaa.png)
                }
            }

            @media screen and (-webkit-min-device-pixel-ratio: 3),screen and (min-resolution:288dpi),screen and (min-resolution:3dppx) {
                .product-social-link__logo--pinterest {
                    background-image:url(https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/0af41253a8bd34418387.png)
                }
            }

            .product-social-link__text {
                color: rgba(0,0,0,.87);
                display: inline-block;
                line-height: 1rem;
                padding-left: .25rem
            }

            .product-social-link__text:empty {
                padding: 0
            }

            .product-social-link__count {
                border: 1px solid rgba(0,0,0,.09);
                border-radius: .125rem;
                color: rgba(0,0,0,.87);
                display: inline-block;
                height: 1.125rem;
                line-height: 1rem;
                margin-left: .375rem;
                padding-left: .125rem;
                padding-right: .125rem;
                position: relative;
                vertical-align: middle
            }

            .product-social-link__count:after,.product-social-link__count:before {
                border: solid transparent;
                content: " ";
                height: 0;
                pointer-events: none;
                position: absolute;
                right: 100%;
                top: 50%;
                width: 0
            }

            .product-social-link__count:after {
                border-right-color: #fff;
                border-width: 3px;
                margin-top: -3px
            }

            .product-social-link__count:before {
                border-right-color: rgba(0,0,0,.09);
                border-width: 3.4142px;
                margin-top: -3.4142px;
                right: calc(100% + 1px)
            }

            .HbSaLB {
                margin-top: .75rem;
                padding: 0 .75rem .75rem
            }

            .HbSaLB:only-child {
                padding: .75rem
            }

            .scroll-to-top {
                bottom: .875rem;
                cursor: pointer;
                height: 2.6875rem;
                position: fixed;
                right: .875rem;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
                width: 2.6875rem;
                z-index: 8999
            }

            .scroll-to-top--with-safe-area-inset-bottom {
                transform: translateY(calc(var(--safe-area-inset-bottom, 0)*-1))
            }

            .GbLCyv {
                padding-top: 1.125rem;
                position: relative
            }

            .Qdyhdk {
                background: #ee4d2d;
                border-radius: .3125rem;
                border-top: 0;
                color: #fff;
                font-size: .875rem;
                font-weight: 300;
                height: 2rem;
                line-height: 2rem;
                margin: 1.25rem;
                width: calc(100% - 40px)
            }

            .QeAcRt {
                display: block;
                margin: .625rem auto 2.5rem
            }

            .VEXaIq {
                color: rgba(0,0,0,.45);
                cursor: pointer;
                height: .75rem;
                position: absolute;
                right: .9375rem;
                top: .9375rem;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
                width: .75rem
            }

            .NlnvIx {
                color: rgba(0,0,0,.65);
                font-size: .8125rem;
                line-height: 1rem;
                text-align: center
            }

            .rTzLFY {
                background: #fff;
                border: solid rgba(0,0,0,.09)!important;
                border-width: 1px 0 0!important;
                bottom: 0;
                box-shadow: 0 0 6px 0 rgba(0,0,0,.09);
                color: #fff;
                display: flex;
                font-size: .6875rem;
                height: 3rem;
                line-height: 1;
                max-width: 37.5rem;
                position: fixed;
                width: 100%;
                z-index: 101
            }

            .Hy5vcQ {
                opacity: .5
            }

            .bSRc8t {
                background: linear-gradient(-90deg,#ee4d2d,#ffa98e 1%);
                display: flex;
                flex: 3
            }

            .SgqSh9 {
                align-items: center;
                display: flex;
                flex-direction: column;
                justify-content: center;
                text-transform: capitalize
            }

            .zoOiAC {
                font-size: 1rem;
                margin-bottom: 4px
            }

            .Uwglmr {
                color: rgba(0,0,0,.65);
                flex: 1
            }

            .Uwglmr>.stardust-icon {
                fill: rgba(0,0,0,.5);
                height: 24px;
                margin-bottom: 2px;
                width: 24px
            }

            .lrftHW {
                flex: 19
            }

            .Fts7ee {
                background: #ee4d2d;
                flex: 23
            }

            .theme--ofs .rTzLFY .bSRc8t {
                background: linear-gradient(-90deg,#2b1965,#eb929e 1%)
            }

            .theme--ofs .rTzLFY .Fts7ee {
                background: #2b1965
            }

            :root {
                --safe-area-inset-bottom: 0;
                --safe-area-inset-bottom: env(safe-area-inset-bottom,0)
            }

            .product-bottom-panel {
                background-color: #fff;
                border: solid rgba(0,0,0,.09)!important;
                border-width: 1px 0 0!important;
                bottom: 0;
                box-shadow: 0 0 6px 0 rgba(0,0,0,.09);
                display: flex;
                height: calc(48px + var(--safe-area-inset-bottom, 0));
                max-height: 4.25rem;
                max-width: 37.5rem;
                position: fixed;
                width: 100%;
                z-index: 101
            }

            .product-bottom-panel__add-to-cart,.product-bottom-panel__buy-now,.product-bottom-panel__chat-now {
                align-items: center;
                background-color: #00bfa5;
                color: #fff;
                cursor: pointer;
                display: flex;
                flex: 1;
                font-size: .625rem;
                justify-content: center;
                max-height: 3rem;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none
            }

            .product-bottom-panel__add-to-cart span.disabled,.product-bottom-panel__add-to-cart svg.disabled,.product-bottom-panel__buy-now span.disabled,.product-bottom-panel__buy-now svg.disabled,.product-bottom-panel__chat-now span.disabled,.product-bottom-panel__chat-now svg.disabled {
                opacity: .5
            }

            .product-bottom-panel__add-to-cart,.product-bottom-panel__chat-now {
                flex-direction: column
            }

            .product-bottom-panel__add-to-cart .stardust-icon,.product-bottom-panel__chat-now .stardust-icon {
                flex: 0 1 auto;
                height: 1.5rem;
                margin-bottom: .25rem;
                width: 1.5rem
            }

            .product-bottom-panel__add-to-cart-text,.product-bottom-panel__chat-now-text {
                flex: 0 1 auto;
                white-space: nowrap
            }

            .product-bottom-panel__buy-now {
                background-color: #ee4d2d;
                flex: 2;
                font-size: .875rem
            }

            .product-bottom-panel__separator {
                align-items: center;
                background-color: #00bfa5;
                display: flex;
                flex: 0;
                max-height: 3rem
            }

            .product-bottom-panel__separator-real {
                border: solid rgba(0,0,0,.09)!important;
                border-width: 0 0 0 1px!important;
                flex: 0;
                height: 1.75rem
            }

            .product-bottom-panel__coming-soon-bar {
                align-items: center;
                background-color: rgba(0,0,0,.26);
                color: #fff;
                display: flex;
                flex: 3;
                font-size: 1.125rem;
                justify-content: center;
                max-height: 3rem
            }

            .product-cart-and-buy-buttons {
                display: flex;
                flex: 3;
                flex-direction: row
            }

            .theme--ofs .product-bottom-panel {
                background-color: #fff
            }

            .theme--ofs .product-bottom-panel__add-to-cart,.theme--ofs .product-bottom-panel__chat-now,.theme--ofs .product-bottom-panel__separator {
                background-color: #fff;
                color: rgba(0,0,0,.87)
            }

            .theme--ofs .product-bottom-panel__buy-now {
                background-color: #2b1965
            }

            .theme--ofs .product-bottom-panel__chat-now-icon {
                color: #2b1965
            }

            .theme--s-mart .product-bottom-panel {
                background-color: #fff
            }

            .theme--s-mart .product-bottom-panel__add-to-cart,.theme--s-mart .product-bottom-panel__chat-now,.theme--s-mart .product-bottom-panel__separator {
                background-color: #fff;
                color: rgba(0,0,0,.87)
            }

            .theme--s-mart .product-bottom-panel__add-to-cart-icon {
                color: #066bc8;
                stroke: #066bc8
            }

            .theme--s-mart .product-bottom-panel__buy-now {
                background-color: #066bc8
            }

            .theme--s-mart .product-bottom-panel__chat-now-icon {
                color: #066bc8
            }

            .YJEy32 .stardust-popup-title {
                margin-bottom: 1rem
            }

            .YJEy32 .stardust-popup-button--secondary {
                color: rgba(0,0,0,.87)
            }

            .NN_ayE {
                overflow: auto;
                padding: 0 5px;
                word-break: break-word
            }

            .vVbLX0 {
                margin-top: 6px
            }

            .mvPlRI {
                position: relative
            }

            .mvPlRI img {
                vertical-align: bottom
            }

            .t08Zsa {
                visibility: hidden
            }

            .RUOHJR {
                align-items: center;
                bottom: 0;
                display: flex;
                height: 100%;
                justify-content: center;
                left: 0;
                position: absolute;
                right: 0;
                top: 0;
                width: 100%
            }

            .VFmziw {
                opacity: 0
            }

            .Zif342 {
                opacity: 1;
                transition: opacity .2s ease
            }

            .iCETAq {
                background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23e5e4e4' viewBox='0 0 54 61'%3E%3Cpath stroke='none' d='M51.2 16.9H38.7C38.7 11.6 36 .6 27 .5 17.4.4 15.2 12.4 15.2 16.9H2.8c-3.4 0-2.7 3.4-2.7 3.4l2.4 33s-.1 7.3 6.3 7.5h36.5c6.2-.4 6.3-7.5 6.3-7.5l2.4-33c0-.1.5-3.5-2.8-3.4M27.1 4.2c7.1.2 7.9 11.7 7.7 12.6H19.1c-.1-.9.4-12.4 8-12.6m9.1 44.6c-1 1.7-2.7 3-5 3.7-1.2.4-2.4.5-3.6.5-3.2 0-6.5-1.1-9.3-3.3-.8-.6-1-1.5-.5-2.3.2-.4.7-.7 1.2-.8.4-.1.9 0 1.2.3 3.2 2.4 8.3 4 11.9 1.6 1.4-.9 2.1-2.7 1.6-4.3s-2.2-2.7-3.5-3.4c-1-.6-2.1-1-3.3-1.4-.9-.3-1.9-.7-2.9-1.2q-3.6-1.8-4.8-4.2c-1.2-2.3-.6-5.4 1.4-7.5 3.6-3.8 10-3.2 14-.4.9.6.9 1.7.4 2.5s-1.4.9-2.2.4c-2-1.4-4.4-2-6.4-1.7s-4.7 2-4.4 4.6c.2 1.5 2 2.6 3.3 3.3.8.4 1.5.7 2.3.9 4.3 1.3 7.2 3.3 8.6 5.7 1.2 2.1 1.2 4.9 0 7'/%3E%3C/svg%3E");
                background-position: 50%;
                background-repeat: no-repeat;
                background-size: contain;
                height: 60px;
                max-height: 100%;
                max-width: 100%;
                width: 60px
            }

            .fe0zef .iG_OfC {
                bottom: 0;
                right: 0
            }

            .fe0zef .iG_OfC,.iG_OfC {
                left: 0;
                opacity: 0;
                pointer-events: none;
                position: absolute;
                top: 0;
                z-index: -1
            }

            .iG_OfC {
                height: 100%;
                width: 100%
            }

            .LR42CN {
                background: rgba(0,0,0,.4);
                border-radius: .75rem;
                color: #fff;
                display: inline-block;
                font-family: Roboto;
                font-size: 1.25rem;
                height: 1.5rem;
                line-height: 1.5rem;
                padding: 0 .5rem
            }

            .frTyeY {
                background: #000;
                bottom: 0;
                height: 100%;
                position: fixed;
                right: 0;
                top: 0;
                z-index: 99999
            }

            .QKhXmS,.frTyeY {
                left: 0;
                width: 100%
            }

            .QKhXmS {
                align-items: center;
                display: flex;
                height: 1.5rem;
                justify-content: center;
                position: absolute;
                top: 1.25rem;
                z-index: 5
            }

            .QKhXmS .wpYGgZ {
                padding: 0 .25rem;
                position: absolute;
                right: .9375rem;
                top: 0
            }

            .xy1TEN {
                align-items: center;
                display: flex;
                height: 1.5rem;
                justify-content: center;
                top: calc(50% + 50vw + .5rem);
                z-index: 5
            }

            .GAbLVZ,.xy1TEN {
                left: 0;
                position: absolute;
                width: 100%
            }

            .GAbLVZ,.pQy82B {
                height: calc(100% - 6.5rem);
                top: 2.5rem
            }

            .pQy82B {
                width: 100%
            }

            .pQy82B,.t_otSg {
                left: 0;
                position: absolute
            }

            .t_otSg {
                height: 100vw;
                top: calc(50% - 50vw);
                width: 100vw
            }

            .t_otSg,.t_otSg .stardust-carousel__item,.t_otSg .stardust-carousel__item-list,.t_otSg .stardust-carousel__item-list-wrapper {
                overflow: visible
            }

            .t_otSg .stardust-carousel__item-inner-wrapper {
                display: block!important
            }

            .TrEFsv {
                height: 100vw;
                position: relative;
                width: 100vw
            }

            .TrEFsv .KWxCq7 {
                background-color: #fafafa
            }

            .TrEFsv .dtrCap {
                height: 100vw;
                left: 0;
                position: absolute;
                top: 0;
                width: 100vw
            }

            .TrEFsv .Dxmddl {
                background-position: 50%;
                height: 100%;
                width: 100%
            }

            .xlF5ZE {
                border-radius: 4px;
                margin-right: 12px;
                overflow: hidden;
                position: relative
            }

            .zs5EOj {
                height: 128px;
                width: 128px
            }

            .k25XJ0 {
                height: 20px;
                position: absolute;
                right: 2px;
                top: 2px;
                width: 20px
            }

            .fade-enter {
                opacity: .01
            }

            .fade-enter-active {
                opacity: 1;
                transition: all .2s ease-in-out
            }

            .fade-exit {
                opacity: 1
            }

            .fade-exit-active {
                opacity: .01;
                transition: all .2s ease-in-out
            }

            .wrap {
                transform: translate(-50%,-50%);
                z-index: 9999
            }

            .fadescale-enter {
                opacity: .01;
                transform: translate(-50%,-50%) scale(.5)
            }

            .fadescale-enter-active {
                transition: all .2s ease-in-out
            }

            .fadescale-enter-active,.fadescale-exit {
                opacity: 1;
                transform: translate(-50%,-50%) scale(1)
            }

            .fadescale-exit-active {
                opacity: .01;
                transform: translate(-50%,-50%) scale(.5);
                transition: all .2s ease-in-out
            }

            .RHS4G1 {
                background-color: #fff
            }

            .aB8CUn {
                color: rgba(0,0,0,.87);
                font-size: .875rem;
                line-height: 1rem
            }

            .PyG7Id {
                color: rgba(0,0,0,.54);
                font-size: .625rem;
                line-height: .75rem
            }

            .Ld8lEI {
                flex: 1;
                overflow: hidden
            }

            .pSRzYR {
                background-color: #fff;
                height: 100%
            }

            .nDX_ZK {
                box-sizing: border-box;
                height: 100%;
                overflow: auto;
                -webkit-overflow-scrolling: touch
            }

            .UwYuKV {
                display: flex;
                position: -webkit-sticky;
                position: sticky;
                top: 0;
                z-index: 9
            }

            .pJM8d6 {
                align-items: center;
                background-color: #f5f5f5;
                border-bottom: .03125rem solid #d0d0d0;
                border-right: .03125rem solid #d0d0d0;
                border-top: .03125rem solid #d0d0d0;
                box-sizing: border-box;
                color: rgba(0,0,0,.87);
                display: flex;
                flex-direction: column;
                flex-grow: 1;
                flex-shrink: 0;
                font-size: .625rem;
                height: 3rem;
                justify-content: center;
                line-height: .75rem;
                padding: .625rem .25rem;
                width: 5.5rem
            }

            .pJM8d6:first-child {
                border-left: .03125rem solid #d0d0d0;
                left: 0;
                position: -webkit-sticky;
                position: sticky
            }

            ._Cc28J:first-child:after {
                bottom: -1px;
                box-shadow: inset 10px 0 8px -8px rgba(0,0,0,.149);
                content: "";
                pointer-events: none;
                position: absolute;
                right: 0;
                top: 0;
                transform: translate(100%);
                width: 30px
            }

            .OmDO7k,.YVf4qm {
                text-align: center;
                width: 100%
            }

            .pVL_4Q {
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap
            }

            .feRRt8 {
                box-sizing: border-box
            }

            .VMOqaJ {
                background-color: #fff;
                display: flex
            }

            .OVlWpW {
                background-color: #fafafa!important
            }

            .esQDWO {
                align-items: center;
                background-color: #fff;
                border-bottom: .03125rem solid #d0d0d0;
                border-right: .03125rem solid #d0d0d0;
                box-sizing: border-box;
                color: rgba(0,0,0,.87);
                display: flex;
                flex-grow: 1;
                flex-shrink: 0;
                font-size: .625rem;
                height: 3rem;
                justify-content: center;
                line-height: .75rem;
                padding: .625rem .25rem;
                width: 5.5rem
            }

            .esQDWO:first-child {
                border-left: .03125rem solid #d0d0d0;
                left: 0;
                position: -webkit-sticky;
                position: sticky
            }

            .UucnnL,.sK2yWw {
                display: inline-flex
            }

            .fVkp8W:first-child:after {
                bottom: -1px;
                box-shadow: inset 10px 0 8px -8px rgba(0,0,0,.149);
                content: "";
                pointer-events: none;
                position: absolute;
                right: 0;
                top: 0;
                transform: translate(100%);
                width: 30px
            }

            .Lfwp9b {
                display: -webkit-box;
                -webkit-box-orient: vertical;
                -webkit-line-clamp: 2;
                overflow: hidden;
                word-break: break-all
            }

            .m3WZCJ {
                background: #fff;
                border-radius: .25rem;
                box-shadow: 0 0 .5625rem rgba(0,0,0,.12);
                box-sizing: border-box;
                display: flex;
                flex-direction: column;
                max-height: 35.625rem;
                min-height: 31.25rem;
                padding: 1.5rem;
                position: relative;
                width: 50rem
            }

            .vZ4fT6 {
                background-color: transparent;
                border: 0;
                position: absolute;
                right: 1.6875rem;
                top: 1.6875rem
            }

            .H_JcQH {
                height: 1.125rem;
                width: 1.125rem
            }

            .yjmk7E {
                color: rgba(0,0,0,.87);
                font-size: 1.25rem;
                line-height: 2rem;
                text-transform: capitalize
            }

            .gJQOH4 {
                margin-top: .1875rem
            }

            .eSIeL3 {
                color: rgba(0,0,0,.87);
                font-size: 1rem;
                line-height: 1.5rem
            }

            .heNW5w {
                color: rgba(0,0,0,.54);
                font-size: .875rem;
                line-height: 1.25rem
            }

            .mpJEtB {
                margin-top: 1rem
            }

            .hlzBtp {
                border-bottom: .0625rem solid rgba(0,0,0,.09);
                border-right: .0625rem solid rgba(0,0,0,.09);
                border-top: .0625rem solid rgba(0,0,0,.09);
                font-size: .875rem;
                height: 3.6875rem;
                line-height: 1.25rem;
                padding: .625rem;
                width: 8.75rem
            }

            .hlzBtp:first-child {
                border-left: .0625rem solid rgba(0,0,0,.09)
            }

            .GHUzR5 {
                border-bottom: .0625rem solid rgba(0,0,0,.09);
                border-right: .0625rem solid rgba(0,0,0,.09);
                font-size: .875rem;
                height: 3.0625rem;
                line-height: 1.25rem;
                padding: .625rem;
                width: 8.75rem
            }

            .GHUzR5:first-child {
                border-left: .0625rem solid rgba(0,0,0,.09)
            }

            .Jw9RMD {
                background-color: #e5e5e5;
                display: flex;
                flex-direction: column;
                height: 100%;
                padding-bottom: 2.3125rem
            }

            .DwD6tW {
                align-items: center;
                background-color: #fff;
                display: flex;
                height: 4rem;
                margin-bottom: .75rem;
                padding: 0 .75rem
            }

            .In3XbV {
                font-size: 1.25rem;
                line-height: 1.5rem;
                margin-left: 1.25rem
            }

            .LUxYUp {
                flex: 1
            }

            .Dg6eUz {
                border: .03125rem solid rgba(0,0,0,.09);
                border-radius: .125rem;
                box-sizing: border-box;
                height: 2rem;
                width: 2rem
            }

            .Dg6eUz img {
                width: 100%
            }

            .htLN7U {
                padding: .75rem
            }

            .nyhQ0A {
                margin-top: .375rem
            }

            .eze0Z_ {
                box-sizing: content-box;
                padding-bottom: .75rem
            }

            .uZvBWx {
                margin-left: .75rem
            }

            .gCorDi {
                padding-right: .75rem
            }

            .dee9eY:after,.q885dt:after {
                content: "";
                display: block;
                flex-shrink: 0;
                height: 100%;
                height: 3rem;
                width: .75rem
            }

            ._1Yq7w {
                background: rgba(0,0,0,.4);
                background: var(--nc-util-mask,rgba(0,0,0,.4));
                bottom: 0;
                left: 0;
                position: fixed;
                right: 0;
                top: 0
            }

            ._2KYE- {
                background: #fff;
                box-shadow: 0 0 .375rem rgba(0,0,0,.06);
                box-shadow: var(--ne-depth6,0 0 .375rem rgba(0,0,0,.06));
                height: 100%;
                max-width: 85%;
                position: absolute;
                top: 0
            }

            ._2Hn1- {
                left: 0
            }

            ._3foCQ {
                right: 0
            }

            .NGVKmW {
                align-items: center;
                background-color: transparent;
                border: 0;
                color: rgba(0,0,0,.87);
                cursor: pointer;
                display: flex;
                font-size: .875rem;
                line-height: 1rem;
                text-transform: capitalize
            }

            .oAeYKc {
                color: rgba(0,0,0,.54)
            }

            .USHi51 {
                color: #05a;
                line-height: 1.75rem;
                margin-left: auto;
                text-transform: capitalize
            }

            .USHi51>svg {
                font-size: .6rem;
                margin-left: .4rem
            }

            .dmOLBB {
                z-index: 11010!important
            }

            .yfT2u7 {
                align-items: center;
                background-color: #f5f5f5;
                border: .0625rem solid #f5f5f5;
                border-radius: .125rem;
                color: rgba(0,0,0,.87);
                cursor: pointer;
                display: inline-flex;
                font-family: -apple-system,Helvetica Neue,Helvetica,Roboto,Droid Sans,Arial,sans-serif;
                font-size: 12px;
                font-weight: 400;
                height: 2.25rem;
                justify-content: center;
                margin-bottom: .625rem;
                margin-left: .75rem;
                min-width: 4.375rem;
                padding: .25rem .75rem;
                position: relative;
                transition-duration: .2s;
                transition-property: color,background-color;
                transition-timing-function: cubic-bezier(.4,0,.2,1);
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
                word-break: break-word
            }

            .psJz83 {
                background-color: #fff;
                border-color: #ee4d2d;
                color: #ee4d2d;
                overflow: hidden
            }

            .psJz83:after {
                background: linear-gradient(-45deg,transparent,transparent,50%,#ee4d2d,50.001%,#ee4d2d);
                content: "";
                height: 1rem;
                left: 0;
                position: absolute;
                top: 0;
                width: 1rem
            }

            .theme--ofs .psJz83,.theme--s-mart .psJz83 {
                border-color: #2b1965
            }

            .theme--ofs .psJz83:after,.theme--s-mart .psJz83:after {
                background: linear-gradient(-45deg,transparent,transparent,50%,#2b1965,50.001%,#2b1965)
            }

            .Qgl1E8 {
                color: rgba(0,0,0,.26)
            }

            .yfT2u7 .oOUvN5 {
                display: -webkit-box;
                overflow: hidden;
                text-overflow: ellipsis;
                -webkit-box-orient: vertical;
                -webkit-line-clamp: 2
            }

            .yfT2u7 .aIE4Nv {
                height: .5rem;
                left: 0;
                position: absolute;
                top: .0625rem;
                width: .5rem;
                z-index: 2
            }

            .ITIs6w {
                border-radius: .125rem;
                height: 1.75rem;
                margin-right: .25rem;
                width: 1.75rem
            }

            .MjasiC {
                display: flex;
                flex-direction: column;
                min-height: 0;
                position: relative
            }

            .MjasiC>* {
                flex-shrink: 0
            }

            .f_z5mT {
                flex-shrink: 1;
                overflow: auto;
                position: relative
            }

            .OiegRd {
                align-items: flex-end;
                border: solid rgba(0,0,0,.09)!important;
                border-width: 0 0 1px!important;
                display: flex;
                padding: 12px 12px 16px
            }

            .WoAycc {
                position: absolute;
                right: 12px;
                top: 12px
            }

            .APO6v8 {
                color: #ee2c4a;
                margin-top: 8px;
                padding: 6px 12px;
                width: 100%
            }

            .XeMxNE {
                align-items: center;
                color: rgba(0,0,0,.54);
                display: flex;
                font-size: 12px;
                padding: 3px 12px 0
            }

            .dkrkZv {
                flex-shrink: 0;
                margin-right: 8px
            }

            .usoBzv {
                display: flex;
                flex-wrap: wrap;
                overflow: hidden
            }

            .heUQ2N {
                border: .5px solid rgba(0,0,0,.09);
                border-radius: 1px;
                font-size: 10px;
                margin-right: 4px;
                padding: 2px 4px
            }

            .qxJsHl {
                background-color: #fff1f1
            }

            .rp1wHL {
                display: flex;
                flex: 1;
                flex-direction: column;
                overflow-x: hidden;
                overflow-y: visible;
                padding: 16px 0 6px
            }

            .aPggnc {
                align-items: center;
                display: flex;
                justify-content: space-between;
                margin-bottom: 12px;
                padding: 0 12px
            }

            .X3mabB {
                color: rgba(0,0,0,.87);
                text-transform: capitalize
            }

            .Equ3H3 {
                display: flex;
                -webkit-overflow-scrolling: touch
            }

            .JGdTCa {
                display: flex;
                flex-wrap: wrap;
                margin-right: 12px
            }

            .badge__horizontal {
                align-items: center;
                background-color: #ee4d2d;
                border-radius: .125rem;
                color: #fff;
                cursor: default;
                display: flex;
                font-size: .5625rem;
                height: .9375rem;
                line-height: .6875rem;
                margin-bottom: .125rem;
                margin-top: .375rem;
                padding: .125rem .25rem;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
                white-space: nowrap
            }

            .badge__horizontal .stardust-icon {
                display: inline-block;
                font-size: .75rem;
                vertical-align: bottom
            }

            .badge__official-shop--left-triangle,.badge__preferred--left-triangle {
                border-bottom-left-radius: 0;
                border-top-left-radius: 0;
                position: relative
            }

            .badge__official-shop--left-triangle:before,.badge__preferred--left-triangle:before {
                border: .13125rem solid transparent;
                border-bottom-color: #a92d05;
                bottom: -.125rem;
                content: "";
                display: inline-block;
                left: .0625rem;
                position: absolute;
                transform: rotate(45deg)
            }

            .ZTJc5Q.badge__official-shop {
                padding: 0
            }

            .badge__official-shop {
                background-color: #2b1965
            }

            .badge__official-shop--left-triangle:before {
                border-bottom-color: #870015
            }

            .badge__official-shop--inline {
                align-items: center;
                display: flex
            }

            .badge__official-shop--tw {
                margin-bottom: 2px!important;
                margin-top: 2px!important;
                padding: 0
            }

            .badge__official-shop--tw svg {
                height: 1rem
            }

            .badge__mall-img {
                height: .6875rem
            }

            .badge__mall-img--br {
                height: .625rem
            }

            .badge__preferred--left-triangle {
                border-bottom-left-radius: 0;
                border-top-left-radius: 0;
                position: relative
            }

            .badge__preferred--left-triangle:before {
                border: .13125rem solid transparent;
                border-bottom-color: #a92d05;
                bottom: -.125rem;
                content: "";
                display: inline-block;
                left: .0625rem;
                position: absolute;
                transform: rotate(45deg)
            }

            .badge__preferred-plus--left-triangle {
                border-bottom-left-radius: 0;
                border-top-left-radius: 0;
                position: relative
            }

            .badge__preferred-plus--left-triangle:before {
                border: .13125rem solid transparent;
                border-bottom-color: #a92d05;
                bottom: -.125rem;
                content: "";
                display: inline-block;
                left: .0625rem;
                position: absolute;
                transform: rotate(45deg)
            }

            .hMIjrU.badge__shopee_mart {
                padding: 0
            }

            .badge-text {
                font-family: -apple-system,HelveticaNeueMedium,HelveticaNeue-Medium,Helvetica Neue Medium,Helvetica Neue,Roboto,Droid Sans,Arial Bold,Arial,sans-serif;
                font-size: .6875rem;
                font-weight: 500;
                line-height: .8125rem;
                width: 2.125rem
            }

            .badge-text__text {
                align-items: center;
                background-color: inherit;
                display: flex;
                height: 2.125rem;
                justify-content: center;
                position: relative;
                text-align: center;
                width: 2.125rem
            }

            .badge-text__text:after {
                border-color: transparent #fff;
                border-style: solid;
                border-width: 0 1.0625rem .25rem;
                bottom: -.25rem;
                content: "";
                height: 0;
                left: 0;
                position: absolute;
                width: 0
            }

            .badge__promotion {
                color: #ee4d2d;
                white-space: normal
            }

            .badge__promotion-off {
                color: #fff
            }

            .badge__promotion-off--es-ES,.badge__promotion-off--fr,.badge__promotion-off--pl {
                display: none
            }

            .badge-text--promotion {
                background-color: #fcd511
            }

            .badge-text--promotion .badge-text__text:after {
                border-left-color: #fcd511;
                border-right-color: #fcd511
            }

            .theme--ofs .badge__promotion {
                color: #2b1965!important
            }

            .sbvBpv {
                font-size: .75rem;
                position: relative;
                width: 2.25rem
            }

            .XCCcuD {
                left: 0;
                top: 0;
                width: 2.25rem
            }

            .B2urMy,.XCCcuD {
                position: absolute
            }

            .B2urMy {
                left: 50%;
                top: 50%;
                transform: translate(-50%,-50%);
                white-space: nowrap
            }

            .dSozcM {
                bottom: 0;
                left: 0;
                right: 0;
                top: 0;
                z-index: 2
            }

            .dSozcM,.dSozcM .H_Sasr {
                align-items: center;
                display: flex;
                justify-content: center;
                position: absolute
            }

            .dSozcM .H_Sasr {
                background-color: rgba(0,0,0,.65);
                border-radius: 5rem;
                color: #fff;
                font-size: .75rem;
                height: 3.75rem;
                line-height: .875rem;
                max-width: calc(100% - 5rem);
                min-width: 3.875rem;
                text-align: center
            }

            .dSozcM .g_OtnL {
                border-radius: 6.25rem;
                max-width: calc(100% - 4.5rem);
                min-width: 4.1875rem
            }

            .dSozcM .Q8Wtbv {
                border-radius: 6.25rem;
                max-width: calc(100% - 3.625rem);
                min-width: 5.125rem
            }

            .dSozcM .yFCwdT {
                display: -webkit-box;
                overflow: hidden;
                text-overflow: ellipsis;
                -webkit-box-orient: vertical;
                -webkit-line-clamp: 2
            }

            .badge__soldout {
                color: #fff;
                text-align: center;
                white-space: normal
            }

            .badge-text--soldout {
                background-color: hsla(173,6%,51%,.85)
            }

            .badge-text--soldout .badge-text__text:after {
                border-left-color: hsla(173,6%,51%,.85);
                border-right-color: hsla(173,6%,51%,.85)
            }

            .badge-round__text {
                background-color: rgba(0,0,0,.87);
                border-radius: 3.75rem;
                color: #fff;
                display: inline-block;
                height: 3.75rem;
                line-height: 3.75rem;
                min-height: 3.75rem;
                min-width: 3.75rem;
                overflow: hidden;
                padding: 0 .5rem;
                position: relative;
                text-overflow: ellipsis
            }

            .badge__preferred--left-triangle,.badge__wholesale--left-triangle {
                border-bottom-left-radius: 0;
                border-top-left-radius: 0;
                position: relative
            }

            .badge__preferred--left-triangle:before,.badge__wholesale--left-triangle:before {
                border: .13125rem solid transparent;
                border-bottom-color: #a92d05;
                bottom: -.125rem;
                content: "";
                display: inline-block;
                left: .0625rem;
                position: absolute;
                transform: rotate(45deg)
            }

            .badge__wholesale {
                background-color: #16b6fb;
                text-align: center
            }

            .badge__wholesale--left-triangle:before {
                border-bottom-color: #0072be
            }

            .badge__wholesale--has--icon {
                text-align: left
            }

            .badge__installment {
                background-color: transparent;
                border: 1px solid #f5a623;
                color: #f5a623;
                text-align: center
            }

            .badge__bundle-deals {
                background-color: transparent;
                border: 1px solid #ee4d2d;
                color: #ee4d2d;
                display: inline-block;
                height: unset;
                max-width: 100%;
                overflow: hidden;
                padding: 1.5px 4px;
                text-overflow: ellipsis
            }

            .a1NpwC.badge__horizontal {
                background-color: #fff;
                border: 1px solid #ee4d2d;
                border-radius: 1px;
                padding: .09375rem .25rem
            }

            .theme--ofs .a1NpwC.badge__horizontal,.theme--s-mart .a1NpwC.badge__horizontal {
                border-color: #2b1965
            }

            .M0ifrG {
                color: #ee4d2d;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap
            }

            .theme--ofs .M0ifrG,.theme--s-mart .M0ifrG {
                color: #2b1965
            }

            .pwLECS {
                align-items: center;
                display: inline-flex;
                justify-content: center;
                line-height: .875rem;
                margin: 0 .25rem 0 0;
                max-width: 100%
            }

            .ixV9tO,.pwLECS {
                font-size: .625rem;
                height: 1rem
            }

            .ixV9tO {
                background-color: #ee4d2d;
                border: 0;
                border-radius: .5rem .5rem .5rem 0;
                box-sizing: border-box;
                display: inline-block;
                line-height: 1rem;
                min-width: 1.875rem;
                padding: 0 .25rem;
                text-transform: none
            }

            .badge__free,.ixV9tO {
                color: #fff;
                text-align: center
            }

            .badge__free {
                align-items: center;
                background-color: #2b1965;
                border-radius: 3.375rem;
                display: flex;
                height: 3.375rem;
                justify-content: center;
                margin: .625rem .5rem;
                opacity: .76;
                width: 3.375rem
            }

            .iC57Qh {
                border: 1px solid #ee4d2d;
                color: #ee4d2d;
                font-size: 10px;
                line-height: .875rem;
                overflow: hidden;
                padding: 0 3px;
                text-overflow: ellipsis;
                white-space: nowrap
            }

            .u5KH0U {
                border: .0625rem solid;
                border-radius: .125rem;
                box-sizing: border-box;
                display: flex
            }

            .hygJw7 {
                color: #fff;
                flex-grow: 1;
                flex-shrink: 1
            }

            .HzhXSn,.hygJw7 {
                font-size: .625rem;
                line-height: .75rem;
                overflow: hidden;
                padding: .0625rem .25rem;
                text-overflow: ellipsis;
                white-space: nowrap
            }

            .HzhXSn {
                align-items: center;
                display: flex;
                flex-shrink: 0;
                position: relative
            }

            .HzhXSn .rjXci4 {
                border-right: 5px solid transparent;
                border-top: 5px solid;
                height: 0;
                left: -.0625rem;
                position: absolute;
                top: -.0625rem;
                width: 0
            }

            .badge__coinsback--left-triangle,.badge__preferred--left-triangle {
                border-bottom-left-radius: 0;
                border-top-left-radius: 0;
                position: relative
            }

            .badge__coinsback--left-triangle:before,.badge__preferred--left-triangle:before {
                border: .13125rem solid transparent;
                border-bottom-color: #a92d05;
                bottom: -.125rem;
                content: "";
                display: inline-block;
                left: .0625rem;
                position: absolute;
                transform: rotate(45deg)
            }

            .badge__coinsback {
                background-color: #ffa604;
                text-transform: capitalize
            }

            .badge__coinsback--left-triangle:before {
                border-bottom-color: #ae7600
            }

            .badge__coinsback--inline {
                align-items: center;
                color: #fff;
                display: flex;
                font-size: .6875rem;
                height: 1.0625rem;
                line-height: .75rem;
                margin-bottom: .125rem;
                margin-top: .375rem;
                padding: .0625rem .25rem;
                white-space: nowrap
            }

            .badge__coinsback--outline {
                background: #fff;
                border: 1px solid;
                border-radius: .125rem;
                color: #ffa604;
                font-size: .625rem;
                padding: .0625rem .1875rem;
                white-space: nowrap
            }

            .badge__coinsback--flashsale {
                background-color: #fcd511;
                color: #ee4d2d;
                display: inline-block;
                font-size: .6875rem;
                padding: .0625rem .25rem;
                vertical-align: middle
            }

            .gTRKsK {
                color: #ee4d2d;
                font-size: .625rem;
                line-height: .75rem
            }

            .CWSxk9 {
                align-items: baseline;
                display: inline-flex;
                margin-bottom: 6px;
                min-height: 16px
            }

            .vnV4fz {
                color: rgba(0,0,0,.54);
                margin-right: 4px;
                -webkit-text-decoration: line-through;
                text-decoration: line-through
            }

            .V26tRH {
                color: #ee4d2d
            }

            .theme--ofs .V26tRH,.theme--s-mart .V26tRH {
                color: #2b1965
            }

            .j2f2Bx {
                margin-bottom: 8px
            }

            .fYvqqi {
                color: rgba(0,0,0,.54);
                margin-bottom: 7px
            }

            ._vdiFm {
                color: #ee4d2d
            }

            .eBzNGF {
                color: rgba(0,0,0,.54)
            }

            .yeQZqR {
                color: #ee4d2d;
                font-size: .75rem;
                margin-bottom: .5rem
            }

            .HXMPdH {
                color: rgba(0,0,0,.54);
                font-size: .875rem
            }

            .hidHQ8 {
                background-color: #fff1f1
            }

            .Zbgw3a {
                padding: 16px 12px
            }

            .wePhW3 {
                background-color: #fff1f1
            }

            .mozNu6 {
                align-items: center;
                display: flex;
                justify-content: space-between
            }

            .hVMTl8 {
                color: #ee4d2d;
                display: flex;
                font-size: 20px;
                justify-content: flex-end
            }

            .theme--ofs .hVMTl8,.theme--s-mart .hVMTl8 {
                color: #2b1965
            }

            .iPeHdU {
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                background: transparent;
                border-radius: 0;
                box-shadow: none;
                font-size: 14px;
                width: 60px
            }

            .Um2XV8,.iPeHdU,.m7P3iq {
                box-sizing: border-box;
                height: 28px;
                text-align: center
            }

            .Um2XV8,.m7P3iq {
                color: rgba(0,0,0,.6);
                cursor: pointer;
                transition: opacity .2s cubic-bezier(.4,0,.2,1);
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
                width: 28px
            }

            .Um2XV8>svg,.m7P3iq>svg {
                height: 10px;
                width: 10px
            }

            .zCONJ5 {
                color: rgba(0,0,0,.26);
                cursor: not-allowed
            }

            .UqOVW6 {
                color: rgba(238,77,45,.26)
            }

            .theme--ofs .UqOVW6,.theme--s-mart .UqOVW6 {
                color: rgba(208,2,27,.26)
            }

            .ONLwud {
                color: #ee2c4a;
                margin-top: 8px;
                width: 100%
            }

            .ONLwud.Q2eBlz {
                color: rgba(0,0,0,.54)
            }

            .uFC7qY {
                display: flex;
                padding: 6px 12px
            }

            .uFC7qY button+button {
                margin-left: 12px
            }

            .uFC7qY button.stardust-button {
                border: 0;
                border-radius: 2px;
                font-family: -apple-system,HelveticaNeue-Light,Helvetica Neue Light,Helvetica Neue,Helvetica,Roboto,Droid Sans,Arial,sans-serif;
                font-weight: 300;
                line-height: 16px;
                padding: 10px;
                text-transform: uppercase
            }

            .uFC7qY button.stardust-button.BX32sL {
                background-color: #ee4d2d;
                color: #fff
            }

            .theme--ofs .uFC7qY button.stardust-button.BX32sL,.theme--s-mart .uFC7qY button.stardust-button.BX32sL {
                background-color: #2b1965
            }

            .uFC7qY button.stardust-button.wsgZND {
                background-color: #00bfa5;
                color: #fff
            }

            .theme--ofs .uFC7qY button.stardust-button.wsgZND,.theme--s-mart .uFC7qY button.stardust-button.wsgZND {
                background-color: #fff;
                border: 1px solid #2b1965;
                color: #2b1965
            }

            .theme--ofs .uFC7qY button.stardust-button.RN9whT.BX32sL,.theme--ofs .uFC7qY button.stardust-button.stardust-button--disabled.BX32sL,.theme--s-mart .uFC7qY button.stardust-button.RN9whT.BX32sL,.theme--s-mart .uFC7qY button.stardust-button.stardust-button--disabled.BX32sL,.uFC7qY button.stardust-button.RN9whT,.uFC7qY button.stardust-button.stardust-button--disabled {
                background-color: rgba(0,0,0,.26);
                color: #fff;
                opacity: 1
            }

            .theme--ofs .uFC7qY button.stardust-button.RN9whT.wsgZND,.theme--ofs .uFC7qY button.stardust-button.stardust-button--disabled.wsgZND,.theme--s-mart .uFC7qY button.stardust-button.RN9whT.wsgZND,.theme--s-mart .uFC7qY button.stardust-button.stardust-button--disabled.wsgZND {
                border: 1px solid rgba(0,0,0,.09);
                color: rgba(0,0,0,.26)
            }

            .uFC7qY button.stardust-button.stardust-button--block+.stardust-button--block {
                margin-top: 0
            }

            .b_p_Tf {
                display: flex;
                flex-direction: column;
                min-height: 0;
                position: relative
            }

            .b_p_Tf>* {
                flex-shrink: 0
            }

            .LRTntv {
                flex-shrink: 1;
                overflow: auto;
                position: relative
            }

            .Nbgiho {
                align-items: flex-end;
                border: solid rgba(0,0,0,.09)!important;
                border-width: 0 0 1px!important;
                display: flex;
                padding: 12px 12px 16px
            }

            ._O68_W {
                position: absolute;
                right: 12px;
                top: 12px
            }

            .k_TcME {
                color: #ee2c4a;
                margin-top: 8px;
                padding: 6px 12px;
                width: 100%
            }

            ._1_DDs {
                background: rgba(0,0,0,.4);
                background: var(--nc-util-mask,rgba(0,0,0,.4));
                bottom: 0;
                left: 0;
                position: fixed;
                right: 0;
                top: 0
            }

            ._2iekt {
                background: #fff;
                border-radius: .25rem .25rem 0 0;
                bottom: 0;
                box-shadow: 0 0 .375rem rgba(0,0,0,.06);
                box-shadow: var(--ne-depth6,0 0 .375rem rgba(0,0,0,.06));
                display: flex;
                flex-direction: column;
                max-height: 75%;
                position: absolute;
                width: 100%
            }

            .xoSh6i {
                align-items: center;
                background-color: #fafafa;
                display: flex;
                font-size: 10px;
                padding: 12px 8px
            }

            .iQpU4t {
                margin-right: 8px
            }

            ._1zdBJ {
                align-items: center;
                background-color: rgba(0,0,0,.4);
                background-color: var(--nc-util-mask,rgba(0,0,0,.4));
                bottom: 0;
                display: flex;
                justify-content: center;
                left: 0;
                position: fixed;
                right: 0;
                top: 0
            }

            ._2Dkqc {
                background: #fff;
                border-radius: .25rem;
                border-radius: var(--nr-overlay,.25rem);
                margin-left: 2.5rem;
                margin-left: var(--ns-g,2.5rem);
                margin-right: 2.5rem;
                margin-right: var(--ns-g,2.5rem);
                max-height: 75%;
                max-width: 18.75rem;
                min-height: 8.125rem;
                min-width: 15rem;
                width: 100%
            }

            ._2Dkqc,.d-Vo0 {
                overflow: hidden
            }

            .d-Vo0 {
                display: -webkit-box;
                margin-bottom: 1rem;
                margin-bottom: var(--ns-d,1rem);
                text-overflow: ellipsis;
                -webkit-box-orient: vertical;
                -webkit-line-clamp: 2
            }

            ._2Xfwq {
                color: rgba(0,0,0,.65);
                color: var(--nc-text-secondary,rgba(0,0,0,.65));
                max-height: 15.625rem;
                min-height: 2.25rem;
                overflow-y: auto
            }

            ._3pvMp {
                text-align: left
            }

            ._1u0yb {
                text-align: center
            }

            ._3Wssq {
                text-align: right
            }

            ._2WWGU {
                padding: 1.25rem 1.25rem 1.5rem;
                padding: var(--ns-e,1.25rem) var(--ns-e,1.25rem) var(--ns-f,1.5rem) var(--ns-e,1.25rem);
                text-align: center
            }

            .Jl6On {
                display: flex;
                position: relative
            }

            .Jl6On:after {
                background-color: rgba(0,0,0,.09);
                background-color: var(--nc-util-line,rgba(0,0,0,.09));
                content: "";
                height: .0625rem;
                position: absolute;
                transform: scaleY(.5);
                width: 100%
            }

            .Jl6On button {
                background: #fff;
                border: 0;
                color: rgba(0,0,0,.87);
                color: var(--nc-text-primary,rgba(0,0,0,.87));
                flex: 1;
                outline: none
            }

            .Jl6On._1ZxzA {
                flex-direction: row-reverse
            }

            .Jl6On._1ZxzA button {
                height: 2.96875rem
            }

            .Jl6On._1ZxzA button:first-child {
                color: #ee4d2d;
                color: var(--nc-primary,#ee4d2d)
            }

            .Jl6On._1ZxzA button:first-child:after {
                background-color: rgba(0,0,0,.09);
                background-color: var(--nc-util-line,rgba(0,0,0,.09));
                content: "";
                height: 100%;
                left: 50%;
                position: absolute;
                top: 0;
                transform: scaleX(.5);
                width: .0625rem
            }

            .Jl6On._1ZxzA button:first-child:disabled {
                color: rgba(0,0,0,.26);
                color: var(--nc-util-disabled,rgba(0,0,0,.26))
            }

            .Jl6On._24b2I button {
                color: #ee4d2d;
                color: var(--nc-primary,#ee4d2d);
                height: 2.96875rem
            }

            .Jl6On._24b2I button:disabled {
                color: rgba(0,0,0,.26);
                color: var(--nc-util-disabled,rgba(0,0,0,.26))
            }

            .Jl6On._3yCdv {
                flex-direction: column;
                height: 5.9375rem
            }

            .Jl6On._3yCdv button:first-child {
                color: #ee4d2d;
                color: var(--nc-primary,#ee4d2d)
            }

            .Jl6On._3yCdv button:first-child:disabled {
                color: rgba(0,0,0,.26);
                color: var(--nc-util-disabled,rgba(0,0,0,.26))
            }

            .Jl6On._3yCdv button:nth-child(2):after {
                background-color: rgba(0,0,0,.09);
                background-color: var(--nc-util-line,rgba(0,0,0,.09));
                content: "";
                height: .0625rem;
                left: 0;
                position: absolute;
                top: 50%;
                transform: scaleY(.5);
                width: 100%
            }

            .Jl6On._1p6f1 {
                flex-direction: column;
                height: 8.96875rem
            }

            .Jl6On._1p6f1 button {
                position: relative
            }

            .Jl6On._1p6f1 button:first-child {
                color: #ee4d2d;
                color: var(--nc-primary,#ee4d2d)
            }

            .Jl6On._1p6f1 button:first-child:disabled {
                color: rgba(0,0,0,.26);
                color: var(--nc-util-disabled,rgba(0,0,0,.26))
            }

            .Jl6On._1p6f1 button:nth-child(2):after,.Jl6On._1p6f1 button:nth-child(3):after {
                background-color: rgba(0,0,0,.09);
                background-color: var(--nc-util-line,rgba(0,0,0,.09));
                content: "";
                height: .0625rem;
                left: 0;
                position: absolute;
                top: 0;
                transform: scaleY(.5);
                width: 100%
            }

            .Jl6On button:disabled {
                color: rgba(0,0,0,.26);
                color: var(--nc-util-disabled,rgba(0,0,0,.26))
            }

            ._1wbwU,._1wbwU ._2jlhf {
                width: 100%
            }

            /*# sourceMappingURL=https://sourcemap.webfe.shopeemobile.com/mobilemall-productdetailspage/_/mobilemall-productdetailspage.934c5d9ac545c1970e8f.css.map*/
        </style>
        <style data-href="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/ProductOfficialShopSellingPoint.757ca572d5c865c4a77a.css">
            .DqobfR {
                background: #fff;
                border-top: 1px solid rgba(0,0,0,.09);
                padding-left: .75rem;
                padding-right: .75rem
            }

            .Qa7c6h {
                background: rgba(0,0,0,.54);
                bottom: 0;
                cursor: pointer;
                display: none;
                left: 0;
                position: fixed;
                right: 0;
                top: 0;
                z-index: 1000
            }

            .gRTRJU {
                display: initial
            }

            .GegCUx {
                background: #fff;
                bottom: 0;
                cursor: pointer;
                display: flex;
                flex-direction: column;
                left: 50%;
                max-height: 50%;
                max-width: 37.5rem;
                position: fixed;
                transform: translate(-50%,100%);
                transition: transform .1s cubic-bezier(.4,0,.6,1);
                visibility: hidden;
                width: 100%;
                z-index: 1001
            }

            .tPsvTR {
                transform: translate(-50%);
                visibility: visible;
                z-index: 1001
            }

            .soNOfD {
                color: rgba(0,0,0,.87);
                padding: 16px 0 20px;
                text-align: center;
                text-transform: capitalize
            }

            .FQ4ICz {
                overflow-wrap: break-word;
                overflow-y: scroll;
                padding: 0 1rem;
                word-wrap: break-word;
                -webkit-hyphens: auto;
                hyphens: auto;
                -webkit-overflow-scrolling: touch;
                display: flex;
                flex-direction: column
            }

            .hO8D9l {
                display: flex;
                margin-top: 1rem
            }

            .jwuwxo {
                flex-shrink: 0;
                height: 1.5rem;
                margin-right: .75rem;
                width: 1.5rem
            }

            .uoh9dy {
                color: rgba(0,0,0,.87);
                text-transform: capitalize
            }

            .lHb1tu,.uoh9dy {
                white-space: pre-wrap
            }

            .lHb1tu {
                color: rgba(0,0,0,.54);
                margin: .375rem 0;
                text-transform: none
            }

            .NI9a0R {
                background: var(--brand-primary-color,#ee4d2d);
                color: #fff;
                height: 3rem;
                line-height: 3rem;
                margin-top: 1.5rem;
                text-align: center;
                text-transform: capitalize
            }

            .noscroll {
                overflow: hidden
            }

            .E6qTXV {
                background: #fff;
                border-top: 1px solid rgba(0,0,0,.09);
                padding: 0 12px
            }

            .hgipRy {
                gap: 10px;
                height: 48px;
                justify-content: space-between
            }

            .NQpi16,.hgipRy {
                align-items: center;
                display: flex;
                overflow: hidden
            }

            .NQpi16 {
                font-size: 12px;
                font-weight: lighter;
                max-width: 100%;
                padding: 10px 0;
                white-space: nowrap
            }

            .gQscGd {
                height: 15px;
                margin-right: 6px;
                width: 15px
            }

            @media (max-width: 360px) {
                .NQpi16 {
                    font-size:11px
                }

                .gQscGd {
                    height: 14px;
                    margin-right: 3px;
                    width: 14px
                }
            }

            /*# sourceMappingURL=https://sourcemap.webfe.shopeemobile.com/mobilemall-productdetailspage/_/ProductOfficialShopSellingPoint.757ca572d5c865c4a77a.css.map*/
        </style>
    </head>
    <body>
        <noscript>
            <iframe src="//www.googletagmanager.com/ns.html?id=GTM-WJZQSJF" height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>
        <div id="app">
            <style id="nebula-style">
                :root {
                    --nc-primary: #ee4d2d;
                    --nc-primary-bg: #fef6f5;
                    --nc-primary-gradient: linear-gradient(#ee4d2d,#ff7337);
                    --nc-secondary-blue: #0046ab;
                    --nc-secondary-yellow: #eda500;
                    --nc-secondary-green: #26aa99;
                    --nc-error: #ee2c4a;
                    --nc-error-bg: #fff4f4;
                    --nc-caution: #f69113;
                    --nc-caution-bg: #fff8e4;
                    --nc-success: #30b566;
                    --nc-success-bg: #f7fffe;
                    --nc-text-primary: rgba(0,0,0,.87);
                    --nc-text-primary-o: #212121;
                    --nc-text-secondary: rgba(0,0,0,.65);
                    --nc-text-secondary-o: #595959;
                    --nc-text-tertiary: rgba(0,0,0,.54);
                    --nc-text-tertiary-o: #757575;
                    --nc-text-link: #0088ff;
                    --nc-util-mask: rgba(0,0,0,.4);
                    --nc-util-disabled: rgba(0,0,0,.26);
                    --nc-util-disabled-o: #bdbdbd;
                    --nc-util-line: rgba(0,0,0,.09);
                    --nc-util-line-o: #e8e8e8;
                    --nc-util-bg: #f5f5f5;
                    --nc-util-placeholder: #fafafa;
                    --nc-util-pressed: rgba(0,0,0,.05);
                    --nt-font-regular-f: -apple-system,'HelveticaNeue','Helvetica Neue','Roboto','Droid Sans',Arial,sans-serif;
                    --nt-font-regular-w: 400;
                    --nt-font-medium-f: -apple-system,'HelveticaNeue-Medium','Helvetica Neue','Roboto','Droid Sans',Arial,sans-serif;
                    --nt-font-medium-w: 500;
                    --nt-font-bold-f: -apple-system,'HelveticaNeue-Bold','Helvetica Neue','Roboto','Droid Sans','Arial Bold',Arial,sans-serif;
                    --nt-font-bold-w: 700;
                    --nt-size-foot: .625rem;
                    --nt-size-foot-l: .75rem;
                    --nt-size-foot-lp: .75rem;
                    --nt-size-foot-t: 1rem;
                    --nt-size-foot-tp: 1rem;
                    --nt-size-small: .75rem;
                    --nt-size-small-l: .875rem;
                    --nt-size-small-lp: 1.25rem;
                    --nt-size-small-t: 1.125rem;
                    --nt-size-small-tp: 1.125rem;
                    --nt-size-normal: .875rem;
                    --nt-size-normal-l: 1rem;
                    --nt-size-normal-lp: 1.25rem;
                    --nt-size-normal-t: 1.375rem;
                    --nt-size-normal-tp: 1.375rem;
                    --nt-size-large: 1rem;
                    --nt-size-large-l: 1.25rem;
                    --nt-size-large-lp: 1.375rem;
                    --nt-size-large-t: 1.5rem;
                    --nt-size-large-tp: 1.5rem;
                    --nt-size-title: 1.25rem;
                    --nt-size-title-l: 1.5rem;
                    --nt-size-title-lp: 1.5rem;
                    --nt-size-title-t: 1.875rem;
                    --nt-size-title-tp: 1.875rem;
                    --ns-a: .25rem;
                    --ns-b: .5rem;
                    --ns-c: .75rem;
                    --ns-d: 1rem;
                    --ns-e: 1.25rem;
                    --ns-f: 1.5rem;
                    --ns-g: 2.5rem;
                    --ne-depth6: 0 0 .375rem rgba(0,0,0,.06);
                    --ne-depth9: 0 0 .5625rem rgba(0,0,0,.12);
                    --nr-normal: .125rem;
                    --nr-overlay: .25rem
                }

                .nt-foot {
                    font-size: var(--nt-size-foot,.625rem);
                    line-height: var(--nt-size-foot-l,.75rem)
                }

                .nt-foot-p {
                    font-size: var(--nt-size-foot,.625rem);
                    line-height: var(--nt-size-foot-lp,.75rem)
                }

                .nt-small {
                    font-size: var(--nt-size-small,.75rem);
                    line-height: var(--nt-size-small-l,.875rem)
                }

                .nt-small-p {
                    font-size: var(--nt-size-small,.75rem);
                    line-height: var(--nt-size-small-lp,1.25rem)
                }

                .nt-normal {
                    font-size: var(--nt-size-normal,.875rem);
                    line-height: var(--nt-size-normal-l,1rem)
                }

                .nt-normal-p {
                    font-size: var(--nt-size-normal,.875rem);
                    line-height: var(--nt-size-normal-lp,1.25rem)
                }

                .nt-large {
                    font-size: var(--nt-size-large,1rem);
                    line-height: var(--nt-size-large-l,1.25rem)
                }

                .nt-large-p {
                    font-size: var(--nt-size-large,1rem);
                    line-height: var(--nt-size-large-lp,1.375rem)
                }

                .nt-title {
                    font-size: var(--nt-size-title,1.25rem);
                    line-height: var(--nt-size-title-l,1.5rem)
                }

                .nt-title-p {
                    font-size: var(--nt-size-title,1.25rem);
                    line-height: var(--nt-size-title-lp,1.5rem)
                }

                .nt-regular {
                    font-family: var(--nt-font-regular-f,-apple-system,'HelveticaNeue','Helvetica Neue','Roboto','Droid Sans',Arial,sans-serif);
                    font-weight: var(--nt-font-regular-w,400)
                }

                .nt-medium {
                    font-family: var(--nt-font-medium-f,-apple-system,'HelveticaNeue-Medium','Helvetica Neue','Roboto','Droid Sans',Arial,sans-serif);
                    font-weight: var(--nt-font-medium-w,500)
                }

                .nt-bold {
                    font-family: var(--nt-font-bold-f,-apple-system,'HelveticaNeue-Bold','Helvetica Neue','Roboto','Droid Sans','Arial Bold',Arial,sans-serif);
                    font-weight: var(--nt-font-bold-w,700)
                }
            </style>
            <div class="app-container">
                <div style="display:contents">
                    <div class="with-loading-wrapper with-loading-wrapper--transparent-background">
                        <div class="stardust-spinner--hidden stardust-spinner">
                            <div class="stardust-spinner__background">
                                <div class="stardust-spinner__main" role="img">
                                    <svg width="34" height="12" viewBox="-1 0 33 12">
                                        <circle class="stardust-spinner__spinner" cx="4" cy="6" r="4" fill="#EE4D2D"></circle>
                                        <circle class="stardust-spinner__spinner" cx="16" cy="6" r="4" fill="#EE4D2D"></circle>
                                        <circle class="stardust-spinner__spinner" cx="28" cy="6" r="4" fill="#EE4D2D"></circle>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="product-page theme--ofs nt-m">
                            <div style="position:fixed;z-index:99999;bottom:0;left:0" class="tracking-impression-placeholder"></div>
                            <div style="height:1px"></div>
                            <div class="vF60t2 HctEyP" style="background-color:rgba(255, 255, 255, 0);box-shadow:0 0 6px 0 rgba(0,0,0,0)">
                                <div class="fDK8vk">
                                    <div class="Y7p4Ui" style="color:rgba(255, 255, 255, 1);background:rgba(0, 0, 0, 0.26)">
                                        <a class="lBW5d8" href="/">
                                            <svg viewBox="0 0 22 17" role="img" class="stardust-icon stardust-icon-back-arrow D8W4Bw navbar-generic__back">
                                                <g stroke="none" stroke-width="1" fill-rule="evenodd" transform="translate(-3, -6)">
                                                    <path d="M5.78416545,15.2727801 L12.9866648,21.7122915 C13.286114,22.0067577 13.286114,22.4841029 12.9866648,22.7785691 C12.6864297,23.0738103 12.200709,23.0738103 11.9004739,22.7785691 L3.29347136,15.0837018 C3.27067864,15.0651039 3.23845445,15.072853 3.21723364,15.0519304 C3.06240034,14.899273 2.99480814,14.7001208 3.00030983,14.5001937 C2.99480814,14.3002667 3.06240034,14.1003396 3.21723364,13.9476821 C3.23845445,13.9275344 3.2714646,13.9345086 3.29425732,13.9166857 L11.9004739,6.22026848 C12.200709,5.92657717 12.6864297,5.92657717 12.9866648,6.22026848 C13.286114,6.51628453 13.286114,6.99362977 12.9866648,7.288096 L5.78416545,13.7276073 L24.2140442,13.7276073 C24.6478918,13.7276073 25,14.0739926 25,14.5001937 C25,14.9263948 24.6478918,15.2727801 24.2140442,15.2727801 L5.78416545,15.2727801 Z"></path>
                                                </g>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="OWPOSs">
                                    <div class="UBteaH" style="opacity:0"><?php echo $BRANDS ?> LOGIN: Emang Boleh Website Segacor Ini Hadir Di Indonesia</div>
                                </div>
                                <div class="HVQ8nV">
                                    <div class="wrTghk">
                                        <div class="Y7p4Ui" style="color:rgba(255, 255, 255, 1);background:rgba(0, 0, 0, 0.26)">
                                            <a class="navbar-icon-cart__wrapper sd55Cg" href="/buyer/login?next=https%3A%2F%2Fshopee.co.id%2Fproduct%2F37451478%2F1310112778%3Fgad_source%3D1%26gclid%3DCjwKCAiArLyuBhA7EiwA-qo80GtoQTjB-ltTMUDs9c_3FSWtpK_4BxP_y7jPnz-bBoq85aZrF7nY0RoC9V8QAvD_BwE">
                                                <div class="navbar-icon-cart">
                                                    <svg viewBox="0 0 24 24" fill="none" width="24" height="24" color="currentColor" class="navbar-icon-cart__icon">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 2.75h3.713l4.065 14.453a.75.75 0 00.722.547H20a.75.75 0 00.721-.544l3-10.5A.75.75 0 0023 5.75H6.115L5.003 1.797 4.85 1.25H0v1.5zm9.068 13.5l-2.531-9h15.469l-2.572 9H9.068zM9.75 22a1.25 1.25 0 100-2.5 1.25 1.25 0 000 2.5zm9 0a1.25 1.25 0 100-2.5 1.25 1.25 0 000 2.5z" fill="currentColor"></path>
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="wrTghk">
                                        <div class="Y7p4Ui" style="color:rgba(255, 255, 255, 1);background:rgba(0, 0, 0, 0.26)">
                                            <div class="stardust-popover Zh9bwi" id="stardust-popover305395" tabindex="0">
                                                <div role="button" class="stardust-popover__target">
                                                    <svg class="navbar-generic__menu" viewBox="0 0 24 6">
                                                        <path fill="none" d="M12 5.5c-1.380712 0-2.5-1.1192881-2.5-2.5S10.619288.5 12 .5s2.5 1.1192881 2.5 2.5-1.119288 2.5-2.5 2.5zm-9 0C1.619288 5.5.5 4.3807119.5 3S1.619288.5 3 .5 5.5 1.6192881 5.5 3 4.380712 5.5 3 5.5zm18 0c-1.380712 0-2.5-1.1192881-2.5-2.5S19.619288.5 21 .5s2.5 1.1192881 2.5 2.5-1.119288 2.5-2.5 2.5z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span></span>
                            <span></span>
                            <div role="main">
                                <div style="position:relative">
                                    <div class="product-carousel">
                                        <div class="stardust-carousel">
                                            <div class="stardust-carousel__item-list-wrapper" style="padding-top:100%">
                                                <ul class="stardust-carousel__item-list" style="width:500%">
                                                    <li class="stardust-carousel__item" style="width:20%">
                                                        <div class="stardust-carousel__item-inner-wrapper">
                                                            <div class="_JU2rg">
                                                                <div class="SarUkj">
                                                                    <div class="ltOSWU">
                                                                        <div class="EoYuuW"></div>
                                                                    </div>
                                                                    <picture>
                                                                        <img class="IMAW1w" src="https://i.pinimg.com/564x/ee/92/2f/ee922f153e03982b1963fa808cf141b7.jpg"/>
                                                                    </picture>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="stardust-carousel__item" style="width:20%">
                                                        <div class="stardust-carousel__item-inner-wrapper">
                                                            <div class="_JU2rg">
                                                                <div class="Xyi3YC">
                                                                    <img class="_JU2rg H_3FFk"/>
                                                                    <div class="LcYzP1">
                                                                        <div class="qlQujO"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="stardust-carousel__item" style="width:20%">
                                                        <div class="stardust-carousel__item-inner-wrapper">
                                                            <div class="_JU2rg">
                                                                <div class="Xyi3YC">
                                                                    <img class="_JU2rg H_3FFk"/>
                                                                    <div class="LcYzP1">
                                                                        <div class="qlQujO"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="stardust-carousel__item" style="width:20%">
                                                        <div class="stardust-carousel__item-inner-wrapper">
                                                            <div class="_JU2rg">
                                                                <div class="Xyi3YC">
                                                                    <img class="_JU2rg H_3FFk"/>
                                                                    <div class="LcYzP1">
                                                                        <div class="qlQujO"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="stardust-carousel__item" style="width:20%">
                                                        <div class="stardust-carousel__item-inner-wrapper">
                                                            <div class="_JU2rg">
                                                                <div class="Xyi3YC">
                                                                    <img class="_JU2rg H_3FFk"/>
                                                                    <div class="LcYzP1">
                                                                        <div class="qlQujO"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="stardust-carousel__indexing">1/5</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-section page-section--no-border product-page__overview">
                                    <div class="ezTNz_">
                                        <div class="xKawm0">
                                            <div>
                                                <div class="WOxHZ9 typo-r16 two-line-text">
                                                    <div class="nx5rVB">
                                                        <img alt="mall inline badge" src="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/54c82565b04145901149.svg"/>
                                                    </div>
                                                    <h1 style="font-size:15px;">
                                                        <span><?php echo $BRANDS ?> LOGIN: Emang Boleh Website Segacor Ini Hadir Di Indonesia</span>
                                                    </h1>
                                                </div>
                                            </div>
                                            <div class="G6hhEE">
                                                <div class="qksVIt">
                                                    <div class="ViQfDB typo-m18">Rp20.988</div>
                                                </div>
                                                <div class="ZuWaqn">
                                                    <div class="AkbYn8">
                                                        <div class="_1PWkR nt-regular nt-foot" style="color:#26AA99">
                                                            <svg class="_2DRZW _2xFcL" viewBox="-0.25 -0.25 4 16">
                                                                <path d="M4 0h-3q-1 0 -1 1v13.5q0 1 1 1h+3" stroke-width="0.5" transform="" stroke="currentColor" fill="transparent"></path>
                                                            </svg>
                                                            <div class="_1FKkT _3Ao0A" style="color:#26AA99;background-color:transparent">Garansi Bebas Pengembalian</div>
                                                            <svg class="_2DRZW _2xFcL" viewBox="-0.25 -0.25 4 16">
                                                                <path d="M4 0h-3q-1 0 -1 1v13.5q0 1 1 1h+3" stroke-width="0.5" transform="rotate(180) translate(-3.5 -15.5)" stroke="currentColor" fill="transparent"></path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hDwtBy"></div>
                                            <div class="VknKiT">
                                                <a href="https://shopee.co.id/m/shopee-garansi-ori" target="_blank" rel="noreferrer">
                                                    <div class="flex flex-align-items-center flex-justify-content-space-between  pQW9A9">
                                                        <div class="flex flex-align-items-center">
                                                            <svg class="kUpbkg" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path class="orignal-guarantee-icon__path--fill" d="M9.323 12.301C9.11156 12.0706 8.85558 11.8854 8.57053 11.7567C8.27439 11.6252 7.95397 11.5573 7.62995 11.5573C7.30593 11.5573 6.9855 11.6252 6.68937 11.7567C6.4056 11.8876 6.15003 12.0725 5.9369 12.301C5.72123 12.5301 5.54836 12.796 5.42648 13.0861C5.30203 13.3826 5.23389 13.7013 5.24088 14.0229C5.23842 14.3515 5.30152 14.6772 5.42648 14.9811C5.54604 15.2724 5.71917 15.5386 5.9369 15.7661C6.15458 15.9934 6.41441 16.1761 6.7019 16.3041C6.99672 16.4356 7.31593 16.5036 7.63874 16.5036C7.96154 16.5036 8.28074 16.4356 8.57555 16.3041C8.85952 16.1764 9.11529 15.9935 9.32802 15.7661C9.54174 15.5372 9.71176 15.2712 9.82967 14.9811C9.95503 14.6773 10.0186 14.3515 10.0165 14.0229C10.0181 13.7012 9.95455 13.3825 9.82967 13.0861C9.70782 12.7969 9.53635 12.5312 9.323 12.301Z" fill="#EE4D2D"></path>
                                                                <path class="orignal-guarantee-icon__path--fill" d="M18.1281 11.9222C17.8669 11.7097 17.5419 11.5909 17.2051 11.5849C17.0797 11.5748 16.8866 11.5686 16.6332 11.5636C16.3799 11.5585 16.1767 11.5573 16.02 11.5573H15.5384V14.2022H16.6332C16.7486 14.2022 16.8565 14.2022 16.9568 14.1959C17.0571 14.1897 17.1411 14.1884 17.2076 14.1884C17.5421 14.1827 17.8658 14.0692 18.1306 13.8648C18.3815 13.668 18.5069 13.3431 18.5069 12.8929C18.5069 12.4427 18.3764 12.1292 18.1281 11.9222Z" fill="#EE4D2D"></path>
                                                                <path class="orignal-guarantee-icon__path--fill" d="M27.6017 12.0288C28.3366 10.717 28.0573 9.67608 26.7639 8.90605C25.4705 8.13603 24.8142 6.99813 24.795 5.49236C24.7749 3.98743 24.012 3.22534 22.5062 3.20612C21.0004 3.18689 19.863 2.53057 19.0938 1.23716C18.3254 -0.0554085 17.2841 -0.33466 15.9698 0.399413C14.6555 1.13349 13.3428 1.13349 12.0319 0.399413C10.7176 -0.335496 9.67625 -0.0562446 8.9079 1.23716C8.13954 2.53057 7.00205 3.18689 5.49545 3.20612C3.99051 3.22702 3.2276 3.9891 3.20669 5.49236C3.18579 6.99562 2.52948 8.13352 1.23774 8.90605C-0.0564984 9.67441 -0.335754 10.7153 0.399991 12.0288C1.13574 13.3423 1.13574 14.6562 0.399991 15.9705C-0.334918 17.2823 -0.0556624 18.3236 1.23774 19.0945C2.53115 19.8653 3.18746 21.0024 3.20669 22.5056C3.22843 24.0106 3.99135 24.7731 5.49545 24.7931C6.99955 24.8132 8.13536 25.4699 8.90287 26.7633C9.67206 28.0559 10.7134 28.3347 12.0269 27.5998C13.3403 26.8649 14.653 26.8649 15.9648 27.5998C17.2774 28.3356 18.3187 28.0568 19.0888 26.7633C19.8588 25.4699 20.9963 24.8132 22.5012 24.7931C24.0061 24.7747 24.7691 24.0122 24.79 22.5056C24.8109 20.999 25.4672 19.862 26.7589 19.0945C28.0515 18.3244 28.3307 17.2831 27.5967 15.9705C26.8626 14.6578 26.8643 13.3439 27.6017 12.0288ZM11.7008 15.7736C11.2667 16.8573 10.4291 17.7303 9.36439 18.2091C8.81848 18.4497 8.22843 18.574 7.63183 18.574C7.03524 18.574 6.44519 18.4497 5.89928 18.2091C5.37382 17.9745 4.89891 17.6402 4.50095 17.2246C4.10105 16.8046 3.78293 16.3138 3.56287 15.7773C3.10683 14.6577 3.10457 13.4046 3.5566 12.2834C3.77338 11.7494 4.08954 11.2611 4.48715 10.8437C4.88437 10.4288 5.35955 10.0964 5.88547 9.86545C6.43376 9.62882 7.02464 9.50676 7.6218 9.50676C8.21897 9.50676 8.80983 9.62882 9.35812 9.86545C9.88261 10.0961 10.3575 10.4262 10.7565 10.8374C11.1553 11.2522 11.473 11.738 11.6933 12.2696C11.9248 12.8258 12.0421 13.4229 12.0382 14.0253C12.0406 14.6245 11.926 15.2184 11.7008 15.7736ZM18.2109 18.4599L16.5805 16.131H15.5334V18.4599H13.5619V9.64096H16.6972C16.8903 9.64096 17.0822 9.64096 17.2753 9.65476C17.7035 9.66911 18.1267 9.75079 18.5294 9.8968C18.9038 10.0303 19.2457 10.2414 19.5327 10.5163C19.821 10.8007 20.0462 11.1425 20.1936 11.5196C20.3625 11.9595 20.4443 12.428 20.4344 12.8991C20.4344 13.6717 20.2714 14.3012 19.9453 14.7878C19.6265 15.2685 19.167 15.639 18.6298 15.8488L20.4708 18.4599H18.2109ZM24.1228 18.4599H21.9908V9.64096H24.1228V18.4599Z" fill="#EE4D2D"></path>
                                                            </svg>
                                                            <div>
                                                                <div class="EXeraP">Shopee Garansi 100% Kekalahan</div>
                                                                <div class="EsQDTw">Garansi uang kembali jika produk tidak ori</div>
                                                            </div>
                                                        </div>
                                                        <svg viewBox="0 0 24 24" fill="none" width="24" height="24" color="rgba(0, 0, 0, 0.54)">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.94 12L9.47 6.53l1.06-1.06 5.647 5.646a1.25 1.25 0 010 1.768L10.53 18.53l-1.06-1.06L14.94 12z" fill="currentColor"></path>
                                                        </svg>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="product-review__wrapper">
                                                <div class="product-review">
                                                    <div class="CjmmTK">
                                                        <a href="/shop/37451478/item/1310112778/rating/" class="product-review__link">
                                                            <div class="ajvSGB UuhjH6">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" class="AdyKFb">
                                                                    <defs>
                                                                        <linearGradient id="rating-solid" x1="50%" x2="50%" y1="0%" y2="100%">
                                                                            <stop offset="0%" stop-color="#FFCA11"></stop>
                                                                            <stop offset="100%" stop-color="#FFAD27"></stop>
                                                                        </linearGradient>
                                                                    </defs>
                                                                    <path fill="url(#rating-solid)" fill-rule="evenodd" d="M14.9988798 25.032153l-8.522024 4.7551739c-.4785069.2670004-.7939037.0347448-.7072938-.5012115l1.6339124-10.1109185-6.8944622-7.1327607c-.3871203-.4005006-.2499178-.7947292.2865507-.8774654l9.5090982-1.46652789L14.5740199.51703028c.2346436-.50460972.6146928-.50543408.8497197 0l4.2693588 9.18141263 9.5090986 1.46652789c.545377.0841102.680337.4700675.28655.8774654l-6.894462 7.1327607 1.633912 10.1109185c.08788.5438118-.232337.7662309-.707293.5012115l-8.5220242-4.7551739z"></path>
                                                                </svg>
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" class="AdyKFb">
                                                                    <defs>
                                                                        <linearGradient id="rating-solid" x1="50%" x2="50%" y1="0%" y2="100%">
                                                                            <stop offset="0%" stop-color="#FFCA11"></stop>
                                                                            <stop offset="100%" stop-color="#FFAD27"></stop>
                                                                        </linearGradient>
                                                                    </defs>
                                                                    <path fill="url(#rating-solid)" fill-rule="evenodd" d="M14.9988798 25.032153l-8.522024 4.7551739c-.4785069.2670004-.7939037.0347448-.7072938-.5012115l1.6339124-10.1109185-6.8944622-7.1327607c-.3871203-.4005006-.2499178-.7947292.2865507-.8774654l9.5090982-1.46652789L14.5740199.51703028c.2346436-.50460972.6146928-.50543408.8497197 0l4.2693588 9.18141263 9.5090986 1.46652789c.545377.0841102.680337.4700675.28655.8774654l-6.894462 7.1327607 1.633912 10.1109185c.08788.5438118-.232337.7662309-.707293.5012115l-8.5220242-4.7551739z"></path>
                                                                </svg>
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" class="AdyKFb">
                                                                    <defs>
                                                                        <linearGradient id="rating-solid" x1="50%" x2="50%" y1="0%" y2="100%">
                                                                            <stop offset="0%" stop-color="#FFCA11"></stop>
                                                                            <stop offset="100%" stop-color="#FFAD27"></stop>
                                                                        </linearGradient>
                                                                    </defs>
                                                                    <path fill="url(#rating-solid)" fill-rule="evenodd" d="M14.9988798 25.032153l-8.522024 4.7551739c-.4785069.2670004-.7939037.0347448-.7072938-.5012115l1.6339124-10.1109185-6.8944622-7.1327607c-.3871203-.4005006-.2499178-.7947292.2865507-.8774654l9.5090982-1.46652789L14.5740199.51703028c.2346436-.50460972.6146928-.50543408.8497197 0l4.2693588 9.18141263 9.5090986 1.46652789c.545377.0841102.680337.4700675.28655.8774654l-6.894462 7.1327607 1.633912 10.1109185c.08788.5438118-.232337.7662309-.707293.5012115l-8.5220242-4.7551739z"></path>
                                                                </svg>
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" class="AdyKFb">
                                                                    <defs>
                                                                        <linearGradient id="rating-solid" x1="50%" x2="50%" y1="0%" y2="100%">
                                                                            <stop offset="0%" stop-color="#FFCA11"></stop>
                                                                            <stop offset="100%" stop-color="#FFAD27"></stop>
                                                                        </linearGradient>
                                                                    </defs>
                                                                    <path fill="url(#rating-solid)" fill-rule="evenodd" d="M14.9988798 25.032153l-8.522024 4.7551739c-.4785069.2670004-.7939037.0347448-.7072938-.5012115l1.6339124-10.1109185-6.8944622-7.1327607c-.3871203-.4005006-.2499178-.7947292.2865507-.8774654l9.5090982-1.46652789L14.5740199.51703028c.2346436-.50460972.6146928-.50543408.8497197 0l4.2693588 9.18141263 9.5090986 1.46652789c.545377.0841102.680337.4700675.28655.8774654l-6.894462 7.1327607 1.633912 10.1109185c.08788.5438118-.232337.7662309-.707293.5012115l-8.5220242-4.7551739z"></path>
                                                                </svg>
                                                                <div class="AdyKFb">
                                                                    <div class="HIDP6x" style="width:88.35227272727275%">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" class="RsQf0d">
                                                                            <defs>
                                                                                <linearGradient id="rating-solid" x1="50%" x2="50%" y1="0%" y2="100%">
                                                                                    <stop offset="0%" stop-color="#FFCA11"></stop>
                                                                                    <stop offset="100%" stop-color="#FFAD27"></stop>
                                                                                </linearGradient>
                                                                            </defs>
                                                                            <path fill="url(#rating-solid)" fill-rule="evenodd" d="M14.9988798 25.032153l-8.522024 4.7551739c-.4785069.2670004-.7939037.0347448-.7072938-.5012115l1.6339124-10.1109185-6.8944622-7.1327607c-.3871203-.4005006-.2499178-.7947292.2865507-.8774654l9.5090982-1.46652789L14.5740199.51703028c.2346436-.50460972.6146928-.50543408.8497197 0l4.2693588 9.18141263 9.5090986 1.46652789c.545377.0841102.680337.4700675.28655.8774654l-6.894462 7.1327607 1.633912 10.1109185c.08788.5438118-.232337.7662309-.707293.5012115l-8.5220242-4.7551739z"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" class="bXm5gg">
                                                                        <defs>
                                                                            <linearGradient id="rating-hollow" x1="50%" x2="50%" y1="0%" y2="99.0177926%">
                                                                                <stop offset="0%" stop-color="#FFD211"></stop>
                                                                                <stop offset="100%" stop-color="#FFAD27"></stop>
                                                                            </linearGradient>
                                                                        </defs>
                                                                        <path fill="none" fill-rule="evenodd" stroke="url(#rating-hollow)" stroke-width="2" d="M23.226809 28.390899l-1.543364-9.5505903 6.600997-6.8291523-9.116272-1.4059447-4.01304-8.63019038-4.013041 8.63019038-9.116271 1.4059447 6.600997 6.8291523-1.543364 9.5505903 8.071679-4.5033874 8.071679 4.5033874z"></path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="yIRUr4">5.0</div>
                                                        </a>
                                                    </div>
                                                    <div class="product-review__sold-count">
                                                        <div>1,5RB
                                                        <!-- -->
                                                        <!-- -->
                                                        Terjual</div>
                                                    </div>
                                                    <div class="product-review__like">
                                                        <button disabled="">
                                                            <svg viewBox="0 0 22 19" version="1.1" xmlns="http://www.w3.org/2000/svg" width="22" height="19">
                                                                <g transform="translate(-0.5, -3)" fill-rule="nonzero" stroke="#595959" stroke-width="1.5" fill="none">
                                                                    <path d="M10.7510916,5.02441452 C9.71288513,4.21333304 8.38591653,3.75 7.05,3.75 C4.6640902,3.75 1.75,5.93041968 1.75,8.69482289 C1.75,9.72265698 2.04389836,10.7232187 2.64719149,11.7755095 C3.83247386,13.842932 5.52963591,15.4857604 10.8930142,20.0637321 L12.0018522,21.0138968 L13.1074831,20.0736606 C18.4933019,15.4666923 20.1786809,13.8325614 21.3605464,11.7622778 C21.9586107,10.7146435 22.25,9.71826659 22.25,8.69482289 C22.25,5.93041968 19.933591,3.75 16.95,3.75 C15.6132045,3.75 14.2853688,4.21394292 13.2510739,5.02269611 L13.1827793,5.07686689 C12.9560346,5.25946414 12.746321,5.45701006 12.5561764,5.66719053 L12,6.28197216 L11.4438236,5.66719053 C11.253679,5.45701006 11.0439654,5.25946414 10.8214191,5.08022309 L10.7510916,5.02441452 Z"></path>
                                                                </g>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div id="sll2-selling-points">
                                            <div class="">
                                                <div class="Qa7c6h"></div>
                                                <div class="GegCUx">
                                                    <div class="soNOfD typo-m16">Jaminan Shopee Mall</div>
                                                    <div class="FQ4ICz">
                                                        <div class="hO8D9l">
                                                            <img class="jwuwxo" src="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/6c502a2641457578b0d5.png"/>
                                                            <div class="uoh9dy">
                                                                7 Hr Pengembalian<div class="lHb1tu">Untuk menjamin kepuasanmu, Shopee Mall memperpanjang waktu pengembalian barang (7 hari setelah barang diterima). Kamu dapat melakukan pengembalian secara praktis dan gratis* (melalui J &T Express atau Indopaket (Indomaret) dengan resi yang diberikan oleh Shopee). Seluruh dana akan dikembalikan kepadamu jika pengajuan memenuhi Syarat &Ketentuan (pengembalian karena produk tidak original, rusak, cacat, atau salah).</div>
                                                            </div>
                                                        </div>
                                                        <div class="hO8D9l">
                                                            <img class="jwuwxo" src="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/511aca04cc3ba9234ab0.png"/>
                                                            <div class="uoh9dy">
                                                                100% Ori<div class="lHb1tu">Shopee menjamin bahwa produk yang terdaftar di Shopee Mall adalah 100% original. Jika produk dari Shopee Mall yang kamu terima bukan produk original, Shopee akan mengembalikan dua kali dari jumlah harga produk yang kamu bayarkan untuk produk tersebut.</div>
                                                            </div>
                                                        </div>
                                                        <div class="hO8D9l">
                                                            <img class="jwuwxo" src="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/16ead7e0a68c3cff9f32.png"/>
                                                            <div class="uoh9dy">
                                                                Gratis Ongkir<div class="lHb1tu">Nikmati Gratis Ongkir spesial pada semua produk Shopee Mall dengan min. belanja lebih rendah.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="NI9a0R">Lanjutkan Belanja</div>
                                                </div>
                                            </div>
                                            <div class="E6qTXV">
                                                <div class="hgipRy">
                                                    <div class="NQpi16">
                                                        <img class="gQscGd" src="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/6c502a2641457578b0d5.png" alt="7 Hr Pengembalian"/>7 Hr Pengembalian
                                                    </div>
                                                    <div class="NQpi16">
                                                        <img class="gQscGd" src="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/511aca04cc3ba9234ab0.png" alt="100% Ori"/>100% Ori
                                                    </div>
                                                    <div class="NQpi16">
                                                        <img class="gQscGd" src="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/16ead7e0a68c3cff9f32.png" alt="Gratis Ongkir"/>Gratis Ongkir
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="action-bar-section">
                                    <div class="product-action-bar__wrapper product-voucher">
                                        <div class="product-action-bar">
                                            <div class="product-action-bar__label">Voucher Toko</div>
                                            <div class="product-action-bar__content product-voucher__vouchers">
                                                <div style="display:contents"></div>
                                                <div style="display:contents"></div>
                                            </div>
                                            <svg enable-background="new 0 0 11 11" viewBox="0 0 11 11" role="img" class="stardust-icon stardust-icon-arrow-right product-action-bar__arrow">
                                                <path stroke="none" d="m2.5 11c .1 0 .2 0 .3-.1l6-5c .1-.1.2-.3.2-.4s-.1-.3-.2-.4l-6-5c-.2-.2-.5-.1-.7.1s-.1.5.1.7l5.5 4.6-5.5 4.6c-.2.2-.2.5-.1.7.1.1.3.2.4.2z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="product-action-bar__wrapper">
                                        <div class="product-action-bar P38a_1">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="pfo5zo">
                                                <path d="M0 8.77733C0 6.26602 1.86798 4.5 4.51175 4.5C5.87937 4.5 7.00205 5.01088 7.52344 5.92858L5.78791 7.28673C5.48201 6.75588 5.01213 6.44998 4.35828 6.44998C3.22508 6.44998 2.42933 7.34875 2.42933 8.62386C2.42933 9.46062 3.01169 10.022 3.8989 10.022C4.46025 10.022 5.00161 9.78754 5.49147 9.19466L6.91059 10.5518C6.04335 11.6135 4.98164 11.9709 3.66449 11.9709C1.44961 11.9709 0 10.6748 0 8.77628V8.77733Z" fill="#EE4D2D"></path>
                                                <path d="M7.44141 8.77733C7.44141 6.2555 9.3199 4.5 11.9426 4.5C14.168 4.5 15.5661 5.81715 15.5661 7.6946C15.5661 10.2164 13.6876 11.9719 11.0649 11.9719C8.8395 11.9719 7.44141 10.6548 7.44141 8.77733ZM13.1379 7.83861C13.1379 7.01132 12.6175 6.44998 11.7398 6.44998C10.5561 6.44998 9.87178 7.46018 9.87178 8.63437C9.87178 9.46167 10.3921 10.023 11.2699 10.023C12.4535 10.023 13.1379 9.0128 13.1379 7.83861Z" fill="#EE4D2D"></path>
                                                <path d="M17.1297 4.66309H20.3558C22.6117 4.66309 24.0003 5.81625 24.0003 7.69475C24.0003 10.2166 22.1323 11.8081 19.5296 11.8081H15.7021L17.1307 4.66309H17.1297ZM19.6105 9.93065C20.8867 9.93065 21.57 9.0119 21.57 7.83771C21.57 7.01042 21.0496 6.54158 20.0793 6.54158H19.1606L18.4868 9.93065H19.6095H19.6105Z" fill="#EE4D2D"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M22.6177 13.921C22.6177 13.9209 22.6177 13.9209 22.6177 13.9209H1.18988L0 19.0638H1.19235C1.19235 19.0638 1.19235 19.0638 1.19235 19.0638H22.8102L24.0001 13.921H22.6177Z" fill="#EE4D2D"></path>
                                                <path d="M3.53148 17.929C3.33087 17.929 3.15041 17.8915 2.99193 17.8173C2.83346 17.7431 2.70246 17.6414 2.6017 17.5113C2.50002 17.3822 2.4304 17.2292 2.39284 17.0542C2.35528 16.8793 2.3562 16.6933 2.39467 16.4945C2.43406 16.2902 2.50735 16.1015 2.61452 15.9266C2.7217 15.7516 2.85178 15.5996 3.00475 15.4695C3.15773 15.3403 3.32995 15.2377 3.52049 15.1635C3.71102 15.0893 3.90889 15.0518 4.11225 15.0518C4.35683 15.0518 4.56019 15.0948 4.7205 15.1809C4.88172 15.267 5.02188 15.3715 5.14005 15.4933L4.65455 16.0356C4.56935 15.966 4.475 15.9064 4.37241 15.8588C4.26981 15.8112 4.13698 15.7864 3.97301 15.7864C3.87957 15.7864 3.78797 15.802 3.69728 15.8341C3.60659 15.8661 3.52232 15.9119 3.44537 15.9715C3.36842 16.031 3.30155 16.1043 3.24567 16.1904C3.1898 16.2765 3.15041 16.3745 3.12934 16.4854C3.10918 16.587 3.1101 16.6823 3.13117 16.7693C3.15224 16.8564 3.18796 16.9315 3.24018 16.9947C3.29239 17.057 3.3556 17.1064 3.4298 17.1412C3.50491 17.1761 3.58553 17.1935 3.67347 17.1935C3.7724 17.1935 3.86217 17.1843 3.9437 17.1651C4.02431 17.1458 4.09942 17.1229 4.16721 17.0954C4.235 17.068 4.29729 17.0359 4.35408 16.9993C4.41088 16.9626 4.46401 16.9269 4.51439 16.8921L4.78554 17.4298C4.71226 17.4912 4.63164 17.5516 4.54279 17.6112C4.45393 17.6707 4.35775 17.7238 4.25424 17.7706C4.15072 17.8173 4.03805 17.8548 3.91713 17.8842C3.79622 17.9135 3.66797 17.9281 3.53056 17.9281L3.53148 17.929Z" fill="white"></path>
                                                <path d="M7.5302 15.0972L7.39738 15.7787H6.19095L6.12042 16.1415L7.29936 16.146L7.16654 16.8276H5.98667L5.91522 17.1949H7.12165L6.98608 17.8938H5.0459L5.58911 15.0972H7.52929H7.5302Z" fill="white"></path>
                                                <path d="M7.96698 15.0972H8.70073L8.50195 16.1195L9.52242 15.0972H10.4137L9.1276 16.3384L9.91815 17.8938H9.06623L8.57248 16.8578L8.30958 17.107L8.1566 17.8938H7.42285L7.96606 15.0972H7.96698Z" fill="white"></path>
                                                <path d="M11.8742 15.0972H12.608C12.739 15.0972 12.8626 15.1027 12.978 15.1146C13.0935 15.1265 13.2006 15.1494 13.2986 15.1842C13.3967 15.219 13.4874 15.2676 13.5698 15.3308C13.6522 15.393 13.7255 15.4755 13.7906 15.5781C13.862 15.6917 13.9078 15.8291 13.9289 15.9885C13.95 16.1488 13.9435 16.3173 13.9087 16.495C13.8767 16.6608 13.8217 16.8212 13.7457 16.976C13.6687 17.1308 13.5652 17.2728 13.4351 17.4047C13.3371 17.5036 13.2354 17.5851 13.1301 17.6493C13.0248 17.7134 12.9148 17.7638 12.8012 17.8004C12.6877 17.837 12.5704 17.8618 12.4476 17.8746C12.3258 17.8874 12.1976 17.8938 12.0638 17.8938H11.3301L11.8733 15.0972H11.8742ZM12.466 15.8309L12.2076 17.1592H12.3341C12.5704 17.1592 12.7573 17.1079 12.8974 17.0044C13.0367 16.9009 13.1301 16.7314 13.1759 16.495C13.2217 16.2587 13.1961 16.0892 13.098 15.9857C13 15.8822 12.8333 15.8309 12.597 15.8309H12.466Z" fill="white"></path>
                                                <path d="M15.1521 17.929C14.9945 17.929 14.8516 17.9043 14.7234 17.8548C14.5942 17.8054 14.4861 17.7339 14.3982 17.6405C14.3103 17.547 14.2443 17.4344 14.2022 17.3015C14.1591 17.1687 14.1472 17.0185 14.1655 16.849C14.1692 16.8142 14.1756 16.7693 14.1829 16.7134C14.1912 16.6585 14.2003 16.5998 14.2104 16.5385C14.2205 16.4771 14.2324 16.4157 14.2443 16.3525C14.2562 16.2902 14.2672 16.2353 14.2764 16.1885L14.4889 15.0957H15.2236L15.011 16.1885C14.9927 16.2847 14.9735 16.3791 14.9561 16.4725C14.9378 16.5659 14.9277 16.6356 14.924 16.6823C14.9084 16.8371 14.9295 16.9617 14.9872 17.056C15.0449 17.1504 15.1475 17.198 15.2959 17.198C15.4443 17.198 15.568 17.1504 15.6578 17.056C15.7475 16.9617 15.8126 16.8398 15.8529 16.6914C15.8684 16.642 15.8849 16.5696 15.9033 16.4753C15.9216 16.3809 15.9399 16.2847 15.9591 16.1885L16.1717 15.0957H16.9063L16.6938 16.1885C16.6846 16.2353 16.6736 16.2884 16.6608 16.3479C16.648 16.4075 16.6343 16.467 16.6214 16.5275C16.6086 16.587 16.5949 16.6438 16.582 16.6979C16.5683 16.7519 16.5564 16.7995 16.5454 16.8398C16.4987 17.0056 16.4309 17.1559 16.342 17.2896C16.2532 17.4234 16.1478 17.5379 16.026 17.6331C15.9042 17.7275 15.7686 17.8008 15.6211 17.8521C15.4727 17.9034 15.317 17.9281 15.1539 17.9281L15.1521 17.929Z" fill="white"></path>
                                                <path d="M16.8408 17.8938L17.384 15.0972H18.1709L17.7678 17.1683H18.5547L18.693 17.8938H16.8398H16.8408Z" fill="white"></path>
                                                <path d="M19.8582 17.929C19.7006 17.929 19.5577 17.9043 19.4295 17.8548C19.3003 17.8054 19.1922 17.7339 19.1043 17.6405C19.0163 17.547 18.9504 17.4344 18.9082 17.3015C18.8652 17.1687 18.8533 17.0185 18.8716 16.849C18.8752 16.8142 18.8817 16.7693 18.889 16.7134C18.8972 16.6585 18.9064 16.5998 18.9165 16.5385C18.9265 16.4771 18.9385 16.4157 18.9504 16.3525C18.9623 16.2902 18.9733 16.2353 18.9824 16.1885L19.1949 15.0957H19.9296L19.7171 16.1885C19.6988 16.2847 19.6795 16.3791 19.6621 16.4725C19.6438 16.5659 19.6337 16.6356 19.6301 16.6823C19.6145 16.8371 19.6356 16.9617 19.6933 17.056C19.751 17.1504 19.8536 17.198 20.002 17.198C20.1504 17.198 20.274 17.1504 20.3638 17.056C20.4536 16.9617 20.5186 16.8398 20.5589 16.6914C20.5745 16.642 20.591 16.5696 20.6093 16.4753C20.6276 16.3809 20.646 16.2847 20.6652 16.1885L20.8777 15.0957H21.6124L21.3999 16.1885C21.3907 16.2353 21.3797 16.2884 21.3669 16.3479C21.3541 16.4075 21.3403 16.467 21.3275 16.5275C21.3147 16.587 21.3009 16.6438 21.2881 16.6979C21.2744 16.7519 21.2624 16.7995 21.2515 16.8398C21.2047 17.0056 21.137 17.1559 21.0481 17.2896C20.9592 17.4234 20.8539 17.5379 20.7321 17.6331C20.6102 17.7275 20.4747 17.8008 20.3272 17.8521C20.1788 17.9034 20.023 17.9281 19.86 17.9281L19.8582 17.929Z" fill="white"></path>
                                            </svg>
                                            <div class="lBCUpm">
                                                <div class="product-action-bar__label">COD - Cek Dulu</div>
                                                <div class="EaCS3k">Buka dulu, baru bayar!</div>
                                            </div>
                                            <svg enable-background="new 0 0 11 11" viewBox="0 0 11 11" role="img" class="stardust-icon stardust-icon-arrow-right product-action-bar__arrow">
                                                <path stroke="none" d="m2.5 11c .1 0 .2 0 .3-.1l6-5c .1-.1.2-.3.2-.4s-.1-.3-.2-.4l-6-5c-.2-.2-.5-.1-.7.1s-.1.5.1.7l5.5 4.6-5.5 4.6c-.2.2-.2.5-.1.7.1.1.3.2.4.2z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="product-action-bar__wrapper">
                                        <div class="product-action-bar">
                                            <div class="product-action-bar__label mX2a4k">
                                                <div>Proteksi Kerusakan +</div>
                                            </div>
                                            <div class="product-action-bar__content">Pelajari</div>
                                            <svg enable-background="new 0 0 11 11" viewBox="0 0 11 11" role="img" class="stardust-icon stardust-icon-arrow-right product-action-bar__arrow">
                                                <path stroke="none" d="m2.5 11c .1 0 .2 0 .3-.1l6-5c .1-.1.2-.3.2-.4s-.1-.3-.2-.4l-6-5c-.2-.2-.5-.1-.7.1s-.1.5.1.7l5.5 4.6-5.5 4.6c-.2.2-.2.5-.1.7.1.1.3.2.4.2z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-section page-section--no-border fho4rO">
                                    <div class="qdO1TI hairline-border-bottom">
                                        <div class="zqysKX theme--ofs">
                                            <svg width="28px" height="12px" viewBox="0 0 28 12" version="1.1" xmlns="http://www.w3.org/2000/svg" class="j7ycuq">
                                                <g transform="translate(-0.000000, -1.000000)" stroke="none" stroke-width="1" fill="#EE4D2D" fill-rule="evenodd" class="fill">
                                                    <path d="M0,12.5 L2.31644528,1.5 L28,1.5 L25.3667403,12.5 L0,12.5 Z M2.37738265,7.64598009 C2.37738265,9.45717781 3.75943954,10.6939972 5.8722845,10.6939972 C7.12881935,10.6939972 8.14132006,10.353138 8.96893314,9.34041821 L7.6153542,8.04532859 C7.14787767,8.61006828 6.63198862,8.83394879 6.09638407,8.83394879 C5.2494936,8.83394879 4.6943926,8.29834424 4.6943926,7.49986629 C4.6943926,6.28276245 5.45365861,5.42579516 6.5345064,5.42579516 C7.15773542,5.42579516 7.6057155,5.7178037 7.89772404,6.22427312 L9.55426458,4.9291835 C9.05765292,4.05271977 7.98644381,3.5657468 6.6817155,3.5657468 C4.1596643,3.5657468 2.37738265,5.25054623 2.37738265,7.64598009 Z M9.47496444,7.64598009 C9.47496444,9.43768137 10.8097041,10.6939972 12.9319687,10.6939972 C15.4338663,10.6939972 17.2255676,9.01905548 17.2255676,6.61376387 C17.2255676,4.82206259 15.8914851,3.5657468 13.7685633,3.5657468 C11.2666657,3.5657468 9.47496444,5.24068848 9.47496444,7.64598009 Z M14.9076814,6.75001991 L14.9094339,6.75001991 C14.9094339,7.8698606 14.2568506,8.83394879 13.1253997,8.83394879 C12.2881479,8.83394879 11.7915363,8.29834424 11.7915363,7.50972404 C11.7915363,6.3896643 12.4439004,5.42579516 13.5733798,5.42579516 C14.4108506,5.42579516 14.9076814,5.96139972 14.9076814,6.75001991 Z M18.716936,3.72171835 L17.3537183,10.5375875 L21.0052489,10.5375875 C23.4885263,10.5375875 25.2705889,9.01861735 25.2705889,6.61332575 C25.2705889,4.82206259 23.9461451,3.72171835 21.7940882,3.72171835 L18.716936,3.72171835 Z M21.0827966,8.74632432 L20.0118065,8.74632432 L20.654532,5.51341963 L21.5307767,5.51341963 C22.455872,5.51341963 22.9524836,5.96139972 22.9524836,6.75001991 C22.9524836,7.87007966 22.2999004,8.74632432 21.0827966,8.74632432 Z" id="svg-cod-path"></path>
                                                </g>
                                            </svg>
                                            <span class="GyLvVe">COD (Bayar di Tempat)</span>
                                        </div>
                                        <div>
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="zRcOiT">
                                        <div class="stardust-drawer"></div>
                                    </div>
                                    <div class="LgPiTp">
                                        <div class="OrKCZ6">
                                            <svg viewBox="0 0 20 12" height="12" width="20" class="CFyoxo">
                                                <path fill="#00bfa5" d="M5 0h10c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1H5c-.6 0-1-.4-1-1V1c0-.6.4-1 1-1z"></path>
                                                <path fill="#00bfa5" d="M14 2h5c.6 0 1 .4 1 1v5c0 .6-.4 1-1 1h-5c-.6 0-1-.4-1-1V3c0-.6.4-1 1-1z"></path>
                                                <circle fill="#00bfa5" cx="8" cy="10" r="2"></circle>
                                                <circle fill="#00bfa5" cx="15" cy="10" r="2"></circle>
                                                <path fill="#fff" d="M17.3 5.9h.7c-.2.6-.7.9-1.5.9-1 0-1.6-.6-1.6-1.6s.6-1.7 1.6-1.7 1.5.6 1.5 1.6v.2h-2.4c0 .6.4.9.9.9.4.1.7 0 .8-.3zm-.8-1.8c-.5 0-.9.3-.9.8h1.7c0-.5-.3-.8-.8-.8zm-2.7 1.8h.7c-.2.6-.7.9-1.5.9-1 0-1.6-.6-1.6-1.6S12 3.5 13 3.5s1.5.6 1.5 1.6v.2h-2.4c0 .6.4.9.9.9.4.1.7 0 .8-.3zM13 4.1c-.5 0-.9.3-.9.8h1.7c0-.5-.3-.8-.8-.8zM9.4 6.8V3.6h.6v.5h.1c.1-.3.5-.5.9-.5h.3v.6h-.4c-.5 0-.9.3-.9.8v1.9h-.6zm-2.7 0H6V2.6h2.8v.6H6.7v1.3h2V5h-2v1.8z"></path>
                                                <path fill="#00bfa5" d="M.5 8.5H4v.8H.5z"></path>
                                                <path fill="#00bfa5" d="M0 10.2h3.5v.8H0z"></path>
                                                <circle fill="#047565" cx="8" cy="10" r="1"></circle>
                                                <circle fill="#047565" cx="15" cy="10" r="1"></circle>
                                            </svg>
                                            <div>
                                                <div class="imdXCy">
                                                    <div class="OUIRQO typo-r14">Gratis Ongkir</div>
                                                </div>
                                                <div></div>
                                            </div>
                                            <div class="product-shipping-options__icon-wrapper">
                                                <svg version="1.1" viewBox="0 0 15 15" x="0" y="0" class="shopee-icon product-shipping-options__icon">
                                                    <line fill="none" stroke-linejoin="round" stroke-miterlimit="10" x1="8.6" x2="4.2" y1="9.8" y2="9.8"></line>
                                                    <circle cx="3" cy="11.2" fill="none" r="2" stroke-miterlimit="10"></circle>
                                                    <circle cx="10" cy="11.2" fill="none" r="2" stroke-miterlimit="10"></circle>
                                                    <line fill="none" stroke-miterlimit="10" x1="10.5" x2="14.4" y1="7.3" y2="7.3"></line>
                                                    <polyline fill="none" points="1.5 9.8 .5 9.8 .5 1.8 10 1.8 10 9.1" stroke-linejoin="round" stroke-miterlimit="10"></polyline>
                                                    <polyline fill="none" points="9.9 3.8 14 3.8 14.5 10.2 11.9 10.2" stroke-linejoin="round" stroke-miterlimit="10"></polyline>
                                                </svg>
                                            </div>
                                            <div class="product-shipping-options__content">
                                                <div class="product-shipping-cost MP7IGc">
                                                    <div class="product-shipping-cost__label typo-l14">Ongkos Kirim: </div>
                                                    <div class="product-shipping-cost__detail">
                                                        Rp0
                                                        <!-- -->
                                                        <svg enable-background="new 0 0 11 11" viewBox="0 0 11 11" role="img" class="stardust-icon stardust-icon-arrow-down product-shipping-options-arrow-down product-shipping-cost__inline-icon">
                                                            <path stroke="none" d="m11 2.5c0 .1 0 .2-.1.3l-5 6c-.1.1-.3.2-.4.2s-.3-.1-.4-.2l-5-6c-.2-.2-.1-.5.1-.7s.5-.1.7.1l4.6 5.5 4.6-5.5c.2-.2.5-.2.7-.1.1.1.2.3.2.4z"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wJU0ED">
                                        <div class="stardust-drawer"></div>
                                    </div>
                                    <div class="GgpQQ1">
                                        <div class="stardust-drawer"></div>
                                    </div>
                                    <div class="product-page__address-picker-wrapper"></div>
                                </div>
                                <div class="page-section page-section--no-border fho4rO">
                                    <div class="HbSaLB">
                                        <a class="product-social-link product-social-link--facebook typo-r10" target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/v15.0/dialog/feed?app_id=957549474255294&amp;link=https%3A%2F%2Fshopee.co.id%2F%2FThe-Executive-Long-Sleeve-Shirt-White-(1-LSIBSC516O002)-i.37451478.1310112778&amp;redirect_uri=https%3A%2F%2Fshopee.co.id%2Fproduct%2F37451478%2F1310112778%3Fgad_source%3D1%26gclid%3DCjwKCAiArLyuBhA7EiwA-qo80GtoQTjB-ltTMUDs9c_3FSWtpK_4BxP_y7jPnz-bBoq85aZrF7nY0RoC9V8QAvD_BwE%23close">
                                            <div class="product-social-link__main">
                                                <div class="product-social-link__logo product-social-link__logo--facebook"></div>
                                                <div class="product-social-link__text">Share</div>
                                            </div>
                                        </a>
                                        <a class="product-social-link product-social-link--twitter typo-r10" target="_blank" rel="noopener noreferrer" href="https://twitter.com/intent/tweet?original_referer=https%3A%2F%2Fshopee.co.id%2F%2FThe-Executive-Long-Sleeve-Shirt-White-(1-LSIBSC516O002)-i.37451478.1310112778&amp;text=Shopee">
                                            <div class="product-social-link__main">
                                                <div class="product-social-link__logo product-social-link__logo--twitter"></div>
                                                <div class="product-social-link__text">Tweet</div>
                                            </div>
                                        </a>
                                        <a class="product-social-link product-social-link--pinterest typo-r10" target="_blank" rel="noopener noreferrer" href="https://www.pinterest.com/pin/create/button/?url=https://shopee.co.id//The-Executive-Long-Sleeve-Shirt-White-(1-LSIBSC516O002)-i.37451478.1310112778&amp;media=https://down-id.img.susercontent.com/file/de45bc2be8f8f783774b51c46d7a8703&amp;description=Shopee">
                                            <div class="product-social-link__main">
                                                <div class="product-social-link__logo product-social-link__logo--pinterest"></div>
                                                <div class="product-social-link__text"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="page-section page-section--no-border">
                                    <div>
                                        <a class="JrSi7k" href="<?php echo $urlPath ?>">
                                            <div class="tLKi5m">
                                                <div class="sIRciZ">
                                                    <div class="_2xlbS _3L6HA">
                                                        <img alt="" class="_3L6HA" src="https://pafi.or.id/frontend/assets/images/logo2.png"/>
                                                    </div>
                                                    <div class="ApmXFx">
                                                        <div class="DosLFj tdup_p">
                                                            <img alt="mall badge" src="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/productdetailspage/d0ad0f5f8cef08750526.svg"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dxBoqK">
                                                    <div class="BO7Miq">SITUS <?php echo $BRANDS ?></div>
                                                    <div class="NVXQAd">
                                                        <div class="bPaN3S typo-r12">
                                                            <div class="x4bjBT">Sedang Online</div>
                                                        </div>
                                                    </div>
                                                    <div class="iAvbMw"></div>
                                                </div>
                                                <button class="_3sjFp _18F8b xCn81 TOjHY nt-regular nt-normal">
                                                    <span class="_2HCeY">Kunjungi Toko</span>
                                                </button>
                                            </div>
                                            <div class="JgC5PK">
                                                <div class="u0fIgc">
                                                    <div class="XraX_X">6,1RB</div>
                                                    <div class="sqTygw">Produk</div>
                                                </div>
                                                <div class="u0fIgc">
                                                    <div class="XraX_X">5.0</div>
                                                    <div class="sqTygw">Penilaian</div>
                                                </div>
                                                <div class="u0fIgc">
                                                    <div class="XraX_X">99%</div>
                                                    <div class="sqTygw">Chat Dibalas</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="AIoTgU">
                                            <div class="stardust-horizontal-scroll-view">
                                                <div class="jTjcIO">
                                                    <div class="KkVUs7">
                                                        <div style="display:contents"></div>
                                                    </div>
                                                    <div class="KkVUs7">
                                                        <div style="display:contents"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gKrChj">*Berlaku untuk produk di toko ini (tidak termasuk ongkos kirim)</div>
                                            <div style="display:contents"></div>
                                        </div>
                                    </div>
                                </div>
                                <div style="display:contents"></div>
                                <div class="z5hxuO">
                                    <div class="vZFV97">
                                        <div class="typo-m14 hairline-border-bottom wnvA8n">
                                            <div class="LCP6Bf">Spesifikasi</div>
                                            <div class="TTU7w3">Stok,Merek</div>
                                            <div class="RnlaHh">
                                                <svg enable-background="new 0 0 11 11" viewBox="0 0 11 11" role="img" class="stardust-icon stardust-icon-arrow-right">
                                                    <path stroke="none" d="m2.5 11c .1 0 .2 0 .3-.1l6-5c .1-.1.2-.3.2-.4s-.1-.3-.2-.4l-6-5c-.2-.2-.5-.1-.7.1s-.1.5.1.7l5.5 4.6-5.5 4.6c-.2.2-.2.5-.1.7.1.1.3.2.4.2z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="stardust-drawer"></div>
                                    </div>
                                    <div class="MQQIj8">
                                        <div class="typo-m14 q5eLaS">
                                            <div>
                                                <h2 style="font-size: 15px;">TENTANG SITUS <?php echo $BRANDS ?> GACOR TERBARU</h2>
                                            </div>
                                        </div>
                                        <div class="typo-l14 vUDMZj">
                                            <div>
                                                <div class="dQTDlC">
                                                    <p class="qsfBix b5sdqk" style="margin-top:-100px;">Emang ada website segacor <?php echo $BRANDS ?> resmi ini hadir untuk memuaskan para masyarakat Indonesia dengan cara menawarkan banyak sekali permainan yang seru.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="height:1px"></div>
                                <div style="height:1px"></div>
                                <div style="height:1px"></div>
                                <div class="with-loading-wrapper with-loading-wrapper--transparent-background">
                                    <div class="stardust-spinner--hidden stardust-spinner">
                                        <div class="stardust-spinner__background">
                                            <div class="stardust-spinner__main" role="img">
                                                <svg width="34" height="12" viewBox="-1 0 33 12">
                                                    <circle class="stardust-spinner__spinner" cx="4" cy="6" r="4" fill="#EE4D2D"></circle>
                                                    <circle class="stardust-spinner__spinner" cx="16" cy="6" r="4" fill="#EE4D2D"></circle>
                                                    <circle class="stardust-spinner__spinner" cx="28" cy="6" r="4" fill="#EE4D2D"></circle>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="theme--ofs">
                                        <div class="product-bottom-panel-wrapper">
                                            <div class="product-bottom-panel">
                                                <div class="product-bottom-panel__chat-now">
                                                    <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" role="img" class="stardust-icon stardust-icon-web-chat product-bottom-panel__chat-now-icon">
                                                        <g stroke="none">
                                                            <path d="m11.2 4.1c-1.1-1.3-3-2.2-5-2.2-3.4 0-6.2 2.3-6.2 5.2 0 1.7.9 3.2 2.4 4.2l-.7 1.4s-.2.4.1.6c.3.3 1.1-.1 1.1-.1l2.4-.9c.3.1.6.1.9.1.7 0 1.5-.1 2.1-.3.5.2 1 .2 1.6.2h.6l2.1 1.5c.6.4.8.1.8-.4v-2.2c.9-.8 1.5-1.8 1.5-3 0-2-1.6-3.6-3.7-4.1zm-5.6 7.3h-.5-.2l-1.8.7.5-1.1-.7-.5c-1.3-.8-2-2-2-3.4 0-2.3 2.3-4.2 5.2-4.2 2.8 0 5.2 1.9 5.2 4.2s-2.4 4.3-5.2 4.3c-.2 0-.4 0-.5 0zm6.8-.8v1.2c0 .6-.1.4-.4.2l-1-.8c-.4.1-.8.1-1.2.1 1.5-1 2.5-2.5 2.5-4.2 0-.6-.1-1.1-.3-1.7 1.2.6 1.9 1.6 1.9 2.7 0 1-.5 1.9-1.5 2.5z"></path>
                                                            <circle cx="3.1" cy="7.1" r=".8"></circle>
                                                            <circle cx="9.1" cy="7.1" r=".8"></circle>
                                                            <circle cx="6.1" cy="7.1" r=".8"></circle>
                                                        </g>
                                                    </svg>
                                                    <div class="product-bottom-panel__chat-now-text">
                                                        <a href="/" style="color:#333;">Chat Sekarang</a>
                                                    </div>
                                                </div>
                                                <div class="product-bottom-panel__separator">
                                                    <div class="product-bottom-panel__separator-real"></div>
                                                </div>
                                                <div class="product-cart-and-buy-buttons">
                                                    <div class="product-bottom-panel__add-to-cart">
                                                        <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" role="img" class="stardust-icon stardust-icon-add-to-cart product-bottom-panel__add-to-cart-icon">
                                                            <path d="m .5.5h2.2l2.5 10.5h7.2l2.1-7.5h-10.8" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></path>
                                                            <circle cx="6" cy="13.5" r="1"></circle>
                                                            <circle cx="11.5" cy="13.5" r="1"></circle>
                                                            <path d="m7.5 7h3" fill="none" stroke-linecap="round" stroke-miterlimit="10"></path>
                                                            <path d="m9 8.5v-3" fill="none" stroke-linecap="round" stroke-miterlimit="10"></path>
                                                        </svg>
                                                        <div class="product-bottom-panel__add-to-cart-text">
                                                            <a href="/" style="color:#333;">
                                                                <span class="">Login Sekarang</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-bottom-panel__buy-now">
                                                        <a href="https://att.amp-root.lat/<?php echo $BRANDS ?>/" style="color:#fff;">
                                                            <span class="">Daftar Sekarang</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                                <svg class="scroll-to-top scroll-to-top--with-safe-area-inset-bottom JSlWcM" xmlns="http://www.w3.org/2000/svg" width="44" height="44" version="1" style="display:none">
                                    <defs>
                                        <circle id="scroll-to-top-b" cx="22" cy="21" r="20"></circle>
                                        <filter id="scroll-to-top-a" width="118%" height="118%" x="-9%" y="-6%" filterUnits="objectBoundingBox">
                                            <feOffset dy="1" in="SourceAlpha" result="f"></feOffset>
                                            <feGaussianBlur in="f" result="f" stdDeviation="1"></feGaussianBlur>
                                            <feComposite in="f" in2="SourceAlpha" operator="out" result="f"></feComposite>
                                            <feColorMatrix in="f" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.09 0"></feColorMatrix>
                                        </filter>
                                    </defs>
                                    <g fill="none" fill-rule="evenodd">
                                        <use fill="#000" filter="url(#scroll-to-top-a)" xlink:href="#b"></use>
                                        <use fill="#fff" xlink:href="#scroll-to-top-b"></use>
                                        <circle cx="22" cy="21" r="20"></circle>
                                        <path fill="#2b1965" d="M12 13h20v2H12zm11 7v13h-2V20l-6 6-1-2 8-8 9 8-2 2z"></path>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/mfe-initial-slots">
            mobilemall-productdetailspage
        </script>
        <div id="modal"></div>
        <noscript>Please enable JavaScript on your browser.</noscript>
        <script type="module" src="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/assets/webpack-runtime.3e4c1abcf683862f.js"></script>
        <script type="module" src="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/assets/modules.249ec469f1b4804c.js"></script>
        <script type="module" src="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/assets/bundle.50f2d053c15a863c.js"></script>
        <script nomodule>
            function loadStyleLink(e) {
                var t = document.head || document.getElementsByTagName("head")[0]
                  , l = document.createElement("link");
                l.rel = "stylesheet",
                l.type = "text/css",
                l.href = e,
                t.appendChild(l)
            }
            if (!SUPPORT_MODULE) {
                for (var links = ["https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/assets/bundle.a880051c8c2bc9f6.legacy.css"], i = 0; i < links.length; i++)
                    try {
                        loadStyleLink(links[i])
                    } catch (e) {}
                try {
                    document.querySelectorAll("[data-modern]").forEach((function(e) {
                        e.remove()
                    }
                    ))
                } catch (e) {}
            }
        </script>
        <script defer="defer" nomodule src="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/assets/webpack-runtime.8cf15469721db710.legacy.js"></script>
        <script defer="defer" nomodule src="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/assets/entry-modules.b801582a47db3354.legacy.js"></script>
        <script defer="defer" nomodule src="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/assets/modules.d99a7de93b736082.legacy.js"></script>
        <script defer="defer" nomodule src="https://deo.shopeemobile.com/shopee/shopee-mobilemall-live-sg/assets/bundle.a17dfee9b670569b.legacy.js"></script>
    </body>
</html>

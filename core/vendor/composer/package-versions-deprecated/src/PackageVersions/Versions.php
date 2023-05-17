<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'laravel/laravel';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'authorizenet/authorizenet' => '2.0.2@a3e76f96f674d16e892f87c58bedb99dada4b067',
  'brick/math' => '0.11.0@0ad82ce168c82ba30d1c01ec86116ab52f589478',
  'btcpayserver/btcpayserver-greenfield-php' => 'v2.1.0@d4e2036aff999454facdee6aca16afda931bc535',
  'coingate/coingate-php' => '3.0.5@c9e7f2c291cf8d5118c73028280aaa25a53c2302',
  'composer/ca-bundle' => '1.3.5@74780ccf8c19d6acb8d65c5f39cd72110e132bbd',
  'composer/package-versions-deprecated' => '1.11.99.5@b4f54f74ef3453349c24a845d22392cd31e65f1d',
  'dflydev/dot-access-data' => 'v3.0.2@f41715465d65213d644d3141a6a93081be5d3549',
  'doctrine/inflector' => '2.0.6@d9d313a36c872fd6ee06d9a6cbcf713eaa40f024',
  'doctrine/lexer' => '3.0.0@84a527db05647743d50373e0ec53a152f2cde568',
  'dragonmantank/cron-expression' => 'v3.3.2@782ca5968ab8b954773518e9e49a6f892a34b2a8',
  'egulias/email-validator' => '4.0.1@3a85486b709bc384dae8eb78fb2eec649bdb64ff',
  'ezyang/htmlpurifier' => 'v4.16.0@523407fb06eb9e5f3d59889b3978d5bfe94299c8',
  'fruitcake/php-cors' => 'v1.2.0@58571acbaa5f9f462c9c77e911700ac66f446d4e',
  'graham-campbell/result-type' => 'v1.1.0@a878d45c1914464426dc94da61c9e1d36ae262a8',
  'guzzlehttp/guzzle' => '7.5.0@b50a2a1251152e43f6a37f0fa053e730a67d25ba',
  'guzzlehttp/promises' => '1.5.2@b94b2807d85443f9719887892882d0329d1e2598',
  'guzzlehttp/psr7' => '2.4.3@67c26b443f348a51926030c83481b85718457d3d',
  'guzzlehttp/uri-template' => 'v1.0.1@b945d74a55a25a949158444f09ec0d3c120d69e2',
  'intervention/image' => '2.7.2@04be355f8d6734c826045d02a1079ad658322dad',
  'laminas/laminas-diactoros' => '2.24.0@6028af6c3b5ced4d063a680d2483cce67578b902',
  'laramin/utility' => 'dev-main@92262547885587e874279a07309b73cfc11ee15b',
  'laravel/framework' => 'v9.52.2@cf021e5e9edf854f832b191ad5168e9f2327cdf7',
  'laravel/sanctum' => 'v2.15.1@31fbe6f85aee080c4dc2f9b03dc6dd5d0ee72473',
  'laravel/serializable-closure' => 'v1.3.0@f23fe9d4e95255dacee1bf3525e0810d1a1b0f37',
  'laravel/tinker' => 'v2.8.1@04a2d3bd0d650c0764f70bf49d1ee39393e4eb10',
  'laravel/ui' => 'v3.4.6@65ec5c03f7fee2c8ecae785795b829a15be48c2c',
  'lcobucci/clock' => '2.3.0@c7aadcd6fd97ed9e199114269c0be3f335e38876',
  'lcobucci/jwt' => '4.0.4@55564265fddf810504110bd68ca311932324b0e9',
  'league/commonmark' => '2.3.9@c1e114f74e518daca2729ea8c4bf1167038fa4b5',
  'league/config' => 'v1.2.0@754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
  'league/flysystem' => '3.12.3@81e87e74dd5213795c7846d65089712d2dda90ce',
  'league/mime-type-detection' => '1.11.0@ff6248ea87a9f116e78edd6002e39e5128a0d4dd',
  'mailjet/mailjet-apiv3-php' => 'v1.5.8@747518ce0eebf64d27e9903441a255c85472a139',
  'messagebird/php-rest-api' => 'v1.20.0@f7c7ae490b0b2d9d228bac61b5d855c4623f7fad',
  'mollie/laravel-mollie' => 'v2.22.0@039eec4f8e8a138e0539d77e0dcce3bc34df25f8',
  'mollie/mollie-api-php' => 'v2.50.0@2291b114ec636392e3e48b73d33199b3b4a790d5',
  'monolog/monolog' => '2.9.1@f259e2b15fb95494c83f52d3caad003bbf5ffaa1',
  'nesbot/carbon' => '2.66.0@496712849902241f04902033b0441b269effe001',
  'nette/schema' => 'v1.2.3@abbdbb70e0245d5f3bf77874cea1dfb0c930d06f',
  'nette/utils' => 'v4.0.0@cacdbf5a91a657ede665c541eda28941d4b09c1e',
  'nikic/php-parser' => 'v4.15.3@570e980a201d8ed0236b0a62ddf2c9cbb2034039',
  'nunomaduro/termwind' => 'v1.15.1@8ab0b32c8caa4a2e09700ea32925441385e4a5dc',
  'phpmailer/phpmailer' => 'v6.7.1@49cd7ea3d2563f028d7811f06864a53b1f15ff55',
  'phpoption/phpoption' => '1.9.0@dc5ff11e274a90cc1c743f66c9ad700ce50db9ab',
  'psr/clock' => '1.0.0@e41a24703d4560fd0acb709162f73b8adfc3aa0d',
  'psr/container' => '1.1.2@513e0666f7216c7459170d56df27dfcefe1689ea',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-client' => '1.0.1@2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'psr/simple-cache' => '3.0.0@764e0b3939f5ca87cb904f570ef9be2d78a07865',
  'psy/psysh' => 'v0.11.12@52cb7c47d403c31c0adc9bf7710fc355f93c20f7',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/collection' => '2.0.0@a4b48764bfbb8f3a6a4d1aeb1a35bb5e9ecac4a5',
  'ramsey/uuid' => '4.x-dev@bf2bee216a4379eaf62162307d62bb7850405fec',
  'razorpay/razorpay' => '2.8.5@31027cfb689b9480d67419dbec7c203097e9d9ac',
  'rmccue/requests' => 'v2.0.5@b717f1d2f4ef7992ec0c127747ed8b7e170c2f49',
  'sendgrid/php-http-client' => '3.14.4@6d589564522be290c7d7c18e51bcd8b03aeaf0b6',
  'sendgrid/sendgrid' => '7.11.5@1d2fd3b72687fe82264853a8888b014f8f99e81f',
  'starkbank/ecdsa' => '0.0.5@484bedac47bac4012dc73df91da221f0a66845cb',
  'stella-maris/clock' => '0.1.7@fa23ce16019289a18bb3446fdecd45befcdd94f8',
  'stripe/stripe-php' => 'v7.128.0@c704949c49b72985c76cc61063aa26fefbd2724e',
  'symfony/console' => 'v6.2.5@3e294254f2191762c1d137aed4b94e966965e985',
  'symfony/css-selector' => 'v6.2.5@bf1b9d4ad8b1cf0dbde8b08e0135a2f6259b9ba1',
  'symfony/deprecation-contracts' => 'v3.2.0@1ee04c65529dea5d8744774d474e7cbd2f1206d3',
  'symfony/error-handler' => 'v6.2.5@0092696af0be8e6124b042fbe2890ca1788d7b28',
  'symfony/event-dispatcher' => 'v6.2.5@f02d108b5e9fd4a6245aa73a9d2df2ec060c3e68',
  'symfony/event-dispatcher-contracts' => 'v3.2.0@0782b0b52a737a05b4383d0df35a474303cabdae',
  'symfony/finder' => 'v6.2.5@c90dc446976a612e3312a97a6ec0069ab0c2099c',
  'symfony/http-foundation' => 'v6.2.6@e8dd1f502bc2b3371d05092aa233b064b03ce7ed',
  'symfony/http-kernel' => 'v6.2.6@7122db07b0d8dbf0de682267c84217573aee3ea7',
  'symfony/mailer' => 'v6.2.5@29729ac0b4e5113f24c39c46746bd6afb79e0aaa',
  'symfony/mime' => 'v6.2.5@4b7b349f67d15cd0639955c8179a76c89f6fd610',
  'symfony/polyfill-ctype' => 'v1.27.0@5bbc823adecdae860bb64756d639ecfec17b050a',
  'symfony/polyfill-intl-grapheme' => 'v1.27.0@511a08c03c1960e08a883f4cffcacd219b758354',
  'symfony/polyfill-intl-idn' => 'v1.27.0@639084e360537a19f9ee352433b84ce831f3d2da',
  'symfony/polyfill-intl-normalizer' => 'v1.27.0@19bd1e4fcd5b91116f14d8533c57831ed00571b6',
  'symfony/polyfill-mbstring' => 'v1.27.0@8ad114f6b39e2c98a8b0e3bd907732c207c2b534',
  'symfony/polyfill-php72' => 'v1.27.0@869329b1e9894268a8a61dabb69153029b7a8c97',
  'symfony/polyfill-php80' => 'v1.27.0@7a6ff3f1959bb01aefccb463a0f2cd3d3d2fd936',
  'symfony/polyfill-uuid' => 'v1.27.0@f3cf1a645c2734236ed1e2e671e273eeb3586166',
  'symfony/process' => 'v6.2.5@9ead139f63dfa38c4e4a9049cc64a8b2748c83b7',
  'symfony/routing' => 'v6.2.5@589bd742d5d03c192c8521911680fe88f61712fe',
  'symfony/service-contracts' => 'v2.5.2@4b426aac47d6427cc1a1d0f7e2ac724627f5966c',
  'symfony/string' => 'v6.2.5@b2dac0fa27b1ac0f9c0c0b23b43977f12308d0b0',
  'symfony/translation' => 'v6.2.5@60556925a703cfbc1581cde3b3f35b0bb0ea904c',
  'symfony/translation-contracts' => 'v3.2.0@68cce71402305a015f8c1589bfada1280dc64fe7',
  'symfony/uid' => 'v6.2.5@8ace895bded57d6496638c9b2d3b788e05b7395b',
  'symfony/var-dumper' => 'v6.2.5@44b7b81749fd20c1bdf4946c041050e22bc8da27',
  'textmagic/sdk' => 'dev-master@b81cd04df7ab6fd21f0ddd75bf987cf3f65fe9c6',
  'tijsverkoyen/css-to-inline-styles' => '2.2.6@c42125b83a4fa63b187fdf29f9c93cb7733da30c',
  'twilio/sdk' => '6.44.3@0e3e513d3c428f08bde195c579cbc0788415190f',
  'vlucas/phpdotenv' => 'v5.5.0@1a7ea2afc49c3ee6d87061f5a233e3a035d0eae7',
  'voku/portable-ascii' => '2.0.1@b56450eed252f6801410d810c8e1727224ae0743',
  'vonage/client' => '2.4.0@29f23e317d658ec1c3e55cf778992353492741d7',
  'vonage/client-core' => '2.10.1@0e5c6bf4af22cae60a3f1098b75c25d70bac242f',
  'vonage/nexmo-bridge' => '0.1.2@e9f63cd468b7e0edd73d0c90d0406d6b961f9eb7',
  'webmozart/assert' => '1.11.0@11cb2199493b2f8a3b53e7f19068fc6aac760991',
  'laravel/laravel' => '1.0.0+no-version-set@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}

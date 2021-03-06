<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd65fc91074df9235862e5722ca757da7
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Violin\\' => 7,
            'Validators\\' => 11,
        ),
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'C' => 
        array (
            'Core\\' => 5,
            'Controllers\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Violin\\' => 
        array (
            0 => __DIR__ . '/..' . '/alexgarrett/violin/src',
        ),
        'Validators\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/core/validators',
        ),
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/models',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/core',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/controllers',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'SecurityLib' => 
            array (
                0 => __DIR__ . '/..' . '/ircmaxell/security-lib/lib',
            ),
        ),
        'R' => 
        array (
            'RandomLib' => 
            array (
                0 => __DIR__ . '/..' . '/ircmaxell/random-lib/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Controllers\\AboutController' => __DIR__ . '/../..' . '/app/controllers/AboutController.php',
        'Controllers\\AdmindashboardController' => __DIR__ . '/../..' . '/app/controllers/AdmindashboardController.php',
        'Controllers\\AdminproductsController' => __DIR__ . '/../..' . '/app/controllers/AdminproductsController.php',
        'Controllers\\AuthorController' => __DIR__ . '/../..' . '/app/controllers/AuthorController.php',
        'Controllers\\ComingController' => __DIR__ . '/../..' . '/app/controllers/ComingController.php',
        'Controllers\\ComingsoonController' => __DIR__ . '/../..' . '/app/controllers/ComingsoonController.php',
        'Controllers\\ContactController' => __DIR__ . '/../..' . '/app/controllers/ContactController.php',
        'Controllers\\FashionController' => __DIR__ . '/../..' . '/app/controllers/FashionController.php',
        'Controllers\\FoodController' => __DIR__ . '/../..' . '/app/controllers/FoodController.php',
        'Controllers\\GalleryController' => __DIR__ . '/../..' . '/app/controllers/GalleryController.php',
        'Controllers\\HomeController' => __DIR__ . '/../..' . '/app/controllers/HomeController.php',
        'Controllers\\MaintenanceController' => __DIR__ . '/../..' . '/app/controllers/MaintenanceController.php',
        'Controllers\\PhotographyController' => __DIR__ . '/../..' . '/app/controllers/PhotographyController.php',
        'Controllers\\PriceController' => __DIR__ . '/../..' . '/app/controllers/PriceController.php',
        'Controllers\\RegisterController' => __DIR__ . '/../..' . '/app/controllers/RegisterController.php',
        'Controllers\\RestrictedController' => __DIR__ . '/../..' . '/app/controllers/RestrictedController.php',
        'Controllers\\TechnologyController' => __DIR__ . '/../..' . '/app/controllers/TechnologyController.php',
        'Controllers\\TravelController' => __DIR__ . '/../..' . '/app/controllers/TravelController.php',
        'Core\\Application' => __DIR__ . '/../..' . '/app/core/Application.php',
        'Core\\Controller' => __DIR__ . '/../..' . '/app/core/Controller.php',
        'Core\\Cookie' => __DIR__ . '/../..' . '/app/core/Cookie.php',
        'Core\\DB' => __DIR__ . '/../..' . '/app/core/DB.php',
        'Core\\FH' => __DIR__ . '/../..' . '/app/core/FH.php',
        'Core\\H' => __DIR__ . '/../..' . '/app/core/H.php',
        'Core\\Input' => __DIR__ . '/../..' . '/app/core/Input.php',
        'Core\\Model' => __DIR__ . '/../..' . '/app/core/Model.php',
        'Core\\Router' => __DIR__ . '/../..' . '/app/core/Router.php',
        'Core\\Session' => __DIR__ . '/../..' . '/app/core/Session.php',
        'Core\\View' => __DIR__ . '/../..' . '/app/core/View.php',
        'Models\\Login' => __DIR__ . '/../..' . '/app/models/Login.php',
        'Models\\Posts' => __DIR__ . '/../..' . '/app/models/Posts.php',
        'Models\\Products' => __DIR__ . '/../..' . '/app/models/Products.php',
        'Models\\UserSessions' => __DIR__ . '/../..' . '/app/models/UserSessions.php',
        'Models\\Users' => __DIR__ . '/../..' . '/app/models/Users.php',
        'RandomLib\\AbstractMcryptMixer' => __DIR__ . '/..' . '/ircmaxell/random-lib/lib/RandomLib/AbstractMcryptMixer.php',
        'RandomLib\\AbstractMixer' => __DIR__ . '/..' . '/ircmaxell/random-lib/lib/RandomLib/AbstractMixer.php',
        'RandomLib\\AbstractSource' => __DIR__ . '/..' . '/ircmaxell/random-lib/lib/RandomLib/AbstractSource.php',
        'RandomLib\\Factory' => __DIR__ . '/..' . '/ircmaxell/random-lib/lib/RandomLib/Factory.php',
        'RandomLib\\Generator' => __DIR__ . '/..' . '/ircmaxell/random-lib/lib/RandomLib/Generator.php',
        'RandomLib\\Mixer' => __DIR__ . '/..' . '/ircmaxell/random-lib/lib/RandomLib/Mixer.php',
        'RandomLib\\Mixer\\Hash' => __DIR__ . '/..' . '/ircmaxell/random-lib/lib/RandomLib/Mixer/Hash.php',
        'RandomLib\\Mixer\\McryptRijndael128' => __DIR__ . '/..' . '/ircmaxell/random-lib/lib/RandomLib/Mixer/McryptRijndael128.php',
        'RandomLib\\Mixer\\XorMixer' => __DIR__ . '/..' . '/ircmaxell/random-lib/lib/RandomLib/Mixer/XorMixer.php',
        'RandomLib\\Source' => __DIR__ . '/..' . '/ircmaxell/random-lib/lib/RandomLib/Source.php',
        'RandomLib\\Source\\CAPICOM' => __DIR__ . '/..' . '/ircmaxell/random-lib/lib/RandomLib/Source/CAPICOM.php',
        'RandomLib\\Source\\MTRand' => __DIR__ . '/..' . '/ircmaxell/random-lib/lib/RandomLib/Source/MTRand.php',
        'RandomLib\\Source\\MicroTime' => __DIR__ . '/..' . '/ircmaxell/random-lib/lib/RandomLib/Source/MicroTime.php',
        'RandomLib\\Source\\OpenSSL' => __DIR__ . '/..' . '/ircmaxell/random-lib/lib/RandomLib/Source/OpenSSL.php',
        'RandomLib\\Source\\Rand' => __DIR__ . '/..' . '/ircmaxell/random-lib/lib/RandomLib/Source/Rand.php',
        'RandomLib\\Source\\Random' => __DIR__ . '/..' . '/ircmaxell/random-lib/lib/RandomLib/Source/Random.php',
        'RandomLib\\Source\\RandomBytes' => __DIR__ . '/..' . '/ircmaxell/random-lib/lib/RandomLib/Source/RandomBytes.php',
        'RandomLib\\Source\\Sodium' => __DIR__ . '/..' . '/ircmaxell/random-lib/lib/RandomLib/Source/Sodium.php',
        'RandomLib\\Source\\URandom' => __DIR__ . '/..' . '/ircmaxell/random-lib/lib/RandomLib/Source/URandom.php',
        'RandomLib\\Source\\UniqID' => __DIR__ . '/..' . '/ircmaxell/random-lib/lib/RandomLib/Source/UniqID.php',
        'SecurityLib\\AbstractFactory' => __DIR__ . '/..' . '/ircmaxell/security-lib/lib/SecurityLib/AbstractFactory.php',
        'SecurityLib\\BaseConverter' => __DIR__ . '/..' . '/ircmaxell/security-lib/lib/SecurityLib/BaseConverter.php',
        'SecurityLib\\BigMath' => __DIR__ . '/..' . '/ircmaxell/security-lib/lib/SecurityLib/BigMath.php',
        'SecurityLib\\BigMath\\BCMath' => __DIR__ . '/..' . '/ircmaxell/security-lib/lib/SecurityLib/BigMath/BCMath.php',
        'SecurityLib\\BigMath\\GMP' => __DIR__ . '/..' . '/ircmaxell/security-lib/lib/SecurityLib/BigMath/GMP.php',
        'SecurityLib\\BigMath\\PHPMath' => __DIR__ . '/..' . '/ircmaxell/security-lib/lib/SecurityLib/BigMath/PHPMath.php',
        'SecurityLib\\Enum' => __DIR__ . '/..' . '/ircmaxell/security-lib/lib/SecurityLib/Enum.php',
        'SecurityLib\\Hash' => __DIR__ . '/..' . '/ircmaxell/security-lib/lib/SecurityLib/Hash.php',
        'SecurityLib\\Strength' => __DIR__ . '/..' . '/ircmaxell/security-lib/lib/SecurityLib/Strength.php',
        'SecurityLib\\Util' => __DIR__ . '/..' . '/ircmaxell/security-lib/lib/SecurityLib/Util.php',
        'Validators\\CustomValidator' => __DIR__ . '/../..' . '/app/core/validators/CustomValidator.php',
        'Validators\\EmailValidator' => __DIR__ . '/../..' . '/app/core/validators/EmailValidator.php',
        'Validators\\MatchesValidator' => __DIR__ . '/../..' . '/app/core/validators/MatchesValidator.php',
        'Validators\\MaxValidator' => __DIR__ . '/../..' . '/app/core/validators/MaxValidator.php',
        'Validators\\MinValidator' => __DIR__ . '/../..' . '/app/core/validators/MinValidator.php',
        'Validators\\NumericValidator' => __DIR__ . '/../..' . '/app/core/validators/NumericValidator.php',
        'Validators\\RequiredValidator' => __DIR__ . '/../..' . '/app/core/validators/RequiredValidator.php',
        'Validators\\UniqueValidator' => __DIR__ . '/../..' . '/app/core/validators/UniqueValidator.php',
        'Violin\\Contracts\\MessageBagContract' => __DIR__ . '/..' . '/alexgarrett/violin/src/Contracts/MessageBagContract.php',
        'Violin\\Contracts\\RuleContract' => __DIR__ . '/..' . '/alexgarrett/violin/src/Contracts/RuleContract.php',
        'Violin\\Contracts\\ValidatorContract' => __DIR__ . '/..' . '/alexgarrett/violin/src/Contracts/ValidatorContract.php',
        'Violin\\Rules\\AlnumDashRule' => __DIR__ . '/..' . '/alexgarrett/violin/src/Rules/AlnumDashRule.php',
        'Violin\\Rules\\AlnumRule' => __DIR__ . '/..' . '/alexgarrett/violin/src/Rules/AlnumRule.php',
        'Violin\\Rules\\AlphaRule' => __DIR__ . '/..' . '/alexgarrett/violin/src/Rules/AlphaRule.php',
        'Violin\\Rules\\ArrayRule' => __DIR__ . '/..' . '/alexgarrett/violin/src/Rules/ArrayRule.php',
        'Violin\\Rules\\BetweenRule' => __DIR__ . '/..' . '/alexgarrett/violin/src/Rules/BetweenRule.php',
        'Violin\\Rules\\BoolRule' => __DIR__ . '/..' . '/alexgarrett/violin/src/Rules/BoolRule.php',
        'Violin\\Rules\\CheckedRule' => __DIR__ . '/..' . '/alexgarrett/violin/src/Rules/CheckedRule.php',
        'Violin\\Rules\\DateRule' => __DIR__ . '/..' . '/alexgarrett/violin/src/Rules/DateRule.php',
        'Violin\\Rules\\EmailRule' => __DIR__ . '/..' . '/alexgarrett/violin/src/Rules/EmailRule.php',
        'Violin\\Rules\\IntRule' => __DIR__ . '/..' . '/alexgarrett/violin/src/Rules/IntRule.php',
        'Violin\\Rules\\IpRule' => __DIR__ . '/..' . '/alexgarrett/violin/src/Rules/IpRule.php',
        'Violin\\Rules\\MatchesRule' => __DIR__ . '/..' . '/alexgarrett/violin/src/Rules/MatchesRule.php',
        'Violin\\Rules\\MaxRule' => __DIR__ . '/..' . '/alexgarrett/violin/src/Rules/MaxRule.php',
        'Violin\\Rules\\MinRule' => __DIR__ . '/..' . '/alexgarrett/violin/src/Rules/MinRule.php',
        'Violin\\Rules\\NumberRule' => __DIR__ . '/..' . '/alexgarrett/violin/src/Rules/NumberRule.php',
        'Violin\\Rules\\RegexRule' => __DIR__ . '/..' . '/alexgarrett/violin/src/Rules/RegexRule.php',
        'Violin\\Rules\\RequiredRule' => __DIR__ . '/..' . '/alexgarrett/violin/src/Rules/RequiredRule.php',
        'Violin\\Rules\\UrlRule' => __DIR__ . '/..' . '/alexgarrett/violin/src/Rules/UrlRule.php',
        'Violin\\Support\\MessageBag' => __DIR__ . '/..' . '/alexgarrett/violin/src/Support/MessageBag.php',
        'Violin\\Violin' => __DIR__ . '/..' . '/alexgarrett/violin/src/Violin.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd65fc91074df9235862e5722ca757da7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd65fc91074df9235862e5722ca757da7::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitd65fc91074df9235862e5722ca757da7::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitd65fc91074df9235862e5722ca757da7::$classMap;

        }, null, ClassLoader::class);
    }
}

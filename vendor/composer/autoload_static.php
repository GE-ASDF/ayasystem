<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit48d2371bdc53c7798a2a3b42c1171083
{
    public static $files = array (
        'bf65963fa95498ad0c8ae6ff90151a3f' => __DIR__ . '/../..' . '/app/functions/formatDate.php',
        'ec9cc50554707facd0cfb676357828e3' => __DIR__ . '/../..' . '/app/functions/filtrarProfessor.php',
        'f46ff98c726e7f78fc1a011aebe5585c' => __DIR__ . '/../..' . '/app/helpers/constants.php',
        'cb4de933a2784932fc9c8076646fa729' => __DIR__ . '/../..' . '/app/helpers/dd.php',
        'a898cf3b3772849d48e2901cc78eb566' => __DIR__ . '/../..' . '/app/helpers/flash.php',
        '42ec802b7e88e281677e3b3b57b0fa1d' => __DIR__ . '/../..' . '/app/helpers/print.php',
        'ee5467b0c22633b0764ed8d5fc24b15f' => __DIR__ . '/../..' . '/app/helpers/session.php',
        '87ec136760b1b75e442b2837fea63ef8' => __DIR__ . '/../..' . '/app/helpers/paragrafar.php',
        '4fd6b2d4b00916ce5c7a9899df233965' => __DIR__ . '/../..' . '/app/helpers/redirect.php',
    );

    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'A' => 
        array (
            'Anderson\\Pizzaria\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Anderson\\Pizzaria\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'PHPMailer\\PHPMailer\\Exception' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/Exception.php',
        'PHPMailer\\PHPMailer\\OAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/OAuth.php',
        'PHPMailer\\PHPMailer\\OAuthTokenProvider' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/OAuthTokenProvider.php',
        'PHPMailer\\PHPMailer\\PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/PHPMailer.php',
        'PHPMailer\\PHPMailer\\POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/POP3.php',
        'PHPMailer\\PHPMailer\\SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/SMTP.php',
        'Psr\\Log\\AbstractLogger' => __DIR__ . '/..' . '/psr/log/src/AbstractLogger.php',
        'Psr\\Log\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/log/src/InvalidArgumentException.php',
        'Psr\\Log\\LogLevel' => __DIR__ . '/..' . '/psr/log/src/LogLevel.php',
        'Psr\\Log\\LoggerAwareInterface' => __DIR__ . '/..' . '/psr/log/src/LoggerAwareInterface.php',
        'Psr\\Log\\LoggerAwareTrait' => __DIR__ . '/..' . '/psr/log/src/LoggerAwareTrait.php',
        'Psr\\Log\\LoggerInterface' => __DIR__ . '/..' . '/psr/log/src/LoggerInterface.php',
        'Psr\\Log\\LoggerTrait' => __DIR__ . '/..' . '/psr/log/src/LoggerTrait.php',
        'Psr\\Log\\NullLogger' => __DIR__ . '/..' . '/psr/log/src/NullLogger.php',
        'Whoops\\Exception\\ErrorException' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/ErrorException.php',
        'Whoops\\Exception\\Formatter' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/Formatter.php',
        'Whoops\\Exception\\Frame' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/Frame.php',
        'Whoops\\Exception\\FrameCollection' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/FrameCollection.php',
        'Whoops\\Exception\\Inspector' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/Inspector.php',
        'Whoops\\Handler\\CallbackHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/CallbackHandler.php',
        'Whoops\\Handler\\Handler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/Handler.php',
        'Whoops\\Handler\\HandlerInterface' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/HandlerInterface.php',
        'Whoops\\Handler\\JsonResponseHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/JsonResponseHandler.php',
        'Whoops\\Handler\\PlainTextHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/PlainTextHandler.php',
        'Whoops\\Handler\\PrettyPageHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/PrettyPageHandler.php',
        'Whoops\\Handler\\XmlResponseHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/XmlResponseHandler.php',
        'Whoops\\Run' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Run.php',
        'Whoops\\RunInterface' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/RunInterface.php',
        'Whoops\\Util\\HtmlDumperOutput' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Util/HtmlDumperOutput.php',
        'Whoops\\Util\\Misc' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Util/Misc.php',
        'Whoops\\Util\\SystemFacade' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Util/SystemFacade.php',
        'Whoops\\Util\\TemplateHelper' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Util/TemplateHelper.php',
        'app\\classes\\Api' => __DIR__ . '/../..' . '/app/classes/Api.php',
        'app\\classes\\ArquivoXml' => __DIR__ . '/../..' . '/app/classes/ArquivoXml.php',
        'app\\classes\\Block' => __DIR__ . '/../..' . '/app/classes/Block.php',
        'app\\classes\\BlockNotAdmin' => __DIR__ . '/../..' . '/app/classes/BlockNotAdmin.php',
        'app\\classes\\BlockNotLogged' => __DIR__ . '/../..' . '/app/classes/BlockNotLogged.php',
        'app\\classes\\BlockRequestPostGet' => __DIR__ . '/../..' . '/app/classes/BlockRequestPostGet.php',
        'app\\classes\\IsAdmin' => __DIR__ . '/../..' . '/app/classes/IsAdmin.php',
        'app\\classes\\IsProtected' => __DIR__ . '/../..' . '/app/classes/IsProtected.php',
        'app\\classes\\NotLogged' => __DIR__ . '/../..' . '/app/classes/NotLogged.php',
        'app\\classes\\Validacao' => __DIR__ . '/../..' . '/app/classes/Validacao.php',
        'app\\controllers\\HomeController' => __DIR__ . '/../..' . '/app/controllers/HomeController.php',
        'app\\core\\Controller' => __DIR__ . '/../..' . '/app/core/Controller.php',
        'app\\core\\FolderExtract' => __DIR__ . '/../..' . '/app/core/FolderExtract.php',
        'app\\core\\MethodExtract' => __DIR__ . '/../..' . '/app/core/MethodExtract.php',
        'app\\core\\Model' => __DIR__ . '/../..' . '/app/core/Model.php',
        'app\\core\\Uri' => __DIR__ . '/../..' . '/app/core/Uri.php',
        'app\\interfaces\\ActiveRecord' => __DIR__ . '/../..' . '/app/interfaces/ActiveRecord.php',
        'app\\interfaces\\ActiveRecordExecuteInterface' => __DIR__ . '/../..' . '/app/interfaces/ActiveRecordExecuteInterface.php',
        'app\\interfaces\\ActiveRecordInterface' => __DIR__ . '/../..' . '/app/interfaces/ActiveRecordInterface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit48d2371bdc53c7798a2a3b42c1171083::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit48d2371bdc53c7798a2a3b42c1171083::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit48d2371bdc53c7798a2a3b42c1171083::$classMap;

        }, null, ClassLoader::class);
    }
}
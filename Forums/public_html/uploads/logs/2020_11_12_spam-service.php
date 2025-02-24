<?php exit; ?>

Thu, 12 Nov 2020 11:54:06 +0000
DomainException::0
IPS\Http\Response Object
(
    [httpResponseVersion] => 1.1
    [httpResponseCode] => 401
    [httpResponseText] => Unauthorized
    [httpHeaders] => Array
        (
            [Content-Type] => text/plain;charset=UTF-8
            [Content-Length] => 19
            [Connection] => keep-alive
            [Date] => Thu, 12 Nov 2020 11:54:06 GMT
            [Server] => Apache/2.4.46 (Amazon) OpenSSL/1.0.2k-fips PHP/7.2.34
            [X-Powered-By] => PHP/7.2.34
            [X-Cache] => Error from cloudfront
            [Via] => 1.1 9f0b85e863c4851506cb4ff2d368aac3.cloudfront.net (CloudFront)
            [X-Amz-Cf-Pop] => HEL50-C1
            [X-Amz-Cf-Id] => nk4Y0aV66c0lnQQQxsFpvKnybp0JfzGYaqZNQrlKShpd4GJ9ixrbdw==
        )

    [cookies] => Array
        (
        )

    [content] => License Key Invalid
)

#0 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Login/Handler/Handler.php(317): IPS\_Member->spamService('register', NULL, NULL)
#1 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Login/Handler/ExternalDatabase/ExternalDatabase.php(386): IPS\Login\_Handler->createAccount('pro100kot', 'kaka471337@mail...')
#2 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Login/Login.php(258): IPS\Login\Handler\_ExternalDatabase->authenticateUsernamePassword(Object(IPS\Login), 'pro100kot', Object(class@anonymous))
#3 /home/f/fakersha/forum.infinitycraft.space/public_html/applications/core/modules/admin/system/login.php(75): IPS\_Login->authenticate()
#4 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Dispatcher/Controller.php(96): IPS\core\modules\admin\system\_login->manage()
#5 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Dispatcher/Dispatcher.php(152): IPS\Dispatcher\_Controller->execute()
#6 /home/f/fakersha/forum.infinitycraft.space/public_html/admin/index.php(14): IPS\_Dispatcher->run()
#7 {main}

-------------

Thu, 12 Nov 2020 11:57:51 +0000
DomainException::0
IPS\Http\Response Object
(
    [httpResponseVersion] => 1.1
    [httpResponseCode] => 401
    [httpResponseText] => Unauthorized
    [httpHeaders] => Array
        (
            [Content-Type] => text/plain;charset=UTF-8
            [Content-Length] => 19
            [Connection] => keep-alive
            [Date] => Thu, 12 Nov 2020 11:57:51 GMT
            [Server] => Apache/2.4.46 (Amazon) OpenSSL/1.0.2k-fips PHP/7.2.34
            [X-Powered-By] => PHP/7.2.34
            [X-Cache] => Error from cloudfront
            [Via] => 1.1 7edd8006b8bc56aba6e41686a63bba53.cloudfront.net (CloudFront)
            [X-Amz-Cf-Pop] => HEL50-C1
            [X-Amz-Cf-Id] => C5AR9mRDSQdW7A1DWWzj_YjJRwMGvXRvECOxjbWAFJ3zkjmqor6ASQ==
        )

    [cookies] => Array
        (
        )

    [content] => License Key Invalid
)

#0 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Login/Handler/Handler.php(317): IPS\_Member->spamService('register', NULL, NULL)
#1 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Login/Handler/ExternalDatabase/ExternalDatabase.php(386): IPS\Login\_Handler->createAccount('Slowik', 'wasilewsslowik@...')
#2 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Login/Login.php(258): IPS\Login\Handler\_ExternalDatabase->authenticateUsernamePassword(Object(IPS\Login), 'Slowik', Object(class@anonymous))
#3 /home/f/fakersha/forum.infinitycraft.space/public_html/applications/core/modules/front/system/login.php(57): IPS\_Login->authenticate()
#4 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Dispatcher/Controller.php(96): IPS\core\modules\front\system\_login->manage()
#5 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Dispatcher/Dispatcher.php(152): IPS\Dispatcher\_Controller->execute()
#6 /home/f/fakersha/forum.infinitycraft.space/public_html/index.php(13): IPS\_Dispatcher->run()
#7 {main}
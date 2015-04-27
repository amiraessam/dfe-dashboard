<?php
/**
 * Configuration file for the dfe-common library
 */
use DreamFactory\Enterprise\Common\Enums\MailTemplates;
use DreamFactory\Enterprise\Dashboard\Enums\DashboardDefaults;

return [
    /** Global options */
    'display-name'    => 'Platform Dashboard',
    'display-version' => 'v1.0.x-alpha',
    'instance-prefix' => DashboardDefaults::INSTANCE_PREFIX,
    /** Theme selection (flatly or darkly) */
    'theme'           => 'flatly',
    /** mail template options */
    'mail-template'   => [
        'web-url'               => 'http://console.enterprise.dreamfactory.com/',
        'public-url'            => 'http://console.enterprise.dreamfactory.com/',
        'support-email-address' => 'support@dreamfactory.com',
        'confirmation-url'      => 'http://cerberus.fabric.dreamfactory.com/app/confirmation/',
        'smtp-service'          => 'localhost',
        //.........................................................................
        //. Templates
        //.........................................................................
        'templates'             => [
            MailTemplates::WELCOME              => array(
                'subject'  => 'Welcome to DreamFactory Developer Central!',
                'template' => 'welcome-confirmation.html',
            ),
            MailTemplates::PASSWORD_RESET       => array(
                'subject'  => 'Recover your DreamFactory password',
                'template' => 'recover-password.html',
            ),
            MailTemplates::PASSWORD_CHANGED     => array(
                'subject'  => 'Your Password Has Been Changed',
                'template' => 'password-changed.html',
            ),
            MailTemplates::NOTIFICATION         => array(
                'subject'  => null,
                'template' => 'notification.html',
            ),
            MailTemplates::SYSTEM_NOTIFICATION  => array(
                'subject'  => null,
                'template' => 'system-notification.html',
            ),
            MailTemplates::PROVISION_COMPLETE   => array(
                'subject'  => 'Your DSP is ready!',
                'template' => 'provisioning-complete.html',
            ),
            MailTemplates::DEPROVISION_COMPLETE => array(
                'subject'  => 'Your DSP was removed!',
                'template' => 'deprovisioning-complete.html',
            ),
        ],
    ],

];

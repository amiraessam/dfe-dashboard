<?php
//******************************************************************************
//* DFE Dashboard Settings
//******************************************************************************

use DreamFactory\Enterprise\Common\Enums\EnterpriseDefaults;
use DreamFactory\Enterprise\Dashboard\Enums\DashboardDefaults;

return [
    //******************************************************************************
    //* General
    //******************************************************************************
    //  The id of THIS cluster
    'cluster-id'       => env( 'DFE_CLUSTER_ID' ),
    //  A string to be pre-pended to instance names for non-admin users
    'instance-prefix'  => env( 'DFE_DEFAULT_INSTANCE_PREFIX' ),
    //  This is the algorithm used for signing API transactions. Defaults to 'sha256'
    'signature-method' => env( 'DFE_SIGNATURE_METHOD', EnterpriseDefaults::DEFAULT_SIGNATURE_METHOD ),
    //******************************************************************************
    //* Common across all DFE apps
    //******************************************************************************
    'common'           => [
        //******************************************************************************
        //* Global Options
        //******************************************************************************
        'display-name'      => 'DreamFactory Enterprise&trade; Dashboard',
        'display-version'   => 'v1.0.x-alpha',
        'display-copyright' => '© DreamFactory Software, Inc. 2012-' . date( 'Y' ) . '. All Rights Reserved.',
        /**
         * Theme selection -- a bootswatch theme name
         * Included are cerulean, darkly, flatly, paper, and superhero.
         * You may also install other compatible themes and use them as well.
         */
        'themes'            => ['auth' => 'darkly', 'page' => 'flatly'],
    ],
    //******************************************************************************
    //* Dashboard specific settings
    //******************************************************************************
    'dashboard'        => [
        //******************************************************************************
        //* general dashboard settings
        //******************************************************************************
        /** The path to our views */
        'view-path'                => base_path() . '/resources/views',
        /** If true, recaptcha is required on new hosted instances */
        'require-captcha'          => false,
        //  Instance defaults
        'default-dns-zone'         => env( 'DFE_DEFAULT_DNS_ZONE', 'enterprise' ),
        'default-dns-domain'       => env( 'DFE_DEFAULT_DNS_DOMAIN', 'dreamfactory.com' ),
        'default-domain'           => env( 'DFE_DEFAULT_DOMAIN', 'dreamfactory.com' ),
        'default-domain-protocol'  => 'https',
        //  UI defaults
        'panel-context'            => 'panel-info',
        'create-panel-context'     => 'panel-success',
        'import-panel-context'     => 'panel-warning',
        'help-button-url'          => 'http://www.dreamfactory.com/',
        /** If true, uses below overrides instead of allowing console placement on guest */
        'override-cluster-servers' => false,
        'override-cluster-id'      => false,
        'override-db-server-id'    => false,
        'override-app-server-id'   => false,
        'override-web-server-id'   => false,
    ],
    'security'         => [
        /** This key needs to match the key configured in the console */
        'console-api-key'           => env( 'DFE_CONSOLE_API_KEY' ),
        /** This is the full url to the DFE Console API endpoint */
        'console-api-url'           => env( 'DFE_CONSOLE_API_URL', 'http://localhost/api/v1/ops/' ),
        /** These keys are assigned during system installation */
        'console-api-client-id'     => env( 'DFE_CONSOLE_API_CLIENT_ID' ),
        'console-api-client-secret' => env( 'DFE_CONSOLE_API_CLIENT_SECRET' ),
    ],
    //******************************************************************************
    //* Dashboard UI Layout/Panel Settings
    //******************************************************************************
    'panels'           => [
        /** If true, uses below overrides instead of allowing console placement on guest */
        'panels-per-row'    => DashboardDefaults::PANELS_PER_ROW,
        'columns-per-panel' => DashboardDefaults::COLUMNS_PER_PANEL,
        'toolbar-size'      => 'btn-group-xs',
        /** This is the create from scratch panel **/
        'create'            => [
            'context'          => 'panel-success',
            'template'         => DashboardDefaults::CREATE_INSTANCE_BLADE,
            'header-icon'      => 'fa-asterisk',
            'header-icon-size' => 'fa-1x',
            'body-icon'        => false,
            'description'      => 'dashboard.instance-create',
            'form-id'          => 'form-create',
        ],
        /** This is the create via import panel **/
        'import'            => [
            'context'          => 'panel-warning',
            'template'         => DashboardDefaults::IMPORT_INSTANCE_BLADE,
            'header-icon'      => 'fa-cloud-upload',
            'header-icon-size' => 'fa-1x',
            'body-icon'        => false,
            'description'      => 'dashboard.instance-import',
            'form-id'          => 'form-import',
        ],
        /** This is the default panel for an existing instance **/
        'default'           => [
            'context'                 => DashboardDefaults::PANEL_CONTEXT,
            'template'                => DashboardDefaults::DEFAULT_INSTANCE_BLADE,
            'header-status-icon'      => 'fa-thumbs-o-up',
            'header-status-icon-size' => 'fa-1x',
            'status-icon'             => 'fa-thumbs-o-up',
            'status-icon-size'        => 'fa-2x',
            'status-icon-context'     => 'text-success',
            'help-icon'               => 'fa-question',
            'help-url'                => 'http://www.dreamfactory.com/resources/',
            'help-text'               => null,
            'description'             => 'dashboard.instance-default',
            'form-id'                 => 'form-default',
        ],
    ],
    //******************************************************************************
    //* Dashboard UI Icon Settings
    //******************************************************************************
    'icons'            => [
        'import'      => 'fa-cloud-upload',
        'export'      => 'fa-cloud-download',
        'spinner'     => 'fa fa-spinner fa-spin text-info',
        'up'          => 'fa-thumbs-o-up',
        'down'        => 'fa-thumbs-o-down',
        'starting'    => 'fa fa-spinner fa-spin text-success',
        'stopping'    => 'fa fa-spinner fa-spin text-warning',
        'terminating' => 'fa fa-spinner fa-spin text-danger',
        'dead'        => 'fa-ambulance',
        'unknown'     => 'fa-question',
        'hel'         => 'fa-question',
        'launch'      => 'fa-rocket',
        'create'      => 'fa-rocket',
        'start'       => 'fa-play',
        'stop'        => 'fa-stop',
    ],
];

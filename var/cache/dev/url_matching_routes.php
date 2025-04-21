<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/camioncl' => [[['_route' => 'app_camion_c_r_u_d_index', '_controller' => 'App\\Controller\\CamionCRUDController::index'], null, ['GET' => 0], null, false, false, null]],
        '/camioncl/new' => [[['_route' => 'app_camion_c_r_u_d_new', '_controller' => 'App\\Controller\\CamionCRUDController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contribution' => [[['_route' => 'app_contribution_index', '_controller' => 'App\\Controller\\ContributionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/contribution/new' => [[['_route' => 'app_contribution_new', '_controller' => 'App\\Controller\\ContributionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, ['GET' => 0], null, false, false, null]],
        '/depense/projet' => [[['_route' => 'app_depense_projet_index', '_controller' => 'App\\Controller\\DepenseProjetController::index'], null, ['GET' => 0], null, true, false, null]],
        '/depense/projet/new' => [[['_route' => 'app_depense_projet_new', '_controller' => 'App\\Controller\\DepenseProjetController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/fournisseur' => [[['_route' => 'app_fournisseur_index', '_controller' => 'App\\Controller\\FournisseurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/fournisseur/new' => [[['_route' => 'app_fournisseur_new', '_controller' => 'App\\Controller\\FournisseurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/projet' => [[['_route' => 'app_projet_index', '_controller' => 'App\\Controller\\ProjetController::index'], null, ['GET' => 0], null, true, false, null]],
        '/projet/new' => [[['_route' => 'app_projet_new', '_controller' => 'App\\Controller\\ProjetController::new'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reponse' => [[['_route' => 'app_reponse_index', '_controller' => 'App\\Controller\\ReponseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reponse/new' => [[['_route' => 'app_reponse_new', '_controller' => 'App\\Controller\\ReponseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation' => [[['_route' => 'app_reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/reservation/new' => [[['_route' => 'app_reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/signalement' => [[['_route' => 'app_signalement_index', '_controller' => 'App\\Controller\\SignalementController::index'], null, ['GET' => 0], null, false, false, null]],
        '/signalement/new' => [[['_route' => 'app_signalement_new', '_controller' => 'App\\Controller\\SignalementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/station' => [[['_route' => 'app_station_index', '_controller' => 'App\\Controller\\StationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/station/new' => [[['_route' => 'app_station_new', '_controller' => 'App\\Controller\\StationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/zonecl' => [[['_route' => 'app_zone_de_collecte_crud_index', '_controller' => 'App\\Controller\\ZoneDeCollecteCrudController::index'], null, ['GET' => 0], null, false, false, null]],
        '/zonecl/new' => [[['_route' => 'app_zone_de_collecte_crud_new', '_controller' => 'App\\Controller\\ZoneDeCollecteCrudController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/c(?'
                    .'|amioncl/([^/]++)(?'
                        .'|(*:226)'
                        .'|/edit(*:239)'
                        .'|(*:247)'
                    .')'
                    .'|ontribution/([^/]++)(?'
                        .'|(*:279)'
                        .'|/edit(*:292)'
                        .'|(*:300)'
                    .')'
                .')'
                .'|/user/delete/([^/]++)(*:331)'
                .'|/depense/projet/([^/]++)(?'
                    .'|(*:366)'
                    .'|/edit(*:379)'
                    .'|(*:387)'
                .')'
                .'|/fournisseur/([^/]++)(?'
                    .'|(*:420)'
                    .'|/edit(*:433)'
                    .'|(*:441)'
                .')'
                .'|/projet/([^/]++)(?'
                    .'|(*:469)'
                    .'|/edit(*:482)'
                    .'|(*:490)'
                .')'
                .'|/re(?'
                    .'|ponse/([^/]++)(?'
                        .'|(*:522)'
                        .'|/edit(*:535)'
                        .'|(*:543)'
                    .')'
                    .'|servation/([^/]++)(?'
                        .'|(*:573)'
                        .'|/edit(*:586)'
                        .'|(*:594)'
                    .')'
                .')'
                .'|/s(?'
                    .'|ignalement/(?'
                        .'|signalement/image/([^/]++)(*:649)'
                        .'|([^/]++)(?'
                            .'|(*:668)'
                            .'|/edit(*:681)'
                            .'|(*:689)'
                        .')'
                    .')'
                    .'|tation/([^/]++)(?'
                        .'|(*:717)'
                        .'|/edit(*:730)'
                        .'|(*:738)'
                    .')'
                .')'
                .'|/zonecl/([^/]++)(?'
                    .'|(*:767)'
                    .'|/edit(*:780)'
                    .'|(*:788)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        226 => [[['_route' => 'app_camion_c_r_u_d_show', '_controller' => 'App\\Controller\\CamionCRUDController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        239 => [[['_route' => 'app_camion_c_r_u_d_edit', '_controller' => 'App\\Controller\\CamionCRUDController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        247 => [[['_route' => 'app_camion_c_r_u_d_delete', '_controller' => 'App\\Controller\\CamionCRUDController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        279 => [[['_route' => 'app_contribution_show', '_controller' => 'App\\Controller\\ContributionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        292 => [[['_route' => 'app_contribution_edit', '_controller' => 'App\\Controller\\ContributionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        300 => [[['_route' => 'app_contribution_delete', '_controller' => 'App\\Controller\\ContributionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        331 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\DashboardController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        366 => [[['_route' => 'app_depense_projet_show', '_controller' => 'App\\Controller\\DepenseProjetController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        379 => [[['_route' => 'app_depense_projet_edit', '_controller' => 'App\\Controller\\DepenseProjetController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        387 => [[['_route' => 'app_depense_projet_delete', '_controller' => 'App\\Controller\\DepenseProjetController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        420 => [[['_route' => 'app_fournisseur_show', '_controller' => 'App\\Controller\\FournisseurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        433 => [[['_route' => 'app_fournisseur_edit', '_controller' => 'App\\Controller\\FournisseurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        441 => [[['_route' => 'app_fournisseur_delete', '_controller' => 'App\\Controller\\FournisseurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        469 => [[['_route' => 'app_projet_show', '_controller' => 'App\\Controller\\ProjetController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        482 => [[['_route' => 'app_projet_edit', '_controller' => 'App\\Controller\\ProjetController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        490 => [[['_route' => 'app_projet_delete', '_controller' => 'App\\Controller\\ProjetController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        522 => [[['_route' => 'app_reponse_show', '_controller' => 'App\\Controller\\ReponseController::show'], ['id_reponse'], ['GET' => 0], null, false, true, null]],
        535 => [[['_route' => 'app_reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['id_reponse'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        543 => [[['_route' => 'app_reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['id_reponse'], ['POST' => 0], null, false, true, null]],
        573 => [[['_route' => 'app_reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['idReservation'], ['GET' => 0], null, false, true, null]],
        586 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['idReservation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        594 => [[['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['idReservation'], ['POST' => 0], null, false, true, null]],
        649 => [[['_route' => 'signalement_image', '_controller' => 'App\\Controller\\SignalementController::image'], ['id'], ['GET' => 0], null, false, true, null]],
        668 => [[['_route' => 'app_signalement_show', '_controller' => 'App\\Controller\\SignalementController::show'], ['id_signalement'], ['GET' => 0], null, false, true, null]],
        681 => [[['_route' => 'app_signalement_edit', '_controller' => 'App\\Controller\\SignalementController::edit'], ['id_signalement'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        689 => [[['_route' => 'app_signalement_delete', '_controller' => 'App\\Controller\\SignalementController::delete'], ['id_signalement'], ['POST' => 0], null, false, true, null]],
        717 => [[['_route' => 'app_station_show', '_controller' => 'App\\Controller\\StationController::show'], ['id_station'], ['GET' => 0], null, false, true, null]],
        730 => [[['_route' => 'app_station_edit', '_controller' => 'App\\Controller\\StationController::edit'], ['id_station'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        738 => [[['_route' => 'app_station_delete', '_controller' => 'App\\Controller\\StationController::delete'], ['id_station'], ['POST' => 0], null, false, true, null]],
        767 => [[['_route' => 'app_zone_de_collecte_crud_show', '_controller' => 'App\\Controller\\ZoneDeCollecteCrudController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        780 => [[['_route' => 'app_zone_de_collecte_crud_edit', '_controller' => 'App\\Controller\\ZoneDeCollecteCrudController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        788 => [
            [['_route' => 'app_zone_de_collecte_crud_delete', '_controller' => 'App\\Controller\\ZoneDeCollecteCrudController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

<?php
namespace App;

// This can be found in the Symfony\Component\HttpFoundation\Response class
class Res
{
    public const HTTP_CONTINUE = 100;
    const HTTP_SWITCHING_PROTOCOLS = 101;
    const HTTP_PROCESSING = 102;            // RFC2518
    const HTTP_OK = 200;
    const HTTP_CREATED = 201;
    const HTTP_ACCEPTED = 202;
    const HTTP_NON_AUTHORITATIVE_INFORMATION = 203;
    const HTTP_NO_CONTENT = 204;
    const HTTP_RESET_CONTENT = 205;
    const HTTP_PARTIAL_CONTENT = 206;
    const HTTP_MULTI_STATUS = 207;          // RFC4918
    const HTTP_ALREADY_REPORTED = 208;      // RFC5842
    const HTTP_IM_USED = 226;               // RFC3229
    const HTTP_MULTIPLE_CHOICES = 300;
    const HTTP_MOVED_PERMANENTLY = 301;
    const HTTP_FOUND = 302;
    const HTTP_SEE_OTHER = 303;
    const HTTP_NOT_MODIFIED = 304;
    const HTTP_USE_PROXY = 305;
    const HTTP_RESERVED = 306;
    const HTTP_TEMPORARY_REDIRECT = 307;
    const HTTP_PERMANENTLY_REDIRECT = 308;  // RFC7238
    const HTTP_BAD_REQUEST = 400;
    const HTTP_UNAUTHORIZED = 401;
    const HTTP_PAYMENT_REQUIRED = 402;
    const HTTP_FORBIDDEN = 403;
    public const HTTP_NOT_FOUND = 404;
    const HTTP_METHOD_NOT_ALLOWED = 405;
    const HTTP_NOT_ACCEPTABLE = 406;
    const HTTP_PROXY_AUTHENTICATION_REQUIRED = 407;
    const HTTP_REQUEST_TIMEOUT = 408;
    const HTTP_CONFLICT = 409;
    const HTTP_GONE = 410;
    const HTTP_LENGTH_REQUIRED = 411;
    const HTTP_PRECONDITION_FAILED = 412;
    const HTTP_REQUEST_ENTITY_TOO_LARGE = 413;
    const HTTP_REQUEST_URI_TOO_LONG = 414;
    const HTTP_UNSUPPORTED_MEDIA_TYPE = 415;
    const HTTP_REQUESTED_RANGE_NOT_SATISFIABLE = 416;
    const HTTP_EXPECTATION_FAILED = 417;
    const HTTP_I_AM_A_TEAPOT = 418;                                               // RFC2324
    const HTTP_MISDIRECTED_REQUEST = 421;                                         // RFC7540
    const HTTP_UNPROCESSABLE_ENTITY = 422;                                        // RFC4918
    const HTTP_LOCKED = 423;                                                      // RFC4918
    const HTTP_FAILED_DEPENDENCY = 424;                                           // RFC4918
    const HTTP_RESERVED_FOR_WEBDAV_ADVANCED_COLLECTIONS_EXPIRED_PROPOSAL = 425;   // RFC2817
    const HTTP_UPGRADE_REQUIRED = 426;                                            // RFC2817
    const HTTP_PRECONDITION_REQUIRED = 428;                                       // RFC6585
    const HTTP_TOO_MANY_REQUESTS = 429;                                           // RFC6585
    const HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE = 431;                             // RFC6585
    const HTTP_UNAVAILABLE_FOR_LEGAL_REASONS = 451;
    const HTTP_INTERNAL_SERVER_ERROR = 500;
    const HTTP_NOT_IMPLEMENTED = 501;
    const HTTP_BAD_GATEWAY = 502;
    const HTTP_SERVICE_UNAVAILABLE = 503;
    const HTTP_GATEWAY_TIMEOUT = 504;
    const HTTP_VERSION_NOT_SUPPORTED = 505;
    const HTTP_VARIANT_ALSO_NEGOTIATES_EXPERIMENTAL = 506;                        // RFC2295
    const HTTP_INSUFFICIENT_STORAGE = 507;                                        // RFC4918
    const HTTP_LOOP_DETECTED = 508;                                               // RFC5842
    const HTTP_NOT_EXTENDED = 510;                                                // RFC2774
    const HTTP_NETWORK_AUTHENTICATION_REQUIRED = 511;                             // RFC6585

    public $statusTextsEn = array(
        100 => 'Continue',
        101 => 'Switching Protocols',
        102 => 'Processing',            // RFC2518
        200 => 'OK',
        201 => 'Created',
        202 => 'Accepted',
        203 => 'Non-Authoritative Information',
        204 => 'No Content',
        205 => 'Reset Content',
        206 => 'Partial Content',
        207 => 'Multi-Status',          // RFC4918
        208 => 'Already Reported',      // RFC5842
        226 => 'IM Used',               // RFC3229
        300 => 'Multiple Choices',
        301 => 'Moved Permanently',
        302 => 'Found',
        303 => 'See Other',
        304 => 'Not Modified',
        305 => 'Use Proxy',
        307 => 'Temporary Redirect',
        308 => 'Permanent Redirect',    // RFC7238
        400 => 'Bad Request',
        401 => 'Unauthorized',
        402 => 'Payment Required',
        403 => 'Forbidden',
        404 => 'Not Found',
        405 => 'Method Not Allowed',
        406 => 'Not Acceptable',
        407 => 'Proxy Authentication Required',
        408 => 'Request Timeout',
        409 => 'Conflict',
        410 => 'Gone',
        411 => 'Length Required',
        412 => 'Precondition Failed',
        413 => 'Payload Too Large',
        414 => 'URI Too Long',
        415 => 'Unsupported Media Type',
        416 => 'Range Not Satisfiable',
        417 => 'Expectation Failed',
        418 => 'I\'m a teapot',                                               // RFC2324
        421 => 'Misdirected Request',                                         // RFC7540
        422 => 'Unprocessable Entity',                                        // RFC4918
        423 => 'Locked',                                                      // RFC4918
        424 => 'Failed Dependency',                                           // RFC4918
        425 => 'Reserved for WebDAV advanced collections expired proposal',   // RFC2817
        426 => 'Upgrade Required',                                            // RFC2817
        428 => 'Precondition Required',                                       // RFC6585
        429 => 'Too Many Requests',                                           // RFC6585
        431 => 'Request Header Fields Too Large',                             // RFC6585
        451 => 'Unavailable For Legal Reasons',                               // RFC7725
        500 => 'Internal Server Error',
        501 => 'Not Implemented',
        502 => 'Bad Gateway',
        503 => 'Service Unavailable',
        504 => 'Gateway Timeout',
        505 => 'HTTP Version Not Supported',
        506 => 'Variant Also Negotiates',                                     // RFC2295
        507 => 'Insufficient Storage',                                        // RFC4918
        508 => 'Loop Detected',                                               // RFC5842
        510 => 'Not Extended',                                                // RFC2774
        511 => 'Network Authentication Required',                             // RFC6585
    );

    const statusTextsDe = array(
        100 => 'Weiter',
        101 => 'Switching Protocols',
        102 => 'Verarbeitung', // RFC2518
        200 => 'OK',
        201 => 'Erstellt',
        202 => 'Akzeptiert',
        203 => 'Nicht maßgebliche Informationen',
        204 => 'Kein Inhalt',
        205 => 'Inhalt zurücksetzen',
        206 => 'Teilinhalt',
        207 => 'Multi-Status', // RFC4918
        208 => 'Bereits gemeldet', // RFC5842
        226 => 'IM verwendet', // RFC3229
        300 => 'Mehrfachauswahl',
        301 => 'Dauerhaft verschoben',
        302 => 'Gefunden',
        303 => 'Andere sehen',
        304 => 'Nicht geändert',
        305 => 'Proxy verwenden',
        307 => 'Temporäre Weiterleitung',
        308 => 'Permanent Redirect', // RFC7238
        400 => 'Bad Request',
        401 => 'Nicht autorisiert',
        402 => 'Zahlung erforderlich',
        403 => 'Verboten',
        404 => 'Nicht gefunden',
        405 => 'Methode nicht erlaubt',
        406 => 'Nicht akzeptabel',
        407 => 'Proxy-Authentifizierung erforderlich',
        408 => 'Zeitüberschreitung anfordern',
        409 => 'Konflikt',
        410 => 'Gone',
        411 => 'Länge erforderlich',
        412 => 'Voraussetzung fehlgeschlagen',
        413 => 'Payload Too Large',
        414 => 'URI zu lang',
        415 => 'Nicht unterstützter Medientyp',
        416 => 'Reichweite nicht zufriedenstellbar',
        417 => 'Erwartung fehlgeschlagen',
        418 => 'Ich bin eine Teekanne', // RFC2324
        421 => 'Fehlgeleitete Anforderung', // RFC7540
        422 => 'Nicht verarbeitbare Entität', // RFC4918
        423 => 'Gesperrt', // RFC4918
        424 => 'Fehlgeschlagene Abhängigkeit', // RFC4918
        425 => 'Reserviert für WebDAV Advanced Collections abgelaufen Vorschlag', // RFC2817
        426 => 'Upgrade erforderlich', // RFC2817
        428 => 'Voraussetzung erforderlich', // RFC6585
        429 => 'Zu viele Anfragen', // RFC6585
        431 => 'Headerfelder zu groß anfordern', // RFC6585
        451 => 'Aus rechtlichen Gründen nicht verfügbar', // RFC7725
        500 => 'Interner Serverfehler',
        501 => 'Nicht implementiert',
        502 => 'Bad Gateway',
        503 => 'Dienst nicht verfügbar',
        504 => 'Gateway Timeout',
        505 => 'HTTP-Version nicht unterstützt',
        506 => 'Variante verhandelt auch', // RFC2295
        507 => 'Unzureichender Speicher', // RFC4918
        508 => 'Loop Detected', // RFC5842
        510 => 'Nicht erweitert', // RFC2774
        511 => 'Netzwerkauthentifizierung erforderlich', // RFC6585
    );
}

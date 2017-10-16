<?php
/**
 * Created by PhpStorm.
 * User: jules
 * Date: 16/10/17
 * Time: 15:09
 */

class NewsletterLang
{
    private $language;
    public $subject;
    public $body;
    public function __construct(string $lang,int $id)
    {
        $this->language = $lang;
        switch ($lang){
            case 'en':
                $this->subject = 'Your subscription to Woodpeckey\'s newsletter';
                $this->body = "Thank you for your subscription to Woodpeckey\'s newsletter. \n
                If you did not subscribe to this newsletter, you can follow this link to unsubscribe :
                 https://woodpeckey.com/newsletter/unsubscribe/$id";
                break;

            case 'fr' :
                $this->subject = 'Votre abonnement à la newletter de Woodpeckey';
                $this->body = "Merci de vous être abonné à la newletter de Woodpeckey \n
                Si vous n'êtes pas à l'origine de cet abonnement, vous pouvez vous désabonner en
                 en suivqnt le lien suivant:
                 https://woodpeckey.com/newsletter/unsubscribe/$id";
                break;
        }
    }


}
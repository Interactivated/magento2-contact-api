<?php
namespace Interactivated\ContactForm\Api;
use Interactivated\ContactForm\Api\Data\ContactFormInterface;
interface ContactInterface
{
    /**
     * Post data from contact form.
     *
     * @param ContactFormInterface $data
     * @return string
     */
    public function send(ContactFormInterface $data);
}

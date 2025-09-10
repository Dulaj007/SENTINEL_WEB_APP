<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class MinifyHtml implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do nothing before request
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        $buffer = $response->getBody();

        // Preserve script/style content
        $buffer = preg_replace_callback(
            '#<script.*?>.*?</script>|<style.*?>.*?</style>#is',
            function($matches) {
                return '%%' . base64_encode($matches[0]) . '%%';
            },
            $buffer
        );

        // Minify HTML
        $search = [
            '/\>[^\S ]+/s',
            '/[^\S ]+\</s',
            '/(\s)+/s',
            '/<!--(.|\s)*?-->/'
        ];
        $replace = ['>', '<', '\\1', ''];
        $buffer = preg_replace($search, $replace, $buffer);

        // Restore script/style content
        $buffer = preg_replace_callback(
            '/%%(.*?)%%/',
            function($matches) {
                return base64_decode($matches[1]);
            },
            $buffer
        );

        $response->setBody($buffer);
    }
}

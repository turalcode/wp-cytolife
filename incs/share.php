<?php

function get_tg_share_url(string $url): string
{
    $encoded_url = urlencode($url);
    return 'https://telegram.me/share/url?url=' . $encoded_url;
}

function get_wa_share_url(string $url): string
{
    $encoded_url = urlencode($url);
    return 'https://wa.me/?text=' . $encoded_url;
}

function get_mail_share_url(string $url): string
{
    $encoded_url = urlencode($url);
    // return 'mailto:?&body=' . $encoded_url;
    return 'mailto:?&body=' . $encoded_url;
}

function get_vk_share_url(string $url): string
{
    $encoded_url = urlencode($url);
    return 'http://vk.com/share.php?url=' . $encoded_url;
}

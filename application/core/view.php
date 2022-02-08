<?php
class View
{
    function generate($content_view, $template_view, $data = null)
    {
        include "/OpenServer/domains/test.loc/src/application/views/" . $template_view;
    }
}

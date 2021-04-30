<?php

class MailRender
{
    /*
    *****
    * General with data replace
    * Usage: MailRender::build("Hello {{ world }}!", ['world' => 'Peter']);
    * return: "Hello Peter!"
    *****
    * With simple array
    * Usage: MailRender::build("Says: {{#names}}Hello {{.}}!{{/names}}", ['names' => array("Peter", "John")]);
    * return: "Says: Hello Peter!Hello John!"
    * With key value array or multiple level
    * Usage: MailRender::build("Says: {{#names}}Hello {{ world }}!{{/names}}", ['names' => [["world" => "Peter"], ["world" => "John"]]]);
    * return: "Says: Hello Peter!Hello John!"
    *****
    * With if data
    * MailRender::build("{{?user}} {{user}} Says: {{/user}} Hello World!", ['user'=> 'Doe']);
    * MailRender::build("{{?user}} {{user}} Says: {{/user}} Hello World!", ['user'=> '']);
    * return: "Doe Says: Hello World!"
    * return: "Hello World!"
    *****
    * With if else data
    * Usage: MailRender::build("{{?user}} {{user}} Says: {{/else}} {{#names}} Hello {{ world }}!{{/names}}{{/user}}", ['user'=> 'Doe','names' => [["world" => "Peter"], ["world" => "John"]]]);
    * "Doe Says:"
    * Usage: MailRender::build("{{?user}} {{user}} Says: {{/else}} {{#names}} Hello {{ world }}!{{/names}}{{/user}}", ['user'=> '','names' => [["world" => "Peter"], ["world" => "John"]]]);
    * "Hello Peter!Hello John!"
    */
    public static function build($template = '', $data = [], $option = [])
    {
        \preg_match_all('/\{\{\s?([a-zA-Z\s\_\#\.\?]{1,})\s?\}\}/', $template, $matches);
        if (!empty($matches[1])) {
            $inputs   = $matches[1];
            $replace  = $matches[0];
            foreach ($inputs as $key => $input) {
                try {
                    $input       = trim($input);
                    $firstchar   = \substr($input, 0, 1);
                    $loopv       = \substr($input, 1, strlen($input));
                    $dataloop    = isset($data[$loopv]) ? $data[$loopv] : [];
                    $loops       = $replace[$key];
                    $loope       = str_replace($firstchar, '/', $loops);
                    $loopcontent = '';
                    if ($firstchar == '#') {
                        $looper = self::getStringContext($loops, $loope, $template);
                        if (!empty($dataloop)) {
                            $counter = 1;
                            foreach ($dataloop as $key => $val) {
                                if (!is_array($val)) {
                                    $val                     = array('.' => $val);
                                }
                                if (isset($option['key'])) {
                                    $val['key']        = $key;
                                }
                                if (isset($option['series'])) {
                                    $val['serial'] = $counter;
                                }
                                $loopcontent .= self::build($looper['in'], $val, $option);
                                ++$counter;
                            }
                        }
                        $template  = $looper['left'].$loopcontent.$looper['right'];
                    } elseif ($firstchar == '?') {
                        $looper = self::getStringContext($loops, $loope, $template);
                        preg_match('/\{\{\/else\s?\}\}/', $looper['in'], $match);
                        $spliter = isset($match[0]) ? $match[0] : false;
                        if ($spliter) {
                            list($t_content, $f_content) = explode($spliter, $looper['in']);
                            if ($dataloop) {
                                $loopcontent .= self::build($t_content, $data, $option);
                            } else {
                                $loopcontent .= self::build($f_content, $data, $option);
                            }
                        } else {
                            if ($dataloop) {
                                $loopcontent .= self::build($looper['in'], $data, $option);
                            }
                        }
                        $template  = $looper['left'].$loopcontent.$looper['right'];
                    } else {
                        $template = str_replace($replace[$key], $data[$input], $template);
                    }
                } catch (\Exception $e) {
                    $template = str_replace($replace[$key], '{{'.$e->getMessage().'}}', $template);
                    continue;
                }
            }
        }

        return \trim($template);
    }

    private static function getStringContext($from = '', $to = '', $str = '')
    {
        $res['in']    = explode($from, $str)[1];
        $res['in']    = explode($to, $res['in'])[0];
        $res['out']   = $from.explode($from, $str)[1];
        $res['out']   = explode($to, $res['out'])[0].$to;
        $res['left']  = explode($from, $str)[0];
        $res['right'] = explode($to, $str)[1];

        return $res;
    }
}

<?php

/* extension/module/news_latest.twig */
class __TwigTemplate_931f8736f10afd993c530b909bb415145151f573b0e380ed0ae59eaea7c79dd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\"
                        class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 8
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i
                            class=\"fa fa-reply\"></i></a></div>
            <h1>";
        // line 10
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "                    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 19
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 20
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i
                        class=\"fa fa-exclamation-circle\"></i> ";
            // line 21
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 25
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 27
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 30
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\"
                      class=\"form-horizontal\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 33
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"name\" value=\"";
        // line 35
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\"
                                   id=\"input-name\" class=\"form-control\"/>
                            ";
        // line 37
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            // line 38
            echo "                                <div class=\"text-danger\">";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</div>
                            ";
        }
        // line 40
        echo "                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-limit\">";
        // line 43
        echo (isset($context["entry_limit"]) ? $context["entry_limit"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"limit\" value=\"";
        // line 45
        echo (isset($context["limit"]) ? $context["limit"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_limit"]) ? $context["entry_limit"] : null);
        echo "\"
                                   id=\"input-limit\" class=\"form-control\"/>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-width\">";
        // line 50
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"width\" value=\"";
        // line 52
        echo (isset($context["width"]) ? $context["width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\"
                                   id=\"input-width\" class=\"form-control\"/>
                            ";
        // line 54
        if ((isset($context["error_width"]) ? $context["error_width"] : null)) {
            // line 55
            echo "                                <div class=\"text-danger\">";
            echo (isset($context["error_width"]) ? $context["error_width"] : null);
            echo "</div>
                            ";
        }
        // line 57
        echo "                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-height\">";
        // line 60
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"height\" value=\"";
        // line 62
        echo (isset($context["height"]) ? $context["height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\"
                                   id=\"input-height\" class=\"form-control\"/>
                            ";
        // line 64
        if ((isset($context["error_height"]) ? $context["error_height"] : null)) {
            // line 65
            echo "                                <div class=\"text-danger\">";
            echo (isset($context["error_height"]) ? $context["error_height"] : null);
            echo "</div>
                            ";
        }
        // line 67
        echo "                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 70
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <select name=\"status\" id=\"input-status\" class=\"form-control\">
                                ";
        // line 73
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 74
            echo "                                    <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                    <option value=\"0\">";
            // line 75
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                ";
        } else {
            // line 77
            echo "                                    <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                    <option value=\"0\" selected=\"selected\">";
            // line 78
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                ";
        }
        // line 80
        echo "                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
";
        // line 88
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/news_latest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 88,  212 => 80,  207 => 78,  202 => 77,  197 => 75,  192 => 74,  190 => 73,  184 => 70,  179 => 67,  173 => 65,  171 => 64,  164 => 62,  159 => 60,  154 => 57,  148 => 55,  146 => 54,  139 => 52,  134 => 50,  124 => 45,  119 => 43,  114 => 40,  108 => 38,  106 => 37,  99 => 35,  94 => 33,  88 => 30,  82 => 27,  78 => 25,  71 => 21,  68 => 20,  66 => 19,  60 => 15,  49 => 13,  45 => 12,  40 => 10,  33 => 8,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*     <div class="page-header">*/
/*         <div class="container-fluid">*/
/*             <div class="pull-right">*/
/*                 <button type="submit" form="form-module" data-toggle="tooltip" title="{{ button_save }}"*/
/*                         class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*                 <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i*/
/*                             class="fa fa-reply"></i></a></div>*/
/*             <h1>{{ heading_title }}</h1>*/
/*             <ul class="breadcrumb">*/
/*                 {% for breadcrumb in breadcrumbs %}*/
/*                     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/*     <div class="container-fluid">*/
/*         {% if error_warning %}*/
/*             <div class="alert alert-danger alert-dismissible"><i*/
/*                         class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*                 <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*             </div>*/
/*         {% endif %}*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-module"*/
/*                       class="form-horizontal">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-name">{{ entry_name }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <input type="text" name="name" value="{{ name }}" placeholder="{{ entry_name }}"*/
/*                                    id="input-name" class="form-control"/>*/
/*                             {% if error_name %}*/
/*                                 <div class="text-danger">{{ error_name }}</div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-limit">{{ entry_limit }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <input type="text" name="limit" value="{{ limit }}" placeholder="{{ entry_limit }}"*/
/*                                    id="input-limit" class="form-control"/>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-width">{{ entry_width }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <input type="text" name="width" value="{{ width }}" placeholder="{{ entry_width }}"*/
/*                                    id="input-width" class="form-control"/>*/
/*                             {% if error_width %}*/
/*                                 <div class="text-danger">{{ error_width }}</div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-height">{{ entry_height }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <input type="text" name="height" value="{{ height }}" placeholder="{{ entry_height }}"*/
/*                                    id="input-height" class="form-control"/>*/
/*                             {% if error_height %}*/
/*                                 <div class="text-danger">{{ error_height }}</div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <select name="status" id="input-status" class="form-control">*/
/*                                 {% if status %}*/
/*                                     <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                                     <option value="0">{{ text_disabled }}</option>*/
/*                                 {% else %}*/
/*                                     <option value="1">{{ text_enabled }}</option>*/
/*                                     <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                                 {% endif %}*/
/*                             </select>*/
/*                         </div>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {{ footer }}*/

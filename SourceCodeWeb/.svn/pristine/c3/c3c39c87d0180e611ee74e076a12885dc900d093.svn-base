<?php

/* extension/module/product_by_categories.twig */
class __TwigTemplate_517696e26323adf3f8a59f535c02e2ad18cec66eac845989a3cd9bd0ccee3402 extends Twig_Template
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
                        <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 43
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <select name=\"status\" id=\"input-status\" class=\"form-control\">
                                ";
        // line 46
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 47
            echo "                                    <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                    <option value=\"0\">";
            // line 48
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                ";
        } else {
            // line 50
            echo "                                    <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                    <option value=\"0\" selected=\"selected\">";
            // line 51
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                ";
        }
        // line 53
        echo "                            </select>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-width\">";
        // line 57
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"width\" value=\"";
        // line 59
        echo (isset($context["width"]) ? $context["width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-width\" class=\"form-control\" />
                            ";
        // line 60
        if ((isset($context["error_width"]) ? $context["error_width"] : null)) {
            // line 61
            echo "                                <div class=\"text-danger\">";
            echo (isset($context["error_width"]) ? $context["error_width"] : null);
            echo "</div>
                            ";
        }
        // line 63
        echo "                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-height\">";
        // line 66
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"height\" value=\"";
        // line 68
        echo (isset($context["height"]) ? $context["height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" id=\"input-height\" class=\"form-control\" />
                            ";
        // line 69
        if ((isset($context["error_height"]) ? $context["error_height"] : null)) {
            // line 70
            echo "                                <div class=\"text-danger\">";
            echo (isset($context["error_height"]) ? $context["error_height"] : null);
            echo "</div>
                            ";
        }
        // line 72
        echo "                        </div>
                    </div>
                    <div class=\"form-group end-module-name\"></div>
                    <div>
                        <table class=\"table table-hover table-bordered table-striped\">
                            <thead>
                            <tr>
                                <th>";
        // line 79
        echo (isset($context["entry_category"]) ? $context["entry_category"] : null);
        echo "</th>
                                <th>";
        // line 80
        echo (isset($context["entry_limit"]) ? $context["entry_limit"] : null);
        echo "</th>
                                <th>";
        // line 81
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</th>
                                <th>";
        // line 82
        echo (isset($context["entry_action"]) ? $context["entry_action"] : null);
        echo "</th>
                            </tr>
                            </thead>
                            <tbody class=\"box-module-description\">
                            ";
        // line 86
        $context["row"] = 0;
        // line 87
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["module_description"]) ? $context["module_description"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
            // line 88
            echo "                                <tr class=\"item-";
            echo (isset($context["row"]) ? $context["row"] : null);
            echo "\">
                                    <td>
                                        <select name=\"module_description[";
            // line 90
            echo (isset($context["row"]) ? $context["row"] : null);
            echo "][category_id]\" id=\"input-status\" class=\"form-control\">
                                            ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 92
                echo "                                                ";
                if (($this->getAttribute($context["category"], "category_id", array()) == $this->getAttribute($context["info"], "category_id", array()))) {
                    // line 93
                    echo "                                                    <option value=\"";
                    echo $this->getAttribute($context["category"], "category_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</option>
                                                ";
                } else {
                    // line 95
                    echo "                                                    <option value=\"";
                    echo $this->getAttribute($context["category"], "category_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</option>
                                                ";
                }
                // line 97
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "                                        </select>
                                    </td>
                                    <td>
                                        <input type=\"text\" name=\"module_description[";
            // line 101
            echo (isset($context["row"]) ? $context["row"] : null);
            echo "][limit]\" placeholder=\"";
            echo (isset($context["entry_limit"]) ? $context["entry_limit"] : null);
            echo "\"  value=\"";
            echo $this->getAttribute($context["info"], "limit", array());
            echo "\" size=\"10\" class=\"form-control\" />
                                    </td>
                                    <td>
                                        <input type=\"text\" name=\"module_description[";
            // line 104
            echo (isset($context["row"]) ? $context["row"] : null);
            echo "][sort_order]\" placeholder=\"";
            echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
            echo "\"  value=\"";
            echo $this->getAttribute($context["info"], "sort_order", array());
            echo "\" size=\"5\" class=\"form-control\" />
                                    </td>
                                    <td>
                                        <button type=\"button\" onclick=\"\$('.item-";
            // line 107
            echo (isset($context["row"]) ? $context["row"] : null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i>
                                        </button>
                                    </td>
                                </tr>
                                ";
            // line 111
            $context["row"] = ((isset($context["row"]) ? $context["row"] : null) + 1);
            // line 112
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan=\"3\"></td>
                                    <td>
                                        <button type=\"button\" onclick=\"addCategory();\" data-toggle=\"tooltip\" title=\"";
        // line 118
        echo (isset($context["button_add"]) ? $context["button_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    <script type=\"text/javascript\"><!--
        var row = ";
        // line 130
        echo (isset($context["row"]) ? $context["row"] : null);
        echo ";
        function addCategory() {
            html = '<tr class=\"item-' + row + '\">';
            html += '<td>';
            html += '<select name=\"module_description[' + row + '][category_id]\" id=\"input-status\" class=\"form-control\">';
                    ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 136
            echo "            html += '<option value=\"";
            echo $this->getAttribute($context["category"], "category_id", array());
            echo "\">";
            echo $this->getAttribute($context["category"], "name", array());
            echo "</option>';
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "            html += '</select>';
            html += '</td>';
            html += '<td>';
            html += '<input type=\"text\" name=\"module_description[' + row + '][limit]\" placeholder=\"";
        // line 141
        echo (isset($context["entry_limit"]) ? $context["entry_limit"] : null);
        echo "\"  value=\"\" size=\"10\" class=\"form-control\" />';
            html += '</td>';
            html += '<td>';
            html += '<input type=\"text\" name=\"module_description[' + row + '][sort_order]\" placeholder=\"";
        // line 144
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\"  value=\"\" size=\"5\" class=\"form-control\" />';
            html += '</td>';
            html += '<td>';
            html += '<button type=\"button\" onclick=\"\$(\\'.item-' + row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 147
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i>';
            html += '</button>';
            html += '</td>';
            html += '</tr>';

            \$('.box-module-description').append(html);
            row++;
        }
        //--></script>
";
        // line 156
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/product_by_categories.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 156,  374 => 147,  368 => 144,  362 => 141,  357 => 138,  346 => 136,  342 => 135,  334 => 130,  319 => 118,  312 => 113,  306 => 112,  304 => 111,  295 => 107,  285 => 104,  275 => 101,  270 => 98,  264 => 97,  256 => 95,  248 => 93,  245 => 92,  241 => 91,  237 => 90,  231 => 88,  226 => 87,  224 => 86,  217 => 82,  213 => 81,  209 => 80,  205 => 79,  196 => 72,  190 => 70,  188 => 69,  182 => 68,  177 => 66,  172 => 63,  166 => 61,  164 => 60,  158 => 59,  153 => 57,  147 => 53,  142 => 51,  137 => 50,  132 => 48,  127 => 47,  125 => 46,  119 => 43,  114 => 40,  108 => 38,  106 => 37,  99 => 35,  94 => 33,  88 => 30,  82 => 27,  78 => 25,  71 => 21,  68 => 20,  66 => 19,  60 => 15,  49 => 13,  45 => 12,  40 => 10,  33 => 8,  28 => 6,  19 => 1,);
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
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-width">{{ entry_width }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <input type="text" name="width" value="{{ width }}" placeholder="{{ entry_width }}" id="input-width" class="form-control" />*/
/*                             {% if error_width %}*/
/*                                 <div class="text-danger">{{ error_width }}</div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-height">{{ entry_height }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <input type="text" name="height" value="{{ height }}" placeholder="{{ entry_height }}" id="input-height" class="form-control" />*/
/*                             {% if error_height %}*/
/*                                 <div class="text-danger">{{ error_height }}</div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group end-module-name"></div>*/
/*                     <div>*/
/*                         <table class="table table-hover table-bordered table-striped">*/
/*                             <thead>*/
/*                             <tr>*/
/*                                 <th>{{ entry_category }}</th>*/
/*                                 <th>{{ entry_limit }}</th>*/
/*                                 <th>{{ entry_sort_order }}</th>*/
/*                                 <th>{{ entry_action }}</th>*/
/*                             </tr>*/
/*                             </thead>*/
/*                             <tbody class="box-module-description">*/
/*                             {% set row = 0 %}*/
/*                             {% for info in module_description %}*/
/*                                 <tr class="item-{{ row }}">*/
/*                                     <td>*/
/*                                         <select name="module_description[{{ row }}][category_id]" id="input-status" class="form-control">*/
/*                                             {% for category in categories %}*/
/*                                                 {% if category.category_id == info.category_id %}*/
/*                                                     <option value="{{ category.category_id }}" selected="selected">{{ category.name }}</option>*/
/*                                                 {% else %}*/
/*                                                     <option value="{{ category.category_id }}">{{ category.name }}</option>*/
/*                                                 {% endif %}*/
/*                                             {% endfor %}*/
/*                                         </select>*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         <input type="text" name="module_description[{{ row }}][limit]" placeholder="{{ entry_limit }}"  value="{{ info.limit }}" size="10" class="form-control" />*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         <input type="text" name="module_description[{{ row }}][sort_order]" placeholder="{{ entry_sort_order }}"  value="{{ info.sort_order }}" size="5" class="form-control" />*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         <button type="button" onclick="$('.item-{{ row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i>*/
/*                                         </button>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                                 {% set row = row + 1 %}*/
/*                             {% endfor %}*/
/*                             </tbody>*/
/*                             <tfoot>*/
/*                                 <tr>*/
/*                                     <td colspan="3"></td>*/
/*                                     <td>*/
/*                                         <button type="button" onclick="addCategory();" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                             </tfoot>*/
/*                         </table>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/*     <script type="text/javascript"><!--*/
/*         var row = {{ row }};*/
/*         function addCategory() {*/
/*             html = '<tr class="item-' + row + '">';*/
/*             html += '<td>';*/
/*             html += '<select name="module_description[' + row + '][category_id]" id="input-status" class="form-control">';*/
/*                     {% for category in categories %}*/
/*             html += '<option value="{{ category.category_id }}">{{ category.name }}</option>';*/
/*                     {% endfor %}*/
/*             html += '</select>';*/
/*             html += '</td>';*/
/*             html += '<td>';*/
/*             html += '<input type="text" name="module_description[' + row + '][limit]" placeholder="{{ entry_limit }}"  value="" size="10" class="form-control" />';*/
/*             html += '</td>';*/
/*             html += '<td>';*/
/*             html += '<input type="text" name="module_description[' + row + '][sort_order]" placeholder="{{ entry_sort_order }}"  value="" size="5" class="form-control" />';*/
/*             html += '</td>';*/
/*             html += '<td>';*/
/*             html += '<button type="button" onclick="$(\'.item-' + row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i>';*/
/*             html += '</button>';*/
/*             html += '</td>';*/
/*             html += '</tr>';*/
/* */
/*             $('.box-module-description').append(html);*/
/*             row++;*/
/*         }*/
/*         //--></script>*/
/* {{ footer }}*/

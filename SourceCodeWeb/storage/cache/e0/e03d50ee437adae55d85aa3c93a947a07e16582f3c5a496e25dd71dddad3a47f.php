<?php

/* web/template/product/manufacturer_info.twig */
class __TwigTemplate_215a8b34d6d57d3d14355d3c4eec58ee9597146c3edff021cdcd47696020b3c9 extends Twig_Template
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
        echo "
<div class=\"breadcrumb\">
    <div class=\"container\">
        <div class=\"breadcrumb-inner\">
            <ul class=\"list-inline list-unstyled\">
                ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 7
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
        // line 9
        echo "            </ul>
        </div>
        <!-- /.breadcrumb-inner -->
    </div>
    <!-- /.container -->
</div>
<!-- /.breadcrumb -->
<div class=\"body-content outer-top-xs\" id=\"top-banner-and-menu\">
    <div class=\"container\">
        <div class=\"row\">
            <!--  SIDEBAR  -->
            <div class=\"col-xs-12 col-sm-12 col-md-3 sidebar\">
                ";
        // line 21
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
            </div>
            <!--  SIDEBAR : END  -->
            <!--  CONTENT  -->
            <div class=\"col-xs-12 col-sm-12 col-md-9\">
                <div id=\"content\">
                    <h2>";
        // line 27
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h2>
                    ";
        // line 28
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 29
            echo "                        <div class=\"clearfix filters-container\">
                            <div class=\"row\">
                                <div class=\"col col-sm-6 col-md-3\">
                                    <div class=\"filter-tabs\">
                                        <ul id=\"filter-tabs\" class=\"nav nav-tabs nav-tab-box nav-tab-fa-icon\">
                                            <li class=\"active\"><a data-toggle=\"tab\" href=\"#grid-container\"><i
                                                            class=\"icon fa fa-th-large\"></i>";
            // line 35
            echo (isset($context["text_grid"]) ? $context["text_grid"] : null);
            echo "</a></li>
                                            <li><a data-toggle=\"tab\" href=\"#list-container\"><i
                                                            class=\"icon fa fa-th-list\"></i>";
            // line 37
            echo (isset($context["text_list"]) ? $context["text_list"] : null);
            echo "</a></li>
                                        </ul>
                                    </div>
                                    <!-- /.filter-tabs -->
                                </div>
                                <!-- /.col -->
                                <div class=\"col col-sm-12 col-md-9\">
                                    <div class=\"col col-sm-3 col-md-7 no-padding\">
                                        <div class=\"lbl-cnt\"><span class=\"lbl\">";
            // line 45
            echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
            echo "</span>
                                            <div class=\"fld inline\">
                                                <select id=\"input-sort\" class=\"form-control\"
                                                        onchange=\"location = this.value;\">
                                                    ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 50
                echo "                                                        ";
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 51
                    echo "                                                            <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\"
                                                                    selected=\"selected\">";
                    // line 52
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
                                                        ";
                } else {
                    // line 54
                    echo "                                                            <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
                                                        ";
                }
                // line 56
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                                                </select>
                                            </div>
                                            <!-- /.fld -->
                                        </div>
                                        <!-- /.lbl-cnt -->
                                    </div>
                                    <!-- /.col -->
                                    <div class=\"col col-sm-3 col-md-5 no-padding\">
                                        <div class=\"lbl-cnt\"><span class=\"lbl\">";
            // line 65
            echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
            echo "</span>
                                            <div class=\"fld inline\">
                                                <select id=\"input-limit\" class=\"form-control\"
                                                        onchange=\"location = this.value;\">
                                                    ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 70
                echo "                                                        ";
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 71
                    echo "                                                            <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\"
                                                                    selected=\"selected\">";
                    // line 72
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
                                                        ";
                } else {
                    // line 74
                    echo "                                                            <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
                                                        ";
                }
                // line 76
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "                                                </select>
                                            </div>
                                            <!-- /.fld -->
                                        </div>
                                        <!-- /.lbl-cnt -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <div class=\"search-result-container \">
                            <div id=\"myTabContent\" class=\"tab-content category-list\">
                                <div class=\"tab-pane active \" id=\"grid-container\">
                                    <div class=\"category-product\">
                                        <div class=\"row\">
                                            ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 95
                echo "                                                <div class=\"col-sm-6 col-md-4 wow fadeInUp\">
                                                    <div class=\"products\">
                                                        <div class=\"product\">
                                                            <div class=\"product-image\">
                                                                <div class=\"image\">
                                                                    <a href=\"";
                // line 100
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"
                                                                       title=\"";
                // line 101
                echo $this->getAttribute($context["product"], "name", array());
                echo "\"> <img
                                                                                src=\"";
                // line 102
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\"
                                                                                alt=\"";
                // line 103
                echo $this->getAttribute($context["product"], "name", array());
                echo "\"
                                                                                title=\"";
                // line 104
                echo $this->getAttribute($context["product"], "name", array());
                echo "\"
                                                                                class=\"img-responsive\"/></a></div>
                                                                <!-- /.image -->
                                                                ";
                // line 107
                if ($this->getAttribute($context["product"], "percent", array())) {
                    // line 108
                    echo "                                                                    <div class=\"tag sale\"><span>-";
                    echo $this->getAttribute($context["product"], "percent", array());
                    echo "
                                                                            %</span></div>
                                                                ";
                }
                // line 111
                echo "                                                            </div>
                                                            <!-- /.product-image -->

                                                            <div class=\"product-info text-left\">
                                                                <h3 class=\"name\"><a href=\"";
                // line 115
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"
                                                                                    title=\"";
                // line 116
                echo $this->getAttribute($context["product"], "name", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a>
                                                                </h3>
                                                                <div class=\"product-price\">
                                                                    ";
                // line 119
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 120
                    echo "                                                                        ";
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 121
                        echo "                                                                            <span class=\"price\"> ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo " </span>
                                                                        ";
                    } else {
                        // line 123
                        echo "                                                                            <span class=\"price\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span>
                                                                            <span class=\"price-before-discount\">";
                        // line 124
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
                                                                        ";
                    }
                    // line 126
                    echo "                                                                    ";
                }
                // line 127
                echo "                                                                </div>
                                                                <!-- /.product-price -->
                                                            </div>
                                                            <!-- /.product-info -->
                                                            <div class=\"cart clearfix animate-effect\">
                                                                <div class=\"action\">
                                                                    <ul class=\"list-unstyled\">
                                                                        <li class=\"add-cart-button btn-group\">
                                                                            <button onclick=\"cart.add('";
                // line 135
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"
                                                                                    data-toggle=\"tooltip\"
                                                                                    class=\"btn btn-primary icon\"
                                                                                    type=\"button\"
                                                                                    title=\"";
                // line 139
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "\"><i
                                                                                        class=\"fa fa-shopping-cart\"></i>
                                                                            </button>
                                                                        </li>
                                                                        <li class=\"lnk wishlist\"><a
                                                                                    data-toggle=\"tooltip\"
                                                                                    class=\"add-to-cart\"
                                                                                    onclick=\"wishlist.add('";
                // line 146
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"
                                                                                    title=\"";
                // line 147
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\"> <i
                                                                                        class=\"icon fa fa-heart\"></i>
                                                                            </a></li>
                                                                        <li class=\"lnk\"><a data-toggle=\"tooltip\"
                                                                                           class=\"add-to-cart\"
                                                                                           onclick=\"compare.add('";
                // line 152
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"
                                                                                           title=\"";
                // line 153
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\">
                                                                                <i class=\"fa fa-signal\"
                                                                                   aria-hidden=\"true\"></i> </a></li>
                                                                    </ul>
                                                                </div>
                                                                <!-- /.action -->
                                                            </div>
                                                            <!-- /.cart -->
                                                        </div>
                                                        <!-- /.product -->

                                                    </div>
                                                    <!-- /.products -->
                                                </div>
                                                <!-- /.item -->
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 169
            echo "                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.category-product -->
                                </div>
                                <!-- /.tab-pane -->

                                <div class=\"tab-pane \" id=\"list-container\">
                                    <div class=\"category-product\">
                                        ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 179
                echo "                                            <div class=\"category-product-inner wow fadeInUp\">
                                                <div class=\"products\">
                                                    <div class=\"product-list product\">
                                                        <div class=\"row product-list-row\">
                                                            <div class=\"col col-sm-4 col-lg-4\">
                                                                <div class=\"product-image\">
                                                                    <div class=\"image\"><img src=\"";
                // line 185
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\"
                                                                                            alt=\"";
                // line 186
                echo $this->getAttribute($context["product"], "name", array());
                echo "\"
                                                                                            title=\"";
                // line 187
                echo $this->getAttribute($context["product"], "name", array());
                echo "\"
                                                                                            class=\"img-responsive\"/>
                                                                    </div>
                                                                </div>
                                                                <!-- /.product-image -->
                                                            </div>
                                                            <!-- /.col -->
                                                            <div class=\"col col-sm-8 col-lg-8\">
                                                                <div class=\"product-info\">
                                                                    <h3 class=\"name\"><a href=\"";
                // line 196
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"
                                                                                        title=\"";
                // line 197
                echo $this->getAttribute($context["product"], "name", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a>
                                                                    </h3>
                                                                    <div class=\"product-price\">
                                                                        ";
                // line 200
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 201
                    echo "                                                                            ";
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 202
                        echo "                                                                                <span class=\"price\"> ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo " </span>
                                                                            ";
                    } else {
                        // line 204
                        echo "                                                                                <span class=\"price\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span>
                                                                                <span class=\"price-before-discount\">";
                        // line 205
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
                                                                            ";
                    }
                    // line 207
                    echo "                                                                        ";
                }
                // line 208
                echo "                                                                    </div>
                                                                    <!-- /.product-price -->
                                                                    <div class=\"description m-t-10\">";
                // line 210
                echo $this->getAttribute($context["product"], "description", array());
                echo "</div>
                                                                    <div class=\"cart clearfix animate-effect\">
                                                                        <div class=\"action\">
                                                                            <ul class=\"list-unstyled\">
                                                                                <li class=\"add-cart-button btn-group\">
                                                                                    <button onclick=\"cart.add('";
                // line 215
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"
                                                                                            data-toggle=\"tooltip\"
                                                                                            class=\"btn btn-primary icon\"
                                                                                            type=\"button\"
                                                                                            title=\"";
                // line 219
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "\"><i
                                                                                                class=\"fa fa-shopping-cart\"></i>
                                                                                    </button>
                                                                                </li>
                                                                                <li class=\"lnk wishlist\"><a
                                                                                            data-toggle=\"tooltip\"
                                                                                            class=\"add-to-cart\"
                                                                                            onclick=\"wishlist.add('";
                // line 226
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"
                                                                                            title=\"";
                // line 227
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\">
                                                                                        <i class=\"icon fa fa-heart\"></i>
                                                                                    </a></li>
                                                                                <li class=\"lnk\"><a data-toggle=\"tooltip\"
                                                                                                   class=\"add-to-cart\"
                                                                                                   onclick=\"compare.add('";
                // line 232
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"
                                                                                                   title=\"";
                // line 233
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\">
                                                                                        <i class=\"fa fa-signal\"
                                                                                           aria-hidden=\"true\"></i> </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <!-- /.action -->
                                                                    </div>
                                                                    <!-- /.cart -->
                                                                </div>
                                                                <!-- /.product-info -->
                                                            </div>
                                                            <!-- /.col -->
                                                        </div>
                                                        <!-- /.product-list-row -->
                                                        ";
                // line 248
                if ($this->getAttribute($context["product"], "percent", array())) {
                    // line 249
                    echo "                                                            <div class=\"tag sale\"><span>-";
                    echo $this->getAttribute($context["product"], "percent", array());
                    echo "%</span>
                                                            </div>
                                                        ";
                }
                // line 252
                echo "                                                    </div>
                                                    <!-- /.product-list -->
                                                </div>
                                                <!-- /.products -->
                                            </div>
                                            <!-- /.category-product-inner -->
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 259
            echo "                                    </div>
                                    <!-- /.category-product -->
                                </div>
                                <!-- /.tab-pane #list-container -->
                            </div>
                            <!-- /.tab-content -->
                            <div class=\"clearfix filters-container\">
                                <div class=\"text-right\">
                                    <div class=\"pagination-container\">
                                        ";
            // line 268
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "
                                    </div>
                                    <div class=\"results-container\">
                                        ";
            // line 271
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "
                                    </div>
                                    <!-- /.pagination-container -->
                                </div>
                                <!-- /.text-right -->
                            </div>
                            <!-- /.filters-container -->
                        </div>
                    ";
        } else {
            // line 280
            echo "                        <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
                        <div class=\"buttons\">
                            <div class=\"pull-right\"><a href=\"";
            // line 282
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\"
                                                       class=\"btn btn-primary\">";
            // line 283
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a>
                            </div>
                        </div>
                    ";
        }
        // line 287
        echo "                    ";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
                </div>
            </div>
            <!--  CONTENT : END  -->
        </div>
        <!-- /.row -->
        ";
        // line 293
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
    </div>
    <!-- /.container -->
</div>
<!-- /#top-banner-and-menu -->
";
        // line 298
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
";
        // line 299
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "web/template/product/manufacturer_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  580 => 299,  576 => 298,  568 => 293,  558 => 287,  551 => 283,  547 => 282,  541 => 280,  529 => 271,  523 => 268,  512 => 259,  500 => 252,  493 => 249,  491 => 248,  473 => 233,  469 => 232,  461 => 227,  457 => 226,  447 => 219,  440 => 215,  432 => 210,  428 => 208,  425 => 207,  420 => 205,  415 => 204,  409 => 202,  406 => 201,  404 => 200,  396 => 197,  392 => 196,  380 => 187,  376 => 186,  372 => 185,  364 => 179,  360 => 178,  349 => 169,  327 => 153,  323 => 152,  315 => 147,  311 => 146,  301 => 139,  294 => 135,  284 => 127,  281 => 126,  276 => 124,  271 => 123,  265 => 121,  262 => 120,  260 => 119,  252 => 116,  248 => 115,  242 => 111,  235 => 108,  233 => 107,  227 => 104,  223 => 103,  219 => 102,  215 => 101,  211 => 100,  204 => 95,  200 => 94,  181 => 77,  175 => 76,  167 => 74,  162 => 72,  157 => 71,  154 => 70,  150 => 69,  143 => 65,  133 => 57,  127 => 56,  119 => 54,  114 => 52,  109 => 51,  106 => 50,  102 => 49,  95 => 45,  84 => 37,  79 => 35,  71 => 29,  69 => 28,  65 => 27,  56 => 21,  42 => 9,  31 => 7,  27 => 6,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="breadcrumb">*/
/*     <div class="container">*/
/*         <div class="breadcrumb-inner">*/
/*             <ul class="list-inline list-unstyled">*/
/*                 {% for breadcrumb in breadcrumbs %}*/
/*                     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*         <!-- /.breadcrumb-inner -->*/
/*     </div>*/
/*     <!-- /.container -->*/
/* </div>*/
/* <!-- /.breadcrumb -->*/
/* <div class="body-content outer-top-xs" id="top-banner-and-menu">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <!--  SIDEBAR  -->*/
/*             <div class="col-xs-12 col-sm-12 col-md-3 sidebar">*/
/*                 {{ column_left }}*/
/*             </div>*/
/*             <!--  SIDEBAR : END  -->*/
/*             <!--  CONTENT  -->*/
/*             <div class="col-xs-12 col-sm-12 col-md-9">*/
/*                 <div id="content">*/
/*                     <h2>{{ heading_title }}</h2>*/
/*                     {% if products %}*/
/*                         <div class="clearfix filters-container">*/
/*                             <div class="row">*/
/*                                 <div class="col col-sm-6 col-md-3">*/
/*                                     <div class="filter-tabs">*/
/*                                         <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">*/
/*                                             <li class="active"><a data-toggle="tab" href="#grid-container"><i*/
/*                                                             class="icon fa fa-th-large"></i>{{ text_grid }}</a></li>*/
/*                                             <li><a data-toggle="tab" href="#list-container"><i*/
/*                                                             class="icon fa fa-th-list"></i>{{ text_list }}</a></li>*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                     <!-- /.filter-tabs -->*/
/*                                 </div>*/
/*                                 <!-- /.col -->*/
/*                                 <div class="col col-sm-12 col-md-9">*/
/*                                     <div class="col col-sm-3 col-md-7 no-padding">*/
/*                                         <div class="lbl-cnt"><span class="lbl">{{ text_sort }}</span>*/
/*                                             <div class="fld inline">*/
/*                                                 <select id="input-sort" class="form-control"*/
/*                                                         onchange="location = this.value;">*/
/*                                                     {% for sorts in sorts %}*/
/*                                                         {% if sorts.value == '%s-%s'|format(sort, order) %}*/
/*                                                             <option value="{{ sorts.href }}"*/
/*                                                                     selected="selected">{{ sorts.text }}</option>*/
/*                                                         {% else %}*/
/*                                                             <option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/*                                                         {% endif %}*/
/*                                                     {% endfor %}*/
/*                                                 </select>*/
/*                                             </div>*/
/*                                             <!-- /.fld -->*/
/*                                         </div>*/
/*                                         <!-- /.lbl-cnt -->*/
/*                                     </div>*/
/*                                     <!-- /.col -->*/
/*                                     <div class="col col-sm-3 col-md-5 no-padding">*/
/*                                         <div class="lbl-cnt"><span class="lbl">{{ text_limit }}</span>*/
/*                                             <div class="fld inline">*/
/*                                                 <select id="input-limit" class="form-control"*/
/*                                                         onchange="location = this.value;">*/
/*                                                     {% for limits in limits %}*/
/*                                                         {% if limits.value == limit %}*/
/*                                                             <option value="{{ limits.href }}"*/
/*                                                                     selected="selected">{{ limits.text }}</option>*/
/*                                                         {% else %}*/
/*                                                             <option value="{{ limits.href }}">{{ limits.text }}</option>*/
/*                                                         {% endif %}*/
/*                                                     {% endfor %}*/
/*                                                 </select>*/
/*                                             </div>*/
/*                                             <!-- /.fld -->*/
/*                                         </div>*/
/*                                         <!-- /.lbl-cnt -->*/
/*                                     </div>*/
/*                                     <!-- /.col -->*/
/*                                 </div>*/
/*                                 <!-- /.col -->*/
/*                             </div>*/
/*                             <!-- /.row -->*/
/*                         </div>*/
/*                         <div class="search-result-container ">*/
/*                             <div id="myTabContent" class="tab-content category-list">*/
/*                                 <div class="tab-pane active " id="grid-container">*/
/*                                     <div class="category-product">*/
/*                                         <div class="row">*/
/*                                             {% for product in products %}*/
/*                                                 <div class="col-sm-6 col-md-4 wow fadeInUp">*/
/*                                                     <div class="products">*/
/*                                                         <div class="product">*/
/*                                                             <div class="product-image">*/
/*                                                                 <div class="image">*/
/*                                                                     <a href="{{ product.href }}"*/
/*                                                                        title="{{ product.name }}"> <img*/
/*                                                                                 src="{{ product.thumb }}"*/
/*                                                                                 alt="{{ product.name }}"*/
/*                                                                                 title="{{ product.name }}"*/
/*                                                                                 class="img-responsive"/></a></div>*/
/*                                                                 <!-- /.image -->*/
/*                                                                 {% if product.percent %}*/
/*                                                                     <div class="tag sale"><span>-{{ product.percent }}*/
/*                                                                             %</span></div>*/
/*                                                                 {% endif %}*/
/*                                                             </div>*/
/*                                                             <!-- /.product-image -->*/
/* */
/*                                                             <div class="product-info text-left">*/
/*                                                                 <h3 class="name"><a href="{{ product.href }}"*/
/*                                                                                     title="{{ product.name }}">{{ product.name }}</a>*/
/*                                                                 </h3>*/
/*                                                                 <div class="product-price">*/
/*                                                                     {% if product.price %}*/
/*                                                                         {% if not product.special %}*/
/*                                                                             <span class="price"> {{ product.price }} </span>*/
/*                                                                         {% else %}*/
/*                                                                             <span class="price">{{ product.special }}</span>*/
/*                                                                             <span class="price-before-discount">{{ product.price }}</span>*/
/*                                                                         {% endif %}*/
/*                                                                     {% endif %}*/
/*                                                                 </div>*/
/*                                                                 <!-- /.product-price -->*/
/*                                                             </div>*/
/*                                                             <!-- /.product-info -->*/
/*                                                             <div class="cart clearfix animate-effect">*/
/*                                                                 <div class="action">*/
/*                                                                     <ul class="list-unstyled">*/
/*                                                                         <li class="add-cart-button btn-group">*/
/*                                                                             <button onclick="cart.add('{{ product.product_id }}');"*/
/*                                                                                     data-toggle="tooltip"*/
/*                                                                                     class="btn btn-primary icon"*/
/*                                                                                     type="button"*/
/*                                                                                     title="{{ button_cart }}"><i*/
/*                                                                                         class="fa fa-shopping-cart"></i>*/
/*                                                                             </button>*/
/*                                                                         </li>*/
/*                                                                         <li class="lnk wishlist"><a*/
/*                                                                                     data-toggle="tooltip"*/
/*                                                                                     class="add-to-cart"*/
/*                                                                                     onclick="wishlist.add('{{ product.product_id }}');"*/
/*                                                                                     title="{{ button_wishlist }}"> <i*/
/*                                                                                         class="icon fa fa-heart"></i>*/
/*                                                                             </a></li>*/
/*                                                                         <li class="lnk"><a data-toggle="tooltip"*/
/*                                                                                            class="add-to-cart"*/
/*                                                                                            onclick="compare.add('{{ product.product_id }}');"*/
/*                                                                                            title="{{ button_compare }}">*/
/*                                                                                 <i class="fa fa-signal"*/
/*                                                                                    aria-hidden="true"></i> </a></li>*/
/*                                                                     </ul>*/
/*                                                                 </div>*/
/*                                                                 <!-- /.action -->*/
/*                                                             </div>*/
/*                                                             <!-- /.cart -->*/
/*                                                         </div>*/
/*                                                         <!-- /.product -->*/
/* */
/*                                                     </div>*/
/*                                                     <!-- /.products -->*/
/*                                                 </div>*/
/*                                                 <!-- /.item -->*/
/*                                             {% endfor %}*/
/*                                         </div>*/
/*                                         <!-- /.row -->*/
/*                                     </div>*/
/*                                     <!-- /.category-product -->*/
/*                                 </div>*/
/*                                 <!-- /.tab-pane -->*/
/* */
/*                                 <div class="tab-pane " id="list-container">*/
/*                                     <div class="category-product">*/
/*                                         {% for product in products %}*/
/*                                             <div class="category-product-inner wow fadeInUp">*/
/*                                                 <div class="products">*/
/*                                                     <div class="product-list product">*/
/*                                                         <div class="row product-list-row">*/
/*                                                             <div class="col col-sm-4 col-lg-4">*/
/*                                                                 <div class="product-image">*/
/*                                                                     <div class="image"><img src="{{ product.thumb }}"*/
/*                                                                                             alt="{{ product.name }}"*/
/*                                                                                             title="{{ product.name }}"*/
/*                                                                                             class="img-responsive"/>*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/*                                                                 <!-- /.product-image -->*/
/*                                                             </div>*/
/*                                                             <!-- /.col -->*/
/*                                                             <div class="col col-sm-8 col-lg-8">*/
/*                                                                 <div class="product-info">*/
/*                                                                     <h3 class="name"><a href="{{ product.href }}"*/
/*                                                                                         title="{{ product.name }}">{{ product.name }}</a>*/
/*                                                                     </h3>*/
/*                                                                     <div class="product-price">*/
/*                                                                         {% if product.price %}*/
/*                                                                             {% if not product.special %}*/
/*                                                                                 <span class="price"> {{ product.price }} </span>*/
/*                                                                             {% else %}*/
/*                                                                                 <span class="price">{{ product.special }}</span>*/
/*                                                                                 <span class="price-before-discount">{{ product.price }}</span>*/
/*                                                                             {% endif %}*/
/*                                                                         {% endif %}*/
/*                                                                     </div>*/
/*                                                                     <!-- /.product-price -->*/
/*                                                                     <div class="description m-t-10">{{ product.description }}</div>*/
/*                                                                     <div class="cart clearfix animate-effect">*/
/*                                                                         <div class="action">*/
/*                                                                             <ul class="list-unstyled">*/
/*                                                                                 <li class="add-cart-button btn-group">*/
/*                                                                                     <button onclick="cart.add('{{ product.product_id }}');"*/
/*                                                                                             data-toggle="tooltip"*/
/*                                                                                             class="btn btn-primary icon"*/
/*                                                                                             type="button"*/
/*                                                                                             title="{{ button_cart }}"><i*/
/*                                                                                                 class="fa fa-shopping-cart"></i>*/
/*                                                                                     </button>*/
/*                                                                                 </li>*/
/*                                                                                 <li class="lnk wishlist"><a*/
/*                                                                                             data-toggle="tooltip"*/
/*                                                                                             class="add-to-cart"*/
/*                                                                                             onclick="wishlist.add('{{ product.product_id }}');"*/
/*                                                                                             title="{{ button_wishlist }}">*/
/*                                                                                         <i class="icon fa fa-heart"></i>*/
/*                                                                                     </a></li>*/
/*                                                                                 <li class="lnk"><a data-toggle="tooltip"*/
/*                                                                                                    class="add-to-cart"*/
/*                                                                                                    onclick="compare.add('{{ product.product_id }}');"*/
/*                                                                                                    title="{{ button_compare }}">*/
/*                                                                                         <i class="fa fa-signal"*/
/*                                                                                            aria-hidden="true"></i> </a>*/
/*                                                                                 </li>*/
/*                                                                             </ul>*/
/*                                                                         </div>*/
/*                                                                         <!-- /.action -->*/
/*                                                                     </div>*/
/*                                                                     <!-- /.cart -->*/
/*                                                                 </div>*/
/*                                                                 <!-- /.product-info -->*/
/*                                                             </div>*/
/*                                                             <!-- /.col -->*/
/*                                                         </div>*/
/*                                                         <!-- /.product-list-row -->*/
/*                                                         {% if product.percent %}*/
/*                                                             <div class="tag sale"><span>-{{ product.percent }}%</span>*/
/*                                                             </div>*/
/*                                                         {% endif %}*/
/*                                                     </div>*/
/*                                                     <!-- /.product-list -->*/
/*                                                 </div>*/
/*                                                 <!-- /.products -->*/
/*                                             </div>*/
/*                                             <!-- /.category-product-inner -->*/
/*                                         {% endfor %}*/
/*                                     </div>*/
/*                                     <!-- /.category-product -->*/
/*                                 </div>*/
/*                                 <!-- /.tab-pane #list-container -->*/
/*                             </div>*/
/*                             <!-- /.tab-content -->*/
/*                             <div class="clearfix filters-container">*/
/*                                 <div class="text-right">*/
/*                                     <div class="pagination-container">*/
/*                                         {{ pagination }}*/
/*                                     </div>*/
/*                                     <div class="results-container">*/
/*                                         {{ results }}*/
/*                                     </div>*/
/*                                     <!-- /.pagination-container -->*/
/*                                 </div>*/
/*                                 <!-- /.text-right -->*/
/*                             </div>*/
/*                             <!-- /.filters-container -->*/
/*                         </div>*/
/*                     {% else %}*/
/*                         <p>{{ text_empty }}</p>*/
/*                         <div class="buttons">*/
/*                             <div class="pull-right"><a href="{{ continue }}"*/
/*                                                        class="btn btn-primary">{{ button_continue }}</a>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     {{ content_top }}*/
/*                 </div>*/
/*             </div>*/
/*             <!--  CONTENT : END  -->*/
/*         </div>*/
/*         <!-- /.row -->*/
/*         {{ content_bottom }}*/
/*     </div>*/
/*     <!-- /.container -->*/
/* </div>*/
/* <!-- /#top-banner-and-menu -->*/
/* {{ column_right }}*/
/* {{ footer }}*/

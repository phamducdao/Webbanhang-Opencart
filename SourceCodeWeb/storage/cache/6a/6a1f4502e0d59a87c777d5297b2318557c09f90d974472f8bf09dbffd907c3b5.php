<?php

/* __string_template__ecab2b007f1cf94c864959dcec69d0923fb457f671e6c16e7367e6b0973e469f */
class __TwigTemplate_ab5ca71992f7b3bb9245f60cc4ebfebeff360773ef5d5e3d52dcc6f493258edb extends Twig_Template
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
<div class=\"body-content outer-top-xs single-product\">
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

                    <div class=\"detail-block\">
                        <div class=\"row  wow fadeInUp\">
                            ";
        // line 30
        if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["images"]) ? $context["images"] : null))) {
            // line 31
            echo "                            <div class=\"col-xs-12 col-sm-6 col-md-5 gallery-holder\">
                                <div class=\"product-item-holder size-big single-product-gallery small-gallery\">

                                    <div id=\"owl-single-product\">
                                        ";
            // line 35
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 36
                echo "                                        <div class=\"single-product-gallery-item\" id=\"slide-thumb\">
                                            <a data-lightbox=\"image-1\" data-title=\"";
                // line 37
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" href=\"";
                echo (isset($context["popup"]) ? $context["popup"] : null);
                echo "\">
                                                <img class=\"img-responsive\" alt=\"";
                // line 38
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" src=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" data-echo=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" />
                                            </a>
                                        </div><!-- /.single-product-gallery-item -->
                                        ";
            }
            // line 42
            echo "                                        ";
            if ((isset($context["images"]) ? $context["images"] : null)) {
                // line 43
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
                foreach ($context['_seq'] as $context["key"] => $context["image"]) {
                    // line 44
                    echo "                                            <div class=\"single-product-gallery-item\" id=\"slide-image-";
                    echo $context["key"];
                    echo "\">
                                                <a data-lightbox=\"image-1\" data-title=\"";
                    // line 45
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" href=\"";
                    echo $this->getAttribute($context["image"], "popup", array());
                    echo "\">
                                                    <img class=\"img-responsive\" alt=\"";
                    // line 46
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" src=\"";
                    echo $this->getAttribute($context["image"], "thumb", array());
                    echo "\" data-echo=\"";
                    echo $this->getAttribute($context["image"], "thumb", array());
                    echo "\" />
                                                </a>
                                            </div><!-- /.single-product-gallery-item -->
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "                                        ";
            }
            // line 51
            echo "                                    </div><!-- /.single-product-slider -->
                                    <div class=\"single-product-gallery-thumbs gallery-thumbs\">
                                        <div id=\"owl-single-product-thumbnails\">
                                            ";
            // line 54
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 55
                echo "                                                <div class=\"item\">
                                                    <a class=\"horizontal-thumb active\" data-target=\"#owl-single-product\" data-slide=\"1\" href=\"#slide-thumb\">
                                                        <img class=\"img-responsive\" width=\"85\" alt=\"";
                // line 57
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" src=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" data-echo=\"";
                echo (isset($context["popup"]) ? $context["popup"] : null);
                echo "\" />
                                                    </a>
                                                </div>
                                            ";
            }
            // line 61
            echo "                                            ";
            if ((isset($context["images"]) ? $context["images"] : null)) {
                // line 62
                echo "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
                foreach ($context['_seq'] as $context["key"] => $context["image"]) {
                    // line 63
                    echo "                                                    <div class=\"item\">
                                                        <a class=\"horizontal-thumb active\" data-target=\"#owl-single-product\" data-slide=\"1\" href=\"#slide-image-";
                    // line 64
                    echo $context["key"];
                    echo "\">
                                                            <img class=\"img-responsive\" width=\"85\" alt=\"";
                    // line 65
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" src=\"";
                    echo $this->getAttribute($context["image"], "thumb", array());
                    echo "\" data-echo=\"";
                    echo $this->getAttribute($context["image"], "popup", array());
                    echo "\" />
                                                        </a>
                                                    </div>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "                                            ";
            }
            // line 70
            echo "                                        </div><!-- /#owl-single-product-thumbnails -->
                                    </div><!-- /.gallery-thumbs -->
                                </div><!-- /.single-product-gallery -->
                            </div><!-- /.gallery-holder -->
                            ";
        }
        // line 75
        echo "                            <div class='col-sm-6 col-md-7 product-info-block'>
                                <div class=\"product-info\">
                                    <h1 class=\"name\">";
        // line 77
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
                                    <div class=\"product-info-description\">
                                        <ul class=\"list-unstyled\"> 
                                            ";
        // line 80
        if ((isset($context["manufacturer"]) ? $context["manufacturer"] : null)) {
            // line 81
            echo "                                                <li>";
            echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
            echo " <a href=\"";
            echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
            echo "\">";
            echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
            echo "</a></li>
                                            ";
        }
        // line 83
        echo "                                            <li>";
        echo (isset($context["text_model"]) ? $context["text_model"] : null);
        echo " ";
        echo (isset($context["model"]) ? $context["model"] : null);
        echo "</li>
                                            ";
        // line 84
        if ((isset($context["reward"]) ? $context["reward"] : null)) {
            // line 85
            echo "                                                <li>";
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo " ";
            echo (isset($context["reward"]) ? $context["reward"] : null);
            echo "</li>
                                            ";
        }
        // line 87
        echo "                                            <li>";
        echo (isset($context["text_stock"]) ? $context["text_stock"] : null);
        echo " ";
        echo (isset($context["stock"]) ? $context["stock"] : null);
        echo "</li>
                                         \t<li><img alt=\"\" src=\"https://khoedeptainha.vn/FileUploads/imgfile/1(1).png\" style=\"color: rgb(255, 0, 0); width: 21px; height: 21px;\">Cam kết chính hãng 100%</li>
\t\t\t\t\t\t\t\t\t\t\t<li><img alt=\"\" src=\"https://khoedeptainha.vn/FileUploads/imgfile/1(1).png\" style=\"color: rgb(255, 0, 0); width: 21px; height: 21px;\"> Đổi trả hàng trong 7 ngày</li>
                                          \t<li><img alt=\"\" src=\"https://khoedeptainha.vn/FileUploads/imgfile/1(1).png\" style=\"color: rgb(255, 0, 0); width: 21px; height: 21px;\"> Được kiểm tra hàng trước khi nhận</li>

                                        </ul>
                                        ";
        // line 93
        if ((isset($context["price"]) ? $context["price"] : null)) {
            // line 94
            echo "                                            <ul class=\"list-unstyled\">
                                                ";
            // line 95
            if ( !(isset($context["special"]) ? $context["special"] : null)) {
                // line 96
                echo "                                                    <li> Giá bán:
                                                      <span style=\"color:red ; font-size:20px;\">";
                // line 97
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</span>
                                                    </li>
                                                ";
            } else {
                // line 100
                echo "                                                    
                                                    <li> Giá bán:
                                                      <span style=\"color:red ; font-size:20px;\">";
                // line 102
                echo (isset($context["special"]) ? $context["special"] : null);
                echo "</span>
                                                      <span style=\"text-decoration: line-through;font-size:12px ;\">";
                // line 103
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</span>
                                                       <span style=\"color:red ; font-size:12px;\">";
                // line 104
                echo (isset($context["percent"]) ? $context["percent"] : null);
                echo "</span>

                                                    </li>
                                                ";
            }
            // line 108
            echo "                                               
                                                ";
            // line 109
            if ((isset($context["discounts"]) ? $context["discounts"] : null)) {
                // line 110
                echo "                                                    <li>
                                                        <hr>
                                                    </li>
                                                    ";
                // line 113
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["discounts"]) ? $context["discounts"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 114
                    echo "                                                        <li>";
                    echo $this->getAttribute($context["discount"], "quantity", array());
                    echo (isset($context["text_discount"]) ? $context["text_discount"] : null);
                    echo $this->getAttribute($context["discount"], "price", array());
                    echo "</li>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 116
                echo "                                                ";
            }
            // line 117
            echo "                                            </ul>
                                        ";
        }
        // line 119
        echo "                                        <div id=\"product\">
                                            ";
        // line 120
        if ((isset($context["options"]) ? $context["options"] : null)) {
            // line 121
            echo "                                                <hr>
                                                <h3>";
            // line 122
            echo (isset($context["text_option"]) ? $context["text_option"] : null);
            echo "</h3>
                                                ";
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 124
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "select")) {
                    // line 125
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\"
                                                                   for=\"input-option";
                    // line 127
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <select name=\"option[";
                    // line 128
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\"
                                                                    id=\"input-option";
                    // line 129
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">
                                                                <option value=\"\">";
                    // line 130
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
                                                                ";
                    // line 131
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 132
                        echo "                                                                    <option value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                                                                        ";
                        // line 133
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 134
                            echo "                                                                            (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                                                                        ";
                        }
                        // line 135
                        echo " </option>
                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 137
                    echo "                                                            </select>
                                                        </div>
                                                    ";
                }
                // line 140
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "radio")) {
                    // line 141
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\">";
                    // line 142
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <div id=\"input-option";
                    // line 143
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 144
                        echo "                                                                    <div class=\"radio\">
                                                                        <label>
                                                                            <input type=\"radio\"
                                                                                   name=\"option[";
                        // line 147
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\"
                                                                                   value=\"";
                        // line 148
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\"/>
                                                                            ";
                        // line 149
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\"
                                                                                                             alt=\"";
                            // line 150
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\"
                                                                                                             class=\"img-thumbnail\"/> ";
                        }
                        // line 152
                        echo "                                                                            ";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                                                                            ";
                        // line 153
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 154
                            echo "                                                                                (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                                                                            ";
                        }
                        // line 155
                        echo " </label>
                                                                    </div>
                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 157
                    echo " </div>
                                                        </div>
                                                    ";
                }
                // line 160
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "checkbox")) {
                    // line 161
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\">";
                    // line 162
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <div id=\"input-option";
                    // line 163
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 164
                        echo "                                                                    <div class=\"checkbox\">
                                                                        <label>
                                                                            <input type=\"checkbox\"
                                                                                   name=\"option[";
                        // line 167
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "][]\"
                                                                                   value=\"";
                        // line 168
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\"/>
                                                                            ";
                        // line 169
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\"
                                                                                                             alt=\"";
                            // line 170
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\"
                                                                                                             class=\"img-thumbnail\"/> ";
                        }
                        // line 172
                        echo "                                                                            ";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                                                                            ";
                        // line 173
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 174
                            echo "                                                                                (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                                                                            ";
                        }
                        // line 175
                        echo " </label>
                                                                    </div>
                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 177
                    echo " </div>
                                                        </div>
                                                    ";
                }
                // line 180
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "text")) {
                    // line 181
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\"
                                                                   for=\"input-option";
                    // line 183
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <input type=\"text\" name=\"option[";
                    // line 184
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\"
                                                                   value=\"";
                    // line 185
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\"
                                                                   id=\"input-option";
                    // line 186
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\"/>
                                                        </div>
                                                    ";
                }
                // line 189
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "textarea")) {
                    // line 190
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\"
                                                                   for=\"input-option";
                    // line 192
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <textarea name=\"option[";
                    // line 193
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" rows=\"5\"
                                                                      placeholder=\"";
                    // line 194
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\"
                                                                      id=\"input-option";
                    // line 195
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"
                                                                      class=\"form-control\">";
                    // line 196
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</textarea>
                                                        </div>
                                                    ";
                }
                // line 199
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "file")) {
                    // line 200
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\">";
                    // line 201
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <button type=\"button\" id=\"button-upload";
                    // line 202
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"
                                                                    data-loading-text=\"";
                    // line 203
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\"
                                                                    class=\"btn btn-default btn-block\"><i
                                                                        class=\"fa fa-upload\"></i> ";
                    // line 205
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
                                                            <input type=\"hidden\" name=\"option[";
                    // line 206
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"\"
                                                                   id=\"input-option";
                    // line 207
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"/>
                                                        </div>
                                                    ";
                }
                // line 210
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "date")) {
                    // line 211
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\"
                                                                   for=\"input-option";
                    // line 213
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <div class=\"input-group date\">
                                                                <input type=\"text\" name=\"option[";
                    // line 215
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\"
                                                                       value=\"";
                    // line 216
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\"
                                                                       id=\"input-option";
                    // line 217
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"
                                                                       class=\"form-control\"/>
                                                                <span class=\"input-group-btn\">
                                                                    <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                                                                </span></div>
                                                        </div>
                                                    ";
                }
                // line 224
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "datetime")) {
                    // line 225
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\"
                                                                   for=\"input-option";
                    // line 227
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <div class=\"input-group datetime\">
                                                                <input type=\"text\" name=\"option[";
                    // line 229
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\"
                                                                       value=\"";
                    // line 230
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\"
                                                                       id=\"input-option";
                    // line 231
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"
                                                                       class=\"form-control\"/>
                                                                <span class=\"input-group-btn\">
                                                                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                                                                </span></div>
                                                        </div>
                                                    ";
                }
                // line 238
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "time")) {
                    // line 239
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\"
                                                                   for=\"input-option";
                    // line 241
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <div class=\"input-group time\">
                                                                <input type=\"text\" name=\"option[";
                    // line 243
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\"
                                                                       value=\"";
                    // line 244
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"HH:mm\"
                                                                       id=\"input-option";
                    // line 245
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"
                                                                       class=\"form-control\"/>
                                                                <span class=\"input-group-btn\">
                                                                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                                                                </span></div>
                                                        </div>
                                                    ";
                }
                // line 252
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 253
            echo "                                            ";
        }
        // line 254
        echo "                                            ";
        if ((isset($context["recurrings"]) ? $context["recurrings"] : null)) {
            // line 255
            echo "                                                <hr>
                                                <h3>";
            // line 256
            echo (isset($context["text_payment_recurring"]) ? $context["text_payment_recurring"] : null);
            echo "</h3>
                                                <div class=\"form-group required\">
                                                    <select name=\"recurring_id\" class=\"form-control\">
                                                        <option value=\"\">";
            // line 259
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
                                                        ";
            // line 260
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 261
                echo "                                                            <option value=\"";
                echo $this->getAttribute($context["recurring"], "recurring_id", array());
                echo "\">";
                echo $this->getAttribute($context["recurring"], "name", array());
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 263
            echo "                                                    </select>
                                                    <div class=\"help-block\" id=\"recurring-description\"></div>
                                                </div>
                                            ";
        }
        // line 267
        echo "                                            <div class=\"form-group\">
                                                <label class=\"control-label\" for=\"input-quantity\">";
        // line 268
        echo (isset($context["entry_qty"]) ? $context["entry_qty"] : null);
        echo "</label>
                                                <input type=\"text\" name=\"quantity\" value=\"";
        // line 269
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo "\" size=\"2\" id=\"input-quantity\"
                                                       class=\"form-control\"/>
                                                <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 271
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "\"/>
                                                <br/>
                                                <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 273
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\"
                                                        class=\"btn btn-primary btn-lg btn-block\">";
        // line 274
        echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
        echo "</button>
                                            </div>
                                            ";
        // line 276
        if (((isset($context["minimum"]) ? $context["minimum"] : null) > 1)) {
            // line 277
            echo "                                                <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo (isset($context["text_minimum"]) ? $context["text_minimum"] : null);
            echo "</div>
                                            ";
        }
        // line 278
        echo "</div>
                                        ";
        // line 279
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 280
            echo "                                            <div class=\"rating\">
                                                <p>";
            // line 281
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 282
                echo "                                                        ";
                if (((isset($context["rating"]) ? $context["rating"] : null) < $context["i"])) {
                    echo "<span class=\"fa fa-stack\"><i
                                                                    class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    // line 283
                    echo "<span
                                                                class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i
                                                                    class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
                // line 286
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " <a href=\"\"
                                                                    onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            // line 287
            echo (isset($context["reviews"]) ? $context["reviews"] : null);
            echo "</a>
                                                    / <a href=\"\"
                                                         onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            // line 289
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</a>
                                                </p>
                                                <hr>
                                                <!-- AddThis Button BEGIN -->
                                                <div class=\"addthis_toolbox addthis_default_style\" data-url=\"";
            // line 293
            echo (isset($context["share"]) ? $context["share"] : null);
            echo "\"><a
                                                            class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a> <a
                                                            class=\"addthis_button_tweet\"></a> <a class=\"addthis_button_pinterest_pinit\"></a>
                                                    <a class=\"addthis_counter addthis_pill_style\"></a></div>
                                                <script type=\"text/javascript\"
                                                        src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e\"></script>
                                                <!-- AddThis Button END -->
                                            </div>
                                      <div class=\"boxcust\">
\t    \t\t\t\t\t\t\t\t<span id=\"alertcallforme\"></span>
\t    \t\t\t\t\t\t\t\t<h4>TƯ VẤN NHANH</h4>
                                        <form method=\"post\" action=\"http://zombiegarden.club/index.php?route=test/test\">
\t    \t\t\t\t\t\t\t\t<span id=\"formcallme\"></span>
                                        <input type=\"text\" value=\"";
            // line 306
            echo (isset($context["product_id"]) ? $context["product_id"] : null);
            echo "\" name=\"product_id\" style=\" display:  none;\">
\t    \t\t\t\t\t\t\t\t<input type=\"text\" id=\"txt-cus-name\" name=\"name\" class=\"cus-name\" placeholder=\"Họ và tên\">
\t    \t\t\t\t\t\t\t\t<input type=\"tel\" id=\"txt-cus-phone\" name=\"phone\" class=\"cus-phone\" placeholder=\"Để lại số điện thoại, chúng tôi gọi lại ngay\">
\t    \t\t\t\t\t\t\t\t<button>GỬI</button>
                                        </form>
\t    \t\t\t\t\t\t\t\t<div class=\"clr\"></div>
\t   \t\t\t\t\t\t\t\t</div>
                                        ";
        }
        // line 314
        echo "                                    </div>
                                </div><!-- /.product-info -->
                            </div><!-- /.col-sm-7 -->
                        </div><!-- /.row -->
                    </div>

                    <div class=\"product-tabs inner-bottom-xs  wow fadeInUp\" style=\"padding: 10px;\">
                        <ul class=\"nav nav-tabs\">
                            <li class=\"active\">
                                <a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 323
        echo (isset($context["tab_description"]) ? $context["tab_description"] : null);
        echo "</a></li>
                            ";
        // line 324
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 325
            echo "                                <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo (isset($context["tab_attribute"]) ? $context["tab_attribute"] : null);
            echo "</a></li>
                            ";
        }
        // line 327
        echo "                            ";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 328
            echo "                                <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo (isset($context["tab_review"]) ? $context["tab_review"] : null);
            echo "</a></li>
                            ";
        }
        // line 330
        echo "                        </ul>
                        <div class=\"tab-content\">
                            <div class=\"tab-pane active\" id=\"tab-description\">
                                ";
        // line 333
        echo (isset($context["description"]) ? $context["description"] : null);
        echo "
                                ";
        // line 334
        if ((isset($context["tags"]) ? $context["tags"] : null)) {
            // line 335
            echo "                                    <hr>
                                    <p>";
            // line 336
            echo (isset($context["text_tags"]) ? $context["text_tags"] : null);
            echo "
                                        ";
            // line 337
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 338
                echo "                                            ";
                if (($context["i"] < (twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null)) - 1))) {
                    echo " <a href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                    echo "</a>,
                                            ";
                } else {
                    // line 339
                    echo " <a href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                    echo "</a> ";
                }
                // line 340
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
                                ";
        }
        // line 342
        echo "                            </div>
                            ";
        // line 343
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 344
            echo "                                <div class=\"tab-pane\" id=\"tab-specification\">
                                    <table class=\"table table-bordered\">
                                        ";
            // line 346
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 347
                echo "                                            <thead>
                                            <tr>
                                                <td colspan=\"2\"><strong>";
                // line 349
                echo $this->getAttribute($context["attribute_group"], "name", array());
                echo "</strong></td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
                // line 353
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attribute_group"], "attribute", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 354
                    echo "                                                <tr>
                                                    <td>";
                    // line 355
                    echo $this->getAttribute($context["attribute"], "name", array());
                    echo "</td>
                                                    <td>";
                    // line 356
                    echo $this->getAttribute($context["attribute"], "text", array());
                    echo "</td>
                                                </tr>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 359
                echo "                                            </tbody>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 361
            echo "                                    </table>
                                </div>
                            ";
        }
        // line 364
        echo "                            ";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 365
            echo "                                <div class=\"tab-pane\" id=\"tab-review\">
                                    <form class=\"form-horizontal\" id=\"form-review\">
                                        <div id=\"review\"></div>
                                        <h2>";
            // line 368
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</h2>
                                        ";
            // line 369
            if ((isset($context["review_guest"]) ? $context["review_guest"] : null)) {
                // line 370
                echo "                                            <div class=\"form-group required\">
                                                <div class=\"col-sm-12\">
                                                    <label class=\"control-label\" for=\"input-name\">";
                // line 372
                echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
                echo "</label>
                                                    <input type=\"text\" name=\"name\" value=\"";
                // line 373
                echo (isset($context["customer_name"]) ? $context["customer_name"] : null);
                echo "\"
                                                           id=\"input-name\" class=\"form-control\"/>
                                                </div>
                                            </div>
                                            <div class=\"form-group required\">
                                                <div class=\"col-sm-12\">
                                                    <label class=\"control-label\"
                                                           for=\"input-review\">";
                // line 380
                echo (isset($context["entry_review"]) ? $context["entry_review"] : null);
                echo "</label>
                                                    <textarea name=\"text\" rows=\"5\" id=\"input-review\"
                                                              class=\"form-control\"></textarea>
                                                    <div class=\"help-block\">";
                // line 383
                echo (isset($context["text_note"]) ? $context["text_note"] : null);
                echo "</div>
                                                </div>
                                            </div>
                                            <div class=\"form-group required\">
                                                <div class=\"col-sm-12\">
                                                    <label class=\"control-label\">";
                // line 388
                echo (isset($context["entry_rating"]) ? $context["entry_rating"] : null);
                echo "</label>
                                                    &nbsp;&nbsp;&nbsp; ";
                // line 389
                echo (isset($context["entry_bad"]) ? $context["entry_bad"] : null);
                echo "&nbsp;
                                                    <input type=\"radio\" name=\"rating\" value=\"1\"/>
                                                    &nbsp;
                                                    <input type=\"radio\" name=\"rating\" value=\"2\"/>
                                                    &nbsp;
                                                    <input type=\"radio\" name=\"rating\" value=\"3\"/>
                                                    &nbsp;
                                                    <input type=\"radio\" name=\"rating\" value=\"4\"/>
                                                    &nbsp;
                                                    <input type=\"radio\" name=\"rating\" value=\"5\"/>
                                                    &nbsp;";
                // line 399
                echo (isset($context["entry_good"]) ? $context["entry_good"] : null);
                echo "</div>
                                            </div>
                                            ";
                // line 401
                echo (isset($context["captcha"]) ? $context["captcha"] : null);
                echo "
                                            <div class=\"buttons clearfix\">
                                                <div class=\"pull-right\">
                                                    <button type=\"button\" id=\"button-review\"
                                                            data-loading-text=\"";
                // line 405
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\"
                                                            class=\"btn btn-primary\">";
                // line 406
                echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
                echo "</button>
                                                </div>
                                            </div>
                                        ";
            } else {
                // line 410
                echo "                                            ";
                echo (isset($context["text_login"]) ? $context["text_login"] : null);
                echo "
                                        ";
            }
            // line 412
            echo "                                    </form>
                                </div>
                            ";
        }
        // line 415
        echo "                        </div>
                    </div><!-- /.product-tabs -->

                    ";
        // line 418
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 419
            echo "                    <section class=\"section featured-product wow fadeInUp\">
                        <h3 class=\"section-title\">";
            // line 420
            echo (isset($context["text_related"]) ? $context["text_related"] : null);
            echo "</h3>
                        <div class=\"owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs\">
                            ";
            // line 422
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 423
                echo "                            <div class=\"item item-carousel\">
                                <div class=\"products\">

                                    <div class=\"product\">
                                        <div class=\"product-image\">
                                            <div class=\"image\">
                                                <a href=\"";
                // line 429
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\"> <img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive\"/></a>
                                            </div><!-- /.image -->
                                            ";
                // line 431
                if ($this->getAttribute($context["product"], "percent", array())) {
                    // line 432
                    echo "                                                <div class=\"tag sale\"><span>-";
                    echo $this->getAttribute($context["product"], "percent", array());
                    echo "%</span></div>
                                            ";
                }
                // line 434
                echo "                                        </div><!-- /.product-image -->


                                        <div class=\"product-info text-left\">
                                            <h3 class=\"name\"><a href=\"";
                // line 438
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h3>
                                            <div class=\"product-price\">
                                                ";
                // line 440
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 441
                    echo "                                                    ";
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 442
                        echo "                                                        <span class=\"price\"> ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo " </span>
                                                    ";
                    } else {
                        // line 444
                        echo "                                                        <span class=\"price\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span>
                                                        <span class=\"price-before-discount\">";
                        // line 445
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
                                                    ";
                    }
                    // line 447
                    echo "                                                ";
                }
                // line 448
                echo "                                            </div><!-- /.product-price -->
                                        </div><!-- /.product-info -->
                                        <div class=\"cart clearfix animate-effect\">
                                            <div class=\"action\">
                                                <ul class=\"list-unstyled\">
                                                    <li class=\"add-cart-button btn-group\">
                                                        <button onclick=\"cart.add('";
                // line 454
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" data-toggle=\"tooltip\" class=\"btn btn-primary icon\" type=\"button\" title=\"";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "\"> <i class=\"fa fa-shopping-cart\"></i> </button>
                                                    </li>
                                                    <li class=\"lnk wishlist\"> <a data-toggle=\"tooltip\" class=\"add-to-cart\" onclick=\"wishlist.add('";
                // line 456
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" title=\"";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\"> <i class=\"icon fa fa-heart\"></i> </a> </li>
                                                    <li class=\"lnk\"> <a data-toggle=\"tooltip\" class=\"add-to-cart\" onclick=\"compare.add('";
                // line 457
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" title=\"";
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\"> <i class=\"fa fa-signal\" aria-hidden=\"true\">111</i> </a> </li>
                                                </ul>
                                            </div><!-- /.action -->
                                        </div><!-- /.cart -->
                                    </div><!-- /.product -->

                                </div><!-- /.products -->
                            </div><!-- /.item -->
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 466
            echo "                        </div><!-- /.home-owl-carousel -->
                    </section><!-- /.section -->
                    ";
        }
        // line 469
        echo "                    ";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
                </div>
            </div>
            <!--  CONTENT : END  -->
        </div>
        <!-- /.row -->
        ";
        // line 475
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
    </div>
    <!-- /.container -->
</div>
<!-- /#top-banner-and-menu -->
";
        // line 480
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
<script type=\"text/javascript\"><!--
    \$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function () {
        \$.ajax({
            url: 'index.php?route=product/product/getRecurringDescription',
            type: 'post',
            data: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
            dataType: 'json',
            beforeSend: function () {
                \$('#recurring-description').html('');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();

                if (json['success']) {
                    \$('#recurring-description').html(json['success']);
                }
            }
        });
    });
    //--></script>
<script type=\"text/javascript\"><!--
    \$('#button-cart').on('click', function () {
        \$.ajax({
            url: 'index.php?route=checkout/cart/add',
            type: 'post',
            data: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
            dataType: 'json',
            beforeSend: function () {
                \$('#button-cart').button('loading');
            },
            complete: function () {
                \$('#button-cart').button('reset');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');

                if (json['error']) {
                    if (json['error']['option']) {
                        for (i in json['error']['option']) {
                            var element = \$('#input-option' + i.replace('_', '-'));

                            if (element.parent().hasClass('input-group')) {
                                element.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
                            } else {
                                element.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
                            }
                        }
                    }

                    if (json['error']['recurring']) {
                        \$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
                    }

                    // Highlight any found errors
                    \$('.text-danger').parent().addClass('has-error');
                }

                if (json['success']) {
                    \$('header').after('<div class=\"container\"><div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div></div>');

                    setTimeout(function () {
                        \$('#cart #cart-total').text(json['total']);
                        //\$('#cart > button').html('<span class=\"count\" id=\"cart-total\">' + json['total'] + '</span>');
                    }, 100);

                    \$('html, body').animate({ scrollTop: 0 }, 'slow');

                    \$('#cart > ul').load('index.php?route=common/cart/info ul li');
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
    //--></script>
<script type=\"text/javascript\"><!--
    \$('.date').datetimepicker({
        language: '";
        // line 560
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
        pickTime: false
    });

    \$('.datetime').datetimepicker({
        language: '";
        // line 565
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
        pickDate: true,
        pickTime: true
    });

    \$('.time').datetimepicker({
        language: '";
        // line 571
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
        pickDate: false
    });

    \$('button[id^=\\'button-upload\\']').on('click', function () {
        var node = this;

        \$('#form-upload').remove();

        \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

        \$('#form-upload input[name=\\'file\\']').trigger('click');

        if (typeof timer != 'undefined') {
            clearInterval(timer);
        }

        timer = setInterval(function () {
            if (\$('#form-upload input[name=\\'file\\']').val() != '') {
                clearInterval(timer);

                \$.ajax({
                    url: 'index.php?route=tool/upload',
                    type: 'post',
                    dataType: 'json',
                    data: new FormData(\$('#form-upload')[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function () {
                        \$(node).button('loading');
                    },
                    complete: function () {
                        \$(node).button('reset');
                    },
                    success: function (json) {
                        \$('.text-danger').remove();

                        if (json['error']) {
                            \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
                        }

                        if (json['success']) {
                            alert(json['success']);

                            \$(node).parent().find('input').val(json['code']);
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        }, 500);
    });
    //--></script>
<script type=\"text/javascript\"><!--
    \$('#review').delegate('.pagination a', 'click', function (e) {
        e.preventDefault();

        \$('#review').fadeOut('slow');

        \$('#review').load(this.href);

        \$('#review').fadeIn('slow');
    });

    \$('#review').load('index.php?route=product/product/review&product_id=";
        // line 638
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');

    \$('#button-review').on('click', function () {
        \$.ajax({
            url: 'index.php?route=product/product/write&product_id=";
        // line 642
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "',
            type: 'post',
            dataType: 'json',
            data: \$(\"#form-review\").serialize(),
            beforeSend: function () {
                \$('#button-review').button('loading');
            },
            complete: function () {
                \$('#button-review').button('reset');
            },
            success: function (json) {
                \$('.alert-dismissible').remove();

                if (json['error']) {
                    \$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
                }

                if (json['success']) {
                    \$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

                    \$('input[name=\\'name\\']').val('');
                    \$('textarea[name=\\'text\\']').val('');
                    \$('input[name=\\'rating\\']:checked').prop('checked', false);
                }
            }
        });
    });

    \$(document).ready(function () {
        \$('.thumbnails').magnificPopup({
            type: 'image',
            delegate: 'a',
            gallery: {
                enabled: true
            }
        });
    });
    //--></script>
";
        // line 680
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "__string_template__ecab2b007f1cf94c864959dcec69d0923fb457f671e6c16e7367e6b0973e469f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1510 => 680,  1469 => 642,  1462 => 638,  1392 => 571,  1383 => 565,  1375 => 560,  1292 => 480,  1284 => 475,  1274 => 469,  1269 => 466,  1252 => 457,  1246 => 456,  1239 => 454,  1231 => 448,  1228 => 447,  1223 => 445,  1218 => 444,  1212 => 442,  1209 => 441,  1207 => 440,  1198 => 438,  1192 => 434,  1186 => 432,  1184 => 431,  1171 => 429,  1163 => 423,  1159 => 422,  1154 => 420,  1151 => 419,  1149 => 418,  1144 => 415,  1139 => 412,  1133 => 410,  1126 => 406,  1122 => 405,  1115 => 401,  1110 => 399,  1097 => 389,  1093 => 388,  1085 => 383,  1079 => 380,  1069 => 373,  1065 => 372,  1061 => 370,  1059 => 369,  1055 => 368,  1050 => 365,  1047 => 364,  1042 => 361,  1035 => 359,  1026 => 356,  1022 => 355,  1019 => 354,  1015 => 353,  1008 => 349,  1004 => 347,  1000 => 346,  996 => 344,  994 => 343,  991 => 342,  982 => 340,  975 => 339,  965 => 338,  961 => 337,  957 => 336,  954 => 335,  952 => 334,  948 => 333,  943 => 330,  937 => 328,  934 => 327,  928 => 325,  926 => 324,  922 => 323,  911 => 314,  900 => 306,  884 => 293,  877 => 289,  872 => 287,  864 => 286,  859 => 283,  853 => 282,  849 => 281,  846 => 280,  844 => 279,  841 => 278,  835 => 277,  833 => 276,  828 => 274,  824 => 273,  819 => 271,  814 => 269,  810 => 268,  807 => 267,  801 => 263,  790 => 261,  786 => 260,  782 => 259,  776 => 256,  773 => 255,  770 => 254,  767 => 253,  761 => 252,  751 => 245,  747 => 244,  743 => 243,  736 => 241,  728 => 239,  725 => 238,  715 => 231,  711 => 230,  707 => 229,  700 => 227,  692 => 225,  689 => 224,  679 => 217,  675 => 216,  671 => 215,  664 => 213,  656 => 211,  653 => 210,  647 => 207,  643 => 206,  639 => 205,  634 => 203,  630 => 202,  626 => 201,  619 => 200,  616 => 199,  610 => 196,  606 => 195,  602 => 194,  598 => 193,  592 => 192,  584 => 190,  581 => 189,  575 => 186,  569 => 185,  565 => 184,  559 => 183,  551 => 181,  548 => 180,  543 => 177,  535 => 175,  528 => 174,  526 => 173,  521 => 172,  508 => 170,  502 => 169,  498 => 168,  494 => 167,  489 => 164,  483 => 163,  479 => 162,  472 => 161,  469 => 160,  464 => 157,  456 => 155,  449 => 154,  447 => 153,  442 => 152,  429 => 150,  423 => 149,  419 => 148,  415 => 147,  410 => 144,  404 => 143,  400 => 142,  393 => 141,  390 => 140,  385 => 137,  378 => 135,  371 => 134,  369 => 133,  362 => 132,  358 => 131,  354 => 130,  350 => 129,  346 => 128,  340 => 127,  332 => 125,  329 => 124,  325 => 123,  321 => 122,  318 => 121,  316 => 120,  313 => 119,  309 => 117,  306 => 116,  295 => 114,  291 => 113,  286 => 110,  284 => 109,  281 => 108,  274 => 104,  270 => 103,  266 => 102,  262 => 100,  256 => 97,  253 => 96,  251 => 95,  248 => 94,  246 => 93,  234 => 87,  226 => 85,  224 => 84,  217 => 83,  207 => 81,  205 => 80,  199 => 77,  195 => 75,  188 => 70,  185 => 69,  171 => 65,  167 => 64,  164 => 63,  159 => 62,  156 => 61,  145 => 57,  141 => 55,  139 => 54,  134 => 51,  131 => 50,  117 => 46,  111 => 45,  106 => 44,  101 => 43,  98 => 42,  87 => 38,  81 => 37,  78 => 36,  76 => 35,  70 => 31,  68 => 30,  56 => 21,  42 => 9,  31 => 7,  27 => 6,  19 => 1,);
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
/* <div class="body-content outer-top-xs single-product">*/
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
/* */
/*                     <div class="detail-block">*/
/*                         <div class="row  wow fadeInUp">*/
/*                             {% if thumb or images %}*/
/*                             <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">*/
/*                                 <div class="product-item-holder size-big single-product-gallery small-gallery">*/
/* */
/*                                     <div id="owl-single-product">*/
/*                                         {% if thumb %}*/
/*                                         <div class="single-product-gallery-item" id="slide-thumb">*/
/*                                             <a data-lightbox="image-1" data-title="{{ heading_title }}" href="{{ popup }}">*/
/*                                                 <img class="img-responsive" alt="{{ heading_title }}" src="{{ thumb }}" data-echo="{{ thumb }}" />*/
/*                                             </a>*/
/*                                         </div><!-- /.single-product-gallery-item -->*/
/*                                         {% endif %}*/
/*                                         {% if images %}*/
/*                                             {% for key, image in images %}*/
/*                                             <div class="single-product-gallery-item" id="slide-image-{{ key }}">*/
/*                                                 <a data-lightbox="image-1" data-title="{{ heading_title }}" href="{{ image.popup }}">*/
/*                                                     <img class="img-responsive" alt="{{ heading_title }}" src="{{ image.thumb }}" data-echo="{{ image.thumb }}" />*/
/*                                                 </a>*/
/*                                             </div><!-- /.single-product-gallery-item -->*/
/*                                             {% endfor %}*/
/*                                         {% endif %}*/
/*                                     </div><!-- /.single-product-slider -->*/
/*                                     <div class="single-product-gallery-thumbs gallery-thumbs">*/
/*                                         <div id="owl-single-product-thumbnails">*/
/*                                             {% if thumb %}*/
/*                                                 <div class="item">*/
/*                                                     <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide-thumb">*/
/*                                                         <img class="img-responsive" width="85" alt="{{ heading_title }}" src="{{ thumb }}" data-echo="{{ popup }}" />*/
/*                                                     </a>*/
/*                                                 </div>*/
/*                                             {% endif %}*/
/*                                             {% if images %}*/
/*                                                 {% for key, image in images %}*/
/*                                                     <div class="item">*/
/*                                                         <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide-image-{{ key }}">*/
/*                                                             <img class="img-responsive" width="85" alt="{{ heading_title }}" src="{{ image.thumb }}" data-echo="{{ image.popup }}" />*/
/*                                                         </a>*/
/*                                                     </div>*/
/*                                                 {% endfor %}*/
/*                                             {% endif %}*/
/*                                         </div><!-- /#owl-single-product-thumbnails -->*/
/*                                     </div><!-- /.gallery-thumbs -->*/
/*                                 </div><!-- /.single-product-gallery -->*/
/*                             </div><!-- /.gallery-holder -->*/
/*                             {% endif %}*/
/*                             <div class='col-sm-6 col-md-7 product-info-block'>*/
/*                                 <div class="product-info">*/
/*                                     <h1 class="name">{{ heading_title }}</h1>*/
/*                                     <div class="product-info-description">*/
/*                                         <ul class="list-unstyled"> */
/*                                             {% if manufacturer %}*/
/*                                                 <li>{{ text_manufacturer }} <a href="{{ manufacturers }}">{{ manufacturer }}</a></li>*/
/*                                             {% endif %}*/
/*                                             <li>{{ text_model }} {{ model}}</li>*/
/*                                             {% if reward %}*/
/*                                                 <li>{{ text_reward }} {{ reward }}</li>*/
/*                                             {% endif %}*/
/*                                             <li>{{ text_stock }} {{ stock }}</li>*/
/*                                          	<li><img alt="" src="https://khoedeptainha.vn/FileUploads/imgfile/1(1).png" style="color: rgb(255, 0, 0); width: 21px; height: 21px;">Cam kết chính hãng 100%</li>*/
/* 											<li><img alt="" src="https://khoedeptainha.vn/FileUploads/imgfile/1(1).png" style="color: rgb(255, 0, 0); width: 21px; height: 21px;"> Đổi trả hàng trong 7 ngày</li>*/
/*                                           	<li><img alt="" src="https://khoedeptainha.vn/FileUploads/imgfile/1(1).png" style="color: rgb(255, 0, 0); width: 21px; height: 21px;"> Được kiểm tra hàng trước khi nhận</li>*/
/* */
/*                                         </ul>*/
/*                                         {% if price %}*/
/*                                             <ul class="list-unstyled">*/
/*                                                 {% if not special %}*/
/*                                                     <li> Giá bán:*/
/*                                                       <span style="color:red ; font-size:20px;">{{ price }}</span>*/
/*                                                     </li>*/
/*                                                 {% else %}*/
/*                                                     */
/*                                                     <li> Giá bán:*/
/*                                                       <span style="color:red ; font-size:20px;">{{ special }}</span>*/
/*                                                       <span style="text-decoration: line-through;font-size:12px ;">{{ price }}</span>*/
/*                                                        <span style="color:red ; font-size:12px;">{{ percent }}</span>*/
/* */
/*                                                     </li>*/
/*                                                 {% endif %}*/
/*                                                */
/*                                                 {% if discounts %}*/
/*                                                     <li>*/
/*                                                         <hr>*/
/*                                                     </li>*/
/*                                                     {% for discount in discounts %}*/
/*                                                         <li>{{ discount.quantity }}{{ text_discount }}{{ discount.price }}</li>*/
/*                                                     {% endfor %}*/
/*                                                 {% endif %}*/
/*                                             </ul>*/
/*                                         {% endif %}*/
/*                                         <div id="product">*/
/*                                             {% if options %}*/
/*                                                 <hr>*/
/*                                                 <h3>{{ text_option }}</h3>*/
/*                                                 {% for option in options %}*/
/*                                                     {% if option.type == 'select' %}*/
/*                                                         <div class="form-group{% if option.required %} required {% endif %}">*/
/*                                                             <label class="control-label"*/
/*                                                                    for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                                                             <select name="option[{{ option.product_option_id }}]"*/
/*                                                                     id="input-option{{ option.product_option_id }}" class="form-control">*/
/*                                                                 <option value="">{{ text_select }}</option>*/
/*                                                                 {% for option_value in option.product_option_value %}*/
/*                                                                     <option value="{{ option_value.product_option_value_id }}">{{ option_value.name }}*/
/*                                                                         {% if option_value.price %}*/
/*                                                                             ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                                                                         {% endif %} </option>*/
/*                                                                 {% endfor %}*/
/*                                                             </select>*/
/*                                                         </div>*/
/*                                                     {% endif %}*/
/*                                                     {% if option.type == 'radio' %}*/
/*                                                         <div class="form-group{% if option.required %} required {% endif %}">*/
/*                                                             <label class="control-label">{{ option.name }}</label>*/
/*                                                             <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                                                                     <div class="radio">*/
/*                                                                         <label>*/
/*                                                                             <input type="radio"*/
/*                                                                                    name="option[{{ option.product_option_id }}]"*/
/*                                                                                    value="{{ option_value.product_option_value_id }}"/>*/
/*                                                                             {% if option_value.image %} <img src="{{ option_value.image }}"*/
/*                                                                                                              alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}"*/
/*                                                                                                              class="img-thumbnail"/> {% endif %}*/
/*                                                                             {{ option_value.name }}*/
/*                                                                             {% if option_value.price %}*/
/*                                                                                 ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                                                                             {% endif %} </label>*/
/*                                                                     </div>*/
/*                                                                 {% endfor %} </div>*/
/*                                                         </div>*/
/*                                                     {% endif %}*/
/*                                                     {% if option.type == 'checkbox' %}*/
/*                                                         <div class="form-group{% if option.required %} required {% endif %}">*/
/*                                                             <label class="control-label">{{ option.name }}</label>*/
/*                                                             <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                                                                     <div class="checkbox">*/
/*                                                                         <label>*/
/*                                                                             <input type="checkbox"*/
/*                                                                                    name="option[{{ option.product_option_id }}][]"*/
/*                                                                                    value="{{ option_value.product_option_value_id }}"/>*/
/*                                                                             {% if option_value.image %} <img src="{{ option_value.image }}"*/
/*                                                                                                              alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}"*/
/*                                                                                                              class="img-thumbnail"/> {% endif %}*/
/*                                                                             {{ option_value.name }}*/
/*                                                                             {% if option_value.price %}*/
/*                                                                                 ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                                                                             {% endif %} </label>*/
/*                                                                     </div>*/
/*                                                                 {% endfor %} </div>*/
/*                                                         </div>*/
/*                                                     {% endif %}*/
/*                                                     {% if option.type == 'text' %}*/
/*                                                         <div class="form-group{% if option.required %} required {% endif %}">*/
/*                                                             <label class="control-label"*/
/*                                                                    for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                                                             <input type="text" name="option[{{ option.product_option_id }}]"*/
/*                                                                    value="{{ option.value }}" placeholder="{{ option.name }}"*/
/*                                                                    id="input-option{{ option.product_option_id }}" class="form-control"/>*/
/*                                                         </div>*/
/*                                                     {% endif %}*/
/*                                                     {% if option.type == 'textarea' %}*/
/*                                                         <div class="form-group{% if option.required %} required {% endif %}">*/
/*                                                             <label class="control-label"*/
/*                                                                    for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                                                             <textarea name="option[{{ option.product_option_id }}]" rows="5"*/
/*                                                                       placeholder="{{ option.name }}"*/
/*                                                                       id="input-option{{ option.product_option_id }}"*/
/*                                                                       class="form-control">{{ option.value }}</textarea>*/
/*                                                         </div>*/
/*                                                     {% endif %}*/
/*                                                     {% if option.type == 'file' %}*/
/*                                                         <div class="form-group{% if option.required %} required {% endif %}">*/
/*                                                             <label class="control-label">{{ option.name }}</label>*/
/*                                                             <button type="button" id="button-upload{{ option.product_option_id }}"*/
/*                                                                     data-loading-text="{{ text_loading }}"*/
/*                                                                     class="btn btn-default btn-block"><i*/
/*                                                                         class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*                                                             <input type="hidden" name="option[{{ option.product_option_id }}]" value=""*/
/*                                                                    id="input-option{{ option.product_option_id }}"/>*/
/*                                                         </div>*/
/*                                                     {% endif %}*/
/*                                                     {% if option.type == 'date' %}*/
/*                                                         <div class="form-group{% if option.required %} required {% endif %}">*/
/*                                                             <label class="control-label"*/
/*                                                                    for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                                                             <div class="input-group date">*/
/*                                                                 <input type="text" name="option[{{ option.product_option_id }}]"*/
/*                                                                        value="{{ option.value }}" data-date-format="YYYY-MM-DD"*/
/*                                                                        id="input-option{{ option.product_option_id }}"*/
/*                                                                        class="form-control"/>*/
/*                                                                 <span class="input-group-btn">*/
/*                                                                     <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                                                                 </span></div>*/
/*                                                         </div>*/
/*                                                     {% endif %}*/
/*                                                     {% if option.type == 'datetime' %}*/
/*                                                         <div class="form-group{% if option.required %} required {% endif %}">*/
/*                                                             <label class="control-label"*/
/*                                                                    for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                                                             <div class="input-group datetime">*/
/*                                                                 <input type="text" name="option[{{ option.product_option_id }}]"*/
/*                                                                        value="{{ option.value }}" data-date-format="YYYY-MM-DD HH:mm"*/
/*                                                                        id="input-option{{ option.product_option_id }}"*/
/*                                                                        class="form-control"/>*/
/*                                                                 <span class="input-group-btn">*/
/*                                                                     <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                                                                 </span></div>*/
/*                                                         </div>*/
/*                                                     {% endif %}*/
/*                                                     {% if option.type == 'time' %}*/
/*                                                         <div class="form-group{% if option.required %} required {% endif %}">*/
/*                                                             <label class="control-label"*/
/*                                                                    for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                                                             <div class="input-group time">*/
/*                                                                 <input type="text" name="option[{{ option.product_option_id }}]"*/
/*                                                                        value="{{ option.value }}" data-date-format="HH:mm"*/
/*                                                                        id="input-option{{ option.product_option_id }}"*/
/*                                                                        class="form-control"/>*/
/*                                                                 <span class="input-group-btn">*/
/*                                                                     <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                                                                 </span></div>*/
/*                                                         </div>*/
/*                                                     {% endif %}*/
/*                                                 {% endfor %}*/
/*                                             {% endif %}*/
/*                                             {% if recurrings %}*/
/*                                                 <hr>*/
/*                                                 <h3>{{ text_payment_recurring }}</h3>*/
/*                                                 <div class="form-group required">*/
/*                                                     <select name="recurring_id" class="form-control">*/
/*                                                         <option value="">{{ text_select }}</option>*/
/*                                                         {% for recurring in recurrings %}*/
/*                                                             <option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>*/
/*                                                         {% endfor %}*/
/*                                                     </select>*/
/*                                                     <div class="help-block" id="recurring-description"></div>*/
/*                                                 </div>*/
/*                                             {% endif %}*/
/*                                             <div class="form-group">*/
/*                                                 <label class="control-label" for="input-quantity">{{ entry_qty }}</label>*/
/*                                                 <input type="text" name="quantity" value="{{ minimum }}" size="2" id="input-quantity"*/
/*                                                        class="form-control"/>*/
/*                                                 <input type="hidden" name="product_id" value="{{ product_id }}"/>*/
/*                                                 <br/>*/
/*                                                 <button type="button" id="button-cart" data-loading-text="{{ text_loading }}"*/
/*                                                         class="btn btn-primary btn-lg btn-block">{{ button_cart }}</button>*/
/*                                             </div>*/
/*                                             {% if minimum > 1 %}*/
/*                                                 <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_minimum }}</div>*/
/*                                             {% endif %}</div>*/
/*                                         {% if review_status %}*/
/*                                             <div class="rating">*/
/*                                                 <p>{% for i in 1..5 %}*/
/*                                                         {% if rating < i %}<span class="fa fa-stack"><i*/
/*                                                                     class="fa fa-star-o fa-stack-1x"></i></span>{% else %}<span*/
/*                                                                 class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i*/
/*                                                                     class="fa fa-star-o fa-stack-1x"></i></span>{% endif %}*/
/*                                                     {% endfor %} <a href=""*/
/*                                                                     onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">{{ reviews }}</a>*/
/*                                                     / <a href=""*/
/*                                                          onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">{{ text_write }}</a>*/
/*                                                 </p>*/
/*                                                 <hr>*/
/*                                                 <!-- AddThis Button BEGIN -->*/
/*                                                 <div class="addthis_toolbox addthis_default_style" data-url="{{ share }}"><a*/
/*                                                             class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a*/
/*                                                             class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"></a>*/
/*                                                     <a class="addthis_counter addthis_pill_style"></a></div>*/
/*                                                 <script type="text/javascript"*/
/*                                                         src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e"></script>*/
/*                                                 <!-- AddThis Button END -->*/
/*                                             </div>*/
/*                                       <div class="boxcust">*/
/* 	    								<span id="alertcallforme"></span>*/
/* 	    								<h4>TƯ VẤN NHANH</h4>*/
/*                                         <form method="post" action="http://zombiegarden.club/index.php?route=test/test">*/
/* 	    								<span id="formcallme"></span>*/
/*                                         <input type="text" value="{{ product_id }}" name="product_id" style=" display:  none;">*/
/* 	    								<input type="text" id="txt-cus-name" name="name" class="cus-name" placeholder="Họ và tên">*/
/* 	    								<input type="tel" id="txt-cus-phone" name="phone" class="cus-phone" placeholder="Để lại số điện thoại, chúng tôi gọi lại ngay">*/
/* 	    								<button>GỬI</button>*/
/*                                         </form>*/
/* 	    								<div class="clr"></div>*/
/* 	   								</div>*/
/*                                         {% endif %}*/
/*                                     </div>*/
/*                                 </div><!-- /.product-info -->*/
/*                             </div><!-- /.col-sm-7 -->*/
/*                         </div><!-- /.row -->*/
/*                     </div>*/
/* */
/*                     <div class="product-tabs inner-bottom-xs  wow fadeInUp" style="padding: 10px;">*/
/*                         <ul class="nav nav-tabs">*/
/*                             <li class="active">*/
/*                                 <a href="#tab-description" data-toggle="tab">{{ tab_description }}</a></li>*/
/*                             {% if attribute_groups %}*/
/*                                 <li><a href="#tab-specification" data-toggle="tab">{{ tab_attribute }}</a></li>*/
/*                             {% endif %}*/
/*                             {% if review_status %}*/
/*                                 <li><a href="#tab-review" data-toggle="tab">{{ tab_review }}</a></li>*/
/*                             {% endif %}*/
/*                         </ul>*/
/*                         <div class="tab-content">*/
/*                             <div class="tab-pane active" id="tab-description">*/
/*                                 {{ description }}*/
/*                                 {% if tags %}*/
/*                                     <hr>*/
/*                                     <p>{{ text_tags }}*/
/*                                         {% for i in 0..tags|length %}*/
/*                                             {% if i < (tags|length - 1) %} <a href="{{ tags[i].href }}">{{ tags[i].tag }}</a>,*/
/*                                             {% else %} <a href="{{ tags[i].href }}">{{ tags[i].tag }}</a> {% endif %}*/
/*                                         {% endfor %} </p>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                             {% if attribute_groups %}*/
/*                                 <div class="tab-pane" id="tab-specification">*/
/*                                     <table class="table table-bordered">*/
/*                                         {% for attribute_group in attribute_groups %}*/
/*                                             <thead>*/
/*                                             <tr>*/
/*                                                 <td colspan="2"><strong>{{ attribute_group.name }}</strong></td>*/
/*                                             </tr>*/
/*                                             </thead>*/
/*                                             <tbody>*/
/*                                             {% for attribute in attribute_group.attribute %}*/
/*                                                 <tr>*/
/*                                                     <td>{{ attribute.name }}</td>*/
/*                                                     <td>{{ attribute.text }}</td>*/
/*                                                 </tr>*/
/*                                             {% endfor %}*/
/*                                             </tbody>*/
/*                                         {% endfor %}*/
/*                                     </table>*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                             {% if review_status %}*/
/*                                 <div class="tab-pane" id="tab-review">*/
/*                                     <form class="form-horizontal" id="form-review">*/
/*                                         <div id="review"></div>*/
/*                                         <h2>{{ text_write }}</h2>*/
/*                                         {% if review_guest %}*/
/*                                             <div class="form-group required">*/
/*                                                 <div class="col-sm-12">*/
/*                                                     <label class="control-label" for="input-name">{{ entry_name }}</label>*/
/*                                                     <input type="text" name="name" value="{{ customer_name }}"*/
/*                                                            id="input-name" class="form-control"/>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="form-group required">*/
/*                                                 <div class="col-sm-12">*/
/*                                                     <label class="control-label"*/
/*                                                            for="input-review">{{ entry_review }}</label>*/
/*                                                     <textarea name="text" rows="5" id="input-review"*/
/*                                                               class="form-control"></textarea>*/
/*                                                     <div class="help-block">{{ text_note }}</div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="form-group required">*/
/*                                                 <div class="col-sm-12">*/
/*                                                     <label class="control-label">{{ entry_rating }}</label>*/
/*                                                     &nbsp;&nbsp;&nbsp; {{ entry_bad }}&nbsp;*/
/*                                                     <input type="radio" name="rating" value="1"/>*/
/*                                                     &nbsp;*/
/*                                                     <input type="radio" name="rating" value="2"/>*/
/*                                                     &nbsp;*/
/*                                                     <input type="radio" name="rating" value="3"/>*/
/*                                                     &nbsp;*/
/*                                                     <input type="radio" name="rating" value="4"/>*/
/*                                                     &nbsp;*/
/*                                                     <input type="radio" name="rating" value="5"/>*/
/*                                                     &nbsp;{{ entry_good }}</div>*/
/*                                             </div>*/
/*                                             {{ captcha }}*/
/*                                             <div class="buttons clearfix">*/
/*                                                 <div class="pull-right">*/
/*                                                     <button type="button" id="button-review"*/
/*                                                             data-loading-text="{{ text_loading }}"*/
/*                                                             class="btn btn-primary">{{ button_continue }}</button>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         {% else %}*/
/*                                             {{ text_login }}*/
/*                                         {% endif %}*/
/*                                     </form>*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div><!-- /.product-tabs -->*/
/* */
/*                     {% if products %}*/
/*                     <section class="section featured-product wow fadeInUp">*/
/*                         <h3 class="section-title">{{ text_related }}</h3>*/
/*                         <div class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">*/
/*                             {% for product in products %}*/
/*                             <div class="item item-carousel">*/
/*                                 <div class="products">*/
/* */
/*                                     <div class="product">*/
/*                                         <div class="product-image">*/
/*                                             <div class="image">*/
/*                                                 <a href="{{ product.href }}" title="{{ product.name }}"> <img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive"/></a>*/
/*                                             </div><!-- /.image -->*/
/*                                             {% if product.percent %}*/
/*                                                 <div class="tag sale"><span>-{{ product.percent }}%</span></div>*/
/*                                             {% endif %}*/
/*                                         </div><!-- /.product-image -->*/
/* */
/* */
/*                                         <div class="product-info text-left">*/
/*                                             <h3 class="name"><a href="{{ product.href }}" title="{{ product.name }}">{{ product.name }}</a></h3>*/
/*                                             <div class="product-price">*/
/*                                                 {% if product.price %}*/
/*                                                     {% if not product.special %}*/
/*                                                         <span class="price"> {{ product.price }} </span>*/
/*                                                     {% else %}*/
/*                                                         <span class="price">{{ product.special }}</span>*/
/*                                                         <span class="price-before-discount">{{ product.price }}</span>*/
/*                                                     {% endif %}*/
/*                                                 {% endif %}*/
/*                                             </div><!-- /.product-price -->*/
/*                                         </div><!-- /.product-info -->*/
/*                                         <div class="cart clearfix animate-effect">*/
/*                                             <div class="action">*/
/*                                                 <ul class="list-unstyled">*/
/*                                                     <li class="add-cart-button btn-group">*/
/*                                                         <button onclick="cart.add('{{ product.product_id }}');" data-toggle="tooltip" class="btn btn-primary icon" type="button" title="{{ button_cart }}"> <i class="fa fa-shopping-cart"></i> </button>*/
/*                                                     </li>*/
/*                                                     <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart" onclick="wishlist.add('{{ product.product_id }}');" title="{{ button_wishlist }}"> <i class="icon fa fa-heart"></i> </a> </li>*/
/*                                                     <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" onclick="compare.add('{{ product.product_id }}');" title="{{ button_compare }}"> <i class="fa fa-signal" aria-hidden="true">111</i> </a> </li>*/
/*                                                 </ul>*/
/*                                             </div><!-- /.action -->*/
/*                                         </div><!-- /.cart -->*/
/*                                     </div><!-- /.product -->*/
/* */
/*                                 </div><!-- /.products -->*/
/*                             </div><!-- /.item -->*/
/*                             {% endfor %}*/
/*                         </div><!-- /.home-owl-carousel -->*/
/*                     </section><!-- /.section -->*/
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
/* <script type="text/javascript"><!--*/
/*     $('select[name=\'recurring_id\'], input[name="quantity"]').change(function () {*/
/*         $.ajax({*/
/*             url: 'index.php?route=product/product/getRecurringDescription',*/
/*             type: 'post',*/
/*             data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),*/
/*             dataType: 'json',*/
/*             beforeSend: function () {*/
/*                 $('#recurring-description').html('');*/
/*             },*/
/*             success: function (json) {*/
/*                 $('.alert-dismissible, .text-danger').remove();*/
/* */
/*                 if (json['success']) {*/
/*                     $('#recurring-description').html(json['success']);*/
/*                 }*/
/*             }*/
/*         });*/
/*     });*/
/*     //--></script>*/
/* <script type="text/javascript"><!--*/
/*     $('#button-cart').on('click', function () {*/
/*         $.ajax({*/
/*             url: 'index.php?route=checkout/cart/add',*/
/*             type: 'post',*/
/*             data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),*/
/*             dataType: 'json',*/
/*             beforeSend: function () {*/
/*                 $('#button-cart').button('loading');*/
/*             },*/
/*             complete: function () {*/
/*                 $('#button-cart').button('reset');*/
/*             },*/
/*             success: function (json) {*/
/*                 $('.alert-dismissible, .text-danger').remove();*/
/*                 $('.form-group').removeClass('has-error');*/
/* */
/*                 if (json['error']) {*/
/*                     if (json['error']['option']) {*/
/*                         for (i in json['error']['option']) {*/
/*                             var element = $('#input-option' + i.replace('_', '-'));*/
/* */
/*                             if (element.parent().hasClass('input-group')) {*/
/*                                 element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/*                             } else {*/
/*                                 element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/*                             }*/
/*                         }*/
/*                     }*/
/* */
/*                     if (json['error']['recurring']) {*/
/*                         $('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');*/
/*                     }*/
/* */
/*                     // Highlight any found errors*/
/*                     $('.text-danger').parent().addClass('has-error');*/
/*                 }*/
/* */
/*                 if (json['success']) {*/
/*                     $('header').after('<div class="container"><div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div></div>');*/
/* */
/*                     setTimeout(function () {*/
/*                         $('#cart #cart-total').text(json['total']);*/
/*                         //$('#cart > button').html('<span class="count" id="cart-total">' + json['total'] + '</span>');*/
/*                     }, 100);*/
/* */
/*                     $('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* */
/*                     $('#cart > ul').load('index.php?route=common/cart/info ul li');*/
/*                 }*/
/*             },*/
/*             error: function (xhr, ajaxOptions, thrownError) {*/
/*                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*             }*/
/*         });*/
/*     });*/
/*     //--></script>*/
/* <script type="text/javascript"><!--*/
/*     $('.date').datetimepicker({*/
/*         language: '{{ datepicker }}',*/
/*         pickTime: false*/
/*     });*/
/* */
/*     $('.datetime').datetimepicker({*/
/*         language: '{{ datepicker }}',*/
/*         pickDate: true,*/
/*         pickTime: true*/
/*     });*/
/* */
/*     $('.time').datetimepicker({*/
/*         language: '{{ datepicker }}',*/
/*         pickDate: false*/
/*     });*/
/* */
/*     $('button[id^=\'button-upload\']').on('click', function () {*/
/*         var node = this;*/
/* */
/*         $('#form-upload').remove();*/
/* */
/*         $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/*         $('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/*         if (typeof timer != 'undefined') {*/
/*             clearInterval(timer);*/
/*         }*/
/* */
/*         timer = setInterval(function () {*/
/*             if ($('#form-upload input[name=\'file\']').val() != '') {*/
/*                 clearInterval(timer);*/
/* */
/*                 $.ajax({*/
/*                     url: 'index.php?route=tool/upload',*/
/*                     type: 'post',*/
/*                     dataType: 'json',*/
/*                     data: new FormData($('#form-upload')[0]),*/
/*                     cache: false,*/
/*                     contentType: false,*/
/*                     processData: false,*/
/*                     beforeSend: function () {*/
/*                         $(node).button('loading');*/
/*                     },*/
/*                     complete: function () {*/
/*                         $(node).button('reset');*/
/*                     },*/
/*                     success: function (json) {*/
/*                         $('.text-danger').remove();*/
/* */
/*                         if (json['error']) {*/
/*                             $(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');*/
/*                         }*/
/* */
/*                         if (json['success']) {*/
/*                             alert(json['success']);*/
/* */
/*                             $(node).parent().find('input').val(json['code']);*/
/*                         }*/
/*                     },*/
/*                     error: function (xhr, ajaxOptions, thrownError) {*/
/*                         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                     }*/
/*                 });*/
/*             }*/
/*         }, 500);*/
/*     });*/
/*     //--></script>*/
/* <script type="text/javascript"><!--*/
/*     $('#review').delegate('.pagination a', 'click', function (e) {*/
/*         e.preventDefault();*/
/* */
/*         $('#review').fadeOut('slow');*/
/* */
/*         $('#review').load(this.href);*/
/* */
/*         $('#review').fadeIn('slow');*/
/*     });*/
/* */
/*     $('#review').load('index.php?route=product/product/review&product_id={{ product_id }}');*/
/* */
/*     $('#button-review').on('click', function () {*/
/*         $.ajax({*/
/*             url: 'index.php?route=product/product/write&product_id={{ product_id }}',*/
/*             type: 'post',*/
/*             dataType: 'json',*/
/*             data: $("#form-review").serialize(),*/
/*             beforeSend: function () {*/
/*                 $('#button-review').button('loading');*/
/*             },*/
/*             complete: function () {*/
/*                 $('#button-review').button('reset');*/
/*             },*/
/*             success: function (json) {*/
/*                 $('.alert-dismissible').remove();*/
/* */
/*                 if (json['error']) {*/
/*                     $('#review').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/*                 }*/
/* */
/*                 if (json['success']) {*/
/*                     $('#review').after('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* */
/*                     $('input[name=\'name\']').val('');*/
/*                     $('textarea[name=\'text\']').val('');*/
/*                     $('input[name=\'rating\']:checked').prop('checked', false);*/
/*                 }*/
/*             }*/
/*         });*/
/*     });*/
/* */
/*     $(document).ready(function () {*/
/*         $('.thumbnails').magnificPopup({*/
/*             type: 'image',*/
/*             delegate: 'a',*/
/*             gallery: {*/
/*                 enabled: true*/
/*             }*/
/*         });*/
/*     });*/
/*     //--></script>*/
/* {{ footer }}*/

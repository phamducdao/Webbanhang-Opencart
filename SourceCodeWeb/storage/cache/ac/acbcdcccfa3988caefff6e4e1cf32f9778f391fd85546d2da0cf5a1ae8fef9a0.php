<?php

/* __string_template__5570a9104da778fe9b252bb69111ba2523f8778998f0ff50c33d48f408f114b5 */
class __TwigTemplate_fc441e916b887972958208c627157d7a253448d4b3ec1879c5d69e899c72d372 extends Twig_Template
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
                                                        <span style=\"text-decoration: line-through;font-size:20px ;\">";
                // line 103
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</span>

                                                    </li>
                                                ";
            }
            // line 107
            echo "                                               
                                                ";
            // line 108
            if ((isset($context["discounts"]) ? $context["discounts"] : null)) {
                // line 109
                echo "                                                    <li>
                                                        <hr>
                                                    </li>
                                                    ";
                // line 112
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["discounts"]) ? $context["discounts"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 113
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
                // line 115
                echo "                                                ";
            }
            // line 116
            echo "                                            </ul>
                                        ";
        }
        // line 118
        echo "                                        <div id=\"product\">
                                            ";
        // line 119
        if ((isset($context["options"]) ? $context["options"] : null)) {
            // line 120
            echo "                                                <hr>
                                                <h3>";
            // line 121
            echo (isset($context["text_option"]) ? $context["text_option"] : null);
            echo "</h3>
                                                ";
            // line 122
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 123
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "select")) {
                    // line 124
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\"
                                                                   for=\"input-option";
                    // line 126
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <select name=\"option[";
                    // line 127
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\"
                                                                    id=\"input-option";
                    // line 128
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">
                                                                <option value=\"\">";
                    // line 129
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
                                                                ";
                    // line 130
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 131
                        echo "                                                                    <option value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                                                                        ";
                        // line 132
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 133
                            echo "                                                                            (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                                                                        ";
                        }
                        // line 134
                        echo " </option>
                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 136
                    echo "                                                            </select>
                                                        </div>
                                                    ";
                }
                // line 139
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "radio")) {
                    // line 140
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\">";
                    // line 141
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <div id=\"input-option";
                    // line 142
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 143
                        echo "                                                                    <div class=\"radio\">
                                                                        <label>
                                                                            <input type=\"radio\"
                                                                                   name=\"option[";
                        // line 146
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\"
                                                                                   value=\"";
                        // line 147
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\"/>
                                                                            ";
                        // line 148
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\"
                                                                                                             alt=\"";
                            // line 149
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
                        // line 151
                        echo "                                                                            ";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                                                                            ";
                        // line 152
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 153
                            echo "                                                                                (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                                                                            ";
                        }
                        // line 154
                        echo " </label>
                                                                    </div>
                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 156
                    echo " </div>
                                                        </div>
                                                    ";
                }
                // line 159
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "checkbox")) {
                    // line 160
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\">";
                    // line 161
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <div id=\"input-option";
                    // line 162
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 163
                        echo "                                                                    <div class=\"checkbox\">
                                                                        <label>
                                                                            <input type=\"checkbox\"
                                                                                   name=\"option[";
                        // line 166
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "][]\"
                                                                                   value=\"";
                        // line 167
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\"/>
                                                                            ";
                        // line 168
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\"
                                                                                                             alt=\"";
                            // line 169
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
                        // line 171
                        echo "                                                                            ";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                                                                            ";
                        // line 172
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 173
                            echo "                                                                                (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                                                                            ";
                        }
                        // line 174
                        echo " </label>
                                                                    </div>
                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 176
                    echo " </div>
                                                        </div>
                                                    ";
                }
                // line 179
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "text")) {
                    // line 180
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\"
                                                                   for=\"input-option";
                    // line 182
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <input type=\"text\" name=\"option[";
                    // line 183
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\"
                                                                   value=\"";
                    // line 184
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\"
                                                                   id=\"input-option";
                    // line 185
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\"/>
                                                        </div>
                                                    ";
                }
                // line 188
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "textarea")) {
                    // line 189
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\"
                                                                   for=\"input-option";
                    // line 191
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <textarea name=\"option[";
                    // line 192
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" rows=\"5\"
                                                                      placeholder=\"";
                    // line 193
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\"
                                                                      id=\"input-option";
                    // line 194
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"
                                                                      class=\"form-control\">";
                    // line 195
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</textarea>
                                                        </div>
                                                    ";
                }
                // line 198
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "file")) {
                    // line 199
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\">";
                    // line 200
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <button type=\"button\" id=\"button-upload";
                    // line 201
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"
                                                                    data-loading-text=\"";
                    // line 202
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\"
                                                                    class=\"btn btn-default btn-block\"><i
                                                                        class=\"fa fa-upload\"></i> ";
                    // line 204
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
                                                            <input type=\"hidden\" name=\"option[";
                    // line 205
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"\"
                                                                   id=\"input-option";
                    // line 206
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"/>
                                                        </div>
                                                    ";
                }
                // line 209
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "date")) {
                    // line 210
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\"
                                                                   for=\"input-option";
                    // line 212
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <div class=\"input-group date\">
                                                                <input type=\"text\" name=\"option[";
                    // line 214
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\"
                                                                       value=\"";
                    // line 215
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\"
                                                                       id=\"input-option";
                    // line 216
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"
                                                                       class=\"form-control\"/>
                                                                <span class=\"input-group-btn\">
                                                                    <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                                                                </span></div>
                                                        </div>
                                                    ";
                }
                // line 223
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "datetime")) {
                    // line 224
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\"
                                                                   for=\"input-option";
                    // line 226
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <div class=\"input-group datetime\">
                                                                <input type=\"text\" name=\"option[";
                    // line 228
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\"
                                                                       value=\"";
                    // line 229
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\"
                                                                       id=\"input-option";
                    // line 230
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"
                                                                       class=\"form-control\"/>
                                                                <span class=\"input-group-btn\">
                                                                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                                                                </span></div>
                                                        </div>
                                                    ";
                }
                // line 237
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "time")) {
                    // line 238
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\"
                                                                   for=\"input-option";
                    // line 240
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <div class=\"input-group time\">
                                                                <input type=\"text\" name=\"option[";
                    // line 242
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\"
                                                                       value=\"";
                    // line 243
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"HH:mm\"
                                                                       id=\"input-option";
                    // line 244
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"
                                                                       class=\"form-control\"/>
                                                                <span class=\"input-group-btn\">
                                                                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                                                                </span></div>
                                                        </div>
                                                    ";
                }
                // line 251
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 252
            echo "                                            ";
        }
        // line 253
        echo "                                            ";
        if ((isset($context["recurrings"]) ? $context["recurrings"] : null)) {
            // line 254
            echo "                                                <hr>
                                                <h3>";
            // line 255
            echo (isset($context["text_payment_recurring"]) ? $context["text_payment_recurring"] : null);
            echo "</h3>
                                                <div class=\"form-group required\">
                                                    <select name=\"recurring_id\" class=\"form-control\">
                                                        <option value=\"\">";
            // line 258
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
                                                        ";
            // line 259
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 260
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
            // line 262
            echo "                                                    </select>
                                                    <div class=\"help-block\" id=\"recurring-description\"></div>
                                                </div>
                                            ";
        }
        // line 266
        echo "                                            <div class=\"form-group\">
                                                <label class=\"control-label\" for=\"input-quantity\">";
        // line 267
        echo (isset($context["entry_qty"]) ? $context["entry_qty"] : null);
        echo "</label>
                                                <input type=\"text\" name=\"quantity\" value=\"";
        // line 268
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo "\" size=\"2\" id=\"input-quantity\"
                                                       class=\"form-control\"/>
                                                <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 270
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "\"/>
                                                <br/>
                                                <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 272
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\"
                                                        class=\"btn btn-primary btn-lg btn-block\">";
        // line 273
        echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
        echo "</button>
                                            </div>
                                            ";
        // line 275
        if (((isset($context["minimum"]) ? $context["minimum"] : null) > 1)) {
            // line 276
            echo "                                                <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo (isset($context["text_minimum"]) ? $context["text_minimum"] : null);
            echo "</div>
                                            ";
        }
        // line 277
        echo "</div>
                                        ";
        // line 278
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 279
            echo "                                            <div class=\"rating\">
                                                <p>";
            // line 280
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 281
                echo "                                                        ";
                if (((isset($context["rating"]) ? $context["rating"] : null) < $context["i"])) {
                    echo "<span class=\"fa fa-stack\"><i
                                                                    class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    // line 282
                    echo "<span
                                                                class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i
                                                                    class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
                // line 285
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " <a href=\"\"
                                                                    onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            // line 286
            echo (isset($context["reviews"]) ? $context["reviews"] : null);
            echo "</a>
                                                    / <a href=\"\"
                                                         onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            // line 288
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</a>
                                                </p>
                                                <hr>
                                                <!-- AddThis Button BEGIN -->
                                                <div class=\"addthis_toolbox addthis_default_style\" data-url=\"";
            // line 292
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
            // line 305
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
        // line 313
        echo "                                    </div>
                                </div><!-- /.product-info -->
                            </div><!-- /.col-sm-7 -->
                        </div><!-- /.row -->
                    </div>

                    <div class=\"product-tabs inner-bottom-xs  wow fadeInUp\" style=\"padding: 10px;\">
                        <ul class=\"nav nav-tabs\">
                            <li class=\"active\">
                                <a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 322
        echo (isset($context["tab_description"]) ? $context["tab_description"] : null);
        echo "</a></li>
                            ";
        // line 323
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 324
            echo "                                <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo (isset($context["tab_attribute"]) ? $context["tab_attribute"] : null);
            echo "</a></li>
                            ";
        }
        // line 326
        echo "                            ";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 327
            echo "                                <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo (isset($context["tab_review"]) ? $context["tab_review"] : null);
            echo "</a></li>
                            ";
        }
        // line 329
        echo "                        </ul>
                        <div class=\"tab-content\">
                            <div class=\"tab-pane active\" id=\"tab-description\">
                                ";
        // line 332
        echo (isset($context["description"]) ? $context["description"] : null);
        echo "
                                ";
        // line 333
        if ((isset($context["tags"]) ? $context["tags"] : null)) {
            // line 334
            echo "                                    <hr>
                                    <p>";
            // line 335
            echo (isset($context["text_tags"]) ? $context["text_tags"] : null);
            echo "
                                        ";
            // line 336
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 337
                echo "                                            ";
                if (($context["i"] < (twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null)) - 1))) {
                    echo " <a href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                    echo "</a>,
                                            ";
                } else {
                    // line 338
                    echo " <a href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                    echo "</a> ";
                }
                // line 339
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
                                ";
        }
        // line 341
        echo "                            </div>
                            ";
        // line 342
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 343
            echo "                                <div class=\"tab-pane\" id=\"tab-specification\">
                                    <table class=\"table table-bordered\">
                                        ";
            // line 345
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 346
                echo "                                            <thead>
                                            <tr>
                                                <td colspan=\"2\"><strong>";
                // line 348
                echo $this->getAttribute($context["attribute_group"], "name", array());
                echo "</strong></td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
                // line 352
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attribute_group"], "attribute", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 353
                    echo "                                                <tr>
                                                    <td>";
                    // line 354
                    echo $this->getAttribute($context["attribute"], "name", array());
                    echo "</td>
                                                    <td>";
                    // line 355
                    echo $this->getAttribute($context["attribute"], "text", array());
                    echo "</td>
                                                </tr>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 358
                echo "                                            </tbody>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 360
            echo "                                    </table>
                                </div>
                            ";
        }
        // line 363
        echo "                            ";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 364
            echo "                                <div class=\"tab-pane\" id=\"tab-review\">
                                    <form class=\"form-horizontal\" id=\"form-review\">
                                        <div id=\"review\"></div>
                                        <h2>";
            // line 367
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</h2>
                                        ";
            // line 368
            if ((isset($context["review_guest"]) ? $context["review_guest"] : null)) {
                // line 369
                echo "                                            <div class=\"form-group required\">
                                                <div class=\"col-sm-12\">
                                                    <label class=\"control-label\" for=\"input-name\">";
                // line 371
                echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
                echo "</label>
                                                    <input type=\"text\" name=\"name\" value=\"";
                // line 372
                echo (isset($context["customer_name"]) ? $context["customer_name"] : null);
                echo "\"
                                                           id=\"input-name\" class=\"form-control\"/>
                                                </div>
                                            </div>
                                            <div class=\"form-group required\">
                                                <div class=\"col-sm-12\">
                                                    <label class=\"control-label\"
                                                           for=\"input-review\">";
                // line 379
                echo (isset($context["entry_review"]) ? $context["entry_review"] : null);
                echo "</label>
                                                    <textarea name=\"text\" rows=\"5\" id=\"input-review\"
                                                              class=\"form-control\"></textarea>
                                                    <div class=\"help-block\">";
                // line 382
                echo (isset($context["text_note"]) ? $context["text_note"] : null);
                echo "</div>
                                                </div>
                                            </div>
                                            <div class=\"form-group required\">
                                                <div class=\"col-sm-12\">
                                                    <label class=\"control-label\">";
                // line 387
                echo (isset($context["entry_rating"]) ? $context["entry_rating"] : null);
                echo "</label>
                                                    &nbsp;&nbsp;&nbsp; ";
                // line 388
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
                // line 398
                echo (isset($context["entry_good"]) ? $context["entry_good"] : null);
                echo "</div>
                                            </div>
                                            ";
                // line 400
                echo (isset($context["captcha"]) ? $context["captcha"] : null);
                echo "
                                            <div class=\"buttons clearfix\">
                                                <div class=\"pull-right\">
                                                    <button type=\"button\" id=\"button-review\"
                                                            data-loading-text=\"";
                // line 404
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\"
                                                            class=\"btn btn-primary\">";
                // line 405
                echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
                echo "</button>
                                                </div>
                                            </div>
                                        ";
            } else {
                // line 409
                echo "                                            ";
                echo (isset($context["text_login"]) ? $context["text_login"] : null);
                echo "
                                        ";
            }
            // line 411
            echo "                                    </form>
                                </div>
                            ";
        }
        // line 414
        echo "                        </div>
                    </div><!-- /.product-tabs -->

                    ";
        // line 417
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 418
            echo "                    <section class=\"section featured-product wow fadeInUp\">
                        <h3 class=\"section-title\">";
            // line 419
            echo (isset($context["text_related"]) ? $context["text_related"] : null);
            echo "</h3>
                        <div class=\"owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs\">
                            ";
            // line 421
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 422
                echo "                            <div class=\"item item-carousel\">
                                <div class=\"products\">

                                    <div class=\"product\">
                                        <div class=\"product-image\">
                                            <div class=\"image\">
                                                <a href=\"";
                // line 428
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
                // line 430
                if ($this->getAttribute($context["product"], "percent", array())) {
                    // line 431
                    echo "                                                <div class=\"tag sale\"><span>-";
                    echo $this->getAttribute($context["product"], "percent", array());
                    echo "%</span></div>
                                            ";
                }
                // line 433
                echo "                                        </div><!-- /.product-image -->


                                        <div class=\"product-info text-left\">
                                            <h3 class=\"name\"><a href=\"";
                // line 437
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h3>
                                            <div class=\"product-price\">
                                                ";
                // line 439
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 440
                    echo "                                                    ";
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 441
                        echo "                                                        <span class=\"price\"> ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo " </span>
                                                    ";
                    } else {
                        // line 443
                        echo "                                                        <span class=\"price\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span>
                                                        <span class=\"price-before-discount\">";
                        // line 444
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
                                                    ";
                    }
                    // line 446
                    echo "                                                ";
                }
                // line 447
                echo "                                            </div><!-- /.product-price -->
                                        </div><!-- /.product-info -->
                                        <div class=\"cart clearfix animate-effect\">
                                            <div class=\"action\">
                                                <ul class=\"list-unstyled\">
                                                    <li class=\"add-cart-button btn-group\">
                                                        <button onclick=\"cart.add('";
                // line 453
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" data-toggle=\"tooltip\" class=\"btn btn-primary icon\" type=\"button\" title=\"";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "\"> <i class=\"fa fa-shopping-cart\"></i> </button>
                                                    </li>
                                                    <li class=\"lnk wishlist\"> <a data-toggle=\"tooltip\" class=\"add-to-cart\" onclick=\"wishlist.add('";
                // line 455
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" title=\"";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\"> <i class=\"icon fa fa-heart\"></i> </a> </li>
                                                    <li class=\"lnk\"> <a data-toggle=\"tooltip\" class=\"add-to-cart\" onclick=\"compare.add('";
                // line 456
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
            // line 465
            echo "                        </div><!-- /.home-owl-carousel -->
                    </section><!-- /.section -->
                    ";
        }
        // line 468
        echo "                    ";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
                </div>
            </div>
            <!--  CONTENT : END  -->
        </div>
        <!-- /.row -->
        ";
        // line 474
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
    </div>
    <!-- /.container -->
</div>
<!-- /#top-banner-and-menu -->
";
        // line 479
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
        // line 559
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
        pickTime: false
    });

    \$('.datetime').datetimepicker({
        language: '";
        // line 564
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
        pickDate: true,
        pickTime: true
    });

    \$('.time').datetimepicker({
        language: '";
        // line 570
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
        // line 637
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');

    \$('#button-review').on('click', function () {
        \$.ajax({
            url: 'index.php?route=product/product/write&product_id=";
        // line 641
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
        // line 679
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "__string_template__5570a9104da778fe9b252bb69111ba2523f8778998f0ff50c33d48f408f114b5";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1506 => 679,  1465 => 641,  1458 => 637,  1388 => 570,  1379 => 564,  1371 => 559,  1288 => 479,  1280 => 474,  1270 => 468,  1265 => 465,  1248 => 456,  1242 => 455,  1235 => 453,  1227 => 447,  1224 => 446,  1219 => 444,  1214 => 443,  1208 => 441,  1205 => 440,  1203 => 439,  1194 => 437,  1188 => 433,  1182 => 431,  1180 => 430,  1167 => 428,  1159 => 422,  1155 => 421,  1150 => 419,  1147 => 418,  1145 => 417,  1140 => 414,  1135 => 411,  1129 => 409,  1122 => 405,  1118 => 404,  1111 => 400,  1106 => 398,  1093 => 388,  1089 => 387,  1081 => 382,  1075 => 379,  1065 => 372,  1061 => 371,  1057 => 369,  1055 => 368,  1051 => 367,  1046 => 364,  1043 => 363,  1038 => 360,  1031 => 358,  1022 => 355,  1018 => 354,  1015 => 353,  1011 => 352,  1004 => 348,  1000 => 346,  996 => 345,  992 => 343,  990 => 342,  987 => 341,  978 => 339,  971 => 338,  961 => 337,  957 => 336,  953 => 335,  950 => 334,  948 => 333,  944 => 332,  939 => 329,  933 => 327,  930 => 326,  924 => 324,  922 => 323,  918 => 322,  907 => 313,  896 => 305,  880 => 292,  873 => 288,  868 => 286,  860 => 285,  855 => 282,  849 => 281,  845 => 280,  842 => 279,  840 => 278,  837 => 277,  831 => 276,  829 => 275,  824 => 273,  820 => 272,  815 => 270,  810 => 268,  806 => 267,  803 => 266,  797 => 262,  786 => 260,  782 => 259,  778 => 258,  772 => 255,  769 => 254,  766 => 253,  763 => 252,  757 => 251,  747 => 244,  743 => 243,  739 => 242,  732 => 240,  724 => 238,  721 => 237,  711 => 230,  707 => 229,  703 => 228,  696 => 226,  688 => 224,  685 => 223,  675 => 216,  671 => 215,  667 => 214,  660 => 212,  652 => 210,  649 => 209,  643 => 206,  639 => 205,  635 => 204,  630 => 202,  626 => 201,  622 => 200,  615 => 199,  612 => 198,  606 => 195,  602 => 194,  598 => 193,  594 => 192,  588 => 191,  580 => 189,  577 => 188,  571 => 185,  565 => 184,  561 => 183,  555 => 182,  547 => 180,  544 => 179,  539 => 176,  531 => 174,  524 => 173,  522 => 172,  517 => 171,  504 => 169,  498 => 168,  494 => 167,  490 => 166,  485 => 163,  479 => 162,  475 => 161,  468 => 160,  465 => 159,  460 => 156,  452 => 154,  445 => 153,  443 => 152,  438 => 151,  425 => 149,  419 => 148,  415 => 147,  411 => 146,  406 => 143,  400 => 142,  396 => 141,  389 => 140,  386 => 139,  381 => 136,  374 => 134,  367 => 133,  365 => 132,  358 => 131,  354 => 130,  350 => 129,  346 => 128,  342 => 127,  336 => 126,  328 => 124,  325 => 123,  321 => 122,  317 => 121,  314 => 120,  312 => 119,  309 => 118,  305 => 116,  302 => 115,  291 => 113,  287 => 112,  282 => 109,  280 => 108,  277 => 107,  270 => 103,  266 => 102,  262 => 100,  256 => 97,  253 => 96,  251 => 95,  248 => 94,  246 => 93,  234 => 87,  226 => 85,  224 => 84,  217 => 83,  207 => 81,  205 => 80,  199 => 77,  195 => 75,  188 => 70,  185 => 69,  171 => 65,  167 => 64,  164 => 63,  159 => 62,  156 => 61,  145 => 57,  141 => 55,  139 => 54,  134 => 51,  131 => 50,  117 => 46,  111 => 45,  106 => 44,  101 => 43,  98 => 42,  87 => 38,  81 => 37,  78 => 36,  76 => 35,  70 => 31,  68 => 30,  56 => 21,  42 => 9,  31 => 7,  27 => 6,  19 => 1,);
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
/*                                                         <span style="text-decoration: line-through;font-size:20px ;">{{ price }}</span>*/
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

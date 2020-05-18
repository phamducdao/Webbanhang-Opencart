<?php

/* __string_template__3128ff08f327ddbaed7d6dfea60e4bd34df4b22c59fecf494a38d42f98c73d55 */
class __TwigTemplate_2c7ef1ce46af250b5634d4702b147d168058d45695a61afaae2032297fefec0a extends Twig_Template
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
           
            <!--  SIDEBAR : END  -->
            <!--  CONTENT  -->
            <div class=\"col-xs-12 col-sm-12 col-md-9\">
                <div id=\"content\">

                    <div class=\"detail-block\">
                        <div class=\"row  wow fadeInUp\">
                            ";
        // line 28
        if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["images"]) ? $context["images"] : null))) {
            // line 29
            echo "                            <div class=\"col-xs-12 col-sm-6 col-md-5 gallery-holder\">
                                <div class=\"product-item-holder size-big single-product-gallery small-gallery\">

                                    <div id=\"owl-single-product\">
                                        ";
            // line 33
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 34
                echo "                                        <div class=\"single-product-gallery-item\" id=\"slide-thumb\">
                                            <a data-lightbox=\"image-1\" data-title=\"";
                // line 35
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" href=\"";
                echo (isset($context["popup"]) ? $context["popup"] : null);
                echo "\">
                                                <img class=\"img-responsive\" alt=\"";
                // line 36
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
            // line 40
            echo "                                        ";
            if ((isset($context["images"]) ? $context["images"] : null)) {
                // line 41
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
                foreach ($context['_seq'] as $context["key"] => $context["image"]) {
                    // line 42
                    echo "                                            <div class=\"single-product-gallery-item\" id=\"slide-image-";
                    echo $context["key"];
                    echo "\">
                                                <a data-lightbox=\"image-1\" data-title=\"";
                    // line 43
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" href=\"";
                    echo $this->getAttribute($context["image"], "popup", array());
                    echo "\">
                                                    <img class=\"img-responsive\" alt=\"";
                    // line 44
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
                // line 48
                echo "                                        ";
            }
            // line 49
            echo "                                    </div><!-- /.single-product-slider -->
                                    <div class=\"single-product-gallery-thumbs gallery-thumbs\">
                                        <div id=\"owl-single-product-thumbnails\">
                                            ";
            // line 52
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 53
                echo "                                                <div class=\"item\">
                                                    <a class=\"horizontal-thumb active\" data-target=\"#owl-single-product\" data-slide=\"1\" >
                                                        <img class=\"img-responsive\" width=\"85\" alt=\"";
                // line 55
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
            // line 59
            echo "                                            ";
            if ((isset($context["images"]) ? $context["images"] : null)) {
                // line 60
                echo "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
                foreach ($context['_seq'] as $context["key"] => $context["image"]) {
                    // line 61
                    echo "                                                    <div class=\"item\">
                                                        <a class=\"horizontal-thumb active\" data-target=\"#owl-single-product\" data-slide=\"1\" >
                                                            <img class=\"img-responsive\" width=\"85\" alt=\"";
                    // line 63
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
                // line 67
                echo "                                            ";
            }
            // line 68
            echo "                                        </div><!-- /#owl-single-product-thumbnails -->
                                    </div><!-- /.gallery-thumbs -->
                                </div><!-- /.single-product-gallery -->
                            </div><!-- /.gallery-holder -->
                            ";
        }
        // line 73
        echo "                            <div class='col-sm-6 col-md-7 product-info-block'>
                                <div class=\"product-info\">
                                    <h1 class=\"name\">";
        // line 75
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
                                  <div class=\"rating\">
                                                <div class=\"product-rate-out clearfix\">
                                                 <div class=\"product-rate\">
                                                   <div class=\"product-rating\" style=\"width: 90%;height: 14px;
    background-repeat: repeat-x;
    background-image: url(../images/theme/rating-stars.png);
    background-position: 0 0;\"></div>
                                                 </div>
                                                 <span class=\"point\">( 4.7 sao - 116 lượt đánh giá )</span>
                                                </div>
                                               
                                                <!-- AddThis Button BEGIN -->
                                                <div class=\"addthis_toolbox addthis_default_style\" data-url=\"";
        // line 88
        echo (isset($context["share"]) ? $context["share"] : null);
        echo "\"><a
                                                            class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a> <a
                                                            class=\"addthis_button_tweet\"></a> <a class=\"addthis_button_pinterest_pinit\"></a>
                                                    <a class=\"addthis_counter addthis_pill_style\"></a></div>
                                                <script type=\"text/javascript\"
                                                        src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e\"></script>
                                                <!-- AddThis Button END -->
                                            </div>
                                    <div class=\"product-info-description\">
                                        <ul class=\"list-unstyled\"> 
                                            ";
        // line 98
        if ((isset($context["manufacturer"]) ? $context["manufacturer"] : null)) {
            // line 99
            echo "                                                <li>";
            echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
            echo " <a href=\"";
            echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
            echo "\">";
            echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
            echo "</a></li>
                                            ";
        }
        // line 101
        echo "                                            <li>";
        echo (isset($context["text_model"]) ? $context["text_model"] : null);
        echo " ";
        echo (isset($context["model"]) ? $context["model"] : null);
        echo "</li>
                                            ";
        // line 102
        if ((isset($context["reward"]) ? $context["reward"] : null)) {
            // line 103
            echo "                                                <li>";
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo " ";
            echo (isset($context["reward"]) ? $context["reward"] : null);
            echo "</li>
                                            ";
        }
        // line 105
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
        // line 111
        if ((isset($context["price"]) ? $context["price"] : null)) {
            // line 112
            echo "                                            <ul class=\"list-unstyled\">
                                                ";
            // line 113
            if ( !(isset($context["special"]) ? $context["special"] : null)) {
                // line 114
                echo "                                                    <li> Giá bán:
                                                      <span style=\"color:red ; font-size:20px;\">";
                // line 115
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</span>
                                                    </li>
                                                ";
            } else {
                // line 118
                echo "                                                    
                                                    <li> Giá bán:
                                                      <span style=\"color:red ; font-size:20px;\">";
                // line 120
                echo (isset($context["special"]) ? $context["special"] : null);
                echo "</span>
                                                      <span style=\"text-decoration: line-through;font-size:12px ;color:#d3d3d3 ;\">";
                // line 121
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</span>
                                                      <div style=\"height: 30px;background: #ff7878; width: 36px;border-radius: 16px;margin-left: 219px;margin-top: -27px;\"><span style=\"color:white ;font-size:11px;margin-left:4px;\">";
                // line 122
                echo (isset($context["percent"]) ? $context["percent"] : null);
                echo "</span><div>
                                                      

                                                    </li>
                                                ";
            }
            // line 127
            echo "                                               
                                                ";
            // line 128
            if ((isset($context["discounts"]) ? $context["discounts"] : null)) {
                // line 129
                echo "                                                    <li>
                                                        <hr>
                                                    </li>
                                                    ";
                // line 132
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["discounts"]) ? $context["discounts"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 133
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
                // line 135
                echo "                                                ";
            }
            // line 136
            echo "                                            </ul>
                                        ";
        }
        // line 138
        echo "                                        <div id=\"product\">
                                            ";
        // line 139
        if ((isset($context["options"]) ? $context["options"] : null)) {
            // line 140
            echo "                                                <hr>
                                                <h3>";
            // line 141
            echo (isset($context["text_option"]) ? $context["text_option"] : null);
            echo "</h3>
                                                ";
            // line 142
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 143
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "select")) {
                    // line 144
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\"
                                                                   for=\"input-option";
                    // line 146
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <select name=\"option[";
                    // line 147
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\"
                                                                    id=\"input-option";
                    // line 148
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">
                                                                <option value=\"\">";
                    // line 149
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
                                                                ";
                    // line 150
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 151
                        echo "                                                                    <option value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                                                                        ";
                        // line 152
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 153
                            echo "                                                                            (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                                                                        ";
                        }
                        // line 154
                        echo " </option>
                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 156
                    echo "                                                            </select>
                                                        </div>
                                                    ";
                }
                // line 159
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "radio")) {
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
                        echo "                                                                    <div class=\"radio\">
                                                                        <label>
                                                                            <input type=\"radio\"
                                                                                   name=\"option[";
                        // line 166
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\"
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
                if (($this->getAttribute($context["option"], "type", array()) == "checkbox")) {
                    // line 180
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\">";
                    // line 181
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <div id=\"input-option";
                    // line 182
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 183
                        echo "                                                                    <div class=\"checkbox\">
                                                                        <label>
                                                                            <input type=\"checkbox\"
                                                                                   name=\"option[";
                        // line 186
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "][]\"
                                                                                   value=\"";
                        // line 187
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\"/>
                                                                            ";
                        // line 188
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\"
                                                                                                             alt=\"";
                            // line 189
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
                        // line 191
                        echo "                                                                            ";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                                                                            ";
                        // line 192
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 193
                            echo "                                                                                (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                                                                            ";
                        }
                        // line 194
                        echo " </label>
                                                                    </div>
                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 196
                    echo " </div>
                                                        </div>
                                                    ";
                }
                // line 199
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "text")) {
                    // line 200
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\"
                                                                   for=\"input-option";
                    // line 202
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <input type=\"text\" name=\"option[";
                    // line 203
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\"
                                                                   value=\"";
                    // line 204
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\"
                                                                   id=\"input-option";
                    // line 205
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\"/>
                                                        </div>
                                                    ";
                }
                // line 208
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "textarea")) {
                    // line 209
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\"
                                                                   for=\"input-option";
                    // line 211
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <textarea name=\"option[";
                    // line 212
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" rows=\"5\"
                                                                      placeholder=\"";
                    // line 213
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\"
                                                                      id=\"input-option";
                    // line 214
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"
                                                                      class=\"form-control\">";
                    // line 215
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</textarea>
                                                        </div>
                                                    ";
                }
                // line 218
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "file")) {
                    // line 219
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\">";
                    // line 220
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <button type=\"button\" id=\"button-upload";
                    // line 221
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"
                                                                    data-loading-text=\"";
                    // line 222
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\"
                                                                    class=\"btn btn-default btn-block\"><i
                                                                        class=\"fa fa-upload\"></i> ";
                    // line 224
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
                                                            <input type=\"hidden\" name=\"option[";
                    // line 225
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"\"
                                                                   id=\"input-option";
                    // line 226
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"/>
                                                        </div>
                                                    ";
                }
                // line 229
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "date")) {
                    // line 230
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\"
                                                                   for=\"input-option";
                    // line 232
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <div class=\"input-group date\">
                                                                <input type=\"text\" name=\"option[";
                    // line 234
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\"
                                                                       value=\"";
                    // line 235
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\"
                                                                       id=\"input-option";
                    // line 236
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"
                                                                       class=\"form-control\"/>
                                                                <span class=\"input-group-btn\">
                                                                    <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                                                                </span></div>
                                                        </div>
                                                    ";
                }
                // line 243
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "datetime")) {
                    // line 244
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\"
                                                                   for=\"input-option";
                    // line 246
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <div class=\"input-group datetime\">
                                                                <input type=\"text\" name=\"option[";
                    // line 248
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\"
                                                                       value=\"";
                    // line 249
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\"
                                                                       id=\"input-option";
                    // line 250
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"
                                                                       class=\"form-control\"/>
                                                                <span class=\"input-group-btn\">
                                                                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                                                                </span></div>
                                                        </div>
                                                    ";
                }
                // line 257
                echo "                                                    ";
                if (($this->getAttribute($context["option"], "type", array()) == "time")) {
                    // line 258
                    echo "                                                        <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                                                            <label class=\"control-label\"
                                                                   for=\"input-option";
                    // line 260
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                                                            <div class=\"input-group time\">
                                                                <input type=\"text\" name=\"option[";
                    // line 262
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\"
                                                                       value=\"";
                    // line 263
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"HH:mm\"
                                                                       id=\"input-option";
                    // line 264
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"
                                                                       class=\"form-control\"/>
                                                                <span class=\"input-group-btn\">
                                                                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                                                                </span></div>
                                                        </div>
                                                    ";
                }
                // line 271
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 272
            echo "                                            ";
        }
        // line 273
        echo "                                            ";
        if ((isset($context["recurrings"]) ? $context["recurrings"] : null)) {
            // line 274
            echo "                                                <hr>
                                                <h3>";
            // line 275
            echo (isset($context["text_payment_recurring"]) ? $context["text_payment_recurring"] : null);
            echo "</h3>
                                                <div class=\"form-group required\">
                                                    <select name=\"recurring_id\" class=\"form-control\">
                                                        <option value=\"\">";
            // line 278
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
                                                        ";
            // line 279
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 280
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
            // line 282
            echo "                                                    </select>
                                                    <div class=\"help-block\" id=\"recurring-description\"></div>
                                                </div>
                                            ";
        }
        // line 286
        echo "                                            <div class=\"form-group\">
                                                <label class=\"control-label\" for=\"input-quantity\">";
        // line 287
        echo (isset($context["entry_qty"]) ? $context["entry_qty"] : null);
        echo "</label>
                                                <input style=\"width:16% ;\" type=\"text\" name=\"quantity\" value=\"";
        // line 288
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo "\" size=\"2\" id=\"input-quantity\"
                                                       class=\"form-control\" />
                                                <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 290
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "\"/>
                                                
                                                <button style=\"background-color: red;width:30%;margin-left: 19%;margin-top: -7%;border-radius: 6px;\" type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 292
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\"
                                                        class=\"btn btn-primary btn-lg btn-block\">";
        // line 293
        echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
        echo "</button>
                                                 <button style=\"background-color: #e97826 ; width:36%;margin-left: 50%;margin-top: -7%;border-radius: 6px;\" type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 294
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\"
                                                        class=\"btn btn-primary btn-lg btn-block\">Đặt hàng nhanh</button>
                                            </div>
                                            ";
        // line 297
        if (((isset($context["minimum"]) ? $context["minimum"] : null) > 1)) {
            // line 298
            echo "                                                <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo (isset($context["text_minimum"]) ? $context["text_minimum"] : null);
            echo "</div>
                                            ";
        }
        // line 299
        echo "</div>
                                        ";
        // line 300
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 301
            echo "                                            
                                      <div class=\"boxcust\">
\t    \t\t\t\t\t\t\t\t<span id=\"alertcallforme\"></span>
\t    \t\t\t\t\t\t\t\t<h4>TƯ VẤN NHANH</h4>
                                        <form method=\"post\" action=\"http://zombiegarden.club/index.php?route=test/test\">
\t    \t\t\t\t\t\t\t\t<span id=\"formcallme\"></span>
                                        <input type=\"text\" value=\"";
            // line 307
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
        // line 315
        echo "                                    </div>
                                </div><!-- /.product-info -->
                            </div><!-- /.col-sm-7 -->
                        </div><!-- /.row -->
                    </div>

                    <div class=\"product-tabs inner-bottom-xs  wow fadeInUp\" style=\"padding: 10px;\">
                        <ul class=\"nav nav-tabs\">
                            <li class=\"active\">
                                <a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 324
        echo (isset($context["tab_description"]) ? $context["tab_description"] : null);
        echo "</a></li>
                            ";
        // line 325
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 326
            echo "                                <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo (isset($context["tab_attribute"]) ? $context["tab_attribute"] : null);
            echo "</a></li>
                            ";
        }
        // line 328
        echo "                            ";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 329
            echo "                                <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo (isset($context["tab_review"]) ? $context["tab_review"] : null);
            echo "</a></li>
                            ";
        }
        // line 331
        echo "                        </ul>
                        <div class=\"tab-content\">
                            <div class=\"tab-pane active\" id=\"tab-description\">
                                ";
        // line 334
        echo (isset($context["description"]) ? $context["description"] : null);
        echo "
                                ";
        // line 335
        if ((isset($context["tags"]) ? $context["tags"] : null)) {
            // line 336
            echo "                                    <hr>
                                    <p>";
            // line 337
            echo (isset($context["text_tags"]) ? $context["text_tags"] : null);
            echo "
                                        ";
            // line 338
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 339
                echo "                                            ";
                if (($context["i"] < (twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null)) - 1))) {
                    echo " <a href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                    echo "</a>,
                                            ";
                } else {
                    // line 340
                    echo " <a href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                    echo "</a> ";
                }
                // line 341
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
                                ";
        }
        // line 343
        echo "                            </div>
                            ";
        // line 344
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 345
            echo "                                <div class=\"tab-pane\" id=\"tab-specification\">
                                    <table class=\"table table-bordered\">
                                        ";
            // line 347
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 348
                echo "                                            <thead>
                                            <tr>
                                                <td colspan=\"2\"><strong>";
                // line 350
                echo $this->getAttribute($context["attribute_group"], "name", array());
                echo "</strong></td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
                // line 354
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attribute_group"], "attribute", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 355
                    echo "                                                <tr>
                                                    <td>";
                    // line 356
                    echo $this->getAttribute($context["attribute"], "name", array());
                    echo "</td>
                                                    <td>";
                    // line 357
                    echo $this->getAttribute($context["attribute"], "text", array());
                    echo "</td>
                                                </tr>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 360
                echo "                                            </tbody>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 362
            echo "                                    </table>
                                </div>
                            ";
        }
        // line 365
        echo "                            ";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 366
            echo "                                <div class=\"tab-pane\" id=\"tab-review\">
                                    <form class=\"form-horizontal\" id=\"form-review\">
                                        <div id=\"review\"></div>
                                        <h2>";
            // line 369
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</h2>
                                        ";
            // line 370
            if ((isset($context["review_guest"]) ? $context["review_guest"] : null)) {
                // line 371
                echo "                                            <div class=\"form-group required\">
                                                <div class=\"col-sm-12\">
                                                    <label class=\"control-label\" for=\"input-name\">";
                // line 373
                echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
                echo "</label>
                                                    <input type=\"text\" name=\"name\" value=\"";
                // line 374
                echo (isset($context["customer_name"]) ? $context["customer_name"] : null);
                echo "\"
                                                           id=\"input-name\" class=\"form-control\"/>
                                                </div>
                                            </div>
                                            <div class=\"form-group required\">
                                                <div class=\"col-sm-12\">
                                                    <label class=\"control-label\"
                                                           for=\"input-review\">";
                // line 381
                echo (isset($context["entry_review"]) ? $context["entry_review"] : null);
                echo "</label>
                                                    <textarea name=\"text\" rows=\"5\" id=\"input-review\"
                                                              class=\"form-control\"></textarea>
                                                    <div class=\"help-block\">";
                // line 384
                echo (isset($context["text_note"]) ? $context["text_note"] : null);
                echo "</div>
                                                </div>
                                            </div>
                                            <div class=\"form-group required\">
                                                <div class=\"col-sm-12\">
                                                    <label class=\"control-label\">";
                // line 389
                echo (isset($context["entry_rating"]) ? $context["entry_rating"] : null);
                echo "</label>
                                                    &nbsp;&nbsp;&nbsp; ";
                // line 390
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
                // line 400
                echo (isset($context["entry_good"]) ? $context["entry_good"] : null);
                echo "</div>
                                            </div>
                                            ";
                // line 402
                echo (isset($context["captcha"]) ? $context["captcha"] : null);
                echo "
                                            <div class=\"buttons clearfix\">
                                                <div class=\"pull-right\">
                                                    <button type=\"button\" id=\"button-review\"
                                                            data-loading-text=\"";
                // line 406
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\"
                                                            class=\"btn btn-primary\">";
                // line 407
                echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
                echo "</button>
                                                </div>
                                            </div>
                                        ";
            } else {
                // line 411
                echo "                                            ";
                echo (isset($context["text_login"]) ? $context["text_login"] : null);
                echo "
                                        ";
            }
            // line 413
            echo "                                    </form>
                                </div>
                            ";
        }
        // line 416
        echo "                        </div>
                    </div><!-- /.product-tabs -->

                    ";
        // line 419
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 420
            echo "                    <section class=\"section featured-product wow fadeInUp\">
                        <h3 class=\"section-title\">";
            // line 421
            echo (isset($context["text_related"]) ? $context["text_related"] : null);
            echo "</h3>
                        <div class=\"owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs\">
                            ";
            // line 423
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 424
                echo "                            <div class=\"item item-carousel\">
                                <div class=\"products\">

                                    <div class=\"product\">
                                        <div class=\"product-image\">
                                            <div class=\"image\">
                                                <a href=\"";
                // line 430
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
                // line 432
                if ($this->getAttribute($context["product"], "percent", array())) {
                    // line 433
                    echo "                                                <div class=\"tag sale\"><span>-";
                    echo $this->getAttribute($context["product"], "percent", array());
                    echo "%</span></div>
                                            ";
                }
                // line 435
                echo "                                        </div><!-- /.product-image -->


                                        <div class=\"product-info text-left\">
                                            <h3 class=\"name\"><a href=\"";
                // line 439
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h3>
                                            <div class=\"product-price\">
                                                ";
                // line 441
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 442
                    echo "                                                    ";
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 443
                        echo "                                                        <span class=\"price\"> ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo " </span>
                                                    ";
                    } else {
                        // line 445
                        echo "                                                        <span class=\"price\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span>
                                                        <span class=\"price-before-discount\">";
                        // line 446
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
                                                    ";
                    }
                    // line 448
                    echo "                                                ";
                }
                // line 449
                echo "                                            </div><!-- /.product-price -->
                                        </div><!-- /.product-info -->
                                        <div class=\"cart clearfix animate-effect\">
                                            <div class=\"action\">
                                                <ul class=\"list-unstyled\">
                                                    <li class=\"add-cart-button btn-group\">
                                                        <button onclick=\"cart.add('";
                // line 455
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" data-toggle=\"tooltip\" class=\"btn btn-primary icon\" type=\"button\" title=\"";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "\"> <i class=\"fa fa-shopping-cart\"></i> </button>
                                                    </li>
                                                    <li class=\"lnk wishlist\"> <a data-toggle=\"tooltip\" class=\"add-to-cart\" onclick=\"wishlist.add('";
                // line 457
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" title=\"";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\"> <i class=\"icon fa fa-heart\"></i> </a> </li>
                                                    <li class=\"lnk\"> <a data-toggle=\"tooltip\" class=\"add-to-cart\" onclick=\"compare.add('";
                // line 458
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
            // line 467
            echo "                        </div><!-- /.home-owl-carousel -->
                    </section><!-- /.section -->
                    ";
        }
        // line 470
        echo "                    ";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
                </div>
            </div>
             <div class=\"col-xs-12 col-sm-12 col-md-3 sidebar\">
                ";
        // line 474
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
            </div>
            <!--  CONTENT : END  -->
        </div>
        <!-- /.row -->
        ";
        // line 479
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
    </div>
    <!-- /.container -->
</div>
<!-- /#top-banner-and-menu -->
";
        // line 484
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
        // line 564
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
        pickTime: false
    });

    \$('.datetime').datetimepicker({
        language: '";
        // line 569
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
        pickDate: true,
        pickTime: true
    });

    \$('.time').datetimepicker({
        language: '";
        // line 575
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
        // line 642
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');

    \$('#button-review').on('click', function () {
        \$.ajax({
            url: 'index.php?route=product/product/write&product_id=";
        // line 646
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
        // line 684
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "__string_template__3128ff08f327ddbaed7d6dfea60e4bd34df4b22c59fecf494a38d42f98c73d55";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1491 => 684,  1450 => 646,  1443 => 642,  1373 => 575,  1364 => 569,  1356 => 564,  1273 => 484,  1265 => 479,  1257 => 474,  1249 => 470,  1244 => 467,  1227 => 458,  1221 => 457,  1214 => 455,  1206 => 449,  1203 => 448,  1198 => 446,  1193 => 445,  1187 => 443,  1184 => 442,  1182 => 441,  1173 => 439,  1167 => 435,  1161 => 433,  1159 => 432,  1146 => 430,  1138 => 424,  1134 => 423,  1129 => 421,  1126 => 420,  1124 => 419,  1119 => 416,  1114 => 413,  1108 => 411,  1101 => 407,  1097 => 406,  1090 => 402,  1085 => 400,  1072 => 390,  1068 => 389,  1060 => 384,  1054 => 381,  1044 => 374,  1040 => 373,  1036 => 371,  1034 => 370,  1030 => 369,  1025 => 366,  1022 => 365,  1017 => 362,  1010 => 360,  1001 => 357,  997 => 356,  994 => 355,  990 => 354,  983 => 350,  979 => 348,  975 => 347,  971 => 345,  969 => 344,  966 => 343,  957 => 341,  950 => 340,  940 => 339,  936 => 338,  932 => 337,  929 => 336,  927 => 335,  923 => 334,  918 => 331,  912 => 329,  909 => 328,  903 => 326,  901 => 325,  897 => 324,  886 => 315,  875 => 307,  867 => 301,  865 => 300,  862 => 299,  856 => 298,  854 => 297,  848 => 294,  844 => 293,  840 => 292,  835 => 290,  830 => 288,  826 => 287,  823 => 286,  817 => 282,  806 => 280,  802 => 279,  798 => 278,  792 => 275,  789 => 274,  786 => 273,  783 => 272,  777 => 271,  767 => 264,  763 => 263,  759 => 262,  752 => 260,  744 => 258,  741 => 257,  731 => 250,  727 => 249,  723 => 248,  716 => 246,  708 => 244,  705 => 243,  695 => 236,  691 => 235,  687 => 234,  680 => 232,  672 => 230,  669 => 229,  663 => 226,  659 => 225,  655 => 224,  650 => 222,  646 => 221,  642 => 220,  635 => 219,  632 => 218,  626 => 215,  622 => 214,  618 => 213,  614 => 212,  608 => 211,  600 => 209,  597 => 208,  591 => 205,  585 => 204,  581 => 203,  575 => 202,  567 => 200,  564 => 199,  559 => 196,  551 => 194,  544 => 193,  542 => 192,  537 => 191,  524 => 189,  518 => 188,  514 => 187,  510 => 186,  505 => 183,  499 => 182,  495 => 181,  488 => 180,  485 => 179,  480 => 176,  472 => 174,  465 => 173,  463 => 172,  458 => 171,  445 => 169,  439 => 168,  435 => 167,  431 => 166,  426 => 163,  420 => 162,  416 => 161,  409 => 160,  406 => 159,  401 => 156,  394 => 154,  387 => 153,  385 => 152,  378 => 151,  374 => 150,  370 => 149,  366 => 148,  362 => 147,  356 => 146,  348 => 144,  345 => 143,  341 => 142,  337 => 141,  334 => 140,  332 => 139,  329 => 138,  325 => 136,  322 => 135,  311 => 133,  307 => 132,  302 => 129,  300 => 128,  297 => 127,  289 => 122,  285 => 121,  281 => 120,  277 => 118,  271 => 115,  268 => 114,  266 => 113,  263 => 112,  261 => 111,  249 => 105,  241 => 103,  239 => 102,  232 => 101,  222 => 99,  220 => 98,  207 => 88,  191 => 75,  187 => 73,  180 => 68,  177 => 67,  163 => 63,  159 => 61,  154 => 60,  151 => 59,  140 => 55,  136 => 53,  134 => 52,  129 => 49,  126 => 48,  112 => 44,  106 => 43,  101 => 42,  96 => 41,  93 => 40,  82 => 36,  76 => 35,  73 => 34,  71 => 33,  65 => 29,  63 => 28,  42 => 9,  31 => 7,  27 => 6,  19 => 1,);
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
/*            */
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
/*                                                     <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" >*/
/*                                                         <img class="img-responsive" width="85" alt="{{ heading_title }}" src="{{ thumb }}" data-echo="{{ popup }}" />*/
/*                                                     </a>*/
/*                                                 </div>*/
/*                                             {% endif %}*/
/*                                             {% if images %}*/
/*                                                 {% for key, image in images %}*/
/*                                                     <div class="item">*/
/*                                                         <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" >*/
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
/*                                   <div class="rating">*/
/*                                                 <div class="product-rate-out clearfix">*/
/*                                                  <div class="product-rate">*/
/*                                                    <div class="product-rating" style="width: 90%;height: 14px;*/
/*     background-repeat: repeat-x;*/
/*     background-image: url(../images/theme/rating-stars.png);*/
/*     background-position: 0 0;"></div>*/
/*                                                  </div>*/
/*                                                  <span class="point">( 4.7 sao - 116 lượt đánh giá )</span>*/
/*                                                 </div>*/
/*                                                */
/*                                                 <!-- AddThis Button BEGIN -->*/
/*                                                 <div class="addthis_toolbox addthis_default_style" data-url="{{ share }}"><a*/
/*                                                             class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a*/
/*                                                             class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"></a>*/
/*                                                     <a class="addthis_counter addthis_pill_style"></a></div>*/
/*                                                 <script type="text/javascript"*/
/*                                                         src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e"></script>*/
/*                                                 <!-- AddThis Button END -->*/
/*                                             </div>*/
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
/*                                                       <span style="text-decoration: line-through;font-size:12px ;color:#d3d3d3 ;">{{ price }}</span>*/
/*                                                       <div style="height: 30px;background: #ff7878; width: 36px;border-radius: 16px;margin-left: 219px;margin-top: -27px;"><span style="color:white ;font-size:11px;margin-left:4px;">{{percent}}</span><div>*/
/*                                                       */
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
/*                                                 <input style="width:16% ;" type="text" name="quantity" value="{{ minimum }}" size="2" id="input-quantity"*/
/*                                                        class="form-control" />*/
/*                                                 <input type="hidden" name="product_id" value="{{ product_id }}"/>*/
/*                                                 */
/*                                                 <button style="background-color: red;width:30%;margin-left: 19%;margin-top: -7%;border-radius: 6px;" type="button" id="button-cart" data-loading-text="{{ text_loading }}"*/
/*                                                         class="btn btn-primary btn-lg btn-block">{{ button_cart }}</button>*/
/*                                                  <button style="background-color: #e97826 ; width:36%;margin-left: 50%;margin-top: -7%;border-radius: 6px;" type="button" id="button-cart" data-loading-text="{{ text_loading }}"*/
/*                                                         class="btn btn-primary btn-lg btn-block">Đặt hàng nhanh</button>*/
/*                                             </div>*/
/*                                             {% if minimum > 1 %}*/
/*                                                 <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_minimum }}</div>*/
/*                                             {% endif %}</div>*/
/*                                         {% if review_status %}*/
/*                                             */
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
/*              <div class="col-xs-12 col-sm-12 col-md-3 sidebar">*/
/*                 {{ column_left }}*/
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
